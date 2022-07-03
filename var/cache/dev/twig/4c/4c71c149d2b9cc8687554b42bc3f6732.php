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
class __TwigTemplate_68c47129d2fed82c605089e3d11c4c7f extends Template
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
         <li class=\"breadcrumb-item active\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seller", ["seller_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 9, $this->source); })()), "client", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 9, $this->source); })()), "client", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 9, $this->source); })()), "client", [], "any", false, false, false, 9), "lastName", [], "any", false, false, false, 9), "html", null, true);
        echo "</a></li>
         <li class=\"breadcrumb-item active\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</li>
     </ol>
     <h1> Marque : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1><br>
     ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 13, $this->source); })()), "client", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13))) {
            // line 14
            echo "         <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_create", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-light \">Ajouter un produit</a>
         <a href=\" ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand_edit", ["brand_id" => twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"btn btn-light \">Éditer cette marque</a>
    ";
        }
        // line 17
        echo "     <hr>

     <div class=\"row\">
         ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 20, $this->source); })()), "products", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "

             ";
            // line 23
            $this->loadTemplate("product/_product_card.html.twig", "brand/index.html.twig", 23)->display($context);
            // line 24
            echo "


         ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        return array (  173 => 28,  156 => 24,  154 => 23,  150 => 21,  133 => 20,  128 => 17,  123 => 15,  118 => 14,  116 => 13,  112 => 12,  107 => 10,  99 => 9,  95 => 8,  92 => 7,  82 => 6,  69 => 4,  59 => 3,  36 => 1,);
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
         <li class=\"breadcrumb-item active\"><a href=\"{{ path('app_seller', {'seller_id':brand.client.id})}}\">{{ brand.client.firstName }} {{ brand.client.lastName }}</a></li>
         <li class=\"breadcrumb-item active\">{{ brand.name }}</li>
     </ol>
     <h1> Marque : {{ brand.name }}</h1><br>
     {% if app.user.id == brand.client.id %}
         <a href=\" {{ path('app_product_create', {'id':brand.id})}}\" class=\"btn btn-light \">Ajouter un produit</a>
         <a href=\" {{ path('app_brand_edit', {'brand_id':brand.id})}}\" class=\"btn btn-light \">Éditer cette marque</a>
    {% endif %}
     <hr>

     <div class=\"row\">
         {% for product in brand.products %}


             {% include \"product/_product_card.html.twig\" %}



         {% endfor %}
         <div class=\"col-3\">
         </div>
     </div>
 {% endblock %}
", "brand/index.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/github/JAD/templates/brand/index.html.twig");
    }
}
