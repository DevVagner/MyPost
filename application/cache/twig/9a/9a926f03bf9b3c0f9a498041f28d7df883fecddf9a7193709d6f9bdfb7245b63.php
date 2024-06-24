<?php

/* facebook_accounts/components/update_account.twig */
class __TwigTemplate_15033ce63242da5054f66598e4374cd322f28cf3454a1e3022e4b47888d764ad extends Twig_Template
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
        echo "<div id=\"updateFbAccount\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update Facebook account")), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class='updateFbAccountalerts alertBox'>
        \t<div class=\"alert alert-info\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Updating your facebook account")), "html", null, true);
        echo "...
\t        </div>
        </div>";
        // line 15
        echo form_open_multipart();
        echo "
\t        <input type=\"hidden\" name=\"fbaccount_id\" id=\"fbAccountId\" value=\"0\">

\t        <div class=\"updatefbAccountSection\" style=\"display:none\">";
        // line 19
        $context["compp_"] = "update";
        // line 20
        $this->loadTemplate("settings/components/add_fb_account.twig", "facebook_accounts/components/update_account.twig", 20)->display($context);
        // line 21
        echo "\t\t\t</div>

\t\t\t<div class=\"row importGroups\" style=\"display:none;\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p style=\"text-align:center; margin-top: 10px\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Or")), "html", null, true);
        echo "</p>
\t\t\t\t\t<label for=\"htmlpage\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Import groups via html page")), "html", null, true);
        echo " (<small>Save the html page from <a href=\"https://mbasic.facebook.com/groups/?seemore\" target=\"_blank\">https://mbasic.facebook.com/groups/?seemore</a></small>)</label>
\t\t\t\t\t<input type=\"file\" name=\"htmlpage\" id=\"htmlpage\" />
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary uploadGroupsFile\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload Your html file")), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t        </div>
\t    </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Close")), "html", null, true);
        echo "</button>
      \t<input type='button' class='btn btn-primary' id=\"addFbAccountBtn\" value='";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update facebook account")), "html", null, true);
        echo "'>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "facebook_accounts/components/update_account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  73 => 35,  63 => 28,  58 => 26,  54 => 25,  48 => 21,  46 => 20,  44 => 19,  38 => 15,  33 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div id="updateFbAccount" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ l('Update Facebook account') }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class='updateFbAccountalerts alertBox'>*/
/*         	<div class="alert alert-info">*/
/* 	        	{{ l('Updating your facebook account') }}...*/
/* 	        </div>*/
/*         </div>*/
/* */
/*         {{ form_open_multipart() }}*/
/* 	        <input type="hidden" name="fbaccount_id" id="fbAccountId" value="0">*/
/* */
/* 	        <div class="updatefbAccountSection" style="display:none">*/
/* 	        	{% set compp_ = "update" %}*/
/* 		        {% include "settings/components/add_fb_account.twig" %}*/
/* 			</div>*/
/* */
/* 			<div class="row importGroups" style="display:none;">*/
/* 				<div class="col-md-12">*/
/* 					<p style="text-align:center; margin-top: 10px">{{ l('Or') }}</p>*/
/* 					<label for="htmlpage">{{ l('Import groups via html page') }} (<small>Save the html page from <a href="https://mbasic.facebook.com/groups/?seemore" target="_blank">https://mbasic.facebook.com/groups/?seemore</a></small>)</label>*/
/* 					<input type="file" name="htmlpage" id="htmlpage" />*/
/* 					<input type="submit" class="btn btn-primary uploadGroupsFile" value="{{ l("Upload Your html file") }}" />*/
/* 				</div>*/
/* 	        </div>*/
/* 	    </form>*/
/* */
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">{{ l("Close") }}</button>*/
/*       	<input type='button' class='btn btn-primary' id="addFbAccountBtn" value='{{ l("Update facebook account") }}'>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
