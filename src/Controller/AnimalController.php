<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animals")
     */
    public function index(AnimalRepository $repo)
    {
        $animals = $repo->findAll();
        return $this->render('animal/index.html.twig', [
            "animals" => $animals
        ]);
    }
}
