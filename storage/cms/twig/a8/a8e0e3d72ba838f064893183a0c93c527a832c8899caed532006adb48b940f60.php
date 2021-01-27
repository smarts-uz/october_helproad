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

/* E:\openserver\domains\auto/themes/auto/partials/formsubscribe/default.htm */
class __TwigTemplate_83ca2fb6d10b843a016028b703745786fd5cfebb008c8ec8c517023f1cdcb5dd extends \Twig\Template
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
        $filters = array("escape" => 8);
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
    <div class=\"mt-6 mb-4 font-extrabold text-2xl\">
        <h2>Оставьте заявку</h2>
        <p class=\"pb-4\">Можем предложить специальные условия именно для вас!</p>
    </div>

    <div class=\"card-content author\">
        <form name=\"form-subscribe-andradedev\" class=\"flex lg:full  flex-wrap justify-evenly items-center\" id=\"form-subscribe-andradedev\" data-request=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 8, $this->source), "html", null, true);
        echo "::onAddSubscriber\" data-request-update=\"'";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 8, $this->source), "html", null, true);
        echo "::alert': '#result'\">
            <input type=\"text\" class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" name=\"name\" placeholder=\"* Ваше имя\" required>
            <input type=\"text\" class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" name=\"tel\" placeholder=\"* Ваш телефон\" required>
            <input type=\"email\" class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" name=\"email\" placeholder=\"* Email\" required>
            <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
            <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
        </form>
    </div>

    <div class=\"card-action\">
        <button class=\"w-9/12 sm:w-full bg-blue-700 text-white hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none\" form=\"form-subscribe-andradedev\">Узнать стоимость</button>
    </div>
    
    <div id=\"result\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/partials/formsubscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"mt-6 mb-4 font-extrabold text-2xl\">
        <h2>Оставьте заявку</h2>
        <p class=\"pb-4\">Можем предложить специальные условия именно для вас!</p>
    </div>

    <div class=\"card-content author\">
        <form name=\"form-subscribe-andradedev\" class=\"flex lg:full  flex-wrap justify-evenly items-center\" id=\"form-subscribe-andradedev\" data-request=\"{{ __SELF__ }}::onAddSubscriber\" data-request-update=\"'{{__SELF__}}::alert': '#result'\">
            <input type=\"text\" class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" name=\"name\" placeholder=\"* Ваше имя\" required>
            <input type=\"text\" class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" name=\"tel\" placeholder=\"* Ваш телефон\" required>
            <input type=\"email\" class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" name=\"email\" placeholder=\"* Email\" required>
            <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
            <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
        </form>
    </div>

    <div class=\"card-action\">
        <button class=\"w-9/12 sm:w-full bg-blue-700 text-white hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none\" form=\"form-subscribe-andradedev\">Узнать стоимость</button>
    </div>
    
    <div id=\"result\"></div>
</div>", "E:\\openserver\\domains\\auto/themes/auto/partials/formsubscribe/default.htm", "");
    }
}
