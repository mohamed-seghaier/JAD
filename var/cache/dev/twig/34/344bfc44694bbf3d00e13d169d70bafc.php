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

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formview"]) || array_key_exists("formview", $context) ? $context["formview"] : (function () { throw new RuntimeError('Variable "formview" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 8
        if (twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 8, $this->source); })()))) {
            // line 9
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
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 20
                echo "            <tr>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 22), "price", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\"><i class=\"material-icons\" title=\"Retirer\">remove</i> </a>
                    ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "qty", [], "any", false, false, false, 25), "html", null, true);
                echo "
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "?returnToPanier=true\" class=\"btn btn-sm btn-primary\"><i class=\"material-icons\" title=\"Ajouter\">add</i></a>

                </td>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "total", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_del", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\"><i class=\"material-icons\" title=\"Supprimer\">delete</i></a>
                </td>
            </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total : </td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "</td>
        </tr>
        </tfoot>
    </table>
        <h2>Confirmez votre commande</h2>
        ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formview"]) || array_key_exists("formview", $context) ? $context["formview"] : (function () { throw new RuntimeError('Variable "formview" does not exist.', 45, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_confirm")]);
            echo "
        ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formview"]) || array_key_exists("formview", $context) ? $context["formview"] : (function () { throw new RuntimeError('Variable "formview" does not exist.', 46, $this->source); })()), 'widget');
            echo "
            <button type=\"submit\" class=\"btn btn-success\">Confirmer la commande</button>
        ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formview"]) || array_key_exists("formview", $context) ? $context["formview"] : (function () { throw new RuntimeError('Variable "formview" does not exist.', 48, $this->source); })()), 'form_end');
            echo "
    ";
        } else {
            // line 50
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
        return array (  182 => 50,  177 => 48,  172 => 46,  168 => 45,  160 => 40,  154 => 36,  143 => 31,  138 => 29,  132 => 26,  128 => 25,  124 => 24,  119 => 22,  115 => 21,  112 => 20,  108 => 19,  96 => 9,  94 => 8,  91 => 7,  81 => 6,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme formview 'bootstrap_4_layout.html.twig' %}

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
        <h2>Confirmez votre commande</h2>
        {{ form_start(formview, {'action': path('app_panier_confirm')}) }}
        {{ form_widget(formview) }}
            <button type=\"submit\" class=\"btn btn-success\">Confirmer la commande</button>
        {{ form_end(formview) }}
    {% else %}
    <h2>Votre panier est vide ! :( </h2>
    {% endif %}
{% endblock %}
", "panier/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/github/JAD/templates/panier/index.html.twig");
    }
}
