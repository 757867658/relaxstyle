<?php

namespace Relaxstyle\IndexBundle\Modals;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Relaxstyle\IndexBundle\Controller;
use Relaxstyle\IndexBundle\Modals\Interfaces\Sessionlist1;
use Relaxstyle\IndexBundle\Controller\DefaultController;

class Sessionlist implements Sessionlist1 {

        private $username;
        private $useremail;
       

        public function getUsername() {
                return $this->username;
        }

        public function getUseremail() {
                return $this->useremail;
        }

        public function setUsername($username) {
                $this->username = $username;
        }

        public function setUseremail($useremail) {
                $this->useremail = $useremail;
        }
        
                 
}
