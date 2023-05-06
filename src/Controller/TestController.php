<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/test")
     */
    public function index()
    {
        // return new Response(
        //     'Gustavo Test'
        // );

        return $this->render('tests/index.html.twig', [
            'message' => 'Gustavo Test 1'
        ]);
    }
}