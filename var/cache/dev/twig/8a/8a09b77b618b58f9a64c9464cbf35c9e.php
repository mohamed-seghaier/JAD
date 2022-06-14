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

/* shared/_navbar.html.twig */
class __TwigTemplate_20935b7dd23abfee42f7bf8fa52a2c1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jad.png"), "html", null, true);
        echo "\"width=\"50\" height=\"50\" alt=\"JAD Logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marques</a>
                    <div class=\"dropdown-menu\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 13, $this->source); })()), "findAll", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 14
            echo "                            <a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_brand", ["brand_id" => twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </div>
                </li>
            </ul>
            ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchases");
            echo "\" class=\"nav-link\">Mes commandes</a>
                </li>
                <li class=\"nav-item\"><span class=\"nav-link\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "firstName", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo " &nbsp;</span></li>
                </ul>
            ";
        }
        // line 27
        echo "            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\" title=\"Panier\"><i class=\"material-icons\">shopping_cart</i></a>
                </li>
                ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger\">Deconnexion</a>
                    </li>
                ";
        } else {
            // line 36
            echo "                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Inscription</a></li>
                    <li class=\"nav-item\"><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-success\">Connexion</a></li>
                ";
        }
        // line 39
        echo "            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shared/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  124 => 37,  121 => 36,  115 => 33,  112 => 32,  110 => 31,  105 => 29,  101 => 27,  93 => 24,  88 => 22,  84 => 20,  82 => 19,  77 => 16,  66 => 14,  62 => 13,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\"><img src=\"{{ asset('jad.png')}}\"width=\"50\" height=\"50\" alt=\"JAD Logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Marques</a>
                    <div class=\"dropdown-menu\">
                        {% for brand in brands.findAll %}
                            <a class=\"nav-link\" href=\"{{ path('app_brand',{'brand_id': brand.id })}}\">{{brand.name}}</a>
                        {% endfor %}
                    </div>
                </li>
            </ul>
            {% if app.user %}
                <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_purchases') }}\" class=\"nav-link\">Mes commandes</a>
                </li>
                <li class=\"nav-item\"><span class=\"nav-link\">{{ app.user.firstName}} {{app.user.lastname}} &nbsp;</span></li>
                </ul>
            {% endif %}
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_panier') }}\" title=\"Panier\"><i class=\"material-icons\">shopping_cart</i></a>
                </li>
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_logout')}}\" class=\"btn btn-danger\">Deconnexion</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Inscription</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_login')}}\" class=\"btn btn-success\">Connexion</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>", "shared/_navbar.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/github/JAD/templates/shared/_navbar.html.twig");
    }
}
