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

/* user/formContactUser.html.twig */
class __TwigTemplate_83fca9399f63c452b36360ecee485e0978bf4c6c5bbb7185bd8d52f8cdbc4cd1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/formContactUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/formContactUser.html.twig"));

        $this->parent = $this->loadTemplate("user/baseUser.html.twig", "user/formContactUser.html.twig", 1);
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

        echo "FormContact User";
        
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
        <div class=\"col my-auto\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">RESERVATION</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">FAVORIS</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary text-button active\" role = \"button\" >
                        CONTACT</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">MON COMPTE</a>
                </div>
            </div>
        </div>

        <div class=\"col-6\">
            <form>
                <div class=\"ma-form\">
                    <div class=\"form-group\">
                        <label for=\"objet\">Objet</label>
                        <div class=\"border-class\">
                            <select id=\"sex\" class=\"form-control\">
                                <option selected>Select type</option>
                                <option selected>Type a</option>
                                <option selected>Type b</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"message\">Message</label>
                        <div class=\"border-class\">
                            <input type=\"text\" class=\"form-message\" id=\"message\" placeholder=\"MESSAGE\">

                        </div>
                    </div>
                </div>
                <div class=\"btn-submit\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">SEND</button>
                </div>
            </form>
        </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/formContactUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/baseUser.html.twig' %}

{% block title %}FormContact User{% endblock %}

{% block body %}
    <div class=\"container-fluid content\">
        <div class=\"col my-auto\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">RESERVATION</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">FAVORIS</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary text-button active\" role = \"button\" >
                        CONTACT</a> &nbsp;&nbsp;
                </div>
                <div class=\"col-sm\">
                    <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">MON COMPTE</a>
                </div>
            </div>
        </div>

        <div class=\"col-6\">
            <form>
                <div class=\"ma-form\">
                    <div class=\"form-group\">
                        <label for=\"objet\">Objet</label>
                        <div class=\"border-class\">
                            <select id=\"sex\" class=\"form-control\">
                                <option selected>Select type</option>
                                <option selected>Type a</option>
                                <option selected>Type b</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"message\">Message</label>
                        <div class=\"border-class\">
                            <input type=\"text\" class=\"form-message\" id=\"message\" placeholder=\"MESSAGE\">

                        </div>
                    </div>
                </div>
                <div class=\"btn-submit\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">SEND</button>
                </div>
            </form>
        </div>
        </div>
    </div>
{% endblock %}", "user/formContactUser.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\user\\formContactUser.html.twig");
    }
}
