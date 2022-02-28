<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerBTSController extends AbstractController
{
    #[Route('/controller/b/t/s', name: 'app_controller_b_t_s')]
    public function index(): Response
    {
        return $this->render('controller_bts/index.html.twig', [
            'controller_name' => 'ControllerBTSController',
        ]);
    }
}
