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

/* produit/index.html.twig */
class __TwigTemplate_bd78f884744b301a55c03fe2e097768d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseMaram.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("baseMaram.html.twig", "produit/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\" style=\"display: flex;align-items: center;margin-top: 5px;\">

        <div class=\"col-lg-12\">

            <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addprod");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
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
                            <th>Image</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "                            <tr>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Idprod", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Nomprod", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Prixprod", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Localisationprod", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Typeprod", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Typestatue", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "imagem1", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "imagem1", [], "any", false, false, false, 38))), "html", null, true);
                echo "\" alt=\"produit.name\"
                                         width=\"60\" height=\"60\"
                                         class =\"fluid my-2 rounded\">
                                     ";
            }
            // line 42
            echo "                                </td>

                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifprod", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idprod", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Modifier</a>
                                </td>
                                <td>
                                    <form id=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Idprod", [], "any", false, false, false, 48), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_prod", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idprod", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"method=\"POST\"></form>
                                    <button onclick=\"deleteItem('";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "Idprod", [], "any", false, false, false, 49), "html", null, true);
            echo "')\" class=\"btn btn-danger\">Supprimer</button>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_produit_list", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idprod", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Imprimer</a>
                                </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                        </tbody>
                    </table>
                    <!-- End small tables -->

                </div>
            </div>

        </div>



    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 57,  162 => 52,  156 => 49,  150 => 48,  144 => 45,  139 => 42,  131 => 38,  129 => 37,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  101 => 29,  97 => 28,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseMaram.html.twig' %}

{% block body %}
    <div class=\"row\" style=\"display: flex;align-items: center;margin-top: 5px;\">

        <div class=\"col-lg-12\">

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
                            <th>Image</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for produit in produits %}
                            <tr>
                                <td>{{ produit.Idprod }}</td>
                                <td>{{ produit.Nomprod }}</td>
                                <td>{{ produit.Prixprod }}</td>
                                <td>{{ produit.Localisationprod }}</td>
                                <td>{{ produit.Typeprod }}</td>
                                <td>{{ produit.Typestatue }}</td>
                                <td>
                                    {% if produit.imagem1 %}
                                    <img src=\"{{ asset('uploads/' ~produit.imagem1) }}\" alt=\"produit.name\"
                                         width=\"60\" height=\"60\"
                                         class =\"fluid my-2 rounded\">
                                     {% endif %}
                                </td>

                                <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('modifprod',{'id':produit.idprod}) }}\">Modifier</a>
                                </td>
                                <td>
                                    <form id=\"{{ produit.Idprod }}\" action=\"{{ path('supp_prod',{'id':produit.idprod}) }}\"method=\"POST\"></form>
                                    <button onclick=\"deleteItem('{{ produit.Idprod }}')\" class=\"btn btn-danger\">Supprimer</button>
                                </td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('display_produit_list',{'id':produit.idprod}) }}\">Imprimer</a>
                                </td>
                            </tr>

                        {% endfor %}

                        </tbody>
                    </table>
                    <!-- End small tables -->

                </div>
            </div>

        </div>



    </div>

    {#  <h1>Produit index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Idprod</th>
                <th>Nomprod</th>
                <th>Prixprod</th>
                <th>Localisationprod</th>
                <th>Typeprod</th>
                <th>Typestatue</th>
                <th>Imagem1</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td>{{ produit.idprod }}</td>
                <td>{{ produit.nomprod }}</td>
                <td>{{ produit.prixprod }}</td>
                <td>{{ produit.localisationprod }}</td>
                <td>{{ produit.typeprod }}</td>
                <td>{{ produit.typestatue }}</td>
                <td>{{ produit.imagem1 }}</td>
                <td>
                    <a href=\"{{ path('app_produit_show', {'idprod': produit.idprod}) }}\">show</a>
                    <a href=\"{{ path('app_produit_edit', {'idprod': produit.idprod}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_produit_new') }}\">Create new</a>#}
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\produit\\index.html.twig");
    }
}
