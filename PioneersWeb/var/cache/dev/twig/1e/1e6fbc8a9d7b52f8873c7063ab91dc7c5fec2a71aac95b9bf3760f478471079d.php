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

/* @Transport/back/bus/add.html.twig */
class __TwigTemplate_34a3b45aca4db2056d2de6258f53816c62a57a121f5188d198ca0334b2c1bed1 extends \Twig\Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/bus/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/bus/add.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Transport/back/bus/add.html.twig", 1);
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
        echo "<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-header\"></div>
                        <div class=\"card-body\">
                            <div class=\"card-title\">

                                <h3 class=\"text-center title-2\">Add Bus</h3>
                            </div>";
        // line 14
        echo twig_escape_filter($this->env, ($context["no"] ?? $this->getContext($context, "no")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["noo"] ?? $this->getContext($context, "noo")), "html", null, true);
        echo "
                            <hr>
                            <form action=\"\" method=\"post\">
                                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    <label  class=\"control-label mb-1\">Name</label>
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control", "maxlength" => "20", "pattern" => "^[a-zA-Z]+[0-9]*"]]);
        // line 21
        echo "
                                  </div>
                                <div class=\"form-group has-success\">
                                    <label  class=\"control-label mb-1\">Capacity</label>
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", []), 'widget', ["attr" => ["class" => "form-control", "pattern" => "[1-9][0-9]"]]);
        echo "
                                    <span class=\"help-block field-validation-valid\" data-valmsg-replace=\"true\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label  class=\"control-label mb-1\">Bus rider</label>
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "chauffeur", []), 'widget', ["attr" => ["class" => "form-control", "maxlength" => "20", "pattern" => "^[a-zA-Z]+[ ]*[a-zA-Z]*"]]);
        // line 31
        echo "
                                    <span class=\"help-block\"  data-valmsg-replace=\"true\"></span>
                                </div>
                                <div>
                                    <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                        <i class=\"fa fa-lock fa-lg\"></i>&nbsp;
                                        <span id=\"payment-button-amount\"> Save</span>
                                   </button>
                                </div>
                                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                            </form>
                        </div>
                    </div>
                </div>
            </div></div></div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Transport/back/bus/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  104 => 31,  102 => 30,  94 => 25,  88 => 21,  86 => 20,  80 => 17,  73 => 14,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'  %}
{% block content %}
<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-header\"></div>
                        <div class=\"card-body\">
                            <div class=\"card-title\">

                                <h3 class=\"text-center title-2\">Add Bus</h3>
                            </div>{{ no }}{{ noo }}
                            <hr>
                            <form action=\"\" method=\"post\">
                                {{ form_start(form) }}
                                <div class=\"form-group\">
                                    <label  class=\"control-label mb-1\">Name</label>
                                    {{ form_widget(form.name, {'attr': {'class': 'form-control','maxlength':'20',
                                        'pattern': '^[a-zA-Z]+[0-9]*'}}) }}
                                  </div>
                                <div class=\"form-group has-success\">
                                    <label  class=\"control-label mb-1\">Capacity</label>
                                    {{ form_widget(form.capacite, {'attr': {'class': 'form-control','pattern': '[1-9][0-9]'}}) }}
                                    <span class=\"help-block field-validation-valid\" data-valmsg-replace=\"true\"></span>
                                </div>
                                <div class=\"form-group\">
                                    <label  class=\"control-label mb-1\">Bus rider</label>
                                    {{ form_widget(form.chauffeur, {'attr': {'class': 'form-control','maxlength':'20',
                                                                     'pattern': '^[a-zA-Z]+[ ]*[a-zA-Z]*'}}) }}
                                    <span class=\"help-block\"  data-valmsg-replace=\"true\"></span>
                                </div>
                                <div>
                                    <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                        <i class=\"fa fa-lock fa-lg\"></i>&nbsp;
                                        <span id=\"payment-button-amount\"> Save</span>
                                   </button>
                                </div>
                                {{ form_end(form) }}
                            </form>
                        </div>
                    </div>
                </div>
            </div></div></div></div>
{% endblock %}", "@Transport/back/bus/add.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\back\\bus\\add.html.twig");
    }
}
