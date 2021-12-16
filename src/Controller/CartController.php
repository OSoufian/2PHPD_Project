<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart',  methods: "GET")]
    public function index(SessionInterface $session): Response
    {
        return $this->render('cart/index.html.twig', [
            'cart' => $session->get("cart"),
        ]);
    }

    #[Route('/cart', name: 'cart',  methods: "POST")]
    public function addCart(Request $request, SessionInterface $session): Response
    {
        $parameters = json_decode($request->getContent(), true);
        
        $session->set("cart", $parameters);

        $response = new Response();
        $response->setContent(json_encode([
            'data' => $parameters,
        ]));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    #[Route('/cart', name: 'cart',  methods: "DELETE")]
    public function FunctionName(Request $request, SessionInterface $session): Response
    {
        $parameters = json_decode($request->getContent(), true);
        
        if(!isset($parameters["item"])) {
            $response = new Response();
            $response->setContent(json_encode([
                'message' => "error missing item",
            ]));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        } 
        $item = $parameters["item"];
        $cart = $session->get("cart");
        $cart["item"] -= 1;
        $session->set("cart", $cart);
        
        $response = new Response();
        $response->setContent(json_encode([
            'data' => $parameters,
        ]));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
