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

            if ($form->isValid()) {

                $repository = $this->getDoctrine()
                    ->getRepository('AutoMainBundle:BaseUser');

                $auth = $repository->findOneBy(
                    array('email' => $form->getEmail(), 'password' => md5(sha1($form->getPassword())))
                );

                if($user->getPassword() == $user->getPassword2()){

                    $user->setPassword(md5(sha1($user->getPassword())));

                    $new_user = new BaseUser();

                    $new_user->setEmail($user->getEmail());
                    $new_user->setPassword($user->getPassword());
                    $new_user->setName($user->getName());
                    $new_user->setPhone($user->getPhone());
                    $new_user->setRegion($user->getRegion());
                    $new_user->setCity($user->getCity());

                    $em->persist($new_user);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Вы успешно зарегестрировались'
                    );
                }

                else{
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Пароли не совпадают'
                    );
                }
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