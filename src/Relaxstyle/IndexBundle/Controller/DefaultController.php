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
    public function createuserAction(Request $request)
    {
    $session=$this->getRequest()->getsession();
    $em=$this->getDoctrine()->getEntityManager();
    $searchsql=$em->getRepository('RelaxstyleIndexBundle:Account');
    
    if($request->getMethod() == 'POST'){
            $session->clear();
            $loginemail=$request->get('loginemail');
            $loginname=$request->get('loginname');
            $loginpwd  =md5($request->get('loginpwd').'105');
            $options_sex=$request->get('options_sex');
            $emailresult=$searchsql->findOneBy(array('accountemail'=>$loginemail));
            if ($emailresult){
            return $this->render('RelaxstyleIndexBundle:Default:findpassword.html.twig' ,array('comfirmemail'=>$loginemail ,'result'=>"Your email has been registered,you can signin or find you password ,also you can use another email signup."));
            }
            else{
            $inputsql=new Account;
            $inputsql->setAccountemail($loginemail);
            $inputsql->setAccountname($loginname);
            $inputsql->setAccountpasswd($loginpwd );
            $inputsql->setAccountsex($options_sex);
            $em->persist($inputsql);
            $em->flush();
            return $this->render('RelaxstyleIndexBundle:Default:signin.html.twig');
            }
            }
       return array();
     }
    
     /**
     * @Route("/findpassword" , name="_Index_findpassword")
     * @Template()
     */
    public function findpasswordAction()
    {
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
}
