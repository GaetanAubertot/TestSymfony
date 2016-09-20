<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @route("/page2", name="page2")
     */
    public function pageAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/page.html.twig');
    }
}
