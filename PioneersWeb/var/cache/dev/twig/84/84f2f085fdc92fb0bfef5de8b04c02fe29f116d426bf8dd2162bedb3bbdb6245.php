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

/* @Pioneer/Blog/updateblog.html.twig */
class __TwigTemplate_c4effb2f66c5b9483c8dc0a7c57c001f528604bb2be92b9d2357f9ed999a7af3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/updateblog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Blog/updateblog.html.twig"));

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
    <title>Dashboard</title>

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
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"";
        // line 34
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
                    <li>
                        <a href=\"calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>News</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBlogAdmin");
        echo "\">Add</a>
                            </li>
                            <li>
                                <a href=\"register.html\">View</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
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
        // line 110
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
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Pages</a>
                    </li>
                    <li>
                        <a href=\"calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>News</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBlogAdmin");
        echo "\">Add</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listallBlogAdmin");
        echo "\">View</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
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
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</a>
                                                </h5>
                                                <span class=\"email\">";
        // line 197
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
        // line 215
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
        <div class=\"main-content\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    ";
        // line 232
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formupdate"] ?? $this->getContext($context, "formupdate")), 'form');
        echo "


                    <!-- END MAIN CONTENT-->
                    <!-- END PAGE CONTAINER-->
                </div>
                <div>

                </div>
            </div>

            <!-- Jquery JS-->
            <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/jquery-3.2.1.min.js\"></script>
            <!-- Bootstrap JS-->
            <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/popper.min.js\"></script>
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.js\"></script>
            <!-- Vendor JS       -->
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.min.js\">
            </script>
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/wow.min.js\"></script>
            <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.js\"></script>
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
            </script>
            <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.waypoints.min.js\"></script>
            <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.counterup.min.js\">
            </script>
            <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/circle-progress/circle-progress.min.js\"></script>
            <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
            <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/chartjs/Chart.bundle.min.js\"></script>
            <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.js\">
            </script>

            <!-- Main JS-->
            <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "js/main.js\"></script>

</body>

</html>
<!-- end document-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Blog/updateblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 265,  406 => 261,  402 => 260,  398 => 259,  394 => 258,  389 => 256,  385 => 255,  380 => 253,  376 => 252,  372 => 251,  367 => 249,  362 => 247,  358 => 246,  353 => 244,  338 => 232,  318 => 215,  297 => 197,  292 => 195,  284 => 190,  275 => 184,  269 => 181,  234 => 149,  228 => 146,  189 => 110,  165 => 89,  107 => 34,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  71 => 22,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  36 => 1,);
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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href=\"{{ asset('back/') }}css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('back/') }}vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"{{ asset('back/') }}vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
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
                    <li>
                        <a href=\"calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
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
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
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
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Pages</a>
                    </li>
                    <li>
                        <a href=\"calendar.html\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
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
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
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
                                        <img src=\"{{ asset('back/') }}images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">{{app.user.username}}</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('back/') }}images/icon/avatar-01.jpg\" alt=\"John Doe\" />
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
        <div class=\"main-content\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    {{ form(formupdate) }}


                    <!-- END MAIN CONTENT-->
                    <!-- END PAGE CONTAINER-->
                </div>
                <div>

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
", "@Pioneer/Blog/updateblog.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Blog\\updateblog.html.twig");
    }
}
