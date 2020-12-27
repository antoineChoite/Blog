<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=1; $i <= 4; $i++) { 
            $video = new Video();
            $video->setNom("Video N°$i")
                        ->setDescription("Description du video n°$i")
                        ->setGame("Game du video n°$i")
                        ->setImage("asset/$i.png");
            $manager->persist($video);
        }

        $manager->flush();
    }
}
