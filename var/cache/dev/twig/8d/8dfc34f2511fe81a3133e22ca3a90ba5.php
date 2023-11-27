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

/* voiture/updateVoiture.html.twig */
class __TwigTemplate_186151253bb113b2d1a6ba5db6238efd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/updateVoiture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/updateVoiture.html.twig"));

        // line 1
        echo "<h1>MAJ D'une voiture</h1>
<form action=\"\" method=\"Post\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["editFormVoiture"]) || array_key_exists("editFormVoiture", $context) ? $context["editFormVoiture"] : (function () { throw new RuntimeError('Variable "editFormVoiture" does not exist.', 3, $this->source); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"MAJ Voiture\">
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/updateVoiture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>MAJ D'une voiture</h1>
<form action=\"\" method=\"Post\">
    {{form_widget(editFormVoiture)}}
    <input type=\"submit\" value=\"MAJ Voiture\">
</form>", "voiture/updateVoiture.html.twig", "C:\\Users\\ASUS\\Desktop\\Doctrine\\templates\\Voiture\\updateVoiture.html.twig");
    }
}
