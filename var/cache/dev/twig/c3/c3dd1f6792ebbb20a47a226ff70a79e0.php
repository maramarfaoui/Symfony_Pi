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

/* commandpm/_form.html.twig */
class __TwigTemplate_7e7bda33efa9f33492a09578d7dd2895 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandpm/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandpm/_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-3\">

    </div>
    <div class=\"col-sm-6\">
        ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 11
        echo "        <h2>remplir pour commander</h2>
        <form action=\"/commandpm/add\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">ID Du Prodiut</label>
                <input type=\"text\" name=\"IDProd\" class=\"form-control\" id=\"IDProd\" placeholder=\"ID Du Prodiut \">
            </div>
            <div class=\"form-group\" >
                <label for=\"Nomprod\">Nomprod</label>
                <input type=\"text\" list=\"Nomproda\" name=\"Nomprod\" class=\"form-control\" id=\"Nomprod\" placeholder=\"nom du produit \" >

                <datalist id=\"Nomproda\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pdts"]) || array_key_exists("pdts", $context) ? $context["pdts"] : (function () { throw new RuntimeError('Variable "pdts" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "    <option   value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomprod", [], "any", false, false, false, 23), "html", null, true);
            echo "\"  ></option>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </datalist>


            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">reference commande</label>
                <input type=\"text\" name=\"referenceCM\" class=\"form-control\" id=\"referenceCM\" placeholder=\"Reference\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">date</label>
                <input type=\"text\" name=\"date\" class=\"datepicker form-control\" placeholder=\"date\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">quantite de commande</label>
                <input type=\"number\" name=\"quantiteCpm\" class=\"form-control\" id=\"quantiteCpm\" placeholder=\"quantite\">
            </div>

            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">id user</label>
                <input type=\"text\" name=\"iduser\" class=\"form-control\" id=\"iduser\" placeholder=\"id user\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">type de commande </label>
                <input type=\"text\" name=\"type\"  id=\"type\" class=\"form-control\" placeholder=\"type\">
            </div>
            <button type=\"submit\" class=\"btn btn-info\"> Save</button>

        </form>
        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produitpm_index");
        echo "\">afficher la liste des produits</a>
    </div>
    <div class=\"col-sm-3\">  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commandpm/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  88 => 26,  78 => 23,  74 => 22,  61 => 11,  55 => 8,  52 => 7,  50 => 6,  43 => 1,);
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
        <h2>remplir pour commander</h2>
        <form action=\"/commandpm/add\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">ID Du Prodiut</label>
                <input type=\"text\" name=\"IDProd\" class=\"form-control\" id=\"IDProd\" placeholder=\"ID Du Prodiut \">
            </div>
            <div class=\"form-group\" >
                <label for=\"Nomprod\">Nomprod</label>
                <input type=\"text\" list=\"Nomproda\" name=\"Nomprod\" class=\"form-control\" id=\"Nomprod\" placeholder=\"nom du produit \" >

                <datalist id=\"Nomproda\">
{% for p in pdts %}
    <option   value=\"{{ p.nomprod }}\"  ></option>

{% endfor %}
                </datalist>


            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">reference commande</label>
                <input type=\"text\" name=\"referenceCM\" class=\"form-control\" id=\"referenceCM\" placeholder=\"Reference\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">date</label>
                <input type=\"text\" name=\"date\" class=\"datepicker form-control\" placeholder=\"date\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">quantite de commande</label>
                <input type=\"number\" name=\"quantiteCpm\" class=\"form-control\" id=\"quantiteCpm\" placeholder=\"quantite\">
            </div>

            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">id user</label>
                <input type=\"text\" name=\"iduser\" class=\"form-control\" id=\"iduser\" placeholder=\"id user\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlInput1\">type de commande </label>
                <input type=\"text\" name=\"type\"  id=\"type\" class=\"form-control\" placeholder=\"type\">
            </div>
            <button type=\"submit\" class=\"btn btn-info\"> Save</button>

        </form>
        <a href=\"{{ path('app_produitpm_index') }}\">afficher la liste des produits</a>
    </div>
    <div class=\"col-sm-3\">  </div>
</div>
", "commandpm/_form.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\commandpm\\_form.html.twig");
    }
}
