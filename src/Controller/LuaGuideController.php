<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuaGuideController extends AbstractController
{
    #[Route('/lua-guide/')]
    public function index(): Response
    {
        return $this->render('lua-guide/index.html.twig');
    }

    #[Route('/lua-guide/tools/')]
    public function tools(): Response
    {
        return $this->render('lua-guide/tools.html.twig');
    }

    #[Route('/lua-guide/lua/')]
    public function lua(): Response
    {
        return $this->render('lua-guide/lua.html.twig');
    }
}