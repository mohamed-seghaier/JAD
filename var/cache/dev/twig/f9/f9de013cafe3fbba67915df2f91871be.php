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

/* /purchase/payment.html.twig */
class __TwigTemplate_1e0ba6bd91dd8584a23f2b8c4d117683 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/purchase/payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/purchase/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/purchase/payment.html.twig", 1);
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
        echo "    Valider votre paiement
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Validation de votre paiement</h1>
    <!-- Display a payment form -->
    <form id=\"payment-form\">
        <div id=\"payment-element\">
            <!--Stripe.js injects the Payment Element-->
        </div>
        <button id=\"submit\" class=\"btn btn-primary\">
            <span id=\"button-text\">Payer</span>
        </button>
        <div id=\"payment-message\" class=\"hidden\"></div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        const clientSecret = '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["clientSecret"]) || array_key_exists("clientSecret", $context) ? $context["clientSecret"] : (function () { throw new RuntimeError('Variable "clientSecret" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "';
        // This is your test publishable API key.
        const stripe = Stripe(\"pk_test_51LHy5HKNEiTGJQKoXmlCCeQmW30pPeUDFMkREFUaSdTl11xNKxU6lVa7wIuEZwOeDUqXgUMJx1rHOZWmntBfCCTl00zONzmYU3\");

        function initialize() {
            document
                .querySelector(\"#payment-form\")
                .addEventListener(\"submit\", handleSubmit);

            // Fetches a payment intent and captures the client secret
            elements = stripe.elements({ clientSecret });
            const paymentElement = elements.create(\"payment\");
            paymentElement.mount(\"#payment-element\");
        }

        async function handleSubmit(e) {
            e.preventDefault();
            const { error } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    // Make sure to change this to your payment completion page
                    return_url: '";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_payment_success", ["id" => (isset($context["purchaseId"]) || array_key_exists("purchaseId", $context) ? $context["purchaseId"] : (function () { throw new RuntimeError('Variable "purchaseId" does not exist.', 45, $this->source); })())]), "html", null, true);
        echo "',                },
            });


        }

            // Fetches the payment intent status after payment submission
            async function checkStatus() {
                const clientSecret = new URLSearchParams(window.location.search).get(
                    \"payment_intent_client_secret\"
                );

                if (!clientSecret) {
                    return;
                }

                const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

                switch (paymentIntent.status) {
                    case \"succeeded\":
                        console.log(\"Payment succeeded!\");
                        break;
                    case \"processing\":
                        console.log(\"Your payment is processing.\");
                        break;
                    case \"requires_payment_method\":
                        console.log(\"Your payment was not successful, please try again.\");
                        break;
                    default:
                        console.log(\"Something went wrong.\");
                        break;
                }
            }

            initialize();
            checkStatus();

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/purchase/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  128 => 24,  122 => 22,  112 => 21,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
    Valider votre paiement
{% endblock %}

{% block body %}
    <h1>Validation de votre paiement</h1>
    <!-- Display a payment form -->
    <form id=\"payment-form\">
        <div id=\"payment-element\">
            <!--Stripe.js injects the Payment Element-->
        </div>
        <button id=\"submit\" class=\"btn btn-primary\">
            <span id=\"button-text\">Payer</span>
        </button>
        <div id=\"payment-message\" class=\"hidden\"></div>
    </form>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const clientSecret = '{{ clientSecret }}';
        // This is your test publishable API key.
        const stripe = Stripe(\"pk_test_51LHy5HKNEiTGJQKoXmlCCeQmW30pPeUDFMkREFUaSdTl11xNKxU6lVa7wIuEZwOeDUqXgUMJx1rHOZWmntBfCCTl00zONzmYU3\");

        function initialize() {
            document
                .querySelector(\"#payment-form\")
                .addEventListener(\"submit\", handleSubmit);

            // Fetches a payment intent and captures the client secret
            elements = stripe.elements({ clientSecret });
            const paymentElement = elements.create(\"payment\");
            paymentElement.mount(\"#payment-element\");
        }

        async function handleSubmit(e) {
            e.preventDefault();
            const { error } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    // Make sure to change this to your payment completion page
                    return_url: '{{ url('app_payment_success', {'id': purchaseId}) }}',                },
            });


        }

            // Fetches the payment intent status after payment submission
            async function checkStatus() {
                const clientSecret = new URLSearchParams(window.location.search).get(
                    \"payment_intent_client_secret\"
                );

                if (!clientSecret) {
                    return;
                }

                const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

                switch (paymentIntent.status) {
                    case \"succeeded\":
                        console.log(\"Payment succeeded!\");
                        break;
                    case \"processing\":
                        console.log(\"Your payment is processing.\");
                        break;
                    case \"requires_payment_method\":
                        console.log(\"Your payment was not successful, please try again.\");
                        break;
                    default:
                        console.log(\"Something went wrong.\");
                        break;
                }
            }

            initialize();
            checkStatus();

    </script>
{% endblock %}", "/purchase/payment.html.twig", "/Users/dali/PhpstormProjects/JAD_Shopping/github/JAD/templates/purchase/payment.html.twig");
    }
}
