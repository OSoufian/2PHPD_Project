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
        // dd($productsRepository->getAll());
        // return $this->render('products/index.html.twig', [
        //     'products' => $productsRepository->getAll(),
        // ]);


        $products = $productsRepository->getAll();

        dd($products);

        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);


    }

    #[Route('/products/add', name: 'products_add')]
    public function add(Request $request, EntityManager $entityManager): Response
    {

        $product = new Products();
        $form = $this->createForm(AddProductsType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();
        }
        
        return $this->render('products/add.html.twig', [
            'productsForm' => $form->createView(),
        ]);

    }
}
