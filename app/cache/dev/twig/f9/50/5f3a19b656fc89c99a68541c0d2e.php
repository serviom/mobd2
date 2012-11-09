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
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fb.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"//connect.facebook.net/en_US/all.js\"></script>
    <script type=\"text/javascript\">
      function login() {
        FB.login(function(response) {
            if (response.authResponse) {
               window.location.href='/mobd/auth';
            } 
        });
      }
    </script>
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "    <div id=\"fb-root\"></div>
    <div class=\"main\">
    <header>
      <div class=\"logo\">
        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
      </div>
    </header>
    <div class=\"connect\">
      <a onclick=\"login();\" href=\"#\"><img  src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fb.jpg"), "html", null, true);
        echo "\"></a>
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
        return array (  74 => 30,  67 => 26,  61 => 22,  58 => 21,  42 => 7,  37 => 6,  34 => 5,  28 => 3,);
    }
}
