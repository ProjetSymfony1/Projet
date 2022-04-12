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

/* admin/adminManageBookings.html.twig */
class __TwigTemplate_a5a797e60743042fe5ff496894d424e482991bdba325622d883403132c4c5844 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminManageBookings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminManageBookings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminManageBookings.html.twig", 1);
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

        echo "Bookings";
        
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
                Manage bookings
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> Upcoming bookings @ Gusto !</h5>
                <p class=\"card-text\">Manage bookings at a glance. </p>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">User</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Time</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Manage</th>
                    </tr>
                    </thead>
                   <tbody>
                   ";
        // line 27
        if (((isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 27, $this->source); })()) != null)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 28, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 29, $this->source); })()), $context["i"], [], "array", false, false, false, 29), "available", [], "any", false, false, false, 29) != 3)) {
                    // line 30
                    echo "                            <tr>
                                <td> ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 31, $this->source); })()), $context["i"], [], "array", false, false, false, 31), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 32
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 32, $this->source); })()), $context["i"], [], "array", false, false, false, 32), "dateReservation", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 33
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 33, $this->source); })()), $context["i"], [], "array", false, false, false, 33), "timeReservation", [], "any", false, false, false, 33), "H:i"), "html", null, true);
                    echo "</td>
                                ";
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 34, $this->source); })()), $context["i"], [], "array", false, false, false, 34), "available", [], "any", false, false, false, 34) == 1)) {
                        // line 35
                        echo "                                    <td>  Confirmed </td>
                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 36
(isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 36, $this->source); })()), $context["i"], [], "array", false, false, false, 36), "available", [], "any", false, false, false, 36) == 0)) {
                        // line 37
                        echo "                                    <td>  Pending confirmation </td>
                                ";
                    } else {
                        // line 39
                        echo "                                    <td>  Canceled </td>
                                ";
                    }
                    // line 41
                    echo "
                                <td>
                                    ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 43, $this->source); })()), $context["i"], [], "array", false, false, false, 43), "available", [], "any", false, false, false, 43) == 2)) {
                        // line 44
                        echo "                                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archiveBooking");
                        echo "?idRez=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 44, $this->source); })()), $context["i"], [], "array", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
                        echo "\" class=\"btn btn-addCart\"> Archive </a>
                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 45
(isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 45, $this->source); })()), $context["i"], [], "array", false, false, false, 45), "available", [], "any", false, false, false, 45) == 1)) {
                        // line 46
                        echo "                                        <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancelBooking");
                        echo "?idRez=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 46, $this->source); })()), $context["i"], [], "array", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
                        echo "\" class=\"btn btn-addCart\"> Cancel </a>&nbsp;
                                        <a href=\"";
                        // line 47
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archiveBooking");
                        echo "?idRez=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 47, $this->source); })()), $context["i"], [], "array", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                        echo "\" class=\"btn btn-addCart\"> Archive </a>
                                    ";
                    } else {
                        // line 49
                        echo "                                        <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancelBooking");
                        echo "?idRez=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 49, $this->source); })()), $context["i"], [], "array", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" class=\"btn btn-addCart\"> Cancel </a>&nbsp;&nbsp;
                                        <a href=\"";
                        // line 50
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirmBooking");
                        echo "?idRez=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 50, $this->source); })()), $context["i"], [], "array", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
                        echo "\" class=\"btn btn-addCart\"> Confirm </a>
                                        <a href=\"";
                        // line 51
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archiveBooking");
                        echo "?idRez=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rez"]) || array_key_exists("rez", $context) ? $context["rez"] : (function () { throw new RuntimeError('Variable "rez" does not exist.', 51, $this->source); })()), $context["i"], [], "array", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" class=\"btn btn-addCart\"> Archive </a>
                                    ";
                    }
                    // line 52
                    echo "&nbsp;&nbsp;
                                </td>
                            </tr>
                        ";
                }
                // line 56
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                   ";
        }
        // line 58
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminManageBookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 58,  212 => 57,  206 => 56,  200 => 52,  193 => 51,  187 => 50,  180 => 49,  173 => 47,  166 => 46,  164 => 45,  157 => 44,  155 => 43,  151 => 41,  147 => 39,  143 => 37,  141 => 36,  138 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  121 => 30,  118 => 29,  113 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bookings{% endblock %}

{% block body %}

    <div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">

        <div class=\"card text-center\">
            <div class=\"card-header\">
                Manage bookings
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> Upcoming bookings @ Gusto !</h5>
                <p class=\"card-text\">Manage bookings at a glance. </p>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">User</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Time</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Manage</th>
                    </tr>
                    </thead>
                   <tbody>
                   {% if rez != null %}
                    {% for i in 0..rez|length-1 %}
                        {% if rez[i].available != 3 %}
                            <tr>
                                <td> {{ username[i] }}</td>
                                <td>{{ rez[i].dateReservation|date('Y-m-d') }}</td>
                                <td>{{ rez[i].timeReservation|date('H:i') }}</td>
                                {% if rez[i].available == 1 %}
                                    <td>  Confirmed </td>
                                {% elseif  rez[i].available == 0 %}
                                    <td>  Pending confirmation </td>
                                {% else %}
                                    <td>  Canceled </td>
                                {% endif %}

                                <td>
                                    {% if rez[i].available == 2 %}
                                    <a href=\"{{ path('archiveBooking') }}?idRez={{ rez[i].id }}\" class=\"btn btn-addCart\"> Archive </a>
                                    {% elseif rez[i].available == 1 %}
                                        <a href=\"{{ path('cancelBooking') }}?idRez={{ rez[i].id }}\" class=\"btn btn-addCart\"> Cancel </a>&nbsp;
                                        <a href=\"{{ path('archiveBooking') }}?idRez={{ rez[i].id }}\" class=\"btn btn-addCart\"> Archive </a>
                                    {% else %}
                                        <a href=\"{{ path('cancelBooking') }}?idRez={{ rez[i].id }}\" class=\"btn btn-addCart\"> Cancel </a>&nbsp;&nbsp;
                                        <a href=\"{{ path('confirmBooking') }}?idRez={{ rez[i].id }}\" class=\"btn btn-addCart\"> Confirm </a>
                                        <a href=\"{{ path('archiveBooking') }}?idRez={{ rez[i].id }}\" class=\"btn btn-addCart\"> Archive </a>
                                    {% endif %}&nbsp;&nbsp;
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                   {% endif %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

{% endblock %}", "admin/adminManageBookings.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\admin\\adminManageBookings.html.twig");
    }
}
