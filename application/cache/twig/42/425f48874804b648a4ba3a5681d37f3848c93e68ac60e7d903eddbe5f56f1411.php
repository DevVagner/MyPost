<?php

/* settings/components/app_settings/theme_settings.twig */
class __TwigTemplate_4dada0f7ee5b55b139b1a6b2f53e84b94471a1e47f9f9fa03d65e9db5e37421d extends Twig_Template
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
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#theme_settings\">
    <i class=\"fa fa-fw fa-paint-brush\" aria-hidden=\"true\"></i> 
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme settings")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"theme_settings\" class=\"panel-collapse collapse\">
\t<div class=\"panel-body\">
\t\t<div class=\"input-group\">";
        // line 12
        $context["site_logo"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_logo")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_logo"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array")));
        // line 13
        echo "\t\t\t<label for=\"site_logo\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site logo")), "html", null, true);
        echo " <small>(Recommended size 100x32 px )</small></label>
\t\t\t<input type=\"text\" name=\"site_logo\" class=\"form-control\" id=\"site_logo\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site logo")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true);
        echo "\" />
\t\t</div>
\t\t
\t\t<div class=\"input-group\">";
        // line 18
        $context["site_logo_50"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_logo_50")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_logo_50"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_50", array(), "array")));
        // line 19
        echo "\t\t\t<label for=\"site_logo_50\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site logo")), "html", null, true);
        echo " <small>(Recommended size 50x50 px )</small></label>
\t\t\t<input type=\"text\" name=\"site_logo_50\" class=\"form-control\" id=\"site_logo_50\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site logo")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["site_logo_50"]) ? $context["site_logo_50"] : null), "html", null, true);
        echo "\" />
\t\t</div>

\t\t<div class=\"input-group\">";
        // line 24
        $context["site_logo_large"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_logo_large")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_logo_large"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array")));
        // line 25
        echo "\t\t\t<label for=\"site_logo_large\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site large logo")), "html", null, true);
        echo " <small>(Recommended size 300x100 px )</small></label>
\t\t\t<input type=\"text\" name=\"site_logo_large\" class=\"form-control\" id=\"site_logo_large\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site large logo")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["site_logo_large"]) ? $context["site_logo_large"] : null), "html", null, true);
        echo "\" />
\t\t</div>
\t\t\t
\t\t<div class=\"input-group\">";
        // line 30
        $context["site_favicon"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_favicon")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_favicon"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array")));
        // line 31
        echo "\t\t\t<label for=\"site_favicon\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site favicon")), "html", null, true);
        echo "</label>
\t\t\t<input type=\"text\" name=\"site_favicon\" class=\"form-control\" id=\"site_favicon\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("site favicon")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["site_favicon"]) ? $context["site_favicon"] : null), "html", null, true);
        echo "\" />
\t\t</div>

\t\t<div class=\"input-group\">";
        // line 36
        $context["site_description"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_description")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("site_description"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_description", array(), "array")));
        // line 37
        echo "\t\t\t<label for=\"site_description\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site meta description")), "html", null, true);
        echo " </label>
\t\t\t<textarea name=\"site_description\" class=\"form-control\" id=\"site_description\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Site description")), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, (isset($context["site_description"]) ? $context["site_description"] : null), "html", null, true);
        echo "</textarea>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 44
        $context["theme_color"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("theme_color")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("theme_color"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "theme_color", array(), "array")));
        // line 45
        echo "\t\t\t\t\t<label for=\"theme_color\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme color")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"theme_color\" class=\"form-control jscolor\" id=\"theme_color\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme color")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["theme_color"]) ? $context["theme_color"] : null), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 51
        $context["links_color"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("links_color")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("links_color"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "links_color", array(), "array")));
        // line 52
        echo "\t\t\t\t\t<label for=\"links_color\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme links color")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"links_color\" class=\"form-control jscolor\" id=\"links_color\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme links color")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["links_color"]) ? $context["links_color"] : null), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 61
        $context["public_bg_image"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("public_bg_image")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("public_bg_image"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "public_bg_image", array(), "array")));
        // line 62
        echo "\t\t\t\t\t<label for=\"public_bg_image\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme background image")), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Public pages (Login page, Register page ..)")), "html", null, true);
        echo "</small></label>
