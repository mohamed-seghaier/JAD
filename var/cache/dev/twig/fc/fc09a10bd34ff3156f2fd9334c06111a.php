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

/* product/index.html.twig */
class __TwigTemplate_f845e442c5254733e2f63a44f23d5e2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Page produit : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a></li>
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "brand", [], "any", false, false, false, 9), "client", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "brand", [], "any", false, false, false, 9), "client", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "brand", [], "any", false, false, false, 9), "client", [], "any", false, false, false, 9), "lastName", [], "any", false, false, false, 9), "html", null, true);
        echo "</a></li>
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "brand", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "brand", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></li>
        <li class=\"breadcrumb-item active\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
    </ol>
    <h1>
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "
        (";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "price", [], "any", false, false, false, 15), "html", null, true);
        echo "€)
    </h1>
    <div class=\"row\">
        <div class=\"col-4\">
            <img class=\"img-fluid\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "Picture", [], "any", false, false, false, 19), "html", null, true);
        echo "\" alt=\"Image du produit ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
            <span class=\"badge bg-secondary\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "brand", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
            <p>
                ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "Description", [], "any", false, false, false, 24), "html", null, true);
        echo "
            </p>
            <p>
                Constructeur : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "brand", [], "any", false, false, false, 27), "client", [], "any", false, false, false, 27), "firstName", [], "any", false, false, false, 27), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "brand", [], "any", false, false, false, 27), "client", [], "any", false, false, false, 27), "lastName", [], "any", false, false, false, 27), "html", null, true);
        echo "
            </p>

            <p>
                ";
        // line 31
        if (((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 31, $this->source); })()) > 5)) {
            // line 32
            echo "                    Quantité : ";
            echo twig_escape_filter($this->env, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "
                    ";
        } elseif ((        // line 33
(isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 33, $this->source); })()) == 0)) {
            // line 34
            echo "                        <b>Produit indisponible !</b>
                    ";
        } else {
            // line 36
            echo "                    <b> ";
            echo twig_escape_filter($this->env, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 36, $this->source); })()), "html", null, true);
            echo " Produits restants !</b>
                ";
        }
        // line 38
        echo "            </p>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"btn btn-success btn-lg\">
                <i class=\"fas fa-shopping-cart\"></i>
                Ajouter au panier</a>
            <a href=\" ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "brand", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" class=\"btn btn-light \">Fiche Marque</a>
            <a href=\" ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seller", ["seller_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "brand", [], "any", false, false, false, 43), "client", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" class=\"btn btn-light \">Fiche Vendeur</a>
            <a href=\" ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["product_id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"btn btn-light \">Editer ce produit</a>

        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 44,  190 => 43,  186 => 42,  180 => 39,  177 => 38,  171 => 36,  167 => 34,  165 => 33,  160 => 32,  158 => 31,  149 => 27,  143 => 24,  138 => 22,  130 => 19,  123 => 15,  119 => 14,  113 => 11,  107 => 10,  99 => 9,  95 => 8,  92 => 7,  82 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Page produit : {{ product.name }}
{% endblock %}

{% block body %}
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_client_index',{'id': product.brand.client.id }) }}\">{{ product.brand.client.firstName }} {{ product.brand.client.lastName }}</a></li>
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_brand',{'brand_id': product.brand.id }) }}\">{{ product.brand.name }}</a></li>
        <li class=\"breadcrumb-item active\">{{ product.name }}</li>
    </ol>
    <h1>
        {{ product.name }}
        ({{ product.price }}€)
    </h1>
    <div class=\"row\">
        <div class=\"col-4\">
            <img class=\"img-fluid\" src=\"{{ product.Picture }}\" alt=\"Image du produit {{ product.name }}\">
        </div>
        <div class=\"col\">
            <span class=\"badge bg-secondary\">{{ product.brand.name }}</span>
            <p>
                {{ product.Description }}
            </p>
            <p>
                Constructeur : {{ product.brand.client.firstName }} {{ product.brand.client.lastName }}
            </p>

            <p>
                {% if stock > 5 %}
                    Quantité : {{ stock }}
                    {% elseif stock == 0 %}
                        <b>Produit indisponible !</b>
                    {% else %}
                    <b> {{ stock }} Produits restants !</b>
                {% endif %}
            </p>
            <a href=\"{{ path('app_panier_add', {'id':product.id})}}\" class=\"btn btn-success btn-lg\">
                <i class=\"fas fa-shopping-cart\"></i>
                Ajouter au panier</a>
            <a href=\" {{ path('app_brand',{'brand_id': product.brand.id })}}\" class=\"btn btn-light \">Fiche Marque</a>
            <a href=\" {{ path('app_seller',{'seller_id': product.brand.client.id })}}\" class=\"btn btn-light \">Fiche Vendeur</a>
            <a href=\" {{ path('app_product_edit',{'product_id': product.id })}}\" class=\"btn btn-light \">Editer ce produit</a>

        </div>
    </div>

{% endblock %}", "product/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/product/index.html.twig");
    }
}
