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

/* base.html.twig */
class __TwigTemplate_f038bac1a262a5455aa48f864b82cc7d0cca6788813337177d2061aa1fe8f174 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'Javascript' => [$this, 'block_Javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Pioneers</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/hbib.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/animate.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/style.css\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\" media=\"all\">
</head>

<body>
<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid p-0\">
                <div class=\"row align-items-center no-gutters\">
                    <div class=\"col-xl-2 col-lg-2\">
                        <div class=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "logo-img\">
                            <a href=\"#\">
                                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/logo.png\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-7\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                    <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_homepage");
        echo "\">home</a></li>
                                    <li><a href=\"#\">Courses</a></li>
                                    <li><a href=
                                                 ";
        // line 79
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_homepage");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 81
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                ";
        }
        // line 83
        echo "                                            >Transport </a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=
                                      ";
        // line 86
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listallFront");
            echo "\"
                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 88
            echo "                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                        ";
        }
        // line 90
        echo "                                        >News </a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"log_chat_area d-flex align-items-center\">
                         ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 100
            echo "                             <h5 class=\"login popup\"><i class=\"flaticon-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "  </h5>
                            <a href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"login popup\">  <span> log out</span> </a>

                         ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 104
            echo "
                            <a href=\"";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"login popup\"> <i class=\"flaticon-user\"></i>  <span>log in</span> </a>
                            <a href=\"";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"login popup\"><span>Register</span></a>

                        ";
        }
        // line 109
        echo "                            ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["notif"]) || array_key_exists("notif", $context)))) {
            // line 110
            echo "                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">";
            // line 112
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
            echo "</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have ";
            // line 115
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
            echo " Notifications</p>
                                    </div>

                                    ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notif"] ?? $this->getContext($context, "notif")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 119
                echo "                                        ";
                if (($this->getAttribute($context["n"], "seen", []) == "0")) {
                    // line 120
                    echo "                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">

                                            <a href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "link", []), "html", null, true);
                    echo "\" >
                                            <p>News: ";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "subject", []), "html", null, true);
                    echo "</p>
                                            <p>";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "message", []), "html", null, true);
                    echo "</p>
                                            <span class=\"date\">";
                    // line 129
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "date", []), "d F Y"), "html", null, true);
                    echo "</span>
                                            </a>
                                            <a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MarkSeen", ["idNotif" => $this->getAttribute($context["n"], "id", [])], true), "html", null, true);
                    echo "\">
                                            <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                                <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                            </svg>
                                               Mark as seen</a>

                                        </div>
                                    </div>
                                    ";
                }
                // line 141
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 147
        echo "

                    </div>
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- header-end -->
";
        // line 161
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "
    </div>

</div>





<!-- footer -->
<footer class=\"footer footer_bg_1\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-6 col-lg-4\">
                    <div class=\"footer_widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\">
                                <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/logo.png\" alt=\"\">
                            </a>
                        </div>
                        <p>
                            Firmament morning sixth subdue darkness creeping gathered divide our let god moving.
                            Moving in fourth air night bring upon it beast let you dominion likeness open place day
                            great.
                        </p>
                        <div class=\"socail_links\">
                            <ul>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-instagram\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-youtube-play\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-2 offset-xl-1 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">

                        </h3>
                        <ul>

                        </ul>

                    </div>
                </div>
                <div class=\"col-xl-2 col-md-6 col-lg-2\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">

                        </h3>
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Address
                        </h3>

                        <p>
                            200, D-block, Green lane USA <br>
                            +10 367 467 8934 <br>
                            Pioneers@contact.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy-right_text\">
        <div class=\"container\">
            <div class=\"footer_border\"></div>
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <p class=\"copy_right text-center\">

                        Pioneers made it with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> .

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<!-- form itself end-->
<form id=\"test-form\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <div class=\"logo text-center\">
                <a href=\"#\">
                    <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/form-logo.png\" alt=\"\">
                </a>
            </div>
            <h3>Sign in</h3>
            <form action=\"#\">
                <div class=\"row\">
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"email\" placeholder=\"Enter email\">
                    </div>
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"password\" placeholder=\"Password\">
                    </div>
                    <div class=\"col-xl-12\">
                        <button type=\"submit\" class=\"boxed_btn_orange\">Sign in</button>
                    </div>
                </div>
            </form>
            <p class=\"doen_have_acc\">Don’t have an account? <a class=\"dont-hav-acc\" href=\"#test-form2\">Sign Up</a>
            </p>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id=\"test-form2\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <div class=\"logo text-center\">
                <a href=\"#\">
                    <img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/form-logo.png\" alt=\"\">
                </a>
            </div>
            <h3>Resistration</h3>
            <form action=\"#\">
                <div class=\"row\">
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"email\" placeholder=\"Enter email\">
                    </div>
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"password\" placeholder=\"Password\">
                    </div>
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"Password\" placeholder=\"Confirm password\">
                    </div>
                    <div class=\"col-xl-12\">
                        <button type=\"submit\" class=\"boxed_btn_orange\">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->


