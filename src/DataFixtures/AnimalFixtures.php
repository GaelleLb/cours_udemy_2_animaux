<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Continent();
        $c1->setLibelle("Afrique");
        $manager->persist($c1);

        $c2 = new Continent();
        $c2->setLibelle("Amérique");
        $manager->persist($c2);

        $c3 = new Continent();
        $c3->setLibelle("Asie");
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLibelle("Europe");
        $manager->persist($c4);

        $c5 = new Continent();
        $c5->setLibelle("Océanie");
        $manager->persist($c5);


        $f1 = new Famille();
        $f1->setLibelle("mamiphère")
           ->setDescription("Animaux vertébrés nourrissant leur petits avec du lait");
        $manager->persist($f1);

        $f2 = new Famille();
        $f2->setLibelle("reptile")
           ->setDescription("Animaux vertébrés qui rampent");
        $manager->persist($f2);

        $f3 = new Famille();
        $f3->setLibelle("poisson")
           ->setDescription("Animaux vertébrés vivant dans un milieu aquatique");
        $manager->persist($f3);

        $a1 = new Animal();
        $a1->setNom("Chien")
            ->setFamille($f1)
            ->setDescription("Un animal domestique")
            ->setImage("chien.png")
            ->setPoids(10)
            ->setDangereux(false)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5);


        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("Cochon")
            ->setFamille($f1)
            ->setDescription("Un animal domestique ou d'élevage")
            ->setImage("cochon.png")
            ->setPoids(80)
            ->setDangereux(false)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5);
            

        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom("Crocodile")
            ->setFamille($f2)
            ->setDescription("Un animal sauvage")
            ->setImage("croco.png")
            ->setPoids(250)
            ->setDangereux(true)
            ->addContinent($c1)
            ->addContinent($c5);


        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("Requin")
            ->setFamille($f3)
            ->setDescription("Un animal marin")
            ->setImage("requin.png")
            ->setPoids(200)
            ->setDangereux(true)
            ->addContinent($c2)
            ->addContinent($c5);


        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("Serpent")
            ->setFamille($f2)
            ->setDescription("Un animal sauvage")
            ->setImage("serpent.png")
            ->setPoids(30)
            ->setDangereux(true)
            ->addContinent($c1)
            ->addContinent($c3)
            ->addContinent($c5);

        $manager->persist($a5);



        $manager->flush();
    }
}
