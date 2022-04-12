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

/* homepage/menu.html.twig */
class __TwigTemplate_0ffee4bb5328d8c7910b91eb3bbbc4e24550e37145991114966a3f5d58f775c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/menuStyle.css"), "html", null, true);
        echo "\" /> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Menu";
        
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
    <div class=\"row justify-content-md-center\">
        ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-dish");
            echo "\" class=\"btn btn-primary btn-lg btn-block\"> Want more ? Add more ! </a>
        ";
        }
        // line 11
        echo "    </div>

    <div class=\"box\">
        <table style=\"margin: auto; text-align: center; width:100%\">
            <tr>
                ";
        // line 16
        $context["nbr"] = 0;
        // line 17
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
            // line 18
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["dish"], "archived", [], "any", false, false, false, 18) != true)) {
                // line 19
                echo "                    <td>
                        <table style=\"text-align: center; margin: auto\">
                            <tr>
                                <td>
                                    ";
                // line 23
                $context["nbr"] = ((isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 23, $this->source); })()) + 1);
                // line 24
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["dish"], "photo", [], "any", false, false, false, 24)), "html", null, true);
                echo "\" class=\"imgMenu\">
                                    <h2 class=\"textMenu\" id=\"dishName\"> ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "dishName", [], "any", false, false, false, 25), "html", null, true);
                echo " </h2>
                                    <h4 class=\"textPrix\"> ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 26), "html", null, true);
                echo " € </h4>
                                    <h6 class=\"textDesc\"> ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 27), "html", null, true);
                echo " </h6>
                                    ";
                // line 28
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 29
                    echo "                                        <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-cart");
                    echo "?idDish=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo " \" class=\"btn btn-addCart\"> Add to Cart </a>
                                        <a href=\"";
                    // line 30
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-fav");
                    echo "?idDish=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 30), "html", null, true);
                    echo " \" class=\"btn btn-primary\"> Add to Favorites </a>
                                    ";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 32
                    echo "                                        <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del-dish");
                    echo "?idDish=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 32), "html", null, true);
                    echo " \" class=\"btn btn-primary\"> Delete Dish </a>
                                        <a href=\"";
                    // line 33
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update-dish");
                    echo "?idDish=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\" class=\"btn btn-primary\"> Update Dish </a>
                                    ";
                }
                // line 35
                echo "
                                </td>
                            </tr>
                        </table>
                    </td>
                    ";
                // line 40
                if ((((isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 40, $this->source); })()) % 3) == 0)) {
                    // line 41
                    echo "                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                    ";
                }
                // line 45
                echo "                            ";
            }
            // line 46
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </table>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 47,  212 => 46,  209 => 45,  203 => 41,  201 => 40,  194 => 35,  187 => 33,  180 => 32,  173 => 30,  166 => 29,  164 => 28,  160 => 27,  156 => 26,  152 => 25,  147 => 24,  145 => 23,  139 => 19,  136 => 18,  131 => 17,  129 => 16,  122 => 11,  116 => 9,  114 => 8,  110 => 6,  100 => 5,  81 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %} <link rel=\"stylesheet\" href=\"{{ asset('css/menuStyle.css') }}\" /> {% endblock %}
{% block title %}Menu{% endblock %}

{% block body %}

    <div class=\"row justify-content-md-center\">
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('add-dish') }}\" class=\"btn btn-primary btn-lg btn-block\"> Want more ? Add more ! </a>
        {% endif %}
    </div>

    <div class=\"box\">
        <table style=\"margin: auto; text-align: center; width:100%\">
            <tr>
                {% set nbr = 0 %}
                {% for dish in dishes %}
                {% if dish.archived != true %}
                    <td>
                        <table style=\"text-align: center; margin: auto\">
                            <tr>
                                <td>
                                    {% set nbr = nbr+1 %}
                                    <img src=\"{{ asset(dish.photo) }}\" class=\"imgMenu\">
                                    <h2 class=\"textMenu\" id=\"dishName\"> {{ dish.dishName }} </h2>
                                    <h4 class=\"textPrix\"> {{ dish.price }} € </h4>
                                    <h6 class=\"textDesc\"> {{ dish.description }} </h6>
                                    {% if is_granted('ROLE_USER') %}
                                        <a href=\"{{ path('add-cart') }}?idDish={{ dish.id }} \" class=\"btn btn-addCart\"> Add to Cart </a>
                                        <a href=\"{{ path('add-fav') }}?idDish={{ dish.id }} \" class=\"btn btn-primary\"> Add to Favorites </a>
                                    {% elseif is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('del-dish') }}?idDish={{ dish.id }} \" class=\"btn btn-primary\"> Delete Dish </a>
                                        <a href=\"{{ path('update-dish') }}?idDish={{ dish.id }}\" class=\"btn btn-primary\"> Update Dish </a>
                                    {% endif %}

                                </td>
                            </tr>
                        </table>
                    </td>
                    {% if nbr % 3 == 0 %}
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                    {% endif %}
                            {% endif %}
                {% endfor %}
        </table>
    </div>



{% endblock %}
", "homepage/menu.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\homepage\\menu.html.twig");
    }
}
