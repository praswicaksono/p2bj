<?php

/* layouts/foot.twig */
class __TwigTemplate_1e11139630c55c2696de16ce7924f3d2cec266f0c9c3924486c6a3115f1a2325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_234947d1f0c1070371dc99a007963e422aa3e4341b36ff0f75dc141c62dc7526 = $this->env->getExtension("native_profiler");
        $__internal_234947d1f0c1070371dc99a007963e422aa3e4341b36ff0f75dc141c62dc7526->enter($__internal_234947d1f0c1070371dc99a007963e422aa3e4341b36ff0f75dc141c62dc7526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/foot.twig"));

        // line 1
        echo "</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
";
        // line 7
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core
        Core.init({
            sbm: \"sb-l-c\",
        });

        // Init Demo JS
        Demo.init();

        // Init Widget Demo JS
        // demoHighCharts.init();

        // Because we are using Admin Panels we use the OnFinish
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the \".admin-panels\" container
        \$('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            mobile: false,
            callback: function() {
                bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
            },
            onFinish: function() {
                \$('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps();

                // We also refresh any \"in-view\" waypoints to ensure
                // the correct position is being calculated after the
                // Admin Panels plugin moved everything
                Waypoint.refreshAll();

            },
            onSave: function() {
                \$(window).trigger('resize');
            }
        });

        // Widget VectorMap
        function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function() {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                \$('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    //regionsSelectable: true,
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [3, 7],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#E5E5E5'
                        },
                        hover: {
                            \"fill-opacity\": 0.3
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            \"fill-opacity\": 1,
                            \"stroke-width\": 10,
                            \"stroke-opacity\": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            \"stroke-width\": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                // Manual code to alter the Vector map plugin to
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                \$.each(states, function(i, e) {
                    \$(\"#WidgetMap path[data-code=\" + e + \"]\").css({
                        fill: colors[i]
                    });
                });
                \$('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            \$(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
            }

            if (\$('#WidgetMap').length) {
                runJvectorMap();
            }
        }

    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>
";
        
        $__internal_234947d1f0c1070371dc99a007963e422aa3e4341b36ff0f75dc141c62dc7526->leave($__internal_234947d1f0c1070371dc99a007963e422aa3e4341b36ff0f75dc141c62dc7526_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb7060f9857e55c05724ad4d9592f92b1a9098e7fc47401fdd7bc5356efb97ce = $this->env->getExtension("native_profiler");
        $__internal_cb7060f9857e55c05724ad4d9592f92b1a9098e7fc47401fdd7bc5356efb97ce->enter($__internal_cb7060f9857e55c05724ad4d9592f92b1a9098e7fc47401fdd7bc5356efb97ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "<script type=\"text/javascript\" src=\"assets/vendor/jquery/jquery-1.11.1.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/vendor/jquery/jquery_ui/jquery-ui.min.js\"></script>

<!-- Bootstrap -->
<script type=\"text/javascript\" src=\"assets/js/bootstrap/bootstrap.min.js\"></script>

<!-- Sparklines CDN -->
<script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js\"></script>

<!-- Chart Plugins -->
<script type=\"text/javascript\" src=\"assets/vendor/plugins/highcharts/highcharts.js\"></script>
<script type=\"text/javascript\" src=\"assets/vendor/plugins/circles/circles.js\"></script>
<script type=\"text/javascript\" src=\"assets/vendor/plugins/raphael/raphael.js\"></script>

<!-- Holder js  -->
<script type=\"text/javascript\" src=\"assets/js/bootstrap/holder.min.js\"></script>

<!-- Theme Javascript -->
<script type=\"text/javascript\" src=\"assets/js/utility/utility.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/main.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/demo.js\"></script>

<!-- Admin Panels  -->
<script type=\"text/javascript\" src=\"assets/admin-tools/admin-plugins/admin-panels/json2.js\"></script>
<script type=\"text/javascript\" src=\"assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/admin-tools/admin-plugins/admin-panels/adminpanels.js\"></script>

<!-- Page Javascript -->
<script type=\"text/javascript\" src=\"assets/js/pages/widgets.js\"></script>
<script type=\"text/javascript\">

    ";
        
        $__internal_cb7060f9857e55c05724ad4d9592f92b1a9098e7fc47401fdd7bc5356efb97ce->leave($__internal_cb7060f9857e55c05724ad4d9592f92b1a9098e7fc47401fdd7bc5356efb97ce_prof);

    }

    public function getTemplateName()
    {
        return "layouts/foot.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 8,  185 => 7,  33 => 40,  31 => 7,  23 => 1,);
    }
}
/* </div>*/
/* <!-- End: Main -->*/
/* */
/* <!-- BEGIN: PAGE SCRIPTS -->*/
/* */
/* <!-- jQuery -->*/
/* {% block javascripts %}*/
/* <script type="text/javascript" src="assets/vendor/jquery/jquery-1.11.1.min.js"></script>*/
/* <script type="text/javascript" src="assets/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>*/
/* */
/* <!-- Bootstrap -->*/
/* <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>*/
/* */
/* <!-- Sparklines CDN -->*/
/* <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>*/
/* */
/* <!-- Chart Plugins -->*/
/* <script type="text/javascript" src="assets/vendor/plugins/highcharts/highcharts.js"></script>*/
/* <script type="text/javascript" src="assets/vendor/plugins/circles/circles.js"></script>*/
/* <script type="text/javascript" src="assets/vendor/plugins/raphael/raphael.js"></script>*/
/* */
/* <!-- Holder js  -->*/
/* <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>*/
/* */
/* <!-- Theme Javascript -->*/
/* <script type="text/javascript" src="assets/js/utility/utility.js"></script>*/
/* <script type="text/javascript" src="assets/js/main.js"></script>*/
/* <script type="text/javascript" src="assets/js/demo.js"></script>*/
/* */
/* <!-- Admin Panels  -->*/
/* <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>*/
/* <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>*/
/* <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>*/
/* */
/* <!-- Page Javascript -->*/
/* <script type="text/javascript" src="assets/js/pages/widgets.js"></script>*/
/* <script type="text/javascript">*/
/* */
/*     {% endblock %}*/
/*     jQuery(document).ready(function() {*/
/* */
/*         "use strict";*/
/* */
/*         // Init Theme Core*/
/*         Core.init({*/
/*             sbm: "sb-l-c",*/
/*         });*/
/* */
/*         // Init Demo JS*/
/*         Demo.init();*/
/* */
/*         // Init Widget Demo JS*/
/*         // demoHighCharts.init();*/
/* */
/*         // Because we are using Admin Panels we use the OnFinish*/
/*         // callback to activate the demoWidgets. It's smoother if*/
/*         // we let the panels be moved and organized before*/
/*         // filling them with content from various plugins*/
/* */
/*         // Init plugins used on this page*/
/*         // HighCharts, JvectorMap, Admin Panels*/
/* */
/*         // Init Admin Panels on widgets inside the ".admin-panels" container*/
/*         $('.admin-panels').adminpanel({*/
/*             grid: '.admin-grid',*/
/*             draggable: true,*/
/*             preserveGrid: true,*/
/*             mobile: false,*/
/*             callback: function() {*/
/*                 bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});*/
/*             },*/
/*             onFinish: function() {*/
/*                 $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');*/
/* */
/*                 // Init the rest of the plugins now that the panels*/
/*                 // have had a chance to be moved and organized.*/
/*                 // It's less taxing to organize empty panels*/
/*                 demoHighCharts.init();*/
/*                 runVectorMaps();*/
/* */
/*                 // We also refresh any "in-view" waypoints to ensure*/
/*                 // the correct position is being calculated after the*/
/*                 // Admin Panels plugin moved everything*/
/*                 Waypoint.refreshAll();*/
/* */
/*             },*/
/*             onSave: function() {*/
/*                 $(window).trigger('resize');*/
/*             }*/
/*         });*/
/* */
/*         // Widget VectorMap*/
/*         function runVectorMaps() {*/
/* */
/*             // Jvector Map Plugin*/
/*             var runJvectorMap = function() {*/
/*                 // Data set*/
/*                 var mapData = [900, 700, 350, 500];*/
/*                 // Init Jvector Map*/
/*                 $('#WidgetMap').vectorMap({*/
/*                     map: 'us_lcc_en',*/
/*                     //regionsSelectable: true,*/
/*                     backgroundColor: 'transparent',*/
/*                     series: {*/
/*                         markers: [{*/
/*                             attribute: 'r',*/
/*                             scale: [3, 7],*/
/*                             values: mapData*/
/*                         }]*/
/*                     },*/
/*                     regionStyle: {*/
/*                         initial: {*/
/*                             fill: '#E5E5E5'*/
/*                         },*/
/*                         hover: {*/
/*                             "fill-opacity": 0.3*/
/*                         }*/
/*                     },*/
/*                     markers: [{*/
/*                         latLng: [37.78, -122.41],*/
/*                         name: 'San Francisco,CA'*/
/*                     }, {*/
/*                         latLng: [36.73, -103.98],*/
/*                         name: 'Texas,TX'*/
/*                     }, {*/
/*                         latLng: [38.62, -90.19],*/
/*                         name: 'St. Louis,MO'*/
/*                     }, {*/
/*                         latLng: [40.67, -73.94],*/
/*                         name: 'New York City,NY'*/
/*                     }],*/
/*                     markerStyle: {*/
/*                         initial: {*/
/*                             fill: '#a288d5',*/
/*                             stroke: '#b49ae0',*/
/*                             "fill-opacity": 1,*/
/*                             "stroke-width": 10,*/
/*                             "stroke-opacity": 0.3,*/
/*                             r: 3*/
/*                         },*/
/*                         hover: {*/
/*                             stroke: 'black',*/
/*                             "stroke-width": 2*/
/*                         },*/
/*                         selected: {*/
/*                             fill: 'blue'*/
/*                         },*/
/*                         selectedHover: {}*/
/*                     },*/
/*                 });*/
/*                 // Manual code to alter the Vector map plugin to*/
/*                 // allow for individual coloring of countries*/
/*                 var states = ['US-CA', 'US-TX', 'US-MO',*/
/*                     'US-NY'*/
/*                 ];*/
/*                 var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];*/
/*                 var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];*/
/*                 $.each(states, function(i, e) {*/
/*                     $("#WidgetMap path[data-code=" + e + "]").css({*/
/*                         fill: colors[i]*/
/*                     });*/
/*                 });*/
/*                 $('#WidgetMap').find('.jvectormap-marker')*/
/*                         .each(function(i, e) {*/
/*                             $(e).css({*/
/*                                 fill: colors2[i],*/
/*                                 stroke: colors2[i]*/
/*                             });*/
/*                         });*/
/*             }*/
/* */
/*             if ($('#WidgetMap').length) {*/
/*                 runJvectorMap();*/
/*             }*/
/*         }*/
/* */
/*     });*/
/* </script>*/
/* */
/* <!-- END: PAGE SCRIPTS -->*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
