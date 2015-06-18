<?php

namespace CountryTickets\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlockController extends Controller
{
    public function indexAction()
    {
        return $this->render('EventBundle:Default:Blocks/layout/blocks.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('EventBundle:Default:Blocks/layout/presentation.html.twig');
    }

    
    }
