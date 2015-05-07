<?php

namespace Relaxstyle\IndexBundle\Modals;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Relaxstyle\IndexBundle\Controller\DefaultController; 
use Relaxstyle\IndexBundle\Modals\Sessionlist;

class Susercheck{
           private $loginemail;
           private $loginpwd ;
           private $rememberme;
           private $request;
           private $container;
public function __construct($request){
            $this->request=$request;
            $this->loginemail=$request->get('email');
            $this->loginpwd  =md5(($request->get('password')).'105');
            $this->rememberme=$request->get('rememberme');
            }
public function usercheck($em)
{
    $session=$this->request->getsession();
   
    $searchsql=$em->getRepository('RelaxstyleIndexBundle:Account');
    $account=$searchsql->findOneBy(array('accountemail'=>$this->loginemail ));
    $accountpass=$account->getAccountpasswd();
    if($accountpass==$this->loginpwd){
    $accountname=$account->getAccountname();
    $logina=new Sessionlist();
    $logina->setUsername($accountname);
    $logina->setUseremail($this->loginemail);
    $session->set('login' ,$logina);
     return $accountname;
    }
    else{
    return array();
    }
    }
    
    }
