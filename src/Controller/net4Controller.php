<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net4Controller extends AbstractController
{

   #[Route('/net4', name: 'app_net4')]
    public function __invoke()
    {
        return $this->render('net4.html.twig');
    }
}
