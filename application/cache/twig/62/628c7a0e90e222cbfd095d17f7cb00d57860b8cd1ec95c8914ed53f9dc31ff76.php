<?php

/* schedule_posts/schedules.twig */
class __TwigTemplate_830b1683e5b51950471a8738cca3354af5b7699a81db4e2d24112a8fe2bb14b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "schedule_posts/schedules.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"messageBox\"></div>
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">
      <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Scheduled posts")), "html", null, true);
        echo "
      <span class=\"TotalRecords\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s of %s ", twig_length_filter($this->env, (isset($context["schedulesList"]) ? $context["schedulesList"] : null)), (isset($context["total_posts"]) ? $context["total_posts"] : null))), "html", null, true);
        echo "</span>
    </h3>
  </div>
  <div class=\"panel-body has-responsive-table\">
    <form method=\"POST\">
      
      <button type=\"button\" class=\"btn btn-danger\" id=\"deleteScheduleBtn\">
        <i class=\"fa fa-trash fa-fw\" aria-hidden=\"true\"></i>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "s", array(0 => "Delete"), "method"), "html", null, true);
        echo "
      </button>

      <div class=\"form-group pull-right scheduleView\">
        <div class=\"btn-group\" data-toggle=\"buttons\">
          <label class=\"btn btn-primary\">
            <input type=\"radio\" name=\"viewType\" class=\"viewType\" value=\"grid\"><i class=\"fa fa-th\" aria-hidden=\"true\"></i>
          </label>
          <label class=\"btn btn-primary active\">
            <input type=\"radio\" name=\"viewType\" class=\"viewType\" value=\"table\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>
          </label>
        </div>
      </div>

      <input type=\"text\" id=\"nodesFilterFiled\" class=\"form-control\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search for Facebook accounts")), "html", null, true);
        echo "\">

      <table class=\"table table-bordered table-striped dataTable\" id=\"datatable\" width=\"100%\">
        <thead>
          <tr>
            <td>
              <label for=\"checkbox-all\" class=\"material-checkbox\">
                <input type='checkbox' id=\"checkbox-all\" class=\"check-all\" name='a' />
                <span></span>
              </label>
            </td>
            <td class=\"hidden-lg\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Details")), "html", null, true);
        echo "</td>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Created at")), "html", null, true);
        echo "</td>
            <td class=\"hidden-xs hidden-sm\">";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NEXT_POSTING_TIME")), "html", null, true);
        echo "</td>
            <td class=\"visible-lg\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_INTERVAL")), "html", null, true);
        echo "</td>
            <td class=\"hidden-xs hidden-sm\">";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST")), "html", null, true);
        echo "</td>
            <td class=\"visible-lg\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP")), "html", null, true);
        echo "</td>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_ACCOUNT")), "html", null, true);
        echo "</td>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("STATUS")), "html", null, true);
        echo "</td>
            <td></td>
          </tr>
        </thead>
        <tbody>";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedulesList"]) ? $context["schedulesList"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
            // line 61
            $context["fba"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "get", array(0 => $this->getAttribute($context["sp"], "fb_account", array())), "method");
            // line 62
            $context["nextRepeat"] = call_user_func_array($this->env->getFunction('l')->getCallable(), array("Stoped"));
            // line 63
            if (($this->getAttribute($context["sp"], "repeat_every", array()) != 0)) {
                // line 64
                $context["nextRepeat"] = twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "repeated_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null));
            }
            // line 69
            $context["ap"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute($context["sp"], "auto_pause", array())));
            // line 71
            $context["autoPause"] = "";
            // line 72
            if ((($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != null) && ($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != 0))) {
                // line 73
                $context["autoPause"] = (((((call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto pause after")) . " : ") . $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array())) . " posts
") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Resume after"))) . " : ");
                // line 75
                if (($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array()) > 90)) {
                    // line 76
                    $context["autoPause"] = ((((isset($context["autoPause"]) ? $context["autoPause"] : null) . ($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array()) / 60)) . " ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Hours")));
                } else {
                    // line 78
                    $context["autoPause"] = ((((isset($context["autoPause"]) ? $context["autoPause"] : null) . $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array())) . " ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minutes")));
                }
            }
            // line 83
            $context["stat"] = ((($this->getAttribute($context["sp"], "pause", array()) == "0")) ? ("1") : ("0"));
            // line 84
            $context["pauseBtn"] = ((($this->getAttribute($context["sp"], "pause", array()) == "0")) ? ("primary") : ("warning"));
            // line 85
            $context["pauseBtnIcon"] = ((($this->getAttribute($context["sp"], "pause", array()) == "0")) ? ("pause") : ("play"));
            // line 86
            echo "
                  <tr id=\"s-";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "\">
                    <td>
                      
                      <label for='checkbox-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' class=\"material-checkbox\">
                        <input type='checkbox' class='checkbox' name='checkbox[]' id='checkbox-";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' />
                        <span></span>
                      </label>
                    </td>
                    
                    <td class=\"hidden-lg\">
                      <button type=\"button\" class=\"btn btn-default toggleRowData\">+</button>
                    </td>
                      
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "created_at", array()), (isset($context["date_format"]) ? $context["date_format"] : null)), "html", null, true);
            echo "
                    </td>
                    
                    <td class=\"hidden-xs hidden-sm\">";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "next_post_time", array()), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            echo "
                    </td>
                    
                    <td class=\"visible-lg\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_interval", array()), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Min")), "html", null, true);
            echo "</td>
                    
                    <td  class=\"hidden-xs hidden-sm\">";
            // line 111
            if (twig_test_empty($this->getAttribute($context["sp"], "post_title", array()))) {
                // line 112
                echo "                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>";
            } else {
                // line 114
                echo "                         <a href=\"";
                echo twig_escape_filter($this->env, base_url(("/?post_id=" . $this->getAttribute($context["sp"], "post_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_title", array()), "html", null, true);
                echo "</a>";
            }
            // line 116
            echo "                    </td>
                    
                    <td class=\"visible-lg\">";
            // line 119
            if (twig_test_empty($this->getAttribute($context["sp"], "app_name", array()))) {
                // line 120
                echo "                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>";
            } else {
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "app_name", array()), "html", null, true);
            }
            // line 124
            echo "                    </td>
                
                    <td>";
            // line 127
            if (twig_test_empty($this->getAttribute($context["sp"], "firstname", array()))) {
                // line 128
                echo "                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>";
            } else {
                // line 130
                echo "                        <a href=\"https://facebook.com/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "fb_account", array()), "html", null, true);
                echo "\" target=\"_blank\">
                          <img src='https://graph.facebook.com/";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "fb_account", array()), "html", null, true);
                echo "/picture?redirect=1&height=40&width=40&type=normal' width='32' height='32' style='float: left' class=\"fbProfileImg\" /> <span class=\"hidden-xs fbProfileName\">&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "firstname", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "lastname", array()), "html", null, true);
                echo "</span></a>";
            }
            // line 133
            echo "                    </td>

                    <td>";
            // line 136
            if (($this->getAttribute($context["sp"], "status", array()) == "1")) {
                // line 137
                echo "                        <span class='btn btn-success'>
                        \t<span class=\"visible-lg\">";
                // line 138
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("COMPLETED")), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo ")</span>
                          <span class=\"hidden-lg\">(";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo ")</span> 
                        </span>";
            } else {
                // line 142
                echo "                        <span class='btn btn-default'>
                        \t<span class=\"visible-lg\">";
                // line 143
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("inProgress")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "next_target", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "</span>
                        \t<span class=\"hidden-lg\">";
                // line 144
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("inProgress")), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "next_target", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "total_targets", array()), "html", null, true);
                echo "</span>
                        </span>";
            }
            // line 147
            if ( !twig_test_empty((isset($context["autoPause"]) ? $context["autoPause"] : null))) {
                // line 148
                echo "                        <a href='#'  onclick='return false;' data-toggle='kp_tooltip' data-placement='top' title='";
                echo twig_escape_filter($this->env, (isset($context["autoPause"]) ? $context["autoPause"] : null), "html", null, true);
                echo "'><span class='fa fa-question-circle'></span></a>";
            }
            // line 150
            echo "                    </td>

                    <td>

                      <button type='button' title='";
            // line 154
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit")), "html", null, true);
            echo "' data-toggle='kp_tooltip' data-placement='top' class='btn btn-primary editSchedule' value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
            echo "' >
                      <i class=\"fas fa-pencil-alt\" aria-hidden=\"true\"></i>
                      </button>";
            // line 158
            if (($this->getAttribute($context["sp"], "pause", array()) == 1)) {
                // line 159
                echo "                        <button type=\"button\" data-toggle='kp_tooltip' title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Resume")), "html", null, true);
                echo "\" class=\"btn btn-warning togglePauseBtn\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>";
            } else {
                // line 161
                echo "                        <button type=\"button\" data-toggle='kp_tooltip' title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pause")), "html", null, true);
                echo "\" class=\"btn btn-primary togglePauseBtn\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-pause\" aria-hidden=\"true\"></i></button>";
            }
            // line 163
            echo "                      
                      <a href='";
            // line 164
            echo twig_escape_filter($this->env, base_url(("schedules/logs/index/" . $this->getAttribute($context["sp"], "id", array()))), "html", null, true);
            echo "' data-toggle='kp_tooltip' title='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_LOG")), "html", null, true);
            echo "' class='btn btn-primary'>
                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>
                      </a>";
            // line 168
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true))) {
                // line 169
                echo "                        <button type=\"button\" title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto comment")), "html", null, true);
                echo "' data-toggle='kp_tooltip' class=\"btn btn-primary AddAutoComment\"value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fas fa-comment-alt\" aria-hidden=\"true\"></i></button>";
            }
            // line 172
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "likes"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_like", array(), "any", true, true))) {
                // line 173
                echo "                        <button type=\"button\" title='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto like")), "html", null, true);
                echo "' data-toggle='kp_tooltip' class=\"btn btn-primary AddAutoLike\"value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>";
            }
            // line 175
            echo "
                    </td>
                  </tr>
                  <tr class=\"hidden-lg rowData\" style=\"display:none\">
                  \t<td></td>
                  \t<td colspan=\"8\">
                  \t\t
                        <div class=\"visible-xs visible-sm\">";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("NEXT_POSTING_TIME")), "html", null, true);
            echo " :";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sp"], "next_post_time", array()), ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
            echo "</div>
                        
                        <div class=\"visible-xs visible-sm\">";
            // line 184
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post")), "html", null, true);
            echo " :";
            // line 185
            if (twig_test_empty($this->getAttribute($context["sp"], "post_title", array()))) {
                // line 186
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>";
            } else {
                // line 188
                echo "                             <a href=\"";
                echo twig_escape_filter($this->env, base_url(("/?post_id=" . $this->getAttribute($context["sp"], "post_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_title", array()), "html", null, true);
                echo "</a>";
            }
            // line 190
            echo "                        </div>

                  \t\t\t<div>";
            // line 192
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP")), "html", null, true);
            echo " :";
            // line 193
            if (twig_test_empty($this->getAttribute($context["sp"], "app_name", array()))) {
                // line 194
                echo "\t\t\t                        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Not found")), "html", null, true);
                echo "</span>";
            } else {
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "app_name", array()), "html", null, true);
            }
            // line 198
            echo "                        </div>

                        <div>";
            // line 200
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_INTERVAL")), "html", null, true);
            echo " :";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp"], "post_interval", array()), "html", null, true);
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Min")), "html", null, true);
            echo "</div>";
            // line 202
            if ((($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != null) && ($this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()) != 0))) {
                // line 203
                echo "                          <div>";
                // line 204
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto pause after")), "html", null, true);
                echo " :";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "pause", array()), "html", null, true);
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Posts")), "html", null, true);
                echo "
                          </div>
                          <div>";
                // line 207
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Resume after")), "html", null, true);
                echo " :";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ap"]) ? $context["ap"] : null), "resume", array()), "html", null, true);
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Minutes")), "html", null, true);
                echo "
                          </div>";
            }
            // line 210
            echo "
                  \t</td>
                  </tr>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 214
            echo "            <tr>
              <td colspan=\"9\">";
            // line 216
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No records available")), "html", null, true);
            echo "
              </td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "        </tbody>
      </table>";
        // line 223
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 224
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
        }
        // line 226
        echo "    </form>
  </div>
