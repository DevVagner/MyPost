<?php

/* settings/components/app_settings/advanced_settings.twig */
class __TwigTemplate_a059f5a1f430512ec867e898ea4cbb307486fecbd6956fffcb8f761e527c2726 extends Twig_Template
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
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#advanced_settings\">
    <i class=\"fa fa-fw fa-cogs\" aria-hidden=\"true\"></i> 
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Advanced settings")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"advanced_settings\" class=\"panel-collapse collapse\">
\t<div class=\"panel-body\">
\t\t
\t\t<div class=\"input-group\">
\t\t\t<label for=\"head_js\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Head javascript")), "html", null, true);
        echo " <small>( You can use this field to inject Javascript code on the head of the page, This code will be available on all pages)</small></label>
\t\t\t<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>
\t\t\t<textarea name=\"head_js\" class=\"form-control\" id=\"head_js\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Head javascript")), "html", null, true);
        echo "\" >";
        echo call_user_func_array($this->env->getFunction('unescape')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "head_js", array(), "array")));
        echo "</textarea> 
\t\t</div>

\t\t<div class=\"input-group\">
\t\t\t<label for=\"footer_js\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Footer javascript")), "html", null, true);
        echo " <small>( You can use this field to inject Javascript code on the footer of the page, This code will be available on all pages</small></label>
\t\t\t<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>
\t\t\t<textarea name=\"footer_js\" class=\"form-control\" id=\"footer_js\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Footer javascript")), "html", null, true);
        echo "\" >";
        echo call_user_func_array($this->env->getFunction('unescape')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_js", array(), "array")));
        echo "</textarea> 
\t\t</div>

\t\t<h4 class=\"tab-title\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("reCaptcha")), "html", null, true);
        echo "</h4>
\t\t<div class=\"input-group\">";
        // line 26
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("captcha_enabled")))) {
            // line 27
            $context["captcha_enabled"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("captcha_enabled")) == "on")) ? ("checked") : (""));
        } else {
            // line 29
            $context["captcha_enabled"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "captcha_enabled", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 31
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"captcha_enabled\" name=\"captcha_enabled\"  class='checkbox-style'";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["captcha_enabled"]) ? $context["captcha_enabled"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"captcha_enabled\" class=\"input-text\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active reCAPTCHA")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sx-12 col-sm-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 41
        $context["captcha_skey"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("captcha_skey")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("captcha_skey"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "captcha_skey", array(), "array")));
        // line 42
        echo "\t\t\t\t\t<label for=\"captcha_skey\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Google reCAPTCHA site key")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"captcha_skey\" class=\"form-control\" id=\"captcha_skey\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Google reCAPTCHA site key")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["captcha_skey"]) ? $context["captcha_skey"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sx-12 col-sm-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 48
        $context["captcha_secret"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("captcha_secret")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("captcha_secret"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "captcha_secret", array(), "array")));
        // line 49
        echo "\t\t\t\t\t<label for=\"captcha_secret\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Google reCAPTCHA Secret")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"captcha_secret\" class=\"form-control\" id=\"captcha_secret\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Google reCAPTCHA Secret")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["captcha_secret"]) ? $context["captcha_secret"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<h4 class=\"tab-title\"></h4>
\t\t<div class=\"input-group\">";
        // line 57
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("use_proxy")))) {
            // line 58
            $context["use_proxy"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("use_proxy")) == "on")) ? ("checked") : (""));
        } else {
            // line 60
            $context["use_proxy"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "use_proxy", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 62
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"use_proxy\" name=\"use_proxy\"  class='checkbox-style' aria-label=\"New users must confirm their email address\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["use_proxy"]) ? $context["use_proxy"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"use_proxy\" class=\"input-text\">";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable proxy")), "html", null, true);
        echo "</label>
\t\t</div>
\t\t<div class=\"input-group\">";
        // line 69
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("maintenance_mode")))) {
            // line 70
            $context["maintenance_mode"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("maintenance_mode")) == "on")) ? ("checked") : (""));
        } else {
            // line 72
            $context["maintenance_mode"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "maintenance_mode", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 74
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"maintenance_mode\" name=\"maintenance_mode\"  class='checkbox-style' aria-label=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active Maintenance Mode")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["maintenance_mode"]) ? $context["maintenance_mode"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"maintenance_mode\" class=\"input-text\">";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active Maintenance Mode")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<div class=\"input-group\">";
        // line 82
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("debug_mode")))) {
            // line 83
            $context["debug_mode"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("debug_mode")) == "on")) ? ("checked") : (""));
        } else {
            // line 85
            $context["debug_mode"] = ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "debug_mode", array(), "array") == 1)) ? ("checked") : (""));
        }
        // line 87
        echo "\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"debug_mode\" name=\"debug_mode\"  class='checkbox-style' aria-label=\"";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable debug mode")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["debug_mode"]) ? $context["debug_mode"] : null), "html", null, true);
        echo "/>
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"debug_mode\" class=\"input-text\">";
        // line 91
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enable debug mode")), "html", null, true);
        echo "</label>
