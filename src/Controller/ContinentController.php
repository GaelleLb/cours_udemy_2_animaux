<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function continents(ContinentRepository $repo)
    {
        $continents = $repo->findAll();
        return $this->render('continent/continents.html.twig', [
            "continents" => $continents
        ]);
    }

    /**
     * @Route("/continent/{id}", name="continent")
     */
    public function continent(Continent $continent)
    {
        return $this->render('continent/continent.html.twig', [
            "continent" => $continent
        ]);
    }
}
