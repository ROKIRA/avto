<?php

namespace Demos\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Demos\BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DemosBlogBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/create")
     */
    public function createAction() {
        $post = new Post();
        $post->setTitle('Demo Blog');
        $post->setBody('Hello Symfony 2');
        $post->setCreatedDate(new \DateTime("now"));
        $post->setUpdatedDate(new \DateTime('now'));

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($post);
        $em->flush();

        return new Response('Created product id ' . $post->getId());
    }

}
