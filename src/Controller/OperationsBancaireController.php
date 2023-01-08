<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\OperationBancaireRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OperationsBancaireController extends AbstractController
{
    #[Route('/operationsBancaire/', name: 'app_operationsBancaire')]
    public function index(OperationBancaireRepository $operationBancaires): Response
    {
        return $this->render('pages/operationsBancaire.html.twig', [
            'operations' => $operationBancaires->findBy(
                ['users' => $this->getUser()],[] 
                )
        ]);
    }
}