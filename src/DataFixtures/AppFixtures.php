<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Recipe;
use App\Entity\Ingredient;
use App\Entity\Mark;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
         // Ingredients
         $ingredients = [];
         for ($i = 0; $i < 50; $i++) {
             $ingredient = new Ingredient();
             $ingredient->setName($this->faker->word())
                 ->setPrice(mt_rand(0, 100));

             $ingredients[] = $ingredient;
             $manager->persist($ingredient);
         }
 

        $manager->flush();
    }
}
