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

        echo "Ajouter Dish";
        
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
                            <div class=\"border-class\">
                                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 14, $this->source); })()), "dish_name", [], "any", false, false, false, 14), 'label');
        echo "
                                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 15, $this->source); })()), "dish_name", [], "any", false, false, false, 15), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"border-class\">
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"border-class\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 25, $this->source); })()), "photo", [], "any", false, false, false, 25), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <div class=\"border-class\">
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), 'row');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                <div class=\"border-class\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>


                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["DishForm"]) || array_key_exists("DishForm", $context) ? $context["DishForm"] : (function () { throw new RuntimeError('Variable "DishForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">Ajouter un nouveau plat</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"";
        // line 53
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
        return array (  161 => 53,  149 => 44,  138 => 36,  130 => 31,  121 => 25,  113 => 20,  105 => 15,  101 => 14,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter Dish{% endblock %}

{% block body %}
    <div class=\"container-fluid content\">
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                {{ form_start(DishForm) }}
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            <div class=\"border-class\">
                                {{form_label(DishForm.dish_name)}}
                                {{form_widget(DishForm.dish_name)}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"border-class\">
                                {{ form_row(DishForm.description) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"border-class\">
                                {{ form_row(DishForm.photo) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <div class=\"border-class\">
                                    {{ form_row(DishForm.type) }}
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                <div class=\"border-class\">
                                    {{ form_row(DishForm.price) }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                    {{ form_end(DishForm) }}
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">Ajouter un nouveau plat</p>
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
