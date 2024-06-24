<?php

/* settings/user_settings.twig */
class __TwigTemplate_ecaa629814a866d78f52f135a2344d7ebc0baa1ce1d3ef3b45d33bd5eae66aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/user_settings.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Profile")), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        // line 9
        echo form_open();
        echo "
<div class=\"settings\">
\t<div class=\"row \">
\t\t<div class=\"tabbable tabs-left\">
\t\t\t<div class=\"col-xs-12 col-sm-3 settingsTabs\">";
        // line 14
        $context["current_page"] = "user_settings";
        // line 15
        $this->loadTemplate("settings/tabs.twig", "settings/user_settings.twig", 15)->display($context);
        // line 16
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"row tab-content\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-user\"></i>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Profile")), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<label for=\"username\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo " 
\t\t\t\t\t\t(<small>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME_CAN_NOT_CHANGED")), "html", null, true);
        echo "</small>)
\t\t\t\t\t\t</label>";
        // line 30
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("username")))) {
            // line 31
            $context["username"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("username"));
        } else {
            // line 33
            $context["username"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "row", array(0 => "username"), "method");
        }
        // line 35
        echo "\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Username")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "\" disabled=\"disabled\"/>

\t\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" data-target=\"#changePW\" class=\"btn btn-default\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Change password")), "html", null, true);
        echo "</button>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12\">";
        // line 42
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("email")))) {
            // line 43
            $context["email"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("email"));
        } else {
            // line 45
            $context["email"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "row", array(0 => "email"), "method");
        }
        // line 47
        echo "\t\t\t\t\t\t<label for=\"email\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("E-mail")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("E-mail")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">";
        // line 52
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("firstname")))) {
            // line 53
            $context["firstname"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("firstname"));
        } else {
            // line 55
            $context["firstname"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "row", array(0 => "firstname"), "method");
        }
        // line 57
        echo "\t\t\t\t\t\t<label for=\"firstname\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("First name")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"firstname\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("First name")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">";
        // line 62
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("lastname")))) {
            // line 63
            $context["lastname"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("lastname"));
        } else {
            // line 65
            $context["lastname"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "row", array(0 => "lastname"), "method");
        }
        // line 67
        echo "\t\t\t\t\t\t<label for=\"lastname\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last name")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"lastname\" placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last name")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<label for=\"fbuserid\">";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook user ID")), "html", null, true);
        echo "</label>";
        // line 73
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fbuserid")))) {
            // line 74
            $context["fbuserid"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("fbuserid"));
        } else {
            // line 76
            $context["fbuserid"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "row", array(0 => "fbuserid"), "method");
        }
        // line 78
        echo "\t\t\t\t\t\t<input type=\"text\" name=\"fbuserid\" class=\"form-control\" id=\"fbuserid\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook user ID")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["fbuserid"]) ? $context["fbuserid"] : null), "html", null, true);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</form>";
        // line 93
        echo "<div id=\"changePW\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
  \t<div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t        <h4 class=\"modal-title\">";
        // line 98
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Password password")), "html", null, true);
        echo "</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t      \t<div class=\"changePWAlertBox\"></div>
\t      \t<div class=\"row\">
\t      \t\t<div class=\"col-xs-12\">
\t      \t\t\t<label for=\"oldPassword\">";
        // line 104
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Current password")), "html", null, true);
        echo "</label>
\t\t      \t\t<input type=\"password\" id=\"oldPassword\"  name=\"oldPassword\" class=\"form-control\">
\t\t      \t</div>
\t\t      \t<div class=\"col-xs-12 col-sm-6\">
\t\t      \t\t<label for=\"oldPassword\">";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New password")), "html", null, true);
        echo "</label>
\t\t      \t\t<input type=\"password\" name=\"newPassword\" id=\"newPassword\" class=\"form-control\">
\t\t      \t</div>
\t\t      \t<div class=\"col-xs-12 col-sm-6\">
\t\t      \t\t<label for=\"oldPassword\">";
        // line 112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Repeat New password")), "html", null, true);
        echo "</label>
\t\t      \t\t<input type=\"password\" name=\"reNewPassword\" id=\"reNewPassword\" class=\"form-control\">
\t\t      \t</div>
\t      \t</div>
\t      </div>
\t      <div class=\"modal-footer\">
          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</button>
          \t<button type=\"button\" id=\"changePWModalBtn\" class=\"btn btn-primary\">";
        // line 119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Change password")), "html", null, true);
        echo "</button>
        </div>
