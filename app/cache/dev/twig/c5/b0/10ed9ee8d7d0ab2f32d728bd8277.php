<?php

/* LezgroMobdBundle:User:auth.html.twig */
class __TwigTemplate_c5b010ed9ee8d7d0ab2f32d728bd8277 extends Twig_Template
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
    <script>
    window.fbAsyncInit = function() {
      // init the FB JS SDK
      FB.init({
        appId      : '430171637047688', // App ID from the App Dashboard
        channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File for x-domain communication
        status     : true, // check the login status upon init?
        cookie     : true, // set sessions cookies to allow your server to access the session?
        xfbml      : true  // parse XFBML tags on this page?
      });

      // Additional initialization code such as adding Event Listeners goes here

    };

    // Load the SDK's source Asynchronously
    (function(d, debug){
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = \"//connect.facebook.net/en_US/all\" + (debug ? \"/debug\" : \"\") + \".js\";
       ref.parentNode.insertBefore(js, ref);
     }(document, /*debug*/ false));
    </script>
    <script src=\"//connect.facebook.net/en_US/all.js\"></script>
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "    <div id=\"fb-root\" style=\"position:relative;\"></div>
";
    }

    public function getTemplateName()
    {
        return "LezgroMobdBundle:User:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 35,  69 => 34,  37 => 6,  34 => 5,  28 => 3,);
    }
}
