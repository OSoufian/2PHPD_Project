<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/TODO/{route}", requirements={"route"=".*"}, name="vue")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->render('vue/index.html.twig', [
            'TODOLists' => $user == null? []: $user->getTODOLists(),
        ]);
    }
}
