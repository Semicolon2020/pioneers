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

/* @MgiletNotification/notifications.html.twig */
class __TwigTemplate_742053662cd5c3eb019acb3daa6610cbde97009531fcfb46a6d9062d1423cee3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MgiletNotification/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MgiletNotification/notifications.html.twig"));

        // line 1
        echo "Notifications :
";
        // line 2
        if ((twig_length_filter($this->env, ($context["notificationList"] ?? $this->getContext($context, "notificationList"))) > 0)) {
            // line 3
            echo "    <form action=\"";
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_all_as_seen", $this->getAttribute(twig_first($this->env, ($context["notificationList"] ?? $this->getContext($context, "notificationList"))), "notifiableEntity", []));
            echo "\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
";
        }
        // line 7
        echo "<ul>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notificationList"] ?? $this->getContext($context, "notificationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <li>
            <b>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "notification", []), "html", null, true);
            echo "</b>
            <br>
            seen : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seen", []), "html", null, true);
            echo "
            <form action=\"";
            // line 13
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_seen", $this->getAttribute($context["item"], "notifiableEntity", []), $this->getAttribute($context["item"], "notification", []));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"";
            // line 17
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_unseen", $this->getAttribute($context["item"], "notifiableEntity", []), $this->getAttribute($context["item"], "notification", []));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MgiletNotification/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  75 => 17,  68 => 13,  64 => 12,  59 => 10,  56 => 9,  52 => 8,  49 => 7,  41 => 3,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("Notifications :
{% if notificationList|length > 0 %}
    <form action=\"{{ mgilet_notification_generate_path('notification_mark_all_as_seen', notificationList|first.notifiableEntity) }}\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
{% endif %}
<ul>
    {% for item in notificationList %}
        <li>
            <b>{{ item.notification }}</b>
            <br>
            seen : {{ item.seen }}
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_seen', item.notifiableEntity, item.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_unseen', item.notifiableEntity, item.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    {% endfor %}
</ul>
", "@MgiletNotification/notifications.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\PioneersWeb\\vendor\\mgilet\\notification-bundle\\Resources\\views\\notifications.html.twig");
    }
}
