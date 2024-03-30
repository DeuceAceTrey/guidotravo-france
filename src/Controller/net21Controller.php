<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net21Controller extends AbstractController
{

   #[Route('/net21', name: 'app_net21')]
    public function __invoke()
    {
        return $this->render('net21.html.twig');
    }
}
