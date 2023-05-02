<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ProductType;
use App\Repository\ProductRepository;

class GustavoController extends AbstractController
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

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

    public function dot($value = ''): Response
    {
        return $this->render('gustavo/dot.html.twig', [
            'controller_name' => 'Any message',
            'value' => $value
        ]);
    }

    public function create(Request $request): Response
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // dd('test');
            $product = $form->getData();

            // save product in database
            $this->productRepository->save($product, true);

            return $this->redirectToRoute('app_products');
        }

        return $this->render('products/create.html.twig', [
            'form' => $form
        ]);
    }
}