</div>

<div id=\"editSchedule\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 235
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Edit schedule")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"messageBox\"></div>
        <input type=\"hidden\" name=\"ScheduleId\" id=\"ScheduleId\" value=\"\">";
        // line 240
        $this->loadTemplate("schedule_posts/schedule_block.twig", "schedule_posts/schedules.twig", 240)->display($context);
        // line 241
        echo "      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 243
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</a>
        <button id=\"editScheduleBtn\" class=\"btn btn-primary\">";
        // line 244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE")), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>";
        // line 251
        $context["box_id"] = "schedule";
        // line 252
        $context["delete_msg"] = ((((call_user_func_array($this->env->getFunction('l')->getCallable(), array("Are you sure you want to delete the selected records?")) . ", ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("This action will delete all the schedule related data"))) . ", ") . call_user_func_array($this->env->getFunction('l')->getCallable(), array("This action cannot be undone")));
        // line 253
        $this->loadTemplate("blocks/delete_modal.twig", "schedule_posts/schedules.twig", 253)->display($context);
        // line 255
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true))) {
            // line 256
            $this->loadTemplate("@comments/components/addAutoComment.twig", "schedule_posts/schedules.twig", 256)->display($context);
            // line 257
            $this->loadTemplate("@comments/components/editAutoComment.twig", "schedule_posts/schedules.twig", 257)->display($context);
        }
        // line 260
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "likes"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_like", array(), "any", true, true))) {
            // line 261
            $this->loadTemplate("@autolike/components/addAutoLike.twig", "schedule_posts/schedules.twig", 261)->display($context);
        }
    }

    // line 266
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 267
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 268
        echo twig_escape_filter($this->env, assets("theme/default/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 269
        echo twig_escape_filter($this->env, assets("theme/default/css/emojionearea.min.css"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 270
        echo twig_escape_filter($this->env, assets("theme/default/css/tablesorter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
    }

    // line 273
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 274
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
  <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>";
        // line 276
        if (( !twig_test_empty(call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) && (call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N")) != "en"))) {
            // line 277
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, assets((("theme/default/js/libs/moment/locale/" . call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 279
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
  <script>

    \$(function () {

      if(window.location.hash != \"\") {
          var highlightedS = \$(\"#\" + window.location.hash.substring(1));
          highlightedS.css({\"background\": \"#fdffa6\",\"transition\": \"2s\"});
      }
        
      \$(\"#datatable\").tablesorter();
        
      \$(\"#nodesFilterFiled\").on(\"keyup\",function(){
        console.log(\"d\");
        var filter = \$(\"#nodesFilterFiled\").val().toUpperCase();
        \$(\"#datatable tbody tr\").each(function(){
          console.log(this);
          firstElem = \$(this).find(\".fbProfileName\").text().toUpperCase();
          console.log(firstElem);
          //secondElem = \$(this).find(\".nodeType\").text().toUpperCase();
          //thirdElem = \$(this).find(\".privacyAndLikes\").text().toUpperCase();
          if (firstElem.indexOf(filter) > -1) {
                \$(this).show();
              } else {
                \$(this).hide();
              }
        });
      });

      /* reAttched Checkbo Event*/
      \$(\"#checkbox-all\").click(function () {
        \$('#datatable tbody input[type=\"checkbox\"]').prop('checked', this.checked);
      });

      \$('#scheduledPostTime').datetimepicker({format: '";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});
      \$('#start_on').datetimepicker({format: '";
        // line 315
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});
      \$('#end_on').datetimepicker({format: '";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});

      \$( \".toggleRowData\" ).click(function() {
        \$( this ).parent().parent().next().stop().toggle( \"fast\" );
      });

    });";
        // line 325
        echo "    \$( \"#repeatEvery\" ).change(function() {
      if(\$(this).val() == 0){
        \$(\"#start_on\").prop('disabled', true);
        \$(\"#end_on\").prop('disabled', true);
      }else{
         \$(\"#start_on\").prop('disabled', false);
         \$(\"#end_on\").prop('disabled', false);
      }
    });

    \$( \"#schedulePauseAfter\" ).change(function() {
      if(\$(this).val() == 0){
        \$(\"#scheduleResumeAfter\").prop('disabled', true);
      }else{
         \$(\"#scheduleResumeAfter\").prop('disabled', false);
      }
    });";
        // line 344
        echo "    \$(\".editSchedule\").click(function(){

      // Reset the modal
      \$(\"#editSchedule .messageBox\").html(\"\");

      \$(\"#scheduledPostInterval\").val(\"\");

      \$(\"#scheduledPostTime\").val(\"\");
      \$(\"#schedulePauseAfter\").val(\"\");
      \$(\"#scheduleResumeAfter\").val(\"\");

      \$(\"#repeatEvery\").val(\"\");

      \$(\"#start_on\").val(\"\");
      \$(\"#end_on\").val(\"\");

      \$(\"#scheduledPostApp\").html(\"\");

      var scheduleID = \$(this).val();
      \$('#ScheduleId').val(scheduleID);

      kp_preloader(\"on\",\"#editSchedule .modal-body\");

      // Disable save schedule post
      \$(\"#editScheduleBtn\").prop('disabled', true);

      // Load schedule info
      \$.ajax({
        url: '";
        // line 372
        echo twig_escape_filter($this->env, base_url("schedules/action/details/"), "html", null, true);
        echo "'+scheduleID,
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: {";
        // line 377
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"ok\"){

            // bind values
            var next_post_time = new Date(data.schedule.next_post_time);
            \$(\"#scheduledPostTime\").val(moment(next_post_time).format('";
        // line 384
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'));

            if(data.schedule.post_interval > 90){
              \$(\"#intervalHour\").prop(\"checked\", true);
              \$(\"#scheduledPostInterval\").val(data.schedule.post_interval/60);
            }else{
              \$(\"#intervalMunite\").prop(\"checked\", true);
              \$(\"#scheduledPostInterval\").val(data.schedule.post_interval);
            }

            \$(\"#schedulePauseAfter\").val(data.schedule.auto_pause.pause);

            \$(\"#repeatEvery\").val(data.schedule.repeat_every);

            if(\$(\"#repeatEvery\").val() == 0){
              \$(\"#start_on\").prop('disabled', true);
              \$(\"#end_on\").prop('disabled', true);
            }else{
               \$(\"#start_on\").prop('disabled', false);
               \$(\"#end_on\").prop('disabled', false);
               var start_on = new Date(data.schedule.start_on);
               var end_on = new Date(data.schedule.end_on);
              \$(\"#start_on\").val(moment(start_on).format('";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'));
              \$(\"#end_on\").val(moment(end_on).format('";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'));
            }

            if(\$(\"#schedulePauseAfter\").val() == 0){
              \$(\"#scheduleResumeAfter\").prop('disabled', true);
            }else{
               \$(\"#scheduleResumeAfter\").prop('disabled', false);
               if(data.schedule.auto_pause.resume > 90){
                \$(\"#rfintervalHour\").prop(\"checked\", true);
                \$(\"#scheduleResumeAfter\").val(data.schedule.auto_pause.resume/60);
              }else{
                \$(\"#rfintervalMunite\").prop(\"checked\", true);
                \$(\"#scheduleResumeAfter\").val(data.schedule.auto_pause.resume);
              }
            }
            
            var apps = data.schedule.fb_account.fb_apps;

            for (i = 0; i < apps.length; i++) { 
              \$('#scheduledPostApp').append(\"<option value='\"+apps[i]['appid']+\"'>\"+apps[i]['app_name']+\"</option>\");
            }

            \$(\"#scheduledPostApp\").val(data.schedule.post_app);

          }else{
            alertBox(data.message,\"danger\",\"#editSchedule .messageBox\",false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 437
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#editSchedule .messageBox\",false);
        },
        complete: function() {
          // Re-enable save schedule post btn
          \$(\"#editScheduleBtn\").prop('disabled', false);
          kp_preloader(\"off\",\"#editSchedule .modal-body\");
        }
      });

      // Show the modal
      \$('#editSchedule').modal('show');
    });";
        // line 451
        echo "    \$(\"#editScheduleBtn\").click(function(){

      kp_preloader(\"on\",\"#editSchedule .modal-body\");

      var pi = \$(\"#scheduledPostInterval\",\"#editSchedule\").val();
      var apf = \$(\"#scheduleResumeAfter\",\"#editSchedule\").val();

      var post_interval = \$(\"input[type='radio']:checked\",\"#editSchedule\").val() == \"minute\" ? pi : pi*60 ;

      var resume_after = \$(\".autoPause input[type='radio']:checked\",\"#editSchedule\").val() == \"minute\" ? apf : apf*60 ;
      
      // Disable save schedule post
      \$(\"#editScheduleBtn\").prop('disabled', true);

      \$.ajax({
        url: '";
        // line 466
        echo twig_escape_filter($this->env, base_url("schedules/action/update"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: {
          schedule_id: \$('#ScheduleId').val(),
          run_at: \$(\"#scheduledPostTime\",\"#editSchedule\").val(),
          post_interval: post_interval,
          post_app: \$(\"#scheduledPostApp\",\"#editSchedule\").val(),
          fb_account: \$(\"#scheduledFbAccount\",\"#editSchedule\").val(),
          pause_after: \$(\"#schedulePauseAfter\",\"#editSchedule\").val(),
          resume_after: resume_after,

          repeat_every: \$(\"#repeatEvery\",\"#editSchedule\").val(),
          end_on: \$(\"#end_on\",\"#editSchedule\").val(),";
        // line 482
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
        },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"success\"){
            alertBox(data.message,\"success\",\"#editSchedule .messageBox\",false);
            \$(document).on('hide.bs.modal','#editSchedule', function () {location.reload();});
          }else{
            if(data.message !== null && typeof data.message === 'object'){
                htmlData = \"<ul>\";
                Object.keys(data.message).forEach(function(key) {
                    htmlData += \"<li>\" + data.message[key] + \"</li>\";
                });
                htmlData += \"</ul>\";
            }else{
                htmlData = data.message;
            }
            alertBox(htmlData,\"danger\",\"#editSchedule .messageBox\",false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 503
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#editSchedule .messageBox\",false);
        },
        complete: function() {
          // Re-enable save schedule post btn
          \$(\"#editScheduleBtn\").prop('disabled', false);
          kp_preloader(\"off\",\"#editSchedule .modal-body\");
        }
      });
      
    });

    \$( \".togglePauseBtn\" ).click(function(){
      var schedule = \$( this );
        \$.ajax({
          url: '";
        // line 517
        echo twig_escape_filter($this->env, base_url("schedules/action/toggle_schedule_pause"), "html", null, true);
        echo "',
          dataType: 'json',
          type: 'post',
          contentType: 'application/x-www-form-urlencoded',
          data: { 
            sid: schedule.val(),";
        // line 523
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
          },
          success: function( data, textStatus, jQxhr ){
              if(data.status == \"success\"){
                schedule.toggleClass( \"btn-warning\" );
                schedule.toggleClass( \"btn-primary\" );
                schedule.find(\"i\").toggleClass( \"fa-pause\" );
                schedule.find(\"i\").toggleClass( \"fa-play\" );
                schedule.find(\"i\").removeClass(\"fa-exclamation\");
              }else{
                schedule.find(\"i\").addClass(\"fa-exclamation\");
                schedule.find(\"i\").removeClass(\"fa-toggle-on\");
              }
          },
          error: function( jqXhr, textStatus, errorThrown ){ 
              schedule.find(\"i\").addClass(\"fa-exclamation\");
              schedule.find(\"i\").removeClass(\"fa-play\");
              schedule.find(\"i\").removeClass(\"fa-pause\");
              console.log(errorThrown); 
          }
        });
    });";
        // line 547
        echo "    \$(\"#deleteScheduleBtn\").click(function(){
      if(\$('tbody .checkbox:checked').length > 0){
       \$(\"#delete_schedule\").modal(\"show\");
      }
    });

    \$(\".deleteBtn_schedule\" ).click(function(){
      kp_preloader(\"on\",\"#delete_schedule .modal-body\");
      var schedules = [];
      \$('tbody .checkbox:checked').each(function(){
        schedules.push(\$(this).val());
      });
      \$.ajax({
        url: '";
        // line 560
        echo twig_escape_filter($this->env, base_url("schedules/action/delete"), "html", null, true);
        echo "',
        dataType: 'json',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: { 
          ids: JSON.stringify(schedules),";
        // line 566
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "')
         },
        success: function( data, textStatus, jQxhr ){
          if(data.status == \"success\"){
            alertBox(data.message,\"success\",\".deleteAlertBox_schedule\",false,false);
              \$(\".deleteBtn_schedule\").prop('disabled', true);
            \$(document).on('hide.bs.modal','#delete_schedule', function () {location.reload();});
          }else{
            alertBox(data.message,\"danger\",\".deleteAlertBox_schedule\",false,false);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){ 
          console.log(errorThrown);
          alertBox(\"";
        // line 579
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "s", array(0 => "Unable to complete your request"), "method"), "html", null, true);
        echo "\",\"danger\",\".deleteAlertBox_schedule\",false,false);
        },
        complete: function(){
          kp_preloader(\"off\",\"#delete_schedule .modal-body\");
        }
      });

      \$('.deleteBox_content_schedule').html(\"\");
    });

    \$(\".scheduleView .btn\").on(\"click\",function(){
        setCookie(\"schedule_view\",\$(this).find(\".viewType\").val(),360);
        location.reload();
    });

  </script>";
    }

    public function getTemplateName()
    {
        return "schedule_posts/schedules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  923 => 579,  905 => 566,  897 => 560,  882 => 547,  856 => 523,  848 => 517,  831 => 503,  805 => 482,  788 => 466,  771 => 451,  757 => 437,  724 => 407,  720 => 406,  695 => 384,  683 => 377,  676 => 372,  646 => 344,  628 => 325,  619 => 316,  615 => 315,  611 => 314,  574 => 280,  569 => 279,  564 => 277,  562 => 276,  559 => 275,  555 => 274,  552 => 273,  547 => 270,  543 => 269,  539 => 268,  535 => 267,  532 => 266,  527 => 261,  525 => 260,  522 => 257,  520 => 256,  518 => 255,  516 => 253,  514 => 252,  512 => 251,  505 => 244,  501 => 243,  497 => 241,  495 => 240,  488 => 235,  477 => 226,  474 => 224,  472 => 223,  469 => 220,  460 => 216,  457 => 214,  450 => 210,  442 => 207,  434 => 204,  432 => 203,  430 => 202,  424 => 200,  420 => 198,  417 => 196,  412 => 194,  410 => 193,  407 => 192,  403 => 190,  396 => 188,  391 => 186,  389 => 185,  386 => 184,  379 => 182,  370 => 175,  363 => 173,  361 => 172,  354 => 169,  352 => 168,  345 => 164,  342 => 163,  335 => 161,  328 => 159,  326 => 158,  319 => 154,  313 => 150,  308 => 148,  306 => 147,  298 => 144,  291 => 143,  288 => 142,  281 => 139,  273 => 138,  270 => 137,  268 => 136,  264 => 133,  257 => 131,  252 => 130,  247 => 128,  245 => 127,  241 => 124,  238 => 122,  233 => 120,  231 => 119,  227 => 116,  220 => 114,  215 => 112,  213 => 111,  207 => 108,  201 => 105,  195 => 101,  181 => 91,  177 => 90,  171 => 87,  168 => 86,  166 => 85,  164 => 84,  162 => 83,  158 => 78,  155 => 76,  153 => 75,  150 => 73,  148 => 72,  146 => 71,  144 => 69,  141 => 64,  139 => 63,  137 => 62,  135 => 61,  130 => 60,  123 => 55,  119 => 54,  115 => 53,  111 => 52,  107 => 51,  103 => 50,  99 => 49,  95 => 48,  81 => 37,  64 => 23,  54 => 15,  50 => 14,  41 => 8,  38 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ l("Schedules") }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ parent() }}*/
/* */
/* <div class="messageBox"></div>*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">*/
/*       <i class="fa fa-calendar" aria-hidden="true"></i> {{ l("Scheduled posts") }}*/
/*       <span class="TotalRecords">{{ l('Showing %s of %s ',schedulesList|length,total_posts) }}</span>*/
/*     </h3>*/
/*   </div>*/
/*   <div class="panel-body has-responsive-table">*/
/*     <form method="POST">*/
/*       */
/*       <button type="button" class="btn btn-danger" id="deleteScheduleBtn">*/
/*         <i class="fa fa-trash fa-fw" aria-hidden="true"></i>*/
/*         {{ lang.s('Delete') }}*/
/*       </button>*/
/* */
/*       <div class="form-group pull-right scheduleView">*/
/*         <div class="btn-group" data-toggle="buttons">*/
/*           <label class="btn btn-primary">*/
/*             <input type="radio" name="viewType" class="viewType" value="grid"><i class="fa fa-th" aria-hidden="true"></i>*/
/*           </label>*/
/*           <label class="btn btn-primary active">*/
/*             <input type="radio" name="viewType" class="viewType" value="table"><i class="fa fa-table" aria-hidden="true"></i>*/
/*           </label>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="text" id="nodesFilterFiled" class="form-control" placeholder="{{ l('Search for Facebook accounts') }}">*/
/* */
/*       <table class="table table-bordered table-striped dataTable" id="datatable" width="100%">*/
/*         <thead>*/
/*           <tr>*/
/*             <td>*/
/*               <label for="checkbox-all" class="material-checkbox">*/
/*                 <input type='checkbox' id="checkbox-all" class="check-all" name='a' />*/
/*                 <span></span>*/
/*               </label>*/
/*             </td>*/
/*             <td class="hidden-lg">{{ l("Details") }}</td>*/
/*             <td>{{ l("Created at") }}</td>*/
/*             <td class="hidden-xs hidden-sm">{{ l("NEXT_POSTING_TIME") }}</td>*/
/*             <td class="visible-lg">{{ l("POST_INTERVAL") }}</td>*/
/*             <td class="hidden-xs hidden-sm">{{ l("POST") }}</td>*/
/*             <td class="visible-lg">{{ l("FB_APP") }}</td>*/
/*             <td>{{ l("FB_ACCOUNT") }}</td>*/
/*             <td>{{ l('STATUS') }}</td>*/
/*             <td></td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*               {% for sp in schedulesList %}*/
/*                 {% set fba = fbaccount.get(sp.fb_account) %}*/
/*                 {% set nextRepeat = l('Stoped') %}*/
/*                 {% if sp.repeat_every != 0 %}*/
/*                   {% set nextRepeat = sp.repeated_at|date(date_format) %}*/
/*                   {# {% set nextRepeat->modify('+'.$sp->repeat_every.' day'); #}*/
/*                   {# set nextRepeat = nextRepeat->format("Y-m-d H:i"); #}*/
/*                 {% endif %}*/
/*                 */
/*                 {% set ap = json_decode(sp.auto_pause) %}*/
/* */
/*                 {% set autoPause = "" %}*/
/*                 {% if ap.pause != null and ap.pause != 0 %}*/
/*                   {% set autoPause = l('Auto pause after') ~ " : " ~ ap.pause ~ " posts\n" ~ l('Resume after') ~ " : " %}*/
/* */
/*                   {% if ap.resume > 90 %}*/
/*                     {% set autoPause = autoPause ~ ap.resume/60 ~ " " ~ l('Hours') %}*/
/*                   {% else %}*/
/*                     {% set autoPause = autoPause ~ ap.resume ~ " " ~ l('Minutes') %}*/
/*                   {% endif %}*/
/*                   */
/*                 {% endif %}*/
/*                   */
/*                   {% set stat = sp.pause == "0" ? "1" : "0" %}*/
/*                   {% set pauseBtn = sp.pause == "0" ? "primary" : "warning" %}*/
/*                   {% set pauseBtnIcon = sp.pause == "0" ? "pause" : "play" %}*/
/* */
/*                   <tr id="s-{{sp.id}}">*/
/*                     <td>*/
/*                       */
/*                       <label for='checkbox-{{ sp.id }}' class="material-checkbox">*/
/*                         <input type='checkbox' class='checkbox' name='checkbox[]' id='checkbox-{{ sp.id }}' value='{{ sp.id }}' />*/
/*                         <span></span>*/
/*                       </label>*/
/*                     </td>*/
/*                     */
/*                     <td class="hidden-lg">*/
/*                       <button type="button" class="btn btn-default toggleRowData">+</button>*/
/*                     </td>*/
/*                       */
/*                     <td>*/
/*                       {{ sp.created_at|date(date_format) }}*/
/*                     </td>*/
/*                     */
/*                     <td class="hidden-xs hidden-sm">*/
/*                       {{ sp.next_post_time|date(date_format ~ " H:i") }}*/
/*                     </td>*/
/*                     */
/*                     <td class="visible-lg">{{ sp.post_interval }} {{ l('Min') }}</td>*/
/*                     */
/*                     <td  class="hidden-xs hidden-sm">*/
/*                       {% if sp.post_title is empty %}*/
/*                         <span class="text-danger">{{ l('Not found') }}</span>*/
/*                       {% else %}*/
/*                          <a href="{{ base_url('/?post_id=' ~ sp.post_id) }}">{{ sp.post_title }}</a>*/
/*                       {% endif %}*/
/*                     </td>*/
/*                     */
/*                     <td class="visible-lg">*/
/*                       {% if sp.app_name is empty %}*/
/*                         <span class="text-danger">{{ l('Not found') }}</span>*/
/*                       {% else %}*/
/*                         {{ sp.app_name }}*/
/*                       {% endif %}*/
/*                     </td>*/
/*                 */
/*                     <td>*/
/*                       {% if sp.firstname is empty %}*/
/*                         <span class="text-danger">{{ l('Not found') }}</span>*/
/*                       {% else %}*/
/*                         <a href="https://facebook.com/{{ sp.fb_account }}" target="_blank">*/
/*                           <img src='https://graph.facebook.com/{{ sp.fb_account }}/picture?redirect=1&height=40&width=40&type=normal' width='32' height='32' style='float: left' class="fbProfileImg" /> <span class="hidden-xs fbProfileName">&nbsp;{{ sp.firstname }} {{ sp.lastname }}</span></a>*/
/*                       {% endif %}*/
/*                     </td>*/
/* */
/*                     <td>*/
/*                       {% if sp.status == "1" %}*/
/*                         <span class='btn btn-success'>*/
/*                         	<span class="visible-lg">{{ l('COMPLETED') }} ({{ sp.total_targets }}/{{ sp.total_targets }})</span>*/
/*                           <span class="hidden-lg">({{ sp.total_targets }}/{{ sp.total_targets }})</span> */
/*                         </span>*/
/*                       {% else %}*/
/*                         <span class='btn btn-default'>*/
/*                         	<span class="visible-lg">{{ l('inProgress') }} {{ sp.next_target }}/{{ sp.total_targets }}</span>*/
/*                         	<span class="hidden-lg">{{ l('inProgress') }} {{ sp.next_target }}/{{ sp.total_targets }}</span>*/
/*                         </span>*/
/*                       {% endif %}*/
/*                       {% if autoPause is not empty %}*/
/*                         <a href='#'  onclick='return false;' data-toggle='kp_tooltip' data-placement='top' title='{{ autoPause }}'><span class='fa fa-question-circle'></span></a>*/
/*                       {% endif %}*/
/*                     </td>*/
/* */
/*                     <td>*/
/* */
/*                       <button type='button' title='{{ l('Edit') }}' data-toggle='kp_tooltip' data-placement='top' class='btn btn-primary editSchedule' value='{{ sp.id }}' >*/
/*                       <i class="fas fa-pencil-alt" aria-hidden="true"></i>*/
/*                       </button>*/
/*                       */
/*                       {% if sp.pause == 1 %}*/
/*                         <button type="button" data-toggle='kp_tooltip' title="{{l('Resume')}}" class="btn btn-warning togglePauseBtn" value="{{ sp.id }}"><i class="fa fa-play" aria-hidden="true"></i></button>*/
/*                       {% else %}*/
/*                         <button type="button" data-toggle='kp_tooltip' title="{{l('Pause')}}" class="btn btn-primary togglePauseBtn" value="{{ sp.id }}"><i class="fa fa-pause" aria-hidden="true"></i></button>*/
/*                       {% endif %}*/
/*                       */
/*                       <a href='{{ base_url('schedules/logs/index/' ~ sp.id ) }}' data-toggle='kp_tooltip' title='{{ l('VIEW_LOG') }}' class='btn btn-primary'>*/
/*                         <i class="fa fa-folder-open" aria-hidden="true"></i>*/
/*                       </a>*/
/* */
/*                       {% if user.canUse("comments") and kpModules.auto_comment is defined %}*/
/*                         <button type="button" title='{{ l('Auto comment') }}' data-toggle='kp_tooltip' class="btn btn-primary AddAutoComment"value="{{ sp.id }}"><i class="fas fa-comment-alt" aria-hidden="true"></i></button>*/
/*                       {% endif %}*/
/* */
/*                       {% if user.canUse("likes") and kpModules.auto_like is defined %}*/
/*                         <button type="button" title='{{ l('Auto like') }}' data-toggle='kp_tooltip' class="btn btn-primary AddAutoLike"value="{{ sp.id }}"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>*/
/*                       {% endif %}*/
/* */
/*                     </td>*/
/*                   </tr>*/
/*                   <tr class="hidden-lg rowData" style="display:none">*/
/*                   	<td></td>*/
/*                   	<td colspan="8">*/
/*                   		*/
/*                         <div class="visible-xs visible-sm">{{ l("NEXT_POSTING_TIME") }} : {{ sp.next_post_time|date(date_format ~ " H:i") }}</div>*/
/*                         */
/*                         <div class="visible-xs visible-sm">{{ l("Post") }} : */
/*                           {% if sp.post_title is empty %}*/
/*                             <span class="text-danger">{{ l('Not found') }}</span>*/
/*                           {% else %}*/
/*                              <a href="{{ base_url('/?post_id=' ~ sp.post_id) }}">{{ sp.post_title }}</a>*/
/*                           {% endif %}*/
/*                         </div>*/
/* */
/*                   			<div>{{ l("FB_APP") }} : */
/*                   				{% if sp.app_name is empty %}*/
/* 			                        <span class="text-danger">{{ l('Not found') }}</span>*/
/* 			                    {% else %}*/
/* 			                        {{ sp.app_name }}*/
/* 			                    {% endif %}*/
/*                         </div>*/
/* */
/*                         <div>{{ l("POST_INTERVAL") }} : {{ sp.post_interval }} {{ l('Min') }}</div>*/
/* */
/*                         {% if ap.pause != null and ap.pause != 0 %}*/
/*                           <div>*/
/*                             {{ l('Auto pause after') }} : {{ ap.pause }} {{ l('Posts') }}*/
/*                           </div>*/
/*                           <div>*/
/*                             {{ l('Resume after') }} : {{ ap.resume }} {{ l('Minutes') }}*/
/*                           </div>*/
/*                         {% endif %}*/
/* */
/*                   	</td>*/
/*                   </tr>*/
/*           {% else %}*/
/*             <tr>*/
/*               <td colspan="9">*/
/*                 {{ l('No records available') }}*/
/*               </td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         </tbody>*/
/*       </table>*/
/*       */
/*       {% if pagination %}*/
/*         {{ pagination|raw}}*/
/*       {% endif %}*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* <div id="editSchedule" class="modal fade" role="dialog" data-backdrop="static">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l("Edit schedule") }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class="messageBox"></div>*/
/*         <input type="hidden" name="ScheduleId" id="ScheduleId" value="">*/
/*         {% include "schedule_posts/schedule_block.twig" %}*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</a>*/
/*         <button id="editScheduleBtn" class="btn btn-primary">{{ l("SAVE") }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {# Box variables #}*/
/* {% set box_id = "schedule" %}*/
/* {% set delete_msg = l("Are you sure you want to delete the selected records?")~", "~ l("This action will delete all the schedule related data") ~ ", " ~ l("This action cannot be undone") %}*/
/* {% include "blocks/delete_modal.twig" %}*/
/* */
/* {% if user.canUse("comments") and kpModules.auto_comment is defined %}*/
/*   {% include "@comments/components/addAutoComment.twig" %}*/
/*   {% include "@comments/components/editAutoComment.twig" %}*/
/* {% endif %}*/
/* */
/* {% if user.canUse("likes") and kpModules.auto_like is defined %}*/
/*   {% include "@autolike/components/addAutoLike.twig" %}*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link href="{{ assets('theme/default/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/*   <link rel="stylesheet" type="text/css" href="{{ assets('theme/default/css/emojionearea.min.css') }}">*/
/*   <link href="{{ assets('theme/default/css/tablesorter.css') }}" rel="stylesheet"> */
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*   {{ parent() }}*/
/*   <script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/*   {% if l('LANG_I18N') is not empty and l('LANG_I18N') != "en" %}*/
/*     <script src="{{ assets('theme/default/js/libs/moment/locale/' ~ l('LANG_I18N') ~ '.js') }}"></script>*/
/*   {% endif %}*/
/*   <script src="{{ assets('theme/default/js/libs/bootstrap-datetimepicker.min.js') }}"></script>*/
/*   <script src="{{ assets('theme/default/js/libs/jquery.tablesorter.min.js') }}"></script>*/
/*   <script>*/
/* */
/*     $(function () {*/
/* */
/*       if(window.location.hash != "") {*/
/*           var highlightedS = $("#" + window.location.hash.substring(1));*/
/*           highlightedS.css({"background": "#fdffa6","transition": "2s"});*/
/*       }*/
/*         */
/*       $("#datatable").tablesorter();*/
/*         */
/*       $("#nodesFilterFiled").on("keyup",function(){*/
/*         console.log("d");*/
/*         var filter = $("#nodesFilterFiled").val().toUpperCase();*/
/*         $("#datatable tbody tr").each(function(){*/
/*           console.log(this);*/
/*           firstElem = $(this).find(".fbProfileName").text().toUpperCase();*/
/*           console.log(firstElem);*/
/*           //secondElem = $(this).find(".nodeType").text().toUpperCase();*/
/*           //thirdElem = $(this).find(".privacyAndLikes").text().toUpperCase();*/
/*           if (firstElem.indexOf(filter) > -1) {*/
/*                 $(this).show();*/
/*               } else {*/
/*                 $(this).hide();*/
/*               }*/
/*         });*/
/*       });*/
/* */
/*       /* reAttched Checkbo Event*//* */
/*       $("#checkbox-all").click(function () {*/
/*         $('#datatable tbody input[type="checkbox"]').prop('checked', this.checked);*/
/*       });*/
/* */
/*       $('#scheduledPostTime').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/*       $('#start_on').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/*       $('#end_on').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/* */
/*       $( ".toggleRowData" ).click(function() {*/
/*         $( this ).parent().parent().next().stop().toggle( "fast" );*/
/*       });*/
/* */
/*     });*/
/* */
/*     {# If repeat once disbale repeat at #}*/
/*     $( "#repeatEvery" ).change(function() {*/
/*       if($(this).val() == 0){*/
/*         $("#start_on").prop('disabled', true);*/
/*         $("#end_on").prop('disabled', true);*/
/*       }else{*/
/*          $("#start_on").prop('disabled', false);*/
/*          $("#end_on").prop('disabled', false);*/
/*       }*/
/*     });*/
/* */
/*     $( "#schedulePauseAfter" ).change(function() {*/
/*       if($(this).val() == 0){*/
/*         $("#scheduleResumeAfter").prop('disabled', true);*/
/*       }else{*/
/*          $("#scheduleResumeAfter").prop('disabled', false);*/
/*       }*/
/*     });*/
/* */
/*     {# ----------------------- Edit the schedule ---------------------- #}*/
/*     $(".editSchedule").click(function(){*/
/* */
/*       // Reset the modal*/
/*       $("#editSchedule .messageBox").html("");*/
/* */
/*       $("#scheduledPostInterval").val("");*/
/* */
/*       $("#scheduledPostTime").val("");*/
/*       $("#schedulePauseAfter").val("");*/
/*       $("#scheduleResumeAfter").val("");*/
/* */
/*       $("#repeatEvery").val("");*/
/* */
/*       $("#start_on").val("");*/
/*       $("#end_on").val("");*/
/* */
/*       $("#scheduledPostApp").html("");*/
/* */
/*       var scheduleID = $(this).val();*/
/*       $('#ScheduleId').val(scheduleID);*/
/* */
/*       kp_preloader("on","#editSchedule .modal-body");*/
/* */
/*       // Disable save schedule post*/
/*       $("#editScheduleBtn").prop('disabled', true);*/
/* */
/*       // Load schedule info*/
/*       $.ajax({*/
/*         url: '{{ base_url("schedules/action/details/") }}'+scheduleID,*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: {*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "ok"){*/
/* */
/*             // bind values*/
/*             var next_post_time = new Date(data.schedule.next_post_time);*/
/*             $("#scheduledPostTime").val(moment(next_post_time).format('{{ date_format_js }} HH:mm'));*/
/* */
/*             if(data.schedule.post_interval > 90){*/
/*               $("#intervalHour").prop("checked", true);*/
/*               $("#scheduledPostInterval").val(data.schedule.post_interval/60);*/
/*             }else{*/
/*               $("#intervalMunite").prop("checked", true);*/
/*               $("#scheduledPostInterval").val(data.schedule.post_interval);*/
/*             }*/
/* */
/*             $("#schedulePauseAfter").val(data.schedule.auto_pause.pause);*/
/* */
/*             $("#repeatEvery").val(data.schedule.repeat_every);*/
/* */
/*             if($("#repeatEvery").val() == 0){*/
/*               $("#start_on").prop('disabled', true);*/
/*               $("#end_on").prop('disabled', true);*/
/*             }else{*/
/*                $("#start_on").prop('disabled', false);*/
/*                $("#end_on").prop('disabled', false);*/
/*                var start_on = new Date(data.schedule.start_on);*/
/*                var end_on = new Date(data.schedule.end_on);*/
/*               $("#start_on").val(moment(start_on).format('{{ date_format_js }} HH:mm'));*/
/*               $("#end_on").val(moment(end_on).format('{{ date_format_js }} HH:mm'));*/
/*             }*/
/* */
/*             if($("#schedulePauseAfter").val() == 0){*/
/*               $("#scheduleResumeAfter").prop('disabled', true);*/
/*             }else{*/
/*                $("#scheduleResumeAfter").prop('disabled', false);*/
/*                if(data.schedule.auto_pause.resume > 90){*/
/*                 $("#rfintervalHour").prop("checked", true);*/
/*                 $("#scheduleResumeAfter").val(data.schedule.auto_pause.resume/60);*/
/*               }else{*/
/*                 $("#rfintervalMunite").prop("checked", true);*/
/*                 $("#scheduleResumeAfter").val(data.schedule.auto_pause.resume);*/
/*               }*/
/*             }*/
/*             */
/*             var apps = data.schedule.fb_account.fb_apps;*/
/* */
/*             for (i = 0; i < apps.length; i++) { */
/*               $('#scheduledPostApp').append("<option value='"+apps[i]['appid']+"'>"+apps[i]['app_name']+"</option>");*/
/*             }*/
/* */
/*             $("#scheduledPostApp").val(data.schedule.post_app);*/
/* */
/*           }else{*/
/*             alertBox(data.message,"danger","#editSchedule .messageBox",false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ l('Unable to complete your request') }}","danger","#editSchedule .messageBox",false);*/
/*         },*/
/*         complete: function() {*/
/*           // Re-enable save schedule post btn*/
/*           $("#editScheduleBtn").prop('disabled', false);*/
/*           kp_preloader("off","#editSchedule .modal-body");*/
/*         }*/
/*       });*/
/* */
/*       // Show the modal*/
/*       $('#editSchedule').modal('show');*/
/*     });*/
/* */
/*     {# ----------------------- Saving schedule ------------------------ #}*/
/*     $("#editScheduleBtn").click(function(){*/
/* */
/*       kp_preloader("on","#editSchedule .modal-body");*/
/* */
/*       var pi = $("#scheduledPostInterval","#editSchedule").val();*/
/*       var apf = $("#scheduleResumeAfter","#editSchedule").val();*/
/* */
/*       var post_interval = $("input[type='radio']:checked","#editSchedule").val() == "minute" ? pi : pi*60 ;*/
/* */
/*       var resume_after = $(".autoPause input[type='radio']:checked","#editSchedule").val() == "minute" ? apf : apf*60 ;*/
/*       */
/*       // Disable save schedule post*/
/*       $("#editScheduleBtn").prop('disabled', true);*/
/* */
/*       $.ajax({*/
/*         url: '{{ base_url("schedules/action/update") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: {*/
/*           schedule_id: $('#ScheduleId').val(),*/
/*           run_at: $("#scheduledPostTime","#editSchedule").val(),*/
/*           post_interval: post_interval,*/
/*           post_app: $("#scheduledPostApp","#editSchedule").val(),*/
/*           fb_account: $("#scheduledFbAccount","#editSchedule").val(),*/
/*           pause_after: $("#schedulePauseAfter","#editSchedule").val(),*/
/*           resume_after: resume_after,*/
/* */
/*           repeat_every: $("#repeatEvery","#editSchedule").val(),*/
/*           end_on: $("#end_on","#editSchedule").val(),*/
/*           */
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/*         },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "success"){*/
/*             alertBox(data.message,"success","#editSchedule .messageBox",false);*/
/*             $(document).on('hide.bs.modal','#editSchedule', function () {location.reload();});*/
/*           }else{*/
/*             if(data.message !== null && typeof data.message === 'object'){*/
/*                 htmlData = "<ul>";*/
/*                 Object.keys(data.message).forEach(function(key) {*/
/*                     htmlData += "<li>" + data.message[key] + "</li>";*/
/*                 });*/
/*                 htmlData += "</ul>";*/
/*             }else{*/
/*                 htmlData = data.message;*/
/*             }*/
/*             alertBox(htmlData,"danger","#editSchedule .messageBox",false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ l('Unable to complete your request') }}","danger","#editSchedule .messageBox",false);*/
/*         },*/
/*         complete: function() {*/
/*           // Re-enable save schedule post btn*/
/*           $("#editScheduleBtn").prop('disabled', false);*/
/*           kp_preloader("off","#editSchedule .modal-body");*/
/*         }*/
/*       });*/
/*       */
/*     });*/
/* */
/*     $( ".togglePauseBtn" ).click(function(){*/
/*       var schedule = $( this );*/
/*         $.ajax({*/
/*           url: '{{ base_url("schedules/action/toggle_schedule_pause") }}',*/
/*           dataType: 'json',*/
/*           type: 'post',*/
/*           contentType: 'application/x-www-form-urlencoded',*/
/*           data: { */
/*             sid: schedule.val(),*/
/*             {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*           },*/
/*           success: function( data, textStatus, jQxhr ){*/
/*               if(data.status == "success"){*/
/*                 schedule.toggleClass( "btn-warning" );*/
/*                 schedule.toggleClass( "btn-primary" );*/
/*                 schedule.find("i").toggleClass( "fa-pause" );*/
/*                 schedule.find("i").toggleClass( "fa-play" );*/
/*                 schedule.find("i").removeClass("fa-exclamation");*/
/*               }else{*/
/*                 schedule.find("i").addClass("fa-exclamation");*/
/*                 schedule.find("i").removeClass("fa-toggle-on");*/
/*               }*/
/*           },*/
/*           error: function( jqXhr, textStatus, errorThrown ){ */
/*               schedule.find("i").addClass("fa-exclamation");*/
/*               schedule.find("i").removeClass("fa-play");*/
/*               schedule.find("i").removeClass("fa-pause");*/
/*               console.log(errorThrown); */
/*           }*/
/*         });*/
/*     });*/
/* */
/*     {# Delete action #}*/
/*     $("#deleteScheduleBtn").click(function(){*/
/*       if($('tbody .checkbox:checked').length > 0){*/
/*        $("#delete_schedule").modal("show");*/
/*       }*/
/*     });*/
/* */
/*     $(".deleteBtn_schedule" ).click(function(){*/
/*       kp_preloader("on","#delete_schedule .modal-body");*/
/*       var schedules = [];*/
/*       $('tbody .checkbox:checked').each(function(){*/
/*         schedules.push($(this).val());*/
/*       });*/
/*       $.ajax({*/
/*         url: '{{ base_url("schedules/action/delete") }}',*/
/*         dataType: 'json',*/
/*         type: 'post',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         data: { */
/*           ids: JSON.stringify(schedules),*/
/*           {{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}')*/
/*          },*/
/*         success: function( data, textStatus, jQxhr ){*/
/*           if(data.status == "success"){*/
/*             alertBox(data.message,"success",".deleteAlertBox_schedule",false,false);*/
/*               $(".deleteBtn_schedule").prop('disabled', true);*/
/*             $(document).on('hide.bs.modal','#delete_schedule', function () {location.reload();});*/
/*           }else{*/
/*             alertBox(data.message,"danger",".deleteAlertBox_schedule",false,false);*/
/*           }*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){ */
/*           console.log(errorThrown);*/
/*           alertBox("{{ lang.s('Unable to complete your request') }}","danger",".deleteAlertBox_schedule",false,false);*/
/*         },*/
/*         complete: function(){*/
/*           kp_preloader("off","#delete_schedule .modal-body");*/
/*         }*/
/*       });*/
/* */
/*       $('.deleteBox_content_schedule').html("");*/
/*     });*/
/* */
/*     $(".scheduleView .btn").on("click",function(){*/
/*         setCookie("schedule_view",$(this).find(".viewType").val(),360);*/
/*         location.reload();*/
/*     });*/
/* */
/*   </script>*/
/* {% endblock %}*/
