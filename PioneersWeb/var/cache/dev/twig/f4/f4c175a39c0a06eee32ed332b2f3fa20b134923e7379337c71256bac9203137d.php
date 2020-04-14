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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_c753062f8bf236abd0bb8727fa31112554d4bac1e7be3d025f74315cc3fd8021 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<div class=\"bradcam_area breadcam_bg overlay2\">
    <h3>Log In</h3>
</div>
";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
    <form id=\"test-form\" class=\"white-popup-block\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"white-popup-block\">
        ";
        // line 10
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 11
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 13
        echo "        <div class=\"popup_box \">
            <div class=\"popup_inner\">

                <h3>Log in</h3>
                <form action=\"#\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-md-12\">

                            <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                        </div>
                        <div class=\"col-xl-12 col-md-12\">

                            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" required=\"required\" autocomplete=\"current-password\" />
                        </div>
                        <div class=\"col-xl-12\">

                            <input type=\"submit\" class=\"boxed_btn_orange\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                        <a >
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /></a>
                        <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>

                    </div>
                </form>

                </p>
            </div>
        </div>


</form>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  85 => 29,  74 => 21,  64 => 13,  58 => 11,  56 => 10,  52 => 9,  49 => 8,  43 => 6,  41 => 5,  36 => 2,);
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
    <h3>Log In</h3>
</div>
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

    <form id=\"test-form\" class=\"white-popup-block\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"white-popup-block\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
        <div class=\"popup_box \">
            <div class=\"popup_inner\">

                <h3>Log in</h3>
                <form action=\"#\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-md-12\">

                            <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                        </div>
                        <div class=\"col-xl-12 col-md-12\">

                            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" required=\"required\" autocomplete=\"current-password\" />
                        </div>
                        <div class=\"col-xl-12\">

                            <input type=\"submit\" class=\"boxed_btn_orange\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Log in'|trans }}\" />
                        </div>
                        <a >
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /></a>
                        <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>

                    </div>
                </form>

                </p>
            </div>
        </div>


</form>

", "@FOSUser/Security/login_content.html.twig", "D:\\wamp64\\www\\pioneerss\\PioneersWeb\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
