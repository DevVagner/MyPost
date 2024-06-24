<?php

/* facebook_accounts/home.twig */
class __TwigTemplate_954e48658fbcc004d744cc87efc5de383dd3b617bca0e0b1d41ecf7a50f38fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "facebook_accounts/home.twig", 1);
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
        // line 3
        $context["at_parse"] = true;
        // line 4
        $context["at_source"] = "";
        // line 10
        $context["controlSidebar"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook accounts")), "html", null, true);
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        // line 15
        $this->loadTemplate("facebook_accounts/components/sidebar_options.twig", "facebook_accounts/home.twig", 15)->display($context);
        // line 16
        echo "\t<section class=\"content-header\">
\t\t<h4><i class=\"fab fa-facebook\"></i>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Accounts")), "html", null, true);
        echo "</h4>
\t</section>

<section class=\"content\">
\t<div class=\"row\">";
        // line 23
        $context["listFbAccounts"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method");
        // line 25
        if ( !twig_test_empty((isset($context["listFbAccounts"]) ? $context["listFbAccounts"] : null))) {
            // line 26
            echo "\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
\t\t<div class=\"card\">
\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#addNewFbAccount\"><span class=\"addFbAccountPlaceHolder\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></span></a>
\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#addNewFbAccount\">Add account</a></h4>
\t\t\t\t</div>
\t\t</div>
  </div>";
        } else {
            // line 35
            echo "\t\t<div class=\"no-accounts-available\"
\t\t\t<button data-toggle=\"modal\" data-target=\"#addNewFbAccount\" data-toggle=\"tooltip\" title=\"";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add Facebook account")), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"addFbAccountPlaceHolder noaccounts\">
\t\t\t\t<i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></span>
\t\t\t</button>
\t\t\t<span>";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No Facebook account available")), "html", null, true);
            echo "</span>
\t\t\t</div>";
        }
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["fba"]) {
            // line 45
            echo "\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"box box-widget widget-user-2 smAccountBox\">
        <div class=\"widget-user-header bg-gray-light\" style=\"background-image:url(https://graph.facebook.com/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "/picture?redirect=1&height=150&width=150&type=normal);\">
          <div class=\"widget-user-image\">
            <img class=\"img-circle\" src=\"https://graph.facebook.com/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "/picture?redirect=1&height=150&width=150&type=normal\" onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/user-default.png"), "html", null, true);
            echo "'\" alt=\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "name", array())), "html", null, true);
            echo "\">
\t\t\t</div>";
            // line 52
            if (($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method") == $this->getAttribute($context["fba"], "fb_id", array()))) {
                // line 53
                echo "\t\t\t\t<span class='badge badge-default currentFbAccount'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Default")), "html", null, true);
                echo "</span>";
            }
            // line 55
            echo "\t\t  
\t\t\t<ul class=\"accountOptions\">
\t\t  \t<li>
\t\t\t  <button type='button' value='";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
            echo "' class='btn btn-danger deleteFbAccountBtn'><i class=\"far fa-trash-alt\" aria-hidden=\"true\"></i></button>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<button type='button' value='";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update")), "html", null, true);
            echo "' class='btn btn-primary updateFbAccount'><i class=\"fas fa-sync-alt\" aria-hidden=\"true\"></i></button>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<button type='button' value='";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit account")), "html", null, true);
            echo "' class='btn btn-default editFbAccount'><i class=\"fas fa-pencil-alt\" aria-hidden=\"true\"></i></button>
\t\t\t</li>
\t\t  </ul>
          
          <h3 class=\"widget-user-username\"><strong>";
            // line 68
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "name", array())), "html", null, true);
            echo "</strong></h3>

        </div>
        <div class=\"box-footer no-padding\">
          <ul class=\"nav nav-stacked\">
            <li><a href=\"#\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups")), "html", null, true);
            echo " <span class=\"pull-right font-weight-bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "groups_count", array()), "html", null, true);
            echo "</span></a></li>
            <li><a href=\"#\">";
            // line 74
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
            echo " <span class=\"pull-right font-weight-bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "pages_count", array()), "html", null, true);
            echo "</span></a></li>
            <li><a href=\"#\">";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Managed pages")), "html", null, true);
            echo " <span class=\"pull-right font-weight-bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "managed_pages_count", array()), "html", null, true);
            echo "</span></a></li>
            <li><a href=\"#\">";
            // line 76
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Friends")), "html", null, true);
            echo " <span class=\"pull-right font-weight-bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "friends_count", array()), "html", null, true);
            echo "</span></a></li>
          </ul>
        </div>
      </div>
    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fba'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t</div>
