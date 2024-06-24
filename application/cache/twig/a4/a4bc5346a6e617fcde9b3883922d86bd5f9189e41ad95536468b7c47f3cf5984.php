<?php

/* settings/components/app_settings/mail_settings.twig */
class __TwigTemplate_ec77a0ed9a24cd837d84e84f7961c6663e58d9b95e7e870bb2ec36961fe9f33d extends Twig_Template
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
    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#mail_settings\">
    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t<span>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mail settings")), "html", null, true);
        echo "</span></a>
  </h4>
</div>
<div id=\"mail_settings\" class=\"panel-collapse collapse\">
\t<div class=\"panel-body\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"input-group\">";
        // line 15
        $context["mail_protocol"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_protocol")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_protocol"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "mail_protocol", array(), "array")));
        // line 16
        echo "\t\t\t\t\t<label for=\"mail_protocol\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mail protocol")), "html", null, true);
        echo "</label>
\t\t\t\t\t<select name=\"mail_protocol\" id=\"mail_protocol\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"mail\"";
        // line 18
        if (((isset($context["mail_protocol"]) ? $context["mail_protocol"] : null) == "mail")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Mail")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"smtp\"";
        // line 19
        if (((isset($context["mail_protocol"]) ? $context["mail_protocol"] : null) == "smtp")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP")), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 smtpOption\">
\t\t\t\t<div class=\"input-group\">";
        // line 26
        $context["mail_smtp_host"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_host")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_host"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "mail_smtp_host", array(), "array")));
        // line 27
        echo "\t\t\t\t\t<label for=\"mail_smtp_host\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP host")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"mail_smtp_host\" class=\"form-control\" id=\"mail_smtp_host\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP host")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["mail_smtp_host"]) ? $context["mail_smtp_host"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 smtpOption\">
\t\t\t\t<div class=\"input-group\">";
        // line 34
        $context["mail_smtp_user"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_user")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_user"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "mail_smtp_user", array(), "array")));
        // line 35
        echo "\t\t\t\t\t<label for=\"mail_smtp_user\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP user")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"mail_smtp_user\" class=\"form-control\" id=\"mail_smtp_user\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP user")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["mail_smtp_user"]) ? $context["mail_smtp_user"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 smtpOption\">
\t\t\t\t<div class=\"input-group\">";
        // line 42
        $context["mail_smtp_pass"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_pass")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_pass"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "mail_smtp_pass", array(), "array")));
        // line 43
        echo "\t\t\t\t\t<label for=\"mail_smtp_pass\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP pass")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"mail_smtp_pass\" class=\"form-control\" id=\"mail_smtp_pass\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP pass")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["mail_smtp_pass"]) ? $context["mail_smtp_pass"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 smtpOption\">
\t\t\t\t<div class=\"input-group\">";
        // line 50
        $context["mail_smtp_port"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_port")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_port"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "mail_smtp_port", array(), "array")));
        // line 51
        echo "\t\t\t\t\t<label for=\"mail_smtp_port\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP port")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"mail_smtp_port\" class=\"form-control\" id=\"mail_smtp_port\" placeholder=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP port")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["mail_smtp_port"]) ? $context["mail_smtp_port"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 smtpOption\">
\t\t\t\t<div class=\"input-group\">";
        // line 58
        $context["mail_smtp_crypto"] = (( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_crypto")))) ? (call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("mail_smtp_crypto"))) : ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "mail_smtp_crypto", array(), "array")));
        // line 59
        echo "\t\t\t\t\t<label for=\"mail_smtp_crypto\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP encryption")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"mail_smtp_crypto\" class=\"form-control\" id=\"mail_smtp_crypto\" placeholder=\"";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SMTP encryption")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["mail_smtp_crypto"]) ? $context["mail_smtp_crypto"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"submit\" name=\"save\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_CHANGES")), "html", null, true);
        echo "\" class=\"btn btn-primary\" />\t\t
