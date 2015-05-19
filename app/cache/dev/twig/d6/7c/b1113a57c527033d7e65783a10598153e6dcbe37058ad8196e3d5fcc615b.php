<?php

/* RelaxstyleIndexBundle:Default:signin.html.twig */
class __TwigTemplate_d67cb1113a57c527033d7e65783a10598153e6dcbe37058ad8196e3d5fcc615b extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Account Signin
";
    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"col-md-6 col-md-offset-3\">
<div class=\"panel panel-default panel-primary\" id='logpanel'>
   <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
         Account Signin
      </h3>
   </div>
   <div class=\"panel-body\">
   
          ";
        // line 17
        if (array_key_exists("loginerror", $context)) {
            // line 18
            echo "           <div class=\"alert alert-warning\" id=\"alert\">
           <a href=\"#\" class=\"close\" data-dismiss=\"alert\">
           &times;
           </a>
           <strong>Warning!</strong><br>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["loginerror"]) ? $context["loginerror"] : $this->getContext($context, "loginerror")), "html", null, true);
            echo "!
           </div>
          ";
        } else {
            // line 25
            echo "          ";
        }
        // line 26
        echo "  
   <br><br>
     <div class=\"col-md-8 col-md-offset-2\">
      <form class=\"bs-example bs-example-form\" name='signinform' role=\"form\" method=\"post\" action=\"#\">
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
         <input type=\"text\" class=\"form-control\" name='email' id='email' placeholder=\"Email Address\">
      </div><br>
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
         <input type=\"password\" class=\"form-control\" name='password' id='password' placeholder=\"Password\">
      </div><br>
         <button type=\"submit\" class=\"btn btn-success\">Sign In</button>
         <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_Index_findpassword");
        echo "\" class='pull-right'><small>Forgot password?<small></a>
      <br>
   </form>
   <hr>
     <h5 class=\"pull-right\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\">Not have a sign accout!</a></h5>
   </div>
   </div>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Default:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  91 => 39,  76 => 26,  73 => 25,  67 => 22,  61 => 18,  59 => 17,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
