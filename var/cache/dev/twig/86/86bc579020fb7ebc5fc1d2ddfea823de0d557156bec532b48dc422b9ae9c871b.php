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

/* user/favorite.html.twig */
class __TwigTemplate_479c21b6a35de96e13db1d306e1f124937efab1bf3300660b6dd0a30a831f2cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/favorite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/favorite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/favorite.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Favorites";
        
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
                Favorites
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> Coming back for your best picks ?</h5>
                <p class=\"card-text\">Gusto will never fail you ! MAMMA MIA !</p>
                <table class=\"table\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favs"]) || array_key_exists("favs", $context) ? $context["favs"] : (function () { throw new RuntimeError('Variable "favs" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
            // line 18
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["fav"], "idUser", [], "any", false, false, false, 18) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18))) {
                // line 19
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                    // line 20
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, $context["fav"], "idDish", [], "any", false, false, false, 20))) {
                        // line 21
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["dish"], "archived", [], "any", false, false, false, 21) != 1)) {
                            // line 22
                            echo "                                        <tbody>
                                        <tr>
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
                                                <a href=\"";
                            // line 33
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del-fav");
                            echo "?idFav=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fav"], "id", [], "any", false, false, false, 33), "html", null, true);
                            echo "\" class=\"btn btn-outline-primary\"> Remove </a>
                                                <a href=\"";
                            // line 34
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-cart");
                            echo "?idDish=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 34), "html", null, true);
                            echo " \" class=\"btn btn-outline-primary\"> Add to Cart </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    ";
                        }
                        // line 39
                        echo "                                ";
                    }
                    // line 40
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dish'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                        ";
            }
            // line 42
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "user/favorite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 43,  194 => 42,  191 => 41,  185 => 40,  182 => 39,  172 => 34,  166 => 33,  160 => 30,  156 => 29,  152 => 28,  146 => 25,  141 => 22,  138 => 21,  135 => 20,  130 => 19,  127 => 18,  123 => 17,  110 => 6,  100 => 5,  81 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %} <link rel=\"stylesheet\" href=\"{{ asset('css/menuStyle.css') }}\" />{% endblock %}
{% block title %}Favorites{% endblock %}

{% block body %}

    <div class=\"shadow-lg p-5 mb-5 bg-white rounded container\">

        <div class=\"card text-center\">
            <div class=\"card-header\">
                Favorites
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> Coming back for your best picks ?</h5>
                <p class=\"card-text\">Gusto will never fail you ! MAMMA MIA !</p>
                <table class=\"table\">
                    {% for fav in favs %}
                        {% if fav.idUser == app.user.id %}
                            {% for dish in dishes %}
                                {% if dish.id == fav.idDish %}
                                    {% if dish.archived != 1 %}
                                        <tbody>
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
                                                <a href=\"{{ path('del-fav') }}?idFav={{ fav.id }}\" class=\"btn btn-outline-primary\"> Remove </a>
                                                <a href=\"{{ path('add-cart') }}?idDish={{ dish.id }} \" class=\"btn btn-outline-primary\"> Add to Cart </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                </table>
                <div class=\"card-footer text-muted\">
                    GustoHelpService
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "user/favorite.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\favorite.html.twig");
    }
}
