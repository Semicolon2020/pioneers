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

/* @Pioneer/Blog/singleblog.html.twig */
class __TwigTemplate_09e9628c3409dba8aa8346cc69eb6937826957a512fe77bcc8e147c8247faaef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/singleblog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/singleblog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Pioneer/Blog/singleblog.html.twig", 1);
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
        echo "<div class=\"bradcam_area breadcam_bg overlay2\">
    <h3>Single Blog</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class=\"blog_area single-post-area section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 posts-list\">
                <div class=\"single-post\">
                    <div class=\"feature-img\">
                        <img class=\"img-fluid\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "photo", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "titre", []), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"blog_details\">
                        <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "titre", []), "html", null, true);
        echo "</h2>
                        <ul class=\"blog-info-link mt-3 mb-4\">

                            <li><a href=\"#\"><i class=\"fa fa-comments\"></i> 03 Comments</a></li>
                        </ul>
                        <p class=\"excert\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), "html", null, true);
        echo "
                        </p>

                    </div>
                </div>
                <div class=\"navigation-top\">
                    <div class=\"d-sm-flex justify-content-between text-center\">
                        <p class=\"like-info\"><span class=\"align-middle\"><i class=\"fa fa-heart\"></i></span> Lily and 4
                            people like this</p>
                        <div class=\"col-sm-4 text-center my-2 my-sm-0\">
                            <!-- <p class=\"comment-count\"><span class=\"align-middle\"><i class=\"fa fa-comment\"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class=\"social-icons\">

                        </ul>
                    </div>
                    <div class=\"navigation-area\">
                        <div class=\"row\">
                            <div
                                    class=\"col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center\">
                                <div class=\"thumb\">
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/preview.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"arrow\">
                                    <a href=\"#\">
                                        <span class=\"lnr text-white ti-arrow-left\"></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"comments-area\">
                    <h4>05 Comments</h4>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["c"] ?? $this->getContext($context, "c")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 64
            echo "                    <div class=\"comment-list\">
                        <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"img/comment/comment_1.png\" alt=\"\">
                                </div>
                                <div class=\"desc\">
                                    <p class=\"comment\">
                                        ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "text", []), "html", null, true);
            echo "
                                    </p>
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <h5>
                                                <a href=\"#\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "user", []), "username", []), "html", null, true);
            echo "</a>
                                            </h5>
                                            <p class=\"date\">";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "date", []), "d F Y"), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"reply-btn\">
                                            <a href=\"#\" class=\"btn-reply text-uppercase\">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </div>

                <div class=\"comment-form\">
                    <h4>Leave a Comment</h4>
                    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmt"] ?? $this->getContext($context, "cmt")), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"form-group\">

                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cmt"] ?? $this->getContext($context, "cmt")), "text", []), 'widget', ["attr" => ["class" => "form-control w-100"]]);
        echo "
                                </div>
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <div>

                              ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cmt"] ?? $this->getContext($context, "cmt")), "Submit", []), 'widget', ["attr" => ["class" => "button button-contactForm btn_1 boxed-btn"]]);
        echo "

                            </div>
                        </div>
                    ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmt"] ?? $this->getContext($context, "cmt")), 'form_end');
        echo "
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget search_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                           onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Blog/singleblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 111,  202 => 107,  191 => 99,  183 => 94,  177 => 90,  160 => 79,  155 => 77,  147 => 72,  137 => 64,  133 => 63,  91 => 24,  82 => 18,  74 => 15,  60 => 3,  51 => 2,  29 => 1,);
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
    <h3>Single Blog</h3>
</div>
<!-- bradcam_area_end -->

<!--================Blog Area =================-->
<section class=\"blog_area single-post-area section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 posts-list\">
                <div class=\"single-post\">
                    <div class=\"feature-img\">
                        <img class=\"img-fluid\" src=\"{{ asset('uploads/post/' ~  f.photo) }}\" alt=\"{{ f.titre }}\">
                    </div>
                    <div class=\"blog_details\">
                        <h2>{{ f.titre }}</h2>
                        <ul class=\"blog-info-link mt-3 mb-4\">

                            <li><a href=\"#\"><i class=\"fa fa-comments\"></i> 03 Comments</a></li>
                        </ul>
                        <p class=\"excert\">
                            {{ f.description }}
                        </p>

                    </div>
                </div>
                <div class=\"navigation-top\">
                    <div class=\"d-sm-flex justify-content-between text-center\">
                        <p class=\"like-info\"><span class=\"align-middle\"><i class=\"fa fa-heart\"></i></span> Lily and 4
                            people like this</p>
                        <div class=\"col-sm-4 text-center my-2 my-sm-0\">
                            <!-- <p class=\"comment-count\"><span class=\"align-middle\"><i class=\"fa fa-comment\"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class=\"social-icons\">

                        </ul>
                    </div>
                    <div class=\"navigation-area\">
                        <div class=\"row\">
                            <div
                                    class=\"col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center\">
                                <div class=\"thumb\">
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/preview.png\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"arrow\">
                                    <a href=\"#\">
                                        <span class=\"lnr text-white ti-arrow-left\"></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"comments-area\">
                    <h4>05 Comments</h4>
                    {% for com in c %}
                    <div class=\"comment-list\">
                        <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"img/comment/comment_1.png\" alt=\"\">
                                </div>
                                <div class=\"desc\">
                                    <p class=\"comment\">
                                        {{ com.text }}
                                    </p>
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <h5>
                                                <a href=\"#\">{{ com.user.username }}</a>
                                            </h5>
                                            <p class=\"date\">{{com.date | date(\"d F Y\")}}</p>
                                        </div>
                                        <div class=\"reply-btn\">
                                            <a href=\"#\" class=\"btn-reply text-uppercase\">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor%}
                    </div>

                <div class=\"comment-form\">
                    <h4>Leave a Comment</h4>
                    {{ form_start(cmt) }}
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"form-group\">

                                    {{ form_widget(cmt.text,{'attr':{'class':'form-control w-100'}})}}
                                </div>
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <div>

                              {{ form_widget(cmt.Submit,{'attr':{'class':'button button-contactForm btn_1 boxed-btn'}})}}

                            </div>
                        </div>
                    {{ form_end(cmt) }}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget search_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                           onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
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

{% endblock %}", "@Pioneer/Blog/singleblog.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Blog\\singleblog.html.twig");
    }
}
