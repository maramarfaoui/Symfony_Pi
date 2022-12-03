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

/* produitpm/edit.html.twig */
class __TwigTemplate_ecfb8511a81d83ddb8b57e237da20205 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitpm/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitpm/edit.html.twig"));

        $this->parent = $this->loadTemplate("../baseMaram.html.twig", "produitpm/edit.html.twig", 1);
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

        echo "Edit Produitpm";
        
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
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">

        </div>
        <div class=\"col-sm-6\">
            <h1>Ajouter Un Nouveau Produit</h1>
            <form action=\"/produitpm/editprod\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Nom Du Prodiut</label>
                    <input type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 15, $this->source); })()), "idprod", [], "any", false, false, false, 15), "html", null, true);
        echo "\" name=\"idprod\" class=\"form-control\" id=\"idprod\">
                    <input type=\"text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 16, $this->source); })()), "nomprod", [], "any", false, false, false, 16), "html", null, true);
        echo "\" name=\"Nomprod\" class=\"form-control\" id=\"Nomprod\"
                           placeholder=\"nom du produit \">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Reference</label>
                    <input type=\"text\" name=\"Referencep\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 21, $this->source); })()), "referencep", [], "any", false, false, false, 21), "html", null, true);
        echo "\" class=\"form-control\"
                           id=\"Quantitep\" placeholder=\"Reference\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Quantite</label>
                    <input type=\"number\" name=\"Quantitep\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 26, $this->source); })()), "quantitep", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"form-control\"
                           id=\"Quantitep\" placeholder=\"Quantite\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Type</label>
                    <input type=\"text\" name=\"Type\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 31, $this->source); })()), "typep", [], "any", false, false, false, 31), "html", null, true);
        echo "\" id=\"Type\"
                           placeholder=\"Type\">
                </div>

                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Prix</label>
                    <input type=\"text\" name=\"Prixpm\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 37, $this->source); })()), "prixpm", [], "any", false, false, false, 37), "html", null, true);
        echo "\" id=\"Prixpm\"
                           placeholder=\"Prix\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Date d'Ajout</label>
                    <input type=\"text\" name=\"Dateajoutpm\" class=\"form-control datepicker\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produitpm"]) || array_key_exists("produitpm", $context) ? $context["produitpm"] : (function () { throw new RuntimeError('Variable "produitpm" does not exist.', 42, $this->source); })()), "dateajoutpm", [], "any", false, false, false, 42), "html", null, true);
        echo "\"
                           id=\"Dateajoutpmedit\" placeholder=\"Date d'ajout\">
                </div>
                <button type=\"submit\" id=\"btns\" class=\"btn btn-info\"> Edit</button>

            </form>
            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_index");
        echo "\">back to list</a>
        </div>
        <div class=\"col-sm-3\"><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_index");
        echo "\">back to list </a></div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produitpm/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 50,  153 => 48,  144 => 42,  136 => 37,  127 => 31,  119 => 26,  111 => 21,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../baseMaram.html.twig' %}

{% block title %}Edit Produitpm{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-3\">

        </div>
        <div class=\"col-sm-6\">
            <h1>Ajouter Un Nouveau Produit</h1>
            <form action=\"/produitpm/editprod\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Nom Du Prodiut</label>
                    <input type=\"hidden\" value=\"{{ produitpm.idprod }}\" name=\"idprod\" class=\"form-control\" id=\"idprod\">
                    <input type=\"text\" value=\"{{ produitpm.nomprod }}\" name=\"Nomprod\" class=\"form-control\" id=\"Nomprod\"
                           placeholder=\"nom du produit \">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Reference</label>
                    <input type=\"text\" name=\"Referencep\" value=\"{{ produitpm.referencep }}\" class=\"form-control\"
                           id=\"Quantitep\" placeholder=\"Reference\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Quantite</label>
                    <input type=\"number\" name=\"Quantitep\" value=\"{{ produitpm.quantitep }}\" class=\"form-control\"
                           id=\"Quantitep\" placeholder=\"Quantite\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Type</label>
                    <input type=\"text\" name=\"Type\" class=\"form-control\" value=\"{{ produitpm.typep }}\" id=\"Type\"
                           placeholder=\"Type\">
                </div>

                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Prix</label>
                    <input type=\"text\" name=\"Prixpm\" class=\"form-control\" value=\"{{ produitpm.prixpm }}\" id=\"Prixpm\"
                           placeholder=\"Prix\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleFormControlInput1\">Date d'Ajout</label>
                    <input type=\"text\" name=\"Dateajoutpm\" class=\"form-control datepicker\" value=\"{{ produitpm.dateajoutpm }}\"
                           id=\"Dateajoutpmedit\" placeholder=\"Date d'ajout\">
                </div>
                <button type=\"submit\" id=\"btns\" class=\"btn btn-info\"> Edit</button>

            </form>
            <a href=\"{{ path('app_produitpm_index') }}\">back to list</a>
        </div>
        <div class=\"col-sm-3\"><a href=\"{{ path('app_produitpm_index') }}\">back to list </a></div>
    </div>

{% endblock %}
", "produitpm/edit.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\produitpm\\edit.html.twig");
    }
}
