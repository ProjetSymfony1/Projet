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

/* admin/adminMessages.html.twig */
class __TwigTemplate_052e3b7324cbadc124f71384eda71dd7f469cd13c61db802b8926ffbb4e8d037 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminMessages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminMessages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminMessages.html.twig", 1);
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

        echo "Messages";
        
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
            Your messages
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"> Welcome back admin ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "idUser", [], "any", false, false, false, 14), "html", null, true);
        echo " !</h5>
            <p class=\"card-text\">Look at all those questions, we have work to do !</p>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">User</th>
                    <th scope=\"col\">Object</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\"></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        if (((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 27, $this->source); })()) != null)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 28, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                        <td><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientData");
                echo "?idUser=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 29, $this->source); })()), $context["i"], [], "array", false, false, false, 29), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 29, $this->source); })()), $context["i"], [], "array", false, false, false, 29), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 30, $this->source); })()), $context["i"], [], "array", false, false, false, 30), "object", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 31, $this->source); })()), $context["i"], [], "array", false, false, false, 31), "message", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 32, $this->source); })()), $context["i"], [], "array", false, false, false, 32), "status", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>

                        ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 34, $this->source); })()), $context["i"], [], "array", false, false, false, 34), "status", [], "any", false, false, false, 34) == "Being processed")) {
                    // line 35
                    echo "                            <td>
                                <a href=\"";
                    // line 36
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkMessage");
                    echo "?idMsg=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 36, $this->source); })()), $context["i"], [], "array", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" class=\"btn btn-addCart\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-check\" viewBox=\"0 0 16 16\">
                            <path d=\"M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z\"/>
                            </svg> </a> </td>
                        ";
                }
                // line 40
                echo "
                </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
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
        return "admin/adminMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 44,  165 => 43,  157 => 40,  148 => 36,  145 => 35,  143 => 34,  138 => 32,  134 => 31,  130 => 30,  121 => 29,  116 => 28,  114 => 27,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Messages{% endblock %}

{% block body %}

<div class=\"shadow-lg p-3 mb-5 bg-white rounded\">

    <div class=\"card text-center\">
        <div class=\"card-header\">
            Your messages
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\"> Welcome back admin {{ app.user.idUser }} !</h5>
            <p class=\"card-text\">Look at all those questions, we have work to do !</p>
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">User</th>
                    <th scope=\"col\">Object</th>
                    <th scope=\"col\">Message</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\"></th>
                </tr>
                </thead>
                <tbody>
                {% if messages != null %}
                    {% for i in 0..messages|length-1 %}
                        <td><a href=\"{{ path('clientData') }}?idUser={{ username[i] }}\">{{ username[i]}}</a></td>
                        <td>{{ messages[i].object }}</td>
                        <td>{{ messages[i].message }}</td>
                        <td>{{ messages[i].status }}</td>

                        {% if messages[i].status == 'Being processed'%}
                            <td>
                                <a href=\"{{ path('checkMessage') }}?idMsg={{ messages[i].id }}\" class=\"btn btn-addCart\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-check\" viewBox=\"0 0 16 16\">
                            <path d=\"M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z\"/>
                            </svg> </a> </td>
                        {% endif %}

                </tbody>
                    {% endfor %}
                {% endif     %}
                </table>
        <div class=\"card-footer text-muted\">
            GustoHelpService
        </div>
        </div>
    </div>
</div>

{% endblock %}", "admin/adminMessages.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\admin\\adminMessages.html.twig");
    }
}
