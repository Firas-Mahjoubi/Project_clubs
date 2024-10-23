<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShowClubController extends AbstractController
{
    #[Route('/show/club', name: 'app_show_club')]
    public function index(): Response
    {
        return $this->render('show_club/index.html.twig', [
            'controller_name' => 'ShowClubController',
        ]);
    }
}
