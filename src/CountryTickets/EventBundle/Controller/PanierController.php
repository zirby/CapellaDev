<?php

namespace CountryTickets\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function indexAction()
    {
        return $this->render('EventBundle:Default:Panier/layout/panier.html.twig');
    }
    public function validationAction()
    {
        return $this->render('EventBundle:Default:Panier/layout/validation.html.twig');
    }
}
