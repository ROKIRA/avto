<?php

class Old{

    /* СЛАЙДЕР АВТОМОБИЛЕЙ - НОВЫЕ АВТО */
    public function getSlideNewAction(){
        header('Content-Type: application/json');

        $request = $this->container->get('request');
        $page = $request->request->get('page');

        $slide = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');

        $start = $page*4 - 4;

        $query = $slide->createQueryBuilder('s')
            ->where('s.new = 1')
            ->getQuery()
            ->setFirstResult($start)
            ->setMaxResults(4);

        $cars = $query->getResult();

        $slide = array();

        if($cars){
            for($i = 0; $i < count($cars); $i++){
                $slide[$i]['id'] = $cars[$i]->getId();
                $slide[$i]['img'] = $cars[$i]->getImg();
                $slide[$i]['mark'] = $cars[$i]->getMark();
                $slide[$i]['model'] = $cars[$i]->getModel();
                $slide[$i]['year'] = $cars[$i]->getYear();
                $slide[$i]['run'] = $cars[$i]->getRun();
                $slide[$i]['price'] = $cars[$i]->getPrice();
            }
            $count_slide = count($cars);
        }else{
            $count_slide = 0;
        }

        $count_slide = count($cars);

        $response = array("code" => 100, "success" => true, 'slide' => $slide, 'countslide' => $count_slide,  );

        return new Response(json_encode($response));
    }

    /* СЛАЙДЕР АВТОМОБИЛЕЙ - Б/У АВТО */
    public function getSlideBUAction(){
        header('Content-Type: application/json');

        $request = $this->container->get('request');
        $page = $request->request->get('page');

        $slide = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');

        $start = $page*4 - 4;

        $query = $slide->createQueryBuilder('s')
            ->where('s.new = 0')
            ->getQuery()
            ->setFirstResult($start)
            ->setMaxResults(4);

        $cars = $query->getResult();

        $slide = array();

        if($cars){
            for($i = 0; $i < count($cars); $i++){
                $slide[$i]['id'] = $cars[$i]->getId();
                $slide[$i]['img'] = $cars[$i]->getImg();
                $slide[$i]['mark'] = $cars[$i]->getMark();
                $slide[$i]['model'] = $cars[$i]->getModel();
                $slide[$i]['year'] = $cars[$i]->getYear();
                $slide[$i]['run'] = $cars[$i]->getRun();
                $slide[$i]['price'] = $cars[$i]->getPrice();
            }
            $count_slide = count($cars);
        }else{
            $count_slide = 0;
        }

        $count_slide = count($cars);

        $response = array("code" => 100, "success" => true, 'slide' => $slide, 'countslide' => $count_slide,  );

        return new Response(json_encode($response));
    }
}