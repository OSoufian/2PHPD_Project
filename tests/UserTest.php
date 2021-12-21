<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser()
    {

        $user = new User();
        $user->setPassword('$2y$13$aKWWp68ntWO0QNsfLPst9uxHeqqGbo9cN6XQn5skuc5ZMjyXaNui2');
        $user->setEmail("lounesbehloul111@gmail.com");
        $user->setBillingAddress("Ta mère");
        $user->setDeliveryAddress("Sa Mère");
        $user->setIsVerified(true);
        $user->setRoles(["ROLE_ADMIN"]);

        $this->assertEquals(["lounesbehloul111@gmail.com", "Ta mère", "Sa Mère", '$2y$13$aKWWp68ntWO0QNsfLPst9uxHeqqGbo9cN6XQn5skuc5ZMjyXaNui2', ['ROLE_ADMIN', 'ROLE_USER']], [$user->getEmail(), $user->getBillingAddress(), $user->getDeliveryAddress(), $user->getPassword(), $user->getRoles()], 'Nope');
    }
}
