<?php

/* RelaxstyleIndexBundle:Default:changepassword.html.twig */
class __TwigTemplate_95aaadd698422be953f8732f4b88d71ae220aa59361593bffcc93678d3db0760 extends Twig_Template
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
        echo "Change Password
";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo " <div class=\"col-md-6 col-md-offset-3\">
<div class=\"panel panel-default panel-primary\" id='logpanel'>
   <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
         Change password
      </h3>
   </div>
   <div class=\"panel-body\">
   <br><br>
     <div class=\"col-md-8 col-md-offset-2\">
      <form class=\"bs-example bs-example-form\" name='changeform' action=\"http://127.0.0.1:8000/changepassword/";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" role=\"form\" method=\"post\" >
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
         <input type=\"password\" class=\"form-control\" name='newpassword' id='password1' placeholder=\"Password\">
      </div><br>
      <div class=\"input-group input-group\">
         <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
         <input type=\"password\" class=\"form-control\" name='comfrimpassword' id='password2' placeholder=\"Comfirm Password\">
      </div><br>
         <button type=\"submit\" class=\"btn btn-success\">Submit</button>
      <br>
   </form>
   <hr>
   </div>
   </div>
</div></div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Default:changepassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
