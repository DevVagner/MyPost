<?php

/* public/login.twig */
class __TwigTemplate_4da47352490ecdf70981ef16559c1ba7a7b3c998be454ee621942b111d57d94d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_public.twig", "public/login.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Login")), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"logmod\">
<span class=\"logmod__logo\">";
        // line 11
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"))) {
            // line 12
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, assets("theme/default/images/kp_logo_large.png"), "html", null, true);
            echo "\" alt=\"logo\">";
        } else {
            // line 14
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_large", array(), "array"), "html", null, true);
            echo "\" alt=\"logo\">";
        }
        // line 16
        echo "</span>
<div class=\"logmod__wrapper\">
  <div class=\"logmod__container\">
    <ul class=\"logmod__tabs\">
      <li data-tabtar=\"lgm-1\" class=\"current\"><a href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("login")), "html", null, true);
        echo "</a></li>";
        // line 21
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "users_can_register", array()) != 0)) {
            // line 22
            echo "          <li data-tabtar=\"lgm-2\">
          \t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, base_url("register"), "html", null, true);
            echo "\">";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNUP")), "html", null, true);
            echo "
          \t</a>
          </li>";
        }
        // line 28
        echo "    </ul>
    <div class=\"logmod__tab-wrapper\">
      <!-- Signin -->
      <div class=\"logmod__tab lgm-1 show\">
        <div class=\"logmod__heading\">
          <span class=\"logmod__heading-subtitle\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ENTER_USERNAME_PASSWORD_TO_SIGN_IN")), "html", null, true);
        echo "
          </span>";
        // line 36
        echo form_open();
        // line 38
        if ( !twig_test_empty(validation_errors())) {
            // line 39
            echo "            <div class=\"alert alert-danger\">";
            // line 40
            echo validation_errors();
            echo "
            </div>";
        }
        // line 44
        $this->loadTemplate("blocks/flash_bag.twig", "public/login.twig", 44)->display($context);
        // line 45
        echo "        </div> 
        <div class=\"logmod__form\">
          <form accept-charset=\"utf-8\" action=\"#\" method=\"POST\" class=\"simform signin\">
            <div class=\"sminputs\">
              <div class=\"input full\">
                <label class=\"string optional\" for=\"username\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "*
                </label>
                <input class=\"string optional\" name=\"username\" maxlength=\"255\" id=\"username\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "\" type=\"text\" size=\"50\" />
              </div>
            </div>
            <div class=\"sminputs\">
              <div class=\"input full\">
                <label class=\"string optional\" for=\"password\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PASSWORD")), "html", null, true);
        echo "*</label>
                <input class=\"string optional\" maxlength=\"255\" name=\"password\" id=\"password\"  placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PASSWORD")), "html", null, true);
        echo "\" type=\"password\" size=\"50\" />
                <span class=\"hide-password\"><i class='fa fa-eye'></i></span>
              </div>
            </div>";
        // line 64
        if ( !twig_test_empty((isset($context["fb_login_url"]) ? $context["fb_login_url"] : null))) {
            // line 65
            echo "              <div class=\"loginSignUpSeparator\"><span class=\"textInSeparator\" aria-label=\"or\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("or")), "html", null, true);
            echo "</span></div>
              <div class=\"thirdparty-login-box\">
                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["fb_login_url"]) ? $context["fb_login_url"] : null), "html", null, true);
            echo "\" class=\"social-button facebook\" ><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Login with Facebook")), "html", null, true);
            echo "</a>
              </div>";
        }
        // line 70
        echo "
            <div class=\"simform__actions\">
              <input type=\"submit\" class=\"submit\" name=\"signin\" id=\"signinBtn\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SIGNIN")), "html", null, true);
        echo "\" />
              <span class=\"simform__actions-sidetext\">
                <input type=\"checkbox\" name=\"remember\" id=\"remember\" class=\"checkbox-style\"/>
                <label for=\"remember\"></label>
                <span class=\"checkboxText\" >";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("REMEMBER_ME")), "html", null, true);
        echo "</span>
              </span>
              <span class=\"simform__actions-sidetext\">
                <a class=\"special\" role=\"link\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, base_url("account_recovery"), "html", null, true);
        echo "\">";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FORGOT_PASSWORD_USERNAME")), "html", null, true);
        echo "
                </a>
              </span>
            </div> 
          </form>
        </div> 
      </div>
    </div>
  </div> 
