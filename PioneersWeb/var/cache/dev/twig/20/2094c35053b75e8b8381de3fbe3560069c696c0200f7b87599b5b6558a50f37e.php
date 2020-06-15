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

/* @Loisirs/Cours/AfficherC.html.twig */
class __TwigTemplate_e6bf8155304954bc71dcae8d1f04b48543852001aede1fbbbc778563e9d45147 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Cours/AfficherC.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Cours/AfficherC.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Loisirs/Cours/AfficherC.html.twig", 1);
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
        echo "
<!-- MAIN CONTENT-->
<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">

<form method=\"POST\">
    Tuteur  <input type=\"text\" name=\"tuteur\">
    <input type=\"submit\" name=\"submit\" value=\"recherche\">
</form>
    <br>

<h1>Listes des cours</h1>





    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
        <table class=\"table table-data2\">
            <thead>
            <tr>

                <th>id</th>
                <th>titre</th>
                <th>date</th>
                <th>tuteur</th>
                <th>file</th>
                <th>livre</th>
                <th>SupprimerC</th>
                <th>modifierC</th>


            </tr>
            </thead>
            <tbody>
            <tr class=\"tr-shadow\">

                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["course"] ?? $this->getContext($context, "course")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 42
            echo "                <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "id", []), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"block-email\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "titre", []), "html", null, true);
            echo "</span>
                </td>
                <td class=\"desc\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cours"], "date", []), "m/d/y"), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "tuteur", []), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"status--process\"><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["cours"], "file", []))), "html", null, true);
            echo "\"class=\"btn btn-success\">Voir Cours</a></span>
                </td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cours"], "livre", []), "titrel", []), "html", null, true);
            echo "</td>

                <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", ["id" => $this->getAttribute($context["cours"], "id", [])]), "html", null, true);
            echo "\"class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                        <i class=\"zmdi zmdi-delete\"></i>supp </a></td>
                <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update", ["id" => $this->getAttribute($context["cours"], "id", [])]), "html", null, true);
            echo "\"class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                        <i class=\"zmdi zmdi-edit\"></i>modifier</a></td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo " </tr>

            </tr>


            </tbody>
        </table>
    </div>

    <br>
    <div class=\"navigator\">
        ";
        // line 69
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["course"] ?? $this->getContext($context, "course")));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Loisirs/Cours/AfficherC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 69,  150 => 58,  141 => 56,  136 => 54,  131 => 52,  126 => 50,  121 => 48,  117 => 47,  112 => 45,  107 => 43,  104 => 42,  100 => 41,  60 => 3,  51 => 2,  29 => 1,);
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

<!-- MAIN CONTENT-->
<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">

<form method=\"POST\">
    Tuteur  <input type=\"text\" name=\"tuteur\">
    <input type=\"submit\" name=\"submit\" value=\"recherche\">
</form>
    <br>

<h1>Listes des cours</h1>





    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
        <table class=\"table table-data2\">
            <thead>
            <tr>

                <th>id</th>
                <th>titre</th>
                <th>date</th>
                <th>tuteur</th>
                <th>file</th>
                <th>livre</th>
                <th>SupprimerC</th>
                <th>modifierC</th>


            </tr>
            </thead>
            <tbody>
            <tr class=\"tr-shadow\">

                {% for cours in course %}
                <tr>
                <td>{{ cours.id}}</td>
                <td>
                    <span class=\"block-email\">{{ cours.titre}}</span>
                </td>
                <td class=\"desc\">{{ cours.date|date(\"m/d/y\") }}</td>
                <td>{{ cours.tuteur}}</td>
                <td>
                    <span class=\"status--process\"><a href=\"{{asset('uploads/brochures/' ~ cours.file)}}\"class=\"btn btn-success\">Voir Cours</a></span>
                </td>
                <td>{{ cours.livre.titrel}}</td>

                <td><a href=\"{{  path(\"delete\",{'id':cours.id}) }}\"class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\">
                        <i class=\"zmdi zmdi-delete\"></i>supp </a></td>
                <td><a href=\"{{  path(\"update\",{'id':cours.id}) }}\"class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
                        <i class=\"zmdi zmdi-edit\"></i>modifier</a></td>
                {% endfor %} </tr>

            </tr>


            </tbody>
        </table>
    </div>

    <br>
    <div class=\"navigator\">
        {{ knp_pagination_render(course) }}
    </div>
{% endblock %}
", "@Loisirs/Cours/AfficherC.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\LoisirsBundle\\Resources\\views\\Cours\\AfficherC.html.twig");
    }
}
