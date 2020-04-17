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

/* @Transport/back/bus/bus.html.twig */
class __TwigTemplate_a9705803d50a5a7ef2b27229b5bd4e547866e53ba8b7e0b5a570d05c316966ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/bus/bus.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/bus/bus.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Transport/back/bus/bus.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Transport2_homepage");
        echo "\"><button class=\"btn btn-primary btn-sm\">
                                        Retour Au Menu Principale
                                    </button></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherdetailstr");
        echo "\"><button class=\"btn btn-primary btn-sm\">
                                         Aller au Menu  Trajet
                                    </button></a></strong>

                        </div>
                        <div class=\"card-body\">
                            <div class=\"user-data m-b-30\">
                                <h3 class=\"title-3 m-b-30\">
                                    <i class=\"zmdi zmdi-account-calendar\"></i>Table de Bus</h3>
                                    <center>  <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_bus");
        echo "\"> <button class=\"au-btn au-btn-load\">Add Bus</button></center></a>
                                <div class=\"table-responsive table-data\">
                                    <table class=\"table\">
                                        ";
        // line 29
        if ((twig_length_filter($this->env, ($context["tab"] ?? $this->getContext($context, "tab"))) == 0)) {
            // line 30
            echo "                                        Le Tableau est Vide !!!
                                        ";
        } else {
            // line 32
            echo "                                        <thead>
                                        <tr>

                                            <td>Nom du Bus</td>
                                            <td>Capacité</td>
                                            <td>Chauffeur</td>
                                            <td>Options</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tab"] ?? $this->getContext($context, "tab")));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 44
                echo "                                            <td>
                                                <div class=\"table-data__info\">
                                                    <h6>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "name", []), "html", null, true);
                echo "</h6>

                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <h6>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "capacite", []), "html", null, true);
                echo "</h6>

                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <h6>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "chauffeur", []), "html", null, true);
                echo "</h6>

                                                </div>


                                            </td>
                                            <td>
                                                <div class=\"table-data-feature\">
                                                <form action=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editdetails", ["id" => $this->getAttribute($context["b"], "id", [])]), "html", null, true);
                echo "\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                                                        <i class=\"zmdi zmdi-edit\"></i></button>
                                              </form>
                                                <form action=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletedetails", ["id" => $this->getAttribute($context["b"], "id", [])]), "html", null, true);
                echo "\" onSubmit=\"return confirm('Voulez-vous vraiment supprimer?');\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                        <i class=\"zmdi zmdi-delete\"></i>
                                                    </button> </form></div>
                                            </td>


                                        </tr>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                                        </tbody>
                                    </table>

";
        }
        // line 82
        echo "

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
        return "@Transport/back/bus/bus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 82,  174 => 78,  159 => 69,  153 => 66,  142 => 58,  133 => 52,  124 => 46,  120 => 44,  116 => 43,  103 => 32,  99 => 30,  97 => 29,  91 => 26,  79 => 17,  70 => 11,  60 => 3,  51 => 2,  29 => 1,);
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
                                        Retour Au Menu Principale
                                    </button></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"{{ path('afficherdetailstr')}}\"><button class=\"btn btn-primary btn-sm\">
                                         Aller au Menu  Trajet
                                    </button></a></strong>

                        </div>
                        <div class=\"card-body\">
                            <div class=\"user-data m-b-30\">
                                <h3 class=\"title-3 m-b-30\">
                                    <i class=\"zmdi zmdi-account-calendar\"></i>Table de Bus</h3>
                                    <center>  <a href=\"{{ path('add_bus') }}\"> <button class=\"au-btn au-btn-load\">Add Bus</button></center></a>
                                <div class=\"table-responsive table-data\">
                                    <table class=\"table\">
                                        {% if tab | length ==0 %}
                                        Le Tableau est Vide !!!
                                        {% else %}
                                        <thead>
                                        <tr>

                                            <td>Nom du Bus</td>
                                            <td>Capacité</td>
                                            <td>Chauffeur</td>
                                            <td>Options</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            {% for b in tab %}
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <h6>{{ b.name}}</h6>

                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <h6>{{ b.capacite}}</h6>

                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"table-data__info\">
                                                    <h6>{{ b.chauffeur}}</h6>

                                                </div>


                                            </td>
                                            <td>
                                                <div class=\"table-data-feature\">
                                                <form action=\"{{ path(\"editdetails\",{\"id\": b.id })}}\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                                                        <i class=\"zmdi zmdi-edit\"></i></button>
                                              </form>
                                                <form action=\"{{ path(\"deletedetails\",{\"id\": b.id })}}\" onSubmit=\"return confirm('Voulez-vous vraiment supprimer?');\"><button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                                                        <i class=\"zmdi zmdi-delete\"></i>
                                                    </button> </form></div>
                                            </td>


                                        </tr>

                                        {% endfor %}
                                        </tbody>
                                    </table>

{% endif %}


                                </div>
                                <div class=\"user-data__footer\">

                                </div>
                            </div>

                        </div></div></div></div></div>

{% endblock %}", "@Transport/back/bus/bus.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\back\\bus\\bus.html.twig");
    }
}
