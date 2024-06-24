<?php

/* insights.twig */
class __TwigTemplate_5dab4857a09fbf7b9b85bec09ffa751ff80aca33447c856fcc4a1bf0eb575200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "insights.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Insights")), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"panel-group\" id=\"accordion\">

<div class=\"panel panel-default posts\">
\t<div class=\"panel-heading\">
\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#panel-publishing\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t<i class=\"far fa-chart-bar\" aria-hidden=\"true\"></i>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publishing")), "html", null, true);
        echo "
\t\t\t</h3>
\t\t</a>
\t</div>
\t<div id=\"panel-publishing\" class=\"panel-collapse collapse in\">
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Today")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success pull-right\">";
        // line 27
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 31
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 7 days")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success badge-success pull-right\">";
        // line 48
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 52
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 56
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_week"]) ? $context["Insights_num_week"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 30 days")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success pull-right\">";
        // line 69
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 73
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 77
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_month"]) ? $context["Insights_num_month"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All time")), "html", null, true);
        echo "</div>
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t    <div class=\"col-xs-12 text-success\">";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Success")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-success pull-right\">";
        // line 90
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-danger\">";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Fail")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge badge-danger pull-right\">";
        // line 94
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts_fail"), "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"col-xs-12 text-primary pull-right\">";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Processed")), "html", null, true);
        echo " : 
\t\t\t\t\t\t    \t<span class=\"badge pull-right\">";
        // line 98
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts"), "method") + abs($this->getAttribute((isset($context["Insights_num_alltime"]) ? $context["Insights_num_alltime"] : null), "row", array(0 => "posts_fail"), "method"))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row chart\">
\t\t      <div class=\"col-xs-12 col-md-6\">
\t\t        <div class=\"panel panel-default\">
\t\t          <div class=\"panel-heading\">";
        // line 109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 7 days")), "html", null, true);
        echo "</div>
\t\t          <div class=\"panel-body\">
\t\t            <div id=\"last_7_days\"></div>
\t\t          </div>
\t\t        </div>
\t\t      </div>
\t\t      <div class=\"col-xs-12 col-md-6\">
\t\t        <div class=\"panel panel-default\">
\t\t          <div class=\"panel-heading\">";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 30 days")), "html", null, true);
        echo "</div>
\t\t          <div class=\"panel-body\">
\t\t            <div id=\"p_last_30_days\">
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t      </div>
\t\t    </div>
\t\t</div>
\t</div>
</div>";
        // line 129
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && KPMIsActive("auto_comment"))) {
            // line 130
            $this->loadTemplate("@comments/components/insights.twig", "insights.twig", 130)->display($context);
        }
        // line 133
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "likes"), "method") && KPMIsActive("auto_like"))) {
            // line 134
            $this->loadTemplate("@autolike/components/insights.twig", "insights.twig", 134)->display($context);
        }
        // line 137
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "join_groups"), "method") && KPMIsActive("join_groups"))) {
            // line 138
            $this->loadTemplate("@join_groups/insights.twig", "insights.twig", 138)->display($context);
        }
        // line 141
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "invite_join_groups"), "method") && KPMIsActive("invite_join_groups"))) {
            // line 142
            $this->loadTemplate("@invite_join_groups/insights.twig", "insights.twig", 142)->display($context);
        }
        // line 144
        echo "
</div>

