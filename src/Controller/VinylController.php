<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage()
    {
        $trackList = [
            ['song' => 'Jump your bones', 'artist' =>  'Liam Finn'],
            ['song' => 'Go Home', 'artist' => 'Boney M'],
            ['song' => 'Giant Microphone', 'artist' => 'Horses'],
            ['song' => 'Zebra', 'artist' => 'Beach House'],
        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $trackList,
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = u(str_replace('-', ' ', $slug));
        } else {
            $title = 'Nothing browse in the uri';
        }

        return new Response('Genre = ' . $title);
    }
}
