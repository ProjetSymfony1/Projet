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

/* user/account.html.twig */
class __TwigTemplate_c011e218e4f4aabb5c7258638a887aa99325615d2a09045f5f4b98af1df6d40f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/account.html.twig", 1);
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

        echo "My Account";
        
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
<div class=\"shadow-lg p-3 mb-5 bg-white rounded\">
    <div class=\"card text-center\">
        <div class=\"card-header\">
            My Account
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"> Welcome to your account ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "idUser", [], "any", false, false, false, 13), "html", null, true);
        echo " !</h5>
            <p class=\"card-text\">Feel free to check and update your information below.</p>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Username : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "idUser", [], "any", false, false, false, 19), "html", null, true);
        echo "</h6>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Email : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "mail", [], "any", false, false, false, 25), "html", null, true);
        echo "</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">First Name : ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30), "html", null, true);
        echo "</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Last Name : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "lastName", [], "any", false, false, false, 35), "html", null, true);
        echo "</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Gender : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "gender", [], "any", false, false, false, 40), "html", null, true);
        echo "</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Adress : ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "adress", [], "any", false, false, false, 45), "html", null, true);
        echo "</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateInfo");
        echo "?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\">Update</a>
        <div class=\"card-footer text-muted\">
            GustoHelpService
        </div>
    </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  147 => 45,  139 => 40,  131 => 35,  123 => 30,  115 => 25,  106 => 19,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Account{% endblock %}

{% block body %}

<div class=\"shadow-lg p-3 mb-5 bg-white rounded\">
    <div class=\"card text-center\">
        <div class=\"card-header\">
            My Account
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"> Welcome to your account {{ app.user.idUser }} !</h5>
            <p class=\"card-text\">Feel free to check and update your information below.</p>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Username : {{ app.user.idUser }}</h6>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Email : {{ app.user.mail }}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">First Name : {{ app.user.firstName }}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Last Name : {{ app.user.lastName }}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Gender : {{ app.user.gender }}</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class=\"textDesc\">Adress : {{ app.user.adress }}</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"{{ path('updateInfo') }}?id={{ app.user.id }}\">Update</a>
        <div class=\"card-footer text-muted\">
            GustoHelpService
        </div>
    </div>
    </div>
</div>
{% endblock %}", "user/account.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\account.html.twig");
    }
}
