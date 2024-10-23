<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListEventsController extends AbstractController
{
    #[Route('/list/events', name: 'app_list_events')]
    public function index(): Response
    {
        return $this->render('list_events/index.html.twig', [
            'controller_name' => 'ListEventsController',
        ]);
    }
}
