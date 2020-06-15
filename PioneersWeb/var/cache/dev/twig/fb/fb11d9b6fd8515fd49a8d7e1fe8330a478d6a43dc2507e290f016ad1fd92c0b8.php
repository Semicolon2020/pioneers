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

/* @Loisirs/Cours/back.html.twig */
class __TwigTemplate_4e9e2f8bb7fc851ee801d4d94b941328d3a541b4306c652cc6af5a9acc0a9bcf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'container' => [$this, 'block_container'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Cours/back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Loisirs/Cours/back.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Loisirs/Cours/back.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <center><h1 class=\"pb-2 display-4\">Gestion De Cours</h1></center><br><br>
    <div class=\"bradcam_area breadcam_bg overlay2\">

        <div class=\"button-group-area mt-40\">
            <center> <button><a href=\"http://localhost/PioneersApp/web/app_dev.php/ajoutercours\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Ajouter Cours</a></button> </center><br><br>
            <center> <button><a href=\"http://localhost/PioneersApp/web/app_dev.php/afficher\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Liste De Cours</a></button> </center>

        </div>

    <br><br><br><br>
        <center><h1 class=\"pb-2 display-4\">Gestion De Livre</h1></center><br><br>
        <div class=\"button-group-area mt-40\">
           <center><button><a href=\"http://localhost/PioneersApp/web/app_dev.php/ajouterlivre\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Ajouter Livre</a></button></center><br><br>
            <center><button><a href=\"http://localhost/PioneersApp/web/app_dev.php/afficherl\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Liste Des Livres</a></button></center>
        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Loisirs/Cours/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'  %}
{% block container %}
    <center><h1 class=\"pb-2 display-4\">Gestion De Cours</h1></center><br><br>
    <div class=\"bradcam_area breadcam_bg overlay2\">

        <div class=\"button-group-area mt-40\">
            <center> <button><a href=\"http://localhost/PioneersApp/web/app_dev.php/ajoutercours\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Ajouter Cours</a></button> </center><br><br>
            <center> <button><a href=\"http://localhost/PioneersApp/web/app_dev.php/afficher\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Liste De Cours</a></button> </center>

        </div>

    <br><br><br><br>
        <center><h1 class=\"pb-2 display-4\">Gestion De Livre</h1></center><br><br>
        <div class=\"button-group-area mt-40\">
           <center><button><a href=\"http://localhost/PioneersApp/web/app_dev.php/ajouterlivre\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Ajouter Livre</a></button></center><br><br>
            <center><button><a href=\"http://localhost/PioneersApp/web/app_dev.php/afficherl\" class=\"btn btn-secondary btn-lg btn-block\" type=\"button\">Liste Des Livres</a></button></center>
        </div>

    </div>


{% endblock %}
", "@Loisirs/Cours/back.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\LoisirsBundle\\Resources\\views\\Cours\\back.html.twig");
    }
}
