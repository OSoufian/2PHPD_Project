<?php

namespace App\Controller;


use App\Repository\CategoriesRepository;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search/{product}', name: 'search')]
    public function search(string $product, ProductsRepository $productsRepository, CategoriesRepository $categoriesRepository): Response
    {   
        if($product == "all") $products = $productsRepository->getAll();
        $products = $productsRepository->findBySearch($product);

        return $this->render('products/index.html.twig', [
            'products' => $products,
            'categories' => $categoriesRepository->getAll()
        ]);
    }

    #[Route('/search/categories/{categorie}', name: 'searchCategory')]
    public function searchCategory(string $categorie, ProductsRepository $productsRepository,  CategoriesRepository $categoriesRepository): Response
    {   
        if($categorie == "all") $products = $productsRepository->getAll();
        $products = $categoriesRepository->findOneByName($categorie)->getProducts();

        return $this->render('products/index.html.twig', [
            'products' => $products,
            'categories' => $categoriesRepository->getAll()
        ]);
    }
}
