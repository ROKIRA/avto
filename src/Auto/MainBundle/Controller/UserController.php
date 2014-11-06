<?php

namespace Auto\MainBundle\Controller;

use Auto\MainBundle\Entity\BaseUser;
use Auto\MainBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\RegUserType;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function newAction(Request $request)
    {


       /* $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:BaseUser');

        $auth = $repository->findOneBy(
          array('email' => 'admin@mail.ru', 'password' => 'e9fd363bedc114628fe2cdce1493db15')
        );

        $user_test = array();

        if($auth){
            $user_test['id'] = $auth->getId();
            $user_test['email'] = $auth->getEmail();
            $user_test['name'] = $auth->getName();
        }else{

        }*/


        $em = $this->getDoctrine()->getManager();

        $user = new User();
        $form = $this->createForm(new RegUserType(), $user);

        if ('POST' === $request->getMethod()) {

            $form->handleRequest($request);

            if ($form->isValid()) {

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

                return $this->redirect($this->generateUrl('reg'));
            }
        }

        return $this->render('AutoMainBundle:Default:reg.html.twig', array(
            'form' => $form->createView(), 'user' => $user
        ));
    }

}