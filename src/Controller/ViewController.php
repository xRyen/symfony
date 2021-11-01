<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'view')]
    public function index(): Response
    {
        $tag = date("l");
        $user = [
            'name' => 'udemy',
            'nachname' => 'dev',
            'alter' => '99'
        ];

        $a = array("apfel", "birne", "Hello", "world");

        return $this->render('view/index.html.twig', [
            'd' => $tag,
            'user' => $user,
            'a' => $a,
        ]);
    }
}
