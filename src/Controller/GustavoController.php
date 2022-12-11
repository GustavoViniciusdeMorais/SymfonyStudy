<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GustavoController extends AbstractController
{
    #[Route('/gustavo', name: 'app_gustavo')]
    public function index(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    public function test(): Response
    {
        return $this->render('gustavo/index.html.twig', [
            'controller_name' => 'Test Test Test 1 !'
        ]);
    }
}
