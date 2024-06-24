<?php

/* facebook_accounts/components/sidebar_options.twig */
class __TwigTemplate_45c9c4d62fc1f06230638887555d2e6c10cc927fdf5aa7aacc7f5425818cbe84 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Import settings")), "html", null, true);
        echo "</h3>";
        // line 5
        echo form_open();
        echo "
        <ul class=\"control-sidebar-menu\">
          <li>
            <div class=\"input-group\">";
        // line 9
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadGroups"]) ? $context["loadGroups"] : null))))) {
            // line 10
            $context["loadGroups"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadGroups")) == "on")) ? ("checked") : (""));
        } else {
            // line 12
            $context["loadGroups"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_groups"), "method") == 1)) ? ("checked") : (""));
        }
        // line 14
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadGroups\" name=\"loadGroups\" aria-label=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my groups")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["loadGroups"]) ? $context["loadGroups"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadGroups\" class=\"input-text\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my groups")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
          </li>

          <li>
            <div class=\"input-group\">";
        // line 24
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadPages"]) ? $context["loadPages"] : null))))) {
            // line 25
            $context["loadPages"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadPages")) == "on")) ? ("checked") : (""));
        } else {
            // line 27
            $context["loadPages"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_pages"), "method") == 1)) ? ("checked") : (""));
        }
        // line 29
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadPages\" name=\"loadPages\" aria-label=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my pages")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["loadPages"]) ? $context["loadPages"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadPages\" class=\"input-text\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my pages")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
          </li>

          <li>
            <div class=\"input-group\">";
        // line 39
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadOwnPages"]) ? $context["loadOwnPages"] : null))))) {
            // line 40
            $context["loadOwnPages"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadOwnPages")) == "on")) ? ("checked") : (""));
        } else {
            // line 42
            $context["loadOwnPages"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_own_pages"), "method") == 1)) ? ("checked") : (""));
        }
        // line 44
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadOwnPages\" name=\"loadOwnPages\" aria-label=\"";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my own pages")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["loadOwnPages"]) ? $context["loadOwnPages"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadOwnPages\" class=\"input-text\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load my own pages")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
          </li>

          <li>
           <div class=\"input-group\">";
        // line 54
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array((isset($context["loadFbFriends"]) ? $context["loadFbFriends"] : null))))) {
            // line 55
            $context["loadFbFriends"] = (((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("loadFbFriends")) == "on")) ? ("checked") : (""));
        } else {
            // line 57
            $context["loadFbFriends"] = ((($this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "load_fb_friends"), "method") == 1)) ? ("checked") : (""));
        }
        // line 59
        echo "\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class='checkbox-style' id=\"loadFbFriends\" name=\"loadFbFriends\" aria-label=\"";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load Facebook Friends")), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, (isset($context["loadFbFriends"]) ? $context["loadFbFriends"] : null), "html", null, true);
        echo " />
\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label for=\"loadFbFriends\" class=\"input-text\">";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Load Facebook Friends")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
          </li>

          <li>
            <div class=\"input-group\">
\t\t\t\t\t\t\t\t<label for=\"limitImportGroups\">";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum groups to import")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>";
        // line 72
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportGroups")))) {
            // line 73
            $context["limitImportGroups"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportGroups"));
        } else {
            // line 75
            $context["limitImportGroups"] = $this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "limitImportGroups"), "method");
        }
        // line 77
        echo "\t\t\t\t\t\t\t\t<input name=\"limitImportGroups\" id=\"limitImportGroups\" type=\"number\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["limitImportGroups"]) ? $context["limitImportGroups"] : null), "html", null, true);
        echo "\" class=\"form-control\"  min=\"1\" max=\"5000\">
\t\t\t\t\t\t\t</div>
          </li>

          <li>
            <div class=\"input-group\">
\t\t\t\t\t\t\t\t<label for=\"limitImportPages\">";
        // line 84
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Maximum pages to import")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>";
        // line 86
        if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportPages")))) {
            // line 87
            $context["limitImportPages"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("limitImportPages"));
        } else {
            // line 89
            $context["limitImportPages"] = $this->getAttribute((isset($context["userOptions"]) ? $context["userOptions"] : null), "row", array(0 => "limitImportPages"), "method");
        }
        // line 91
        echo "\t\t\t\t\t\t\t\t<input name=\"limitImportPages\" id=\"limitImportPages\" type=\"number\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["limitImportPages"]) ? $context["limitImportPages"] : null), "html", null, true);
        echo "\" class=\"form-control\"  min=\"1\" max=\"5000\">
