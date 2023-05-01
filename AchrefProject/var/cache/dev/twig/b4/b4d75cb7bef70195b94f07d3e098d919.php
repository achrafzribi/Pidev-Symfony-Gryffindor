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

/* chauffeur/chauffeurStats.html.twig */
class __TwigTemplate_3e890fe33407d2680d4c948f78f6f171 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chauffeur/chauffeurStats.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "chauffeur/chauffeurStats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<canvas id=\"myChart\" style=\"max-width: 800px; max-height: 500px; display: block; \"></canvas>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Total des chauffeurs', 'Total des infoTraffics', 'Moyenne infoTraffics par chauffeur',  'ID avec le plus d\\'infoTraffics','Total Likes','Total Dislikes'],
            datasets: [{
                label: '# of Items',
                data: [
                    ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["totalChauffeurs"]) || array_key_exists("totalChauffeurs", $context) ? $context["totalChauffeurs"] : (function () { throw new RuntimeError('Variable "totalChauffeurs" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["totalInfotraffics"]) || array_key_exists("totalInfotraffics", $context) ? $context["totalInfotraffics"] : (function () { throw new RuntimeError('Variable "totalInfotraffics" does not exist.', 19, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["averageInfotrafficsPerChauffeurs"]) || array_key_exists("averageInfotrafficsPerChauffeurs", $context) ? $context["averageInfotrafficsPerChauffeurs"] : (function () { throw new RuntimeError('Variable "averageInfotrafficsPerChauffeurs" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["IDchauffeurwithmostinfotraffic"]) || array_key_exists("IDchauffeurwithmostinfotraffic", $context) ? $context["IDchauffeurwithmostinfotraffic"] : (function () { throw new RuntimeError('Variable "IDchauffeurwithmostinfotraffic" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ", 
                    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["totalLikes"]) || array_key_exists("totalLikes", $context) ? $context["totalLikes"] : (function () { throw new RuntimeError('Variable "totalLikes" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["totaldisLikes"]) || array_key_exists("totaldisLikes", $context) ? $context["totaldisLikes"] : (function () { throw new RuntimeError('Variable "totaldisLikes" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ",
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                            return previousValue + currentValue;
                        });
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                        return percentage + \"% (\" + currentValue + \")\";
                    }
                }
            }
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "chauffeur/chauffeurStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
<canvas id=\"myChart\" style=\"max-width: 800px; max-height: 500px; display: block; \"></canvas>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Total des chauffeurs', 'Total des infoTraffics', 'Moyenne infoTraffics par chauffeur',  'ID avec le plus d\\'infoTraffics','Total Likes','Total Dislikes'],
            datasets: [{
                label: '# of Items',
                data: [
                    {{ totalChauffeurs }},
                    {{ totalInfotraffics }},
                    {{ averageInfotrafficsPerChauffeurs }},
                    {{IDchauffeurwithmostinfotraffic}}, 
                    {{totalLikes}},
                    {{totaldisLikes}},
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                            return previousValue + currentValue;
                        });
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = Math.floor(((currentValue/total) * 100)+0.5);
                        return percentage + \"% (\" + currentValue + \")\";
                    }
                }
            }
        }
    });
</script>
{% endblock %}
", "chauffeur/chauffeurStats.html.twig", "C:\\Users\\asus\\Desktop\\pidev3éme\\AchrefProject\\AchrefProject\\templates\\chauffeur\\chauffeurStats.html.twig");
    }
}
