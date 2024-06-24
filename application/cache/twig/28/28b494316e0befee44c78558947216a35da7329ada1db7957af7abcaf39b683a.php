<?php

/* home/form.twig */
class __TwigTemplate_eb11f2eb6a47e2a8a856d163e797ff11412a096c095900e580133dd03aceac57 extends Twig_Template
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
        if ((isset($context["post"]) ? $context["post"] : null)) {
            // line 2
            $context["p"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "content"), "method")));
            // line 4
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postTitle", $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "post_title"), "method"))), "html", null, true);
            // line 5
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postId", $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "id"), "method"))), "html", null, true);
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("message", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "message", array()))), "html", null, true);
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("fb_preset_id", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "fb_preset_id", array()))), "html", null, true);
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("itemname", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "itemname", array()))), "html", null, true);
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("itemprice", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "itemprice", array()))), "html", null, true);
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postType", "message")), "html", null, true);
            // line 14
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") == "link")) {
                // line 15
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postType", "link")), "html", null, true);
                // line 16
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("link", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "link", array()))), "html", null, true);
                // line 17
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("picture", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "picture", array()))), "html", null, true);
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("name", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array()))), "html", null, true);
                // line 19
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("caption", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "caption", array()))), "html", null, true);
                // line 20
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("description", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "description", array()))), "html", null, true);
            }
            // line 24
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") == "image")) {
                // line 25
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postType", "image")), "html", null, true);
            }
            // line 29
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") == "video")) {
                // line 30
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postType", "video")), "html", null, true);
                // line 31
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("video", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "video", array()))), "html", null, true);
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("descriptionVideo", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "description_video", array()))), "html", null, true);
            }
        } else {
            // line 35
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_input_post')->getCallable(), array("postType", "message")), "html", null, true);
        }
        // line 37
        echo "
<div class=\"panel panel-default pfPanel\">
\t<div class=\"panel-heading\">
\t\t<ul class=\"postType\">

\t\t\t<li>
\t\t\t<a href=\"#\" onclick=\"return false;\" class=\"postTypeMessage";
        // line 43
        if ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postType")) == "message")) {
            echo "postTypeActive";
        }
        echo "\"><i class=\"fa fa-align-left\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Status")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t<a href=\"#\" onclick=\"return false;\"  class=\"postTypeLink";
        // line 49
        if ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postType")) == "link")) {
            echo "postTypeActive";
        }
        echo "\">
\t\t\t\t<i class=\"fa fa-link\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LINK")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t<a href=\"#\" onclick=\"return false;\"  class=\"postTypeImage";
        // line 56
        if ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postType")) == "image")) {
            echo " postTypeActive";
        }
        echo "\">
\t\t\t\t<i class=\"far fa-images\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("IMAGE")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t<a href=\"#\" onclick=\"return false;\"  class=\"postTypeVideo";
        // line 63
        if ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postType")) == "video")) {
            echo " postTypeActive";
        }
        echo "\">
\t\t\t\t<i class=\"fas fa-video\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIDEO")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t</li>

\t\t</ul>
\t<div class=\"clear\"></div>
</div>
<div class=\"panel-body\">
\t<input type=\"hidden\" name=\"postType\" id=\"postType\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postType")), "html", null, true);
        echo "\" />
\t<input type=\"hidden\" name=\"postId\" id=\"postId\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postId")), "html", null, true);
        echo "\" />
\t<input type=\"hidden\" name=\"URLFrom\" id=\"URLFrom\" value=\"\" />
\t<div class=\"formField descriptionField\">
\t\t<label for=\"message\">";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Message")), "html", null, true);
        echo " <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Spinning example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {foo|bar|foobar}!!")), "html", null, true);
        echo "\"> <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></label>
\t\t<textarea name='message' id=\"message\" rows='5' cols='50' class=\"form-control\" placeholder='";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Your status here...")), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('strip_tags')->getCallable(), array(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("message", false)))), "html", null, true);
        echo "</textarea>";
        // line 80
        $this->loadTemplate("home/fb_status_presets.twig", "home/form.twig", 80)->display($context);
        // line 82
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_sale_post_type", array()) == 1)) {
            // line 84
            $context["link_style"] = "none";
            // line 85
            if ( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("itemprice")))) {
                // line 86
                $context["link_style"] = "block";
            }
            // line 88
            echo "
\t\t<div class=\"itemPriceFieldsToggle\" style=\"overflow:auto\">
\t\t\t<button type=\"button\" class=\"btn btn-default pull-right\">";
            // line 90
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add product price")), "html", null, true);
            echo "</button>
\t\t</div>

\t\t<div class=\"ItemDetails\" style=\"display:";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["link_style"]) ? $context["link_style"] : null), "html", null, true);
            echo "\">
\t\t\t<div class=\"formField\">
\t\t\t\t<label for=\"itemname\">";
            // line 95
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Product name")), "html", null, true);
            echo " <small>(";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Product name must be in English")), "html", null, true);
            echo ")</small> <a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Example: T-shirt, headset, smartphone")), "html", null, true);
            echo "\"> <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a></label>
