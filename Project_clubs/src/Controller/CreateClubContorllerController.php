<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreateClubContorllerController extends AbstractController
{
    #[Route('/create/club/contorller', name: 'app_create_club_contorller')]
    public function index(): Response
    {
        return $this->render('create_club_contorller/index.html.twig', [
            'controller_name' => 'CreateClubContorllerController',
        ]);
    }
}