\t\t\t\t\t<input type=\"text\" name=\"public_bg_image\" class=\"form-control\" id=\"public_bg_image\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme background image")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["public_bg_image"]) ? $context["public_bg_image"] : null), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 68
        $context["public_bg_color"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("public_bg_color")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("public_bg_color"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "public_bg_color", array(), "array")));
        // line 69
        echo "\t\t\t\t\t<label for=\"public_bg_color\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme background color")), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Public pages (Login page, Register page ..)")), "html", null, true);
        echo "</small></label>
\t\t\t\t\t<input type=\"text\" name=\"public_bg_color\" class=\"form-control jscolor\" id=\"public_bg_color\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Theme background color")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["public_bg_color"]) ? $context["public_bg_color"] : null), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"input-group\">";
        // line 76
        $context["custom_css"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("custom_css")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("custom_css"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "custom_css", array(), "array")));
        // line 77
        echo "\t\t\t<label for=\"custom_css\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Custom CSS")), "html", null, true);
        echo "</label>
\t\t\t<textarea name=\"custom_css\" class=\"form-control\" id=\"custom_css\" placeholder=\"";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Custom CSS")), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, (isset($context["custom_css"]) ? $context["custom_css"] : null), "html", null, true);
        echo "</textarea>
\t\t</div>

\t\t<div class=\"input-group\">";
        // line 82
        $context["footer_text"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("footer_text")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("footer_text"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array")));
        // line 83
        echo "\t\t\t<label for=\"footer_text\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Footer text")), "html", null, true);
        echo " <small>(";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Support HTML tags")), "html", null, true);
        echo ")</small></label>
\t\t\t<textarea name=\"footer_text\" class=\"form-control\" id=\"footer_text\" placeholder=\"";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Footer text")), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, (isset($context["footer_text"]) ? $context["footer_text"] : null), "html", null, true);
        echo "</textarea>
\t\t</div>

