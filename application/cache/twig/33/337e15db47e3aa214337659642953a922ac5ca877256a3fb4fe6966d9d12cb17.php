<?php

/* errors/error_404.twig */
class __TwigTemplate_1d350fe399803e109eace12ce7f0acd5a7caf356c715a29a884ca296d0e27943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "errors/error_404.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("404 Page not found")), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <style>
  body { background: #fff; text-align: center; padding: 100px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "  <article>
    <h1>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Oops!")), "html", null, true);
        echo "</h1>
    <div>
        <p>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("We can't seem to find the page you're looking for.")), "html", null, true);
        echo "</p>
        <br>
        <p><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Home page")), "html", null, true);
        echo "</a></p>
    </div>
</article>
<br />
<br />
<br />
<br />";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "errors/error_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  75 => 25,  70 => 23,  65 => 21,  62 => 20,  59 => 19,  54 => 16,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* */
/* {% block title %}{{ l('404 Page not found') }}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <style>*/
/*   body { background: #fff; text-align: center; padding: 100px; }*/
/*   h1 { font-size: 50px; }*/
/*   body { font: 20px Helvetica, sans-serif; color: #333; }*/
/*   article { display: block; text-align: left; width: 650px; margin: 0 auto; }*/
/*   a { color: #dc8100; text-decoration: none; }*/
/*   a:hover { color: #333; text-decoration: none; }*/
/* </style>*/
/* {% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <article>*/
/*     <h1>{{ l('Oops!') }}</h1>*/
/*     <div>*/
/*         <p>{{ l("We can't seem to find the page you're looking for.") }}</p>*/
/*         <br>*/
/*         <p><a href="{{ base_url() }}">{{ l('Home page') }}</a></p>*/
/*     </div>*/
/* </article>*/
/* <br />*/
/* <br />*/
/* <br />*/
/* <br />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
