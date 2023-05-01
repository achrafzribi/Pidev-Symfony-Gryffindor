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

/* baseBack.html.twig */
class __TwigTemplate_9a85fa47988a4061063996412c37a031 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"default-style layout-fixed layout-navbar-fixed\">
   
<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/dashboards_corona.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 14:49:29 GMT -->
<head>
      <title>Empire | B4+ admin template</title>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">
      <meta name=\"description\" content=\"Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template\" />
      <meta name=\"keywords\" content=\"bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard\">
      <meta name=\"author\" content=\"Codedthemes\" />
      <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">
      <!-- Google fonts -->
      <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
      <!-- Icon fonts -->
      <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/ionicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/linearicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/open-iconic.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/pe-icon-7-stroke.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/feather.css"), "html", null, true);
        echo "\">
      <!-- Core stylesheets -->
   <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-material.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/shreerang-material.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/uikit.css"), "html", null, true);
        echo "\">
      <!-- Libs -->
       <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
   </head>
   <body>
      <!-- [ Preloader ] Start -->
      <div class=\"page-loader\">
         <div class=\"bg-primary\"></div>
      </div>
      <!-- [ Preloader ] End -->
      <!-- [ Layout wrapper ] Start -->
      <div class=\"layout-wrapper layout-2\">
         <div class=\"layout-inner\">
            <!-- [ Layout sidenav ] Start -->
            <div id=\"layout-sidenav\" class=\"layout-sidenav sidenav sidenav-vertical bg-white logo-dark\">
               <!-- Brand demo (see assets/css/demo/demo.css) -->
               <div class=\"app-brand demo\">
                  <span class=\"app-brand-logo demo\">
                  <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Brand Logo\" class=\"img-fluid\">
                  </span>
                  <a href=\"index.html\" class=\"app-brand-text demo sidenav-text font-weight-normal ml-2\">Empire</a>
                  <a href=\"javascript:\" class=\"layout-sidenav-toggle sidenav-link text-large ml-auto\">
                  <i class=\"ion ion-md-menu align-middle\"></i>
                  </a>
               </div>
               <div class=\"sidenav-divider mt-0\"></div>
               <!-- Links -->
               <ul class=\"sidenav-inner py-1\">
                  <!-- Dashboards -->
                  <li class=\"sidenav-item active open\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-home\"></i>
                        <div>Dashboards</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-danger\">Hot</div>
                        </div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"#\" class=\"sidenav-link\">
                              <div>Default</div>
                           </a>
                        </li>
                       
                        <li class=\"sidenav-item\">
                           <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chauffeur_index_back");
        echo "\" class=\"sidenav-link\">
                              <div>Chauffeurs</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_infotrafic_index_back");
        echo "\" class=\"sidenav-link\">
                              <div>Info Trafic</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"dashboards_crypto.html\" class=\"sidenav-link\">
                              <div>Crypto</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">New</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"dashboards_project.html\" class=\"sidenav-link\">
                              <div>Project</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-layers\"></i>
                        <div>Widgets</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-primary\">100+</div>
                        </div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"w-simple.html\" class=\"sidenav-link\">
                              <div>Simple</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"w-data.html\" class=\"sidenav-link\">
                              <div>Data</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"w-social.html\" class=\"sidenav-link\">
                              <div>Social</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"w-chart.html\" class=\"sidenav-link\">
                              <div>Chart</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                   <li class=\"sidenav-item\">
                        <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                            <i class=\"sidenav-icon feather icon-layout\"></i>
                            <div>Layouts</div>
                            <div class=\"pl-1 ml-auto\">
                                <div class=\"badge badge-success\">new</div>
                            </div>
                        </a>
                        <ul class=\"sidenav-menu\">
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_sidenav_dark.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Navbar dark</div>
                                </a>
                            </li>
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_header_dark.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Header dark</div>
                                </a>
                            </li>
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_light.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Light layout</div>
                                </a>
                            </li>
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_horizontal.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Horizontal</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                  <!-- Layouts -->
                  <li class=\"sidenav-divider mb-1\"></li>
                    <li class=\"sidenav-header small font-weight-semibold\">Admin Panels</li>
                    <li class=\"sidenav-item\">
                        <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                            <i class=\"sidenav-icon feather icon-activity\"></i>
                            <div>Hospital</div>
                        </a>
                        <ul class=\"sidenav-menu\">
                            <li class=\"sidenav-item\"><a href=\"hospital-dashboard.html\" class=\"sidenav-link\">
                                    <div>Dashboard</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-department.html\" class=\"sidenav-link\">
                                    <div>Department</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-doctor.html\" class=\"sidenav-link\">
                                    <div>Doctor</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-patient.html\" class=\"sidenav-link\">
                                    <div>Patient</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-nurse.html\" class=\"sidenav-link\">
                                    <div>Nurse</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-pharmacist.html\" class=\"sidenav-link\">
                                    <div>Pharmacist</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-laboratorie.html\" class=\"sidenav-link\">
                                    <div>Laboratory</div>
                                </a></li>
                        </ul>
                    </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-package\"></i>
                        <div>Project &amp; CRM</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"project-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"project-customers.html\" class=\"sidenav-link\">
                              <div>Customers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"project-projects.html\" class=\"sidenav-link\">
                              <div>Projects</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"project-task.html\" class=\"sidenav-link\">
                              <div>Task</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-user-check\"></i>
                        <div>Membership</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"member-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-mail-template.html\" class=\"sidenav-link\">
                              <div>Email templates</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-countries.html\" class=\"sidenav-link\">
                              <div>Country</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-coupons.html\" class=\"sidenav-link\">
                              <div>Coupons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-newsletter.html\" class=\"sidenav-link\">
                              <div>Newsletter</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-user.html\" class=\"sidenav-link\">
                              <div>User</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-membership.html\" class=\"sidenav-link\">
                              <div>Membership</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-life-buoy\"></i>
                        <div>Helpdesk</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"help-dashboard.html\" class=\"sidenav-link\">
                              <div>Helpdesk dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-create-ticket.html\" class=\"sidenav-link\">
                              <div>Create ticket</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-ticket.html\" class=\"sidenav-link\">
                              <div>ticket list</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-ticket-details.html\" class=\"sidenav-link\">
                              <div>ticket Details</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-customer.html\" class=\"sidenav-link\">
                              <div>Customer</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-book\"></i>
                        <div>School</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"school-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"school-student.html\" class=\"sidenav-link\">
                              <div>Student</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"school-parents.html\" class=\"sidenav-link\">
                              <div>Parents</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"school-teacher.html\" class=\"sidenav-link\">
                              <div>Teacher</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\" data-toggle=\"tooltip\" title=\"Student Information System\">
                        <i class=\"sidenav-icon feather icon-book\"></i>
                        <div>SIS</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"sis-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-leave.html\" class=\"sidenav-link\">
                              <div>Leave</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-evaluation.html\" class=\"sidenav-link\">
                              <div>Evaluation</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-event.html\" class=\"sidenav-link\">
                              <div>Event</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-circular.html\" class=\"sidenav-link\">
                              <div>Circular</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-course.html\" class=\"sidenav-link\">
                              <div>Course</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-target\"></i>
                        <div>Crypto</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-exchange.html\" class=\"sidenav-link\">
                              <div>Exchange</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-wallet.html\" class=\"sidenav-link\">
                              <div>Wallet</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-transactions.html\" class=\"sidenav-link\">
                              <div>Transactions</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-history.html\" class=\"sidenav-link\">
                              <div>History</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-trading.html\" class=\"sidenav-link\">
                              <div>Trading</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-initial-coin.html\" class=\"sidenav-link\">
                              <div>Initial coin</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-ico-listing.html\" class=\"sidenav-link\">
                              <div>Ico listing</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-shopping-cart\"></i>
                        <div>E-Commerce</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-product.html\" class=\"sidenav-link\">
                              <div>Product</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-product-details.html\" class=\"sidenav-link\">
                              <div>Product details</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-order.html\" class=\"sidenav-link\">
                              <div>Order</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-checkout.html\" class=\"sidenav-link\">
                              <div>Checkout</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-cart.html\" class=\"sidenav-link\">
                              <div>Shopping Cart</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-customers.html\" class=\"sidenav-link\">
                              <div>Customers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-sellers.html\" class=\"sidenav-link\">
                              <div>Sellers</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Layouts -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">UI Components</li>
                  <li class=\"sidenav-item\">
                     <a href=\"typography.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-type\"></i>
                        <div>Typography</div>
                     </a>
                  </li>
                  <!-- UI elements -->
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-box\"></i>
                        <div>Basic UI</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"bui_alert.html\" class=\"sidenav-link\">
                              <div>Alerts</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_accordion.html\" class=\"sidenav-link\">
                              <div>Accordion</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_badges.html\" class=\"sidenav-link\">
                              <div>Badges</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_button.html\" class=\"sidenav-link\">
                              <div>Buttons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_button-groups.html\" class=\"sidenav-link\">
                              <div>Button groups</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_cards.html\" class=\"sidenav-link\">
                              <div>Cards</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_dropdowns.html\" class=\"sidenav-link\">
                              <div>Dropdowns</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_modals.html\" class=\"sidenav-link\">
                              <div>Modals</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_navs.html\" class=\"sidenav-link\">
                              <div>Navs [ Tabs ]</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_pagination.html\" class=\"sidenav-link\">
                              <div>Pagination and breadcrumbs</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_progress.html\" class=\"sidenav-link\">
                              <div>Progress bars</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_tooltips.html\" class=\"sidenav-link\">
                              <div>Tooltips and popovers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_thumbnails.html\" class=\"sidenav-link\">
                              <div>Thumbnails</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-award\"></i>
                        <div>Advanced UI</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"aui_carousel.html\" class=\"sidenav-link\">
                              <div>Carousel</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_cropper.html\" class=\"sidenav-link\">
                              <div>Cropper.js</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_drag-and-drop.html\" class=\"sidenav-link\">
                              <div>Drag&amp;Drop</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_fullcalendar.html\" class=\"sidenav-link\">
                              <div>Fullcalendar</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_kanban-board.html\" class=\"sidenav-link\">
                              <div>Kanban board</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-success\">New</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_ladda.html\" class=\"sidenav-link\">
                              <div>Ladda</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">Hot</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_lightbox.html\" class=\"sidenav-link\">
                              <div>Lightbox</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_media-player.html\" class=\"sidenav-link\">
                              <div>Media player</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_notifications.html\" class=\"sidenav-link\">
                              <div>Notifications</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_todo-list.html\" class=\"sidenav-link\">
                              <div>Todo list</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Forms & Tables -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Forms & Tables</li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-clipboard\"></i>
                        <div>Forms</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"forms_layouts.html\" class=\"sidenav-link\">
                              <div>Layouts and elements</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_controls.html\" class=\"sidenav-link\">
                              <div>Controls</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_custom-controls.html\" class=\"sidenav-link\">
                              <div>Custom controls</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_input-groups.html\" class=\"sidenav-link\">
                              <div>Input groups</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_switchers.html\" class=\"sidenav-link\">
                              <div>Switchers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_sliders.html\" class=\"sidenav-link\">
                              <div>Sliders</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_selects.html\" class=\"sidenav-link\">
                              <div>Selects and tags</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_pickers.html\" class=\"sidenav-link\">
                              <div>Pickers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_editors.html\" class=\"sidenav-link\">
                              <div>Editors</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_file-upload.html\" class=\"sidenav-link\">
                              <div>File upload</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_validation.html\" class=\"sidenav-link\">
                              <div>jQuery Validation</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_wizard.html\" class=\"sidenav-link\">
                              <div>SmartWizard</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">Hot</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_typeahead.html\" class=\"sidenav-link\">
                              <div>Typeahead</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_dual-listbox.html\" class=\"sidenav-link\">
                              <div>Bootstrap Dual Listbox</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_extras.html\" class=\"sidenav-link\">
                              <div>Extras</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-grid\"></i>
                        <div>Tables</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"tables_bootstrap.html\" class=\"sidenav-link\">
                              <div>Bootstrap</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_datatables.html\" class=\"sidenav-link\">
                              <div>DataTables</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_footables.html\" class=\"sidenav-link\">
                              <div>fooTables</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">NEW</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_bootstrap-table.html\" class=\"sidenav-link\">
                              <div>Bootstrap table</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_bootstrap-sortable.html\" class=\"sidenav-link\">
                              <div>Bootstrap Sortable</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Charts & Maps -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Chrt & Maps</li>
                  <li class=\"sidenav-item\">
                     <a href=\"charts_gmaps.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-map-pin\"></i>
                        <div>GMaps</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item active open\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-pie-chart\"></i>
                        <div>Charts</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item active\">
                           <a href=\"charts_am.html\" class=\"sidenav-link\">
                              <div>AM</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_flot.html\" class=\"sidenav-link\">
                              <div>Flot.js</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_chartist.html\" class=\"sidenav-link\">
                              <div>Chartist</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_chartjs.html\" class=\"sidenav-link\">
                              <div>Chart.js</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_morrisjs.html\" class=\"sidenav-link\">
                              <div>Morris.js</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!--  Icons -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Icons</li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-feather\"></i>
                        <div>Icons</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"icons_feather.html\" class=\"sidenav-link\">
                              <div>Feather</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_font-awesome.html\" class=\"sidenav-link\">
                              <div>Font Awesome 5</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-info\">New</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_ionicons.html\" class=\"sidenav-link\">
                              <div>Ionicons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_linearicons.html\" class=\"sidenav-link\">
                              <div>Linearicons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_openiconic.html\" class=\"sidenav-link\">
                              <div>Open Iconic</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_stroke7.html\" class=\"sidenav-link\">
                              <div>Stroke Icons 7</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Pages -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Pages</li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-lock\"></i>
                        <div>Authentication</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                              <div>Login</div>
                           </a>
                           <ul class=\"sidenav-menu\">
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_login-v1.html\" class=\"sidenav-link\">
                                    <div>Login v1</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_login-v2.html\" class=\"sidenav-link\">
                                    <div>Login v2</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_login-v3.html\" class=\"sidenav-link\">
                                    <div>Login v3</div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                              <div>Signup</div>
                           </a>
                           <ul class=\"sidenav-menu\">
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_register-v1.html\" class=\"sidenav-link\">
                                    <div>Register v1</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_register-v2.html\" class=\"sidenav-link\">
                                    <div>Register v2</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_register-v3.html\" class=\"sidenav-link\">
                                    <div>Register v3</div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_login-and-register.html\" class=\"sidenav-link\">
                              <div>Login + Register</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_lock-screen-v1.html\" class=\"sidenav-link\">
                              <div>Lock screen v1</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_lock-screen-v2.html\" class=\"sidenav-link\">
                              <div>Lock screen v2</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_password-reset.html\" class=\"sidenav-link\">
                              <div>Password reset</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_email-confirm.html\" class=\"sidenav-link\">
                              <div>Email confirm</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-book\"></i>
                        <div>Education</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_education_courses-v1.html\" class=\"sidenav-link\">
                              <div>Courses v1</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_education_courses-v2.html\" class=\"sidenav-link\">
                              <div>Courses v2</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-shopping-cart\"></i>
                        <div>E-commerce</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_product-list.html\" class=\"sidenav-link\">
                              <div>Product list</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_product-item.html\" class=\"sidenav-link\">
                              <div>Product item</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_product-edit.html\" class=\"sidenav-link\">
                              <div>Product edit</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_order-list.html\" class=\"sidenav-link\">
                              <div>Order list</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_order-detail.html\" class=\"sidenav-link\">
                              <div>Order detail</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-mail\"></i>
                        <div>Email</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_messages_v3_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_messages_v3_item.html\" class=\"sidenav-link\">
                              <div>Item</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_messages_v3_compose.html\" class=\"sidenav-link\">
                              <div>Compose</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-codepen\"></i>
                        <div>Projects</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_projects_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_projects_item.html\" class=\"sidenav-link\">
                              <div>Item</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_teams.html\" class=\"sidenav-link\">
                              <div>Teams</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-shield\"></i>
                        <div>Tickets</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_tickets_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_tickets_edit.html\" class=\"sidenav-link\">
                              <div>Edit</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-users\"></i>
                        <div>Users</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_users_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_users_view.html\" class=\"sidenav-link\">
                              <div>View</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_profile-v1.html\" class=\"sidenav-link\">
                              <div>Profile v1</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_profile-v2.html\" class=\"sidenav-link\">
                              <div>Profile v2</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_users_edit.html\" class=\"sidenav-link\">
                              <div>Edit</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_account-settings.html\" class=\"sidenav-link\">
                              <div>Account settings</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_chat.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-message-square\"></i>
                        <div>Chat</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_faq.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-anchor\"></i>
                        <div>FAQ</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_gallery.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-image\"></i>
                        <div>Gallery</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_help-center.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-help-circle\"></i>
                        <div>Help center</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_invoice.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-printer\"></i>
                        <div>Invoice</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_search-results.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather feather icon-filter\"></i>
                        <div>Search results</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_vacancies.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-award\"></i>
                        <div>Vacancies</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_voting.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-thumbs-up\"></i>
                        <div>Voting</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_pricing.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-tag\"></i>
                        <div>Pricing</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_file-manger.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-folder\"></i>
                        <div>file manager</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_clients.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-users\"></i>
                        <div>Clients</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
           
            <!-- [ Layout container ] Start -->
            <div class=\"layout-container\">
               <!-- [ Layout navbar ( Header ) ] Start -->
               <nav class=\"layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x\" id=\"layout-navbar\">
                  <!-- Brand demo (see assets/css/demo/demo.css) -->
                  <a href=\"index.html\" class=\"navbar-brand app-brand demo d-lg-none py-0 mr-4\">
                  <span class=\"app-brand-logo demo\">
                  <img src=\"assets/img/logo-dark.png\" alt=\"Brand Logo\" class=\"img-fluid\">
                  </span>
                  <span class=\"app-brand-text demo font-weight-normal ml-2\">Empire</span>
                  </a>
                  <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                  <div class=\"layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto\">
                     <a class=\"nav-item nav-link px-0 mr-lg-4\" href=\"javascript:\">
                     <i class=\"ion ion-md-menu text-large align-middle\"></i>
                     </a>
                  </div>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#layout-navbar-collapse\">
                  <span class=\"navbar-toggler-icon\"></span>
                  </button>
                  <div class=\"navbar-collapse collapse\" id=\"layout-navbar-collapse\">
                     <!-- Divider -->
                     <hr class=\"d-lg-none w-100 my-2\">
                     <div class=\"navbar-nav align-items-lg-center\">
                        <!-- Search -->
                        <label class=\"nav-item navbar-text navbar-search-box p-0 active\">
                        <i class=\"feather icon-search navbar-icon align-middle\"></i>
                        <span class=\"navbar-search-input pl-2\">
                        <input type=\"text\" class=\"form-control navbar-text mx-2\" placeholder=\"Search...\">
                        </span>
                        </label>
                     </div>
                     <div class=\"navbar-nav align-items-lg-center ml-auto\">
                        <div class=\"demo-navbar-notifications nav-item dropdown mr-lg-3\">
                           <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"#\" data-toggle=\"dropdown\">
                           <i class=\"feather icon-bell navbar-icon align-middle\"></i>
                           <span class=\"badge badge-danger badge-dot indicator\"></span>
                           <span class=\"d-lg-none align-middle\">&nbsp; Notifications</span>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-right\">
                              <div class=\"bg-primary text-center text-white font-weight-bold p-3\">
                                 4 New Notifications
                              </div>
                              <div class=\"list-group list-group-flush\">
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">Login from 192.168.1.1</div>
                                       <div class=\"text-light small mt-1\">
                                          Aliquam ex eros, imperdiet vulputate hendrerit et.
                                       </div>
                                       <div class=\"text-light small mt-1\">12h ago</div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">You have
                                          <strong>4</strong> new followers
                                       </div>
                                       <div class=\"text-light small mt-1\">
                                          Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">Server restarted</div>
                                       <div class=\"text-light small mt-1\">
                                          19h ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">99% server load</div>
                                       <div class=\"text-light small mt-1\">
                                          Etiam nec fringilla magna. Donec mi metus.
                                       </div>
                                       <div class=\"text-light small mt-1\">
                                          20h ago
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <a href=\"javascript:\" class=\"d-block text-center text-light small p-2 my-1\">Show all notifications</a>
                           </div>
                        </div>
                        <div class=\"demo-navbar-messages nav-item dropdown mr-lg-3\">
                           <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"#\" data-toggle=\"dropdown\">
                           <i class=\"feather icon-mail navbar-icon align-middle\"></i>
                           <span class=\"badge badge-success badge-dot indicator\"></span>
                           <span class=\"d-lg-none align-middle\">&nbsp; Messages</span>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-right\">
                              <div class=\"bg-primary text-center text-white font-weight-bold p-3\">
                                 4 New Messages
                              </div>
                              <div class=\"list-group list-group-flush\">
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/6-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor consectetuer elit.</div>
                                       <div class=\"text-light small mt-1\">
                                          Josephin Doe &nbsp;·&nbsp; 58m ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/4-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor sit amet, consectetuer.</div>
                                       <div class=\"text-light small mt-1\">
                                          Lary Doe &nbsp;·&nbsp; 1h ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/5-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor sit amet elit.</div>
                                       <div class=\"text-light small mt-1\">
                                          Alice &nbsp;·&nbsp; 2h ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/11-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                       <div class=\"text-light small mt-1\">
                                          Suzen &nbsp;·&nbsp; 5h ago
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <a href=\"javascript:\" class=\"d-block text-center text-light small p-2 my-1\">Show all messages</a>
                           </div>
                        </div>
                        <!-- Divider -->
                        <div class=\"nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1\">|</div>
                        <div class=\"demo-navbar-user nav-item dropdown\">
                           <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                           <span class=\"d-inline-flex flex-lg-row-reverse align-items-center align-middle\">
                           <img src=\"assets/img/avatars/1.png\" alt class=\"d-block ui-w-30 rounded-circle\">
                           <span class=\"px-1 mr-lg-2 ml-2 ml-lg-0\">Cindy Deitch</span>
                           </span>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-right\">
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-user text-muted\"></i> &nbsp; My profile</a>
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-mail text-muted\"></i> &nbsp; Messages</a>
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-settings text-muted\"></i> &nbsp; Account settings</a>
                              <div class=\"dropdown-divider\"></div>
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-power text-danger\"></i> &nbsp; Log Out</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
               <!-- [ Layout navbar ( Header ) ] End -->
               <!-- [ Layout content ] Start -->
               <div class=\"layout-content\">
                  <!-- [ content ] Start -->
                  <div class=\"container-fluid flex-grow-1 container-p-y\">
                     <h4 class=\"font-weight-bold py-3 mb-0\">Crypto</h4>
                     <div class=\"text-muted small mt-0 mb-4 d-block breadcrumb\">
                        <ol class=\"breadcrumb\">
                           <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"feather icon-home\"></i></a></li>
                           <li class=\"breadcrumb-item \">Dashboard</li>
                           <li class=\"breadcrumb-item active\">Crypto</li>
                        </ol>
                     </div>
                     
                                     ";
        // line 1302
        $this->displayBlock('body', $context, $blocks);
        // line 1304
        echo "
                                   
                                      
                                            
                                           
                  

               
      <!-- [ Layout wrapper] End -->
      <!-- Core scripts -->
      <script src=\"assets/js/pace.js\"></script>
      <script src=\"assets/js/jquery-3.3.1.min.js\"></script>
      <script src=\"assets/libs/popper/popper.js\"></script>
      <script src=\"assets/js/bootstrap.js\"></script>
      <script src=\"assets/js/sidenav.js\"></script>
      <script src=\"assets/js/layout-helpers.js\"></script>
      <script src=\"assets/js/material-ripple.js\"></script>
      <!-- Libs -->
      <script src=\"assets/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
      <script src=\"assets/libs/flot/flot.js\"></script>
      <script src=\"assets/libs/flot/curvedLines.js\"></script>
      <script src=\"assets/libs/chart-am4/core.js\"></script>
      <script src=\"assets/libs/chart-am4/charts.js\"></script>
      <script src=\"assets/libs/chart-am4/animated.js\"></script>
      <!-- Demo -->
      <script src=\"assets/js/demo.js\"></script><script src=\"assets/js/analytics.js\"></script>
      <script src=\"assets/js/pages/dashboards_crypto.js\"></script>
   </body>

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/dashboards_corona.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 14:49:33 GMT -->
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1302
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 1303
        echo "                                     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1430 => 1303,  1423 => 1302,  1385 => 1304,  1383 => 1302,  154 => 76,  146 => 71,  116 => 44,  97 => 28,  92 => 26,  88 => 25,  84 => 24,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"default-style layout-fixed layout-navbar-fixed\">
   
