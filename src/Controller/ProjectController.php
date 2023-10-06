<?php
namespace App\Controller;

use App\Services\utils\DataHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    #[Route('/project/{name}', name: 'app_project_index')]
    public function index(string $name): Response
    {
        $query = DataHelper::getQuery($name);
        if ($query == NULL) return $this->render('project/error.html.twig');

        return $this->render('project/index.html.twig',
        [
            "query" => $query,
        ]);
    }

}