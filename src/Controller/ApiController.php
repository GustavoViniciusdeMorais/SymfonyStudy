<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hotel;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/live")
     */
    public function live()
    {
        return $this->resposta([], 'success');
    }

    /**
     * @Route("/api/hotels/{price?}")
     */
    public function filterHotel()
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
