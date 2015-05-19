<?php

/* RelaxstyleBlogBundle:Default:articlewrite.html.twig */
class __TwigTemplate_53f94a7a7492d1d5ad7b182029518beeb4ecc2e255d5e805a05a7692615de289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("RelaxstyleBlogBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RelaxstyleBlogBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Alticle write
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/css/abootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  media=\"screen\" />
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/css/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/my.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/js/abootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/js/summernote.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/relaxstyleblog/bootstrap/my.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 24
    public function block_container($context, array $blocks = array())
    {
        // line 25
        echo "  <div>
    <h2>
      <span class=\"label label-primary\">Write Alticle</span>
      <a href=\"#\" class=\"pull-right\"><small><span class=\"label label-primary\">Alticlelist</span></small></a>
      <a href=\"#\" class=\"pull-right\"><small><span class=\"label label-primary\">Draft</span></small></a>
    </h2>
    <hr></hr>
 </div>
 <div><input type=\"text\" class=\"form-control\" name='Altitle' id='Altitle' placeholder=\"Alticle title\" ></div>
 <br>
 <div id=\"summernote\"></div>
 <div>
<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-info\">Preview</button>
  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" 
      data-toggle=\"dropdown\">
      Alticlegroup
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">AAAA</a></li>
      <li><a href=\"#\">BBBB</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">CreateGroup</a></li>
    </ul>
  </div>
  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" 
      data-toggle=\"dropdown\">
      Friends
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">AAAAA</a></li>
      <li><a href=\"#\">BBBBB</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">CreateGroup</a><li>
    </ul>
  </div>
  </div>
<div class=\"btn-group pull-right\">
    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" 
      data-toggle=\"dropdown\">
      More
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">AAAAA</a></li>
      <li><a href=\"#\">BBBBB</a></li>
      <li class=\"divider\"></li>
      <li><a href=\"#\">CreateGroup</a><li>
    </ul>
  </div>  
 </div>
 <hr></hr>
 <div>
 <button type=\"button\" class=\"btn btn-success\">Post</button>
 <button type=\"button\" class=\"btn btn-default btn-sm\">Cancel</button>
 <button type=\"button\" class=\"btn btn-default btn-sm pull-right\">Save</button>
 </div>
";
    }

    public function getTemplateName()
    {
        return "RelaxstyleBlogBundle:Default:articlewrite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  95 => 24,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  72 => 14,  69 => 13,  63 => 10,  59 => 9,  55 => 8,  50 => 7,  47 => 6,  42 => 3,  39 => 2,  11 => 1,);
    }
}
