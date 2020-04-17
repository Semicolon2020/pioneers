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

/* @Transport/back/station/addstation.html.twig */
class __TwigTemplate_f5c8be88ea304a6aec3ccc75ee1bc8d056a657c2888b1ddd4fa78c2091d42c01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/station/addstation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Transport/back/station/addstation.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Transport/back/station/addstation.html.twig", 1);
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
                                    <h3 class=\"text-center title-2\">Ajouter Station</h3>
                                </div>
                                <hr>
                                <form action=\"\" method=\"post\">
                                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                    <div class=\"form-group\">
                                        <label  class=\"control-label mb-1\">Nom du Station</label>
                                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control", "maxlength" => "80", "pattern" => "^[a-zA-Z,]*"]]);
        echo "
                                        Example: Avenue,Bir,Kasaa,Bardo,Tunis<br>
                                        ";
        // line 21
        echo twig_escape_filter($this->env, ($context["no"] ?? $this->getContext($context, "no")), "html", null, true);
        echo "
                                    </div>
                                    ";
        // line 23
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idtrajet", []), "setRendered", [], "method");
        // line 24
        echo "                                    ";
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "longtitude", []), "setRendered", [], "method");
        // line 25
        echo "                                    ";
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "altitude", []), "setRendered", [], "method");
        // line 26
        echo "                                    <div>
                                        ";
        // line 27
        if (((($context["n"] ?? $this->getContext($context, "n")) == 1) && (($context["m"] ?? $this->getContext($context, "m")) == 1))) {
            // line 28
            echo "                                        <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                            <i class=\"fa fa-lock fa-lg\"></i>&nbsp;
                                            <span id=\"payment-button-amount\">check</span>
                                        </button> ";
            // line 31
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo " </form>
                                ";
        } elseif (((        // line 32
($context["n"] ?? $this->getContext($context, "n")) == 1) && (($context["m"] ?? $this->getContext($context, "m")) == 2))) {
            // line 33
            echo "                                    <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">

                                        <span id=\"payment-button-amount\">sauvegarder</span>
                                    </button> ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo " </form>


                                        ";
        } elseif ((        // line 39
($context["n"] ?? $this->getContext($context, "n")) == 2)) {
            // line 40
            echo "                                            ";
            $context["m"] = 1;
            // line 41
            echo "                                    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_station", ["id" => ($context["id"] ?? $this->getContext($context, "id")), "m" => ($context["m"] ?? $this->getContext($context, "m"))]), "html", null, true);
            echo "\">   <button id=\"payment-button\"  class=\"btn btn-lg btn-info btn-block\">

                                        <span id=\"payment-button-amount\">Recheck</span>
                                        </button> ";
            // line 44
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "</form><br>
                                            ";
            // line 45
            $context["m"] = 2;
            // line 46
            echo "                                    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_station", ["id" => ($context["id"] ?? $this->getContext($context, "id")), "m" => ($context["m"] ?? $this->getContext($context, "m"))]), "html", null, true);
            echo "\">  <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">

                                    <span id=\"payment-button-amount\">Aller pour l'ajout</span>
                                </button> ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo " </form>
                                             ";
        }
        // line 51
        echo "


                                    </div>


                            </div>
                        </div>
                        <div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"600\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q='+";
        // line 59
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "+'&t=&z=11&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\">
                                </iframe>Google Maps Generator by <a href=\"https://www.embedgooglemap.org\">embedgooglemap.org</a>
                            </div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    </div>
                </div></div></div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Transport/back/station/addstation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 59,  156 => 51,  151 => 49,  144 => 46,  142 => 45,  138 => 44,  131 => 41,  128 => 40,  126 => 39,  120 => 36,  115 => 33,  113 => 32,  109 => 31,  104 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  81 => 19,  75 => 16,  60 => 3,  51 => 2,  29 => 1,);
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
                                    <h3 class=\"text-center title-2\">Ajouter Station</h3>
                                </div>
                                <hr>
                                <form action=\"\" method=\"post\">
                                    {{ form_start(form) }}
                                    <div class=\"form-group\">
                                        <label  class=\"control-label mb-1\">Nom du Station</label>
                                        {{ form_widget(form.name, {'attr': {'class': 'form-control','maxlength':'80','pattern':'^[a-zA-Z,]*'}}) }}
                                        Example: Avenue,Bir,Kasaa,Bardo,Tunis<br>
                                        {{ no }}
                                    </div>
                                    {% do form.idtrajet.setRendered() %}
                                    {% do form.longtitude.setRendered() %}
                                    {% do form.altitude.setRendered() %}
                                    <div>
                                        {% if n==1 and m==1 %}
                                        <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">
                                            <i class=\"fa fa-lock fa-lg\"></i>&nbsp;
                                            <span id=\"payment-button-amount\">check</span>
                                        </button> {{ form_end(form) }} </form>
                                {% elseif n==1 and m==2 %}
                                    <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">

                                        <span id=\"payment-button-amount\">sauvegarder</span>
                                    </button> {{ form_end(form) }} </form>


                                        {% elseif n==2 %}
                                            {% set m=1 %}
                                    <form action=\"{{ path(\"add_station\",{\"id\":id,\"m\":m})}}\">   <button id=\"payment-button\"  class=\"btn btn-lg btn-info btn-block\">

                                        <span id=\"payment-button-amount\">Recheck</span>
                                        </button> {{ form_end(form) }}</form><br>
                                            {% set m=2 %}
                                    <form action=\"{{ path(\"add_station\",{\"id\":id,\"m\":m})}}\">  <button id=\"payment-button\" type=\"submit\" class=\"btn btn-lg btn-info btn-block\">

                                    <span id=\"payment-button-amount\">Aller pour l'ajout</span>
                                </button> {{ form_end(form) }} </form>
                                             {% endif %}



                                    </div>


                            </div>
                        </div>
                        <div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"600\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q='+{{name}}+'&t=&z=11&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\">
                                </iframe>Google Maps Generator by <a href=\"https://www.embedgooglemap.org\">embedgooglemap.org</a>
                            </div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    </div>
                </div></div></div></div>
{% endblock %}", "@Transport/back/station/addstation.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\TransportBundle\\Resources\\views\\back\\station\\addstation.html.twig");
    }
}
