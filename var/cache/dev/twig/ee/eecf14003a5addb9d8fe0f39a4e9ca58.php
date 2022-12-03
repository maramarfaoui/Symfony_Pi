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

/* main/front.html.twig */
class __TwigTemplate_cc96b1ae41da36b4e35fc21903a1bd1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<!-- Basic -->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Site Metas -->
    <title>BAZ'ARt</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img.png"), "html", null, true);
        echo "\">
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "</head>

";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 690
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Site CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/css/style.css"), "html", null, true);
        echo "\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/css/responsive.css"), "html", null, true);
        echo "\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/css/custom.css"), "html", null, true);
        echo "\">

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<body>
<!-- Start Main Top -->
<div class=\"main-top\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"custom-select-box\">
                    <select id=\"basic\" class=\"selectpicker show-tick form-control\" data-placeholder=\"\$ USD\">
                        <option>¥ JPY</option>
                        <option>\$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div>
                <div class=\"right-phone-box\">
                    <p>Call US :- <a href=\"#\"> +11 900 800 100</a></p>
                </div>
                <div class=\"our-link\">
                    <ul>
                        <li><a href=\"#\"><i class=\"fa fa-user s_color\"></i> Mon Compte</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-headset\"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"login-box\">
                    <select id=\"basic\" class=\"selectpicker show-tick form-control\" data-placeholder=\"Sign In\">
                        <option>Inscrivez-vous ici</option>
                        <option>S'identifier</option>
                    </select>
                </div>
                <div class=\"text-slid-box\">
                    <div id=\"offer-box\" class=\"carouselTicker\">
                        <ul class=\"offer-box\">
                            <li>
                                <i class=\"fab fa-opencart\"></i> 20% Sur Tout Le Code Promotionnel D'achat: offT80
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> 50% - 80% Promo Sur les Oeuvres
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo 10%! Evenements
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo De 50%! Sur Nos Salles
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo 10%! Evenements
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> 50% - 80% Promo Sur les Oeuvres
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> 20% Sur Tout Le Code Promotionnel D'achat: offT80
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo De 50%! Sur Nos Salles
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class=\"main-header\">
    <!-- Start Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav\">
        <div class=\"container\">
            <!-- Start Header Navigation -->
            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-menu\" aria-controls=\"navbars-rs-food\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"front.html.twig\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/logo1.jpg"), "html", null, true);
        echo "\" class=\"logo\" alt=\"\"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                <ul class=\"nav navbar-nav ml-auto\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
                    <li class=\"nav-item active\"><a class=\"nav-link\" href=\"front.html.twig\">Acceuil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">À propos de nous</a></li>
                    <li class=\"dropdown\">
                        <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_aboutique");
        echo "\" class=\"nav-link dropdown-toggle arrow\" data-toggle=\"dropdown\">BOUTIQUE</a>

                        <ul class=\"dropdown-menu\">
                            <li><a href=\"shop.html.twig\">Evenements</a></li>
                            <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_aboutique");
        echo "\">Oeuvres</a></li>
                            <li><a href=\"shop.html.twig\">Salles</a></li>
                            <li><a href=\"shop-detail.html\">Détail de la boutique</a></li>
                            <li><a href=\"cart.html\">Panier</a></li>
                            <li><a href=\"checkout.html\">Vérifier</a></li>
                            <li><a href=\"my-account.html\">Mon Compte</a></li>
                            <li><a href=\"wishlist.html\">Liste de souhaits</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"gallery.html\">Gallerie</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact-us.html\">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class=\"attr-nav\">
                <ul>
                    <li class=\"search\"><a href=\"#\"><i class=\"fa fa-search\"></i></a></li>
                    <li class=\"side-menu\">
                        <a href=\"#\">
                            <i class=\"fa fa-shopping-bag\"></i>
                            <span class=\"badge\">3</span>
                            <p>Panier</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class=\"side\">
            <a href=\"#\" class=\"close-side\"><i class=\"fa fa-times\"></i></a>
            <li class=\"cart-box\">
                <ul class=\"cart-list\">
                    <li>
                        <a href=\"#\" class=\"photo\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab2.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\" /></a>
                        <h6><a href=\"#\">Tableau Pop Art Femme </a></h6>
                        <p>1x - <span class=\"price\">1800.00 DT</span></p>
                    </li>
                    <li>
                        <a href=\"#\" class=\"photo\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab1.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\" /></a>
                        <h6><a href=\"#\">TABLEAU STREET ART BANKSY</a></h6>
                        <p>1x - <span class=\"price\">\$60.00</span></p>
                    </li>
                    <li>
                        <a href=\"#\" class=\"photo\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab3.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\" /></a>
                        <h6><a href=\"#\">Tranche de Vie</a></h6>
                        <p>1x - <span class=\"price\">\$40.00</span></p>
                    </li>
                    <li class=\"total\">
                        <a href=\"#\" class=\"btn btn-default hvr-hover btn-cart\">VIEW CART</a>
                        <span class=\"float-right\"><strong>Total</strong>: \$180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>

