<?php

/* layouts/head.twig */
class __TwigTemplate_aba9991b4f7dc270922b2123928fbbb3efd6306365ee96ab6e728983ea2bfe36 extends Twig_Template
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
        $__internal_2c9e6bc96c1a55d6d7bd2f2781baf117d2fc827a2302ee3f00e5d6b1fec3505d = $this->env->getExtension("native_profiler");
        $__internal_2c9e6bc96c1a55d6d7bd2f2781baf117d2fc827a2302ee3f00e5d6b1fec3505d->enter($__internal_2c9e6bc96c1a55d6d7bd2f2781baf117d2fc827a2302ee3f00e5d6b1fec3505d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/head.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <title>AdminDesigns - SHARED ON THEMELOCK.COM</title>
    <meta name=\"keywords\" content=\"HTML5 Bootstrap 3 Admin Template UI Theme\" />
    <meta name=\"description\" content=\"AdminDesigns - SHARED ON THEMELOCK.COM\">
    <meta name=\"author\" content=\"AdminDesigns\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Roboto:300,400,500,700\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/skin/default_skin/css/theme.css\">

    <!-- Admin Panels CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/admin-tools/admin-plugins/admin-panels/adminpanels.css\">

    <!-- Admin Forms CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/admin-tools/admin-forms/css/admin-forms.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/skin/default_skin/css/customed.css\">


    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"assets/img/favicon.ico\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

</head>

<body class=\"dashboard-page sb-l-o sb-r-c\">

<!-- Start: Theme Preview Pane -->
<div id=\"skin-toolbox\">
    <div class=\"panel\">
        <div class=\"panel-heading\">
                <span class=\"panel-icon\"><i class=\"fa fa-gear text-primary\"></i>
                </span>
            <span class=\"panel-title\"> Theme Options</span>
        </div>
        <div class=\"panel-body pn\">

            <ul class=\"nav nav-list nav-list-sm pl15 pt10\" role=\"tablist\">
                <li class=\"active\">
                    <a href=\"#toolbox-header\" role=\"tab\" data-toggle=\"tab\">Navbar</a>
                </li>
                <li>
                    <a href=\"#toolbox-sidebar\" role=\"tab\" data-toggle=\"tab\">Sidebar</a>
                </li>
                <li>
                    <a href=\"#toolbox-settings\" role=\"tab\" data-toggle=\"tab\">Misc</a>
                </li>
            </ul>

            <div class=\"tab-content p20 ptn pb15\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"toolbox-header\">
                    <form id=\"toolbox-header-skin\">
                        <h4 class=\"mv20\">Header Skins</h4>

                        <!--                             <div class=\"checkbox-custom checkbox-disabled mb5\">
                                                        <input type=\"checkbox\" name=\"headerTwoTone\" id=\"headerTwoTone\" checked>
                                                        <label for=\"headerTwoTone\">Two Tone Header</label>
                                                    </div>

                                                    <hr class=\"mv10 alt\">
                         -->
                        <div class=\"skin-toolbox-swatches\">
                            <div class=\"checkbox-custom checkbox-disabled fill mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin8\" checked value=\"bg-light\">
                                <label for=\"headerSkin8\">Light</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-primary mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin1\" value=\"bg-primary\">
                                <label for=\"headerSkin1\">Primary</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-info mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin3\" value=\"bg-info\">
                                <label for=\"headerSkin3\">Info</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-warning mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin4\" value=\"bg-warning\">
                                <label for=\"headerSkin4\">Warning</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-danger mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin5\" value=\"bg-danger\">
                                <label for=\"headerSkin5\">Danger</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-alert mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin6\" value=\"bg-alert\">
                                <label for=\"headerSkin6\">Alert</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-system mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin7\" value=\"bg-system\">
                                <label for=\"headerSkin7\">System</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-success mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin2\" value=\"bg-success\">
                                <label for=\"headerSkin2\">Success</label>
                            </div>
                            <div class=\"checkbox-custom fill mb5\">
                                <input type=\"radio\" name=\"headerSkin\" id=\"headerSkin9\" value=\"bg-dark\">
                                <label for=\"headerSkin9\">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"toolbox-sidebar\">
                    <form id=\"toolbox-sidebar-skin\">

                        <h4 class=\"mv20\">Sidebar Skins</h4>
                        <div class=\"skin-toolbox-swatches\">
                            <div class=\"checkbox-custom fill mb5\">
                                <input type=\"radio\" name=\"sidebarSkin\" checked id=\"sidebarSkin3\" value=\"\">
                                <label for=\"sidebarSkin3\">Dark</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-disabled mb5\">
                                <input type=\"radio\" name=\"sidebarSkin\" id=\"sidebarSkin1\" value=\"sidebar-light\">
                                <label for=\"sidebarSkin1\">Light</label>
                            </div>
                            <div class=\"checkbox-custom fill checkbox-light mb5\">
                                <input type=\"radio\" name=\"sidebarSkin\" id=\"sidebarSkin2\" value=\"sidebar-light light\">
                                <label for=\"sidebarSkin2\">Lighter</label>
                            </div>

                        </div>

                    </form>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"toolbox-settings\">
                    <form id=\"toolbox-settings-misc\">
                        <h4 class=\"mv20 mtn\">Layout Options</h4>
                        <div class=\"form-group\">
                            <div class=\"checkbox-custom fill mb5\">
                                <input type=\"checkbox\" checked=\"\" id=\"header-option\">
                                <label for=\"header-option\">Fixed Header</label>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"checkbox-custom fill mb5\">
                                <input type=\"checkbox\" id=\"sidebar-option\">
                                <label for=\"sidebar-option\">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"checkbox-custom fill mb5\">
                                <input type=\"checkbox\" id=\"breadcrumb-option\">
                                <label for=\"breadcrumb-option\">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"checkbox-custom fill mb5\">
                                <input type=\"checkbox\" id=\"breadcrumb-hidden\">
                                <label for=\"breadcrumb-hidden\">Hide Breadcrumbs</label>
                            </div>
                        </div>
                        <h4 class=\"mv20\">Layout Options</h4>
                        <div class=\"form-group\">
                            <div class=\"radio-custom mb5\">
                                <input type=\"radio\" id=\"fullwidth-option\" checked name=\"layout-option\">
                                <label for=\"fullwidth-option\">Fullwidth Layout</label>
                            </div>
                        </div>
                        <div class=\"form-group mb20\">
                            <div class=\"radio-custom radio-disabled mb5\">
                                <input type=\"radio\" id=\"boxed-option\" name=\"layout-option\" disabled>
                                <label for=\"boxed-option\">Boxed Layout <b class=\"text-muted\">(Coming Soon)</b></label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class=\"form-group mn br-t p15\">
                <a href=\"#\" id=\"clearLocalStorage\" class=\"btn btn-primary btn-block pb10 pt10\">Clear LocalStorage</a>
            </div>

        </div>
    </div>
</div>
<!-- End: Theme Preview Pane -->

<!-- Start: Main -->
<div id=\"main\">

    <!-- Start: Header -->
    <header class=\"navbar navbar-fixed-top bg-light\">
        <div class=\"navbar-branding\">
            <a class=\"navbar-brand\" href=\"dashboard.html\"> <b style=\"font-size:2em\">ADMIN</b><small> PAGE</small>
            </a>
            <span id=\"toggle_sidemenu_l\" class=\"glyphicons glyphicons-show_lines\"></span>
            <ul class=\"nav navbar-nav pull-right hidden\">
                <li>
                    <a href=\"#\" class=\"sidebar-menu-toggle\">
                        <span class=\"octicon octicon-ruby fs20 mr10 pull-right \"></span>
                    </a>
                </li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav navbar-left\">
            <li>
                <a class=\"sidebar-menu-toggle\" href=\"#\">
                    <span class=\"octicon octicon-ruby fs18\"></span>
                </a>
            </li>
            <li>
                <span id=\"toggle_sidemenu_l2\" class=\"glyphicon glyphicon-log-in fa-flip-horizontal hidden\"></span>
            </li>
            <li class=\"dropdown hidden\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <span class=\"glyphicons glyphicons-settings fs14\"></span>
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li>
                        <a href=\"javascript:void(0);\">
                            <span class=\"fa fa-times-circle-o pr5 text-primary\"></span> Reset LocalStorage </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\">
                            <span class=\"fa fa-slideshare pr5 text-info\"></span> Force Global Logout </a>
                    </li>
                    <li class=\"divider mv5\"></li>
                    <li>
                        <a href=\"javascript:void(0);\">
                            <span class=\"fa fa-tasks pr5 text-danger\"></span> Run Cron Job </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\">
                            <span class=\"fa fa-wrench pr5 text-warning\"></span> Maintenance Mode </a>
                    </li>
                </ul>
            </li>
            <li class=\"hidden-xs\">
                <a class=\"request-fullscreen toggle-active\" href=\"#\">
                    <span class=\"octicon octicon-screen-full fs18\"></span>
                </a>
            </li>
        </ul>
        <form class=\"navbar-form navbar-left navbar-search ml5\" role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
            </div>
        </form>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown dropdown-item-slide\">
                <a class=\"dropdown-toggle pl10 pr10\" data-toggle=\"dropdown\" href=\"#\">
                    <span class=\"octicon octicon-radio-tower fs18\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn\" role=\"menu\">
                    <li class=\"bg-light p8\">
                        <span class=\"fw600 pl5 lh30\"> Notifications</span>
                        <span class=\"label label-warning label-sm pull-right lh20 h-20 mt5 mr5\">12</span>
                    </li>
                    <li class=\"p10 br-t item-1\">
                        <div class=\"media\">
                            <a class=\"media-left\" href=\"#\"> <img src=\"assets/img/avatars/2.jpg\" class=\"mw40\" alt=\"holder-img\"> </a>
                            <div class=\"media-body va-m\">
                                <h5 class=\"media-heading mv5\">Article <small class=\"text-muted\">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                <a class=\"text-system\" href=\"#\"> Max </a>
                            </div>
                        </div>
                    </li>
                    <li class=\"p10 br-t item-2\">
                        <div class=\"media\">
                            <a class=\"media-left\" href=\"#\"> <img src=\"assets/img/avatars/3.jpg\" class=\"mw40\" alt=\"holder-img\"> </a>
                            <div class=\"media-body va-m\">
                                <h5 class=\"media-heading mv5\">Article <small class=\"text-muted\">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                <a class=\"text-system\" href=\"#\"> Max </a>
                            </div>
                        </div>
                    </li>
                    <li class=\"p10 br-t item-3\">
                        <div class=\"media\">
                            <a class=\"media-left\" href=\"#\"> <img src=\"assets/img/avatars/4.jpg\" class=\"mw40\" alt=\"holder-img\"> </a>
                            <div class=\"media-body va-m\">
                                <h5 class=\"media-heading mv5\">Article <small class=\"text-muted\">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                <a class=\"text-system\" href=\"#\"> Max </a>
                            </div>
                        </div>
                    </li>
                    <li class=\"p10 br-t item-4\">
                        <div class=\"media\">
                            <a class=\"media-left\" href=\"#\"> <img src=\"assets/img/avatars/5.jpg\" class=\"mw40\" alt=\"holder-img\"> </a>
                            <div class=\"media-body va-m\">
                                <h5 class=\"media-heading mv5\">Article <small class=\"text-muted\">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                <a class=\"text-system\" href=\"#\"> Max </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class=\"ph10 pv20 hidden-xs\"> <i class=\"fa fa-circle text-tp fs8\"></i>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle fw600 p15\" data-toggle=\"dropdown\"> <img src=\"assets/img/avatars/1.jpg\" alt=\"avatar\" class=\"mw30 br64 mr15\">
                    <span>John.Smith</span>
                    <span class=\"caret caret-tp hidden-xs\"></span>
                </a>
                <ul class=\"dropdown-menu dropdown-persist pn w250 bg-white\" role=\"menu\">
                    <li class=\"br-t of-h\">
                        <a href=\"#\" class=\"fw600 p12 animated animated-short fadeInDown\">
                            <span class=\"fa fa-gear pr5\"></span> Account Settings </a>
                    </li>
                    <li class=\"br-t of-h\">
                        <a href=\"#\" class=\"fw600 p12 animated animated-short fadeInDown\">
                            <span class=\"fa fa-power-off pr5\"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>

    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id=\"sidebar_left\" class=\"nano nano-primary\">
        <div class=\"nano-content\">

            <!-- Start: Sidebar Header -->
            <header class=\"sidebar-header\">
                <div class=\"user-menu\">
                    <div class=\"row text-center mbn\">
                        <div class=\"col-xs-4\">
                            <a href=\"dashboard.html\" class=\"text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dashboard\">
                                <span class=\"glyphicons glyphicons-home\"></span>
                            </a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"pages_messages.html\" class=\"text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Messages\">
                                <span class=\"glyphicons glyphicons-inbox\"></span>
                            </a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"pages_profile.html\" class=\"text-alert\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tasks\">
                                <span class=\"glyphicons glyphicons-bell\"></span>
                            </a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"pages_timeline.html\" class=\"text-system\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Activity\">
                                <span class=\"glyphicons glyphicons-imac\"></span>
                            </a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"pages_profile.html\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                                <span class=\"glyphicons glyphicons-settings\"></span>
                            </a>
                        </div>
                        <div class=\"col-xs-4\">
                            <a href=\"pages_gallery.html\" class=\"text-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cron Jobs\">
                                <span class=\"glyphicons glyphicons-restart\"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End: Sidebar Header -->

            <!-- sidebar menu -->
            <ul class=\"nav sidebar-menu\">
                <li class=\"sidebar-label pt20\">Menu</li>
                <li class=\"active\">
                    <a href=\"dashboard.html\">
                        <span class=\"glyphicons glyphicons-home\"></span>
                        <span class=\"sidebar-title\">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class=\"accordion-toggle\" href=\"#\">
                        <span class=\"fa fa-book\"></span>
                        <span class=\"sidebar-title\">Olah Paket</span>
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"nav sub-nav\">
                        <li>
                            <a href=\"admin_plugins-panels.html\">
                                <span class=\"glyphicons glyphicons-book\"></span> List Paket </a>
                        </li>
                        <li>
                            <a href=\"admin_plugins-modals.html\">
                                <span class=\"fa fa-asterisk\"></span> Paket Baru </a>
                        </li>
                        <li>
                            <a href=\"admin_plugins-dock.html\">
                                <span class=\"fa fa-check\"></span> Validasi Paket </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class=\"sidebar-toggle-mini\">
                <a href=\"#\">
                    <span class=\"fa fa-chevron-right\"></span>
                </a>
            </div>
        </div>
    </aside>";
        
        $__internal_2c9e6bc96c1a55d6d7bd2f2781baf117d2fc827a2302ee3f00e5d6b1fec3505d->leave($__internal_2c9e6bc96c1a55d6d7bd2f2781baf117d2fc827a2302ee3f00e5d6b1fec3505d_prof);

    }

    public function getTemplateName()
    {
        return "layouts/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <title>AdminDesigns - SHARED ON THEMELOCK.COM</title>*/
/*     <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />*/
/*     <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">*/
/*     <meta name="author" content="AdminDesigns">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>*/
/*     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">*/
/* */
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">*/
/* */
/*     <!-- Admin Panels CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">*/
/* */
/*     <!-- Admin Forms CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">*/
/*     <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/customed.css">*/
/* */
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="assets/img/favicon.ico">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body class="dashboard-page sb-l-o sb-r-c">*/
/* */
/* <!-- Start: Theme Preview Pane -->*/
/* <div id="skin-toolbox">*/
/*     <div class="panel">*/
/*         <div class="panel-heading">*/
/*                 <span class="panel-icon"><i class="fa fa-gear text-primary"></i>*/
/*                 </span>*/
/*             <span class="panel-title"> Theme Options</span>*/
/*         </div>*/
/*         <div class="panel-body pn">*/
/* */
/*             <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">*/
/*                 <li class="active">*/
/*                     <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*             <div class="tab-content p20 ptn pb15">*/
/*                 <div role="tabpanel" class="tab-pane active" id="toolbox-header">*/
/*                     <form id="toolbox-header-skin">*/
/*                         <h4 class="mv20">Header Skins</h4>*/
/* */
/*                         <!--                             <div class="checkbox-custom checkbox-disabled mb5">*/
/*                                                         <input type="checkbox" name="headerTwoTone" id="headerTwoTone" checked>*/
/*                                                         <label for="headerTwoTone">Two Tone Header</label>*/
/*                                                     </div>*/
/* */
/*                                                     <hr class="mv10 alt">*/
/*                          -->*/
/*                         <div class="skin-toolbox-swatches">*/
/*                             <div class="checkbox-custom checkbox-disabled fill mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">*/
/*                                 <label for="headerSkin8">Light</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-primary mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">*/
/*                                 <label for="headerSkin1">Primary</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-info mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">*/
/*                                 <label for="headerSkin3">Info</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-warning mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">*/
/*                                 <label for="headerSkin4">Warning</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-danger mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">*/
/*                                 <label for="headerSkin5">Danger</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-alert mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">*/
/*                                 <label for="headerSkin6">Alert</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-system mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">*/
/*                                 <label for="headerSkin7">System</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-success mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">*/
/*                                 <label for="headerSkin2">Success</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill mb5">*/
/*                                 <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">*/
/*                                 <label for="headerSkin9">Dark</label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">*/
/*                     <form id="toolbox-sidebar-skin">*/
/* */
/*                         <h4 class="mv20">Sidebar Skins</h4>*/
/*                         <div class="skin-toolbox-swatches">*/
/*                             <div class="checkbox-custom fill mb5">*/
/*                                 <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">*/
/*                                 <label for="sidebarSkin3">Dark</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-disabled mb5">*/
/*                                 <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">*/
/*                                 <label for="sidebarSkin1">Light</label>*/
/*                             </div>*/
/*                             <div class="checkbox-custom fill checkbox-light mb5">*/
/*                                 <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">*/
/*                                 <label for="sidebarSkin2">Lighter</label>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </form>*/
/*                 </div>*/
/*                 <div role="tabpanel" class="tab-pane" id="toolbox-settings">*/
/*                     <form id="toolbox-settings-misc">*/
/*                         <h4 class="mv20 mtn">Layout Options</h4>*/
/*                         <div class="form-group">*/
/*                             <div class="checkbox-custom fill mb5">*/
/*                                 <input type="checkbox" checked="" id="header-option">*/
/*                                 <label for="header-option">Fixed Header</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="checkbox-custom fill mb5">*/
/*                                 <input type="checkbox" id="sidebar-option">*/
/*                                 <label for="sidebar-option">Fixed Sidebar</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="checkbox-custom fill mb5">*/
/*                                 <input type="checkbox" id="breadcrumb-option">*/
/*                                 <label for="breadcrumb-option">Fixed Breadcrumbs</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="checkbox-custom fill mb5">*/
/*                                 <input type="checkbox" id="breadcrumb-hidden">*/
/*                                 <label for="breadcrumb-hidden">Hide Breadcrumbs</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <h4 class="mv20">Layout Options</h4>*/
/*                         <div class="form-group">*/
/*                             <div class="radio-custom mb5">*/
/*                                 <input type="radio" id="fullwidth-option" checked name="layout-option">*/
/*                                 <label for="fullwidth-option">Fullwidth Layout</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group mb20">*/
/*                             <div class="radio-custom radio-disabled mb5">*/
/*                                 <input type="radio" id="boxed-option" name="layout-option" disabled>*/
/*                                 <label for="boxed-option">Boxed Layout <b class="text-muted">(Coming Soon)</b></label>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group mn br-t p15">*/
/*                 <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- End: Theme Preview Pane -->*/
/* */
/* <!-- Start: Main -->*/
/* <div id="main">*/
/* */
/*     <!-- Start: Header -->*/
/*     <header class="navbar navbar-fixed-top bg-light">*/
/*         <div class="navbar-branding">*/
/*             <a class="navbar-brand" href="dashboard.html"> <b style="font-size:2em">ADMIN</b><small> PAGE</small>*/
/*             </a>*/
/*             <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>*/
/*             <ul class="nav navbar-nav pull-right hidden">*/
/*                 <li>*/
/*                     <a href="#" class="sidebar-menu-toggle">*/
/*                         <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <ul class="nav navbar-nav navbar-left">*/
/*             <li>*/
/*                 <a class="sidebar-menu-toggle" href="#">*/
/*                     <span class="octicon octicon-ruby fs18"></span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>*/
/*             </li>*/
/*             <li class="dropdown hidden">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                     <span class="glyphicons glyphicons-settings fs14"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu" role="menu">*/
/*                     <li>*/
/*                         <a href="javascript:void(0);">*/
/*                             <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0);">*/
/*                             <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>*/
/*                     </li>*/
/*                     <li class="divider mv5"></li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0);">*/
/*                             <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:void(0);">*/
/*                             <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="hidden-xs">*/
/*                 <a class="request-fullscreen toggle-active" href="#">*/
/*                     <span class="octicon octicon-screen-full fs18"></span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         <form class="navbar-form navbar-left navbar-search ml5" role="search">*/
/*             <div class="form-group">*/
/*                 <input type="text" class="form-control" placeholder="Search...">*/
/*             </div>*/
/*         </form>*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*             <li class="dropdown dropdown-item-slide">*/
/*                 <a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">*/
/*                     <span class="octicon octicon-radio-tower fs18"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">*/
/*                     <li class="bg-light p8">*/
/*                         <span class="fw600 pl5 lh30"> Notifications</span>*/
/*                         <span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5">12</span>*/
/*                     </li>*/
/*                     <li class="p10 br-t item-1">*/
/*                         <div class="media">*/
/*                             <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="holder-img"> </a>*/
/*                             <div class="media-body va-m">*/
/*                                 <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="p10 br-t item-2">*/
/*                         <div class="media">*/
/*                             <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="holder-img"> </a>*/
/*                             <div class="media-body va-m">*/
/*                                 <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="p10 br-t item-3">*/
/*                         <div class="media">*/
/*                             <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="holder-img"> </a>*/
/*                             <div class="media-body va-m">*/
/*                                 <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="p10 br-t item-4">*/
/*                         <div class="media">*/
/*                             <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="holder-img"> </a>*/
/*                             <div class="media-body va-m">*/
/*                                 <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by*/
/*                                 <a class="text-system" href="#"> Max </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i>*/
/*             </li>*/
/*             <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">*/
/*                     <span>John.Smith</span>*/
/*                     <span class="caret caret-tp hidden-xs"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">*/
/*                     <li class="br-t of-h">*/
/*                         <a href="#" class="fw600 p12 animated animated-short fadeInDown">*/
/*                             <span class="fa fa-gear pr5"></span> Account Settings </a>*/
/*                     </li>*/
/*                     <li class="br-t of-h">*/
/*                         <a href="#" class="fw600 p12 animated animated-short fadeInDown">*/
/*                             <span class="fa fa-power-off pr5"></span> Logout </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/* */
/*     </header>*/
/*     <!-- End: Header -->*/
/* */
/*     <!-- Start: Sidebar -->*/
/*     <aside id="sidebar_left" class="nano nano-primary">*/
/*         <div class="nano-content">*/
/* */
/*             <!-- Start: Sidebar Header -->*/
/*             <header class="sidebar-header">*/
/*                 <div class="user-menu">*/
/*                     <div class="row text-center mbn">*/
/*                         <div class="col-xs-4">*/
/*                             <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">*/
/*                                 <span class="glyphicons glyphicons-home"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">*/
/*                                 <span class="glyphicons glyphicons-inbox"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">*/
/*                                 <span class="glyphicons glyphicons-bell"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">*/
/*                                 <span class="glyphicons glyphicons-imac"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">*/
/*                                 <span class="glyphicons glyphicons-settings"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">*/
/*                                 <span class="glyphicons glyphicons-restart"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             <!-- End: Sidebar Header -->*/
/* */
/*             <!-- sidebar menu -->*/
/*             <ul class="nav sidebar-menu">*/
/*                 <li class="sidebar-label pt20">Menu</li>*/
/*                 <li class="active">*/
/*                     <a href="dashboard.html">*/
/*                         <span class="glyphicons glyphicons-home"></span>*/
/*                         <span class="sidebar-title">Dashboard</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="accordion-toggle" href="#">*/
/*                         <span class="fa fa-book"></span>*/
/*                         <span class="sidebar-title">Olah Paket</span>*/
/*                         <span class="caret"></span>*/
/*                     </a>*/
/*                     <ul class="nav sub-nav">*/
/*                         <li>*/
/*                             <a href="admin_plugins-panels.html">*/
/*                                 <span class="glyphicons glyphicons-book"></span> List Paket </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="admin_plugins-modals.html">*/
/*                                 <span class="fa fa-asterisk"></span> Paket Baru </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="admin_plugins-dock.html">*/
/*                                 <span class="fa fa-check"></span> Validasi Paket </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*             <div class="sidebar-toggle-mini">*/
/*                 <a href="#">*/
/*                     <span class="fa fa-chevron-right"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </aside>*/
