<?php

/* home/groupstable.twig */
class __TwigTemplate_6adf5d86283322bf0ed0fc6588fa3cd09bcc5ad1180b2192a6b37528d53f7be7 extends Twig_Template
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
        echo "<div class=\"panel panel-default has-responsive-table\">";
        // line 2
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) {
            // line 3
            echo "\t<div class=\"panel-heading\">
\t\t<input type=\"text\" id=\"nodesFilterFiled\" class=\"form-control\" onkeyup=\"NodesFilter()\" placeholder=\"";
            // line 4
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search for groups and pages")), "html", null, true);
            echo "\">
\t</div>";
        }
        // line 7
        echo "\t<div class=\"panel-body\">
\t\t<table class=\"table table-bordered table-striped dataTable tablesorter\" id=\"groupsDataTable\" width=\"100%\">
\t\t\t<thead>";
        // line 10
        $context["checked"] = "";
        // line 11
        if ($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method")) {
            // line 12
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Timeline")), "html", null, true);
            echo "</td>
\t\t\t\t\t<td colspan='3'>";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_PROFILE")), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_STATUS")), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class='groupName' id='me'>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[0]' id='selectgroup_me' value='me'";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
            echo ">
\t\t\t\t\t\t<label for='selectgroup_me'></label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class='groupTitle' id='group_me'>";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "firstname"), "method") . " ") . $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "lastname"), "method")), "html", null, true);
            // line 25
            echo "</td>
\t\t\t\t\t<td colspan='3'><a href='https://www.facebook.com/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"), "html", null, true);
            echo "' target='_blank'>
\t\t\t\t\t\t\t<i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>&nbsp;";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_PROFILE")), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td><span class='postStatus_me postStatus'></span></td>
\t\t\t\t</tr>";
        }
        // line 32
        echo "\t\t\t\t<tr class=\"thNodes\">
\t\t\t\t\t<th width=\"20px\" class=\"no-sort\">
\t\t\t\t\t\t<input type='checkbox' id=\"checkbox-all\" class=\"check-all checkbox-style\" name='selectAllGroup'";
        // line 34
        if (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("selectAllGroup"))) {
            // line 35
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t<label for=\"checkbox-all\"></label>
\t\t\t\t\t</th>
\t\t\t\t\t<th>";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NODE_NAME")), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NODE_TYPE")), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>
\t\t\t\t\t\t<span class=\"hidden-xs\">";
        // line 42
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_pages", array(), "array") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Likes")), "html", null, true);
        }
        // line 43
        if ((($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_pages", array(), "array") == 1) && ($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_groups", array(), "array") == 1))) {
            echo "/";
        }
        // line 44
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_groups", array(), "array") == 1)) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Members")), "html", null, true);
        }
        // line 45
        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</th>
\t\t\t\t\t<th>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PRIVACY")), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_STATUS")), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody class=\"listNodesTable\">";
        // line 52
        if (((isset($context["load_nodes_ajax"]) ? $context["load_nodes_ajax"] : null) == false)) {
            // line 53
            $context["privacy"] = array("OPEN" => "eye", "CLOSED" => "eye-slash", "SECRET" => "archive");
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userFbNodes"]) ? $context["userFbNodes"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 56
                $context["nodeId"] = $this->getAttribute($context["node"], "id", array());
                // line 57
                $context["nodeName"] = $this->getAttribute($context["node"], "name", array());
                // line 58
                $context["page_likes"] = "";
                // line 60
                if ( !twig_test_empty($this->getAttribute($context["node"], "privacy", array()))) {
                    // line 61
                    $context["nodeType"] = "Group";
                } else {
                    // line 63
                    $context["nodeType"] = "Page";
                    // line 64
                    if ($this->getAttribute($context["node"], "likes", array())) {
                        // line 65
                        $context["page_likes"] = twig_number_format_filter($this->env, $this->getAttribute($context["node"], "likes", array()));
                    }
                }
                // line 69
                $context["nodePrivacy"] = (($this->getAttribute($context["node"], "privacy", array())) ? ($this->getAttribute($context["node"], "privacy", array())) : (""));
                // line 71
                if ($this->getAttribute(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("selectGroup")), (isset($context["i"]) ? $context["i"] : null), array(), "array")) {
                    // line 72
                    $context["checked"] = "checked='checked'";
                }
                // line 74
                echo "
\t\t\t\t<tr class='groupName nodeName";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["nodeType"]) ? $context["nodeType"] : null), "html", null, true);
                echo "Type' id='";
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'>

