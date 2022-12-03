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

/* base_back.html.twig */
class __TwigTemplate_22ff70917fc181b27d305ebcb8ba12c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title> - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>
    <script>
        \$(function () {
            \$(\".datepicker\").datepicker();
        });
    </script>
</head>

<body id=\"page-top\">

<!-- Page Wrapper -->

<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\" ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" index.html"), "html", null, true);
        echo "\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Interface


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
               aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Utilities</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                 data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("utilities-color.html"), "html", null, true);
        echo "\">Colors</a>
                    <a class=\"collapse-item\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("utilities-border.html"), "html", null, true);
        echo "\">Borders</a>
                    <a class=\"collapse-item\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("utilities-animation.html"), "html", null, true);
        echo "\">Animations</a>
                    <a class=\"collapse-item\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("utilities-other.html"), "html", null, true);
        echo "\">Other</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
               aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.html"), "html", null, true);
        echo "\">Login</a>
                    <a class=\"collapse-item\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("register.html"), "html", null, true);
        echo "\">Register</a>
                    <a class=\"collapse-item\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("forgot-password.html"), "html", null, true);
        echo "\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("404.html"), "html", null, true);
        echo "\">404 Page</a>
                    <a class=\"collapse-item\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blank.html"), "html", null, true);
        echo "\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("charts.html"), "html", null, true);
        echo "\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_index");
        echo "\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

        <!-- Sidebar Message -->
        <div class=\"sidebar-card d-none d-lg-flex\">
            <img class=\"sidebar-card-illustration mb-2\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_rocket.svg"), "html", null, true);
        echo "\" alt=\"...\">
            <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and
                more!</p>
            <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->
                <form method=\"post\" action=\"/produitpm/recherche\"
                      class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"searche\" class=\"form-control bg-light border-0 small\"
                               placeholder=\"Search for...\"
                               aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\" value=\"recherche\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                             aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                           placeholder=\"Search for...\" aria-label=\"Search\"
                                           aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-bell fa-fw\"></i>
                            <!-- Counter - Alerts -->
                            <span class=\"badge badge-danger badge-counter\">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"alertsDropdown\">
                            <h6 class=\"dropdown-header\">
                                Alerts Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-primary\">
                                        <i class=\"fas fa-file-alt text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 12, 2019</div>
                                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success\">
                                        <i class=\"fas fa-donate text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 7, 2019</div>
                                    \$290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-warning\">
                                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-envelope fa-fw\"></i>
                            <!-- Counter - Messages -->
                            <span class=\"badge badge-danger badge-counter\">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"messagesDropdown\">
                            <h6 class=\"dropdown-header\">
                                Message Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile_1.svg"), "html", null, true);
        echo "\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                        problem I've been having.
                                    </div>
                                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile_2.svg"), "html", null, true);
        echo "\"
                                         alt=\"...\">
                                    <div class=\"status-indicator\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                        would you like them sent to you?
                                    </div>
                                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile_3.svg"), "html", null, true);
        echo "\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-warning\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!
                                    </div>
                                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...
                                    </div>
                                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                        </div>
                    </li>

                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile.svg"), "html", null, true);
        echo "\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            ";
        // line 366
        $this->displayBlock('body', $context, $blocks);
        // line 718
        echo "</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.html"), "html", null, true);
        echo "\">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level plugins -->
<script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->
<script src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function () {
        \$('#prodpm').DataTable();
    });


</script>
<script>
    \$(document).ready(function () {
        \$('#prodCM').DataTable();
    });


