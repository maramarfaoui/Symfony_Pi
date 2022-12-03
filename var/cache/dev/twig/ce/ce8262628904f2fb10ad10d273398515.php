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

/* produit/listHistorique.html.twig */
class __TwigTemplate_13c3e831df6804e8fbfa415e9255cfe2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listHistorique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/listHistorique.html.twig"));

        // line 1
        echo "



                    <h5 >Liste des oeuvres</h5>

                    <!-- Table with stripped rows -->
                    <table >
                        <thead>
                        <tr>     <th>IdOeuvre</th>
                            <th>Artiste</th>
                            <th>Prix</th>
                            <th>Localisation</th>
                            <th>Type</th>
                            <th>Statut</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 22, $this->source); })()), "Idprod", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 23, $this->source); })()), "Nomprod", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "Prixprod", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 25, $this->source); })()), "Localisationprod", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 26, $this->source); })()), "Typeprod", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 27, $this->source); })()), "Typestatue", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>



                            </tr>



                        </tbody>
                    </table>
                    <!-- End small tables -->


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit/listHistorique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



                    <h5 >Liste des oeuvres</h5>

                    <!-- Table with stripped rows -->
                    <table >
                        <thead>
                        <tr>     <th>IdOeuvre</th>
                            <th>Artiste</th>
                            <th>Prix</th>
                            <th>Localisation</th>
                            <th>Type</th>
                            <th>Statut</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ produit.Idprod }}</td>
                                <td>{{ produit.Nomprod }}</td>
                                <td>{{ produit.Prixprod }}</td>
                                <td>{{ produit.Localisationprod }}</td>
                                <td>{{ produit.Typeprod }}</td>
                                <td>{{ produit.Typestatue }}</td>



                            </tr>



                        </tbody>
                    </table>
                    <!-- End small tables -->


", "produit/listHistorique.html.twig", "C:\\Users\\LENOVO\\Documents\\Symfony_Pi\\templates\\produit\\listHistorique.html.twig");
    }
}
