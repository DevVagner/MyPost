<?php

/* home/general_options.twig */
class __TwigTemplate_f1ece4bf44ce7469f3cd802d0e722e5a889f6f360a69b7ac9fcf7a259388685c extends Twig_Template
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
        echo "<aside class=\"control-sidebar control-sidebar-dark\">
    <div class=\"tab-content\">
      <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Nodes options")), "html", null, true);
        echo "</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"toggleHiddenNodes\" name=\"toggleHiddenNodes\" aria-label=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show Hidden nodes")), "html", null, true);
        echo "\"";
        // line 10
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_hidden_nodes", array(), "array") == 1)) {
            echo "checked";
        }
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"toggleHiddenNodes\" class=\"input-text\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show Hidden nodes")), "html", null, true);
        echo "</label>
            </div>
          </li>

          <li>
            <div class=\"form-group groupVtoggle\">
              <label class=\"switch\">
                <input type=\"checkbox\" id=\"showGroups\" name=\"showGroups\" aria-label=\"Unique post\"";
        // line 20
        if (($this->getAttribute(        // line 21
(isset($context["user_options"]) ? $context["user_options"] : null), "show_groups", array(), "array") == 1)) {
            echo "checked";
        }
        echo " />
                <span class=\"slider round\"></span>
              </label>
              <label for=\"showGroups\" class=\"input-text\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show Groups")), "html", null, true);
        echo "</label>
            </div>
          </li>

          <li>
            <div class=\"form-group\">
            <label class=\"switch\">
              <input type=\"checkbox\" id=\"showPages\" name=\"showPages\" aria-label=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        echo "\"";
        if (($this->getAttribute(        // line 32
(isset($context["user_options"]) ? $context["user_options"] : null), "show_pages", array(), "array") == 1)) {
            echo "checked";
        }
        echo " />
              <span class=\"slider round\"></span>
            </label>
            <label for=\"showPages\" class=\"input-text\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Show pages")), "html", null, true);
        echo "</label>
            </div>
          </li>

          <li>
            <div class=\"form-group\">
              <label class=\"switch\">
              <input type=\"checkbox\" id=\"showManagedPages\" name=\"showManagedPages\" aria-label=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Managed pages")), "html", null, true);
        echo "\"";
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_managed_pages", array(), "array") == 1)) {
            echo "checked";
        }
        echo " />
              <span class=\"slider round\"></span>
            </label>
            <label for=\"showManagedPages\" class=\"input-text\">";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Managed pages")), "html", null, true);
        echo "</label>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </aside>";
    }

    public function getTemplateName()
    {
        return "home/general_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  93 => 42,  83 => 35,  75 => 32,  72 => 31,  62 => 24,  54 => 21,  53 => 20,  43 => 13,  35 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
/* <aside class="control-sidebar control-sidebar-dark">*/
/*     <div class="tab-content">*/
/*       <div class="tab-pane active" id="control-sidebar-home-tab">*/
/*         <h3 class="control-sidebar-heading">{{l("Nodes options")}}</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <div class="form-group">*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" id="toggleHiddenNodes" name="toggleHiddenNodes" aria-label="{{l('Show Hidden nodes')}}"*/
/* 							 {% if user_options['show_hidden_nodes']==1 %}checked {% endif %} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="toggleHiddenNodes" class="input-text">{{ l('Show Hidden nodes') }}</label>*/
/*             </div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="form-group groupVtoggle">*/
/*               <label class="switch">*/
/*                 <input type="checkbox" id="showGroups" name="showGroups" aria-label="Unique post" {% if*/
/*                   user_options['show_groups']==1 %}checked {% endif %} />*/
/*                 <span class="slider round"></span>*/
/*               </label>*/
/*               <label for="showGroups" class="input-text">{{ l('Show Groups') }}</label>*/
/*             </div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="form-group">*/
/*             <label class="switch">*/
/*               <input type="checkbox" id="showPages" name="showPages" aria-label="{{l('Pages')}}" {% if*/
/*                 user_options['show_pages']==1 %}checked {% endif %} />*/
/*               <span class="slider round"></span>*/
/*             </label>*/
/*             <label for="showPages" class="input-text">{{ l('Show pages') }}</label>*/
/*             </div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="form-group">*/
/*               <label class="switch">*/
/*               <input type="checkbox" id="showManagedPages" name="showManagedPages" aria-label="{{l('Managed pages')}}" {% if user_options['show_managed_pages']==1 %}checked {% endif %} />*/
/*               <span class="slider round"></span>*/
/*             </label>*/
/*             <label for="showManagedPages" class="input-text">{{l('Managed pages')}}</label>*/
/*             </div>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </aside>*/
