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

/* panier/index.html.twig */
class __TwigTemplate_a21ee79784873e29164126777ff79855 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if (twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "    <table class=\"table\">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 19
                echo "            <tr>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 21), "price", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\"><i class=\"material-icons\" title=\"Retirer\">remove</i> </a>
                    ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "qty", [], "any", false, false, false, 24), "html", null, true);
                echo "
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "?returnToPanier=true\" class=\"btn btn-sm btn-primary\"><i class=\"material-icons\" title=\"Ajouter\">add</i></a>

                </td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "total", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_del", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\"><i class=\"material-icons\" title=\"Supprimer\">delete</i></a>
                </td>
            </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total : </td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "</td>
        </tr>
        </tfoot>
    </table>
    ";
        } else {
            // line 44
            echo "    <h2>Votre panier est vide ! :( </h2>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 44,  157 => 39,  151 => 35,  140 => 30,  135 => 28,  129 => 25,  125 => 24,  121 => 23,  116 => 21,  112 => 20,  109 => 19,  105 => 18,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

    {% if produits|length %}
    <table class=\"table\">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td>{{ produit.product.name }}</td>
                <td>{{ produit.product.price }}</td>
                <td>
                    <a href=\"{{ path('app_panier_decrement', {'id': produit.product.id}) }}\" class=\"btn btn-sm btn-primary\"><i class=\"material-icons\" title=\"Retirer\">remove</i> </a>
                    {{ produit.qty }}
                    <a href=\"{{ path('app_panier_add', {'id': produit.product.id}) }}?returnToPanier=true\" class=\"btn btn-sm btn-primary\"><i class=\"material-icons\" title=\"Ajouter\">add</i></a>

                </td>
                <td>{{ produit.total }}</td>
                <td>
                    <a href=\"{{ path('app_panier_del', {'id':produit.product.id}) }}\" class=\"btn btn-sm btn-danger\"><i class=\"material-icons\" title=\"Supprimer\">delete</i></a>
                </td>
            </tr>

        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total : </td>
            <td>{{ total }}</td>
        </tr>
        </tfoot>
    </table>
    {% else %}
    <h2>Votre panier est vide ! :( </h2>
    {% endif %}
{% endblock %}
", "panier/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/panier/index.html.twig");
    }
}
