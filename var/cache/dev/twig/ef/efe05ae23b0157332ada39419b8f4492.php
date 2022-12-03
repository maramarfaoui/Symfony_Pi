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

/* produitpm/_form.html.twig */
class __TwigTemplate_0bebec9d0d2a72072c60d935582e76d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitpm/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produitpm/_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-3\">

    </div>
    <div class=\"col-sm-6\">

        ";
        // line 7
        if (array_key_exists("message", $context)) {
            // line 8
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 12
        echo "
        <h1>Ajouter Un Nouveau Produit</h1>
        <form action=\"/produitpm/add\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Nom Du Prodiut</label>
                <input  list=\"datalist_id\" required=\"required\" ";
        // line 17
        if (array_key_exists("PrixpmNomprod", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["Nomprod"]) || array_key_exists("Nomprod", $context) ? $context["Nomprod"] : (function () { throw new RuntimeError('Variable "Nomprod" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " name=\"Nomprod\" class=\"form-control\" id=\"Nomprod\"
                       placeholder=\"nom du produit \">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Reference</label>
                <input type=\"number\" name=\"Referencep\"  ";
        // line 22
        if (array_key_exists("Referencep", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["Referencep"]) || array_key_exists("Referencep", $context) ? $context["Referencep"] : (function () { throw new RuntimeError('Variable "Referencep" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\" id=\"Quantitep\" placeholder=\"Reference\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Quantite</label>
                <input type=\"number\" ";
        // line 26
        if (array_key_exists("Quantitep", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["Quantitep"]) || array_key_exists("Quantitep", $context) ? $context["Quantitep"] : (function () { throw new RuntimeError('Variable "Quantitep" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " name=\"Quantitep\"
                       class=\"form-control\" id=\"Quantitep\" placeholder=\"Quantite\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Type</label>
                <input type=\"text\" name=\"Type\"";
        // line 31
        if (array_key_exists("Type", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["Type"]) || array_key_exists("Type", $context) ? $context["Type"] : (function () { throw new RuntimeError('Variable "Type" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo "  class=\"form-control\" id=\"Type\" placeholder=\"Type\">
            </div>

            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Prix</label>
                <input type=\"number\" name=\"Prixpm\" ";
        // line 36
        if (array_key_exists("Prixpm", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["Prixpm"]) || array_key_exists("Prixpm", $context) ? $context["Prixpm"] : (function () { throw new RuntimeError('Variable "Prixpm" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\" id=\"Prixpm\" placeholder=\"Prix\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Date d'Ajout</label>
                <input type=\"text\" name=\"Dateajoutpm\" ";
        // line 40
        if (array_key_exists("Dateajoutpm", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["Dateajoutpm"]) || array_key_exists("Dateajoutpm", $context) ? $context["Dateajoutpm"] : (function () { throw new RuntimeError('Variable "Dateajoutpm" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo "class=\"datepicker form-control\" placeholder=\"Date d'ajout\">
            </div>
            <button type=\"submit\" class=\"btn btn-info\"> Save</button>

        </form>
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_index");
        echo "\">back to list</a>
    </div>

</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produitpm/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  127 => 40,  116 => 36,  104 => 31,  92 => 26,  81 => 22,  69 => 17,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-3\">

    </div>
    <div class=\"col-sm-6\">

        {% if message is defined %}
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ message }}
            </div>
        {% endif %}

        <h1>Ajouter Un Nouveau Produit</h1>
        <form action=\"/produitpm/add\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Nom Du Prodiut</label>
                <input  list=\"datalist_id\" required=\"required\" {% if PrixpmNomprod is defined %} value=\"{{ Nomprod }}\" {% endif %} name=\"Nomprod\" class=\"form-control\" id=\"Nomprod\"
                       placeholder=\"nom du produit \">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Reference</label>
                <input type=\"number\" name=\"Referencep\"  {% if Referencep is defined %} value=\"{{ Referencep }}\" {% endif %} class=\"form-control\" id=\"Quantitep\" placeholder=\"Reference\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Quantite</label>
                <input type=\"number\" {% if Quantitep is defined %} value=\"{{ Quantitep }}\" {% endif %} name=\"Quantitep\"
                       class=\"form-control\" id=\"Quantitep\" placeholder=\"Quantite\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Type</label>
                <input type=\"text\" name=\"Type\"{% if Type is defined %} value=\"{{ Type }}\" {% endif %}  class=\"form-control\" id=\"Type\" placeholder=\"Type\">
            </div>

            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Prix</label>
                <input type=\"number\" name=\"Prixpm\" {% if Prixpm is defined %} value=\"{{ Prixpm }}\" {% endif %} class=\"form-control\" id=\"Prixpm\" placeholder=\"Prix\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">Date d'Ajout</label>
                <input type=\"text\" name=\"Dateajoutpm\" {% if Dateajoutpm is defined %} value=\"{{ Dateajoutpm }}\" {% endif %}class=\"datepicker form-control\" placeholder=\"Date d'ajout\">
            </div>
            <button type=\"submit\" class=\"btn btn-info\"> Save</button>

        </form>
        <a href=\"{{ path('app_produitpm_index') }}\">back to list</a>
    </div>

</div>
", "produitpm/_form.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\produitpm\\_form.html.twig");
    }
}
