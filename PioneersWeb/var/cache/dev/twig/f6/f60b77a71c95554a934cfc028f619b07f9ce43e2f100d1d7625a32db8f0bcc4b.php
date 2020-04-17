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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_3492e5298faa4b1293fdb211be4510d3be8a02111cf1c5b6bfdc0f15f4951341 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"bradcam_area breadcam_bg overlay2\">
    <h3>Register</h3>
</div>

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")]);
        echo "
<section class=\"contact-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"contact-title\">Register</h2>
            </div>
            <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numTel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatCivil", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "photo", []), 'widget');
        echo "
                            </div>
                        </div>


                    </div>
                    <div class=\"form-group mt-3\">
                        <input type=\"submit\"  class=\"button button-contactForm boxed-btn\"  value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>

            </div>

        </div>
    </div>
</section>
";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "














";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 82,  146 => 74,  136 => 67,  129 => 63,  122 => 59,  114 => 54,  105 => 48,  97 => 43,  89 => 38,  81 => 33,  73 => 28,  65 => 23,  57 => 18,  42 => 6,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"bradcam_area breadcam_bg overlay2\">
    <h3>Register</h3>
</div>

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register')}) }}
<section class=\"contact-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"contact-title\">Register</h2>
            </div>
            <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.cin,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.nom,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.prenom,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.numTel,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.etatCivil,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.email,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.username,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control'}})}}
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            {{ form_widget(form.roles,{'attr':{'class':'form-control'}})}}
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.photo)}}
                            </div>
                        </div>


                    </div>
                    <div class=\"form-group mt-3\">
                        <input type=\"submit\"  class=\"button button-contactForm boxed-btn\"  value=\"{{ 'Register'|trans }}\" />
                    </div>

            </div>

        </div>
    </div>
</section>
{{ form_end(form) }}














", "@FOSUser/Registration/register_content.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