<div class=\"row\">
\t<div class=\"col-xs-12 col-md-6\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>";
        // line 152
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My facebook accounts")), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 159
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total FB accounts")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 161
        echo twig_escape_filter($this->env, abs((isset($context["total_fb_account"]) ? $context["total_fb_account"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total Groups")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 169
        echo twig_escape_filter($this->env, abs((isset($context["total_groups"]) ? $context["total_groups"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 175
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Total pages")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 177
        echo twig_escape_filter($this->env, abs((isset($context["total_pages"]) ? $context["total_pages"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t<div class=\"col-xs-12 col-md-6\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-database\" aria-hidden=\"true\"></i>";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My data")), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Saved posts")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 198
        echo twig_escape_filter($this->env, abs((isset($context["total_sposts"]) ? $context["total_sposts"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t  <div class=\"panel-heading\">";
        // line 204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t    <strong>";
        // line 206
        echo twig_escape_filter($this->env, abs((isset($context["total_schedules"]) ? $context["total_schedules"] : null)), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-xs-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
        // line 221
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My account")), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    <span class=\"badge";
        // line 229
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_posts"), "method") == $this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method"))) {
            // line 230
            echo "\t\t\t\t\t\t    badge-danger";
        }
        // line 231
        echo "\">";
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "posts"), "method")), "html", null, true);
        echo " /";
        // line 232
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_posts"), "method") == 0)) {
            // line 233
            echo "\t\t\t\t\t\t    \t<strong>&infin;</strong>";
        } else {
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_posts"), "method"), "html", null, true);
        }
        // line 236
        echo "</span>";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts per day")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    <span class=\"badge";
        // line 240
        if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method") == (isset($context["total_fb_account"]) ? $context["total_fb_account"] : null)))) {
            // line 241
            echo "\t\t\t\t\t\t    badge-danger";
        }
        // line 242
        echo "\">";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["total_fb_account"]) ? $context["total_fb_account"] : null), "html", null, true);
        echo " /";
        // line 244
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method") == 0)) {
            // line 245
            echo "\t\t\t\t\t\t    \t<strong>&infin;</strong>";
        } else {
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_fbaccount"), "method"), "html", null, true);
        }
        // line 248
        echo "</span>";
        // line 249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Accounts")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>";
        // line 252
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true)) {
            // line 253
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">";
            // line 254
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") == "-1")) {
                // line 255
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>";
            } else {
                // line 257
                echo "\t\t\t\t\t\t    <span class=\"badge";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "comments"), "method"))))) {
                    // line 258
                    echo "\t\t\t\t\t\t    badge-danger";
                }
                // line 259
                echo "\">";
                // line 260
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "comments"), "method")), "html", null, true);
                echo " /";
                // line 261
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method") == 0)) {
                    // line 262
                    echo "\t\t\t\t\t\t\t    \t<strong>&infin;</strong>";
                } else {
                    // line 264
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_comments"), "method"), "html", null, true);
                }
                // line 266
                echo "\t\t\t\t\t\t\t</span>";
            }
            // line 268
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto comments")), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>";
        }
        // line 272
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_like", array(), "any", true, true)) {
            // line 273
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">";
            // line 274
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") == "-1")) {
                // line 275
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>";
            } else {
                // line 277
                echo "\t\t\t\t\t\t\t    <span class=\"badge";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "likes"), "method"))))) {
                    // line 278
                    echo "\t\t\t\t\t\t\t    badge-danger";
                }
                // line 279
                echo "\">";
                // line 280
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "likes"), "method")), "html", null, true);
                echo " /";
                // line 281
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method") == 0)) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t    \t<strong>&infin;</strong>";
                } else {
                    // line 284
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_likes"), "method"), "html", null, true);
                }
                // line 286
                echo "\t\t\t\t\t\t\t\t</span>";
            }
            // line 288
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto likes")), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>";
        }
        // line 292
        if (KPMIsActive("join_groups")) {
            // line 293
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">";
            // line 294
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") == "-1")) {
                // line 295
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>";
            } else {
                // line 297
                echo "\t\t\t\t\t\t\t    <span class=\"badge";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "join_groups"), "method"))))) {
                    // line 298
                    echo "\t\t\t\t\t\t\t    badge-danger";
                }
                // line 299
                echo "\">";
                // line 300
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "join_groups"), "method")), "html", null, true);
                echo " /";
                // line 301
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method") == 0)) {
                    // line 302
                    echo "\t\t\t\t\t\t\t\t    \t<strong>&infin;</strong>";
                } else {
                    // line 304
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "join_groups"), "method"), "html", null, true);
                }
                // line 306
                echo "\t\t\t\t\t\t\t\t</span>";
            }
            // line 308
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Join group request")), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>";
        }
        // line 313
        if (KPMIsActive("invite_join_groups")) {
            // line 314
            echo "\t\t\t\t\t\t  <li class=\"list-group-item\">";
            // line 315
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") == "-1")) {
                // line 316
                echo "\t\t\t\t\t\t  \t\t<span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
                echo "</span>";
            } else {
                // line 318
                echo "\t\t\t\t\t\t\t    <span class=\"badge";
                if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") == abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "invite_join_groups"), "method"))))) {
                    // line 319
                    echo "\t\t\t\t\t\t\t    badge-danger";
                }
                // line 320
                echo "\">";
                // line 321
                echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["Insights_num_day"]) ? $context["Insights_num_day"] : null), "row", array(0 => "invite_join_groups"), "method")), "html", null, true);
                echo " /";
                // line 322
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method") == 0)) {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t    \t<strong>&infin;</strong>";
                } else {
                    // line 325
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "invite_join_groups"), "method"), "html", null, true);
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t</span>";
            }
            // line 329
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Invite Join group")), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Per day")), "html", null, true);
            echo "