<!-- End Main Top -->

<!-- Start Top Search -->
<div class=\"top-search\">
    <div class=\"container\">
        <div class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            <span class=\"input-group-addon close-search\"><i class=\"fa fa-times\"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id=\"slides-shop\" class=\"cover-slides\">
    <ul class=\"slides-container\">
        <li class=\"text-center\">
            <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"m-b-20\"><strong>Bienvenue dans<br> BAZ'ART</strong></h1>
                        <p class=\"m-b-40\">Voyez comment vos utilisateurs perçoivent votre site Web en temps réel ou visualisez <br> tendances pour voir tout changement de performance au fil du temps.</p>
                        <p><a class=\"btn hvr-hover\" href=\"#\">Nouveaute au boutique</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class=\"text-center\">
            <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"m-b-20\"><strong>Bienvenue dans <br> BAZ'ART</strong></h1>
                        <p class=\"m-b-40\">Voyez comment vos utilisateurs perçoivent votre site Web en temps réel ou visualisez <br> tendances pour voir tout changement de performance au fil du temps.</p>
                        <p><a class=\"btn hvr-hover\" href=\"#\">Nouveaute au boutique</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class=\"text-center\">
            <img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"m-b-20\"><strong>Bienvenue dans <br> BAZ'ART</strong></h1>
                        <p class=\"m-b-40\">Voyez comment vos utilisateurs perçoivent votre site Web en temps réel ou visualisez <br> tendances pour voir tout changement de performance au fil du temps.</p>
                        <p><a class=\"btn hvr-hover\" href=\"#\">Nouveaute au boutique</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class=\"slides-navigation\">
        <a href=\"#\" class=\"next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
        <a href=\"#\" class=\"prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class=\"categories-shop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"shop-cat-box\">
                    <img class=\"img-fluid\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <a class=\"btn hvr-hover\" href=\"#\">TABLEAU LUMINEUX ANIMÉ</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"shop-cat-box\">
                    <img class=\"img-fluid\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <a class=\"btn hvr-hover\" href=\"#\">TABLEAU URBAIN</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"shop-cat-box\">
                    <img class=\"img-fluid\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <a class=\"btn hvr-hover\" href=\"#\">femme pop-art</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class=\"box-add-products\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-12\">
                <div class=\"offer-box-products\">
                    <img class=\"img-fluid\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab7.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-12\">
                <div class=\"offer-box-products\">
                    <img class=\"img-fluid\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab8.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->
