<?php

/* RelaxstyleIndexBundle:Default:index.html.twig */
class __TwigTemplate_53b7ef6b3959ce122c0bd3f9fd846ba92514cb6585fb0bc02c89cfb497da6c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" >
<!--manifest=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/html.appcache"), "html", null, true);
        echo "\"-->
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<meta name=\"keywords\" content=\"Photography, Photo Images, Responsive, Business, Corporate, Gallery, Notebook\" />
<meta name=\"description\" content=\"PhotoBax Responsive Photography Business Template\" />
<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\" />

";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"#\" href=\"#\" />
<link rel=\"shortcut icon\" href=\"#\" />


 


";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "

<title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>
<body>

<!--menu-->
";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 96
        echo "<!--endmenu-->

<div class=\"container\" id=\"homecontainer\">
<div class=\"row\" >
<!--container-->
";
        // line 101
        $this->displayBlock('container', $context, $blocks);
        // line 117
        echo "</div>
<!--endcontainer-->
<hr>
<div class=\"col-md-12\">
    <label>&copy; Copyright &copy; 2013.Dirk All rights reserved.</label>
</div>
</div>
</body>
</html>

";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/css/abootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  media=\"screen\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/my.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/js/abootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/my.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        echo "Relaxstyle Blog";
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<nav class=\"navbar navbar-default navbar-fixed-top col-md-10 col-md-offset-1\" id=\"navhome\" role=\"navigation\" >
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#example-navbar-collapse\">
            <span class=\"sr-only\">切换导航</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" herf=\"#\"><b>Relaxstyle</b></a>
   </div>
   <div class=\"collapse navbar-collapse\" id=\"example-navbar-collapse\">
      <ul class=\"nav navbar-nav\">
         <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("_Index_home");
        echo "\"><b>HOME</b></a>
         </li>
         ";
        // line 51
        if (array_key_exists("HerName", $context)) {
            // line 52
            echo "         <li class=\"dropdown\">
            <a herf=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>";
            // line 53
            echo "HerName";
            echo "</b><b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
               <li><a href=\"#\">Recently</a></li>
               <li><a href=\"#\">Essays</a></li>
               <li><a href=\"#\">Article</a></li>
               <li><a href=\"#\">Albums</a></li>
               <li><a href=\"#\">Profile</a></li>
            </ul>
         </li>
         ";
        } else {
            // line 63
            echo "         ";
        }
        // line 64
        echo "      </ul>
      <div class=\"nav navbar-nav navbar-right\">
      ";
        // line 66
        if (array_key_exists("UserName", $context)) {
            // line 67
            echo "          
            <button type=\"button\" class=\"btn btn-success navbar-btn dropdown-toggle\" data-toggle=\"dropdown\">
               <b>";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["UserName"]) ? $context["UserName"] : $this->getContext($context, "UserName")), "html", null, true);
            echo "</b><b class=\"caret\"></b>
           </button>
            <ul class=\"dropdown-menu\">
               <li><a href=\"#\" >Mamage Account</a></li>
               <li><a href=\"#\">Friend</a></li>
               <li><a href=\"#\">Block seting</a></li>
               <li><a href=\"#\">
               <span class=\"badge pull-right\">3</span>
               News</a></li>
               <li class=\"divider\"></li>
               <li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("_Index_logout");
            echo "\" style=\"color:red\">Logout</a></li>
            </ul>
      ";
        } else {
            // line 82
            echo "           <button type=\"button\" class=\"btn btn-success navbar-btn dropdown-toggle\" data-toggle=\"dropdown\">
               <b>Account</b><b class=\"caret\"></b>
           </button>
            <ul class=\"dropdown-menu\">
               <li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("_Index_signin");
            echo "\" >Sign In</a></li>
               <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("_Index_createuser");
            echo "\">Sign Up</a></li>
               <li class=\"divider\"></li>
               <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("_Index_findpassword");
            echo "\" style=\"color:red\">Forgot Password</a></li>
            </ul>
       ";
        }
        // line 92
        echo "        </div>
   </div>
</nav>
";
    }

    // line 101
    public function block_container($context, array $blocks = array())
    {
        // line 102
        echo "      <div class=\"col-md-3\" 
         style=\"background-color: #dedef8;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;\">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
            elit.
         </p>
      </div>
      <div class=\"col-md-9\" 
         style=\"background-color: #dedef8;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;\">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
            elit.
         </p>
      </div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 102,  229 => 101,  222 => 92,  216 => 89,  211 => 87,  207 => 86,  201 => 82,  195 => 79,  182 => 69,  178 => 67,  176 => 66,  172 => 64,  169 => 63,  156 => 53,  153 => 52,  151 => 51,  146 => 49,  131 => 36,  128 => 35,  122 => 29,  116 => 25,  112 => 24,  107 => 23,  104 => 22,  98 => 12,  93 => 11,  90 => 10,  76 => 117,  74 => 101,  67 => 96,  65 => 35,  56 => 29,  52 => 27,  50 => 22,  40 => 14,  38 => 10,  28 => 3,  24 => 1,);
    }
}
