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

/* homepage/index.html.twig */
class __TwigTemplate_b719f757354c7a1f145491c95e6ca74af47acfba81299985f8cfaa22426f9755 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
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

        echo "Page d'accueil";
        
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
        <div class=\"row\">
            <div class=\"col-7 my-auto\">
                <div class=\"borderTitle mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">'anyone can cook'</p>
                </div>
                <p class=\"description\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum
                    impedit, aut laboriosam sunt eum expedita neque dicta dolore, cupiditate velit consectetur error rem
                    nostrum provident accusantium officiis at doloribus totam esse fugiat! Impedit, dolorum et nemo
                    neque fuga reprehenderit saepe error eveniet eum quasi aliquam, non nisi rem, qui nobis ipsam
                    tenetur repellat aspernatur! Nulla nobis illum tempore reprehenderit? Nam, cupiditate. Pariatur?</p>
            </div>
            <div class=\"col-5\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/pngwing.com.png"), "html", null, true);
        echo "\" width=\"100%\" height=\"auto\"/>
            </div>
        </div>
    </div>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"d-flex justify-content-between py-4\">
                <div class=\"componentFooter\">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ipsum eaque asperiores ea commodi non
                    libero veniam consequatur reprehenderit odit ab voluptatibus facilis saepe laboriosam voluptates
                    quae voluptas, suscipit quam.
                </div>
                <div class=\"componentFooter\">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque quos distinctio laudantium
                    asperiores a, ipsam aperiam provident doloribus veniam sit nemo dignissimos hic, vel eos, doloremque
                    quibusdam optio aliquam.
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
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page d'accueil{% endblock %}

{% block body %}

    <!-- Body-->
    <div class=\"container-fluid content\">
        <div class=\"row\">
            <div class=\"col-7 my-auto\">
                <div class=\"borderTitle mb-4 ml-0\">
                    <p class=\"text-center h3 my-2\">'anyone can cook'</p>
                </div>
                <p class=\"description\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum
                    impedit, aut laboriosam sunt eum expedita neque dicta dolore, cupiditate velit consectetur error rem
                    nostrum provident accusantium officiis at doloribus totam esse fugiat! Impedit, dolorum et nemo
                    neque fuga reprehenderit saepe error eveniet eum quasi aliquam, non nisi rem, qui nobis ipsam
                    tenetur repellat aspernatur! Nulla nobis illum tempore reprehenderit? Nam, cupiditate. Pariatur?</p>
            </div>
            <div class=\"col-5\">
                <img src=\"{{ asset('image/pngwing.com.png') }}\" width=\"100%\" height=\"auto\"/>
            </div>
        </div>
    </div>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"d-flex justify-content-between py-4\">
                <div class=\"componentFooter\">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ipsum eaque asperiores ea commodi non
                    libero veniam consequatur reprehenderit odit ab voluptatibus facilis saepe laboriosam voluptates
                    quae voluptas, suscipit quam.
                </div>
                <div class=\"componentFooter\">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque quos distinctio laudantium
                    asperiores a, ipsam aperiam provident doloribus veniam sit nemo dignissimos hic, vel eos, doloremque
                    quibusdam optio aliquam.
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "homepage/index.html.twig", "C:\\xampp1\\htdocs\\chez-gustoV3\\templates\\homepage\\index.html.twig");
    }
}
