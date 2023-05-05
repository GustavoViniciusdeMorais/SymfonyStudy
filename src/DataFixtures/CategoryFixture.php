<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use App\Entity\Category;

class CategoryFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('test');
        $manager->persist($category);

        for ($i = 0; $i < 3; $i++) {
            $product = new Product();
            $product->setName("Test{$i}");
            $product->setPrice('800.90');
            $product->setCategory($category);
            $manager->persist($product);
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
