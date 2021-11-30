<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Task;
use App\Entity\TODOList;

class TaskTest extends TestCase
{
    public function testSomething(): void
    {
        $todo = new TODOList();
        $task = new Task();
        $task->setTitle("Foo");
        $task->setDescription("Bar");
        $task->setStatus(1);
        $task->setTODOList($todo);


        $this->assertEquals("Foo", $task->getTitle());
        $this->assertEquals("Bar", $task->getDescription());
        $this->assertEquals(1, $task->getStatus());
        $this->assertEquals($todo, $task->getTODOList());
    }
}
