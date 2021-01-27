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

/* E:\openserver\domains\auto/themes/auto/partials/home/service.htm */
class __TwigTemplate_3cca3e24ce3216f60e2a1f34b02935e9ccfd3c0ae14bbf92ee24c830086f79d8 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "for" => 9);
        $filters = array("media" => 10, "escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['media', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "    <div class=\"item shadow-2xl  lg:ml-10 border-2 border-white px-24 md:px-12 my-10 lg:px-8 sm:py-8 hover:border-orange-500\"> <img class='rounded-full' src=\" ";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 10), 10, $this->source));
            echo " \" alt=\"\">
        <p class=\"py-4\">";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</p>
        <p  class=\" py-4 font-extrabold text-lg\">от ";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo " руб.</p>
        <button onclick=\"orderFormBtn()\" class=\"font-extrabold text-blue-500 border-2 border-blue-500 py-2 px-10 hover:bg-blue-500 hover:text-white transition duration-300\">Заказать</button>
    </div>
 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 16, $this->source), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/home/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  92 => 12,  88 => 11,  83 => 10,  78 => 9,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


{% for record in records %}
    <div class=\"item shadow-2xl  lg:ml-10 border-2 border-white px-24 md:px-12 my-10 lg:px-8 sm:py-8 hover:border-orange-500\"> <img class='rounded-full' src=\" {{ record.image|media }} \" alt=\"\">
        <p class=\"py-4\">{{ record.title }}</p>
        <p  class=\" py-4 font-extrabold text-lg\">от {{ record.price }} руб.</p>
        <button onclick=\"orderFormBtn()\" class=\"font-extrabold text-blue-500 border-2 border-blue-500 py-2 px-10 hover:bg-blue-500 hover:text-white transition duration-300\">Заказать</button>
    </div>
 {% else %}
    <li class=\"no-data\">{{ noRecordsMessage }}</li>
{% endfor %}", "E:\\openserver\\domains\\auto/themes/auto/partials/home/service.htm", "");
    }
}
