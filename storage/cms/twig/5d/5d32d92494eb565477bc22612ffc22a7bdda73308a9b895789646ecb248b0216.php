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

/* E:\openserver\domains\auto/themes/auto/partials/home/aboutus.htm */
class __TwigTemplate_f2786a7b38bcef23c8cd8a25df50d1639cf2dd9b8026a3e0085475a2783cac4b extends \Twig\Template
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
        $filters = array("slice" => 4, "escape" => 5);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "    <div class=\"w-full sm:w-1/3 lg:w-1/5 my-8 flex ml-4 flex-col items-center justify-evenly\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 4), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\" alt=\"\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        <h4 class='mt-6 font-extrabold'>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</h4>
        <p class='mt-2'>";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</p>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 11, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/home/aboutus.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 11,  91 => 8,  86 => 7,  77 => 5,  73 => 4,  70 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
    {% for post in posts %}
    <div class=\"w-full sm:w-1/3 lg:w-1/5 my-8 flex ml-4 flex-col items-center justify-evenly\">
        {% for image in post.featured_images|slice(0, 1) %}
        <img src=\"{{ image.path }}\" alt=\"\">
        {% endfor %}
        <h4 class='mt-6 font-extrabold'>{{ post.title }}</h4>
        <p class='mt-2'>{{ post.excerpt }}</p>
    </div>
    {% else %}
    {{noPostsMessage}}
    {% endfor %}", "E:\\openserver\\domains\\auto/themes/auto/partials/home/aboutus.htm", "");
    }
}
