<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use App\Entity\OperationBancaire;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin', name:'admin_')]
class UsersController extends AbstractController
{
    #[Route('/', name:'index')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $users = $entityManager->getRepository(users::class)->findAll();

        return $this->render('admin/index.html.twig', [
            'users' => $users,
        ]);
    }
    #[Route('/{id}', name:'user')]
    public function user(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();
        $operations = $entityManager->getRepository(operationBancaire::class)->findBy(array('users' => $id, 'lieu' => NULL));
        return $this->render('admin/user.html.twig', [
            'operations' => $operations
        ]);
    }
}