\t</div>
</form>

<!-- New facebook account modal -->";
        // line 87
        $this->loadTemplate("facebook_accounts/components/add_account.twig", "facebook_accounts/home.twig", 87)->display($context);
        // line 88
        echo "<!-- Update facebook account modal -->";
        // line 89
        $this->loadTemplate("facebook_accounts/components/update_account.twig", "facebook_accounts/home.twig", 89)->display($context);
        // line 90
        $this->loadTemplate("settings/components/edit_fb_account.twig", "facebook_accounts/home.twig", 90)->display($context);
        // line 93
        $context["box_id"] = "fb_account";
        // line 94
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected account?"));
        // line 95
        $this->loadTemplate("blocks/delete_modal.twig", "facebook_accounts/home.twig", 95)->display($context);
    }

    // line 99
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 101
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "

\t<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(function(){

\t\t\t\$( \".appToggleBtn\" ).click(function() {
\t\t\t  \$( \".appToggle\" ).toggle();
\t\t\t});

\t\t\t\$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/access_token=(.*)(?=&expires_in)/);
\t\t\t\tif(at){\$(\"#addNewFbAccount #accessToken\").val(at[1]);}
\t\t\t});
\t\t\t
\t\t\t\$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/\"access_token\":\"(.*)(?=\",\"machine_id)/);
\t\t\t\tif(at){\$(\"#addNewFbAccount #accessToken\").val(at[1]);}
\t\t\t});

\t\t\t\$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/access_token=(.*)(?=&expires_in)/);
\t\t\t\tif(at){\$(\"#updateFbAccount #accessToken\").val(at[1]);}
\t\t\t});
\t\t\t
\t\t\t\$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {
\t\t\t\tvar at = \$(this).val().match(/\"access_token\":\"(.*)(?=\",\"machine_id)/);
\t\t\t\tif(at){\$(\"#updateFbAccount #accessToken\").val(at[1]);}
\t\t\t});
\t\t\t
\t\t\t\$( \"#addNewFbAccount #addFbAccountBtn\" ).click(function(){
\t\t\t\taddFbAccount(\"#addNewFbAccount\");
\t\t\t});

\t\t\t\$( \"#updateFbAccount #addFbAccountBtn\" ).click(function(){
\t\t\t\taddFbAccount(\"#updateFbAccount\");
\t\t\t});


\t\t\t\$(\"#updateFbAccount .fb_login\").click(function(){
\t\t\t\tlogin_via_pw(\"#updateFbAccount\",\$( this ).val());
\t\t\t});

\t\t\t\$(\"#addNewFbAccount .fb_login\").click(function(){
\t\t\t\tlogin_via_pw(\"#addNewFbAccount\",\$( this ).val());
\t\t\t});";
        // line 149
        echo "\t\t    \$(\".deleteFbAccountBtn\").click(function(){
\t\t\t\t\$(\"#delete_fb_account\").modal(\"show\");
\t\t\t\tdeleteFbAccountBtn = \$(this);
\t\t    });

\t\t    \$(\".deleteBtn_fb_account\" ).click(function(){
\t\t    \tkp_preloader(\"on\",\"#delete_fb_account .modal-body\");
\t\t\t    \$.ajax({
\t\t\t      url: '";
        // line 157
        echo twig_escape_filter($this->env, base_url("facebook_accounts/home/delete"), "html", null, true);
        echo "',
\t\t\t      dataType: 'json',
\t\t\t      type: 'post',
\t\t\t      contentType: 'application/x-www-form-urlencoded',
\t\t\t      data: { 
\t\t\t      \tid: deleteFbAccountBtn.val(),";
        // line 163
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t      },
\t\t\t      success: function( data, textStatus, jQxhr ){
\t\t\t        if(data.status == \"success\"){
\t\t\t        \talertBox(data.message,\"success\",\".deleteAlertBox_fb_account\",false,false);
\t\t            \t\$(\".deleteBtn_fb_account\").prop('disabled', true);
\t\t\t        \t\$(document).on('hide.bs.modal','#delete_fb_account', function () {
\t\t\t        \t\tlocation.reload();
\t\t\t        \t});
\t\t\t        }else{
\t\t\t        \talertBox(data.message,\"danger\",\".deleteAlertBox_fb_account\",false,false);
\t\t\t        }
\t\t\t      },
\t\t\t      error: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t      \tconsole.log(errorThrown);
\t\t\t      \talertBox(\"";
        // line 178
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_fb_account\",false,false);
\t\t\t      },
\t\t\t      complete: function() {
\t\t\t      \tkp_preloader(\"off\",\"#delete_fb_account .modal-body\");
\t\t\t      }
\t\t\t    });

\t\t\t    \$('.deleteBox_content_fb_account').html(\"\");
\t\t      
    \t\t});

    \t\tvar xhr = null;
\t\t    \$(\".updateFbAccount\").click(function() {
\t\t    \tkp_preloader(\"on\",\"#updateFbAccount .modal-body\");
\t\t    \t//\$(\".updateFbAccountalerts\").html(\"\");
\t\t    \talertBox(\"";
        // line 193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Updating your facebook account")), "html", null, true);
        echo "...\",\"info\",\".updateFbAccountalerts\",false,false);
\t\t    \t\$(\"#updateFbAccount\").modal(\"show\");
\t\t    \t\$('.updatefbAccountSection').hide();
\t\t\t\t\t\$('.importGroups').hide();
\t\t    \t\$(\"#fbAccountId\").val(\$(this).val());
\t\t    \tif(xhr!==null) xhr.abort();
\t\t    \txhr = \$.ajax({
\t\t\t\t\turl: '";
        // line 200
        echo twig_escape_filter($this->env, base_url("facebook_accounts/home/update"), "html", null, true);
        echo "',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\t\tdata: { 
\t\t\t\t\t\tfbaccount_id: \$(\"#fbAccountId\").val(),";
        // line 206
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
 \t\t\t\t\t},
\t\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\t\talertBox(data.message,\"success\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t  \t\$(\".deleteBtn_post\").prop('disabled', true);
\t\t\t\t\t\t\t\$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});
\t\t\t\t\t\t\t\$(\"#updateFbAccount #addFbAccountBtn\").hide();
\t\t\t\t\t\t}else if(data.status == \"warning\"){
\t\t\t\t\t\t\talertBox(data.message,\"warning\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t\t\$('.updatefbAccountSection').show();
\t\t\t\t\t\t\t\$('.importGroups').show();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\thtmlData = \"\";
\t\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t\t});
\t\t                \t}else{
\t\t                \t\thtmlData = data.message;
\t\t                \t}
\t\t\t\t\t\t\talertBox(htmlData,\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t\t\$('.updatefbAccountSection').show();
\t\t\t\t\t\t\t\$('.importGroups').show();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t\t  console.log(errorThrown);
\t\t\t\t\t  alertBox(\"";
        // line 234
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t},
\t\t\t        complete: function() {
\t\t\t          kp_preloader(\"off\",\"#updateFbAccount .modal-body\");
\t\t\t        }
\t\t\t\t});
\t\t    });

\t\t    \$(\".uploadGroupsFile\").on('click',(function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tkp_preloader(\"on\",\"#updateFbAccount .modal-body\");

\t\t\t\thtmlFileFormData = new FormData();

\t\t\t\thtmlFileFormData.set('htmlpage', \$(\"#htmlpage\")[0].files[0]);
\t\t\t\thtmlFileFormData.append('fbaccount_id', \$(\"#fbAccountId\").val());
\t\t\t\thtmlFileFormData.append('";
        // line 250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo "', getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')); 

\t\t\t\t\$.ajax({
\t\t\t\t\turl: \"";
        // line 253
        echo twig_escape_filter($this->env, base_url("facebook_accounts/import_groups"), "html", null, true);
        echo "\",
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\tdata: htmlFileFormData,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tcache: false,
\t\t\t\t\tprocessData:false,
\t\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\t\talertBox(data.message,\"success\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t  \t\$(\".deleteBtn_post\").prop('disabled', true);
\t\t\t\t\t\t\t\$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\thtmlData = \"\";
\t\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t\t});
\t\t                \t}else{
\t\t                \t\thtmlData = data.message;
\t\t                \t}
\t\t\t\t\t\t\talertBox(htmlData,\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t\t  console.log(errorThrown);
\t\t\t\t\t  alertBox(\"";
        // line 278
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".updateFbAccountalerts\",false,false);
\t\t\t\t\t},
\t\t\t        complete: function() {
\t\t\t          kp_preloader(\"off\",\"#updateFbAccount .modal-body\");
\t\t\t        }
\t\t\t\t});
\t\t\t}));

\t\t});

\t\tfunction addFbAccount(model){

\t\t\tif(\$(model+\" #accessToken\").val() == \"\"){
\t\t\t\talertBox(\"";
        // line 291
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Please enter the access token")), "html", null, true);
        echo "\",\"danger\",model+\" .alertBox\",false);
\t\t\t\treturn;
\t\t\t}

\t\t\tvar reload = false;
\t\t\t\$(model+\" .alertBox\").html('');
\t\t\tkp_preloader(\"on\",model+\" .modal-body\");

\t\t\talertBoxElem = \$(model+\" .alertBox\");

\t\t\t\$(model+\" #addFbAccountBtn\").prop('disabled', true);

\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 304
        echo twig_escape_filter($this->env, base_url("facebook_accounts/home/add"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: { 
\t\t\t\t\tfb_accesstoken: \$(model+\" #accessToken\").val(),
\t\t\t\t\tfb_account: \$(model+\" #fbAccountId\").val(),";
        // line 311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\talertBox(data.message,\"success\",alertBoxElem,false,false);
\t\t\t\t\t  \t\$(model+' .updatefbAccountSection').hide();
\t\t\t\t\t\t\$(model+' .importGroups').hide();
\t\t\t\t\t\t\$(document).on('hide.bs.modal',model, function () {location.reload();});
\t\t\t\t\t}else{
\t\t\t\t\t\thtmlData = \"\";
\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t});
\t                \t}else{
\t                \t\thtmlData = data.message;
\t                \t}
\t\t\t\t\t\talertBox(htmlData,\"danger\",alertBoxElem,false,false);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox(\"";
        // line 333
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",alertBoxElem,false,false);
\t\t\t\t},
\t\t        complete: function() {
\t\t          // Re-enable send btn
\t\t          \$(model+\" #addFbAccountBtn\").prop('disabled', false);
\t\t          kp_preloader(\"off\",model+\" .modal-body\");
\t\t        }
\t\t\t});
\t\t}


\t\tfunction login_via_pw(model,app){
\t\t\t\$(model+' .alertBox').html(\"\");
\t\t\t\$(model+\" .fb_login\").prop('disabled', true);
\t\t\tkp_preloader(\"on\",model+\" .modal-body\");
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 349
        echo twig_escape_filter($this->env, base_url("facebook/generate_token"), "html", null, true);
        echo "/'+app,
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tusername: \$(model+' #fb_username').val(), 
\t\t\t\t\tpassword: \$(model+' #fb_password').val(),";
        // line 356
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t  if(data.status == \"ok\"){
\t\t\t\t    \$(model+\" .token_result\").html(\"<iframe width='100%' height='100' src='\"+data.fb_url+\"'></iframe>\");
\t\t\t\t  }else{
\t\t\t\t  \tif(data.message !== null && typeof data.message === 'object'){ 
\t                \thtmlData = \"<ul>\";
\t                    Object.keys(data.message).forEach(function(key) {
\t                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t                      });
\t                    htmlData += \"</ul>\";
\t               \t}else{
\t                    htmlData = data.message;
\t            \t}
\t\t\t\t    alertBox(htmlData,'danger',model+' .alertBox',false,true);
\t\t\t\t  }
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox('";
        // line 376
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Failed to generate Facebook token, try again")), "html", null, true);
        echo "','danger',model+' .alertBox',true);
\t\t\t\t},
\t\t        complete: function() {
\t\t          \$(model+\" .fb_login\").prop('disabled', false);
\t\t          kp_preloader(\"off\",model+\" .modal-body\");
\t\t        }
\t\t\t});
\t\t}

\t</script>";
    }

    public function getTemplateName()
    {
        return "facebook_accounts/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 376,  521 => 356,  512 => 349,  493 => 333,  466 => 311,  457 => 304,  441 => 291,  425 => 278,  397 => 253,  389 => 250,  370 => 234,  337 => 206,  329 => 200,  319 => 193,  301 => 178,  281 => 163,  273 => 157,  263 => 149,  217 => 103,  212 => 101,  209 => 99,  205 => 95,  203 => 94,  201 => 93,  199 => 90,  197 => 89,  195 => 88,  193 => 87,  187 => 82,  174 => 76,  168 => 75,  162 => 74,  156 => 73,  148 => 68,  139 => 64,  131 => 61,  123 => 58,  118 => 55,  113 => 53,  111 => 52,  103 => 49,  98 => 47,  94 => 45,  90 => 44,  85 => 40,  78 => 36,  75 => 35,  65 => 26,  63 => 25,  61 => 23,  54 => 17,  51 => 16,  49 => 15,  47 => 13,  44 => 12,  40 => 7,  37 => 6,  33 => 1,  31 => 10,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% set at_parse = true %}*/
/* {% set at_source = "" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Facebook accounts') }}*/
/* {% endblock %}*/
/* */
/* {% set controlSidebar = true %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* */
/* 	{% include "facebook_accounts/components/sidebar_options.twig" %}*/
/* 	<section class="content-header">*/
/* 		<h4><i class="fab fa-facebook"></i> {{ l('Facebook Accounts') }}</h4>*/
/* 	</section>*/
/* */
/* <section class="content">*/
/* 	<div class="row">*/
/* */
/* 	{% set listFbAccounts = fbaccount.getAll() %}*/
/* 	*/
/* 	{% if listFbAccounts is not empty %}*/
/* 	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/* 		<div class="card">*/
/* 			<a href="#" data-toggle="modal" data-target="#addNewFbAccount"><span class="addFbAccountPlaceHolder"><i class="fa fa-plus-circle" aria-hidden="true"></i></span></a>*/
/* 				<div class="card-block">*/
/* 					<h4 class="card-title"><a href="#" data-toggle="modal" data-target="#addNewFbAccount">Add account</a></h4>*/
/* 				</div>*/
/* 		</div>*/
/*   </div>*/
/* 	{% else %}*/
/* 		<div class="no-accounts-available"*/
/* 			<button data-toggle="modal" data-target="#addNewFbAccount" data-toggle="tooltip" title="{{l("Add Facebook account")}}">*/
/* 				<span class="addFbAccountPlaceHolder noaccounts">*/
/* 				<i class="fa fa-plus-circle" aria-hidden="true"></i></span>*/
/* 			</button>*/
/* 			<span>{{l("No Facebook account available")}}</span>*/
/* 			</div>*/
/* 	{% endif %}*/
/* */
/* 	{% for fba in fbaccount.getAll() %}*/
/* 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*       <div class="box box-widget widget-user-2 smAccountBox">*/
/*         <div class="widget-user-header bg-gray-light" style="background-image:url(https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=150&width=150&type=normal);">*/
/*           <div class="widget-user-image">*/
/*             <img class="img-circle" src="https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=150&width=150&type=normal" onerror="this.src = '{{ assets('theme/default/images/user-default.png') }}'" alt="{{fba.name|capitalize}}">*/
/* 			</div>*/
/* */
/* 			{% if fbaccount.UserDefaultFbAccount() == fba.fb_id %}*/
/* 				<span class='badge badge-default currentFbAccount'>{{l('Default')}}</span>*/
/* 			{% endif %}*/
/* 		  */
/* 			<ul class="accountOptions">*/
/* 		  	<li>*/
/* 			  <button type='button' value='{{ fba.fb_id }}' title='{{ l('Delete') }}' class='btn btn-danger deleteFbAccountBtn'><i class="far fa-trash-alt" aria-hidden="true"></i></button>*/
/* 			</li>*/
/* 			<li>*/
/* 				<button type='button' value='{{ fba.fb_id }}' title='{{ l('Update') }}' class='btn btn-primary updateFbAccount'><i class="fas fa-sync-alt" aria-hidden="true"></i></button>*/
/* 			</li>*/
/* 			<li>*/
/* 				<button type='button' value='{{ fba.fb_id }}' title='{{ l('Edit account') }}' class='btn btn-default editFbAccount'><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>*/
/* 			</li>*/
/* 		  </ul>*/
/*           */
/*           <h3 class="widget-user-username"><strong>{{fba.name|capitalize}}</strong></h3>*/
/* */
/*         </div>*/
/*         <div class="box-footer no-padding">*/
/*           <ul class="nav nav-stacked">*/
/*             <li><a href="#">{{l("Groups")}} <span class="pull-right font-weight-bold">{{fba.groups_count}}</span></a></li>*/
/*             <li><a href="#">{{l("Pages")}} <span class="pull-right font-weight-bold">{{fba.pages_count}}</span></a></li>*/
/*             <li><a href="#">{{l("Managed pages")}} <span class="pull-right font-weight-bold">{{fba.managed_pages_count}}</span></a></li>*/
/*             <li><a href="#">{{l("Friends")}} <span class="pull-right font-weight-bold">{{fba.friends_count}}</span></a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* 	{% endfor %}*/
/* 	</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- New facebook account modal -->*/
/* {% include "facebook_accounts/components/add_account.twig" %}*/
/* <!-- Update facebook account modal -->*/
/* {% include "facebook_accounts/components/update_account.twig" %}*/
/* {% include "settings/components/edit_fb_account.twig" %}*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "fb_account" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected account?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* */
/* 	{{ parent() }}*/
/* */
/* 	<script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/* 	<script>*/
/* 		$(function(){*/
/* */
/* 			$( ".appToggleBtn" ).click(function() {*/
/* 			  $( ".appToggle" ).toggle();*/
/* 			});*/
/* */
/* 			$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/access_token=(.*)(?=&expires_in)/);*/
/* 				if(at){$("#addNewFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* 			*/
/* 			$('#addNewFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/"access_token":"(.*)(?=","machine_id)/);*/
/* 				if(at){$("#addNewFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* */
/* 			$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/access_token=(.*)(?=&expires_in)/);*/
/* 				if(at){$("#updateFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* 			*/
/* 			$('#updateFbAccount #accessTokenURL').bind('input propertychange', function() {*/
/* 				var at = $(this).val().match(/"access_token":"(.*)(?=","machine_id)/);*/
/* 				if(at){$("#updateFbAccount #accessToken").val(at[1]);}*/
/* 			});*/
/* 			*/
/* 			$( "#addNewFbAccount #addFbAccountBtn" ).click(function(){*/
/* 				addFbAccount("#addNewFbAccount");*/
/* 			});*/
/* */
/* 			$( "#updateFbAccount #addFbAccountBtn" ).click(function(){*/
/* 				addFbAccount("#updateFbAccount");*/
/* 			});*/
/* */
/* */
/* 			$("#updateFbAccount .fb_login").click(function(){*/
/* 				login_via_pw("#updateFbAccount",$( this ).val());*/
/* 			});*/
/* */
/* 			$("#addNewFbAccount .fb_login").click(function(){*/
/* 				login_via_pw("#addNewFbAccount",$( this ).val());*/
/* 			});*/
/* */
/* 			{# Delete action #}*/
/* 		    $(".deleteFbAccountBtn").click(function(){*/
/* 				$("#delete_fb_account").modal("show");*/
/* 				deleteFbAccountBtn = $(this);*/
/* 		    });*/
/* */
/* 		    $(".deleteBtn_fb_account" ).click(function(){*/
/* 		    	kp_preloader("on","#delete_fb_account .modal-body");*/
/* 			    $.ajax({*/
/* 			      url: '{{ base_url("facebook_accounts/home/delete") }}',*/
/* 			      dataType: 'json',*/
/* 			      type: 'post',*/
/* 			      contentType: 'application/x-www-form-urlencoded',*/
/* 			      data: { */
/* 			      	id: deleteFbAccountBtn.val(),*/
/* 			      	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 			      },*/
/* 			      success: function( data, textStatus, jQxhr ){*/
/* 			        if(data.status == "success"){*/
/* 			        	alertBox(data.message,"success",".deleteAlertBox_fb_account",false,false);*/
/* 		            	$(".deleteBtn_fb_account").prop('disabled', true);*/
/* 			        	$(document).on('hide.bs.modal','#delete_fb_account', function () {*/
/* 			        		location.reload();*/
/* 			        	});*/
/* 			        }else{*/
/* 			        	alertBox(data.message,"danger",".deleteAlertBox_fb_account",false,false);*/
/* 			        }*/
/* 			      },*/
/* 			      error: function( jqXhr, textStatus, errorThrown ){ */
/* 			      	console.log(errorThrown);*/
/* 			      	alertBox("{{ l('Unable to complete your request') }}","danger",".deleteAlertBox_fb_account",false,false);*/
/* 			      },*/
/* 			      complete: function() {*/
/* 			      	kp_preloader("off","#delete_fb_account .modal-body");*/
/* 			      }*/
/* 			    });*/
/* */
/* 			    $('.deleteBox_content_fb_account').html("");*/
/* 		      */
/*     		});*/
/* */
/*     		var xhr = null;*/
/* 		    $(".updateFbAccount").click(function() {*/
/* 		    	kp_preloader("on","#updateFbAccount .modal-body");*/
/* 		    	//$(".updateFbAccountalerts").html("");*/
/* 		    	alertBox("{{ l('Updating your facebook account') }}...","info",".updateFbAccountalerts",false,false);*/
/* 		    	$("#updateFbAccount").modal("show");*/
/* 		    	$('.updatefbAccountSection').hide();*/
/* 					$('.importGroups').hide();*/
/* 		    	$("#fbAccountId").val($(this).val());*/
/* 		    	if(xhr!==null) xhr.abort();*/
/* 		    	xhr = $.ajax({*/
/* 					url: '{{ base_url("facebook_accounts/home/update") }}',*/
/* 					dataType: 'json',*/
/* 					type: 'post',*/
/* 					contentType: 'application/x-www-form-urlencoded',*/
/* 					data: { */
/* 						fbaccount_id: $("#fbAccountId").val(),*/
/*  						{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*  					},*/
/* 					success: function( data, textStatus, jQxhr ){*/
/* 						if(data.status == "success"){*/
/* 							alertBox(data.message,"success",".updateFbAccountalerts",false,false);*/
/* 						  	$(".deleteBtn_post").prop('disabled', true);*/
/* 							$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});*/
/* 							$("#updateFbAccount #addFbAccountBtn").hide();*/
/* 						}else if(data.status == "warning"){*/
/* 							alertBox(data.message,"warning",".updateFbAccountalerts",false,false);*/
/* 							$('.updatefbAccountSection').show();*/
/* 							$('.importGroups').show();*/
/* 						}else{*/
/* 							htmlData = "";*/
/* 		                	if(data.message !== null && typeof data.message === 'object'){*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += data.message[key]+" ";*/
/* 								});*/
/* 		                	}else{*/
/* 		                		htmlData = data.message;*/
/* 		                	}*/
/* 							alertBox(htmlData,"danger",".updateFbAccountalerts",false,false);*/
/* 							$('.updatefbAccountSection').show();*/
/* 							$('.importGroups').show();*/
/* 						}*/
/* 					},*/
/* 					error: function( jqXhr, textStatus, errorThrown ){ */
/* 					  console.log(errorThrown);*/
/* 					  alertBox("{{ l('Unable to complete your request') }}","danger",".updateFbAccountalerts",false,false);*/
/* 					},*/
/* 			        complete: function() {*/
/* 			          kp_preloader("off","#updateFbAccount .modal-body");*/
/* 			        }*/
/* 				});*/
/* 		    });*/
/* */
/* 		    $(".uploadGroupsFile").on('click',(function(e) {*/
/* 				e.preventDefault();*/
/* 				kp_preloader("on","#updateFbAccount .modal-body");*/
/* */
/* 				htmlFileFormData = new FormData();*/
/* */
/* 				htmlFileFormData.set('htmlpage', $("#htmlpage")[0].files[0]);*/
/* 				htmlFileFormData.append('fbaccount_id', $("#fbAccountId").val());*/
/* 				htmlFileFormData.append('{{ config_item('csrf_token_name') }}', getCookie('{{ config_item('csrf_cookie_name') }}')); */
/* */
/* 				$.ajax({*/
/* 					url: "{{ base_url('facebook_accounts/import_groups') }}",*/
/* 					type: "POST",*/
/* 					data: htmlFileFormData,*/
/* 					contentType: false,*/
/* 					cache: false,*/
/* 					processData:false,*/
/* 					success: function( data, textStatus, jQxhr ){*/
/* 						if(data.status == "success"){*/
/* 							alertBox(data.message,"success",".updateFbAccountalerts",false,false);*/
/* 						  	$(".deleteBtn_post").prop('disabled', true);*/
/* 							$(document).on('hide.bs.modal','#updateFbAccount', function () {location.reload();});*/
/* 						}else{*/
/* 							htmlData = "";*/
/* 		                	if(data.message !== null && typeof data.message === 'object'){*/
/* 								Object.keys(data.message).forEach(function(key) {*/
/* 								    htmlData += data.message[key]+" ";*/
/* 								});*/
/* 		                	}else{*/
/* 		                		htmlData = data.message;*/
/* 		                	}*/
/* 							alertBox(htmlData,"danger",".updateFbAccountalerts",false,false);*/
/* 						}*/
/* 					},*/
/* 					error: function( jqXhr, textStatus, errorThrown ){ */
/* 					  console.log(errorThrown);*/
/* 					  alertBox("{{ l('Unable to complete your request') }}","danger",".updateFbAccountalerts",false,false);*/
/* 					},*/
/* 			        complete: function() {*/
/* 			          kp_preloader("off","#updateFbAccount .modal-body");*/
/* 			        }*/
/* 				});*/
/* 			}));*/
/* */
/* 		});*/
/* */
/* 		function addFbAccount(model){*/
/* */
/* 			if($(model+" #accessToken").val() == ""){*/
/* 				alertBox("{{ l('Please enter the access token') }}","danger",model+" .alertBox",false);*/
/* 				return;*/
/* 			}*/
/* */
/* 			var reload = false;*/
/* 			$(model+" .alertBox").html('');*/
/* 			kp_preloader("on",model+" .modal-body");*/
/* */
/* 			alertBoxElem = $(model+" .alertBox");*/
/* */
/* 			$(model+" #addFbAccountBtn").prop('disabled', true);*/
/* */
/* 			$.ajax({*/
/* 				url: '{{ base_url("facebook_accounts/home/add") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: { */
/* 					fb_accesstoken: $(model+" #accessToken").val(),*/
/* 					fb_account: $(model+" #fbAccountId").val(),*/
/* 						{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 					},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "success"){*/
/* 						alertBox(data.message,"success",alertBoxElem,false,false);*/
/* 					  	$(model+' .updatefbAccountSection').hide();*/
/* 						$(model+' .importGroups').hide();*/
/* 						$(document).on('hide.bs.modal',model, function () {location.reload();});*/
/* 					}else{*/
/* 						htmlData = "";*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){*/
/* 							Object.keys(data.message).forEach(function(key) {*/
/* 							    htmlData += data.message[key]+" ";*/
/* 							});*/
/* 	                	}else{*/
/* 	                		htmlData = data.message;*/
/* 	                	}*/
/* 						alertBox(htmlData,"danger",alertBoxElem,false,false);*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox("{{ l('Unable to complete your request') }}","danger",alertBoxElem,false,false);*/
/* 				},*/
/* 		        complete: function() {*/
/* 		          // Re-enable send btn*/
/* 		          $(model+" #addFbAccountBtn").prop('disabled', false);*/
/* 		          kp_preloader("off",model+" .modal-body");*/
/* 		        }*/
/* 			});*/
/* 		}*/
/* */
/* */
/* 		function login_via_pw(model,app){*/
/* 			$(model+' .alertBox').html("");*/
/* 			$(model+" .fb_login").prop('disabled', true);*/
/* 			kp_preloader("on",model+" .modal-body");*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("facebook/generate_token") }}/'+app,*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					username: $(model+' #fb_username').val(), */
/* 					password: $(model+' #fb_password').val(),*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 				  if(data.status == "ok"){*/
/* 				    $(model+" .token_result").html("<iframe width='100%' height='100' src='"+data.fb_url+"'></iframe>");*/
/* 				  }else{*/
/* 				  	if(data.message !== null && typeof data.message === 'object'){ */
/* 	                	htmlData = "<ul>";*/
/* 	                    Object.keys(data.message).forEach(function(key) {*/
/* 	                      htmlData += "<li>" + data.message[key] + "</li>";*/
/* 	                      });*/
/* 	                    htmlData += "</ul>";*/
/* 	               	}else{*/
/* 	                    htmlData = data.message;*/
/* 	            	}*/
/* 				    alertBox(htmlData,'danger',model+' .alertBox',false,true);*/
/* 				  }*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox('{{ l("Failed to generate Facebook token, try again") }}','danger',model+' .alertBox',true);*/
/* 				},*/
/* 		        complete: function() {*/
/* 		          $(model+" .fb_login").prop('disabled', false);*/
/* 		          kp_preloader("off",model+" .modal-body");*/
/* 		        }*/
/* 			});*/
/* 		}*/
/* */
/* 	</script>*/
/* {% endblock %}*/
