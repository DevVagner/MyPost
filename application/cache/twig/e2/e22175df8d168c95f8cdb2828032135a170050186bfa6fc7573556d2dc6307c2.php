<?php

/* users_manager/export_emails.twig */
class __TwigTemplate_8401926533f0c3d8b6dab9374f48572141efe747d92b3c3fdc701fed17356828 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"exportEmails\" tabindex=\"-1\"  data-backdrop=\"static\" data-keyboard=\"false\" role=\"dialog\" aria-labelledby=\"exportEmailsLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"exportEmailsLabel\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export emails")), "html", null, true);
        echo "</h4>
      </div>
    \t<div class=\"modal-body\">
    \t\t<div class=\"btn-group multiSelectBtn\" data-toggle=\"buttons\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 11
            echo "\t            \t<label class=\"btn btn-primary\">
\t\t          \t<input type=\"checkbox\" class=\"role  role-";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\" name=\"roleId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["role"], "name", array())), "html", null, true);
            echo "</label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t          \t<label class=\"btn btn-primary\">
\t\t          \t<input type=\"checkbox\" class=\"expiredAccounts\" name=\"expiredAccounts\" value=\"expired\">";
        // line 15
        echo "Expired accounts";
        echo "
\t\t         </label>
\t      </div>
      </div>
      <div class=\"modal-footer\">
          <button type=\"button\" id=\"exportEmailsClose\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
          <button type=\"button\" id=\"exportEmailsBtn\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export")), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
\$(\"#exportEmailsBtn\").on(\"click\",function(){
\tvar groups = [];
\t\$(\".role:checked\",\"#exportEmails\").each(function() {groups.push(\$(this).val());});
\tvar expiredAccounts = \$('.expiredAccounts', \"#exportEmails\").is(\":checked\") ? 1 : 0;
\twindow.open('";
        // line 31
        echo twig_escape_filter($this->env, base_url("users_manager/export_emails"), "html", null, true);
        echo "?groups='+groups.join()+'&expiredAccounts='+expiredAccounts,\"_self\")
});
</script>";
    }

    public function getTemplateName()
    {
        return "users_manager/export_emails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  65 => 21,  61 => 20,  53 => 15,  50 => 14,  39 => 12,  36 => 11,  32 => 10,  26 => 6,  19 => 1,);
    }
}
/* <div class="modal fade" id="exportEmails" tabindex="-1"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exportEmailsLabel">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="exportEmailsLabel">{{ l('Export emails') }}</h4>*/
/*       </div>*/
/*     	<div class="modal-body">*/
/*     		<div class="btn-group multiSelectBtn" data-toggle="buttons">*/
/* 	      		{% for role in roles %}*/
/* 	            	<label class="btn btn-primary">*/
/* 		          	<input type="checkbox" class="role  role-{{ role.id }}" name="roleId" value="{{ role.id }}">{{ role.name|capitalize }}</label>*/
/* 	          	{% endfor %}*/
/* 	          	<label class="btn btn-primary">*/
/* 		          	<input type="checkbox" class="expiredAccounts" name="expiredAccounts" value="expired">{{('Expired accounts')}}*/
/* 		         </label>*/
/* 	      </div>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*           <button type="button" id="exportEmailsClose" class="btn btn-default" data-dismiss="modal">{{ l('Close')}}</button>*/
/*           <button type="button" id="exportEmailsBtn" class="btn btn-primary">{{ l('Export') }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $("#exportEmailsBtn").on("click",function(){*/
/* 	var groups = [];*/
/* 	$(".role:checked","#exportEmails").each(function() {groups.push($(this).val());});*/
/* 	var expiredAccounts = $('.expiredAccounts', "#exportEmails").is(":checked") ? 1 : 0;*/
/* 	window.open('{{ base_url("users_manager/export_emails") }}?groups='+groups.join()+'&expiredAccounts='+expiredAccounts,"_self")*/
/* });*/
/* </script>*/
