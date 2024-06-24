<?php

/* settings/fbapps.twig */
class __TwigTemplate_787a911ee73f046cc990e442ae15292b645368aa72d02f838209ce2c560beee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/fbapps.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Apps")), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<form method='POST' class=\"settings\" novalidate>
\t<div class=\"row\">
\t\t<div class=\"tabbable tabs-left\">
\t\t\t<div class=\"col-xs-12 col-sm-3 settingsTabs\">";
        // line 13
        $context["current_page"] = "fbapps";
        // line 14
        $this->loadTemplate("settings/tabs.twig", "settings/fbapps.twig", 14)->display($context);
        // line 15
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"tab-content\">";
        // line 19
        echo form_open();
        echo "

\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-plug\"></i>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APPS")), "html", null, true);
        echo "</h4>
\t\t\t\t\t<div class=\"manageAppErrors\"></div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label for=\"fbapp_id\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP_ID")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"fbapp_id\" class=\"form-control\" id=\"fbapp_id\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("FB_APP_ID")), "html", null, true);
        echo "\" value=\"\" />
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<label for=\"fbapp_secret\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP_SECRET")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"fbapp_secret\" class=\"form-control\" id=\"fbapp_secret\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP_SECRET")), "html", null, true);
        echo "\" value=\"\"/>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label for=\"fbapp_auth_Link\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP_AUTH_LINK")), "html", null, true);
        echo "
\t\t\t\t\t\t&nbsp;<a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP_AUTH_LINK_NOTE")), "html", null, true);
        echo "\"> 
\t\t\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"text\" name=\"fbapp_auth_Link\" class=\"form-control\" id=\"fbapp_auth_Link\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP_AUTH_LINK")), "html", null, true);
        echo "\" value=\"\"/>
\t\t\t\t\t</div>";
        // line 42
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 43
            echo "\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style is_public' id=\"is_public\" name=\"is_public\" aria-label=\"";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Make this app public")), "html", null, true);
            echo "\"  />
\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"is_public\" class=\"input-text\">";
            // line 48
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Make this app public")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>";
        }
        // line 51
        echo "
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"button\" name=\"addFbApp\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add")), "html", null, true);
        echo "\" id=\"addFbApp\" class=\"btn btn-primary\" />
\t\t\t\t\t</div>";
        // line 56
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "name"), "method"))) {
            echo " 
\t\t\t\t\t\t<div class='alert alert-warning' role='alert'>
\t\t\t\t\t\t<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>";
            // line 59
            echo call_user_func_array($this->env->getFunction('l')->getCallable(), array("Please make sure to logged in to Facebook as %s before authenticate the app.", (("<strong class='text-danger'>" . $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "name"), "method")) . twig_capitalize_string_filter($this->env, "</strong>"))));
            echo "
            \t\t\t</div>";
        }
        // line 62
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t<br />