\t\t</div>

\t\t<br />
\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />

\t\t<h4 class=\"tab-title\"><i class=\"fa fa-cogs\"></i>";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App Cache")), "html", null, true);
        echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("If you made any change to the templates files (.twig files) you need to clear the cache in order to see the changes you made")), "html", null, true);
        echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></h4>
\t\t<div class=\"input-group\">
\t\t\t<button type=\"button\" class=\"btn btn-danger\" id=\"clearCache\">
\t\t\t\t<span class=\"clearCacheIcon\">
\t\t\t\t\t<i class=\"fa fa-refresh fa-spin fa-fw\"></i>
\t\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t\t</span>";
        // line 104
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Clear the cache")), "html", null, true);
        echo "
\t\t\t</button>
\t\t\t<span class=\"clearMessage\"></span>
\t\t</div>
\t</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/advanced_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 104,  204 => 97,  199 => 95,  192 => 91,  184 => 88,  181 => 87,  178 => 85,  175 => 83,  173 => 82,  167 => 78,  159 => 75,  156 => 74,  153 => 72,  150 => 70,  148 => 69,  143 => 66,  137 => 63,  134 => 62,  131 => 60,  128 => 58,  126 => 57,  115 => 50,  110 => 49,  108 => 48,  99 => 43,  94 => 42,  92 => 41,  84 => 35,  78 => 32,  75 => 31,  72 => 29,  69 => 27,  67 => 26,  63 => 24,  55 => 21,  50 => 19,  41 => 15,  36 => 13,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#advanced_settings">*/
/*     <i class="fa fa-fw fa-cogs" aria-hidden="true"></i> */
/* 	<span>{{ l('Advanced settings') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="advanced_settings" class="panel-collapse collapse">*/
/* 	<div class="panel-body">*/
/* 		*/
/* 		<div class="input-group">*/
/* 			<label for="head_js">{{ l('Head javascript') }} <small>( You can use this field to inject Javascript code on the head of the page, This code will be available on all pages)</small></label>*/
/* 			<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>*/
/* 			<textarea name="head_js" class="form-control" id="head_js" placeholder="{{ l('Head javascript') }}" >{{ unescape(app_settings["head_js"])|raw }}</textarea> */
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			<label for="footer_js">{{ l('Footer javascript') }} <small>( You can use this field to inject Javascript code on the footer of the page, This code will be available on all pages</small></label>*/
/* 			<span class='text-danger'> This field is for advanced users only, make sure your javascript code dose not contain any errors</span>*/
/* 			<textarea name="footer_js" class="form-control" id="footer_js" placeholder="{{ l('Footer javascript') }}" >{{ unescape(app_settings["footer_js"])|raw }}</textarea> */
/* 		</div>*/
/* */
/* 		<h4 class="tab-title">{{ l('reCaptcha') }}</h4>*/
/* 		<div class="input-group">*/
/* 			{% if input_post("captcha_enabled") is not empty %}*/
/* 				{% set captcha_enabled = input_post("captcha_enabled") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set captcha_enabled = app_settings["captcha_enabled"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="captcha_enabled" name="captcha_enabled"  class='checkbox-style' {{ captcha_enabled }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="captcha_enabled" class="input-text">{{ l('Active reCAPTCHA') }}</label>*/
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-sx-12 col-sm-6">*/
/* 				<div class="input-group">*/
/* 					{% set captcha_skey = input_post("captcha_skey") is not empty ? input_post("captcha_skey") : app_settings["captcha_skey"] %}*/
/* 					<label for="captcha_skey">{{ l('Google reCAPTCHA site key') }}</label>*/
/* 					<input type="text" name="captcha_skey" class="form-control" id="captcha_skey" placeholder="{{ l('Google reCAPTCHA site key') }}" value="{{ captcha_skey }}" />*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-sx-12 col-sm-6">*/
/* 				<div class="input-group">*/
/* 					{% set captcha_secret = input_post("captcha_secret") is not empty ? input_post("captcha_secret") : app_settings["captcha_secret"] %}*/
/* 					<label for="captcha_secret">{{ l('Google reCAPTCHA Secret') }}</label>*/
/* 					<input type="text" name="captcha_secret" class="form-control" id="captcha_secret" placeholder="{{ l('Google reCAPTCHA Secret') }}" value="{{ captcha_secret }}" />*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<h4 class="tab-title"></h4>*/
/* 		<div class="input-group">*/
/* 			{% if input_post("use_proxy") is not empty %}*/
/* 				{% set use_proxy = input_post("use_proxy") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set use_proxy = app_settings["use_proxy"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="use_proxy" name="use_proxy"  class='checkbox-style' aria-label="New users must confirm their email address" {{ use_proxy }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="use_proxy" class="input-text">{{ l('Enable proxy') }}</label>*/
/* 		</div>*/
/* 		<div class="input-group">*/
/* 			{% if input_post("maintenance_mode") is not empty %}*/
/* 				{% set maintenance_mode = input_post("maintenance_mode") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set maintenance_mode = app_settings["maintenance_mode"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="maintenance_mode" name="maintenance_mode"  class='checkbox-style' aria-label="{{ l('Active Maintenance Mode') }}" {{ maintenance_mode }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="maintenance_mode" class="input-text">{{ l('Active Maintenance Mode') }}</label>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% if input_post("debug_mode") is not empty %}*/
/* 				{% set debug_mode = input_post("debug_mode") == 'on' ? "checked" : "" %}*/
/* 			{% else %}*/
/* 				{% set debug_mode = app_settings["debug_mode"] == 1 ? "checked" : "" %}*/
/* 			{% endif %}*/
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="debug_mode" name="debug_mode"  class='checkbox-style' aria-label="{{ l('Enable debug mode') }}" {{ debug_mode }}/>*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="debug_mode" class="input-text">{{ l('Enable debug mode') }}</label>*/
/* 		</div>*/
/* */
/* 		<br />*/
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* */
/* 		<h4 class="tab-title"><i class="fa fa-cogs"></i> {{ l('App Cache') }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" title="{{ l('If you made any change to the templates files (.twig files) you need to clear the cache in order to see the changes you made') }}"><i class="fa fa-question-circle" aria-hidden="true"></i></a></h4>*/
/* 		<div class="input-group">*/
/* 			<button type="button" class="btn btn-danger" id="clearCache">*/
/* 				<span class="clearCacheIcon">*/
/* 					<i class="fa fa-refresh fa-spin fa-fw"></i>*/
/* 					<span class="sr-only">Loading...</span>*/
/* 				</span>*/
/* 				{{ l('Clear the cache') }}*/
/* 			</button>*/
/* 			<span class="clearMessage"></span>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
