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

/* commandpm/show.html.twig */
class __TwigTemplate_a058f3d95c331e2643baca343c79f60a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandpm/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandpm/show.html.twig"));

        $this->parent = $this->loadTemplate("../baseMaram.html.twig", "commandpm/show.html.twig", 1);
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

        echo "Commandpm";
        
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
        echo "    <h1>Commandpm</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idcpm</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 12, $this->source); })()), "idcpm", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idprod</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 16, $this->source); })()), "idprod", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomprod</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 20, $this->source); })()), "nomprod", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Referencecm</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 24, $this->source); })()), "referencecm", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Quantitecpm</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 32, $this->source); })()), "quantitecpm", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 36, $this->source); })()), "iduser", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandpm_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandpm_edit", ["idcpm" => twig_get_attribute($this->env, $this->source, (isset($context["commandpm"]) || array_key_exists("commandpm", $context) ? $context["commandpm"] : (function () { throw new RuntimeError('Variable "commandpm" does not exist.', 47, $this->source); })()), "idcpm", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "commandpm/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commandpm/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../baseMaram.html.twig' %}

{% block title %}Commandpm{% endblock %}

{% block body %}
    <h1>Commandpm</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idcpm</th>
                <td>{{ commandpm.idcpm }}</td>
            </tr>
            <tr>
                <th>Idprod</th>
                <td>{{ commandpm.idprod }}</td>
            </tr>
            <tr>
                <th>Nomprod</th>
                <td>{{ commandpm.nomprod }}</td>
            </tr>
            <tr>
                <th>Referencecm</th>
                <td>{{ commandpm.referencecm }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ commandpm.date ? commandpm.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Quantitecpm</th>
                <td>{{ commandpm.quantitecpm }}</td>
            </tr>
            <tr>
                <th>Iduser</th>
                <td>{{ commandpm.iduser }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ commandpm.type }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_commandpm_index') }}\">back to list</a>

    <a href=\"{{ path('app_commandpm_edit', {'idcpm': commandpm.idcpm}) }}\">edit</a>

    {{ include('commandpm/_delete_form.html.twig') }}
{% endblock %}
", "commandpm/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\commandpm\\show.html.twig");
    }
}