\t\t\t\t<div class=\"has-responsive-table\">
\t\t\t\t\t<table class='table table-bordered table-striped'>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("APP_NAME")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expires on")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"fbapps\">";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fbapps"]) ? $context["fbapps"] : null), "getUserFBApps", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fbapp"]) {
            // line 79
            if ( !twig_test_empty($this->getAttribute((isset($context["fb"]) ? $context["fb"] : null), "GetAccessToken", array(0 => $this->getAttribute($context["fbapp"], "id", array())), "method"))) {
                // line 80
                $context["statusIcon"] = "ok";
            } else {
                // line 82
                $context["statusIcon"] = "remove";
            }
            // line 85
            $context["appType"] = $this->getAttribute((isset($context["fbapps"]) ? $context["fbapps"] : null), "appType", array(0 => $this->getAttribute($context["fbapp"], "id", array())), "method");
            // line 87
            $context["userApp"] = $this->getAttribute((isset($context["fbapps"]) ? $context["fbapps"] : null), "getAccessToken", array(0 => $this->getAttribute($context["fbapp"], "id", array()), 1 => $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "fb_id"), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "currentUser", array(), "method"), "user_id", array(), "array")), "method");
            // line 88
            echo "
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<img src='https://graph.facebook.com/";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["fbapp"], "appid", array()), "html", null, true);
            echo "/picture?redirect=1&height=32&width=32&type=small' width='32' height='32' style='vertical-align:middle;'  onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookApp.png"), "html", null, true);
            echo "'\"/>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["fbapp"], "app_name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 95
            if ($this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(), "method")) {
                // line 96
                if ((($this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(0 => "expires_in"), "method") == "never") || (is_string($__internal_a1dc70ee4308e132890bb3006fda82de64bb220d447de2d2c62edd1d0bf6c6a0 = $this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(0 => "expires_in"), "method")) && is_string($__internal_febb7c92d87b9589a2a3ebc95eef6dcdcd1071c0398f234b0da35a2a87b2332f = "-") && ('' === $__internal_febb7c92d87b9589a2a3ebc95eef6dcdcd1071c0398f234b0da35a2a87b2332f || 0 === strpos($__internal_a1dc70ee4308e132890bb3006fda82de64bb220d447de2d2c62edd1d0bf6c6a0, $__internal_febb7c92d87b9589a2a3ebc95eef6dcdcd1071c0398f234b0da35a2a87b2332f))))) {
                    // line 97
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Never")), "html", null, true);
                } else {
                    // line 99
                    if (preg_match("/[0-9]+/", $this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(0 => "expires_in"), "method"))) {
                        // line 100
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(0 => "access_token_date"), "method"), (("+" . abs($this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(0 => "expires_in"), "method"))) . " seconds")), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
                    } else {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t  -";
                    }
                }
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t-";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 110
            if (($this->getAttribute($context["fbapp"], "user_id", array()) == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "currentUser", array(), "method"), "user_id", array(), "array"))) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fbapp"], "id", array()), "html", null, true);
                echo "' title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DELETE")), "html", null, true);
                echo "' class='btn btn-danger deleteFbAppBtn'>
\t\t\t\t\t\t\t\t\t\t\t<span class='glyphicon glyphicon-trash'></span> 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 113
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DELETE")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</button>";
            }
            // line 117
            if ($this->getAttribute((isset($context["userApp"]) ? $context["userApp"] : null), "row", array(), "method")) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t<a href='";
                echo twig_escape_filter($this->env, base_url(("settings/fbapps/deauthenticate/" . $this->getAttribute($context["fbapp"], "id", array()))), "html", null, true);
                echo "' title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DEAUTHENTICATE")), "html", null, true);
                echo "' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
                // line 119
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DEAUTHENTICATE")), "html", null, true);
                echo "</span></a>";
            } else {
                // line 122
                if ((((isset($context["appType"]) ? $context["appType"] : null) == 3) || ((isset($context["appType"]) ? $context["appType"] : null) == 2))) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"window.open('";
                    echo twig_escape_filter($this->env, base_url(("Facebook/app_authentication/third_party/?app_id=" . $this->getAttribute($context["fbapp"], "id", array()))), "html", null, true);
                    echo "','','height=400,width=600'); return false;\" class='btn btn-primary'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
                    // line 125
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("AUTHENTICATE")), "html", null, true);
                    echo "</span></button>";
                }
                // line 128
                if (((isset($context["appType"]) ? $context["appType"] : null) == 1)) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"window.open('";
                    echo twig_escape_filter($this->env, base_url(("Facebook/app_authentication/own_app/?app_id=" . $this->getAttribute($context["fbapp"], "id", array()))), "html", null, true);
                    echo "','','height=450,width=600'); return false;\" class='btn btn-primary'>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
                    // line 131
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("AUTHENTICATE")), "html", null, true);
                    echo "</span></button>";
                }
            }
            // line 135
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No apps Available ")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fbapp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>";
        // line 154
        $context["box_id"] = "fbapp";
        // line 155
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the app?"));
        // line 156
        $this->loadTemplate("blocks/delete_modal.twig", "settings/fbapps.twig", 156)->display($context);
    }

    // line 161
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 162
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>