<div class=\"products-box\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"title-all text-center\">
                    <h1>Salles</h1>
                    <p>Voici nos salles pour vouz .</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"special-menu text-center\">
                    <div class=\"button-group filter-button-group\">
                        <button class=\"active\" data-filter=\"*\">Tout</button>
                        <button data-filter=\".top-featured\">Top </button>
                        <button data-filter=\".best-seller\">Les plus aimeées</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row special-list\">
            <div class=\"col-lg-3 col-md-6 special-grid best-seller\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"sale\">Sale</p>
                        </div>
                        <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>TABLEAU STREET ART BANKSY</h4>
                        <h5> 1880.000DT</h5>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 special-grid top-featured\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"new\">New</p>
                        </div>
                        <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>Tableau Pop Art Femme</h4>
                        <h5> \$9.79</h5>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 special-grid top-featured\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"sale\">Sale</p>
                        </div>
                        <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img-pro-03.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> \$10.79</h5>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 special-grid best-seller\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"sale\">Sale</p>
                        </div>
                        <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/img-pro-04.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> \$15.79</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->

<!-- Start Blog  -->
<div class=\"latest-blog\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"title-all text-center\">
                    <h1>latest blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-4 col-xl-4\">
                <div class=\"blog-box\">
                    <div class=\"blog-img\">
                        <img class=\"img-fluid\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/blog-img.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"title-blog\">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class=\"option-blog\">
                            <li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fas fa-eye\"></i></a></li>
                            <li><a href=\"#\"><i class=\"far fa-comments\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4 col-xl-4\">
                <div class=\"blog-box\">
                    <div class=\"blog-img\">
                        <img class=\"img-fluid\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/blog-img-01.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"title-blog\">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class=\"option-blog\">
                            <li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fas fa-eye\"></i></a></li>
                            <li><a href=\"#\"><i class=\"far fa-comments\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4 col-xl-4\">
                <div class=\"blog-box\">
                    <div class=\"blog-img\">
                        <img class=\"img-fluid\" src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/blog-img-02.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"title-blog\">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class=\"option-blog\">
                            <li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fas fa-eye\"></i></a></li>
                            <li><a href=\"#\"><i class=\"far fa-comments\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog  -->


<!-- Start Instagram Feed  -->
<div class=\"instagram-box\">
    <div class=\"main-instagram owl-carousel owl-theme\">
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-01.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-02.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-03.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-04.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-05.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-06.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-07.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-08.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-09.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/instagram-img-05.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<footer>
    <div class=\"footer-main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-top-box\">
                        <h3>Business Time</h3>
                        <ul class=\"list-time\">
                            <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-top-box\">
                        <h3>Newsletter</h3>
                        <form class=\"newsletter-box\">
                            <div class=\"form-group\">
                                <input class=\"\" type=\"email\" name=\"Email\" placeholder=\"Email Address*\" />
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <button class=\"btn hvr-hover\" type=\"submit\">Submit</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-top-box\">
                        <h3>Social Media</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fab fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-whatsapp\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-widget\">
                        <h4>About Freshshop</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-link\">
                        <h4>Information</h4>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Customer Service</a></li>
                            <li><a href=\"#\">Our Sitemap</a></li>
                            <li><a href=\"#\">Terms &amp; Conditions</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Delivery Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-link-contact\">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class=\"fas fa-map-marker-alt\"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                            </li>
                            <li>
                                <p><i class=\"fas fa-phone-square\"></i>Phone: <a href=\"tel:+1-888705770\">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class=\"fas fa-envelope\"></i>Email: <a href=\"mailto:contactinfo@gmail.com\">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class=\"footer-copyright\">
    <p class=\"footer-company\">All Rights Reserved. &copy; 2018 <a href=\"#\">ThewayShop</a> Design By :
        <a href=\"https://html.design/\">html design</a></p>
</div>
<!-- End copyright  -->

<a href=\"#\" id=\"back-to-top\" title=\"Back to top\" style=\"display: none;\">&uarr;</a>
";
        // line 669
        $this->displayBlock('javascripts', $context, $blocks);
        // line 687
        echo "
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 669
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 670
        echo "<!-- ALL JS FILES -->
