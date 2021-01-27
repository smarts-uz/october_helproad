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

/* E:\openserver\domains\auto/themes/auto/partials/formSubscribe/default.htm */
class __TwigTemplate_75965a43bfc5c4dfb3b5c3e0b08cf8bdbc13fdc9b73a3317d263237163db627e extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"card\">
    <div class=\"card-titlet\">
        <h2></h2>
    </div>

    <div class=\"card-content author\">
        <form name=\"form-subscribe-andradedev\" id=\"form-subscribe-andradedev\" data-request=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "::onAddSubscriber\" data-request-update=\"'";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "::alert': '#result'\">
            <input type=\"text\" class=\"block w-full py-3 px-1 mt-2 
            text-gray-800 appearance-none 
            bg-gray-200 pl-6
            focus:text-gray-500 focus:outline-none focus:border-gray-200\" name=\"name\" placeholder=\"* Name\" required>
            <input type=\"text\" class=\"block w-full py-3 px-1 mt-6 mb-4
            text-gray-800 appearance-none 
            bg-gray-200 pl-6
            focus:text-gray-500 focus:outline-none focus:border-gray-200\" name=\"tel\" placeholder=\"* tel\" required>
            <input type=\"email\" class=\"block w-full py-3 px-1 mt-6 mb-4
            text-gray-800 appearance-none 
            bg-gray-200 pl-6
            focus:text-gray-500 focus:outline-none focus:border-gray-200\" name=\"email\" placeholder=\"* Email\" required>
            <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
            <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
        </form>
    </div>

    <div class=\"card-action\">
        <button class=\"w-full py-3 mt-10 bg-blue-600 rounded-sm
        font-medium text-white uppercase
        focus:outline-none hover:bg-gray-700 hover:shadow-none\" form=\"form-subscribe-andradedev\">Отправить</button>
    </div>
    
    <div id=\"result\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/formSubscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-titlet\">
        <h2></h2>
    </div>

    <div class=\"card-content author\">
        <form name=\"form-subscribe-andradedev\" id=\"form-subscribe-andradedev\" data-request=\"{{ __SELF__ }}::onAddSubscriber\" data-request-update=\"'{{__SELF__}}::alert': '#result'\">
            <input type=\"text\" class=\"block w-full py-3 px-1 mt-2 
            text-gray-800 appearance-none 
            bg-gray-200 pl-6
            focus:text-gray-500 focus:outline-none focus:border-gray-200\" name=\"name\" placeholder=\"* Name\" required>
            <input type=\"text\" class=\"block w-full py-3 px-1 mt-6 mb-4
            text-gray-800 appearance-none 
            bg-gray-200 pl-6
            focus:text-gray-500 focus:outline-none focus:border-gray-200\" name=\"tel\" placeholder=\"* tel\" required>
            <input type=\"email\" class=\"block w-full py-3 px-1 mt-6 mb-4
            text-gray-800 appearance-none 
            bg-gray-200 pl-6
            focus:text-gray-500 focus:outline-none focus:border-gray-200\" name=\"email\" placeholder=\"* Email\" required>
            <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
            <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
        </form>
    </div>

    <div class=\"card-action\">
        <button class=\"w-full py-3 mt-10 bg-blue-600 rounded-sm
        font-medium text-white uppercase
        focus:outline-none hover:bg-gray-700 hover:shadow-none\" form=\"form-subscribe-andradedev\">Отправить</button>
    </div>
    
    <div id=\"result\"></div>
</div>", "E:\\openserver\\domains\\auto/themes/auto/partials/formSubscribe/default.htm", "");
    }
}
