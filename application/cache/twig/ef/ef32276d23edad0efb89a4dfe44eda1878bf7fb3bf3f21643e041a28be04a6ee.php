<?php

/* home.twig */
class __TwigTemplate_61541dc7df60fadf71be46560a99fdcc27aa00059422102dc3a8633808188ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_dashboard.twig", "home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_header' => array($this, 'block_top_header'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_js' => array($this, 'block_head_js'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["controlSidebar"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Home")), "html", null, true);
    }

    // line 5
    public function block_top_header($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"materialPreloader\" class=\"load-bar\" style=\"height:5px;display:block;top:0px;z-index:9999\"><div class=\"load-bar-container\"><div class=\"load-bar-base base1\" style=\"background:#159756\"><div class=\"color red\" style=\"background:#da4733\"></div><div class=\"color blue\" style=\"background:#3b78e7\"></div><div class=\"color yellow\" style=\"background:#fdba2c\"></div><div class=\"color green\" style=\"background:#159756\"></div></div></div> <div class=\"load-bar-container\"><div class=\"load-bar-base base2\" style=\"background:#159756\"><div class=\"color red\" style=\"background:#da4733\"></div><div class=\"color blue\" style=\"background:#3b78e7\"></div><div class=\"color yellow\" style=\"background:#fdba2c\"></div> <div class=\"color green\" style=\"background:#159756\"></div> </div> </div> </div>";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        // line 13
        if ((isset($context["downgrade_fb_accounts"]) ? $context["downgrade_fb_accounts"] : null)) {
            // line 14
            $this->loadTemplate("home/fb_accounts_downgrade.twig", "home.twig", 14)->display($context);
        }
        // line 16
        $this->loadTemplate("home/general_options.twig", "home.twig", 16)->display($context);
        // line 17
        echo "<div class=\"homeMessageBox\"></div>";
        // line 18
        echo form_open("", "id=\"postForm\" name=\"postForm\"");
        echo "
<div class=\"row\">
    <div class=\"col-sm-6\">";
        // line 21
        $this->loadTemplate("home/form.twig", "home.twig", 21)->display($context);
        // line 22
        echo "    </div>
\t<div class=\"col-sm-6\">";
        // line 24
        $this->loadTemplate("home/preview.twig", "home.twig", 24)->display($context);
        // line 25
        echo "    </div>
</div>";
        // line 27
        $this->loadTemplate("home/details.twig", "home.twig", 27)->display($context);
        // line 28
        echo "</form>";
        // line 29
        $this->loadTemplate("home/groupstable.twig", "home.twig", 29)->display($context);
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  \t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, assets("theme/default/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, assets("vendor/elfinder/jquery/css/jquery-ui.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, assets("vendor/elfinder/css/elfinder.min.css"), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, assets("theme/default/css/emojionearea.min.css"), "html", null, true);
        echo "\">";
        // line 42
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) {
            // line 43
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, assets("theme/default/css/tablesorter.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">";
        } else {
            // line 45
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, assets("theme/default/css/datatables.bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">";
        }
        // line 47
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, assets("theme/default/plugins/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
    }

    // line 51
    public function block_head_js($context, array $blocks = array())
    {
        // line 52
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, assets("vendor/elfinder/jquery/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>";
        // line 53
        $this->displayParentBlock("head_js", $context, $blocks);
        echo "
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/emojione.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 57
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 58
        $this->displayParentBlock("javascripts_footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, assets("theme/default/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, assets("theme/default/js/post_form.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/jquery.reel.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, assets("theme/default/js/postpreview.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/moment.min.js"), "html", null, true);
        echo "\"></script>";
        // line 64
        if (( !twig_test_empty(call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) && (call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N")) != "en"))) {
            // line 65
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, assets((("theme/default/js/libs/moment/locale/" . call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 67
        echo "
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, assets("theme/default/js/libs/emojionearea.min.js"), "html", null, true);
        echo "\"></script>
\t
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, assets("vendor/elfinder/js/elfinder.min.js"), "html", null, true);
        echo "\"></script>";
        // line 72
        if (( !twig_test_empty(call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) && (call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N")) != "en"))) {
            // line 73
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, assets((("vendor/elfinder/js/i18n/elfinder." . call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N"))) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 76
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) {
            // line 77
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, assets("theme/default/js/libs/jquery.tablesorter.min.js"), "html", null, true);
            echo "\"></script>";
        } else {
            // line 79
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, assets("theme/default/js/jquery.dataTables.min.js"), "html", null, true);
            echo "\"></script>
\t\t<script src=\"";
            // line 80
            echo twig_escape_filter($this->env, assets("theme/default/js/dataTables.bootstrap.min.js"), "html", null, true);
            echo "\"></script>";
        }
        // line 82
        echo "
\t<script>

\t\$(document).ready(function() {\$('#nodescategory').select2();});";
        // line 87
        if ((isset($context["load_nodes_ajax"]) ? $context["load_nodes_ajax"] : null)) {
            // line 88
            echo "\t\$(document).ready(function(){
\t\t\$.ajax({
        url: '";
            // line 90
            echo twig_escape_filter($this->env, base_url("home/load_nodes"), "html", null, true);
            echo "',
        dataType: 'text',
        type: 'get',
        contentType: 'application/x-www-form-urlencoded',
        success: function( data, textStatus, jQxhr ){
\t\t  \t\$(\".listNodesTable\").html(data);
        },
        error: function( jqXhr, textStatus, errorThrown ){
        \t\$(\".listNodesTable\").html(\"<tr><td colspan='6'>";
            // line 98
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Failed to load your nodes list, Please try again")), "html", null, true);
            echo "</td></tr>\");
        \talertBox(\"";
            // line 99
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Failed to load your nodes list, Please try again")), "html", null, true);
            echo "\",\"danger\",false,true,true,true);
        }
    \t});
\t});";
        }
        // line 104
        echo "
\tvar groups = []; // List of selected groups
\tvar TOTALPOSTINGTIME = 0; // in milliseconds
\tvar leftTime = 0;
\tvar postingInterval = 0;
\tvar countGroup = 0;
\tvar nextGroup = 0;
\tvar timeDeff = 30000; // default 30 seconds
\tvar randomInterval =";
        // line 112
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "ipri", array(), "array")), "html", null, true);
        echo ";

\t\t\$(document).ready(function(){

\t\t\tkp_preloader(\"off\");";
        // line 118
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) {
            // line 119
            echo "\t\t\t    \$(\"#groupsDataTable\").tablesorter({
\t\t\t\t\tdelayInit: true,
\t\t\t\t\tshowProcessing: true,
\t\t\t\t\theaders: {
\t\t\t\t\t\t
\t\t\t\t\t\t1: {sorter: true,parser: \"text\",empty:\"bottom\",extractor:\"none\",string:\"max\"},
\t\t\t\t\t\t2: {sorter: false,parser: false,empty:\"bottom\",extractor:\"none\",string:\"max\"},
\t\t\t\t\t\t4: {sorter: false,parser: false,empty:\"bottom\",extractor:\"none\",string:\"max\"},\t
\t\t\t\t\t}
\t\t\t    });

\t\t\t    /* reAttched Checkbo Event*/
\t\t\t    \$(\"#checkbox-all\").click(function () {
\t\t\t\t\t\$('#groupsDatabale tbody input[type=\"checkbox\"],.dataTable tbody input[type=\"checkbox\"],#datatable tbody input[type=\"checkbox\"]').prop('checked', this.checked);
\t\t\t\t});";
        } else {
            // line 136
            echo "\t\t\t\tvar translations = {
\t\t\t            \"lengthMenu\": \"";
            // line 137
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Display %s records per page", "_MENU_")), "html", null, true);
            echo "\",
\t\t\t            \"zeroRecords\": \"";
            // line 138
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("No records available")), "html", null, true);
            echo "\",
\t\t\t\t\t\t\"info\": \"";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Showing %s to %s of %s ", "_START_", "_END_", "_TOTAL_")), "html", null, true);
            echo "\",
\t\t\t            \"infoFiltered\": \"";
            // line 140
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("(filtered from %s total records)", "_MAX_")), "html", null, true);
            echo "\",
\t\t\t            \"search\":  \"";
            // line 141
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Search")), "html", null, true);
            echo "\",
\t\t\t            \"paginate\": {
\t\t\t\t\t        \"first\": \"";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("First")), "html", null, true);
            echo "\",
\t\t\t\t\t        \"last\": \"";
            // line 144
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Last")), "html", null, true);
            echo "\",
\t\t\t\t\t        \"next\":  \"";
            // line 145
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Next")), "html", null, true);
            echo "\",
\t\t\t\t\t        \"previous\":   \"";
            // line 146
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Previous")), "html", null, true);
            echo "\",
\t\t\t\t\t    }
\t\t\t\t};

\t\t\t    var groupsDataTable = \$('#groupsDataTable').DataTable({
\t\t\t\t\t\"aaSorting\": [],
\t\t\t\t\t\"bSort\": true,
\t\t\t\t\t\"responsive\": true,
\t\t\t        \"aoColumnDefs\": [{
\t\t\t            'bSortable': false,
\t\t\t            'aTargets': [0]
\t\t\t        }],
\t\t\t        \"lengthMenu\": [[10, 25, 50, 100, -1], [10, 25, 50, 100, \"";
            // line 158
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("All")), "html", null, true);
            echo "\"]],
\t\t\t\t\t\"iDisplayLength\": 100,
\t\t\t\t\t\"language\": translations,
\t\t\t    });";
        }
        // line 163
        echo "
\t\t    \$(\"#postForm #message\").emojioneArea({
\t\t        autoHideFilters: false,
\t\t        pickerPosition: \"bottom\",
\t\t        autocomplete: false,
\t\t        events: {
\t\t         \tkeydown: function (editor, event) {
\t\t\t\t      \$( \"#postForm #message\" ).trigger('propertychange');
\t\t\t\t    },
\t\t\t\t    emojibtn_click: function (button, event) {
\t\t\t\t      \$( \".emojionearea-editor\" ).trigger('keydown');
\t\t\t\t    }
\t\t        }
\t\t    });

\t\t});";
        // line 181
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
        // line 201
        echo "\t// Global variables 
\t\$(document).ready(function() {
\t\t
\t\t\$(\"#postForm .linkSubFieldsToggle button\").click(function(){
\t\t\t\$(\"#postForm .linkSubFields\").stop().toggle('fast');
\t\t});

\t\t\$(\"#postForm .itemPriceFieldsToggle button\").click(function(){
\t\t\t\$(\"#postForm .ItemDetails\").stop().toggle('fast');
\t\t});

\t\t\$(\"#postForm #scheduledpost\").click(function(){
\t\t\t\$(\"#postForm .scheduledpost\").stop().toggle('fast');
\t\t});

     \t\$('#scheduledPostTime').datetimepicker({
     \t\tformat: '";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm',
     \t\tdefaultDate: new Date(),
     \t});

     \t\$('#start_on').datetimepicker({format: '";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});
     \t\$('#end_on').datetimepicker({format: '";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["date_format_js"]) ? $context["date_format_js"] : null), "html", null, true);
        echo " HH:mm'});

\t    // Trigger click event
\t\t\$('.postTypeActive').click();

\t\t// #postForm #post click event => Post validation 
\t\t\$(\"#postForm #post\").click(function(){
\t\t\t\$(\"#postForm .messageBox\").removeClass(\"error\");
\t\t\t\$(\"#postForm .messageBox\").html(\"\");
\t\t\t
\t\t\tif(\$(\"#postForm #postType\").val() == \"message\" && \$.trim(\$(\"#postForm #message\").val()) == \"\"){
\t\t\t\talertBox('";
        // line 233
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_EMPTY")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true);\t
\t\t\t}else if(\$(\"#postForm #postType\").val() == \"link\" && \$.trim(\$(\"#postForm #link\").val()) == \"\"){
\t\t\t\talertBox('";
        // line 235
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_EMPTY")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true);\t
\t\t\t}else if(\$(\"#postForm #postType\").val() == \"image\" && \$.trim(\$(\"#postForm #imageURL_0\").val()) == \"\"){
\t\t\t\talertBox('";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_EMPTY")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true);\t
\t\t\t}else{
\t\t\t\tpost();
\t\t\t}
\t\t});
\t});

\tfunction getMediaLib(){
\t    \$('#elfinderImage').elfinder({
\t        url : 'upload/upload_image',
\t        onlyMimes: ['image'],
\t        docked: false,
\t        lang: '";
        // line 249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N")), "html", null, true);
        echo "',
\t        dialog: { width: 600, modal: true },
\t        closeOnEditorCallback: true,
\t        uiOptions: { toolbar : [
                ['home','up'],['mkdir','upload'],['quicklook'],['rm'],['duplicate','rename'],['search'],['view']
            ]},
\t        getFileCallback: function(data) {
\t        \tif(\$(\"#URLFrom\").val() == \"image\"){
\t\t\t\t\t\$(\"#imageURL_\"+\$(\"#image_number\").val()).val(data.url);
\t\t\t\t\t\$(\"#imageURL_\"+\$(\"#image_number\").val()).trigger('propertychange');
\t        \t}else{
\t        \t\t\$(\"#picture\").val(data.url);
\t        \t\t\$( \"#picture\" ).trigger('propertychange');
\t        \t}
\t\t        \$('#mediaLibModalImage').modal('hide');
\t\t    }
\t    }).elfinder('instance');
\t}

\tfunction send(){
\t\tvar unexpectedPostingError = true;
\t\tvar currentGroup = groups[nextGroup];
\t\tPOST_IN_PROGRESS = true;
\t\t// update the left time
\t\tvar duree = random(parseInt(\$(\"#postForm #defTime\").val()),parseInt(\$(\"#postForm #defTime\").val())+randomInterval) * (countGroup-nextGroup);
\t\tTOTALPOSTINGTIME = duree*1000;
\t\t// Clear errors
\t\t\$('.postingStatusErrors').html(\"\");
\t\tif(!\$('#selectgroup_' + currentGroup).is(\":checked\")) return false;
\t\t// Get post data
\t\tvar params = {};
\t\tparams[\"groupID\"] = currentGroup;
\t\tparams[\"postType\"] = \$(\"#postForm #postType\").val();
\t\tparams[\"";
        // line 282
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo "\"] = getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "');
\t\tif(\$.trim(\$(\"#postForm #message\").val()) != \"\"){
\t\t\tparams[\"message\"] = \$(\"#postForm #message\").val();
\t\t}
\t\tparams['fb_preset_id'] =  \$(\"#postForm #fb_preset_id\").val();";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["max_num_img_post"]) ? $context["max_num_img_post"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 289
            echo "\t\t    params[\"image_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"] = \$(\"#postForm #imageURL_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\").val();";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "\t\tparams['allow_spherical_photo'] = \$('#enable360Image', \"#postForm\").is(\":checked\") ? 1 : 0;

\t\tif(\$(\"#postForm #postType\").val() == \"video\"){
\t\t\tif(\$.trim(\$(\"#postForm #video\").val()) != \"\"){
\t\t\t\tparams[\"video\"] = \$(\"#postForm #video\").val();
\t\t\t}
\t\t\tif(\$.trim(\$(\"#postForm #video-description\").val()) != \"\"){
\t\t\t\tparams[\"description_video\"] = \$(\"#postForm #video-description\").val();
\t\t\t}
\t\t}

\t\tparams['itemprice'] = \$(\"#postForm #itemprice\").val();
\t\tparams['itemname'] = \$(\"#postForm #itemname\").val();
\t\t
\t\tif(\$(\"#postForm #postType\").val() == \"link\"){
\t\t\tif(\$.trim(\$(\"#postForm #link\").val()) != \"\") 
\t\t\t\tparams[\"link\"] = \$(\"#postForm #link\").val();
\t\t\t
\t\t\tif(\$(\".linkSubFields\").is(':visible')){
\t\t\t\tif(\$.trim(\$(\"#postForm #picture\").val()) != \"\") 
\t\t\t\t\tparams[\"picture\"] = \$(\"#postForm #picture\").val(); 
\t\t\t
\t\t\t\tif(\$.trim(\$(\"#postForm #name\").val()) != \"\") 
\t\t\t\t\tparams[\"name\"] = \$(\"#postForm #name\").val();
\t\t\t
\t\t\t\tif(\$.trim(\$(\"#postForm #caption\").val()) != \"\") 
\t\t\t\t\tparams[\"caption\"] = \$(\"#postForm #caption\").val();
\t\t\t
\t\t\t\tif(\$.trim(\$(\"#postForm #description\").val()) != \"\") 
\t\t\t\t\tparams[\"description\"] = \$(\"#postForm #description\").val();
\t\t\t}
\t\t}
\t\t\tkp_preloader(\"on\");
\t\t\t\$(\".postStatus_\"+currentGroup).html(\"<span class='badge'>";
        // line 324
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Sending post...")), "html", null, true);
        echo "<span>\");
\t\t\t\$.ajax({
\t\t        url: '";
        // line 326
        echo twig_escape_filter($this->env, base_url("posts/send_post"), "html", null, true);
        echo "',
\t\t        dataType: 'json',
\t\t        type: 'post',
\t\t        contentType: 'application/x-www-form-urlencoded',
\t\t        data: params,
\t\t        success: function( data, textStatus, jQxhr ){
\t\t\t\t  \tif(data.status == \"success\"){
\t\t\t\t  \t\t\$('#'+currentGroup).removeClass('postingError');
\t\t\t\t\t\t\$('#'+currentGroup).addClass('postingSuccess');
\t\t\t\t\t\t\$(\".postStatus_\"+currentGroup).html(\"<a href='https://www.facebook.com/\"+data.id+\"' target='_blank'><i class='fa fa-check' aria-hidden='true'></i>";
        // line 335
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("VIEW_POST")), "html", null, true);
        echo "</a>\");
\t\t\t\t\t}else{
\t\t\t\t\t\t\$('#'+currentGroup).removeClass('postingSuccess');
\t\t\t\t\t\t\$('#'+currentGroup).addClass('postingError');
\t\t\t\t\t\thtmlData = \"\";
\t                \tif(data.message !== null && typeof data.message === 'object'){
\t\t\t\t\t\t\tObject.keys(data.message).forEach(function(key) {
\t\t\t\t\t\t\t    htmlData += data.message[key]+\" \";
\t\t\t\t\t\t\t});
\t                \t}else{
\t                \t\thtmlData = data.message;
\t                \t}
\t\t\t\t\t\t\$(\".postStatus_\"+currentGroup).html(\"<i class='fa fa-info-circle' aria-hidden='true'></i> \"+htmlData);
\t\t\t\t\t}
\t\t        },
\t\t        error: function( jqXhr, textStatus, errorThrown ){
\t\t        \t\$('#'+currentGroup).removeClass('postingSuccess');
\t\t\t\t\t\$('#'+currentGroup).addClass('postingError');
\t\t\t\t\t\$(\".postStatus_\"+currentGroup).html(\"<i class='fa fa-info-circle' aria-hidden='true'></i> \"+textStatus+\" : \"+errorThrown);
\t\t        },
\t\t        complete: function(){
\t\t        \tkp_preloader(\"off\");
\t\t        }
\t\t    });
\t}

\tfunction post(){
\t\t
\t\ttimeDeff = random(parseInt(\$(\"#postForm #defTime\").val()),parseInt(\$(\"#postForm #defTime\").val())+randomInterval);
\t\ttimeDeff = timeDeff*1000;

\t\t// Clear groups, groupCount vars
\t\tgroups = [];
\t\tcountGroup = 0;
\t\t
\t\t// Get all checked groups
\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\tgroups.push(\$(this).val());
\t\t\tcountGroup++;
\t\t});

\t\tif(countGroup != 0){
\t\t\talertBox('";
        // line 377
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POSTING_WAIT")), "html", null, true);
        echo "',\"info\",\"#postForm .messageBox\",true);\t\t
\t\t\t// Set the left time
\t\t\tvar duree = random(parseInt(\$(\"#postForm #defTime\").val()),parseInt(\$(\"#postForm #defTime\").val())+randomInterval) * (countGroup-1);
\t\t\tTOTALPOSTINGTIME = duree*1000;
\t
\t\t\t\$(\".totalPostTime\").html(\"&sim; \"+Math.round(((parseInt(\$(\"#postForm #defTime\").val())+randomInterval)* (countGroup-1))/60).toFixed(2)+\" \"+'";
        // line 382
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("MINUTES")), "html", null, true);
        echo "');\t
\t\t\t
\t\t\tstartTimer();
\t\t\tsend();
\t\t\t\$(\".postingDetails\").show();
\t\t\tpostingInterval = setTimeout(posting,timeDeff);
\t\t\t
\t\t}else{
\t\t\talertBox('";
        // line 390
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CHOOSE_GROUP_TO_POSTIN")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true);\t
\t\t}
\t\t
\t}

\t\$(document).ready(function() {
\t\t
\t\tvar imageCount = \$(\".multiImages > .input-group\").length;

\t    \$(\".multiImages\").on( 'click', '.mediaLibraryImage', function () {
\t    \t\$('#mediaLibModalImage').modal('show');
\t\t    getMediaLib();
\t\t    \$(\"#URLFrom\").val(\"image\");
\t\t    \$(\"#image_number\").val(\$(this).val());
\t    });

\t    \$(\".multiImages\").on( 'click', '.removeImage', function () {
\t    \t\$(this).parent().remove();
\t    \timageCount--;
\t    \t\$(\".multiImages input\").trigger('propertychange');
\t    });

\t    \$(\".addNewImageField\").click(function(){
\t    \tif(imageCount >=";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["max_num_img_post"]) ? $context["max_num_img_post"] : null), "html", null, true);
        echo " ){
\t    \t\treturn false;
\t    \t}
\t    \tvar field = \"<div class='input-group'>\";
\t\t\t\tfield += \"<input type='text' name='imageURL' class='form-control' id='imageURL_\"+imageCount+\"' value='' placeholder='";
        // line 417
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Image URL.")), "html", null, true);
        echo "' />\";
\t\t\t\tfield += \"<div class='input-group-btn'>\";
\t\t\t\tfield += \"<button type='button' class='btn btn-default mediaLibraryImage' value='\"+imageCount+\"'>";
        // line 419
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Upload")), "html", null, true);
        echo "</button>\";
\t\t\t\tfield += \"</div><i class='fa fa-times removeImage' aria-hidden='true'></i>\";
\t\t\t\tfield += \"</div>\";
\t\t\t\$('.multiImages').append(field);
\t\t\timageCount++;
\t\t\t\$(\".multiImages input\").trigger('propertychange');
\t    });

\t\t\$('#mediaLibraryImageLink').click(function(){
\t\t\t\$('#mediaLibModalImage').modal('show');
\t\t    getMediaLib();
\t\t    \$(\"#URLFrom\").val(\"link\");
\t\t});

\t\t\$('#mediaLibraryVideo').click(function(){
\t\t\t\$('#mediaLibModalVideo').modal('show');
\t\t    var fv = \$('#elfinderVideo').elfinder({
\t\t        url : 'upload/upload_video',
\t\t        onlyMimes: ['video/mp4','video/x-msvideo','video/mp4','video/mpeg','video/3gpp','video/quicktime','video/ogg','video/webm'],
\t\t        docked: false,
\t\t        lang: '";
        // line 439
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("LANG_I18N")), "html", null, true);
        echo "',
\t\t        dialog: { width: 600, modal: true },
\t\t        closeOnEditorCallback: true,
\t\t        uiOptions: { toolbar : [
                    // toolbar configuration
                    ['home', 'up'],
                    ['mkdir', 'upload'],
                    ['quicklook'],
                    ['rm'],
                    ['duplicate', 'rename'],
                    ['search'],
                    ['view']
                ]},
\t\t        getFileCallback: function(data) {
\t\t            \$('#video').val(data.url);
\t\t            \$( \"#video\" ).trigger('propertychange');
\t\t            \$('#mediaLibModalVideo').modal('hide');
\t\t        }
\t\t    }).elfinder('instance');
\t\t});

\t});";
        // line 463
        echo "\t\$(\"#postForm #savepost\").click(function(){
\t\tif(\$.trim(\$(\"#postForm #message\").val()) == \"\" && \$.trim(\$(\"#postForm #link\").val()) == \"\" && \$.trim(\$(\"#postForm #imageURL_0\").val()) == \"\" && \$.trim(\$(\"#postForm #video\").val()) == \"\"){
\t\t\talertBox('";
        // line 465
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_EMPTY")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true,true);
\t\t}else{
\t\t\t\$('#postTitleModal').modal('show');
\t\t}
\t});\t

\t\$(\"#savePostModal\").click(function(){
\t\tif(\$.trim(\$(\"#postTitleModal #postTitle\").val()) != \"\"){
\t\t\tsavePost();
\t\t}else{
\t\t\talertBox('";
        // line 475
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CHOOSE_TITLE_POST")), "html", null, true);
        echo "',\"danger\",\"#postTitleModal .messageBoxModal\",true);
\t\t}
\t});";
        // line 480
        echo "\t\$(\"#postForm #updatepost\").click(function(){

\t\tif(\$.trim(\$(\"#postForm #message\").val()) == \"\" && \$.trim(\$(\"#postForm #link\").val()) == \"\" && \$.trim(\$(\"#postForm #imageURL_0\").val()) == \"\" && \$.trim(\$(\"#postForm #video\").val()) == \"\"){
\t\t\talertBox('";
        // line 483
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_EMPTY")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true,true);
\t\t}else{
\t\t\tkp_preloader(\"on\");

\t\t\tvar params = {};

\t\t\tparams['post_id'] = \$(\"#postForm #postId\").val();
\t\t\tparams['post_type'] = \$(\"#postForm #postType\").val();

\t\t\tparams['post_title'] = \$(\"#postTitleModal #postTitle\").val();
\t\t\tparams['post_type'] = \$(\"#postForm #postType\").val();
\t\t\tparams['message'] =  \$(\"#postForm #message\").val();

\t\t\tparams['fb_preset_id'] =  \$(\"#postForm #fb_preset_id\").val();

\t\t\tparams['link'] = \$(\"#postForm #link\").val();";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["max_num_img_post"]) ? $context["max_num_img_post"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 501
            echo "\t\t\t        params[\"image_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"] = \$(\"#postForm #imageURL_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\").val();";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        echo "
\t\t\tparams['allow_spherical_photo'] = \$('#enable360Image', \"#postForm\").is(\":checked\") ? 1 : 0;

\t\t\tparams['itemprice'] = \$(\"#postForm #itemprice\").val();
\t\t\tparams['itemname'] = \$(\"#postForm #itemname\").val();

\t\t\tparams['video'] = \$(\"#postForm #video\").val();
\t\t\tparams['description_video'] = \$(\"#postForm #video-description\").val();

\t\t\tparams['";
        // line 512
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo "'] = getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "');

\t\t\tif(\$(\".linkSubFields\").is(':visible')){
\t\t\t\tparams['picture'] = \$(\"#postForm #picture\").val();
\t\t\t\tparams['name'] = \$(\"#postForm #name\").val();
\t\t\t\tparams['caption'] = \$(\"#postForm #caption\").val();
\t\t\t\tparams['description'] = \$(\"#postForm #description\").val();
\t\t\t}

\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 522
        echo twig_escape_filter($this->env, base_url("posts/update"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: params,
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\talertBox(data.message,\"success\",false,true,true);
\t\t\t\t\t}else{
\t\t\t\t\t\tif(data.message !== null && typeof data.message === 'object'){
\t\t                    htmlData = \"<ul>\";
\t\t                    Object.keys(data.message).forEach(function(key) {
\t\t                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t                    });
\t\t                    htmlData += \"</ul>\";
\t\t                  }else{
\t\t                    htmlData = data.message;
\t\t                  }
\t\t                  alertBox(htmlData,\"danger\",false,false,true);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  alertBox(\"";
        // line 545
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",false,true,true);
\t\t\t\t},
\t\t\t\tcomplete: function(){
\t\t\t\t\tkp_preloader(\"off\");
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t}
\t});";
        // line 556
        echo "\t\$(\"#postForm #saveScheduledPost\").click(function(){
\t\t
\t\t// Clear groups, groupCount vars
\t\tgroups = [];
\t\tcountGroup = 0;

\t\t// Show all records before saving the schedule
\t\t\$(\"#groupsDataTable_length select\").val(-1).change();
\t\t\$(\"#groupsDataTable_filter input\").val(\"\").keyup();
\t\t
\t\t// Get all checked groups
\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\tgroups.push(\$(this).val());
\t\t\tcountGroup++;
\t\t});

\t\tif(\$(\"#postForm #postId\").val() == \"\"){";
        // line 574
        echo "\t\t\tsavePost(true);
\t\t}else if(countGroup == 0){
\t\t\talertBox(\"";
        // line 576
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("CHOOSE_GROUP_TO_POSTIN")), "html", null, true);
        echo "\",\"danger\",\"#postForm .messageBox\",true);\t
\t\t}else{
\t\t\tsaveSchedule();
\t\t}
\t});";
        // line 584
        echo "\t\$('.groupsOptions').on('click','#deleteSelectedNodes', function() {
\t\tnodes = [];
\t\t// Get all checked nodes
\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\tnodes.push(\$(this).val());
\t\t});

\t\t\$.ajax({
\t\t\turl: '";
        // line 592
        echo twig_escape_filter($this->env, base_url("nodes_categories/remove_nodes"), "html", null, true);
        echo "',
\t\t\tdataType: 'json',
\t\t\ttype: 'post',
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tdata: { 
\t\t\t\tcategory_id: \$(\"#nodescategory\").val(),
\t\t\t\tnodes: JSON.stringify(nodes),";
        // line 599
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t},
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\tif(data.status == \"success\"){
\t\t\t\tfor (var i = 0; i < nodes.length; i++ ) {
\t\t\t\t\t\$( \"#\" + nodes[i] ).css('background','#ffcccc');
\t\t\t\t\t\$( \"#\" + nodes[i] ).fadeOut(500, function() { \$(this).remove(); });
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\talertBox(data.message,\"danger\",true,true);
\t\t\t\t}
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t  alertBox('";
        // line 613
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "',\"danger\",true,true);
\t\t\t}
\t\t});
\t});

\tvar \$nodes = [];
\t\$('.groupsOptions').on('click','#addSelectedNodes', function() {
\t\t// Get all checked nodes
\t\tnodes = [];
\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\tnodes.push(\$(this).val());
\t\t});
\t\t// Clear message box
\t\t\$(\".addCateMsgBoxModal\").html(\"\");
\t\t// and finally show the modal
\t\t\$( '#addToCategoryModal' ).modal({ show: true });
\t\treturn false;
\t});

\t\$('#modalAddCateBtn').click(function() {

\t\t// Clear message box
\t\t\$(\".addCateMsgBoxModal\").html(\"\");

\t\t// Choos category 
\t\tif(\$('#addToCategoryModal .nodescategory').val() == \"\"){
\t\t\talertBox('";
        // line 639
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Choose a category")), "html", null, true);
        echo "',\"danger\",\".addCateMsgBoxModal\",false);
\t\t}else{

\t\t\t\$(\"#modalAddCateBtn\").prop('disabled', true);

\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 645
        echo twig_escape_filter($this->env, base_url("nodes_categories/add_nodes"), "html", null, true);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'post',
\t\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\t\tdata: { 
\t\t\t\t\tcategory_id: \$('#addToCategoryModal .nodescategory').val(),
\t\t\t\t\tnodes: JSON.stringify(nodes),";
        // line 652
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t\t},
\t\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\t\talertBox(data.message,\"success\",\".addCateMsgBoxModal\",false);
\t\t\t\t\t}else{
\t\t\t\t\t\tif(data.message !== null && typeof data.message === 'object'){
\t\t                    htmlData = \"<ul>\";
\t\t                    Object.keys(data.message).forEach(function(key) {
\t\t                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t\t                    });
\t\t                    htmlData += \"</ul>\";
\t\t                }else{
\t\t                    htmlData = data.message;
\t\t                }
\t\t\t\t\t\talertBox(htmlData,\"danger\",\".addCateMsgBoxModal\",false);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t\t  console.log(errorThrown);
\t\t\t\t  \$(\"#modalAddCateBtn\").prop('disabled', true);
\t\t\t\t  alertBox(\"";
        // line 673
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\".addCateMsgBoxModal\",false);
\t\t\t\t},
\t\t\t\tcomplete: function(){
\t\t\t\t\t\$(\"#modalAddCateBtn\").prop('disabled', false);
\t\t\t\t}
\t\t\t});

\t\t\t\$(\"#modalAddCateBtn\").prop('disabled', true);
\t\t}
\t});


\tfunction startTimer(){
\t\tvar h = Math.floor(TOTALPOSTINGTIME / 36e5),
\t     \tm = Math.floor((TOTALPOSTINGTIME % 36e5) / 6e4),
\t     \ts = Math.floor((TOTALPOSTINGTIME % 6e4) / 1000);
\t\t
\t    h= (h<10)?\"0\"+h: h;
\t    m= (m<10)?\"0\"+m: m;
\t    s= (s<10)? \"0\"+s : s;
\t\t
\t    \$(\".leftTime\").html(\"&sim; \"+h+\":\"+m+\":\"+s);
\t    TOTALPOSTINGTIME = TOTALPOSTINGTIME - 1000;
\t\t\t
\t   if( h==0 && m==0 && s==0 ){
\t\t\tclearTimeout(leftTime);
\t\t\t\$(\".leftTime\").html(\"";
        // line 699
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Done")), "html", null, true);
        echo "\");
\t\t\talertBox(\"";
        // line 700
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POSTING_COMPLETED")), "html", null, true);
        echo "\",\"success\",\"#postForm .messageBox\",true);\t
\t\t\t\$(\"#postForm #post\").prop('disabled', false);
\t\t}else{
\t\t\t\$(\"#postForm #post\").prop('disabled', true);
\t\t\tleftTime = setTimeout(startTimer,1000);
\t\t\t\$(\"#pauseButton\").prop('disabled', false);
\t\t\t\$(\"#pauseButton\").removeClass(\"btnDisabled\");
\t\t}
\t}
\t
\tvar xhrGetSiteDetails = null;
\tfunction GetSiteDetails(url,callback){
\t\tif(xhrGetSiteDetails!==null) xhrGetSiteDetails.abort();
\t\txhrGetSiteDetails = \$.ajax({
\t        url: \"";
        // line 714
        echo twig_escape_filter($this->env, base_url("helpers/get_url_info"), "html", null, true);
        echo "\",
\t        dataType: \"json\",
\t        type: \"post\",
\t        data: { 
\t\t\t\turl: url,";
        // line 719
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t},
\t        success: callback,
\t        error: function(request, status, error) {}
\t    });
\t\t
\t}";
        // line 727
        if (($this->getAttribute((isset($context["app_settings"]) ? $context["app_settings"] : null), "disable_dt_plugin", array(), "array") == 1)) {
            // line 728
            echo "\t\tfunction NodesFilter() {
\t\t\tvar filter = \$(\"#nodesFilterFiled\").val().toUpperCase();
\t\t \t\$(\"#groupsDataTable tbody tr\").each(function(){
\t\t\t \tfirstElem = \$(this).find(\".groupTitle span\").text().toUpperCase();
\t\t\t \tsecondElem = \$(this).find(\".nodeType\").text().toUpperCase();
\t\t\t \tthirdElem = \$(this).find(\".privacyAndLikes\").text().toUpperCase();
\t\t\t\tif (firstElem.indexOf(filter) > -1 || secondElem.indexOf(filter) > -1 || thirdElem.indexOf(filter) > -1) {
\t\t        \t\$(this).show();
\t\t      \t} else {
\t\t        \t\$(this).hide();
\t\t      \t}
\t\t\t});
\t\t}";
        }
        // line 742
        echo "\t\t
\tfunction posting() {
\t\tnextGroup++;
\t\ttimeDeff = random(parseInt(\$(\"#postForm #defTime\").val()),parseInt(\$(\"#postForm #defTime\").val())+randomInterval);
\t\ttimeDeff = timeDeff*1000;

\t\tif (nextGroup < countGroup) {
\t\t\tsend();
\t\t\tpostingInterval = setTimeout(posting,timeDeff);
\t\t}else{
\t\t\tclearTimeout(postingInterval);
\t\t\t// Reinitial all variables 
\t\t\tTOTALPOSTINGTIME = 0;
\t\t\tgroups.length = 0;
\t\t\tleftTime = 0;
\t\t\tcountGroup = 0;
\t\t\tnextGroup = 0;
\t\t\t\$(\"#postForm #post\").prop('disabled', false);
\t\t\t\$(\".postingDetails\").hide();
\t\t}
\t}

\tfunction random(min,max){
\t\tmin = parseInt(min);
\t\tmax = parseInt(max);
\t\treturn Math.floor(Math.random() * (max - min + 1)) + min;  
\t}

\tfunction postPause(){
\t  clearTimeout(leftTime);
\t  clearTimeout(postingInterval);
\t\t\$(\"#pauseButton\").prop('disabled', true);
\t\t\$(\"#resumeButton\").prop('disabled', false);
\t\t\$(\"#pauseButton\").addClass(\"btnDisabled\");
\t\t\$(\"#resumeButton\").removeClass(\"btnDisabled\");
\t}

\tfunction postResume(){
\t\tclearTimeout(leftTime);
\t  \tclearTimeout(postingInterval);
\t  \tleftTime = setTimeout(startTimer,1000);
\t \tpostingInterval = setTimeout(posting,timeDeff);
\t\t
\t\t\$(\"#pauseButton\").prop('disabled', false);
\t\t\$(\"#resumeButton\").prop('disabled', true);
\t\t\$(\"#pauseButton\").removeClass(\"btnDisabled\");
\t\t\$(\"#resumeButton\").addClass(\"btnDisabled\");
\t}";
        // line 792
        echo "\tfunction savePost(saveScheduleThen){
\t\tif(\$.trim(\$(\"#postForm #message\").val()) == \"\" && \$.trim(\$(\"#postForm #link\").val()) == \"\" && \$.trim(\$(\"#postForm #imageURL_0\").val()) == \"\" && \$.trim(\$(\"#postForm #video\").val()) == \"\"){
\t\t\talertBox('";
        // line 794
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("POST_EMPTY")), "html", null, true);
        echo "',\"danger\",\"#postForm .messageBox\",true,true);
\t\t\treturn;
\t\t}

\t\tkp_preloader(\"on\",\"#postTitleModal .modal-body\");
\t\t\$(\"#savePostModal\").prop('disabled', true);

\t\tvar params = {};

\t\tparams['post_title'] = \$(\"#postTitleModal #postTitle\").val();
\t\tparams['post_type'] = \$(\"#postForm #postType\").val();
\t\tparams['message'] =  \$(\"#postForm #message\").val();

\t\tparams['fb_preset_id'] =  \$(\"#postForm #fb_preset_id\").val();

\t\tparams['link'] = \$(\"#postForm #link\").val();";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["max_num_img_post"]) ? $context["max_num_img_post"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 812
            echo "\t\t        params[\"image_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"] = \$(\"#postForm #imageURL_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\").val();";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 814
        echo "
\t\tparams['allow_spherical_photo'] = \$('#enable360Image', \"#postForm\").is(\":checked\") ? 1 : 0;

\t\tparams['itemprice'] = \$(\"#postForm #itemprice\").val();
\t\tparams['itemname'] = \$(\"#postForm #itemname\").val();

\t\tparams['video'] = \$(\"#postForm #video\").val();
\t\tparams['description_video'] = \$(\"#postForm #video-description\").val();

\t\tparams['";
        // line 823
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo "'] = getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "');

\t\tif(\$(\".linkSubFields\").is(':visible')){
\t\t\tparams['picture'] = \$(\"#postForm #picture\").val();
\t\t\tparams['name'] = \$(\"#postForm #name\").val();
\t\t\tparams['caption'] = \$(\"#postForm #caption\").val();
\t\t\tparams['description'] = \$(\"#postForm #description\").val();
\t\t}

\t\t\$.ajax({
\t\t\turl: '";
        // line 833
        echo twig_escape_filter($this->env, base_url("posts/add"), "html", null, true);
        echo "',
\t\t\tdataType: 'json',
\t\t\ttype: 'post',
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tdata: params,
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\talertBox(data.message,\"success\",\"#postTitleModal .messageBoxModal\",false,false);
\t\t\t\t\t\$('#postId').val(data.post_id);
\t\t\t\t\tif(saveScheduleThen === true){
\t\t\t\t\t\tsaveSchedule();
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\tif(data.message !== null && typeof data.message === 'object'){
\t                    htmlData = \"<ul>\";
\t                    Object.keys(data.message).forEach(function(key) {
\t                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t                    });
\t                    htmlData += \"</ul>\";
\t                  }else{
\t                    htmlData = data.message;
\t                  }
\t                  alertBox(htmlData,\"danger\",\"#postTitleModal .messageBoxModal\",false,false);
\t\t\t\t}
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t  alertBox(\"";
        // line 860
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#postTitleModal .messageBoxModal\",false,false);
\t\t\t},
\t\t\tcomplete: function(){
\t\t\t\t\$(\"#savePostModal\").prop('disabled', false);
\t\t\t\tkp_preloader(\"off\",\"#postTitleModal .modal-body\");
\t\t\t}
\t\t});
\t}";
        // line 870
        echo "\tfunction saveSchedule(){
\t\t// Clear groups, groupCount vars
\t\tgroups = [];
\t\tcountGroup = 0;
\t\t
\t\t// Get all checked groups
\t\t\$('.groupName:visible .fbnode:checked').each(function(){
\t\t\tgroups.push(\$(this).val());
\t\t\tcountGroup++;
\t\t});

\t\tkp_preloader(\"on\",\"#postForm .preloader\");

\t\tvar pi = \$(\"#scheduledPostInterval\",\"#postForm\").val();
\t\tvar apf = \$(\"#scheduleResumeAfter\",\"#postForm\").val();

\t\tvar post_interval = \$(\".schedulePI input[type='radio']:checked\",\"#postForm\").val() == \"minute\" ? pi : pi*60 ;
\t\tvar resume_after = \$(\".autoPause input[type='radio']:checked\",\"#postForm\").val() == \"minute\" ? apf : apf*60 ;
\t\t
\t\t\$(\"#postForm .messageBox\").html(\"\");
\t\t
\t\t// Disable save schedule post
\t\t\$(\"#postForm #saveScheduledPost\").prop('disabled', true);
\t\t\t
\t\t\$.ajax({
\t\t\turl: '";
        // line 895
        echo twig_escape_filter($this->env, base_url("schedules/action/add"), "html", null, true);
        echo "',
\t\t\tdataType: 'json',
\t\t\ttype: 'post',
\t\t\tcontentType: 'application/x-www-form-urlencoded',
\t\t\tdata: {
\t\t\t\trun_at: \$(\"#scheduledPostTime\",\"#postForm\").val(),
\t\t\t\tpost_interval: post_interval,
\t\t\t\tnodes: JSON.stringify(groups),
\t\t\t\tpost_id: \$(\"#postForm #postId\").val(),
\t\t\t\tpost_app: \$(\"#scheduledPostApp\",\"#postForm\").val(),
\t\t\t\tfb_account: \$(\"#scheduledFbAccount\",\"#postForm\").val(),
\t\t\t\tpause_after: \$(\"#schedulePauseAfter\",\"#postForm\").val(),
\t\t\t\tresume_after: resume_after,
\t\t\t\t
\t\t\t\trepeat_every: \$(\"#repeatEvery\",\"#postForm\").val(),
      \t\t\tend_on: \$(\"#end_on\",\"#postForm\").val(),";
        // line 912
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_token_name")), "html", null, true);
        echo ": getCookie('";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_item')->getCallable(), array("csrf_cookie_name")), "html", null, true);
        echo "') 
\t\t\t},
\t\t\tsuccess: function( data, textStatus, jQxhr ){
\t\t\t\tif(data.status == \"success\"){
\t\t\t\t\talertBox(data.message,\"success\",\"#postForm .messageBox\",false);
\t\t\t\t}else{
\t\t\t\t\tif(data.message !== null && typeof data.message === 'object'){
\t                    htmlData = \"<ul>\";
\t                    Object.keys(data.message).forEach(function(key) {
\t                        htmlData += \"<li>\" + data.message[key] + \"</li>\";
\t                    });
\t                    htmlData += \"</ul>\";
\t                }else{
\t                    htmlData = data.message;
\t                }
\t                alertBox(htmlData,\"danger\",\"#postForm .messageBox\",false);
\t\t\t\t}
\t\t\t},
\t\t\terror: function( jqXhr, textStatus, errorThrown ){ 
\t\t\t  console.log(errorThrown);
\t\t\t  alertBox(\"";
        // line 932
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('l')->getCallable(), array("Unable to complete your request")), "html", null, true);
        echo "\",\"danger\",\"#postForm .messageBox\",false);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t// Re-enable save schedule post
\t\t\t\t\$(\"#postForm #saveScheduledPost\").prop('disabled', false);
\t\t\t\tkp_preloader(\"off\",\"#postForm .preloader\");
\t\t\t}
\t\t});\t
\t}

\t</script>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1273 => 932,  1248 => 912,  1230 => 895,  1203 => 870,  1193 => 860,  1163 => 833,  1148 => 823,  1137 => 814,  1127 => 812,  1123 => 811,  1105 => 794,  1101 => 792,  1052 => 742,  1037 => 728,  1035 => 727,  1024 => 719,  1017 => 714,  1000 => 700,  996 => 699,  967 => 673,  941 => 652,  932 => 645,  923 => 639,  894 => 613,  875 => 599,  866 => 592,  856 => 584,  849 => 576,  845 => 574,  827 => 556,  816 => 545,  790 => 522,  775 => 512,  764 => 503,  754 => 501,  750 => 500,  732 => 483,  727 => 480,  722 => 475,  709 => 465,  705 => 463,  681 => 439,  658 => 419,  653 => 417,  646 => 413,  620 => 390,  609 => 382,  601 => 377,  556 => 335,  544 => 326,  539 => 324,  504 => 291,  494 => 289,  490 => 288,  481 => 282,  445 => 249,  430 => 237,  425 => 235,  420 => 233,  406 => 222,  402 => 221,  395 => 217,  377 => 201,  359 => 181,  342 => 163,  335 => 158,  320 => 146,  316 => 145,  312 => 144,  308 => 143,  303 => 141,  299 => 140,  295 => 139,  291 => 138,  287 => 137,  284 => 136,  267 => 119,  265 => 118,  258 => 112,  248 => 104,  241 => 99,  237 => 98,  226 => 90,  222 => 88,  220 => 87,  215 => 82,  211 => 80,  206 => 79,  201 => 77,  199 => 76,  194 => 73,  192 => 72,  189 => 71,  184 => 69,  180 => 68,  177 => 67,  172 => 65,  170 => 64,  167 => 63,  163 => 62,  159 => 61,  155 => 60,  151 => 59,  147 => 58,  144 => 57,  139 => 54,  135 => 53,  131 => 52,  128 => 51,  122 => 47,  117 => 45,  112 => 43,  110 => 42,  107 => 40,  102 => 38,  98 => 37,  93 => 35,  89 => 34,  86 => 33,  82 => 29,  80 => 28,  78 => 27,  75 => 25,  73 => 24,  70 => 22,  68 => 21,  63 => 18,  61 => 17,  59 => 16,  56 => 14,  54 => 13,  52 => 11,  49 => 10,  45 => 6,  42 => 5,  36 => 3,  32 => 1,  30 => 9,  11 => 1,);
    }
}
/* {% extends "base_dashboard.twig" %}*/
/* */
/* {% block title %}{{ l('Home') }}{% endblock %}*/
/* */
/* {% block top_header %}*/
/* <div id="materialPreloader" class="load-bar" style="height:5px;display:block;top:0px;z-index:9999"><div class="load-bar-container"><div class="load-bar-base base1" style="background:#159756"><div class="color red" style="background:#da4733"></div><div class="color blue" style="background:#3b78e7"></div><div class="color yellow" style="background:#fdba2c"></div><div class="color green" style="background:#159756"></div></div></div> <div class="load-bar-container"><div class="load-bar-base base2" style="background:#159756"><div class="color red" style="background:#da4733"></div><div class="color blue" style="background:#3b78e7"></div><div class="color yellow" style="background:#fdba2c"></div> <div class="color green" style="background:#159756"></div> </div> </div> </div>*/
/* {% endblock %}*/
/* */
/* {% set controlSidebar = true %}*/
/* {% block body %}*/
/* {{ parent() }}*/
/* */
/* {% if downgrade_fb_accounts %}*/
/* {% include "home/fb_accounts_downgrade.twig" %}*/
/* {% endif %}*/
/* {% include "home/general_options.twig" %}*/
/* <div class="homeMessageBox"></div>*/
/* {{ form_open('', 'id="postForm" name="postForm"') }}*/
/* <div class="row">*/
/*     <div class="col-sm-6">*/
/*     {% include "home/form.twig" %}*/
/*     </div>*/
/* 	<div class="col-sm-6">*/
/*     {% include "home/preview.twig" %}*/
/*     </div>*/
/* </div>*/
/* {% include "home/details.twig" %}*/
/* </form>*/
/* {% include "home/groupstable.twig" %}*/
/* {% endblock %}*/
/* */
/* {# Load resources #}*/
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/*   	<link href="{{ assets('theme/default/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* 	<link rel="stylesheet" type="text/css" href="{{ assets('vendor/elfinder/jquery/css/jquery-ui.min.css') }}">*/
/* 	<link rel="stylesheet" type="text/css" href="{{ assets('vendor/elfinder/css/elfinder.min.css') }}">*/
/* */
/* 	<link rel="stylesheet" type="text/css" href="{{ assets('theme/default/css/emojionearea.min.css') }}">*/
/* */
/* 	{% if app_settings['disable_dt_plugin'] == 1 %}*/
/* 	<link href="{{ assets('theme/default/css/tablesorter.css') }}" rel="stylesheet"> */
/* 	{% else %}*/
/* 	<link href="{{ assets('theme/default/css/datatables.bootstrap.min.css') }}" rel="stylesheet">*/
/* 	{% endif %}*/
/* 	<link href="{{ assets('theme/default/plugins/select2/select2.min.css') }}" rel="stylesheet"> */
/* */
/* {% endblock %}*/
/* */
/* {% block head_js %}*/
/* 	<script src="{{ assets('vendor/elfinder/jquery/js/jquery-ui.min.js') }}"></script>*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/js/libs/emojione.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ assets('theme/default/plugins/select2/select2.min.js') }}"></script>*/
/* 	<script src="{{ assets('theme/default/js/post_form.js') }}"></script>*/
/* 	<script src="{{ assets('theme/default/js/libs/jquery.reel.js') }}"></script>*/
/* 	<script src="{{ assets('theme/default/js/postpreview.js') }}"></script>*/
/* 	<script src="{{ assets('theme/default/js/libs/moment.min.js') }}"></script>*/
/* 	{% if l('LANG_I18N') is not empty and l('LANG_I18N') != "en" %}*/
/* 		<script src="{{ assets('theme/default/js/libs/moment/locale/' ~ l('LANG_I18N') ~ '.js') }}"></script>*/
/* 	{% endif %}*/
/* */
/* 	<script src="{{ assets('theme/default/js/libs/bootstrap-datetimepicker.min.js') }}"></script>*/
/* 	<script src="{{ assets('theme/default/js/libs/emojionearea.min.js') }}"></script>*/
/* 	*/
/* 	<script src="{{ assets('vendor/elfinder/js/elfinder.min.js') }}"></script>*/
/* 	{% if l('LANG_I18N') is not empty and l('LANG_I18N') != "en" %}*/
/* 		<script src="{{ assets('vendor/elfinder/js/i18n/elfinder.' ~ l('LANG_I18N') ~ '.js') }}"></script>*/
/* 	{% endif %}*/
/* */
/* 	{% if app_settings['disable_dt_plugin'] == 1 %}*/
/* 		<script src="{{ assets('theme/default/js/libs/jquery.tablesorter.min.js') }}"></script>*/
/* 	{% else %}*/
/* 		<script src="{{ assets('theme/default/js/jquery.dataTables.min.js') }}"></script>*/
/* 		<script src="{{ assets('theme/default/js/dataTables.bootstrap.min.js') }}"></script>*/
/* 	{% endif %}*/
/* */
/* 	<script>*/
/* */
/* 	$(document).ready(function() {$('#nodescategory').select2();});*/
/* */
/* 	{% if load_nodes_ajax %}*/
/* 	$(document).ready(function(){*/
/* 		$.ajax({*/
/*         url: '{{ base_url("home/load_nodes")}}',*/
/*         dataType: 'text',*/
/*         type: 'get',*/
/*         contentType: 'application/x-www-form-urlencoded',*/
/*         success: function( data, textStatus, jQxhr ){*/
/* 		  	$(".listNodesTable").html(data);*/
/*         },*/
/*         error: function( jqXhr, textStatus, errorThrown ){*/
/*         	$(".listNodesTable").html("<tr><td colspan='6'>{{l('Failed to load your nodes list, Please try again')}}</td></tr>");*/
/*         	alertBox("{{l('Failed to load your nodes list, Please try again')}}","danger",false,true,true,true);*/
/*         }*/
/*     	});*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	var groups = []; // List of selected groups*/
/* 	var TOTALPOSTINGTIME = 0; // in milliseconds*/
/* 	var leftTime = 0;*/
/* 	var postingInterval = 0;*/
/* 	var countGroup = 0;*/
/* 	var nextGroup = 0;*/
/* 	var timeDeff = 30000; // default 30 seconds*/
/* 	var randomInterval = {{ app_settings['ipri']|number_format }};*/
/* */
/* 		$(document).ready(function(){*/
/* */
/* 			kp_preloader("off");*/
/* */
/* 			{% if app_settings['disable_dt_plugin'] == 1 %}*/
/* 			    $("#groupsDataTable").tablesorter({*/
/* 					delayInit: true,*/
/* 					showProcessing: true,*/
/* 					headers: {*/
/* 						*/
/* 						1: {sorter: true,parser: "text",empty:"bottom",extractor:"none",string:"max"},*/
/* 						2: {sorter: false,parser: false,empty:"bottom",extractor:"none",string:"max"},*/
/* 						4: {sorter: false,parser: false,empty:"bottom",extractor:"none",string:"max"},	*/
/* 					}*/
/* 			    });*/
/* */
/* 			    /* reAttched Checkbo Event*//* */
/* 			    $("#checkbox-all").click(function () {*/
/* 					$('#groupsDatabale tbody input[type="checkbox"],.dataTable tbody input[type="checkbox"],#datatable tbody input[type="checkbox"]').prop('checked', this.checked);*/
/* 				});*/
/* */
/* 			{% else %}*/
/* 				var translations = {*/
/* 			            "lengthMenu": "{{ l('Display %s records per page','_MENU_') }}",*/
/* 			            "zeroRecords": "{{ l('No records available') }}",*/
/* 						"info": "{{ l('Showing %s to %s of %s ','_START_','_END_','_TOTAL_') }}",*/
/* 			            "infoFiltered": "{{ l('(filtered from %s total records)','_MAX_') }}",*/
/* 			            "search":  "{{ l('Search') }}",*/
/* 			            "paginate": {*/
/* 					        "first": "{{ l('First') }}",*/
/* 					        "last": "{{ l('Last') }}",*/
/* 					        "next":  "{{ l('Next') }}",*/
/* 					        "previous":   "{{ l('Previous') }}",*/
/* 					    }*/
/* 				};*/
/* */
/* 			    var groupsDataTable = $('#groupsDataTable').DataTable({*/
/* 					"aaSorting": [],*/
/* 					"bSort": true,*/
/* 					"responsive": true,*/
/* 			        "aoColumnDefs": [{*/
/* 			            'bSortable': false,*/
/* 			            'aTargets': [0]*/
/* 			        }],*/
/* 			        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "{{l('All')}}"]],*/
/* 					"iDisplayLength": 100,*/
/* 					"language": translations,*/
/* 			    });*/
/* 		  	{% endif %}*/
/* */
/* 		    $("#postForm #message").emojioneArea({*/
/* 		        autoHideFilters: false,*/
/* 		        pickerPosition: "bottom",*/
/* 		        autocomplete: false,*/
/* 		        events: {*/
/* 		         	keydown: function (editor, event) {*/
/* 				      $( "#postForm #message" ).trigger('propertychange');*/
/* 				    },*/
/* 				    emojibtn_click: function (button, event) {*/
/* 				      $( ".emojionearea-editor" ).trigger('keydown');*/
/* 				    }*/
/* 		        }*/
/* 		    });*/
/* */
/* 		});*/
/* */
/* 	{# If repeat once disbale repeat at #}*/
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
/*    */
/* */
/* 	{# --------------- Post form section  --------------- #}*/
/* 	// Global variables */
/* 	$(document).ready(function() {*/
/* 		*/
/* 		$("#postForm .linkSubFieldsToggle button").click(function(){*/
/* 			$("#postForm .linkSubFields").stop().toggle('fast');*/
/* 		});*/
/* */
/* 		$("#postForm .itemPriceFieldsToggle button").click(function(){*/
/* 			$("#postForm .ItemDetails").stop().toggle('fast');*/
/* 		});*/
/* */
/* 		$("#postForm #scheduledpost").click(function(){*/
/* 			$("#postForm .scheduledpost").stop().toggle('fast');*/
/* 		});*/
/* */
/*      	$('#scheduledPostTime').datetimepicker({*/
/*      		format: '{{ date_format_js }} HH:mm',*/
/*      		defaultDate: new Date(),*/
/*      	});*/
/* */
/*      	$('#start_on').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/*      	$('#end_on').datetimepicker({format: '{{ date_format_js }} HH:mm'});*/
/* */
/* 	    // Trigger click event*/
/* 		$('.postTypeActive').click();*/
/* */
/* 		// #postForm #post click event => Post validation */
/* 		$("#postForm #post").click(function(){*/
/* 			$("#postForm .messageBox").removeClass("error");*/
/* 			$("#postForm .messageBox").html("");*/
/* 			*/
/* 			if($("#postForm #postType").val() == "message" && $.trim($("#postForm #message").val()) == ""){*/
/* 				alertBox('{{ l('POST_EMPTY') }}',"danger","#postForm .messageBox",true);	*/
/* 			}else if($("#postForm #postType").val() == "link" && $.trim($("#postForm #link").val()) == ""){*/
/* 				alertBox('{{ l('POST_EMPTY') }}',"danger","#postForm .messageBox",true);	*/
/* 			}else if($("#postForm #postType").val() == "image" && $.trim($("#postForm #imageURL_0").val()) == ""){*/
/* 				alertBox('{{ l('POST_EMPTY') }}',"danger","#postForm .messageBox",true);	*/
/* 			}else{*/
/* 				post();*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	function getMediaLib(){*/
/* 	    $('#elfinderImage').elfinder({*/
/* 	        url : 'upload/upload_image',*/
/* 	        onlyMimes: ['image'],*/
/* 	        docked: false,*/
/* 	        lang: '{{ l("LANG_I18N") }}',*/
/* 	        dialog: { width: 600, modal: true },*/
/* 	        closeOnEditorCallback: true,*/
/* 	        uiOptions: { toolbar : [*/
/*                 ['home','up'],['mkdir','upload'],['quicklook'],['rm'],['duplicate','rename'],['search'],['view']*/
/*             ]},*/
/* 	        getFileCallback: function(data) {*/
/* 	        	if($("#URLFrom").val() == "image"){*/
/* 					$("#imageURL_"+$("#image_number").val()).val(data.url);*/
/* 					$("#imageURL_"+$("#image_number").val()).trigger('propertychange');*/
/* 	        	}else{*/
/* 	        		$("#picture").val(data.url);*/
/* 	        		$( "#picture" ).trigger('propertychange');*/
/* 	        	}*/
/* 		        $('#mediaLibModalImage').modal('hide');*/
/* 		    }*/
/* 	    }).elfinder('instance');*/
/* 	}*/
/* */
/* 	function send(){*/
/* 		var unexpectedPostingError = true;*/
/* 		var currentGroup = groups[nextGroup];*/
/* 		POST_IN_PROGRESS = true;*/
/* 		// update the left time*/
/* 		var duree = random(parseInt($("#postForm #defTime").val()),parseInt($("#postForm #defTime").val())+randomInterval) * (countGroup-nextGroup);*/
/* 		TOTALPOSTINGTIME = duree*1000;*/
/* 		// Clear errors*/
/* 		$('.postingStatusErrors').html("");*/
/* 		if(!$('#selectgroup_' + currentGroup).is(":checked")) return false;*/
/* 		// Get post data*/
/* 		var params = {};*/
/* 		params["groupID"] = currentGroup;*/
/* 		params["postType"] = $("#postForm #postType").val();*/
/* 		params["{{ config_item('csrf_token_name') }}"] = getCookie('{{ config_item('csrf_cookie_name') }}');*/
/* 		if($.trim($("#postForm #message").val()) != ""){*/
/* 			params["message"] = $("#postForm #message").val();*/
/* 		}*/
/* 		params['fb_preset_id'] =  $("#postForm #fb_preset_id").val();*/
/* */
/* 		{% for i in 0..max_num_img_post %}*/
/* 		    params["image_{{i}}"] = $("#postForm #imageURL_{{i}}").val();*/
/* 		{% endfor %}*/
/* 		params['allow_spherical_photo'] = $('#enable360Image', "#postForm").is(":checked") ? 1 : 0;*/
/* */
/* 		if($("#postForm #postType").val() == "video"){*/
/* 			if($.trim($("#postForm #video").val()) != ""){*/
/* 				params["video"] = $("#postForm #video").val();*/
/* 			}*/
/* 			if($.trim($("#postForm #video-description").val()) != ""){*/
/* 				params["description_video"] = $("#postForm #video-description").val();*/
/* 			}*/
/* 		}*/
/* */
/* 		params['itemprice'] = $("#postForm #itemprice").val();*/
/* 		params['itemname'] = $("#postForm #itemname").val();*/
/* 		*/
/* 		if($("#postForm #postType").val() == "link"){*/
/* 			if($.trim($("#postForm #link").val()) != "") */
/* 				params["link"] = $("#postForm #link").val();*/
/* 			*/
/* 			if($(".linkSubFields").is(':visible')){*/
/* 				if($.trim($("#postForm #picture").val()) != "") */
/* 					params["picture"] = $("#postForm #picture").val(); */
/* 			*/
/* 				if($.trim($("#postForm #name").val()) != "") */
/* 					params["name"] = $("#postForm #name").val();*/
/* 			*/
/* 				if($.trim($("#postForm #caption").val()) != "") */
/* 					params["caption"] = $("#postForm #caption").val();*/
/* 			*/
/* 				if($.trim($("#postForm #description").val()) != "") */
/* 					params["description"] = $("#postForm #description").val();*/
/* 			}*/
/* 		}*/
/* 			kp_preloader("on");*/
/* 			$(".postStatus_"+currentGroup).html("<span class='badge'>{{ l('Sending post...') }}<span>");*/
/* 			$.ajax({*/
/* 		        url: '{{ base_url("posts/send_post")}}',*/
/* 		        dataType: 'json',*/
/* 		        type: 'post',*/
/* 		        contentType: 'application/x-www-form-urlencoded',*/
/* 		        data: params,*/
/* 		        success: function( data, textStatus, jQxhr ){*/
/* 				  	if(data.status == "success"){*/
/* 				  		$('#'+currentGroup).removeClass('postingError');*/
/* 						$('#'+currentGroup).addClass('postingSuccess');*/
/* 						$(".postStatus_"+currentGroup).html("<a href='https://www.facebook.com/"+data.id+"' target='_blank'><i class='fa fa-check' aria-hidden='true'></i> {{ l('VIEW_POST') }}</a>");*/
/* 					}else{*/
/* 						$('#'+currentGroup).removeClass('postingSuccess');*/
/* 						$('#'+currentGroup).addClass('postingError');*/
/* 						htmlData = "";*/
/* 	                	if(data.message !== null && typeof data.message === 'object'){*/
/* 							Object.keys(data.message).forEach(function(key) {*/
/* 							    htmlData += data.message[key]+" ";*/
/* 							});*/
/* 	                	}else{*/
/* 	                		htmlData = data.message;*/
/* 	                	}*/
/* 						$(".postStatus_"+currentGroup).html("<i class='fa fa-info-circle' aria-hidden='true'></i> "+htmlData);*/
/* 					}*/
/* 		        },*/
/* 		        error: function( jqXhr, textStatus, errorThrown ){*/
/* 		        	$('#'+currentGroup).removeClass('postingSuccess');*/
/* 					$('#'+currentGroup).addClass('postingError');*/
/* 					$(".postStatus_"+currentGroup).html("<i class='fa fa-info-circle' aria-hidden='true'></i> "+textStatus+" : "+errorThrown);*/
/* 		        },*/
/* 		        complete: function(){*/
/* 		        	kp_preloader("off");*/
/* 		        }*/
/* 		    });*/
/* 	}*/
/* */
/* 	function post(){*/
/* 		*/
/* 		timeDeff = random(parseInt($("#postForm #defTime").val()),parseInt($("#postForm #defTime").val())+randomInterval);*/
/* 		timeDeff = timeDeff*1000;*/
/* */
/* 		// Clear groups, groupCount vars*/
/* 		groups = [];*/
/* 		countGroup = 0;*/
/* 		*/
/* 		// Get all checked groups*/
/* 		$('.groupName:visible .fbnode:checked').each(function(){*/
/* 			groups.push($(this).val());*/
/* 			countGroup++;*/
/* 		});*/
/* */
/* 		if(countGroup != 0){*/
/* 			alertBox('{{ l('POSTING_WAIT') }}',"info","#postForm .messageBox",true);		*/
/* 			// Set the left time*/
/* 			var duree = random(parseInt($("#postForm #defTime").val()),parseInt($("#postForm #defTime").val())+randomInterval) * (countGroup-1);*/
/* 			TOTALPOSTINGTIME = duree*1000;*/
/* 	*/
/* 			$(".totalPostTime").html("&sim; "+Math.round(((parseInt($("#postForm #defTime").val())+randomInterval)* (countGroup-1))/60).toFixed(2)+" "+'{{ l('MINUTES') }}');	*/
/* 			*/
/* 			startTimer();*/
/* 			send();*/
/* 			$(".postingDetails").show();*/
/* 			postingInterval = setTimeout(posting,timeDeff);*/
/* 			*/
/* 		}else{*/
/* 			alertBox('{{ l('CHOOSE_GROUP_TO_POSTIN') }}',"danger","#postForm .messageBox",true);	*/
/* 		}*/
/* 		*/
/* 	}*/
/* */
/* 	$(document).ready(function() {*/
/* 		*/
/* 		var imageCount = $(".multiImages > .input-group").length;*/
/* */
/* 	    $(".multiImages").on( 'click', '.mediaLibraryImage', function () {*/
/* 	    	$('#mediaLibModalImage').modal('show');*/
/* 		    getMediaLib();*/
/* 		    $("#URLFrom").val("image");*/
/* 		    $("#image_number").val($(this).val());*/
/* 	    });*/
/* */
/* 	    $(".multiImages").on( 'click', '.removeImage', function () {*/
/* 	    	$(this).parent().remove();*/
/* 	    	imageCount--;*/
/* 	    	$(".multiImages input").trigger('propertychange');*/
/* 	    });*/
/* */
/* 	    $(".addNewImageField").click(function(){*/
/* 	    	if(imageCount >= {{max_num_img_post}} ){*/
/* 	    		return false;*/
/* 	    	}*/
/* 	    	var field = "<div class='input-group'>";*/
/* 				field += "<input type='text' name='imageURL' class='form-control' id='imageURL_"+imageCount+"' value='' placeholder='{{ l('Image URL.') }}' />";*/
/* 				field += "<div class='input-group-btn'>";*/
/* 				field += "<button type='button' class='btn btn-default mediaLibraryImage' value='"+imageCount+"'>{{ l('Upload') }}</button>";*/
/* 				field += "</div><i class='fa fa-times removeImage' aria-hidden='true'></i>";*/
/* 				field += "</div>";*/
/* 			$('.multiImages').append(field);*/
/* 			imageCount++;*/
/* 			$(".multiImages input").trigger('propertychange');*/
/* 	    });*/
/* */
/* 		$('#mediaLibraryImageLink').click(function(){*/
/* 			$('#mediaLibModalImage').modal('show');*/
/* 		    getMediaLib();*/
/* 		    $("#URLFrom").val("link");*/
/* 		});*/
/* */
/* 		$('#mediaLibraryVideo').click(function(){*/
/* 			$('#mediaLibModalVideo').modal('show');*/
/* 		    var fv = $('#elfinderVideo').elfinder({*/
/* 		        url : 'upload/upload_video',*/
/* 		        onlyMimes: ['video/mp4','video/x-msvideo','video/mp4','video/mpeg','video/3gpp','video/quicktime','video/ogg','video/webm'],*/
/* 		        docked: false,*/
/* 		        lang: '{{ l("LANG_I18N") }}',*/
/* 		        dialog: { width: 600, modal: true },*/
/* 		        closeOnEditorCallback: true,*/
/* 		        uiOptions: { toolbar : [*/
/*                     // toolbar configuration*/
/*                     ['home', 'up'],*/
/*                     ['mkdir', 'upload'],*/
/*                     ['quicklook'],*/
/*                     ['rm'],*/
/*                     ['duplicate', 'rename'],*/
/*                     ['search'],*/
/*                     ['view']*/
/*                 ]},*/
/* 		        getFileCallback: function(data) {*/
/* 		            $('#video').val(data.url);*/
/* 		            $( "#video" ).trigger('propertychange');*/
/* 		            $('#mediaLibModalVideo').modal('hide');*/
/* 		        }*/
/* 		    }).elfinder('instance');*/
/* 		});*/
/* */
/* 	});*/
/* */
/* 	{# Saving post #}*/
/* 	$("#postForm #savepost").click(function(){*/
/* 		if($.trim($("#postForm #message").val()) == "" && $.trim($("#postForm #link").val()) == "" && $.trim($("#postForm #imageURL_0").val()) == "" && $.trim($("#postForm #video").val()) == ""){*/
/* 			alertBox('{{ l("POST_EMPTY") }}',"danger","#postForm .messageBox",true,true);*/
/* 		}else{*/
/* 			$('#postTitleModal').modal('show');*/
/* 		}*/
/* 	});	*/
/* */
/* 	$("#savePostModal").click(function(){*/
/* 		if($.trim($("#postTitleModal #postTitle").val()) != ""){*/
/* 			savePost();*/
/* 		}else{*/
/* 			alertBox('{{ l('CHOOSE_TITLE_POST') }}',"danger","#postTitleModal .messageBoxModal",true);*/
/* 		}*/
/* 	});*/
/* */
/* 	{# Update post #}*/
/* 	$("#postForm #updatepost").click(function(){*/
/* */
/* 		if($.trim($("#postForm #message").val()) == "" && $.trim($("#postForm #link").val()) == "" && $.trim($("#postForm #imageURL_0").val()) == "" && $.trim($("#postForm #video").val()) == ""){*/
/* 			alertBox('{{ l("POST_EMPTY") }}',"danger","#postForm .messageBox",true,true);*/
/* 		}else{*/
/* 			kp_preloader("on");*/
/* */
/* 			var params = {};*/
/* */
/* 			params['post_id'] = $("#postForm #postId").val();*/
/* 			params['post_type'] = $("#postForm #postType").val();*/
/* */
/* 			params['post_title'] = $("#postTitleModal #postTitle").val();*/
/* 			params['post_type'] = $("#postForm #postType").val();*/
/* 			params['message'] =  $("#postForm #message").val();*/
/* */
/* 			params['fb_preset_id'] =  $("#postForm #fb_preset_id").val();*/
/* */
/* 			params['link'] = $("#postForm #link").val();*/
/* */
/* 			{% for i in 0..max_num_img_post %}*/
/* 			        params["image_{{i}}"] = $("#postForm #imageURL_{{i}}").val();*/
/* 			{% endfor %}*/
/* */
/* 			params['allow_spherical_photo'] = $('#enable360Image', "#postForm").is(":checked") ? 1 : 0;*/
/* */
/* 			params['itemprice'] = $("#postForm #itemprice").val();*/
/* 			params['itemname'] = $("#postForm #itemname").val();*/
/* */
/* 			params['video'] = $("#postForm #video").val();*/
/* 			params['description_video'] = $("#postForm #video-description").val();*/
/* */
/* 			params['{{ config_item('csrf_token_name') }}'] = getCookie('{{ config_item('csrf_cookie_name') }}');*/
/* */
/* 			if($(".linkSubFields").is(':visible')){*/
/* 				params['picture'] = $("#postForm #picture").val();*/
/* 				params['name'] = $("#postForm #name").val();*/
/* 				params['caption'] = $("#postForm #caption").val();*/
/* 				params['description'] = $("#postForm #description").val();*/
/* 			}*/
/* */
/* 			$.ajax({*/
/* 				url: '{{ base_url("posts/update") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: params,*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "success"){*/
/* 						alertBox(data.message,"success",false,true,true);*/
/* 					}else{*/
/* 						if(data.message !== null && typeof data.message === 'object'){*/
/* 		                    htmlData = "<ul>";*/
/* 		                    Object.keys(data.message).forEach(function(key) {*/
/* 		                        htmlData += "<li>" + data.message[key] + "</li>";*/
/* 		                    });*/
/* 		                    htmlData += "</ul>";*/
/* 		                  }else{*/
/* 		                    htmlData = data.message;*/
/* 		                  }*/
/* 		                  alertBox(htmlData,"danger",false,false,true);*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  alertBox("{{ l('Unable to complete your request') }}","danger",false,true,true);*/
/* 				},*/
/* 				complete: function(){*/
/* 					kp_preloader("off");*/
/* 				}*/
/* 			});*/
/* 			*/
/* 		}*/
/* 	});	*/
/* */
/* 	{# ----------------------- Saving schedule ------------------------ #}*/
/* 	$("#postForm #saveScheduledPost").click(function(){*/
/* 		*/
/* 		// Clear groups, groupCount vars*/
/* 		groups = [];*/
/* 		countGroup = 0;*/
/* */
/* 		// Show all records before saving the schedule*/
/* 		$("#groupsDataTable_length select").val(-1).change();*/
/* 		$("#groupsDataTable_filter input").val("").keyup();*/
/* 		*/
/* 		// Get all checked groups*/
/* 		$('.groupName:visible .fbnode:checked').each(function(){*/
/* 			groups.push($(this).val());*/
/* 			countGroup++;*/
/* 		});*/
/* */
/* 		if($("#postForm #postId").val() == ""){*/
/* 			{# save post if not saved #}*/
/* 			savePost(true);*/
/* 		}else if(countGroup == 0){*/
/* 			alertBox("{{ l('CHOOSE_GROUP_TO_POSTIN') }}","danger","#postForm .messageBox",true);	*/
/* 		}else{*/
/* 			saveSchedule();*/
/* 		}*/
/* 	});*/
/* */
/* */
/* 	{# Nodes categories #}*/
/* 	$('.groupsOptions').on('click','#deleteSelectedNodes', function() {*/
/* 		nodes = [];*/
/* 		// Get all checked nodes*/
/* 		$('.groupName:visible .fbnode:checked').each(function(){*/
/* 			nodes.push($(this).val());*/
/* 		});*/
/* */
/* 		$.ajax({*/
/* 			url: '{{ base_url("nodes_categories/remove_nodes") }}',*/
/* 			dataType: 'json',*/
/* 			type: 'post',*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			data: { */
/* 				category_id: $("#nodescategory").val(),*/
/* 				nodes: JSON.stringify(nodes),*/
/* 				{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 			},*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 				if(data.status == "success"){*/
/* 				for (var i = 0; i < nodes.length; i++ ) {*/
/* 					$( "#" + nodes[i] ).css('background','#ffcccc');*/
/* 					$( "#" + nodes[i] ).fadeOut(500, function() { $(this).remove(); });*/
/* 					}*/
/* 				}else{*/
/* 					alertBox(data.message,"danger",true,true);*/
/* 				}*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			  alertBox('{{ l('Unable to complete your request') }}',"danger",true,true);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	var $nodes = [];*/
/* 	$('.groupsOptions').on('click','#addSelectedNodes', function() {*/
/* 		// Get all checked nodes*/
/* 		nodes = [];*/
/* 		$('.groupName:visible .fbnode:checked').each(function(){*/
/* 			nodes.push($(this).val());*/
/* 		});*/
/* 		// Clear message box*/
/* 		$(".addCateMsgBoxModal").html("");*/
/* 		// and finally show the modal*/
/* 		$( '#addToCategoryModal' ).modal({ show: true });*/
/* 		return false;*/
/* 	});*/
/* */
/* 	$('#modalAddCateBtn').click(function() {*/
/* */
/* 		// Clear message box*/
/* 		$(".addCateMsgBoxModal").html("");*/
/* */
/* 		// Choos category */
/* 		if($('#addToCategoryModal .nodescategory').val() == ""){*/
/* 			alertBox('{{ l('Choose a category') }}',"danger",".addCateMsgBoxModal",false);*/
/* 		}else{*/
/* */
/* 			$("#modalAddCateBtn").prop('disabled', true);*/
/* */
/* 			$.ajax({*/
/* 				url: '{{ base_url("nodes_categories/add_nodes") }}',*/
/* 				dataType: 'json',*/
/* 				type: 'post',*/
/* 				contentType: 'application/x-www-form-urlencoded',*/
/* 				data: { */
/* 					category_id: $('#addToCategoryModal .nodescategory').val(),*/
/* 					nodes: JSON.stringify(nodes),*/
/* 					{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 				},*/
/* 				success: function( data, textStatus, jQxhr ){*/
/* 					if(data.status == "success"){*/
/* 						alertBox(data.message,"success",".addCateMsgBoxModal",false);*/
/* 					}else{*/
/* 						if(data.message !== null && typeof data.message === 'object'){*/
/* 		                    htmlData = "<ul>";*/
/* 		                    Object.keys(data.message).forEach(function(key) {*/
/* 		                        htmlData += "<li>" + data.message[key] + "</li>";*/
/* 		                    });*/
/* 		                    htmlData += "</ul>";*/
/* 		                }else{*/
/* 		                    htmlData = data.message;*/
/* 		                }*/
/* 						alertBox(htmlData,"danger",".addCateMsgBoxModal",false);*/
/* 					}*/
/* 				},*/
/* 				error: function( jqXhr, textStatus, errorThrown ){ */
/* 				  console.log(errorThrown);*/
/* 				  $("#modalAddCateBtn").prop('disabled', true);*/
/* 				  alertBox("{{ l('Unable to complete your request') }}","danger",".addCateMsgBoxModal",false);*/
/* 				},*/
/* 				complete: function(){*/
/* 					$("#modalAddCateBtn").prop('disabled', false);*/
/* 				}*/
/* 			});*/
/* */
/* 			$("#modalAddCateBtn").prop('disabled', true);*/
/* 		}*/
/* 	});*/
/* */
/* */
/* 	function startTimer(){*/
/* 		var h = Math.floor(TOTALPOSTINGTIME / 36e5),*/
/* 	     	m = Math.floor((TOTALPOSTINGTIME % 36e5) / 6e4),*/
/* 	     	s = Math.floor((TOTALPOSTINGTIME % 6e4) / 1000);*/
/* 		*/
/* 	    h= (h<10)?"0"+h: h;*/
/* 	    m= (m<10)?"0"+m: m;*/
/* 	    s= (s<10)? "0"+s : s;*/
/* 		*/
/* 	    $(".leftTime").html("&sim; "+h+":"+m+":"+s);*/
/* 	    TOTALPOSTINGTIME = TOTALPOSTINGTIME - 1000;*/
/* 			*/
/* 	   if( h==0 && m==0 && s==0 ){*/
/* 			clearTimeout(leftTime);*/
/* 			$(".leftTime").html("{{ l('Done') }}");*/
/* 			alertBox("{{ l('POSTING_COMPLETED') }}","success","#postForm .messageBox",true);	*/
/* 			$("#postForm #post").prop('disabled', false);*/
/* 		}else{*/
/* 			$("#postForm #post").prop('disabled', true);*/
/* 			leftTime = setTimeout(startTimer,1000);*/
/* 			$("#pauseButton").prop('disabled', false);*/
/* 			$("#pauseButton").removeClass("btnDisabled");*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	var xhrGetSiteDetails = null;*/
/* 	function GetSiteDetails(url,callback){*/
/* 		if(xhrGetSiteDetails!==null) xhrGetSiteDetails.abort();*/
/* 		xhrGetSiteDetails = $.ajax({*/
/* 	        url: "{{ base_url('helpers/get_url_info') }}",*/
/* 	        dataType: "json",*/
/* 	        type: "post",*/
/* 	        data: { */
/* 				url: url,*/
/* 				{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 			},*/
/* 	        success: callback,*/
/* 	        error: function(request, status, error) {}*/
/* 	    });*/
/* 		*/
/* 	}*/
/* */
/* 	{% if app_settings['disable_dt_plugin'] == 1 %}*/
/* 		function NodesFilter() {*/
/* 			var filter = $("#nodesFilterFiled").val().toUpperCase();*/
/* 		 	$("#groupsDataTable tbody tr").each(function(){*/
/* 			 	firstElem = $(this).find(".groupTitle span").text().toUpperCase();*/
/* 			 	secondElem = $(this).find(".nodeType").text().toUpperCase();*/
/* 			 	thirdElem = $(this).find(".privacyAndLikes").text().toUpperCase();*/
/* 				if (firstElem.indexOf(filter) > -1 || secondElem.indexOf(filter) > -1 || thirdElem.indexOf(filter) > -1) {*/
/* 		        	$(this).show();*/
/* 		      	} else {*/
/* 		        	$(this).hide();*/
/* 		      	}*/
/* 			});*/
/* 		}*/
/* 	{% endif %}*/
/* 		*/
/* 	function posting() {*/
/* 		nextGroup++;*/
/* 		timeDeff = random(parseInt($("#postForm #defTime").val()),parseInt($("#postForm #defTime").val())+randomInterval);*/
/* 		timeDeff = timeDeff*1000;*/
/* */
/* 		if (nextGroup < countGroup) {*/
/* 			send();*/
/* 			postingInterval = setTimeout(posting,timeDeff);*/
/* 		}else{*/
/* 			clearTimeout(postingInterval);*/
/* 			// Reinitial all variables */
/* 			TOTALPOSTINGTIME = 0;*/
/* 			groups.length = 0;*/
/* 			leftTime = 0;*/
/* 			countGroup = 0;*/
/* 			nextGroup = 0;*/
/* 			$("#postForm #post").prop('disabled', false);*/
/* 			$(".postingDetails").hide();*/
/* 		}*/
/* 	}*/
/* */
/* 	function random(min,max){*/
/* 		min = parseInt(min);*/
/* 		max = parseInt(max);*/
/* 		return Math.floor(Math.random() * (max - min + 1)) + min;  */
/* 	}*/
/* */
/* 	function postPause(){*/
/* 	  clearTimeout(leftTime);*/
/* 	  clearTimeout(postingInterval);*/
/* 		$("#pauseButton").prop('disabled', true);*/
/* 		$("#resumeButton").prop('disabled', false);*/
/* 		$("#pauseButton").addClass("btnDisabled");*/
/* 		$("#resumeButton").removeClass("btnDisabled");*/
/* 	}*/
/* */
/* 	function postResume(){*/
/* 		clearTimeout(leftTime);*/
/* 	  	clearTimeout(postingInterval);*/
/* 	  	leftTime = setTimeout(startTimer,1000);*/
/* 	 	postingInterval = setTimeout(posting,timeDeff);*/
/* 		*/
/* 		$("#pauseButton").prop('disabled', false);*/
/* 		$("#resumeButton").prop('disabled', true);*/
/* 		$("#pauseButton").removeClass("btnDisabled");*/
/* 		$("#resumeButton").addClass("btnDisabled");*/
/* 	}*/
/* */
/* 	{# Auto save post #}*/
/* 	function savePost(saveScheduleThen){*/
/* 		if($.trim($("#postForm #message").val()) == "" && $.trim($("#postForm #link").val()) == "" && $.trim($("#postForm #imageURL_0").val()) == "" && $.trim($("#postForm #video").val()) == ""){*/
/* 			alertBox('{{ l("POST_EMPTY") }}',"danger","#postForm .messageBox",true,true);*/
/* 			return;*/
/* 		}*/
/* */
/* 		kp_preloader("on","#postTitleModal .modal-body");*/
/* 		$("#savePostModal").prop('disabled', true);*/
/* */
/* 		var params = {};*/
/* */
/* 		params['post_title'] = $("#postTitleModal #postTitle").val();*/
/* 		params['post_type'] = $("#postForm #postType").val();*/
/* 		params['message'] =  $("#postForm #message").val();*/
/* */
/* 		params['fb_preset_id'] =  $("#postForm #fb_preset_id").val();*/
/* */
/* 		params['link'] = $("#postForm #link").val();*/
/* */
/* 		{% for i in 0..max_num_img_post %}*/
/* 		        params["image_{{i}}"] = $("#postForm #imageURL_{{i}}").val();*/
/* 		{% endfor %}*/
/* */
/* 		params['allow_spherical_photo'] = $('#enable360Image', "#postForm").is(":checked") ? 1 : 0;*/
/* */
/* 		params['itemprice'] = $("#postForm #itemprice").val();*/
/* 		params['itemname'] = $("#postForm #itemname").val();*/
/* */
/* 		params['video'] = $("#postForm #video").val();*/
/* 		params['description_video'] = $("#postForm #video-description").val();*/
/* */
/* 		params['{{ config_item('csrf_token_name') }}'] = getCookie('{{ config_item('csrf_cookie_name') }}');*/
/* */
/* 		if($(".linkSubFields").is(':visible')){*/
/* 			params['picture'] = $("#postForm #picture").val();*/
/* 			params['name'] = $("#postForm #name").val();*/
/* 			params['caption'] = $("#postForm #caption").val();*/
/* 			params['description'] = $("#postForm #description").val();*/
/* 		}*/
/* */
/* 		$.ajax({*/
/* 			url: '{{ base_url("posts/add") }}',*/
/* 			dataType: 'json',*/
/* 			type: 'post',*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			data: params,*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 				if(data.status == "success"){*/
/* 					alertBox(data.message,"success","#postTitleModal .messageBoxModal",false,false);*/
/* 					$('#postId').val(data.post_id);*/
/* 					if(saveScheduleThen === true){*/
/* 						saveSchedule();*/
/* 					}*/
/* 				}else{*/
/* 					if(data.message !== null && typeof data.message === 'object'){*/
/* 	                    htmlData = "<ul>";*/
/* 	                    Object.keys(data.message).forEach(function(key) {*/
/* 	                        htmlData += "<li>" + data.message[key] + "</li>";*/
/* 	                    });*/
/* 	                    htmlData += "</ul>";*/
/* 	                  }else{*/
/* 	                    htmlData = data.message;*/
/* 	                  }*/
/* 	                  alertBox(htmlData,"danger","#postTitleModal .messageBoxModal",false,false);*/
/* 				}*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			  alertBox("{{ l('Unable to complete your request') }}","danger","#postTitleModal .messageBoxModal",false,false);*/
/* 			},*/
/* 			complete: function(){*/
/* 				$("#savePostModal").prop('disabled', false);*/
/* 				kp_preloader("off","#postTitleModal .modal-body");*/
/* 			}*/
/* 		});*/
/* 	}*/
/* */
/* 	{# Save schedule #}*/
/* 	function saveSchedule(){*/
/* 		// Clear groups, groupCount vars*/
/* 		groups = [];*/
/* 		countGroup = 0;*/
/* 		*/
/* 		// Get all checked groups*/
/* 		$('.groupName:visible .fbnode:checked').each(function(){*/
/* 			groups.push($(this).val());*/
/* 			countGroup++;*/
/* 		});*/
/* */
/* 		kp_preloader("on","#postForm .preloader");*/
/* */
/* 		var pi = $("#scheduledPostInterval","#postForm").val();*/
/* 		var apf = $("#scheduleResumeAfter","#postForm").val();*/
/* */
/* 		var post_interval = $(".schedulePI input[type='radio']:checked","#postForm").val() == "minute" ? pi : pi*60 ;*/
/* 		var resume_after = $(".autoPause input[type='radio']:checked","#postForm").val() == "minute" ? apf : apf*60 ;*/
/* 		*/
/* 		$("#postForm .messageBox").html("");*/
/* 		*/
/* 		// Disable save schedule post*/
/* 		$("#postForm #saveScheduledPost").prop('disabled', true);*/
/* 			*/
/* 		$.ajax({*/
/* 			url: '{{ base_url("schedules/action/add") }}',*/
/* 			dataType: 'json',*/
/* 			type: 'post',*/
/* 			contentType: 'application/x-www-form-urlencoded',*/
/* 			data: {*/
/* 				run_at: $("#scheduledPostTime","#postForm").val(),*/
/* 				post_interval: post_interval,*/
/* 				nodes: JSON.stringify(groups),*/
/* 				post_id: $("#postForm #postId").val(),*/
/* 				post_app: $("#scheduledPostApp","#postForm").val(),*/
/* 				fb_account: $("#scheduledFbAccount","#postForm").val(),*/
/* 				pause_after: $("#schedulePauseAfter","#postForm").val(),*/
/* 				resume_after: resume_after,*/
/* 				*/
/* 				repeat_every: $("#repeatEvery","#postForm").val(),*/
/*       			end_on: $("#end_on","#postForm").val(),*/
/* */
/* 				{{ config_item('csrf_token_name') }}: getCookie('{{ config_item('csrf_cookie_name') }}') */
/* 			},*/
/* 			success: function( data, textStatus, jQxhr ){*/
/* 				if(data.status == "success"){*/
/* 					alertBox(data.message,"success","#postForm .messageBox",false);*/
/* 				}else{*/
/* 					if(data.message !== null && typeof data.message === 'object'){*/
/* 	                    htmlData = "<ul>";*/
/* 	                    Object.keys(data.message).forEach(function(key) {*/
/* 	                        htmlData += "<li>" + data.message[key] + "</li>";*/
/* 	                    });*/
/* 	                    htmlData += "</ul>";*/
/* 	                }else{*/
/* 	                    htmlData = data.message;*/
/* 	                }*/
/* 	                alertBox(htmlData,"danger","#postForm .messageBox",false);*/
/* 				}*/
/* 			},*/
/* 			error: function( jqXhr, textStatus, errorThrown ){ */
/* 			  console.log(errorThrown);*/
/* 			  alertBox("{{ l('Unable to complete your request') }}","danger","#postForm .messageBox",false);*/
/* 			},*/
/* 			complete: function() {*/
/* 				// Re-enable save schedule post*/
/* 				$("#postForm #saveScheduledPost").prop('disabled', false);*/
/* 				kp_preloader("off","#postForm .preloader");*/
/* 			}*/
/* 		});	*/
/* 	}*/
/* */
/* 	</script>*/
/* {% endblock %}*/
