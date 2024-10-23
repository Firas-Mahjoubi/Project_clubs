<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DeleteClubController extends AbstractController
{
    #[Route('/delete/club', name: 'app_delete_club')]
    public function index(): Response
    {
        return $this->render('delete_club/index.html.twig', [
            'controller_name' => 'DeleteClubController',
        ]);
    }
}
