<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppBundleController extends AbstractController
{
    /** @Route("/",methods={"GET"}) */
    public function testAction(Request $request): Response
    {
        return new Response(json_encode(['Hello' => 'nardin']), Response::HTTP_OK);
    }
}