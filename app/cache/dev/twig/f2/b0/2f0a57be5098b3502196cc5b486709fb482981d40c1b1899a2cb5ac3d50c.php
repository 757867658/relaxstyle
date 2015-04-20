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
        echo "  <div id=\"contents\" class=\"clear\">
  <div class=\"main-content\">
<div class=\"form\" >
<div style=\"margin: 50px auto;text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:xx-large;\">Create your Account</div>
        <form id=\"cform\" action=\"#\" method=\"pot\"  style=\"width:350px;margin:0 auto;\">  
                <input type=\"text\" class=\"required email\" id=\"email\"  name=\"loginemail\" placeholder=\"Email Address\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\" >
                <br><br>
\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"loginname\" placeholder=\"Username\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\" >
\t\t<br><br>
\t\t<input type=\"radio\" name=\"options_sex\" id=\"optionsRadios1\" value=\"Male\"> Male
\t\t<input type=\"radio\" name=\"options_sex\" id=\"optionsRadios2\" value=\"Female\"> Female
\t\t<br><br>
\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"loginpwd\" placeholder=\"Password\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\" >
\t\t<br><br>
\t\t<input type=\"password\" class=\"form-control\" id=\"password_confirm\" placeholder=\"Password Confirm\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\" >
\t\t<br><br>
\t\t <input type=\"checkbox\" name=\"privacy\" value=\"I_agree\">I agree to the <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#templatemo_modal\">Terms of Service</a> and <a href=\"#\">Privacy Policy.</a>
\t\t <br><br>
\t\t<input type=\"submit\" value=\"Create account\" class=\"btsubmit\" style=\"font-size: 20px; color: #EA9D76; font-family: 'OpenSansBold';\">\t
        </form>
  </div></div>
  <div class=\"sidebar\">
   <div class=\"sociable\">
        <h5>Find me here <span class=\"arrow\">&nbsp;</span></h5>
        <ul class=\"clear\">
          <li><a href=\"#\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/dribbble.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Dribbble\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/facebook.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Facebook\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/twitter.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Twitter\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/gplus.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Google Plus\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/rss.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Subscribe RSS\" /></a></li>
          <li class=\"last\"><a href=\"#\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/flickr.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Flickr\" /></a></li>
        </ul>
        <span class=\"tail\">&nbsp;</span> 
  </div>
  <div class=\"side-paragraph\">
        <h5>About Singup<span class=\"arrow\">&nbsp;</span></h5>
        <div> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/simage.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\" />
          <p> When you find a inputbox  appeared red, this express the input  what you inputed  is wrong ,please check. <strong style=\"color:red\">when you alread submit.you will get a email which your use singin ,you can signup success after your comfirm this email . </strong></p>
        </div>
        <span class=\"tail\">&nbsp;</span> </div>
         <div class=\"side-paragraph\">
        <h5>Alread  had  a account<span class=\"arrow\">&nbsp;</span></h5>
        <div>
          <p><a href=\"#\" style=\"text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:20px;\">Sign in ➟ </a><p>
        </div>
        <span class=\"tail\">&nbsp;</span> </div>
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
        return array (  95 => 39,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  66 => 28,  39 => 3,  36 => 2,  11 => 1,);
    }
}
