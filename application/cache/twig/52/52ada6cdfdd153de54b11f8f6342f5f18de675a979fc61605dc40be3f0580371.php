<?php

/* settings/components/app_settings/publish_settings.twig */
class __TwigTemplate_00ba22eea38e2323dc3d451100a88a0709e218d4d8653267d1cef61a64e4e404 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
<div class=\"panel-heading\">
  <h4 class=\"panel-title\">
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#publish_settings\">
    <i class=\"fa fa-fw fa-clipboard\" aria-hidden=\"true\"></i> 
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"publish_settings\" class=\"panel-collapse collapse\">
  <div class=\"panel-body\">
\t<div class=\"input-group\">";
        // line 12
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("minInterval")))) {
            // line 13
            $context["minInterval"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("minInterval"));
        } else {
            // line 15
            $context["minInterval"] = $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "min_interval", array(), "array");
        }
        // line 17
        echo "\t\t<label for=\"minInterval\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minimum interval for immediate posting (in seconds)")), "html", null, true);
        echo "</label>
\t\t<input type=\"number\" name=\"minInterval\" class=\"form-control\" id=\"minInterval\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minimum interval for immediate posting (in seconds)")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["minInterval"]) ? $context["minInterval"] : null), "html", null, true);
        echo "\" />
\t</div>

\t<div class=\"input-group\">";
        // line 22
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("minIntervalSchedule")))) {
            // line 23
            $context["minIntervalSchedule"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("minIntervalSchedule"));
        } else {
            // line 25
            $context["minIntervalSchedule"] = $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "min_interval_schedule", array(), "array");
        }
        // line 27
        echo "\t\t<label for=\"minIntervalSchedule\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minimum interval on schedule post (in minutes)")), "html", null, true);
        echo "</label>
\t\t<input type=\"number\" name=\"min_interval_schedule\" class=\"form-control\" id=\"minIntervalSchedule\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minimum interval on schedule post (in minutes)")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["minIntervalSchedule"]) ? $context["minIntervalSchedule"] : null), "html", null, true);
        echo "\" />
\t</div>

\t<div class=\"input-group\">
\t\t<label for=\"schedule_random_interval\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable Schedule Random interval")), "html", null, true);
        echo "</label>
\t\t<select name='schedule_random_interval' id=\"schedule_random_interval\"  class=\"form-control\">
\t\t\t<option value='0'>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Off")), "html", null, true);
        echo "</option>";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            $context["schedule_random_interval"] = (( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "schedule_random_interval", array(), "array"))) ? ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "schedule_random_interval", array(), "array")) : ((isset($context["schedule_random_interval"]) ? $context["schedule_random_interval"] : null)));
            // line 37
            if (((isset($context["schedule_random_interval"]) ? $context["schedule_random_interval"] : null) == $context["i"])) {
                // line 38
                echo "\t\t\t\t\t<option value='";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "' selected==\"selected\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minute")), "html", null, true);
                echo "</option>";
            } else {
                // line 40
                echo "\t\t\t\t\t<option value='";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minute")), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</select>
\t</div>

\t<div class=\"input-group\">
\t\t<label for=\"ipri\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Instant post Random interval")), "html", null, true);
        echo "</label>
\t\t<select name='ipri' id=\"ipri\"  class=\"form-control\">
\t\t\t<option value='0'>";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Off")), "html", null, true);
        echo "</option>";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(10, 500, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            $context["ipri"] = (( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ipri", array(), "array"))) ? ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ipri", array(), "array")) : ((isset($context["ipri"]) ? $context["ipri"] : null)));
            // line 52
            if (((isset($context["ipri"]) ? $context["ipri"] : null) == $context["i"])) {
                // line 53
                echo "\t\t\t\t\t<option value='";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "' selected==\"selected\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                echo "</option>";
            } else {
                // line 55
                echo "\t\t\t\t\t<option value='";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</select>
\t</div>

\t<div class=\"input-group\">";
        // line 62
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_instant_post")))) {
            // line 63
            $context["enable_instant_post"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_instant_post")) == "on")) ? ("checked") : (""));
        } else {
            // line 65
            $context["enable_instant_post"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 67
        echo "\t\t<label class=\"switch\">
\t\t\t<input type=\"checkbox\" id=\"enable_instant_post\" name=\"enable_instant_post\"  class='checkbox-style'";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["enable_instant_post"]) ? $context["enable_instant_post"] : null), "html", null, true);
        echo "/>
