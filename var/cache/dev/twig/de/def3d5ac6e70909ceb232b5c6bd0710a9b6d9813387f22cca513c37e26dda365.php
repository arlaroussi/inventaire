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

/* article/update.html.twig */
class __TwigTemplate_e4d7d90c16f74aa3af120cb9259c651781ebd2b67b7fdaf06aea0eee3932c5b5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Formulaire de connexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<center>
<div class=\"container\">

  ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "

    ";
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
        echo "

    <h3><center>Formulaire ajout de mission</center></h3>

<div class=\"well\">

  ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "

    ";
        // line 22
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
        echo "

    <div class=\"form-group\">
      ";
        // line 26
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "code", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Code article"]);
        echo "
      
      ";
        // line 29
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "code", [], "any", false, false, false, 29), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 33
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "code", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>

    ";
        // line 38
        echo "
    <div class=\"form-group\">
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "designation", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Désignation"]);
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "designation", [], "any", false, false, false, 41), 'errors');
        echo "
       <div class=\"col-sm-4\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "designation", [], "any", false, false, false, 43), 'widget');
        echo "
      </div> 
    </div>

    <div class=\"form-group\">
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "qte", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Quantité"]);
        echo "
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "qte", [], "any", false, false, false, 49), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "qte", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prix_unit", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Prix unitaire"]);
        echo "
      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prix_unit", [], "any", false, false, false, 57), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "prix_unit", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>
   
    <div class=\"form-group\">

      ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "categorie", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Catégorie"]);
        echo "
      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "categorie", [], "any", false, false, false, 66), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "categorie", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
      </div>
    </div>

  ";
        // line 73
        echo "<div class=\"row\">
  
    <div class=\"container\">
        <label class=\"col-md-4 control-label\"></label>
            <div class=\"col-md-4\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "valider", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
                 ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "annuler", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
            </div>
    </div>

</div>
    

 </div>
            
  ";
        // line 89
        echo "   
  ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "flashBag", [], "any", false, false, false, 90), "has", [0 => "success"], "method", false, false, false, 90)) {
            // line 91
            echo "  <div class=\"alert alert-success\">
       ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "session", [], "any", false, false, false, 92), "flashBag", [], "any", false, false, false, 92), "get", [0 => "success"], "method", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 93
                echo "              ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "   </div>
  ";
        }
        // line 97
        echo "

            
  ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'rest');
        echo "

  

  ";
        // line 105
        echo "
  ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        echo "
  
 ";
        // line 109
        echo "
</center>

</div>";
        // line 113
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 113,  283 => 109,  278 => 106,  275 => 105,  268 => 100,  263 => 97,  259 => 95,  250 => 93,  246 => 92,  243 => 91,  241 => 90,  238 => 89,  226 => 79,  222 => 78,  215 => 73,  208 => 68,  203 => 66,  199 => 65,  190 => 59,  185 => 57,  181 => 56,  173 => 51,  168 => 49,  164 => 48,  156 => 43,  151 => 41,  147 => 40,  143 => 38,  135 => 33,  128 => 29,  122 => 26,  115 => 22,  110 => 19,  100 => 13,  95 => 10,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Formulaire de connexion
{% endblock %}

{% block body %}
<center>
<div class=\"container\">

  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}

    <h3><center>Formulaire ajout de mission</center></h3>

<div class=\"well\">

  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}

    <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.code, \"Code article\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.code) }}

      <div class=\"col-sm-4\">
        {# Génération de l'input. #}
        {{ form_widget(form.code, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

    {# Idem pour un autre champ. #}

    <div class=\"form-group\">
      {{ form_label(form.designation, \"Désignation\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.designation) }}
       <div class=\"col-sm-4\">
        {{ form_widget(form.designation) }}
      </div> 
    </div>

    <div class=\"form-group\">
      {{ form_label(form.qte, \"Quantité\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.qte) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.qte, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

    <div class=\"form-group\">
      {{ form_label(form.prix_unit, \"Prix unitaire\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.prix_unit) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.prix_unit, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
   
    <div class=\"form-group\">

      {{ form_label(form.categorie, \"Catégorie\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
      {{ form_errors(form.categorie) }}
      <div class=\"col-sm-4\">
        {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>

  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
<div class=\"row\">
  
    <div class=\"container\">
        <label class=\"col-md-4 control-label\"></label>
            <div class=\"col-md-4\">
                {{ form_widget(form.valider, {'attr': {'class': 'btn btn-success'}}) }}
                 {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-success'}}) }}
            </div>
    </div>

</div>
    

 </div>
            
  {# Affichage des messages de sessions #}
   
  {% if app.session.flashBag.has('success') %}
  <div class=\"alert alert-success\">
       {% for msg in app.session.flashBag.get('success') %}
              {{ msg }}
       {% endfor %}
   </div>
  {% endif %}


            
  {{ form_rest(form) }}

  

  {# Fermeture de la balise <form> du formulaire HTML #}

  {{ form_end(form) }}
  
 {# <a href=\"/add_article\" class=\"btn btn-outline-light\">AJOUTER NOUVEL<br/>ARTICLE</a><br/> #}

</center>

</div>{# empty Twig template #}


{% endblock %}", "article/update.html.twig", "/var/www/html/inventaire/templates/article/update.html.twig");
    }
}
