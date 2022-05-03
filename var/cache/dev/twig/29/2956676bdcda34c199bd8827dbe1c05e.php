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

/* user/seller.html.twig */
class __TwigTemplate_0fd4aaafe95f3e76d77bb01157acfa54 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/seller.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/seller.html.twig", 1);
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
        echo "    Constructeur : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "lastName", [], "any", false, false, false, 4), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "firstName", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9), "html", null, true);
        echo "</li>
     </ol>
     <h1> Constructeur : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "lastName", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>

     <h2>Liste des marques :</h2>
     <div class=\"row\">
         ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "brands", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 16
            echo "

             <div class=\"col-3\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <h4 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "getName", [], "any", false, false, false, 21), "html", null, true);
            echo " </h4>
                         <span class=\"badge badge-info\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "getName", [], "any", false, false, false, 23), "html", null, true);
            echo "
                        </span>
                         <p class=\"card-text\">
                             ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "getDescription", [], "any", false, false, false, 26), "html", null, true);
            echo "
                         </p>
                         <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source,             // line 29
$context["brand"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Détail</a>
                     </div>
                 </div>
             </div>
             ";
            // line 33
            if (((isset($context["user_type"]) || array_key_exists("user_type", $context) ? $context["user_type"] : (function () { throw new RuntimeError('Variable "user_type" does not exist.', 33, $this->source); })()) == "Vendeur")) {
                // line 34
                echo "                 <div class=\"row\">
                     <div class=\"col-3\">
                         <a href=\" ";
                // line 36
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_create");
                echo "\" class=\"btn btn-grey \">Ajouter un produit</a>
                     </div>
                     <div class=\"col-3\">
                         <a href=\" ";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand_create");
                echo "\" class=\"btn btn-grey \">Ajouter une marque</a>
                     </div>
                 </div>
             ";
            }
            // line 43
            echo "

         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "     </div>

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/seller.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 46,  156 => 43,  149 => 39,  143 => 36,  139 => 34,  137 => 33,  130 => 29,  129 => 28,  124 => 26,  118 => 23,  113 => 21,  106 => 16,  102 => 15,  93 => 11,  86 => 9,  82 => 8,  79 => 7,  72 => 6,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title%}
    Constructeur : {{ user.firstName }} {{ user.lastName }}
{% endblock %}
 {% block body %}
     <ol class=\"breadcrumb\">
         <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
         <li class=\"breadcrumb-item active\">{{ user.firstName }} {{ user.lastName }}</li>
     </ol>
     <h1> Constructeur : {{ user.firstName }} {{ user.lastName }}</h1>

     <h2>Liste des marques :</h2>
     <div class=\"row\">
         {% for brand in user.brands %}


             <div class=\"col-3\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <h4 class=\"card-title\">{{ brand.getName }} </h4>
                         <span class=\"badge badge-info\">
                            {{ brand.getName }}
                        </span>
                         <p class=\"card-text\">
                             {{ brand.getDescription }}
                         </p>
                         <a href=\"{{ path('app_brand', {'brand_id':
                             brand.id}) }}\" class=\"btn btn-primary btn-sm\">Détail</a>
                     </div>
                 </div>
             </div>
             {% if user_type  == \"Vendeur\" %}
                 <div class=\"row\">
                     <div class=\"col-3\">
                         <a href=\" {{ path('app_product_create')}}\" class=\"btn btn-grey \">Ajouter un produit</a>
                     </div>
                     <div class=\"col-3\">
                         <a href=\" {{ path('app_brand_create')}}\" class=\"btn btn-grey \">Ajouter une marque</a>
                     </div>
                 </div>
             {% endif %}


         {% endfor %}
     </div>

 {% endblock %}
", "user/seller.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/JAD/templates/user/seller.html.twig");
    }
}
