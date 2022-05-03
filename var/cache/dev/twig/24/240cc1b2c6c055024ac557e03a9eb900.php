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

/* home/index.html.twig */
class __TwigTemplate_a62db8774dcb5f8d3e5f7fba72a61bf9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Véhicules phares</h1>
    <hr>
    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            <div class=\"col\">
                <div class=\"card\">
                    <img class=\"img-fluid\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPicture", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"Image du produit\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 16), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 16) / 100), "html", null, true);
            echo " &euro;)</h4>
                        <span class=\"badge badge-info\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 18), "getName", [], "any", false, false, false, 18), "html", null, true);
            echo "
                        </span>
                        <p class=\"card-text\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        </p>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
$context["product"], "brand", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Détail</a>
                        <a href=\"#\" class=\"btn btn-success btn-sm\">Ajouter</a>

                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    </div>
    <hr>
    <footer>
        Proposé par SEGHAIER Mohamed-Ali
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  112 => 24,  111 => 23,  106 => 21,  100 => 18,  93 => 16,  88 => 14,  84 => 12,  80 => 11,  75 => 8,  68 => 7,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}


{% block body %}
    <h1>Véhicules phares</h1>
    <hr>
    <div class=\"row\">
        {% for product in products %}
            <div class=\"col\">
                <div class=\"card\">
                    <img class=\"img-fluid\" src=\"{{ product.getPicture }}\" alt=\"Image du produit\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{ product.getName }} ({{ product.getPrice / 100 }} &euro;)</h4>
                        <span class=\"badge badge-info\">
                            {{ product.brand.getName }}
                        </span>
                        <p class=\"card-text\">
                            {{ product.getDescription }}
                        </p>
                        <a href=\"{{ path('app_product', {'brand_id':
                            product.brand.id, 'product_id': product.id}) }}\" class=\"btn btn-primary btn-sm\">Détail</a>
                        <a href=\"#\" class=\"btn btn-success btn-sm\">Ajouter</a>

                    </div>
                </div>
            </div>
        {% endfor %}

    </div>
    <hr>
    <footer>
        Proposé par SEGHAIER Mohamed-Ali
    </footer>

{% endblock %}", "home/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/home/index.html.twig");
    }
}