\t\t\t<span class=\"slider round\"></span>
\t\t</label>
\t\t<label for=\"enable_instant_post\" class=\"input-text\">";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable instant post")), "html", null, true);
        echo "</label>
\t</div>

\t<div class=\"input-group\">";
        // line 75
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_sale_post_type")))) {
            // line 76
            $context["enable_sale_post_type"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_sale_post_type")) == "on")) ? ("checked") : (""));
        } else {
            // line 78
            $context["enable_sale_post_type"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_sale_post_type", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 80
        echo "\t\t<label class=\"switch\">
\t\t\t<input type=\"checkbox\" id=\"enable_sale_post_type\" name=\"enable_sale_post_type\"  class='checkbox-style'";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["enable_sale_post_type"]) ? $context["enable_sale_post_type"] : null), "html", null, true);
        echo "/>
\t\t\t<span class=\"slider round\"></span>
\t\t</label>
\t\t<label for=\"enable_sale_post_type\" class=\"input-text\">";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable sale post type")), "html", null, true);
        echo "</label>
\t</div>

\t<div class=\"input-group\">";
        // line 88
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_link_customize")))) {
            // line 89
            $context["enable_link_customize"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("enable_link_customize")) == "on")) ? ("checked") : (""));
        } else {
            // line 91
            $context["enable_link_customize"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_link_customize", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 93
        echo "\t\t<label class=\"switch\">
\t\t\t<input type=\"checkbox\" id=\"enable_link_customize\" name=\"enable_link_customize\"  class='checkbox-style'";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["enable_link_customize"]) ? $context["enable_link_customize"] : null), "html", null, true);
        echo "/>
\t\t\t<span class=\"slider round\"></span>
\t\t</label>
\t\t<label for=\"enable_link_customize\" class=\"input-text\">";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable link customization")), "html", null, true);
        echo "</label>
\t</div>

