<?php

/* facebook_accounts/components/add_account.twig */
class __TwigTemplate_d978dac532ac19df26d3d42d01257a645a633437403980acfbc876214a140a9b extends Twig_Template
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
        echo "<div id=\"addNewFbAccount\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD_UPDATE_FACEBOOK_ACCOUNT")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        
        <div class='addFbAccountalerts alertBox'></div>";
        // line 11
        $context["compp_"] = "add";
        // line 12
        $this->loadTemplate("settings/components/add_fb_account.twig", "facebook_accounts/components/add_account.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
        <input type='button' class='btn btn-primary' id=\"addFbAccountBtn\" value='";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add facebook account")), "html", null, true);
        echo "'>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "facebook_accounts/components/add_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  37 => 13,  35 => 12,  33 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div id="addNewFbAccount" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('ADD_UPDATE_FACEBOOK_ACCOUNT') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         */
/*         <div class='addFbAccountalerts alertBox'></div>*/
/*         {% set compp_ = "add" %}*/
/*         {% include "settings/components/add_fb_account.twig" %}*/
/* 						*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*         <input type='button' class='btn btn-primary' id="addFbAccountBtn" value='{{ l("Add facebook account") }}'>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
