<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController 
{
    #[Route('/api/songs/{id<\d+>}', methods:['GET'])]
    function getSong(int $id): Response
    {
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'n',
        ];
        return $this->json($song);
    }
}
