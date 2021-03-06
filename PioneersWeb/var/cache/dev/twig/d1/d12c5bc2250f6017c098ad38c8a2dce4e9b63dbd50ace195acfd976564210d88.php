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

/* @Pioneer/Suivi/backUPpdf.html.twig */
class __TwigTemplate_d5a9630e8d29dc5ea3ba101389755f5bbd4fbbb0d12fd4def01b5f243863daaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Suivi/backUPpdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Suivi/backUPpdf.html.twig"));

        // line 1
        echo "
<h3>LES SUIVIS</h3>
<table>
    <thread>
        <tr>
            <th>Nom et Prenom</th>
            <th>Nutrition</th>
            <th>Sommeil</th>
            <th>Sociabilité</th>
            <th>Psychologie</th>
        </tr>
    </thread>
    <tbody>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Formlist"] ?? $this->getContext($context, "Formlist")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["f"], "idE", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["f"], "idE", []), "prenom", [])), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nutrition", []), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "sommeil", []), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "sociabilite", []), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "psychologie", []), "html", null, true);
            echo "</td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <tr>
            <td>Pas de Suivis trouvés!</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </tbody>
</table>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Suivi/backUPpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  84 => 24,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  52 => 15,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<h3>LES SUIVIS</h3>
<table>
    <thread>
        <tr>
            <th>Nom et Prenom</th>
            <th>Nutrition</th>
            <th>Sommeil</th>
            <th>Sociabilité</th>
            <th>Psychologie</th>
        </tr>
    </thread>
    <tbody>

    {% for f in Formlist %}
        <tr>
            <td>{{ f.idE.nom ~' '~ f.idE.prenom }}</td>
            <td>{{ f.nutrition }}</td>
            <td>{{ f.sommeil }}</td>
            <td>{{ f.sociabilite }}</td>
            <td>{{ f.psychologie }}</td>
        </tr>
    {% else %}
        <tr>
            <td>Pas de Suivis trouvés!</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

</div>
", "@Pioneer/Suivi/backUPpdf.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Suivi\\backUPpdf.html.twig");
    }
}
