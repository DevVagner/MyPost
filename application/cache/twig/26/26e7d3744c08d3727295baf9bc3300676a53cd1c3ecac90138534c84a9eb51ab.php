<?php

/* users_manager/add_user.twig */
class __TwigTemplate_9275520445554a25d873d8da258332722879f960eee04cc148bac80f84a6b9dd extends Twig_Template
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
        echo "<!-- Add new user -->
<div class=\"modal fade\" id=\"addNewUser\" tabindex=\"-1\"  data-backdrop=\"static\" data-keyboard=\"false\" role=\"dialog\" aria-labelledby=\"newUserLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"newUserLabel\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NEW_USER")), "html", null, true);
        echo "</h4>
      </div>
    \t<div class=\"modal-body\">
        \t<div class=\"addNewUserAlertBox\"></div>

         \t<div class=\"row\">
\t            <div class=\"col-sm-6\">
\t\t            <div class=\"input-group\">
\t\t            \t<label for=\"username\" class=\"sr-only\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Username")), "html", null, true);
        echo "</label>
\t\t            \t<input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Username")), "html", null, true);
        echo "\" required autofocus=\"off\" value=\"\"/>
\t            \t</div>
\t            </div>

\t            <div class=\"col-sm-6\">
\t            \t<div class=\"input-group\">
\t              \t\t<label for=\"email\" class=\"sr-only\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "</label>
\t              \t\t<input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "\" required autofocus=\"off\" value=\"\"/>
\t          \t\t</div>
\t            </div>
        \t</div>

          \t<div class=\"row\">
\t\t\t    <div class=\"col-sm-6\">
\t\t\t    \t<div class=\"input-group\">
\t\t\t      \t\t<label for=\"password\"  class=\"sr-only\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Password")), "html", null, true);
        echo "</label>
\t\t\t      \t\t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Password")), "html", null, true);
        echo "\" required />
\t\t\t  \t\t</div>
\t\t\t    </div>

\t\t\t    <div class=\"col-sm-6\">
\t\t\t    \t<div class=\"input-group\">
\t\t\t      \t\t<label for=\"re_password\"  class=\"sr-only\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RE_ENTER_PASSWORD")), "html", null, true);
        echo "</label>
\t\t\t      \t\t<input type=\"password\" name=\"re_password\" id=\"re_password\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RE_ENTER_PASSWORD")), "html", null, true);
        echo "\" class=\"form-control\" required />
\t\t\t  \t\t</div>
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t    <div class=\"col-sm-6\">
\t\t\t    \t<div class=\"input-group\">
\t\t\t      \t\t<label for=\"role\" class=\"sr-only\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ROLES")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<select name=\"role\" id=\"role\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">--";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Choose the user role")), "html", null, true);
        echo " --</option>";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 51
            echo "\t\t\t\t\t\t\t   <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["role"], "name", array())))), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t</select>
\t\t\t  \t\t</div>
\t\t\t    </div>
\t\t\t    <div class=\"col-sm-6\">
\t\t\t    \t<label for=\"expire_on\"  class=\"sr-only\">";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expire on")), "html", null, true);
        echo "</label>
\t\t\t    \t<div class='input-group date'>
\t\t\t    \t\t<input type='text' class=\"form-control expire_on\" id='expire_on' placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expire on")), "html", null, true);
        echo "\"/>
\t\t\t    \t\t<span class=\"input-group-addon\">
\t\t\t    \t\t\t<span class=\"fa fa-calendar\"></span>
\t\t\t    \t\t</span>
\t\t\t    \t</div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t
      </div>
      <div class=\"modal-footer\">
          <button type=\"button\" id=\"addUserClose\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
          <button type=\"button\" id=\"newUserBtn\" class=\"btn btn-primary\">";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD")), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<!-- Add new user End -->";
    }

    public function getTemplateName()
    {
        return "users_manager/add_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 70,  140 => 69,  127 => 59,  122 => 57,  116 => 53,  106 => 51,  102 => 50,  99 => 49,  94 => 47,  83 => 39,  79 => 38,  70 => 32,  66 => 31,  55 => 23,  51 => 22,  42 => 16,  38 => 15,  27 => 7,  19 => 1,);
    }
}
/* <!-- Add new user -->*/
/* <div class="modal fade" id="addNewUser" tabindex="-1"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="newUserLabel">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="newUserLabel">{{ l('NEW_USER') }}</h4>*/
/*       </div>*/
/*     	<div class="modal-body">*/
/*         	<div class="addNewUserAlertBox"></div>*/
/* */
/*          	<div class="row">*/
/* 	            <div class="col-sm-6">*/
/* 		            <div class="input-group">*/
/* 		            	<label for="username" class="sr-only">{{ l('Username') }}</label>*/
/* 		            	<input type="text" name="username" id="username" class="form-control" placeholder="{{ l('Username') }}" required autofocus="off" value=""/>*/
/* 	            	</div>*/
/* 	            </div>*/
/* */
/* 	            <div class="col-sm-6">*/
/* 	            	<div class="input-group">*/
/* 	              		<label for="email" class="sr-only">{{ l('EMAIL') }}</label>*/
/* 	              		<input type="text" name="email" id="email" class="form-control" placeholder="{{ l('EMAIL') }}" required autofocus="off" value=""/>*/
/* 	          		</div>*/
/* 	            </div>*/
/*         	</div>*/
/* */
/*           	<div class="row">*/
/* 			    <div class="col-sm-6">*/
/* 			    	<div class="input-group">*/
/* 			      		<label for="password"  class="sr-only">{{ l('Password') }}</label>*/
/* 			      		<input type="password" id="password" name="password" class="form-control" placeholder="{{ l('Password') }}" required />*/
/* 			  		</div>*/
/* 			    </div>*/
/* */
/* 			    <div class="col-sm-6">*/
/* 			    	<div class="input-group">*/
/* 			      		<label for="re_password"  class="sr-only">{{ l('RE_ENTER_PASSWORD') }}</label>*/
/* 			      		<input type="password" name="re_password" id="re_password" placeholder="{{ l('RE_ENTER_PASSWORD') }}" class="form-control" required />*/
/* 			  		</div>*/
/* 			    </div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 			    <div class="col-sm-6">*/
/* 			    	<div class="input-group">*/
/* 			      		<label for="role" class="sr-only">{{ l('ROLES') }}</label>*/
/* 						<select name="role" id="role" class="form-control">*/
/* 							<option value="">-- {{ l('Choose the user role') }} --</option>*/
/* 							{% for role in roles %}*/
/* 							   <option value="{{ role.id }}">{{ l(role.name)|capitalize }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 			  		</div>*/
/* 			    </div>*/
/* 			    <div class="col-sm-6">*/
/* 			    	<label for="expire_on"  class="sr-only">{{ l('Expire on') }}</label>*/
/* 			    	<div class='input-group date'>*/
/* 			    		<input type='text' class="form-control expire_on" id='expire_on' placeholder="{{ l('Expire on') }}"/>*/
/* 			    		<span class="input-group-addon">*/
/* 			    			<span class="fa fa-calendar"></span>*/
/* 			    		</span>*/
/* 			    	</div>*/
/* 			    </div>*/
/* 			</div>*/
/* 			*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*           <button type="button" id="addUserClose" class="btn btn-default" data-dismiss="modal">{{ l('Close')}}</button>*/
/*           <button type="button" id="newUserBtn" class="btn btn-primary">{{ l('ADD') }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <!-- Add new user End -->*/
