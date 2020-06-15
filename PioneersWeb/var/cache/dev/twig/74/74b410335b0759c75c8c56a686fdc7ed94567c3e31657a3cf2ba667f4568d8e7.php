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

/* @Loisirs/Cours/AfficherCF.html.twig */
class __TwigTemplate_3e2609ee72f472ac02e05518239d6627aac391ab9888c7e6175082767271e695 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Cours/AfficherCF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Cours/AfficherCF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Loisirs/Cours/AfficherCF.html.twig", 1);
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
    <!-- bradcam_area_start -->
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3>Cours</h3>
    </div>

    <form method=\"POST\">


         &nbsp;<button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button> &nbsp;<input name=\"tuteur\"  onblur=\"this.placeholder = 'Tuteur'\" type=\"text\" >

        &nbsp; &nbsp; </button><input type=\"submit\" name=\"submit\" value=\"recherche\" class=\"genric-btn info circle\">
    </form>
    <br>

    <center><h1><i>Listes des cours </i></h1></center><br><br><br>


    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
        <table class=\"table table-data2\">
            <thead>
            <tr>


                <th>titre</th>
                <th>date</th>
                <th>tuteur</th>
                <th>file</th>
                <th>livre</th>



            </tr>
            </thead>
            <tbody>
            <tr class=\"tr-shadow\">

                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["course"] ?? $this->getContext($context, "course")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 41
            echo "            <tr>

                <td>
                    <span class=\"block-email\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "titre", []), "html", null, true);
            echo "</span>
                </td>
                <td class=\"desc\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cours"], "date", []), "m/d/y"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "tuteur", []), "html", null, true);
            echo "</td>
                <td>
                    <span class=\"status--process\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["cours"], "file", []))), "html", null, true);
            echo "\"class=\"btn btn-success\">Voir Cours</a></span>
                </td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cours"], "livre", []), "titrel", []), "html", null, true);
            echo "</td>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " </tr>

            </tr>


            </tbody>
        </table>
    </div>
<br><br>
    <br>
    <div class=\"navigator\">
        ";
        // line 65
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["course"] ?? $this->getContext($context, "course")));
        echo "
    </div><br><br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Loisirs/Cours/AfficherCF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  137 => 54,  127 => 51,  122 => 49,  117 => 47,  113 => 46,  108 => 44,  103 => 41,  99 => 40,  60 => 3,  51 => 2,  29 => 1,);
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
{% block content %}

    <!-- bradcam_area_start -->
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3>Cours</h3>
    </div>

    <form method=\"POST\">


         &nbsp;<button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button> &nbsp;<input name=\"tuteur\"  onblur=\"this.placeholder = 'Tuteur'\" type=\"text\" >

        &nbsp; &nbsp; </button><input type=\"submit\" name=\"submit\" value=\"recherche\" class=\"genric-btn info circle\">
    </form>
    <br>

    <center><h1><i>Listes des cours </i></h1></center><br><br><br>


    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
        <table class=\"table table-data2\">
            <thead>
            <tr>


                <th>titre</th>
                <th>date</th>
                <th>tuteur</th>
                <th>file</th>
                <th>livre</th>



            </tr>
            </thead>
            <tbody>
            <tr class=\"tr-shadow\">

                {% for cours in course %}
            <tr>

                <td>
                    <span class=\"block-email\">{{ cours.titre}}</span>
                </td>
                <td class=\"desc\">{{ cours.date|date(\"m/d/y\") }}</td>
                <td>{{ cours.tuteur}}</td>
                <td>
                    <span class=\"status--process\"><a href=\"{{asset('uploads/brochures/' ~ cours.file)}}\"class=\"btn btn-success\">Voir Cours</a></span>
                </td>
                <td>{{ cours.livre.titrel}}</td>


                {% endfor %} </tr>

            </tr>


            </tbody>
        </table>
    </div>
<br><br>
    <br>
    <div class=\"navigator\">
        {{ knp_pagination_render(course) }}
    </div><br><br><br>

{% endblock %}", "@Loisirs/Cours/AfficherCF.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\LoisirsBundle\\Resources\\views\\Cours\\AfficherCF.html.twig");
    }
}
