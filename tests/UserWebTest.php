<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\UserRepository;

class UserWebTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello IndexController! ✅');
        
        $container = static::$kernel->getContainer();

        $userRepository = $container->get(UserRepository::class);

        $testUser = $userRepository->findOneByEmail("cyprientaib1@gmail.com");
        
        $client->loginUser($testUser);

        $client->request('GET', '/profile');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello cyprientaib1@gmail.com! ✅');

    }
}