\t\t\t\t\t\t\t</div>
          </li>
          <li><input type=\"submit\" name=\"save\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Save changes")), "html", null, true);
        echo "\" class=\"btn btn-primary\" /></li>
        </ul>
        </form>
      </div>
    </div>
  </aside>";
    }

    public function getTemplateName()
    {
        return "facebook_accounts/components/sidebar_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 94,  176 => 91,  173 => 89,  170 => 87,  168 => 86,  164 => 84,  154 => 77,  151 => 75,  148 => 73,  146 => 72,  142 => 70,  133 => 63,  125 => 60,  122 => 59,  119 => 57,  116 => 55,  114 => 54,  106 => 48,  98 => 45,  95 => 44,  92 => 42,  89 => 40,  87 => 39,  79 => 33,  71 => 30,  68 => 29,  65 => 27,  62 => 25,  60 => 24,  52 => 18,  44 => 15,  41 => 14,  38 => 12,  35 => 10,  33 => 9,  27 => 5,  24 => 4,  19 => 1,);
    }
}
/* <aside class="control-sidebar control-sidebar-dark">*/
/*     <div class="tab-content">*/
/*       <div class="tab-pane active" id="control-sidebar-home-tab">*/
/*         <h3 class="control-sidebar-heading">{{l("Import settings")}}</h3>*/
/*         {{form_open()}}*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <div class="input-group">*/
/* 						{% if input_post(loadGroups) is not empty %}*/
/* 							{% set loadGroups = input_post("loadGroups") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadGroups = userOptions.row('load_groups') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadGroups" name="loadGroups" aria-label="{{ l('Load my groups') }}" {{ loadGroups }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadGroups" class="input-text">{{ l('Load my groups') }}</label>*/
/* 					</div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="input-group">*/
/* 						{% if input_post(loadPages) is not empty %}*/
/* 							{% set loadPages = input_post("loadPages") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadPages = userOptions.row('load_pages') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadPages" name="loadPages" aria-label="{{ l('Load my pages') }}" {{ loadPages }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadPages" class="input-text">{{ l('Load my pages') }}</label>*/
/* 					</div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="input-group">*/
/* 						{% if input_post(loadOwnPages) is not empty %}*/
/* 							{% set loadOwnPages = input_post("loadOwnPages") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadOwnPages = userOptions.row('load_own_pages') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadOwnPages" name="loadOwnPages" aria-label="{{ l('Load my own pages') }}" {{ loadOwnPages }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadOwnPages" class="input-text">{{ l('Load my own pages') }}</label>*/
/* 					</div>*/
/*           </li>*/
/* */
/*           <li>*/
/*            <div class="input-group">*/
/* 						{% if input_post(loadFbFriends) is not empty %}*/
/* 							{% set loadFbFriends = input_post("loadFbFriends") == "on" ? "checked" : "" %}*/
/* 						{% else %}*/
/* 							{% set loadFbFriends = userOptions.row('load_fb_friends') == 1 ? "checked" : "" %}*/
/* 						{% endif %}*/
/* 						<label class="switch">*/
/* 							<input type="checkbox" class='checkbox-style' id="loadFbFriends" name="loadFbFriends" aria-label="{{ l('Load Facebook Friends') }}" {{ loadFbFriends }} />*/
/* 							<span class="slider round"></span>*/
/* 						</label>*/
/* 						<label for="loadFbFriends" class="input-text">{{ l('Load Facebook Friends') }}</label>*/
/* 					</div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="input-group">*/
/* 								<label for="limitImportGroups">*/
/* 									{{ l('Maximum groups to import') }}*/
/* 								</label>*/
/* 								{% if input_post('limitImportGroups') is not empty %} */
/* 									{% set limitImportGroups = input_post('limitImportGroups') %}*/
/* 								{% else %}*/
/* 									{% set limitImportGroups = userOptions.row('limitImportGroups') %}*/
/* 								{% endif %}*/
/* 								<input name="limitImportGroups" id="limitImportGroups" type="number" value="{{  limitImportGroups }}" class="form-control"  min="1" max="5000">*/
/* 							</div>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <div class="input-group">*/
/* 								<label for="limitImportPages">*/
/* 									{{ l('Maximum pages to import') }}*/
/* 								</label>*/
/* 								{% if input_post('limitImportPages') is not empty %} */
/* 									{% set limitImportPages = input_post('limitImportPages') %}*/
/* 								{% else %}*/
/* 									{% set limitImportPages = userOptions.row('limitImportPages') %}*/
/* 								{% endif %}*/
/* 								<input name="limitImportPages" id="limitImportPages" type="number" value="{{ limitImportPages }}" class="form-control"  min="1" max="5000">*/
/* 							</div>*/
/*           </li>*/
/*           <li><input type="submit" name="save" value="{{ l('Save changes') }}" class="btn btn-primary" /></li>*/
/*         </ul>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </aside>*/
