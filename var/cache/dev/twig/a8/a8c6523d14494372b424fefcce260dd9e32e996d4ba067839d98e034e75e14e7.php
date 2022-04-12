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

/* user/contact.html.twig */
class __TwigTemplate_24d24271d2b8c5502b551ebffdd3da1ebf402a1a35df96e1da19d18a9901a7fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/contact.html.twig", 1);
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

        echo "Contact";
        
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
                Need help ?
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> If you reach out, we will always take care of you !</h5>
                <p class=\"card-text\">Describe your problem and our team is here to respond to any of your requests</p>
                    <div class=\"ma-form\">
                        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMsg"]) || array_key_exists("formMsg", $context) ? $context["formMsg"] : (function () { throw new RuntimeError('Variable "formMsg" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMsg"]) || array_key_exists("formMsg", $context) ? $context["formMsg"] : (function () { throw new RuntimeError('Variable "formMsg" does not exist.', 18, $this->source); })()), "object", [], "any", false, false, false, 18), 'label', ["label" => "Object"]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMsg"]) || array_key_exists("formMsg", $context) ? $context["formMsg"] : (function () { throw new RuntimeError('Variable "formMsg" does not exist.', 20, $this->source); })()), "object", [], "any", false, false, false, 20), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMsg"]) || array_key_exists("formMsg", $context) ? $context["formMsg"] : (function () { throw new RuntimeError('Variable "formMsg" does not exist.', 24, $this->source); })()), "message", [], "any", false, false, false, 24), 'label', ["label" => "Tell us more..."]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMsg"]) || array_key_exists("formMsg", $context) ? $context["formMsg"] : (function () { throw new RuntimeError('Variable "formMsg" does not exist.', 26, $this->source); })()), "message", [], "any", false, false, false, 26), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Send</button>
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMsg"]) || array_key_exists("formMsg", $context) ? $context["formMsg"] : (function () { throw new RuntimeError('Variable "formMsg" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"card-footer text-muted\">
                GustoHelpService
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  122 => 26,  117 => 24,  110 => 20,  105 => 18,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}

    <div class=\"shadow-lg p-3 mb-5 bg-white rounded\">
        <div class=\"card text-center\">
            <div class=\"card-header\">
                Need help ?
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\"> If you reach out, we will always take care of you !</h5>
                <p class=\"card-text\">Describe your problem and our team is here to respond to any of your requests</p>
                    <div class=\"ma-form\">
                        {{ form_start(formMsg) }}
                        <div class=\"form-group\">
                            {{form_label(formMsg.object, 'Object')}}
                            <div class=\"border-class\">
                                {{form_widget(formMsg.object)}}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{form_label(formMsg.message, 'Tell us more...')}}
                            <div class=\"border-class\">
                                {{ form_widget(formMsg.message) }}
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Send</button>
                {{ form_end(formMsg) }}
            </div>
            <div class=\"card-footer text-muted\">
                GustoHelpService
            </div>
        </div>

    </div>

{% endblock %}
", "user/contact.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\contact.html.twig");
    }
}
