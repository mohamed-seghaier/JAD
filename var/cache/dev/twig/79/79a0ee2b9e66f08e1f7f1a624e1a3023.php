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

/* product/_product_card.html.twig */
class __TwigTemplate_c34cb0dd53e212eed02b9cacb18cdd9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_product_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_product_card.html.twig"));

        // line 1
        echo "<div class=\"col-3\">
    <div class=\"card\">
        <img class=\"img-fluid\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "getPicture", [], "any", false, false, false, 3), "html", null, true);
        echo "\" alt=\"Image du produit\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "getName", [], "any", false, false, false, 5), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "getPrice", [], "any", false, false, false, 5) / 100), "html", null, true);
        echo " &euro;)</h4>
            <span class=\"badge badge-info\">
                            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "brand", [], "any", false, false, false, 7), "getName", [], "any", false, false, false, 7), "html", null, true);
        echo "
                        </span>
            <p class=\"card-text\">
                ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "getDescription", [], "any", false, false, false, 10), "html", null, true);
        echo "
            </p>
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "brand", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "product_id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">Détail</a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">Ajouter</a>

        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/_product_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  71 => 13,  70 => 12,  65 => 10,  59 => 7,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-3\">
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
            <a href=\"{{ path('app_panier_add', {'id' : product.id}) }}\" class=\"btn btn-success btn-sm\">Ajouter</a>

        </div>
    </div>
</div>", "product/_product_card.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/product/_product_card.html.twig");
    }
}