\t  \t</div>
\t</div>
</div>";
    }

    // line 126
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 127
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>

    <script>
    \t\$( \"#changePWModalBtn\" ).click(function(){

        \t\$(\".changePWAlertBox\").html(\"\");
        
          kp_preloader(\"on\",\"#changePW .modal-body\");
      
          \$.ajax({
            url: '";
        // line 138
        echo twig_escape_filter($this->env, base_url("settings/home/change_password"), "html", null, true);
        echo "',
            dataType: 'json',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: {
              old_password: \$('#oldPassword', \"#changePW\").val(),
              new_password: \$('#newPassword', \"#changePW\").val(),
              re_new_password: \$('#reNewPassword', \"#changePW\").val(),";
        // line 146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')  
            },
            success: function( data, textStatus, jQxhr ){
                if(data.status == \"success\"){

                  htmlData = \"<ul>\";
                  if(data.message !== null && typeof data.message === 'object'){
                    Object.keys(data.message).forEach(function(key) {
                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
                    });
                  }else{
                    htmlData += \"<li>\" + data.message + \"</li>\";
                  }

                  htmlData += \"</ul>\";
                  alertBox(htmlData,\"success\",\".changePWAlertBox\",false,true);
                 
                 }else if(data.status == \"notice\"){
                    alertBox(data.message,\"warning\",\".changePWAlertBox\",false,true);
                 }else{
                
                  htmlData = \"<ul>\";
                  if(data.message !== null && typeof data.message === 'object'){
                    Object.keys(data.message).forEach(function(key) {
                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
                    });
                  }else{
                    htmlData += \"<li>\" + data.message + \"</li>\";
                  }
                  htmlData += \"</ul>\";
                  alertBox(htmlData,\"danger\",\".changePWAlertBox\",false,true);
                }
        
              
            },
            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
            complete: function() {
              kp_preloader(\"off\",\"#changePW .modal-body\");
            }
        });
      });
    </script>";
    }

    public function getTemplateName()
    {
        return "settings/user_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 146,  266 => 138,  253 => 128,  249 => 127,  246 => 126,  237 => 119,  233 => 118,  224 => 112,  217 => 108,  210 => 104,  201 => 98,  194 => 93,  183 => 82,  173 => 78,  170 => 76,  167 => 74,  165 => 73,  162 => 72,  153 => 68,  148 => 67,  145 => 65,  142 => 63,  140 => 62,  132 => 58,  127 => 57,  124 => 55,  121 => 53,  119 => 52,  111 => 48,  106 => 47,  103 => 45,  100 => 43,  98 => 42,  91 => 37,  83 => 35,  80 => 33,  77 => 31,  75 => 30,  71 => 27,  67 => 26,  60 => 21,  53 => 16,  51 => 15,  49 => 14,  42 => 9,  40 => 8,  37 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Profile') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* {{ form_open() }}*/
/* <div class="settings">*/
/* 	<div class="row ">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'user_settings' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="row tab-content">*/
/* 					*/
/* 					<div class="col-xs-12">*/
/* 						<h4 class="tab-title"><i class="fa fa-user"></i>  {{ l('Profile') }}</h4>*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-xs-12">*/
/* 						<label for="username">*/
/* 						{{ l('USERNAME') }} */
/* 						(<small>{{ l('USERNAME_CAN_NOT_CHANGED') }}</small>)*/
/* 						</label>*/
/* */
/* 						{% if input_post('username') is not empty %}*/
/* 							{% set username = input_post('username') %}*/
/* 						{% else %}*/
/* 							{% set username = currentUser.row('username') %}*/
/* 						{% endif %}*/
/* 						<input type="text" name="username" class="form-control" id="username" placeholder="{{ l('Username') }}" value="{{ username }}" disabled="disabled"/>*/
/* */
/* 						<button type="button" data-toggle="modal" data-target="#changePW" class="btn btn-default">{{ l("Change password") }}</button>*/
/* 					*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-xs-12">*/
/* 						{% if input_post('email') is not empty %}*/
/* 							{% set email = input_post('email') %}*/
/* 						{% else %}*/
/* 							{% set email = currentUser.row('email') %}*/
/* 						{% endif %}*/
/* 						<label for="email">{{ l('E-mail') }}</label>*/
/* 						<input type="text" name="email" class="form-control" id="email" placeholder="{{ l('E-mail') }}" value="{{ email }}" />*/
/* 					</div>*/
/* */
/* 					<div class="col-xs-12 col-md-6">*/
/* 						{% if input_post('firstname') is not empty %}*/
/* 							{% set firstname = input_post('firstname') %}*/
/* 						{% else %}*/
/* 							{% set firstname = currentUser.row('firstname') %}*/
/* 						{% endif %}*/
/* 						<label for="firstname">{{ l('First name') }}</label>*/
/* 						<input type="text" name="firstname" class="form-control" id="firstname" placeholder="{{ l('First name') }}" value="{{ firstname }}" />*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-xs-12 col-md-6">*/
/* 						{% if input_post('lastname') is not empty %}*/
/* 							{% set lastname = input_post('lastname') %}*/
/* 						{% else %}*/
/* 							{% set lastname = currentUser.row('lastname') %}*/
/* 						{% endif %}*/
/* 						<label for="lastname">{{ l('Last name') }}</label>*/
/* 						<input type="text" name="lastname" class="form-control" id="lastname" placeholder="{{ l('Last name') }}" value="{{ lastname }}" />*/
/* 					</div>*/
/* */
/* 					<div class="col-xs-12">*/
/* 						<label for="fbuserid">{{ l('Facebook user ID') }}</label>*/
/* 						{% if input_post('fbuserid') is not empty %}*/
/* 							{% set fbuserid = input_post('fbuserid') %}*/
/* 						{% else %}*/
/* 							{% set fbuserid = currentUser.row('fbuserid') %}*/
/* 						{% endif %}*/
/* 						<input type="text" name="fbuserid" class="form-control" id="fbuserid" placeholder="{{ l('Facebook user ID')}}" value="{{ fbuserid }}"/>*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-xs-12 col-md-6">*/
/* 						<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </form>*/
/* */
/* {# Change password modal #}*/
/* <div id="changePW" class="modal fade" role="dialog" data-backdrop="static">*/
/*   	<div class="modal-dialog">*/
/* 	    <div class="modal-content">*/
/* 	      <div class="modal-header">*/
/* 	        <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 	        <h4 class="modal-title">{{ l("Password password") }}</h4>*/
/* 	      </div>*/
/* 	      <div class="modal-body">*/
/* 	      	<div class="changePWAlertBox"></div>*/
/* 	      	<div class="row">*/
/* 	      		<div class="col-xs-12">*/
/* 	      			<label for="oldPassword">{{ l('Current password') }}</label>*/
/* 		      		<input type="password" id="oldPassword"  name="oldPassword" class="form-control">*/
/* 		      	</div>*/
/* 		      	<div class="col-xs-12 col-sm-6">*/
/* 		      		<label for="oldPassword">{{ l('New password') }}</label>*/
/* 		      		<input type="password" name="newPassword" id="newPassword" class="form-control">*/
/* 		      	</div>*/
/* 		      	<div class="col-xs-12 col-sm-6">*/
/* 		      		<label for="oldPassword">{{ l('Repeat New password') }}</label>*/
/* 		      		<input type="password" name="reNewPassword" id="reNewPassword" class="form-control">*/
/* 		      	</div>*/
/* 	      	</div>*/
/* 	      </div>*/
/* 	      <div class="modal-footer">*/
/*           	<button type="button" class="btn btn-default" data-dismiss="modal">{{ l('CLOSE') }}</button>*/
/*           	<button type="button" id="changePWModalBtn" class="btn btn-primary">{{ l('Change password') }}</button>*/
/*         </div>*/
/* 	  	</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*     {{ parent() }}*/
/*     <script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/* */
/*     <script>*/
/*     	$( "#changePWModalBtn" ).click(function(){*/
/* */
/*         	$(".changePWAlertBox").html("");*/
/*         */
/*           kp_preloader("on","#changePW .modal-body");*/
/*       */
/*           $.ajax({*/
/*             url: '{{ base_url("settings/home/change_password") }}',*/
/*             dataType: 'json',*/
/*             type: 'post',*/
/*             contentType: 'application/x-www-form-urlencoded',*/
/*             data: {*/
/*               old_password: $('#oldPassword', "#changePW").val(),*/
/*               new_password: $('#newPassword', "#changePW").val(),*/
/*               re_new_password: $('#reNewPassword', "#changePW").val(),*/
/*               {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')  */
/*             },*/
/*             success: function( data, textStatus, jQxhr ){*/
/*                 if(data.status == "success"){*/
/* */
/*                   htmlData = "<ul>";*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                   }else{*/
/*                     htmlData += "<li>" + data.message + "</li>";*/
/*                   }*/
/* */
/*                   htmlData += "</ul>";*/
/*                   alertBox(htmlData,"success",".changePWAlertBox",false,true);*/
/*                  */
/*                  }else if(data.status == "notice"){*/
/*                     alertBox(data.message,"warning",".changePWAlertBox",false,true);*/
/*                  }else{*/
/*                 */
/*                   htmlData = "<ul>";*/
/*                   if(data.message !== null && typeof data.message === 'object'){*/
/*                     Object.keys(data.message).forEach(function(key) {*/
/*                         htmlData += "<li>" + data.message[key] + "</li>";*/
/*                     });*/
/*                   }else{*/
/*                     htmlData += "<li>" + data.message + "</li>";*/
/*                   }*/
/*                   htmlData += "</ul>";*/
/*                   alertBox(htmlData,"danger",".changePWAlertBox",false,true);*/
/*                 }*/
/*         */
/*               */
/*             },*/
/*             error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*             complete: function() {*/
/*               kp_preloader("off","#changePW .modal-body");*/
/*             }*/
/*         });*/
/*       });*/
/*     </script>*/
/* {% endblock %}*/
