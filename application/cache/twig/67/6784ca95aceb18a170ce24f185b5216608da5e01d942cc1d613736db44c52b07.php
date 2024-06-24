<?php

/* users_manager/index.twig */
class __TwigTemplate_543c28b5a1cd5b089d2d795a80beee0c76f475e2489a5d7f02277301e1e7b455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "users_manager/index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, assets("theme/default/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"fa fa-users\" aria-hidden=\"true\"></i>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
        echo "
      <span class=\"TotalRecords\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s of %s ", twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null)), (isset($context["total_posts"]) ? $context["total_posts"] : null))), "html", null, true);
        echo "</span>
    </h3>
  </div>
  <div class=\"panel-body has-responsive-table\" id=\"usersSection\">
  <form action=\"\" method=\"POST\">

    <div class=\"row\">
      <div class=\"col-lg-5\">
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addNewUser\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD_NEW_USER")), "html", null, true);
        echo "</button>
        <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exportEmails\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export users E-emails")), "html", null, true);
        echo "</a>
        <button type=\"button\" class=\"btn btn-danger\" id=\"deleteUserBtn\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
        echo "</button>
        
      </div>
      <div class=\"col-lg-5\">
        <div class=\"seachBarContainer\">
          <div class=\"seachBar\">
            <input type='text' placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search by username or email")), "html", null, true);
        echo "\" id='SearchUser' name=\"SearchUser\" class=\"form-control\" />
            <div class=\"autocomplete-suggestions\"></div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-2\">
        <div class=\"float-right\">
          <select class=\"form-control\" id=\"usergroup\">
              <option value=\"\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All")), "html", null, true);
        echo "</option>
              <option value=\"expired\"";
        // line 43
        if (((isset($context["currentUG"]) ? $context["currentUG"] : null) == "expired")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expired")), "html", null, true);
        echo "</option>";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 45
            echo "                 <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\"";
            if (((isset($context["currentUG"]) ? $context["currentUG"] : null) == $this->getAttribute($context["role"], "id", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["role"], "name", array())))), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
      </div>
    </div>
    <table class=\"table table-bordered table-striped usersList\"  width=\"100%\">
      <thead>
        <tr>
          <td width='20px'>
          <input type='checkbox' name='check-all' id=\"checkbox-all\" class='check-all checkbox-style'  value='Check All'>
          <label for=\"checkbox-all\"></label>
          <td>";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("USERNAME")), "html", null, true);
        echo "</td>
          <td class=\"hidden-sm hidden-xs\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "</td>
          <td class=\"hidden-xs\">";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Joined on")), "html", null, true);
        echo "</td>
          <td class=\"hidden-sm hidden-xs\">";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last Login")), "html", null, true);
        echo "</td>
          <td class=\"hidden-xs\">";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ROLE")), "html", null, true);
        echo "</td>
          <td></td>
          <td></td>
        </tr>
      </thead>
      <tbody>";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 68
            echo "          <tr>
            <td>";
            // line 70
            if (($this->getAttribute($context["u"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "data", array()), "id", array()))) {
                // line 71
                echo "              <input type='checkbox' name='checkbox[]' id='checkbox-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "' class='checkbox  checkbox-style' value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "'>
              <label for='checkbox-";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "'></label>";
            }
            // line 74
            echo "            </td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
            <td class=\"hidden-sm hidden-xs\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
            <td class=\"hidden-xs\">";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "signup", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "</td>

            

            <td  class=\"hidden-sm hidden-xs\">";
            // line 82
            if ($this->getAttribute($context["u"], "last_login", array())) {
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "last_login", array()), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            } else {
                // line 85
                echo "                -";
            }
            // line 87
            echo "            </td>

            <td class=\"hidden-xs\">";
            // line 89
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["u"], "role_name", array())))), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            if (($this->getAttribute($context["u"], "active", array()) == 1)) {
                // line 92
                $context["active_btn"] = "primary";
            } else {
                // line 94
                $context["active_btn"] = "default";
            }
            // line 96
            echo "              <button type=\"button\" class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["active_btn"]) ? $context["active_btn"] : null), "html", null, true);
            echo " userToggleAccountBtn\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw fa-toggle-on\" aria-hidden=\"true\"></i>
              </button>";
            // line 99
            if (($this->getAttribute($context["u"], "expired", array()) == 1)) {
                echo "<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expired")), "html", null, true);
                echo "</span>";
            }
            // line 100
            echo "            </td>
            <td>
              <button class='btn btn-primary editUserBtn' value='";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "'>
                <i class=\"fas fa-pencil-alt\" aria-hidden=\"true\"></i>
              </button>
              <a href='";
            // line 105
            echo twig_escape_filter($this->env, base_url(("users_manager/profile/" . $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "' class='btn btn-primary'>
                <i class=\"fa fa-list-alt fa-fw\"></i> 
              </a>
            </td>
          </tr>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "            <tr>
              <td colspan=\"8\">";
            // line 112
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No records found!")), "html", null, true);
            echo "</td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "      </tbody>
    </table>";
        // line 117
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 118
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
        }
        // line 120
        echo "    </form>
  </div>
</div>";
        // line 124
        $this->loadTemplate("users_manager/add_user.twig", "users_manager/index.twig", 124)->display($context);
        // line 125
        $this->loadTemplate("users_manager/edit_user.twig", "users_manager/index.twig", 125)->display($context);
        // line 126
        $this->loadTemplate("users_manager/export_emails.twig", "users_manager/index.twig", 126)->display($context);
        // line 129
        $context["box_id"] = "user";
        // line 130
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected accounts?"));
        // line 131
        $this->loadTemplate("blocks/delete_modal.twig", "users_manager/index.twig", 131)->display($context);
    }

    // line 135
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 136
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
    
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>";
        // line 140
        if (( !twig_test_empty(call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) && (call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N")) != "en"))) {
            // line 141
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, assets((("theme/default/js/libs/moment/locale/" . call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 143
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    
    <script>

    \$(\"#usergroup\").change(function(){
      location.href = \"";
        // line 148
        echo twig_escape_filter($this->env, base_url("users_manager?group="), "html", null, true);
        echo "\"+\$(this).val();
    });

    \$(function () {
      \$('.expire_on').datetimepicker({format: '";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo "'});
    });";
        // line 156
        echo "      \$( \"#newUserBtn\" ).click(function(){
        
        \$(\".addNewUserAlertBox\").html(\"\");
        
        kp_preloader(\"on\",\"#addNewUser .modal-body\");

        \$(\"#addNewUser #newUserBtn\").prop('disabled', true);

        \$.ajax({
          url: '";
        // line 165
        echo twig_escape_filter($this->env, base_url("users_manager/add"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            username: \$('#username','#addNewUser').val(),
            email: \$('#email','#addNewUser').val(),
            password: \$('#password','#addNewUser').val(),
            re_password: \$('#re_password','#addNewUser').val(),
            role: \$('#role','#addNewUser').val(),
            expire_on: \$('#expire_on','#addNewUser').val(),";
        // line 176
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
          },
          success: function( data, textStatus, jQxhr ){
            
              if(data.status == \"success\"){
                
                if(data.message !== null && typeof data.message === 'object'){
                  htmlData = \"<ul>\";
                  Object.keys(data.message).forEach(function(key) {
                      htmlData += \"<li>\" + data.message[key] + \"</li>\";
                  });
                  htmlData += \"</ul>\";
                }else{
                  htmlData = data.message;
                }

                alertBox(htmlData,\"success\",\".addNewUserAlertBox\",false,true);
                \$(document).on('hide.bs.modal','#addNewUser', function () {location.reload();});

                // Clear the form 
                \$('#userid', \"#addNewUser\").val(\"\");
                \$('#username', \"#addNewUser\").val(\"\");
                \$('#password', \"#addNewUser\").val(\"\");
                \$('#re_password', \"#addNewUser\").val(\"\");
                \$('#email', \"#addNewUser\").val(\"\");
                \$('#expire_on', \"#addNewUser\").val(\"\");

              }else{
                
                if(data.message !== null && typeof data.message === 'object'){
                  htmlData = \"<ul>\";
                  Object.keys(data.message).forEach(function(key) {
                    htmlData += \"<li>\" + data.message[key] + \"</li>\";
                  });
                  htmlData += \"</ul>\";
                }else{
                  htmlData = data.message;
                }
          
                alertBox(htmlData,\"danger\",\".addNewUserAlertBox\",false,true);
              }
          },
          error: function( jqXhr, textStatus, errorThrown ){ 
            console.log(errorThrown);
          },
          complete: function () {
            \$(\"#addNewUser #newUserBtn\").prop('disabled', false);
            kp_preloader(\"off\",\"#addNewUser .modal-body\");
          }
        });
      });";
        // line 231
        echo "      \$( \"#editUserAccountModalBtn\" ).click(function(){
        \$(\".editUserAlertBox\").html(\"\");
        
          var editUserModel = \$('#editUser');
          kp_preloader(\"on\",\"#editUser .modal-body\");
      
          \$.ajax({
            url: '";
        // line 238
        echo twig_escape_filter($this->env, base_url("users_manager/update"), "html", null, true);
        echo "',
            dataType: 'json',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: {
              userid: \$('#userid', editUserModel).val(),
              email: \$('#email', editUserModel).val(),
              password: \$('#password', editUserModel).val(),
              re_password: \$('#re_password', editUserModel).val(),
              role: \$('#role', editUserModel).val(),
              is_admin: \$('#is_admin', editUserModel).val(),
              expire_on: \$('#expire_on', editUserModel).val(),";
        // line 250
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
                  alertBox(htmlData,\"success\",\".editUserAlertBox\",false,true);
                  \$(document).on('hide.bs.modal','#editUser', function () {location.reload();});
                 
                 }else if(data.status == \"notice\"){
                    alertBox(data.message,\"warning\",\".editUserAlertBox\",false,true);
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
                  alertBox(htmlData,\"danger\",\".editUserAlertBox\",false,true);
                }
        
              
            },
            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
            complete: function() {
              kp_preloader(\"off\",\"#editUser .modal-body\");
            }
        });
      });

      \$( \".editUserBtn\" ).click(function(){
        var editUserModel = \$('#editUser');

        // initial the modal
        // Clear message box
        \$(\".editUserAlertBox\").html(\"\");
        
        // Clear the form 
        \$('#userid', editUserModel).val(\"\");
        \$('#username', editUserModel).val(\"\");
        \$('#password', editUserModel).val(\"\");
        \$('#re_password', editUserModel).val(\"\");
        \$('#email', editUserModel).val(\"\");
        \$('#expire_on', editUserModel).val(\"\");
    
        userId = \$(this).val();

        \$('#userid', editUserModel).val(userId);

        kp_preloader(\"on\",\"#editUser .modal-body\");

        \$.ajax({
          url: '";
        // line 315
        echo twig_escape_filter($this->env, base_url("users_manager/user_details"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            userid: userId,";
        // line 321
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
          },
          success: function( data, textStatus, jQxhr ){
              if(data.status == \"success\"){
                \$('#username', editUserModel).val(data.user.username);
                \$('#email', editUserModel).val(data.user.email);
                \$('#role', editUserModel).val(data.user.role_id);
                \$('#expire_on', editUserModel).val(moment(data.user.expire_on).format('";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo "'));
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
                alertBox(htmlData,\"danger\",\".editUserAlertBox\",false,true);
              }
          },
          error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
          complete: function(){
            kp_preloader(\"off\",\"#editUser .modal-body\");
          }
        });

        // and finally show the modal
        editUserModel.modal(\"show\");
        return false;
      });

    \$( \".userToggleAccountBtn\" ).click(function(){
      var userid = \$( this );
        \$.ajax({
          url: '";
        // line 356
        echo twig_escape_filter($this->env, base_url("users_manager/toggle_account_status"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            userid: userid.val(),";
        // line 362
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
          },
          success: function( data, textStatus, jQxhr ){
              if(data.status == \"success\"){
                userid.toggleClass( \"btn-primary\" );
                userid.toggleClass( \"btn-default\" );
                userid.find(\"i\").addClass(\"fa-toggle-on\");
                userid.find(\"i\").removeClass(\"fa-exclamation\");
              }else{
                userid.find(\"i\").addClass(\"fa-exclamation\");
                userid.find(\"i\").removeClass(\"fa-toggle-on\");
              }
          },
          error: function( jqXhr, textStatus, errorThrown ){ 
              userid.find(\"i\").addClass(\"fa-exclamation\");
              userid.find(\"i\").removeClass(\"fa-toggle-on\");
              console.log(errorThrown); 
          }
        });
    });

    
    // Instant search";
        // line 386
        echo "    \$(\"body\").mouseup(function (e){
        e.preventDefault();
        var container = new Array();
        container.push(\$('.autocomplete-suggestions'));
        \$.each(container, function(key, value) {
            if (!\$(value).is(e.target) && \$(value).has(e.target).length === 0){
                \$(value).html(\"\");
            }
        });
    });

    var xhr = null;
    \$( \"#SearchUser\" ).on('input',function(){
      if(xhr!==null) xhr.abort();
      \$(\".autocomplete-suggestions\").html(\"\");
      \$(\".autocomplete-suggestion\").css(\"display\",\"block\");
      \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Searching...")), "html", null, true);
        echo "</div>\");
      kp_preloader(\"on\");
      xhr = \$.ajax({
        url: '";
        // line 405
        echo twig_escape_filter($this->env, base_url("users_manager/search"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: {
          term: \$(this).val(),";
        // line 411
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
        },
        success: function( res, textStatus, jQxhr ){
          \$(\".autocomplete-suggestions\").html(\"\");
          if(res.data !== null && typeof res.data === 'object'){
              nRes = res.data.length > 5 ? 5 : res.data.length;
              for (i = 0; i < nRes; i++) {
                htmlData = \"<div class='autocomplete-suggestion'>\";
                htmlData += \"<a href='";
        // line 419
        echo twig_escape_filter($this->env, base_url("users_manager/profile/"), "html", null, true);
        echo "\"+res.data[i].id+\"'><span class='searchU'>\"+res.data[i].username+\"</span><span class='searchEmail'>\"+res.data[i].email+\"</span></a>\";
                htmlData += \"</div>\";
                 \$(\".autocomplete-suggestions\").append(htmlData);
              }

              if(res.data.length > 5){
                \$(\".autocomplete-suggestions\").append(\"<div class='seeAllResults'><a href='";
        // line 425
        echo twig_escape_filter($this->env, base_url("users_manager/?searchTerm="), "html", null, true);
        echo "\"+\$(\"#SearchUser\").val()+\"'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("See all results")), "html", null, true);
        echo "</a></div>\");
              }

              if(res.data.length == 0){
                \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 429
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No result found")), "html", null, true);
        echo "</div>\");
              }

            }else{
              \$(\".autocomplete-suggestions\").append(\"<div class='autocomplete-suggestion'>";
        // line 433
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No result found")), "html", null, true);
        echo "</div>\");
            }
        },
        error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
        complete: function(){
          kp_preloader(\"off\");
        }
      });
    });";
        // line 444
        echo "    \$(\"#deleteUserBtn\").click(function(){
      if(\$('.usersList .checkbox:checked').length > 0){
        \$(\"#delete_user\").modal(\"show\");
      }
    });

    \$(\".deleteBtn_user\" ).click(function(){
      
      kp_preloader(\"on\",\"#delete_user .modal-body\");

      var users = [];
      \$('.usersList .checkbox:checked').each(function(){
        users.push(\$(this).val());
      });

      \$.ajax({
        url: '";
        // line 460
        echo twig_escape_filter($this->env, base_url("users_manager/delete"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: { 
          ids: JSON.stringify(users),";
        // line 466
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"success\"){
            alertBox(data.message,\"success\",\".deleteAlertBox_user\",false,false);
              \$(\".deleteBtn_user\").prop('disabled', true);
            \$(document).on('hide.bs.modal','#delete_user', function () {location.reload();});
          }else{
            alertBox(data.message,\"danger\",\".deleteAlertBox_user\",false,false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 479
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "s", array(0 => "Unable to complete your request"), "method"), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_user\",false,false);
        },
        complete: function(){
          kp_preloader(\"off\",\"#delete_user .modal-body\");
        }
      });

      \$('.deleteBox_content_user').html(\"\");
      
    });

    </script>";
    }

    public function getTemplateName()
    {
        return "users_manager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 479,  709 => 466,  701 => 460,  683 => 444,  672 => 433,  665 => 429,  656 => 425,  647 => 419,  634 => 411,  626 => 405,  620 => 402,  602 => 386,  575 => 362,  567 => 356,  536 => 328,  524 => 321,  516 => 315,  446 => 250,  432 => 238,  423 => 231,  368 => 176,  355 => 165,  344 => 156,  340 => 152,  333 => 148,  324 => 143,  319 => 141,  317 => 140,  314 => 139,  310 => 138,  305 => 136,  302 => 135,  298 => 131,  296 => 130,  294 => 129,  292 => 126,  290 => 125,  288 => 124,  284 => 120,  281 => 118,  279 => 117,  276 => 115,  268 => 112,  265 => 111,  255 => 105,  249 => 102,  245 => 100,  239 => 99,  231 => 96,  228 => 94,  225 => 92,  223 => 91,  219 => 89,  215 => 87,  212 => 85,  209 => 83,  207 => 82,  200 => 77,  196 => 76,  192 => 75,  189 => 74,  185 => 72,  178 => 71,  176 => 70,  173 => 68,  168 => 67,  160 => 61,  156 => 60,  152 => 59,  148 => 58,  144 => 57,  132 => 47,  118 => 45,  114 => 44,  107 => 43,  103 => 42,  92 => 34,  83 => 28,  79 => 27,  75 => 26,  64 => 18,  60 => 17,  53 => 13,  50 => 12,  45 => 9,  41 => 8,  38 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Users") }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link href="{{ assets('theme/default/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">*/
/*       <i class="fa fa-users" aria-hidden="true"></i> {{ l('Users') }}*/
/*       <span class="TotalRecords">{{ l('Showing %s of %s ',users|length,total_posts) }}</span>*/
/*     </h3>*/
/*   </div>*/
/*   <div class="panel-body has-responsive-table" id="usersSection">*/
/*   <form action="" method="POST">*/
/* */
/*     <div class="row">*/
/*       <div class="col-lg-5">*/
/*         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewUser">{{ l('ADD_NEW_USER') }}</button>*/
/*         <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exportEmails">{{ l('Export users E-emails') }}</a>*/
/*         <button type="button" class="btn btn-danger" id="deleteUserBtn">{{ l('Delete') }}</button>*/
/*         */
/*       </div>*/
/*       <div class="col-lg-5">*/
/*         <div class="seachBarContainer">*/
/*           <div class="seachBar">*/
/*             <input type='text' placeholder="{{ l('Search by username or email') }}" id='SearchUser' name="SearchUser" class="form-control" />*/
/*             <div class="autocomplete-suggestions"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-lg-2">*/
/*         <div class="float-right">*/
/*           <select class="form-control" id="usergroup">*/
/*               <option value="">{{l("All")}}</option>*/
/*               <option value="expired" {% if currentUG == 'expired' %}selected{% endif %}>{{l("Expired")}}</option>*/
/*               {% for role in roles %}*/
/*                  <option value="{{ role.id }}" {% if currentUG == role.id %}selected{% endif %}>{{ l(role.name)|capitalize }}</option>*/
/*               {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <table class="table table-bordered table-striped usersList"  width="100%">*/
/*       <thead>*/
/*         <tr>*/
/*           <td width='20px'>*/
/*           <input type='checkbox' name='check-all' id="checkbox-all" class='check-all checkbox-style'  value='Check All'>*/
/*           <label for="checkbox-all"></label>*/
/*           <td>{{ l('USERNAME') }}</td>*/
/*           <td class="hidden-sm hidden-xs">{{ l('EMAIL') }}</td>*/
/*           <td class="hidden-xs">{{ l('Joined on') }}</td>*/
/*           <td class="hidden-sm hidden-xs">{{ l('Last Login') }}</td>*/
/*           <td class="hidden-xs">{{ l('ROLE') }}</td>*/
/*           <td></td>*/
/*           <td></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for u in users %}*/
/*           <tr>*/
/*             <td>*/
/*             {% if u.id != user.data.id %}*/
/*               <input type='checkbox' name='checkbox[]' id='checkbox-{{ u.id }}' class='checkbox  checkbox-style' value='{{ u.id }}'>*/
/*               <label for='checkbox-{{ u.id }}'></label>*/
/*             {% endif %}*/
/*             </td>*/
/*             <td>{{ u.username }}</td>*/
/*             <td class="hidden-sm hidden-xs">{{ u.email }}</td>*/
/*             <td class="hidden-xs">{{ u.signup|date(date_format) }}</td>*/
/* */
/*             */
/* */
/*             <td  class="hidden-sm hidden-xs">*/
/*               {% if u.last_login %}*/
/*                 {{ u.last_login|date(date_format ~ " H:i") }}*/
/*               {% else %}*/
/*                 -*/
/*               {% endif %}*/
/*             </td>*/
/* */
/*             <td class="hidden-xs">{{ l(u.role_name)|capitalize }}</td>*/
/*             <td>*/
/*               {% if u.active == 1 %}*/
/*                 {% set active_btn = "primary" %}*/
/*               {% else %}*/
/*                 {% set active_btn = "default" %}*/
/*               {% endif %}*/
/*               <button type="button" class="btn btn-{{ active_btn }} userToggleAccountBtn"  value="{{ u.id }}">*/
/*                 <i class="fa fa-fw fa-toggle-on" aria-hidden="true"></i>*/
/*               </button>*/
/*               {% if u.expired == 1 %}<span class="badge badge-danger">{{l("Expired")}}</span>{% endif %}*/
/*             </td>*/
/*             <td>*/
/*               <button class='btn btn-primary editUserBtn' value='{{ u.id }}'>*/
/*                 <i class="fas fa-pencil-alt" aria-hidden="true"></i>*/
/*               </button>*/
/*               <a href='{{ base_url("users_manager/profile/" ~ u.id) }}' class='btn btn-primary'>*/
/*                 <i class="fa fa-list-alt fa-fw"></i> */
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*               <td colspan="8">{{ l('No records found!') }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     {% if pagination %}*/
/*       {{ pagination|raw}}*/
/*     {% endif %}*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/*   */
/* {% include "users_manager/add_user.twig" %}*/
/* {% include "users_manager/edit_user.twig" %}*/
/* {% include "users_manager/export_emails.twig" %}*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "user" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected accounts?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*     {{ parent() }}*/
/*     */
/*     <script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/*     <script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/*     {% if l('LANG_I18N') is not empty and l('LANG_I18N') != "en" %}*/
/*     <script src="{{ assets('theme/default/js/libs/moment/locale/' ~ l('LANG_I18N') ~ '.js') }}"></script>*/
/*     {% endif %}*/
/*     <script src="{{ assets('theme/default/js/libs/bootstrap-datetimepicker.min.js') }}"></script>*/
/*     */
/*     <script>*/
/* */
/*     $("#usergroup").change(function(){*/
/*       location.href = "{{base_url('users_manager?group=')}}"+$(this).val();*/
/*     });*/
/* */
/*     $(function () {*/
/*       $('.expire_on').datetimepicker({format: '{{ date_format_js }}'});*/
/*     });*/
/* */
/*       {# ------------------------------------- Add new user -------------------------------- #}*/
/*       $( "#newUserBtn" ).click(function(){*/
/*         */
/*         $(".addNewUserAlertBox").html("");*/
/*         */
/*         kp_preloader("on","#addNewUser .modal-body");*/
/* */
/*         $("#addNewUser #newUserBtn").prop('disabled', true);*/
/* */
/*         $.ajax({*/
/*           url: '{{ base_url("users_manager/add") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             username: $('#username','#addNewUser').val(),*/
/*             email: $('#email','#addNewUser').val(),*/
/*             password: $('#password','#addNewUser').val(),*/
/*             re_password: $('#re_password','#addNewUser').val(),*/
/*             role: $('#role','#addNewUser').val(),*/
/*             expire_on: $('#expire_on','#addNewUser').val(),*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*             */
/*               if(data.status == "success"){*/
/*                 */
/*                 if(data.message !== null && typeof data.message === 'object'){*/
/*                   htmlData = "<ul>";*/
/*                   Object.keys(data.message).forEach(function(key) {*/
/*                       htmlData += "<li>" + data.message[key] + "</li>";*/
/*                   });*/
/*                   htmlData += "</ul>";*/
/*                 }else{*/
/*                   htmlData = data.message;*/
/*                 }*/
/* */
/*                 alertBox(htmlData,"success",".addNewUserAlertBox",false,true);*/
/*                 $(document).on('hide.bs.modal','#addNewUser', function () {location.reload();});*/
/* */
/*                 // Clear the form */
/*                 $('#userid', "#addNewUser").val("");*/
/*                 $('#username', "#addNewUser").val("");*/
/*                 $('#password', "#addNewUser").val("");*/
/*                 $('#re_password', "#addNewUser").val("");*/
/*                 $('#email', "#addNewUser").val("");*/
/*                 $('#expire_on', "#addNewUser").val("");*/
/* */
/*               }else{*/
/*                 */
/*                 if(data.message !== null && typeof data.message === 'object'){*/
/*                   htmlData = "<ul>";*/
/*                   Object.keys(data.message).forEach(function(key) {*/
/*                     htmlData += "<li>" + data.message[key] + "</li>";*/
/*                   });*/
/*                   htmlData += "</ul>";*/
/*                 }else{*/
/*                   htmlData = data.message;*/
/*                 }*/
/*           */
/*                 alertBox(htmlData,"danger",".addNewUserAlertBox",false,true);*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ */
/*             console.log(errorThrown);*/
/*           },*/
/*           complete: function () {*/
/*             $("#addNewUser #newUserBtn").prop('disabled', false);*/
/*             kp_preloader("off","#addNewUser .modal-body");*/
/*           }*/
/*         });*/
/*       });*/
/*       {# ----------------- End Add new user --------------- #}*/
/* */
/* */
/*       {# ----------------- End edit user --------------- #}*/
/*       $( "#editUserAccountModalBtn" ).click(function(){*/
/*         $(".editUserAlertBox").html("");*/
/*         */
/*           var editUserModel = $('#editUser');*/
/*           kp_preloader("on","#editUser .modal-body");*/
/*       */
/*           $.ajax({*/
/*             url: '{{ base_url("users_manager/update") }}',*/
/*             dataType: 'json',*/
/*             type: 'post',*/
/*             contentType: 'application/x-www-form-urlencoded',*/
/*             data: {*/
/*               userid: $('#userid', editUserModel).val(),*/
/*               email: $('#email', editUserModel).val(),*/
/*               password: $('#password', editUserModel).val(),*/
/*               re_password: $('#re_password', editUserModel).val(),*/
/*               role: $('#role', editUserModel).val(),*/
/*               is_admin: $('#is_admin', editUserModel).val(),*/
/*               expire_on: $('#expire_on', editUserModel).val(),*/
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
/*                   alertBox(htmlData,"success",".editUserAlertBox",false,true);*/
/*                   $(document).on('hide.bs.modal','#editUser', function () {location.reload();});*/
/*                  */
/*                  }else if(data.status == "notice"){*/
/*                     alertBox(data.message,"warning",".editUserAlertBox",false,true);*/
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
/*                   alertBox(htmlData,"danger",".editUserAlertBox",false,true);*/
/*                 }*/
/*         */
/*               */
/*             },*/
/*             error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*             complete: function() {*/
/*               kp_preloader("off","#editUser .modal-body");*/
/*             }*/
/*         });*/
/*       });*/
/* */
/*       $( ".editUserBtn" ).click(function(){*/
/*         var editUserModel = $('#editUser');*/
/* */
/*         // initial the modal*/
/*         // Clear message box*/
/*         $(".editUserAlertBox").html("");*/
/*         */
/*         // Clear the form */
/*         $('#userid', editUserModel).val("");*/
/*         $('#username', editUserModel).val("");*/
/*         $('#password', editUserModel).val("");*/
/*         $('#re_password', editUserModel).val("");*/
/*         $('#email', editUserModel).val("");*/
/*         $('#expire_on', editUserModel).val("");*/
/*     */
/*         userId = $(this).val();*/
/* */
/*         $('#userid', editUserModel).val(userId);*/
/* */
/*         kp_preloader("on","#editUser .modal-body");*/
/* */
/*         $.ajax({*/
/*           url: '{{ base_url("users_manager/user_details") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             userid: userId,*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*               if(data.status == "success"){*/
/*                 $('#username', editUserModel).val(data.user.username);*/
/*                 $('#email', editUserModel).val(data.user.email);*/
/*                 $('#role', editUserModel).val(data.user.role_id);*/
/*                 $('#expire_on', editUserModel).val(moment(data.user.expire_on).format('{{ date_format_js }}'));*/
/*               }else{*/
/*                 htmlData = "<ul>";*/
/*                 if(data.message !== null && typeof data.message === 'object'){*/
/*                   Object.keys(data.message).forEach(function(key) {*/
/*                       htmlData += "<li>" + data.message[key] + "</li>";*/
/*                   });*/
/*                 }else{*/
/*                   htmlData += "<li>" + data.message + "</li>";*/
/*                 }*/
/*                 htmlData += "</ul>";*/
/*                 alertBox(htmlData,"danger",".editUserAlertBox",false,true);*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*           complete: function(){*/
/*             kp_preloader("off","#editUser .modal-body");*/
/*           }*/
/*         });*/
/* */
/*         // and finally show the modal*/
/*         editUserModel.modal("show");*/
/*         return false;*/
/*       });*/
/* */
/*     $( ".userToggleAccountBtn" ).click(function(){*/
/*       var userid = $( this );*/
/*         $.ajax({*/
/*           url: '{{ base_url("users_manager/toggle_account_status") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             userid: userid.val(),*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*               if(data.status == "success"){*/
/*                 userid.toggleClass( "btn-primary" );*/
/*                 userid.toggleClass( "btn-default" );*/
/*                 userid.find("i").addClass("fa-toggle-on");*/
/*                 userid.find("i").removeClass("fa-exclamation");*/
/*               }else{*/
/*                 userid.find("i").addClass("fa-exclamation");*/
/*                 userid.find("i").removeClass("fa-toggle-on");*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ */
/*               userid.find("i").addClass("fa-exclamation");*/
/*               userid.find("i").removeClass("fa-toggle-on");*/
/*               console.log(errorThrown); */
/*           }*/
/*         });*/
/*     });*/
/* */
/*     */
/*     // Instant search*/
/*     {# ----------- Auto complete ---------- #}*/
/*     $("body").mouseup(function (e){*/
/*         e.preventDefault();*/
/*         var container = new Array();*/
/*         container.push($('.autocomplete-suggestions'));*/
/*         $.each(container, function(key, value) {*/
/*             if (!$(value).is(e.target) && $(value).has(e.target).length === 0){*/
/*                 $(value).html("");*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     var xhr = null;*/
/*     $( "#SearchUser" ).on('input',function(){*/
/*       if(xhr!==null) xhr.abort();*/
/*       $(".autocomplete-suggestions").html("");*/
/*       $(".autocomplete-suggestion").css("display","block");*/
/*       $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('Searching...') }}</div>");*/
/*       kp_preloader("on");*/
/*       xhr = $.ajax({*/
/*         url: '{{ base_url("users_manager/search") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: {*/
/*           term: $(this).val(),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*         },*/
/*         success: function( res, textStatus, jQxhr ){*/
/*           $(".autocomplete-suggestions").html("");*/
/*           if(res.data !== null && typeof res.data === 'object'){*/
/*               nRes = res.data.length > 5 ? 5 : res.data.length;*/
/*               for (i = 0; i < nRes; i++) {*/
/*                 htmlData = "<div class='autocomplete-suggestion'>";*/
/*                 htmlData += "<a href='{{ base_url('users_manager/profile/') }}"+res.data[i].id+"'><span class='searchU'>"+res.data[i].username+"</span><span class='searchEmail'>"+res.data[i].email+"</span></a>";*/
/*                 htmlData += "</div>";*/
/*                  $(".autocomplete-suggestions").append(htmlData);*/
/*               }*/
/* */
/*               if(res.data.length > 5){*/
/*                 $(".autocomplete-suggestions").append("<div class='seeAllResults'><a href='{{ base_url('users_manager/?searchTerm=') }}"+$("#SearchUser").val()+"'>{{ l('See all results') }}</a></div>");*/
/*               }*/
/* */
/*               if(res.data.length == 0){*/
/*                 $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('No result found') }}</div>");*/
/*               }*/
/* */
/*             }else{*/
/*               $(".autocomplete-suggestions").append("<div class='autocomplete-suggestion'>{{ l('No result found') }}</div>");*/
/*             }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*         complete: function(){*/
/*           kp_preloader("off");*/
/*         }*/
/*       });*/
/*     });*/
/* */
/*     {# Delete action #}*/
/*     $("#deleteUserBtn").click(function(){*/
/*       if($('.usersList .checkbox:checked').length > 0){*/
/*         $("#delete_user").modal("show");*/
/*       }*/
/*     });*/
/* */
/*     $(".deleteBtn_user" ).click(function(){*/
/*       */
/*       kp_preloader("on","#delete_user .modal-body");*/
/* */
/*       var users = [];*/
/*       $('.usersList .checkbox:checked').each(function(){*/
/*         users.push($(this).val());*/
/*       });*/
/* */
/*       $.ajax({*/
/*         url: '{{ base_url("users_manager/delete") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: { */
/*           ids: JSON.stringify(users),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "success"){*/
/*             alertBox(data.message,"success",".deleteAlertBox_user",false,false);*/
/*               $(".deleteBtn_user").prop('disabled', true);*/
/*             $(document).on('hide.bs.modal','#delete_user', function () {location.reload();});*/
/*           }else{*/
/*             alertBox(data.message,"danger",".deleteAlertBox_user",false,false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ lang.s('Unable to complete your request') }}","danger",".deleteAlertBox_user",false,false);*/
/*         },*/
/*         complete: function(){*/
/*           kp_preloader("off","#delete_user .modal-body");*/
/*         }*/
/*       });*/
/* */
/*       $('.deleteBox_content_user').html("");*/
/*       */
/*     });*/
/* */
/*     </script>*/
/* {% endblock %}*/
