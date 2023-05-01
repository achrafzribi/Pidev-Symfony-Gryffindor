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
class __TwigTemplate_b66522b8718c083f7afba3393f968488 extends Template
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
        echo "    <div class=\"container my-5\">
        <h1 class=\"text-center mb-5\">Chauffeur</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                    <th class=\"text-center\">Id</th>
                                    <td class=\"text-center\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Nomc</th>
                                    <td class=\"text-center\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 20, $this->source); })()), "nomc", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Prenomc</th>
                                    <td class=\"text-center\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 24, $this->source); })()), "prenomc", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Numc</th>
                                    <td class=\"text-center\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 28, $this->source); })()), "numc", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Adressec</th>
                                    <td class=\"text-center\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 32, $this->source); })()), "adressec", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Emailc</th>
                                    <td class=\"text-center\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chauffeur"]) || array_key_exists("chauffeur", $context) ? $context["chauffeur"] : (function () { throw new RuntimeError('Variable "chauffeur" does not exist.', 36, $this->source); })()), "emailc", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_index_back");
        echo "\" class=\"btn btn-secondary mt-4\">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        table {
            margin-top: 1rem;
        }
        th, td {
            border: 2px solid black;
            padding: 0.5rem;
            text-align: center;
            vertical-align: middle;
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
        return array (  127 => 40,  120 => 36,  113 => 32,  106 => 28,  99 => 24,  92 => 20,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Chauffeur{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <h1 class=\"text-center mb-5\">Chauffeur</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr>
                                    <th class=\"text-center\">Id</th>
                                    <td class=\"text-center\">{{ chauffeur.id }}</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Nomc</th>
                                    <td class=\"text-center\">{{ chauffeur.nomc }}</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Prenomc</th>
                                    <td class=\"text-center\">{{ chauffeur.prenomc }}</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Numc</th>
                                    <td class=\"text-center\">{{ chauffeur.numc }}</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Adressec</th>
                                    <td class=\"text-center\">{{ chauffeur.adressec }}</td>
                                </tr>
                                <tr>
                                    <th class=\"text-center\">Emailc</th>
                                    <td class=\"text-center\">{{ chauffeur.emailc }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href=\"{{ path('app_chauffeur_index_back') }}\" class=\"btn btn-secondary mt-4\">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        table {
            margin-top: 1rem;
        }
        th, td {
            border: 2px solid black;
            padding: 0.5rem;
            text-align: center;
            vertical-align: middle;
        } 
    </style>  
{% endblock %}
", "chauffeur/show.html.twig", "C:\\Users\\medzr\\OneDrive\\Bureau\\AchrefProject\\AchrefProject\\templates\\chauffeur\\show.html.twig");
    }
}
