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

/* @Loisirs/Livre/AfficherLF.html.twig */
class __TwigTemplate_842a347e4b9a3fd6fc1259cf80789ce34c47d0843adad4632682796704e4d773 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Livre/AfficherLF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Livre/AfficherLF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Loisirs/Livre/AfficherLF.html.twig", 1);
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
        <h3>livres</h3>
    </div>

    <form method=\"POST\">

        &nbsp; &nbsp; &nbsp;<input name=\"Titre\"  onblur=\"this.placeholder = 'Titre'\" type=\"text\" >

        &nbsp; &nbsp; <input type=\"submit\" name=\"submit\" value=\"recherche\" class=\"genric-btn info circle\">
    </form>
    <br>
    <center><h1><i>Listes des Livres</i></h1></center><br><br>

    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
    <table class=\"table table-data2\">
        <thead>
        <tr>


            <th>titrel</th>
            <th>filel</th>
            <th>image</th>
            <th>audio</th>



        </tr>
        </thead>

        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 35
            echo "            <tr>

                <td><span class=\"block-email\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titrel", []), "html", null, true);
            echo "</span></td>
                <td> <span class=\"status--process\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("web/livres/" . $this->getAttribute($context["livre"], "filel", []))), "html", null, true);
            echo "\"class=\"btn btn-success\">Voir Livre</a></span></td>
                <td><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nomImage", []), "html", null, true);
            echo "\" style=\"width: 50px;height:50px\"></td>
                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("audio/sound/" . $this->getAttribute($context["livre"], "audio", []))), "html", null, true);
            echo "\"class=\"genric-btn success circle arrow\">Ecouter</a></td>






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
        return "@Loisirs/Livre/AfficherLF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  114 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 35,  93 => 34,  60 => 3,  51 => 2,  29 => 1,);
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
        <h3>livres</h3>
    </div>

    <form method=\"POST\">

        &nbsp; &nbsp; &nbsp;<input name=\"Titre\"  onblur=\"this.placeholder = 'Titre'\" type=\"text\" >

        &nbsp; &nbsp; <input type=\"submit\" name=\"submit\" value=\"recherche\" class=\"genric-btn info circle\">
    </form>
    <br>
    <center><h1><i>Listes des Livres</i></h1></center><br><br>

    <div border=\"2\" class=\"table-responsive table-responsive-data2\">
    <table class=\"table table-data2\">
        <thead>
        <tr>


            <th>titrel</th>
            <th>filel</th>
            <th>image</th>
            <th>audio</th>



        </tr>
        </thead>

        {% for livre in livres  %}
            <tr>

                <td><span class=\"block-email\">{{ livre.titrel }}</span></td>
                <td> <span class=\"status--process\"><a href=\"{{asset('web/livres/' ~ livre.filel)}}\"class=\"btn btn-success\">Voir Livre</a></span></td>
                <td><img src=\"{{ asset('images/') }}{{ livre.nomImage }}\" style=\"width: 50px;height:50px\"></td>
                <td><a href=\"{{asset('audio/sound/' ~ livre.audio)}}\"class=\"genric-btn success circle arrow\">Ecouter</a></td>






            </tr>
        {% endfor %}

    </table>
{% endblock %}", "@Loisirs/Livre/AfficherLF.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\LoisirsBundle\\Resources\\views\\Livre\\AfficherLF.html.twig");
    }
}
