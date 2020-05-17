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
class __TwigTemplate_c3218f6d86f2dc48fdc9a863cf7880d2c9e0f18092a17eafe4f86ed5f4dd2a9f extends \Twig\Template
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
    <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "titre", []), "html", null, true);
        echo "</h3>
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

                        <p class=\"excert\">
                            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "description", []), "html", null, true);
        echo "
                        </p>

                    </div>
                </div>
                <div class=\"navigation-top\">
                    <div class=\"d-sm-flex justify-content-between text-center\">

                        <div class=\"col-sm-4 text-center my-2 my-sm-0\">
                            <!-- <p class=\"comment-count\"><span class=\"align-middle\"><i class=\"fa fa-comment\"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class=\"social-icons\">

                        </ul>
                    </div>

                </div>

                <div class=\"comments-area\">
                    <li><a><i class=\"fa fa-comments\"></i> </a><h4 >";
        // line 40
        echo twig_escape_filter($this->env, ($context["nbC"] ?? $this->getContext($context, "nbC")), "html", null, true);
        echo " Comments</h4 ></li>

                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["c"] ?? $this->getContext($context, "c")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 43
            echo "                    <div class=\"comment-list\">
                        <div class=\"shadow-sm p-3 mb-5 bg-white rounded\">
                         <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute($this->getAttribute($context["com"], "user", []), "photo", []))), "html", null, true);
            echo " \" alt=\"\">
                                </div>
                                <div class=\"desc\">
                                    <p class=\"comment\">
                                        ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "text", []), "html", null, true);
            echo "
                                    </p>
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <h5>
                                                <a>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "user", []), "username", []), "html", null, true);
            echo "</a>
                                            </h5>
                                            <p class=\"date\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "date", []), "d F Y"), "html", null, true);
            echo "</p>

                                        <div>


                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                              ";
            // line 71
            if (($this->getAttribute($this->getAttribute($context["com"], "user", []), "id", []) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                // line 72
                echo "                             <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "point", []), "html", null, true);
                echo "</span>
                              <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LikeCmtFront", ["idc" => $this->getAttribute($context["com"], "id", [])], true), "html", null, true);
                echo "\"> <i class=\"fa fa-heart\"></i></span> </a>

                            ";
            } else {
                // line 76
                echo "                                <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "point", []), "html", null, true);
                echo "</span> </span>

                                ";
            }
            // line 79
            echo "
                            ";
            // line 80
            if (($this->getAttribute($this->getAttribute($context["com"], "user", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                // line 81
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteCmtFront", ["idc" => $this->getAttribute($context["com"], "id", [])], true), "html", null, true);
                echo "\"> <span class=\"badge badge-pill badge-danger\">Delete</span></a>
                            ";
            }
            // line 83
            echo "                            <br><br>

                            <div  id=\"accordion\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <h5 class=\"mb-0\">
                                            <button class=\"badge badge-dark\" data-toggle=\"collapse\" type=\"button\" data-target=\"#";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "id", []), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                Replies
                                            </button>
                                        </h5>
                                    </div>
                                    <div id=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "id", []), "html", null, true);
            echo "\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#\">
                                        <div class=\"card-body\">

                                            ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reply"] ?? $this->getContext($context, "reply")));
            foreach ($context['_seq'] as $context["_key"] => $context["R"]) {
                // line 98
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute($context["R"], "comment", []), "id", []) == $this->getAttribute($context["com"], "id", []))) {
                    // line 99
                    echo "                                                    <div class=\"shadow-none p-3 mb-5 bg-light rounded\">
                                                        <div class=\"single-comment justify-content-between d-flex\">
                                                            <div class=\"user justify-content-between d-flex\">
                                                                <div class=\"thumb\">
                                                                    <img src=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute($this->getAttribute($context["R"], "user", []), "photo", []))), "html", null, true);
                    echo " \" alt=\"\">
                                                                </div>
                                                                <div class=\"desc\">
                                                                    <p class=\"comment\">
                                                                        ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["R"], "text", []), "html", null, true);
                    echo "
                                                                    </p>
                                                                    <div class=\"d-flex justify-content-between\">
                                                                        <div class=\"d-flex align-items-center\">
                                                                            <h5>
                                                                                <a>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["R"], "user", []), "username", []), "html", null, true);
                    echo "</a>
                                                                            </h5>
                                                                            <p class=\"date\">";
                    // line 114
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["R"], "date", []), "d F Y"), "html", null, true);
                    echo "</p>

                                                                            <div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
                    // line 123
                    if (($this->getAttribute($this->getAttribute($context["R"], "user", []), "id", []) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                        // line 124
                        echo "
                                                            <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes ";
                        // line 125
                        echo twig_escape_filter($this->env, $this->getAttribute($context["R"], "point", []), "html", null, true);
                        echo "</span>
                                                            <a href=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LikeReplyFront", ["idR" => $this->getAttribute($context["R"], "id", [])], true), "html", null, true);
                        echo "\"> <i class=\"fa fa-heart\"></i></span> </a>
                                                            </span>
                                                        ";
                    } else {
                        // line 129
                        echo "                                                            <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["R"], "point", []), "html", null, true);
                        echo "</span> </span>

                                                        ";
                    }
                    // line 132
                    echo "
                                                        ";
                    // line 133
                    if (($this->getAttribute($this->getAttribute($context["R"], "user", []), "id", []) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", []))) {
                        // line 134
                        echo "                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteReplyFront", ["idR" => $this->getAttribute($context["R"], "id", [])], true), "html", null, true);
                        echo "\"> <span class=\"badge badge-pill badge-danger\">Delete</span></a>
                                                        ";
                    }
                    // line 136
                    echo "                                                    </div>
                                                ";
                }
                // line 138
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['R'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br>

                            <form class=\"form-contact comment_form\" action=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("singleblogFront", ["id" => ($context["id"] ?? $this->getContext($context, "id")), "idU" => ($context["idU"] ?? $this->getContext($context, "idU"))]), "html", null, true);
            echo "\" id=\"commentForm\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <input name=\"commentid\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "id", []), "html", null, true);
            echo "\" hidden>
                              <textarea class=\"form-control w-100\" name=\"reply\" id=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "id", []), "html", null, true);
            echo "\" cols=\"30\" rows=\"2\" required
                                        placeholder=\"Write Reply\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"badge badge-pill badge-info\"> <span class=\"badge badge-pill badge-info\">Reply</span></button>
                                </div>
                            </form>

                         </div>

                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                    </div>

                <div class=\"comment-form\">
                    <h4>Leave a Comment</h4>
                    ";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cmt"] ?? $this->getContext($context, "cmt")), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"form-group\">

                                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cmt"] ?? $this->getContext($context, "cmt")), "text", []), 'widget', ["attr" => ["class" => "form-control w-100"]]);
        echo "
                                </div>
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <div>

                              ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cmt"] ?? $this->getContext($context, "cmt")), "Submit", []), 'widget', ["attr" => ["class" => "button button-contactForm btn_1 boxed-btn"]]);
        echo "

                            </div>
                        </div>
                    ";
        // line 188
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
        return array (  379 => 188,  372 => 184,  361 => 176,  353 => 171,  347 => 167,  326 => 152,  322 => 151,  315 => 147,  305 => 139,  299 => 138,  295 => 136,  289 => 134,  287 => 133,  284 => 132,  277 => 129,  271 => 126,  267 => 125,  264 => 124,  262 => 123,  250 => 114,  245 => 112,  237 => 107,  230 => 103,  224 => 99,  221 => 98,  217 => 97,  211 => 94,  203 => 89,  195 => 83,  189 => 81,  187 => 80,  184 => 79,  177 => 76,  171 => 73,  166 => 72,  164 => 71,  149 => 59,  144 => 57,  136 => 52,  129 => 48,  122 => 43,  118 => 42,  113 => 40,  91 => 21,  85 => 18,  77 => 15,  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
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
    <h3>{{ f.titre }}</h3>
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

                        <p class=\"excert\">
                            {{ f.description }}
                        </p>

                    </div>
                </div>
                <div class=\"navigation-top\">
                    <div class=\"d-sm-flex justify-content-between text-center\">

                        <div class=\"col-sm-4 text-center my-2 my-sm-0\">
                            <!-- <p class=\"comment-count\"><span class=\"align-middle\"><i class=\"fa fa-comment\"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class=\"social-icons\">

                        </ul>
                    </div>

                </div>

                <div class=\"comments-area\">
                    <li><a><i class=\"fa fa-comments\"></i> </a><h4 >{{nbC}} Comments</h4 ></li>

                    {% for com in c %}
                    <div class=\"comment-list\">
                        <div class=\"shadow-sm p-3 mb-5 bg-white rounded\">
                         <div class=\"single-comment justify-content-between d-flex\">
                            <div class=\"user justify-content-between d-flex\">
                                <div class=\"thumb\">
                                    <img src=\"{{ asset('uploads/post/' ~  com.user.photo) }} \" alt=\"\">
                                </div>
                                <div class=\"desc\">
                                    <p class=\"comment\">
                                        {{ com.text }}
                                    </p>
                                    <div class=\"d-flex justify-content-between\">
                                        <div class=\"d-flex align-items-center\">
                                            <h5>
                                                <a>{{ com.user.username }}</a>
                                            </h5>
                                            <p class=\"date\">{{com.date | date(\"d F Y\")}}</p>

                                        <div>


                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                              {% if  com.user.id != app.user.id %}
                             <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes {{ com.point }}</span>
                              <a href=\"{{ path('LikeCmtFront',{'idc':com.id},true) }}\"> <i class=\"fa fa-heart\"></i></span> </a>

                            {% else %}
                                <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes {{ com.point }}</span> </span>

                                {% endif %}

                            {% if  com.user.id == app.user.id %}
                                <a href=\"{{ path('deleteCmtFront',{'idc':com.id},true) }}\"> <span class=\"badge badge-pill badge-danger\">Delete</span></a>
                            {% endif %}
                            <br><br>

                            <div  id=\"accordion\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <h5 class=\"mb-0\">
                                            <button class=\"badge badge-dark\" data-toggle=\"collapse\" type=\"button\" data-target=\"#{{com.id}}\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                Replies
                                            </button>
                                        </h5>
                                    </div>
                                    <div id=\"{{com.id}}\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#\">
                                        <div class=\"card-body\">

                                            {% for R in reply %}
                                                {% if R.comment.id == com.id %}
                                                    <div class=\"shadow-none p-3 mb-5 bg-light rounded\">
                                                        <div class=\"single-comment justify-content-between d-flex\">
                                                            <div class=\"user justify-content-between d-flex\">
                                                                <div class=\"thumb\">
                                                                    <img src=\"{{ asset('uploads/post/' ~  R.user.photo) }} \" alt=\"\">
                                                                </div>
                                                                <div class=\"desc\">
                                                                    <p class=\"comment\">
                                                                        {{ R.text }}
                                                                    </p>
                                                                    <div class=\"d-flex justify-content-between\">
                                                                        <div class=\"d-flex align-items-center\">
                                                                            <h5>
                                                                                <a>{{ R.user.username }}</a>
                                                                            </h5>
                                                                            <p class=\"date\">{{R.date | date(\"d F Y\")}}</p>

                                                                            <div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {% if  R.user.id != app.user.id %}

                                                            <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes {{ R.point }}</span>
                                                            <a href=\"{{ path('LikeReplyFront',{'idR':R.id},true) }}\"> <i class=\"fa fa-heart\"></i></span> </a>
                                                            </span>
                                                        {% else %}
                                                            <span class=\"badge badge-pill badge-success\"> <span class=\"badge\">Likes {{ R.point }}</span> </span>

                                                        {% endif %}

                                                        {% if  R.user.id == app.user.id %}
                                                            <a href=\"{{ path('deleteReplyFront',{'idR':R.id},true) }}\"> <span class=\"badge badge-pill badge-danger\">Delete</span></a>
                                                        {% endif %}
                                                    </div>
                                                {% endif %}
                                            {% endfor %}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br>

                            <form class=\"form-contact comment_form\" action=\"{{ path('singleblogFront',{'id':id,'idU':idU})}}\" id=\"commentForm\">
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <input name=\"commentid\" value=\"{{ com.id }}\" hidden>
                              <textarea class=\"form-control w-100\" name=\"reply\" id=\"{{ com.id }}\" cols=\"30\" rows=\"2\" required
                                        placeholder=\"Write Reply\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"badge badge-pill badge-info\"> <span class=\"badge badge-pill badge-info\">Reply</span></button>
                                </div>
                            </form>

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


{% endblock %}", "@Pioneer/Blog/singleblog.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Blog\\singleblog.html.twig");
    }
}