<!-- JS here -->
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/modernizr-3.5.0.min.js\"></script>
<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/popper.min.js\"></script>
<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/owl.carousel.min.js\"></script>
<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
<script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/ajax-form.js\"></script>
<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/waypoints.min.js\"></script>
<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.counterup.min.js\"></script>
<script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/scrollIt.js\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.scrollUp.min.js\"></script>
<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/wow.min.js\"></script>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/nice-select.min.js\"></script>
<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.slicknav.min.js\"></script>
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.magnific-popup.min.js\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/plugins.js\"></script>
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/gijgo.min.js\"></script>

<!--contact js-->
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/contact.js\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.ajaxchimp.min.js\"></script>
<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.form.js\"></script>
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.validate.min.js\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/mail-script.js\"></script>

<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/main.js\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.min.js\">
</script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/wow.min.js\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.js\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "js/main.js\"></script>
";
        // line 408
        $this->displayBlock('Javascript', $context, $blocks);
        // line 435
        echo "

</body>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 161
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 162
        echo "<div class=\"slider_area \">

    <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">



        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "illastrator_png\">
                        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/banner/edu_ilastration.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"slider_info\">
                        <h3>Stay <br>
                            Connected   <br>
                            with your kids</h3>
                        <a href=\"#\" class=\"boxed_btn\">Browse Our Courses</a>

                    </div>
                </div>
            </div>

        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 408
    public function block_Javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        // line 409
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
<!--contact js-->
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 433,  881 => 432,  877 => 431,  873 => 430,  869 => 429,  865 => 428,  860 => 426,  856 => 425,  852 => 424,  848 => 423,  844 => 422,  840 => 421,  836 => 420,  832 => 419,  828 => 418,  824 => 417,  820 => 416,  816 => 415,  812 => 414,  808 => 413,  804 => 412,  800 => 411,  796 => 410,  791 => 409,  782 => 408,  756 => 172,  752 => 171,  741 => 162,  732 => 161,  715 => 435,  713 => 408,  709 => 407,  702 => 403,  698 => 402,  694 => 401,  690 => 400,  685 => 398,  681 => 397,  676 => 395,  672 => 394,  668 => 393,  663 => 391,  658 => 389,  654 => 388,  649 => 386,  645 => 385,  640 => 383,  636 => 382,  632 => 381,  628 => 380,  624 => 379,  618 => 376,  614 => 375,  610 => 374,  606 => 373,  602 => 372,  598 => 371,  594 => 370,  590 => 369,  586 => 368,  582 => 367,  578 => 366,  574 => 365,  570 => 364,  566 => 363,  562 => 362,  558 => 361,  554 => 360,  550 => 359,  520 => 332,  487 => 302,  388 => 206,  368 => 188,  366 => 161,  350 => 147,  343 => 142,  337 => 141,  324 => 131,  319 => 129,  315 => 128,  311 => 127,  307 => 126,  299 => 120,  296 => 119,  292 => 118,  286 => 115,  280 => 112,  276 => 110,  273 => 109,  267 => 106,  263 => 105,  260 => 104,  254 => 101,  249 => 100,  247 => 99,  236 => 90,  230 => 88,  223 => 86,  218 => 83,  212 => 81,  205 => 79,  199 => 76,  188 => 68,  183 => 66,  165 => 51,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  129 => 39,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  58 => 16,  51 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Pioneers</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front/') }}img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/hbib.css')}}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
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
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
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

