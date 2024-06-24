<?php

/* home/details.twig */
class __TwigTemplate_b5c98e9a189cc5229b186114a031201c2ad9456da18d0dd802e3dcdbd7f29bac extends Twig_Template
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
        echo "
<div class=\"row\">
<div class=\"col-xs-12\">
<div class=\"panel panel-default\">
\t<div class=\"panel-body groupsOptions\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups")), "html", null, true);
        echo " : <strong class=\"groupsCount\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getGroupsCount", array(), "method"), "html", null, true);
        echo "</strong> |";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        echo " : <strong class=\"pagesCount\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getPagesCount", array(), "method"), "html", null, true);
        echo "</strong> |";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Managed Pages")), "html", null, true);
        echo " : <strong class=\"managedPagesCount\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getManagedPagesCount", array(), "method"), "html", null, true);
        echo "</strong> 
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<span id=\"countSelectedNodes\" class=\"badge badge-primay\" style=\"display: none\" /><i class=\"fa fa-check fa-fw\" aria-hidden=\"true\"></i> <span
\t\t\t\t class=\"groups\">0</span>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups")), "html", null, true);
        echo ", <span class=\"pages\">0</span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pages")), "html", null, true);
        // line 17
        echo ",";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total")), "html", null, true);
        echo " : <span class=\"total\">0</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
\t\t\t\t\taria-expanded=\"false\">
\t\t\t\t\t\tAction <span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"addSelectedNodes\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add selected nodes to a category")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<span class=\"visible-lg\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-plus\"></i>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add node")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-plus\"></i></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>";
        // line 37
        if (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method") && ($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method") > 0))) {
            // line 38
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"deleteSelectedNodes\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Remove selected nodes")), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-trash\"></i>";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Remove node")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-trash\"></i></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>";
        }
        // line 45
        echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"unHideSelectedNodes\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("unHide selected nodes")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-eye\"></i>";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("unHide node")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-eye\"></i></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"hideSelectedNodes\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Hide selected nodes")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-eye-slash\"></i>";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Hide node")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-eye-slash\"></i></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"exportGroupsCSV\" data-toggle=\"kp_tooltip\" data-placement=\"top\" title=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export current groups IDs")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t<span class=\"visible-lg\"><i class=\"fa fa-fw fa-cloud-download-alt\"></i>";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Export
\t\t\t\t\t\t\t\tGroups to CSV")), "html", null, true);
        // line 63
        echo "</span>
