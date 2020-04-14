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
class __TwigTemplate_f4551aa65f698cce40b6b81a67d1926a63c34f081a08f6683a52336aed010582 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "

    <!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Pioneers</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/gijgo.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/animate.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/slicknav.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "css/style.css\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "logo-img\">
                            <a href=\"#\">
                                <img src=\"";
        // line 51
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
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_homepage");
        echo "\">home</a></li>
                                    <li><a href=\"Courses.html\">Courses</a></li>
                                    <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"course_details.html\">course details</a></li>
                                            <li><a href=\"elements.html\">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listallFront");
        echo "\">News <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">blog</a></li>
                                            <li><a href=\"single-blog.html\">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>

                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"log_chat_area d-flex align-items-center\">
                         ";
        // line 83
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 84
            echo "                             <h5 class=\"login popup\"><i class=\"flaticon-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "  </h5>
                            <a href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"login popup\">  <span>  log out</span> </a>

                         ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 88
            echo "
                            <a href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"login popup\"> <i class=\"flaticon-user\"></i>  <span>log in</span> </a>
                            <a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"login popup\"><span>Register</span></a>

                        ";
        }
        // line 93
        echo "
                        </div>
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
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 135
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
        // line 153
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
        // line 248
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
        // line 278
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
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/modernizr-3.5.0.min.js\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/popper.min.js\"></script>
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/owl.carousel.min.js\"></script>
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/ajax-form.js\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/waypoints.min.js\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.counterup.min.js\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/scrollIt.js\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.scrollUp.min.js\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/wow.min.js\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/nice-select.min.js\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.slicknav.min.js\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.magnific-popup.min.js\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/plugins.js\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/gijgo.min.js\"></script>

<!--contact js-->
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/contact.js\"></script>
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.ajaxchimp.min.js\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.form.js\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.validate.min.js\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/mail-script.js\"></script>

<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/main.js\"></script>
</body>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 109
        echo "<div class=\"slider_area \">

    <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">



        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "illastrator_png\">
                        <img src=\"";
        // line 119
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
        return array (  531 => 119,  527 => 118,  516 => 109,  507 => 108,  490 => 331,  485 => 329,  481 => 328,  477 => 327,  473 => 326,  469 => 325,  463 => 322,  459 => 321,  455 => 320,  451 => 319,  447 => 318,  443 => 317,  439 => 316,  435 => 315,  431 => 314,  427 => 313,  423 => 312,  419 => 311,  415 => 310,  411 => 309,  407 => 308,  403 => 307,  399 => 306,  395 => 305,  365 => 278,  332 => 248,  234 => 153,  214 => 135,  212 => 108,  195 => 93,  189 => 90,  185 => 89,  182 => 88,  176 => 85,  171 => 84,  169 => 83,  151 => 68,  139 => 59,  128 => 51,  123 => 49,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  52 => 14,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

    <!doctype html>
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
                                    <li><a href=\"Courses.html\">Courses</a></li>
                                    <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"course_details.html\">course details</a></li>
                                            <li><a href=\"elements.html\">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"{{ path('listallFront') }}\">News <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">blog</a></li>
                                            <li><a href=\"single-blog.html\">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>

                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"log_chat_area d-flex align-items-center\">
                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                             <h5 class=\"login popup\"><i class=\"flaticon-user\"></i> {{app.user.username}}  </h5>
                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"login popup\">  <span>  log out</span> </a>

                         {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}

                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"login popup\"> <i class=\"flaticon-user\"></i>  <span>log in</span> </a>
                            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"login popup\"><span>Register</span></a>

                        {% endif %}

                        </div>
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
</body>

</html>


", "base.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\PioneersWeb\\app\\Resources\\views\\base.html.twig");
    }
}
