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

/* produitpm/show.html.twig */
class __TwigTemplate_383a6c24a628cd7a6c0f266cf35617b2 extends Template
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
        return "../baseMaram.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitpm/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitpm/show.html.twig"));

        $this->parent = $this->loadTemplate("../baseMaram.html.twig", "produitpm/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produitpm";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Produitpm</h1>

    <table class=\"table\" methode=\"POST\">
        <tbody>
            <tr>
                <th>Id Du Produit</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 12, $this->source); })()), "idprod", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom  Du produit</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 16, $this->source); })()), "nomprod", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 20, $this->source); })()), "referencep", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 24, $this->source); })()), "quantitep", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 32, $this->source); })()), "prixpm", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'Ajout</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 36, $this->source); })()), "dateajoutpm", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_edit", ["idprod" => twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 43, $this->source); })()), "idprod", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "produitpm/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produitpm/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../baseMaram.html.twig' %}

{% block title %}Produitpm{% endblock %}

{% block body %}
    <h1>Produitpm</h1>

    <table class=\"table\" methode=\"POST\">
        <tbody>
            <tr>
                <th>Id Du Produit</th>
                <td>{{ produitpm.idprod }}</td>
            </tr>
            <tr>
                <th>Nom  Du produit</th>
                <td>{{ produitpm.nomprod }}</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>{{ produitpm.referencep }}</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>{{ produitpm.quantitep }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ produitpm.type }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ produitpm.prixpm }}</td>
            </tr>
            <tr>
                <th>Date d'Ajout</th>
                <td>{{ produitpm.dateajoutpm }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_produitpm_index') }}\">back to list</a>

    <a href=\"{{ path('app_produitpm_edit', {'idprod': produitpm.idprod}) }}\">edit</a>

    {{ include('produitpm/_delete_form.html.twig') }}
{% endblock %}
", "produitpm/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\produitpm\\show.html.twig");
    }
}
