<?php


namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController
{
    public function dashboard(): Response
    {

//        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render(
            'Admin/dashboard.html.twig',
            [
            ]
        );
    }
}
