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

/* main/Can.html.twig */
class __TwigTemplate_3764b7597f2be0ba19dcc99c914434e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/Can.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/Can.html.twig"));

        // line 1
        echo "


<!-- ======= Portfolio Section ======= -->
<section id=\"portfolio\" class=\"portfolio\">
    <div class=\"container\" data-aos=\"fade-up\">



        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"col-lg-12 d-flex justify-content-center\">
                <ul id=\"portfolio-flters\">

                    <li data-filter=\"*\" class=\"filter-active\">All</li>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 16
            echo "                        ";
            $context["a"] = ("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "imagem1", [], "any", false, false, false, 16));
            // line 17
            echo "                        ";
            $context["b"] = twig_get_attribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 17);
            // line 18
            echo "                        ";
            $context["c"] = twig_get_attribute($this->env, $this->source, $context["produit"], "localisationprod", [], "any", false, false, false, 18);
            // line 19
            echo "                        ";
            $context["f"] = twig_get_attribute($this->env, $this->source, $context["produit"], "typeprod", [], "any", false, false, false, 19);
            // line 20
            echo "                        ";
            $context["d"] = ("portfolioDetails/" . twig_get_attribute($this->env, $this->source, $context["produit"], "idprod", [], "any", false, false, false, 20));
            // line 21
            echo "                        ";
            $context["y"] = ("col-lg-4 col-md-6 portfolio-item filter-" . twig_get_attribute($this->env, $this->source, $context["produit"], "typestatue", [], "any", false, false, false, 21));
            // line 22
            echo "                        <li data-filter=";
            echo twig_escape_filter($this->env, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 22, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
            </div>
        </div>

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "        ";
            $context["a"] = ("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "imagem1", [], "any", false, false, false, 29));
            // line 30
            echo "        ";
            $context["b"] = twig_get_attribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 30);
            // line 31
            echo "        ";
            $context["c"] = twig_get_attribute($this->env, $this->source, $context["produit"], "localisationprod", [], "any", false, false, false, 31);
            // line 32
            echo "        ";
            $context["f"] = twig_get_attribute($this->env, $this->source, $context["produit"], "typeprod", [], "any", false, false, false, 32);
            // line 33
            echo "        ";
            $context["d"] = ("portfolioDetails/" . twig_get_attribute($this->env, $this->source, $context["produit"], "idprod", [], "any", false, false, false, 33));
            // line 34
            echo "        ";
            $context["y"] = ("col-lg-4 col-md-6 portfolio-item filter-" . twig_get_attribute($this->env, $this->source, $context["produit"], "typestatue", [], "any", false, false, false, 34));
            // line 35
            echo "        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

            <div class=\"col-lg-4 col-md-6 portfolio-item filter-";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\">
                <div class=\"portfolio-wrap\">
                    <img src=";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 39, $this->source); })())), "html", null, true);
            echo " class=\"img-fluid\" alt=\"\">
                    <div class=\"portfolio-info\">
                        <h4>";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "</h4>
                        <p>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</p>
                        <div class=\"portfolio-links\">
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 44, $this->source); })())), "html", null, true);
            echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "

        </div>

    </div>
</section><!-- End Portfolio Section -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/Can.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  149 => 45,  143 => 44,  138 => 42,  134 => 41,  129 => 39,  124 => 37,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  98 => 28,  92 => 24,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<!-- ======= Portfolio Section ======= -->
<section id=\"portfolio\" class=\"portfolio\">
    <div class=\"container\" data-aos=\"fade-up\">



        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"col-lg-12 d-flex justify-content-center\">
                <ul id=\"portfolio-flters\">

                    <li data-filter=\"*\" class=\"filter-active\">All</li>
                    {% for produit in list %}
                        {% set a=\"uploads/\"~produit.imagem1 %}
                        {% set b=produit.nomprod %}
                        {% set c=produit.localisationprod %}
                        {% set f=produit.typeprod %}
                        {% set d=\"portfolioDetails/\"~produit.idprod %}
                        {% set y=\"col-lg-4 col-md-6 portfolio-item filter-\"~produit.typestatue %}
                        <li data-filter={{ x }}>{{ f }}</li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        {% for produit in list %}
        {% set a=\"uploads/\"~produit.imagem1 %}
        {% set b=produit.nomprod %}
        {% set c=produit.localisationprod %}
        {% set f=produit.typeprod %}
        {% set d=\"portfolioDetails/\"~produit.idprod %}
        {% set y=\"col-lg-4 col-md-6 portfolio-item filter-\"~produit.typestatue %}
        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

            <div class=\"col-lg-4 col-md-6 portfolio-item filter-{{ f }}\">
                <div class=\"portfolio-wrap\">
                    <img src={{ asset(a)}} class=\"img-fluid\" alt=\"\">
                    <div class=\"portfolio-info\">
                        <h4>{{ b }}</h4>
                        <p>{{ c }}</p>
                        <div class=\"portfolio-links\">
                            <a href=\"{{ asset(a) }}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"{{ b }}\"><i class=\"bx bx-plus\"></i></a>
                            <a href=\"{{ d   }}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}


        </div>

    </div>
</section><!-- End Portfolio Section -->", "main/Can.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\main\\Can.html.twig");
    }
}
