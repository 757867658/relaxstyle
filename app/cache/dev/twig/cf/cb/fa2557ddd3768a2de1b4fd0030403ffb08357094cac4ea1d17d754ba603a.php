<?php

/* RelaxstyleIndexBundle:Block:index.html.twig */
class __TwigTemplate_cfcbfa2557ddd3768a2de1b4fd0030403ffb08357094cac4ea1d17d754ba603a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
            'texttag' => array($this, 'block_texttag'),
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
        // line 16
        echo "
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"#\" href=\"#\" />
<link rel=\"shortcut icon\" href=\"#\" />

";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
<title>This is an Awesome Responsive Website Template</title>
</head>
<body>
  <!--HEADER-->
  
  ";
        // line 57
        $this->displayBlock('menu', $context, $blocks);
        // line 148
        echo "  <!--SLIDER-->
  <!--SITE CONTAINER-->
    <div id=\"container\">
    ";
        // line 151
        $this->displayBlock('container', $context, $blocks);
        // line 153
        echo "    
    ";
        // line 154
        $this->displayBlock('texttag', $context, $blocks);
        // line 186
        echo "    
 <!--FOOTER-->
  <div id=\"footer\">
    <label>&copy; Copyright &copy; 2013.Company name All rights reserved.</label>
  </div>
</div>

<p><a href=\"#\" id=\"toTop\">&uarr;</a></p>
<script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\t\$(\"#cform\").validate();
\t});
</script>
<!--FOR PREVIEW ONLY-->
<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/styleswitch.js"), "html", null, true);
        echo "\"></script>
<div><span class=\"door\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/img/setting.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" /></span></div>
<div class=\"options\"> <span class=\"close\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/img/close.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" /></span>
  <h4>Background Patterns</h4>
  <ul>
    <li><a href=\"#\" id=\"styles\" class=\"styleswitch\" title=\"pt-1\" style=\"background-image: url(\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/body-bg.jpg"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles2\" class=\"styleswitch\" title=\"pt-2\" style=\"background-image: url(\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/1.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles3\" class=\"styleswitch\" title=\"pt-3\" style=\"background-image: url(\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/2.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles4\" class=\"styleswitch\" title=\"pt-4\" style=\"background-image: url(\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/3.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles5\" class=\"styleswitch\" title=\"pt-5\" style=\"background-image: url(\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/4.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles6\" class=\"styleswitch\" title=\"pt-6\" style=\"background-image: url(\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/5.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles7\" class=\"styleswitch\" title=\"pt-7\" style=\"background-image: url(\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/6.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles8\" class=\"styleswitch\" title=\"pt-8\" style=\"background-image: url(\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/7.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles9\" class=\"styleswitch\" title=\"pt-9\" style=\"background-image: url(\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/8.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles10\" class=\"styleswitch\" title=\"pt-10\" style=\"background-image: url(\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/9.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles11\" class=\"styleswitch\" title=\"pt-11\" style=\"background-image: url(\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/10.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles12\" class=\"styleswitch\" title=\"pt-12\" style=\"background-image: url(\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/11.png"), "html", null, true);
        echo "\");\"></a></li>
  </ul>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
 <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/superfish/superfish.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  media=\"screen\" />
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/styling.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/jquery.trigger.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/scrolltop.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/flickr/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/flickr/setup.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/fancybox/jquery.mousewheel-3.0.4.pack.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/fancybox/jquery.fancybox-1.3.4.pack.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/fancybox/jquery.fancybox-1.3.4.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/superfish/superfish.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/tipsy/jquery.tipsy.js"), "html", null, true);
        echo "\"></script>