</div>";
    }

    // line 92
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 93
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
  var LoginModalController = {
    tabsElementName: \".logmod__tabs li\",
    tabElementName: \".logmod__tab\",
    inputElementsName: \".logmod__form .input\",
    hidePasswordName: \".hide-password\",
    
    inputElements: null,
    tabsElement: null,
    tabElement: null,
    hidePassword: null,
    
    activeTab: null,
    tabSelection: 0, // 0 - first, 1 - second
    
    findElements: function () {
        var base = this;
        
        base.tabsElement = \$(base.tabsElementName);
        base.tabElement = \$(base.tabElementName);
        base.inputElements = \$(base.inputElementsName);
        base.hidePassword = \$(base.hidePasswordName);
        
        return base;
    },
    
   
    addClickEvents: function () {
      var base = this;
        
        base.hidePassword.on(\"click\", function (e) {
            var \$this = \$(this),
                \$pwInput = \$this.prev(\"input\");
            
            if (\$pwInput.attr(\"type\") == \"password\") {
                \$pwInput.attr(\"type\", \"text\");
                \$this.html(\"<i class='fa fa-eye-slash'></i>\");
            } else {
                \$pwInput.attr(\"type\", \"password\");
                \$this.html(\"<i class='fa fa-eye'></i>\");
            }
        });
        base.inputElements.find(\"label\").on(\"click\", function (e) {
           var \$this = \$(this),
               \$input = \$this.next(\"input\"); 
            \$input.focus();
        });     
        return base;
    },
   
    initialize: function () {
        var base = this;        
        base.findElements().addClickEvents();
    }
};
\$(document).ready(function() {LoginModalController.initialize();});
</script>";
    }

    public function getTemplateName()
    {
        return "public/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 93,  183 => 92,  169 => 80,  166 => 79,  160 => 76,  153 => 72,  149 => 70,  142 => 67,  136 => 65,  134 => 64,  128 => 59,  124 => 58,  116 => 53,  111 => 51,  104 => 45,  102 => 44,  97 => 40,  95 => 39,  93 => 38,  91 => 36,  87 => 34,  80 => 28,  74 => 24,  71 => 23,  68 => 22,  66 => 21,  63 => 20,  57 => 16,  52 => 14,  47 => 12,  45 => 11,  40 => 8,  37 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_public.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Login") }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="logmod">*/
/* <span class="logmod__logo">*/
/*   {% if app_settings['site_logo_large'] is empty %}*/
/*     <img src="{{ assets('theme/default/images/kp_logo_large.png') }}" alt="logo">*/
/*   {% else %}*/
/*     <img src="{{ app_settings['site_logo_large'] }}" alt="logo">*/
/*   {% endif %}*/
/* </span>*/
/* <div class="logmod__wrapper">*/
/*   <div class="logmod__container">*/
/*     <ul class="logmod__tabs">*/
/*       <li data-tabtar="lgm-1" class="current"><a href="#">{{ l("login") }}</a></li>*/
/* 			{% if app_settings.users_can_register != 0 %}*/
/*           <li data-tabtar="lgm-2">*/
/*           	<a href="{{ base_url('register') }}">*/
/*           		{{ l("SIGNUP") }}*/
/*           	</a>*/
/*           </li>*/
/*   		{% endif %}*/
/*     </ul>*/
/*     <div class="logmod__tab-wrapper">*/
/*       <!-- Signin -->*/
/*       <div class="logmod__tab lgm-1 show">*/
/*         <div class="logmod__heading">*/
/*           <span class="logmod__heading-subtitle">*/
/*           	{{ l("ENTER_USERNAME_PASSWORD_TO_SIGN_IN") }}*/
/*           </span>*/
/*           {{ form_open() }}  */
/*           */
/*           {% if validation_errors() is not empty %}*/
/*             <div class="alert alert-danger"> */
/*                 {{ validation_errors() }}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% include "blocks/flash_bag.twig" %}*/
/*         </div> */
/*         <div class="logmod__form">*/
/*           <form accept-charset="utf-8" action="#" method="POST" class="simform signin">*/
/*             <div class="sminputs">*/
/*               <div class="input full">*/
/*                 <label class="string optional" for="username">*/
/*                 	{{ l("USERNAME") }}**/
/*                 </label>*/
/*                 <input class="string optional" name="username" maxlength="255" id="username" placeholder="{{ l("USERNAME") }}" type="text" size="50" />*/
/*               </div>*/
/*             </div>*/
/*             <div class="sminputs">*/
/*               <div class="input full">*/
/*                 <label class="string optional" for="password">{{ l("PASSWORD") }}*</label>*/
/*                 <input class="string optional" maxlength="255" name="password" id="password"  placeholder="{{ l("PASSWORD") }}" type="password" size="50" />*/
/*                 <span class="hide-password"><i class='fa fa-eye'></i></span>*/
/*               </div>*/
/*             </div>*/
/* */
/*             {% if fb_login_url is not empty %}*/
/*               <div class="loginSignUpSeparator"><span class="textInSeparator" aria-label="or">{{l("or")}}</span></div>*/
/*               <div class="thirdparty-login-box">*/
/*                 <a href="{{fb_login_url}}" class="social-button facebook" ><i class="fab fa-facebook-f" aria-hidden="true"></i> {{l("Login with Facebook")}}</a>*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             <div class="simform__actions">*/
/*               <input type="submit" class="submit" name="signin" id="signinBtn" value="{{ l("SIGNIN") }}" />*/
/*               <span class="simform__actions-sidetext">*/
/*                 <input type="checkbox" name="remember" id="remember" class="checkbox-style"/>*/
/*                 <label for="remember"></label>*/
/*                 <span class="checkboxText" >{{ l("REMEMBER_ME") }}</span>*/
/*               </span>*/
/*               <span class="simform__actions-sidetext">*/
/*                 <a class="special" role="link" href="{{ base_url('account_recovery') }}">*/
/*                 	{{ l("FORGOT_PASSWORD_USERNAME") }}*/
/*                 </a>*/
/*               </span>*/
/*             </div> */
/*           </form>*/
/*         </div> */
/*       </div>*/
/*     </div>*/
/*   </div> */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer  %}*/
/*   {{ parent() }}*/
/*   <script type="text/javascript">*/
/*   var LoginModalController = {*/
/*     tabsElementName: ".logmod__tabs li",*/
/*     tabElementName: ".logmod__tab",*/
/*     inputElementsName: ".logmod__form .input",*/
/*     hidePasswordName: ".hide-password",*/
/*     */
/*     inputElements: null,*/
/*     tabsElement: null,*/
/*     tabElement: null,*/
/*     hidePassword: null,*/
/*     */
/*     activeTab: null,*/
/*     tabSelection: 0, // 0 - first, 1 - second*/
/*     */
/*     findElements: function () {*/
/*         var base = this;*/
/*         */
/*         base.tabsElement = $(base.tabsElementName);*/
/*         base.tabElement = $(base.tabElementName);*/
/*         base.inputElements = $(base.inputElementsName);*/
/*         base.hidePassword = $(base.hidePasswordName);*/
/*         */
/*         return base;*/
/*     },*/
/*     */
/*    */
/*     addClickEvents: function () {*/
/*       var base = this;*/
/*         */
/*         base.hidePassword.on("click", function (e) {*/
/*             var $this = $(this),*/
/*                 $pwInput = $this.prev("input");*/
/*             */
/*             if ($pwInput.attr("type") == "password") {*/
/*                 $pwInput.attr("type", "text");*/
/*                 $this.html("<i class='fa fa-eye-slash'></i>");*/
/*             } else {*/
/*                 $pwInput.attr("type", "password");*/
/*                 $this.html("<i class='fa fa-eye'></i>");*/
/*             }*/
/*         });*/
/*         base.inputElements.find("label").on("click", function (e) {*/
/*            var $this = $(this),*/
/*                $input = $this.next("input"); */
/*             $input.focus();*/
/*         });     */
/*         return base;*/
/*     },*/
/*    */
/*     initialize: function () {*/
/*         var base = this;        */
/*         base.findElements().addClickEvents();*/
/*     }*/
/* };*/
/* $(document).ready(function() {LoginModalController.initialize();});*/
/* </script>*/
/* {% endblock %}*/
