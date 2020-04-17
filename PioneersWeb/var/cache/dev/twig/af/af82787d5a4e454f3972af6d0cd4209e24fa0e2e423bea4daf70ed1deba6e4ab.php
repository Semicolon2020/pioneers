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

/* @Transport/front/Covoiturage/demande.html.twig */
class __TwigTemplate_175015b223e0743e649c2b0958ab04cee4a18493625ae14827f2ee9bfd86a160 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/front/Covoiturage/demande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/front/Covoiturage/demande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Transport/front/Covoiturage/demande.html.twig", 1);
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


    <div class=\"bradcam_area breadcam_bg overlay2\">

            <h3>Offres Proposes par les parents</h3>
<br>

        <div id=\"map_wrapper\">
            <div id=\"map_canvas\" class=\"mapping\"></div>
        </div>
        <div class=\"button-group-area mt-40\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("co");
        echo "\" class=\"genric-btn default circle arrow\"><h2>Retour</h2><span class=\"lnr lnr-arrow-right\"></span></a></div>



    </div>
    <!-- End Button -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_Javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajax-form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrollIt.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
    <!--contact js-->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tab"] ?? $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 83
            echo "             var t=\"\";
             var x=0;
             var c=5;
             t=";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "laltitude", []), "html", null, true);
            echo ";
             x=";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "longitude", []), "html", null, true);
            echo ";
             c=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nomparent", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "num", []), "html", null, true);
            echo "\";
             console.log(t);
             var item= [c, t, x];
             markers.push(item);
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return "@Transport/front/Covoiturage/demande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 93,  246 => 88,  242 => 87,  238 => 86,  233 => 83,  229 => 82,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  170 => 44,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 27,  92 => 26,  75 => 18,  61 => 6,  52 => 5,  30 => 1,);
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



    <div class=\"bradcam_area breadcam_bg overlay2\">

            <h3>Offres Proposes par les parents</h3>
<br>

        <div id=\"map_wrapper\">
            <div id=\"map_canvas\" class=\"mapping\"></div>
        </div>
        <div class=\"button-group-area mt-40\">
            <a href=\"{{ path('co')}}\" class=\"genric-btn default circle arrow\"><h2>Retour</h2><span class=\"lnr lnr-arrow-right\"></span></a></div>



    </div>
    <!-- End Button -->
{% endblock %}

{% block Javascript %}
    <script src=\"{{ asset('js/vendor/modernizr-3.5.0.min.js')}}\" ></script>
    <script src=\"{{ asset('js/vendor/jquery-1.12.4.min.js')}}\"></script>
    <script src=\"{{ asset('js/popper.min.js')}}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset('js/isotope.pkgd.min.js')}}\"></script>
    <script src=\"{{ asset('js/ajax-form.js')}}\"></script>
    <script src=\"{{ asset('js/waypoints.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.counterup.min.js')}}\"></script>
    <script src=\"{{ asset('js/imagesloaded.pkgd.min.js')}}\"></script>
    <script src=\"{{ asset('js/scrollIt.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.scrollUp.min.js')}}\"></script>
    <script src=\"{{ asset('js/wow.min.js')}}\"></script>
    <script src=\"{{ asset('js/nice-select.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.slicknav.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{ asset('js/plugins.js')}}\"></script>
    <script src=\"{{ asset('js/gijgo.min.js')}}\"></script>
    <!--contact js-->
    <script src=\"{{ asset('js/contact.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.ajaxchimp.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.form.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.validate.min.js')}}\"></script>
    <script src=\"{{ asset('js/mail-script.js')}}\"></script>
    <script src=\"{{ asset('js/main.js')}}\"></script>
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

            {% for t in tab %}
             var t=\"\";
             var x=0;
             var c=5;
             t={{ t.laltitude }};
             x={{ t.longitude }};
             c=\"{{ t.nomparent }} {{ t.num }}\";
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
", "@Transport/front/Covoiturage/demande.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\front\\Covoiturage\\demande.html.twig");
    }
}
