<?php

/* settings/components/app_settings/cron_jobs.twig */
class __TwigTemplate_f0e3a5617dd86b1bc29a4e69905944466351cfdd8956b014f8ab2722e9e667bf extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
<div class=\"panel-heading\">
  <h4 class=\"panel-title\">
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#cron_jobs\">
    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
  <span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Cron jobs")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"cron_jobs\" class=\"panel-collapse collapse\">
  <div class=\"panel-body\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"input-group\">
          <div>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule post cronjob tab")), "html", null, true);
        echo " : </div>
          <input type=\"text\" class=\"form-control\" style=\"color:darkred\" value=\"wget -O --spider";
        // line 15
        echo twig_escape_filter($this->env, base_url("schedules/schedule_run"), "html", null, true);
        echo "\">
          </div>
        </div>";
        // line 19
        if (KPMIsActive("join_groups")) {
            // line 20
            echo "        <div class=\"col-md-12\">
          <div class=\"input-group\">
          <div>";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto join groups cronjob tab")), "html", null, true);
            echo " : </div>
          <input type=\"text\" class=\"form-control\" style=\"color:darkred\" value=\"wget -O --spider";
            // line 23
            echo twig_escape_filter($this->env, base_url("join_groups/schedule_run"), "html", null, true);
            echo "\">
          </div>
        </div>";
        }
        // line 28
        if (KPMIsActive("invite_join_groups")) {
            // line 29
            echo "        <div class=\"col-md-12\">
          <div class=\"input-group\">
          <div>";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto add friends cronjob tab")), "html", null, true);
            echo " : </div>
          <input type=\"text\" class=\"form-control\" style=\"color:darkred\" value=\"wget -O --spider";
            // line 32
            echo twig_escape_filter($this->env, base_url("invite_join_groups/schedule_run"), "html", null, true);
            echo "\">
          </div>
        </div>";
        }
        // line 37
        if (KPMIsActive("auto_comment")) {
            // line 38
            echo "        <div class=\"col-md-12\">
          <div class=\"input-group\">
          <div>";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto comment cronjob tab")), "html", null, true);
            echo " : </div>
          <input type=\"text\" class=\"form-control\" style=\"color:darkred\" value=\"wget -O --spider";
            // line 41
            echo twig_escape_filter($this->env, base_url("comments/schedule_run"), "html", null, true);
            echo "\">
          </div>
        </div>";
        }
        // line 46
        if (KPMIsActive("autolike")) {
            // line 47
            echo "        <div class=\"col-md-12\">
          <div class=\"input-group\">
          <div>";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto like cronjob tab")), "html", null, true);
            echo " : </div>
          <small><input type=\"text\" class=\"form-control\" style=\"color:darkred\" value=\"wget -O --spider";
            // line 50
            echo twig_escape_filter($this->env, base_url("autolike/schedule_run"), "html", null, true);
            echo "\"></small>
          </div>
        </div>";
        }
        // line 54
        echo "
        <div class=\"col-md-12\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th scope=\"col\">";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Your current Cron tabs")), "html", null, true);
        echo "</th>
                  </tr>
                </thead>
                <tbody>";
        // line 65
        if (twig_test_iterable((isset($context["crontabs"]) ? $context["crontabs"] : null))) {
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crontabs"]) ? $context["crontabs"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["crontab"]) {
                // line 67
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $context["crontab"], "html", null, true);
                echo "</td></tr>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No crontabs found")), "html", null, true);
                echo "</td></tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crontab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 72
            echo "                      <tr><td>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Can not fetch your cron tabs list, Getting cron tabs not allowed or cron job not supported on your server")), "html", null, true);
            echo "</td></tr>";
        }
        // line 74
        echo "                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/cron_jobs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 74,  148 => 72,  139 => 69,  132 => 67,  127 => 66,  125 => 65,  119 => 61,  110 => 54,  104 => 50,  100 => 49,  96 => 47,  94 => 46,  88 => 41,  84 => 40,  80 => 38,  78 => 37,  72 => 32,  68 => 31,  64 => 29,  62 => 28,  56 => 23,  52 => 22,  48 => 20,  46 => 19,  41 => 15,  37 => 14,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#cron_jobs">*/
/*     <i class="fa fa-envelope" aria-hidden="true"></i>*/
/*   <span>{{ l('Cron jobs') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="cron_jobs" class="panel-collapse collapse">*/
/*   <div class="panel-body">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*           <div class="input-group">*/
/*           <div>{{l("Schedule post cronjob tab")}} : </div>*/
/*           <input type="text" class="form-control" style="color:darkred" value="wget -O --spider {{base_url("schedules/schedule_run")}}">*/
/*           </div>*/
/*         </div>*/
/*         */
/*         {% if KPMIsActive('join_groups') %}*/
/*         <div class="col-md-12">*/
/*           <div class="input-group">*/
/*           <div>{{l("Auto join groups cronjob tab")}} : </div>*/
/*           <input type="text" class="form-control" style="color:darkred" value="wget -O --spider {{base_url("join_groups/schedule_run")}}">*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if KPMIsActive('invite_join_groups') %}*/
/*         <div class="col-md-12">*/
/*           <div class="input-group">*/
/*           <div>{{l("Auto add friends cronjob tab")}} : </div>*/
/*           <input type="text" class="form-control" style="color:darkred" value="wget -O --spider {{base_url("invite_join_groups/schedule_run")}}">*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if KPMIsActive('auto_comment') %}*/
/*         <div class="col-md-12">*/
/*           <div class="input-group">*/
/*           <div>{{l("Auto comment cronjob tab")}} : </div>*/
/*           <input type="text" class="form-control" style="color:darkred" value="wget -O --spider {{base_url("comments/schedule_run")}}">*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if KPMIsActive('autolike') %}*/
/*         <div class="col-md-12">*/
/*           <div class="input-group">*/
/*           <div>{{l("Auto like cronjob tab")}} : </div>*/
/*           <small><input type="text" class="form-control" style="color:darkred" value="wget -O --spider {{base_url("autolike/schedule_run")}}"></small>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="col-md-12">*/
/*           <div class="row">*/
/*             <div class="col-md-12">*/
/*               <table class="table table-striped">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th scope="col">{{l("Your current Cron tabs")}}</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% if crontabs is iterable %}*/
/*                       {% for crontab in crontabs %}*/
/*                         <tr><td>{{crontab}}</td></tr>*/
/*                       {% else %}*/
/*                         <tr><td>{{l("No crontabs found")}}</td></tr>*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                       <tr><td>{{l('Can not fetch your cron tabs list, Getting cron tabs not allowed or cron job not supported on your server')}}</td></tr>*/
/*                     {% endif %}*/
/*                 </tbody>*/
/*               </table>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
