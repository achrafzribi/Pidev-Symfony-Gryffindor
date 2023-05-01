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

/* infotrafic/index.html.twig */
class __TwigTemplate_ecea189d36975b94dd0a900e135a8a1e extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infotrafic/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "infotrafic/index.html.twig", 1);
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
        echo "    <h1>Infotrafic List</h1>
    <div class=\"d-flex justify-content-center mt-4\">
    <div class=\"text-center\">
    <table class=\"table\">
        <thead>
            <tr>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "type", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>nom:";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 23), "nomc", [], "any", false, false, false, 23), "html", null, true);
            echo "/prenom:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 23), "prenomc", [], "any", false, false, false, 23), "html", null, true);
            echo "/email:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 23), "emailc", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td style=\"display: flex;gap: 10px;\">
                    <Button>  <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_show", ["id" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Show</a></Button>
                        <Button>  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Edit</a></Button>
                ";
            // line 27
            echo twig_include($this->env, $context, "infotrafic/_delete_form.html.twig");
            echo "
                <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotraffic_like", ["infoid" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" method=\"post\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"far fa-thumbs-up\"></i></button>
                </form>
    
                <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotraffic_dislike", ["infoid" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" method=\"post\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"far fa-thumbs-down\"></i></button>
                </form>
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
            // line 38
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infotrafic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "    <div id=\"flash-message\" class=\"alert alert-success\">
        ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            echo "  <div class=\"d-flex justify-content-center my-4\">
      ";
            // line 51
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 51, $this->source); })()));
            echo "
  </div>
";
        }
        // line 54
        echo "</div>
</div>

   <Button> <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_new");
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
        return "infotrafic/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 57,  205 => 54,  199 => 51,  196 => 50,  193 => 49,  184 => 46,  181 => 45,  177 => 44,  173 => 42,  164 => 38,  145 => 32,  138 => 28,  134 => 27,  130 => 26,  126 => 25,  117 => 23,  113 => 22,  109 => 21,  106 => 20,  88 => 19,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Infotrafic index{% endblock %}

{% block body %}
    <h1>Infotrafic List</h1>
    <div class=\"d-flex justify-content-center mt-4\">
    <div class=\"text-center\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Type</th>
                <th>Description</th>
                <th>Chauffeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for infotrafic in infotrafics %}
            <tr>
                <td>{{ infotrafic.type }}</td>
                <td>{{ infotrafic.description }}</td>
                <td>nom:{{infotrafic.chauffeur.nomc }}/prenom:{{infotrafic.chauffeur.prenomc }}/email:{{infotrafic.chauffeur.emailc }}</td>
                <td style=\"display: flex;gap: 10px;\">
                    <Button>  <a href=\"{{ path('app_infotrafic_show', {'id': infotrafic.id}) }}\">Show</a></Button>
                        <Button>  <a href=\"{{ path('app_infotrafic_edit', {'id': infotrafic.id}) }}\">Edit</a></Button>
                {{ include('infotrafic/_delete_form.html.twig') }}
                <form action=\"{{ path('app_infotraffic_like', {'infoid': infotrafic.id}) }}\" method=\"post\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"far fa-thumbs-up\"></i></button>
                </form>
    
                <form action=\"{{ path('app_infotraffic_dislike', {'infoid': infotrafic.id}) }}\" method=\"post\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"far fa-thumbs-down\"></i></button>
                </form>
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
</div>

   <Button> <a href=\"{{ path('app_infotrafic_new') }}\">Create new</a></Button>


   
   



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
        th, td {
            border: 1px solid ; /* purple border */
           padding: 0.5rem;
           text-align: center;
           
          }

         
        
    </style>

{% endblock %}
", "infotrafic/index.html.twig", "C:\\Users\\asus\\Desktop\\pidev3éme\\AchrefProject\\AchrefProject\\templates\\infotrafic\\index.html.twig");
    }
}
