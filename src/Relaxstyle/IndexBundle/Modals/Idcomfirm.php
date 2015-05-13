<?php

namespace Relaxstyle\IndexBundle\Modals;

use Symfony\Component\HttpFoundation\Request;
use Relaxstyle\IndexBundle\Entity\Findlist;
use Relaxstyle\IndexBundle\Entity\Signuplist;
use Relaxstyle\IndexBundle\Entity\Account;

class Idcomfirm{
        function changepasswordid($thi,$id){
        $em=$thi->getDoctrine()->getEntityManager();
        $findsql=$em->getRepository('RelaxstyleIndexBundle:Findlist');
        $findresult=$findsql->findOneBy(array('accountfind'=>$id));
        if($findresult){
        $status=$findresult->getStatus();
        if($status==1){
        $logemail=$findresult->getAccountemail();
        return $logemail;
        }
        return 'b';
        }
        return 'c';
       
  }
        function signupok($thi,$id){
        $em=$thi->getDoctrine()->getEntityManager();
        $findsql=$em->getRepository('RelaxstyleIndexBundle:Signuplist');
        $findresult=$findsql->findOneBy(array('signupid'=>$id));
        if($findresult){
        $status=$findresult->getStatus();
        if($status==1){
        return 'a';
        }
        return 'b';
        }
        return 'c';
        
        }
}