<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- ALL PLUGINS -->
<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery.superslides.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/inewsticker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/bootsnav.js."), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/images-loded.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/baguetteBox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/contact-form-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 685,  949 => 684,  945 => 683,  941 => 682,  937 => 681,  933 => 680,  929 => 679,  925 => 678,  921 => 677,  917 => 676,  913 => 675,  908 => 673,  904 => 672,  900 => 671,  897 => 670,  887 => 669,  875 => 687,  873 => 669,  766 => 565,  755 => 557,  744 => 549,  733 => 541,  722 => 533,  711 => 525,  700 => 517,  689 => 509,  678 => 501,  667 => 493,  638 => 467,  617 => 449,  596 => 431,  557 => 395,  531 => 372,  505 => 349,  479 => 326,  439 => 289,  431 => 284,  414 => 270,  405 => 264,  396 => 258,  368 => 233,  353 => 221,  338 => 209,  301 => 175,  293 => 170,  285 => 165,  246 => 129,  239 => 125,  226 => 115,  148 => 39,  138 => 38,  121 => 29,  116 => 27,  111 => 25,  106 => 23,  103 => 22,  93 => 21,  82 => 690,  80 => 38,  76 => 36,  74 => 21,  70 => 20,  66 => 19,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<!-- Basic -->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Site Metas -->
    <title>BAZ'ARt</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('client/images/img.png') }}\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('client/images/img.png')}}\">
    {% block stylesheets %}
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('client/css/bootstrap.min.css')}}\">
    <!-- Site CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('client/css/style.css')}}\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('client/css/responsive.css')}}\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('client/css/custom.css')}}\">

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    {% endblock %}
</head>

{% block body %}
<body>
<!-- Start Main Top -->
<div class=\"main-top\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"custom-select-box\">
                    <select id=\"basic\" class=\"selectpicker show-tick form-control\" data-placeholder=\"\$ USD\">
                        <option>¥ JPY</option>
                        <option>\$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div>
                <div class=\"right-phone-box\">
                    <p>Call US :- <a href=\"#\"> +11 900 800 100</a></p>
                </div>
                <div class=\"our-link\">
                    <ul>
                        <li><a href=\"#\"><i class=\"fa fa-user s_color\"></i> Mon Compte</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-headset\"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                <div class=\"login-box\">
                    <select id=\"basic\" class=\"selectpicker show-tick form-control\" data-placeholder=\"Sign In\">
                        <option>Inscrivez-vous ici</option>
                        <option>S'identifier</option>
                    </select>
                </div>
                <div class=\"text-slid-box\">
                    <div id=\"offer-box\" class=\"carouselTicker\">
                        <ul class=\"offer-box\">
                            <li>
                                <i class=\"fab fa-opencart\"></i> 20% Sur Tout Le Code Promotionnel D'achat: offT80
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> 50% - 80% Promo Sur les Oeuvres
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo 10%! Evenements
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo De 50%! Sur Nos Salles
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo 10%! Evenements
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> 50% - 80% Promo Sur les Oeuvres
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> 20% Sur Tout Le Code Promotionnel D'achat: offT80
                            </li>
                            <li>
                                <i class=\"fab fa-opencart\"></i> Promo De 50%! Sur Nos Salles
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class=\"main-header\">
    <!-- Start Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav\">
        <div class=\"container\">
            <!-- Start Header Navigation -->
            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-menu\" aria-controls=\"navbars-rs-food\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"front.html.twig\"><img src=\"{{ asset('client/images/logo1.jpg')}}\" class=\"logo\" alt=\"\"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                <ul class=\"nav navbar-nav ml-auto\" data-in=\"fadeInDown\" data-out=\"fadeOutUp\">
                    <li class=\"nav-item active\"><a class=\"nav-link\" href=\"front.html.twig\">Acceuil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">À propos de nous</a></li>
                    <li class=\"dropdown\">
                        <a href=\"{{ path('display_aboutique') }}\" class=\"nav-link dropdown-toggle arrow\" data-toggle=\"dropdown\">BOUTIQUE</a>

                        <ul class=\"dropdown-menu\">
                            <li><a href=\"shop.html.twig\">Evenements</a></li>
                            <li><a href=\"{{ path('display_aboutique') }}\">Oeuvres</a></li>
                            <li><a href=\"shop.html.twig\">Salles</a></li>
                            <li><a href=\"shop-detail.html\">Détail de la boutique</a></li>
                            <li><a href=\"cart.html\">Panier</a></li>
                            <li><a href=\"checkout.html\">Vérifier</a></li>
                            <li><a href=\"my-account.html\">Mon Compte</a></li>
                            <li><a href=\"wishlist.html\">Liste de souhaits</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"gallery.html\">Gallerie</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact-us.html\">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class=\"attr-nav\">
                <ul>
                    <li class=\"search\"><a href=\"#\"><i class=\"fa fa-search\"></i></a></li>
                    <li class=\"side-menu\">
                        <a href=\"#\">
                            <i class=\"fa fa-shopping-bag\"></i>
                            <span class=\"badge\">3</span>
                            <p>Panier</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class=\"side\">
            <a href=\"#\" class=\"close-side\"><i class=\"fa fa-times\"></i></a>
            <li class=\"cart-box\">
                <ul class=\"cart-list\">
                    <li>
                        <a href=\"#\" class=\"photo\"><img src=\"{{ asset('client/images/tab2.jpg')}}\" class=\"cart-thumb\" alt=\"\" /></a>
                        <h6><a href=\"#\">Tableau Pop Art Femme </a></h6>
                        <p>1x - <span class=\"price\">1800.00 DT</span></p>
                    </li>
                    <li>
                        <a href=\"#\" class=\"photo\"><img src=\"{{ asset('client/images/tab1.jpg')}}\" class=\"cart-thumb\" alt=\"\" /></a>
                        <h6><a href=\"#\">TABLEAU STREET ART BANKSY</a></h6>
                        <p>1x - <span class=\"price\">\$60.00</span></p>
                    </li>
                    <li>
                        <a href=\"#\" class=\"photo\"><img src=\"{{ asset('client/images/tab3.jpg')}}\" class=\"cart-thumb\" alt=\"\" /></a>
                        <h6><a href=\"#\">Tranche de Vie</a></h6>
                        <p>1x - <span class=\"price\">\$40.00</span></p>
                    </li>
                    <li class=\"total\">
                        <a href=\"#\" class=\"btn btn-default hvr-hover btn-cart\">VIEW CART</a>
                        <span class=\"float-right\"><strong>Total</strong>: \$180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>

