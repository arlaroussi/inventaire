<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/index.html.twig */
class __TwigTemplate_8862af92d1d1d1832ed3a569c5a4a18d31a364bcba1579ae60ae6b52c19a979a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des articles</h3><br/>
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Code Article</th>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unArticle"]) {
            // line 17
            echo "                    <tr>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "code", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "designation", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "qte", [], "any", false, false, false, 20), "html", null, true);
            echo " €</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "prixunit", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td><a href=\"/article/update/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/article/verif/supprimer/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </table><br/>
            
        </div>
    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <center>
        <div class=\"container\">
            <h3>Liste des articles</h3><br/>
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Code Article</th>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                {% for unArticle in articles %}
                    <tr>
                        <td>{{ unArticle.code }}</td>
                        <td>{{ unArticle.designation }}</td>
                        <td>{{ unArticle.qte }} €</td>
                        <td>{{ unArticle.prixunit }}</td>
                        <td><a href=\"/article/update/{{ unArticle.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/article/verif/supprimer/{{ unArticle.id }}\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>
            
        </div>
    </center>

{% endblock %}", "article/index.html.twig", "/var/www/html/inventaire/templates/article/index.html.twig");
    }
}
