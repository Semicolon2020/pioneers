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

/* @Transport/back/trajet/trajet.html.twig */
class __TwigTemplate_d507480c3b011a7f6937490ae61d3300fd252ebf79dd2852ca4349e6f17783e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/trajet/trajet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/trajet/trajet.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Transport/back/trajet/trajet.html.twig", 1);
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
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Transport2_homepage");
        echo "\"><button class=\"btn btn-primary btn-sm\">
                                <i class=\"fa fa-ban\"></i> Retour au menu principale
                            </button></a></strong>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"user-data m-b-30\">
                            <h3 class=\"title-3 m-b-30\">
                                <i class=\"zmdi zmdi-account-calendar\"></i>Table de Trajet</h3>
                            <center><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_trajet");
        echo "\"> <button class=\"au-btn au-btn-load\">Ajouter Trajet</button></center></a>
                            <div class=\"table-responsive table-data\">
                                <table class=\"table\">

                                    <thead>
                                    <tr>
                                        <td>Nom Du Trajet</td>
                                        <td>Nom De Bus</td>
                                        <td>Options</td>
                                        <td>Remarque</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        ";
        // line 35
        if ((twig_length_filter($this->env, ($context["tab"] ?? $this->getContext($context, "tab"))) == 0)) {
            // line 36
            echo "                                       <center> Le Tableau est Vide  </center>
                                        ";
        } else {
            // line 38
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tab"] ?? $this->getContext($context, "tab")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 39
                echo "                                        <td>
                                            <div class=\"table-data__info\">
                                            <h6> ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", []), "html", null, true);
                echo " </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nombus", []), "html", null, true);
                echo "</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data-feature\">
                                                <form action=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editdetailstr", ["id" => $this->getAttribute($context["t"], "id", [])]), "html", null, true);
                echo "\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer Trajet\">
                                                <i class=\"zmdi zmdi-edit\"></i></button>
                                                </form>
                                                <form action=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherdetailsst", ["id" => $this->getAttribute($context["t"], "id", [])]), "html", null, true);
                echo "\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer Stations\">
                                                        <i class=\"zmdi zmdi-edit\"></i></button>
                                                </form>
                                                <form action=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletedetailstr", ["id" => $this->getAttribute($context["t"], "id", [])]), "html", null, true);
                echo "\" onSubmit=\"return confirm('Voulez-vous vraiment supprimer?');\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\">
                                                        <i class=\"zmdi zmdi-delete\"></i>
                                                    </button> </form></div>
                                        </td>
                                        <td>";
                // line 61
                if (($this->getAttribute($context["t"], "find", []) == "")) {
                    echo " Pas de Station Affecté ";
                }
                echo "<br>
                                            ";
                // line 62
                if (($this->getAttribute($context["t"], "nombus", []) == "")) {
                    echo " Pas de Bus Affecté ";
                }
                echo "</td>


                                    </tr>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                    ";
        }
        // line 69
        echo "                                    </tbody>
                                </table>




                            </div>
                            <div class=\"user-data__footer\">

                            </div>
                        </div>

                    </div></div></div></div></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Transport/back/trajet/trajet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 69,  170 => 68,  156 => 62,  150 => 61,  143 => 57,  137 => 54,  131 => 51,  123 => 46,  115 => 41,  111 => 39,  106 => 38,  102 => 36,  100 => 35,  83 => 21,  71 => 12,  60 => 3,  51 => 2,  29 => 1,);
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

                        <strong><a href=\"{{ path('Transport2_homepage')}}\"><button class=\"btn btn-primary btn-sm\">
                                <i class=\"fa fa-ban\"></i> Retour au menu principale
                            </button></a></strong>

                    </div>
                    <div class=\"card-body\">
                        <div class=\"user-data m-b-30\">
                            <h3 class=\"title-3 m-b-30\">
                                <i class=\"zmdi zmdi-account-calendar\"></i>Table de Trajet</h3>
                            <center><a href=\"{{ path('add_trajet') }}\"> <button class=\"au-btn au-btn-load\">Ajouter Trajet</button></center></a>
                            <div class=\"table-responsive table-data\">
                                <table class=\"table\">

                                    <thead>
                                    <tr>
                                        <td>Nom Du Trajet</td>
                                        <td>Nom De Bus</td>
                                        <td>Options</td>
                                        <td>Remarque</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        {% if tab | length ==0 %}
                                       <center> Le Tableau est Vide  </center>
                                        {% else %}
                                        {% for t in tab %}
                                        <td>
                                            <div class=\"table-data__info\">
                                            <h6> {{ t.name}} </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data__info\">
                                                <h6>{{ t.nombus}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"table-data-feature\">
                                                <form action=\"{{ path(\"editdetailstr\",{\"id\": t.id })}}\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer Trajet\">
                                                <i class=\"zmdi zmdi-edit\"></i></button>
                                                </form>
                                                <form action=\"{{ path(\"afficherdetailsst\",{\"id\": t.id })}}\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editer Stations\">
                                                        <i class=\"zmdi zmdi-edit\"></i></button>
                                                </form>
                                                <form action=\"{{ path(\"deletedetailstr\",{\"id\": t.id })}}\" onSubmit=\"return confirm('Voulez-vous vraiment supprimer?');\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\">
                                                        <i class=\"zmdi zmdi-delete\"></i>
                                                    </button> </form></div>
                                        </td>
                                        <td>{%  if (t.find=='')%} Pas de Station Affecté {%  endif %}<br>
                                            {%  if (t.nombus=='')%} Pas de Bus Affecté {%  endif %}</td>


                                    </tr>

                                    {% endfor %}
                                    {% endif%}
                                    </tbody>
                                </table>




                            </div>
                            <div class=\"user-data__footer\">

                            </div>
                        </div>

                    </div></div></div></div></div>

{% endblock %}", "@Transport/back/trajet/trajet.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\back\\trajet\\trajet.html.twig");
    }
}