\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
\t
\t
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/theme_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 87,  207 => 84,  200 => 83,  198 => 82,  190 => 78,  185 => 77,  183 => 76,  173 => 70,  166 => 69,  164 => 68,  155 => 63,  148 => 62,  146 => 61,  134 => 53,  129 => 52,  127 => 51,  118 => 46,  113 => 45,  111 => 44,  101 => 38,  96 => 37,  94 => 36,  86 => 32,  81 => 31,  79 => 30,  71 => 26,  66 => 25,  64 => 24,  56 => 20,  51 => 19,  49 => 18,  41 => 14,  36 => 13,  34 => 12,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#theme_settings">*/
/*     <i class="fa fa-fw fa-paint-brush" aria-hidden="true"></i> */
/* 	<span>{{ l('Theme settings') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="theme_settings" class="panel-collapse collapse">*/
/* 	<div class="panel-body">*/
/* 		<div class="input-group">*/
/* 			{% set site_logo = input_post("site_logo") is not empty ? input_post("site_logo") : app_settings["site_logo"] %}*/
/* 			<label for="site_logo">{{ l('Site logo') }} <small>(Recommended size 100x32 px )</small></label>*/
/* 			<input type="text" name="site_logo" class="form-control" id="site_logo" placeholder="{{ l('Site logo') }}" value="{{ site_logo }}" />*/
/* 		</div>*/
/* 		*/
/* 		<div class="input-group">*/
/* 			{% set site_logo_50 = input_post("site_logo_50") is not empty ? input_post("site_logo_50") : app_settings["site_logo_50"] %}*/
/* 			<label for="site_logo_50">{{ l('Site logo') }} <small>(Recommended size 50x50 px )</small></label>*/
/* 			<input type="text" name="site_logo_50" class="form-control" id="site_logo_50" placeholder="{{ l('Site logo') }}" value="{{ site_logo_50 }}" />*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% set site_logo_large = input_post("site_logo_large") is not empty ? input_post("site_logo_large") : app_settings["site_logo_large"] %}*/
/* 			<label for="site_logo_large">{{ l('Site large logo') }} <small>(Recommended size 300x100 px )</small></label>*/
/* 			<input type="text" name="site_logo_large" class="form-control" id="site_logo_large" placeholder="{{ l('Site large logo') }}" value="{{ site_logo_large }}" />*/
/* 		</div>*/
/* 			*/
/* 		<div class="input-group">*/
/* 			{% set site_favicon = input_post("site_favicon") is not empty ? input_post("site_favicon") : app_settings["site_favicon"] %}*/
/* 			<label for="site_favicon">{{ l('Site favicon') }}</label>*/
/* 			<input type="text" name="site_favicon" class="form-control" id="site_favicon" placeholder="{{ l('site favicon') }}" value="{{ site_favicon }}" />*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% set site_description = input_post("site_description") is not empty ? input_post("site_description") : app_settings["site_description"] %}*/
/* 			<label for="site_description">{{ l('Site meta description') }} </label>*/
/* 			<textarea name="site_description" class="form-control" id="site_description" placeholder="{{ l('Site description') }}" >{{ site_description }}</textarea>*/
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-6">*/
/* 				<div class="input-group">*/
/* 					{% set theme_color = input_post("theme_color") is not empty ? input_post("theme_color") : app_settings["theme_color"] %}*/
/* 					<label for="theme_color">{{ l('Theme color') }}</label>*/
/* 					<input type="text" name="theme_color" class="form-control jscolor" id="theme_color" placeholder="{{ l('Theme color') }}" value="{{ theme_color }}">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 				<div class="input-group">*/
/* 					{% set links_color = input_post("links_color") is not empty ? input_post("links_color") : app_settings["links_color"] %}*/
/* 					<label for="links_color">{{ l('Theme links color') }}</label>*/
/* 					<input type="text" name="links_color" class="form-control jscolor" id="links_color" placeholder="{{ l('Theme links color') }}" value="{{ links_color }}">*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-6">*/
/* 				<div class="input-group">*/
/* 					{% set public_bg_image = input_post("public_bg_image") is not empty ? input_post("public_bg_image") : app_settings["public_bg_image"] %}*/
/* 					<label for="public_bg_image">{{ l('Theme background image') }} <small>{{ l('Public pages (Login page, Register page ..)') }}</small></label>*/
/* 					<input type="text" name="public_bg_image" class="form-control" id="public_bg_image" placeholder="{{ l('Theme background image') }}" value="{{ public_bg_image }}">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 				<div class="input-group">*/
/* 					{% set public_bg_color = input_post("public_bg_color") is not empty ? input_post("public_bg_color") : app_settings["public_bg_color"] %}*/
/* 					<label for="public_bg_color">{{ l('Theme background color') }} <small>{{ l('Public pages (Login page, Register page ..)') }}</small></label>*/
/* 					<input type="text" name="public_bg_color" class="form-control jscolor" id="public_bg_color" placeholder="{{ l('Theme background color') }}" value="{{ public_bg_color }}">*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% set custom_css = input_post("custom_css") is not empty ? input_post("custom_css") : app_settings["custom_css"] %}*/
/* 			<label for="custom_css">{{ l('Custom CSS') }}</label>*/
/* 			<textarea name="custom_css" class="form-control" id="custom_css" placeholder="{{ l('Custom CSS') }}" >{{ custom_css }}</textarea>*/
/* 		</div>*/
/* */
/* 		<div class="input-group">*/
/* 			{% set footer_text = input_post("footer_text") is not empty ? input_post("footer_text") : app_settings["footer_text"] %}*/
/* 			<label for="footer_text">{{ l('Footer text') }} <small>({{ l('Support HTML tags') }})</small></label>*/
/* 			<textarea name="footer_text" class="form-control" id="footer_text" placeholder="{{ l('Footer text') }}" >{{ footer_text }}</textarea>*/
/* 		</div>*/
/* */
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* 	*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* </div>*/
