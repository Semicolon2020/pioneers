<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Transport/front/Bus/index.html.twig */
class __TwigTemplate_2aef835c835fa14436fbb40c873b2c9ed6382a42724db016ea3d6a6f6926d3b9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'Javascript' => [$this, 'block_Javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/front/Bus/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/front/Bus/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Transport/front/Bus/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- bradcam_area_start -->
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3>Transport</h3>
    </div>

    <!-- popular_courses_start -->
    <div class=\"popular_courses plus_padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"section_title text-center mb-100\">

                        <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("busf");
        echo "\" method=\"get\" >
                            <center> <select name=\"id\" id=\"id\" class=\"form-control-lg form-control\">
                                    <option>Please select</option>
                                    ";
        // line 22
        if ((twig_length_filter($this->env, ($context["tab"] ?? $this->getContext($context, "tab"))) == 0)) {
            // line 23
            echo "                                        Pas de Trajet Disponible !!!
                                    ";
        } else {
            // line 25
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tab"] ?? $this->getContext($context, "tab")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 26
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", []), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        echo "                                </select></center>&nbsp;
                            <button type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                <span id=\"payment-button-amount\">Afficher le Trajet</span>
                            </button></form>
                    </div>
                    <div class=\"button-group-area mt-40\">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_homepage");
        echo "\" class=\"genric-btn default circle arrow\"><h2>Retour</h2><span class=\"lnr lnr-arrow-right\"></span></a></div>
                </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-12\">

                </div>
            </div>

        </div>

    </div>

    <!-- popular_courses_end-->




    <div id=\"map_wrapper\">
        <div id=\"map_canvas\" class=\"mapping\">

    </div>



    <!-- End Button -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_Javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        // line 65
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/ajax-form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/scrollIt.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
    <!--contact js-->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = \"https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize\";
            document.body.appendChild(script);
        });

        function initialize() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                // mapTypeId: 'hybrid'
                // mapTypeId: 'satellite'
                // mapTypeId: 'roadmap'
                mapTypeId: 'terrain'
            };




            // Display a map on the page
            map = new google.maps.Map(document.getElementById(\"map_canvas\"), mapOptions);
            map.setTilt(45);

            var markers=[] ;
            for(var f=0; f<0; f++){
                markers[f] = new Array(3);
            }

            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabb"] ?? $this->getContext($context, "tabb")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 121
            echo "            var t=\"\";
            var x=0;
            var c=5;
            t=";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "altitude", []), "html", null, true);
            echo ";
            x=";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "longtitude", []), "html", null, true);
            echo ";
            c=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", []), "html", null, true);
            echo "\";
            console.log(t);
            var item= [c, t, x];
            markers.push(item);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(7);
                google.maps.event.removeListener(boundsListener);
            });

        }</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Transport/front/Bus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 131,  306 => 126,  302 => 125,  298 => 124,  293 => 121,  289 => 120,  255 => 89,  251 => 88,  247 => 87,  243 => 86,  239 => 85,  235 => 84,  230 => 82,  226 => 81,  222 => 80,  218 => 79,  214 => 78,  210 => 77,  206 => 76,  202 => 75,  198 => 74,  194 => 73,  190 => 72,  186 => 71,  182 => 70,  178 => 69,  174 => 68,  170 => 67,  166 => 66,  161 => 65,  152 => 64,  113 => 34,  105 => 28,  93 => 26,  88 => 25,  84 => 23,  82 => 22,  76 => 19,  61 => 6,  52 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'  %}



{%  block content %}

    <!-- bradcam_area_start -->
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3>Transport</h3>
    </div>

    <!-- popular_courses_start -->
    <div class=\"popular_courses plus_padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"section_title text-center mb-100\">

                        <form action=\"{{ path(\"busf\")}}\" method=\"get\" >
                            <center> <select name=\"id\" id=\"id\" class=\"form-control-lg form-control\">
                                    <option>Please select</option>
                                    {% if tab | length ==0 %}
                                        Pas de Trajet Disponible !!!
                                    {% else %}
                                        {% for t in tab %}
                                            <option value=\"{{ t.id}}\">{{ t.name}}</option>
                                        {% endfor %}{% endif %}
                                </select></center>&nbsp;
                            <button type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                <span id=\"payment-button-amount\">Afficher le Trajet</span>
                            </button></form>
                    </div>
                    <div class=\"button-group-area mt-40\">
                        <a href=\"{{ path('transport_homepage')}}\" class=\"genric-btn default circle arrow\"><h2>Retour</h2><span class=\"lnr lnr-arrow-right\"></span></a></div>
                </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-12\">

                </div>
            </div>

        </div>

    </div>

    <!-- popular_courses_end-->




    <div id=\"map_wrapper\">
        <div id=\"map_canvas\" class=\"mapping\">

    </div>



    <!-- End Button -->
{% endblock %}

{% block Javascript %}
    <script src=\"{{ asset('front/js/vendor/modernizr-3.5.0.min.js')}}\" ></script>
    <script src=\"{{ asset('front/js/vendor/jquery-1.12.4.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/popper.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/isotope.pkgd.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/ajax-form.js')}}\"></script>
    <script src=\"{{ asset('front/js/waypoints.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.counterup.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/imagesloaded.pkgd.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/scrollIt.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.scrollUp.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/wow.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/nice-select.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.slicknav.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{ asset('js/plugins.js')}}\"></script>
    <script src=\"{{ asset('front/js/gijgo.min.js')}}\"></script>
    <!--contact js-->
    <script src=\"{{ asset('front/js/contact.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.ajaxchimp.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.form.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.validate.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/mail-script.js')}}\"></script>
    <script src=\"{{ asset('front/js/main.js')}}\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = \"https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize\";
            document.body.appendChild(script);
        });

        function initialize() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                // mapTypeId: 'hybrid'
                // mapTypeId: 'satellite'
                // mapTypeId: 'roadmap'
                mapTypeId: 'terrain'
            };




            // Display a map on the page
            map = new google.maps.Map(document.getElementById(\"map_canvas\"), mapOptions);
            map.setTilt(45);

            var markers=[] ;
            for(var f=0; f<0; f++){
                markers[f] = new Array(3);
            }

            {% for t in tabb %}
            var t=\"\";
            var x=0;
            var c=5;
            t={{ t.altitude }};
            x={{ t.longtitude }};
            c=\"{{ t.name }}\";
            console.log(t);
            var item= [c, t, x];
            markers.push(item);
            {% endfor %}

            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(7);
                google.maps.event.removeListener(boundsListener);
            });

        }</script>
{% endblock %}
", "@Transport/front/Bus/index.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\front\\Bus\\index.html.twig");
    }
}