<!-- End Main Top -->

<!-- Start Top Search -->
<div class=\"top-search\">
    <div class=\"container\">
        <div class=\"input-group\">
            <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            <span class=\"input-group-addon close-search\"><i class=\"fa fa-times\"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id=\"slides-shop\" class=\"cover-slides\">
    <ul class=\"slides-container\">
        <li class=\"text-center\">
            <img src=\"{{ asset('client/images/img_1.jpg')}}\" alt=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"m-b-20\"><strong>Bienvenue dans<br> BAZ'ART</strong></h1>
                        <p class=\"m-b-40\">Voyez comment vos utilisateurs perçoivent votre site Web en temps réel ou visualisez <br> tendances pour voir tout changement de performance au fil du temps.</p>
                        <p><a class=\"btn hvr-hover\" href=\"#\">Nouveaute au boutique</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class=\"text-center\">
            <img src=\"{{ asset('client/images/img_2.jpg')}}\" alt=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"m-b-20\"><strong>Bienvenue dans <br> BAZ'ART</strong></h1>
                        <p class=\"m-b-40\">Voyez comment vos utilisateurs perçoivent votre site Web en temps réel ou visualisez <br> tendances pour voir tout changement de performance au fil du temps.</p>
                        <p><a class=\"btn hvr-hover\" href=\"#\">Nouveaute au boutique</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class=\"text-center\">
            <img src=\"{{ asset('client/images/img_3.jpg')}}\" alt=\"\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1 class=\"m-b-20\"><strong>Bienvenue dans <br> BAZ'ART</strong></h1>
                        <p class=\"m-b-40\">Voyez comment vos utilisateurs perçoivent votre site Web en temps réel ou visualisez <br> tendances pour voir tout changement de performance au fil du temps.</p>
                        <p><a class=\"btn hvr-hover\" href=\"#\">Nouveaute au boutique</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class=\"slides-navigation\">
        <a href=\"#\" class=\"next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
        <a href=\"#\" class=\"prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class=\"categories-shop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"shop-cat-box\">
                    <img class=\"img-fluid\" src=\"{{ asset('client/images/tab4.jpg')}}\" alt=\"\" />
                    <a class=\"btn hvr-hover\" href=\"#\">TABLEAU LUMINEUX ANIMÉ</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"shop-cat-box\">
                    <img class=\"img-fluid\" src=\"{{ asset('client/images/tab5.jpg')}}\" alt=\"\" />
                    <a class=\"btn hvr-hover\" href=\"#\">TABLEAU URBAIN</a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                <div class=\"shop-cat-box\">
                    <img class=\"img-fluid\" src=\"{{ asset('client/images/tab6.jpg')}}\" alt=\"\" />
                    <a class=\"btn hvr-hover\" href=\"#\">femme pop-art</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class=\"box-add-products\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-12\">
                <div class=\"offer-box-products\">
                    <img class=\"img-fluid\" src=\"{{ asset('client/images/tab7.jpg')}}\" alt=\"\" />
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-12\">
                <div class=\"offer-box-products\">
                    <img class=\"img-fluid\" src=\"{{ asset('client/images/tab8.jpg')}}\" alt=\"\" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->
