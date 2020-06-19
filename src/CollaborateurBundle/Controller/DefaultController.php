<?php

namespace CollaborateurBundle\Controller;

use CollaborateurBundle\Entity\Collab;
use ProjetBundle\Entity\Projet;
use ProjetBundle\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/collab")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="index-collab")
     */
    public function indexAction()
    {
        $collabs = $this->getDoctrine()->getManager()->getRepository('CollaborateurBundle:Collab')->findAll();
        return $this->render('indexCollab.html.twig', [
            'collabs' => $collabs
        ]);
    }

    /**
     * @Route ("/new", name="new-collab")
     */
    public function newAction(Request $request)
    {
        $validator = $this->get('validator');

        $collab = new Collab();
        $form = $this->createForm(CollabType::class, $collab);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();


            //On donne $projet à DOCTRINE (pas de requete SQL)
            $em->persist($collab);
            //execute SQL
            $em->flush();
        }

        return $this->render('newcollab.html.twig', [
            'form' => $form->createView()

        ]);

    }
    //EDIT

    /**
     * @Route("/edit/{id}", name="edit-collab")
     */
    public function editAction($id, Request $request)
    {
        $validator = $this->get('validator');

        $em = $this->getDoctrine()->getManager();
        $collab = $em->getRepository('CollaborateurBundle:Collab')->find($id);
        $form = $this->createForm(ProjetType::class, $collab);

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
     * @Route ("/delete/{id}", name="delete-collab")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        //récupère collab id = $id
        $collab = $em->getRepository('CollaborateurBundle:Collab')->find($id);
        //delete collab
        $em->remove($collab);
        //execute SQL
        $em->flush();

        return $this->redirectToRoute('index');

    }

}