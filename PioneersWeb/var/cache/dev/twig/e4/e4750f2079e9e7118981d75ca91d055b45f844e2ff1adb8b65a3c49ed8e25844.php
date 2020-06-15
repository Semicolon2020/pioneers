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
class __TwigTemplate_0257055703e919b050befd7a3c45dd36f68d0db291e3c340e982dce64175d6cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 217
        echo "<!-- header-end -->
";
        // line 218
        $this->displayBlock('content', $context, $blocks);
        // line 266
        echo "
    </div>

</div>



";
        // line 273
        $this->displayBlock('footer', $context, $blocks);
        // line 373
        echo "

<!-- form itself end-->
<form id=\"test-form\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <div class=\"logo text-center\">
                <a href=\"#\">
                    <img src=\"";
        // line 381
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
        // line 411
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
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/modernizr-3.5.0.min.js\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/popper.min.js\"></script>
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/owl.carousel.min.js\"></script>
<script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/ajax-form.js\"></script>
<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/waypoints.min.js\"></script>
<script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.counterup.min.js\"></script>
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/scrollIt.js\"></script>
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.scrollUp.min.js\"></script>
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/wow.min.js\"></script>
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/nice-select.min.js\"></script>
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.slicknav.min.js\"></script>
<script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.magnific-popup.min.js\"></script>
<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/plugins.js\"></script>
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/gijgo.min.js\"></script>

<!--contact js-->
<script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/contact.js\"></script>
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.ajaxchimp.min.js\"></script>
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.form.js\"></script>
<script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.validate.min.js\"></script>
<script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/mail-script.js\"></script>

<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/main.js\"></script>
<script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.min.js\">
</script>
<script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/wow.min.js\"></script>
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.js\"></script>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "js/main.js\"></script>
";
        // line 487
        $this->displayBlock('Javascript', $context, $blocks);
        // line 514
        echo "

