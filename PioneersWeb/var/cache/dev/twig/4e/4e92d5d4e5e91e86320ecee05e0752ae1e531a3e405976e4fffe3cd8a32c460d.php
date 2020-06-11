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

/* base2.html.twig */
class __TwigTemplate_eeeaf9774ca5907b1d11b32b5ec95704938bcaeb72fd3ba6ed777700ee6cb88a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "Admin</title>

    <!-- Fontfaces CSS-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/animate.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/style.css\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\" media=\"all\">

</head>

<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"#\">
                        <img src=\"\" alt=\"CoolAdmin\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>

                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Pages</a>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Activite</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_ajoutActivite");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Activite
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_afficherActivite");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Activite
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Evenement</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_ajoutEvenement");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Evenement
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_afficherEvenement");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Evenement
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Transport2_homepage");
        echo "\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>News</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBlogAdmin");
        echo "\">Add</a>
                            </li>
                            <li>
                                <a href=\"register.html\">View</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "images/icon/logo.png\" alt=\"Pioneers logo\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>

                    </li>
                    <li>
                        <a href=\"chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Evaluations</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEvaluation");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Add
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEvaluation");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i>View
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"far fa-check-square\"></i>Suivis</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSuivi");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Add
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showSuivi");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i>View
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Activite</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_ajoutActivite");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Activite
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_afficherActivite");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Activite
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Evenement</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_ajoutEvenement");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Evenement
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_afficherEvenement");
        echo "\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Evenement
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Transport2_homepage");
        echo "\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>News</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBlogAdmin");
        echo "\">Add</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listallBlogAdmin");
        echo "\">View</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">

                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "photo", []))), "html", null, true);
        echo "\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/post/" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "photo", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</a>
                                                </h5>
                                                <span class=\"email\">";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "email", []), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        ";
        // line 322
        $this->displayBlock('content', $context, $blocks);
        // line 473
        echo "        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.min.js\">
</script>
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/wow.min.js\"></script>
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.js\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "js/main.js\"></script>

</body>

</html>
<!-- end document-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 322
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 323
        echo "        <div class=\"main-content\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">

                    <div class=\"row m-t-25\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c1\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-account-o\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>10368</h2>
                                            <span>members online</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart1\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c2\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>388,688</h2>
                                            <span>items solid</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart2\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c3\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-calendar-note\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>1,086</h2>
                                            <span>this week</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart3\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c4\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-money\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>\$1,060,386</h2>
                                            <span>total earnings</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart4\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"au-card recent-report\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2\">recent reports</h3>
                                    <div class=\"chart-info\">
                                        <div class=\"chart-info__left\">
                                            <div class=\"chart-note\">
                                                <span class=\"dot dot--blue\"></span>
                                                <span>products</span>
                                            </div>
                                            <div class=\"chart-note mr-0\">
                                                <span class=\"dot dot--green\"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                        <div class=\"chart-info__right\">
                                            <div class=\"chart-statis\">
                                                    <span class=\"index incre\">
                                                        <i class=\"zmdi zmdi-long-arrow-up\"></i>25%</span>
                                                <span class=\"label\">products</span>
                                            </div>
                                            <div class=\"chart-statis mr-0\">
                                                    <span class=\"index decre\">
                                                        <i class=\"zmdi zmdi-long-arrow-down\"></i>10%</span>
                                                <span class=\"label\">services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"recent-report__chart\">
                                        <canvas id=\"recent-rep-chart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"au-card chart-percent-card\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2 tm-b-5\">char by %</h3>
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"chart-note-wrap\">
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--blue\"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--red\"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"percent-chart\">
                                                <canvas id=\"percent-chart\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 323,  596 => 322,  579 => 500,  572 => 496,  568 => 495,  564 => 494,  560 => 493,  555 => 491,  551 => 490,  546 => 488,  542 => 487,  538 => 486,  533 => 484,  528 => 482,  524 => 481,  519 => 479,  511 => 473,  509 => 322,  492 => 308,  471 => 290,  466 => 288,  456 => 283,  447 => 277,  441 => 274,  408 => 244,  402 => 241,  391 => 233,  381 => 226,  373 => 221,  359 => 210,  351 => 205,  336 => 193,  328 => 188,  312 => 175,  304 => 170,  280 => 149,  258 => 130,  247 => 122,  236 => 114,  228 => 109,  214 => 98,  206 => 93,  155 => 45,  149 => 42,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  75 => 22,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  51 => 13,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>{{ app.user.username }}Admin</title>

    <!-- Fontfaces CSS-->
    <link href=\"{{ asset('back/') }}css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"{{ asset('back/') }}vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/animate.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/') }}css/style.css\">
    <link href=\"{{ asset('back/') }}vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"{{ asset('back/') }}css/theme.css\" rel=\"stylesheet\" media=\"all\">

