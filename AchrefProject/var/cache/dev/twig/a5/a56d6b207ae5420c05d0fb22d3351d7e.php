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

/* infotrafic/showback.html.twig */
class __TwigTemplate_3b1a8ae25660c85ed5b501fff7deb2ef extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infotrafic/showback.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "infotrafic/showback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Infotrafic";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<center> <h1>Infotrafic</h1></center>
    <div class=\"d-flex flex-column align-items-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
              <div class=\"col-md-6\">
                  <div class=\"card-body\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chauffeur</th>
                <td>nom:";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 28, $this->source); })()), "chauffeur", [], "any", false, false, false, 28), "nomc", [], "any", false, false, false, 28), "html", null, true);
        echo "/prenom:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 28, $this->source); })()), "chauffeur", [], "any", false, false, false, 28), "prenomc", [], "any", false, false, false, 28), "html", null, true);
        echo "/email:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 28, $this->source); })()), "chauffeur", [], "any", false, false, false, 28), "emailc", [], "any", false, false, false, 28), "html", null, true);
        echo "/numéro:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 28, $this->source); })()), "chauffeur", [], "any", false, false, false, 28), "numc", [], "any", false, false, false, 28), "html", null, true);
        echo "/adresse:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["infotrafic"]) || array_key_exists("infotrafic", $context) ? $context["infotrafic"] : (function () { throw new RuntimeError('Variable "infotrafic" does not exist.', 28, $this->source); })()), "chauffeur", [], "any", false, false, false, 28), "adressec", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_index_back");
        echo "\">back to list</a>
    <style>
        table {
            margin-top: 0.2rem;
            border: 4px solid black;
            margin-right: 10rem;
        }
        th, td,tr {
            border: 4px solid black;
            padding: 0.5rem;
            text-align: center;
    
          }
        .container {
            text-align: left;
            margin-right: 5rem;
        } 
    </style>  

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "infotrafic/showback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  106 => 28,  99 => 24,  92 => 20,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Infotrafic{% endblock %}

{% block body %}
<center> <h1>Infotrafic</h1></center>
    <div class=\"d-flex flex-column align-items-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
              <div class=\"col-md-6\">
                  <div class=\"card-body\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ infotrafic.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ infotrafic.type }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ infotrafic.description }}</td>
            </tr>
            <tr>
                <th>Chauffeur</th>
                <td>nom:{{infotrafic.chauffeur.nomc }}/prenom:{{infotrafic.chauffeur.prenomc }}/email:{{infotrafic.chauffeur.emailc }}/numéro:{{infotrafic.chauffeur.numc }}/adresse:{{infotrafic.chauffeur.adressec }}</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
    <a href=\"{{ path('app_infotrafic_index_back') }}\">back to list</a>
    <style>
        table {
            margin-top: 0.2rem;
            border: 4px solid black;
            margin-right: 10rem;
        }
        th, td,tr {
            border: 4px solid black;
            padding: 0.5rem;
            text-align: center;
    
          }
        .container {
            text-align: left;
            margin-right: 5rem;
        } 
    </style>  

{% endblock %}
", "infotrafic/showback.html.twig", "C:\\Users\\asus\\Desktop\\AchrefProject\\AchrefProject\\templates\\infotrafic\\showback.html.twig");
    }
}
