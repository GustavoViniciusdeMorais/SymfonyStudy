<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function home($name = null): Response
    {
        return $this->json([
            'status' => 'success',
            'data' => [
                'name' => $name
            ]
        ]);
    }
}
