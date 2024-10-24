<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DeleteEventController extends AbstractController
{
    #[Route('/delete/event', name: 'app_delete_event')]
    public function index(): Response
    {
        return $this->render('delete_event/index.html.twig', [
            'controller_name' => 'DeleteEventController',
        ]);
    }
}
