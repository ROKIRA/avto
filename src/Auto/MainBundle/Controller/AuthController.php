<?php

namespace Auto\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\AuthAutoType;
use Auto\MainBundle\Entity\BaseUser;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm(new AuthAutoType());

        return $this->render('AutoMainBundle:Default:auth.html.twig',
            array('auth_form' => $form->createView(), ));
    }

    /* АВТОРИЗАЦИЯ */

    public function authAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $user = new BaseUser();
        $form = $this->createForm(new AuthAutoType(), $user);

        if ('POST' === $request->getMethod()) {

            $form->handleRequest($request);

            $repository = $this->getDoctrine()
                ->getRepository('AutoMainBundle:BaseUser');

            $auth = $repository->findOneBy(
                array('email' => $user->getEmail(), 'password' => md5(sha1($user->getPassword())))
            );

            $session = $this->get('session');
            if($auth){
                $session->set('user_id', $auth->getId());
                $session->set('user_name', $auth->getName());
                $session->set('user_name', $auth->getName());
            }else{
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'Логин/Пароль введены не верно!'
                );
            }

        }
        return $this->redirect($request->headers->get('referer'));
    }

    public function logoutAction(){

        $session = $this->get('session');
        $session->remove('user_id');
        $session->remove('user_name');
        $session->remove('user_email');

        $response = array("code" => 100, "success" => true);

        return new Response(json_encode($response));
    }

}