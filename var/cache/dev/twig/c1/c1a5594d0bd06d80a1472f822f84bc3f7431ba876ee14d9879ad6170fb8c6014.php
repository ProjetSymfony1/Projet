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

/* user/updateInfoClient.html.twig */
class __TwigTemplate_0f26a2ffb86f6806cf1ba488440da689bbf29cdfae6b0fa5a47860fe30582489 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/updateInfoClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/updateInfoClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/updateInfoClient.html.twig", 1);
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

        echo "Update Info Client";
        
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
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 14, $this->source); })()), "id_user", [], "any", false, false, false, 14), 'label', ["label" => "Username"]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 16, $this->source); })()), "id_user", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 21, $this->source); })()), "id_user", [], "any", false, false, false, 21), 'label', ["label" => "Last Name"]);
        echo "
                                <div class=\"border-class\">
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 27, $this->source); })()), "id_user", [], "any", false, false, false, 27), 'label', ["label" => "First Name"]);
        echo "
                                <div class=\"border-class\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 35, $this->source); })()), "id_user", [], "any", false, false, false, 35), 'label', ["label" => "Email"]);
        echo "
                                <div class=\"border-class\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 37, $this->source); })()), "mail", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 41, $this->source); })()), "id_user", [], "any", false, false, false, 41), 'label', ["label" => "Full adress"]);
        echo "
                                <div class=\"border-class\">
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 43, $this->source); })()), "adress", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 48, $this->source); })()), "id_user", [], "any", false, false, false, 48), 'label', ["label" => "Gender"]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 50, $this->source); })()), "gender", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 55, $this->source); })()), "id_user", [], "any", false, false, false, 55), 'label', ["label" => "Password"]);
        echo "
                            <div class=\"border-class\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 57, $this->source); })()), "plainPassword", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "border-class"]]);
        echo "
                            </div>

                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">UPDATE</button>
                        <div class=\"form-check-label text-center\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 63, $this->source); })()), "agreeTerms", [], "any", false, false, false, 63), 'row');
        echo "
                        </div>
                    </div>
                    ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateInfoForm"]) || array_key_exists("updateInfoForm", $context) ? $context["updateInfoForm"] : (function () { throw new RuntimeError('Variable "updateInfoForm" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h2 my-2\">Update your profile</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/CHEZ_GUSTO_LOGO.png"), "html", null, true);
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
        return "user/updateInfoClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 75,  198 => 66,  192 => 63,  183 => 57,  178 => 55,  170 => 50,  165 => 48,  157 => 43,  152 => 41,  145 => 37,  140 => 35,  131 => 29,  126 => 27,  119 => 23,  114 => 21,  106 => 16,  101 => 14,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Update Info Client{% endblock %}

{% block body %}

    <div class=\"container-fluid content\">
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                {{ form_start(updateInfoForm) }}
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            {{ form_label(updateInfoForm.id_user, 'Username') }}
                            <div class=\"border-class\">
                                {{form_widget(updateInfoForm.id_user, {'attr': {'class': 'border-class'}})}}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{ form_label(updateInfoForm.id_user, 'Last Name') }}
                                <div class=\"border-class\">
                                    {{ form_widget(updateInfoForm.lastName, {'attr': {'class': 'border-class'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_label(updateInfoForm.id_user, 'First Name') }}
                                <div class=\"border-class\">
                                    {{ form_widget(updateInfoForm.firstName, {'attr': {'class': 'border-class'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                {{ form_label(updateInfoForm.id_user, 'Email') }}
                                <div class=\"border-class\">
                                    {{ form_widget(updateInfoForm.mail, {'attr': {'class': 'border-class'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_label(updateInfoForm.id_user, 'Full adress') }}
                                <div class=\"border-class\">
                                    {{ form_widget(updateInfoForm.adress, {'attr': {'class': 'border-class'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(updateInfoForm.id_user, 'Gender') }}
                            <div class=\"border-class\">
                                {{ form_widget(updateInfoForm.gender, {'attr': {'class': 'border-class'}}) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(updateInfoForm.id_user, 'Password') }}
                            <div class=\"border-class\">
                                {{ form_widget(updateInfoForm.plainPassword, {'attr': {'class': 'border-class'}}) }}
                            </div>

                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">UPDATE</button>
                        <div class=\"form-check-label text-center\">
                            {{ form_row(updateInfoForm.agreeTerms)  }}
                        </div>
                    </div>
                    {{ form_end(updateInfoForm) }}
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h2 my-2\">Update your profile</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"{{ asset('image/CHEZ_GUSTO_LOGO.png') }}\"/>
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "user/updateInfoClient.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\updateInfoClient.html.twig");
    }
}