<div class=\"products-box\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"title-all text-center\">
                    <h1>Salles</h1>
                    <p>Voici nos salles pour vouz .</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"special-menu text-center\">
                    <div class=\"button-group filter-button-group\">
                        <button class=\"active\" data-filter=\"*\">Tout</button>
                        <button data-filter=\".top-featured\">Top </button>
                        <button data-filter=\".best-seller\">Les plus aimeées</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row special-list\">
            <div class=\"col-lg-3 col-md-6 special-grid best-seller\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"sale\">Sale</p>
                        </div>
                        <img src=\"{{ asset('client/images/tab1.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>TABLEAU STREET ART BANKSY</h4>
                        <h5> 1880.000DT</h5>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 special-grid top-featured\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"new\">New</p>
                        </div>
                        <img src=\"{{ asset('client/images/tab2.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>Tableau Pop Art Femme</h4>
                        <h5> \$9.79</h5>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 special-grid top-featured\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"sale\">Sale</p>
                        </div>
                        <img src=\"{{ asset('client/images/img-pro-03.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> \$10.79</h5>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 special-grid best-seller\">
                <div class=\"products-single fix\">
                    <div class=\"box-img-hover\">
                        <div class=\"type-lb\">
                            <p class=\"sale\">Sale</p>
                        </div>
                        <img src=\"{{ asset('client/images/img-pro-04.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
                        <div class=\"mask-icon\">
                            <ul>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"View\"><i class=\"fas fa-eye\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Compare\"><i class=\"fas fa-sync-alt\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Add to Wishlist\"><i class=\"far fa-heart\"></i></a></li>
                            </ul>
                            <a class=\"cart\" href=\"#\">Ajouter au panier</a>
                        </div>
                    </div>
                    <div class=\"why-text\">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> \$15.79</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->

