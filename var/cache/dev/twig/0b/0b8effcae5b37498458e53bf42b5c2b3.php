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

/* main/shop.html.twig */
class __TwigTemplate_094f4d3525b82881e8659aad75dfe4a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/shop.html.twig"));

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
        // line 666
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
        echo "        <!-- Bootstrap CSS -->
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
        echo "    <body>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_produit");
        echo "\" class=\"nav-link dropdown-toggle arrow\" data-toggle=\"dropdown\">BOUTIQUE</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"shop.html.twig\">Evenements</a></li>
                                <li><a href=\"";
        // line 128
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
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab2.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\" /></a>
                            <h6><a href=\"#\">Tableau Pop Art Femme </a></h6>
                            <p>1x - <span class=\"price\">1800.00 DT</span></p>
                        </li>
                        <li>
                            <a href=\"#\" class=\"photo\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab1.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\" /></a>
                            <h6><a href=\"#\">TABLEAU STREET ART BANKSY</a></h6>
                            <p>1x - <span class=\"price\">\$60.00</span></p>
                        </li>
                        <li>
                            <a href=\"#\" class=\"photo\"><img src=\"";
        // line 174
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


    <!-- End Slider -->

    <!-- Start Categories  -->
 ";
        // line 210
        echo "   <div class=\"categories-shop\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"shop-cat-box\">
                        <img class=\"img-fluid\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <a class=\"btn hvr-hover\" href=\"#\">TABLEAU LUMINEUX ANIMÉ</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"shop-cat-box\">
                        <img class=\"img-fluid\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <a class=\"btn hvr-hover\" href=\"#\">TABLEAU URBAIN</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"shop-cat-box\">
                        <img class=\"img-fluid\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <a class=\"btn hvr-hover\" href=\"#\">femme pop-art</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->



    <!-- Start Products  -->
    <div class=\"products-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"title-all text-center\">
                        <h1>Oeuvres Disponoble</h1>
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
            <div class=\"row\">

                ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 262, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 263
            echo "                    ";
            $context["d"] = ("/portfolioDetails/" . twig_get_attribute($this->env, $this->source, $context["produit"], "idprod", [], "any", false, false, false, 263));
            // line 264
            echo "                    <div class=\"col-md-4\">
                        <div class=\"card\" style=\"width: 18rem;height: 100%\">
                            ";
            // line 266
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "imagem1", [], "any", false, false, false, 266)) {
                // line 267
                echo "
                                <img src=\"";
                // line 268
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "imagem1", [], "any", false, false, false, 268))), "html", null, true);
                echo "\" alt=\"produit.name\"

                                     class =\"card-img-top\">
                            ";
            }
            // line 272
            echo "                            <div classs=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Nomprod", [], "any", false, false, false, 273), "html", null, true);
            echo "</h5>
                                <h5><span class=\"text text-danger\">";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Prixprod", [], "any", false, false, false, 274), "html", null, true);
            echo "DT</span></h5>
                                <h5><span class=\"text text-danger\">";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Localisationprod", [], "any", false, false, false, 275), "html", null, true);
            echo "</span></h5>
                                <h5><span class=\"text text-danger\">";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Typeprod", [], "any", false, false, false, 276), "html", null, true);
            echo "</span></h5>
                                <h5><span class=\"text text-danger\">";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Typestatue", [], "any", false, false, false, 277), "html", null, true);
            echo "</span></h5>
                                <a class=\"btn btn-success\" href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 278, $this->source); })())), "html", null, true);
            echo "\">Detail</a>

                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "
                ";
        // line 285
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 285, $this->source); })())) {
            // line 286
            echo "             <div class=\"row mt-2\">

                <nav aria-label=\"Page navigation example\">
                    <ul class=\"pagination\">
                        ";
            // line 290
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 290, $this->source); })()) != 1)) {
                // line 291
                echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_produit.pagination", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 292, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 292, $this->source); })())]), "html", null, true);
                echo "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                        </li>
                        ";
            }
            // line 298
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 298, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 299
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_produit.pagination", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 299, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            echo "                        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 301, $this->source); })()) != (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 301, $this->source); })()))) {
                // line 302
                echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 303
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_produit.pagination", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 303, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 303, $this->source); })())]), "html", null, true);
                echo "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </li>
                        ";
            }
            // line 309
            echo "                    </ul>
                </nav>

             </div>
                ";
        }
        // line 314
        echo "
            </div>
            <div class=\"row special-list\">
                <div class=\"col-lg-3 col-md-6 special-grid best-seller\">
                    <div class=\"products-single fix\">
                        <div class=\"box-img-hover\">
                            <div class=\"type-lb\">
                                <p class=\"sale\">Sale</p>
                            </div>
                            <img src=\"";
        // line 323
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
        // line 346
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
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab3.jpg"), "html", null, true);
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
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab4.jpg"), "html", null, true);
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
    ";
        // line 461
        echo "


    <!-- Start Instagram Feed  -->
    <div class=\"instagram-box\">
        <div class=\"main-instagram owl-carousel owl-theme\">
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab8.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab3.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab4.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab5.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab6.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab7.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/images/tab8.jpg"), "html", null, true);
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
        // line 645
        $this->displayBlock('javascripts', $context, $blocks);
        // line 663
        echo "
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 645
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 646
        echo "        <!-- ALL JS FILES -->
        <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ALL PLUGINS -->
        <script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/jquery.superslides.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/inewsticker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/bootsnav.js."), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/images-loded.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/baguetteBox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/contact-form-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("client/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 661,  928 => 660,  924 => 659,  920 => 658,  916 => 657,  912 => 656,  908 => 655,  904 => 654,  900 => 653,  896 => 652,  892 => 651,  887 => 649,  883 => 648,  879 => 647,  876 => 646,  866 => 645,  854 => 663,  852 => 645,  745 => 541,  734 => 533,  723 => 525,  712 => 517,  701 => 509,  690 => 501,  679 => 493,  668 => 485,  657 => 477,  646 => 469,  636 => 461,  612 => 392,  586 => 369,  560 => 346,  534 => 323,  523 => 314,  516 => 309,  507 => 303,  504 => 302,  501 => 301,  490 => 299,  485 => 298,  476 => 292,  473 => 291,  471 => 290,  465 => 286,  463 => 285,  460 => 284,  448 => 278,  444 => 277,  440 => 276,  436 => 275,  432 => 274,  428 => 273,  425 => 272,  418 => 268,  415 => 267,  413 => 266,  409 => 264,  406 => 263,  402 => 262,  364 => 227,  355 => 221,  346 => 215,  339 => 210,  300 => 174,  292 => 169,  284 => 164,  245 => 128,  239 => 125,  226 => 115,  148 => 39,  138 => 38,  121 => 29,  116 => 27,  111 => 25,  106 => 23,  103 => 22,  93 => 21,  82 => 666,  80 => 38,  76 => 36,  74 => 21,  70 => 20,  66 => 19,  46 => 1,);
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
                            <a href=\"{{ path('display_produit') }}\" class=\"nav-link dropdown-toggle arrow\" data-toggle=\"dropdown\">BOUTIQUE</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"shop.html.twig\">Evenements</a></li>
                                <li><a href=\"{{  path('display_aboutique')}}\">Oeuvres</a></li>
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


    <!-- End Slider -->

    <!-- Start Categories  -->
 {# #}   <div class=\"categories-shop\">
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



    <!-- Start Products  -->
    <div class=\"products-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"title-all text-center\">
                        <h1>Oeuvres Disponoble</h1>
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
            <div class=\"row\">

                {% for produit in produits %}
                    {% set d=\"/portfolioDetails/\"~produit.idprod %}
                    <div class=\"col-md-4\">
                        <div class=\"card\" style=\"width: 18rem;height: 100%\">
                            {% if produit.imagem1 %}

                                <img src=\"{{ asset('uploads/' ~produit.imagem1) }}\" alt=\"produit.name\"

                                     class =\"card-img-top\">
                            {% endif %}
                            <div classs=\"card-body\">
                                <h5 class=\"card-title\">{{produit.Nomprod }}</h5>
                                <h5><span class=\"text text-danger\">{{produit.Prixprod }}DT</span></h5>
                                <h5><span class=\"text text-danger\">{{produit.Localisationprod }}</span></h5>
                                <h5><span class=\"text text-danger\">{{produit.Typeprod }}</span></h5>
                                <h5><span class=\"text text-danger\">{{produit.Typestatue }}</span></h5>
                                <a class=\"btn btn-success\" href=\"{{ absolute_url(d) }}\">Detail</a>

                            </div>
                        </div>
                    </div>
                {% endfor %}

                {% if isPaginated %}
             <div class=\"row mt-2\">

                <nav aria-label=\"Page navigation example\">
                    <ul class=\"pagination\">
                        {% if page != 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('display_produit.pagination',{page :page - 1 ,nbre:nbre})}}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                        </li>
                        {% endif %}
                        {% for i in range(1, nbrePage)  %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('display_produit.pagination',{page :i ,nbre:nbre})}}\">{{ i }}</a></li>
                        {% endfor %}
                        {% if page != nbrePage %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('display_produit.pagination',{page :page +1 ,nbre:nbre})}}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </li>
                        {% endif %}
                    </ul>
                </nav>

             </div>
                {% endif %}

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
                            <img src=\"{{ asset('client/images/tab3.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
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
                            <img src=\"{{ asset('client/images/tab4.jpg')}}\" class=\"img-fluid\" alt=\"Image\">
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
    {# <div class=\"row\" style=\"display: flex;align-items: center;margin-top: 20px;\">

        <div class=\"col-lg-6\">

            <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"{{ path('addprod') }}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                    <h5 class=\"card-title\">Liste des oeuvres</h5>

                    <!-- Table with stripped rows -->
                    <table class=\"table\">
                        <thead>
                        <tr>     <th>IdOeuvre</th>
                            <th>Artiste</th>
                            <th>Prix</th>
                            <th>Localisation</th>
                            <th>Type</th>
                            <th>Statut</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for produits in b %}
                            <tr>
                                <td>{{ produits.Idprod }}</td>
                                <td>{{ produits.Nomprod }}</td>
                                <td>{{ produits.Prixprod }}</td>
                                <td>{{ produits.Localisationprod }}</td>
                                <td>{{ produits.Typeprod }}</td>
                                <td>{{ produits.Typestatue }}</td>


                            </tr>

                        {% endfor %}

                        </tbody>
                    </table>
                    <!-- End small tables -->

                </div>
            </div>

        </div>



    </div> #}



    <!-- Start Instagram Feed  -->
    <div class=\"instagram-box\">
        <div class=\"main-instagram owl-carousel owl-theme\">
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab8.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab1.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab2.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab3.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab4.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab5.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab6.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab7.jpg')}}\" alt=\"\" />
                    <div class=\"hov-in\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"ins-inner-box\">
                    <img src=\"{{ asset('client/images/tab8.jpg')}}\" alt=\"\" />
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

</html>", "main/shop.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\main\\shop.html.twig");
    }
}
