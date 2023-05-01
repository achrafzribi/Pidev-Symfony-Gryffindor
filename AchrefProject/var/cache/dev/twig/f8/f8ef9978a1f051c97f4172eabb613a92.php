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
class __TwigTemplate_6e4d026c5f1ba7ad39dc34b806ec5ccc extends Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <canvas id=\"likesChart\" style=\"max-width: 800px; max-height: 500px; display: block; \"></canvas>
    </div>
    <div class=\"col-md-6\">
        <canvas id=\"otherStatsChart\" style=\"max-width: 800px; max-height: 500px; display: block; \"></canvas>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    // Pie chart for likes and dislikes
    var likesCtx = document.getElementById('likesChart').getContext('2d');
    var likesChart = new Chart(likesCtx, {
        type: 'pie',
        data: {
            labels: ['Likes', 'Dislikes'],
            datasets: [{
                label: '# of Items',
                data: [
                    ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["totalLikes"]) || array_key_exists("totalLikes", $context) ? $context["totalLikes"] : (function () { throw new RuntimeError('Variable "totalLikes" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["totaldisLikes"]) || array_key_exists("totaldisLikes", $context) ? $context["totaldisLikes"] : (function () { throw new RuntimeError('Variable "totaldisLikes" does not exist.', 27, $this->source); })()), "html", null, true);
        echo ",
                ],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
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

    // Bar chart for other statistics
    var statsCtx = document.getElementById('otherStatsChart').getContext('2d');
    var statsChart = new Chart(statsCtx, {
        type: 'bar',
        data: {
            labels: ['Total des chauffeurs', 'Total des infoTraffics', 'Moyenne infoTraffics par chauffeur',  'ID avec le plus d\\'infoTraffics'],
            datasets: [{
                label: '# of Items',
                data: [
                    ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["totalChauffeurs"]) || array_key_exists("totalChauffeurs", $context) ? $context["totalChauffeurs"] : (function () { throw new RuntimeError('Variable "totalChauffeurs" does not exist.', 62, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["totalInfotraffics"]) || array_key_exists("totalInfotraffics", $context) ? $context["totalInfotraffics"] : (function () { throw new RuntimeError('Variable "totalInfotraffics" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["averageInfotrafficsPerChauffeurs"]) || array_key_exists("averageInfotrafficsPerChauffeurs", $context) ? $context["averageInfotrafficsPerChauffeurs"] : (function () { throw new RuntimeError('Variable "averageInfotrafficsPerChauffeurs" does not exist.', 64, $this->source); })()), "html", null, true);
        echo ",
                    ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["IDchauffeurwithmostinfotraffic"]) || array_key_exists("IDchauffeurwithmostinfotraffic", $context) ? $context["IDchauffeurwithmostinfotraffic"] : (function () { throw new RuntimeError('Variable "IDchauffeurwithmostinfotraffic" does not exist.', 65, $this->source); })()), "html", null, true);
        echo ",
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
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
        return array (  149 => 65,  145 => 64,  141 => 63,  137 => 62,  99 => 27,  95 => 26,  82 => 15,  75 => 14,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-6\">
        <canvas id=\"likesChart\" style=\"max-width: 800px; max-height: 500px; display: block; \"></canvas>
    </div>
    <div class=\"col-md-6\">
        <canvas id=\"otherStatsChart\" style=\"max-width: 800px; max-height: 500px; display: block; \"></canvas>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    // Pie chart for likes and dislikes
    var likesCtx = document.getElementById('likesChart').getContext('2d');
    var likesChart = new Chart(likesCtx, {
        type: 'pie',
        data: {
            labels: ['Likes', 'Dislikes'],
            datasets: [{
                label: '# of Items',
                data: [
                    {{ totalLikes }},
                    {{ totaldisLikes }},
                ],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
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

    // Bar chart for other statistics
    var statsCtx = document.getElementById('otherStatsChart').getContext('2d');
    var statsChart = new Chart(statsCtx, {
        type: 'bar',
        data: {
            labels: ['Total des chauffeurs', 'Total des infoTraffics', 'Moyenne infoTraffics par chauffeur',  'ID avec le plus d\\'infoTraffics'],
            datasets: [{
                label: '# of Items',
                data: [
                    {{ totalChauffeurs }},
                    {{ totalInfotraffics }},
                    {{ averageInfotrafficsPerChauffeurs }},
                    {{IDchauffeurwithmostinfotraffic}},
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    });
</script>
{% endblock %}
", "chauffeur/chauffeurStats.html.twig", "C:\\Users\\medzr\\OneDrive\\Bureau\\AchrefProject\\AchrefProject\\templates\\chauffeur\\chauffeurStats.html.twig");
    }
}
