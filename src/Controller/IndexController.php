<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public function home($name = null): Response
    {
        // return $this->json([
        //     'status' => 'success',
        //     'data' => [
        //         'name' => $name
        //     ]
        // ]);

        $list = [
            [
                'name' => 'Gustavo',
                'age' => 27
            ],
            [
                'name' => 'Viki',
                'age' => 14
            ]
        ];

        return $this->render(
            'index.html.twig',
            [
                'name' => 'Gustavo',
                'list' => $list
            ]
        );
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        return $this->json([
            'status' => 'success',
            'data' => [
                'name' => 'Inside test index'
            ]
        ]);
    }

}
