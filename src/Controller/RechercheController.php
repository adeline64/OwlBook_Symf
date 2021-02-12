<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function index()
    {
        return $this->render('recherche/index.html.twig', [
            'controller_name' => 'RechercheController',
        ]);
    }

    /**
     * @Route("/search", name="search")
     */
    public function recherche(LivreRepository $livreRepository, Request $request)
    {

       $search = '%'.$request->query->get('search').'%';
        $result = $livreRepository->createQueryBuilder('o')
            ->where('o.titre LIKE :titre')
            ->setParameter('titre', $search)
            ->getQuery()
            ->getResult();

            // dd($result);

        return $this->render('recherche/index.html.twig', [
            'livres' => $result,
        ]);
    }
}
