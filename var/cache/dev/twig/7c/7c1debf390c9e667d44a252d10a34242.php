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

/* historiquevente/index.html.twig */
class __TwigTemplate_6cc7c15cb82a12712c55d7fd9c34781e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquevente/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquevente/index.html.twig"));

        $this->parent = $this->loadTemplate("../baseMaram.html.twig", "historiquevente/index.html.twig", 1);
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
        echo "    <div class=\"row\" style=\"display: flex;align-items: center;margin-top: 20px; padding: 10px;\">

        <div class=\"col-lg-12\">

            <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historiquevente_new");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                    <h5 class=\"card-title\">Liste des Oeuvres vendus</h5>

                    <!-- Table with stripped rows -->
                    <table class=\"table\">
                        <thead>
                        <tr>        <th>IDVente</th>
                            <th>Datevent</th>
                            <th>Quantite</th>
                            <th>PrixVente</th>
                            <th>IDOeuvre</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historiqueventes"]) || array_key_exists("historiqueventes", $context) ? $context["historiqueventes"] : (function () { throw new RuntimeError('Variable "historiqueventes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["historiquevente"]) {
            // line 26
            echo "                            <tr>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquevente"], "idvent", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquevente"], "datevent", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquevente"], "qtevendue", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquevente"], "prixvente", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquevente"], "idprod", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historiquevente_edit", ["idvent" => twig_get_attribute($this->env, $this->source, $context["historiquevente"], "idvent", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Modifier</a>
                                </td>
                                <td>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historiquevente_delete", ["idvent" => twig_get_attribute($this->env, $this->source, $context["historiquevente"], "idvent", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Supprimer</a>
                                </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historiquevente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "historiquevente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  129 => 36,  123 => 33,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  99 => 26,  95 => 25,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../baseMaram.html.twig' %}
{% block body %}
    <div class=\"row\" style=\"display: flex;align-items: center;margin-top: 20px; padding: 10px;\">

        <div class=\"col-lg-12\">

            <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"{{ path('app_historiquevente_new') }}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 50px;\"></i></a>
                    <h5 class=\"card-title\">Liste des Oeuvres vendus</h5>

                    <!-- Table with stripped rows -->
                    <table class=\"table\">
                        <thead>
                        <tr>        <th>IDVente</th>
                            <th>Datevent</th>
                            <th>Quantite</th>
                            <th>PrixVente</th>
                            <th>IDOeuvre</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for historiquevente in historiqueventes %}
                            <tr>
                                <td>{{ historiquevente.idvent }}</td>
                                <td>{{ historiquevente.datevent }}</td>
                                <td>{{ historiquevente.qtevendue }}</td>
                                <td>{{ historiquevente.prixvente }}</td>
                                <td>{{ historiquevente.idprod }}</td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('app_historiquevente_edit',{'idvent': historiquevente.idvent}) }}\">Modifier</a>
                                </td>
                                <td>
                                    <a class=\"btn btn-danger\" href=\"{{ path('app_historiquevente_delete',{'idvent': historiquevente.idvent}) }}\">Supprimer</a>
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
{% endblock %}", "historiquevente/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\historiquevente\\index.html.twig");
    }
}
