<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net2Controller extends AbstractController
{

   #[Route('/net2', name: 'app_net2')]
    public function __invoke()
    {
        return $this->render('net2.html.twig');
    }
}
