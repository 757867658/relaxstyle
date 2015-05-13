<?php

namespace Relaxstyle\IndexBundle\Modals;

use Symfony\Component\HttpFoundation\Request;
use Relaxstyle\IndexBundle\Entity\Findlist;
use Relaxstyle\IndexBundle\Entity\Account;

class Relaxmail{


    function mailsend($thi,$loginemail){
    
     $em=$thi->getDoctrine()->getEntityManager();
     $searchsql=$em->getRepository('RelaxstyleIndexBundle:Account');
     $findsql=$em->getRepository('RelaxstyleIndexBundle:Findlist');
     $emailresult=$searchsql->findOneBy(array('accountemail'=>$loginemail));
     $findresult=$findsql->findOneBy(array('accountemail'=>$loginemail ));
     if($emailresult){
     if(!$findresult){
     $my_t=gettimeofday(true);
     $accountfind = md5('m'.$loginemail.$my_t);
     $infindsql=new Findlist();
     $infindsql->setAccountfind($accountfind);
     $infindsql->setAccountemail($loginemail);
     $infindsql->setStatus('1');
     $em->persist($infindsql);
     $em->flush();
     $mailer = $thi->get('mailer');
     $message = $mailer->createMessage()
                       ->setSubject('Relaxstyle Password Comfirm')
                       ->setFrom('dirk.wang@samesamechina.com')
                       ->setTo($loginemail)
                       ->setBody(
            $thi->renderView('RelaxstyleIndexBundle:Block:findaccount.html.twig',
            array('accountmail'=> $loginemail ,'accountfind' => $accountfind)),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $mailer->send($message);
    return 'a';
   }
   else{
    return 'b';
  }
 }
return 'c';
}
 
      function changepassword($thi,$accountfind,$newpassword){
        $em = $thi->getDoctrine()->getEntityManager();
        $searchsql = $em->getRepository('RelaxstyleIndexBundle:Account');
        $findsql=$em->getRepository('RelaxstyleIndexBundle:Findlist');
        $findresult=$findsql->findOneBy(array('accountfind'=>$accountfind));
        $loginemail=$findresult->getAccountemail();
        $emailresult=$searchsql->findOneBy(array('accountemail'=>$loginemail));
        $loginpwd = md5($newpassword.'105');
        $emailresult->setAccountpasswd($loginpwd);
        $findresult->setStatus('0');
        $findresult->setAccountemail($loginemail.'0');
        $em->persist($emailresult);
        $em->persist($findresult);
        $em->flush();
         return true;
        }
        
        
        function signupsend($thi,$signupid,$loginemail){
        $mailer = $thi->get('mailer');
        $message = $mailer->createMessage()
                       ->setSubject('Relaxstyle Createaccount Comfirm')
                       ->setFrom('dirk.wang@samesamechina.com')
                       ->setTo($loginemail)
                       ->setBody(
            $thi->renderView('RelaxstyleIndexBundle:Block:signuplist.html.twig',
            array('accountmail'=> $loginemail ,'signupid' => $signupid)),
            'text/html'
        );
        $mailer->send($message);
        return true;
        }
        
        function signinto($thi,$signupid){
        $em = $thi->getDoctrine()->getEntityManager();
        $searchsql = $em->getRepository('RelaxstyleIndexBundle:Account');
        $signsql=$em->getRepository('RelaxstyleIndexBundle:Signuplist');
        $signresult=$signsql->findOneBy(array('signupid'=>$signupid));
        $accountemail = $signresult->getAccountemail();
        $accountname  = $signresult->getAccountname();
        $accountpasswd = $signresult->getAccountpasswd();
        $accountsex = $signresult->getAccountsex();
        $signresult->setStatus('0');
        $signresult->setAccountemail($accountemail.'0');
        $signupin = new Account();
        $signupin->setAccountemail($accountemail);
        $signupin->setAccountname($accountname);
        $signupin->setAccountpasswd($accountpasswd);
        $signupin->setAccountsex($accountsex);
        $em->persist($signresult);
        $em->persist($signupin);
        $em->flush();
        return true;
        }
        
}