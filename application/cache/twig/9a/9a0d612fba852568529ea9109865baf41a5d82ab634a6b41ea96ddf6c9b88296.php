<?php

/* schedule_posts/schedule_block.twig */
class __TwigTemplate_d33e17f6239d3b4b10eae0f0f45d70e3651fb41ef6fe8642456b88c084d5edc3 extends Twig_Template
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
        echo "<div class=\"row scheduledpost\">
    <div class=\"col-lg-12\">
      <label>";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post interval")), "html", null, true);
        echo "</label>
      <div class=\"row schedulePI\">
        <div class=\"col-xs-6 col-md-4\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"radio\" name=\"timeType\" id=\"intervalMunite\" value=\"minute\" checked />
            </span>
            <span class=\"form-control\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MINUTES")), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"col-xs-6 col-md-4\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"radio\" name=\"timeType\" id=\"intervalHour\" value=\"hour\" />
            </span>
            <span class=\"form-control\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("HOURS")), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
          <select name='scheduledPostInterval' id=\"scheduledPostInterval\" class=\"form-control\">";
        // line 23
        $context["minIntervalSchedule"] = $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "min_interval_schedule", array(), "array");
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["minIntervalSchedule"]) ? $context["minIntervalSchedule"] : null), 90));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "              <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          </select>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <label for=\"scheduledPostTime\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SCHEDULE_POST_START")), "html", null, true);
        echo "
          </label>
          <div class=\"form-group\">
            <div class='input-group date'>
              <input type='text' class=\"form-control\" id='scheduledPostTime' />
              <span class=\"input-group-addon\">
                  <span class=\"fa fa-calendar\"></span>
              </span>
            </div>
            <small style=\"color:red;margin:5px\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Current server time")), "html", null, true);
        echo " :";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "NOW", ((isset($context["date_format"]) ? $context["date_format"] : null) . " H:i")), "html", null, true);
        echo "
            </small>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <label for=\"scheduledPostApp\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("FB_APP")), "html", null, true);
        echo "</label>
          <select name='scheduledPostApp' id=\"scheduledPostApp\" class=\"form-control\">";
        // line 50
        $context["selected"] = ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("scheduledPostApp"))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("scheduledPostApp"))) : ($this->getAttribute((isset($context["fbAccountDefaultApp"]) ? $context["fbAccountDefaultApp"] : null), "row", array(0 => "id"), "method")));
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fbAccountApps"]) ? $context["fbAccountApps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 52
            $context["s"] = ((((isset($context["selected"]) ? $context["selected"] : null) == $this->getAttribute($context["app"], "appid", array()))) ? ("selected") : (""));
            // line 53
            echo "              <option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "appid", array()), "html", null, true);
            echo "'";
            echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "app_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </select>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row scheduledpost\">
    
    <div class=\"col-lg-12\">
      <label for=\"schedulePauseAfter\">";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto pause after (Posts)")), "html", null, true);
        echo "</label>
      <select name='schedulePauseAfter' id=\"schedulePauseAfter\" class=\"form-control\">
        <option value='0'>";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Off")), "html", null, true);
        echo "</option>";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
          <option value='";
            // line 68
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "      </select>
    </div>
      
    <div class=\"col-lg-12\">
      <label for=\"scheduleResumeAfter\">";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Auto resume after")), "html", null, true);
        echo "</label>
      <div class=\"row autoPause\">
        <div class=\"col-xs-6 col-md-4\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"radio\" name=\"rftimeType\" id=\"rfintervalMunite\" value=\"minute\" />
            </span>
            <span class=\"form-control\">";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MINUTES")), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"col-xs-6 col-md-4\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"radio\" name=\"rftimeType\" id=\"rfintervalHour\" value=\"hour\" checked/>
            </span>
            <span class=\"form-control\">";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("HOURS")), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
          <select name='scheduleResumeAfter' id=\"scheduleResumeAfter\" class=\"form-control\" disabled>";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
              <option value='";
            // line 95
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "          </select>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row scheduledpost\">
      <div class=\"col-xs-6\">
        <input name=\"schedule_id\" type=\"hidden\" id=\"schedule_id\" value=\"0\">
        <label for=\"repeatEvery\">";
        // line 106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Repeat frequency")), "html", null, true);
        echo "</label>
        <select name=\"repeatEvery\" id=\"repeatEvery\" class=\"form-control\">
          <option value='0'>";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Once")), "html", null, true);
        echo "</option>
          <option value='1'>";
        // line 109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Every day")), "html", null, true);
        echo "</option>";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 111
            echo "            <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Every %s days", $context["i"])), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(40, 150, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 114
            echo "            <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Every %s days", $context["i"])), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </select>
      </div>
      <div class=\"col-xs-12 col-sm-6\">
        <label for=\"end_on\">";
        // line 119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("End on")), "html", null, true);
        echo ":</label>
        <div class='input-group date'>
          <input type='text' class=\"form-control\" id='end_on' disabled />
          <span class=\"input-group-addon\">
              <span class=\"fa fa-calendar\"></span>
          </span>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "schedule_posts/schedule_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 119,  254 => 116,  244 => 114,  240 => 113,  230 => 111,  226 => 110,  223 => 109,  219 => 108,  214 => 106,  203 => 97,  194 => 95,  188 => 94,  181 => 89,  170 => 81,  160 => 74,  154 => 70,  145 => 68,  139 => 67,  136 => 66,  131 => 64,  120 => 55,  108 => 53,  106 => 52,  102 => 51,  100 => 50,  96 => 48,  86 => 43,  74 => 33,  67 => 27,  57 => 25,  53 => 24,  51 => 23,  44 => 18,  33 => 10,  23 => 3,  19 => 1,);
    }
}
/* <div class="row scheduledpost">*/
/*     <div class="col-lg-12">*/
/*       <label>{{ l('Post interval') }}</label>*/
/*       <div class="row schedulePI">*/
/*         <div class="col-xs-6 col-md-4">*/
/*           <div class="input-group">*/
/*             <span class="input-group-addon">*/
/*               <input type="radio" name="timeType" id="intervalMunite" value="minute" checked />*/
/*             </span>*/
/*             <span class="form-control">{{ l('MINUTES') }}</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-xs-6 col-md-4">*/
/*           <div class="input-group">*/
/*             <span class="input-group-addon">*/
/*               <input type="radio" name="timeType" id="intervalHour" value="hour" />*/
/*             </span>*/
/*             <span class="form-control">{{ l('HOURS') }}</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-xs-12 col-md-4">*/
/*           <select name='scheduledPostInterval' id="scheduledPostInterval" class="form-control">*/
/*             {% set minIntervalSchedule = app_settings['min_interval_schedule'] %}*/
/*             {% for i in minIntervalSchedule ..90 %}*/
/*               <option value='{{ i }}'>{{ i }}</option>*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-lg-6">*/
/*           <label for="scheduledPostTime">*/
/*             {{ l('SCHEDULE_POST_START') }}*/
/*           </label>*/
/*           <div class="form-group">*/
/*             <div class='input-group date'>*/
/*               <input type='text' class="form-control" id='scheduledPostTime' />*/
/*               <span class="input-group-addon">*/
/*                   <span class="fa fa-calendar"></span>*/
/*               </span>*/
/*             </div>*/
/*             <small style="color:red;margin:5px">*/
/*               {{ l('Current server time') }} : {{ 'NOW'|date(date_format ~ " H:i") }}*/
/*             </small>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-lg-6">*/
/*           <label for="scheduledPostApp">{{ l('FB_APP') }}</label>*/
/*           <select name='scheduledPostApp' id="scheduledPostApp" class="form-control">*/
/*             {% set selected = input_post('scheduledPostApp') ? input_post('scheduledPostApp') : fbAccountDefaultApp.row('id') %}*/
/*             {% for app in fbAccountApps %}*/
/*               {% set s = selected == app.appid ? "selected" : "" %}*/
/*               <option value='{{ app.appid }}' {{ s }}>{{ app.app_name }}</option>*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row scheduledpost">*/
/*     */
/*     <div class="col-lg-12">*/
/*       <label for="schedulePauseAfter">{{ l('Auto pause after (Posts)') }}</label>*/
/*       <select name='schedulePauseAfter' id="schedulePauseAfter" class="form-control">*/
/*         <option value='0'>{{ l('Off') }}</option>*/
/*         {% for i in 1..100 %} */
/*           <option value='{{ i }}'>{{ i }}</option>*/
/*         {% endfor %}*/
/*       </select>*/
/*     </div>*/
/*       */
/*     <div class="col-lg-12">*/
/*       <label for="scheduleResumeAfter">{{ l('Auto resume after') }}</label>*/
/*       <div class="row autoPause">*/
/*         <div class="col-xs-6 col-md-4">*/
/*           <div class="input-group">*/
/*             <span class="input-group-addon">*/
/*               <input type="radio" name="rftimeType" id="rfintervalMunite" value="minute" />*/
/*             </span>*/
/*             <span class="form-control">{{ l('MINUTES') }}</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-xs-6 col-md-4">*/
/*           <div class="input-group">*/
/*             <span class="input-group-addon">*/
/*               <input type="radio" name="rftimeType" id="rfintervalHour" value="hour" checked/>*/
/*             </span>*/
/*             <span class="form-control">{{ l('HOURS') }}</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-xs-12 col-md-4">*/
/*           <select name='scheduleResumeAfter' id="scheduleResumeAfter" class="form-control" disabled>*/
/*             {% for i in 1..90 %} */
/*               <option value='{{ i }}'>{{ i }}</option>*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row scheduledpost">*/
/*       <div class="col-xs-6">*/
/*         <input name="schedule_id" type="hidden" id="schedule_id" value="0">*/
/*         <label for="repeatEvery">{{ l('Repeat frequency') }}</label>*/
/*         <select name="repeatEvery" id="repeatEvery" class="form-control">*/
/*           <option value='0'>{{ l('Once') }}</option>*/
/*           <option value='1'>{{ l("Every day") }}</option>*/
/*           {% for i in 2..30 %}*/
/*             <option value='{{ i }}'>{{ l("Every %s days",i) }}</option>*/
/*           {% endfor %}*/
/*           {% for i in range(40,150,10) %}*/
/*             <option value='{{ i }}'>{{ l("Every %s days",i) }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       <div class="col-xs-12 col-sm-6">*/
/*         <label for="end_on">{{ l('End on') }}:</label>*/
/*         <div class='input-group date'>*/
/*           <input type='text' class="form-control" id='end_on' disabled />*/
/*           <span class="input-group-addon">*/
/*               <span class="fa fa-calendar"></span>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
