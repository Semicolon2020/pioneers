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

/* @Transport/back/trajet/add.html.twig */
class __TwigTemplate_c8de3a58e525489313624b7542f4807a3c69033e7f1a5f8d0d338c3f5847f142 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/trajet/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/trajet/add.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Transport/back/trajet/add.html.twig", 1);
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
        echo "    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\"></div>
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <h3 class=\"text-center title-2\">Ajouter Trajet</h3>
                                </div>
                                <hr>
                                <form action=\"\" method=\"post\">
                                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                    <div class=\"form-group\">
                                        <label  class=\"control-label mb-1\">Nom du Trajet</label>
                                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control", "maxlength" => "30", "pattern" => "^[a-zA-Z ]+[-][a-zA-Z ]+"]]);
        echo "
                                        Example: Tunis-Bardo<br>";
        // line 20
        echo twig_escape_filter($this->env, ($context["no"] ?? $this->getContext($context, "no")), "html", null, true);
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 23
        if ((twig_length_filter($this->env, ($context["ta"] ?? $this->getContext($context, "ta"))) == 0)) {
            // line 24
            echo "                                        <center>  <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_bus");
            echo "\"> <button class=\"au-btn au-btn-load\">Add Bus</button></center></a>
                                        ";
        } else {
            // line 26
            echo "                                        <label  class=\"control-label mb-1\">Nom de bus</label>
                                        ";
            // line 27
            $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idbus", []), "setRendered", [], "method");
            // line 28
            echo "                                        <select class=\"form-control\" name=\"idbus\"  required>
<option></option>

                                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ta"] ?? $this->getContext($context, "ta")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "name", []), "html", null, true);
                echo " </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
                                        </select>

                                        ";
        }
        // line 38
        echo "                                        <span class=\"help-block field-validation-valid\" data-valmsg-replace=\"true\"></span>
                                    </div>


                                    <div>
                                        <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                            <i class=\"fa fa-lock fa-lg\"></i>&nbsp;
                                            <span id=\"payment-button-amount\"> Sauvegarder</span>
                                        </button>
                                    </div>
                                    ";
        // line 48
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
        return "@Transport/back/trajet/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  130 => 38,  124 => 34,  113 => 32,  109 => 31,  104 => 28,  102 => 27,  99 => 26,  93 => 24,  91 => 23,  85 => 20,  81 => 19,  75 => 16,  60 => 3,  51 => 2,  29 => 1,);
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
                                    <h3 class=\"text-center title-2\">Ajouter Trajet</h3>
                                </div>
                                <hr>
                                <form action=\"\" method=\"post\">
                                    {{ form_start(form) }}
                                    <div class=\"form-group\">
                                        <label  class=\"control-label mb-1\">Nom du Trajet</label>
                                        {{ form_widget(form.name, {'attr': {'class': 'form-control','maxlength':'30','pattern': '^[a-zA-Z ]+[-][a-zA-Z ]+'}}) }}
                                        Example: Tunis-Bardo<br>{{ no }}
                                    </div>
                                    <div class=\"form-group\">
                                        {% if ta|length==0 %}
                                        <center>  <a href=\"{{ path('add_bus') }}\"> <button class=\"au-btn au-btn-load\">Add Bus</button></center></a>
                                        {% else %}
                                        <label  class=\"control-label mb-1\">Nom de bus</label>
                                        {% do form.idbus.setRendered() %}
                                        <select class=\"form-control\" name=\"idbus\"  required>
<option></option>

                                            {% for i in ta %}
                                                <option value=\"{{ i.id }}\">{{ i.name }} </option>
                                            {% endfor %}

                                        </select>

                                        {% endif %}
                                        <span class=\"help-block field-validation-valid\" data-valmsg-replace=\"true\"></span>
                                    </div>


                                    <div>
                                        <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                            <i class=\"fa fa-lock fa-lg\"></i>&nbsp;
                                            <span id=\"payment-button-amount\"> Sauvegarder</span>
                                        </button>
                                    </div>
                                    {{ form_end(form) }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div></div></div></div>
{% endblock %}", "@Transport/back/trajet/add.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\back\\trajet\\add.html.twig");
    }
}
