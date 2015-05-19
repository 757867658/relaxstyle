<?php

/* RelaxstyleIndexBundle:Default:warning.html.twig */
class __TwigTemplate_ec33388b0ec9e3cde648773be600c39b042d1ef008497dcd58c7e17739bfb3c2 extends Twig_Template
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
        echo "Warning
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
         Warning
      </h3>
   </div>
   <div class=\"panel-body\">
          ";
        // line 15
        if (array_key_exists("nofind", $context)) {
            // line 16
            echo "          <h3 class=\"text-success\"><strong>";
            echo twig_escape_filter($this->env, (isset($context["nofind"]) ? $context["nofind"] : $this->getContext($context, "nofind")), "html", null, true);
            echo "</strong></h3>
          ";
        } else {
            // line 18
            echo "          
          ";
        }
        // line 20
        echo "   </div>
</div>
</div>
<div class=\"col-md-3\">
<div class=\"panel panel-success panel-primary\" id='logpanel'>
   <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
         About Relaxstyle
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
        // line 37
        echo $this->env->getExtension('routing')->getPath("_Index_signin");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\" >Sign In</button></a>
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\">Sign Up</button></a>
    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_Index_findpassword");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-sm\">Forgot</button></a>
    </div>
   </div>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Default:warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  93 => 38,  89 => 37,  70 => 20,  66 => 18,  60 => 16,  58 => 15,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
