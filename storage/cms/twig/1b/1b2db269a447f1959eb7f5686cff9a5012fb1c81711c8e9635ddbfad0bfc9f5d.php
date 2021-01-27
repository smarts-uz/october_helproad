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

/* E:\openserver\domains\auto/themes/auto/partials/formsubscribe/alert.htm */
class __TwigTemplate_5b8f754f0dff6bccc86bd20282529e1c31af61e8dc3b530fb6c5661871251d17 extends \Twig\Template
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
        $tags = array("if" => 1);
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        if (($context["result"] ?? null)) {
            // line 2
            echo " <div class=\"alert alert-primary alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
  ";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["result"] ?? null), 4, $this->source), "html", null, true);
            echo "
</div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/formsubscribe/alert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if result %}
 <div class=\"alert alert-primary alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
  {{result}}
</div>
 {% endif %}", "E:\\openserver\\domains\\auto/themes/auto/partials/formsubscribe/alert.htm", "");
    }
}
