<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class OneController 
{
    
	/**
     * @Route("/1")
     */
	 
    public function index()
    {
        // ...
		return new Response(
            '<html><body><H1>This is One Controller</H1></body></html>'
        );
    }
}