\t\t\t\t\t\t  </li>";
        }
        // line 332
        echo "

\t\t\t\t\t\t  <li class=\"list-group-item\">";
        // line 335
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "upload_images"), "method") == 1)) {
            // line 336
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enabled")), "html", null, true);
            echo "</span>";
        } else {
            // line 338
            echo "\t\t\t\t\t\t   \t\t<span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "</span>";
        }
        // line 340
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Images")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"list-group-item\">";
        // line 343
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "upload_videos"), "method") == 1)) {
            // line 344
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Enabled")), "html", null, true);
            echo "</span>";
        } else {
            // line 346
            echo "\t\t\t\t\t\t   \t\t<span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Disabled")), "html", null, true);
            echo "</span>";
        }
        // line 348
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Videos")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <li class=\"list-group-item\">";
        // line 352
        if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") != 0) && ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") <= (isset($context["storageSize"]) ? $context["storageSize"] : null)))) {
            // line 353
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-danger\">";
            // line 354
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["storageSize"]) ? $context["storageSize"] : null) / 1000)), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
            echo "  /";
        } else {
            // line 356
            echo "\t\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 357
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["storageSize"]) ? $context["storageSize"] : null) / 1000), 1), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
            echo "  /";
        }
        // line 360
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") == 0)) {
            // line 361
            echo "\t\t\t\t\t\t    \t<strong>&infin;</strong>";
        } else {
            // line 363
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "max_upload"), "method") / 1000)), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MB")), "html", null, true);
        }
        // line 364
        echo "</span>";
        // line 365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Usage")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t  <li class=\"list-group-item\">";
        // line 373
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "account_expiry"), "method") == 0)) {
            // line 374
            echo "\t\t\t\t\t\t    \t<span class=\"badge badge-success\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Never")), "html", null, true);
            echo "</span>";
        } else {
            // line 376
            echo "\t\t\t\t\t\t   \t\t<span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "expire_on", array(), "array"), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "</span>";
        }
        // line 378
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Account expiry in")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t\t    <span class=\"badge\">";
        // line 381
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "row", array(0 => "name"), "method")))), "html", null, true);
        echo "</span>";
        // line 382
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Package")), "html", null, true);
        echo "
