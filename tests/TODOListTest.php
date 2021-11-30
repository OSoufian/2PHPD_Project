<?php

namespace App\Tests;

use App\Entity\TODOList;
use PHPUnit\Framework\TestCase;
use App\Entity\User;

class TODOListTest extends TestCase
{
    public function testSomething(): void
    {   
        $user = new User();
        $user->setUsername("CACA");
        $user->setPassword("caca");
        $user->setEmail("caca");
        $todo = new TODOList();
        $todo->setOwer($user);
        // $todoRepository = $this->createMock(ObjectRepository::class);
        // $todoRepository->expects($this->any())
        //     ->method('find')
        //     ->willReturn($todo);
        // $objectManager = $this->createMock(ObjectManager::class);

        // $objectManager->expects($this->any())
        //     ->method('getRepository')
        //     ->willReturn($todoRepository);

        // $salaryCalculator = new SalaryCalculator($objectManager);
        $this->assertEquals($user, $todo->getOwer());
        $this->assertEquals(null, $todo->getUsers());


    }
}
