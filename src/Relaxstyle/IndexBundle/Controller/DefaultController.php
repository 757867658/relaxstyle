<?php

namespace Relaxstyle\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home" , name="_Index")
     * @Template()
     */
    public function homeAction()
    {
       return array();
    }

       /**
     * @Route("/signin" , name="_Index")
     * @Template()
     */
    public function signinAction()
    {
       return array();
    }
    
      /**
     * @Route("/createuser" , name="_Index")
     * @Template()
     */
    public function createuserAction()
    {
       return array();
    }
}
