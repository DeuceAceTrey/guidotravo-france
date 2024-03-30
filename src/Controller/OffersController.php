<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OffersController extends AbstractController
{

   #[Route('/offres', name: 'app_offers')]
    public function __invoke()
    {
        return $this->render('offers.html.twig');
    }
}