\t<input type=\"submit\" name=\"save\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
\t
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/publish_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 100,  223 => 97,  217 => 94,  214 => 93,  211 => 91,  208 => 89,  206 => 88,  200 => 84,  194 => 81,  191 => 80,  188 => 78,  185 => 76,  183 => 75,  177 => 71,  171 => 68,  168 => 67,  165 => 65,  162 => 63,  160 => 62,  155 => 58,  143 => 55,  135 => 53,  133 => 52,  131 => 51,  127 => 50,  124 => 49,  119 => 47,  113 => 43,  101 => 40,  93 => 38,  91 => 37,  89 => 36,  85 => 35,  82 => 34,  77 => 32,  68 => 28,  63 => 27,  60 => 25,  57 => 23,  55 => 22,  47 => 18,  42 => 17,  39 => 15,  36 => 13,  34 => 12,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#publish_settings">*/
/*     <i class="fa fa-fw fa-clipboard" aria-hidden="true"></i> */
/* 	<span>{{ l('Publish settings') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="publish_settings" class="panel-collapse collapse">*/
/*   <div class="panel-body">*/
/* 	<div class="input-group">*/
/* 		{% if input_post("minInterval") is not empty %}*/
/* 			{% set minInterval = input_post("minInterval") %}*/
/* 		{% else %}*/
/* 			{% set minInterval = app_settings["min_interval"] %}*/
/* 		{% endif %}*/
/* 		<label for="minInterval">{{ l('Minimum interval for immediate posting (in seconds)') }}</label>*/
/* 		<input type="number" name="minInterval" class="form-control" id="minInterval" placeholder="{{ l('Minimum interval for immediate posting (in seconds)') }}" value="{{ minInterval }}" />*/
/* 	</div>*/
/* */
/* 	<div class="input-group">*/
/* 		{% if input_post("minIntervalSchedule") is not empty %}*/
/* 			{% set minIntervalSchedule = input_post("minIntervalSchedule") %}*/
/* 		{% else %}*/
/* 			{% set minIntervalSchedule = app_settings["min_interval_schedule"] %}*/
/* 		{% endif %}*/
/* 		<label for="minIntervalSchedule">{{ l('Minimum interval on schedule post (in minutes)') }}</label>*/
/* 		<input type="number" name="min_interval_schedule" class="form-control" id="minIntervalSchedule" placeholder="{{ l('Minimum interval on schedule post (in minutes)') }}" value="{{ minIntervalSchedule }}" />*/
/* 	</div>*/
/* */
/* 	<div class="input-group">*/
/* 		<label for="schedule_random_interval">{{ l('Enable Schedule Random interval') }}</label>*/
/* 		<select name='schedule_random_interval' id="schedule_random_interval"  class="form-control">*/
/* 			<option value='0'>{{ l('Off') }}</option>*/
/* 			{% for i in range(1,15,1) %}*/
/* 				{% set schedule_random_interval = app_settings['schedule_random_interval'] is not empty ? app_settings['schedule_random_interval'] : schedule_random_interval %}*/
/* 				{% if schedule_random_interval == i %}*/
/* 					<option value='{{ i }}' selected=="selected">{{ i }} {{ l('Minute') }}</option>*/
/* 				{% else %}*/
/* 					<option value='{{ i }}'>{{ i }} {{ l('Minute') }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div class="input-group">*/
/* 		<label for="ipri">{{ l('Instant post Random interval') }}</label>*/
/* 		<select name='ipri' id="ipri"  class="form-control">*/
/* 			<option value='0'>{{ l('Off') }}</option>*/
/* 			{% for i in range(10,500,10) %}*/
/* 				{% set ipri = app_settings['ipri'] is not empty ? app_settings['ipri'] : ipri %}*/
/* 				{% if ipri == i %}*/
/* 					<option value='{{ i }}' selected=="selected">{{ i }} {{ l('Sec') }}</option>*/
/* 				{% else %}*/
/* 					<option value='{{ i }}'>{{ i }} {{ l('Sec') }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div class="input-group">*/
/* 		{% if input_post("enable_instant_post") is not empty %}*/
/* 			{% set enable_instant_post = input_post("enable_instant_post") == 'on' ? "checked" : "" %}*/
/* 		{% else %}*/
/* 			{% set enable_instant_post = app_settings["enable_instant_post"] == 1 ? "checked" : "" %}*/
/* 		{% endif %}*/
/* 		<label class="switch">*/
/* 			<input type="checkbox" id="enable_instant_post" name="enable_instant_post"  class='checkbox-style' {{ enable_instant_post }}/>*/
/* 			<span class="slider round"></span>*/
/* 		</label>*/
/* 		<label for="enable_instant_post" class="input-text">{{ l('Enable instant post') }}</label>*/
/* 	</div>*/
/* */
/* 	<div class="input-group">*/
/* 		{% if input_post("enable_sale_post_type") is not empty %}*/
/* 			{% set enable_sale_post_type = input_post("enable_sale_post_type") == 'on' ? "checked" : "" %}*/
/* 		{% else %}*/
/* 			{% set enable_sale_post_type = app_settings["enable_sale_post_type"] == 1 ? "checked" : "" %}*/
/* 		{% endif %}*/
/* 		<label class="switch">*/
/* 			<input type="checkbox" id="enable_sale_post_type" name="enable_sale_post_type"  class='checkbox-style' {{ enable_sale_post_type }}/>*/
/* 			<span class="slider round"></span>*/
/* 		</label>*/
/* 		<label for="enable_sale_post_type" class="input-text">{{ l('Enable sale post type') }}</label>*/
/* 	</div>*/
/* */
/* 	<div class="input-group">*/
/* 		{% if input_post("enable_link_customize") is not empty %}*/
/* 			{% set enable_link_customize = input_post("enable_link_customize") == 'on' ? "checked" : "" %}*/
/* 		{% else %}*/
/* 			{% set enable_link_customize = app_settings["enable_link_customize"] == 1 ? "checked" : "" %}*/
/* 		{% endif %}*/
/* 		<label class="switch">*/
/* 			<input type="checkbox" id="enable_link_customize" name="enable_link_customize"  class='checkbox-style' {{ enable_link_customize }}/>*/
/* 			<span class="slider round"></span>*/
/* 		</label>*/
/* 		<label for="enable_link_customize" class="input-text">{{ l('Enable link customization') }}</label>*/
/* 	</div>*/
/* */
/* 	<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* </div>*/
