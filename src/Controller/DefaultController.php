<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/portfolio/')]
    public function portfolio(): Response
    {
        return $this->render('portfolio/baseIndex.html.twig');
    }
}