\t\t\t\t\t\t\t<span class=\"hidden-lg\"><i class=\"fa fa-fw fa-cloud-download-alt\"></i></span>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group pull-right mr-3\">
\t\t\t\t<div class=\"input-group\">";
        // line 72
        if (call_user_func_array($this->env->getFunction('input_get')->getCallable(), array("post_id"))) {
            // line 73
            echo form_open(("?post_id=" . call_user_func_array($this->env->getFunction('input_get')->getCallable(), array("post_id"))));
        } else {
            // line 75
            echo form_open();
        }
        // line 77
        echo "\t\t\t\t\t<select id=\"nodescategory\" name=\"nodescategory\" class=\"form-control\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t<option value=\"-1\">--";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All")), "html", null, true);
        echo " --</option>";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodesCategories"]) ? $context["nodesCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gc"]) {
            // line 80
            if (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "default_nodes_category"), "method") == $this->getAttribute($context["gc"], "id", array()))) {
                // line 81
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "id", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "category_name", array()), "html", null, true);
                echo "</option>";
            } else {
                // line 83
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "category_name", array()), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "home/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 86,  171 => 83,  164 => 81,  162 => 80,  158 => 79,  155 => 78,  152 => 77,  149 => 75,  146 => 73,  144 => 72,  134 => 63,  131 => 62,  127 => 61,  118 => 55,  114 => 54,  105 => 48,  101 => 47,  97 => 45,  90 => 40,  86 => 39,  83 => 38,  81 => 37,  74 => 32,  69 => 30,  52 => 17,  48 => 16,  28 => 9,  19 => 1,);
    }
}
/* */
/* <div class="row">*/
/* <div class="col-xs-12">*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-body groupsOptions">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-xs-12 col-sm-6 col-md-4">*/
/* 				{{ l('Groups') }} : <strong class="groupsCount">{{ fbaccount.getGroupsCount() }}</strong> | {{ l('Pages') }} : <strong class="pagesCount">{{ fbaccount.getPagesCount() }}</strong> | {{ l('Managed Pages') }} : <strong class="managedPagesCount">{{ fbaccount.getManagedPagesCount() }}</strong> */
/* 				</div>*/
/* */
/* */
/* 				<div class="col-xs-12 col-sm-6 col-md-4">*/
/* 				<div class="form-group">*/
/* 				<span id="countSelectedNodes" class="badge badge-primay" style="display: none" /><i class="fa fa-check fa-fw" aria-hidden="true"></i> <span*/
/* 				 class="groups">0</span> {{ l('Groups') }}, <span class="pages">0</span> {{*/
/* 				l('Pages') }}, {{l('Total')}} : <span class="total">0</span>*/
/* 				</span>*/
/* 			</div>*/
/* 				</div>*/
/* */
/* 				<div class="col-xs-12 col-sm-6 col-md-4">*/
/* 						<div class="btn-group pull-right">*/
/* 					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"*/
/* 					aria-expanded="false">*/
/* 						Action <span class="caret"></span>*/
/* 					</button>*/
/* 					<ul class="dropdown-menu dropdown-menu-right">*/
/* 						<li>*/
/* 							<a id="addSelectedNodes" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Add selected nodes to a category') }}" />*/
/* 							<span class="visible-lg">*/
/* 								<i class="fa fa-fw fa-plus"></i> {{ l('Add node') }}*/
/* 							</span>*/
/* 							<span class="hidden-lg"><i class="fa fa-fw fa-plus"></i></span>*/
/* 							</a>*/
/* 						</li>*/
/* 						{% if fbaccountDetails.row() and fbaccountDetails.row('default_nodes_category') > 0 %}*/
/* 						<li>*/
/* 							<a id="deleteSelectedNodes" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Remove selected nodes') }}" />*/
/* 							<span class="visible-lg"><i class="fa fa-fw fa-trash"></i> {{ l('Remove node') }}</span>*/
/* 							<span class="hidden-lg"><i class="fa fa-fw fa-trash"></i></span>*/
/* 							</a>*/
/* 						</li>*/
/* 						{% endif %}*/
/* */
/* 						<li>*/
/* 							<a id="unHideSelectedNodes" data-toggle="kp_tooltip" data-placement="top" title="{{ l('unHide selected nodes') }}" />*/
/* 							<span class="visible-lg"><i class="fa fa-fw fa-eye"></i> {{ l('unHide node') }}</span>*/
/* 							<span class="hidden-lg"><i class="fa fa-fw fa-eye"></i></span>*/
/* 							</a>*/
/* 						</li>*/
/* */
/* 						<li>*/
/* 							<a id="hideSelectedNodes" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Hide selected nodes') }}" />*/
/* 							<span class="visible-lg"><i class="fa fa-fw fa-eye-slash"></i> {{ l('Hide node') }}</span>*/
/* 							<span class="hidden-lg"><i class="fa fa-fw fa-eye-slash"></i></span>*/
/* 							</a>*/
/* 						</li>*/
/* */
/* 						<li>*/
/* 							<a id="exportGroupsCSV" data-toggle="kp_tooltip" data-placement="top" title="{{ l('Export current groups IDs') }}" />*/
/* 							<span class="visible-lg"><i class="fa fa-fw fa-cloud-download-alt"></i> {{ l('Export*/
/* 								Groups to CSV') }}</span>*/
/* 							<span class="hidden-lg"><i class="fa fa-fw fa-cloud-download-alt"></i></span>*/
/* */
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="form-group pull-right mr-3">*/
/* 				<div class="input-group">*/
/* 					{% if input_get('post_id') %}*/
/* 					{{ form_open("?post_id="~input_get('post_id')) }}*/
/* 					{% else %}*/
/* 					{{ form_open() }}*/
/* 					{% endif %}*/
/* 					<select id="nodescategory" name="nodescategory" class="form-control" onchange="this.form.submit()">*/
/* 						<option value="-1">-- {{ l('All') }} --</option>*/
/* 						{% for gc in nodesCategories %}*/
/* 						{% if fbaccountDetails.row('default_nodes_category') == gc.id %}*/
/* 						<option value="{{ gc.id }}" selected>{{ gc.category_name }}</option>*/
/* 						{% else %}*/
/* 						<option value="{{ gc.id }}">{{ gc.category_name }}</option>*/
/* 						{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 				</div>*/
/* 			</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
