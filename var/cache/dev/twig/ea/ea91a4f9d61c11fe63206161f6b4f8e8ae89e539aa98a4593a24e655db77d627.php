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

/* reservation/reservation.html.twig */
class __TwigTemplate_4d6a501e333798a54572bf64b23792abaeb49a441a8c4cb81ce3845fe78e7e1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservation.html.twig", 1);
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

        echo "Booking";
        
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
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        <form>
            <div class=\"row\">
                <div class=\"col-6 my-auto\">
                    <div class=\"borderTitle mb-4 ml-0\">
                        <p class=\"text-center h2 my-2\">Sit at our table...</p>
                    </div>
                    <div class=\"ma-form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 20, $this->source); })()), "dateReservation", [], "any", false, false, false, 20), 'label', ["label" => "Date"]);
        echo "
                                    <div class=\"border-class\">
                                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 22, $this->source); })()), "dateReservation", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "js-datepicker", "style" => "width: 100%"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 26, $this->source); })()), "timeReservation", [], "any", false, false, false, 26), 'label', ["label" => "Time"]);
        echo "
                                    <div class=\"border-class\">
                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 28, $this->source); })()), "timeReservation", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "js-timepicker", "style" => "width: 100%"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"float: right\">Book</button>
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
                </div>
                <div class=\"col-6\">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/pngwing.com-8.png"), "html", null, true);
        echo "\" width=\"100%\" height=\"auto\"/>
                </div>
            </div>
        </form>
    </div>
    <script>
        \$(document).ready(function() {

            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '0',
            });
            \$('.js-datepicker').attr(\"placeholder\",\"Select a date\");
            \$('.js-timepicker').attr(\"min\", \"11:00\");
            \$('.js-timepicker').attr(\"max\", \"23:00\");

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  134 => 35,  124 => 28,  119 => 26,  112 => 22,  107 => 20,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Booking{% endblock %}

{% block body %}


    <div class=\"container-fluid content\">
        {{ form_start(reservationForm) }}
        <form>
            <div class=\"row\">
                <div class=\"col-6 my-auto\">
                    <div class=\"borderTitle mb-4 ml-0\">
                        <p class=\"text-center h2 my-2\">Sit at our table...</p>
                    </div>
                    <div class=\"ma-form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    {{ form_label(reservationForm.dateReservation, 'Date') }}
                                    <div class=\"border-class\">
                                        {{form_widget(reservationForm.dateReservation, {'attr': {'class': 'js-datepicker', 'style':'width: 100%'}})}}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(reservationForm.timeReservation, 'Time') }}
                                    <div class=\"border-class\">
                                        {{form_widget(reservationForm.timeReservation, {'attr': {'class': 'js-timepicker', 'style':'width: 100%'}})}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"float: right\">Book</button>
                    {{ form_end(reservationForm) }}
                </div>
                <div class=\"col-6\">
                    <img src=\"{{ asset('image/pngwing.com-8.png') }}\" width=\"100%\" height=\"auto\"/>
                </div>
            </div>
        </form>
    </div>
    <script>
        \$(document).ready(function() {

            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '0',
            });
            \$('.js-datepicker').attr(\"placeholder\",\"Select a date\");
            \$('.js-timepicker').attr(\"min\", \"11:00\");
            \$('.js-timepicker').attr(\"max\", \"23:00\");

        });
    </script>
{% endblock %}", "reservation/reservation.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\reservation\\reservation.html.twig");
    }
}
