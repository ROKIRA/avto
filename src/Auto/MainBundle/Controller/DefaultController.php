<?php

namespace Auto\MainBundle\Controller;

use Auto\MainBundle\Form\Type\AddZayavkaAutoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\FilterAutoType;

class DefaultController extends Controller
{
    public function indexAction()
    {	

        $form_filter = $this->createForm(new FilterAutoType());
        $form_zayavka = $this->createForm(new AddZayavkaAutoType());

        // Слайдер автомобилей - новые авто
            $slider_new = $this->getDoctrine()
                ->getRepository('AutoMainBundle:Auto');
            $query = $slider_new->createQueryBuilder('s')
                ->where('s.new = 1')
                ->orderBy('s.id')
                ->getQuery();
            $slider_new = $query->getResult();

            if(count($slider_new) > 0){
                $slide_new_count = count($slider_new);
            }else{
                $slide_new_count = 0;
            }

        // Слайдер автомобилей - б/у авто
        $slider_bu = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');
        $query = $slider_bu->createQueryBuilder('s')
            ->where('s.new = 0')
            ->orderBy('s.id')
            ->getQuery();
        $slider_bu = $query->getResult();

        if(count($slider_bu) > 0){
            $slide_bu_count = count($slider_bu);
        }else{
            $slide_bu_count = 0;
        }

        // NEWS BLOCK
        $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Article');
        $query = $repository->createQueryBuilder('n')
            ->where("n.is_active = 1")
            ->orderBy('n.date', 'DESC')
            ->getQuery();
        $news = $query->getResult();

        return $this->render('AutoMainBundle:Default:index.html.twig',
               array('form_filter' => $form_filter->createView(),
                   'form_zayavka' => $form_zayavka->createView(),
                   'slider_new' => $slider_new,
                   'slidecount_new' => $slide_new_count,
                   'slider_bu' => $slider_bu,
                   'slidecount_bu' => $slide_bu_count,
                   'news' => $news,
               ));

    }

}


