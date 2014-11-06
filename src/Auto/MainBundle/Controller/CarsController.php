<?php

namespace Auto\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\FilterAutoType;

class CarsController extends Controller
{
    public function indexAction($page)
    {
        $form = $this->createForm(new FilterAutoType());

        // параметры для постраничной навигации
        if(!$page || $page < 1){ $page = 1; }
        $perpage = 3; // количество авто на страницу

        $countcars = $auto = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');
        $query = $countcars->createQueryBuilder('c')
            ->select('c.id, COUNT(c.id) as countcars')
            ->getQuery();
        $countcars = $query->getResult();
        $countcars = $countcars[0]['countcars']; // общее количество автомобилей

        $pagescount = ceil($countcars / $perpage); // общее количество страниц
        if(!$pagescount) $pagescount = 1; // минимум 1 страница (не может быть 0 страницы)
        if($page > $pagescount) $page = $pagescount; // страница не может быть больше их количества
        $start_pos = ($page - 1) * $perpage; // начальная позиция для запроса (LIMIT $start_pos, $perpage)


        // Слайдер автомобилей - первые 4 элемента новых авто
        $slider_new = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');
        $query = $slider_new->createQueryBuilder('s')
            ->where('s.new = 1')
            ->orderBy('s.id')
            ->getQuery()
            ->setMaxResults(4);
        $slider_new = $query->getResult();

        if(count($slider_new) > 0){
            $slide_new_count = count($slider_new);
        }else{
            $slide_new_count = 0;
        }

        // Слайдер автомобилей - первые 4 элемента б/у авто
        $slider_bu = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');
        $query = $slider_bu->createQueryBuilder('s')
            ->where('s.new = 0')
            ->orderBy('s.id')
            ->getQuery()
            ->setMaxResults(4);
        $slider_bu = $query->getResult();

        if(count($slider_bu) > 0){
            $slide_bu_count = count($slider_bu);
        }else{
            $slide_bu_count = 0;
        }


        if(isset($_POST['find'])){

            $params ='';

            if(isset($_POST['filter_auto']['from']) AND !empty($_POST['filter_auto']['from'])){
                $from = $_POST['filter_auto']['from'];

            }else{
                $from = 0;
            }
            $params .= "a.price >= ".$from ." ";

            if(isset($_POST['filter_auto']['to']) AND !empty($_POST['filter_auto']['to'])){
                $to = $_POST['filter_auto']['to'];
            }else{
                $to = 10000000;
            }
            $params .= "AND a.price <= ".$to ." ";

            if(isset($_POST['filter_auto']['run']) AND !empty($_POST['filter_auto']['run'])){
                $run = $_POST['filter_auto']['run'];
            }else{
                $run = 10000000;
            }
            $params .= "AND a.run <= ".$run ." ";

            if(isset($_POST['filter_auto']['new'])){
                $params .= 'AND a.new = 1';
                $new = 1;
            }

            $auto = $this->getDoctrine()
                ->getRepository('AutoMainBundle:Auto');

            $query = $auto->createQueryBuilder('a')
                ->where("$params")
                ->getQuery();

            $auto = $query->getResult();

            return $this->render('AutoMainBundle:Default:cars.html.twig',
                array('auto' => $auto, 'form' => $form->createView(), 'page' => $page, 'pagescount' => $pagescount, 'slider_new' => $slider_new, 'slidecount_new' => $slide_new_count, 'slider_bu' => $slider_bu, 'slidecount_bu' => $slide_bu_count));
        }else{
            $auto = $this->getDoctrine()
                ->getRepository('AutoMainBundle:Auto');
            $query = $auto->createQueryBuilder('a')
                ->getQuery()
                ->setFirstResult($start_pos)
                ->setMaxResults($perpage);

            $auto = $query->getResult();

            return $this->render('AutoMainBundle:Default:cars.html.twig',
                array('auto' => $auto, 'form' => $form->createView(), 'page' => $page, 'pagescount' => $pagescount, 'slider_new' => $slider_new, 'slidecount_new' => $slide_new_count, 'slider_bu' => $slider_bu, 'slidecount_bu' => $slide_bu_count));

        }


    }

}


