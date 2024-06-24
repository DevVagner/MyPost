<?php

/* posts.twig */
class __TwigTemplate_0fa57c7574461512cc18903353bcd51a32e73daafd5d7778305da878b529e3fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "posts.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        // line 7
        $this->loadTemplate("blocks/flash_bag.twig", "posts.twig", 7)->display($context);
        // line 8
        echo "<div class=\"row\">
\t<div class=\"col-xs-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t<label for=\"checkbox-all\" class=\"btn btn-default\">
\t\t\t\t\t<input type='checkbox' id=\"checkbox-all\" class=\"check-all checkbox-style\" name='a' />
\t\t\t\t\t<label for=\"checkbox-all\"></label>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Select all")), "html", null, true);
        echo "</label>
\t\t\t\t<button class=\"btn btn-danger\" type=\"button\" id=\"deleteBtn\"><i class=\"fa fa-trash fa-fw\" aria-hidden=\"true\"></i>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
        echo "</button>
\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("New post")), "html", null, true);
        echo "</a>
\t\t\t\t<span class=\"TotalRecords\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s of %s ", (isset($context["perPage"]) ? $context["perPage"] : null), (isset($context["total_posts"]) ? $context["total_posts"] : null))), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<form method=\"POST\">
\t<div class=\"card-group posts row\">";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            $context["postIcons"] = array("message" => "align-left", "link" => "link", "image" => "image", "video" => "video");
            // line 33
            echo "\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<input type='checkbox' class='checkbox checkbox-style' name='checkbox[]' id='checkbox-";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "' />
\t\t\t\t\t<label for='checkbox-";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "'></label>
\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, base_url(("?post_id=" . $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span class=\"postIconPlaceHolder\">
\t\t\t\t\t\t<i class=\"far fas fa-";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postIcons"]) ? $context["postIcons"] : null), $this->getAttribute($context["post"], "type", array()), array(), "array"), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t    <div class=\"card-block\">
\t\t\t\t      <h4 class=\"card-title\">
\t\t\t\t      \t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, base_url(("?post_id=" . $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" data-toggle='kp_tooltip' title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_title", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            // line 45
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "post_title", array()), 0, 30)), "html", null, true);
            echo "
\t\t\t\t      \t</a>
\t\t\t\t      </h4>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "\t\t\t<span class=\"well\"></span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t</div>";
        // line 55
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 56
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
        }
        // line 58
        echo "</form>";
        // line 61
        $context["box_id"] = "post";
        // line 62
        $context["delete_msg"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected records?"));
        // line 63
        $this->loadTemplate("blocks/delete_modal.twig", "posts.twig", 63)->display($context);
    }

    // line 67
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 68
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
   \t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, assets("theme/default/js/helpers.js"), "html", null, true);
        echo "\"></script>
    <script>

    \$(\"#checkbox-all\").click(function () {
    \$('.posts input[type=\"checkbox\"]').prop('checked', this.checked);
    });";
        // line 77
        echo "    \$(\"#deleteBtn\").click(function(){
    \tif(\$('.posts .checkbox:checked').length > 0){
\t\t\t\$(\"#delete_post\").modal(\"show\");
    \t}
    });