<script type='text/javascript'>
\t\$(function() {    
\t\t\$('.sociable li a img').tipsy({gravity: 'n'});\t\t
\t});
</script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/selectbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/hover.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\tjQuery(function(\$){
\t\t\$(\"#tweet\").tweet({
\t\t\tavatar_size: 32,
\t\t\tcount: 2,
\t\tquery: \"themeforest\",
\t\tloading_text: \"Loading Tweets...\"
\t\t});
\t});
</script>
";
    }

    // line 57
    public function block_menu($context, array $blocks = array())
    {
        // line 58
        echo "  <div id=\"headera\">
  <div id=\"header\" class=\"clear\">
    <!--LOGO-->
    <div class=\"logo\">
      <h1><a href=\"index.html\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" /></a></h1>
    </div>
    <!--MENU-->
    <nav>
      <ul class=\"sf-menu\">
        <li class=\"active\"><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("_Index_home");
        echo "\">Home</a>
          <ul>
            <li><a href=\"index-alternate.html\">Alternate Homepage 1</a></li>
            <li><a href=\"index-alternate-1.html\">Alternate Homepage 2</a></li>
            <li><a href=\"index-fullwidth.html\">Alternate Fullwidth</a></li>
            <li> <a href=\"#\">Sliders</a>
              <ul>
                <li><a href=\"index-flex.html\">FlexSlider</a></li>
                <li><a href=\"index-nivo.html\">Nivo Slider</a></li>
                <li><a href=\"index-coin.html\">Coin Slider</a></li>
                <li><a href=\"index-elasticslide.html\">Elastic Slider</a></li>
                <li><a href=\"index.html\">Image Rotator</a></li>
                <li><a href=\"index-slideshow.html\">Simple Slideshow</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href=\"#\">Pages</a>
          <ul>
            <li><a href=\"about.html\">About</a></li>
            <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
            <li><a href=\"fullwidth.html\">Fullwidth</a></li>
            <li> <a href=\"#\">Theme Elements</a>
              <ul>
                <li><a href=\"headings.html\">Headings</a></li>
                <li><a href=\"blockquotes.html\">Blockquotes</a></li>
                <li><a href=\"dropcaps.html\">Dropcaps</a></li>
                <li><a href=\"list-icons.html\">List Icons</a></li>
                <li><a href=\"buttons.html\">CSS3 Buttons</a></li>
                <li><a href=\"notification.html\">Notifications</a></li>
                <li><a href=\"tables.html\">Tables</a></li>
                <li><a href=\"tabs-accordion.html\">Tabs &amp; Accordion</a></li>
                <li><a href=\"columns.html\">Columns</a></li>
              </ul>
            </li>
            <li><a href=\"404-page.html\">404 Page</a></li>
          </ul>
        </li>
        <li><a href=\"#\">Gallery</a>
          <ul>
            <li><a href=\"gallery-1col.html\">Gallery 1 Column</a></li>
            <li><a href=\"gallery-2cols.html\">Gallery 2 Columns</a></li>
            <li><a href=\"gallery-3cols.html\">Gallery 3 Columns</a></li>
            <li><a href=\"gallery-carousel.html\">Gallery Carousel</a></li>
            <li><a href=\"gallery-montage.html\">Gallery Montage</a></li>
          </ul>
        </li>
        <li><a href=\"#\">Blog</a>
          <ul>
            <li><a href=\"blog-list.html\">List Style</a></li>
            <li><a href=\"blog-grid.html\">Grid Style</a></li>
            <li><a href=\"blog-list-alternate.html\">Alternate Style</a></li>
            <li><a href=\"single.html\">Single Page</a></li>
          </ul>
          ";
        // line 121
        if (array_key_exists("UserName", $context)) {
            // line 122
            echo "           <li><a href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["UserName"]) ? $context["UserName"] : $this->getContext($context, "UserName")), "html", null, true);
            echo "</a>
\t       <ul>
\t          <li><a href=\"#\"><strong>Manage Account</strong></a></li>
\t          <li><a href=\"#\"><strong>InBox</strong></a></li>
\t  <hr>
\t          <li><a href=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("_Index_logout");
            echo "\"><strong style=\"color:red;\">Sign out</strong></a></li>
\t      </ul>
\t    </li>
          ";
        } else {
            // line 131
            echo "        </li>
       <li><a href=\"#\">Account</a>
\t  <ul>
\t  <li><a href=\"";
            // line 134
            echo $this->env->getExtension('routing')->getPath("_Index_signin");
            echo "\"><strong>Sign In</strong></a></li>
\t  <li><a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("_Index_createuser");
            echo "\"><strong>Sign Up</strong></a></li>
\t  <li><a href=\"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("_Index_findpassword");
            echo "\"><strong>Forgot Password</strong></a></li>
\t  </ul>
\t </li>
\t </li>
\t ";
        }
        // line 141
        echo "      </ul>
    </nav>
    <!-- end menu -->
    <div class=\"clear\"></div>
  </div>
  </div>
  ";
    }

    // line 151
    public function block_container($context, array $blocks = array())
    {
        // line 152
        echo "    ";
    }

    // line 154
    public function block_texttag($context, array $blocks = array())
    {
        // line 155
        echo "  
  <div id=\"footer-columns\" class=\"clear\">
    <!--TAGS-->
    <div class=\"tags\">
      <h5>Tag Cloud</h5>
      <a href=\"#\">bowling</a> <a href=\"#\">wedding</a> <a href=\"#\">landscape</a> <a href=\"#\">underwater</a> <a href=\"#\">species</a> <a href=\"#\">wildlife</a> <a href=\"#\">photography</a> <a href=\"#\">mountains</a> <a href=\"#\">underwater</a> <a href=\"#\">species</a> <a href=\"#\">wildlife</a> <a href=\"#\">photography</a> <a href=\"#\">mountains</a> <a href=\"#\">Scenery</a> <a href=\"#\">Wild Creatures</a> <a href=\"#\">Magazine</a> <a href=\"#\">Small</a> <a href=\"#\">World</a> </div>
    <!--ARCHIVES-->
    <div class=\"archive\">
      <h5>Archives</h5>
      <ul>
        <li><a href=\"#\">February 2012</a> (200)</li>
        <li><a href=\"#\">January 2012</a> (50)</li>
        <li><a href=\"#\">December 2011</a> (20)</li>
        <li><a href=\"#\">November 2011</a> (20)</li>
        <li><a href=\"#\">October 2011</a> (20)</li>
        <li><a href=\"#\">September 2011</a> (20)</li>
      </ul>
    </div>
    <!--TWITTER FEED-->
    <div class=\"tweet\">
      <h5>Twitter Feed</h5>
      <div id=\"tweet1\">&nbsp;</div>
    </div>
    <!--ABOUT-->
    <div class=\"about-brief\">
      <h5>Text Widget</h5>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
    </div>
  </div>
  
    ";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Block:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 155,  393 => 154,  389 => 152,  386 => 151,  376 => 141,  368 => 136,  364 => 135,  360 => 134,  355 => 131,  348 => 127,  339 => 122,  337 => 121,  280 => 67,  272 => 62,  266 => 58,  263 => 57,  247 => 39,  243 => 38,  239 => 37,  235 => 36,  226 => 30,  222 => 29,  218 => 28,  214 => 27,  210 => 26,  206 => 25,  202 => 24,  198 => 23,  194 => 22,  189 => 21,  186 => 20,  180 => 14,  176 => 13,  172 => 12,  167 => 11,  164 => 10,  152 => 218,  148 => 217,  144 => 216,  140 => 215,  136 => 214,  132 => 213,  128 => 212,  124 => 211,  120 => 210,  116 => 209,  112 => 208,  108 => 207,  102 => 204,  98 => 203,  94 => 202,  84 => 195,  80 => 194,  70 => 186,  68 => 154,  65 => 153,  63 => 151,  58 => 148,  56 => 57,  48 => 51,  46 => 20,  40 => 16,  38 => 10,  28 => 3,  24 => 1,);
    }
}
