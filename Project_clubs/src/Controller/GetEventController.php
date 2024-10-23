<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GetEventController extends AbstractController
{
    #[Route('/get/event', name: 'app_get_event')]
    public function index(): Response
    {
        return $this->render('get_event/index.html.twig', [
            'controller_name' => 'GetEventController',
        ]);
    }
}
