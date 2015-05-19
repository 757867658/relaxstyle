<?php

namespace Relaxstyle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/blog/home" , name="_blog_home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
     
     /**
     * @Route("/blog/article/write" , name="_blog_article_write")
     * @Template()
     */
    public function articlewriteAction()
    {
        return array();
    }
}
