<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'app.projects', methods: ['GET'])]

    public function index(): Response
    {
        return $this->render('projects/_index.projects.html.twig');
    }
}
