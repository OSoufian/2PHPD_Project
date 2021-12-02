<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;


class IndexController  extends AbstractController 
{

    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/admin', name:"admin")]
    
    public function FunctionName(UserRepository $userRepository): Response
    {
        $userHistorics = $userRepository->getAllUsers();
        
        return $this->render('admin/index.html.twig', [
            "data" => $userHistorics
        ]);
    }

    
}
