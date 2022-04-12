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

/* user/userMessages.html.twig */
class __TwigTemplate_2fd1ea11ed918460dd337af46765973c47cd035ae0e529fc14483d1ec8bbe2cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userMessages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userMessages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/userMessages.html.twig", 1);
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

        echo "My Messages";
        
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
<div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">

    <div class=\"card text-center\">
        <div class=\"card-header\">
            Messages
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"> You reached to us and we reached back !</h5>
            <p class=\"card-text\">If it hasn't already been processed, your question is in safe hands, an admin will be there soon !</p>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Object</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Manage</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 27
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "object", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "message", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "status", [], "any", false, false, false, 29), "html", null, true);
            echo "
                </td>
                ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["msg"], "status", [], "any", false, false, false, 31) == "Being processed")) {
                // line 32
                echo "                <td>  <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delMessage");
                echo "?idMsg=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" class=\"btn btn-addCart\"> Delete </a> </td>
                ";
            }
            // line 34
            echo "
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </table>
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
        return "user/userMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  138 => 34,  130 => 32,  128 => 31,  123 => 29,  119 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Messages{% endblock %}

{% block body %}

<div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">

    <div class=\"card text-center\">
        <div class=\"card-header\">
            Messages
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"> You reached to us and we reached back !</h5>
            <p class=\"card-text\">If it hasn't already been processed, your question is in safe hands, an admin will be there soon !</p>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Object</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Manage</th>
                </tr>
                </thead>
                <tbody>
                {% for msg in messages %}
                <td>{{ msg.object }}</td>
                <td>{{ msg.message }}</td>
                <td>{{ msg.status }}
                </td>
                {% if msg.status == 'Being processed'%}
                <td>  <a href=\"{{ path('delMessage') }}?idMsg={{ msg.id }}\" class=\"btn btn-addCart\"> Delete </a> </td>
                {% endif %}

                </tbody>
                {% endfor %}
                </table>
        <div class=\"card-footer text-muted\">
            GustoHelpService
        </div>
        </div>
    </div>
</div>

{% endblock %}", "user/userMessages.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\userMessages.html.twig");
    }
}
