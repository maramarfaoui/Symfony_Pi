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

/* produit/new.html.twig */
class __TwigTemplate_da8b7d94da4cd84e4c391cd7f94a657d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $this->parent = $this->loadTemplate("baseMaram.html.twig", "produit/new.html.twig", 1);
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
    <div  style=\"display: flex;align-items: center;margin-top: 20px; padding: 10px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajouter un oeuvre </h5>
                <div class =\"row mb-3\">
                    <!-- General Form Elements -->
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom Oeuvre</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nomprod", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nomprod", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prix Oeuvre</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prixprod", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prixprod", [], "any", false, false, false, 23), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Localisation Oeuvre</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "localisationprod", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "localisationprod", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Type Oeuvre</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "typeprod", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "typeprod", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Statut Oeuvre</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "typestatue", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "typestatue", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Oeuvre</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "imagem1", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>

                    <br/>
                    <div class=\"col-sm-10\" style=\"display: flex;align-items: center;justify-content: center\">

                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "ajouter", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>

                    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
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
        return "produit/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  158 => 55,  149 => 49,  140 => 43,  136 => 42,  128 => 37,  124 => 36,  115 => 30,  111 => 29,  102 => 23,  98 => 22,  89 => 16,  85 => 15,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseMaram.html.twig' %}
{% block body %}

    <div  style=\"display: flex;align-items: center;margin-top: 20px; padding: 10px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Ajouter un oeuvre </h5>
                <div class =\"row mb-3\">
                    <!-- General Form Elements -->
                    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom Oeuvre</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.nomprod,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.nomprod,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prix Oeuvre</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.prixprod,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.prixprod,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Localisation Oeuvre</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.localisationprod,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.localisationprod,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Type Oeuvre</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.typeprod,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.typeprod,{'attr':{'class':'text-danger'}}) }}
                    </div>

                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Statut Oeuvre</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.typestatue,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors(form.typestatue,{'attr':{'class':'text-danger'}}) }}
                    </div>


                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Oeuvre</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.imagem1,{'attr':{'class':'form-control'}}) }}
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

{% endblock %}", "produit/new.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\produit\\new.html.twig");
    }
}
