<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'search')]
    public function index(Request $request, ProductsRepository $productsRepository): Response
    {
        $products = $productsRepository->findOneBySomeField($request->query->get('q'));

        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);
    }
}
