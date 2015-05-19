<?php

/* RelaxstyleIndexBundle:Default:findpassword.html.twig */
class __TwigTemplate_2e7842ef89c8e4edfcd88e62ca6531bb78642868e514552ba2b08b36a3e31d29 extends Twig_Template
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
        echo "Forgot password
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
         Forgot password
      </h3>
   </div>
   <div class=\"panel-body\">
   
          ";
        // line 16
        if (array_key_exists("nofind", $context)) {
            // line 17
            echo "           <div class=\"alert alert-warning\" id=\"alert\">
           <a href=\"#\" class=\"close\" data-dismiss=\"alert\">
           &times;
           </a>
           <strong>Warning!</strong><br>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["nofind"]) ? $context["nofind"] : $this->getContext($context, "nofind")), "html", null, true);
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
      <form class=\"bs-example bs-example-form\" name='findform' role=\"form\" method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_Index_findpassword");
        echo "\">
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
         <input type=\"text\" class=\"form-control\" name='email' id='email' placeholder=\"Email Address\" value=\"";
        // line 31
        if (array_key_exists("comfirmemail", $context)) {
            echo twig_escape_filter($this->env, (isset($context["comfirmemail"]) ? $context["comfirmemail"] : $this->getContext($context, "comfirmemail")), "html", null, true);
        }
        echo "\">
      </div><br>
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
         About Findpassword
      </h3>
   </div>
   <div class=\"panel-body\">
   <h4><span class=\"glyphicon glyphicon-search text-success\"></span>
   When you Forgot your password .you can input send a comfirm email to your login email .
    or you can use another email address</h4>
    <hr>
    <div class=\"btn-group\">
    <big><span class=\"glyphicon glyphicon-hand-right text-success\">  </span></big>
    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("_Index_signin");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\" >Sign In</button></a>
    <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\">Sign Up</button></a>
    </div>
   </div>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Default:findpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  115 => 54,  87 => 31,  81 => 28,  76 => 25,  73 => 24,  67 => 21,  61 => 17,  59 => 16,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
