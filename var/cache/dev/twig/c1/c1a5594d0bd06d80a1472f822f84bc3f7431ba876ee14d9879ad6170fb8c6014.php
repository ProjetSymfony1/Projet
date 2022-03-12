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
        return "user/baseUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/updateInfoClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/updateInfoClient.html.twig"));

        $this->parent = $this->loadTemplate("user/baseUser.html.twig", "user/updateInfoClient.html.twig", 1);
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

        echo "Update Info User";
        
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
        echo "<div class=\"container-fluid content\">
    <div class=\"col my-auto\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">RESERVATION</a> &nbsp;&nbsp;
            </div>
            <div class=\"col-sm\">
                <a href =\"#\"  class=\"btn btn-outline-primary\" role = \"button\">FAVORIS</a> &nbsp;&nbsp;
            </div>
            <div class=\"col-sm\">
                <a href =\"#\"  class=\"btn btn-outline-primary text-button\" role = \"button\">
                    CONTACT</a> &nbsp;&nbsp;
            </div>
            <div class=\"col-sm\">
                <a href =\"#\"  class=\"btn btn-outline-primary text-button active\" role = \"button\">
                    MON COMPTE</a>
            </div>
        </div>
    </div>

    <div class=\"col-6 my-auto\">
        <form>
            <div class=\"ma-form\">
                <div class=\"form-row\">
                    <div class=\"form-group col-md-6\">
                        <label for=\"nom\">Nom</label>
                        <div class=\"border-class\">
                            <input type=\"text\" class=\"form-control\" id=\"nom\" placeholder=\"ex: DUPONT, TRAN,...\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"prenom\">Prenom</label>
                        <div class=\"border-class\">
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" placeholder=\"ex: Jessica, Ha Phuong,...\">
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"mail\">Mail</label>
                    <div class=\"border-class\">
                        <input type=\"text\" class=\"form-control\" id=\"mail\" placeholder=\"abc@gmail.com,...\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"mdp\">Password</label>
                    <div class=\"border-class\">
                        <input type=\"Password\" class=\"form-control\" id=\"mdp\" placeholder=\"\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"adresse\">Adresse</label>
                    <div class=\"border-class\">
                        <input type=\"text\" class=\"form-control\" id=\"adresse\" placeholder=\"100 rue XYZ, 75000 Paris, France\">
                    </div>
                </div>
            </div>
            <div class=\"btn-submit\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">UPDATE</button>
            </div>
        </form>
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/baseUser.html.twig' %}

{% block title %}Update Info User{% endblock %}

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
                <a href =\"#\"  class=\"btn btn-outline-primary text-button\" role = \"button\">
                    CONTACT</a> &nbsp;&nbsp;
            </div>
            <div class=\"col-sm\">
                <a href =\"#\"  class=\"btn btn-outline-primary text-button active\" role = \"button\">
                    MON COMPTE</a>
            </div>
        </div>
    </div>

    <div class=\"col-6 my-auto\">
        <form>
            <div class=\"ma-form\">
                <div class=\"form-row\">
                    <div class=\"form-group col-md-6\">
                        <label for=\"nom\">Nom</label>
                        <div class=\"border-class\">
                            <input type=\"text\" class=\"form-control\" id=\"nom\" placeholder=\"ex: DUPONT, TRAN,...\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label for=\"prenom\">Prenom</label>
                        <div class=\"border-class\">
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" placeholder=\"ex: Jessica, Ha Phuong,...\">
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"mail\">Mail</label>
                    <div class=\"border-class\">
                        <input type=\"text\" class=\"form-control\" id=\"mail\" placeholder=\"abc@gmail.com,...\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"mdp\">Password</label>
                    <div class=\"border-class\">
                        <input type=\"Password\" class=\"form-control\" id=\"mdp\" placeholder=\"\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"adresse\">Adresse</label>
                    <div class=\"border-class\">
                        <input type=\"text\" class=\"form-control\" id=\"adresse\" placeholder=\"100 rue XYZ, 75000 Paris, France\">
                    </div>
                </div>
            </div>
            <div class=\"btn-submit\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">UPDATE</button>
            </div>
        </form>
    </div>

</div>

{% endblock %}", "user/updateInfoClient.html.twig", "C:\\xampp1\\htdocs\\chez-gustoV3\\templates\\user\\updateInfoClient.html.twig");
    }
}
