<?php

/* blocks/flash_bag.twig */
class __TwigTemplate_7f1f8a84584bc7ecb01dc8df315c7c37297ebe694b727b9153833a31e8babd3a extends Twig_Template
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
        if ( !twig_test_empty((isset($context["flash"]) ? $context["flash"] : null))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flash"]) ? $context["flash"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["flashBag"]) {
                // line 3
                echo "      <div class='alert alert-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "type", array()), "html", null, true);
                echo "' role='alert'>";
                // line 4
                if (($this->getAttribute($context["flashBag"], "close", array()) == true)) {
                    // line 5
                    echo "      <a href='#' class='close' data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "notif_Id", array()), "html", null, true);
                    echo "\" data-dismiss='alert' aria-label='close'><i class='fas fa-times fa-fw' aria-hidden='true'></i></a>";
                }
                // line 8
                if (($this->getAttribute($context["flashBag"], "icon", array()) != false)) {
                    // line 9
                    echo "      <i class='fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "icon", array()), "html", null, true);
                    echo " fa-fw' aria-hidden='true'></i>";
                }
                // line 11
                if ($this->getAttribute($context["flashBag"], "html", array())) {
                    // line 12
                    echo $this->getAttribute($context["flashBag"], "message", array());
                } else {
                    // line 14
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["flashBag"], "message", array()), "html", null, true));
                }
                // line 16
                echo "      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashBag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "blocks/flash_bag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 14,  45 => 12,  43 => 11,  38 => 9,  36 => 8,  31 => 5,  29 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if flash is not empty %}*/
/*     {% for flashBag in flash %}*/
/*       <div class='alert alert-{{ flashBag.type }}' role='alert'>*/
/*     {% if flashBag.close == true %}*/
/*       <a href='#' class='close' data-id="{{ flashBag.notif_Id }}" data-dismiss='alert' aria-label='close'><i class='fas fa-times fa-fw' aria-hidden='true'></i></a>*/
/*     {% endif %}*/
/*     */
/*     {% if flashBag.icon != false %}*/
/*       <i class='fa fa-{{ flashBag.icon }} fa-fw' aria-hidden='true'></i>*/
/*     {% endif %}*/
/*       {% if flashBag.html %}*/
/*         {{ flashBag.message|raw }}*/
/*       {% else %}*/
/*         {{ flashBag.message|nl2br }}*/
/*       {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/* {% endif %}*/
