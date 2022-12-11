<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

class ProductsController extends AbstractController
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        $products = $this->productRepository->all();

        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
            'products' => $products
        ]);
    }
}
