<?php

/* LezgroMobdBundle:User:index.html.twig */
class __TwigTemplate_f9505f3a19b656fc89c99a68541c0d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome || mobd";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"fb-root\"></div>
    <div id=\"fb-root\"></div>
    <div class=\"main\">
    <header>
      <div class=\"logo\">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_auth"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"></a>
      </div>
    </header>
    <div class=\"connect\">
      <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fb.jpg"), "html", null, true);
        echo "\">
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LezgroMobdBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  43 => 10,  36 => 5,  33 => 4,  27 => 3,);
    }
}
