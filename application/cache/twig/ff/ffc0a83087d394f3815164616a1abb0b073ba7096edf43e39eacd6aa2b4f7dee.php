<?php

/* users_manager/edit_user.twig */
class __TwigTemplate_110e3a4235b2a5d703cee5103a5fce8d520f89bb104eb68cd93fa5dc3a10fcaf extends Twig_Template
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
        echo "<!-- Edit user -->
<div class=\"modal fade\" id=\"editUser\" tabindex=\"-1\" data-backdrop=\"static\" data-keyboard=\"false\" role=\"dialog\" aria-labelledby=\"editUserLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <form>
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"editUserLabel\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit user")), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"editUserAlertBox\"></div>
            <input type=\"hidden\" name=\"userId\" id=\"userid\" value=\"\">
              <div class=\"row\">
                  <div class=\"col-sm-6\">
                    <div class=\"input-group\">
                      <label for=\"username\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Username")), "html", null, true);
        echo "</label>
                      <input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Username")), "html", null, true);
        echo "\" disabled autofocus=\"off\" value=\"\"/>
                    </div>
                  </div>

                  <div class=\"col-sm-6\">
                    <div class=\"input-group\">
                        <label for=\"email\" class=\"sr-only\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("EMAIL")), "html", null, true);
        echo "\" required autofocus=\"off\" value=\"\"/>
                    </div>
                  </div>
              </div>

              <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"input-group\">
                    <label for=\"password\"  class=\"sr-only\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Password")), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Password")), "html", null, true);
        echo "\" required />
                </div>
              </div>

              <div class=\"col-sm-6\">
                <div class=\"input-group\">
                    <label for=\"re_password\"  class=\"sr-only\">";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RE_ENTER_PASSWORD")), "html", null, true);
        echo "</label>
                    <input type=\"password\" name=\"re_password\" id=\"re_password\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RE_ENTER_PASSWORD")), "html", null, true);
        echo "\" class=\"form-control\" required />
                </div>
                </div>
              </div>

          <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"input-group\">
                    <label for=\"role\" class=\"sr-only\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ROLES")), "html", null, true);
        echo "</label>
                <select name=\"role\" id=\"role\" class=\"form-control\">
                  <option value=\"\">--";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Choose the user role")), "html", null, true);
        echo " --</option>";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 52
            echo "                     <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["role"], "name", array())))), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </select>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <label for=\"expire_on\" class=\"sr-only\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expire on")), "html", null, true);
        echo "</label>
                <div class='input-group date'>
                  <input type='text' class=\"form-control expire_on\" id='expire_on' placeholder=\"";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Expire on")), "html", null, true);
        echo "\"/>
                  <span class=\"input-group-addon\">
                    <span class=\"fa fa-calendar\"></span>
                  </span>
                </div>
              </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</button>
          <button type=\"button\" id=\"editUserAccountModalBtn\" class=\"btn btn-primary\">";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "</button>
        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "users_manager/edit_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 70,  140 => 69,  128 => 60,  123 => 58,  117 => 54,  107 => 52,  103 => 51,  100 => 50,  95 => 48,  84 => 40,  80 => 39,  71 => 33,  67 => 32,  56 => 24,  52 => 23,  43 => 17,  39 => 16,  28 => 8,  19 => 1,);
    }
}
/* <!-- Edit user -->*/
/* <div class="modal fade" id="editUser" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="editUserLabel">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <form>*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*           <h4 class="modal-title" id="editUserLabel">{{ l('Edit user') }}</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <div class="editUserAlertBox"></div>*/
/*             <input type="hidden" name="userId" id="userid" value="">*/
/*               <div class="row">*/
/*                   <div class="col-sm-6">*/
/*                     <div class="input-group">*/
/*                       <label for="username" class="sr-only">{{ l('Username') }}</label>*/
/*                       <input type="text" name="username" id="username" class="form-control" placeholder="{{ l('Username') }}" disabled autofocus="off" value=""/>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="col-sm-6">*/
/*                     <div class="input-group">*/
/*                         <label for="email" class="sr-only">{{ l('EMAIL') }}</label>*/
/*                         <input type="text" name="email" id="email" class="form-control" placeholder="{{ l('EMAIL') }}" required autofocus="off" value=""/>*/
/*                     </div>*/
/*                   </div>*/
/*               </div>*/
/* */
/*               <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <div class="input-group">*/
/*                     <label for="password"  class="sr-only">{{ l('Password') }}</label>*/
/*                     <input type="password" id="password" name="password" class="form-control" placeholder="{{ l('Password') }}" required />*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="col-sm-6">*/
/*                 <div class="input-group">*/
/*                     <label for="re_password"  class="sr-only">{{ l('RE_ENTER_PASSWORD') }}</label>*/
/*                     <input type="password" name="re_password" id="re_password" placeholder="{{ l('RE_ENTER_PASSWORD') }}" class="form-control" required />*/
/*                 </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*           <div class="row">*/
/*               <div class="col-sm-6">*/
/*                 <div class="input-group">*/
/*                     <label for="role" class="sr-only">{{ l('ROLES') }}</label>*/
/*                 <select name="role" id="role" class="form-control">*/
/*                   <option value="">-- {{ l('Choose the user role') }} --</option>*/
/*                   {% for role in roles %}*/
/*                      <option value="{{ role.id }}">{{ l(role.name)|capitalize }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-sm-6">*/
/*                 <label for="expire_on" class="sr-only">{{ l('Expire on') }}</label>*/
/*                 <div class='input-group date'>*/
/*                   <input type='text' class="form-control expire_on" id='expire_on' placeholder="{{ l('Expire on') }}"/>*/
/*                   <span class="input-group-addon">*/
/*                     <span class="fa fa-calendar"></span>*/
/*                   </span>*/
/*                 </div>*/
/*               </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">{{ l('CLOSE') }}</button>*/
/*           <button type="button" id="editUserAccountModalBtn" class="btn btn-primary">{{ l('SAVE_CHANGES') }}</button>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