\t</div>
</div>
</div>
<script type=\"text/javascript\">
\t\$(function(){

\t\tif(\$(\"#mail_protocol\").val() == \"smtp\"){\$(\".smtpOption\").show()}else{\$(\".smtpOption\").hide()}
\t\t
\t\t\$(\"#mail_protocol\").on(\"change\",function(){
\t\t\tif(\$(this).val() == \"smtp\"){\$(\".smtpOption\").show()}else{\$(\".smtpOption\").hide()}
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "settings/components/app_settings/mail_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  141 => 60,  136 => 59,  134 => 58,  124 => 52,  119 => 51,  117 => 50,  107 => 44,  102 => 43,  100 => 42,  90 => 36,  85 => 35,  83 => 34,  73 => 28,  68 => 27,  66 => 26,  53 => 19,  45 => 18,  39 => 16,  37 => 15,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   <h4 class="panel-title">*/
/*     <a data-toggle="collapse" data-parent="#accordion" href="#mail_settings">*/
/*     <i class="fa fa-envelope" aria-hidden="true"></i>*/
/* 	<span>{{ l('Mail settings') }}</span></a>*/
/*   </h4>*/
/* </div>*/
/* <div id="mail_settings" class="panel-collapse collapse">*/
/* 	<div class="panel-body">*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-6">*/
/* 				<div class="input-group">*/
/* 					{% set mail_protocol = input_post("mail_protocol") is not empty ? input_post("mail_protocol") : app_settings["mail_protocol"] %}*/
/* 					<label for="mail_protocol">{{ l('Mail protocol') }}</label>*/
/* 					<select name="mail_protocol" id="mail_protocol" class="form-control">*/
/* 						<option value="mail" {% if mail_protocol == "mail" %}selected{% endif %}>{{l("Mail")}}</option>*/
/* 						<option value="smtp" {% if mail_protocol == "smtp" %}selected{% endif %}>{{l("SMTP")}}</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-6 smtpOption">*/
/* 				<div class="input-group">*/
/* 					{% set mail_smtp_host = input_post("mail_smtp_host") is not empty ? input_post("mail_smtp_host") : app_settings["mail_smtp_host"] %}*/
/* 					<label for="mail_smtp_host">{{ l('SMTP host') }}</label>*/
/* 					<input type="text" name="mail_smtp_host" class="form-control" id="mail_smtp_host" placeholder="{{ l('SMTP host') }}" value="{{ mail_smtp_host }}" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-6 smtpOption">*/
/* 				<div class="input-group">*/
/* 					{% set mail_smtp_user = input_post("mail_smtp_user") is not empty ? input_post("mail_smtp_user") : app_settings["mail_smtp_user"] %}*/
/* 					<label for="mail_smtp_user">{{ l('SMTP user') }}</label>*/
/* 					<input type="text" name="mail_smtp_user" class="form-control" id="mail_smtp_user" placeholder="{{ l('SMTP user') }}" value="{{ mail_smtp_user }}" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-6 smtpOption">*/
/* 				<div class="input-group">*/
/* 					{% set mail_smtp_pass = input_post("mail_smtp_pass") is not empty ? input_post("mail_smtp_pass") : app_settings["mail_smtp_pass"] %}*/
/* 					<label for="mail_smtp_pass">{{ l('SMTP pass') }}</label>*/
/* 					<input type="text" name="mail_smtp_pass" class="form-control" id="mail_smtp_pass" placeholder="{{ l('SMTP pass') }}" value="{{ mail_smtp_pass }}" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-6 smtpOption">*/
/* 				<div class="input-group">*/
/* 					{% set mail_smtp_port = input_post("mail_smtp_port") is not empty ? input_post("mail_smtp_port") : app_settings["mail_smtp_port"] %}*/
/* 					<label for="mail_smtp_port">{{ l('SMTP port') }}</label>*/
/* 					<input type="text" name="mail_smtp_port" class="form-control" id="mail_smtp_port" placeholder="{{ l('SMTP port') }}" value="{{ mail_smtp_port }}" />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-6 smtpOption">*/
/* 				<div class="input-group">*/
/* 					{% set mail_smtp_crypto = input_post("mail_smtp_crypto") is not empty ? input_post("mail_smtp_crypto") : app_settings["mail_smtp_crypto"] %}*/
/* 					<label for="mail_smtp_crypto">{{ l('SMTP encryption') }}</label>*/
/* 					<input type="text" name="mail_smtp_crypto" class="form-control" id="mail_smtp_crypto" placeholder="{{ l('SMTP encryption') }}" value="{{ mail_smtp_crypto }}" />*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<input type="submit" name="save" value="{{ l('SAVE_CHANGES') }}" class="btn btn-primary" />		*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$(function(){*/
/* */
/* 		if($("#mail_protocol").val() == "smtp"){$(".smtpOption").show()}else{$(".smtpOption").hide()}*/
/* 		*/
/* 		$("#mail_protocol").on("change",function(){*/
/* 			if($(this).val() == "smtp"){$(".smtpOption").show()}else{$(".smtpOption").hide()}*/
/* 		});*/
/* 	});*/
/* </script>*/
