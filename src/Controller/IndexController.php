<?php

namespace App\Controller;

use App\Service\RandomNumber;
use Psr\Log\LoggerInterface;
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

    /**
     * @Route("/logger")
     */
    public function testLogger(LoggerInterface $logger)
    {
        return $this->resposta(
            $logger->info('my personal test')
        );
    }

    /**
     * @Route("/random-number")
     */
    public function randomNumber(RandomNumber $randomNumber)
    {
        return $this->resposta(
            $randomNumber->getNumber()
        );
    }

    public function resposta($data)
    {
        return $this->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
