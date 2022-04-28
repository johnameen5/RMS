<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @Route("/",methods={"GET"},name="test")
     * @return Response
     */
    public function indexAction(): Response
    {
        return new Response(json_encode(["Hello"=>"World"]),Response::HTTP_OK);
    }

}