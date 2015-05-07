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
        echo " <div id=\"contents\" class=\"clear\">
  <div class=\"main-content\">
<div class=\"form\" >
<div style=\"margin: 50px auto;text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:xx-large;\">Account Signin</div>
        <form id=\"cform\" action=\"#\" method=\"post\"  style=\"width:350px;margin:0 auto;\">  
              <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email Address\" class=\"required email\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\" />
              <br><br>
              <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"password\" style=\"border:3px solid #171717 ; width:100%;border-radius:7px;font-size: 16px;\"/>
              <br>
              <br>
              <input type=\"checkbox\" id=\"savepasswd\" name=\"rememberme\" value=\"rmb\"> Remember me
              <br>
              <br>
              <input class=\"btsubmit\" type=\"submit\" name=\"btsend\" value=\"Sgin In\"  style=\"font-size: 20px; color: #EA9D76; font-family: 'OpenSansBold';\"/>
              <a href=\"#\" style=\"text-align:right;float: right;\">Forgot password?</a>
        </form>
  </div></div>
  <div class=\"sidebar\">
   <div class=\"sociable\">
        <h5>Find me here <span class=\"arrow\">&nbsp;</span></h5>
        <ul class=\"clear\">
          <li><a href=\"#\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/dribbble.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Dribbble\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/facebook.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Facebook\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/twitter.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Twitter\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/gplus.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Google Plus\" /></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/rss.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Subscribe RSS\" /></a></li>
          <li class=\"last\"><a href=\"#\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/icons/flickr.png"), "html", null, true);
        echo "\" alt=\"\" title=\"Flickr\" /></a></li>
        </ul>
        <h2 style=\"color: red; font-family: 'OpenSansBold';\"/>
         ";
        // line 32
        if (array_key_exists("loginerror", $context)) {
            // line 33
            echo "         ";
            echo twig_escape_filter($this->env, (isset($context["loginerror"]) ? $context["loginerror"] : $this->getContext($context, "loginerror")), "html", null, true);
            echo "
         ";
        } else {
            // line 35
            echo "         ";
        }
        // line 36
        echo "        </h2>
        <span class=\"tail\">&nbsp;</span> 
  </div>
  <div class=\"side-paragraph\">
        <h5>About  Signin <span class=\"arrow\">&nbsp;</span></h5>
        <div> <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/simage.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\" />
          <p> IF you not have a Accout to Signin ,and if you want to join Relaxstyle .yes you can  </p>
           <p><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_Index_createuser");
        echo "\" style=\"text-align:center;font-weight:bold;color: #EA9D76; font-family: 'OpenSansBold';font-size:20px;\">Create new account ➟ </a><p>
           
        </div>
        <span class=\"tail\">&nbsp;</span> </div>
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
        return array (  111 => 43,  106 => 41,  99 => 36,  96 => 35,  90 => 33,  88 => 32,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  39 => 3,  36 => 2,  11 => 1,);
    }
}
