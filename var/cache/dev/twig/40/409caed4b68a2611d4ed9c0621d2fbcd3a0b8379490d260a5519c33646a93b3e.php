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

/* Dish/ajoutDish.html.twig */
class __TwigTemplate_414a101c505b60b3cdc53b82a68739f77e7335beb3f755f49f020b0a640ad1f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dish/ajoutDish.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dish/ajoutDish.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Dish/ajoutDish.html.twig", 1);
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

        echo "Add A Dish";
        
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
        echo "    <div class=\"container-fluid content\">
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 13, $this->source); })()), "dish_name", [], "any", false, false, false, 13), 'label', ["label" => "Dish name"]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 15, $this->source); })()), "dish_name", [], "any", false, false, false, 15), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'label', ["label" => "Describe the dish"]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), 'label', ["label" => "Type"]);
        echo "
                                <div class=\"border-class\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32), 'label', ["label" => "Price"]);
        echo "
                                <div class=\"border-class\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 39, $this->source); })()), "photo", [], "any", false, false, false, 39), 'label', ["label" => "Upload your path.."]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 41, $this->source); })()), "photo", [], "any", false, false, false, 41), 'widget');
        echo "
                            </div>
                        </div>


                    </div>


                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">
                        ";
        // line 50
        if ((isset($context["updateMode"]) || array_key_exists("updateMode", $context) ? $context["updateMode"] : (function () { throw new RuntimeError('Variable "updateMode" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "                            Update
                        ";
        } else {
            // line 53
            echo "                            Append
                        ";
        }
        // line 55
        echo "                    </button>
                    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
                </form>
            </div>

            <div class=\"col-5\">
                <div class=\"borderTitle mb-4 ml-0\">
                    <p class=\"text-center h2 my-2\">
                        ";
        // line 63
        if ((isset($context["updateMode"]) || array_key_exists("updateMode", $context) ? $context["updateMode"] : (function () { throw new RuntimeError('Variable "updateMode" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "                            Update your Dish
                        ";
        } else {
            // line 66
            echo "                            Add A New Dish
                        ";
        }
        // line 68
        echo "                    </p>
                </div>
                <div class=\"col-5\">
                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/pngwing.com.png"), "html", null, true);
        echo "\"/>
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
        return "Dish/ajoutDish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 71,  200 => 68,  196 => 66,  192 => 64,  190 => 63,  180 => 56,  177 => 55,  173 => 53,  169 => 51,  167 => 50,  155 => 41,  150 => 39,  142 => 34,  137 => 32,  130 => 28,  125 => 26,  117 => 21,  112 => 19,  105 => 15,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add A Dish{% endblock %}

{% block body %}
    <div class=\"container-fluid content\">
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                {{ form_start(DishForm) }}
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            {{form_label(DishForm.dish_name, 'Dish name')}}
                            <div class=\"border-class\">
                                {{form_widget(DishForm.dish_name)}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{form_label(DishForm.description, 'Describe the dish')}}
                            <div class=\"border-class\">
                                {{ form_widget(DishForm.description) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{form_label(DishForm.type, 'Type')}}
                                <div class=\"border-class\">
                                    {{ form_widget(DishForm.type) }}
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{form_label(DishForm.price, 'Price')}}
                                <div class=\"border-class\">
                                    {{ form_widget(DishForm.price) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{form_label(DishForm.photo, 'Upload your path..')}}
                            <div class=\"border-class\">
                                {{ form_widget(DishForm.photo) }}
                            </div>
                        </div>


                    </div>


                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">
                        {% if updateMode %}
                            Update
                        {% else %}
                            Append
                        {% endif %}
                    </button>
                    {{ form_end(DishForm) }}
                </form>
            </div>

            <div class=\"col-5\">
                <div class=\"borderTitle mb-4 ml-0\">
                    <p class=\"text-center h2 my-2\">
                        {% if updateMode %}
                            Update your Dish
                        {% else %}
                            Add A New Dish
                        {% endif %}
                    </p>
                </div>
                <div class=\"col-5\">
                    <img src=\"{{ asset('image/pngwing.com.png') }}\"/>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "Dish/ajoutDish.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\Dish\\ajoutDish.html.twig");
    }
}
