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

/* chauffeur/index.html.twig */
class __TwigTemplate_adddd028ebf9ee3b8c002c8d96782cc1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "chauffeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Chauffeur index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <center> <h1>Chauffeur List</h1></center>
    <div class=\"d-flex justify-content-center mt-4\">
    <div class=\"text-center\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom du chauffeur </th>
                <th>Prénom du chauffeur</th>
                <th>Numéro du chauffeur</th>
                <th>Adresse du chauffeur</th>
                <th>Email du chauffeur</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chauffeurs"]) || array_key_exists("chauffeurs", $context) ? $context["chauffeurs"] : (function () { throw new RuntimeError('Variable "chauffeurs" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["chauffeur"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "nomc", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "prenomc", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "numc", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "adressec", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chauffeur"], "emailc", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td style=\"display: flex;gap: 10px;\">
                  <Button>  <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_show_back", ["id" => twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">show</a> </Button> 
                  <Button>  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a> </Button> 
                    ";
            // line 33
            echo twig_include($this->env, $context, "chauffeur/_delete_form.html.twig");
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chauffeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
</div>
</div>
    <Button>  <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_new_back");
        echo "\">Create new</a></Button> 
<style>
    .mt-4 {
        margin-top: 4rem;
    }
    table {
        width: 90%;
        margin: 1rem auto;
        border-collapse: collapse;
        border: 2px solid #ffb6c1; /* pink border */
        box-shadow: 0px 0px 10px #9370db; /* purple shadow */
        table-layout: auto;
    }
    th, td,th {
        border: 1px solid ; /* purple border */
       padding: 0.5rem;
       text-align: center;
       
      }
    </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "chauffeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 45,  171 => 41,  162 => 37,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  116 => 25,  112 => 24,  109 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Chauffeur index{% endblock %}

{% block body %}
   <center> <h1>Chauffeur List</h1></center>
    <div class=\"d-flex justify-content-center mt-4\">
    <div class=\"text-center\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom du chauffeur </th>
                <th>Prénom du chauffeur</th>
                <th>Numéro du chauffeur</th>
                <th>Adresse du chauffeur</th>
                <th>Email du chauffeur</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for chauffeur in chauffeurs %}
            <tr>
                <td>{{ chauffeur.id }}</td>
                <td>{{ chauffeur.nomc }}</td>
                <td>{{ chauffeur.prenomc }}</td>
                <td>{{ chauffeur.numc }}</td>
                <td>{{ chauffeur.adressec }}</td>
                <td>{{ chauffeur.emailc }}</td>
                <td style=\"display: flex;gap: 10px;\">
                  <Button>  <a href=\"{{ path('app_chauffeur_show_back', {'id': chauffeur.id}) }}\">show</a> </Button> 
                  <Button>  <a href=\"{{ path('app_chauffeur_edit_back', {'id': chauffeur.id}) }}\">edit</a> </Button> 
                    {{ include('chauffeur/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
</div>
    <Button>  <a href=\"{{ path('app_chauffeur_new_back') }}\">Create new</a></Button> 
<style>
    .mt-4 {
        margin-top: 4rem;
    }
    table {
        width: 90%;
        margin: 1rem auto;
        border-collapse: collapse;
        border: 2px solid #ffb6c1; /* pink border */
        box-shadow: 0px 0px 10px #9370db; /* purple shadow */
        table-layout: auto;
    }
    th, td,th {
        border: 1px solid ; /* purple border */
       padding: 0.5rem;
       text-align: center;
       
      }
    </style>

{% endblock %}
", "chauffeur/index.html.twig", "C:\\Users\\asus\\Desktop\\AchrefProject\\AchrefProject\\templates\\chauffeur\\index.html.twig");
    }
}
