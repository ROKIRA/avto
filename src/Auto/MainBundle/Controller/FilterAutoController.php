<?php

namespace Auto\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilterAutoController extends Controller
{
    public function indexAction()
    {
        if(isset($_POST['find'])){

            $params ='';

            if(isset($_POST['filter_auto']['price_from']) AND !empty($_POST['filter_auto']['price_from'])){
                $pricefrom = abs((int)$_POST['filter_auto']['price_from']);
            }else{
                $pricefrom = 0;
            }
            $params .= "a.price >= ".$pricefrom ." ";

            if(isset($_POST['filter_auto']['price_to']) AND !empty($_POST['filter_auto']['price_to'])){
                $priceto = abs((int)$_POST['filter_auto']['price_to']);
            }else{
                $priceto = 100000000;
            }
            $params .= "AND a.price <= ".$priceto ." ";

            if(isset($_POST['filter_auto']['mark']) && ($_POST['filter_auto']['mark'] != '0')){
                $mark_id = $_POST['filter_auto']['mark'];
                $mark = $this->getDoctrine()
                    ->getRepository('AutoMainBundle:Marka');
                $query = $mark->createQueryBuilder('m')
                    ->select('m.mark')
                    ->where("m.id = $mark_id")
                    ->getQuery();
                $mark = $query->getResult();
                $mark = $mark[0]['mark'];
                $params .= "AND a.mark = '$mark' ";
            }

            if(isset($_POST['filter_auto']['model']) && ($_POST['filter_auto']['model'] != '0')){
                $model_id = $_POST['filter_auto']['model'];
                $model = $this->getDoctrine()
                    ->getRepository('AutoMainBundle:Model');
                $query = $model->createQueryBuilder('m')
                    ->select('m.model')
                    ->where("m.id = $model_id")
                    ->getQuery();
                $model = $query->getResult();
                $model = $model[0]['model'];
                $params .= "AND a.model = '$model' ";
            }

            if(isset($_POST['filter_auto']['region']) && ($_POST['filter_auto']['region'] != '0')){
                $region_id = $_POST['filter_auto']['region'];
                $region = $this->getDoctrine()
                    ->getRepository('AutoMainBundle:Region');
                $query = $region->createQueryBuilder('r')
                    ->select('r.name')
                    ->where("r.id = $region_id")
                    ->getQuery();
                $region = $query->getResult();
                $region = $region[0]['name'];
                $params .= "AND a.region = '$region' ";
            }

            if(isset($_POST['filter_auto']['year_from']) AND !empty($_POST['filter_auto']['year_from'])){
                $yearfrom = abs((int)$_POST['filter_auto']['year_from']);
            }else{
                $yearfrom = 1900;
            }
            $params .= "AND a.year >= ".$yearfrom ." ";

            if(isset($_POST['filter_auto']['year_to']) AND !empty($_POST['filter_auto']['year_to'])){
                $yeareto = abs((int)$_POST['filter_auto']['year_to']);
            }else{
                $yeareto = date('Y');
            }
            $params .= "AND a.year <= ".$yeareto ." ";

            if(isset($_POST['filter_auto']['new'])){
                $new = $_POST['filter_auto']['new'];
                $params .= "AND a.new = $new";
            }

            if(isset($_POST['filter_auto']['photo'])){
                $params .= "AND a.img != 'no_image.jpg'";
            }

            $auto = $this->getDoctrine()
                ->getRepository('AutoMainBundle:Auto');

            $query = $auto->createQueryBuilder('a')
                          ->where("$params")
                          ->getQuery();

            $auto = $query->getResult();

            return $this->render('AutoMainBundle:Default:filter.html.twig',
                array('auto' => $auto, ));

        }else{
            return $this->redirect($this->generateUrl('auto_main_homepage'));
        }
    }
}