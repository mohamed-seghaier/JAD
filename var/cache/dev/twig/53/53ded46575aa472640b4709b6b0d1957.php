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

/* brand/index.html.twig */
class __TwigTemplate_4452de4082f70e38f361052f32bfde50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brand/index.html.twig", 1);
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

        // line 4
        echo "    Marque : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
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
        echo "     <ol class=\"breadcrumb\">
         <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a></li>
         <li class=\"breadcrumb-item active\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</li>
     </ol>
     <h1> Marque : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
     <a href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_create", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-light \">Ajouter un produit</a>
     <a href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand_edit", ["brand_id" => twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"btn btn-light \">Éditer cette marque</a>


     <div class=\"row\">
         ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 17, $this->source); })()), "products", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "

             <div class=\"col-3\">
                 <div class=\"card\">
                     <img class=\"img-fluid\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPicture", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"Image du produit\">
                     <div class=\"card-body\">
                         <h4 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 24), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 24) / 100), "html", null, true);
            echo " &euro;)</h4>
                         <span class=\"badge badge-info\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 26), "getName", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        </span>
                         <p class=\"card-text\">
                             ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 29), "html", null, true);
            echo "
                         </p>
                         <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
$context["product"], "brand", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 32)]), "html", null, true);
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
        // line 42
        echo "         <div class=\"col-3\">
         </div>
     </div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "brand/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  153 => 32,  152 => 31,  147 => 29,  141 => 26,  134 => 24,  129 => 22,  123 => 18,  119 => 17,  112 => 13,  108 => 12,  104 => 11,  99 => 9,  95 => 8,  92 => 7,  82 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title%}
    Marque : {{ brand.name }}
{% endblock %}
 {% block body %}
     <ol class=\"breadcrumb\">
         <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
         <li class=\"breadcrumb-item active\">{{ brand.name }}</li>
     </ol>
     <h1> Marque : {{ brand.name }}</h1>
     <a href=\" {{ path('app_product_create', {'id':brand.id})}}\" class=\"btn btn-light \">Ajouter un produit</a>
     <a href=\" {{ path('app_brand_edit', {'brand_id':brand.id})}}\" class=\"btn btn-light \">Éditer cette marque</a>


     <div class=\"row\">
         {% for product in brand.products %}


             <div class=\"col-3\">
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
         <div class=\"col-3\">
         </div>
     </div>
 {% endblock %}
", "brand/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/brand/index.html.twig");
    }
}
