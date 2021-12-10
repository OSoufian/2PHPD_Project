<?php

namespace App\Tests;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\User\UserInterface;

// use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;
class UserTest extends TestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    private final function user() : User
    {

        $user = new User();
        $user->setPassword('$2y$13$aKWWp68ntWO0QNsfLPst9uxHeqqGbo9cN6XQn5skuc5ZMjyXaNui2');
        $user->setEmail("lounesbehloul111@gmail.com");
        $user->setBillingAddress("Ta mère");
        $user->setDeliveryAddress("Sa Mère");
        $user->setIsVerified(true);

        return $user;
    }

    public function testCase()
    {
        $this->assertTrue(true);
    }

    /* public function testUserCreate(): EntityManager
    {
        $user = $this->user();
        
        $em = $this->getMockBuilder('\Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        // $em->expects($this->exactly(1))
        //     ->method('persist')
        //     ->with(
        //         $this->logicalOr(
        //             $this->equalTo($user)
        //         )
        //     )
        //     ->will($this->returnCallback(function($o) {
        //         if ($o instanceof User){
        //             $o->setEmail("lounesbehloul111@gmail.com");
        //         }
        //     }));

        // $em->expects($this->exactly(1))
        //     ->method('flush');

        


        return $em;
    }

    /*public function testUserEdit(): void
    {
        $user = $this->user();
        // $this->assertTrue(true);

        $em = $this->testUserCreate();
        $em->flush($user);
        $em->persist($user);
        // $em->close();

        $em->getEventManager();

        $ur = $this->getMockBuilder('\App\Repository\UserRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $ur->expects($this->once())
            ->method('upgradeEmail')
            ->will($this->returnValue(
                
                $user->getEmail()));
        // $ur->upgradeEmail($user, 'moi@toi.com');

        // $this->assertEquals(
        //     $em->get_current_user()->getEmail(),
            
        //     'moi@toi.com',
        // );
    }*/
}
