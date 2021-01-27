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

/* E:\openserver\domains\auto/themes/auto/partials/home/work.htm */
class __TwigTemplate_a50e7ac29c6178171a2af69183699e2c5f43d076a0d538c1b2a6e18a67d0c074 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 2);
        $filters = array("slice" => 5, "escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['slice', 'escape'],
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "<div class=\"flex items-center justify-between ml-10 flex-wrap lg:w-1/5 w-full  bg-white flex-col mx-4 mt-8 py-8 px-14 relative hover:shadow-2xl\">
    <div class=\"bg-orange-500 w-16 h-16 absolute right-0 top-0 flex items-center justify-center font-medium text-4xl text-white\">#</div>
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 5), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" alt=\"\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    <h4 class=\"font-bold my-4\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h4>
    <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo " <br><a class=\"text-blue-500 font-extrabold cursor-pointer\" href=\"tel:+79067031111\"></a></p>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 12, $this->source), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/home/work.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 12,  91 => 9,  86 => 8,  77 => 6,  73 => 5,  69 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
{% for post in posts %}
<div class=\"flex items-center justify-between ml-10 flex-wrap lg:w-1/5 w-full  bg-white flex-col mx-4 mt-8 py-8 px-14 relative hover:shadow-2xl\">
    <div class=\"bg-orange-500 w-16 h-16 absolute right-0 top-0 flex items-center justify-center font-medium text-4xl text-white\">#</div>
    {% for image in post.featured_images|slice(0, 1) %}
    <img src=\"{{ image.path }}\" alt=\"\">
    {% endfor %}
    <h4 class=\"font-bold my-4\">{{ post.title }}</h4>
    <p>{{ post.excerpt }} <br><a class=\"text-blue-500 font-extrabold cursor-pointer\" href=\"tel:+79067031111\"></a></p>
</div>
{% else %}
    {{noPostsMessage}}
{% endfor %}", "E:\\openserver\\domains\\auto/themes/auto/partials/home/work.htm", "");
    }
}
