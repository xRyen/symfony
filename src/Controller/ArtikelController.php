<?php

namespace App\Controller;

use App\Entity\Artikel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtikelController extends AbstractController
{
    #[Route('/artikel', name: 'artikel')]
    public function index(Request $request)
    {
        $artikel = new Artikel();
        $artikel->setTitel("Unser erster Artikel");

        $em = $this->getDoctrine()->getManager();
        // $em->persist($artikel);
        // $em->flush();

        $getArtikel = $em->getRepository(Artikel::class)->findOneBy([
            'id' => 1
        ]);

        $em->remove($getArtikel);
        $em->flush();

        // return new Response("Artikel wurde angelegt");
        return $this->render('artikel/index.html.twig', [
            'artikel' => $getArtikel,
        ]);
    }
}
