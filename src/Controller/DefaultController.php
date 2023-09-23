<?php
namespace App\Controller;

use App\Services\utils\DataHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    #[Route('/project/{name}')]
    public function project(string $name): Response
    {
        $query = DataHelper::getQuery($name);
        if ($query == NULL) return $this->render('project/error.html.twig');

        //TODO : Récupérer les données du projet dans le fichier json, et send les données correspondant au projet.
        return $this->render('project/base.html.twig');
    }
}