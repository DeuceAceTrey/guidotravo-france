<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class netendController extends AbstractController
{

   #[Route('/netend', name: 'app_netend')]
    public function __invoke()
    {
        return $this->render('netend.html.twig');
    }
}
