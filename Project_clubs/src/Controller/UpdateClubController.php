<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UpdateClubController extends AbstractController
{
    #[Route('/update/club', name: 'app_update_club')]
    public function index(): Response
    {
        return $this->render('update_club/index.html.twig', [
            'controller_name' => 'UpdateClubController',
        ]);
    }
}
