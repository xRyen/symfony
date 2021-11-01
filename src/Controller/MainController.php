<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/start/{name?}', name: 'start')]
    public function start(Request $request, $name) {
        $nr = random_int(0,100);
        return new Response('<h1>Willkommen! '.$name.' Ihre Wartenummer ist '.$nr.'</h1>');
    }
}