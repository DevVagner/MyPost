<?php

/* base_dashboard.twig */
class __TwigTemplate_f7e409e448913f2fdf4704549862878ad37ce1bca85e6175c41fc35216280435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'head_js' => array($this, 'block_head_js'),
            'top_header' => array($this, 'block_top_header'),
            'header' => array($this, 'block_header'),
            'flash_bag' => array($this, 'block_flash_bag'),
            'ads' => array($this, 'block_ads'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("DIR")), "html", null, true);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_description", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["app_author"]) ? $context["app_author"] : null), "html", null, true);
        echo "\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"theme-color\" content=\"#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "theme_color", array()), "html", null, true);
        echo "\">
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">";
        // line 12
        $this->displayBlock('metas', $context, $blocks);
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"))) {
            // line 16
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_favicon.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" >";
        } else {
            // line 18
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_favicon", array(), "array"), "html", null, true);
            echo "\" >";
        }
        // line 20
        echo "  <title>";
        if (($this->getAttribute(getUserNotifications(), "count_notifications", array()) != 0)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute(getUserNotifications(), "count_notifications", array()), "html", null, true);
            echo ") -";
        }
        $this->displayBlock('title', $context, $blocks);
        echo " |";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array()), "html", null, true);
        echo "</title>";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        $this->displayBlock('head_js', $context, $blocks);
        // line 58
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "head_js", array(), "array");
        echo "

    <style>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "custom_css", array(), "array"), "html", null, true);
        echo "
    </style>
    
</head>
<body class=\"hold-transition skin-blue sidebar-mini";
        // line 65
        if (((isset($context["sidebar_status"]) ? $context["sidebar_status"] : null) == "true")) {
            echo "sidebar-collapse";
        }
        if ((call_user_func_array($this->env->getFunction('lang')->getCallable(), array("DIR")) == "rtl")) {
            echo "rtl";
        }
        echo "\">";
        // line 67
        $context["showAdsTo"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "show_ads_to", array())));
        // line 69
        $this->displayBlock('top_header', $context, $blocks);
        // line 70
        echo "
<div class=\"wrapper\">";
        // line 72
        $this->displayBlock('header', $context, $blocks);
        // line 568
        echo "  <div class=\"content-wrapper addMargin\">
    <section class=\"content-header\">";
        // line 570
        $this->displayBlock('flash_bag', $context, $blocks);
        // line 573
        $this->displayBlock('ads', $context, $blocks);
        // line 576
        echo "    </section>
    <section class=\"content container-fluid\">
      <div class='alerts'></div>";
        // line 579
        $this->displayBlock('body', $context, $blocks);
        // line 581
        echo "    </section>
  </div>
  <footer class=\"main-footer\">";
        // line 584
        $this->displayBlock('footer', $context, $blocks);
        // line 597
        echo "  </footer>
</div>
<div class=\"scrollTop\">
      <i class=\"fa fa-fw fa-arrow-circle-up\"></i>
    </div>";
        // line 602
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 624
        echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_js", array(), "array");
        echo "
