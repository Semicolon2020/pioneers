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

/* @Rec/Reclam/listRec.html.twig */
class __TwigTemplate_20231798c4be8ccfc0a3b8fd284388f8a58b5b785f39bcac28f14bbc2d0b62db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Rec/Reclam/listRec.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Rec/Reclam/listRec.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Rec/Reclam/listRec.html.twig", 1);
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
<div class=\"bradcam_area breadcam_bg overlay2\">
    <h3>Réclamations</h3>
</div>

<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">

            <section class=\"blog_area section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 mb-5 mb-lg-0\">
                            <div class=\"blog_left_sidebar\">


                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Formlist"] ?? $this->getContext($context, "Formlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 20
            echo "

                                <article class=\"blog_item\">

                                    <div class=\"blog_item_img\">

                                        <a href=\"#\" class=\"blog_item_date\">


                                            <h3>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", []), "d"), "html", null, true);
            echo "</h3>

                                            <p>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", []), "F"), "html", null, true);
            echo "</p>
                                        </a>

                                    </div>

                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"single-blog.html\">
                                            <h4><a class=\"js-acc-btn\" href=\"#\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "user", []), "username", []), "html", null, true);
            echo "</a></h4>
                                            <h2>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "objet", []), "html", null, true);
            echo "</h2>
                                        </a>
                                        <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "text", []), "html", null, true);
            echo "</p>
                                        <ul class=\"blog-info-link\">

                                            <li> <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteRecAdmin", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\" ><h6 style=\"color:whitesmoke;\">Delete</h6></a></li>
                                            ";
            // line 45
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "role", []) == "T")) {
                // line 46
                echo "                                            <li> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("repondre", ["id" => $this->getAttribute($this->getAttribute($context["f"], "user", []), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-danger\" ><h6 style=\"color:whitesmoke;\">répondre</h6></a></li>
                                            ";
            }
            // line 48
            echo "                                        </ul>
                                    </div>
                                </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </div></div></div></div></section></div></div></div></div></html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Rec/Reclam/listRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  135 => 48,  129 => 46,  127 => 45,  123 => 44,  117 => 41,  112 => 39,  108 => 38,  98 => 31,  93 => 29,  82 => 20,  78 => 19,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block content %}

<div class=\"bradcam_area breadcam_bg overlay2\">
    <h3>Réclamations</h3>
</div>

<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">

            <section class=\"blog_area section-padding\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 mb-5 mb-lg-0\">
                            <div class=\"blog_left_sidebar\">


                                {% for f in Formlist %}


                                <article class=\"blog_item\">

                                    <div class=\"blog_item_img\">

                                        <a href=\"#\" class=\"blog_item_date\">


                                            <h3>{{f.date | date(\"d\")}}</h3>

                                            <p>{{f.date | date(\"F\")}}</p>
                                        </a>

                                    </div>

                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"single-blog.html\">
                                            <h4><a class=\"js-acc-btn\" href=\"#\">{{f.user.username}}</a></h4>
                                            <h2>{{ f.objet }}</h2>
                                        </a>
                                        <p>{{ f.text }}</p>
                                        <ul class=\"blog-info-link\">

                                            <li> <a href=\"{{ path('deleteRecAdmin',{'id':f.id}) }}\" class=\"btn btn-danger\" ><h6 style=\"color:whitesmoke;\">Delete</h6></a></li>
                                            {% if app.user.role=='T' %}
                                            <li> <a href=\"{{ path('repondre',{'id':f.user.id}) }}\" class=\"btn btn-danger\" ><h6 style=\"color:whitesmoke;\">répondre</h6></a></li>
                                            {% endif %}
                                        </ul>
                                    </div>
                                </article>
{% endfor %}
                            </div></div></div></div></section></div></div></div></div></html>
{% endblock  %}
", "@Rec/Reclam/listRec.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\RecBundle\\Resources\\views\\Reclam\\listRec.html.twig");
    }
}
