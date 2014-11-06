<?php

namespace Auto\MainBundle\Controller;

use Auto\MainBundle\Entity\Detail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\AddAutoType;
use Auto\MainBundle\Form\Type\AddDetailType;
use Auto\MainBundle\Entity\Auto;
use Auto\MainBundle\Entity\UserAuto;
use Symfony\Component\HttpFoundation\Request;

class AddController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('AutoMainBundle:Default:add.html.twig');
    }

    public function newAutoAction(Request $request)
    {
        $session = $this->get('session');

        $em = $this->getDoctrine()->getManager();

        $auto = new Auto();
        $user_auto = new UserAuto();
        $form = $this->createForm(new AddAutoType(), $auto);

        if ('POST' === $request->getMethod()) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                if(!empty($auto->file)){
                    $filename = $auto->file->getClientOriginalName();

                    $ext = '';
                    $i = mb_strlen($filename) - 1;
                    while ($filename[$i] != '.'){
                        $ext .= $filename[$i];
                        $i--;
                    }
                    $ext = '.'.strrev($ext);

                    $new_filename = uniqid().$ext;

                    $auto->file->move(__DIR__.'/../../../../web/bundles/auto/userfiles', $new_filename);
                    $auto->setImg($new_filename);
                }else{
                    $auto->setImg("no_image.jpg");
                }

                $em->persist($auto);
                $em->flush();

                $user_auto->setIdAuto($auto->getId());
                $user_auto->setIdUser($session->get('user_id'));
                $user_auto->setDate(new \DateTime('now'));

                $em->persist($user_auto);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Автомобиль успешно добавлен!'
                );

                return $this->redirect($this->generateUrl('auto_new'));
            }
        }

        return $this->render('AutoMainBundle:Default:add_auto.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function newDetailAction(Request $request)
    {
        $session = $this->get('session');

        $em = $this->getDoctrine()->getManager();

        $detail = new Detail();
        $user_auto = new UserAuto(); // user_detail --- fields are the same so I decided not to create other table
        $form = $this->createForm(new AddDetailType(), $detail);

        if ('POST' === $request->getMethod()) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                if(!empty($detail->file)){
                    $filename = $detail->file->getClientOriginalName();

                    $ext = '';
                    $i = mb_strlen($filename) - 1;
                    while ($filename[$i] != '.'){
                        $ext .= $filename[$i];
                        $i--;
                    }
                    $ext = '.'.strrev($ext);

                    $new_filename = uniqid().$ext;

                    $detail->file->move(__DIR__.'/../../../../web/bundles/auto/userfiles', $new_filename);
                    $detail->setImg($new_filename);
                }else{
                    $detail->setImg("no_image.jpg");
                }

                $em->persist($detail);
                $em->flush();

                $user_auto->setIdAuto($detail->getId());
                $user_auto->setIdUser($session->get('user_id'));
                $user_auto->setDate(new \DateTime('now'));

                $em->persist($user_auto);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Деталь успешно добавлена!'
                );

                return $this->redirect($this->generateUrl('auto_new'));
            }
        }

        return $this->render('AutoMainBundle:Default:add_detail.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}