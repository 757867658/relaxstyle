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
";
        // line 6
        if (array_key_exists("nofind", $context)) {
            // line 7
            echo "  <div style=\"margin: 50px auto;text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:xx-large;\">";
            echo twig_escape_filter($this->env, (isset($context["nofind"]) ? $context["nofind"] : $this->getContext($context, "nofind")), "html", null, true);
            echo "</div></div>
";
        } else {
            // line 9
            echo "<div style=\"margin: 50px auto;text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:xx-large;\">Forgot password</div>
        <form id=\"cform\" action=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("_Index_findpassword");
            echo "\" method=\"post\"  style=\"width:450px;margin:0 auto;\">  
       <ul class=\"clear\">
       <li>
              <label class=\"la\" for=\"email\"  style=\"text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:20px\">Email</label>
              <input type=\"text\" name=\"email\" id=\"email\" class=\"required email \"  style=\"width:300px\" value=
               \"";
            // line 15
            if (array_key_exists("errormiss", $context)) {
                echo twig_escape_filter($this->env, (isset($context["comfirmemail"]) ? $context["comfirmemail"] : $this->getContext($context, "comfirmemail")), "html", null, true);
            }
            echo "\"
              />
        </li>
        </ul>
              <br>
              <input class=\"btsubmit\" type=\"submit\" name=\"btsend\" value=\"Submit\"  style=\"font-size: 20px; color: #EA9D76; font-family: 'OpenSansBold';\"/>
              <br> <a href=\"#\" style=\"text-align:right;float: right;\">Sign In</a>
        </form>
  </div>
  ";
        }
        // line 25
        echo "  </div>
  <div class=\"sidebar\">
  <div class=\"side-paragraph\">
        <h5>About  Forgotpassword<span class=\"arrow\">&nbsp;</span></h5>
        <div> <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/simage.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\" />
          <p> When you Forgot your password .you can input send a comfirm email to your login email .</p>
          ";
        // line 31
        if (array_key_exists("errormiss", $context)) {
            // line 32
            echo "          <p><strong style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
            echo "</strong><p>
          ";
        }
        // line 34
        echo "          <p>or you can use another email address <p>
           <p><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\" style=\"text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';\">Create new account ➟ </a><p>
           
        </div>
        <span class=\"tail\">&nbsp;</span> </div>
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
        return array (  100 => 35,  97 => 34,  91 => 32,  89 => 31,  84 => 29,  78 => 25,  63 => 15,  55 => 10,  52 => 9,  46 => 7,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
