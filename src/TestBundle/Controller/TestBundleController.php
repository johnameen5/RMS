<?php

namespace App\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestBundleController extends AbstractController
{
    /** @Route("/",methods={"GET"}) */
    public function testAction(Request $request): Response
    {
        return new Response(json_encode(['Hello'=>'world2']), Response::HTTP_OK);
    }
}