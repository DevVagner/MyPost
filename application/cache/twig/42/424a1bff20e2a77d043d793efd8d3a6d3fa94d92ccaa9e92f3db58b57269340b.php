<?php

/* blocks/delete_modal.twig */
class __TwigTemplate_4e06cf443336a8fe1e199a975af274818209aa4120aa9589db970aafd3ef3921 extends Twig_Template
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
        echo "<div id=\"delete_";
        echo twig_escape_filter($this->env, (isset($context["box_id"]) ? $context["box_id"] : null), "html", null, true);
        echo "\" class=\"modal fade deleteBox\" role=\"dialog\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete confirmation")), "html", null, true);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"deleteAlertBox_";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["box_id"]) ? $context["box_id"] : null), "html", null, true);
        echo "\"></div>
      <div class=\"deleteBox_content_";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["box_id"]) ? $context["box_id"] : null), "html", null, true);
        echo "\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["delete_msg"]) ? $context["delete_msg"] : null), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
      <button type=\"button\" class=\"btn btn-danger deleteBtn_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["box_id"]) ? $context["box_id"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Delete")), "html", null, true);
        echo "</button>
    </div>
  </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "blocks/delete_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  41 => 11,  38 => 10,  34 => 9,  28 => 6,  19 => 1,);
    }
}
/* <div id="delete_{{ box_id }}" class="modal fade deleteBox" role="dialog">*/
/* <div class="modal-dialog">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*       <h4 class="modal-title">{{ l("Delete confirmation") }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <div class="deleteAlertBox_{{ box_id }}"></div>*/
/*       <div class="deleteBox_content_{{ box_id }}">*/
/*         {{ delete_msg }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*       <button type="button" class="btn btn-default" data-dismiss="modal">{{ l('Cancel') }}</button>*/
/*       <button type="button" class="btn btn-danger deleteBtn_{{ box_id }}">{{ l('Delete') }}</button>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
