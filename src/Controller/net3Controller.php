<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class net3Controller extends AbstractController
{

   #[Route('/net3', name: 'app_net3')]
    public function __invoke()
    {
        return $this->render('net3.html.twig');
    }
}
