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
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
            'texttag' => array($this, 'block_texttag'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

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
        // line 149
        echo "  <!--SLIDER-->
  <!--SITE CONTAINER-->
    <div id=\"container\">
    ";
        // line 152
        $this->displayBlock('container', $context, $blocks);
        // line 154
        echo "    
    ";
        // line 155
        $this->displayBlock('texttag', $context, $blocks);
        // line 187
        echo "    
 <!--FOOTER-->
  <div id=\"footer\">
    <label>&copy; Copyright &copy; 2013.Company name All rights reserved.</label>
  </div>
</div>

<p><a href=\"#\" id=\"toTop\">&uarr;</a></p>
<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\t\$(\"#cform\").validate();
\t});
</script>
<!--FOR PREVIEW ONLY-->
<script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/styleswitch.js"), "html", null, true);
        echo "\"></script>
<div><span class=\"door\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/img/setting.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" /></span></div>
<div class=\"options\"> <span class=\"close\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/settings/img/close.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" /></span>
  <h4>Background Patterns</h4>
  <ul>
    <li><a href=\"#\" id=\"styles\" class=\"styleswitch\" title=\"pt-1\" style=\"background-image: url(\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/body-bg.jpg"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles2\" class=\"styleswitch\" title=\"pt-2\" style=\"background-image: url(\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/1.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles3\" class=\"styleswitch\" title=\"pt-3\" style=\"background-image: url(\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/2.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles4\" class=\"styleswitch\" title=\"pt-4\" style=\"background-image: url(\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/3.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles5\" class=\"styleswitch\" title=\"pt-5\" style=\"background-image: url(\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/4.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles6\" class=\"styleswitch\" title=\"pt-6\" style=\"background-image: url(\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/5.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles7\" class=\"styleswitch\" title=\"pt-7\" style=\"background-image: url(\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/6.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles8\" class=\"styleswitch\" title=\"pt-8\" style=\"background-image: url(\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/7.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles9\" class=\"styleswitch\" title=\"pt-9\" style=\"background-image: url(\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/8.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles10\" class=\"styleswitch\" title=\"pt-10\" style=\"background-image: url(\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/9.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles11\" class=\"styleswitch\" title=\"pt-11\" style=\"background-image: url(\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleindex/img/patterns/10.png"), "html", null, true);
        echo "\");\"></a></li>
    <li><a href=\"#\" id=\"styles12\" class=\"styleswitch\" title=\"pt-12\" style=\"background-image: url(\"";
        // line 219
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
        <li class=\"active\"><a href=\"index.html\">Home</a>
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
        if (array_key_exists("errormiss", $context)) {
            // line 122
            echo "            </li>
       <li><a href=\"#\">Account</a>
\t  <ul>
\t  <li><a href=\"#\"><strong>Sign In</strong></a></li>
\t  <li><a href=\"#\"><strong>Sign Up</strong></a></li>
\t  <li><a href=\"#\"><strong>Forgot Password</strong></a></li>
\t  </ul>
\t </li>
\t </li>
          ";
        } else {
            // line 132
            echo "       
       <li><a href=\"#\">";
            // line 133
            echo "UserName";
            echo "</a>
\t  <ul>
\t  <li><a href=\"#\"><strong>Manage Account</strong></a></li>
\t  <li><a href=\"#\"><strong>InBox</strong></a></li>
\t  <hr>
\t  <li><a href=\"#\"><strong style=\"color:red;\">Sign out</strong></a></li>
\t  </ul>
\t </li>
\t ";
        }
        // line 142
        echo "      </ul>
    </nav>
    <!-- end menu -->
    <div class=\"clear\"></div>
  </div>
  </div>
  ";
    }

    // line 152
    public function block_container($context, array $blocks = array())
    {
        // line 153
        echo "    ";
    }

    // line 155
    public function block_texttag($context, array $blocks = array())
    {
        // line 156
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
        return "RelaxstyleIndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 156,  377 => 155,  373 => 153,  370 => 152,  360 => 142,  348 => 133,  345 => 132,  333 => 122,  331 => 121,  269 => 62,  263 => 58,  260 => 57,  244 => 39,  240 => 38,  236 => 37,  232 => 36,  223 => 30,  219 => 29,  215 => 28,  211 => 27,  207 => 26,  203 => 25,  199 => 24,  195 => 23,  191 => 22,  186 => 21,  183 => 20,  177 => 14,  173 => 13,  169 => 12,  164 => 11,  161 => 10,  149 => 219,  145 => 218,  141 => 217,  137 => 216,  133 => 215,  129 => 214,  125 => 213,  121 => 212,  117 => 211,  113 => 210,  109 => 209,  105 => 208,  99 => 205,  95 => 204,  91 => 203,  81 => 196,  77 => 195,  67 => 187,  65 => 155,  62 => 154,  60 => 152,  55 => 149,  53 => 57,  45 => 51,  43 => 20,  37 => 16,  35 => 10,  24 => 1,);
    }
}
