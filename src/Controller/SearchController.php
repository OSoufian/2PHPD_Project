<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends AbstractController
{
    #[Route('/search/{product}', name: 'search')]
    public function search(string $product, ProductsRepository $productsRepository): Response
    {   
        if($product == "all") $products = $productsRepository->getAll();
        $products = $productsRepository->findOneBySomeField($product);

        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/search/categories/{product}', name: 'searchCategory')]
    public function searchCategory(string $product, ProductsRepository $productsRepository): Response
    {   
        if($product == "all") $products = $productsRepository->getAll();
        $products = $productsRepository->findOneBySomeField($product);

        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);
    }
}
