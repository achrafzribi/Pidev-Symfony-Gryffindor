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
class __TwigTemplate_060974d4cd7c7e52ae3ec87bd35861df extends Template
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
                <th>Actions</th>
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
                <td style=\"display: flex; gap: 10px;\">
                  <button class=\"btn btn-sm btn-outline-primary\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_show_back", ["id" => twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" style=\"text-decoration: none; color: inherit;\">Show</a>
                  </button>
                  <button class=\"btn btn-sm btn-outline-secondary\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["chauffeur"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" style=\"text-decoration: none; color: inherit;\">Edit</a>
                  </button>
                  ";
            // line 37
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
            // line 41
            echo "            <tr>
                <td colspan=\"7\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chauffeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "    <div id=\"flash-message\" class=\"alert alert-success\">
        ";
            // line 49
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["chauffeurs"]) || array_key_exists("chauffeurs", $context) ? $context["chauffeurs"] : (function () { throw new RuntimeError('Variable "chauffeurs" does not exist.', 52, $this->source); })())) > 0)) {
            // line 53
            echo "    <div class=\"d-flex justify-content-center my-4\">
        ";
            // line 54
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["chauffeurs"]) || array_key_exists("chauffeurs", $context) ? $context["chauffeurs"] : (function () { throw new RuntimeError('Variable "chauffeurs" does not exist.', 54, $this->source); })()));
            echo "
    </div>
";
        }
        // line 57
        echo "</div>
</div>
    <button class=\"btn btn-primary mb-4\">
      <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_new_back");
        echo "\" style=\"text-decoration: none; color: inherit;\">Create New</a>
    </button>

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
    th, td, th {
        border: 1px solid ; /* purple border */
        padding: 0.5rem;
        text-align: center;
    }
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        margin: 1rem 0;
        padding: 0;
    }
    .pagination li {
        margin-right: 0.5rem;
    }
    .pagination li a {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        display: inline-block;
        padding: 0.5rem 1rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .pagination li a:hover {
        background-color: #0069d9;
    }
    .pagination .active a {
        background-color: #0069d9;
        border-color: #0062cc;
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
        return array (  212 => 60,  207 => 57,  201 => 54,  198 => 53,  195 => 52,  186 => 49,  183 => 48,  179 => 47,  175 => 45,  166 => 41,  149 => 37,  144 => 35,  138 => 32,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  116 => 25,  112 => 24,  109 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                <th>Actions</th>
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
                <td style=\"display: flex; gap: 10px;\">
                  <button class=\"btn btn-sm btn-outline-primary\">
                    <a href=\"{{ path('app_chauffeur_show_back', {'id': chauffeur.id}) }}\" style=\"text-decoration: none; color: inherit;\">Show</a>
                  </button>
                  <button class=\"btn btn-sm btn-outline-secondary\">
                    <a href=\"{{ path('app_chauffeur_edit_back', {'id': chauffeur.id}) }}\" style=\"text-decoration: none; color: inherit;\">Edit</a>
                  </button>
                  {{ include('chauffeur/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% for flashMessage in app.flashes('success') %}
    <div id=\"flash-message\" class=\"alert alert-success\">
        {{ flashMessage }}
    </div>
  {% endfor %}
    {% if chauffeurs|length > 0 %}
    <div class=\"d-flex justify-content-center my-4\">
        {{ knp_pagination_render(chauffeurs) }}
    </div>
{% endif %}
</div>
</div>
    <button class=\"btn btn-primary mb-4\">
      <a href=\"{{ path('app_chauffeur_new_back') }}\" style=\"text-decoration: none; color: inherit;\">Create New</a>
    </button>

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
    th, td, th {
        border: 1px solid ; /* purple border */
        padding: 0.5rem;
        text-align: center;
    }
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        margin: 1rem 0;
        padding: 0;
    }
    .pagination li {
        margin-right: 0.5rem;
    }
    .pagination li a {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        display: inline-block;
        padding: 0.5rem 1rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .pagination li a:hover {
        background-color: #0069d9;
    }
    .pagination .active a {
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>




{% endblock %}
", "chauffeur/index.html.twig", "C:\\Users\\medzr\\OneDrive\\Bureau\\AchrefProject\\AchrefProject\\templates\\chauffeur\\index.html.twig");
    }
}