\t\t\t\t<input type='text' id=\"itemname\" name='itemname' class=\"form-control\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("itemname")), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Product title here.")), "html", null, true);
            echo "'>
\t\t\t</div>
\t\t\t<div class=\"formField\">
\t\t\t\t<label for=\"itemprice\">";
            // line 99
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Product price")), "html", null, true);
            echo "</label>
\t\t\t\t<input type='text' name='itemprice' id=\"itemprice\" class=\"form-control\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("itemprice")), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Product price here.")), "html", null, true);
            echo "' />
\t\t\t</div>
\t\t</div>";
        }
        // line 104
        echo "\t</div>

\t<div id=\"postLinkDetails\"";
        // line 106
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") != "link")) {
            echo "style='display:none'";
        }
        echo ">
\t\t<div class=\"formField\">
\t\t\t<label for=\"link\">";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LINK")), "html", null, true);
        echo "
\t\t\t\t<a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"Link sub fields Are no longer supported from Facebook API\">
\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a>
\t\t\t</label>
\t\t\t<input type='text' name='link' class=\"form-control\" id=\"link\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("link")), "html", null, true);
        echo "\" placeholder='";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post link here.")), "html", null, true);
        echo "' />
\t\t\t<span class=\"linkError\"></span>
\t\t</div>";
        // line 116
        if ((($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_link_customize", array()) == 1) && ($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "enable_link_customization", array()) == 1))) {
            // line 117
            echo "\t\t<div class=\"linkSubFieldsToggle\" style=\"overflow:auto\">
\t\t\t<button type=\"button\" class=\"btn btn-default pull-right\">";
            // line 118
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Customize link fields")), "html", null, true);
            echo "</button>
\t\t</div>";
            // line 121
            $context["link_style"] = "none";
            // line 122
            if (((( !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("name"))) ||  !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("picture")))) ||  !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("caption")))) ||  !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("description"))))) {
                // line 123
                $context["link_style"] = "block";
            }
            // line 125
            echo "\t\t\t
\t\t<div class=\"linkSubFields\" style=\"display:";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["link_style"]) ? $context["link_style"] : null), "html", null, true);
            echo "\">
\t\t\t<div class=\"formField\">
\t\t\t\t<label for=\"picture\">";
            // line 128
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PICTURE")), "html", null, true);
            echo "</label>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type='text' name='picture' id=\"picture\" class=\"form-control\"  value=\"";
            // line 130
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("picture")), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post picture here.")), "html", null, true);
            echo "' />
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" id=\"mediaLibraryImageLink\" class=\"btn btn-default\">";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
            echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"formField\">
\t\t\t\t<label for=\"name\">";
            // line 138
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Title")), "html", null, true);
            echo "</label>
\t\t\t\t<input type='text' id=\"name\" name='name' class=\"form-control\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("name")), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post title here.")), "html", null, true);
            echo "'>
\t\t\t</div>
\t\t\t<div class=\"formField\">
\t\t\t\t<label for=\"caption\">";
            // line 142
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CAPTION")), "html", null, true);
            echo "</label>
\t\t\t\t<input type='text' name='caption' id=\"caption\" class=\"form-control\" value=\"";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("caption")), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post Caption here.")), "html", null, true);
            echo "' />
\t\t\t</div>
\t\t\t<div class=\"formField\">
\t\t\t\t<label for=\"description\">";
            // line 146
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DESCRIPTION")), "html", null, true);
            echo "</label>
\t\t\t\t<textarea name='description' id=\"description\" rows='3' cols='50' class=\"form-control\" placeholder='";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post description here.")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("description")), "html", null, true);
            echo "</textarea>
\t\t\t</div>
\t\t</div>";
        }
        // line 151
        echo "

\t</div>

\t<div id=\"postImageDetails\"";
        // line 155
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") != "image")) {
            echo "style='display:none'";
        }
        echo ">
\t\t<div class=\"formField\">
\t\t\t<label for=\"imageURL\">";
        // line 157
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("IMAGE")), "html", null, true);
        echo " 
\t\t\t\t<a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"Image URL\"> 
\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a>
\t\t\t</label>

\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"enable360Image\" name=\"enable360Image\" aria-label=\"Unique post\"";
        // line 163
        if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "allow_spherical_photo", array()) == true)) {
            echo "checked";
        }
        echo " />
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t\t<label for=\"enable360Image\" class=\"input-text\">";
        // line 166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("360° image")), "html", null, true);
        echo "</label>

\t\t\t<div class=\"multiImages\">
\t\t\t\t<input type='hidden' name='image_number' id=\"image_number\" value=\"0\" />";
        // line 170
        if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") == "image") ||  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array()), 0, array(), "array")))) {
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 172
                echo "\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type='text' name='imageURL' class=\"form-control\" id=\"imageURL_";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
                echo "\" placeholder='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Image URL.")), "html", null, true);
                echo "' />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mediaLibraryImage\" value=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<i class=\"fa fa-times removeImage\"";
                // line 177
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "style=\"display:none;\"";
                }
                echo " aria-hidden=\"true\"></i>
