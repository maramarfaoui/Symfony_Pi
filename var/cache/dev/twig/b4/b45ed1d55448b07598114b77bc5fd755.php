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

/* historiquevente/_delete_form.html.twig */
class __TwigTemplate_587053dc868280f9256c04d42a0e1bab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquevente/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquevente/_delete_form.html.twig"));

        $this->parent = $this->loadTemplate("../baseMaram.html.twig", "historiquevente/_delete_form.html.twig", 1);
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
    <div  style=\"display: flex;align-items: center;margin-top: 20px; padding: 10px; \">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Modifier historique vente </h5>
                <div class =\"row mb-5\">
                    <!-- General Form Elements -->
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "datevent", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "datevent", [], "any", false, false, false, 14), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Quantite Vendue</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "qtevendue", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "qtevendue", [], "any", false, false, false, 21), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prix Vente</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prixvente", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prixvente", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">ID Oeuvre Vendue</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "idprod", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "idprod", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <br/>
                    <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "ajouter", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
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
        return "historiquevente/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  136 => 42,  126 => 35,  122 => 34,  113 => 28,  109 => 27,  100 => 21,  96 => 20,  87 => 14,  83 => 13,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../baseMaram.html.twig' %}
{% block body %}

    <div  style=\"display: flex;align-items: center;margin-top: 20px; padding: 10px; \">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Modifier historique vente </h5>
                <div class =\"row mb-5\">
                    <!-- General Form Elements -->
                    {{ form_start(form) }}
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

{% endblock %}
", "historiquevente/_delete_form.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\historiquevente\\_delete_form.html.twig");
    }
}
