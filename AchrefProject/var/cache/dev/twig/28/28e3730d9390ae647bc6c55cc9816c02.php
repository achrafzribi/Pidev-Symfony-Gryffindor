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

/* baseFront.html.twig */
class __TwigTemplate_7a46937ef812289d6c0c528a458a7ed5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<!-- Mirrored from prium.github.io/tryposh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 00:30:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--  --><!--    Document Title--><!-- =============================================-->
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--  --><!--    Favicons--><!--    =============================================-->
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/favicons/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/favicons/favicon-96x96.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/favicons/favicon-16x16.png"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/favicons/ms-icon-144x144.png"), "html", null, true);
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!--  --><!--    Stylesheets--><!--    =============================================--><!-- Default stylesheets-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Template specific stylesheets-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,400i \" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/iconsmind/iconsmind.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/css-hamburgers/dist/hamburgers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Main stylesheet and color file-->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
 <data-spy=\"scroll\" data-target=\".inner-link\" data-offset=\"60\">
    <main>
        <div class=\"znav-container znav-white znav-fixed border-bottom color-10\" id=\"znav-container\">
            <div class=\"container\">
                <nav class=\"navbar navbar-toggleable-md\"><button class=\"navbar-toggler navbar-toggler-right\"
                        type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                        aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <div class=\"hamburger hamburger--emphatic\">
                            <div class=\"hamburger-box\">
                                <div class=\"hamburger-inner\"></div>
                            </div>
                        </div>
                    </button><a class=\"navbar-brand overflow-hidden\" href=\"#\"><img
                            src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/posh-logo.png"), "html", null, true);
        echo "\" alt='logo' width='80px'></a>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li><a href=\"JavaScript:void(0)\">Settings</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"JavaScript:void(0)\">Reclamation</a>
                                        <ul class=\"dropdown dropdown-push-left\">
                                            <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_index");
        echo "\">Ajouter infoTraffic</a></li>
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                 
                </nav>
               
            </div><!-- /.container-->
          

        </div><!-- /.znav-container-->

      
        <section class=\"font-1 py-0\">
            <div class=\"container\">
             
                <div class=\"row h-lg-full align-items-end overflow-hidden\">
                    <div class=\"col text-center pt-8\">
                    
                        <h6 class=\"ls text-uppercase mb-5\">Introducing POSH</h6>
                        <h2 class=\"fw-300\">welcome to TicTacGo <span class=\"color-primary\"><br class=\"hidden-sm-up\"><span
                                    class=\"typed-text fw-400\"
                                    data-typed-text='[\"beautiful\",\"gorgeous\",\"outstanding\",\"remarkable\",\"stunning\"]'></span></span><br
                                class=\"hidden-sm-up\"> websites</h2>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        <section class=\"font-1 text-center background-1 py-6 py-xl-9\" id=\"home-demos\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-9 col-lg-10\">
                        <div class=\"fs-2 color-7 fw-300\">No matter the task, the new POSH is up to it — and even more.
                            See for yourself — all the pre-made demos, inspired by world's finest websites, are <span
                                class=\"fw-600 color-white\">made with POSH. </span>And this is only a tip of the iceberg
                            of what you will get.</div>
                        <hr class=\"short color-7 mt-6 mb-5\">
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <section class=\"font-1 text-center background-1 pt-0 sortable\">
            <div class=\"container-fluid\">
                <div class=\"row sortable-container\"><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\"
                    </a><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\" href=\"\">
                        <h6 class=\"fs-0 mb-3\">Profile</h6><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/screenshots/page-profile.jpg"), "html", null, true);
        echo "\">
                    </a><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\" href=\"\">
                        <h6 class=\"fs-0 mb-3\">Settings</h6><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/screenshots/page-settings.jpg"), "html", null, true);
        echo "\">
                    </a><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\" href=\"\">
                        <h6 class=\"fs-0 mb-3\">Account Recovery</h6><img
                            src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/screenshots/page-recovery.jpg"), "html", null, true);
        echo "\">
                    </a></div><!--/.row-->
            </div><!--/.container-->
        </section>
        <section class=\"font-1 lh-3 fw-400 pb-0\" style=\"letter-spacing: -1px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">Optimized for every screen size down to a single pixel.</div>
                    </div>
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">The most modular layout system on the planet.</div>
                    </div>
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">More powerful than most HTML5 templates.</div>
                    </div>
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">Bootstrap 4 takes POSH to a whole new level.</div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <section class=\"text-center font-1 py-0\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8 col-xl-8 py-8\">
                        <hr class=\"short color-7 mb-6\">
                        <p class=\"lead color-1\">Want to see the magic? Start creating with POSH</p>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <footer class=\"background-1 color-8 py-3 fs--1 fw-600 font-heading\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-auto font-1\">&copy; 2017 POSH &trade; Inc. </div>
                    <div class=\"col fs-0 text-right\"><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-facebook\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-twitter\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-instagram\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-behance\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-dribbble\"></i></a></div>
                </div>
            </div>
        </footer>
    </main>
    <!--  --><!--    JavaScripts--><!--    =============================================-->
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Hotjar Tracking Code for http://markup.themewagon.com/tryposh-->
    <script>(function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 588723, hjsv: 5 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');</script>
    <script>(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-76729372-3', 'auto');
        ga('send', 'pageview');</script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/typed.js/dist/typed.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/lib/isotope/dist/isotope.pkgd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/core.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- Mirrored from prium.github.io/tryposh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 00:30:42 GMT -->

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Front";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 85,  317 => 84,  304 => 12,  293 => 182,  289 => 181,  285 => 180,  281 => 179,  260 => 161,  256 => 160,  252 => 159,  198 => 108,  192 => 105,  187 => 103,  168 => 86,  166 => 84,  131 => 52,  121 => 45,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  79 => 21,  73 => 18,  68 => 16,  64 => 15,  60 => 14,  55 => 12,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">
<!-- Mirrored from prium.github.io/tryposh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 00:30:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--  --><!--    Document Title--><!-- =============================================-->
    <title>{% block title %}Front{% endblock %}</title>
    <!--  --><!--    Favicons--><!--    =============================================-->
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{asset('assets2/images/favicons/favicon-32x32.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{asset('assets2/images/favicons/favicon-96x96.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('assets2/images/favicons/favicon-16x16.png')}}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{asset('assets2/images/favicons/ms-icon-144x144.png')}}\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!--  --><!--    Stylesheets--><!--    =============================================--><!-- Default stylesheets-->
    <link href=\"{{asset('assets2/lib/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Template specific stylesheets-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,400i \" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/lib/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/lib/iconsmind/iconsmind.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/lib/css-hamburgers/dist/hamburgers.css')}}\" rel=\"stylesheet\"><!-- Main stylesheet and color file-->
    <link href=\"{{asset('assets2/css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/css/custom.css')}}\" rel=\"stylesheet\">
</head>
 <data-spy=\"scroll\" data-target=\".inner-link\" data-offset=\"60\">
    <main>
        <div class=\"znav-container znav-white znav-fixed border-bottom color-10\" id=\"znav-container\">
            <div class=\"container\">
                <nav class=\"navbar navbar-toggleable-md\"><button class=\"navbar-toggler navbar-toggler-right\"
                        type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                        aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <div class=\"hamburger hamburger--emphatic\">
                            <div class=\"hamburger-box\">
                                <div class=\"hamburger-inner\"></div>
                            </div>
                        </div>
                    </button><a class=\"navbar-brand overflow-hidden\" href=\"#\"><img
                            src=\"{{asset('assets2/images/posh-logo.png')}}\" alt='logo' width='80px'></a>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li><a href=\"JavaScript:void(0)\">Settings</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"JavaScript:void(0)\">Reclamation</a>
                                        <ul class=\"dropdown dropdown-push-left\">
                                            <li><a href=\"{{ path('app_infotrafic_index') }}\">Ajouter infoTraffic</a></li>
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                 
                </nav>
               
            </div><!-- /.container-->
          

        </div><!-- /.znav-container-->

      
        <section class=\"font-1 py-0\">
            <div class=\"container\">
             
                <div class=\"row h-lg-full align-items-end overflow-hidden\">
                    <div class=\"col text-center pt-8\">
                    
                        <h6 class=\"ls text-uppercase mb-5\">Introducing POSH</h6>
                        <h2 class=\"fw-300\">welcome to TicTacGo <span class=\"color-primary\"><br class=\"hidden-sm-up\"><span
                                    class=\"typed-text fw-400\"
                                    data-typed-text='[\"beautiful\",\"gorgeous\",\"outstanding\",\"remarkable\",\"stunning\"]'></span></span><br
                                class=\"hidden-sm-up\"> websites</h2>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        {%block body%}
        {%endblock %}
        <section class=\"font-1 text-center background-1 py-6 py-xl-9\" id=\"home-demos\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-9 col-lg-10\">
                        <div class=\"fs-2 color-7 fw-300\">No matter the task, the new POSH is up to it — and even more.
                            See for yourself — all the pre-made demos, inspired by world's finest websites, are <span
                                class=\"fw-600 color-white\">made with POSH. </span>And this is only a tip of the iceberg
                            of what you will get.</div>
                        <hr class=\"short color-7 mt-6 mb-5\">
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <section class=\"font-1 text-center background-1 pt-0 sortable\">
            <div class=\"container-fluid\">
                <div class=\"row sortable-container\"><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\"
                    </a><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\" href=\"\">
                        <h6 class=\"fs-0 mb-3\">Profile</h6><img src=\"{{asset('assets2/images/screenshots/page-profile.jpg')}}\">
                    </a><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\" href=\"\">
                        <h6 class=\"fs-0 mb-3\">Settings</h6><img src=\"{{asset('assets2/images/screenshots/page-settings.jpg')}}\">
                    </a><a class=\"col-6 col-md-4 mb-5 sortable-item color-9\" href=\"\">
                        <h6 class=\"fs-0 mb-3\">Account Recovery</h6><img
                            src=\"{{asset('assets2/images/screenshots/page-recovery.jpg')}}\">
                    </a></div><!--/.row-->
            </div><!--/.container-->
        </section>
        <section class=\"font-1 lh-3 fw-400 pb-0\" style=\"letter-spacing: -1px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">Optimized for every screen size down to a single pixel.</div>
                    </div>
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">The most modular layout system on the planet.</div>
                    </div>
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">More powerful than most HTML5 templates.</div>
                    </div>
                    <div class=\"col-lg-6 px-5 py-3\">
                        <hr class=\"color-danger\">
                        <div class=\"fs-3\">Bootstrap 4 takes POSH to a whole new level.</div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <section class=\"text-center font-1 py-0\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8 col-xl-8 py-8\">
                        <hr class=\"short color-7 mb-6\">
                        <p class=\"lead color-1\">Want to see the magic? Start creating with POSH</p>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>
        <footer class=\"background-1 color-8 py-3 fs--1 fw-600 font-heading\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-auto font-1\">&copy; 2017 POSH &trade; Inc. </div>
                    <div class=\"col fs-0 text-right\"><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-facebook\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-twitter\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-instagram\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-behance\"></i></a><a class=\"p-2 color-8\" href=\"#\"><i
                                class=\"fa fa-dribbble\"></i></a></div>
                </div>
            </div>
        </footer>
    </main>
    <!--  --><!--    JavaScripts--><!--    =============================================-->
    <script src=\"{{asset('assets2/lib/jquery/dist/jquery.js')}}\"></script>
    <script src=\"{{asset('assets2/js/tether.min.js')}}\"></script>
    <script src=\"{{asset('assets2/lib/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <!-- Hotjar Tracking Code for http://markup.themewagon.com/tryposh-->
    <script>(function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 588723, hjsv: 5 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');</script>
    <script>(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-76729372-3', 'auto');
        ga('send', 'pageview');</script>
    <script src=\"{{asset('assets2/lib/typed.js/dist/typed.min.js')}}\"></script>
    <script src=\"{{asset('assets2/lib/isotope/dist/isotope.pkgd.js')}}\"></script>
    <script src=\"{{asset('assets2/js/core.js')}}\"></script>
    <script src=\"{{asset('assets2/js/main.js')}}\"></script>
<!-- Mirrored from prium.github.io/tryposh/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 00:30:42 GMT -->

</html>", "baseFront.html.twig", "C:\\Users\\medzr\\OneDrive\\Bureau\\AchrefProject\\AchrefProject\\templates\\baseFront.html.twig");
    }
}