\t\t\t\t\t</div>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 181
            echo "\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type='text' name='imageURL' class=\"form-control\" id=\"imageURL_0\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("imageURL")), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Image URL.")), "html", null, true);
            echo "' />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mediaLibraryImage\" value=\"0\">";
            // line 184
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<i class=\"fa fa-times removeImage\" style=\"display:none;\" aria-hidden=\"true\"></i>
\t\t\t\t\t</div>";
        }
        // line 189
        echo "\t\t\t</div>
\t\t</div>
\t\t<button type=\"button\" class=\"btn btn-default addNewImageField\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
\t</div>

\t<div id=\"postVideoDetails\"";
        // line 194
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "row", array(0 => "type"), "method") != "video")) {
            echo "style='display:none'";
        }
        echo ">
\t\t<div class=\"formField\">
\t\t\t\t<label for=\"video\">";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIDEO")), "html", null, true);
        echo "
\t\t\t\t<a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"Supported formats for uploaded videos: 3g2, 3gp, 3gpp, asf, avi, dat, divx, dv, f4v, flv, m2ts, m4v, mkv, mod, mov, mp4, mpe, mpeg, mpeg4, mpg, mts, nsv, ogm, ogv, qt, tod, ts, vob, wmv.\"> 
\t\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a>
\t\t\t\t</label>
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type='text' name='video' class=\"form-control\" id=\"video\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("video")), "html", null, true);
        echo "\" placeholder='";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Video link (3gp, avi, mov, mp4, mpeg, mpeg4, vob, wmv...etc).")), "html", null, true);
        echo "' />
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" id=\"mediaLibraryVideo\" class=\"btn btn-default\">";
        // line 203
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>

<div class=\"panel panel-default\">
  <div class=\"panel-body\">";
        // line 213
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) {
            // line 214
            echo "\t<div class=\"formField\">
\t\t<label for=\"defTime\">";
            // line 215
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_INTERVAL_SEC")), "html", null, true);
            // line 217
            if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ipri", array(), "array") != 0)) {
                // line 218
                echo "\t\t\t\t<a href=\"#\"  onclick=\"return false;\" data-toggle=\"kp_tooltip\" data-placement=\"top\" style=\"float:right\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Post interval is random, the real interval is between (selected interval and %s seconds) ", $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ipri", array(), "array"))), "html", null, true);
                echo "\" > <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i></a>";
            }
            // line 220
            echo "
\t\t</label>
\t\t<select name='defTime' id=\"defTime\" class=\"form-control\">";
            // line 223
            $context["selected"] = call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("defTime"));
            // line 225
            if (( !twig_test_empty($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array")) &&  !twig_test_empty(call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("defTime"))))) {
                // line 226
                $context["selected"] = $this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array");
            }
            // line 229
            $context["minInterval"] = $this->getAttribute((isset($context["Options"]) ? $context["Options"] : null), "get", array(0 => "min_interval"), "method");
            // line 230
            $context["minInterval"] = ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "min_interval", array()) < 5)) ? (5) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "min_interval", array())));
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["minInterval"]) ? $context["minInterval"] : null), ((isset($context["minInterval"]) ? $context["minInterval"] : null) + 60), 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 232
                $context["currentUserInterval"] = (( !twig_test_empty($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array"))) ? ($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array")) : ((isset($context["minInterval"]) ? $context["minInterval"] : null)));
                // line 233
                if (((isset($context["currentUserInterval"]) ? $context["currentUserInterval"] : null) == $context["i"])) {
                    // line 234
                    echo "\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "' selected==\"selected\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                    echo "</option>";
                } else {
                    // line 236
                    echo "\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(((isset($context["minInterval"]) ? $context["minInterval"] : null) + 70), ((isset($context["minInterval"]) ? $context["minInterval"] : null) + 300), 30));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 240
                $context["currentUserInterval"] = (( !twig_test_empty($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array"))) ? ($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array")) : ((isset($context["minInterval"]) ? $context["minInterval"] : null)));
                // line 241
                if (((isset($context["currentUserInterval"]) ? $context["currentUserInterval"] : null) == $context["i"])) {
                    // line 242
                    echo "\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "' selected==\"selected\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                    echo "</option>";
                } else {
                    // line 244
                    echo "\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(((isset($context["minInterval"]) ? $context["minInterval"] : null) + 330), ((isset($context["minInterval"]) ? $context["minInterval"] : null) + 1500), 60));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 248
                $context["currentUserInterval"] = (( !twig_test_empty($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array"))) ? ($this->getAttribute((isset($context["user_options"]) ? $context["user_options"] : null), "postInterval", array(), "array")) : ((isset($context["minInterval"]) ? $context["minInterval"] : null)));
                // line 249
                if (((isset($context["currentUserInterval"]) ? $context["currentUserInterval"] : null) == $context["i"])) {
                    // line 250
                    echo "\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "' selected==\"selected\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                    echo "</option>";
                } else {
                    // line 252
                    echo "\t\t\t\t\t<option value='";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sec")), "html", null, true);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "\t\t</select>
\t</div>";
        }
        // line 258
        echo "\t<div class=\"formField\">";
        // line 259
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) {
            // line 260
            echo "\t\t<button onclick=\"return false;\" class='btn btn-primary' id=\"post\" name='post'>
\t\t\t<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>";
            // line 261
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SEND_NOW")), "html", null, true);
            echo "
\t\t</button>";
        }
        // line 265
        if ((call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postId")) != "")) {
            // line 266
            echo "\t\t\t<button onclick=\"return false;\" class='btn btn-primary' id=\"updatepost\" name='updatepost'>
\t\t\t<i class=\"fas fa-save\" aria-hidden=\"true\"></i>";
            // line 267
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update post")), "html", null, true);
            echo "</button>";
        } else {
            // line 269
            echo "\t\t\t<button onclick=\"return false;\" class='btn btn-primary' id=\"savepost\" name='savepost'>
\t\t\t<i class=\"fas fa-save\" aria-hidden=\"true\"></i>";
            // line 270
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Save post")), "html", null, true);
            echo "</button>";
        }
        // line 272
        echo "\t\t
\t\t<button onclick=\"return false;\" class='btn btn-primary' id=\"scheduledpost\">
\t\t\t <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule post")), "html", null, true);
        echo " 
\t\t</button>";
        // line 277
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) {
            // line 278
            echo "\t<div class=\"controls\">
\t\t<button id=\"pauseButton\" class=\"btn btn-primary\" onclick=\"postPause()\" disabled>
\t\t\t<i class=\"fa fa-pause\" aria-hidden=\"true\"></i>";
            // line 280
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("PAUSE")), "html", null, true);
            echo " 
\t\t</button>
\t\t
\t\t<button id=\"resumeButton\" class=\"btn btn-primary\"  onclick=\"postResume()\" disabled>
\t\t\t<i class=\"fa fa-play\" aria-hidden=\"true\"></i>";
            // line 284
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("RESUME")), "html", null, true);
            echo "
\t\t</button>
\t</div>

    <div class=\"postingDetails\">";
            // line 289
            if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "enable_instant_post", array(), "array") == 1)) {
                // line 290
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("ELAPSED")), "html", null, true);
                echo " : <strong><span class=\"totalPostTime\">-</span></strong> |";
                // line 291
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("TIME_LEFT")), "html", null, true);
                echo " : <strong><span class=\"leftTime\">-</span></strong>";
            }
            // line 293
            echo "\t</div>";
        }
        // line 296
        echo "
