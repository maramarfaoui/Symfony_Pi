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

/* historiquevente/new.html.twig */
class __TwigTemplate_8d16af2f45bbc1344f01ac1bef73a966 extends Template
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
        return "../baseMaram.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquevente/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquevente/new.html.twig"));

        $this->parent = $this->loadTemplate("../baseMaram.html.twig", "historiquevente/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div  style=\"display: flex;align-items: center;margin-top: 10px; padding: 10px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajouter Historique Vente Manuellement </h5>
                <div class =\"row mb-3\">

                    <!-- General Form Elements -->
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Date Vente</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "datevent", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "datevent", [], "any", false, false, false, 17), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Quantite Vendue</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "qtevendue", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "qtevendue", [], "any", false, false, false, 24), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prix Vente</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prixvente", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prixvente", [], "any", false, false, false, 31), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">ID Oeuvre Vendue</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "idprod", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "idprod", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <br/>
                    <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ajouter", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>

                    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "

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
        return "historiquevente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  139 => 45,  129 => 38,  125 => 37,  116 => 31,  112 => 30,  103 => 24,  99 => 23,  90 => 17,  86 => 16,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../baseMaram.html.twig' %}
{% block body %}

    <div  style=\"display: flex;align-items: center;margin-top: 10px; padding: 10px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajouter Historique Vente Manuellement </h5>
                <div class =\"row mb-3\">

                    <!-- General Form Elements -->
                    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Date Vente</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.datevent,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.datevent,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Quantite Vendue</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.qtevendue,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.qtevendue,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prix Vente</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.prixvente,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.prixvente,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">ID Oeuvre Vendue</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.idprod,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.idprod,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <br/>
                    <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                        {{ form_widget(form.ajouter,{'attr':{'class':'btn btn-primary'}}) }}
                    </div>

                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "historiquevente/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\historiquevente\\new.html.twig");
    }
}
