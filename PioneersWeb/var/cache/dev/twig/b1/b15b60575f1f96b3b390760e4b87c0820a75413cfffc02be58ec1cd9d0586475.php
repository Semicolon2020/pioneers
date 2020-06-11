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
class __TwigTemplate_e534afb296ebf6893d4e761c16e7fef2293b6ccbd2a069aa524cca005b4dcbc9 extends \Twig\Template
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
        // line 218
        echo "<!-- header-end -->
";
        // line 219
        $this->displayBlock('content', $context, $blocks);
        // line 246
        echo "
    </div>

</div>



";
        // line 253
        $this->displayBlock('footer', $context, $blocks);
        // line 353
        echo "

<!-- form itself end-->
<form id=\"test-form\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <div class=\"logo text-center\">
                <a href=\"#\">
                    <img src=\"";
        // line 361
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
        // line 391
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
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/modernizr-3.5.0.min.js\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/vendor/jquery-1.12.4.min.js\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/popper.min.js\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/owl.carousel.min.js\"></script>
<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/ajax-form.js\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/waypoints.min.js\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.counterup.min.js\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/scrollIt.js\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.scrollUp.min.js\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/wow.min.js\"></script>
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/nice-select.min.js\"></script>
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.slicknav.min.js\"></script>
<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.magnific-popup.min.js\"></script>
<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/plugins.js\"></script>
<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/gijgo.min.js\"></script>

<!--contact js-->
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/contact.js\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.ajaxchimp.min.js\"></script>
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.form.js\"></script>
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/jquery.validate.min.js\"></script>
<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/mail-script.js\"></script>

<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "js/main.js\"></script>
<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/slick/slick.min.js\">
</script>
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/wow/wow.min.js\"></script>
<script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/animsition/animsition.min.js\"></script>
<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/"), "html", null, true);
        echo "js/main.js\"></script>
";
        // line 467
        $this->displayBlock('Javascript', $context, $blocks);
        // line 494
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
        // line 126
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listRecAdmin");
            echo "\"
                                                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 128
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                ";
        }
        // line 130
        echo "                                        >Réclamation<i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=
                                                   ";
        // line 133
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec_ajouter");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 135
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 137
        echo "                                                >Ajouter Réclamations</a></li>
                                            <li><a href=
                                                   ";
        // line 139
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mail");
            echo "\"
                                                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 141
            echo "                                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "
                                                        ";
        }
        // line 143
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
        // line 157
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 158
            echo "                             <h5 class=\"login popup\"><i class=\"flaticon-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "  </h5>
                            <a href=\"";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"login popup\">  <span> log out</span> </a>

                         ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 162
            echo "
                            <a href=\"";
            // line 163
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"login popup\"> <i class=\"flaticon-user\"></i>  <span>log in</span> </a>
                            <a href=\"";
            // line 164
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"login popup\"><span>Register</span></a>

                        ";
        }
        // line 167
        echo "                            ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && (isset($context["notif"]) || array_key_exists("notif", $context)))) {
            // line 168
            echo "                            <div class=\"noti__item js-item-menu\">
                                <i class=\"zmdi zmdi-notifications\"></i>
                                <span class=\"quantity\">";
            // line 170
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
            echo "</span>
                                <div class=\"notifi-dropdown js-dropdown\">
                                    <div class=\"notifi__title\">
                                        <p>You have ";
            // line 173
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []));
            echo " Notifications</p>
                                    </div>

                                    ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notif"] ?? $this->getContext($context, "notif")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 177
                echo "                                        ";
                if (($this->getAttribute($context["n"], "seen", []) == "0")) {
                    // line 178
                    echo "                                    <div class=\"notifi__item\">
                                        <div class=\"bg-c3 img-cir img-40\">
                                            <i class=\"zmdi zmdi-file-text\"></i>
                                        </div>
                                        <div class=\"content\">

                                            <a href=\"";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "link", []), "html", null, true);
                    echo "\" >
                                            <p>News: ";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "subject", []), "html", null, true);
                    echo "</p>
                                            <p>";
                    // line 186
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "message", []), "html", null, true);
                    echo "</p>
                                            <span class=\"date\">";
                    // line 187
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "notification", []), "date", []), "d F Y"), "html", null, true);
                    echo "</span>
                                            </a>
                                            <a href=\"";
                    // line 189
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
                // line 199
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 205
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

    // line 219
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 220
        echo "<div class=\"slider_area \">

    <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">



        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/"), "html", null, true);
        echo "illastrator_png\">
                        <img src=\"";
        // line 230
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

    // line 253
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 254
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
        // line 264
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

    // line 467
    public function block_Javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        // line 468
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
<!--contact js-->
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 492
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
        return array (  1065 => 492,  1061 => 491,  1057 => 490,  1053 => 489,  1049 => 488,  1045 => 487,  1040 => 485,  1036 => 484,  1032 => 483,  1028 => 482,  1024 => 481,  1020 => 480,  1016 => 479,  1012 => 478,  1008 => 477,  1004 => 476,  1000 => 475,  996 => 474,  992 => 473,  988 => 472,  984 => 471,  980 => 470,  976 => 469,  971 => 468,  962 => 467,  863 => 264,  851 => 254,  842 => 253,  816 => 230,  812 => 229,  801 => 220,  792 => 219,  770 => 205,  763 => 200,  757 => 199,  744 => 189,  739 => 187,  735 => 186,  731 => 185,  727 => 184,  719 => 178,  716 => 177,  712 => 176,  706 => 173,  700 => 170,  696 => 168,  693 => 167,  687 => 164,  683 => 163,  680 => 162,  674 => 159,  669 => 158,  667 => 157,  651 => 143,  645 => 141,  638 => 139,  634 => 137,  628 => 135,  621 => 133,  616 => 130,  610 => 128,  603 => 126,  598 => 123,  592 => 121,  585 => 119,  578 => 114,  572 => 112,  565 => 110,  561 => 108,  555 => 106,  548 => 104,  541 => 99,  535 => 97,  528 => 95,  521 => 90,  515 => 88,  508 => 86,  504 => 84,  498 => 82,  491 => 80,  484 => 76,  473 => 68,  468 => 66,  459 => 59,  450 => 58,  433 => 494,  431 => 467,  427 => 466,  420 => 462,  416 => 461,  412 => 460,  408 => 459,  403 => 457,  399 => 456,  394 => 454,  390 => 453,  386 => 452,  381 => 450,  376 => 448,  372 => 447,  367 => 445,  363 => 444,  358 => 442,  354 => 441,  350 => 440,  346 => 439,  342 => 438,  336 => 435,  332 => 434,  328 => 433,  324 => 432,  320 => 431,  316 => 430,  312 => 429,  308 => 428,  304 => 427,  300 => 426,  296 => 425,  292 => 424,  288 => 423,  284 => 422,  280 => 421,  276 => 420,  272 => 419,  268 => 418,  238 => 391,  205 => 361,  195 => 353,  193 => 253,  184 => 246,  182 => 219,  179 => 218,  177 => 58,  167 => 51,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  131 => 39,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  60 => 16,  53 => 12,  40 => 1,);
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
                            <a href=\"#\">
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
                        <a href=\"#\" class=\"boxed_btn\">Browse Our Courses</a>

                    </div>
                </div>
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