\t\t\t\t\t\t  </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t</div>
</div>";
    }

    // line 394
    public function block_javascripts($context, array $blocks = array())
    {
        // line 395
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/charts.js"), "html", null, true);
        echo "\"></script>
\t<script>google.charts.load('current', {'packages':['corechart']});</script>
\t<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 401
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 402
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
   \t\tgoogle.charts.setOnLoadCallback(drawChart);
   \t\tkp_preloader(\"on\",\".posts .chart .panel-body\");
    \tfunction drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', '";
        // line 408
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts failed")), "html", null, true);
        echo "'],";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Insights_week"]) ? $context["Insights_week"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 410
            echo "          \t['";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "created_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts_fail", array()), "html", null, true);
            echo "],";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 412
            echo "          \t['',0,0]";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "        ]);

        var options = {title: '";
        // line 416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 7 days")), "html", null, true);
        echo "',curveType: 'none',legend: { position: 'top' }};

        var chart = new google.visualization.AreaChart(document.getElementById('last_7_days'));
        chart.draw(data, options);

        var data = google.visualization.arrayToDataTable([
          ['Day', '";
        // line 422
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts failed")), "html", null, true);
        echo "'],";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Insights_month"]) ? $context["Insights_month"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 424
            echo "          \t['";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "created_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "posts_fail", array()), "html", null, true);
            echo "],";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 426
            echo "          \t['',0,0]";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "        ]);

        var options = {title: '";
        // line 430
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last 30 days")), "html", null, true);
        echo "s',curveType: 'none',legend: { position: 'top' }};
       
        var chart = new google.visualization.AreaChart(document.getElementById('p_last_30_days'));
        chart.draw(data, options);
        kp_preloader(\"off\",\".posts .chart .panel-body\");
      }
    </script>";
    }

    public function getTemplateName()
    {
        return "insights.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  807 => 430,  803 => 428,  797 => 426,  786 => 424,  781 => 423,  776 => 422,  767 => 416,  763 => 414,  757 => 412,  746 => 410,  741 => 409,  736 => 408,  727 => 402,  724 => 401,  719 => 398,  714 => 396,  710 => 395,  707 => 394,  694 => 382,  691 => 381,  685 => 378,  680 => 376,  675 => 374,  673 => 373,  663 => 365,  661 => 364,  657 => 363,  654 => 361,  652 => 360,  647 => 357,  645 => 356,  640 => 354,  638 => 353,  636 => 352,  630 => 348,  625 => 346,  620 => 344,  618 => 343,  613 => 340,  608 => 338,  603 => 336,  601 => 335,  597 => 332,  591 => 329,  588 => 327,  585 => 325,  582 => 323,  580 => 322,  577 => 321,  575 => 320,  572 => 319,  569 => 318,  564 => 316,  562 => 315,  560 => 314,  558 => 313,  552 => 308,  549 => 306,  546 => 304,  543 => 302,  541 => 301,  538 => 300,  536 => 299,  533 => 298,  530 => 297,  525 => 295,  523 => 294,  521 => 293,  519 => 292,  513 => 288,  510 => 286,  507 => 284,  504 => 282,  502 => 281,  499 => 280,  497 => 279,  494 => 278,  491 => 277,  486 => 275,  484 => 274,  482 => 273,  480 => 272,  474 => 268,  471 => 266,  468 => 264,  465 => 262,  463 => 261,  460 => 260,  458 => 259,  455 => 258,  452 => 257,  447 => 255,  445 => 254,  443 => 253,  441 => 252,  437 => 249,  435 => 248,  432 => 247,  429 => 245,  427 => 244,  424 => 243,  422 => 242,  419 => 241,  417 => 240,  411 => 237,  409 => 236,  406 => 235,  403 => 233,  401 => 232,  397 => 231,  394 => 230,  392 => 229,  381 => 221,  363 => 206,  358 => 204,  349 => 198,  344 => 196,  334 => 189,  319 => 177,  314 => 175,  305 => 169,  300 => 167,  291 => 161,  286 => 159,  276 => 152,  266 => 144,  263 => 142,  261 => 141,  258 => 138,  256 => 137,  253 => 134,  251 => 133,  248 => 130,  246 => 129,  233 => 117,  222 => 109,  208 => 98,  204 => 97,  199 => 94,  195 => 93,  190 => 90,  186 => 89,  180 => 85,  169 => 77,  165 => 76,  160 => 73,  156 => 72,  151 => 69,  147 => 68,  141 => 64,  130 => 56,  126 => 55,  121 => 52,  117 => 51,  112 => 48,  108 => 47,  102 => 43,  91 => 35,  87 => 34,  82 => 31,  78 => 30,  73 => 27,  69 => 26,  63 => 23,  51 => 14,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}{{ l('Insights') }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* */
/* <div class="panel-group" id="accordion">*/
/* */
/* <div class="panel panel-default posts">*/
/* 	<div class="panel-heading">*/
/* 		<a data-toggle="collapse" data-parent="#accordion" href="#panel-publishing">*/
/* 			<h3 class="panel-title">*/
/* 				<i class="far fa-chart-bar" aria-hidden="true"></i> {{ l("Publishing") }}*/
/* 			</h3>*/
/* 		</a>*/
/* 	</div>*/
/* 	<div id="panel-publishing" class="panel-collapse collapse in">*/
/* 		<div class="panel-body">*/
/* 			<div class="row">*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('Today') }}</div>*/
/* 					  <div class="panel-body">*/
/* 						<div class="row">*/
/* 						    <div class="col-xs-12 text-success">{{ l('Success') }} : */
/* 						    	<span class="badge badge-success pull-right">{{ Insights_num_day.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_day.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_day.row('posts')+Insights_num_day.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('Last 7 days') }}</div>*/
/* 					  <div class="panel-body">*/
/* 					  	<div class="row">*/
/* 						    <div class="col-xs-12 text-success">*/
/* 						    	{{ l('Success') }} : */
/* 						    	<span class="badge badge-success badge-success pull-right">{{ Insights_num_week.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_week.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_week.row('posts')+Insights_num_week.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('Last 30 days') }}</div>*/
/* 					  <div class="panel-body">*/
/* 					  	<div class="row">*/
/* 						    <div class="col-xs-12 text-success">*/
/* 						    	{{ l('Success') }} : */
/* 						    	<span class="badge badge-success pull-right">{{ Insights_num_month.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_month.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_month.row('posts')+Insights_num_month.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-3">*/
/* 					<div class="panel panel-default">*/
/* 					  <div class="panel-heading">{{ l('All time') }}</div>*/
/* 					  <div class="panel-body">*/
/* 					  	<div class="row">*/
/* 						    <div class="col-xs-12 text-success">*/
/* 						    	{{ l('Success') }} : */
/* 						    	<span class="badge badge-success pull-right">{{ Insights_num_alltime.row('posts')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-danger">*/
/* 						    	{{ l('Fail') }} : */
/* 						    	<span class="badge badge-danger pull-right">{{ Insights_num_alltime.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						    <div class="col-xs-12 text-primary pull-right">*/
/* 						    	{{ l('Total Processed') }} : */
/* 						    	<span class="badge pull-right">{{ Insights_num_alltime.row('posts')+Insights_num_alltime.row('posts_fail')|abs }}</span>*/
/* 						    </div>*/
/* 						</div>*/
/* 					  </div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row chart">*/
/* 		      <div class="col-xs-12 col-md-6">*/
/* 		        <div class="panel panel-default">*/
/* 		          <div class="panel-heading">{{ l('Last 7 days') }}</div>*/
/* 		          <div class="panel-body">*/
/* 		            <div id="last_7_days"></div>*/
/* 		          </div>*/
/* 		        </div>*/
/* 		      </div>*/
/* 		      <div class="col-xs-12 col-md-6">*/
/* 		        <div class="panel panel-default">*/
/* 		          <div class="panel-heading">{{ l('Last 30 days') }}</div>*/
/* 		          <div class="panel-body">*/
/* 		            <div id="p_last_30_days">*/
/* 		            </div>*/
/* 		          </div>*/
/* 		        </div>*/
/* 		      </div>*/
/* 		    </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if user.canUse("comments") and KPMIsActive('auto_comment') %}*/
/*   {% include "@comments/components/insights.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("likes") and KPMIsActive('auto_like') %}*/
/*   {% include "@autolike/components/insights.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("join_groups") and KPMIsActive('join_groups') %}*/
/*   {% include "@join_groups/insights.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("invite_join_groups") and KPMIsActive('invite_join_groups') %}*/
/*   {% include "@invite_join_groups/insights.twig" %}*/
/* {% endif %}*/
/* */
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-xs-12 col-md-6">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">*/
/* 					<i class="fab fa-facebook-f" aria-hidden="true"></i> {{ l("My facebook accounts") }}*/
/* 				</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12 col-sm-4">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Total FB accounts') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_fb_account|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-4">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Total Groups') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_groups|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-4">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Total pages') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_pages|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 	</div>*/
/* 	<div class="col-xs-12 col-md-6">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">*/
/* 					<i class="fa fa-database" aria-hidden="true"></i> {{ l("My data") }}*/
/* 				</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-6">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Saved posts') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_sposts|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-6">*/
/* 						<div class="panel panel-default">*/
/* 						  <div class="panel-heading">{{ l('Schedules') }}</div>*/
/* 						  <div class="panel-body">*/
/* 						    <strong>{{ total_schedules|abs }}</strong>*/
/* 						  </div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-xs-12">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">*/
/* 					<i class="fa fa-user" aria-hidden="true"></i> {{ l("My account") }}*/
/* 				</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12 col-sm-6">*/
/* 						<ul class="list-group">*/
/* 						  <li class="list-group-item">*/
/* 						    <span class="badge {% if group.row('max_posts') == Insights_num_day.row('posts') %}*/
/* 						    badge-danger*/
/* 							{% endif %}">{{ Insights_num_day.row('posts')|abs }} / */
/* 						    {% if group.row('max_posts') ==  0 %}*/
/* 						    	<strong>&infin;</strong>*/
/* 						   	{% else %}*/
/* 						   		{{ group.row('max_posts') }}*/
/* 						    {% endif %}</span>*/
/* 						    {{ l('Posts per day') }}*/
/* 						  </li>*/
/* 						  <li class="list-group-item">*/
/* 						    <span class="badge {% if group.row('max_fbaccount') != 0 and group.row('max_fbaccount') == total_fb_account %}*/
/* 						    badge-danger*/
/* 							{% endif %}">*/
/* 							{{ total_fb_account }} / */
/* 						    {% if group.row('max_fbaccount') ==  0 %}*/
/* 						    	<strong>&infin;</strong>*/
/* 						   	{% else %}*/
/* 						   		{{ group.row('max_fbaccount') }}*/
/* 						    {% endif %}</span>*/
/* 						    {{ l('Facebook Accounts') }}*/
/* 						  </li>*/
/* */
/* 						  {% if kpModules.auto_comment is defined %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('max_comments') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 						    <span class="badge {% if group.row('max_comments') != 0 and group.row('max_comments') == Insights_num_day.row('comments')|abs %}*/
/* 						    badge-danger*/
/* 							{% endif %}">*/
/* 								{{ Insights_num_day.row('comments')|abs }} / */
/* 							    {% if group.row('max_comments') ==  0 %}*/
/* 							    	<strong>&infin;</strong>*/
/* 							   	{% else %}*/
/* 							   		{{ group.row('max_comments') }}*/
/* 							    {% endif %}*/
/* 							</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Auto comments') }} {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* 						  {% if kpModules.auto_like is defined %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('max_likes') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 							    <span class="badge {% if group.row('max_likes') != 0 and group.row('max_likes') == Insights_num_day.row('likes')|abs %}*/
/* 							    badge-danger*/
/* 								{% endif %}">*/
/* 									{{ Insights_num_day.row('likes')|abs }} / */
/* 								    {% if group.row('max_likes') ==  0 %}*/
/* 								    	<strong>&infin;</strong>*/
/* 								   	{% else %}*/
/* 								   		{{ group.row('max_likes') }}*/
/* 								    {% endif %}*/
/* 								</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Auto likes') }}  {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* 						  {% if KPMIsActive("join_groups") %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('join_groups') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 							    <span class="badge {% if group.row('join_groups') != 0 and group.row('join_groups') == Insights_num_day.row('join_groups')|abs %}*/
/* 							    badge-danger*/
/* 								{% endif %}">*/
/* 									{{ Insights_num_day.row('join_groups')|abs }} / */
/* 								    {% if group.row('join_groups') ==  0 %}*/
/* 								    	<strong>&infin;</strong>*/
/* 								   	{% else %}*/
/* 								   		{{ group.row('join_groups') }}*/
/* 								    {% endif %}*/
/* 								</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Join group request') }}  {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* */
/* 						  {% if KPMIsActive("invite_join_groups") %}*/
/* 						  <li class="list-group-item">*/
/* 						  	{% if group.row('invite_join_groups') == '-1' %}*/
/* 						  		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						  	{% else %}*/
/* 							    <span class="badge {% if group.row('invite_join_groups') != 0 and group.row('invite_join_groups') == Insights_num_day.row('invite_join_groups')|abs %}*/
/* 							    badge-danger*/
/* 								{% endif %}">*/
/* 									{{ Insights_num_day.row('invite_join_groups')|abs }} / */
/* 								    {% if group.row('invite_join_groups') ==  0 %}*/
/* 								    	<strong>&infin;</strong>*/
/* 								   	{% else %}*/
/* 								   		{{ group.row('invite_join_groups') }}*/
/* 								    {% endif %}*/
/* 								</span>*/
/* 							{% endif %}*/
/* 						    {{ l('Invite Join group') }}  {{ l("Per day") }}*/
/* 						  </li>*/
/* 						  {% endif %}*/
/* */
/* */
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('upload_images') ==  1 %}*/
/* 						    	<span class="badge badge-success">{{ l('Enabled') }}</span>*/
/* 						   	{% else %}*/
/* 						   		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						    {% endif %}*/
/* 						    {{ l('Upload Images') }}*/
/* 						  </li>*/
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('upload_videos') ==  1 %}*/
/* 						    	<span class="badge badge-success">{{ l('Enabled') }}</span>*/
/* 						   	{% else %}*/
/* 						   		<span class="badge badge-danger">{{ l('Disabled') }}</span>*/
/* 						    {% endif %}*/
/* 						    {{ l('Upload Videos') }}*/
/* 						  </li>*/
/* 						  */
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('max_upload') != 0 and group.row('max_upload') <= storageSize %}*/
/* 						    	<span class="badge badge-danger">*/
/* 						    	{{ (storageSize/1000)|number_format }} {{ l('MB') }}  /*/
/* 							{% else %}*/
/* 								<span class="badge">*/
/* 								{{ (storageSize/1000)|number_format(1) }} {{ l('MB') }}  /	*/
/* 							{% endif %}*/
/* 							 */
/* 						    {% if group.row('max_upload') ==  0 %}*/
/* 						    	<strong>&infin;</strong>*/
/* 						   	{% else %}*/
/* 						   		{{ (group.row('max_upload')/1000)|number_format }} {{ l('MB') }}*/
/* 						    {% endif %}</span>*/
/* 						    {{ l('Upload Usage') }}*/
/* 						  </li>*/
/* */
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-6">*/
/* 						<ul class="list-group">*/
/* 						  <li class="list-group-item">*/
/* 						    {% if group.row('account_expiry') ==  0 %}*/
/* 						    	<span class="badge badge-success">{{ l('Never') }}</span>*/
/* 						   	{% else %}*/
/* 						   		<span class="badge">{{ current_user['expire_on']|date(date_format) }}</span>*/
/* 						    {% endif %}*/
/* 						    {{ l('Account expiry in') }}*/
/* 						  </li>*/
/* 						  <li class="list-group-item">*/
/* 						    <span class="badge">{{ l(group.row('name'))|capitalize }}</span>*/
/* 						    {{ l('Package') }}*/
/* 						  </li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/js/libs/charts.js') }}"></script>*/
/* 	<script>google.charts.load('current', {'packages':['corechart']});</script>*/
/* 	<script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/*     <script type="text/javascript">*/
/*    		google.charts.setOnLoadCallback(drawChart);*/
/*    		kp_preloader("on",".posts .chart .panel-body");*/
/*     	function drawChart() {*/
/*         var data = google.visualization.arrayToDataTable([*/
/*           ['Day', '{{ l('Posts') }}', '{{ l('Posts failed') }}'],*/
/*           {% for r in Insights_week %}*/
/*           	['{{ r.created_at|date(date_format) }}', {{ r.posts }}, {{ r.posts_fail }}],*/
/*           {% else %}*/
/*           	['',0,0]*/
/*           {% endfor %}*/
/*         ]);*/
/* */
/*         var options = {title: '{{ l('Last 7 days') }}',curveType: 'none',legend: { position: 'top' }};*/
/* */
/*         var chart = new google.visualization.AreaChart(document.getElementById('last_7_days'));*/
/*         chart.draw(data, options);*/
/* */
/*         var data = google.visualization.arrayToDataTable([*/
/*           ['Day', '{{ l('Posts') }}', '{{ l('Posts failed') }}'],*/
/*           {% for r in Insights_month %}*/
/*           	['{{ r.created_at|date(date_format) }}', {{ r.posts }}, {{ r.posts_fail }}],*/
/*           {% else %}*/
/*           	['',0,0]*/
/*           {% endfor %}*/
/*         ]);*/
/* */
/*         var options = {title: '{{ l('Last 30 days') }}s',curveType: 'none',legend: { position: 'top' }};*/
/*        */
/*         var chart = new google.visualization.AreaChart(document.getElementById('p_last_30_days'));*/
/*         chart.draw(data, options);*/
/*         kp_preloader("off",".posts .chart .panel-body");*/
/*       }*/
/*     </script>*/
/* {% endblock %}*/
