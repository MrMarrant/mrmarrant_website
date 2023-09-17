<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render('index/baseIndex.html.twig');
    }

    #[Route('/portfolio/')]
    public function portfolio(): Response
    {
        return $this->render('portfolio/baseIndex.html.twig');
    }

    #[Route('/portfolio/')]
    public function project(string $projectName): Response
    {
        //TODO : Récupérer les données du projet dans le fichier json, et send les données correspondant au projet.
        return $this->render('project/baseIndex.html.twig');
    }
}