\t</div>";
        // line 298
        $this->loadTemplate("schedule_posts/schedule_block.twig", "home/form.twig", 298)->display($context);
        // line 299
        echo "\t<div class=\"row scheduledpost\">
\t\t<div class=\"col-lg-12\">
\t\t\t<button onclick=\"return false;\" class='btn btn-primary' id=\"saveScheduledPost\" name='scheduledpost'>
\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 302
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_SCHEDULED_POSTS")), "html", null, true);
        echo "
\t\t\t</button>
\t\t</div>
\t</div>
\t<div class=\"preloader\"></div>
\t<div class=\"messageBox\"></div>
</div>
</div>

<div id=\"mediaLibModalImage\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" data-backdrop=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 316
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Media library")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"elfinderImage\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"mediaLibModalVideo\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" data-backdrop=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 330
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Media library")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"elfinderVideo\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Save post dialog -->
<div id=\"postTitleModal\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 345
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_TITLE")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"messageBoxModal\"></div>
\t\t\t\t<div class=\"formField\">
\t\t\t\t\t<label class=\"sr-only\" for=\"postTitle\">";
        // line 350
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_TITLE")), "html", null, true);
        echo "</label>
\t\t\t\t\t<input type=\"text\" name='postTitle' id=\"postTitle\" class=\"form-control\" placeholder='";
        // line 351
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_TITLE")), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('input_post')->getCallable(), array("postTitle")), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 355
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</button>
\t\t\t\t<button onclick=\"return false;\" id=\"savePostModal\" class=\"btn btn-primary\">";
        // line 356
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("SAVE_POST")), "html", null, true);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "home/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  743 => 356,  739 => 355,  730 => 351,  726 => 350,  718 => 345,  700 => 330,  683 => 316,  666 => 302,  661 => 299,  659 => 298,  656 => 296,  653 => 293,  649 => 291,  646 => 290,  644 => 289,  637 => 284,  630 => 280,  626 => 278,  624 => 277,  620 => 274,  616 => 272,  612 => 270,  609 => 269,  605 => 267,  602 => 266,  600 => 265,  595 => 261,  592 => 260,  590 => 259,  588 => 258,  584 => 255,  572 => 252,  564 => 250,  562 => 249,  560 => 248,  556 => 247,  544 => 244,  536 => 242,  534 => 241,  532 => 240,  528 => 239,  516 => 236,  508 => 234,  506 => 233,  504 => 232,  500 => 231,  498 => 230,  496 => 229,  493 => 226,  491 => 225,  489 => 223,  485 => 220,  480 => 218,  478 => 217,  476 => 215,  473 => 214,  471 => 213,  459 => 203,  452 => 201,  444 => 196,  437 => 194,  430 => 189,  423 => 184,  416 => 182,  413 => 181,  394 => 177,  387 => 175,  378 => 173,  375 => 172,  358 => 171,  356 => 170,  350 => 166,  342 => 163,  333 => 157,  326 => 155,  320 => 151,  312 => 147,  308 => 146,  300 => 143,  296 => 142,  288 => 139,  284 => 138,  276 => 133,  269 => 130,  264 => 128,  259 => 126,  256 => 125,  253 => 123,  251 => 122,  249 => 121,  245 => 118,  242 => 117,  240 => 116,  233 => 112,  226 => 108,  219 => 106,  215 => 104,  207 => 100,  203 => 99,  195 => 96,  187 => 95,  182 => 93,  176 => 90,  172 => 88,  169 => 86,  167 => 85,  165 => 84,  163 => 82,  161 => 80,  156 => 78,  150 => 77,  144 => 74,  140 => 73,  129 => 65,  122 => 63,  114 => 58,  107 => 56,  99 => 51,  92 => 49,  84 => 44,  78 => 43,  70 => 37,  67 => 35,  63 => 32,  61 => 31,  59 => 30,  57 => 29,  54 => 25,  52 => 24,  49 => 20,  47 => 19,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  37 => 14,  35 => 11,  33 => 10,  31 => 9,  29 => 8,  27 => 7,  25 => 5,  23 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if post %}*/
/* 	{% set p = json_decode(post.row('content')) %}*/
/* */
/* 	{{ set_input_post('postTitle',post.row('post_title')) }}*/
/* 	{{ set_input_post('postId',post.row('id')) }}*/
/* 	*/
/* 	{{ set_input_post('message',p.message) }}*/
/* 	{{ set_input_post('fb_preset_id',p.fb_preset_id) }}*/
/* 	{{ set_input_post('itemname',p.itemname) }}*/
/* 	{{ set_input_post('itemprice',p.itemprice) }}*/
/* 	{{ set_input_post('postType','message') }}*/
/* 	*/
/* 	{# Set Post type #}*/
/* 	{% if post.row('type') == "link" %}*/
/* 		{{ set_input_post('postType','link') }}*/
/* 		{{ set_input_post('link',p.link) }}*/
/* 		{{ set_input_post('picture',p.picture) }}*/
/* 		{{ set_input_post('name',p.name) }}*/
/* 		{{ set_input_post('caption',p.caption) }}*/
/* 		{{ set_input_post('description',p.description) }}*/
/* 	{% endif %}*/
/* */
/* 	{# Set Post type #}*/
/* 	{% if post.row('type') == "image" %}*/
/* 		{{ set_input_post('postType','image') }}*/
/* 	{% endif %}*/
/* */
/* 	{# Set Post type #}*/
/* 	{% if post.row('type') == "video" %}*/
/* 		{{ set_input_post('postType','video') }}*/
/* 		{{ set_input_post('video',p.video) }}*/
/* 		{{ set_input_post('descriptionVideo',p.description_video) }}*/
/* 	{% endif %}*/
/* {% else %}*/
/* 	{{ set_input_post('postType','message') }}*/
/* {% endif %}*/
/* */
/* <div class="panel panel-default pfPanel">*/
/* 	<div class="panel-heading">*/
/* 		<ul class="postType">*/
/* */
/* 			<li>*/
/* 			<a href="#" onclick="return false;" class="postTypeMessage {% if input_post("postType") == "message" %}postTypeActive{% endif %}"><i class="fa fa-align-left" aria-hidden="true"></i>*/
/* 				<span class="hidden-xs hidden-sm hidden-md">{{ l("Status") }}</span>*/
/* 			</a>*/
/* 			</li>*/
/* */
/* 			<li>*/
/* 			<a href="#" onclick="return false;"  class="postTypeLink {% if input_post("postType") == "link" %}postTypeActive{% endif %}">*/
/* 				<i class="fa fa-link" aria-hidden="true"></i>*/
/* 				<span class="hidden-xs hidden-sm hidden-md">{{ l("LINK") }}</span>*/
/* 			</a>*/
/* 			</li>*/
/* */
/* 			<li>*/
/* 			<a href="#" onclick="return false;"  class="postTypeImage {% if input_post('postType') == 'image' %} postTypeActive{% endif %}">*/
/* 				<i class="far fa-images" aria-hidden="true"></i>*/
/* 				<span class="hidden-xs hidden-sm hidden-md">{{ l("IMAGE") }}</span>*/
/* 			</a>*/
/* 			</li>*/
/* */
/* 			<li>*/
/* 			<a href="#" onclick="return false;"  class="postTypeVideo {% if input_post('postType') == 'video' %} postTypeActive{% endif %}">*/
/* 				<i class="fas fa-video" aria-hidden="true"></i>*/
/* 				<span class="hidden-xs hidden-sm hidden-md">{{ l("VIDEO") }}</span>*/
/* 			</a>*/
/* 			</li>*/
/* */
/* 		</ul>*/
/* 	<div class="clear"></div>*/
/* </div>*/
/* <div class="panel-body">*/
/* 	<input type="hidden" name="postType" id="postType" value="{{ input_post("postType") }}" />*/
/* 	<input type="hidden" name="postId" id="postId" value="{{ input_post("postId") }}" />*/
/* 	<input type="hidden" name="URLFrom" id="URLFrom" value="" />*/
/* 	<div class="formField descriptionField">*/
/* 		<label for="message">{{ l("Message") }} <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="{{ l("Spinning example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {foo|bar|foobar}!!") }}"> <i class="fa fa-question-circle" aria-hidden="true"></i></a></label>*/
/* 		<textarea name='message' id="message" rows='5' cols='50' class="form-control" placeholder='{{ l("Your status here...") }}'>{{ strip_tags(input_post("message", FALSE)) }}</textarea>*/
/* */
/* 		{% include "home/fb_status_presets.twig" %}*/
/* 		*/
/* 		{% if app_settings.enable_sale_post_type == 1 %}*/
/* */
/* 		{% set link_style = "none" %}*/
/* 		{% if input_post("itemprice") is not empty %}*/
/* 			{% set link_style = "block" %}*/
/* 		{% endif %}*/
/* */
/* 		<div class="itemPriceFieldsToggle" style="overflow:auto">*/
/* 			<button type="button" class="btn btn-default pull-right">{{l('Add product price')}}</button>*/
/* 		</div>*/
/* */
/* 		<div class="ItemDetails" style="display:{{ link_style }}">*/
/* 			<div class="formField">*/
/* 				<label for="itemname">{{ l("Product name") }} <small>({{ l("Product name must be in English") }})</small> <a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="{{ l("Example: T-shirt, headset, smartphone") }}"> <i class="fa fa-question-circle" aria-hidden="true"></i></a></label>*/
/* 				<input type='text' id="itemname" name='itemname' class="form-control" value="{{ input_post("itemname") }}" placeholder='{{ l("Product title here.") }}'>*/
/* 			</div>*/
/* 			<div class="formField">*/
/* 				<label for="itemprice">{{ l("Product price") }}</label>*/
/* 				<input type='text' name='itemprice' id="itemprice" class="form-control" value="{{ input_post("itemprice") }}" placeholder='{{ l("Product price here.") }}' />*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* */
/* 	<div id="postLinkDetails" {% if post.row('type') != "link" %}style='display:none'{% endif %}>*/
/* 		<div class="formField">*/
/* 			<label for="link">{{ l("LINK") }}*/
/* 				<a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="Link sub fields Are no longer supported from Facebook API">*/
/* 				<i class="fa fa-question-circle" aria-hidden="true"></i></a>*/
/* 			</label>*/
/* 			<input type='text' name='link' class="form-control" id="link" value="{{ input_post("link") }}" placeholder='{{ l("Post link here.") }}' />*/
/* 			<span class="linkError"></span>*/
/* 		</div>*/
/* */
/* 		{% if app_settings.enable_link_customize == 1 and user_options.enable_link_customization == 1 %}*/
/* 		<div class="linkSubFieldsToggle" style="overflow:auto">*/
/* 			<button type="button" class="btn btn-default pull-right">{{l('Customize link fields')}}</button>*/
/* 		</div>*/
/* */
/* 		{% set link_style = "none" %}*/
/* 		{% if input_post("name") is not empty or input_post("picture") is not empty or input_post("caption") is not empty or input_post("description") is not empty%}*/
/* 			{% set link_style = "block" %}*/
/* 		{% endif %}*/
/* 			*/
/* 		<div class="linkSubFields" style="display:{{ link_style }}">*/
/* 			<div class="formField">*/
/* 				<label for="picture">{{ l("PICTURE") }}</label>*/
/* 				<div class="input-group">*/
/* 					<input type='text' name='picture' id="picture" class="form-control"  value="{{ input_post("picture") }}" placeholder='{{ l("Post picture here.") }}' />*/
/* 					<div class="input-group-btn">*/
/* 						<button type="button" id="mediaLibraryImageLink" class="btn btn-default">*/
/* 							{{ l("Upload") }}</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="formField">*/
/* 				<label for="name">{{ l("Title") }}</label>*/
/* 				<input type='text' id="name" name='name' class="form-control" value="{{ input_post("name") }}" placeholder='{{ l("Post title here.") }}'>*/
/* 			</div>*/
/* 			<div class="formField">*/
/* 				<label for="caption">{{ l("CAPTION") }}</label>*/
/* 				<input type='text' name='caption' id="caption" class="form-control" value="{{ input_post("caption") }}" placeholder='{{ l("Post Caption here.") }}' />*/
/* 			</div>*/
/* 			<div class="formField">*/
/* 				<label for="description">{{ l("DESCRIPTION") }}</label>*/
/* 				<textarea name='description' id="description" rows='3' cols='50' class="form-control" placeholder='{{ l("Post description here.") }}'>{{ input_post("description") }}</textarea>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endif %}*/
/* */
/* */
/* 	</div>*/
/* */
/* 	<div id="postImageDetails" {% if post.row('type') != "image" %}style='display:none'{% endif %}>*/
/* 		<div class="formField">*/
/* 			<label for="imageURL">{{ l("IMAGE") }} */
/* 				<a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="Image URL"> */
/* 				<i class="fa fa-question-circle" aria-hidden="true"></i></a>*/
/* 			</label>*/
/* */
/* 			<label class="switch">*/
/* 				<input type="checkbox" id="enable360Image" name="enable360Image" aria-label="Unique post" {% if p.allow_spherical_photo == true %}checked{% endif %} />*/
/* 				<span class="slider round"></span>*/
/* 			</label>*/
/* 			<label for="enable360Image" class="input-text">{{ l('360° image') }}</label>*/
/* */
/* 			<div class="multiImages">*/
/* 				<input type='hidden' name='image_number' id="image_number" value="0" />*/
/* 				{% if post.row('type') == "image" or p.image[0] is not empty %}*/
/* 					{% for image in p.image %}*/
/* 					<div class="input-group">*/
/* 						<input type='text' name='imageURL' class="form-control" id="imageURL_{{ loop.index0 }}" value="{{ p.image[loop.index0] }}" placeholder='{{ l("Image URL.") }}' />*/
/* 						<div class="input-group-btn">*/
/* 							<button type="button" class="btn btn-default mediaLibraryImage" value="{{ loop.index0 }}">{{ l("Upload") }}</button>*/
/* 						</div>*/
/* 						<i class="fa fa-times removeImage" {% if loop.index0 == 0 %}style="display:none;"{% endif %} aria-hidden="true"></i>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				{% else %}*/
/* 					<div class="input-group">*/
/* 						<input type='text' name='imageURL' class="form-control" id="imageURL_0" value="{{ input_post("imageURL") }}" placeholder='{{ l("Image URL.") }}' />*/
/* 						<div class="input-group-btn">*/
/* 							<button type="button" class="btn btn-default mediaLibraryImage" value="0">{{ l("Upload") }}</button>*/
/* 						</div>*/
/* 						<i class="fa fa-times removeImage" style="display:none;" aria-hidden="true"></i>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<button type="button" class="btn btn-default addNewImageField"><i class="fa fa-plus" aria-hidden="true"></i></button>*/
/* 	</div>*/
/* */
/* 	<div id="postVideoDetails" {% if post.row('type') != "video" %}style='display:none'{% endif %}>*/
/* 		<div class="formField">*/
/* 				<label for="video">{{ l("VIDEO") }}*/
/* 				<a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="Supported formats for uploaded videos: 3g2, 3gp, 3gpp, asf, avi, dat, divx, dv, f4v, flv, m2ts, m4v, mkv, mod, mov, mp4, mpe, mpeg, mpeg4, mpg, mts, nsv, ogm, ogv, qt, tod, ts, vob, wmv."> */
/* 					<i class="fa fa-question-circle" aria-hidden="true"></i></a>*/
/* 				</label>*/
/* 				<div class="input-group">*/
/* 					<input type='text' name='video' class="form-control" id="video" value="{{ input_post("video") }}" placeholder='{{ l("Video link (3gp, avi, mov, mp4, mpeg, mpeg4, vob, wmv...etc).") }}' />*/
/* 					<div class="input-group-btn">*/
/* 						<button type="button" id="mediaLibraryVideo" class="btn btn-default">{{ l("Upload") }}</button>*/
/* 					</div>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/* 	{% if app_settings['enable_instant_post'] == 1 %}*/
/* 	<div class="formField">*/
/* 		<label for="defTime">{{ l('POST_INTERVAL_SEC') }}*/
/* */
/* 			{% if app_settings['ipri'] != 0 %}*/
/* 				<a href="#"  onclick="return false;" data-toggle="kp_tooltip" data-placement="top" style="float:right" title="{{ l('Post interval is random, the real interval is between (selected interval and %s seconds) ',app_settings['ipri'])}}" > <i class="fa fa-question-circle" aria-hidden="true"></i></a>*/
/* 			{% endif  %}*/
/* */
/* 		</label>*/
/* 		<select name='defTime' id="defTime" class="form-control">*/
/* 			{% set selected = input_post('defTime') %}					*/
/* 			*/
/* 			{% if user_options['postInterval'] is not empty and input_post('defTime') is not empty %}*/
/* 				{% set selected = user_options['postInterval'] %}*/
/* 			{% endif %}*/
/* */
/* 			{% set minInterval = Options.get('min_interval') %}*/
/* 			{% set minInterval = settings.min_interval < 5 ? 5 : settings.min_interval %}*/
/* 			{% for i in range(minInterval, minInterval+60, 10) %}*/
/* 				{% set currentUserInterval = user_options['postInterval'] is not empty ? user_options['postInterval'] : minInterval %}*/
/* 				{% if currentUserInterval == i %}*/
/* 					<option value='{{ i }}' selected=="selected">{{ i }} {{ l("Sec") }}</option>*/
/* 				{% else %}*/
/* 					<option value='{{ i }}'>{{ i }} {{ l("Sec") }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			{% for i in range(minInterval+70, minInterval+300, 30) %}*/
/* 				{% set currentUserInterval = user_options['postInterval'] is not empty ? user_options['postInterval'] : minInterval %}*/
/* 				{% if currentUserInterval == i %}*/
/* 					<option value='{{ i }}' selected=="selected">{{ i }} {{ l("Sec") }}</option>*/
/* 				{% else %}*/
/* 					<option value='{{ i }}'>{{ i }} {{ l("Sec") }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			{% for i in range(minInterval+330, minInterval+1500, 60) %}*/
/* 				{% set currentUserInterval = user_options['postInterval'] is not empty ? user_options['postInterval'] : minInterval %}*/
/* 				{% if currentUserInterval == i %}*/
/* 					<option value='{{ i }}' selected=="selected">{{ i }} {{ l("Sec") }}</option>*/
/* 				{% else %}*/
/* 					<option value='{{ i }}'>{{ i }} {{ l("Sec") }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	<div class="formField">*/
/* 		{% if app_settings['enable_instant_post'] == 1 %}*/
/* 		<button onclick="return false;" class='btn btn-primary' id="post" name='post'>*/
/* 			<i class="fa fa-paper-plane" aria-hidden="true"></i> {{ l("SEND_NOW") }}*/
/* 		</button>*/
/* 	 	{% endif %}*/
/* 	 	*/
/* 		{% if input_post("postId") != "" %}*/
/* 			<button onclick="return false;" class='btn btn-primary' id="updatepost" name='updatepost'>*/
/* 			<i class="fas fa-save" aria-hidden="true"></i> {{ l("Update post") }}</button>*/
/* 		{% else %}*/
/* 			<button onclick="return false;" class='btn btn-primary' id="savepost" name='savepost'>*/
/* 			<i class="fas fa-save" aria-hidden="true"></i> {{ l("Save post") }}</button>*/
/* 		{% endif %}*/
/* 		*/
/* 		<button onclick="return false;" class='btn btn-primary' id="scheduledpost">*/
/* 			 <i class="fa fa-calendar" aria-hidden="true"></i> {{ l("Schedule post") }} */
/* 		</button>*/
/* */
/* 		{% if app_settings['enable_instant_post'] == 1 %}*/
/* 	<div class="controls">*/
/* 		<button id="pauseButton" class="btn btn-primary" onclick="postPause()" disabled>*/
/* 			<i class="fa fa-pause" aria-hidden="true"></i> {{ l('PAUSE') }} */
/* 		</button>*/
/* 		*/
/* 		<button id="resumeButton" class="btn btn-primary"  onclick="postResume()" disabled>*/
/* 			<i class="fa fa-play" aria-hidden="true"></i> {{ l('RESUME') }}*/
/* 		</button>*/
/* 	</div>*/
/* */
/*     <div class="postingDetails">*/
/* 		{% if app_settings['enable_instant_post'] == 1 %}*/
/* 			{{ l('ELAPSED') }} : <strong><span class="totalPostTime">-</span></strong> | */
/* 			{{ l('TIME_LEFT') }} : <strong><span class="leftTime">-</span></strong>*/
/* 		{% endif %}*/
/* 	</div>*/
/* */
/* 	{% endif %}*/
/* */
/* 	</div>*/
/* 	{% include "schedule_posts/schedule_block.twig" %}*/
/* 	<div class="row scheduledpost">*/
/* 		<div class="col-lg-12">*/
/* 			<button onclick="return false;" class='btn btn-primary' id="saveScheduledPost" name='scheduledpost'>*/
/* 				<i class="fa fa-calendar" aria-hidden="true"></i> {{ l("SAVE_SCHEDULED_POSTS") }}*/
/* 			</button>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="preloader"></div>*/
/* 	<div class="messageBox"></div>*/
/* </div>*/
/* </div>*/
/* */
/* <div id="mediaLibModalImage" class="modal fade" role="dialog" tabindex="-1" data-backdrop="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{ l("Media library") }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div id="elfinderImage"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="mediaLibModalVideo" class="modal fade" role="dialog" tabindex="-1" data-backdrop="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{ l("Media library") }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div id="elfinderVideo"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- Save post dialog -->*/
/* <div id="postTitleModal" class="modal fade" role="dialog" data-backdrop="static">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				<h4 class="modal-title">{{ l("POST_TITLE") }}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="messageBoxModal"></div>*/
/* 				<div class="formField">*/
/* 					<label class="sr-only" for="postTitle">{{ l("POST_TITLE") }}</label>*/
/* 					<input type="text" name='postTitle' id="postTitle" class="form-control" placeholder='{{ l("POST_TITLE") }}' value="{{ input_post("postTitle") }}" />*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-default" data-dismiss="modal">{{ l("CLOSE") }}</button>*/
/* 				<button onclick="return false;" id="savePostModal" class="btn btn-primary">{{ l("SAVE_POST") }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
