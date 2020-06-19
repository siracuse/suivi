<?php

namespace ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ProjetBundle\Entity\Projet;
use ProjetBundle\Form\ProjetType;

/**
 * @Route("/projet")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="index-projet")
     */
    public function indexAction()
    {
        $projets = $this->getDoctrine()->getManager()->getRepository('ProjetBundle:Projet')->findAll();
        return $this->render('index.html.twig', [
            'projets' => $projets
        ]);
    }

    /**
     * @Route ("/new", name="new-projet")
     */
    public function newAction(Request $request)
    {
        $validator = $this->get('validator');

        $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();


            //On donne $projet à DOCTRINE (pas de requete SQL)
            $em->persist($projet);
            //execute SQL
            $em->flush();
        }

        return $this->render('newprojet.html.twig', [
            'form' => $form->createView()

        ]);

    }
    //EDIT

    /**
     * @Route("/edit/{id}", name="edit-projet")
     */
    public function editAction($id, Request $request)
    {
        $validator = $this->get('validator');

        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('ProjetBundle:Projet')->find($id);
        $form = $this->createForm(ProjetType::class, $projet);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->flush();
            return $this->redirectToRoute('index');
        }

        return $this->render('edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
    //DELETE

    /**
     * @Route ("/delete/{id}", name="delete-projet")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        //récupère projet id = $id
        $projet = $em->getRepository('ProjetBundle:Projet')->find($id);
        //delete projet
        $em->remove($projet);
        //execute SQL
        $em->flush();

        return $this->redirectToRoute('index');

    }
}
