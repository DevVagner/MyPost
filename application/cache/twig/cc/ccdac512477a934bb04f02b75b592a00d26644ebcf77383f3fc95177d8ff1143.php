<?php

/* settings/modules_manager.twig */
class __TwigTemplate_1674ea378467582126778e44f01f7cd8114e4ec037fb4cee36136cf78d24a110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "settings/modules_manager.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Modules manager")), "html", null, true);
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
        $context["current_page"] = "modules_manager";
        // line 15
        $this->loadTemplate("settings/tabs.twig", "settings/modules_manager.twig", 15)->display($context);
        // line 16
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9 settingsContent\">
\t\t\t\t<div class=\"row tab-content\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<h4 class=\"tab-title\"><i class=\"fa fa-user\"></i>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Modules manager")), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t      <span class=\"input-group-btn\">
\t\t\t\t\t        <button class=\"btn btn-default\" id=\"uploadModule\" name=\"uploadModule\" type=\"button\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
        echo "</button>
\t\t\t\t\t      </span>
\t\t\t\t\t      <input type=\"file\" id=\"moduleArchive\" class=\"form-control\" name=\"moduleArchive\" >
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"msgBox\"></div>
\t\t\t\t\t\t<div class=\"row card-group modulesList\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</form>";
    }

    // line 42
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 43
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
    \$(function(){

    \t\$(\"#uploadModule\").on(\"click\", uploadModule);

    \tkp_preloader(\"on\",\".modulesList\");
    \t\$.ajax({
\t\t\turl: '";
        // line 51
        echo twig_escape_filter($this->env, base_url("settings/modules_manager/available_modules"), "html", null, true);
        echo "',
\t\t\tdataType: 'json',
\t\t\ttype: 'GET',
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\tif(data.status == \"ok\"){
\t\t\t\t\tvar htmlData = \"\";
\t\t\t\t\tObject.keys(data.modules).forEach(function(key) {
                 \t\thtmlData +=  bindModule(data.modules[key]);
                  \t});
                  \t\$(\".modulesList\").html(htmlData);
\t\t\t\t}else{
\t\t\t\t\t\$(\".modulesList\").html(\"No modules available!\");
\t\t\t\t}
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t},
\t\t\tcomplete: function(){
\t\t\t\tkp_preloader(\"off\",\".modulesList\");
\t\t\t}
\t\t});
\t});

    function toggleModule(active,module) {
    \tkp_preloader(\"on\");
    \tmodule = \$(module);
    \t\$(\".pre-loader_\"+module.val()).show();
    \t\$.ajax({
\t\t\turl: '";
        // line 80
        echo twig_escape_filter($this->env, base_url("settings/modules_manager/"), "html", null, true);
        echo "'+active,
\t\t\tdataType: 'json',
\t\t\ttype: 'POST',
\t\t\tdata: { 
\t\t      \tmodule: module.val(),";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t    },
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\tif(data.status == \"ok\"){
\t\t\t\t\talertBox(data.message,\"success\",false,true,true);
\t\t\t\t\tif(data.m_status == 'active'){
\t\t\t\t\t\tmodule.html(\"";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disable")), "html", null, true);
        echo "\");
\t\t\t\t\t\tmodule.attr(\"onclick\",'toggleModule(\"disable\",this)');
\t\t\t\t\t\tmodule.addClass(\"btn-primary\");
\t\t\t\t\t\tmodule.removeClass(\"btn-default\");
\t\t\t\t\t}else{
\t\t\t\t\t\tmodule.html(\"";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active")), "html", null, true);
        echo "\");
\t\t\t\t\t\tmodule.attr(\"onclick\",'toggleModule(\"active\",this)');
\t\t\t\t\t\tmodule.addClass(\"btn-default\");
\t\t\t\t\t\tmodule.removeClass(\"btn-primary\");
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\talertBox(data.message,\"danger\",false,true,true);
\t\t\t\t}
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t},
\t\t\tcomplete: function(){
\t\t\t\tkp_preloader(\"off\");
\t\t\t\t\$(\".pre-loader_\"+module.val()).hide();
\t\t\t}
\t\t});
    }

\tfunction bindModule(module) {

\t\tvar price = module.price == 0 ? \"Free\" : \"\$\"+module.price;
    \t\t\t\t
\t\tvar m = \"<div class='col col-xs-6  col-sm-6 col-md-4'><div class='card'>\";
\t    \tm += \"<a href='\"+module.link+\"' target='_blank'><img class='card-img-top' src='";
        // line 121
        echo twig_escape_filter($this->env, assets("theme/default/images/kp_module.png"), "html", null, true);
        echo "' alt='Module thumbnail'></a>\";
\t   \t\tm += \"<div class='card-block'>\";
\t    \tm += \"<span class='badge price badge-success'>\"+price+\"</span>\";
\t    \tm += \"<h4 class='card-title'><a href='\"+module.link+\"' target='_blank'>\"+module.title+\"</a>\";
\t    \tif(module.update == 1){
      \t\t\tm += \" <small class='badge'>New update available</small>\";
      \t\t}
\t    \tm += \"</h4>\";
\t    \tm += \"<p class='card-text'>\"+module.description+\"</p>\";
\t   \t\tm += \"<h6>\";
\t   \t\tm += \"<small>Author : \"+module.author+\"<br />\";
\t   \t\tm += \"Version : \"+module.version+\"</small>\";
\t   \t\tm += \"</h6>\";

\t    \tm += \"</div>\";
\t   \t\tm += \"<div class='card-footer'>\";

      \t\tif(module.status == 'active'){
      \t\t\tm += \"<button type='button' class='btn btn-primary' onclick='toggleModule(\\\"disable\\\",this)' value='\"+module.name+\"'>";
        // line 139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disable")), "html", null, true);
        echo "</button>\";
      \t\t}else if(module.status == 'inactive'){
      \t\t\tm += \"<button type='button' class='btn btn-default' onclick='toggleModule(\\\"active\\\",this)' value='\"+module.name+\"'>";
        // line 141
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Active")), "html", null, true);
        echo "</button>\";
      \t\t}else{
      \t\t\tm += \"<a href='\"+module.link+\"' class='btn btn-success' target='_blank'>Get it Now for \"+price+\"</a>\";
      \t\t}

      \t\tm += \" <span class='pre-loader_\"+module.name+\"' style='display:none'><i class='fa fa-circle-o-notch fa-spin fa-1x fa-fw'></i><span class='sr-only'>Loading...</span></span>\"
\t    m += \"</div></div></div>\";

\t    return m;
\t}

\tfunction uploadModule(){
      kp_preloader(\"on\");
      var formData = new FormData();
      formData.set('module', \$(\"#moduleArchive\")[0].files[0]);
      formData.set('";
        // line 156
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo "', getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "'));

      \$.ajax({
        url: '";
        // line 159
        echo twig_escape_filter($this->env, base_url("settings/modules_manager/uploadModule"), "html", null, true);
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
        // line 184
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#addNew .msgbox\",true,true);
        },
        complete: function(){kp_preloader(\"off\");}
      });
  \t}
    </script>";
    }

    public function getTemplateName()
    {
        return "settings/modules_manager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 184,  238 => 159,  230 => 156,  212 => 141,  207 => 139,  186 => 121,  159 => 97,  151 => 92,  139 => 85,  132 => 80,  100 => 51,  89 => 43,  86 => 42,  67 => 25,  59 => 20,  53 => 16,  51 => 15,  49 => 14,  42 => 9,  40 => 8,  37 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l('Modules manager') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* {{ form_open() }}*/
/* <div class="settings">*/
/* 	<div class="row ">*/
/* 		<div class="tabbable tabs-left">*/
/* 			<div class="col-xs-12 col-sm-3 settingsTabs">*/
/* 				{% set current_page = 'modules_manager' %}*/
/* 				{% include "settings/tabs.twig" %}*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9 settingsContent">*/
/* 				<div class="row tab-content">*/
/* 					<div class="col-xs-12">*/
/* 						<h4 class="tab-title"><i class="fa fa-user"></i>  {{ l('Modules manager') }}</h4>*/
/* 					</div>*/
/* 					<div class="col-xs-12">*/
/* 						<div class="input-group">*/
/* 					      <span class="input-group-btn">*/
/* 					        <button class="btn btn-default" id="uploadModule" name="uploadModule" type="button"><i class="fa fa-cloud-upload" aria-hidden="true"></i> {{l('Upload')}}</button>*/
/* 					      </span>*/
/* 					      <input type="file" id="moduleArchive" class="form-control" name="moduleArchive" >*/
/* 					    </div>*/
/* 					</div>*/
/* 					<div class="col-xs-12">*/
/* 						<div class="msgBox"></div>*/
/* 						<div class="row card-group modulesList"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*     $(function(){*/
/* */
/*     	$("#uploadModule").on("click", uploadModule);*/
/* */
/*     	kp_preloader("on",".modulesList");*/
/*     	$.ajax({*/
/* 			url: '{{ base_url("settings/modules_manager/available_modules") }}',*/
/* 			dataType: 'json',*/
/* 			type: 'GET',*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 				if(data.status == "ok"){*/
/* 					var htmlData = "";*/
/* 					Object.keys(data.modules).forEach(function(key) {*/
/*                  		htmlData +=  bindModule(data.modules[key]);*/
/*                   	});*/
/*                   	$(".modulesList").html(htmlData);*/
/* 				}else{*/
/* 					$(".modulesList").html("No modules available!");*/
/* 				}*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			},*/
/* 			complete: function(){*/
/* 				kp_preloader("off",".modulesList");*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/*     function toggleModule(active,module) {*/
/*     	kp_preloader("on");*/
/*     	module = $(module);*/
/*     	$(".pre-loader_"+module.val()).show();*/
/*     	$.ajax({*/
/* 			url: '{{ base_url("settings/modules_manager/") }}'+active,*/
/* 			dataType: 'json',*/
/* 			type: 'POST',*/
/* 			data: { */
/* 		      	module: module.val(),*/
/* 		      	{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 		    },*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 				if(data.status == "ok"){*/
/* 					alertBox(data.message,"success",false,true,true);*/
/* 					if(data.m_status == 'active'){*/
/* 						module.html("{{l('Disable')}}");*/
/* 						module.attr("onclick",'toggleModule("disable",this)');*/
/* 						module.addClass("btn-primary");*/
/* 						module.removeClass("btn-default");*/
/* 					}else{*/
/* 						module.html("{{l('Active')}}");*/
/* 						module.attr("onclick",'toggleModule("active",this)');*/
/* 						module.addClass("btn-default");*/
/* 						module.removeClass("btn-primary");*/
/* 					}*/
/* 				}else{*/
/* 					alertBox(data.message,"danger",false,true,true);*/
/* 				}*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			},*/
/* 			complete: function(){*/
/* 				kp_preloader("off");*/
/* 				$(".pre-loader_"+module.val()).hide();*/
/* 			}*/
/* 		});*/
/*     }*/
/* */
/* 	function bindModule(module) {*/
/* */
/* 		var price = module.price == 0 ? "Free" : "$"+module.price;*/
/*     				*/
/* 		var m = "<div class='col col-xs-6  col-sm-6 col-md-4'><div class='card'>";*/
/* 	    	m += "<a href='"+module.link+"' target='_blank'><img class='card-img-top' src='{{ assets('theme/default/images/kp_module.png') }}' alt='Module thumbnail'></a>";*/
/* 	   		m += "<div class='card-block'>";*/
/* 	    	m += "<span class='badge price badge-success'>"+price+"</span>";*/
/* 	    	m += "<h4 class='card-title'><a href='"+module.link+"' target='_blank'>"+module.title+"</a>";*/
/* 	    	if(module.update == 1){*/
/*       			m += " <small class='badge'>New update available</small>";*/
/*       		}*/
/* 	    	m += "</h4>";*/
/* 	    	m += "<p class='card-text'>"+module.description+"</p>";*/
/* 	   		m += "<h6>";*/
/* 	   		m += "<small>Author : "+module.author+"<br />";*/
/* 	   		m += "Version : "+module.version+"</small>";*/
/* 	   		m += "</h6>";*/
/* */
/* 	    	m += "</div>";*/
/* 	   		m += "<div class='card-footer'>";*/
/* */
/*       		if(module.status == 'active'){*/
/*       			m += "<button type='button' class='btn btn-primary' onclick='toggleModule(\"disable\",this)' value='"+module.name+"'>{{l('Disable')}}</button>";*/
/*       		}else if(module.status == 'inactive'){*/
/*       			m += "<button type='button' class='btn btn-default' onclick='toggleModule(\"active\",this)' value='"+module.name+"'>{{l('Active')}}</button>";*/
/*       		}else{*/
/*       			m += "<a href='"+module.link+"' class='btn btn-success' target='_blank'>Get it Now for "+price+"</a>";*/
/*       		}*/
/* */
/*       		m += " <span class='pre-loader_"+module.name+"' style='display:none'><i class='fa fa-circle-o-notch fa-spin fa-1x fa-fw'></i><span class='sr-only'>Loading...</span></span>"*/
/* 	    m += "</div></div></div>";*/
/* */
/* 	    return m;*/
/* 	}*/
/* */
/* 	function uploadModule(){*/
/*       kp_preloader("on");*/
/*       var formData = new FormData();*/
/*       formData.set('module', $("#moduleArchive")[0].files[0]);*/
/*       formData.set('{{ config_item('csrf_token_name') }}', getCookie('{{ config_item('csrf_cookie_name') }}'));*/
/* */
/*       $.ajax({*/
/*         url: '{{ base_url("settings/modules_manager/uploadModule") }}',*/
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
/*   	}*/
/*     </script>*/
/* {% endblock %}*/
