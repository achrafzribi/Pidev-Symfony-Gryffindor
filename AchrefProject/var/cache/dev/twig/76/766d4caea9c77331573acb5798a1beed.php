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

/* infotrafic/indexback.html.twig */
class __TwigTemplate_9d2c165d513407ba4ea355ed44315818 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infotrafic/indexback.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "infotrafic/indexback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Infotrafic index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <center><h1>Infotrafic List</h1></center>
        <div class=\"text-center\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Description</th>
                <th>Chauffeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 19, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["infotrafic"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "type", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>nom:";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 24), "nomc", [], "any", false, false, false, 24), "html", null, true);
            echo "/prenom:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 24), "prenomc", [], "any", false, false, false, 24), "html", null, true);
            echo "/email:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 24), "emailc", [], "any", false, false, false, 24), "html", null, true);
            echo "/numéro:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 24), "numc", [], "any", false, false, false, 24), "html", null, true);
            echo "/adresse:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 24), "adressec", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td style=\"display: flex;gap: 10px; justify-content: center;\">
                 <Button>   <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_show_back", ["id" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">show</a></Button>
                 <Button>    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">edit</a></Button>
                    ";
            // line 28
            echo twig_include($this->env, $context, "infotrafic/_delete_form_back.html.twig");
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
            // line 32
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infotrafic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "    <div id=\"flash-message\" class=\"alert alert-success\">
        ";
            // line 40
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 43, $this->source); })())) > 0)) {
            // line 44
            echo "    <div class=\"d-flex justify-content-center my-4\">
        ";
            // line 45
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 45, $this->source); })()));
            echo "
    </div>
";
        }
        // line 48
        echo "    </div>

    <Button>  <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_new_back");
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
            margin-right: 2rem;
        }
        th, td {
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
        return "infotrafic/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 50,  200 => 48,  194 => 45,  191 => 44,  188 => 43,  179 => 40,  176 => 39,  172 => 38,  168 => 36,  159 => 32,  142 => 28,  138 => 27,  134 => 26,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  106 => 20,  88 => 19,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Infotrafic index{% endblock %}

{% block body %}
    <center><h1>Infotrafic List</h1></center>
        <div class=\"text-center\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Description</th>
                <th>Chauffeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for infotrafic in infotrafics %}
            <tr>
                <td>{{ infotrafic.id }}</td>
                <td>{{ infotrafic.type }}</td>
                <td>{{ infotrafic.description }}</td>
                <td>nom:{{infotrafic.chauffeur.nomc }}/prenom:{{infotrafic.chauffeur.prenomc }}/email:{{infotrafic.chauffeur.emailc }}/numéro:{{infotrafic.chauffeur.numc }}/adresse:{{infotrafic.chauffeur.adressec }}</td>
                <td style=\"display: flex;gap: 10px; justify-content: center;\">
                 <Button>   <a href=\"{{ path('app_infotrafic_show_back', {'id': infotrafic.id}) }}\">show</a></Button>
                 <Button>    <a href=\"{{ path('app_infotrafic_edit_back', {'id': infotrafic.id}) }}\">edit</a></Button>
                    {{ include('infotrafic/_delete_form_back.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% for flashMessage in app.flashes('success') %}
    <div id=\"flash-message\" class=\"alert alert-success\">
        {{ flashMessage }}
    </div>
  {% endfor %}
    {% if infotrafics|length > 0 %}
    <div class=\"d-flex justify-content-center my-4\">
        {{ knp_pagination_render(infotrafics) }}
    </div>
{% endif %}
    </div>

    <Button>  <a href=\"{{ path('app_infotrafic_new_back') }}\">Create new</a></Button>
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
            margin-right: 2rem;
        }
        th, td {
            border: 1px solid ; /* purple border */
           padding: 0.5rem;
           text-align: center;
           
          }

         
        
    </style>
{% endblock %}
", "infotrafic/indexback.html.twig", "C:\\Users\\asus\\Desktop\\pidev3éme\\AchrefProject\\AchrefProject\\templates\\infotrafic\\indexback.html.twig");
    }
}
