<?php

/* install/step3.twig */
class __TwigTemplate_90246f925542c5c8b36f74a9d4dc4baf01a6f331f9a4d1a76838811b032c55a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("install/base.twig", "install/step3.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "install/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page"] = "Install";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Kingposter Installation";
    }

    // line 9
    public function block_mainContent($context, array $blocks = array())
    {
        // line 10
        echo form_open();
        echo "
  <div class=\"panel pv panel-default\">
      <div class=\"panel-heading\">
        <h4>Kingposter installation</h4>
      </div>
      <div class=\"panel-body\">";
        // line 17
        if ( !twig_test_empty(validation_errors())) {
            // line 18
            echo "          <div class=\"alert alert-danger\">";
            // line 19
            echo validation_errors();
            echo "
            </div>";
        }
        // line 23
        $this->loadTemplate("blocks/flash_bag.twig", "install/step3.twig", 23)->display($context);
        // line 24
        echo "
        <div class=\"form-group\">";
        // line 26
        echo form_input(array("type" => "text", "name" => "username", "id" => "username", "class" => "form-control", "placeholder" => "Admin Username"), set_value("username"));
        // line 35
        echo "
        </div>

        <div class=\"form-group\">";
        // line 39
        echo form_input(array("type" => "password", "name" => "password", "id" => "username", "class" => "form-control", "placeholder" => "Admin Password"));
        // line 47
        echo "
        </div>

        <div class=\"form-group\">";
        // line 51
        echo form_input(array("type" => "password", "name" => "re_password", "id" => "password", "class" => "form-control", "placeholder" => "Re-enter Admin password"));
        // line 59
        echo "
        </div>

        <div class=\"form-group\">";
        // line 63
        echo form_input(array("type" => "email", "name" => "email", "id" => "email", "class" => "form-control", "placeholder" => "Admin E-mail"), set_value("email"));
        // line 72
        echo "
        </div>

        <div class=\"form-group\">";
        // line 76
        echo form_input(array("type" => "text", "name" => "appname", "id" => "appname", "class" => "form-control", "value" => "Kingposter", "placeholder" => "App name"), set_value("appname"));
        // line 86
        echo "
        </div>

        <input type=\"submit\" name=\"verify\" value=\"Install\" class=\"btn btn-primary m-t-1 w-100 pull-right\">
      </div>
    </div>
  </form>";
    }

    public function getTemplateName()
    {
        return "install/step3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 86,  92 => 76,  87 => 72,  85 => 63,  80 => 59,  78 => 51,  73 => 47,  71 => 39,  66 => 35,  64 => 26,  61 => 24,  59 => 23,  54 => 19,  52 => 18,  50 => 17,  42 => 10,  39 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends "install/base.twig" %}*/
/* */
/* {% set page = 'Install' %}*/
/* */
/* {% block title %}*/
/*   Kingposter Installation*/
/* {% endblock %}*/
/* */
/* {% block mainContent %}*/
/*   {{ form_open()}}*/
/*   <div class="panel pv panel-default">*/
/*       <div class="panel-heading">*/
/*         <h4>Kingposter installation</h4>*/
/*       </div>*/
/*       <div class="panel-body">*/
/* */
/*         {% if validation_errors() is not empty %}*/
/*           <div class="alert alert-danger">*/
/*                 {{ validation_errors() }}*/
/*             </div>*/
/*         {% endif %} */
/* */
/*         {% include "blocks/flash_bag.twig" %}*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'text',*/
/*               'name': 'username',*/
/*               'id':'username',*/
/*               'class':'form-control',*/
/*               'placeholder':'Admin Username'*/
/*             },*/
/*             set_value('username'))*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'password',*/
/*               'name': 'password',*/
/*               'id':'username',*/
/*               'class':'form-control',*/
/*               'placeholder':'Admin Password'*/
/*             })*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'password',*/
/*               'name': 're_password',*/
/*               'id':'password',*/
/*               'class':'form-control',*/
/*               'placeholder':'Re-enter Admin password'*/
/*             })*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'email',*/
/*               'name': 'email',*/
/*               'id':'email',*/
/*               'class':'form-control',*/
/*               'placeholder':'Admin E-mail'*/
/*             },*/
/*             set_value('email'))*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'text',*/
/*               'name': 'appname',*/
/*               'id':'appname',*/
/*               'class':'form-control',*/
/*               'value': 'Kingposter',*/
/*               'placeholder':'App name'*/
/*             },*/
/*             set_value('appname'))*/
/*           }}*/
/*         </div>*/
/* */
/*         <input type="submit" name="verify" value="Install" class="btn btn-primary m-t-1 w-100 pull-right">*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
