<?php

namespace CountryTickets\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
    public function indexAction()
    {
        return $this->render('EventBundle:Default:index.html.twig');
    }
}