<body>
<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid p-0\">
                <div class=\"row align-items-center no-gutters\">
                    <div class=\"col-xl-2 col-lg-2\">
                        <div class=\"{{ asset('front/') }}logo-img\">
                            <a href=\"#\">
                                <img src=\"{{ asset('front/') }}img/logo.png\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-7\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                    <li><a href=\"{{ path('back_homepage') }}\">home</a></li>
                                    <li><a href=\"#\">Courses</a></li>
                                    <li><a href=
                                                 {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('transport_homepage') }}\"
                                                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                    {{ path('fos_user_security_login') }}
                                                {% endif %}
                                            >Transport </a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=
                                      {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('listallFront') }}\"
                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                            {{ path('fos_user_security_login') }}
                                        {% endif %}
                                        >News </a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"log_chat_area d-flex align-items-center\">
                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                             <h5 class=\"login popup\"><i class=\"flaticon-user\"></i> {{app.user.username}}  </h5>
                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"login popup\">  <span> log out</span> </a>

                         {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}

                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"login popup\"> <i class=\"flaticon-user\"></i>  <span>log in</span> </a>
                            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"login popup\"><span>Register</span></a>

                        {% endif %}
                            {% if is_granted('IS_AUTHENTICATED_FULLY') and notif is defined  %}
                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">{{ mgilet_notification_unseen_count(app.user) }}</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have {{ mgilet_notification_unseen_count(app.user) }} Notifications</p>
                                    </div>

                                    {% for n in notif %}
                                        {% if n.seen=='0' %}
                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">

                                            <a href=\"{{ n.notification.link }}\" >
                                            <p>News: {{ n.notification.subject }}</p>
                                            <p>{{ n.notification.message }}</p>
                                            <span class=\"date\">{{ n.notification.date | date(\"d F Y\") }}</span>
                                            </a>
                                            <a href=\"{{ path('MarkSeen',{'idNotif':n.id},true) }}\">
                                            <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                                <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                            </svg>
                                               Mark as seen</a>

                                        </div>
                                    </div>
                                    {% endif %}
                                    {% endfor %}

                                </div>
                            </div>
                        </div>
                        {% endif %}


                    </div>
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- header-end -->
{% block content %}
<div class=\"slider_area \">

    <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">



        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"{{ asset('front/') }}illastrator_png\">
                        <img src=\"{{ asset('front/') }}img/banner/edu_ilastration.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"slider_info\">
                        <h3>Stay <br>
                            Connected   <br>
                            with your kids</h3>
                        <a href=\"#\" class=\"boxed_btn\">Browse Our Courses</a>

                    </div>
                </div>
            </div>

        </div>
        {% endblock %}

    </div>

</div>





<!-- footer -->
<footer class=\"footer footer_bg_1\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-6 col-lg-4\">
                    <div class=\"footer_widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\">
                                <img src=\"{{ asset('front/') }}img/logo.png\" alt=\"\">
                            </a>
                        </div>
                        <p>
                            Firmament morning sixth subdue darkness creeping gathered divide our let god moving.
                            Moving in fourth air night bring upon it beast let you dominion likeness open place day
                            great.
                        </p>
                        <div class=\"socail_links\">
                            <ul>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-instagram\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-youtube-play\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-2 offset-xl-1 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">

                        </h3>
                        <ul>

                        </ul>

                    </div>
                </div>
                <div class=\"col-xl-2 col-md-6 col-lg-2\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">

                        </h3>
                        <ul>

                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Address
                        </h3>

                        <p>
                            200, D-block, Green lane USA <br>
                            +10 367 467 8934 <br>
                            Pioneers@contact.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy-right_text\">
        <div class=\"container\">
            <div class=\"footer_border\"></div>
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <p class=\"copy_right text-center\">

                        Pioneers made it with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> .

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<!-- form itself end-->
<form id=\"test-form\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <div class=\"logo text-center\">
                <a href=\"#\">
                    <img src=\"{{ asset('front/') }}img/form-logo.png\" alt=\"\">
                </a>
            </div>
            <h3>Sign in</h3>
            <form action=\"#\">
                <div class=\"row\">
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"email\" placeholder=\"Enter email\">
                    </div>
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"password\" placeholder=\"Password\">
                    </div>
                    <div class=\"col-xl-12\">
                        <button type=\"submit\" class=\"boxed_btn_orange\">Sign in</button>
                    </div>
                </div>
            </form>
            <p class=\"doen_have_acc\">Don’t have an account? <a class=\"dont-hav-acc\" href=\"#test-form2\">Sign Up</a>
            </p>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id=\"test-form2\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <div class=\"logo text-center\">
                <a href=\"#\">
                    <img src=\"{{ asset('front/') }}img/form-logo.png\" alt=\"\">
                </a>
            </div>
            <h3>Resistration</h3>
            <form action=\"#\">
                <div class=\"row\">
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"email\" placeholder=\"Enter email\">
                    </div>
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"password\" placeholder=\"Password\">
                    </div>
                    <div class=\"col-xl-12 col-md-12\">
                        <input type=\"Password\" placeholder=\"Confirm password\">
                    </div>
                    <div class=\"col-xl-12\">
                        <button type=\"submit\" class=\"boxed_btn_orange\">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->


