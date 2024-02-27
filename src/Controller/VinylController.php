<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route("/page1")]
    public function homepage(): Response
    {
        return new Response("Bonjour <strong> SMIDA-Adam</strong> ");
    }
    #[Route("/browse/{slug}")]
    function browse(string $slug = null): Response
    {

        $title = str_replace("-", " ", $slug);
        return new Response($title);
    }
}
