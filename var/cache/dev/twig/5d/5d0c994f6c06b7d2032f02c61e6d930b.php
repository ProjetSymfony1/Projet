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

/* base.html.twig */
class __TwigTemplate_e6bda608e6c8bbd8d63beb2bb6c87d10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        <link rel = \"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">


        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-2\">
                    <div class=\"logo\"><a href=\"#\"><img src=\"#\" alt=\"Chez-Gusto\"></a></div>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home
                                <span class=\"visually-hidden\"></span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu");
        echo "\">Nos Menu</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                        </li>

                    </ul>
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscriptionForm");
        echo "\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexionForm");
        echo "\">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Resto \"Chez-Gusto\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 54,  186 => 16,  176 => 15,  163 => 12,  153 => 11,  134 => 5,  122 => 55,  120 => 54,  110 => 47,  104 => 44,  91 => 34,  83 => 29,  70 => 18,  68 => 15,  65 => 14,  63 => 11,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Resto \"Chez-Gusto\"{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <link rel = \"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">


        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-2\">
                    <div class=\"logo\"><a href=\"#\"><img src=\"#\" alt=\"Chez-Gusto\"></a></div>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('index') }}\">Home
                                <span class=\"visually-hidden\"></span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('menu') }}\">Nos Menu</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                        </li>

                    </ul>
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('inscriptionForm') }}\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('connexionForm') }}\">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\chez-gusto\\templates\\base.html.twig");
    }
}
