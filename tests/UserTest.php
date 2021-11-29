<?php

namespace App\Tests;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser(){
        $user = new User();
        $user->setUsername("CYPT");
        $user->setEmail("contact@cyprientaib.com");
        $user->setPassword("password");

        $userRepository = $this->createMock(ObjectRepository::class);
        $userRepository->expects($this->any())
            ->method('find')
            ->willReturn($user);
        $objectManager = $this->createMock(ObjectManager::class);

        $objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($userRepository);

        // $salaryCalculator = new SalaryCalculator($objectManager);
        $this->assertEquals("password", $user->getPassword());

        $this->assertEquals("contact@cyprientaib.com", $user->getEmail());

        $this->assertEquals("password", $user->getPassword());



    }
}
