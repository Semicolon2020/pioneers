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

/* @Pioneer/Blog/viewfront.html.twig */
class __TwigTemplate_c948186df05c20b79be5df80d3d8423927a4272ee9b79b7afd23ad02eee26fa0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/viewfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/viewfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Pioneer/Blog/viewfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    <!-- bradcam_area_start -->
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3>News</h3>
    </div>
    <!-- our_latest_blog_start -->
    <section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Formlist"] ?? $this->getContext($context, "Formlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 18
            echo "                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute($context["f"], "photo", []))), "html", null, true);
            echo " \" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titre", []), "html", null, true);
            echo "\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", []), "d"), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "date", []), "F"), "html", null, true);
            echo "</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleblogFront", ["id" => $this->getAttribute($context["f"], "id", []), "idU" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])], true), "html", null, true);
            echo "\">
                                    <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titre", []), "html", null, true);
            echo "</h2>
                                </a>
                                <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "description", []), "html", null, true);
            echo "</p>

                            </div>
                        </article>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"#\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Next\">
                                        <i class=\"ti-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Search Keyword'\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                        type=\"submit\">Search</button>
                            </form>
                        </aside>





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_latest_blog_end -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Blog/viewfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  110 => 31,  105 => 29,  101 => 28,  93 => 23,  89 => 22,  82 => 20,  78 => 18,  74 => 17,  60 => 5,  51 => 4,  29 => 1,);
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


    <!-- bradcam_area_start -->
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3>News</h3>
    </div>
    <!-- our_latest_blog_start -->
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
                                <a class=\"d-inline-block\" href=\"{{ path('singleblogFront',{'id':f.id,'idU':app.user.id},true)  }}\">
                                    <h2>{{ f.titre }}</h2>
                                </a>
                                <p>{{ f.description }}</p>

                            </div>
                        </article>
                        {% endfor %}


                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"#\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Next\">
                                        <i class=\"ti-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Search Keyword'\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                        type=\"submit\">Search</button>
                            </form>
                        </aside>





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_latest_blog_end -->

{% endblock %}
", "@Pioneer/Blog/viewfront.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Blog\\viewfront.html.twig");
    }
}
