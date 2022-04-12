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

/* user/cart.html.twig */
class __TwigTemplate_d765e7bd3bfcc85668645c89fa615d5ff59184bba0e9c656c56c91fc5b2a776d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/cart.html.twig", 1);
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
        echo "\" />";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cart";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">
        <div class=\"card text-center\">
            <div class=\"card-header\">
                Your cart
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> Coming back for your best picks ?</h5>
                <p class=\"card-text\">Gusto will never fail you ! MAMMA MIA !</p>
                <table class=\"table\">
                    ";
        // line 16
        $context["total"] = 0;
        // line 17
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "idDish", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                    // line 20
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 20) == $context["key"])) {
                        // line 21
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["dish"], "archived", [], "any", false, false, false, 21) != 1)) {
                            // line 22
                            echo "                                        ";
                            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 22, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 22) * $context["value"]));
                            // line 23
                            echo "                                        <tr>
                                            <td>
                                                <img class=\"imgMenu\" src=\"";
                            // line 25
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["dish"], "photo", [], "any", false, false, false, 25)), "html", null, true);
                            echo "\">
                                            </td>
                                            <td>
                                                <h2 class=\"textMenu\">";
                            // line 28
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "dishName", [], "any", false, false, false, 28), "html", null, true);
                            echo "</h2>
                                                <h4 class=\"textPrix\"> ";
                            // line 29
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 29), "html", null, true);
                            echo " € </h4>
                                                <h6 class=\"textDesc\"> ";
                            // line 30
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "description", [], "any", false, false, false, 30), "html", null, true);
                            echo " </h6>
                                            </td>
                                            <td>
                                                ";
                            // line 33
                            if (($context["value"] != 1)) {
                                // line 34
                                echo "                                                    <a href=\"";
                                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("minus");
                                echo "?idDish=";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 34), "html", null, true);
                                echo "&idCart=";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
                                echo "\" class=\"sign\">
                                                        -
                                                    </a>
                                                ";
                            }
                            // line 38
                            echo "                                            </td>
                                            <td>
                                                <h2 class=\"textDesc\"> ";
                            // line 40
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo " </h2>
                                            </td>
                                            <td>
                                                <a href=\"";
                            // line 43
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plus");
                            echo "?idDish=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 43), "html", null, true);
                            echo "\" class=\"sign\">
                                                    +
                                                </a>
                                            </td>
                                            <td>
                                                <a href=\"";
                            // line 48
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove");
                            echo "?idDish=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 48), "html", null, true);
                            echo "&idCart=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 48, $this->source); })()), 0, [], "array", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"> Remove </a>
                                            </td>
                                        </tr>
                                    ";
                        }
                        // line 52
                        echo "                                ";
                    }
                    // line 53
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dish'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    <tr>
                        <td colspan=\"6\" style=\"text-align: center\">
                            <h3 class=\"textPrix\">Total : ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " €</h3>
                        </td>
                    </tr>
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
        return "user/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 58,  237 => 56,  231 => 55,  225 => 54,  219 => 53,  216 => 52,  205 => 48,  195 => 43,  189 => 40,  185 => 38,  173 => 34,  171 => 33,  165 => 30,  161 => 29,  157 => 28,  151 => 25,  147 => 23,  144 => 22,  141 => 21,  138 => 20,  133 => 19,  128 => 18,  123 => 17,  121 => 16,  110 => 7,  100 => 6,  81 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %} <link rel=\"stylesheet\" href=\"{{ asset('css/menuStyle.css') }}\" />{% endblock %}

{% block title %}Cart{% endblock %}

{% block body %}
    <div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">
        <div class=\"card text-center\">
            <div class=\"card-header\">
                Your cart
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> Coming back for your best picks ?</h5>
                <p class=\"card-text\">Gusto will never fail you ! MAMMA MIA !</p>
                <table class=\"table\">
                    {% set total = 0 %}
                    {% for c in cart %}
                        {% for key, value in c.idDish %}
                            {% for dish in dishes %}
                                {% if dish.id == key %}
                                    {% if dish.archived != 1 %}
                                        {% set total = total+(dish.price*value) %}
                                        <tr>
                                            <td>
                                                <img class=\"imgMenu\" src=\"{{ asset(dish.photo) }}\">
                                            </td>
                                            <td>
                                                <h2 class=\"textMenu\">{{ dish.dishName }}</h2>
                                                <h4 class=\"textPrix\"> {{ dish.price }} € </h4>
                                                <h6 class=\"textDesc\"> {{ dish.description }} </h6>
                                            </td>
                                            <td>
                                                {% if value != 1 %}
                                                    <a href=\"{{ path('minus') }}?idDish={{ dish.id }}&idCart={{ cart[0].id }}\" class=\"sign\">
                                                        -
                                                    </a>
                                                {% endif %}
                                            </td>
                                            <td>
                                                <h2 class=\"textDesc\"> {{ value }} </h2>
                                            </td>
                                            <td>
                                                <a href=\"{{ path('plus') }}?idDish={{ dish.id }}\" class=\"sign\">
                                                    +
                                                </a>
                                            </td>
                                            <td>
                                                <a href=\"{{ path('remove') }}?idDish={{ dish.id }}&idCart={{ cart[0].id }}\" class=\"btn btn-primary btn-sm\"> Remove </a>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endfor %}
                    {% endfor %}
                    <tr>
                        <td colspan=\"6\" style=\"text-align: center\">
                            <h3 class=\"textPrix\">Total : {{ total }} €</h3>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "user/cart.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\cart.html.twig");
    }
}
