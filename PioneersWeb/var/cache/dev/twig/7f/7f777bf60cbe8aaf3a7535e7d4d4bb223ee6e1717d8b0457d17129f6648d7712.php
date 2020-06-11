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

/* @mail/mail/mail.html.twig */
class __TwigTemplate_a64a5e2a37d621e38b37ac66ddb136b42bc43a970db414bcc49accfa15247875 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@mail/mail/mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@mail/mail/mail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@mail/mail/mail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3></h3>
    </div>
    <div class=\"createForm\"style=\" margin-top:-20px;margin-left:250px;width:60%\">
        <!-- Default box -->
        <div class=\"card\">
            <div class=\"card-header\">
                <center style=\"color:#2ddab8\"><h1>Envoyer un message!</h1></center>
            </div>
            <div class=\"card-body\">
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 16
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-success\" style=\"margin-left:72%;width: 30%\" data-toggle=\"modal\" data-backdrop=\"false\" data-target=\"#infos\" >Create</button>
                <div class=\"modal fade\" id=\"infos\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                    <span>&times;</span>
                                </button>
                                <h4 class=\"modal-title\">Success</h4>
                            </div>
                            <div class=\"modal-body\">
                                Message envoyé avec success, merci
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"  >Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec_homepage");
        echo "\"><button type=\"button\" class=\"btn btn-info\"style=\"margin-left:280px;width: 30%;margin-top:-65px\">Cancel</button></a>
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@mail/mail/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  103 => 37,  78 => 16,  76 => 15,  72 => 14,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"bradcam_area breadcam_bg overlay2\">
        <h3></h3>
    </div>
    <div class=\"createForm\"style=\" margin-top:-20px;margin-left:250px;width:60%\">
        <!-- Default box -->
        <div class=\"card\">
            <div class=\"card-header\">
                <center style=\"color:#2ddab8\"><h1>Envoyer un message!</h1></center>
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                {% form_theme form 'bootstrap_4_layout.html.twig' %}
                {{ form_widget(form) }}
                <button type=\"submit\" class=\"btn btn-success\" style=\"margin-left:72%;width: 30%\" data-toggle=\"modal\" data-backdrop=\"false\" data-target=\"#infos\" >Create</button>
                <div class=\"modal fade\" id=\"infos\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                                    <span>&times;</span>
                                </button>
                                <h4 class=\"modal-title\">Success</h4>
                            </div>
                            <div class=\"modal-body\">
                                Message envoyé avec success, merci
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"  >Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <a href=\"{{ path('rec_homepage') }}\"><button type=\"button\" class=\"btn btn-info\"style=\"margin-left:280px;width: 30%;margin-top:-65px\">Cancel</button></a>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
{% endblock %}

", "@mail/mail/mail.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\mailBundle\\Resources\\views\\mail\\mail.html.twig");
    }
}
