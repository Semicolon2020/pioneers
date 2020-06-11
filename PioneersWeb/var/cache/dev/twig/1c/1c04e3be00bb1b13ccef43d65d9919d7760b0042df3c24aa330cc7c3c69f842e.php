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

/* @Pioneer/Evaluation/editE.html.twig */
class __TwigTemplate_66ce5cc71484d4db17c55b34530ee2c5dcd4167054dd1e8b72ec5ae396346765 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Evaluation/editE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Evaluation/editE.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Pioneer/Evaluation/editE.html.twig", 1);
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
        echo "
<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">

            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Update Evaluations</strong>
                    </div>

                    <div class=\"card-body card-block\">
                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formupdate"] ?? $this->getContext($context, "formupdate")), 'form_start');
        echo "


                        <div class=\"row form-group\">
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"text-input\" class=\" form-control-label\">Enfants</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formupdate"] ?? $this->getContext($context, "formupdate")), "idE", []), 'widget', ["attr" => ["class" => "dropdown-toggle btn btn-primary"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"textarea-input\" class=\" form-control-label\">Activités</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formupdate"] ?? $this->getContext($context, "formupdate")), "idAc", []), 'widget', ["attr" => ["class" => "dropdown-toggle btn btn-primary"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"textarea-input\" class=\" form-control-label\">Remarque</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formupdate"] ?? $this->getContext($context, "formupdate")), "Remarque", []), 'widget', ["attr" => ["class" => "dropdown-toggle btn btn-primary"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"textarea-input\" class=\" form-control-label\">Score</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formupdate"] ?? $this->getContext($context, "formupdate")), "Score", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formupdate"] ?? $this->getContext($context, "formupdate")), 'errors');
        echo "
                            </div>
                        </div>

                        <div class=\"card-footer\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formupdate"] ?? $this->getContext($context, "formupdate")), "Submit", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-sm"]]);
        echo "
                        </div>


                        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formupdate"] ?? $this->getContext($context, "formupdate")), 'form_end');
        echo "
                    </div>
                </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Evaluation/editE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  132 => 55,  124 => 50,  120 => 49,  109 => 41,  98 => 33,  87 => 25,  74 => 15,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base2.html.twig\" %}
{% block content %}

<div class=\"main-content\">
    <div class=\"section__content section__content--p30\">
        <div class=\"container-fluid\">

            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong>Update Evaluations</strong>
                    </div>

                    <div class=\"card-body card-block\">
                        {{ form_start((formupdate) ) }}


                        <div class=\"row form-group\">
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"text-input\" class=\" form-control-label\">Enfants</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                {{ form_widget(formupdate.idE,{'attr':{'class':'dropdown-toggle btn btn-primary'}})}}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"textarea-input\" class=\" form-control-label\">Activités</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                {{ form_widget(formupdate.idAc,{'attr':{'class':'dropdown-toggle btn btn-primary'}})}}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"textarea-input\" class=\" form-control-label\">Remarque</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                {{ form_widget(formupdate.Remarque,{'attr':{'class':'dropdown-toggle btn btn-primary'}})}}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col col-md-3\">
                                <label for=\"textarea-input\" class=\" form-control-label\">Score</label>
                            </div>
                            <div class=\"col-12 col-md-9\">
                                {{ form_widget(formupdate.Score,{'attr':{'class':'form-control'}})}}
                                {{ form_errors(formupdate) }}
                            </div>
                        </div>

                        <div class=\"card-footer\">
                            {{ form_widget(formupdate.Submit,{'attr':{'class':'btn btn-primary btn-sm'}})}}
                        </div>


                        {{ form_end(formupdate) }}
                    </div>
                </div>

                {% endblock %}

", "@Pioneer/Evaluation/editE.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Evaluation\\editE.html.twig");
    }
}
