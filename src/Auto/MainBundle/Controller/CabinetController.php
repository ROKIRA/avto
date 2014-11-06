<?php

namespace Auto\MainBundle\Controller;

use Auto\MainBundle\Entity\ZayavkaAuto;
use Auto\MainBundle\Form\Type\AddAutoType;
use Auto\MainBundle\Form\Type\AddZayavkaAutoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\RegUserType;
use Auto\MainBundle\Entity\User;
use Auto\MainBundle\Entity\Auto;
use Auto\MainBundle\Entity\UserAuto;
use Symfony\Component\HttpFoundation\Request;

class CabinetController extends Controller
{
    public function indexAction()
    {

        $session = $this->get('session');

        $user_id = $session->get('user_id');

        $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:UserAuto');
        $query = $repository->createQueryBuilder('u')
            ->where("u.id_user = :id")
            ->orderBy('u.date', 'DESC')
            ->setParameter('id', $user_id)
            ->getQuery();
        $user_auto = $query->getResult();

        $id_auto = array();
        foreach($user_auto as $i){
            $id_auto[] = $i->getIdAuto();
        }

        $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');
        $query = $repository->createQueryBuilder('a')
            ->where("a.id IN (:id)")
            ->setParameter('id', $id_auto)
            ->getQuery();
        $auto = $query->getResult();

        return $this->render('AutoMainBundle:Cabinet:cabinet.html.twig',
            array(
                'user_auto' => $user_auto,
                'auto' => $auto,
            ));

    }

    public function profileAction(Request $request)
    {
        $session = $this->get('session');

        $user_id = $session->get('user_id');

        if ('POST' === $request->getMethod()) {

            $user = new User();
            $form = $this->createForm(new RegUserType(), $user);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $old_user = $em->getRepository('AutoMainBundle:BaseUser')->find($user_id);

                if(!$old_user){
                    throw $this->createNotFoundException(
                        'Не найден пользователь с данным id: '.$user_id
                    );
                }
                $password = md5(sha1($user->getPassword()));
                if($old_user->getPassword() == $password){

                    $old_user->setName($user->getName());
                    $old_user->setEmail($user->getEmail());
                    $old_user->setPhone($user->getPhone());
                    $old_user->setRegion($user->getRegion());
                    $old_user->setCity($user->getCity());

                    $em->persist($old_user);
                    $em->flush();

                    $session->set('user_id', $old_user->getId());
                    $session->set('user_name', $old_user->getName());
                    $session->set('user_email', $old_user->getEmail());

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Изменения сохранены'
                    );

                }else{
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Пароли не совпадают!'
                    );
                }