</body>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 59
        echo "<!-- header-start -->
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
                            <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_homepage");
        echo "\">
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
                                 <!--   <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_homepage");
        echo "\">home</a></li>  -->

                                    <li><a href=\"#\">Enfants <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=";
        // line 80
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("StatEval");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 82
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 84
        echo "                                                >Evaluation</a></li>

                                            <li><a href=";
        // line 86
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showSuiviF");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 88
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 90
        echo "                                                >PDF Suivis</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=
                                                 ";
        // line 95
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_homepage");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 97
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                ";
        }
        // line 99
        echo "                                            >Transport </a></li>

                                    <li><a href=\"#\">Rappel<i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=
                                                   ";
        // line 104
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rappel_ajouter");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 106
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 108
        echo "                                                >Ajouter Rappel</a></li>
                                            <li><a href=
                                                   ";
        // line 110
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listRappelAdmin");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 112
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 114
        echo "                                                >Affichage des Rappels</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=
                                      ";
        // line 119
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listallFront");
            echo "\"
                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 121
            echo "                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                        ";
        }
        // line 123
        echo "                                        >News </a></li>
                                    <li><a href=
                                           ";
        // line 125
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listRecAdmin");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 127
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                ";
        }
        // line 129
        echo "                                        >Réclamation<i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=
                                                   ";
        // line 132
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec_ajouter");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 134
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 136
        echo "                                                >Ajouter Réclamations</a></li>
                                            <li><a href=
                                                   ";
        // line 138
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mail");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 140
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 142
        echo "                                                >Mail</a></li>
                                        </ul>
                                    </li>

                                </ul>



                            </nav>
                        </div>
                    </div>

                    <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                        <div class=\"log_chat_area d-flex align-items-center\">
                         ";
        // line 156
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 157
            echo "                             <h5 class=\"login popup\"><i class=\"flaticon-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "  </h5>
                            <a href=\"";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"login popup\">  <span> log out</span> </a>

                         ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 161
            echo "
                            <a href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"login popup\"> <i class=\"flaticon-user\"></i>  <span>log in</span> </a>
                            <a href=\"";
            // line 163
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"login popup\"><span>Register</span></a>

                        ";
        }
        // line 166
        echo "                            ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["notif"]) || array_key_exists("notif", $context)))) {
            // line 167
            echo "                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">";
            // line 169
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
            echo "</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have ";
            // line 172
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
            echo " Notifications</p>
                                    </div>

                                    ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notif"] ?? $this->getContext($context, "notif")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 176
                echo "                                        ";
                if (($this->getAttribute($context["n"], "seen", []) == "0")) {
                    // line 177
                    echo "                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">

                                            <a href=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "link", []), "html", null, true);
                    echo "\" >
                                            <p>News: ";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "subject", []), "html", null, true);
                    echo "</p>
                                            <p>";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "message", []), "html", null, true);
                    echo "</p>
                                            <span class=\"date\">";
                    // line 186
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "date", []), "d F Y"), "html", null, true);
                    echo "</span>
                                            </a>
                                            <a href=\"";
                    // line 188
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
                // line 198
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 204
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 219
        echo "<div class=\"slider_area \">

    <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">



        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "illastrator_png\">
                        <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "img/banner/edu_ilastration.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"slider_info\">
                        <h3>Stay <br>
                            Connected   <br>
                            with your kids</h3>



                    </div>
                </div>

                <a href=";
        // line 243
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherfront");
            echo "\"
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 245
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                ";
        }
        // line 246
        echo " class=\"boxed_btn\">Cours</a>

                <a href=";
        // line 248
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherlfront");
            echo "\"
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 250
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                ";
        }
        // line 251
        echo " class=\"boxed_btn\">Livres</a>

                <a href=";
        // line 253
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("memory/index.html"), "html", null, true);
            echo "\"
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 255
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                ";
        }
        // line 256
        echo " class=\"boxed_btn\">Memory</a>

                <a href=";
        // line 258
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("casse/casse.html"), "html", null, true);
            echo "\"
                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 260
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                ";
        }
        // line 261
        echo " class=\"boxed_btn\">Casse</a>
            </div>

        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 274
        echo "
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
        // line 284
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 487
    public function block_Javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        // line 488
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
<!--contact js-->
<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 512
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
        return array (  1136 => 512,  1132 => 511,  1128 => 510,  1124 => 509,  1120 => 508,  1116 => 507,  1111 => 505,  1107 => 504,  1103 => 503,  1099 => 502,  1095 => 501,  1091 => 500,  1087 => 499,  1083 => 498,  1079 => 497,  1075 => 496,  1071 => 495,  1067 => 494,  1063 => 493,  1059 => 492,  1055 => 491,  1051 => 490,  1047 => 489,  1042 => 488,  1033 => 487,  934 => 284,  922 => 274,  913 => 273,  899 => 261,  893 => 260,  886 => 258,  882 => 256,  876 => 255,  869 => 253,  865 => 251,  859 => 250,  852 => 248,  848 => 246,  842 => 245,  835 => 243,  818 => 229,  814 => 228,  803 => 219,  794 => 218,  772 => 204,  765 => 199,  759 => 198,  746 => 188,  741 => 186,  737 => 185,  733 => 184,  729 => 183,  721 => 177,  718 => 176,  714 => 175,  708 => 172,  702 => 169,  698 => 167,  695 => 166,  689 => 163,  685 => 162,  682 => 161,  676 => 158,  671 => 157,  669 => 156,  653 => 142,  647 => 140,  640 => 138,  636 => 136,  630 => 134,  623 => 132,  618 => 129,  612 => 127,  605 => 125,  601 => 123,  595 => 121,  588 => 119,  581 => 114,  575 => 112,  568 => 110,  564 => 108,  558 => 106,  551 => 104,  544 => 99,  538 => 97,  531 => 95,  524 => 90,  518 => 88,  511 => 86,  507 => 84,  501 => 82,  494 => 80,  487 => 76,  476 => 68,  472 => 67,  468 => 66,  459 => 59,  450 => 58,  433 => 514,  431 => 487,  427 => 486,  420 => 482,  416 => 481,  412 => 480,  408 => 479,  403 => 477,  399 => 476,  394 => 474,  390 => 473,  386 => 472,  381 => 470,  376 => 468,  372 => 467,  367 => 465,  363 => 464,  358 => 462,  354 => 461,  350 => 460,  346 => 459,  342 => 458,  336 => 455,  332 => 454,  328 => 453,  324 => 452,  320 => 451,  316 => 450,  312 => 449,  308 => 448,  304 => 447,  300 => 446,  296 => 445,  292 => 444,  288 => 443,  284 => 442,  280 => 441,  276 => 440,  272 => 439,  268 => 438,  238 => 411,  205 => 381,  195 => 373,  193 => 273,  184 => 266,  182 => 218,  179 => 217,  177 => 58,  167 => 51,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  131 => 39,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  60 => 16,  53 => 12,  40 => 1,);
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
{% block header %}
<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid p-0\">
                <div class=\"row align-items-center no-gutters\">
                    <div class=\"col-xl-2 col-lg-2\">
                        <div class=\"{{ asset('front/') }}logo-img\">
                            <a href=\"{{ path('back_homepage') }}\">
                                <img src=\"{{ asset('front/') }}img/logo.png\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-7\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                 <!--   <li><a href=\"{{ path('back_homepage') }}\">home</a></li>  -->

                                    <li><a href=\"#\">Enfants <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href={% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('StatEval') }}\"
                                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                            {{ path('fos_user_security_login') }}
                                                        {% endif %}
                                                >Evaluation</a></li>

                                            <li><a href={% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('showSuiviF') }}\"
                                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                            {{ path('fos_user_security_login') }}
                                                        {% endif %}
                                                >PDF Suivis</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=
                                                 {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('transport_homepage') }}\"
                                                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                    {{ path('fos_user_security_login') }}
                                                {% endif %}
                                            >Transport </a></li>

                                    <li><a href=\"#\">Rappel<i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=
                                                   {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('rappel_ajouter') }}\"
                                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                            {{ path('fos_user_security_login') }}
                                                        {% endif %}
                                                >Ajouter Rappel</a></li>
                                            <li><a href=
                                                   {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('listRappelAdmin') }}\"
                                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                            {{ path('fos_user_security_login') }}
                                                        {% endif %}
                                                >Affichage des Rappels</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=
                                      {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('listallFront') }}\"
                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                            {{ path('fos_user_security_login') }}
                                        {% endif %}
                                        >News </a></li>
                                    <li><a href=
                                           {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('listRecAdmin') }}\"
                                                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                    {{ path('fos_user_security_login') }}
                                                {% endif %}
                                        >Réclamation<i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=
                                                   {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('rec_ajouter') }}\"
                                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                            {{ path('fos_user_security_login') }}
                                                        {% endif %}
                                                >Ajouter Réclamations</a></li>
                                            <li><a href=
                                                   {% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('mail') }}\"
                                                        {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                                                            {{ path('fos_user_security_login') }}
                                                        {% endif %}
                                                >Mail</a></li>
                                        </ul>
                                    </li>

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

{% endblock %}
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



                    </div>
                </div>

                <a href={% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('afficherfront') }}\"
                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                    {{ path('fos_user_security_login') }}
                {% endif %} class=\"boxed_btn\">Cours</a>

                <a href={% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ path('afficherlfront') }}\"
                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                    {{ path('fos_user_security_login') }}
                {% endif %} class=\"boxed_btn\">Livres</a>

                <a href={% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ asset('memory/index.html') }}\"
                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                    {{ path('fos_user_security_login') }}
                {% endif %} class=\"boxed_btn\">Memory</a>

                <a href={% if is_granted('IS_AUTHENTICATED_FULLY')  %} \"{{ asset('casse/casse.html') }}\"
                {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
                    {{ path('fos_user_security_login') }}
                {% endif %} class=\"boxed_btn\">Casse</a>
            </div>

        </div>
        {% endblock %}

    </div>

</div>



{% block footer %}

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
{% endblock %}


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