\t\$(\".deleteBtn_post\" ).click(function(){
  \t\tvar posts = [];
  \t\t\$('.posts .checkbox:checked').each(function(){
    \t\tposts.push(\$(this).val());
  \t\t});

  \t\tkp_preloader(\"on\",\"#delete_post .modal-body\");
\t\t\$(\".deleteBtn_post\").prop('disabled', true);

\t\t\$.ajax({
\t\t\turl: '";
        // line 93
        echo twig_escape_filter($this->env, base_url("posts/delete"), "html", null, true);
        echo "',
\t\t\tdataType: 'json',
\t\t\ttype: 'post',
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tdata: { ids: JSON.stringify(posts),";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') },
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t  if(data.status == \"success\"){
\t\t\t    alertBox(data.message,\"success\",\".deleteAlertBox_post\",false,false);
\t\t\t      \$(\".deleteBtn_post\").prop('disabled', true);
\t\t\t    \$(document).on('hide.bs.modal','#delete_post', function () {location.reload();});
\t\t\t  }else{
\t\t\t    alertBox(data.message,\"danger\",\".deleteAlertBox_post\",false,false);
\t\t\t  }
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t  alertBox(\"";
        // line 109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_post\",false,false);
\t\t\t},
\t\t\tcomplete: function(){
\t\t\t\tkp_preloader(\"off\",\"#delete_post .modal-body\");
\t\t\t\t\$(\".deleteBtn_post\").prop('disabled', false);
\t\t\t}
\t\t});

\t\t\$('.deleteBox_content_post').html(\"\");
   \t});
    </script>";
    }

    public function getTemplateName()
    {
        return "posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 109,  194 => 97,  187 => 93,  169 => 77,  161 => 69,  157 => 68,  154 => 67,  150 => 63,  148 => 62,  146 => 61,  144 => 58,  141 => 56,  139 => 55,  137 => 54,  131 => 52,  120 => 45,  113 => 44,  105 => 39,  96 => 37,  92 => 36,  86 => 35,  82 => 33,  80 => 27,  75 => 26,  65 => 18,  59 => 17,  55 => 16,  51 => 15,  43 => 8,  41 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}{{ l('Posts') }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* {% include "blocks/flash_bag.twig" %}*/
/* <div class="row">*/
/* 	<div class="col-xs-12">*/
/* 		<div class="panel panel-default">*/
/* 				<div class="panel-body">*/
/* 				<label for="checkbox-all" class="btn btn-default">*/
/* 					<input type='checkbox' id="checkbox-all" class="check-all checkbox-style" name='a' />*/
/* 					<label for="checkbox-all"></label>*/
/* 				{{l('Select all')}}</label>*/
/* 				<button class="btn btn-danger" type="button" id="deleteBtn"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>{{ l('Delete') }}</button>*/
/* 				<a href="{{ base_url() }}" class="btn btn-primary">{{ l('New post') }}</a>*/
/* 				<span class="TotalRecords">{{ l('Showing %s of %s ',perPage,total_posts) }}</span>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <form method="POST">*/
/* 	<div class="card-group posts row">*/
/* 		{% for post in posts %}*/
/* 			{% set postIcons = {*/
/* 				'message': 'align-left',*/
/* 				'link':  'link',*/
/* 				'image':  'image',*/
/* 				'video':  'video'*/
/* 			} %}*/
/* 			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/* 				<div class="card">*/
/* 					<input type='checkbox' class='checkbox checkbox-style' name='checkbox[]' id='checkbox-{{ post.id }}' value='{{ post.id }}' />*/
/* 					<label for='checkbox-{{ post.id }}'></label>*/
/* 					<a href="{{ base_url('?post_id=' ~ post.id) }}" title=" {{ l('POST') }}" id="{{ post.id }}">*/
/* 						<span class="postIconPlaceHolder">*/
/* 						<i class="far fas fa-{{ postIcons[post.type] }}" aria-hidden="true"></i>*/
/* 						</span>*/
/* 					</a>*/
/* 				    <div class="card-block">*/
/* 				      <h4 class="card-title">*/
/* 				      	<a href="{{ base_url('?post_id=' ~ post.id) }}" data-toggle='kp_tooltip' title="{{post.post_title}}" id="{{ post.id }}">*/
/* 				      		{{ post.post_title[0:30]|capitalize }}*/
/* 				      	</a>*/
/* 				      </h4>*/
/* 				    </div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<span class="well"></span>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	{% if pagination %}*/
/*       {{ pagination|raw}}*/
/*     {% endif %}*/
/* </form>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "post" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected records?") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*     {{ parent() }}*/
/*    	<script src="{{ assets('theme/default/js/helpers.js') }}"></script>*/
/*     <script>*/
/* */
/*     $("#checkbox-all").click(function () {*/
/*     $('.posts input[type="checkbox"]').prop('checked', this.checked);*/
/*     }); */
/* */
/*     {# Delete action #}*/
/*     $("#deleteBtn").click(function(){*/
/*     	if($('.posts .checkbox:checked').length > 0){*/
/* 			$("#delete_post").modal("show");*/
/*     	}*/
/*     });*/
/* */
/* 	$(".deleteBtn_post" ).click(function(){*/
/*   		var posts = [];*/
/*   		$('.posts .checkbox:checked').each(function(){*/
/*     		posts.push($(this).val());*/
/*   		});*/
/* */
/*   		kp_preloader("on","#delete_post .modal-body");*/
/* 		$(".deleteBtn_post").prop('disabled', true);*/
/* */
/* 		$.ajax({*/
/* 			url: '{{ base_url("posts/delete") }}',*/
/* 			dataType: 'json',*/
/* 			type: 'post',*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			data: { ids: JSON.stringify(posts), {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') },*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 			  if(data.status == "success"){*/
/* 			    alertBox(data.message,"success",".deleteAlertBox_post",false,false);*/
/* 			      $(".deleteBtn_post").prop('disabled', true);*/
/* 			    $(document).on('hide.bs.modal','#delete_post', function () {location.reload();});*/
/* 			  }else{*/
/* 			    alertBox(data.message,"danger",".deleteAlertBox_post",false,false);*/
/* 			  }*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			  alertBox("{{ l('Unable to complete your request') }}","danger",".deleteAlertBox_post",false,false);*/
/* 			},*/
/* 			complete: function(){*/
/* 				kp_preloader("off","#delete_post .modal-body");*/
/* 				$(".deleteBtn_post").prop('disabled', false);*/
/* 			}*/
/* 		});*/
/* */
/* 		$('.deleteBox_content_post').html("");*/
/*    	});*/
/*     </script>*/
/* {% endblock %}*/
