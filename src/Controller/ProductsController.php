<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Products;
use App\Form\AddProductsType;
use Doctrine\ORM\EntityManager;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'products')]
    public function index(ProductsRepository $productsRepository): Response
    {
        $products = $productsRepository->getAll();

        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/product/{product}', name: 'product')]
    public function productById(string $id, ProductsRepository $productsRepository): Response
    {
        // if ($product == "all") $products = $productsRepository->getAll();
        $product = $productsRepository->findById($id);

        return $this->render('products/view.html.twig', [
            'product' => $product,
        ]);
    }
}
