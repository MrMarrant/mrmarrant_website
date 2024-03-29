<?php
namespace App\Controller;

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
}