<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net9Controller extends AbstractController
{

   #[Route('/net9', name: 'app_net9')]
    public function __invoke()
    {
        return $this->render('net9.html.twig');
    }
}
