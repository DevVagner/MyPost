<?php

/* settings/components/app_settings/ads_settings.twig */
class __TwigTemplate_1ae57b46f641deff69e69ab90f0ddf6a56faf14f7b886ab1ac954be60252bd11 extends Twig_Template
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
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#ads_settings\">
    <i class=\"fa fa-bullhorn fa-fw\" aria-hidden=\"true\"></i> 
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Ads Settings")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"ads_settings\" class=\"panel-collapse collapse\">
\t<div class=\"panel-body\">
\t\t<div class=\"input-group\">
\t\t\t<label for=\"ads_code\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Ads banner")), "html", null, true);
        echo " <small>(";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Responsive ADS code")), "html", null, true);
        echo " )</small></label>
\t\t\t<textarea name=\"ads_code\" class=\"form-control\" id=\"ads_code\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Responsive ADS code")), "html", null, true);
        echo "\" >";
        echo call_user_func_array($this->env->getFunction('unescape')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ads_code", array(), "array")));
        echo "</textarea> 
\t\t</div>";
        // line 16
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("ads_code_public_p")))) {
            // line 17
            $context["ads_code_public_p"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("ads_code_public_p")) == "on")) ? ("checked") : (""));
        } else {
            // line 19
            $context["ads_code_public_p"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ads_code_public_p", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 21
        echo "
\t\t<div class=\"input-group\">
\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"ads_code_public_p\" name=\"ads_code_public_p\" aria-label=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Display Ads on public pages")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["ads_code_public_p"]) ? $context["ads_code_public_p"] : null), "html", null, true);
        echo " />
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"ads_code_public_p\" class=\"input-text\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Display Ads on public pages")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<div class=\"card-deck\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show ADS to")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t<div class=\"row\">";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"role_";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\" name=\"showAdsTo[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["role"], "name", array())), "html", null, true);
            echo "\"";
            if (twig_in_filter($this->getAttribute($context["role"], "id", array()), (isset($context["showAdsTo"]) ? $context["showAdsTo"] : null))) {
                echo "checked";
            }
            echo " />
\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label for=\"role_";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\" class=\"input-text\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["role"], "name", array())), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />\t\t
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/ads_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  116 => 48,  105 => 44,  91 => 41,  86 => 38,  82 => 37,  76 => 33,  68 => 27,  60 => 24,  55 => 21,  52 => 19,  49 => 17,  47 => 16,  41 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#ads_settings">*/
/*     <i class="fa fa-bullhorn fa-fw" aria-hidden="true"></i> */
/* 	<span>{{ l('Ads Settings') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="ads_settings" class="panel-collapse collapse">*/
/* 	<div class="panel-body">*/
/* 		<div class="input-group">*/
/* 			<label for="ads_code">{{ l('Ads banner') }} <small>( {{ l("Responsive ADS code") }} )</small></label>*/
/* 			<textarea name="ads_code" class="form-control" id="ads_code" placeholder="{{ l('Responsive ADS code') }}" >{{ unescape(app_settings["ads_code"])|raw }}</textarea> */
/* 		</div>*/
/* */
/* 		{% if input_post("ads_code_public_p") is not empty %}*/
/* 			{% set ads_code_public_p = input_post("ads_code_public_p") == 'on' ? "checked" : "" %}*/
/* 		{% else %}*/
/* 			{% set ads_code_public_p = app_settings["ads_code_public_p"] == 1 ? "checked" : "" %}*/
/* 		{% endif %}*/
/* */
/* 		<div class="input-group">*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" class='checkbox-style' id="ads_code_public_p" name="ads_code_public_p" aria-label="{{ l('Display Ads on public pages') }}" {{ ads_code_public_p }} />*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="ads_code_public_p" class="input-text">{{ l('Display Ads on public pages') }}</label>*/
/* 		</div>*/
/* */
/* 		<div class="card-deck">*/
/* 			<div class="card">*/
/* 				<div class="card-header">*/
/* 					{{l("Show ADS to")}}*/
/* 				</div>*/
/* 				<div class="card-block">*/
/* 					<div class="row">*/
/* 						{% for role in roles %}*/
/* 							<div class="col-md-4">*/
/* 								<div class="input-group">*/
/* 									<label class="switch">*/
/* 										<input type="checkbox" class='checkbox-style' id="role_{{role.id}}" name="showAdsTo[]" value="{{role.id}}" aria-label="{{role.name|capitalize}}" {% if role.id in showAdsTo %}checked{% endif %} />*/
/* 										<span class="slider round"></span>*/
/* 									</label>*/
/* 									<label for="role_{{role.id}}" class="input-text">{{role.name|capitalize}}</label>*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />		*/
/* 	</div>*/
/* </div>*/
/* </div>*/
