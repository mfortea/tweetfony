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

/* verTweet.html.twig */
class __TwigTemplate_7a5876c4095d856be94b552736babe663f57060115e30b7cfa97bc718f6af17e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verTweet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verTweet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "verTweet.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 2, $this->source); })()), "text", [], "any", false, false, false, 2), "html", null, true);
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
        echo "    <div class=\"singleTweet\">
        <div class=\"cabecera\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verTweet", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\">
                <img class=\"avatarBig\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "userName", [], "any", false, false, false, 7)) . "-big.jpg")), "html", null, true);
        echo "\" />
                <strong>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</strong>
                <span>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "userName", [], "any", false, false, false, 9), "html", null, true);
        echo "</span>
            </a>
            <small class=\"time\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), "d/m/Y h:m:s"), "html", null, true);
        echo "</small>
        </div>
        <div class=\"mensaje\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
        <div class=\"likes\">";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 14, $this->source); })()), "likes", [], "any", false, false, false, 14)), "html", null, true);
        echo " 👍</div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "verTweet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 14,  117 => 13,  112 => 11,  107 => 9,  103 => 8,  99 => 7,  95 => 6,  91 => 4,  81 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block titulo %}{{tweet.user.name}}:{{tweet.text}}{{ parent() }}{% endblock %}
{% block principal %}
    <div class=\"singleTweet\">
        <div class=\"cabecera\">
            <a href=\"{{ path('verTweet', {'id': tweet.id}) }}\">
                <img class=\"avatarBig\" src=\"{{ asset('images/avatars/' ~ tweet.user.userName ~ '-big.jpg') }}\" />
                <strong>{{tweet.user.name}}</strong>
                <span>{{tweet.user.userName}}</span>
            </a>
            <small class=\"time\">{{ tweet.date|date(\"d/m/Y h:m:s\") }}</small>
        </div>
        <div class=\"mensaje\">{{tweet.text}}</div>
        <div class=\"likes\">{{tweet.likes|length}} 👍</div>
    </div>

{% endblock %}", "verTweet.html.twig", "/Users/mateofd/proyectos/tweetfony/templates/verTweet.html.twig");
    }
}
