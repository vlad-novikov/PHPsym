<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
	 
    public function list()
    {
	return new Response(
            '<html><body><H1>This is list of blog posts</H1></body></html>'
        );
    }

    /**
     * Matches /blog/*
     * but not /blog/slug/extra-part
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'
	return new Response(
            '<html><body><H1>This is Blog '.$slug.'</H1></body></html>'
        );
        // ...
    }
}