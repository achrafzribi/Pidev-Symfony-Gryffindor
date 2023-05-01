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
class __TwigTemplate_1cdfe852372be325bb55e20f3919be24 extends Template
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
        echo "

 <head>
    <title>Search Example</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script>
      \$(document).ready(function() {
  // Hide the results list on page load
  \$('#result-list').addClass('hidden');

  // Show the results list when the search box is clicked
  \$('#search-box').on('click', function() {
    \$('#result-list').removeClass('hidden');
  });

  // Hide the results list when the search box loses focus
  \$('#search-box').on('blur', function() {
    \$('#result-list').addClass('hidden');
  });

  // Hide the results list when the user presses the \"Tab\" key to move to another element on the page
  \$('#search-box').on('keydown', function(event) {
    if (event.keyCode === 9) {
      \$('#result-list').addClass('hidden');
    }
  });

  // TODO: Add AJAX functionality to fetch search results and update the list
});

    </script>
  </head>
    <script>
        \$(document).ready(function(){
            \$(\".btn1\").click(function(){
                \$(\"h1\").slideUp();
            });
            \$(\".btn2\").click(function(){
                \$(\"h1\").slideDown();
            });
            \$(\".btn3\").click(function(){
                \$(\"h1\").slideToggle();
            });
        });
    </script>
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
       <input type=\"text\" id=\"search-box\" placeholder=\"Search...\">
<div id=\"result-list\"></div>

<script>
    // Get the search field
    var searchField = document.getElementById(\"search\");

    // Get the table body
    var tableBody = document.getElementById(\"myTable\").getElementsByTagName(\"tbody\")[0];

    // Add an event listener to the search field
    searchField.addEventListener(\"keyup\", function() {
        // Get the search value
        var searchValue = this.value.toLowerCase();

        // Loop through all the rows in the table body
        for (var i = 0; i < tableBody.rows.length; i++) {
            var row = tableBody.rows[i];

            // Get the cells in the row
            var cells = row.getElementsByTagName(\"td\");

            // Loop through all the cells in the row
            var found = false;
            for (var j = 0; j < cells.length; j++) {
                var cell = cells[j];

                // Check if the cell value contains the search value
                if (cell.innerHTML.toLowerCase().indexOf(searchValue) > -1) {
                    found = true;
                    break;
                }
            }

            // Show or hide the row based on whether the search value was found
            if (found) {
                row.style.display = \"\";
            } else {
                row.style.display = \"none\";
            }
        }
    });
</script>

";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["infotrafic"]) {
            // line 109
            echo "    <tr>
        <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "type", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
        <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "description", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
        <td>nom:";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 112), "nomc", [], "any", false, false, false, 112), "html", null, true);
            echo "/prenom:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 112), "prenomc", [], "any", false, false, false, 112), "html", null, true);
            echo "/email:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["infotrafic"], "chauffeur", [], "any", false, false, false, 112), "emailc", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
        <td style=\"display: flex;gap: 10px;\">
            <Button>  
                <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_show", ["id" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\">Show</a>
            </Button>
            <Button>  
                <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">Edit</a>
            </Button>
            <form action=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotraffic_like", ["infoid" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\" method=\"post\" style=\"display: inline-block;\">
                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                <button type=\"submit\" class=\"btn btn-success btn-sm\"><i class=\"fa fa-thumbs-up\"></i> ";
            // line 122
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["infotrafic"], "likes", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["infotrafic"], "likes", [], "any", false, false, false, 122), 0)) : (0)), "html", null, true);
            echo "</button>
            </form>
            <form action=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotraffic_dislike", ["infoid" => twig_get_attribute($this->env, $this->source, $context["infotrafic"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\" method=\"post\" style=\"display: inline-block;\">
                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-thumbs-down\"></i> ";
            // line 126
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["infotrafic"], "dislikes", [], "any", true, true, false, 126)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["infotrafic"], "dislikes", [], "any", false, false, false, 126), 0)) : (0)), "html", null, true);
            echo "</button>
            </form>
        </td>
    </tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infotrafic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
        </tbody>
    </table>
    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 137
            echo "    <div id=\"flash-message\" class=\"alert alert-success\">
        ";
            // line 138
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 141, $this->source); })())) > 0)) {
            // line 142
            echo "  <div class=\"d-flex justify-content-center my-4\">
      ";
            // line 143
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["infotrafics"]) || array_key_exists("infotrafics", $context) ? $context["infotrafics"] : (function () { throw new RuntimeError('Variable "infotrafics" does not exist.', 143, $this->source); })()));
            echo "
  </div>