<!-- JS here -->
<script src=\"{{ asset('front/') }}js/vendor/modernizr-3.5.0.min.js\"></script>
<script src=\"{{ asset('front/') }}js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"{{ asset('front/') }}js/popper.min.js\"></script>
<script src=\"{{ asset('front/') }}js/bootstrap.min.js\"></script>
<script src=\"{{ asset('front/') }}js/owl.carousel.min.js\"></script>
<script src=\"{{ asset('front/') }}js/isotope.pkgd.min.js\"></script>
<script src=\"{{ asset('front/') }}js/ajax-form.js\"></script>
<script src=\"{{ asset('front/') }}js/waypoints.min.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.counterup.min.js\"></script>
<script src=\"{{ asset('front/') }}js/imagesloaded.pkgd.min.js\"></script>
<script src=\"{{ asset('front/') }}js/scrollIt.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.scrollUp.min.js\"></script>
<script src=\"{{ asset('front/') }}js/wow.min.js\"></script>
<script src=\"{{ asset('front/') }}js/nice-select.min.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.slicknav.min.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.magnific-popup.min.js\"></script>
<script src=\"{{ asset('front/') }}js/plugins.js\"></script>
<script src=\"{{ asset('front/') }}js/gijgo.min.js\"></script>

<!--contact js-->
<script src=\"{{ asset('front/') }}js/contact.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.ajaxchimp.min.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.form.js\"></script>
<script src=\"{{ asset('front/') }}js/jquery.validate.min.js\"></script>
<script src=\"{{ asset('front/') }}js/mail-script.js\"></script>

<script src=\"{{ asset('front/') }}js/main.js\"></script>
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
{% block Javascript %}
<script src=\"{{ asset('front/js/vendor/modernizr-3.5.0.min.js')}}\" ></script>
<script src=\"{{ asset('front/js/vendor/jquery-1.12.4.min.js')}}\"></script>
<script src=\"{{ asset('front/js/popper.min.js')}}\"></script>
<script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('front/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('front/js/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{ asset('front/js/ajax-form.js')}}\"></script>
<script src=\"{{ asset('front/js/waypoints.min.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.counterup.min.js')}}\"></script>
<script src=\"{{ asset('front/js/imagesloaded.pkgd.min.js')}}\"></script>
<script src=\"{{ asset('front/js/scrollIt.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.scrollUp.min.js')}}\"></script>
<script src=\"{{ asset('front/js/wow.min.js')}}\"></script>
<script src=\"{{ asset('front/js/nice-select.min.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.slicknav.min.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.magnific-popup.min.js')}}\"></script>
<script src=\"{{ asset('js/plugins.js')}}\"></script>
<script src=\"{{ asset('front/js/gijgo.min.js')}}\"></script>
<!--contact js-->
<script src=\"{{ asset('front/js/contact.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.ajaxchimp.min.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.form.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.validate.min.js')}}\"></script>
<script src=\"{{ asset('front/js/mail-script.js')}}\"></script>
<script src=\"{{ asset('front/js/main.js')}}\"></script>
{% endblock %}


</body>

</html>


", "base.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\app\\Resources\\views\\base.html.twig");
    }
}
