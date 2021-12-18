<?php

namespace App\Tests;

use App\Entity\Products;
use App\Entity\User;
use App\Repository\ProductsRepository;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProduct()
    {

        $product = new Products();
        $product->setName('Try');
        $product->setPrice(250);
        $product->setDescription("Ta mère");
        // $product->setCategories(["Sa Mère", "Merde"]);
        // $product->setImage();

        $this->assertEquals(['Try', 250.0, "Ta mère", ['Sa Mère', 'Merde']], [$product->getName(), $product->getPrice(), $product->getDescription(), $product->getCategories()], 'Nope');
    }
}
