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

/* demo.html.twig */
class __TwigTemplate_bca189033e1bb591f7ff2f7ed6c1470982d545621aeafc1521e095cf59b05844 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'principal' => [$this, 'block_principal'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Demo";
        $this->displayParentBlock("titulo", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "principal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "principal"));

        // line 4
        echo "    <ul class=\"tweetline\">
        <!-- tweet 1 -->
        <li class=\"tweet\">
            <div class=\"contenido\">
                <div class=\"cabecera\">
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demo_tweet");
        echo "\">
                        <img class=\"avatarSmall\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/BillGates-small.jpg"), "html", null, true);
        echo "\" />
                        <strong>Bill Gates</strong>
                        <span>@BillGates</span>
                    </a>
                    <small class=\"time\">18/11/2019</small>
                </div>
                <div class=\"mensaje\">The future is bright for the world’s poorest farmers because of innovative companies like myAgroFarms.</div>
                <div class=\"likes\">4 👍</div>
            </div>
        </li>
        <!-- tweet 2 -->
        <li class=\"tweet\">
            <div class=\"contenido\">
                <div class=\"cabecera\">
                    <a href=\"#\">
                        <img class=\"avatarSmall\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/BillGates-small.jpg"), "html", null, true);
        echo "\" />
                        <strong>Bill Gates</strong>
                        <span>@BillGates</span>
                    </a>
                    <small class=\"time\">15/11/2019</small>
                </div>
                <div class=\"mensaje\">Farm yields in many parts of Africa are just a fifth of those in the United States. Innovations in agriculture will make it possible for poor farmers to increase their yields.</div>
            </div>
        </li>
        <!-- tweet 3 -->
        <li class=\"tweet\">
            <div class=\"contenido\">
                <div class=\"cabecera\">
                    <a href=\"#\">
                        <img class=\"avatarSmall\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/BillGates-small.jpg"), "html", null, true);
        echo "\" />
                        <strong>Bill Gates</strong>
                        <span>@BillGates</span>
                    </a>
                    <small class=\"time\">14/11/2019</small>
                </div>
                <div class=\"mensaje\">Whenever I travel for the foundation, the farmers I meet talk about one thing that holds them back: they can’t save their money. @myAgroFarms is one of the companies working on creative solutions to this problem.</div>
                <div class=\"likes\">2 👍</div>
            </div>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  118 => 25,  100 => 10,  96 => 9,  89 => 4,  79 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block titulo %}Demo{{ parent() }}{% endblock %}
{% block principal %}
    <ul class=\"tweetline\">
        <!-- tweet 1 -->
        <li class=\"tweet\">
            <div class=\"contenido\">
                <div class=\"cabecera\">
                    <a href=\"{{ path('demo_tweet') }}\">
                        <img class=\"avatarSmall\" src=\"{{ asset('images/avatars/BillGates-small.jpg') }}\" />
                        <strong>Bill Gates</strong>
                        <span>@BillGates</span>
                    </a>
                    <small class=\"time\">18/11/2019</small>
                </div>
                <div class=\"mensaje\">The future is bright for the world’s poorest farmers because of innovative companies like myAgroFarms.</div>
                <div class=\"likes\">4 👍</div>
            </div>
        </li>
        <!-- tweet 2 -->
        <li class=\"tweet\">
            <div class=\"contenido\">
                <div class=\"cabecera\">
                    <a href=\"#\">
                        <img class=\"avatarSmall\" src=\"{{ asset('images/avatars/BillGates-small.jpg') }}\" />
                        <strong>Bill Gates</strong>
                        <span>@BillGates</span>
                    </a>
                    <small class=\"time\">15/11/2019</small>
                </div>
                <div class=\"mensaje\">Farm yields in many parts of Africa are just a fifth of those in the United States. Innovations in agriculture will make it possible for poor farmers to increase their yields.</div>
            </div>
        </li>
        <!-- tweet 3 -->
        <li class=\"tweet\">
            <div class=\"contenido\">
                <div class=\"cabecera\">
                    <a href=\"#\">
                        <img class=\"avatarSmall\" src=\"{{ asset('images/avatars/BillGates-small.jpg') }}\" />
                        <strong>Bill Gates</strong>
                        <span>@BillGates</span>
                    </a>
                    <small class=\"time\">14/11/2019</small>
                </div>
                <div class=\"mensaje\">Whenever I travel for the foundation, the farmers I meet talk about one thing that holds them back: they can’t save their money. @myAgroFarms is one of the companies working on creative solutions to this problem.</div>
                <div class=\"likes\">2 👍</div>
            </div>
        </li>
    </ul>
{% endblock %}", "demo.html.twig", "/Users/mateofd/proyectos/tweetfony/templates/demo.html.twig");
    }
}
