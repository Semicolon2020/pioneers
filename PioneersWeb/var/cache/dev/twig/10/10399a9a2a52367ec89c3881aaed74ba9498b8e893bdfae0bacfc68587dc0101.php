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

/* @Transport/back/station/station.html.twig */
class __TwigTemplate_123a760b9fd2f87dbb6dddb3afb191104696ea86ecae043cbcf47e92c20b93a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/station/station.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/station/station.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Transport/back/station/station.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- LEFT BLOCK -->

                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherdetailstr");
        echo "\"><button class=\"btn btn-primary btn-sm\">
                                <i class=\"fa fa-ban\"></i> Sauvegardez et Retournez au Menu Trajet
                            </button></a></strong>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"user-data m-b-30\">
                            <h3 class=\"title-3 m-b-30\">
                                <i class=\"zmdi zmdi-account-calendar\"></i>Table de Station</h3>
                            ";
        // line 20
        $context["m"] = 0;
        // line 21
        echo "                            <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_station", ["id" => ($context["id"] ?? $this->getContext($context, "id")), "m" => ($context["m"] ?? $this->getContext($context, "m"))]), "html", null, true);
        echo "\">
                                <center> <button class=\"au-btn au-btn-load\">Ajouter Station</button></center></form>

                            <div class=\"table-responsive table-data\">
                                <table class=\"table\">

                                    <thead>
                                    <tr>

                                        <td>Nom</td>
                                        <td>Longtitude</td>
                                        <td>Laltitude</td>
                                        <td>Option</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <br>
                                        ";
        // line 39
        if ((twig_length_filter($this->env, ($context["tab"] ?? $this->getContext($context, "tab"))) == 0)) {
            // line 40
            echo "                                        <center>Pas de Station Affecté au Trajet</center>
                                        ";
        } else {
            // line 42
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tab"] ?? $this->getContext($context, "tab")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 43
                echo "                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", []), "html", null, true);
                echo " </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "longtitude", []), "html", null, true);
                echo "</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "altitude", []), "html", null, true);
                echo "</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data-feature\">

                                                <form action=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletedetailsst", ["id" => $this->getAttribute($context["t"], "id", []), "id2" => $this->getAttribute($context["t"], "idtrajet", [])]), "html", null, true);
                echo "\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                        <i class=\"zmdi zmdi-delete\"></i>
                                                    </button></form></div>
                                        </td>

                                    </tr>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                    ";
        }
        // line 70
        echo "                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div></div></div></div></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Transport/back/station/station.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 70,  160 => 69,  146 => 61,  137 => 55,  129 => 50,  121 => 45,  117 => 43,  112 => 42,  108 => 40,  106 => 39,  84 => 21,  82 => 20,  70 => 11,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'  %}
{% block content %}
    <div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- LEFT BLOCK -->

                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong><a href=\"{{ path('afficherdetailstr')}}\"><button class=\"btn btn-primary btn-sm\">
                                <i class=\"fa fa-ban\"></i> Sauvegardez et Retournez au Menu Trajet
                            </button></a></strong>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"user-data m-b-30\">
                            <h3 class=\"title-3 m-b-30\">
                                <i class=\"zmdi zmdi-account-calendar\"></i>Table de Station</h3>
                            {% set m=0 %}
                            <form action=\"{{ path(\"add_station\",{\"id\":id,\"m\":m})}}\">
                                <center> <button class=\"au-btn au-btn-load\">Ajouter Station</button></center></form>

                            <div class=\"table-responsive table-data\">
                                <table class=\"table\">

                                    <thead>
                                    <tr>

                                        <td>Nom</td>
                                        <td>Longtitude</td>
                                        <td>Laltitude</td>
                                        <td>Option</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <br>
                                        {% if tab | length ==0 %}
                                        <center>Pas de Station Affecté au Trajet</center>
                                        {% else %}
                                        {% for t in tab %}
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>{{ t.name}} </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>{{ t.longtitude}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>{{ t.altitude}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data-feature\">

                                                <form action=\"{{ path(\"deletedetailsst\",{\"id\": t.id,\"id2\": t.idtrajet})}}\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                        <i class=\"zmdi zmdi-delete\"></i>
                                                    </button></form></div>
                                        </td>

                                    </tr>

                                    {% endfor %}
                                    {% endif %}
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div></div></div></div></div>

{% endblock %}", "@Transport/back/station/station.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\back\\station\\station.html.twig");
    }
}
