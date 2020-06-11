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

/* @Pioneer/Evaluation/showE.html.twig */
class __TwigTemplate_6c5370816f4fde617750acc529b80bef0c9e61f392e958cc72065df3840a8aec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Evaluation/showE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pioneer/Evaluation/showE.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Pioneer/Evaluation/showE.html.twig", 1);
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
        echo "<br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class=\"container\">
        <h3>LES RECLAMATIONS</h3>
        <table class=\"table table-striped table-hover\">
            <thread>
                <tr>
                    <th>Nom et Prenom</th>
                    <th>Score</th>
                    <th>Remarque</th>
                    <th>Activite</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>

            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Formlist"] ?? $this->getContext($context, "Formlist")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["f"], "idE", []), "nom", []) . " ") . $this->getAttribute($this->getAttribute($context["f"], "idE", []), "prenom", [])), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "score", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "remarque", []), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "idAc", []), "nom", []), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteEvaluation", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateEvaluation", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\">Update</a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td>Pas de Suivis trouvés!</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pioneer/Evaluation/showE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  121 => 36,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  88 => 25,  83 => 24,  60 => 3,  51 => 2,  29 => 1,);
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
<br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class=\"container\">
        <h3>LES RECLAMATIONS</h3>
        <table class=\"table table-striped table-hover\">
            <thread>
                <tr>
                    <th>Nom et Prenom</th>
                    <th>Score</th>
                    <th>Remarque</th>
                    <th>Activite</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>

            {% for f in Formlist %}
            <tr>
                <td>{{ f.idE.nom ~' '~ f.idE.prenom }}</td>
                <td>{{ f.score }}</td>
                <td>{{ f.remarque }}</td>
                <td>{{ f.idAc.nom }}</td>
                <td>
                    <a href=\"{{ path('deleteEvaluation',{'id':f.id}) }}\" class=\"btn btn-danger\">Delete</a>
                    <a href=\"{{ path('updateEvaluation',{'id':f.id}) }}\" class=\"btn btn-success\">Update</a>
                </td>
            </tr>
            {% else %}
            <tr>
                <td>Pas de Suivis trouvés!</td>
            </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>



{% endblock %}", "@Pioneer/Evaluation/showE.html.twig", "D:\\programs\\wamp64\\www\\Web2.0\\INT\\PioneersWeb\\src\\PioneerBundle\\Resources\\views\\Evaluation\\showE.html.twig");
    }
}
