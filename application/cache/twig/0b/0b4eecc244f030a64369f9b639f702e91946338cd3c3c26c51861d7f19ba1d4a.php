<?php

/* base.twig */
class __TwigTemplate_256bb345e8a02fd71a522c43f3ceb2953f691f65fa82eee08f46534d8cfaeca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'head_js' => array($this, 'block_head_js'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'flash_bag' => array($this, 'block_flash_bag'),
            'ads' => array($this, 'block_ads'),
            'usr_lang' => array($this, 'block_usr_lang'),
            'footer' => array($this, 'block_footer'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DIR")), "html", null, true);
        echo "\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_description", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["app_author"]) ? $context["app_author"] : null), "html", null, true);
        echo "\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
        // line 10
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"))) {
            // line 11
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_favicon.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" >";
        } else {
            // line 13
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"), "html", null, true);
            echo "\" >";
        }
        // line 15
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " |";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
        echo "</title>";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        $this->displayBlock('head_js', $context, $blocks);
        // line 32
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "head_js", array(), "array");
        echo "

  <style>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "custom_css", array(), "array"), "html", null, true);
        echo "
  </style>
    
</head>
<body class=\"hold-transition skin-blue sidebar-mini";
        // line 39
        if (((isset($context["sidebar_status"]) ? $context["sidebar_status"] : null) == "true")) {
            echo "sidebar-collapse";
        }
        echo "\">
<noscript>
  <div class=\"alerts alert alert-danger\">
    <span class=\"glyphicon glyphicon-warning-sign\"></span>
    <p class='alerttext'>JavaScript MUST be enabled in order for you to use";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
        echo ". However, it seems JavaScript is either disabled or not supported by your browser. If your browser supports JavaScript, Please enable JavaScript by changing your browser options, then try again.</p>
  </div>
</noscript>";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "  <div id=\"particles-js\"></div>
  <div id=\"wrapper\">";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "  </div> <!-- End wrapper -->";
        // line 87
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 90
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_js", array(), "array");
        echo "

