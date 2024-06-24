<?php

/* settings/update.twig */
class __TwigTemplate_09c693e63a8efabb944d073c58d7f1d7915b05d91f94a85bdfc651492d9841fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/update.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update")), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"settings\">
  <div class=\"row \">
    <div class=\"tabbable tabs-left\">
      <div class=\"col-xs-12 col-sm-3 settingsTabs\">";
        // line 14
        $context["current_page"] = "update";
        // line 15
        $this->loadTemplate("settings/tabs.twig", "settings/update.twig", 15)->display($context);
        // line 16
        echo "      </div>
      <div class=\"col-xs-12 col-sm-9 settingsContent\">
        <div class=\"row tab-content\">
          <div class=\"col-xs-12\">
            <h4 class=\"tab-title\"><i class=\"fa fa-refresh\"></i>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update")), "html", null, true);
        echo "</h4>
          </div>
          <div class=\"col-xs-12\">
            <div class=\"SettingsContent\">
              <div class=\"row\">
                <div class=\"col-xs-12\">
                <div class=\"msgbox\"></div>
                <div class=\"input-group\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" id=\"uploadUpdate\" name=\"uploadUpdate\" type=\"button\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
        echo "</button>
                    </span>
                    <input type=\"file\" id=\"updateArchive\" class=\"form-control\" name=\"updateArchive\" >
                </div>
                <div class=\"progress\" style=\"display:none\">
                  <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\"
                  aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%\">0%</div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    // line 49
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 50
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
    \$(\"#uploadUpdate\").on(\"click\",uploadUpdate);
    function uploadUpdate(){
      kp_preloader(\"on\");
      var formData = new FormData();
      formData.set('update', \$(\"#updateArchive\")[0].files[0]);
      formData.set('";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo "', getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "'));
      \$(\".progress\").show();
      \$.ajax({
        xhr: function() {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener(\"progress\", function(evt){
              if (evt.lengthComputable) {
                  var percentComplete = (evt.loaded/evt.total)*100;
                  var progressbar = \$(\".progress .progress-bar\");
                  progressbar.css(\"width\",percentComplete+\"%\");
                  progressbar.text(Math.floor(percentComplete)+\"%\");

                  if(percentComplete==100){
                     progressbar.text(\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Processing")), "html", null, true);
        echo "...\");
                  }
              }
         }, false);
         return xhr;
        },
        url: '";
        // line 76
        echo twig_escape_filter($this->env, base_url("settings/update/uploadUpdate"), "html", null, true);
        echo "',
        type: \"POST\",
        data: formData,
        contentType: false,
        cache: false,
        processData:false,
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"ok\"){
            alertBox(data.message,\"success\",false,true,true);
            setTimeout(function(){ location.reload(); }, 1000);
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
            alertBox(htmlData,\"danger\",false,false,true);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#addNew .msgbox\",true,true);
        },
        complete: function(){kp_preloader(\"off\");}
      });
    }
  </script>";
    }

    public function getTemplateName()
    {
        return "settings/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 101,  130 => 76,  121 => 70,  103 => 57,  93 => 50,  90 => 49,  69 => 29,  57 => 20,  51 => 16,  49 => 15,  47 => 14,  40 => 9,  37 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ l('Update') }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* <div class="settings">*/
/*   <div class="row ">*/
/*     <div class="tabbable tabs-left">*/
/*       <div class="col-xs-12 col-sm-3 settingsTabs">*/
/*         {% set current_page = 'update' %}*/
/*         {% include "settings/tabs.twig" %}*/
/*       </div>*/
/*       <div class="col-xs-12 col-sm-9 settingsContent">*/
/*         <div class="row tab-content">*/
/*           <div class="col-xs-12">*/
/*             <h4 class="tab-title"><i class="fa fa-refresh"></i>  {{ l('Update') }}</h4>*/
/*           </div>*/
/*           <div class="col-xs-12">*/
/*             <div class="SettingsContent">*/
/*               <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                 <div class="msgbox"></div>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-btn">*/
/*                       <button class="btn btn-default" id="uploadUpdate" name="uploadUpdate" type="button"><i class="fa fa-cloud-upload" aria-hidden="true"></i> {{l('Upload')}}</button>*/
/*                     </span>*/
/*                     <input type="file" id="updateArchive" class="form-control" name="updateArchive" >*/
/*                 </div>*/
/*                 <div class="progress" style="display:none">*/
/*                   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"*/
/*                   aria-valuemin="0" aria-valuemax="100" style="width:0%">0%</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {%  block javascripts_footer %}*/
/*   {{ parent() }}*/
/*   <script type="text/javascript">*/
/*     $("#uploadUpdate").on("click",uploadUpdate);*/
/*     function uploadUpdate(){*/
/*       kp_preloader("on");*/
/*       var formData = new FormData();*/
/*       formData.set('update', $("#updateArchive")[0].files[0]);*/
/*       formData.set('{{ config_item('csrf_token_name') }}', getCookie('{{ config_item('csrf_cookie_name') }}'));*/
/*       $(".progress").show();*/
/*       $.ajax({*/
/*         xhr: function() {*/
/*           var xhr = new window.XMLHttpRequest();*/
/*           xhr.upload.addEventListener("progress", function(evt){*/
/*               if (evt.lengthComputable) {*/
/*                   var percentComplete = (evt.loaded/evt.total)*100;*/
/*                   var progressbar = $(".progress .progress-bar");*/
/*                   progressbar.css("width",percentComplete+"%");*/
/*                   progressbar.text(Math.floor(percentComplete)+"%");*/
/* */
/*                   if(percentComplete==100){*/
/*                      progressbar.text("{{l('Processing')}}...");*/
/*                   }*/
/*               }*/
/*          }, false);*/
/*          return xhr;*/
/*         },*/
/*         url: '{{ base_url("settings/update/uploadUpdate") }}',*/
/*         type: "POST",*/
/*         data: formData,*/
/*         contentType: false,*/
/*         cache: false,*/
/*         processData:false,*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "ok"){*/
/*             alertBox(data.message,"success",false,true,true);*/
/*             setTimeout(function(){ location.reload(); }, 1000);*/
/*           }else{*/
/*             if(data.message !== null && typeof data.message === 'object'){*/
/*               htmlData = "<ul>";*/
/*               Object.keys(data.message).forEach(function(key) {*/
/*                   htmlData += "<li>" + data.message[key] + "</li>";*/
/*               });*/
/*               htmlData += "</ul>";*/
/*             }else{*/
/*               htmlData = data.message;*/
/*             }*/
/*             alertBox(htmlData,"danger",false,false,true);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ l('Unable to complete your request') }}","danger","#addNew .msgbox",true,true);*/
/*         },*/
/*         complete: function(){kp_preloader("off");}*/
/*       });*/
/*     }*/
/*   </script>*/
/* {% endblock %}*/
/* */
