<?php

/* RelaxstyleIndexBundle:Block:signuplist.html.twig */
class __TwigTemplate_0bb14d89faf907661a16b32842779da15c4688ae31340ae20234e2220ff54a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style type=\"text/css\">.qmbox body{font-size:15px}
.qmbox p{text-indent:2em;}</style>
<p>
    <span class=\"Apple-style-span\" style=\"font-family: arial, sans-serif; border-collapse: collapse; \"><strong><span class=\"Apple-style-span\" style=\"font-size: 18px;\">Dear ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["accountmail"]) ? $context["accountmail"] : $this->getContext($context, "accountmail")), "html", null, true);
        echo "</span></strong></span>
</p>
<p>
    <span class=\"Apple-style-span\" style=\"font-family: arial, sans-serif; border-collapse: collapse; \"><br/></span>
</p>
<p>
    <span class=\"Apple-style-span\" style=\"font-size:18px;\"><span class=\"Apple-style-span\" style=\"font-family: arial, sans-serif; border-collapse: collapse; \"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi! This is a Account comfirm email come from Relaxstyle。<br/></span>
</p>
<p>
    <br/>
</p>
<p>
    <strong>Comfirm Account build：</strong><a href=\"http://127.0.0.1:8000/signupko/";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["signupid"]) ? $context["signupid"] : $this->getContext($context, "signupid")), "html", null, true);
        echo "\" target=\"_blank\">Click to Comfirm Create your Account</a><br/>
</p>
<p>
    <br/>
</p>
<p>
    <br/>
</p>
<p>
    <br/>
</p>
<p></p>
<p>
    <span class=\"Apple-style-span\" style=\"font-size:22px;\">Relaxstyle Admin</span>
</p>
<p>
    <!-- -->
</p>";
    }

    public function getTemplateName()
    {
        return "RelaxstyleIndexBundle:Block:signuplist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  24 => 4,  19 => 1,);
    }
}
