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

/* chauffeur/show.html.twig */
class __TwigTemplate_35f84fc834a42f737595ea9c6e5738ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "chauffeur/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Chauffeur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <center><h1>Chauffeur</h1></center>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomc</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 20, $this->source); })()), "nomc", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomc</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 24, $this->source); })()), "prenomc", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numc</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 28, $this->source); })()), "numc", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adressec</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 32, $this->source); })()), "adressec", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailc</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 36, $this->source); })()), "emailc", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_index_back");
        echo "\">back to list</a>

    <style>
        table {
            margin-top: 0.2rem;
            border: 4px solid black;
    
        }
        th, td,tr {
            border: 4px solid black;
            padding: 0.5rem;
            text-align: center;
    
          } 
    </style>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "chauffeur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  120 => 36,  113 => 32,  106 => 28,  99 => 24,  92 => 20,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Chauffeur{% endblock %}

{% block body %}
    <center><h1>Chauffeur</h1></center>
    <div class=\"d-flex flex-column align-items-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
              <div class=\"col-md-6\">
                  <div class=\"card-body\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ chauffeur.id }}</td>
            </tr>
            <tr>
                <th>Nomc</th>
                <td>{{ chauffeur.nomc }}</td>
            </tr>
            <tr>
                <th>Prenomc</th>
                <td>{{ chauffeur.prenomc }}</td>
            </tr>
            <tr>
                <th>Numc</th>
                <td>{{ chauffeur.numc }}</td>
            </tr>
            <tr>
                <th>Adressec</th>
                <td>{{ chauffeur.adressec }}</td>
            </tr>
            <tr>
                <th>Emailc</th>
                <td>{{ chauffeur.emailc }}</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>

    <a href=\"{{ path('app_chauffeur_index_back') }}\">back to list</a>

    <style>
        table {
            margin-top: 0.2rem;
            border: 4px solid black;
    
        }
        th, td,tr {
            border: 4px solid black;
            padding: 0.5rem;
            text-align: center;
    
          } 
    </style>  
{% endblock %}
", "chauffeur/show.html.twig", "C:\\Users\\asus\\Desktop\\pidev3éme\\AchrefProject\\AchrefProject\\templates\\chauffeur\\show.html.twig");
    }
}
