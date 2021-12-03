<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use App\Security\LoginAuthAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ProfileController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    #[Route('/profile', name: 'profile')]
    public function index(): Response
    {

        // $user = $this->security->getUser();
        // if(!$user) return $this->redirectToRoute('index');
        // $user = (User) $user;
        // $form = $this->createForm(ProfileType::class, $user);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $user->setPassword(
        //         $userPasswordHasher->hashPassword(
        //                 $user,
        //                 $form->get('plainPassword')->getData()
        //             )
        //         );
    
        //         $entityManager->persist($user);
        //         $entityManager->flush();
        //         // do anything else you need here, like send an email
    
        //         return $userAuthenticator->authenticateUser(
        //             $user,
        //             $authenticator,
        //             $request
        //         );
        // }
           
        return $this->render('profile/index.html.twig', [
            'controller_name' => $this->getUser()->getEmail(),
        ]);
    }
}
