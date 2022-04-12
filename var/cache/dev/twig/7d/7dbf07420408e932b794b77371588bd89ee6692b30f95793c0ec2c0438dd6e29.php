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

/* homepage/index.html.twig */
class __TwigTemplate_b719f757354c7a1f145491c95e6ca74af47acfba81299985f8cfaa22426f9755 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "HomePage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <div class=\"container-fluid content\">
        <div class=\"row\">
            <div class=\"col-7 my-auto\">
                    <div class=\"cardHome text-center\">
                        <div class=\"card-body\">
                            ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "                            <h5 class=\"card-title\"> Welcome back to Gusto's, your favorite italian place !</h5>
                            ";
        } else {
            // line 16
            echo "                            <h5 class=\"card-title\"> Welcome to Gusto's, your new favorite italian place !</h5>
                            ";
        }
        // line 18
        echo "                            <p class=\"card-text\">
                                After a first very successful french bistrot \"Chez Rémi\", famous chef, Auguste Gusteau, launches his first italian restaurant. <br>
                                We welcome you every day, <b>from 11AM to 11PM</b>, to enjoy your favorite italian classics.</p>
                            <div class=\"shadow-lg p-3 mb-5 bg-white rounded\">
                            <iframe width=\"425\" height=\"350\" src=\"https://www.openstreetmap.org/export/embed.html?bbox=2.774782776832581%2C48.866660925797014%2C2.7779746055603027%2C48.86804066257791&amp;layer=mapnik&amp;marker=48.867350798944365%2C2.7763760089396783\" style=\"border: 1px solid black\"></iframe><br/><small>
                                <a href=\"https://www.openstreetmap.org/?mlat=48.86735&amp;mlon=2.77638#map=19/48.86735/2.77638\">View Larger Map</a>
                            </small>
                            </div>
                        </div>
                    </div>

            </div>
            <div class=\"col-5\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/pngwing.com.png"), "html", null, true);
        echo "\" width=\"100%\" height=\"auto\"/>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 31,  107 => 18,  103 => 16,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}HomePage{% endblock %}

{% block body %}


    <div class=\"container-fluid content\">
        <div class=\"row\">
            <div class=\"col-7 my-auto\">
                    <div class=\"cardHome text-center\">
                        <div class=\"card-body\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <h5 class=\"card-title\"> Welcome back to Gusto's, your favorite italian place !</h5>
                            {% else %}
                            <h5 class=\"card-title\"> Welcome to Gusto's, your new favorite italian place !</h5>
                            {% endif %}
                            <p class=\"card-text\">
                                After a first very successful french bistrot \"Chez Rémi\", famous chef, Auguste Gusteau, launches his first italian restaurant. <br>
                                We welcome you every day, <b>from 11AM to 11PM</b>, to enjoy your favorite italian classics.</p>
                            <div class=\"shadow-lg p-3 mb-5 bg-white rounded\">
                            <iframe width=\"425\" height=\"350\" src=\"https://www.openstreetmap.org/export/embed.html?bbox=2.774782776832581%2C48.866660925797014%2C2.7779746055603027%2C48.86804066257791&amp;layer=mapnik&amp;marker=48.867350798944365%2C2.7763760089396783\" style=\"border: 1px solid black\"></iframe><br/><small>
                                <a href=\"https://www.openstreetmap.org/?mlat=48.86735&amp;mlon=2.77638#map=19/48.86735/2.77638\">View Larger Map</a>
                            </small>
                            </div>
                        </div>
                    </div>

            </div>
            <div class=\"col-5\">
                <img src=\"{{ asset('image/pngwing.com.png') }}\" width=\"100%\" height=\"auto\"/>
            </div>
        </div>
    </div>
{% endblock %}
", "homepage/index.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\homepage\\index.html.twig");
    }
}
