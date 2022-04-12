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
class __TwigTemplate_b012eab909731f35ade6d2a822f5d383 extends Template
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
        echo "    <h1>Nos produits phares</h1>
    <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "            <div class=\"col\">
                <div class=\"card\">
                    <img class=\"img-fluid\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPicture", [], "any", false, false, false, 13), "html", null, true);
            echo "\" alt=\"Image du produit\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 15), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 15) / 100), "html", null, true);
            echo " &euro;)</h4>
                        <span class=\"badge badge-info\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 17), "getName", [], "any", false, false, false, 17), "html", null, true);
            echo "
                        </span>
                        <p class=\"card-text\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 20), "html", null, true);
            echo "
                        </p>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
$context["product"], "brand", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
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
        // line 30
        echo "
    </div>


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
        return array (  124 => 30,  111 => 23,  110 => 22,  105 => 20,  99 => 17,  92 => 15,  87 => 13,  83 => 11,  79 => 10,  75 => 8,  68 => 7,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}


{% block body %}
    <h1>Nos produits phares</h1>
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


{% endblock %}", "home/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/home/index.html.twig");
    }
}
