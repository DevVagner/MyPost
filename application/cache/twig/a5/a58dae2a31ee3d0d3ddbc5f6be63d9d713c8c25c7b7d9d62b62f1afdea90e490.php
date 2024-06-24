<?php

/* settings/components/edit_fb_account.twig */
class __TwigTemplate_757aee08d48684a8af5ee398079444f9a50f8db69e7fbbeb4216b7543a4040ef extends Twig_Template
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
        echo "<div id=\"editFbAccount\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit Facebook account")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"msgBox\"></div>
         <input type=\"hidden\" class=\"form-control\" name=\"facebookId\" id=\"facebookId\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook ID")), "html", null, true);
        echo "\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
             <div class=\"form-group\">
              <label for=\"newFacebookId\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook ID")), "html", null, true);
        echo " <small>(";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Please make sure to use Correct and real facebok ID")), "html", null, true);
        echo ")</small></label>
              <input type=\"text\" class=\"form-control\" name=\"newFacebookId\" id=\"newFacebookId\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook ID")), "html", null, true);
        echo "\">
            </div>
            <p><a href=\"https://findmyfbid.com/\" target=\"_blank\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Find my facebook ID")), "html", null, true);
        echo "</a></p>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
        <input type='button' class='btn btn-primary' id=\"editFbAccountBtn\" value='";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Save")), "html", null, true);
        echo "'>
      </div>
    </div>
  </div>
</div>
<script>
\$(function(){
  \$(\".editFbAccount\").click(function(){
    \$(\"#facebookId\").val(\$(this).val());
    \$(\"#newFacebookId\").val(\$(this).val());
    \$(\"#editFbAccount\").modal(\"show\");
  });

  \$(\"#editFbAccountBtn\" ).click(function(){
      kp_preloader(\"on\",\"#editFbAccount .modal-body\");
      \$.ajax({
        url: '";
        // line 39
        echo twig_escape_filter($this->env, base_url("facebook_accounts/home/edit_fbaccount"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: { 
          fbaccount_id: \$('#facebookId').val(),
          new_fbaccount_id: \$('#newFacebookId').val(),";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"ok\"){
            alertBox(data.message,\"success\",\".msgBox\",false,false);
              \$(\".deleteBtn_fb_account\").prop('disabled', true);
              \$(document).on('hide.bs.modal','#editFbAccount', function () {
              location.reload();
            });
          }else{
            alertBox(data.message,\"danger\",\".msgBox\",false,false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".msgBox\",false,false);
        },
        complete: function() {
          kp_preloader(\"off\",\"#editFbAccount .modal-body\");
        }
      });
      \$('.msgBox').html(\"\");
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "settings/components/edit_fb_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 61,  91 => 46,  82 => 39,  63 => 23,  59 => 22,  51 => 17,  46 => 15,  40 => 14,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* <div id="editFbAccount" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('Edit Facebook account') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class="msgBox"></div>*/
/*          <input type="hidden" class="form-control" name="facebookId" id="facebookId" placeholder="{{ l('Facebook ID') }}">*/
/*         <div class="row">*/
/*           <div class="col-sm-12">*/
/*              <div class="form-group">*/
/*               <label for="newFacebookId">{{ l('Facebook ID') }} <small>({{l('Please make sure to use Correct and real facebok ID')}})</small></label>*/
/*               <input type="text" class="form-control" name="newFacebookId" id="newFacebookId" placeholder="{{ l('Facebook ID') }}">*/
/*             </div>*/
/*             <p><a href="https://findmyfbid.com/" target="_blank">{{l('Find my facebook ID')}}</a></p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*         <input type='button' class='btn btn-primary' id="editFbAccountBtn" value='{{ l("Save") }}'>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/* $(function(){*/
/*   $(".editFbAccount").click(function(){*/
/*     $("#facebookId").val($(this).val());*/
/*     $("#newFacebookId").val($(this).val());*/
/*     $("#editFbAccount").modal("show");*/
/*   });*/
/* */
/*   $("#editFbAccountBtn" ).click(function(){*/
/*       kp_preloader("on","#editFbAccount .modal-body");*/
/*       $.ajax({*/
/*         url: '{{ base_url("facebook_accounts/home/edit_fbaccount") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: { */
/*           fbaccount_id: $('#facebookId').val(),*/
/*           new_fbaccount_id: $('#newFacebookId').val(),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "ok"){*/
/*             alertBox(data.message,"success",".msgBox",false,false);*/
/*               $(".deleteBtn_fb_account").prop('disabled', true);*/
/*               $(document).on('hide.bs.modal','#editFbAccount', function () {*/
/*               location.reload();*/
/*             });*/
/*           }else{*/
/*             alertBox(data.message,"danger",".msgBox",false,false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ l('Unable to complete your request') }}","danger",".msgBox",false,false);*/
/*         },*/
/*         complete: function() {*/
/*           kp_preloader("off","#editFbAccount .modal-body");*/
/*         }*/
/*       });*/
/*       $('.msgBox').html("");*/
/*     });*/
/* });*/
/* </script>*/
