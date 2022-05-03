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

/* brand/_menu.html.twig */
class __TwigTemplate_af7d2e79e88012c0db0bfb43a0f5e15c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/_menu.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marques</a>
    <div class=\"dropdown-menu\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 5
            echo "            <a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
</li>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "brand/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marques</a>
    <div class=\"dropdown-menu\">
        {% for brand in brands %}
            <a class=\"nav-link\" href=\"{{ path('app_brand',{'brand_id': brand.id })}}\">{{brand.name}}</a>
        {% endfor %}
    </div>
</li>

", "brand/_menu.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/brand/_menu.html.twig");
    }
}
