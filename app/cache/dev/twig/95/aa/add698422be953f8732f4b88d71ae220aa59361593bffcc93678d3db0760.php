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
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "   <div id=\"contents\" class=\"clear\">
  <div class=\"main-content\">
<div class=\"form\" >
<div style=\"margin: 50px auto;text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:xx-large;\">Change Password</div>
        <form id=\"cform\" action=\"http://127.0.0.1:8000/changepassword/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"post\"  style=\"width:350px;margin:0 auto;\">  
              <input type=\"text\" name=\"newpassword\" id=\"newpassword\" placeholder=\"New password\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\" />
              <br><br>
              <input type=\"password\" name=\"comfrimpassword\" id=\"comfrimpassword\" placeholder=\"Comfirm New Password\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\"/>
              <br>
              <br>
              <input class=\"btsubmit\" type=\"submit\" name=\"btsend\" value=\"Sgin In\"  style=\"font-size: 20px; color: #EA9D76; font-family: 'OpenSansBold';\"/>
              <br> <a href=\"#\" style=\"text-align:right;float: right;\">Sign In</a>
        </form>
  </div></div>
  <div class=\"sidebar\">
  <div class=\"side-paragraph\">
        <h5>About  Forgotpassword<span class=\"arrow\">&nbsp;</span></h5>
        <div> <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/simage.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\" />
          <p> When you Forgot your password .you can input send a comfirm email to your login email .</p>
          ";
        // line 22
        if (array_key_exists("errormiss", $context)) {
            // line 23
            echo "          <p><strong style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
            echo "</strong><p>
          ";
        }
        // line 25
        echo "          <p>or you can use another email address <p>
           <p><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\" style=\"text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';\">Create new account ➟ </a><p>
           
        </div>
        <span class=\"tail\">&nbsp;</span> </div>
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
        return array (  77 => 26,  74 => 25,  68 => 23,  66 => 22,  61 => 20,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
