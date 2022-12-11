<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class GustavoFixtures extends Fixture implements FixtureGroupInterface
{

    public static function getGroups(): array
    {
        return ['group3'];
    }

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName("Test{$i}");
            $product->setPrice('800.90');
            $manager->persist($product);
        }

        $manager->flush();
    }
}
