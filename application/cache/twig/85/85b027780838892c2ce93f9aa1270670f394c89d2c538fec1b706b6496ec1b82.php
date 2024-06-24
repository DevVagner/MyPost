<?php

/* public/register.twig */
class __TwigTemplate_382441a47921c35b16afdd7f384ab9b5376d6bc34fbd74e1e779bf8c2c884ac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_public.twig", "public/register.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_public.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNUP")), "html", null, true);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <style type=\"text/css\">.g-recaptcha > div {margin: auto;}</style>";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"logmod\">
  <span class=\"logmod__logo\">";
        // line 16
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"))) {
            // line 17
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, assets("theme/default/images/kp_logo_large.png"), "html", null, true);
            echo "\" alt=\"logo\">";
        } else {
            // line 19
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"), "html", null, true);
            echo "\" alt=\"logo\">";
        }
        // line 21
        echo "  </span>
  <div class=\"logmod__wrapper\">
    <div class=\"logmod__container\">
      <ul class=\"logmod__tabs\">
        <li data-tabtar=\"lgm-1\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url("login"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNIN")), "html", null, true);
        echo "</a></li>
        <li data-tabtar=\"lgm-2\" class=\"current\">
          <a href=\"#\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNUP")), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
      <div class=\"logmod__tab-wrapper\">
        <!-- Sign up -->
        <div class=\"logmod__tab lgm-2 show\">
          <div class=\"logmod__heading\">
            <span class=\"logmod__heading-subtitle\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ENTER_DETAILS_TO_CREATE_ACCOUNT")), "html", null, true);
        echo "
            </span>";
        // line 39
        $this->loadTemplate("blocks/flash_bag.twig", "public/register.twig", 39)->display($context);
        // line 40
        echo "          </div>
          <div class=\"logmod__form\">";
        // line 42
        echo form_open();
        // line 43
        if ( !twig_test_empty(validation_errors())) {
            // line 44
            echo "              <div class=\"alert alert-danger\">";
            // line 45
            echo validation_errors();
            echo "
              </div>";
        }
        // line 48
        echo "            
            <div class=\"sminputs\">
              <div class=\"input full\">
                <label class=\"string optional\" for=\"username\">";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "*
                </label>
                <input class=\"string optional\" maxlength=\"255\" name=\"username\" id=\"username\" placeholder=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "\" type=\"text\" size=\"50\" value=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("username")), "html", null, true);
        echo "\" />
              </div>
            </div>

              <div class=\"sminputs\">

                <div class=\"input string optional\">
                  <label class=\"string optional\" for=\"password\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PASSWORD")), "html", null, true);
        echo "*
                  </label>
                  <input class=\"string optional\" maxlength=\"255\" name=\"password\" id=\"password\" placeholder=\"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PASSWORD")), "html", null, true);
        echo "\" type=\"password\" size=\"50\" />
                </div>

                <div class=\"input string optional\">
                  <label class=\"string optional\" for=\"password_confirm\">";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RE_ENTER_PASSWORD")), "html", null, true);
        echo "*
                  </label>
                  <input class=\"string optional\" maxlength=\"255\" name=\"password_confirm\" id=\"password_confirm\" placeholder=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RE_ENTER_PASSWORD")), "html", null, true);
        echo "\" type=\"password\" size=\"50\" />
                </div>

              </div>

              <div class=\"sminputs\">
                <div class=\"input full\">
                  <label class=\"string optional\" for=\"email\">";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "*
                  </label>
                  <input class=\"string optional\" maxlength=\"255\" name=\"email\" id=\"email\" placeholder=\"";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "\" type=\"text\" size=\"50\" value=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("email")), "html", null, true);
        echo "\" />
                </div>
              </div>";
        // line 85
        if ( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "fb_login_app", array(), "array"))) {
            // line 86
            echo "                <div class=\"sminputs fblogin\">
                  <fb:login-button scope=\"public_profile,email\" onlogin=\"checkLoginState();\" lass=\"fb-login-button\" data-max-rows=\"1\" data-size=\"large\" data-button-type=\"continue_with\" data-show-faces=\"false\" data-auto-logout-link=\"false\" data-use-continue-as=\"true\">
                  </fb:login-button>
                </div>";
        }
        // line 92
        if ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "captcha_enabled", array(), "array")) {
            // line 93
            echo "              <div class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "captcha_skey", array(), "array"), "html", null, true);
            echo "\"></div>
              <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js\"></script>";
        }
        // line 96
        echo "
              <div class=\"simform__actions\">
                <input type=\"submit\" class=\"submit\" id=\"signupBtn\" name=\"signup\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CREATE_ACCOUNT")), "html", null, true);
        echo "\" />
                <span class=\"simform__actions-sidetext\">
                  <a class=\"special\" role=\"link\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, base_url("account_recovery"), "html", null, true);
        echo "\">";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FORGOT_PASSWORD_USERNAME")), "html", null, true);
        echo "
                  </a>
                </span>
              </div>";
        // line 105
        if (KPMIsActive("terms_and_conditions")) {
            // line 106
            echo "              <div style=\"padding: 10px;font-size:11px;text-align:center\">";
            echo call_user_func_array($this->env->getFunction('l')->getCallable(), array("By creating an account, you agree to our %s", (((("<a href='" . base_url("terms_and_conditions")) . "' target='_blank'>") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Terms and conditions"))) . "</a>")));
            echo "</div>";
        }
        // line 108
        echo "            </form>
          </div> 
        </div>
      </div>
    </div> 
  </div>
</div>";
    }

    // line 117
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 118
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        // line 120
        if ( !twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "fb_login_app", array(), "array"))) {
            // line 121
            echo "    <script type=\"text/javascript\">
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "fb_login_app", array(), "array"), "html", null, true);
            echo "',
        cookie     : true,  // enable cookies to allow the server to access 
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.8' // use graph api version 2.8
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/en_US/sdk.js\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function checkLoginState() {
      FB.api('/me', function(response) {});
      FB.getLoginStatus(function(response) {
        window.location.replace(\"";
            // line 143
            echo twig_escape_filter($this->env, base_url("user/register_third_party/facebook?token="), "html", null, true);
            echo "\"+response.authResponse.accessToken);
      });
    }
    </script>";
        }
    }

    public function getTemplateName()
    {
        return "public/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 143,  235 => 124,  230 => 121,  228 => 120,  226 => 118,  223 => 117,  213 => 108,  208 => 106,  206 => 105,  200 => 101,  197 => 100,  192 => 98,  188 => 96,  182 => 93,  180 => 92,  174 => 86,  172 => 85,  165 => 81,  160 => 79,  150 => 71,  145 => 69,  138 => 64,  133 => 62,  121 => 54,  116 => 52,  111 => 48,  106 => 45,  104 => 44,  102 => 43,  100 => 42,  97 => 40,  95 => 39,  91 => 37,  80 => 28,  73 => 25,  67 => 21,  62 => 19,  57 => 17,  55 => 16,  50 => 13,  47 => 12,  41 => 8,  38 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_public.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("SIGNUP") }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{parent()}}*/
/*   <style type="text/css">.g-recaptcha > div {margin: auto;}</style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="logmod">*/
/*   <span class="logmod__logo">*/
/*     {% if app_settings['site_logo_large'] is empty %}*/
/*       <img src="{{ assets('theme/default/images/kp_logo_large.png') }}" alt="logo">*/
/*     {% else %}*/
/*       <img src="{{ app_settings['site_logo_large'] }}" alt="logo">*/
/*     {% endif %}*/
/*   </span>*/
/*   <div class="logmod__wrapper">*/
/*     <div class="logmod__container">*/
/*       <ul class="logmod__tabs">*/
/*         <li data-tabtar="lgm-1"><a href="{{ base_url('login') }}">{{ l("SIGNIN") }}</a></li>*/
/*         <li data-tabtar="lgm-2" class="current">*/
/*           <a href="#">*/
/*             {{ l("SIGNUP") }}*/
/*           </a>*/
/*         </li>*/
/*       </ul>*/
/*       <div class="logmod__tab-wrapper">*/
/*         <!-- Sign up -->*/
/*         <div class="logmod__tab lgm-2 show">*/
/*           <div class="logmod__heading">*/
/*             <span class="logmod__heading-subtitle">*/
/*               {{ l("ENTER_DETAILS_TO_CREATE_ACCOUNT") }}*/
/*             </span>*/
/*             {% include "blocks/flash_bag.twig" %}*/
/*           </div>*/
/*           <div class="logmod__form">*/
/*             {{ form_open() }}  */
/*             {% if validation_errors() is not empty %}*/
/*               <div class="alert alert-danger"> */
/*                   {{ validation_errors() }}*/
/*               </div>*/
/*             {% endif %}*/
/*             */
/*             <div class="sminputs">*/
/*               <div class="input full">*/
/*                 <label class="string optional" for="username">*/
/*                   {{ l("USERNAME") }}**/
/*                 </label>*/
/*                 <input class="string optional" maxlength="255" name="username" id="username" placeholder="{{ l("USERNAME") }}" type="text" size="50" value="{{ input_post("username") }}" />*/
/*               </div>*/
/*             </div>*/
/* */
/*               <div class="sminputs">*/
/* */
/*                 <div class="input string optional">*/
/*                   <label class="string optional" for="password">*/
/*                     {{ l('PASSWORD') }}**/
/*                   </label>*/
/*                   <input class="string optional" maxlength="255" name="password" id="password" placeholder="{{ l('PASSWORD') }}" type="password" size="50" />*/
/*                 </div>*/
/* */
/*                 <div class="input string optional">*/
/*                   <label class="string optional" for="password_confirm">*/
/*                     {{ l('RE_ENTER_PASSWORD') }}**/
/*                   </label>*/
/*                   <input class="string optional" maxlength="255" name="password_confirm" id="password_confirm" placeholder="{{ l('RE_ENTER_PASSWORD') }}" type="password" size="50" />*/
/*                 </div>*/
/* */
/*               </div>*/
/* */
/*               <div class="sminputs">*/
/*                 <div class="input full">*/
/*                   <label class="string optional" for="email">*/
/*                     {{ l("EMAIL") }}**/
/*                   </label>*/
/*                   <input class="string optional" maxlength="255" name="email" id="email" placeholder="{{ l("EMAIL") }}" type="text" size="50" value="{{ input_post("email") }}" />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               {% if app_settings['fb_login_app'] is not empty %}*/
/*                 <div class="sminputs fblogin">*/
/*                   <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" lass="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true">*/
/*                   </fb:login-button>*/
/*                 </div>*/
/*               {% endif %}*/
/* */
/*               {% if app_settings['captcha_enabled'] %}*/
/*               <div class="g-recaptcha" data-sitekey="{{app_settings['captcha_skey']}}"></div>*/
/*               <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>*/
/*               {% endif %}*/
/* */
/*               <div class="simform__actions">*/
/*                 <input type="submit" class="submit" id="signupBtn" name="signup" value="{{ l("CREATE_ACCOUNT") }}" />*/
/*                 <span class="simform__actions-sidetext">*/
/*                   <a class="special" role="link" href="{{ base_url('account_recovery') }}">*/
/*                   {{ l("FORGOT_PASSWORD_USERNAME") }}*/
/*                   </a>*/
/*                 </span>*/
/*               </div>*/
/*               {% if KPMIsActive('terms_and_conditions') %}*/
/*               <div style="padding: 10px;font-size:11px;text-align:center">{{l("By creating an account, you agree to our %s","<a href='"~base_url('terms_and_conditions')~"' target='_blank'>"~l('Terms and conditions')~"</a>")|raw}}</div>*/
/*               {% endif %}*/
/*             </form>*/
/*           </div> */
/*         </div>*/
/*       </div>*/
/*     </div> */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*   {{ parent() }}*/
/* */
/*   {% if app_settings['fb_login_app'] is not empty %}*/
/*     <script type="text/javascript">*/
/*     window.fbAsyncInit = function() {*/
/*       FB.init({*/
/*         appId      : '{{ app_settings['fb_login_app'] }}',*/
/*         cookie     : true,  // enable cookies to allow the server to access */
/*         xfbml      : true,  // parse social plugins on this page*/
/*         version    : 'v2.8' // use graph api version 2.8*/
/*       });*/
/*     };*/
/* */
/*     (function(d, s, id) {*/
/*       var js, fjs = d.getElementsByTagName(s)[0];*/
/*       if (d.getElementById(id)) return;*/
/*       js = d.createElement(s); js.id = id;*/
/*       js.src = "//connect.facebook.net/en_US/sdk.js";*/
/*       fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));*/
/* */
/* */
/*     function checkLoginState() {*/
/*       FB.api('/me', function(response) {});*/
/*       FB.getLoginStatus(function(response) {*/
/*         window.location.replace("{{ base_url('user/register_third_party/facebook?token=') }}"+response.authResponse.accessToken);*/
/*       });*/
/*     }*/
/*     </script>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
/* */
