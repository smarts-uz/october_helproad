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

/* E:\openserver\domains\auto/themes/auto/partials/prices/price2.htm */
class __TwigTemplate_05c39e14ebc346f86e9822d29294b49f8b1c7fad087576c4d2656f087db7ee18 extends \Twig\Template
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
        $tags = array("set" => 2, "for" => 3);
        $filters = array("escape" => 5);
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
        echo "<h1>Вскрытие капота</h1>
";
        // line 2
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 2);
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div style=\"justify-content: center;\" class=\"flex flex-wrap  border-2 bg-white py-4 px-2 lg:px-10 justify-evenly text-center items-center my-6 \">
        <p class=\"sm:w-1/3 w-7/12 \">";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "</p>
        <p class='font-extrabold sm:w-1/3 w-7/12'>от ";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo " руб.</p>
        <p onclick=\"orderFormBtn()\" class='sm:w-1/3 w-7/12 price-click text-blue-500 font-bold underline cursor-pointer'>Заказать</p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/prices/price2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 6,  75 => 5,  72 => 4,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Вскрытие капота</h1>
{% set posts = blogPosts.posts %}
    {% for post in posts %}
    <div style=\"justify-content: center;\" class=\"flex flex-wrap  border-2 bg-white py-4 px-2 lg:px-10 justify-evenly text-center items-center my-6 \">
        <p class=\"sm:w-1/3 w-7/12 \">{{ post.title }}</p>
        <p class='font-extrabold sm:w-1/3 w-7/12'>от {{ post.excerpt }} руб.</p>
        <p onclick=\"orderFormBtn()\" class='sm:w-1/3 w-7/12 price-click text-blue-500 font-bold underline cursor-pointer'>Заказать</p>
    </div>
{% endfor %}", "E:\\openserver\\domains\\auto/themes/auto/partials/prices/price2.htm", "");
    }
}
