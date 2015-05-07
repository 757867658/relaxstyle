<?php

namespace Relaxstyle\IndexBundle\Modals\Interfaces;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Relaxstyle\IndexBundle\Controller;
use Relaxstyle\IndexBundle\Controller\DefaultController;


interface Sessionlist1
{
public function getUsername();
public function getUseremail();
public function setUsername($username);
public function setUseremail($useremail);
}
