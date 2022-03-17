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

/* user/reservationHistory.html.twig */
class __TwigTemplate_848b78d165f9eb8a13a1563070b1154403c9ba08740a85cefa44a14cae3adf57 extends Template
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
        return "user/baseUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservationHistory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservationHistory.html.twig"));

        $this->parent = $this->loadTemplate("user/baseUser.html.twig", "user/reservationHistory.html.twig", 1);
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

        echo "Reservations History";
        
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
        echo "    <div class=\"container-fluid content\" style=\"width: 80%; margin: auto;\">
        <div  style=\"padding: 20px;\">
            <div class=\"row justify-content-around\">
                <div class=\"col-3 text-center\" >
                    <a href = ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user-reserver-history");
        echo "    class=\"btn btn-outline-primary btn-block active\" role = \"button\">RESERVATION</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-3 text-center\">
                    <a href = \"#\" class=\"btn btn-outline-primary btn-block\" role = \"button\">FAVORIS</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-3 text-center\">
                    <a href = ";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user-contactForm");
        echo "  class=\"btn btn-outline-primary btn-block text-button\" role = \"button\" >
                    CONTACT</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-3 text-center\">
                    <a href = ";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user-updateForm");
        echo "  class=\"btn btn-outline-primary btn-block text-nowrap\" role = \"button\">MON COMPTE</a>
                </div>
            </div>
        </div>

        <div class=\"col-12\">
            <form>
                <table class=\"historyTable\">
                    <tr>
                        <td>06/01/2022</td>
                        <td>21:00</td>
                        <td>
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Delete</a>&nbsp;&nbsp;
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Update</a>
                        </td>
                    </tr>
                    <tr>
                        <td>06/01/2022</td>
                        <td>21:00</td>
                        <td>
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Delete</a>&nbsp;&nbsp;
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Update</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/reservationHistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/baseUser.html.twig' %}

{% block title %}Reservations History{% endblock %}

{% block body %}
    <div class=\"container-fluid content\" style=\"width: 80%; margin: auto;\">
        <div  style=\"padding: 20px;\">
            <div class=\"row justify-content-around\">
                <div class=\"col-3 text-center\" >
                    <a href = {{ path('user-reserver-history') }}    class=\"btn btn-outline-primary btn-block active\" role = \"button\">RESERVATION</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-3 text-center\">
                    <a href = \"#\" class=\"btn btn-outline-primary btn-block\" role = \"button\">FAVORIS</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-3 text-center\">
                    <a href = {{ path('user-contactForm') }}  class=\"btn btn-outline-primary btn-block text-button\" role = \"button\" >
                    CONTACT</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-3 text-center\">
                    <a href = {{ path('user-updateForm') }}  class=\"btn btn-outline-primary btn-block text-nowrap\" role = \"button\">MON COMPTE</a>
                </div>
            </div>
        </div>

        <div class=\"col-12\">
            <form>
                <table class=\"historyTable\">
                    <tr>
                        <td>06/01/2022</td>
                        <td>21:00</td>
                        <td>
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Delete</a>&nbsp;&nbsp;
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Update</a>
                        </td>
                    </tr>
                    <tr>
                        <td>06/01/2022</td>
                        <td>21:00</td>
                        <td>
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Delete</a>&nbsp;&nbsp;
                            <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\" id=\"\">Update</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

{% endblock %}", "user/reservationHistory.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\reservationHistory.html.twig");
    }
}
