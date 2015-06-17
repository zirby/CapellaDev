<?php

namespace CountryTickets\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $name));
    }
}