\t\t\t\t\t<td>
\t\t\t\t\t\t<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "]' id='selectgroup_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["node"], "id", array()), "html", null, true);
                echo "'
\t\t\t\t\t\t value='";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'";
                echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
                echo ">
\t\t\t\t\t\t<label for='selectgroup_";
                // line 80
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'></label>
\t\t\t\t\t</td>

\t\t\t\t\t<td class='groupTitle nodeTitle' id='group_";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "'>
\t\t\t\t\t\t<input type='hidden' name='selectGroupName[";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "]' value='";
                echo twig_escape_filter($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null), "html", null, true);
                echo "' />
\t\t\t\t\t\t<span";
                // line 85
                if (((isset($context["less_data"]) ? $context["less_data"] : null) == false)) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null), 0, 60), "html", null, true);
                if ((twig_length_filter($this->env, (isset($context["nodeName"]) ? $context["nodeName"] : null)) > 60)) {
                    // line 86
                    echo "...";
                }
                // line 87
                echo "
\t\t\t\t\t\t\t<a href='https://fb.com/";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo "' target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fas fa-external-link-alt\"></i></a></span>";
                // line 91
                if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_hidden_nodes", array(), "array") == 1)) {
                    // line 92
                    if (((isset($context["nodeType"]) ? $context["nodeType"] : null) == "Group")) {
                        // line 93
                        $context["hiddenNodesIDs"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["hiddenNodes"]) ? $context["hiddenNodes"] : null), "row", array(0 => "hidden_groups"), "method"), true));
                    } else {
                        // line 95
                        $context["hiddenNodesIDs"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["hiddenNodes"]) ? $context["hiddenNodes"] : null), "row", array(0 => "hidden_pages"), "method"), true));
                    }
                    // line 97
                    echo "
\t\t\t\t\t\t<span class=\"HiddenNodeBadge\">";
                    // line 99
                    if (twig_in_filter((isset($context["nodeId"]) ? $context["nodeId"] : null), (isset($context["hiddenNodesIDs"]) ? $context["hiddenNodesIDs"] : null))) {
                        // line 100
                        echo "\t\t\t\t\t\t\t<span class=\"badge badge-danger\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("hidden")), "html", null, true);
                        echo "</span>";
                    }
                    // line 102
                    echo "\t\t\t\t\t\t</span>";
                }
                // line 104
                echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"nodeType\">";
                // line 107
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["nodeType"]) ? $context["nodeType"] : null))), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"count\">";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["node"], "members", array()), "summary", array()), "total_count", array()), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["page_likes"]) ? $context["page_likes"] : null), "html", null, true);
                echo "</td>

\t\t\t\t\t<td class=\"privacyAndLikes\">";
                // line 111
                if ( !twig_test_empty($this->getAttribute($context["node"], "privacy", array()))) {
                    // line 112
                    echo "\t\t\t\t\t\t<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["privacy"]) ? $context["privacy"] : null), (isset($context["nodePrivacy"]) ? $context["nodePrivacy"] : null), array(), "array"), "html", null, true);
                    echo "\"></i>
\t\t\t\t\t\t&nbsp;<span class=\"hidden-xs\">";
                    // line 113
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["nodePrivacy"]) ? $context["nodePrivacy"] : null))), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t<input type='hidden' name='selectGroupPrivacy[";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]' value='";
                    echo twig_escape_filter($this->env, (isset($context["nodePrivacy"]) ? $context["nodePrivacy"] : null), "html", null, true);
                    echo "'>";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t-";
                }
                // line 118
                echo "\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<span class='postStatus_";
                // line 121
                echo twig_escape_filter($this->env, (isset($context["nodeId"]) ? $context["nodeId"] : null), "html", null, true);
                echo " postStatus'></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 127
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t<div class=\"mpreloader\">
\t\t\t\t\t\t\t<div class=\"loader\">
\t\t\t\t\t\t\t\t<svg class=\"circular\" viewBox=\"25 25 50 50\">
\t\t\t\t\t\t\t\t\t<circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\" />
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>";
        }
        // line 139
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<div id=\"addToCategoryModal\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
        // line 146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD_GROUP_TO_CATEGORY")), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"addCateMsgBoxModal\"></div>
