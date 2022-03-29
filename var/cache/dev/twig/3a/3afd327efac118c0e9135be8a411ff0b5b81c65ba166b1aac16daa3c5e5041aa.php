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

/* homepage/booking.html.twig */
class __TwigTemplate_92d59becef1e2143ab4bd4ad7d6831d209e0dbe6606a6b9c111b21be42ff0174 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/booking.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/booking.html.twig", 1);
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

        echo "Reservation";
        
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
";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "    <div class=\"container-fluid content\">
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
                                    <label for=\"date\">Date</label>
                                    <div class=\"border-class\">
                                        <input type=\"date\" class=\"form-control\" id=\"date\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"time\">Time</label>
                                    <div class=\"border-class\">
                                        <input type=\"time\" class=\"form-control\" id=\"time\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"float: right\">Book</button>
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
";
        } else {
            // line 44
            echo "    <div class=\"container-fluid content\">
        <div class=\"row\">
            <div class=\"col-8 my-auto\">
                <p class=\"mamamiaTitle\">Mamamia...</p>
                <p class=\"mamamiaTitle\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Need to log in for this one...</p>
                <div class=\"row\">
                    <div class=\"col-2 my-auto\">
                    </div>
                    <div class=\"col-5\">
                        <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/2106829115-August113.gif"), "html", null, true);
            echo "\" width=\"70%\" style=\"display: block; margin:auto; padding-bottom: 15px;\"/>
                    </div>
                    <div class=\"col-5\" style=\"padding-top: 10%\">
                        <a href = ";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo " class=\"btn btn-outline-primary\" role = \"button\" style=\"width: 100%\">LOGIN</a>
                        <p class=\"underlinedText\">Don't have an account? <a href = ";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo ">Sign Up</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/plat-1.png"), "html", null, true);
            echo "\" width=\"100%\" height=\"auto\" style=\"margin-top: 30px;\"/>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage/booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  155 => 57,  151 => 56,  145 => 53,  134 => 44,  125 => 38,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block body %}

{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <div class=\"container-fluid content\">
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
                                    <label for=\"date\">Date</label>
                                    <div class=\"border-class\">
                                        <input type=\"date\" class=\"form-control\" id=\"date\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"time\">Time</label>
                                    <div class=\"border-class\">
                                        <input type=\"time\" class=\"form-control\" id=\"time\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"float: right\">Book</button>
                </div>
                <div class=\"col-6\">
                    <img src=\"{{ asset('image/pngwing.com-8.png') }}\" width=\"100%\" height=\"auto\"/>
                </div>
            </div>
        </form>
    </div>
{% else %}
    <div class=\"container-fluid content\">
        <div class=\"row\">
            <div class=\"col-8 my-auto\">
                <p class=\"mamamiaTitle\">Mamamia...</p>
                <p class=\"mamamiaTitle\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Need to log in for this one...</p>
                <div class=\"row\">
                    <div class=\"col-2 my-auto\">
                    </div>
                    <div class=\"col-5\">
                        <img src=\"{{ asset('image/2106829115-August113.gif') }}\" width=\"70%\" style=\"display: block; margin:auto; padding-bottom: 15px;\"/>
                    </div>
                    <div class=\"col-5\" style=\"padding-top: 10%\">
                        <a href = {{ path('login') }} class=\"btn btn-outline-primary\" role = \"button\" style=\"width: 100%\">LOGIN</a>
                        <p class=\"underlinedText\">Don't have an account? <a href = {{ path('app_register') }}>Sign Up</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"{{ asset('image/plat-1.png') }}\" width=\"100%\" height=\"auto\" style=\"margin-top: 30px;\"/>
            </div>
        </div>
    </div>
{% endif %}
{% endblock %}", "homepage/booking.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\homepage\\booking.html.twig");
    }
}