</script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 366
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 367
        echo "            <div class=\"container-fluid\">


                <!-- Page Heading -->
                <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class=\"row\">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-primary shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                            Earnings (Monthly)
                                        </div>
                                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-success shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                            Earnings (Annual)
                                        </div>
                                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-info shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                        </div>
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                            </div>
                                            <div class=\"col\">
                                                <div class=\"progress progress-sm mr-2\">
                                                    <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                         style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-warning shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                            Pending Requests
                                        </div>
                                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class=\"row\">

                    <!-- Area Chart -->
                    <div class=\"col-xl-8 col-lg-7\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                <div class=\"dropdown no-arrow\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                         aria-labelledby=\"dropdownMenuLink\">
                                        <div class=\"dropdown-header\">Dropdown Header:</div>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-area\">
                                    <canvas id=\"myAreaChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class=\"col-xl-4 col-lg-5\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                <div class=\"dropdown no-arrow\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                         aria-labelledby=\"dropdownMenuLink\">
                                        <div class=\"dropdown-header\">Dropdown Header:</div>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-pie pt-4 pb-2\">
                                    <canvas id=\"myPieChart\"></canvas>
                                </div>
                                <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                    <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                    <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class=\"row\">

                    <!-- Content Column -->
                    <div class=\"col-lg-6 mb-4\">

                        <!-- Project Card Example -->
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"small font-weight-bold\">Server Migration <span
                                            class=\"float-right\">20%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                            class=\"float-right\">40%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                         aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Customer Database <span
                                            class=\"float-right\">60%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                         aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Payout Details <span
                                            class=\"float-right\">80%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                         aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Account Setup <span
                                            class=\"float-right\">Complete!</span></h4>
                                <div class=\"progress\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                         aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Color System -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-primary text-white shadow\">
                                    <div class=\"card-body\">
                                        Primary
                                        <div class=\"text-white-50 small\">#4e73df</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-success text-white shadow\">
                                    <div class=\"card-body\">
                                        Success
                                        <div class=\"text-white-50 small\">#1cc88a</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-info text-white shadow\">
                                    <div class=\"card-body\">
                                        Info
                                        <div class=\"text-white-50 small\">#36b9cc</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-warning text-white shadow\">
                                    <div class=\"card-body\">
                                        Warning
                                        <div class=\"text-white-50 small\">#f6c23e</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-danger text-white shadow\">
                                    <div class=\"card-body\">
                                        Danger
                                        <div class=\"text-white-50 small\">#e74a3b</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-secondary text-white shadow\">
                                    <div class=\"card-body\">
                                        Secondary
                                        <div class=\"text-white-50 small\">#858796</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-light text-black shadow\">
                                    <div class=\"card-body\">
                                        Light
                                        <div class=\"text-black-50 small\">#f8f9fc</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-dark text-white shadow\">
                                    <div class=\"card-body\">
                                        Dark
                                        <div class=\"text-white-50 small\">#5a5c69</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"col-lg-6 mb-4\">

                        <!-- Illustrations -->
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                         src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_posting_photo.svg"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                                <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                                    constantly updated collection of beautiful svg images that you can use
                                    completely free and without attribution!</p>
                                <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                                    unDraw &rarr;</a>
                            </div>
                        </div>

                        <!-- Approach -->
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                            </div>
                            <div class=\"card-body\">
                                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                    CSS bloat and poor page performance. Custom CSS classes are used to create
                                    custom components and custom utility classes.</p>
                                <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                    Bootstrap framework, especially the utility classes.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  877 => 670,  572 => 367,  562 => 366,  533 => 761,  529 => 760,  523 => 757,  517 => 754,  510 => 750,  504 => 747,  494 => 740,  470 => 718,  468 => 366,  434 => 335,  395 => 299,  379 => 286,  363 => 273,  228 => 141,  210 => 126,  200 => 119,  190 => 112,  186 => 111,  180 => 108,  176 => 107,  172 => 106,  146 => 83,  142 => 82,  138 => 81,  134 => 80,  95 => 44,  69 => 21,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title> - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
    <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>
    <script>
        \$(function () {
            \$(\".datepicker\").datepicker();
        });
    </script>
</head>

<body id=\"page-top\">

<!-- Page Wrapper -->

<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\" {{ asset(' index.html') }}\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Interface


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
               aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Utilities</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                 data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"{{ asset ('utilities-color.html') }}\">Colors</a>
                    <a class=\"collapse-item\" href=\"{{ asset ('utilities-border.html') }}\">Borders</a>
                    <a class=\"collapse-item\" href=\"{{ asset ('utilities-animation.html') }}\">Animations</a>
                    <a class=\"collapse-item\" href=\"{{ asset ('utilities-other.html') }}\">Other</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
               aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"{{ asset ('login.html') }}\">Login</a>
                    <a class=\"collapse-item\" href=\"{{ asset ('register.html') }}\">Register</a>
                    <a class=\"collapse-item\" href=\"{{ asset ('forgot-password.html') }}\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"{{ asset ('404.html') }}\">404 Page</a>
                    <a class=\"collapse-item\" href=\"{{ asset ('blank.html') }}\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ asset ('charts.html') }}\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_produitpm_index') }}\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

        <!-- Sidebar Message -->
        <div class=\"sidebar-card d-none d-lg-flex\">
            <img class=\"sidebar-card-illustration mb-2\" src=\"{{ asset ('img/undraw_rocket.svg') }}\" alt=\"...\">
            <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and
                more!</p>
            <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->
                <form method=\"post\" action=\"/produitpm/recherche\"
                      class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"searche\" class=\"form-control bg-light border-0 small\"
                               placeholder=\"Search for...\"
                               aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\" value=\"recherche\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                             aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                           placeholder=\"Search for...\" aria-label=\"Search\"
                                           aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-bell fa-fw\"></i>
                            <!-- Counter - Alerts -->
                            <span class=\"badge badge-danger badge-counter\">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"alertsDropdown\">
                            <h6 class=\"dropdown-header\">
                                Alerts Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-primary\">
                                        <i class=\"fas fa-file-alt text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 12, 2019</div>
                                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success\">
                                        <i class=\"fas fa-donate text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 7, 2019</div>
                                    \$290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-warning\">
                                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-envelope fa-fw\"></i>
                            <!-- Counter - Messages -->
                            <span class=\"badge badge-danger badge-counter\">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"messagesDropdown\">
                            <h6 class=\"dropdown-header\">
                                Message Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"{{ asset ('img/undraw_profile_1.svg') }}\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                        problem I've been having.
                                    </div>
                                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"{{ asset ('img/undraw_profile_2.svg') }}\"
                                         alt=\"...\">
                                    <div class=\"status-indicator\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                        would you like them sent to you?
                                    </div>
                                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"{{ asset ('img/undraw_profile_3.svg') }}\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-warning\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!
                                    </div>
                                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                         alt=\"...\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...
                                    </div>
                                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                        </div>
                    </li>

                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"{{ asset ('img/undraw_profile.svg') }}\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            {% block body %}
            <div class=\"container-fluid\">


                <!-- Page Heading -->
                <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                    <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class=\"row\">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-primary shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                            Earnings (Monthly)
                                        </div>
                                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-success shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                            Earnings (Annual)
                                        </div>
                                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-info shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                        </div>
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col-auto\">
                                                <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                            </div>
                                            <div class=\"col\">
                                                <div class=\"progress progress-sm mr-2\">
                                                    <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                         style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class=\"col-xl-3 col-md-6 mb-4\">
                        <div class=\"card border-left-warning shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                            Pending Requests
                                        </div>
                                        <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class=\"row\">

                    <!-- Area Chart -->
                    <div class=\"col-xl-8 col-lg-7\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                <div class=\"dropdown no-arrow\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                         aria-labelledby=\"dropdownMenuLink\">
                                        <div class=\"dropdown-header\">Dropdown Header:</div>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-area\">
                                    <canvas id=\"myAreaChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class=\"col-xl-4 col-lg-5\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                <div class=\"dropdown no-arrow\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                         aria-labelledby=\"dropdownMenuLink\">
                                        <div class=\"dropdown-header\">Dropdown Header:</div>
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-pie pt-4 pb-2\">
                                    <canvas id=\"myPieChart\"></canvas>
                                </div>
                                <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                    <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                    <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class=\"row\">

                    <!-- Content Column -->
                    <div class=\"col-lg-6 mb-4\">

                        <!-- Project Card Example -->
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                            </div>
                            <div class=\"card-body\">
                                <h4 class=\"small font-weight-bold\">Server Migration <span
                                            class=\"float-right\">20%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                            class=\"float-right\">40%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                         aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Customer Database <span
                                            class=\"float-right\">60%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                         aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Payout Details <span
                                            class=\"float-right\">80%</span></h4>
                                <div class=\"progress mb-4\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                         aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <h4 class=\"small font-weight-bold\">Account Setup <span
                                            class=\"float-right\">Complete!</span></h4>
                                <div class=\"progress\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                         aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Color System -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-primary text-white shadow\">
                                    <div class=\"card-body\">
                                        Primary
                                        <div class=\"text-white-50 small\">#4e73df</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-success text-white shadow\">
                                    <div class=\"card-body\">
                                        Success
                                        <div class=\"text-white-50 small\">#1cc88a</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-info text-white shadow\">
                                    <div class=\"card-body\">
                                        Info
                                        <div class=\"text-white-50 small\">#36b9cc</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-warning text-white shadow\">
                                    <div class=\"card-body\">
                                        Warning
                                        <div class=\"text-white-50 small\">#f6c23e</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-danger text-white shadow\">
                                    <div class=\"card-body\">
                                        Danger
                                        <div class=\"text-white-50 small\">#e74a3b</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-secondary text-white shadow\">
                                    <div class=\"card-body\">
                                        Secondary
                                        <div class=\"text-white-50 small\">#858796</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-light text-black shadow\">
                                    <div class=\"card-body\">
                                        Light
                                        <div class=\"text-black-50 small\">#f8f9fc</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mb-4\">
                                <div class=\"card bg-dark text-white shadow\">
                                    <div class=\"card-body\">
                                        Dark
                                        <div class=\"text-white-50 small\">#5a5c69</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"col-lg-6 mb-4\">

                        <!-- Illustrations -->
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                         src=\"{{ asset ('img/undraw_posting_photo.svg') }}\" alt=\"...\">
                                </div>
                                <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                                    constantly updated collection of beautiful svg images that you can use
                                    completely free and without attribution!</p>
                                <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                                    unDraw &rarr;</a>
                            </div>
                        </div>

                        <!-- Approach -->
                        <div class=\"card shadow mb-4\">
                            <div class=\"card-header py-3\">
                                <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                            </div>
                            <div class=\"card-body\">
                                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                    CSS bloat and poor page performance. Custom CSS classes are used to create
                                    custom components and custom utility classes.</p>
                                <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                    Bootstrap framework, especially the utility classes.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    {% endblock %}
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"{{ asset ('login.html') }}\">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Core plugin JavaScript-->
<script src=\"{{ asset ('vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"{{ asset ('js/sb-admin-2.min.js') }}\"></script>

<!-- Page level plugins -->
<script src=\"{{ asset ('vendor/chart.js/Chart.min.js') }}\"></script>

<!-- Page level custom scripts -->
<script src=\"{{ asset ('js/demo/chart-area-demo.js') }}\"></script>
<script src=\"{{ asset ('js/demo/chart-pie-demo.js') }}\"></script>

<script>
    \$(document).ready(function () {
        \$('#prodpm').DataTable();
    });


</script>
<script>
    \$(document).ready(function () {
        \$('#prodCM').DataTable();
    });


</script>
</body>

</html>", "base_back.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\base_back.html.twig");
    }
}