</head>

<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"#\">
                        <img src=\"\" alt=\"CoolAdmin\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>

                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Pages</a>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Activite</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('activite_ajoutActivite')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Activite
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('activite_afficherActivite')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Activite
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Evenement</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('evenement_ajoutEvenement')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Evenement
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('evenement_afficherEvenement')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Evenement
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"{{ path('Transport2_homepage') }}\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>News</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{{ path('addBlogAdmin') }}\">Add</a>
                            </li>
                            <li>
                                <a href=\"register.html\">View</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"{{ asset('back/') }}images/icon/logo.png\" alt=\"Pioneers logo\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>

                    </li>
                    <li>
                        <a href=\"chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Evaluations</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('addEvaluation') }}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Add
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('showEvaluation') }}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i>View
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"far fa-check-square\"></i>Suivis</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('addSuivi') }}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Add
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('showSuivi') }}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i>View
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Activite</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('activite_ajoutActivite')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Activite
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('activite_afficherActivite')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Activite
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Evenement</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('evenement_ajoutEvenement')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Ajouter Evenement
                                </a>
                            </li>
                            <li>
                                <a class=\"nav-link \"href=\"{{ path('evenement_afficherEvenement')}}\" >
                                    <i class=\"ni ni-single-02 text-yellow\"></i> Afficher Evenement
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('Transport2_homepage') }}\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>News</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"{{ path('addBlogAdmin') }}\">Add</a>
                            </li>
                            <li>
                                <a href=\"{{ path('listallBlogAdmin') }}\">View</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">

                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('uploads/post/' ~  app.user.photo) }}\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">{{app.user.username}}</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('uploads/post/' ~  app.user.photo) }}\" alt=\"{{app.user.username}}\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">{{app.user.username}}</a>
                                                </h5>
                                                <span class=\"email\">{{app.user.email}}</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        {% block content %}
        <div class=\"main-content\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">

                    <div class=\"row m-t-25\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c1\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-account-o\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>10368</h2>
                                            <span>members online</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart1\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c2\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>388,688</h2>
                                            <span>items solid</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart2\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c3\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-calendar-note\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>1,086</h2>
                                            <span>this week</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart3\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c4\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-money\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>\$1,060,386</h2>
                                            <span>total earnings</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart4\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"au-card recent-report\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2\">recent reports</h3>
                                    <div class=\"chart-info\">
                                        <div class=\"chart-info__left\">
                                            <div class=\"chart-note\">
                                                <span class=\"dot dot--blue\"></span>
                                                <span>products</span>
                                            </div>
                                            <div class=\"chart-note mr-0\">
                                                <span class=\"dot dot--green\"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                        <div class=\"chart-info__right\">
                                            <div class=\"chart-statis\">
                                                    <span class=\"index incre\">
                                                        <i class=\"zmdi zmdi-long-arrow-up\"></i>25%</span>
                                                <span class=\"label\">products</span>
                                            </div>
                                            <div class=\"chart-statis mr-0\">
                                                    <span class=\"index decre\">
                                                        <i class=\"zmdi zmdi-long-arrow-down\"></i>10%</span>
                                                <span class=\"label\">services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"recent-report__chart\">
                                        <canvas id=\"recent-rep-chart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"au-card chart-percent-card\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2 tm-b-5\">char by %</h3>
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"chart-note-wrap\">
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--blue\"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--red\"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"percent-chart\">
                                                <canvas id=\"percent-chart\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->


        {% endblock  %}
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src=\"{{ asset('back/') }}vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"{{ asset('back/') }}vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"{{ asset('back/') }}vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"{{ asset('back/') }}vendor/slick/slick.min.js\">
</script>
<script src=\"{{ asset('back/') }}vendor/wow/wow.min.js\"></script>
<script src=\"{{ asset('back/') }}vendor/animsition/animsition.min.js\"></script>
<script src=\"{{ asset('back/') }}vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"{{ asset('back/') }}vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"{{ asset('back/') }}vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"{{ asset('back/') }}vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"{{ asset('back/') }}vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"{{ asset('back/') }}vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"{{ asset('back/') }}vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"{{ asset('back/') }}js/main.js\"></script>

</body>

</html>
<!-- end document-->
", "base2.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\app\\Resources\\views\\base2.html.twig");
    }
}