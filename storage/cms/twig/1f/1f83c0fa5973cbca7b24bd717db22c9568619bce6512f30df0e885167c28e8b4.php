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

/* E:\openserver\domains\auto/themes/auto/partials/commentspost/list.htm */
class __TwigTemplate_3155cc54a54ee00a8a5a8cefcbfcdfc391c8b3618ba046668db391c7c6bbb8b4 extends \Twig\Template
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
        $tags = array("for" => 1, "if" => 22, "partial" => 24);
        $filters = array("escape" => 3, "raw" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape', 'raw'],
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
        echo "<!-- ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<li>
    <div class=\"comment\" id=\"comment-";
            // line 3
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\">
        <div class=\"comment-avatar\">
            ";
            // line 5
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "avatar", [], "any", false, false, true, 5), 5, $this->source);
            echo "
        </div>
        <div class=\"comment-content\">
            <div class=\"comment-header\">
                <span class=\"comment-name\">";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</span>
                <a class=\"comment-date\" href=\"#comment-";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 11), "diffForHumans", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
                </a>
            </div>
            <div>";
            // line 14
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, true, 14), 14, $this->source);
            echo "</div>
            <div class=\"comment-footer\">
                <a class=\"comment-reply\" onclick=\"Comment.replay(event,'";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "')\">Reply</a>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>

    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, true, 22)) {
                // line 23
                echo "    <ul>
        ";
                // line 24
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['posts'] = twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, true, 24)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 25
                echo "    </ul>
    ";
            }
            // line 27
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo " -->";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/commentspost/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  124 => 27,  120 => 25,  115 => 24,  112 => 23,  110 => 22,  101 => 16,  96 => 14,  90 => 11,  86 => 10,  82 => 9,  75 => 5,  70 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- {% for post in posts %}
<li>
    <div class=\"comment\" id=\"comment-{{post.id}}\">
        <div class=\"comment-avatar\">
            {{post.avatar|raw}}
        </div>
        <div class=\"comment-content\">
            <div class=\"comment-header\">
                <span class=\"comment-name\">{{post.name}}</span>
                <a class=\"comment-date\" href=\"#comment-{{post.id}}\">
                    {{post.created_at.diffForHumans}}
                </a>
            </div>
            <div>{{post.content|raw}}</div>
            <div class=\"comment-footer\">
                <a class=\"comment-reply\" onclick=\"Comment.replay(event,'{{post.id}}')\">Reply</a>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>

    {% if post.children %}
    <ul>
        {% partial \"commentsPost::list\" posts=post.children %}
    </ul>
    {% endif %}
</li>
{% endfor %} -->", "E:\\openserver\\domains\\auto/themes/auto/partials/commentspost/list.htm", "");
    }
}
