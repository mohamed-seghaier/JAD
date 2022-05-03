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

/* shared/_navbar.html.twig */
class __TwigTemplate_4ec74377a4ad2ec5571492a787b2c46a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jad.png"), "html", null, true);
        echo "\"width=\"50\" height=\"50\" alt=\"JAD Logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marques</a>
                    <div class=\"dropdown-menu\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 13, $this->source); })()), "findAll", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 14
            echo "                            <a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Inscription</a></li>
                <li class=\"nav-item\"><a href=\"#\" class=\"btn btn-success\">Connection</a></li>
                <li class=\"nav-item\"><a href=\"#\" class=\"btn btn-danger\">Deconnection</a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shared/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  63 => 14,  59 => 13,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\"><img src=\"{{ asset('jad.png')}}\"width=\"50\" height=\"50\" alt=\"JAD Logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marques</a>
                    <div class=\"dropdown-menu\">
                        {% for brand in brands.findAll %}
                            <a class=\"nav-link\" href=\"{{ path('app_brand',{'brand_id': brand.id })}}\">{{brand.name}}</a>
                        {% endfor %}
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Inscription</a></li>
                <li class=\"nav-item\"><a href=\"#\" class=\"btn btn-success\">Connection</a></li>
                <li class=\"nav-item\"><a href=\"#\" class=\"btn btn-danger\">Deconnection</a></li>
            </ul>
        </div>
    </div>
</nav>", "shared/_navbar.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/shared/_navbar.html.twig");
    }
}