";
        }
        // line 146
        echo "</div>
</div>

   <Button> <a href=\"";
        // line 149
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
    <style>
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
        return "infotrafic/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 149,  274 => 146,  268 => 143,  265 => 142,  262 => 141,  253 => 138,  250 => 137,  246 => 136,  241 => 133,  228 => 126,  223 => 124,  218 => 122,  213 => 120,  208 => 118,  202 => 115,  192 => 112,  188 => 111,  184 => 110,  181 => 109,  177 => 108,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Infotrafic index{% endblock %}

{% block body %}


 <head>
    <title>Search Example</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script>
      \$(document).ready(function() {
  // Hide the results list on page load
  \$('#result-list').addClass('hidden');

  // Show the results list when the search box is clicked
  \$('#search-box').on('click', function() {
    \$('#result-list').removeClass('hidden');
  });

  // Hide the results list when the search box loses focus
  \$('#search-box').on('blur', function() {
    \$('#result-list').addClass('hidden');
  });

  // Hide the results list when the user presses the \"Tab\" key to move to another element on the page
  \$('#search-box').on('keydown', function(event) {
    if (event.keyCode === 9) {
      \$('#result-list').addClass('hidden');
    }
  });

  // TODO: Add AJAX functionality to fetch search results and update the list
});

    </script>
  </head>
    <script>
        \$(document).ready(function(){
            \$(\".btn1\").click(function(){
                \$(\"h1\").slideUp();
            });
            \$(\".btn2\").click(function(){
                \$(\"h1\").slideDown();
            });
            \$(\".btn3\").click(function(){
                \$(\"h1\").slideToggle();
            });
        });
    </script>
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
       <input type=\"text\" id=\"search-box\" placeholder=\"Search...\">
<div id=\"result-list\"></div>

<script>
    // Get the search field
    var searchField = document.getElementById(\"search\");

    // Get the table body
    var tableBody = document.getElementById(\"myTable\").getElementsByTagName(\"tbody\")[0];

    // Add an event listener to the search field
    searchField.addEventListener(\"keyup\", function() {
        // Get the search value
        var searchValue = this.value.toLowerCase();

        // Loop through all the rows in the table body
        for (var i = 0; i < tableBody.rows.length; i++) {
            var row = tableBody.rows[i];

            // Get the cells in the row
            var cells = row.getElementsByTagName(\"td\");

            // Loop through all the cells in the row
            var found = false;
            for (var j = 0; j < cells.length; j++) {
                var cell = cells[j];

                // Check if the cell value contains the search value
                if (cell.innerHTML.toLowerCase().indexOf(searchValue) > -1) {
                    found = true;
                    break;
                }
            }

            // Show or hide the row based on whether the search value was found
            if (found) {
                row.style.display = \"\";
            } else {
                row.style.display = \"none\";
            }
        }
    });
</script>

{% for infotrafic in infotrafics %}
    <tr>
        <td>{{ infotrafic.type }}</td>
        <td>{{ infotrafic.description }}</td>
        <td>nom:{{infotrafic.chauffeur.nomc }}/prenom:{{infotrafic.chauffeur.prenomc }}/email:{{infotrafic.chauffeur.emailc }}</td>
        <td style=\"display: flex;gap: 10px;\">
            <Button>  
                <a href=\"{{ path('app_infotrafic_show', {'id': infotrafic.id}) }}\">Show</a>
            </Button>
            <Button>  
                <a href=\"{{ path('app_infotrafic_edit', {'id': infotrafic.id}) }}\">Edit</a>
            </Button>
            <form action=\"{{ path('app_infotraffic_like', {'infoid': infotrafic.id}) }}\" method=\"post\" style=\"display: inline-block;\">
                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                <button type=\"submit\" class=\"btn btn-success btn-sm\"><i class=\"fa fa-thumbs-up\"></i> {{ infotrafic.likes|default(0) }}</button>
            </form>
            <form action=\"{{ path('app_infotraffic_dislike', {'infoid': infotrafic.id}) }}\" method=\"post\" style=\"display: inline-block;\">
                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                <button type=\"submit\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-thumbs-down\"></i> {{ infotrafic.dislikes|default(0) }}</button>
            </form>
        </td>
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
    <style>
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
", "infotrafic/index.html.twig", "C:\\Users\\medzr\\OneDrive\\Bureau\\AchrefProject\\AchrefProject\\templates\\infotrafic\\index.html.twig");
    }
}
