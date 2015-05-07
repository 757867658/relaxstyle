<?php

namespace Relaxstyle\IndexBundle\Modals;

use Relaxstyle\IndexBundle\Modals\Sessionlist;
use Symfony\Component\HttpFoundation\Request;

class Sessionget {
            protected $login;
            
            public function  __construct($request){
            $this->login=new Sessionlist();
            $sess=$request->getsession();
           if ($sess->has('login')){
           $this->login=$sess->get('login');
           $this->login->getUsername();
           $this->login->getUseremail();
            }
            }

           public function getloginname(){
           return $this->login->getUsername();
           }
           public function getloginemail(){
           return $this->login->getUseremail();
           }
}        