<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Products;
use App\Form\AddProductsType;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManager;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'products')]
    public function index(ProductsRepository $productsRepository, CategoriesRepository $categoriesRepository): Response
    {
        $products = $productsRepository->getAll();
        $categories = $categoriesRepository->getAll();
        return $this->render('products/index.html.twig', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    #[Route('/product/{id}', name: 'product')]
    public function productById(string $id, ProductsRepository $productsRepository): Response
    {
        // if ($product == "all") $products = $productsRepository->getAll();
        $products = $productsRepository->findById($id);

        return $this->render('products/view.html.twig', [
            'products' => $products,
        ]);
    }
}