</body>
</html>";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/css/bootstrap.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, assets(("theme/default/fontawesome/css/all.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
        // line 19
        if ((call_user_func_array($this->env->getFunction('lang')->getCallable(), array("DIR")) == "rtl")) {
            // line 20
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/css/rtl.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" rel=\"stylesheet\" />";
        }
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/js/jquery.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>";
    }

    // line 26
    public function block_head_js($context, array $blocks = array())
    {
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/js/bootstrap.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      \$('[data-toggle=\"kp_tooltip\"]').tooltip();
    </script>";
    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        $this->displayBlock('flash_bag', $context, $blocks);
        // line 54
        $this->displayBlock('ads', $context, $blocks);
        // line 58
        $this->displayBlock('usr_lang', $context, $blocks);
    }

    // line 51
    public function block_flash_bag($context, array $blocks = array())
    {
        // line 52
        $this->loadTemplate("blocks/flash_bag.twig", "base.twig", 52)->display($context);
    }

    // line 54
    public function block_ads($context, array $blocks = array())
    {
        // line 55
        $this->loadTemplate("blocks/ads.twig", "base.twig", 55)->display($context);
    }

    // line 58
    public function block_usr_lang($context, array $blocks = array())
    {
        // line 59
        if ((twig_test_empty((isset($context["user"]) ? $context["user"] : null)) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isLoggedIn", array(), "method") == false))) {
            echo " 
        <select class=\"form-control selectLang\">";
            // line 61
            $context["currentUserLang"] = (( !twig_test_empty((isset($context["current_lang"]) ? $context["current_lang"] : null))) ? ((isset($context["current_lang"]) ? $context["current_lang"] : null)) : ((isset($context["DEFAULT_LANG"]) ? $context["DEFAULT_LANG"] : null)));
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lang"], "availableLanguages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 63
                $context["selected"] = ((((isset($context["currentUserLang"]) ? $context["currentUserLang"] : null) == $context["lang"])) ? ("selected") : (""));
                echo " 
                <option value='";
                // line 64
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "'";
                echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["lang"]), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </select>";
        }
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "    <p class=\"footer\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("COPYRIGHT")), "html", null, true);
        echo " &copy";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        // line 74
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array"))) {
            // line 75
            echo "        Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>";
        } else {
            // line 77
            echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array");
        }
        // line 80
        if ((( !twig_test_empty((isset($context["user"]) ? $context["user"] : null)) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isLoggedIn", array(), "method")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true))) {
            echo " 
    \t\t-";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Version")), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : null), "html", null, true);
        }
        // line 83
        echo "    </p>";
    }

    // line 87
    public function block_javascripts_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 87,  252 => 83,  248 => 81,  244 => 80,  241 => 77,  238 => 75,  236 => 74,  231 => 73,  228 => 72,  223 => 66,  212 => 64,  208 => 63,  204 => 62,  202 => 61,  198 => 59,  195 => 58,  191 => 55,  188 => 54,  184 => 52,  181 => 51,  177 => 58,  175 => 54,  173 => 51,  170 => 50,  165 => 46,  156 => 27,  153 => 26,  147 => 24,  144 => 23,  137 => 20,  135 => 19,  132 => 18,  127 => 17,  124 => 16,  119 => 15,  111 => 90,  109 => 87,  107 => 85,  105 => 72,  103 => 50,  100 => 48,  98 => 46,  93 => 43,  84 => 39,  77 => 35,  72 => 32,  70 => 26,  68 => 23,  66 => 16,  60 => 15,  55 => 13,  50 => 11,  48 => 10,  43 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ l("DIR") }}">*/
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <meta name="description" content="{{ app_settings.site_description }}">*/
/*   <meta name="author" content="{{app_author}}">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   */
/*   {% if app_settings['site_favicon'] is empty %}*/
/*     <link rel="icon" type="image/png" href="{{ assets('theme/default/images/kp_favicon.png?v=' ~ assets_version) }}" >*/
/*   {% else %}*/
/*     <link rel="icon" type="image/png" href="{{ app_settings['site_favicon'] }}" >*/
/*   {% endif %}*/
/*   <title>{% block title %}{% endblock %} | {{ app_settings.sitename }}</title>*/
/* {% block stylesheets %}*/
/*   <link href="{{ assets('theme/default/bootstrap/css/bootstrap.min.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*   <link href="{{ assets('theme/default/fontawesome/css/all.min.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*   {% if lang("DIR") == "rtl" %}*/
/*     <link href="{{ assets('theme/default/css/rtl.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*   {% endif %}*/
/* {% endblock %}*/
/*   {% block javascripts %}*/
/*     <script src="{{ assets('theme/default/js/jquery.js?v=' ~ assets_version) }}"></script>*/
/*   {% endblock %}*/
/*   {% block head_js %}*/
/*     <script src="{{ assets('theme/default/bootstrap/js/bootstrap.min.js?v=' ~ assets_version) }}"></script>*/
/*     <script type="text/javascript">*/
/*       $('[data-toggle="kp_tooltip"]').tooltip();*/
/*     </script>*/
/*   {% endblock %}*/
/*   {{ app_settings['head_js']|raw }}*/
/* */
/*   <style>*/
/*   {{ app_settings['custom_css'] }}*/
/*   </style>*/
/*     */
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini {% if sidebar_status == "true" %}sidebar-collapse{% endif %}">*/
/* <noscript>*/
/*   <div class="alerts alert alert-danger">*/
/*     <span class="glyphicon glyphicon-warning-sign"></span>*/
/*     <p class='alerttext'>JavaScript MUST be enabled in order for you to use {{app_settings.sitename}}. However, it seems JavaScript is either disabled or not supported by your browser. If your browser supports JavaScript, Please enable JavaScript by changing your browser options, then try again.</p>*/
/*   </div>*/
/* </noscript>*/
/*   {% block header %}*/
/*   {% endblock %}*/
/*   <div id="particles-js"></div>*/
/*   <div id="wrapper">*/
/*   {% block body %}*/
/*     {% block flash_bag %}*/
/*       {% include "blocks/flash_bag.twig" %}*/
/*     {% endblock %}*/
/*     {% block ads %}*/
/*       {% include "blocks/ads.twig" %}*/
/*     {% endblock %}*/
/* */
/*     {% block usr_lang %}*/
/*     {% if user is empty and user.isLoggedIn() == false %} */
/*         <select class="form-control selectLang">*/
/*             {% set currentUserLang = current_lang is not empty ? current_lang : DEFAULT_LANG %}*/
/*               {% for lang in lang.availableLanguages %}*/
/*                 {% set selected = currentUserLang == lang ? 'selected' : '' %} */
/*                 <option value='{{ lang }}' {{ selected }}>{{ lang|capitalize }}</option>*/
/*               {% endfor %}*/
/*           </select>*/
/*       {% endif %}*/
/*       {% endblock %}*/
/* */
/* */
/*   {% endblock %}*/
/*   {% block footer %}*/
/*     <p class="footer">{{ l('COPYRIGHT') }} &copy {{ "now"|date("Y") }} */
/*       {% if app_settings['footer_text'] is empty %}*/
/*         Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>*/
/*       {% else %}*/
/*         {{ app_settings['footer_text']|raw }}*/
/*       {% endif %}*/
/* */
/*     	{% if user is not empty and user.isLoggedIn() and user.hasPermission('admin') == true %} */
/*     		- {{ l('Version') }} {{ app_version }}*/
/*     	{% endif %}*/
/*     </p>*/
/*   {% endblock %}*/
/*   </div> <!-- End wrapper -->*/
/*   */
/*   {% block javascripts_footer %}*/
/*   {% endblock %}*/
/* */
/*   {{ app_settings['footer_js']|raw }}*/
/* */
/* </body>*/
/* </html>*/
