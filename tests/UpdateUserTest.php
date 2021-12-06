<?php

namespace App\Tests;

use App\Entity\User;
use App\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class UpdateUserTest extends TestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    public function testSomething(): void
    {
        $user = new User();
        $user->setPassword('$2y$13$aKWWp68ntWO0QNsfLPst9uxHeqqGbo9cN6XQn5skuc5ZMjyXaNui2');
        $user->setEmail("lounesbehloul111@gmail.com");
        $user->setBillingAddress("Ta mère");
        $user->setDeliveryAddress("Sa Mère");
        $user->setIsVerified(true);
        $this->assertTrue(true);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
