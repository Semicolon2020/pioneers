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

/* @Pioneer/Blog/listallblog.html.twig */
class __TwigTemplate_ef076bb99718a76e4bed975dcaf2abd1d9004c9cdbded055385f7663ca27e114 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/listallblog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/listallblog.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Pioneer/Blog/listallblog.html.twig", 1);
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

                    <section class=\"blog_area section-padding\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                                    <div class=\"blog_left_sidebar\">
                                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Formlist"] ?? $this->getContext($context, "Formlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 15
            echo "                                        <article class=\"blog_item\">
                                            <div class=\"blog_item_img\">
                                                <img class=\"card-img rounded-0\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute($context["f"], "photo", []))), "html", null, true);
            echo " \" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titre", []), "html", null, true);
            echo "\">
                                                <a href=\"#\" class=\"blog_item_date\">
                                                    <h3>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", []), "d"), "html", null, true);
            echo "</h3>
                                                    <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", []), "F"), "html", null, true);
            echo "</p>
                                                </a>
                                            </div>

                                            <div class=\"blog_details\">
                                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                                    <h2>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titre", []), "html", null, true);
            echo "</h2>
                                                </a>
                                                <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "description", []), "html", null, true);
            echo "</p>
                                                <ul class=\"blog-info-link\">

                                                    <li> <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateBlogAdmin", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning\" > <h6 style=\"color:black;\">Update</h6> </a></li>
                                                    <li> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteBlogAdmin", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\" ><h6 style=\"color:whitesmoke;\">Delete</h6></a></li>


                                                </ul>
                                            </div>
                                        </article>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "


                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <div class=\"blog_right_sidebar\">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- END MAIN CONTENT-->
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Blog/listallblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  116 => 32,  112 => 31,  106 => 28,  101 => 26,  92 => 20,  88 => 19,  81 => 17,  77 => 15,  73 => 14,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block content %}

        <!-- MAIN CONTENT-->
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
                                                <img class=\"card-img rounded-0\" src=\"{{ asset('uploads/post/' ~  f.photo) }} \" alt=\"{{ f.titre }}\">
                                                <a href=\"#\" class=\"blog_item_date\">
                                                    <h3>{{f.date | date(\"d\")}}</h3>
                                                    <p>{{f.date | date(\"F\")}}</p>
                                                </a>
                                            </div>

                                            <div class=\"blog_details\">
                                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                                    <h2>{{ f.titre }}</h2>
                                                </a>
                                                <p>{{ f.description }}</p>
                                                <ul class=\"blog-info-link\">

                                                    <li> <a href=\"{{ path('updateBlogAdmin',{'id':f.id}) }}\" class=\"btn btn-warning\" > <h6 style=\"color:black;\">Update</h6> </a></li>
                                                    <li> <a href=\"{{ path('deleteBlogAdmin',{'id':f.id}) }}\" class=\"btn btn-danger\" ><h6 style=\"color:whitesmoke;\">Delete</h6></a></li>


                                                </ul>
                                            </div>
                                        </article>
                                        {% endfor %}



                                    </div>
                                </div>
                                <div class=\"col-lg-4\">
                                    <div class=\"blog_right_sidebar\">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- END MAIN CONTENT-->
                    {%  endblock %}

", "@Pioneer/Blog/listallblog.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Blog\\listallblog.html.twig");
    }
}
