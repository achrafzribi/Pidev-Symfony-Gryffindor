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
class __TwigTemplate_fc8b46a2ee6548015b850bb81b096d9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
<html class=\"wide wow-animation\" lang=\"en\">
  <head>
    <title>Home</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-5EJNQ2e2q3qejXm5FtJspRLZnjslJ3wLx90YY/XbnOJp+ppg1EBtwfJX9mlNV47oixP2QIYUo7OuLJ6Tb+VUOw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-1234567890\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-/yg6P5vMHW+M5j/aI5HhZ2XBv+TM1S0X8drhwyPvcJ3NckpO4f4z8GGFhRorHJ1xvRGhAVtXJmxK70RojtT1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/fonts.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/style.css"), "html", null, true);
        echo "\">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class=\"ie-panel\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/ie8-panel/warning_bar_0000_us.jpg"), "html", null, true);
        echo "\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <div class=\"preloader\">
      <div class=\"preloader-body\">
        <div class=\"cssload-container\">
          <div class=\"cssload-speeding-wheel\"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class=\"page\">
      <!-- Page Header--><a class=\"banner banner-top\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/intense_02.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
      <header class=\"section page-header\">
        <!-- RD Navbar-->
        <div class=\"rd-navbar-wrap\">
          <nav class=\"rd-navbar rd-navbar-corporate\" data-layout=\"rd-navbar-fixed\" data-sm-layout=\"rd-navbar-fixed\" data-md-layout=\"rd-navbar-fixed\" data-md-device-layout=\"rd-navbar-fixed\" data-lg-layout=\"rd-navbar-static\" data-lg-device-layout=\"rd-navbar-fixed\" data-xl-layout=\"rd-navbar-static\" data-xl-device-layout=\"rd-navbar-static\" data-xxl-layout=\"rd-navbar-static\" data-xxl-device-layout=\"rd-navbar-static\" data-lg-stick-up-offset=\"46px\" data-xl-stick-up-offset=\"46px\" data-xxl-stick-up-offset=\"106px\" data-lg-stick-up=\"true\" data-xl-stick-up=\"true\" data-xxl-stick-up=\"true\">
            <div class=\"rd-navbar-collapse-toggle rd-navbar-fixed-element-1\" data-rd-navbar-toggle=\".rd-navbar-collapse\"><span></span></div>
            <div class=\"rd-navbar-aside-outer\">
              <div class=\"rd-navbar-aside\">
                <!-- RD Navbar Panel-->
                <div class=\"rd-navbar-panel\">
                  <!-- RD Navbar Toggle-->
                  <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar-nav-wrap\"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class=\"rd-navbar-brand\">
                    <!--Brand--><a class=\"brand\" href=\"index.html\"><img src=\"#\" alt=\"\" width=\"225\" height=\"18\"/></a>
                  </div>
                </div>
                <div class=\"rd-navbar-aside-right rd-navbar-collapse\">
                  <ul class=\"rd-navbar-corporate-contacts\">
                    <li>
                      <div class=\"unit unit-spacing-xs\">
                        <div class=\"unit-left\"><span class=\"icon fa fa-clock-o\"></span></div>
                        <div class=\"unit-body\">
                          <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class=\"unit unit-spacing-xs\">
                        <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                        <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                      </div>
                    </li>
                  </ul><a class=\"button button-md button-default-outline-2 button-ujarak\" href=\"#\">Get a Free Quote</a>
                </div>
              </div>
            </div>
            <div class=\"rd-navbar-main-outer\">
              <div class=\"rd-navbar-main\">
                <div class=\"rd-navbar-nav-wrap\">
                  <ul class=\"list-inline list-inline-md rd-navbar-corporate-list-social\">
                    <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class=\"rd-navbar-nav\">
                    <li class=\"rd-nav-item active\"><a class=\"rd-nav-link\" href=\"index.html\">Home</a>
                    </li>
                    <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"about.html\">About</a>
                    </li>
                    <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"typography.html\">Typography</a>
                    </li>
                    <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"contact-us.html\">Contact Us</a>
                    </li>
                     <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_index");
        echo "\">Info Trafic</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "      
      <!-- Page Footer--><a class=\"banner\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/intense_big_02.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
      <footer class=\"section footer-corporate context-dark\">
      
        <div class=\"footer-corporate-inset\">
          <div class=\"container\">
            <div class=\"row row-40 justify-content-lg-between\">
              <div class=\"col-sm-6 col-md-12 col-lg-3 col-xl-4\">
                <div class=\"oh-desktop\">
                  <div class=\"wow slideInRight\" data-wow-delay=\"0s\">
                    <h6 class=\"text-spacing-100 text-uppercase\">Contact us</h6>
                    <ul class=\"footer-contacts d-inline-block d-sm-block\">
                      <li>
                        <div class=\"unit\">
                          <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                          <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class=\"unit\">
                          <div class=\"unit-left\"><span class=\"icon fa fa-envelope\"></span></div>
                          <div class=\"unit-body\"><a class=\"link-aemail\" href=\"mailto:#\">info@demolink.org</a></div>
                        </div>
                      </li>
                      <li>
                        <div class=\"unit\">
                          <div class=\"unit-left\"><span class=\"icon fa fa-location-arrow\"></span></div>
                          <div class=\"unit-body\"><a class=\"link-location\" href=\"#\">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-5 col-lg-3 col-xl-4\">
                <div class=\"oh-desktop\">
                  <div class=\"wow slideInDown\" data-wow-delay=\"0s\">
                    <h6 class=\"text-spacing-100 text-uppercase\">Popular news</h6>
                    <!-- Post Minimal 2-->
                    <article class=\"post post-minimal-2\">
                      <p class=\"post-minimal-2-title\"><a href=\"#\">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                      <div class=\"post-minimal-2-time\">
                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class=\"post post-minimal-2\">
                      <p class=\"post-minimal-2-title\"><a href=\"#\">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                      <div class=\"post-minimal-2-time\">
                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-11 col-md-7 col-lg-5 col-xl-4\">
                <div class=\"oh-desktop\">
                  <div class=\"wow slideInLeft\" data-wow-delay=\"0s\">
                    <h6 class=\"text-spacing-100 text-uppercase\">Quick links</h6>
                    <ul class=\"row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2\">
                      <li><a href=\"about.html\">About us</a></li>
                      <li><a href=\"#\">Our Tours</a></li>
                      <li><a href=\"#\">Our Team</a></li>
                      <li><a href=\"#\">Gallery</a></li>
                      <li><a href=\"#\">Blog</a></li>
                    </ul>
                    <div class=\"group-md group-middle justify-content-sm-start\"><a class=\"button button-lg button-primary button-ujarak\" href=\"#\">Get in touch</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"footer-corporate-bottom-panel\">
          <div class=\"container\">
            <div class=\"row justfy-content-xl-space-berween row-10 align-items-md-center2\">
              <div class=\"col-sm-6 col-md-4 text-sm-right text-md-center\">
                <div>
                  <ul class=\"list-inline list-inline-sm footer-social-list-2\">
                    <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 order-sm-first\">
                <!-- Rights-->
                <p class=\"rights\"><span>&copy;&nbsp;</span><span class=\"copyright-year\"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href=\"https://www.templatemonster.com\">TemplateMonster</a></p>
              </div>
              <div class=\"col-sm-6 col-md-4 text-md-right\">
                <p class=\"rights\"><a href=\"#\">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class=\"snackbars\" id=\"form-output-global\"></div>

    <!-- Javascript-->  
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/script.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 98
        echo "      ";
        
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
        return array (  290 => 98,  283 => 97,  273 => 202,  269 => 201,  165 => 100,  162 => 99,  160 => 97,  148 => 88,  89 => 32,  76 => 22,  69 => 18,  65 => 17,  61 => 16,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"wide wow-animation\" lang=\"en\">
  <head>
    <title>Home</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <link rel=\"icon\" href=\"{{asset('front_office/images/favicon.ico')}}\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-5EJNQ2e2q3qejXm5FtJspRLZnjslJ3wLx90YY/XbnOJp+ppg1EBtwfJX9mlNV47oixP2QIYUo7OuLJ6Tb+VUOw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-1234567890\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-/yg6P5vMHW+M5j/aI5HhZ2XBv+TM1S0X8drhwyPvcJ3NckpO4f4z8GGFhRorHJ1xvRGhAVtXJmxK70RojtT1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400\">
    <link rel=\"stylesheet\" href=\"{{asset('front_office/css/bootstrap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front_office/css/fonts.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('front_office/css/style.css')}}\">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class=\"ie-panel\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"{{asset('front_office/images/ie8-panel/warning_bar_0000_us.jpg')}}\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <div class=\"preloader\">
      <div class=\"preloader-body\">
        <div class=\"cssload-container\">
          <div class=\"cssload-speeding-wheel\"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class=\"page\">
      <!-- Page Header--><a class=\"banner banner-top\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"{{asset('front_office/images/intense_02.jpg')}}\" alt=\"\"/></a>
      <header class=\"section page-header\">
        <!-- RD Navbar-->
        <div class=\"rd-navbar-wrap\">
          <nav class=\"rd-navbar rd-navbar-corporate\" data-layout=\"rd-navbar-fixed\" data-sm-layout=\"rd-navbar-fixed\" data-md-layout=\"rd-navbar-fixed\" data-md-device-layout=\"rd-navbar-fixed\" data-lg-layout=\"rd-navbar-static\" data-lg-device-layout=\"rd-navbar-fixed\" data-xl-layout=\"rd-navbar-static\" data-xl-device-layout=\"rd-navbar-static\" data-xxl-layout=\"rd-navbar-static\" data-xxl-device-layout=\"rd-navbar-static\" data-lg-stick-up-offset=\"46px\" data-xl-stick-up-offset=\"46px\" data-xxl-stick-up-offset=\"106px\" data-lg-stick-up=\"true\" data-xl-stick-up=\"true\" data-xxl-stick-up=\"true\">
            <div class=\"rd-navbar-collapse-toggle rd-navbar-fixed-element-1\" data-rd-navbar-toggle=\".rd-navbar-collapse\"><span></span></div>
            <div class=\"rd-navbar-aside-outer\">
              <div class=\"rd-navbar-aside\">
                <!-- RD Navbar Panel-->
                <div class=\"rd-navbar-panel\">
                  <!-- RD Navbar Toggle-->
                  <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar-nav-wrap\"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class=\"rd-navbar-brand\">
                    <!--Brand--><a class=\"brand\" href=\"index.html\"><img src=\"#\" alt=\"\" width=\"225\" height=\"18\"/></a>
                  </div>
                </div>
                <div class=\"rd-navbar-aside-right rd-navbar-collapse\">
                  <ul class=\"rd-navbar-corporate-contacts\">
                    <li>
                      <div class=\"unit unit-spacing-xs\">
                        <div class=\"unit-left\"><span class=\"icon fa fa-clock-o\"></span></div>
                        <div class=\"unit-body\">
                          <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class=\"unit unit-spacing-xs\">
                        <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                        <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                      </div>
                    </li>
                  </ul><a class=\"button button-md button-default-outline-2 button-ujarak\" href=\"#\">Get a Free Quote</a>
                </div>
              </div>
            </div>
            <div class=\"rd-navbar-main-outer\">
              <div class=\"rd-navbar-main\">
                <div class=\"rd-navbar-nav-wrap\">
                  <ul class=\"list-inline list-inline-md rd-navbar-corporate-list-social\">
                    <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class=\"rd-navbar-nav\">
                    <li class=\"rd-nav-item active\"><a class=\"rd-nav-link\" href=\"index.html\">Home</a>
                    </li>
                    <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"about.html\">About</a>
                    </li>
                    <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"typography.html\">Typography</a>
                    </li>
                    <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"contact-us.html\">Contact Us</a>
                    </li>
                     <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"{{path('app_infotrafic_index')}}\">Info Trafic</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      {% block body %}
      {% endblock %}
      
      <!-- Page Footer--><a class=\"banner\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"{{asset('front_office/images/intense_big_02.jpg')}}\" alt=\"\"/></a>
      <footer class=\"section footer-corporate context-dark\">
      
        <div class=\"footer-corporate-inset\">
          <div class=\"container\">
            <div class=\"row row-40 justify-content-lg-between\">
              <div class=\"col-sm-6 col-md-12 col-lg-3 col-xl-4\">
                <div class=\"oh-desktop\">
                  <div class=\"wow slideInRight\" data-wow-delay=\"0s\">
                    <h6 class=\"text-spacing-100 text-uppercase\">Contact us</h6>
                    <ul class=\"footer-contacts d-inline-block d-sm-block\">
                      <li>
                        <div class=\"unit\">
                          <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                          <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class=\"unit\">
                          <div class=\"unit-left\"><span class=\"icon fa fa-envelope\"></span></div>
                          <div class=\"unit-body\"><a class=\"link-aemail\" href=\"mailto:#\">info@demolink.org</a></div>
                        </div>
                      </li>
                      <li>
                        <div class=\"unit\">
                          <div class=\"unit-left\"><span class=\"icon fa fa-location-arrow\"></span></div>
                          <div class=\"unit-body\"><a class=\"link-location\" href=\"#\">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-5 col-lg-3 col-xl-4\">
                <div class=\"oh-desktop\">
                  <div class=\"wow slideInDown\" data-wow-delay=\"0s\">
                    <h6 class=\"text-spacing-100 text-uppercase\">Popular news</h6>
                    <!-- Post Minimal 2-->
                    <article class=\"post post-minimal-2\">
                      <p class=\"post-minimal-2-title\"><a href=\"#\">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                      <div class=\"post-minimal-2-time\">
                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class=\"post post-minimal-2\">
                      <p class=\"post-minimal-2-title\"><a href=\"#\">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                      <div class=\"post-minimal-2-time\">
                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-11 col-md-7 col-lg-5 col-xl-4\">
                <div class=\"oh-desktop\">
                  <div class=\"wow slideInLeft\" data-wow-delay=\"0s\">
                    <h6 class=\"text-spacing-100 text-uppercase\">Quick links</h6>
                    <ul class=\"row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2\">
                      <li><a href=\"about.html\">About us</a></li>
                      <li><a href=\"#\">Our Tours</a></li>
                      <li><a href=\"#\">Our Team</a></li>
                      <li><a href=\"#\">Gallery</a></li>
                      <li><a href=\"#\">Blog</a></li>
                    </ul>
                    <div class=\"group-md group-middle justify-content-sm-start\"><a class=\"button button-lg button-primary button-ujarak\" href=\"#\">Get in touch</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"footer-corporate-bottom-panel\">
          <div class=\"container\">
            <div class=\"row justfy-content-xl-space-berween row-10 align-items-md-center2\">
              <div class=\"col-sm-6 col-md-4 text-sm-right text-md-center\">
                <div>
                  <ul class=\"list-inline list-inline-sm footer-social-list-2\">
                    <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                    <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 order-sm-first\">
                <!-- Rights-->
                <p class=\"rights\"><span>&copy;&nbsp;</span><span class=\"copyright-year\"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href=\"https://www.templatemonster.com\">TemplateMonster</a></p>
              </div>
              <div class=\"col-sm-6 col-md-4 text-md-right\">
                <p class=\"rights\"><a href=\"#\">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class=\"snackbars\" id=\"form-output-global\"></div>

    <!-- Javascript-->  
    <script src=\"{{asset('front_office/js/core.min.js')}}\"></script>
    <script src=\"{{asset('front_office/js/script.js')}}\"></script>
  </body>
</html>", "baseFront.html.twig", "C:\\Users\\asus\\Desktop\\AchrefProject\\AchrefProject\\templates\\baseFront.html.twig");
    }
}
