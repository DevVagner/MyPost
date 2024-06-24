<?php

/* notifications/components/notifications_menu.twig */
class __TwigTemplate_ea72a271b175902e34e3f6d15e6d27b925f7dfb96de061c8655c32d07e7bbd10 extends Twig_Template
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
        echo "<li class=\"dropdown notifications-menu\">
\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t<i class=\"fas fa-fw fa-bell\"></i>";
        // line 4
        if (($this->getAttribute(getUserNotifications(), "count_notifications", array()) != 0)) {
            // line 5
            echo "\t\t<span class=\"label label-danger notifCount\">";
            echo twig_escape_filter($this->env, $this->getAttribute(getUserNotifications(), "count_notifications", array()), "html", null, true);
            echo "</span>";
        }
        // line 7
        echo "\t</a>
\t<ul class=\"dropdown-menu\">
\t\t<li class=\"header\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("You have %s notifications", $this->getAttribute(getUserNotifications(), "count_notifications", array()))), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<ul class=\"menu\">";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(getUserNotifications(), "notifications", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 14
            if (($this->getAttribute($context["n"], "type", array()) == "success")) {
                // line 15
                $context["icon"] = "check-circle";
            } elseif (($this->getAttribute(            // line 16
$context["n"], "type", array()) == "info")) {
                // line 17
                $context["icon"] = "info-circle";
            } elseif (($this->getAttribute(            // line 18
$context["n"], "type", array()) == "warning")) {
                // line 19
                $context["icon"] = "exclamation-circle";
            } elseif (($this->getAttribute(            // line 20
$context["n"], "type", array()) == "danger")) {
                // line 21
                $context["icon"] = "exclamation-triangle";
            } elseif (($this->getAttribute(            // line 22
$context["n"], "type", array()) == "primary")) {
                // line 23
                $context["icon"] = "info-circle";
            }
            // line 25
            echo "
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, base_url(("my_notifications#notification_" . $this->getAttribute($context["n"], "unid", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "type", array()), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["n"], "title", array()))), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t\t\t<li><a href=\"#\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("You don't have any notifications")), "html", null, true);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</ul>
\t\t</li>
\t\t<li class=\"footer\">
\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("my_notifications"), "html", null, true);
        echo "\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("View all")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</li>";
    }

    public function getTemplateName()
    {
        return "notifications/components/notifications_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  95 => 35,  90 => 32,  82 => 30,  69 => 27,  65 => 25,  62 => 23,  60 => 22,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  44 => 14,  39 => 12,  34 => 9,  30 => 7,  25 => 5,  23 => 4,  19 => 1,);
    }
}
/* <li class="dropdown notifications-menu">*/
/* 	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">*/
/* 		<i class="fas fa-fw fa-bell"></i>*/
/* 		{% if getUserNotifications().count_notifications != 0%}*/
/* 		<span class="label label-danger notifCount">{{getUserNotifications().count_notifications}}</span>*/
/* 		{% endif %}*/
/* 	</a>*/
/* 	<ul class="dropdown-menu">*/
/* 		<li class="header">{{l('You have %s notifications',getUserNotifications().count_notifications)}}</li>*/
/* 		<li>*/
/* 			<ul class="menu">*/
/* 				{% for n in getUserNotifications().notifications %}*/
/* */
/* 					{% if n.type == "success" %}*/
/* 						{% set icon = "check-circle" %}*/
/* 					{% elseif n.type == "info" %}*/
/* 						{% set icon = "info-circle" %}*/
/* 					{% elseif n.type == "warning" %}*/
/* 						{% set icon = "exclamation-circle" %}*/
/* 					{% elseif n.type == "danger" %}*/
/* 						{% set icon = "exclamation-triangle" %}*/
/* 					{% elseif n.type == "primary" %}*/
/* 						{% set icon = "info-circle" %}*/
/* 					{% endif %}*/
/* */
/* 					<li>*/
/* 					<a href="{{ base_url('my_notifications#notification_' ~ n.unid) }}"><i class="fa fa-{{icon}} text-{{n.type}}"></i> {{l(n.title)}}</a>*/
/* 					</li>*/
/* 				{% else %}*/
/* 					<li><a href="#">{{l("You don't have any notifications")}}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</li>*/
/* 		<li class="footer">*/
/* 			<a href="{{base_url('my_notifications')}}">*/
/* 				{{l('View all')}}*/
/* 			</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </li>*/