<!-- Start Blog  -->
<div class=\"latest-blog\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"title-all text-center\">
                    <h1>latest blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-4 col-xl-4\">
                <div class=\"blog-box\">
                    <div class=\"blog-img\">
                        <img class=\"img-fluid\" src=\"{{ asset('client/images/blog-img.jpg')}}\" alt=\"\" />
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"title-blog\">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class=\"option-blog\">
                            <li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fas fa-eye\"></i></a></li>
                            <li><a href=\"#\"><i class=\"far fa-comments\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4 col-xl-4\">
                <div class=\"blog-box\">
                    <div class=\"blog-img\">
                        <img class=\"img-fluid\" src=\"{{ asset('client/images/blog-img-01.jpg')}}\" alt=\"\" />
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"title-blog\">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class=\"option-blog\">
                            <li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fas fa-eye\"></i></a></li>
                            <li><a href=\"#\"><i class=\"far fa-comments\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4 col-xl-4\">
                <div class=\"blog-box\">
                    <div class=\"blog-img\">
                        <img class=\"img-fluid\" src=\"{{ asset('client/images/blog-img-02.jpg')}}\" alt=\"\" />
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"title-blog\">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class=\"option-blog\">
                            <li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fas fa-eye\"></i></a></li>
                            <li><a href=\"#\"><i class=\"far fa-comments\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog  -->


<!-- Start Instagram Feed  -->
<div class=\"instagram-box\">
    <div class=\"main-instagram owl-carousel owl-theme\">
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-01.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-02.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-03.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-04.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-05.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-06.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-07.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-08.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-09.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"ins-inner-box\">
                <img src=\"{{ asset('client/images/instagram-img-05.jpg')}}\" alt=\"\" />
                <div class=\"hov-in\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<footer>
    <div class=\"footer-main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-top-box\">
                        <h3>Business Time</h3>
                        <ul class=\"list-time\">
                            <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-top-box\">
                        <h3>Newsletter</h3>
                        <form class=\"newsletter-box\">
                            <div class=\"form-group\">
                                <input class=\"\" type=\"email\" name=\"Email\" placeholder=\"Email Address*\" />
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <button class=\"btn hvr-hover\" type=\"submit\">Submit</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-top-box\">
                        <h3>Social Media</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fab fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-whatsapp\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-widget\">
                        <h4>About Freshshop</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-link\">
                        <h4>Information</h4>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Customer Service</a></li>
                            <li><a href=\"#\">Our Sitemap</a></li>
                            <li><a href=\"#\">Terms &amp; Conditions</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Delivery Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 col-sm-12\">
                    <div class=\"footer-link-contact\">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class=\"fas fa-map-marker-alt\"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                            </li>
                            <li>
                                <p><i class=\"fas fa-phone-square\"></i>Phone: <a href=\"tel:+1-888705770\">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class=\"fas fa-envelope\"></i>Email: <a href=\"mailto:contactinfo@gmail.com\">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class=\"footer-copyright\">
    <p class=\"footer-company\">All Rights Reserved. &copy; 2018 <a href=\"#\">ThewayShop</a> Design By :
        <a href=\"https://html.design/\">html design</a></p>
</div>
<!-- End copyright  -->

<a href=\"#\" id=\"back-to-top\" title=\"Back to top\" style=\"display: none;\">&uarr;</a>
{% block javascripts %}
<!-- ALL JS FILES -->
<script src=\"{{ asset('client/js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{ asset('client/js/popper.min.js')}}\"></script>
<script src=\"{{ asset('client/js/bootstrap.min.js')}}\"></script>
<!-- ALL PLUGINS -->
<script src=\"{{ asset('client/js/jquery.superslides.min.js')}}\"></script>
<script src=\"{{ asset('client/js/bootstrap-select.js')}}\"></script>
<script src=\"{{ asset('client/js/inewsticker.js')}}\"></script>
<script src=\"{{ asset('client/js/bootsnav.js.')}}\"></script>
<script src=\"{{ asset('client/js/images-loded.min.js')}}\"></script>
<script src=\"{{ asset('client/js/isotope.min.js')}}\"></script>
<script src=\"{{ asset('client/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('client/js/baguetteBox.min.js')}}\"></script>
<script src=\"{{ asset('client/js/form-validator.min.js')}}\"></script>
<script src=\"{{ asset('client/js/contact-form-script.js')}}\"></script>
<script src=\"{{ asset('client/js/custom.js')}}\"></script>
{% endblock %}

</body>
{% endblock %}

</html>", "main/front.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\main\\front.html.twig");
    }
}
