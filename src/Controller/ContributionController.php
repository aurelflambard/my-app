<?php

namespace App\Controller;

use App\Service\CallApiService;
use App\Entity\OperationBancaire;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/contribution', name: 'app_contribution_')]
class ContributionController extends AbstractController
{
    #[Route('/{id}/{slug}', name: 'edit')]
    public function edit( CallApiService $callApiService, $slug, ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $position = $entityManager->getRepository(operationBancaire::class)->find($id);
        $newPosition = $request->request->get("position");

        $position->setLieu($newPosition);
        $entityManager->flush();

        return $this->render('pages/contribution.html.twig', [
            'datas' => $callApiService->getContribute($slug),
        ]);
    }
}
