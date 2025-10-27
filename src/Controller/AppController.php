<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{


	#[Route(path: '/', name: 'app_homepage')]
	#[Template('app/app_homepage.html.twig')]
	public function app_homepage(Request $request): array|Response
	{
		return [];
	}
}
