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
class __TwigTemplate_cc52717fe1c807cfa97327ccb4f06464 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "brand/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "brand/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Marque : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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

     <div class=\"row\">
         ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 14, $this->source); })()), "products", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "

             <div class=\"col-3\">
                 <div class=\"card\">
                     <img class=\"img-fluid\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPicture", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"Image du produit\">
                     <div class=\"card-body\">
                         <h4 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 21), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 21) / 100), "html", null, true);
            echo " &euro;)</h4>
                         <span class=\"badge badge-info\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 23), "getName", [], "any", false, false, false, 23), "html", null, true);
            echo "
                        </span>
                         <p class=\"card-text\">
                             ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 26), "html", null, true);
            echo "
                         </p>
                         <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["brand_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
$context["product"], "brand", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29)]), "html", null, true);
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
        // line 39
        echo "         <div class=\"col-3\">
             <a href=\" ";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_create");
        echo "\" class=\"btn btn-grey \">Ajouter un produit</a>
         </div>
     </div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  148 => 40,  145 => 39,  129 => 29,  128 => 28,  123 => 26,  117 => 23,  110 => 21,  105 => 19,  99 => 15,  95 => 14,  89 => 11,  84 => 9,  80 => 8,  77 => 7,  70 => 6,  60 => 4,  53 => 3,  36 => 1,);
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
             <a href=\" {{ path('app_product_create')}}\" class=\"btn btn-grey \">Ajouter un produit</a>
         </div>
     </div>
 {% endblock %}
", "brand/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/brand/index.html.twig");
    }
}
