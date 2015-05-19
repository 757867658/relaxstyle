<?php

/* RelaxstyleIndexBundle:Default:createuser.html.twig */
class __TwigTemplate_f2b02f0a57be5098b3502196cc5b486709fb482981d40c1b1899a2cb5ac3d50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("RelaxstyleIndexBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RelaxstyleIndexBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "New Account
";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"col-md-6 col-md-offset-3\">
<div class=\"panel panel-default panel-primary\" id='logpanel'>
   <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
         New Account
      </h3>
   </div>
   <div class=\"panel-body\">
   
          ";
        // line 16
        if (array_key_exists("loginerror", $context)) {
            // line 17
            echo "           <div class=\"alert alert-warning\" id=\"alert\">
           <a href=\"#\" class=\"close\" data-dismiss=\"alert\">
           &times;
           </a>
           <strong>Warning!</strong><br>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["loginerror"]) ? $context["loginerror"] : $this->getContext($context, "loginerror")), "html", null, true);
            echo "!
           </div>
          ";
        } else {
            // line 24
            echo "          ";
        }
        // line 25
        echo "  
   <br><br>
     <div class=\"col-md-8 col-md-offset-2\">
      <form class=\"bs-example bs-example-form\" name='createform' role=\"form\" method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\">
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
         <input type=\"text\" class=\"form-control\" name='loginemail' id='email' placeholder=\"Email Address\">
      </div><br>
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
         <input type=\"text\" class=\"form-control\" name='loginname' id='username' placeholder=\"Username\">
      </div><br>
      <label class=\"checkbox-inline\">
      <input type=\"radio\" name=\"options_sex\" id=\"optionsRadios1\" 
         value=\"option2\"><b>Male</b>
      </label>
      <label class=\"checkbox-inline\">
      <input type=\"radio\" name=\"options_sex\" id=\"optionsRadios2\" 
         value=\"option2\"><b>Female</b>
      </label>
      <br><br>
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
         <input type=\"password\" class=\"form-control\" name='loginpwd' id='password' placeholder=\"Password\">
      </div><br>
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
         <input type=\"password\" class=\"form-control\" name='loginpwdconfirm' id='password_confirm' placeholder=\"Password Confirm\">
      </div><br>
      <div class=\"checkbox\">
       <label><input type=\"checkbox\" id=\"privatcyy\" name=\"privacy\" value=\"agree\">I agree to the <a href=\"#\">Privacy Policy.</a></label>
      </div>
         <button type=\"submit\" class=\"btn btn-success\">Submit</button>
      
      <br>
   </form>
   <hr>
   </div>
   </div>
</div></div>
<div class=\"col-md-3\">
<div class=\"panel panel-success panel-primary\" id='logpanel'>
   <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
         About Create Account
      </h3>
   </div>
   <div class=\"panel-body\">
   <h4><span class=\"glyphicon glyphicon-search text-success\"></span>
   When you find a inputbox appeared red, this express the input what you inputed is wrong ,please check. when you alread submit.you will get a email which your use singin ,you can signup success after your comfirm this email .</h4>
    <hr>
    <div class=\"btn-group\">
    <big><span class=\"glyphicon glyphicon-hand-right text-success\">  </span></big>
    <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("_Index_signin");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\" >Sign In</button></a>
    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\">Forgot</button></a>
    </div>
   </div>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Default:createuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 79,  134 => 78,  81 => 28,  76 => 25,  73 => 24,  67 => 21,  61 => 17,  59 => 16,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
