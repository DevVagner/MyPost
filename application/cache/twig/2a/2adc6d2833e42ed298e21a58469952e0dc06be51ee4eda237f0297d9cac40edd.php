<?php

/* base_public.twig */
class __TwigTemplate_25ca0f7f131bbc3cf187c27314063d286e946a339065cd3917d73ecda22d9fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "base_public.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_js' => array($this, 'block_head_js'),
            'flash_bag' => array($this, 'block_flash_bag'),
            'body' => array($this, 'block_body'),
            'ads' => array($this, 'block_ads'),
            'header' => array($this, 'block_header'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, assets(("theme/default/css/public.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, assets(("theme/default/css/theme_color.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <style>
  \tbody{";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "public_bg_image", array(), "array"))) {
            // line 11
            echo "  \t\tbackground-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "public_bg_image", array(), "array"), "html", null, true);
            echo ");";
        }
        // line 14
        if ( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "public_bg_color", array(), "array"))) {
            // line 15
            echo "  \t\tbackground-color: #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "public_bg_color", array(), "array"), "html", null, true);
            echo ";";
        }
        // line 17
        echo "
  \t}
  </style>";
    }

    // line 22
    public function block_head_js($context, array $blocks = array())
    {
    }

    // line 25
    public function block_flash_bag($context, array $blocks = array())
    {
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        $this->displayParentBlock("body", $context, $blocks);
    }

    // line 32
    public function block_ads($context, array $blocks = array())
    {
        // line 33
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ads_code_public_p", array()) == 1)) {
            // line 34
            $this->displayParentBlock("ads", $context, $blocks);
        }
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
    }

    // line 41
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 42
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, assets(("theme/default/js/libs/particles.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\">
    particlesJS('particles-js',{\"particles\":{\"number\":{\"value\":100,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#fff\"},\"shape\":{\"type\":\"circle\",},\"opacity\":{\"value\":.3,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":8,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"size_min\":0.5,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":150,\"color\":\"#fff\",\"opacity\":.1,\"width\":1},\"move\":{\"enable\":true,\"speed\":1,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"bounce\",\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400},\"nasa\":{\"distance\":400,\"size\":50,\"duration\":2,\"opacity\":8,\"speed\":1},\"repulse\":{\"distance\":200},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true,});
  </script>


  <script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\".selectLang\").on(\"change\",function(){
      var date = new Date();
      date.setTime(date.getTime() + (7 * 24 * 60 * 60 *1000));
      var expires = \"; expires=\" + date.toGMTString();
      document.cookie = \"";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("sess_cookie_name")), "html", null, true);
        echo "_lang=\"+\$(this).val()+\";expires=\"+expires+\";path=/\";
      location.reload();
    });
  });
  </script>";
    }

    public function getTemplateName()
    {
        return "base_public.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 55,  109 => 43,  105 => 42,  102 => 41,  97 => 38,  92 => 34,  90 => 33,  87 => 32,  83 => 29,  80 => 28,  75 => 25,  70 => 22,  64 => 17,  59 => 15,  57 => 14,  52 => 11,  50 => 10,  45 => 6,  41 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link href="{{ assets('theme/default/css/public.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*   <link href="{{ assets('theme/default/css/theme_color.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*   <style>*/
/*   	body{*/
/* */
/*   		{% if app_settings['public_bg_image'] is not empty %}*/
/*   		background-image: url({{ app_settings['public_bg_image'] }});*/
/*   		{% endif %}*/
/* */
/*   		{% if app_settings['public_bg_color'] is not empty %}*/
/*   		background-color: #{{ app_settings['public_bg_color'] }};*/
/*   		{% endif %}*/
/* */
/*   	}*/
/*   </style>*/
/* {% endblock %}*/
/* */
/* {% block head_js %}*/
/* {% endblock %}*/
/* */
/* {% block flash_bag %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ads %}*/
/*   {% if app_settings.ads_code_public_p == 1 %}*/
/*     {{ parent() }}*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*   {{ parent() }}*/
/*   <script src="{{ assets("theme/default/js/libs/particles.min.js?v=" ~ assets_version) }}"></script>*/
/*   <script type="text/javascript">*/
/*     particlesJS('particles-js',{"particles":{"number":{"value":100,"density":{"enable":true,"value_area":800}},"color":{"value":"#fff"},"shape":{"type":"circle",},"opacity":{"value":.3,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":8,"random":true,"anim":{"enable":false,"speed":1,"size_min":0.5,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#fff","opacity":.1,"width":1},"move":{"enable":true,"speed":1,"direction":"none","random":false,"straight":false,"out_mode":"bounce","attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400},"nasa":{"distance":400,"size":50,"duration":2,"opacity":8,"speed":1},"repulse":{"distance":200},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true,});*/
/*   </script>*/
/* */
/* */
/*   <script type="text/javascript">*/
/*   $(document).ready(function() {*/
/*     $(".selectLang").on("change",function(){*/
/*       var date = new Date();*/
/*       date.setTime(date.getTime() + (7 * 24 * 60 * 60 *1000));*/
/*       var expires = "; expires=" + date.toGMTString();*/
/*       document.cookie = "{{ config_item('sess_cookie_name') }}_lang="+$(this).val()+";expires="+expires+";path=/";*/
/*       location.reload();*/
/*     });*/
/*   });*/
/*   </script>*/
/* {% endblock %}*/
