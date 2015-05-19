<?php

namespace Relaxstyle\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Relaxstyle\IndexBundle\Entity\Account;
use Symfony\Component\HttpFoundation\Request;
use Relaxstyle\IndexBundle\Modals\Sessionlist;
use Relaxstyle\IndexBundle\Modals\Sessionget;
use Relaxstyle\IndexBundle\Modals\Susercheck;
use Relaxstyle\IndexBundle\Modals\Relaxmail;
use Relaxstyle\IndexBundle\Modals\Idcomfirm;
use Relaxstyle\IndexBundle\Entity\Signuplist;



class DefaultController extends Controller
{
    /**
     * @Route("/home" , name="_Index_home")
     * @Template()
     */
    public function homeAction(Request $request)
    {
    $loginn=new Sessionget($request);
    if ($loginn->getloginname()){
    return array('UserName'=>$loginn->getloginname());
    }
    
       return array();
    }

       /**
     * @Route("/signin" , name="_Index_signin")
     * @Template()
     */
    public function signinAction(Request $request)
    {
    $loginn=new Sessionget($request);
    if ($loginn->getloginname()){
    return $this->redirect($this->generateUrl('_Index_home'));
    }
    $em=$this->container->get('doctrine')->getEntityManager();
    if ($request->getMethod() == 'POST'){
    $signa=new Susercheck($request);
    $qq=$signa->usercheck($em);
    if($qq){
     return $this->redirect($this->generateUrl('_Index_home'));
    }
    else{
    return $this->render('RelaxstyleIndexBundle:Default:signin.html.twig',array('loginerror'=>'Login Error'));
    }
    }
    return array();
    }
     
    
      /**
     * @Route("/createuser" , name="_Index_createuser")
     * @Template()
     */
    public function createuser1Action(Request $request)
    {
    $session=$this->getRequest()->getsession();
    $em=$this->getDoctrine()->getEntityManager();
    $searchsql=$em->getRepository('RelaxstyleIndexBundle:Account');
    $signsql=$em->getRepository('RelaxstyleIndexBundle:Signuplist');
    /**session check*/
    
    $loginn=new Sessionget($request);
    if ($loginn->getloginname()){
    return $this->redirect($this->generateUrl('_Index_home'));
    }
    
   /**end*/    
    
    if($request->getMethod() == 'POST'){
            $session->clear();
            $loginemail=$request->get('loginemail');
            $loginname=$request->get('loginname');
            $loginpwd  = md5(($request->get('loginpwd')).'105');
            $options_sex=$request->get('options_sex');
            $emailresult=$searchsql->findOneBy(array('accountemail'=>$loginemail));
            if ($emailresult){
            return $this->render('RelaxstyleIndexBundle:Default:findpassword.html.twig' ,array('comfirmemail'=>$loginemail ,'nofind'=>"This email has been registered,you can signin or find you password ,also you can use another email signup."));
            }
            else{
            $signresult=$signsql->findOneBy(array('accountemail'=>$loginemail));
            if(!$signresult){
            $my_t=gettimeofday(true);
            $signupid = md5('m'.$loginemail.$my_t);
            $inputsql=new Signuplist();
            $inputsql->setSignupid($signupid);
            $inputsql->setAccountemail($loginemail);
            $inputsql->setAccountname($loginname);
            $inputsql->setAccountpasswd($loginpwd );
            $inputsql->setAccountsex($options_sex);
            $inputsql->setStatus('1');
            $em->persist($inputsql);
            $em->flush();
            $signupsend=new Relaxmail();
            $signupsend->signupsend($this,$signupid,$loginemail);
            return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'The comfirm email alread send to your mailbox ,please comfirm it if you want active your account.' ));
            }
            else{
            return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'You already sended a comirm email,please check your mailbox.' ));
            }
            }
       return array();
     }
     }
    
     /**
     * @Route("/findpassword" , name="_Index_findpassword")
     * @Template()
     */
    public function findpasswordAction(Request $request)
    {
       if($request->getMethod() == 'POST'){
       $loginemail=$request->get('email');
       $mailsend=new Relaxmail();
       $result=$mailsend->mailsend($this,$loginemail);
       switch ($result)
                {
                  case 'a':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'Please check your email.and change your password' ));break;
                  case 'b':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'You already sended a comirm email,please check your mailbox' ));break;
                  case 'c':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'This account have not to be Signup' ));break;
                  default:
                      return array();
                }
         }
      return array();
    }
    
    
     /**
     * @Route("/logout" , name="_Index_logout")
     * @Template()
     */
    public function logoutAction(Request $request)
    {
       $session=$request->getsession();
       $session->clear();
       return $this->redirect($this->generateUrl('_Index_signin'));
    }
    
    
     /**
     * @Route("/changepassword/{id}" )
     * @Template()
     */
     public function changepasswordAction($id,Request $request)
    {
       $idcomfirm=new Idcomfirm();
       $resultid=$idcomfirm->changepasswordid($this,$id);
       switch($resultid)
                {
                  case 'b':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'This page already expire' ));break;
                  case 'c':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'A black page' ));break;
                  default:
                         break;
                }
       if($request->getMethod() == 'POST'){
       $newpassword=$request->get('newpassword');
       $mailsend=new Relaxmail();
       $result=$mailsend->changepassword($this,$id,$newpassword);
       if($result){
       return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'Change Password Success' ));
       }
       }
       return array('id'=>$id);
       }
           
     /**
     * @Route("/signupko/{id}" )
     * @Template()
     */  
     public function signupkoAction($id)
    {
       $idcomfirm=new Idcomfirm();
       $resultid=$idcomfirm->signupok($this,$id);
       switch($resultid)
                {
                  case 'b':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'This page already expire' ));break;
                  case 'c':
                      return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'A black page' ));break;
                  default:
                      $signinto=new Relaxmail();   
                      $result=$signinto->signinto($this,$id);
                      if($result){
                           return $this->render('RelaxstyleIndexBundle:Default:warning.html.twig' ,array('nofind'=>'Comfirm Success,please Sign in enjoy your Relaxstyle' ));
                      }
                      break;
                }
      
      }     
                
}