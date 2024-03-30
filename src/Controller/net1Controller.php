<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net1Controller extends AbstractController
{

   #[Route('/net1', name: 'app_net1')]
    public function __invoke()
    {
        return $this->render('net1.html.twig');
    }
}
