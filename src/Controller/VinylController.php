<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\UnicodeString;

class VinylController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('PB and Jams');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = ucwords(str_replace('-', ' ', $slug));
        } else {
            $title = 'Nothing browse in the uri';
        }

        return new Response('Genre = ' . $title);
    }
}
