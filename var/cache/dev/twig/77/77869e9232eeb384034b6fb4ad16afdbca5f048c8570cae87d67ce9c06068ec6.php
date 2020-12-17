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

/* blog/index.html.twig */
class __TwigTemplate_1bbf9b2233fd56186ba1b7856c0791b85a3b9075d375d34295b31631ed33e56a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/wolfRender.png"), "html", null, true);
        echo "\" style=\"position: fixed; right: 0; width: 30%; min-height: 90%; filter : brightness(65%);\" alt=\"\">
<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/foxRender.png"), "html", null, true);
        echo "\" style=\"position: fixed; left: 0; width: 30%; min-height: 90%; filter : brightness(65%);\" alt=\"\">
<h2>Liste des vidéos</h2>
<section class=\"articles\" style=\"margin-top: 15px;\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 10
            echo "        <article style=\"margin-top: 15px;\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\"> <h5> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "nom", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5> </a>
            <div class=\"content\" style=\"background-color: black; width:600px; margin-left: auto; margin-right: auto;\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["video"], "image", [], "any", false, false, false, 14)), "html", null, true);
            echo "\" style=\"width:600px; height:300px;\" alt=\"\">
                </a>
            </div>
            <p style=\"margin-top: 10px;\"> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo " </p>
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Regarder</a>
        </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 21,  107 => 18,  103 => 17,  97 => 14,  93 => 13,  86 => 11,  83 => 10,  79 => 9,  73 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<img src=\"{{ asset(\"asset/wolfRender.png\")}}\" style=\"position: fixed; right: 0; width: 30%; min-height: 90%; filter : brightness(65%);\" alt=\"\">
<img src=\"{{ asset(\"asset/foxRender.png\")}}\" style=\"position: fixed; left: 0; width: 30%; min-height: 90%; filter : brightness(65%);\" alt=\"\">
<h2>Liste des vidéos</h2>
<section class=\"articles\" style=\"margin-top: 15px;\">
{% for video in videos %}
        <article style=\"margin-top: 15px;\">
            <a href=\"{{ path('blog_show', {'id': video.id}) }}\"> <h5> {{ video.nom }}</h5> </a>
            <div class=\"content\" style=\"background-color: black; width:600px; margin-left: auto; margin-right: auto;\">
                <a href=\"{{ path('blog_show', {'id': video.id}) }}\">
                    <img src=\"{{ asset(video.image) }}\" style=\"width:600px; height:300px;\" alt=\"\">
                </a>
            </div>
            <p style=\"margin-top: 10px;\"> {{ video.description }} </p>
            <a href=\"{{ path('blog_show', {'id': video.id}) }}\" class=\"btn btn-primary\">Regarder</a>
        </article>
{% endfor %}
</section>


{% endblock %}
", "blog/index.html.twig", "C:\\Users\\Enton\\Documents\\Projet\\Blog\\templates\\blog\\index.html.twig");
    }
}
