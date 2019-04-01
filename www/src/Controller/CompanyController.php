<?php
// src/Controller/CompanyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends AbstractController
{
    /**
     * @Route({
     *     "nl": "/over",
     *     "en": "/about"
     * }, name="about_us")
     */
    public function about()
    {
        // ...
		return new Response(
            '<html><body><H1>About our Company</H1></body></html>'
        );		
    }
}