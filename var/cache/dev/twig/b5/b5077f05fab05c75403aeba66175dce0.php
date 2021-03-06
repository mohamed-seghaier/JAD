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
class __TwigTemplate_2d91352ed0b206f729977958000602b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/seller.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/seller.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/seller.html.twig", 1);
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
        echo "    Constructeur : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "lastName", [], "any", false, false, false, 4), "html", null, true);
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
     ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12))) {
            // line 13
            echo "     <div class=\"col-3\">
         <a href=\" ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand_create", ["id" => twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"btn btn-light \">Ajouter une marque</a>
     </div>
     ";
        }
        // line 18
        echo "     <h2>Liste des marques :</h2>
     <div class=\"row\">
         ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "brands", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 21
            echo "

             <div class=\"col-3\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <h4 class=\"card-title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "getName", [], "any", false, false, false, 26), "html", null, true);
            echo " </h4>
                         <span class=\"badge badge-info\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "getName", [], "any", false, false, false, 28), "html", null, true);
            echo "
                        </span>
                         <p class=\"card-text\">
                             ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "getDescription", [], "any", false, false, false, 31), "html", null, true);
            echo "
                         </p>
                         <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source,             // line 34
$context["brand"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">D??tail</a>
                     </div>
                 </div>
             </div>


         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "     </div>

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  171 => 41,  158 => 34,  157 => 33,  152 => 31,  146 => 28,  141 => 26,  134 => 21,  130 => 20,  126 => 18,  120 => 15,  119 => 14,  116 => 13,  114 => 12,  108 => 11,  101 => 9,  97 => 8,  94 => 7,  84 => 6,  69 => 4,  59 => 3,  36 => 1,);
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
     {% if app.user.id == user.id %}
     <div class=\"col-3\">
         <a href=\" {{ path('app_brand_create', {'id':
             user.id})}}\" class=\"btn btn-light \">Ajouter une marque</a>
     </div>
     {% endif %}
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
                             brand.id}) }}\" class=\"btn btn-primary btn-sm\">D??tail</a>
                     </div>
                 </div>
             </div>


         {% endfor %}
     </div>

 {% endblock %}
", "user/seller.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/github/JAD/templates/user/seller.html.twig");
    }
}
