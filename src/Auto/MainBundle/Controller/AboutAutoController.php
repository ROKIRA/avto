<?php

namespace Auto\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Auto\MainBundle\Form\Type\AddCommentType;
use Auto\MainBundle\Entity\Comment;

class AboutAutoController extends Controller
{
    public function indexAction($id, $car)
    {
        $id = abs((int)$id);
        // GET ONE NEEDED CAR FROM DataBase
        $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Auto');

        $auto = $repository->findOneById($id);

        $form = $this->createForm(new AddCommentType());

        // GET COMMENTS FOR CURRENT CAR FROM DataBase
        $repository = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Comment');

        $query = $repository->createQueryBuilder('c')
        ->where("c.public = '1' AND c.id_auto = '$id'")
        ->orderBy('c.date_add', 'DESC')
        ->getQuery();
        $comments = $query->getResult();

        return $this->render('AutoMainBundle:Default:about.html.twig', array(
            'car' => $car,
            'auto' => $auto,
            'form' => $form->createView(),
            'comments' => $comments,
            'car_id' => $id,
        ));

    }
}