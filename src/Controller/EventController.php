<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function index(): Response
    {
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/addEvent', name: 'app_addEvent')]
    public function addEvent(ManagerRegistry $doctrine,
    Request $request)
    {
        $event= new Event();
    $form=$this->createForm(EventType::class,$event);
                    $form->handleRequest($request);
                    if($form->isSubmitted()){
                        //Action d'ajout
                        $em =$doctrine->getManager() ;
                        $em->persist($event);
                        $em->flush();
                return $this->redirectToRoute("app_addEvent");
            }
        return $this->renderForm("event/createEvent.html.twig",
                        array("form"=>$form));
                    }
}
