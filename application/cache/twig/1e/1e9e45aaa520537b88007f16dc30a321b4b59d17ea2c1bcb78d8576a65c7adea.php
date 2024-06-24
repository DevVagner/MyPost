<?php

/* install/step1.twig */
class __TwigTemplate_7919c4e5c0c915be6c290facafbc7a4c2a71cfb4dc8aecd1cc1685e2e4d70049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("install/base.twig", "install/step1.twig", 1);
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
        echo "  Database Details";
    }

    // line 9
    public function block_mainContent($context, array $blocks = array())
    {
        // line 10
        echo form_open();
        echo "
  <div class=\"panel pv panel-default\">
      <div class=\"panel-heading\">
        <h4>Database Details</h4>
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
        $this->loadTemplate("blocks/flash_bag.twig", "install/step1.twig", 23)->display($context);
        // line 24
        echo "
        <div class=\"form-group\">";
        // line 26
        echo form_input(array("type" => "text", "name" => "host", "id" => "host", "class" => "form-control", "placeholder" => "Database Host"), set_value("host"));
        // line 35
        echo "
        </div>

        <div class=\"form-group\">";
        // line 39
        echo form_input(array("type" => "text", "name" => "dbname", "id" => "dbname", "class" => "form-control", "placeholder" => "Database name"), set_value("dbname"));
        // line 48
        echo "
        </div>

        <div class=\"form-group\">";
        // line 52
        echo form_input(array("type" => "text", "name" => "user", "id" => "user", "class" => "form-control", "placeholder" => "Database Username"), set_value("user"));
        // line 61
        echo "
        </div>

        <div class=\"form-group\">";
        // line 65
        echo form_input(array("type" => "text", "name" => "pass", "id" => "pass", "class" => "form-control", "placeholder" => "Password"), set_value("pass"));
        // line 74
        echo "
        </div>
        
        <input type=\"submit\" name=\"continue\" value=\"Continue\" class=\"btn btn-primary m-t-1 w-100 pull-right\">
      </div>
    </div>
  </form>";
    }

    public function getTemplateName()
    {
        return "install/step1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 74,  85 => 65,  80 => 61,  78 => 52,  73 => 48,  71 => 39,  66 => 35,  64 => 26,  61 => 24,  59 => 23,  54 => 19,  52 => 18,  50 => 17,  42 => 10,  39 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends "install/base.twig" %}*/
/* */
/* {% set page = 'Install' %}*/
/* */
/* {% block title %}*/
/*   Database Details*/
/* {% endblock %}*/
/* */
/* {% block mainContent %}*/
/*   {{ form_open()}}*/
/*   <div class="panel pv panel-default">*/
/*       <div class="panel-heading">*/
/*         <h4>Database Details</h4>*/
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
/*               'name': 'host',*/
/*               'id':'host',*/
/*               'class':'form-control',*/
/*               'placeholder':'Database Host'*/
/*             },*/
/*             set_value('host'))*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'text',*/
/*               'name': 'dbname',*/
/*               'id':'dbname',*/
/*               'class':'form-control',*/
/*               'placeholder':'Database name'*/
/*             },*/
/*             set_value('dbname'))*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'text',*/
/*               'name': 'user',*/
/*               'id':'user',*/
/*               'class':'form-control',*/
/*               'placeholder':'Database Username'*/
/*             },*/
/*             set_value('user'))*/
/*           }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_input(*/
/*             {*/
/*               'type':'text',*/
/*               'name': 'pass',*/
/*               'id':'pass',*/
/*               'class':'form-control',*/
/*               'placeholder':'Password'*/
/*             },*/
/*             set_value('pass'))*/
/*           }}*/
/*         </div>*/
/*         */
/*         <input type="submit" name="continue" value="Continue" class="btn btn-primary m-t-1 w-100 pull-right">*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
