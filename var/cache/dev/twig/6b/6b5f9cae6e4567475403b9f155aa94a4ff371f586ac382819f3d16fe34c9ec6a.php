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

/* security/auth.html.twig */
class __TwigTemplate_5b509604b06162a36284a068f6c4d47542876cc285eca8bf8ef8bcf211dd23ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/auth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/auth.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/auth.html.twig", 1);
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

        echo "Page d'inscription";
        
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
    <!-- Body-->
    <div class=\"container-fluid content\">
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            <label for=\"username\">Username</label>
                            <div class=\"border-class\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Votre pseudo\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" >
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"mdp\">Password</label>
                            <div class=\"border-class\">
                                <input type=\"Password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"btn-submit\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">LOG IN</button>
                    </div>

                    ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageData", [], "any", false, false, false, 31), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 33
        echo "
                    <div class=\"text\">
                        <p class=\"text-center\"><u><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Don't have an account? Sign up</a></u></p>
                    </div>
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">WELCOME BACK</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/CHEZ_GUSTO_LOGO.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
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
        return "security/auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  132 => 35,  128 => 33,  122 => 31,  120 => 30,  103 => 16,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page d'inscription{% endblock %}

{% block body %}

    <!-- Body-->
    <div class=\"container-fluid content\">
        <div class = \"row\">
            <div class=\"col-6 my-auto\">
                <form action=\"{{ path('login') }}\" method=\"post\">
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            <label for=\"username\">Username</label>
                            <div class=\"border-class\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Votre pseudo\" value=\"{{ last_username }}\" >
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"mdp\">Password</label>
                            <div class=\"border-class\">
                                <input type=\"Password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"btn-submit\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">LOG IN</button>
                    </div>

                    {% if error %}
                        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    <div class=\"text\">
                        <p class=\"text-center\"><u><a href=\"{{ path('app_register') }}\">Don't have an account? Sign up</a></u></p>
                    </div>
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">WELCOME BACK</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"{{ asset('image/CHEZ_GUSTO_LOGO.png') }}\" alt=\"logo\"/>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/auth.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\security\\auth.html.twig");
    }
}
