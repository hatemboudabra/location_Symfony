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

/* Voiture/voiture.html.twig */
class __TwigTemplate_48681220a09c77475583d0787ddef41c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Voiture/voiture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Voiture/voiture.html.twig"));

        // line 1
        echo "<h1>Liste de voitures </h1>
<table border=\"1\">
    <tr>
        <td>Serie</td>
        <td>Date</td>
        <td>Modele </td>

    </tr>
    
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listvoiture"]) || array_key_exists("listvoiture", $context) ? $context["listvoiture"] : (function () { throw new RuntimeError('Variable "listvoiture" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "serie", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "DateMiseCirculation", [], "any", false, false, false, 13)), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "Modele", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voitureDelete", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">Supprimer</a></td>
     <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voitureUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Maj</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>   ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Voiture/voiture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Liste de voitures </h1>
<table border=\"1\">
    <tr>
        <td>Serie</td>
        <td>Date</td>
        <td>Modele </td>

    </tr>
    
    {% for v in listvoiture %}
        <tr>
            <td>{{v.serie }}</td>
            <td>{{v.DateMiseCirculation | date}}</td>
            <td>{{v.Modele}}</td>
            <td><a href=\"{{ path(\"voitureDelete\",{'id':v.id }) }}\">Supprimer</a></td>
     <td><a href=\"{{ path(\"voitureUpdate\",{'id':v.id }) }}\">Maj</a></td>
        </tr>
    {% endfor %}
</table>   ", "Voiture/voiture.html.twig", "C:\\Users\\ASUS\\Desktop\\Doctrine\\templates\\Voiture\\voiture.html.twig");
    }
}