<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/dashboards_corona.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 14:49:29 GMT -->
<head>
      <title>Empire | B4+ admin template</title>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">
      <meta name=\"description\" content=\"Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template\" />
      <meta name=\"keywords\" content=\"bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard\">
      <meta name=\"author\" content=\"Codedthemes\" />
      <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">
      <!-- Google fonts -->
      <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
      <!-- Icon fonts -->
      <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/ionicons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/linearicons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/open-iconic.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/pe-icon-7-stroke.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/feather.css') }}\">
      <!-- Core stylesheets -->
   <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-material.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/shreerang-material.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/uikit.css') }}\">
      <!-- Libs -->
       <link rel=\"stylesheet\" href=\"{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css') }}\">
   </head>
   <body>
      <!-- [ Preloader ] Start -->
      <div class=\"page-loader\">
         <div class=\"bg-primary\"></div>
      </div>
      <!-- [ Preloader ] End -->
      <!-- [ Layout wrapper ] Start -->
      <div class=\"layout-wrapper layout-2\">
         <div class=\"layout-inner\">
            <!-- [ Layout sidenav ] Start -->
            <div id=\"layout-sidenav\" class=\"layout-sidenav sidenav sidenav-vertical bg-white logo-dark\">
               <!-- Brand demo (see assets/css/demo/demo.css) -->
               <div class=\"app-brand demo\">
                  <span class=\"app-brand-logo demo\">
                  <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"Brand Logo\" class=\"img-fluid\">
                  </span>
                  <a href=\"index.html\" class=\"app-brand-text demo sidenav-text font-weight-normal ml-2\">Empire</a>
                  <a href=\"javascript:\" class=\"layout-sidenav-toggle sidenav-link text-large ml-auto\">
                  <i class=\"ion ion-md-menu align-middle\"></i>
                  </a>
               </div>
               <div class=\"sidenav-divider mt-0\"></div>
               <!-- Links -->
               <ul class=\"sidenav-inner py-1\">
                  <!-- Dashboards -->
                  <li class=\"sidenav-item active open\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-home\"></i>
                        <div>Dashboards</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-danger\">Hot</div>
                        </div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"#\" class=\"sidenav-link\">
                              <div>Default</div>
                           </a>
                        </li>
                       
                        <li class=\"sidenav-item\">
                           <a href=\"{{path('app_chauffeur_index_back')}}\" class=\"sidenav-link\">
                              <div>Chauffeurs</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"{{path('app_infotrafic_index_back')}}\" class=\"sidenav-link\">
                              <div>Info Trafic</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"dashboards_crypto.html\" class=\"sidenav-link\">
                              <div>Crypto</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">New</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"dashboards_project.html\" class=\"sidenav-link\">
                              <div>Project</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-layers\"></i>
                        <div>Widgets</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-primary\">100+</div>
                        </div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"w-simple.html\" class=\"sidenav-link\">
                              <div>Simple</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"w-data.html\" class=\"sidenav-link\">
                              <div>Data</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"w-social.html\" class=\"sidenav-link\">
                              <div>Social</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"w-chart.html\" class=\"sidenav-link\">
                              <div>Chart</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                   <li class=\"sidenav-item\">
                        <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                            <i class=\"sidenav-icon feather icon-layout\"></i>
                            <div>Layouts</div>
                            <div class=\"pl-1 ml-auto\">
                                <div class=\"badge badge-success\">new</div>
                            </div>
                        </a>
                        <ul class=\"sidenav-menu\">
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_sidenav_dark.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Navbar dark</div>
                                </a>
                            </li>
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_header_dark.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Header dark</div>
                                </a>
                            </li>
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_light.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Light layout</div>
                                </a>
                            </li>
                            <li class=\"sidenav-item\">
                                <a href=\"layouts_horizontal.html\" class=\"sidenav-link\" target=\"_blank\">
                                    <div>Horizontal</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                  <!-- Layouts -->
                  <li class=\"sidenav-divider mb-1\"></li>
                    <li class=\"sidenav-header small font-weight-semibold\">Admin Panels</li>
                    <li class=\"sidenav-item\">
                        <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                            <i class=\"sidenav-icon feather icon-activity\"></i>
                            <div>Hospital</div>
                        </a>
                        <ul class=\"sidenav-menu\">
                            <li class=\"sidenav-item\"><a href=\"hospital-dashboard.html\" class=\"sidenav-link\">
                                    <div>Dashboard</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-department.html\" class=\"sidenav-link\">
                                    <div>Department</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-doctor.html\" class=\"sidenav-link\">
                                    <div>Doctor</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-patient.html\" class=\"sidenav-link\">
                                    <div>Patient</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-nurse.html\" class=\"sidenav-link\">
                                    <div>Nurse</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-pharmacist.html\" class=\"sidenav-link\">
                                    <div>Pharmacist</div>
                                </a></li>
                            <li class=\"sidenav-item\"><a href=\"hospital-laboratorie.html\" class=\"sidenav-link\">
                                    <div>Laboratory</div>
                                </a></li>
                        </ul>
                    </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-package\"></i>
                        <div>Project &amp; CRM</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"project-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"project-customers.html\" class=\"sidenav-link\">
                              <div>Customers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"project-projects.html\" class=\"sidenav-link\">
                              <div>Projects</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"project-task.html\" class=\"sidenav-link\">
                              <div>Task</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-user-check\"></i>
                        <div>Membership</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"member-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-mail-template.html\" class=\"sidenav-link\">
                              <div>Email templates</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-countries.html\" class=\"sidenav-link\">
                              <div>Country</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-coupons.html\" class=\"sidenav-link\">
                              <div>Coupons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-newsletter.html\" class=\"sidenav-link\">
                              <div>Newsletter</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-user.html\" class=\"sidenav-link\">
                              <div>User</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"member-membership.html\" class=\"sidenav-link\">
                              <div>Membership</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-life-buoy\"></i>
                        <div>Helpdesk</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"help-dashboard.html\" class=\"sidenav-link\">
                              <div>Helpdesk dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-create-ticket.html\" class=\"sidenav-link\">
                              <div>Create ticket</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-ticket.html\" class=\"sidenav-link\">
                              <div>ticket list</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-ticket-details.html\" class=\"sidenav-link\">
                              <div>ticket Details</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"help-customer.html\" class=\"sidenav-link\">
                              <div>Customer</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-book\"></i>
                        <div>School</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"school-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"school-student.html\" class=\"sidenav-link\">
                              <div>Student</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"school-parents.html\" class=\"sidenav-link\">
                              <div>Parents</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"school-teacher.html\" class=\"sidenav-link\">
                              <div>Teacher</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\" data-toggle=\"tooltip\" title=\"Student Information System\">
                        <i class=\"sidenav-icon feather icon-book\"></i>
                        <div>SIS</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"sis-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-leave.html\" class=\"sidenav-link\">
                              <div>Leave</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-evaluation.html\" class=\"sidenav-link\">
                              <div>Evaluation</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-event.html\" class=\"sidenav-link\">
                              <div>Event</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-circular.html\" class=\"sidenav-link\">
                              <div>Circular</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"sis-course.html\" class=\"sidenav-link\">
                              <div>Course</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-target\"></i>
                        <div>Crypto</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-dashboard.html\" class=\"sidenav-link\">
                              <div>Dashboard</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-exchange.html\" class=\"sidenav-link\">
                              <div>Exchange</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-wallet.html\" class=\"sidenav-link\">
                              <div>Wallet</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-transactions.html\" class=\"sidenav-link\">
                              <div>Transactions</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-history.html\" class=\"sidenav-link\">
                              <div>History</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-trading.html\" class=\"sidenav-link\">
                              <div>Trading</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-initial-coin.html\" class=\"sidenav-link\">
                              <div>Initial coin</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"crypto-ico-listing.html\" class=\"sidenav-link\">
                              <div>Ico listing</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-shopping-cart\"></i>
                        <div>E-Commerce</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-product.html\" class=\"sidenav-link\">
                              <div>Product</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-product-details.html\" class=\"sidenav-link\">
                              <div>Product details</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-order.html\" class=\"sidenav-link\">
                              <div>Order</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-checkout.html\" class=\"sidenav-link\">
                              <div>Checkout</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-cart.html\" class=\"sidenav-link\">
                              <div>Shopping Cart</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-customers.html\" class=\"sidenav-link\">
                              <div>Customers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"ecom-sellers.html\" class=\"sidenav-link\">
                              <div>Sellers</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Layouts -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">UI Components</li>
                  <li class=\"sidenav-item\">
                     <a href=\"typography.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-type\"></i>
                        <div>Typography</div>
                     </a>
                  </li>
                  <!-- UI elements -->
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-box\"></i>
                        <div>Basic UI</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"bui_alert.html\" class=\"sidenav-link\">
                              <div>Alerts</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_accordion.html\" class=\"sidenav-link\">
                              <div>Accordion</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_badges.html\" class=\"sidenav-link\">
                              <div>Badges</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_button.html\" class=\"sidenav-link\">
                              <div>Buttons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_button-groups.html\" class=\"sidenav-link\">
                              <div>Button groups</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_cards.html\" class=\"sidenav-link\">
                              <div>Cards</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_dropdowns.html\" class=\"sidenav-link\">
                              <div>Dropdowns</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_modals.html\" class=\"sidenav-link\">
                              <div>Modals</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_navs.html\" class=\"sidenav-link\">
                              <div>Navs [ Tabs ]</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_pagination.html\" class=\"sidenav-link\">
                              <div>Pagination and breadcrumbs</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_progress.html\" class=\"sidenav-link\">
                              <div>Progress bars</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_tooltips.html\" class=\"sidenav-link\">
                              <div>Tooltips and popovers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"bui_thumbnails.html\" class=\"sidenav-link\">
                              <div>Thumbnails</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-award\"></i>
                        <div>Advanced UI</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"aui_carousel.html\" class=\"sidenav-link\">
                              <div>Carousel</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_cropper.html\" class=\"sidenav-link\">
                              <div>Cropper.js</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_drag-and-drop.html\" class=\"sidenav-link\">
                              <div>Drag&amp;Drop</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_fullcalendar.html\" class=\"sidenav-link\">
                              <div>Fullcalendar</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_kanban-board.html\" class=\"sidenav-link\">
                              <div>Kanban board</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-success\">New</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_ladda.html\" class=\"sidenav-link\">
                              <div>Ladda</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">Hot</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_lightbox.html\" class=\"sidenav-link\">
                              <div>Lightbox</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_media-player.html\" class=\"sidenav-link\">
                              <div>Media player</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_notifications.html\" class=\"sidenav-link\">
                              <div>Notifications</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"aui_todo-list.html\" class=\"sidenav-link\">
                              <div>Todo list</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Forms & Tables -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Forms & Tables</li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-clipboard\"></i>
                        <div>Forms</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"forms_layouts.html\" class=\"sidenav-link\">
                              <div>Layouts and elements</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_controls.html\" class=\"sidenav-link\">
                              <div>Controls</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_custom-controls.html\" class=\"sidenav-link\">
                              <div>Custom controls</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_input-groups.html\" class=\"sidenav-link\">
                              <div>Input groups</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_switchers.html\" class=\"sidenav-link\">
                              <div>Switchers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_sliders.html\" class=\"sidenav-link\">
                              <div>Sliders</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_selects.html\" class=\"sidenav-link\">
                              <div>Selects and tags</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_pickers.html\" class=\"sidenav-link\">
                              <div>Pickers</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_editors.html\" class=\"sidenav-link\">
                              <div>Editors</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_file-upload.html\" class=\"sidenav-link\">
                              <div>File upload</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_validation.html\" class=\"sidenav-link\">
                              <div>jQuery Validation</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_wizard.html\" class=\"sidenav-link\">
                              <div>SmartWizard</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">Hot</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_typeahead.html\" class=\"sidenav-link\">
                              <div>Typeahead</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_dual-listbox.html\" class=\"sidenav-link\">
                              <div>Bootstrap Dual Listbox</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"forms_extras.html\" class=\"sidenav-link\">
                              <div>Extras</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-grid\"></i>
                        <div>Tables</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"tables_bootstrap.html\" class=\"sidenav-link\">
                              <div>Bootstrap</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_datatables.html\" class=\"sidenav-link\">
                              <div>DataTables</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_footables.html\" class=\"sidenav-link\">
                              <div>fooTables</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-danger\">NEW</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_bootstrap-table.html\" class=\"sidenav-link\">
                              <div>Bootstrap table</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"tables_bootstrap-sortable.html\" class=\"sidenav-link\">
                              <div>Bootstrap Sortable</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Charts & Maps -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Chrt & Maps</li>
                  <li class=\"sidenav-item\">
                     <a href=\"charts_gmaps.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-map-pin\"></i>
                        <div>GMaps</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item active open\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-pie-chart\"></i>
                        <div>Charts</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item active\">
                           <a href=\"charts_am.html\" class=\"sidenav-link\">
                              <div>AM</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_flot.html\" class=\"sidenav-link\">
                              <div>Flot.js</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_chartist.html\" class=\"sidenav-link\">
                              <div>Chartist</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_chartjs.html\" class=\"sidenav-link\">
                              <div>Chart.js</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"charts_morrisjs.html\" class=\"sidenav-link\">
                              <div>Morris.js</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!--  Icons -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Icons</li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-feather\"></i>
                        <div>Icons</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"icons_feather.html\" class=\"sidenav-link\">
                              <div>Feather</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_font-awesome.html\" class=\"sidenav-link\">
                              <div>Font Awesome 5</div>
                              <div class=\"pl-1 ml-auto\">
                                 <div class=\"badge badge-info\">New</div>
                              </div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_ionicons.html\" class=\"sidenav-link\">
                              <div>Ionicons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_linearicons.html\" class=\"sidenav-link\">
                              <div>Linearicons</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_openiconic.html\" class=\"sidenav-link\">
                              <div>Open Iconic</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"icons_stroke7.html\" class=\"sidenav-link\">
                              <div>Stroke Icons 7</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!-- Pages -->
                  <li class=\"sidenav-divider mb-1\"></li>
                  <li class=\"sidenav-header small font-weight-semibold\">Pages</li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-lock\"></i>
                        <div>Authentication</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                              <div>Login</div>
                           </a>
                           <ul class=\"sidenav-menu\">
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_login-v1.html\" class=\"sidenav-link\">
                                    <div>Login v1</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_login-v2.html\" class=\"sidenav-link\">
                                    <div>Login v2</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_login-v3.html\" class=\"sidenav-link\">
                                    <div>Login v3</div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                              <div>Signup</div>
                           </a>
                           <ul class=\"sidenav-menu\">
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_register-v1.html\" class=\"sidenav-link\">
                                    <div>Register v1</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_register-v2.html\" class=\"sidenav-link\">
                                    <div>Register v2</div>
                                 </a>
                              </li>
                              <li class=\"sidenav-item\">
                                 <a href=\"pages_authentication_register-v3.html\" class=\"sidenav-link\">
                                    <div>Register v3</div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_login-and-register.html\" class=\"sidenav-link\">
                              <div>Login + Register</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_lock-screen-v1.html\" class=\"sidenav-link\">
                              <div>Lock screen v1</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_lock-screen-v2.html\" class=\"sidenav-link\">
                              <div>Lock screen v2</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_password-reset.html\" class=\"sidenav-link\">
                              <div>Password reset</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_authentication_email-confirm.html\" class=\"sidenav-link\">
                              <div>Email confirm</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-book\"></i>
                        <div>Education</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_education_courses-v1.html\" class=\"sidenav-link\">
                              <div>Courses v1</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_education_courses-v2.html\" class=\"sidenav-link\">
                              <div>Courses v2</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-shopping-cart\"></i>
                        <div>E-commerce</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_product-list.html\" class=\"sidenav-link\">
                              <div>Product list</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_product-item.html\" class=\"sidenav-link\">
                              <div>Product item</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_product-edit.html\" class=\"sidenav-link\">
                              <div>Product edit</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_order-list.html\" class=\"sidenav-link\">
                              <div>Order list</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_e-commerce_order-detail.html\" class=\"sidenav-link\">
                              <div>Order detail</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-mail\"></i>
                        <div>Email</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_messages_v3_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_messages_v3_item.html\" class=\"sidenav-link\">
                              <div>Item</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_messages_v3_compose.html\" class=\"sidenav-link\">
                              <div>Compose</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-codepen\"></i>
                        <div>Projects</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_projects_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_projects_item.html\" class=\"sidenav-link\">
                              <div>Item</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_teams.html\" class=\"sidenav-link\">
                              <div>Teams</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-shield\"></i>
                        <div>Tickets</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_tickets_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_tickets_edit.html\" class=\"sidenav-link\">
                              <div>Edit</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"javascript:\" class=\"sidenav-link sidenav-toggle\">
                        <i class=\"sidenav-icon feather icon-users\"></i>
                        <div>Users</div>
                     </a>
                     <ul class=\"sidenav-menu\">
                        <li class=\"sidenav-item\">
                           <a href=\"pages_users_list.html\" class=\"sidenav-link\">
                              <div>List</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_users_view.html\" class=\"sidenav-link\">
                              <div>View</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_profile-v1.html\" class=\"sidenav-link\">
                              <div>Profile v1</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_profile-v2.html\" class=\"sidenav-link\">
                              <div>Profile v2</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_users_edit.html\" class=\"sidenav-link\">
                              <div>Edit</div>
                           </a>
                        </li>
                        <li class=\"sidenav-item\">
                           <a href=\"pages_account-settings.html\" class=\"sidenav-link\">
                              <div>Account settings</div>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_chat.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-message-square\"></i>
                        <div>Chat</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_faq.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-anchor\"></i>
                        <div>FAQ</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_gallery.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-image\"></i>
                        <div>Gallery</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_help-center.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-help-circle\"></i>
                        <div>Help center</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_invoice.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-printer\"></i>
                        <div>Invoice</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_search-results.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather feather icon-filter\"></i>
                        <div>Search results</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_vacancies.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-award\"></i>
                        <div>Vacancies</div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_voting.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-thumbs-up\"></i>
                        <div>Voting</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_pricing.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-tag\"></i>
                        <div>Pricing</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_file-manger.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-folder\"></i>
                        <div>file manager</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
                  <li class=\"sidenav-item\">
                     <a href=\"pages_clients.html\" class=\"sidenav-link\">
                        <i class=\"sidenav-icon feather icon-users\"></i>
                        <div>Clients</div>
                        <div class=\"pl-1 ml-auto\">
                           <div class=\"badge badge-success\">new</div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
           
            <!-- [ Layout container ] Start -->
            <div class=\"layout-container\">
               <!-- [ Layout navbar ( Header ) ] Start -->
               <nav class=\"layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x\" id=\"layout-navbar\">
                  <!-- Brand demo (see assets/css/demo/demo.css) -->
                  <a href=\"index.html\" class=\"navbar-brand app-brand demo d-lg-none py-0 mr-4\">
                  <span class=\"app-brand-logo demo\">
                  <img src=\"assets/img/logo-dark.png\" alt=\"Brand Logo\" class=\"img-fluid\">
                  </span>
                  <span class=\"app-brand-text demo font-weight-normal ml-2\">Empire</span>
                  </a>
                  <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                  <div class=\"layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto\">
                     <a class=\"nav-item nav-link px-0 mr-lg-4\" href=\"javascript:\">
                     <i class=\"ion ion-md-menu text-large align-middle\"></i>
                     </a>
                  </div>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#layout-navbar-collapse\">
                  <span class=\"navbar-toggler-icon\"></span>
                  </button>
                  <div class=\"navbar-collapse collapse\" id=\"layout-navbar-collapse\">
                     <!-- Divider -->
                     <hr class=\"d-lg-none w-100 my-2\">
                     <div class=\"navbar-nav align-items-lg-center\">
                        <!-- Search -->
                        <label class=\"nav-item navbar-text navbar-search-box p-0 active\">
                        <i class=\"feather icon-search navbar-icon align-middle\"></i>
                        <span class=\"navbar-search-input pl-2\">
                        <input type=\"text\" class=\"form-control navbar-text mx-2\" placeholder=\"Search...\">
                        </span>
                        </label>
                     </div>
                     <div class=\"navbar-nav align-items-lg-center ml-auto\">
                        <div class=\"demo-navbar-notifications nav-item dropdown mr-lg-3\">
                           <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"#\" data-toggle=\"dropdown\">
                           <i class=\"feather icon-bell navbar-icon align-middle\"></i>
                           <span class=\"badge badge-danger badge-dot indicator\"></span>
                           <span class=\"d-lg-none align-middle\">&nbsp; Notifications</span>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-right\">
                              <div class=\"bg-primary text-center text-white font-weight-bold p-3\">
                                 4 New Notifications
                              </div>
                              <div class=\"list-group list-group-flush\">
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">Login from 192.168.1.1</div>
                                       <div class=\"text-light small mt-1\">
                                          Aliquam ex eros, imperdiet vulputate hendrerit et.
                                       </div>
                                       <div class=\"text-light small mt-1\">12h ago</div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">You have
                                          <strong>4</strong> new followers
                                       </div>
                                       <div class=\"text-light small mt-1\">
                                          Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">Server restarted</div>
                                       <div class=\"text-light small mt-1\">
                                          19h ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <div class=\"ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark\"></div>
                                    <div class=\"media-body line-height-condenced ml-3\">
                                       <div class=\"text-dark\">99% server load</div>
                                       <div class=\"text-light small mt-1\">
                                          Etiam nec fringilla magna. Donec mi metus.
                                       </div>
                                       <div class=\"text-light small mt-1\">
                                          20h ago
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <a href=\"javascript:\" class=\"d-block text-center text-light small p-2 my-1\">Show all notifications</a>
                           </div>
                        </div>
                        <div class=\"demo-navbar-messages nav-item dropdown mr-lg-3\">
                           <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"#\" data-toggle=\"dropdown\">
                           <i class=\"feather icon-mail navbar-icon align-middle\"></i>
                           <span class=\"badge badge-success badge-dot indicator\"></span>
                           <span class=\"d-lg-none align-middle\">&nbsp; Messages</span>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-right\">
                              <div class=\"bg-primary text-center text-white font-weight-bold p-3\">
                                 4 New Messages
                              </div>
                              <div class=\"list-group list-group-flush\">
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/6-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor consectetuer elit.</div>
                                       <div class=\"text-light small mt-1\">
                                          Josephin Doe &nbsp;·&nbsp; 58m ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/4-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor sit amet, consectetuer.</div>
                                       <div class=\"text-light small mt-1\">
                                          Lary Doe &nbsp;·&nbsp; 1h ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/5-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor sit amet elit.</div>
                                       <div class=\"text-light small mt-1\">
                                          Alice &nbsp;·&nbsp; 2h ago
                                       </div>
                                    </div>
                                 </a>
                                 <a href=\"javascript:\" class=\"list-group-item list-group-item-action media d-flex align-items-center\">
                                    <img src=\"assets/img/avatars/11-small.png\" class=\"d-block ui-w-40 rounded-circle\" alt>
                                    <div class=\"media-body ml-3\">
                                       <div class=\"text-dark line-height-condenced\">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                       <div class=\"text-light small mt-1\">
                                          Suzen &nbsp;·&nbsp; 5h ago
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <a href=\"javascript:\" class=\"d-block text-center text-light small p-2 my-1\">Show all messages</a>
                           </div>
                        </div>
                        <!-- Divider -->
                        <div class=\"nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1\">|</div>
                        <div class=\"demo-navbar-user nav-item dropdown\">
                           <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                           <span class=\"d-inline-flex flex-lg-row-reverse align-items-center align-middle\">
                           <img src=\"assets/img/avatars/1.png\" alt class=\"d-block ui-w-30 rounded-circle\">
                           <span class=\"px-1 mr-lg-2 ml-2 ml-lg-0\">Cindy Deitch</span>
                           </span>
                           </a>
                           <div class=\"dropdown-menu dropdown-menu-right\">
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-user text-muted\"></i> &nbsp; My profile</a>
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-mail text-muted\"></i> &nbsp; Messages</a>
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-settings text-muted\"></i> &nbsp; Account settings</a>
                              <div class=\"dropdown-divider\"></div>
                              <a href=\"javascript:\" class=\"dropdown-item\">
                              <i class=\"feather icon-power text-danger\"></i> &nbsp; Log Out</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
               <!-- [ Layout navbar ( Header ) ] End -->
               <!-- [ Layout content ] Start -->
               <div class=\"layout-content\">
                  <!-- [ content ] Start -->
                  <div class=\"container-fluid flex-grow-1 container-p-y\">
                     <h4 class=\"font-weight-bold py-3 mb-0\">Crypto</h4>
                     <div class=\"text-muted small mt-0 mb-4 d-block breadcrumb\">
                        <ol class=\"breadcrumb\">
                           <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"feather icon-home\"></i></a></li>
                           <li class=\"breadcrumb-item \">Dashboard</li>
                           <li class=\"breadcrumb-item active\">Crypto</li>
                        </ol>
                     </div>
                     
                                     {%block body%}
                                     {%endblock%}

                                   
                                      
                                            
                                           
                  

               
      <!-- [ Layout wrapper] End -->
      <!-- Core scripts -->
      <script src=\"assets/js/pace.js\"></script>
      <script src=\"assets/js/jquery-3.3.1.min.js\"></script>
      <script src=\"assets/libs/popper/popper.js\"></script>
      <script src=\"assets/js/bootstrap.js\"></script>
      <script src=\"assets/js/sidenav.js\"></script>
      <script src=\"assets/js/layout-helpers.js\"></script>
      <script src=\"assets/js/material-ripple.js\"></script>
      <!-- Libs -->
      <script src=\"assets/libs/perfect-scrollbar/perfect-scrollbar.js\"></script>
      <script src=\"assets/libs/flot/flot.js\"></script>
      <script src=\"assets/libs/flot/curvedLines.js\"></script>
      <script src=\"assets/libs/chart-am4/core.js\"></script>
      <script src=\"assets/libs/chart-am4/charts.js\"></script>
      <script src=\"assets/libs/chart-am4/animated.js\"></script>
      <!-- Demo -->
      <script src=\"assets/js/demo.js\"></script><script src=\"assets/js/analytics.js\"></script>
      <script src=\"assets/js/pages/dashboards_crypto.js\"></script>
   </body>

<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/dashboards_corona.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 14:49:33 GMT -->
</html>
", "baseBack.html.twig", "C:\\Users\\asus\\Desktop\\AchrefProject\\AchrefProject\\templates\\baseBack.html.twig");
    }
}