                return $this->redirect($this->generateUrl('change_profile'));
            }

            return $this->render('AutoMainBundle:Cabinet:profile.html.twig',
                array(
                    'form' => $form->createView(),
                    'region' => $user->getRegion(),
                    'city' => $user->getCity(),
                ));
        }

        $user = new User();

        $base_user = $this->getDoctrine()
            ->getRepository('AutoMainBundle:BaseUser')
            ->find($user_id);

        $user->setEmail($base_user->getEmail());
        $user->setName($base_user->getName());
        $user->setPhone($base_user->getPhone());
        $user->setRegion($base_user->getRegion());
        $user->setCity($base_user->getCity());

        $form = $this->createForm(new RegUserType(), $user);

        return $this->render('AutoMainBundle:Cabinet:profile.html.twig',
            array(
                'form' => $form->createView(),
                'region' => $user->getRegion(),
                'city' => $user->getCity(),
            ));

    }

    public function editAutoAction(Request $request, $id){
        $session = $this->get('session');

        if ('POST' === $request->getMethod()) {

            $auto = new Auto();

            $form = $this->createForm(new AddAutoType(), $auto);

            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $old_auto = $em->getRepository('AutoMainBundle:Auto')->find($id);

                if(!$old_auto){
                    throw $this->createNotFoundException(
                        'Не найден автомобиль с данным id: '.$id
                    );
                }
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

                    unlink(__DIR__.'/../../../../web/bundles/auto/userfiles/'.$old_auto->getImg());
                    $auto->file->move(__DIR__.'/../../../../web/bundles/auto/userfiles', $new_filename);
                    $auto->setImg($new_filename);
                    $old_auto->setImg($auto->getImg());
                }

                $old_auto->setMark($auto->getMark());
                $old_auto->setModel($auto->getModel());
                $old_auto->setYear($auto->getYear());
                $old_auto->setRun($auto->getRun());
                $old_auto->setPrice($auto->getPrice());
                $old_auto->setNew($auto->getNew());
                $old_auto->setRegion($auto->getRegion());
                $old_auto->setBody($auto->getBody());
                $old_auto->setColor($auto->getColor());
                $old_auto->setDescription($auto->getDescription());

                $em->persist($old_auto);
                $em->flush();

                /*$user_auto->setIdAuto($auto->getId());
                $user_auto->setIdUser($session->get('user_id'));
                $user_auto->setDate(new \DateTime('now'));

                $em->persist($user_auto);
                $em->flush();*/

                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Ваше объявление успешно изменено!'
                );

                return $this->redirect($this->generateUrl('cabinet'));
            }

            return $this->render('AutoMainBundle:Cabinet:auto.html.twig', array(
                'form' => $form->createView(),
                'id' => $id,
                'region' => $auto->getRegion(),
                'mark' => $auto->getMark(),
                'model' => $auto->getModel(),
                'year' => $auto->getYear(),
                'img' => $auto->getImg(),
            ));
        }

        $auto = new Auto();

        $edit_auto = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto')
            ->find($id);

        $auto->setMark($edit_auto->getMark());
        $auto->setModel($edit_auto->getModel());
        $auto->setYear($edit_auto->getYear());
        $auto->setRun($edit_auto->getRun());
        $auto->setPrice($edit_auto->getPrice());
        $auto->setNew($edit_auto->getNew());
        $auto->setRegion($edit_auto->getRegion());
        $auto->setBody($edit_auto->getBody());
        $auto->setColor($edit_auto->getColor());
        $auto->setDescription($edit_auto->getDescription());
        $auto->setImg($edit_auto->getImg());

        $form = $this->createForm(new AddAutoType(), $auto);

        return $this->render('AutoMainBundle:Cabinet:auto.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
            'region' => $edit_auto->getRegion(),
            'mark' => $edit_auto->getMark(),
            'model' => $edit_auto->getModel(),
            'year' => $edit_auto->getYear(),
            'img' => $edit_auto->getImg(),
        ));
    }

    public function zayavkaListAction()
    {
        $session = $this->get('session');

        $user_id = $session->get('user_id');

        $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:ZayavkaAuto');
        $query = $repository->createQueryBuilder('z')
            ->where("z.user_id = :id")
            ->orderBy('z.date_add', 'DESC')
            ->setParameter('id', $user_id)
            ->getQuery();
        $zayavka = $query->getResult();


        return $this->render('AutoMainBundle:Cabinet:zayavka_list.html.twig',
            array(
                'zayavka' => $zayavka,
            ));

    }

    public  function  editZayavkaAction(Request $request, $id)
    {
        $session = $this->get('session');

        if ('POST' === $request->getMethod()) {

            $zayavka = new ZayavkaAuto();

            $form = $this->createForm(new AddZayavkaAutoType(), $zayavka);

            $form->handleRequest($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $old_zayavka = $em->getRepository('AutoMainBundle:ZayavkaAuto')->find($id);

                if(!$old_zayavka){
                    throw $this->createNotFoundException(
                        'Не найдена заявка на автомобиль с данным id: '.$id
                    );
                }


                $old_zayavka->setMark($zayavka->getMark());
                $old_zayavka->setModel($zayavka->getModel());
                $old_zayavka->setYear($zayavka->getYear());
                $old_zayavka->setRun(abs((int)$zayavka->getRun()));
                $old_zayavka->setPrice(abs((int)$zayavka->getPrice()));
                $old_zayavka->setNew($zayavka->getNew());
                $old_zayavka->setRegion($zayavka->getRegion());
                $old_zayavka->setBody($zayavka->getBody());
                $old_zayavka->setColor($zayavka->getColor());
                $old_zayavka->setDescription($zayavka->getDescription());

                $old_zayavka->setDateUpdate(new \DateTime('now'));

                $em->persist($old_zayavka);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Ваша заявка успешно изменена!'
                );

                return $this->redirect($this->generateUrl('zayavka_list'));
            }

            return $this->render('AutoMainBundle:Cabinet:zayavka.html.twig', array(
                'form' => $form->createView(),
                'id' => $id,
                'region' => $zayavka->getRegion(),
                'mark' => $zayavka->getMark(),
                'model' => $zayavka->getModel(),
                'year' => $zayavka->getYear(),
            ));
        }

        $zayavka = new ZayavkaAuto();

        $edit_zayavka = $this->getDoctrine()
            ->getRepository('AutoMainBundle:ZayavkaAuto')
            ->find($id);

        $zayavka->setMark($edit_zayavka->getMark());
        $zayavka->setModel($edit_zayavka->getModel());
        $zayavka->setYear($edit_zayavka->getYear());
        $zayavka->setRun($edit_zayavka->getRun());
        $zayavka->setPrice($edit_zayavka->getPrice());
        $zayavka->setNew($edit_zayavka->getNew());
        $zayavka->setRegion($edit_zayavka->getRegion());
        $zayavka->setBody($edit_zayavka->getBody());
        $zayavka->setColor($edit_zayavka->getColor());
        $zayavka->setDescription($edit_zayavka->getDescription());

        $form = $this->createForm(new AddZayavkaAutoType(), $zayavka);

        return $this->render('AutoMainBundle:Cabinet:zayavka.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
            'region' => $edit_zayavka->getRegion(),
            'mark' => $edit_zayavka->getMark(),
            'model' => $edit_zayavka->getModel(),
            'year' => $edit_zayavka->getYear(),
        ));

    }

}


