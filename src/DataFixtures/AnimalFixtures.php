<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Animal();
        $a1->setNom("Chien")
            ->setDescription("Un animal domestique")
            ->setImage("chien.png")
            ->setPoids(10)
            ->setDangereux(false);

        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("Cochon")
            ->setDescription("Un animal domestique ou d'élevage")
            ->setImage("cochon.png")
            ->setPoids(80)
            ->setDangereux(false);

        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom("Crocodile")
            ->setDescription("Un animal sauvage")
            ->setImage("croco.png")
            ->setPoids(250)
            ->setDangereux(true);

        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("Requin")
            ->setDescription("Un animal marin")
            ->setImage("requin.png")
            ->setPoids(200)
            ->setDangereux(true);

        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("Serpent")
            ->setDescription("Un animal sauvage")
            ->setImage("serpent.png")
            ->setPoids(30)
            ->setDangereux(true);

        $manager->persist($a5);



        $manager->flush();
    }
}