\t\t\t\t\t\t<select class=\"form-control nodescategory\">
\t\t\t\t\t\t\t<option value=\"\">--";
        // line 151
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All")), "html", null, true);
        echo " --</option>";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodesCategories"]) ? $context["nodesCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gc"]) {
            // line 153
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gc"], "category_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 158
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<button onclick=\"return false;\" id=\"modalAddCateBtn\" class=\"btn btn-primary\">";
        // line 159
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ADD")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<script>
\t\t\$(function () {";
        // line 170
        echo "\t\t\t\$('#checkbox-all,.fbnode').on('change', function () {
\t\t\t\tvar countPages = 0;
\t\t\t\tvar countGroups = 0;
\t\t\t\t\$('.GroupType:visible .fbnode:checked').each(function () {
\t\t\t\t\tif (\$(this).val() != \"on\") {
\t\t\t\t\t\tcountGroups++;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$('.PageType:visible .fbnode:checked').each(function () {
\t\t\t\t\tif (\$(this).val() != \"on\") {
\t\t\t\t\t\tcountPages++;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$('#countSelectedNodes .pages').text(countPages);
\t\t\t\t\$('#countSelectedNodes .groups').text(countGroups);
\t\t\t\t\$('#countSelectedNodes .total').text(countPages + countGroups);
\t\t\t\t\$('#countSelectedNodes').show();
\t\t\t});

\t\t\t\$(\"#exportGroupsCSV\").on(\"click\", function () {
\t\t\t\tvar csvContent = 'group';
\t\t\t\tvar totalGroups = 0;
\t\t\t\t\$('.GroupType:visible .fbnode:checked').each(function () {
\t\t\t\t\tif (\$(this).val() != \"on\") {
\t\t\t\t\t\tcsvContent += '\\r\\n' + \$(this).val() + ',';
\t\t\t\t\t\ttotalGroups++;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tif (totalGroups == 0) {
\t\t\t\t\talertBox(\"";
        // line 200
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No groups has been selected")), "html", null, true);
        echo "\", \"danger\", false, true, true);
\t\t\t\t} else {
\t\t\t\t\talertBox(totalGroups + \"";
        // line 202
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Groups has been exported.")), "html", null, true);
        echo "\", \"success\", false, true, true);
\t\t\t\t\texportToCSV(csvContent, 'groups-' + moment().format('DD-MMM-YYYY') + '.csv', 'text/csv;encoding:utf-8');
\t\t\t\t}
\t\t\t});

\t\t\t
\t\t\t\$('.groupsOptions').on('click', '#deleteCategory', function (e) {
\t\t\t\te.preventDefault();
\t\t\t\t\$(\"#deleteCategory\").prop('disabled', true);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 212
        echo twig_escape_filter($this->env, base_url("nodes_categories/delete_category"), "html", null, true);
        echo "',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\t\tdata: {
\t\t\t\t\t\tcategoryID: \$(\"#deleteCategory\").val(),";
        // line 218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo " : getCookie(\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "\"),
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.status == \"success\") {
\t\t\t\t\tif (data.message !== null && typeof data.message === 'object') {
\t\t\t\t\t\thtmlData = \"<ul>\";
\t\t\t\t\t\tObject.keys(data.message).forEach(function (key) {
\t\t\t\t\t\t\thtmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t});
\t\t\t\t\t\thtmlData += \"</ul>\";

\t\t\t\t\t} else {
\t\t\t\t\t\thtmlData = data.message;
\t\t\t\t\t}
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\twindow.location.replace('";
        // line 233
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "');
\t\t\t\t\t}, 1000);
\t\t\t\t\talertBox(htmlData, \"success\", false, true, true)
\t\t\t\t} else {
\t\t\t\t\tif (data.message !== null && typeof data.message === 'object') {
\t\t\t\t\t\thtmlData = \"<ul>\";
\t\t\t\t\t\tObject.keys(data.message).forEach(function (key) {
\t\t\t\t\t\t\thtmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t\t\t\t\t});
\t\t\t\t\t\thtmlData += \"</ul>\";
\t\t\t\t\t} else {
\t\t\t\t\t\thtmlData = data.message;
\t\t\t\t\t}
\t\t\t\t\talertBox(htmlData, \"danger\", false, false, true);
\t\t\t\t}

\t\t\t\t\$(\"#deleteCategory\").prop('disabled', false);

\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox(\"";
        // line 254
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request, Please try again")), "html", null, true);
        echo "\", \"danger\", true, false, true);
\t\t\t\t\$(\"#deleteCategory\").prop('disabled', false);
\t\t\t}
});
});";
        // line 261
        echo "\t\t\$('.groupsOptions').on('click', '#hideSelectedNodes', function () {
\t\t\tnodes = [];
\t\t\t// Get all checked nodes
\t\t\t\$('.groupName:visible .fbnode:checked').each(function () {
\t\t\t\tnodes.push(\$(this).val());
\t\t\t});
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 268
        echo twig_escape_filter($this->env, base_url("facebook_accounts/home/hide_nodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tnodes: JSON.stringify(nodes),";
        // line 274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.response == \"ok\") {
\t\t\t\t\tfor (var i = 0; i < nodes.length; i++) {";
        // line 279
        if (($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "show_hidden_nodes", array(), "array") == 0)) {
            // line 280
            echo "\t\t\t\t\t\t\$(\"#\" + nodes[i]).css('background', '#ffcccc');
\t\t\t\t\t\t\$(\"#\" + nodes[i]).fadeOut(500, function () { \$(this).remove(); });";
        } else {
            // line 283
            echo "\t\t\t\t\t\t\$(\"#\" + nodes[i]).find(\".HiddenNodeBadge\").fadeIn(500, function () { \$(this).html(\"<span class='badge badge-danger HiddenNodeBadge'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("hidden")), "html", null, true);
            echo "</span>\"); });";
        }
        // line 285
        echo "\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox('";
        // line 290
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "', \"danger\", true, true);
\t\t\t}
});
});";
        // line 296
        echo "\t\t\$('.groupsOptions').on('click', '#unHideSelectedNodes', function () {
\t\t\tnodes = [];
\t\t\t// Get all checked nodes
\t\t\t\$('.groupName:visible .fbnode:checked').each(function () {
\t\t\t\tnodes.push(\$(this).val());
\t\t\t});
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 303
        echo twig_escape_filter($this->env, base_url("facebook_accounts/home/unhide_nodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tnodes: JSON.stringify(nodes),";
        // line 309
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.response == \"ok\") {
\t\t\t\t\tfor (var i = 0; i < nodes.length; i++) {
\t\t\t\t\t\t\$(\"#\" + nodes[i]).find(\".HiddenNodeBadge span\").fadeOut(100, function () { \$(this).remove(); });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox('";
        // line 320
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "', \"danger\", true, true);
\t\t\t}
});
});


\t\t\$('#toggleHiddenNodes').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 328
        echo twig_escape_filter($this->env, base_url("home/toggleHiddenNodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#toggleHiddenNodes').is(\":checked\") ? 1 : 0,";
        // line 334
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.status == \"ok\") {
\t\t\t\t\tlocation.reload();
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox('";
        // line 343
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "', \"danger\", true, true);
\t\t\t}
});
});

\t\t\$('#showGroups').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 350
        echo twig_escape_filter($this->env, base_url("home/toggleShowGroups"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#showGroups').is(\":checked\") ? 1 : 0,";
        // line 356
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.status == \"ok\") {
\t\t\t\t\tif (\$('#showGroups').is(\":checked\")) {
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\".GroupType\").remove();
\t\t\t\t\t\t\$(\".groupsCount\").html(\"0\");
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox('";
        // line 371
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "', \"danger\", true, true);
\t\t\t}
});
});

\t\t\$('#showPages').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 378
        echo twig_escape_filter($this->env, base_url("home/toggleShowPages"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#showPages').is(\":checked\") ? 1 : 0,";
        // line 384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.status == \"ok\") {
\t\t\t\t\tif (\$('#showPages').is(\":checked\") || !\$('#showGroups').is(\":checked\")) {
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\".PageType\").remove();
\t\t\t\t\t\t\$(\".pagesCount\").html(\"0\");
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox('";
        // line 399
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "', \"danger\", true, true);
\t\t\t}
});
});

\t\t\$('#showManagedPages').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 406
        echo twig_escape_filter($this->env, base_url("home/toggleNodesVisibility/show_managed_pages"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: {
\t\t\t\t\tstatus: \$('#showManagedPages').is(\":checked\") ? 1 : 0,";
        // line 412
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
},
\t\t\tsuccess: function (data, textStatus, jQxhr) {
\t\t\t\tif (data.status == \"ok\") {
\t\t\t\t\tlocation.reload();
\t\t\t\t}
\t\t\t},
\t\t\terror: function (jqXhr, textStatus, errorThrown) {
\t\t\t\tconsole.log(errorThrown);
\t\t\t\talertBox('";
        // line 421
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "', \"danger\", true, true);
\t\t\t}
});
});
});

\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "home/groupstable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 421,  704 => 412,  696 => 406,  686 => 399,  666 => 384,  658 => 378,  648 => 371,  628 => 356,  620 => 350,  610 => 343,  596 => 334,  588 => 328,  577 => 320,  561 => 309,  553 => 303,  544 => 296,  538 => 290,  531 => 285,  526 => 283,  522 => 280,  520 => 279,  511 => 274,  503 => 268,  494 => 261,  487 => 254,  463 => 233,  443 => 218,  435 => 212,  422 => 202,  417 => 200,  385 => 170,  374 => 159,  370 => 158,  365 => 155,  355 => 153,  351 => 152,  348 => 151,  340 => 146,  331 => 139,  318 => 127,  297 => 121,  292 => 118,  289 => 116,  283 => 114,  279 => 113,  274 => 112,  272 => 111,  266 => 108,  262 => 107,  257 => 104,  254 => 102,  249 => 100,  247 => 99,  244 => 97,  241 => 95,  238 => 93,  236 => 92,  234 => 91,  230 => 88,  227 => 87,  224 => 86,  215 => 85,  209 => 84,  205 => 83,  199 => 80,  193 => 79,  187 => 78,  179 => 75,  176 => 74,  173 => 72,  171 => 71,  169 => 69,  165 => 65,  163 => 64,  161 => 63,  158 => 61,  156 => 60,  154 => 58,  152 => 57,  150 => 56,  132 => 55,  130 => 53,  128 => 52,  122 => 48,  118 => 47,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  97 => 39,  93 => 38,  86 => 35,  84 => 34,  80 => 32,  73 => 27,  69 => 26,  66 => 25,  64 => 24,  58 => 21,  51 => 16,  47 => 15,  43 => 14,  39 => 12,  37 => 11,  35 => 10,  31 => 7,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default has-responsive-table">*/
/* 	{% if app_settings['disable_dt_plugin'] == 1 %}*/
/* 	<div class="panel-heading">*/
/* 		<input type="text" id="nodesFilterFiled" class="form-control" onkeyup="NodesFilter()" placeholder="{{ l('Search for groups and pages') }}">*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	<div class="panel-body">*/
/* 		<table class="table table-bordered table-striped dataTable tablesorter" id="groupsDataTable" width="100%">*/
/* 			<thead>*/
/* 				{% set checked = "" %}*/
/* 				{% if fbaccount.UserDefaultFbAccount() %}*/
/* 				<tr>*/
/* 					<td></td>*/
/* 					<td>{{ l('Timeline') }}</td>*/
/* 					<td colspan='3'>{{ l('VIEW_PROFILE') }}</td>*/
/* 					<td>{{ l('POST_STATUS') }}</td>*/
/* 				</tr>*/
/* 				<tr class='groupName' id='me'>*/
/* 					<td>*/
/* 						<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[0]' id='selectgroup_me' value='me'*/
/* 						 {{ checked }}>*/
/* 						<label for='selectgroup_me'></label>*/
/* 					</td>*/
/* 					<td class='groupTitle' id='group_me'>{{ fbaccountDetails.row('firstname') ~ " " ~ fbaccountDetails.row('lastname')*/
/* 						}}</td>*/
/* 					<td colspan='3'><a href='https://www.facebook.com/{{ fbaccount.UserDefaultFbAccount() }}' target='_blank'>*/
/* 							<i class="fa fa-external-link" aria-hidden="true"></i>&nbsp; {{ l('VIEW_PROFILE') }}</a>*/
/* 					</td>*/
/* 					<td><span class='postStatus_me postStatus'></span></td>*/
/* 				</tr>*/
/* 				{% endif %}*/
/* 				<tr class="thNodes">*/
/* 					<th width="20px" class="no-sort">*/
/* 						<input type='checkbox' id="checkbox-all" class="check-all checkbox-style" name='selectAllGroup' {% if*/
/* 						 input_post("selectAllGroup") %}checked{% endif %}>*/
/* 						<label for="checkbox-all"></label>*/
/* 					</th>*/
/* 					<th>{{ l('NODE_NAME') }}</th>*/
/* 					<th>{{ l('NODE_TYPE') }}</th>*/
/* 					<th>*/
/* 						<span class="hidden-xs">*/
/* 							{% if user_options['show_pages'] == 1 %}{{ l('Likes') }}{% endif %}*/
/* 							{% if user_options['show_pages'] == 1 and user_options['show_groups'] == 1 %}/{% endif %}*/
/* 							{% if user_options['show_groups'] == 1 %}{{ l('Members') }}{% endif %}*/
/* 						</span>*/
/* 					</th>*/
/* 					<th>{{ l('PRIVACY') }}</th>*/
/* 					<th>{{ l('POST_STATUS') }}</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody class="listNodesTable">*/
/* 				{% if load_nodes_ajax == false %}*/
/* 				{% set privacy = {"OPEN":'eye', 'CLOSED': 'eye-slash', 'SECRET': 'archive'} %}*/
/* */
/* 				{% for node in userFbNodes %}*/
/* 				{% set nodeId = node.id %}*/
/* 				{% set nodeName = node.name %}*/
/* 				{% set page_likes = "" %}*/
/* */
/* 				{% if node.privacy is not empty %}*/
/* 				{% set nodeType = 'Group' %}*/
/* 				{% else %}*/
/* 				{% set nodeType = 'Page' %}*/
/* 				{% if node.likes %}*/
/* 				{% set page_likes = node.likes|number_format %}*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* */
/* 				{% set nodePrivacy = node.privacy ? node.privacy : '' %}*/
/* */
/* 				{% if input_post('selectGroup')[i] %}*/
/* 				{% set checked = "checked='checked'" %}*/
/* 				{% endif %}*/
/* */
/* 				<tr class='groupName nodeName {{ nodeType }}Type' id='{{ nodeId }}'>*/
/* */
/* 					<td>*/
/* 						<input type='checkbox' class='fbnode checkbox checkbox-style' name='selectGroup[{{ loop.index }}]' id='selectgroup_{{ node.id }}'*/
/* 						 value='{{ nodeId }}' {{ checked }}>*/
/* 						<label for='selectgroup_{{ nodeId }}'></label>*/
/* 					</td>*/
/* */
/* 					<td class='groupTitle nodeTitle' id='group_{{ nodeId }}'>*/
/* 						<input type='hidden' name='selectGroupName[{{loop.index }}]' value='{{ nodeName }}' />*/
/* 						<span {% if less_data==FALSE %}title="{{ nodeName }}" {% endif %}>{{ nodeName[0:60] }}{% if nodeName|length > 60*/
/* 							%}...{% endif %}*/
/* */
/* 							<a href='https://fb.com/{{ nodeId }}' target='_blank'>*/
/* 								<i class="fas fa-external-link-alt"></i></a></span>*/
/* */
/* 						{% if user_options['show_hidden_nodes'] == 1 %}*/
/* 						{% if nodeType == "Group" %}*/
/* 						{% set hiddenNodesIDs = json_decode(hiddenNodes.row('hidden_groups'),TRUE) %}*/
/* 						{% else %}*/
/* 						{% set hiddenNodesIDs = json_decode(hiddenNodes.row('hidden_pages'),TRUE) %}*/
/* 						{% endif %}*/
/* */
/* 						<span class="HiddenNodeBadge">*/
/* 							{% if nodeId in hiddenNodesIDs %}*/
/* 							<span class="badge badge-danger">{{ l('hidden') }}</span>*/
/* 							{% endif %}*/
/* 						</span>*/
/* 						{% endif %}*/
/* */
/* 					</td>*/
/* */
/* 					<td class="nodeType">{{ l(nodeType) }}</td>*/
/* 					<td class="count">{{ node.members.summary.total_count }}{{ page_likes }}</td>*/
/* */
/* 					<td class="privacyAndLikes">*/
/* 						{% if node.privacy is not empty %}*/
/* 						<i class="fa fa-{{ privacy[nodePrivacy] }}"></i>*/
/* 						&nbsp;<span class="hidden-xs">{{ l(nodePrivacy) }}</span>*/
/* 						<input type='hidden' name='selectGroupPrivacy[{{ loop.index }}]' value='{{ nodePrivacy }}'>*/
/* 						{% else %}*/
/* 						-*/
/* 						{% endif %}*/
/* 					</td>*/
/* */
/* 					<td>*/
/* 						<span class='postStatus_{{ nodeId }} postStatus'></span>*/
/* 					</td>*/
/* 				</tr>*/
/* 				{% else %}*/
/* 				{% endfor %}*/
/* 				{% else %}*/
/* 				<tr>*/
/* 					<td colspan="6">*/
/* 						<div class="mpreloader">*/
/* 							<div class="loader">*/
/* 								<svg class="circular" viewBox="25 25 50 50">*/
/* 									<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />*/
/* 								</svg>*/
/* 							</div>*/
/* 						</div>*/
/* 					</td>*/
/* 				</tr>*/
/* 				{% endif %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 		<div id="addToCategoryModal" class="modal fade" role="dialog" data-backdrop="static">*/
/* 			<div class="modal-dialog">*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{ l("ADD_GROUP_TO_CATEGORY") }}</h4>*/
/* 					</div>*/
/* 					<div class="modal-body">*/
/* 						<div class="addCateMsgBoxModal"></div>*/
/* 						<select class="form-control nodescategory">*/
/* 							<option value="">-- {{ l('All') }} --</option>*/
/* 							{% for gc in nodesCategories %}*/
/* 							<option value="{{ gc.id }}">{{ gc.category_name }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<button class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</button>*/
/* 						<button onclick="return false;" id="modalAddCateBtn" class="btn btn-primary">{{ l("ADD") }}</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<script>*/
/* 		$(function () {*/
/* */
/* 			{# Count selected groups #}*/
/* 			$('#checkbox-all,.fbnode').on('change', function () {*/
/* 				var countPages = 0;*/
/* 				var countGroups = 0;*/
/* 				$('.GroupType:visible .fbnode:checked').each(function () {*/
/* 					if ($(this).val() != "on") {*/
/* 						countGroups++;*/
/* 					}*/
/* 				});*/
/* 				$('.PageType:visible .fbnode:checked').each(function () {*/
/* 					if ($(this).val() != "on") {*/
/* 						countPages++;*/
/* 					}*/
/* 				});*/
/* 				$('#countSelectedNodes .pages').text(countPages);*/
/* 				$('#countSelectedNodes .groups').text(countGroups);*/
/* 				$('#countSelectedNodes .total').text(countPages + countGroups);*/
/* 				$('#countSelectedNodes').show();*/
/* 			});*/
/* */
/* 			$("#exportGroupsCSV").on("click", function () {*/
/* 				var csvContent = 'group';*/
/* 				var totalGroups = 0;*/
/* 				$('.GroupType:visible .fbnode:checked').each(function () {*/
/* 					if ($(this).val() != "on") {*/
/* 						csvContent += '\r\n' + $(this).val() + ',';*/
/* 						totalGroups++;*/
/* 					}*/
/* 				});*/
/* */
/* 				if (totalGroups == 0) {*/
/* 					alertBox("{{l('No groups has been selected')}}", "danger", false, true, true);*/
/* 				} else {*/
/* 					alertBox(totalGroups + " {{l('Groups has been exported.')}}", "success", false, true, true);*/
/* 					exportToCSV(csvContent, 'groups-' + moment().format('DD-MMM-YYYY') + '.csv', 'text/csv;encoding:utf-8');*/
/* 				}*/
/* 			});*/
/* */
/* 			*/
/* 			$('.groupsOptions').on('click', '#deleteCategory', function (e) {*/
/* 				e.preventDefault();*/
/* 				$("#deleteCategory").prop('disabled', true);*/
/* 				$.ajax({*/
/* 					url: '{{ base_url("nodes_categories/delete_category") }}',*/
/* 					dataType: 'json',*/
/* 					type: 'post',*/
/* 					contentType: 'application/x-www-form-urlencoded',*/
/* 					data: {*/
/* 						categoryID: $("#deleteCategory").val(),*/
/* {{ config_item('csrf_token_name') }} : getCookie("{{ config_item('csrf_cookie_name') }}"),*/
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.status == "success") {*/
/* 					if (data.message !== null && typeof data.message === 'object') {*/
/* 						htmlData = "<ul>";*/
/* 						Object.keys(data.message).forEach(function (key) {*/
/* 							htmlData += "<li>" + data.message[key] + "</li>";*/
/* 						});*/
/* 						htmlData += "</ul>";*/
/* */
/* 					} else {*/
/* 						htmlData = data.message;*/
/* 					}*/
/* 					setTimeout(function () {*/
/* 						window.location.replace('{{ base_url() }}');*/
/* 					}, 1000);*/
/* 					alertBox(htmlData, "success", false, true, true)*/
/* 				} else {*/
/* 					if (data.message !== null && typeof data.message === 'object') {*/
/* 						htmlData = "<ul>";*/
/* 						Object.keys(data.message).forEach(function (key) {*/
/* 							htmlData += "<li>" + data.message[key] + "</li>";*/
/* 						});*/
/* 						htmlData += "</ul>";*/
/* 					} else {*/
/* 						htmlData = data.message;*/
/* 					}*/
/* 					alertBox(htmlData, "danger", false, false, true);*/
/* 				}*/
/* */
/* 				$("#deleteCategory").prop('disabled', false);*/
/* */
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox("{{ l('Unable to complete your request, Please try again') }}", "danger", true, false, true);*/
/* 				$("#deleteCategory").prop('disabled', false);*/
/* 			}*/
/* });*/
/* });*/
/* */
/* 		{# Hide nodes #}*/
/* 		$('.groupsOptions').on('click', '#hideSelectedNodes', function () {*/
/* 			nodes = [];*/
/* 			// Get all checked nodes*/
/* 			$('.groupName:visible .fbnode:checked').each(function () {*/
/* 				nodes.push($(this).val());*/
/* 			});*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("facebook_accounts/home/hide_nodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					nodes: JSON.stringify(nodes),*/
/* {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.response == "ok") {*/
/* 					for (var i = 0; i < nodes.length; i++) {*/
/* 						{% if user_options['show_hidden_nodes'] == 0 %}*/
/* 						$("#" + nodes[i]).css('background', '#ffcccc');*/
/* 						$("#" + nodes[i]).fadeOut(500, function () { $(this).remove(); });*/
/* 						{% else %}*/
/* 						$("#" + nodes[i]).find(".HiddenNodeBadge").fadeIn(500, function () { $(this).html("<span class='badge badge-danger HiddenNodeBadge'>{{ l('hidden') }}</span>"); });*/
/* 						{% endif %}*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox('{{ l('Unable to complete your request') }}', "danger", true, true);*/
/* 			}*/
/* });*/
/* });*/
/* */
/* 		{# unHide nodes #}*/
/* 		$('.groupsOptions').on('click', '#unHideSelectedNodes', function () {*/
/* 			nodes = [];*/
/* 			// Get all checked nodes*/
/* 			$('.groupName:visible .fbnode:checked').each(function () {*/
/* 				nodes.push($(this).val());*/
/* 			});*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("facebook_accounts/home/unhide_nodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					nodes: JSON.stringify(nodes),*/
/* {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.response == "ok") {*/
/* 					for (var i = 0; i < nodes.length; i++) {*/
/* 						$("#" + nodes[i]).find(".HiddenNodeBadge span").fadeOut(100, function () { $(this).remove(); });*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox('{{ l('Unable to complete your request') }}', "danger", true, true);*/
/* 			}*/
/* });*/
/* });*/
/* */
/* */
/* 		$('#toggleHiddenNodes').on('click', function () {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleHiddenNodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#toggleHiddenNodes').is(":checked") ? 1 : 0,*/
/* {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.status == "ok") {*/
/* 					location.reload();*/
/* 				}*/
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox('{{ l('Unable to complete your request') }}', "danger", true, true);*/
/* 			}*/
/* });*/
/* });*/
/* */
/* 		$('#showGroups').on('click', function () {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleShowGroups") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#showGroups').is(":checked") ? 1 : 0,*/
/* {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.status == "ok") {*/
/* 					if ($('#showGroups').is(":checked")) {*/
/* 						location.reload();*/
/* 					} else {*/
/* 						$(".GroupType").remove();*/
/* 						$(".groupsCount").html("0");*/
/* 						location.reload();*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox('{{ l('Unable to complete your request') }}', "danger", true, true);*/
/* 			}*/
/* });*/
/* });*/
/* */
/* 		$('#showPages').on('click', function () {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleShowPages") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#showPages').is(":checked") ? 1 : 0,*/
/* {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.status == "ok") {*/
/* 					if ($('#showPages').is(":checked") || !$('#showGroups').is(":checked")) {*/
/* 						location.reload();*/
/* 					} else {*/
/* 						$(".PageType").remove();*/
/* 						$(".pagesCount").html("0");*/
/* 						location.reload();*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox('{{ l('Unable to complete your request') }}', "danger", true, true);*/
/* 			}*/
/* });*/
/* });*/
/* */
/* 		$('#showManagedPages').on('click', function () {*/
/* 			$.ajax({*/
/* 				url: '{{ base_url("home/toggleNodesVisibility/show_managed_pages") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: {*/
/* 					status: $('#showManagedPages').is(":checked") ? 1 : 0,*/
/* {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* },*/
/* 			success: function (data, textStatus, jQxhr) {*/
/* 				if (data.status == "ok") {*/
/* 					location.reload();*/
/* 				}*/
/* 			},*/
/* 			error: function (jqXhr, textStatus, errorThrown) {*/
/* 				console.log(errorThrown);*/
/* 				alertBox('{{ l('Unable to complete your request') }}', "danger", true, true);*/
/* 			}*/
/* });*/
/* });*/
/* });*/
/* */
/* 	</script>*/
/* </div>*/
