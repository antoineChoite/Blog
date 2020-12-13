<?php

namespace App\DataFixtures;

use App\Entity\Personnage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PersonnageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=1; $i <= 4; $i++) { 
            $personnage = new Personnage();
            $personnage->setNom("Personnage N°$i")
                        ->setDescription("Description du personnage n°$i")
                        ->setGame("Game du personnage n°$i")
                        ->setImage("asset/$i.png");
            $manager->persist($personnage);
        }

        $manager->flush();
    }
}
