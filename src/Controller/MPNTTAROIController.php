<?php
namespace App\Controller;

use App\Services\utils\DataHelper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MPNTTAROIController extends AbstractController
{
    #[Route('/mpnttaroi/')]
    public function index(): Response
    {

        return $this->render('mpnttaroi/index.html.twig');
    }

}