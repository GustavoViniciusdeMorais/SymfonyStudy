<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Service\HotelService;
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

    /**
     * @Route("/hotels")
     */
    public function listHotels()
    {
        $result = [];
        $status = 'error';
        try {
            $hotels = $this->getDoctrine()
                ->getRepository(Hotel::class);
            $result = $hotels->findAll();
            $status = 'success';
        } catch (\Exception $e) {
            $result = [
                'error' => $e->getMessage()
            ];
        }
        return $this->resposta($result, $status);
    }

    /**
     * @Route("/hotels/{column?}/{value?}")
     */
    public function filterHotel(HotelService $service)
    {
        $result = [];
        try {
            $result = $this->getDoctrine()
                ->getRepository(Hotel::class)
                // ->findByExampleField(1);
                ->customSearch(1);
        } catch (\Exception $e) {
            $result = [
                'message' => $e->getMessage()
            ];
        }

        return $this->resposta($result);
    }

    public function resposta($data, $status = 'error')
    {
        return $this->json([
            'status' => $status,
            'data' => $data
        ]);
    }
}
