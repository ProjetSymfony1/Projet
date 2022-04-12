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

/* user/userBooking.html.twig */
class __TwigTemplate_0c2fb0bb3f43d677ec16338608d3b9f05667737428fa3955dd4817eafb14b310 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userBooking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userBooking.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/userBooking.html.twig", 1);
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

        echo "My Bookings";
        
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
               My bookings
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> My bookings @ Gusto !</h5>
                <p class=\"card-text\">Follow and manage your bookings at a glance.</p>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Time</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 27
            echo "                        <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "timeReservation", [], "any", false, false, false, 29), "H:i"), "html", null, true);
            echo "</td>

                            ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["reservation"], "available", [], "any", false, false, false, 31) == 1)) {
                // line 32
                echo "                                <td>  Confirmed </td>
                                <td>
                                    <a href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancelBooking");
                echo "?idRez=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\" class=\"btn btn-addCart\"> Cancel </a>
                                </td>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["reservation"], "available", [], "any", false, false, false, 36) == 0)) {
                // line 37
                echo "                                <td>  Pending confirmation </td>
                                <td>
                                    <a href=\"";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancelBooking");
                echo "?idRez=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\" class=\"btn btn-addCart\"> Cancel </a>
                                </td>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["reservation"], "available", [], "any", false, false, false, 41) == 3)) {
                // line 42
                echo "                                <td>  Archived </td>
                            ";
            } else {
                // line 44
                echo "                                <td>  Canceled </td>
                            ";
            }
            // line 46
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return "user/userBooking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 48,  162 => 46,  158 => 44,  154 => 42,  152 => 41,  145 => 39,  141 => 37,  139 => 36,  132 => 34,  128 => 32,  126 => 31,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Bookings{% endblock %}

{% block body %}

    <div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">

        <div class=\"card text-center\">
            <div class=\"card-header\">
               My bookings
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> My bookings @ Gusto !</h5>
                <p class=\"card-text\">Follow and manage your bookings at a glance.</p>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Time</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for reservation in bookings %}
                        <tr>
                            <td>{{ reservation.dateReservation|date('Y-m-d') }}</td>
                            <td>{{ reservation.timeReservation|date('H:i') }}</td>

                            {% if reservation.available == 1 %}
                                <td>  Confirmed </td>
                                <td>
                                    <a href=\"{{ path('cancelBooking') }}?idRez={{ reservation.id }}\" class=\"btn btn-addCart\"> Cancel </a>
                                </td>
                            {% elseif  reservation.available == 0 %}
                                <td>  Pending confirmation </td>
                                <td>
                                    <a href=\"{{ path('cancelBooking') }}?idRez={{ reservation.id }}\" class=\"btn btn-addCart\"> Cancel </a>
                                </td>
                            {% elseif  reservation.available == 3 %}
                                <td>  Archived </td>
                            {% else %}
                                <td>  Canceled </td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

{% endblock %}", "user/userBooking.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\userBooking.html.twig");
    }
}
