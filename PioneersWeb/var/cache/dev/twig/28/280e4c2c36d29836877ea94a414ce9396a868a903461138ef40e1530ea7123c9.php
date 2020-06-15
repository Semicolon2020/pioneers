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

/* @Loisirs/Livre/AfficherL.html.twig */
class __TwigTemplate_0ca73b084179402e21434e07805219d3995c7a6f9101e94f9cf0adb3d73df04c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Livre/AfficherL.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Livre/AfficherL.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Loisirs/Livre/AfficherL.html.twig", 1);
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
    <h5> Chercher Livres</h5><br>

    <form method=\"POST\">
        Titre  <input type=\"text\" name=\"titrel\">
        <input type=\"submit\" name=\"submit\" value=\"recherche\">
    </form>
    <br>
<h1>Listes des Livres</h1>

    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
    <table class=\"table table-data2\">
        <thead>
        <tr>

        <th>id</th>
        <th>titrel</th>
        <th>filel</th>
        <th>image</th>
        <th>audio</th>

        <th>modifierL</th>

        </tr>
        </thead>

    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 34
            echo "        <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "id", []), "html", null, true);
            echo "</td>
            <td><span class=\"block-email\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titrel", []), "html", null, true);
            echo "</span></td>
            <td> <span class=\"status--process\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("web/livres/" . $this->getAttribute($context["livre"], "filel", []))), "html", null, true);
            echo "\"class=\"btn btn-success\">Voir Livre</a></span></td>
            <td><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nomImage", []), "html", null, true);
            echo "\" style=\"width: 50px;height:50px\"></td>
            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("audio/sound/" . $this->getAttribute($context["livre"], "audio", []))), "html", null, true);
            echo "\"class=\"btn btn-success\">Ecouter</a></td>

            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatel", ["id" => $this->getAttribute($context["livre"], "id", [])]), "html", null, true);
            echo "\"class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"> <i class=\"zmdi zmdi-edit\"></i>modifier</a></td>





        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Loisirs/Livre/AfficherL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  121 => 41,  116 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  96 => 34,  92 => 33,  60 => 3,  51 => 2,  29 => 1,);
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
    <h5> Chercher Livres</h5><br>

    <form method=\"POST\">
        Titre  <input type=\"text\" name=\"titrel\">
        <input type=\"submit\" name=\"submit\" value=\"recherche\">
    </form>
    <br>
<h1>Listes des Livres</h1>

    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
    <table class=\"table table-data2\">
        <thead>
        <tr>

        <th>id</th>
        <th>titrel</th>
        <th>filel</th>
        <th>image</th>
        <th>audio</th>

        <th>modifierL</th>

        </tr>
        </thead>

    {% for livre in livres  %}
        <tr>
            <td>{{ livre.id }}</td>
            <td><span class=\"block-email\">{{ livre.titrel }}</span></td>
            <td> <span class=\"status--process\"><a href=\"{{asset('web/livres/' ~ livre.filel)}}\"class=\"btn btn-success\">Voir Livre</a></span></td>
            <td><img src=\"{{ asset('images/') }}{{ livre.nomImage }}\" style=\"width: 50px;height:50px\"></td>
            <td><a href=\"{{asset('audio/sound/' ~ livre.audio)}}\"class=\"btn btn-success\">Ecouter</a></td>

            <td><a href=\"{{  path(\"updatel\",{'id':livre.id}) }}\"class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"> <i class=\"zmdi zmdi-edit\"></i>modifier</a></td>





        </tr>
    {% endfor %}

</table>
{% endblock %}", "@Loisirs/Livre/AfficherL.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\LoisirsBundle\\Resources\\views\\Livre\\AfficherL.html.twig");
    }
}
