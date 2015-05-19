<?php

/* RelaxstyleIndexBundle:Block:findaccount.html.twig */
class __TwigTemplate_38a049b2925a1b40758f8f2b856d3e8443de5abf5030745d9b301cfd0d11794a extends Twig_Template
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
    <span class=\"Apple-style-span\" style=\"font-size:18px;\"><span class=\"Apple-style-span\" style=\"font-family: arial, sans-serif; border-collapse: collapse; \"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi! This is a password comfirm email come from Relaxstyle。<br/></span>
</p>
<p>
    <br/>
</p>
<p>
    <strong>Change your password：</strong><a href=\"http://127.0.0.1:8000/changepassword/";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["accountfind"]) ? $context["accountfind"] : $this->getContext($context, "accountfind")), "html", null, true);
        echo "\" target=\"_blank\">click to change your password</a><br/>
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
        return "RelaxstyleIndexBundle:Block:findaccount.html.twig";
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
