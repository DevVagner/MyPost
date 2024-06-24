<?php

/* settings/components/app_settings/social_login.twig */
class __TwigTemplate_fb69b7738629c31f57dd8708e7b8b2e8c3782620ee8e32c98072de4d3ddb56b3 extends Twig_Template
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
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#social_login\">
    <i class=\"fab fa-facebook-f fa-fw\" aria-hidden=\"true\"></i> 
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Social login")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"social_login\" class=\"panel-collapse collapse\">
\t<div class=\"panel-body\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"input-group\">";
        // line 13
        $context["fb_login_app"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_login_app")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_login_app"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "fb_login_app", array(), "array")));
        // line 14
        echo "\t\t\t\t<label for=\"fb_login_app\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook App ID")), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"fb_login_app\" class=\"form-control\" id=\"fb_login_app\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook App ID")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["fb_login_app"]) ? $context["fb_login_app"] : null), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"input-group\">";
        // line 20
        $context["fb_login_app_secret"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_login_app_secret")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fb_login_app_secret"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "fb_login_app_secret", array(), "array")));
        // line 21
        echo "\t\t\t\t<label for=\"fb_login_app_secret\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook App secret")), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"fb_login_app_secret\" class=\"form-control\" id=\"fb_login_app_secret\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook App secret")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["fb_login_app_secret"]) ? $context["fb_login_app_secret"] : null), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"input-group\">
\t\t\t<div>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Your OAuth redirect uri")), "html", null, true);
        echo " : </div>
\t\t\t<small style=\"color:red\">";
        // line 28
        echo twig_escape_filter($this->env, base_url("user/thirdparty_login/facebook/"), "html", null, true);
        echo "</small>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />\t\t
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/social_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  72 => 28,  68 => 27,  58 => 22,  53 => 21,  51 => 20,  42 => 15,  37 => 14,  35 => 13,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#social_login">*/
/*     <i class="fab fa-facebook-f fa-fw" aria-hidden="true"></i> */
/* 	<span>{{ l('Social login') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="social_login" class="panel-collapse collapse">*/
/* 	<div class="panel-body">*/
/* 		<div class="col-md-6">*/
/* 			<div class="input-group">*/
/* 				{% set fb_login_app = input_post("fb_login_app") is not empty ? input_post("fb_login_app") : app_settings["fb_login_app"] %}*/
/* 				<label for="fb_login_app">{{ l('Facebook App ID') }}</label>*/
/* 				<input type="text" name="fb_login_app" class="form-control" id="fb_login_app" placeholder="{{ l('Facebook App ID') }}" value="{{ fb_login_app }}" />*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/* 			<div class="input-group">*/
/* 				{% set fb_login_app_secret = input_post("fb_login_app_secret") is not empty ? input_post("fb_login_app_secret") : app_settings["fb_login_app_secret"] %}*/
/* 				<label for="fb_login_app_secret">{{ l('Facebook App secret') }}</label>*/
/* 				<input type="text" name="fb_login_app_secret" class="form-control" id="fb_login_app_secret" placeholder="{{ l('Facebook App secret') }}" value="{{ fb_login_app_secret }}" />*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-12">*/
/* 			<div class="input-group">*/
/* 			<div>{{l("Your OAuth redirect uri")}} : </div>*/
/* 			<small style="color:red">{{base_url("user/thirdparty_login/facebook/")}}</small>*/
/* 			</div>*/
/* 		</div>*/
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />		*/
/* 	</div>*/
/* </div>*/
/* </div>*/
