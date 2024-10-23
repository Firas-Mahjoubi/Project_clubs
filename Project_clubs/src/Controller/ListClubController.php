<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListClubController extends AbstractController
{
    #[Route('/list/club', name: 'app_list_club')]
    public function index(): Response
    {
        return $this->render('list_club/index.html.twig', [
            'controller_name' => 'ListClubController',
        ]);
    }
}
