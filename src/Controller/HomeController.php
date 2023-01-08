<?php

namespace App\Controller;

use App\Entity\OperationBancaire;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $places = $entityManager->getRepository(operationBancaire::class)->findBy(array('users' => $this->getUser(), 'lieu' => NULL));
        $placesNoValid = count($places);

        $place = $entityManager->getRepository(operationBancaire::class)->findBy(array('users' => $this->getUser()));
        $placesValid = count($place) - $placesNoValid;
        
        return $this->render('home/index.html.twig', [
          'placesNoValid' => $placesNoValid,
          'placesValid' => $placesValid
        ]);
        
    }
}