</body>
</html>";
    }

    // line 12
    public function block_metas($context, array $blocks = array())
    {
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/css/bootstrap.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/css/bootstrap-4.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, assets(("theme/default/css/roboto_font.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, assets(("theme/default/css/preloader.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, assets(("theme/default/fontawesome/css/all.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, assets(("theme/default/css/dashboard.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, assets(("theme/default/css/skins/skin-blue.min.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, assets(("theme/default/css/theme_color.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, assets(("theme/default/css/general.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, assets(("theme/default/css/skins/md.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
        // line 36
        if ((call_user_func_array($this->env->getFunction('lang')->getCallable(), array("DIR")) == "rtl")) {
            // line 37
            echo "      <link href=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/css/rtl.css?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" rel=\"stylesheet\" />";
        }
        // line 39
        echo "
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, assets("theme/default/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/js/jquery.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, assets(("theme/default/js/libs/dashboard.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, assets(("theme/default/bootstrap/js/bootstrap.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, assets(("theme/default/js/libs/preloader.min.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, assets(("theme/default/js/helpers.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>";
    }

    // line 52
    public function block_head_js($context, array $blocks = array())
    {
        // line 53
        echo "      <script type=\"text/javascript\">
        \$('[data-toggle=\"kp_tooltip\"]').tooltip();
      </script>";
    }

    // line 69
    public function block_top_header($context, array $blocks = array())
    {
    }

    // line 72
    public function block_header($context, array $blocks = array())
    {
        // line 73
        echo "  <header class=\"main-header\">
    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, assets(""), "html", null, true);
        echo "\" title=\"Home\" class=\"logo hidden-xs\">
      <span class=\"logo-mini\">";
        // line 76
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_50", array(), "array"))) {
            // line 77
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_logo_50.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array"), "html", null, true);
            echo " logo\">";
        } else {
            // line 79
            echo "            <span class=\"logo-lg\">
            <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo_50", array(), "array") . "?v=") . (isset($context["assets_version"]) ? $context["assets_version"] : null)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array"), "html", null, true);
            echo " logo\">
          </span>";
        }
        // line 83
        echo "      </span>

      <span class=\"logo-lg\">";
        // line 86
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array"))) {
            // line 87
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_logo.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array"), "html", null, true);
            echo " logo\">";
        } else {
            // line 89
            echo "            <span class=\"logo-lg\">
          <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array") . "?v=") . (isset($context["assets_version"]) ? $context["assets_version"] : null)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array"), "html", null, true);
            echo " logo\">
        </span>";
        }
        // line 93
        echo "      </span>
    </a>

    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
      
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\"><i class=\"fas fa-fw fa-bars\"></i><span class=\"sr-only\">Toggle navigation</span></a>";
        // line 100
        if ((isset($context["controlSidebar"]) ? $context["controlSidebar"] : null)) {
            // line 101
            echo "      <a href=\"#\" data-toggle=\"control-sidebar\" class=\"toggleSidebarOptions visible-xs\"><i class=\"fa fa-fw fa-cogs\"></i></a>";
        }
        // line 103
        echo "
      <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, assets(""), "html", null, true);
        echo "\" title=\"Home\" class=\"logo visible-xs\">
        <span class=\"logo-lg\">";
        // line 106
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array"))) {
            // line 107
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, assets(("theme/default/images/kp_logo.png?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array"), "html", null, true);
            echo " logo\">";
        } else {
            // line 109
            echo "              <span class=\"logo-lg\">
            <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "site_logo", array(), "array") . "?v=") . (isset($context["assets_version"]) ? $context["assets_version"] : null)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "sitename", array(), "array"), "html", null, true);
            echo " logo\">
          </span>";
        }
        // line 113
        echo "        </span>
      </a>
      <div class=\"navbar-custom-menu hidden-xs\">
        <ul class=\"nav navbar-nav\">";
        // line 117
        if ( !(null === (isset($context["demo_link"]) ? $context["demo_link"] : null))) {
            // line 118
            echo "          <li style=\"background-color: #82b440;margin: 0px 30px;\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link"]) ? $context["demo_link"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "</a></li>";
        }
        // line 120
        if (KPMIsActive("payments")) {
            // line 121
            echo "            <li>
              <a href='";
            // line 122
            echo twig_escape_filter($this->env, base_url("prices"), "html", null, true);
            echo "'>
                <i class=\"fas fa-fw fa-ticket-alt\"></i>
                <span>";
            // line 124
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pricing")), "html", null, true);
            echo "</span>
              </a>
            </li>";
        }
        // line 129
        if ( !(null === $this->getAttribute((isset($context["app_session"]) ? $context["app_session"] : null), "userdata", array(0 => "current_admin_account"), "method"))) {
            // line 130
            echo "          <li>
            <a href='";
            // line 131
            echo twig_escape_filter($this->env, base_url("home/back_to_admin"), "html", null, true);
            echo "'>
              <i class=\"far fa-caret-square-left\"></i>
              <span>";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Back to admin")), "html", null, true);
            echo "</span>
            </a>
          </li>";
        }
        // line 138
        $this->loadTemplate("notifications/components/notifications_menu.twig", "base_dashboard.twig", 138)->display($context);
        // line 139
        echo "          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle UserProfil\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 141
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"))) {
            // line 142
            echo "                <img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"), "html", null, true);
            echo "/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class=\"img-circle\" onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "'\"/>";
        } else {
            // line 144
            echo "                  <img src='";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "' width='32' height='32' style='vertical-align:middle;' />";
        }
        // line 146
        echo "                <span class=\"userFullName\">";
        // line 147
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method"))) {
            // line 148
            echo "                    <span class=\"hidden-sm\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "name"), "method")), "html", null, true);
            echo "</span>";
        } else {
            // line 150
            echo "                    <span class=\"hidden-sm\">Facebook User</span>";
        }
        // line 152
        echo "                </span>
              </a>
            <ul class=\"dropdown-menu\">";
        // line 155
        $context["fbacounts"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method");
        // line 156
        if ( !twig_test_empty((isset($context["fbacounts"]) ? $context["fbacounts"] : null))) {
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fbacounts"]) ? $context["fbacounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fba"]) {
                // line 158
                echo "                        <li>
                        <a href=\"";
                // line 159
                echo twig_escape_filter($this->env, base_url(("facebook_accounts/home/switch_fb_account/" . $this->getAttribute($context["fba"], "fb_id", array()))), "html", null, true);
                echo "\" >
                          <img src='https://graph.facebook.com/";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
                echo "/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class=\"fbProfileImg\" onerror=\"this.src = '";
                echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
                echo "'\"/>";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "firstname", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "lastname", array()))), "html", null, true);
                echo "
                        </a>
                      </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fba'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 165
            echo "                    <li><a href='#'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No facebook account available")), "html", null, true);
            echo "</a></li>";
        }
        // line 167
        echo "                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"";
        // line 168
        echo twig_escape_filter($this->env, base_url("facebook_accounts"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add facebook account")), "html", null, true);
        echo "</a></li>
                <li role=\"separator\" class=\"divider\"></li>

                <li>
                  <a href='";
        // line 172
        echo twig_escape_filter($this->env, base_url("settings"), "html", null, true);
        echo "' >
                    <i class='fa fa-fw fa-cog'></i>";
        // line 174
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Settings")), "html", null, true);
        echo "
                  </a>
                </li>";
        // line 178
        if (KPMIsActive("payments")) {
            // line 179
            echo "                <li>
                  <a href='";
            // line 180
            echo twig_escape_filter($this->env, base_url("payments/my_orders"), "html", null, true);
            echo "' >
                    <i class=\"fa fa-fw fa-list\"></i>";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My orders")), "html", null, true);
            echo "
                  </a>
                </li>";
        }
        // line 186
        echo "
                <li role=\"separator\" class=\"divider\"></li>

                <li>
                  <a href='";
        // line 190
        echo twig_escape_filter($this->env, base_url("logout"), "html", null, true);
        echo "'>
                    <i class=\"fas fa-fw fa-sign-out-alt\"></i>";
        // line 192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LOGOUT")), "html", null, true);
        echo "
                  </a>
                </li>
              </ul>
          </li>";
        // line 198
        if ((isset($context["controlSidebar"]) ? $context["controlSidebar"] : null)) {
            // line 199
            echo "          <li><a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-fw fa-cogs\"></i></a></li>";
        }
        // line 201
        echo "
        </ul>
      </div>
    </nav>
  </header>

  <aside class=\"main-sidebar\">
    <section class=\"sidebar\">
      <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li class=\"treeview visible-xs\">
          <a href=\"#\" class=\"dropdown-toggle UserProfil\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 212
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"))) {
            // line 213
            echo "                <img src='https://graph.facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "UserDefaultFbAccount", array(), "method"), "html", null, true);
            echo "/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class=\"img-circle\" onerror=\"this.src = '";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "'\"/>";
        } else {
            // line 215
            echo "                  <img src='";
            echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
            echo "' width='32' height='32' style='vertical-align:middle;' />";
        }
        // line 217
        echo "                <span class=\"userFullName\">";
        // line 218
        if ( !twig_test_empty($this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(), "method"))) {
            // line 219
            echo "                    <span class=\"hidden-sm\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["fbaccountDetails"]) ? $context["fbaccountDetails"] : null), "row", array(0 => "name"), "method")), "html", null, true);
            echo "</span>";
        } else {
            // line 221
            echo "                    <span class=\"hidden-sm\">Facebook User</span>";
        }
        // line 223
        echo "                </span>
                <i class=\"fa fa-fw fa-angle-left pull-right\"></i>
              </a>
          <ul class=\"treeview-menu\">";
        // line 227
        $context["fbacounts"] = $this->getAttribute((isset($context["fbaccount"]) ? $context["fbaccount"] : null), "getAll", array(), "method");
        // line 228
        if ( !twig_test_empty((isset($context["fbacounts"]) ? $context["fbacounts"] : null))) {
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fbacounts"]) ? $context["fbacounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fba"]) {
                // line 230
                echo "                        <li>
                        <a href=\"";
                // line 231
                echo twig_escape_filter($this->env, base_url(("facebook_accounts/home/switch_fb_account/" . $this->getAttribute($context["fba"], "fb_id", array()))), "html", null, true);
                echo "\" >
                          <img src='https://graph.facebook.com/";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["fba"], "fb_id", array()), "html", null, true);
                echo "/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class=\"fbProfileImg\" onerror=\"this.src = '";
                echo twig_escape_filter($this->env, assets("theme/default/images/facebookUser.jpg"), "html", null, true);
                echo "'\"/>";
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "firstname", array())) . " ") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["fba"], "lastname", array()))), "html", null, true);
                echo "
                        </a>
                      </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fba'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 237
            echo "                    <li>
                      <a href='#'>";
            // line 238
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No facebook account available")), "html", null, true);
            echo "</a></li>";
        }
        // line 240
        echo "                <li>
                  <a href=\"";
        // line 241
        echo twig_escape_filter($this->env, base_url("facebook_accounts"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    <span>";
        // line 243
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add facebook account")), "html", null, true);
        echo "</span>
                  </a>
                </li>
          </ul>
        </li>";
        // line 249
        if ( !(null === $this->getAttribute((isset($context["app_session"]) ? $context["app_session"] : null), "userdata", array(0 => "current_admin_account"), "method"))) {
            // line 250
            echo "          <li class=\"visible-xs\">
            <a href='";
            // line 251
            echo twig_escape_filter($this->env, base_url("home/back_to_admin"), "html", null, true);
            echo "'>
              <i class=\"far fa-caret-square-left\"></i>
              <span>";
            // line 253
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Back to admin")), "html", null, true);
            echo "</span>
            </a>
          </li>";
        }
        // line 257
        echo "
        <li>
          <a href='";
        // line 259
        echo twig_escape_filter($this->env, assets(), "html", null, true);
        echo "'>
          <i class=\"fa fa-fw fa-home\"></i><span>";
        // line 260
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Home")), "html", null, true);
        echo "</span>
          </a>
        </li>

        <li class=\"treeview\">
          <a href='";
        // line 265
        echo twig_escape_filter($this->env, base_url("settings"), "html", null, true);
        echo "'>
            <i class=\"fa fa-fw fa-cog\"></i>
            <span>";
        // line 267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Settings")), "html", null, true);
        echo "</span>
            <span class=\"pull-right-container\"><i class=\"fa fa-fw fa-angle-left pull-right\"></i></span>
          </a>
          <ul class=\"treeview-menu\">
            <li class='";
        // line 271
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "general_settings")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 272
        echo twig_escape_filter($this->env, base_url("settings/general_settings"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-tasks'></i>
                <span>";
        // line 274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("General settings")), "html", null, true);
        echo "</span>
              </a>
            </li>

            <li class='";
        // line 278
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "publish_settings")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 279
        echo twig_escape_filter($this->env, base_url("settings/publish_settings"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-clipboard'></i>
                <span>";
        // line 281
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publish settings")), "html", null, true);
        echo "</span>
              </a>
            </li>

            <li class='";
        // line 285
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fbapps")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 286
        echo twig_escape_filter($this->env, base_url("settings/fbapps"), "html", null, true);
        echo "' >
                <i class='fa fa-fw fa-plug'></i>
                <span>";
        // line 288
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook Apps")), "html", null, true);
        echo "</span>
              </a>
            </li>";
        // line 291
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 292
            echo "            <li class='";
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "app_settings")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 293
            echo twig_escape_filter($this->env, base_url("settings/app_settings"), "html", null, true);
            echo "' ><i class='fa fa-fw fa-cogs'></i> 
                <span>";
            // line 294
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("App settings")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class='";
            // line 297
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "roles")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 298
            echo twig_escape_filter($this->env, base_url("settings/roles"), "html", null, true);
            echo "' >
                <i class='fa fa-fw fa-users'></i>
                <span>";
            // line 300
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Roles")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class='";
            // line 303
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "modules_manager")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 304
            echo twig_escape_filter($this->env, base_url("settings/modules_manager"), "html", null, true);
            echo "' >
                <i class='fa fa-fw fa-th-large'></i>
                <span>";
            // line 306
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Modules manager")), "html", null, true);
            echo "</span>
              </a>
            </li>
           
            <li class='";
            // line 310
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "update")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 311
            echo twig_escape_filter($this->env, base_url("settings/update"), "html", null, true);
            echo "' >
                <i class=\"fas fa-fw fa-sync\"></i>
                <span class=\"hidden-xs\">";
            // line 313
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Update")), "html", null, true);
            echo "</span>
              </a>
            </li>";
        }
        // line 318
        if ($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "use_proxy", array(), "array")) {
            // line 319
            echo "            <li class='";
            if (((isset($context["current_page"]) ? $context["current_page"] : null) == "Proxies_manager")) {
                echo "active";
            }
            echo "'>
              <a href='";
            // line 320
            echo twig_escape_filter($this->env, base_url("settings/proxies_manager"), "html", null, true);
            echo "' >
                <i class=\"fa fa-fw fa-list\"></i>
                <span class=\"hidden-xs\">";
            // line 322
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Proxies manager")), "html", null, true);
            echo "</span>
              </a>
            </li>";
        }
        // line 326
        echo "            
           </ul>
        </li>

        <li class=\"visible-xs\">
          <a href='";
        // line 331
        echo twig_escape_filter($this->env, base_url("my_notifications"), "html", null, true);
        echo "'>
          <i class=\"fas fa-fw fa-bell\"></i><span>";
        // line 332
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Notifications")), "html", null, true);
        echo "</span> <span class=\"label label-danger\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "count_notifications", array()), "html", null, true);
        echo "</span>
          </a>
        </li>";
        // line 336
        if (KPMIsActive("payments")) {
            // line 337
            echo "        <li class=\"visible-xs\">
          <a href='";
            // line 338
            echo twig_escape_filter($this->env, base_url("payments/my_orders"), "html", null, true);
            echo "' >
            <i class=\"fa fa-fw fa-list\"></i>";
            // line 340
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("My orders")), "html", null, true);
            echo "
          </a>
        </li>";
        }
        // line 345
        if ( !(null === (isset($context["demo_link"]) ? $context["demo_link"] : null))) {
            // line 346
            echo "        <li style=\"background-color: #82b440;color: white;\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link"]) ? $context["demo_link"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-shopping-cart\"></i><span>";
            echo twig_escape_filter($this->env, (isset($context["demo_link_text"]) ? $context["demo_link_text"] : null), "html", null, true);
            echo "</span></a></li>";
        }
        // line 348
        echo "
        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-fw fa-paper-plane\"></i>
            <span>";
        // line 352
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Publishing")), "html", null, true);
        echo "</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-fw fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
        // line 359
        echo twig_escape_filter($this->env, base_url("posts"), "html", null, true);
        echo "\">
              <i class=\"fa fa-fw fa-clipboard  \"></i> 
              <span>";
        // line 361
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Saved posts")), "html", null, true);
        echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
        // line 365
        echo twig_escape_filter($this->env, base_url("schedules"), "html", null, true);
        echo "\">
              <i class=\"fa fa-fw fa-calendar\"></i> 
                <span>";
        // line 367
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Scheduled posts")), "html", null, true);
        echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
        // line 371
        echo twig_escape_filter($this->env, base_url("schedules/logs"), "html", null, true);
        echo "\">
              <i class=\"fas fa-fw fa-folder-open\"></i> 
                <span>";
        // line 373
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule Logs")), "html", null, true);
        echo "</span>
              </a>
            </li>
          </ul>
        </li>

        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fab fa-fw fa-facebook\"></i>
            <span>";
        // line 382
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Facebook")), "html", null, true);
        echo "</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-fw fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li class='";
        // line 388
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fb_accounts")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 389
        echo twig_escape_filter($this->env, base_url("facebook_accounts"), "html", null, true);
        echo "' >
                <i class='fab fa-fw fa-facebook'></i>
                <span>";
        // line 391
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Manage accounts")), "html", null, true);
        echo "</span>
              </a>
            </li>
            <li class='";
        // line 394
        if (((isset($context["current_page"]) ? $context["current_page"] : null) == "fb_accounts")) {
            echo "active";
        }
        echo "'>
              <a href='";
        // line 395
        echo twig_escape_filter($this->env, base_url("nodes_categories"), "html", null, true);
        echo "' >
                <i class=\"fas fa-fw fa-th-list\"></i>
                <span>";
        // line 397
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Manage categories")), "html", null, true);
        echo "</span>
              </a>
            </li>
            </ul>
        </li>
          
        <li>
          <a href='";
        // line 404
        echo twig_escape_filter($this->env, base_url("insights"), "html", null, true);
        echo "'>
            <i class=\"far fa-fw fa-chart-bar\"></i>
            <span>";
        // line 406
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("insights")), "html", null, true);
        echo "</span>
          </a>
        </li>";
        // line 410
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 411
            echo "            <li>
              <a href='";
            // line 412
            echo twig_escape_filter($this->env, base_url("users_manager"), "html", null, true);
            echo "'>
                <i class=\"fa fa-fw fa-user\"></i>
                <span>";
            // line 414
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Users")), "html", null, true);
            echo "</span>
              </a>
            </li>";
        }
        // line 419
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "comments"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "auto_comment", array(), "any", true, true))) {
            // line 420
            echo "        <li>
          <a href='";
            // line 421
            echo twig_escape_filter($this->env, base_url("comments"), "html", null, true);
            echo "'>
            <i class=\"fa fa-fw fa-comment\"></i>
            <span>";
            // line 423
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Comments")), "html", null, true);
            echo "</span>
          </a>
        </li>";
        }
        // line 428
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "join_groups"), "method") && $this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "join_groups", array(), "any", true, true))) {
            // line 429
            echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fab fa-fw fa-facebook\"></i>
            <span>";
            // line 432
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Join groups")), "html", null, true);
            echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-fw fa-angle-left pull-right\"></i></span></a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
            // line 435
            echo twig_escape_filter($this->env, base_url("join_groups/schedules"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-clipboard  \"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 438
            echo twig_escape_filter($this->env, base_url("join_groups"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-clipboard  \"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search & add new")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 441
            echo twig_escape_filter($this->env, base_url("join_groups/schedules/logs"), "html", null, true);
            echo "\"><i class=\"fas fa-fw fa-folder-open\"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule logs")), "html", null, true);
            echo "</span></a>
            </li>
          </ul>
        </li>";
        }
        // line 447
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "canUse", array(0 => "invite_join_groups"), "method") && KPMIsActive("invite_join_groups"))) {
            // line 448
            echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fab fa-fw fa-facebook\"></i>
            <span>";
            // line 451
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Invite join groups")), "html", null, true);
            echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-fw fa-angle-left pull-right\"></i></span></a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
            // line 454
            echo twig_escape_filter($this->env, base_url("invite_join_groups/schedules"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-clipboard\"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedules")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 457
            echo twig_escape_filter($this->env, base_url("invite_join_groups"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-plus\"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Add new")), "html", null, true);
            echo "</span></a>
            </li>
            <li>
              <a href=\"";
            // line 460
            echo twig_escape_filter($this->env, base_url("invite_join_groups/schedules/logs"), "html", null, true);
            echo "\"><i class=\"fas fa-fw fa-folder-open \"></i> <span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Schedule logs")), "html", null, true);
            echo "</span></a>
            </li>
          </ul>
        </li>";
        }
        // line 466
        if (KPMIsActive("instagram")) {
            // line 467
            echo "        <li>
          <a href='";
            // line 468
            echo twig_escape_filter($this->env, base_url("instagram"), "html", null, true);
            echo "'>
            <i class=\"fab fa-fw fa-instagram\"></i>
            <span>";
            // line 470
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Instagram")), "html", null, true);
            echo "</span>
          </a>
        </li>";
        }
        // line 475
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "kp_faq", array(), "any", true, true)) {
            // line 476
            echo "        <li>
          <a href='";
            // line 477
            echo twig_escape_filter($this->env, base_url((isset($context["faq_page"]) ? $context["faq_page"] : null)), "html", null, true);
            echo "'>
            <i class=\"fa fa-fw fa-life-ring\"></i>
            <span>";
            // line 479
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array((isset($context["faq_text"]) ? $context["faq_text"] : null))), "html", null, true);
            echo "</span>
          </a>
        </li>";
        }
        // line 484
        if (KPMIsActive("payments")) {
            // line 485
            echo "        <li>
          <a href='";
            // line 486
            echo twig_escape_filter($this->env, base_url("prices"), "html", null, true);
            echo "'>
            <i class=\"fas fa-fw fa-ticket-alt\"></i>
            <span>";
            // line 488
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Pricing")), "html", null, true);
            echo "</span>
          </a>
        </li>";
        }
        // line 493
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true) && KPMIsActive("payments"))) {
            // line 494
            echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fa fa-fw fa-credit-card\"></i>
            <span>";
            // line 497
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Payments")), "html", null, true);
            echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-fw fa-angle-left pull-right\"></i></span></a>
          <ul class=\"treeview-menu\">
            <li>
              <a href=\"";
            // line 500
            echo twig_escape_filter($this->env, base_url("payments/packages"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-clipboard  \"></i> 
                <span>";
            // line 501
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Packages")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 505
            echo twig_escape_filter($this->env, base_url("payments/payment_settings"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-clipboard  \"></i> 
                <span>";
            // line 506
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Payment settings")), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 510
            echo twig_escape_filter($this->env, base_url("payments/payments_history"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-clipboard  \"></i> 
                <span>";
            // line 511
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Payments history")), "html", null, true);
            echo "</span>
              </a>
            </li>
          </ul>
        </li>";
        }
        // line 518
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true)) {
            // line 519
            if ((KPMIsActive("notifications") || KPMIsActive("translations"))) {
                // line 520
                echo "        <li class=\"treeview\">
          <a href='#'>
            <i class=\"fas fa-fw fa-plug\"></i>
            <span>";
                // line 523
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Tools")), "html", null, true);
                echo "</span><span class=\"pull-right-container\"><i class=\"fa fa-fw fa-angle-left pull-right\"></i></span></a>
            <ul class=\"treeview-menu\">";
                // line 525
                if (KPMIsActive("notifications")) {
                    // line 526
                    echo "              <li>
                <a href='";
                    // line 527
                    echo twig_escape_filter($this->env, base_url("notifications"), "html", null, true);
                    echo "'>
                  <i class=\"fas fa-fw fa-bell\"></i>
                  <span>";
                    // line 529
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Manage Notifications")), "html", null, true);
                    echo "</span>
                </a>
              </li>";
                }
                // line 533
                if (KPMIsActive("translations")) {
                    // line 534
                    echo "              <li>
                <a href='";
                    // line 535
                    echo twig_escape_filter($this->env, base_url("translations"), "html", null, true);
                    echo "'>
                  <i class=\"fa fa-fw fa-language\"></i>
                  <span>";
                    // line 537
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Translations")), "html", null, true);
                    echo "</span>
                </a>
              </li>";
                }
                // line 541
                echo "            </ul>
        </li>";
            }
        }
        // line 546
        $context["items"] = (isset($context["menuItems"]) ? $context["menuItems"] : null);
        // line 548
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 549
            echo "          <li>
            <a href='";
            // line 550
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "' target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "target", array()), "html", null, true);
            echo "\">
              <i class=\"fa fa-fw fa-";
            // line 551
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\"></i>
              <span>";
            // line 552
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array($this->getAttribute($context["item"], "text", array())))), "html", null, true);
            echo "</span></a>
            </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 555
        echo "
        <li>
          <a href='";
        // line 557
        echo twig_escape_filter($this->env, base_url("logout"), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Logout")), "html", null, true);
        echo "\">
            <i class=\"fas fa-fw fa-sign-out-alt\"></i> 
            <span>";
        // line 559
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Logout")), "html", null, true);
        echo "</span>
          </a>
        </li>

      </ul>
    </section>
  </aside>
  <div style=\"margin-top:50px\"></div>";
    }

    // line 570
    public function block_flash_bag($context, array $blocks = array())
    {
        // line 571
        $this->loadTemplate("blocks/flash_bag.twig", "base_dashboard.twig", 571)->display($context);
    }

    // line 573
    public function block_ads($context, array $blocks = array())
    {
        // line 574
        $this->loadTemplate("blocks/ads.twig", "base_dashboard.twig", 574)->display($context);
    }

    // line 579
    public function block_body($context, array $blocks = array())
    {
    }

    // line 584
    public function block_footer($context, array $blocks = array())
    {
        // line 585
        echo "      <p class=\"footer\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("COPYRIGHT")), "html", null, true);
        echo " &copy";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        // line 586
        if (twig_test_empty($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array"))) {
            // line 587
            echo "          Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>";
        } else {
            // line 589
            echo $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "footer_text", array(), "array");
        }
        // line 592
        if ((( !twig_test_empty((isset($context["user"]) ? $context["user"] : null)) && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isLoggedIn", array(), "method")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasPermission", array(0 => "admin"), "method") == true))) {
            echo " 
          -";
            // line 593
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Version")), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : null), "html", null, true);
        }
        // line 595
        echo "      </p>";
    }

    // line 602
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 603
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, assets(("theme/default/js/jsui.js?v=" . (isset($context["assets_version"]) ? $context["assets_version"] : null))), "html", null, true);
        echo "\"></script>
  <script>";
        // line 606
        if ($this->getAttribute((isset($context["kpModules"]) ? $context["kpModules"] : null), "notifications", array(), "any", true, true)) {
            // line 607
            echo "    \$(function(){
      \$(\".close\").on(\"click\",function(){
        if(\$(this).data(\"id\") != \"\"){
          \$.ajax({
            url: '";
            // line 611
            echo twig_escape_filter($this->env, base_url("notifications/user_notifications/close/"), "html", null, true);
            echo "'+\$(this).data(\"id\"),
            dataType: 'json',
            type: 'GET',
            contentType: 'application/x-www-form-urlencoded',
            error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },
            });
        }
      });
    });";
        }
        // line 621
        echo "
  </script>";
    }

    public function getTemplateName()
    {
        return "base_dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1339 => 621,  1327 => 611,  1321 => 607,  1319 => 606,  1314 => 603,  1311 => 602,  1307 => 595,  1303 => 593,  1299 => 592,  1296 => 589,  1293 => 587,  1291 => 586,  1286 => 585,  1283 => 584,  1278 => 579,  1274 => 574,  1271 => 573,  1267 => 571,  1264 => 570,  1252 => 559,  1245 => 557,  1241 => 555,  1233 => 552,  1229 => 551,  1223 => 550,  1220 => 549,  1216 => 548,  1214 => 546,  1209 => 541,  1203 => 537,  1198 => 535,  1195 => 534,  1193 => 533,  1187 => 529,  1182 => 527,  1179 => 526,  1177 => 525,  1173 => 523,  1168 => 520,  1166 => 519,  1164 => 518,  1156 => 511,  1152 => 510,  1145 => 506,  1141 => 505,  1134 => 501,  1130 => 500,  1124 => 497,  1119 => 494,  1117 => 493,  1111 => 488,  1106 => 486,  1103 => 485,  1101 => 484,  1095 => 479,  1090 => 477,  1087 => 476,  1085 => 475,  1079 => 470,  1074 => 468,  1071 => 467,  1069 => 466,  1060 => 460,  1052 => 457,  1044 => 454,  1038 => 451,  1033 => 448,  1031 => 447,  1022 => 441,  1014 => 438,  1006 => 435,  1000 => 432,  995 => 429,  993 => 428,  987 => 423,  982 => 421,  979 => 420,  977 => 419,  971 => 414,  966 => 412,  963 => 411,  961 => 410,  956 => 406,  951 => 404,  941 => 397,  936 => 395,  930 => 394,  924 => 391,  919 => 389,  913 => 388,  904 => 382,  892 => 373,  887 => 371,  880 => 367,  875 => 365,  868 => 361,  863 => 359,  853 => 352,  847 => 348,  838 => 346,  836 => 345,  830 => 340,  826 => 338,  823 => 337,  821 => 336,  814 => 332,  810 => 331,  803 => 326,  797 => 322,  792 => 320,  785 => 319,  783 => 318,  777 => 313,  772 => 311,  766 => 310,  759 => 306,  754 => 304,  748 => 303,  742 => 300,  737 => 298,  731 => 297,  725 => 294,  721 => 293,  714 => 292,  712 => 291,  707 => 288,  702 => 286,  696 => 285,  689 => 281,  684 => 279,  678 => 278,  671 => 274,  666 => 272,  660 => 271,  653 => 267,  648 => 265,  640 => 260,  636 => 259,  632 => 257,  626 => 253,  621 => 251,  618 => 250,  616 => 249,  609 => 243,  604 => 241,  601 => 240,  597 => 238,  594 => 237,  580 => 232,  576 => 231,  573 => 230,  569 => 229,  567 => 228,  565 => 227,  560 => 223,  557 => 221,  552 => 219,  550 => 218,  548 => 217,  543 => 215,  536 => 213,  534 => 212,  522 => 201,  519 => 199,  517 => 198,  510 => 192,  506 => 190,  500 => 186,  494 => 182,  490 => 180,  487 => 179,  485 => 178,  480 => 174,  476 => 172,  467 => 168,  464 => 167,  459 => 165,  445 => 160,  441 => 159,  438 => 158,  434 => 157,  432 => 156,  430 => 155,  426 => 152,  423 => 150,  418 => 148,  416 => 147,  414 => 146,  409 => 144,  402 => 142,  400 => 141,  397 => 139,  395 => 138,  389 => 133,  384 => 131,  381 => 130,  379 => 129,  373 => 124,  368 => 122,  365 => 121,  363 => 120,  354 => 118,  352 => 117,  347 => 113,  340 => 110,  337 => 109,  330 => 107,  328 => 106,  324 => 104,  321 => 103,  318 => 101,  316 => 100,  309 => 93,  302 => 90,  299 => 89,  292 => 87,  290 => 86,  286 => 83,  279 => 80,  276 => 79,  269 => 77,  267 => 76,  263 => 74,  260 => 73,  257 => 72,  252 => 69,  246 => 53,  243 => 52,  238 => 49,  234 => 48,  230 => 47,  226 => 46,  221 => 45,  218 => 44,  213 => 40,  210 => 39,  205 => 37,  203 => 36,  200 => 34,  195 => 32,  191 => 31,  186 => 29,  182 => 28,  178 => 27,  174 => 26,  170 => 25,  166 => 24,  161 => 23,  158 => 22,  153 => 20,  148 => 12,  141 => 624,  139 => 602,  133 => 597,  131 => 584,  127 => 581,  125 => 579,  121 => 576,  119 => 573,  117 => 570,  114 => 568,  112 => 72,  109 => 70,  107 => 69,  105 => 67,  97 => 65,  90 => 61,  85 => 58,  83 => 52,  81 => 44,  79 => 22,  68 => 20,  63 => 18,  58 => 16,  56 => 15,  54 => 12,  50 => 9,  45 => 7,  41 => 6,  34 => 2,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ l("DIR") }}">*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="description" content="{{ app_settings.site_description }}">*/
/*   <meta name="author" content="{{app_author}}">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="theme-color" content="#{{app_settings.theme_color}}">*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/*   {% block metas %}*/
/*   {% endblock %}*/
/* */
/*   {% if app_settings['site_favicon'] is empty %}*/
/*     <link rel="icon" type="image/png" href="{{ assets('theme/default/images/kp_favicon.png?v=' ~ assets_version) }}" >*/
/*   {% else %}*/
/*     <link rel="icon" type="image/png" href="{{ app_settings['site_favicon'] }}" >*/
/*   {% endif %}*/
/*   <title>{% if getUserNotifications().count_notifications != 0%}({{getUserNotifications().count_notifications}}) - {% endif %}{% block title %}{% endblock %} | {{ app_settings.sitename }}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     <link href="{{ assets('theme/default/bootstrap/css/bootstrap.min.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*     <link href="{{ assets('theme/default/bootstrap/css/bootstrap-4.min.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*     <link href="{{ assets('theme/default/css/roboto_font.css?v=' ~ assets_version) }}" rel="stylesheet">*/
/*     <link href="{{ assets('theme/default/css/preloader.min.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ assets('theme/default/fontawesome/css/all.min.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     <link href="{{ assets('theme/default/css/dashboard.min.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     <link href="{{ assets('theme/default/css/skins/skin-blue.min.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     */
/*     <link href="{{ assets('theme/default/css/theme_color.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ assets('theme/default/css/general.css?v=' ~ assets_version) }}" rel="stylesheet" type="text/css" />*/
/*     */
/*     <link href="{{ assets('theme/default/css/skins/md.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     */
/*     {% if lang("DIR") == "rtl" %}*/
/*       <link href="{{ assets('theme/default/css/rtl.css?v=' ~ assets_version) }}" rel="stylesheet" />*/
/*     {% endif %}*/
/* */
/*     <link href="{{ assets('theme/default/plugins/animate/animate.min.css') }}" rel="stylesheet">*/
/*     */
/*   {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*       <script src="{{ assets('theme/default/js/jquery.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/js/libs/dashboard.min.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/bootstrap/js/bootstrap.min.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/js/libs/preloader.min.js?v=' ~ assets_version) }}"></script>*/
/*       <script src="{{ assets('theme/default/js/helpers.js?v=' ~ assets_version) }}"></script>*/
/*     {% endblock %}*/
/* */
/*     {% block head_js %}*/
/*       <script type="text/javascript">*/
/*         $('[data-toggle="kp_tooltip"]').tooltip();*/
/*       </script>*/
/*     {% endblock %}*/
/* */
/*     {{ app_settings['head_js']|raw }}*/
/* */
/*     <style>*/
/*     {{ app_settings['custom_css'] }}*/
/*     </style>*/
/*     */
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini {% if sidebar_status == "true" %}sidebar-collapse{% endif %} {% if lang("DIR") == "rtl" %}rtl{%endif%}">*/
/* */
/* {% set showAdsTo = json_decode(app_settings.show_ads_to) %}*/
/*   */
/* {% block top_header %}{% endblock %}*/
/* */
/* <div class="wrapper">*/
/*   {% block header %}*/
/*   <header class="main-header">*/
/*     <a href="{{ assets('') }}" title="Home" class="logo hidden-xs">*/
/*       <span class="logo-mini">*/
/*         {% if app_settings['site_logo_50'] is empty %}*/
/*           <img src="{{ assets('theme/default/images/kp_logo_50.png?v=' ~ assets_version) }}" alt="{{app_settings['sitename']}} logo">*/
/*           {% else %}*/
/*             <span class="logo-lg">*/
/*             <img src="{{ app_settings['site_logo_50']~'?v='~assets_version }}" alt="{{app_settings['sitename']}} logo">*/
/*           </span>*/
/*         {% endif %}*/
/*       </span>*/
/* */
/*       <span class="logo-lg">*/
/*         {% if app_settings['site_logo'] is empty %}*/
/*           <img src="{{ assets('theme/default/images/kp_logo.png?v=' ~ assets_version) }}" alt="{{app_settings['sitename']}} logo">*/
/*           {% else %}*/
/*             <span class="logo-lg">*/
/*           <img src="{{ app_settings['site_logo']~'?v='~assets_version }}" alt="{{app_settings['sitename']}} logo">*/
/*         </span>*/
/*         {% endif %}*/
/*       </span>*/
/*     </a>*/
/* */
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*       */
/*       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><i class="fas fa-fw fa-bars"></i><span class="sr-only">Toggle navigation</span></a>*/
/*       */
/*       {% if controlSidebar %}*/
/*       <a href="#" data-toggle="control-sidebar" class="toggleSidebarOptions visible-xs"><i class="fa fa-fw fa-cogs"></i></a>*/
/*       {% endif %}*/
/* */
/*       <a href="{{ assets('') }}" title="Home" class="logo visible-xs">*/
/*         <span class="logo-lg">*/
/*           {% if app_settings['site_logo'] is empty %}*/
/*             <img src="{{ assets('theme/default/images/kp_logo.png?v=' ~ assets_version) }}" alt="{{app_settings['sitename']}} logo">*/
/*             {% else %}*/
/*               <span class="logo-lg">*/
/*             <img src="{{ app_settings['site_logo']~'?v='~assets_version }}" alt="{{app_settings['sitename']}} logo">*/
/*           </span>*/
/*           {% endif %}*/
/*         </span>*/
/*       </a>*/
/*       <div class="navbar-custom-menu hidden-xs">*/
/*         <ul class="nav navbar-nav">*/
/*           {% if demo_link is not null %}*/
/*           <li style="background-color: #82b440;margin: 0px 30px;"><a href="{{demo_link}}" title="{{demo_link_text}}" target="_blank">{{demo_link_text}}</a></li>*/
/*           {% endif %}*/
/*           {% if KPMIsActive("payments") %}*/
/*             <li>*/
/*               <a href='{{ base_url("prices") }}'>*/
/*                 <i class="fas fa-fw fa-ticket-alt"></i>*/
/*                 <span>{{ l("Pricing") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% endif %}*/
/*           */
/*           {% if app_session.userdata('current_admin_account') is not null %}*/
/*           <li>*/
/*             <a href='{{ base_url("home/back_to_admin") }}'>*/
/*               <i class="far fa-caret-square-left"></i>*/
/*               <span>{{ l("Back to admin") }}</span>*/
/*             </a>*/
/*           </li>*/
/*           {% endif %}*/
/* */
/*           {% include "notifications/components/notifications_menu.twig" %}*/
/*           <li class="dropdown user user-menu">*/
/*             <a href="#" class="dropdown-toggle UserProfil" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                 {% if fbaccount.UserDefaultFbAccount() is not empty %}*/
/*                 <img src='https://graph.facebook.com/{{ fbaccount.UserDefaultFbAccount() }}/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class="img-circle" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/>*/
/*                 {% else %}*/
/*                   <img src='{{ assets('theme/default/images/facebookUser.jpg') }}' width='32' height='32' style='vertical-align:middle;' />*/
/*                 {% endif %}*/
/*                 <span class="userFullName">*/
/*                   {% if fbaccountDetails.row() is not empty %}*/
/*                     <span class="hidden-sm">{{ fbaccountDetails.row('name')|capitalize }}</span>*/
/*                   {% else %}*/
/*                     <span class="hidden-sm">Facebook User</span>*/
/*                   {% endif %}*/
/*                 </span>*/
/*               </a>*/
/*             <ul class="dropdown-menu">*/
/*                 {% set fbacounts = fbaccount.getAll() %}*/
/*                 {% if fbacounts is not empty %} */
/*                     {% for fba in fbacounts %}*/
/*                         <li>*/
/*                         <a href="{{ base_url('facebook_accounts/home/switch_fb_account/' ~ fba.fb_id) }}" >*/
/*                           <img src='https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class="fbProfileImg" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/> {{ fba.firstname|capitalize ~ " " ~ fba.lastname|capitalize }}*/
/*                         </a>*/
/*                       </li>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                     <li><a href='#'>{{ l('No facebook account available') }}</a></li>*/
/*                 {% endif %}*/
/*                 <li role="separator" class="divider"></li>*/
/*                 <li><a href="{{ base_url('facebook_accounts') }}">{{ l('Add facebook account') }}</a></li>*/
/*                 <li role="separator" class="divider"></li>*/
/* */
/*                 <li>*/
/*                   <a href='{{ base_url('settings') }}' >*/
/*                     <i class='fa fa-fw fa-cog'></i>*/
/*                     {{ l('Settings') }}*/
/*                   </a>*/
/*                 </li>*/
/* */
/*                 {% if KPMIsActive('payments') %}*/
/*                 <li>*/
/*                   <a href='{{ base_url('payments/my_orders') }}' >*/
/*                     <i class="fa fa-fw fa-list"></i>*/
/*                     {{ l('My orders') }}*/
/*                   </a>*/
/*                 </li>*/
/*                 {% endif %}*/
/* */
/*                 <li role="separator" class="divider"></li>*/
/* */
/*                 <li>*/
/*                   <a href='{{ base_url('logout') }}'>*/
/*                     <i class="fas fa-fw fa-sign-out-alt"></i>*/
/*                     {{ l("LOGOUT") }}*/
/*                   </a>*/
/*                 </li>*/
/*               </ul>*/
/*           </li>*/
/* */
/*           {% if controlSidebar %}*/
/*           <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-fw fa-cogs"></i></a></li>*/
/*           {% endif %}*/
/* */
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
/* */
/*   <aside class="main-sidebar">*/
/*     <section class="sidebar">*/
/*       <ul class="sidebar-menu" data-widget="tree">*/
/*         <li class="treeview visible-xs">*/
/*           <a href="#" class="dropdown-toggle UserProfil" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                 {% if fbaccount.UserDefaultFbAccount() is not empty %}*/
/*                 <img src='https://graph.facebook.com/{{ fbaccount.UserDefaultFbAccount() }}/picture?redirect=1&height=32&width=32&type=normal' width='32' height='32' style='vertical-align:middle;' class="img-circle" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/>*/
/*                 {% else %}*/
/*                   <img src='{{ assets('theme/default/images/facebookUser.jpg') }}' width='32' height='32' style='vertical-align:middle;' />*/
/*                 {% endif %}*/
/*                 <span class="userFullName">*/
/*                   {% if fbaccountDetails.row() is not empty %}*/
/*                     <span class="hidden-sm">{{ fbaccountDetails.row('name')|capitalize }}</span>*/
/*                   {% else %}*/
/*                     <span class="hidden-sm">Facebook User</span>*/
/*                   {% endif %}*/
/*                 </span>*/
/*                 <i class="fa fa-fw fa-angle-left pull-right"></i>*/
/*               </a>*/
/*           <ul class="treeview-menu">*/
/*             {% set fbacounts = fbaccount.getAll() %}*/
/*                 {% if fbacounts is not empty %} */
/*                     {% for fba in fbacounts %}*/
/*                         <li>*/
/*                         <a href="{{ base_url('facebook_accounts/home/switch_fb_account/' ~ fba.fb_id) }}" >*/
/*                           <img src='https://graph.facebook.com/{{ fba.fb_id }}/picture?redirect=1&height=40&width=40&type=normal' style='vertical-align:middle;' width='32px' height='32px' class="fbProfileImg" onerror="this.src = '{{ assets('theme/default/images/facebookUser.jpg') }}'"/> {{ fba.firstname|capitalize ~ " " ~ fba.lastname|capitalize }}*/
/*                         </a>*/
/*                       </li>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                     <li>*/
/*                       <a href='#'>{{ l('No facebook account available') }}</a></li>*/
/*                 {% endif %}*/
/*                 <li>*/
/*                   <a href="{{ base_url('facebook_accounts') }}">*/
/*                     <i class="fa fa-fw fa-plus"></i>*/
/*                     <span>{{ l('Add facebook account') }}</span>*/
/*                   </a>*/
/*                 </li>*/
/*           </ul>*/
/*         </li>*/
/* */
/*         {% if app_session.userdata('current_admin_account') is not null %}*/
/*           <li class="visible-xs">*/
/*             <a href='{{ base_url("home/back_to_admin") }}'>*/
/*               <i class="far fa-caret-square-left"></i>*/
/*               <span>{{ l("Back to admin") }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/* */
/*         <li>*/
/*           <a href='{{ assets() }}'>*/
/*           <i class="fa fa-fw fa-home"></i><span> {{ l("Home") }}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*         <li class="treeview">*/
/*           <a href='{{ base_url('settings') }}'>*/
/*             <i class="fa fa-fw fa-cog"></i>*/
/*             <span>{{ l("Settings") }}</span>*/
/*             <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li class='{% if current_page == 'general_settings' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/general_settings') }}' >*/
/*                 <i class='fa fa-fw fa-tasks'></i>*/
/*                 <span>{{ l('General settings') }}</span>*/
/*               </a>*/
/*             </li>*/
/* */
/*             <li class='{% if current_page == 'publish_settings' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/publish_settings') }}' >*/
/*                 <i class='fa fa-fw fa-clipboard'></i>*/
/*                 <span>{{ l('Publish settings') }}</span>*/
/*               </a>*/
/*             </li>*/
/* */
/*             <li class='{% if current_page == 'fbapps' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/fbapps') }}' >*/
/*                 <i class='fa fa-fw fa-plug'></i>*/
/*                 <span>{{ l('Facebook Apps') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% if user.hasPermission('admin') == true %}*/
/*             <li class='{% if current_page == 'app_settings' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/app_settings') }}' ><i class='fa fa-fw fa-cogs'></i> */
/*                 <span>{{ l('App settings') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class='{% if current_page == 'roles' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/roles') }}' >*/
/*                 <i class='fa fa-fw fa-users'></i>*/
/*                 <span>{{ l('Roles') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class='{% if current_page == 'modules_manager' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/modules_manager') }}' >*/
/*                 <i class='fa fa-fw fa-th-large'></i>*/
/*                 <span>{{ l('Modules manager') }}</span>*/
/*               </a>*/
/*             </li>*/
/*            */
/*             <li class='{% if current_page == 'update' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/update') }}' >*/
/*                 <i class="fas fa-fw fa-sync"></i>*/
/*                 <span class="hidden-xs">{{ l('Update') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/*              {% if app_settings['use_proxy'] %}*/
/*             <li class='{% if current_page == 'Proxies_manager' %}active{% endif %}'>*/
/*               <a href='{{ base_url('settings/proxies_manager') }}' >*/
/*                 <i class="fa fa-fw fa-list"></i>*/
/*                 <span class="hidden-xs">{{ l('Proxies manager') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             {% endif %}*/
/*             */
/*            </ul>*/
/*         </li>*/
/* */
/*         <li class="visible-xs">*/
/*           <a href='{{ base_url('my_notifications') }}'>*/
/*           <i class="fas fa-fw fa-bell"></i><span>{{ l("Notifications") }}</span> <span class="label label-danger">{{notifications.count_notifications}}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*         {% if KPMIsActive('payments') %}*/
/*         <li class="visible-xs">*/
/*           <a href='{{ base_url('payments/my_orders') }}' >*/
/*             <i class="fa fa-fw fa-list"></i>*/
/*             {{ l('My orders') }}*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/*  */
/*         {% if demo_link is not null %}*/
/*         <li style="background-color: #82b440;color: white;"><a href="{{demo_link}}" title="{{demo_link_text}}" target="_blank"><i class="fa fa-fw fa-shopping-cart"></i><span>{{demo_link_text}}</span></a></li>*/
/*         {% endif %}*/
/* */
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-fw fa-paper-plane"></i>*/
/*             <span>{{ l("Publishing") }}</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-fw fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('posts') }}">*/
/*               <i class="fa fa-fw fa-clipboard  "></i> */
/*               <span>{{  l("Saved posts") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('schedules') }}">*/
/*               <i class="fa fa-fw fa-calendar"></i> */
/*                 <span>{{ l("Scheduled posts") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('schedules/logs') }}">*/
/*               <i class="fas fa-fw fa-folder-open"></i> */
/*                 <span>{{ l("Schedule Logs") }}</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/* */
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fab fa-fw fa-facebook"></i>*/
/*             <span>{{ l("Facebook") }}</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-fw fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li class='{% if current_page == 'fb_accounts' %}active{% endif %}'>*/
/*               <a href='{{ base_url('facebook_accounts') }}' >*/
/*                 <i class='fab fa-fw fa-facebook'></i>*/
/*                 <span>{{ l('Manage accounts') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class='{% if current_page == 'fb_accounts' %}active{% endif %}'>*/
/*               <a href='{{ base_url('nodes_categories') }}' >*/
/*                 <i class="fas fa-fw fa-th-list"></i>*/
/*                 <span>{{ l('Manage categories') }}</span>*/
/*               </a>*/
/*             </li>*/
/*             </ul>*/
/*         </li>*/
/*           */
/*         <li>*/
/*           <a href='{{ base_url('insights') }}'>*/
/*             <i class="far fa-fw fa-chart-bar"></i>*/
/*             <span>{{ l("insights") }}</span>*/
/*           </a>*/
/*         </li>*/
/*  */
/*         {% if user.hasPermission('admin') == true %}*/
/*             <li>*/
/*               <a href='{{ base_url('users_manager') }}'>*/
/*                 <i class="fa fa-fw fa-user"></i>*/
/*                 <span>{{ l("Users") }}</span>*/
/*               </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.canUse("comments") and kpModules.auto_comment is defined %}*/
/*         <li>*/
/*           <a href='{{ base_url("comments") }}'>*/
/*             <i class="fa fa-fw fa-comment"></i>*/
/*             <span>{{ l("Comments") }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.canUse("join_groups") and kpModules.join_groups is defined %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fab fa-fw fa-facebook"></i>*/
/*             <span>{{ l("Join groups") }}</span><span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('join_groups/schedules') }}"><i class="fa fa-fw fa-clipboard  "></i> <span>{{  l("Schedules") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('join_groups') }}"><i class="fa fa-fw fa-clipboard  "></i> <span>{{  l("Search & add new") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('join_groups/schedules/logs') }}"><i class="fas fa-fw fa-folder-open"></i> <span>{{  l("Schedule logs") }}</span></a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.canUse("invite_join_groups") and KPMIsActive('invite_join_groups') %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fab fa-fw fa-facebook"></i>*/
/*             <span>{{ l('Invite join groups') }}</span><span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('invite_join_groups/schedules') }}"><i class="fa fa-fw fa-clipboard"></i> <span>{{  l("Schedules") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('invite_join_groups') }}"><i class="fa fa-fw fa-plus"></i> <span>{{  l("Add new") }}</span></a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('invite_join_groups/schedules/logs') }}"><i class="fas fa-fw fa-folder-open "></i> <span>{{  l("Schedule logs") }}</span></a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if KPMIsActive('instagram') %}*/
/*         <li>*/
/*           <a href='{{ base_url("instagram") }}'>*/
/*             <i class="fab fa-fw fa-instagram"></i>*/
/*             <span>{{ l("Instagram") }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if kpModules.kp_faq is defined %}*/
/*         <li>*/
/*           <a href='{{ base_url(faq_page) }}'>*/
/*             <i class="fa fa-fw fa-life-ring"></i>*/
/*             <span>{{ l(faq_text) }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if KPMIsActive("payments") %}*/
/*         <li>*/
/*           <a href='{{ base_url("prices") }}'>*/
/*             <i class="fas fa-fw fa-ticket-alt"></i>*/
/*             <span>{{ l("Pricing") }}</span>*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/*     	*/
/*         {% if user.hasPermission('admin') == true and KPMIsActive("payments") %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fa fa-fw fa-credit-card"></i>*/
/*             <span>{{ l("Payments") }}</span><span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></a>*/
/*           <ul class="treeview-menu">*/
/*             <li>*/
/*               <a href="{{ base_url('payments/packages') }}"><i class="fa fa-fw fa-clipboard  "></i> */
/*                 <span>{{  l("Packages") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('payments/payment_settings') }}"><i class="fa fa-fw fa-clipboard  "></i> */
/*                 <span>{{  l("Payment settings") }}</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ base_url('payments/payments_history') }}"><i class="fa fa-fw fa-clipboard  "></i> */
/*                 <span>{{  l("Payments history") }}</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if user.hasPermission('admin') == true %}*/
/*         {% if KPMIsActive("notifications") or KPMIsActive("translations") %}*/
/*         <li class="treeview">*/
/*           <a href='#'>*/
/*             <i class="fas fa-fw fa-plug"></i>*/
/*             <span>{{ l("Tools") }}</span><span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span></a>*/
/*             <ul class="treeview-menu">*/
/*               {% if KPMIsActive("notifications") %}*/
/*               <li>*/
/*                 <a href='{{ base_url("notifications") }}'>*/
/*                   <i class="fas fa-fw fa-bell"></i>*/
/*                   <span>{{ l("Manage Notifications") }}</span>*/
/*                 </a>*/
/*               </li>*/
/*               {% endif %}*/
/*               {% if KPMIsActive("translations") %}*/
/*               <li>*/
/*                 <a href='{{base_url('translations')}}'>*/
/*                   <i class="fa fa-fw fa-language"></i>*/
/*                   <span>{{ l("Translations") }}</span>*/
/*                 </a>*/
/*               </li>*/
/*               {% endif %}*/
/*             </ul>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% set items = menuItems %}*/
/* */
/*         {% for item in items %}*/
/*           <li>*/
/*             <a href='{{ item.url }}' target="{{ item.target }}">*/
/*               <i class="fa fa-fw fa-{{ item.icon }}"></i>*/
/*               <span>{{ l(item.text)|capitalize }}</span></a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         <li>*/
/*           <a href='{{ base_url('logout') }}' title="{{ l("Logout") }}">*/
/*             <i class="fas fa-fw fa-sign-out-alt"></i> */
/*             <span>{{ l("Logout") }}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*     </section>*/
/*   </aside>*/
/*   <div style="margin-top:50px"></div>*/
/*   {% endblock %}*/
/*   <div class="content-wrapper addMargin">*/
/*     <section class="content-header">*/
/*       {% block flash_bag %}*/
/*         {% include "blocks/flash_bag.twig" %}*/
/*       {% endblock %}*/
/*       {% block ads %}*/
/*         {% include "blocks/ads.twig" %}*/
/*       {% endblock %}*/
/*     </section>*/
/*     <section class="content container-fluid">*/
/*       <div class='alerts'></div>*/
/*       {% block body %}*/
/*         {% endblock %}*/
/*     </section>*/
/*   </div>*/
/*   <footer class="main-footer">*/
/*     {% block footer %}*/
/*       <p class="footer">{{ l('COPYRIGHT') }} &copy {{ "now"|date("Y") }} */
/*         {% if app_settings['footer_text'] is empty %}*/
/*           Powered by <a href='https://pandisoft.com' target='_blank'>Kingposter</a>*/
/*         {% else %}*/
/*           {{ app_settings['footer_text']|raw }}*/
/*         {% endif %}*/
/* */
/*         {% if user is not empty and user.isLoggedIn() and user.hasPermission('admin') == true %} */
/*           - {{ l('Version') }} {{ app_version }}*/
/*         {% endif %}*/
/*       </p>*/
/*     {% endblock %}*/
/*   </footer>*/
/* </div>*/
/* <div class="scrollTop">*/
/*       <i class="fa fa-fw fa-arrow-circle-up"></i>*/
/*     </div>*/
/*   {% block javascripts_footer %}*/
/*   <script src="{{ assets('theme/default/js/jsui.js?v=' ~ assets_version) }}"></script>*/
/*   <script>*/
/*   */
/*     {% if kpModules.notifications is defined %}*/
/*     $(function(){*/
/*       $(".close").on("click",function(){*/
/*         if($(this).data("id") != ""){*/
/*           $.ajax({*/
/*             url: '{{ base_url("notifications/user_notifications/close/") }}'+$(this).data("id"),*/
/*             dataType: 'json',*/
/*             type: 'GET',*/
/*             contentType: 'application/x-www-form-urlencoded',*/
/*             error: function( jqXhr, textStatus, errorThrown ){ console.log(errorThrown); },*/
/*             });*/
/*         }*/
/*       });*/
/*     });*/
/*     {% endif %}*/
/* */
/*   </script>*/
/*   {% endblock %}*/
/*   {{ app_settings['footer_js']|raw }}*/
/* </body>*/
/* </html>*/
