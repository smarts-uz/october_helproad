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

/* E:\openserver\domains\auto/themes/auto/partials/home/price.htm */
class __TwigTemplate_28d8b95c99ed85833b891f44ef942cbe3352adeb31977b6403d993f34a773651 extends \Twig\Template
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
        $filters = array("escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
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
            echo "<div style=\"justify-content: center;\" class=\"flex flex-wrap  border-2 bg-white py-4 px-2 lg:px-10 justify-evenly text-center items-center my-6 \">
    <p class=\"sm:w-1/3 w-7/12 \">";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</p>
    <p class='font-extrabold sm:w-1/3 w-7/12'>от ";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo " руб.</p>
    <p onclick=\"orderFormBtn()\" class='sm:w-1/3 w-7/12 price-click text-blue-500 font-bold underline cursor-pointer'>Заказать</p>
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
        return "E:\\openserver\\domains\\auto/themes/auto/partials/home/price.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  90 => 12,  86 => 11,  83 => 10,  78 => 9,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
<div style=\"justify-content: center;\" class=\"flex flex-wrap  border-2 bg-white py-4 px-2 lg:px-10 justify-evenly text-center items-center my-6 \">
    <p class=\"sm:w-1/3 w-7/12 \">{{record.title}}</p>
    <p class='font-extrabold sm:w-1/3 w-7/12'>от {{ record.price }} руб.</p>
    <p onclick=\"orderFormBtn()\" class='sm:w-1/3 w-7/12 price-click text-blue-500 font-bold underline cursor-pointer'>Заказать</p>
</div>
{% else %}
    <li class=\"no-data\">{{ noRecordsMessage }}</li>
{% endfor %}", "E:\\openserver\\domains\\auto/themes/auto/partials/home/price.htm", "");
    }
}