\t<script>
\t\tfunction FbAuth(app_id){
\t\t\twindow.open('";
        // line 167
        echo twig_escape_filter($this->env, base_url("Facebook/app_authentication"), "html", null, true);
        echo "?app_id='+app_id,'','height=500,width=600');
\t\t}

\t\t\$( document ).ready(function() {
\t\t\t\$(\"#addFbApp\").click(function(){
\t\t\t\t// app_id and app_serect validation
\t\t\t\t\$('.manageAppErrors').html('');

\t\t\t\tif(\$(\"#fbapp_id\").val() == \"\"){\t
\t\t\t\t\talertBox(\"";
        // line 176
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("APP_ID_CAN_NOT_EMPTY")), "html", null, true);
        echo "\",'danger',\".manageAppErrors\");
\t\t\t\t} else {
\t\t\t\t\tkp_preloader(\"on\");
\t\t\t\t\t\$.ajax({
\t\t\t\t      url: '";
        // line 180
        echo twig_escape_filter($this->env, base_url("settings/fbapps/add_fbapp"), "html", null, true);
        echo "',
\t\t\t\t      dataType: 'json',
\t\t\t\t      type: 'post',
\t\t\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t\t\t      data: { 
\t\t\t\t      \tapp_id:\$(\"#fbapp_id\").val(),
\t\t\t\t      \tapp_secret:\$(\"#fbapp_secret\").val(),
\t\t\t\t      \tfbapp_auth_Link:\$(\"#fbapp_auth_Link\").val(),";
        // line 190
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 191
            echo "\t\t\t\t      \t\tis_public: \$('#is_public').is(\":checked\") ? 1 : 0,";
        }
        // line 194
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t      },
\t\t\t\t      success: function( data, textStatus, jQxhr ){
\t\t\t\t        if(data.status == \"success\"){
\t\t\t\t        \tlocation.reload();
\t\t\t\t        }else{
\t\t\t\t\t\t\tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\thtmlData = \"<ul>\";
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\thtmlData += \"</ul>\";
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\thtmlData = data.message;
\t\t\t                }
\t\t\t\t        \talertBox(htmlData,'danger',\".manageAppErrors\");
\t\t\t\t        }
\t\t\t\t      },
\t\t\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t      \tconsole.log(errorThrown);
\t\t\t\t      \talertBox(\"";
        // line 214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".manageAppErrors\",false,false);
\t\t\t\t      },
\t\t\t\t      complete: function () {
\t\t\t\t      \tkp_preloader(\"off\");
\t\t\t\t      }
\t\t\t\t    });
\t\t\t\t}
\t\t\t});
\t\t});";
        // line 225
        echo "\t    \$(\".deleteFbAppBtn\").click(function(){
\t\t\t\$(\"#delete_fbapp\").modal(\"show\");
\t\t\tdeleteFbappBtn = \$(this);
\t    });

\t    \$(\".deleteBtn_fbapp\" ).click(function(){
\t    \t
\t\t    \$.ajax({
\t\t      url: '";
        // line 233
        echo twig_escape_filter($this->env, base_url("settings/fbapps/delete_fbapp"), "html", null, true);
        echo "',
\t\t      dataType: 'json',
\t\t      type: 'post',
\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t      data: { 
\t\t      \tid: deleteFbappBtn.val(),";
        // line 239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t      },
\t\t      success: function( data, textStatus, jQxhr ){
\t\t        if(data.status == \"success\"){
\t\t        \talertBox(data.message,\"success\",\".deleteAlertBox_fbapp\",false,false);
\t            \t\$(\".deleteBtn_fbapp\").prop('disabled', true);
\t\t        \t\$(document).on('hide.bs.modal','#delete_fbapp', function () {
\t\t        \t\tlocation.reload();
\t\t        \t});
\t\t        }else{
\t\t        \talertBox(data.message,\"danger\",\".deleteAlertBox_fbapp\",false,false);
\t\t        }
\t\t      },
\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t      \tconsole.log(errorThrown);
\t\t      \talertBox(\"";
        // line 254
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_fbapp\",false,false);
\t\t      }
\t\t    });

\t\t    \$('.deleteBox_content_fbapp').html(\"\");
\t      
\t\t});


\t</script>";
    }

    public function getTemplateName()
    {
        return "settings/fbapps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 254,  405 => 239,  397 => 233,  387 => 225,  376 => 214,  351 => 194,  348 => 191,  346 => 190,  336 => 180,  329 => 176,  317 => 167,  310 => 163,  306 => 162,  303 => 161,  299 => 156,  297 => 155,  295 => 154,  284 => 142,  276 => 139,  273 => 138,  267 => 135,  262 => 131,  256 => 129,  254 => 128,  250 => 125,  244 => 123,  242 => 122,  238 => 119,  231 => 118,  229 => 117,  224 => 113,  216 => 111,  214 => 110,  211 => 108,  208 => 106,  203 => 102,  200 => 100,  198 => 99,  195 => 97,  193 => 96,  191 => 95,  186 => 92,  181 => 91,  176 => 88,  174 => 87,  172 => 85,  169 => 82,  166 => 80,  164 => 79,  159 => 77,  152 => 71,  148 => 70,  138 => 62,  133 => 59,  128 => 56,  124 => 53,  120 => 51,  115 => 48,  109 => 45,  105 => 43,  103 => 42,  99 => 39,  93 => 36,  89 => 35,  82 => 31,  78 => 30,  71 => 26,  67 => 25,  60 => 21,  55 => 19,  51 => 15,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Facebook Apps') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* <form method='POST' class="settings" novalidate>*/
/* 	<div class="row">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'fbapps' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="tab-content">*/
/* */
/* 					{{ form_open() }}*/
/* */
/* 					<h4 class="tab-title"><i class="fa fa-plug"></i> {{ l('FB_APPS') }}</h4>*/
/* 					<div class="manageAppErrors"></div>*/
/* 					*/
/* 					<div class="input-group">*/
/* 						<label for="fbapp_id">{{ l('FB_APP_ID') }}</label>*/
/* 						<input type="text" name="fbapp_id" class="form-control" id="fbapp_id" placeholder="{{ lang('FB_APP_ID') }}" value="" />*/
/* 					</div>*/
/* 					*/
/* 					<div class="input-group">*/
/* 						<label for="fbapp_secret">{{ l('FB_APP_SECRET') }}</label>*/
/* 						<input type="text" name="fbapp_secret" class="form-control" id="fbapp_secret" placeholder="{{ l('FB_APP_SECRET') }}" value=""/>*/
/* 					</div>*/
/* 					*/
/* 					<div class="input-group">*/
/* 					<label for="fbapp_auth_Link">{{ l('FB_APP_AUTH_LINK') }}*/
/* 						&nbsp;<a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="{{ l('FB_APP_AUTH_LINK_NOTE') }}"> */
/* 						<i class="fa fa-question-circle" aria-hidden="true"></i></a>*/
/* 						</label>*/
/* 						<input type="text" name="fbapp_auth_Link" class="form-control" id="fbapp_auth_Link" placeholder="{{ l('FB_APP_AUTH_LINK') }}" value=""/>*/
/* 					</div>*/
/* */
/* 					{% if user.hasPermission('admin') == true %}*/
/* 						<div class="input-group">*/
/* 							<label class="switch">*/
/* 								<input type="checkbox" class='checkbox-style is_public' id="is_public" name="is_public" aria-label="{{ l('Make this app public') }}"  />*/
/* 								<span class="slider round"></span>*/
/* 							</label>*/
/* 							<label for="is_public" class="input-text">{{ l('Make this app public') }}</label>*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="input-group">*/
/* 						<input type="button" name="addFbApp" value="{{ l('Add') }}" id="addFbApp" class="btn btn-primary" />*/
/* 					</div>*/
/* 				*/
/* 					{% if fbaccountDetails.row('name') is not empty %} */
/* 						<div class='alert alert-warning' role='alert'>*/
/* 						<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>*/
/* 						{{ l("Please make sure to logged in to Facebook as %s before authenticate the app.","<strong class='text-danger'>" ~ fbaccountDetails.row('name') ~ "</strong>"|capitalize)|raw }}*/
/*             			</div>*/
/* 					{% endif %}*/
/* 				*/
/* 				*/
/* 				<br />*/
/* */
/* 				<div class="has-responsive-table">*/
/* 					<table class='table table-bordered table-striped'>*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<td>{{ l('APP_NAME') }}</td>*/
/* 								<td>{{ l('Expires on') }}</td>*/
/* 								<td></td>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody id="fbapps">*/
/* 							*/
/* 							{% for fbapp in fbapps.getUserFBApps() %}*/
/* */
/* 								{% if fb.GetAccessToken(fbapp.id) is not empty %}*/
/* 									{% set statusIcon = "ok" %}*/
/* 								{% else %}*/
/* 									{% set statusIcon = "remove" %}*/
/* 								{% endif %}*/
/* */
/* 								{% set appType = fbapps.appType(fbapp.id) %}*/
/* */
/* 								{% set userApp = fbapps.getAccessToken(fbapp.id,fbaccountDetails.row('fb_id'),user.currentUser()['user_id']) %}*/
/* */
/* 								<tr>*/
/* 									<td>*/
/* 										<img src='https://graph.facebook.com/{{ fbapp.appid }}/picture?redirect=1&height=32&width=32&type=small' width='32' height='32' style='vertical-align:middle;'  onerror="this.src = '{{ assets('theme/default/images/facebookApp.png') }}'"/>*/
/* 										{{ fbapp.app_name }}*/
/* 									</td>*/
/* 									<td>*/
/* 										{% if userApp.row() %}*/
/* 											{% if userApp.row('expires_in') == "never" or userApp.row('expires_in') starts with '-' %}*/
/* 												{{ l('Never') }}*/
/* 											{% else %}*/
/* 												{% if userApp.row('expires_in') matches '/[0-9]+/' %}*/
/* 												  {{ userApp.row('access_token_date')|date_modify("+" ~ userApp.row('expires_in')|abs ~ " seconds")|date(date_format ~ " H:i") }}*/
/* 												{% else %}*/
/* 												  -*/
/* 												{% endif %}*/
/* 											{% endif %}*/
/* 										{% else %}*/
/* 											-*/
/* 										{% endif %}*/
/* 									</td>*/
/* 									<td>*/
/* 									{% if fbapp.user_id == user.currentUser()['user_id'] %}*/
/* 										<button type="button" value='{{ fbapp.id }}' title='{{ l('DELETE') }}' class='btn btn-danger deleteFbAppBtn'>*/
/* 											<span class='glyphicon glyphicon-trash'></span> */
/* 											<span class="hidden-xs">{{ l('DELETE') }}</span>*/
/* 										</button>*/
/* 									{% endif %}*/
/* */
/* 									{% if userApp.row() %}*/
/* 										<a href='{{ base_url('settings/fbapps/deauthenticate/' ~ fbapp.id) }}' title='{{ l('DEAUTHENTICATE') }}' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> */
/* 											<span class="hidden-xs">{{ l('DEAUTHENTICATE') }}</span></a>*/
/* 									{% else %}*/
/* */
/* 										{% if appType == 3 or appType == 2%}*/
/* 											<button type="button" onclick="window.open('{{ base_url('Facebook/app_authentication/third_party/?app_id=' ~ fbapp.id) }}','','height=400,width=600'); return false;" class='btn btn-primary'>*/
/* 												<i class="fa fa-cog" aria-hidden="true"></i>*/
/* 												<span class="hidden-xs">{{ l('AUTHENTICATE') }}</span></button>*/
/* 										{% endif %}*/
/* */
/* 										{% if appType == 1 %}*/
/* 											<button type="button" onclick="window.open('{{ base_url('Facebook/app_authentication/own_app/?app_id=' ~ fbapp.id) }}','','height=450,width=600'); return false;" class='btn btn-primary'>*/
/* 												<i class="fa fa-cog" aria-hidden="true"></i>*/
/* 												<span class="hidden-xs">{{ l('AUTHENTICATE') }}</span></button>*/
/* 										{% endif %}*/
/* */
/* 									{% endif %}*/
/* 								</td>*/
/* 							</tr>*/
/* 							{% else %}*/
/* 								<tr>*/
/* 									<td colspan="2">{{ l('No apps Available ') }}</td>*/
/* 								</tr>*/
/* 							{% endfor %}*/
/* 							*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "fbapp" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the app?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/* */
/* 	<script>*/
/* 		function FbAuth(app_id){*/
/* 			window.open('{{ base_url("Facebook/app_authentication") }}?app_id='+app_id,'','height=500,width=600');*/
/* 		}*/
/* */
/* 		$( document ).ready(function() {*/
/* 			$("#addFbApp").click(function(){*/
/* 				// app_id and app_serect validation*/
/* 				$('.manageAppErrors').html('');*/
/* */
/* 				if($("#fbapp_id").val() == ""){	*/
/* 					alertBox("{{ l('APP_ID_CAN_NOT_EMPTY') }}",'danger',".manageAppErrors");*/
/* 				} else {*/
/* 					kp_preloader("on");*/
/* 					$.ajax({*/
/* 				      url: '{{ base_url("settings/fbapps/add_fbapp") }}',*/
/* 				      dataType: 'json',*/
/* 				      type: 'post',*/
/* 				      contentType: 'application/x-www-form-urlencoded',*/
/* 				      data: { */
/* 				      	app_id:$("#fbapp_id").val(),*/
/* 				      	app_secret:$("#fbapp_secret").val(),*/
/* 				      	fbapp_auth_Link:$("#fbapp_auth_Link").val(),*/
/* */
/* 				      	{# Send is_public field if the current user is admin #}*/
/* 				      	{% if user.hasPermission('admin') == true %}*/
/* 				      		is_public: $('#is_public').is(":checked") ? 1 : 0,*/
/* 				      	{% endif %}*/
/* */
/* 				      	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				      },*/
/* 				      success: function( data, textStatus, jQxhr ){*/
/* 				        if(data.status == "success"){*/
/* 				        	location.reload();*/
/* 				        }else{*/
/* 							if(data.message !== null && typeof data.message === 'object'){*/
/* 								htmlData = "<ul>";*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += "<li>" + data.message[key] + "</li>";*/
/* 								});*/
/* 								htmlData += "</ul>";*/
/* 							}else{*/
/* 								htmlData = data.message;*/
/* 			                }*/
/* 				        	alertBox(htmlData,'danger',".manageAppErrors");*/
/* 				        }*/
/* 				      },*/
/* 				      error: function( jqXhr, textStatus, errorThrown ){ */
/* 				      	console.log(errorThrown);*/
/* 				      	alertBox("{{ l('Unable to complete your request') }}","danger",".manageAppErrors",false,false);*/
/* 				      },*/
/* 				      complete: function () {*/
/* 				      	kp_preloader("off");*/
/* 				      }*/
/* 				    });*/
/* 				}*/
/* 			});*/
/* 		});*/
/* */
/* 		{# Delete action #}*/
/* 	    $(".deleteFbAppBtn").click(function(){*/
/* 			$("#delete_fbapp").modal("show");*/
/* 			deleteFbappBtn = $(this);*/
/* 	    });*/
/* */
/* 	    $(".deleteBtn_fbapp" ).click(function(){*/
/* 	    	*/
/* 		    $.ajax({*/
/* 		      url: '{{ base_url("settings/fbapps/delete_fbapp") }}',*/
/* 		      dataType: 'json',*/
/* 		      type: 'post',*/
/* 		      contentType: 'application/x-www-form-urlencoded',*/
/* 		      data: { */
/* 		      	id: deleteFbappBtn.val(),*/
/* 		      	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 		      },*/
/* 		      success: function( data, textStatus, jQxhr ){*/
/* 		        if(data.status == "success"){*/
/* 		        	alertBox(data.message,"success",".deleteAlertBox_fbapp",false,false);*/
/* 	            	$(".deleteBtn_fbapp").prop('disabled', true);*/
/* 		        	$(document).on('hide.bs.modal','#delete_fbapp', function () {*/
/* 		        		location.reload();*/
/* 		        	});*/
/* 		        }else{*/
/* 		        	alertBox(data.message,"danger",".deleteAlertBox_fbapp",false,false);*/
/* 		        }*/
/* 		      },*/
/* 		      error: function( jqXhr, textStatus, errorThrown ){ */
/* 		      	console.log(errorThrown);*/
/* 		      	alertBox("{{ l('Unable to complete your request') }}","danger",".deleteAlertBox_fbapp",false,false);*/
/* 		      }*/
/* 		    });*/
/* */
/* 		    $('.deleteBox_content_fbapp').html("");*/
/* 	      */
/* 		});*/
/* */
/* */
/* 	</script>*/
/* */
/* {% endblock %}*/
