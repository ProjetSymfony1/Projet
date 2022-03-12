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

/* homepage/inscriptionForm.html.twig */
class __TwigTemplate_4bd92d3e612aadaec8cc275dd2c2f21fd8bb78dd88c76316fcbea09133bdb2a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/inscriptionForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/inscriptionForm.html.twig"));

        // line 1
        echo "<h1>
    Page d'inscription
</h1>

<form action='";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeLog");
        echo "' method=\"post\">
    <div class=\"row\">
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"fName\" placeholder=\"First name\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"lName\" placeholder=\"Last name\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"idUser\" placeholder=\"Username\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"mail\" placeholder=\"Mail\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"pwd\" placeholder=\"Password\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"gender\" placeholder=\"Gender\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"address\" placeholder=\"Address\">
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">MAMMA MIA</button>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage/inscriptionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>
    Page d'inscription
</h1>

<form action='{{ path('homeLog') }}' method=\"post\">
    <div class=\"row\">
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"fName\" placeholder=\"First name\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"lName\" placeholder=\"Last name\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"idUser\" placeholder=\"Username\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"mail\" placeholder=\"Mail\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"pwd\" placeholder=\"Password\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"gender\" placeholder=\"Gender\">
        </div>
        <div class=\"col\">
            <input type=\"text\" class=\"form-control\" id=\"address\" placeholder=\"Address\">
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">MAMMA MIA</button>
</form>", "homepage/inscriptionForm.html.twig", "C:\\xampp1\\htdocs\\chez-gustoV3\\templates\\homepage\\inscriptionForm.html.twig");
    }
}
