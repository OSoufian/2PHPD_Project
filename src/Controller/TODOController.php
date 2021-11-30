<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\TODOList;
use App\Entity\User;
use App\Form\AddTODOType;
use Doctrine\Common\Collections\Collection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class TODOController extends AbstractController
{

    private function User(): User|null {
        return $this->getUser();
    }

    private function TODOLists() : Collection|null
    {   
        if($this->User()) return $this->User()->getTODOLists();

        return null;
    }

    private function Task(TODOList $TODO) : Collection{
        return $TODO->getTasks();
    }

    /**
     * @Route("/TODO", name="vue", methods="GET")
     */
    public function index(): Response
    {
        if (!$this->User()) return $this->redirect('/',200);
        else
        {
            $task = array();
            foreach($this->TODOLists() as $todo){
                $task[$todo->getId()] = $todo->getTask();
            }
            return $this->render('todo/index.html.twig',[
                "TODOList" => $this->TODOLists(),
                "TASKS" => $task,

            ]);
        }
    }

    #[Route("/TODO/add",name:"ADDTODO")]
    public function AddTOdo(EntityManagerInterface $entityManager): Response
    {
        if(!$this->User()) return $this->render('fileName.html.twig',);
        $todo = new TODOList();
        $form = $this->createForm(AddTODOType::class, $todo);
        if ($form->isSubmitted() && $form->isValid()) {
            $todo->setOwer($this->User());
            $entityManager->persist($todo);
            $entityManager->flush();
        }

    }

    
}
