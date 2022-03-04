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

/* homepage/auth.html.twig */
class __TwigTemplate_89427ffd0140cdaa700e627f880176e290095b2ff5301d631e3046a4a0a959d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/auth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/auth.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/auth.html.twig", 1);
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
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            <label for=\"username\">Username</label>
                            <div class=\"border-class\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"votre pseudo\" >
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"mdp\">Password</label>
                            <div class=\"border-class\">
                                <input type=\"Password\" class=\"form-control\" id=\"mdp\" placeholder=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"btn-submit\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">LOG IN</button>
                    </div>
                    <div class=\"text\">
                        <p class=\"text-center\"><u><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscriptionForm");
        echo "\">Don't have an account? Sign up</u></p></a>
                    </div>
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">WELCOME BACK</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/CHEZ_GUSTO_LOGO.png"), "html", null, true);
        echo "\"/>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"d-flex justify-content-between py-4\">
                <div class=\"componentFooter\">
                    TRAN Ha Phuong<br>
                    DIDI Teya<br>
                    Katia<br>
                    Manelle<br>
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
        return "homepage/auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <form>
                    <div class=\"ma-form\">
                        <div class=\"form-group\">
                            <label for=\"username\">Username</label>
                            <div class=\"border-class\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"votre pseudo\" >
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"mdp\">Password</label>
                            <div class=\"border-class\">
                                <input type=\"Password\" class=\"form-control\" id=\"mdp\" placeholder=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"btn-submit\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-blog\">LOG IN</button>
                    </div>
                    <div class=\"text\">
                        <p class=\"text-center\"><u><a href=\"{{ path('inscriptionForm') }}\">Don't have an account? Sign up</u></p></a>
                    </div>
                </form>
            </div>

            <div class=\"col-4\">
                <div class=\"titre-border mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">WELCOME BACK</p>
                </div>
                <div class=\"col-5\">
                    <img src=\"{{ asset('image/CHEZ_GUSTO_LOGO.png') }}\"/>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"d-flex justify-content-between py-4\">
                <div class=\"componentFooter\">
                    TRAN Ha Phuong<br>
                    DIDI Teya<br>
                    Katia<br>
                    Manelle<br>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "homepage/auth.html.twig", "C:\\xampp1\\htdocs\\chez-gusto\\templates\\homepage\\auth.html.twig");
    }
}
