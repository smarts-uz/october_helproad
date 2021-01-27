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

/* E:\openserver\domains\auto/themes/auto/layouts/default.htm */
class __TwigTemplate_84c28abea87d8620a7e64b68e3b24893ff511d4ecdbda6d50d41765334e0bed3 extends \Twig\Template
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
        $tags = array("styles" => 19, "component" => 20, "page" => 51, "partial" => 53, "framework" => 82, "scripts" => 83);
        $filters = array("theme" => 59);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'component', 'page', 'partial', 'framework', 'scripts'],
                ['theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   
    <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\" integrity=\"sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>


    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap\" rel=\"stylesheet\">
<!-- Chatra {literal} -->
    ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 20
        echo "     ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "<script>
    (function(d, w, c) {
        w.ChatraID = 'Assxvo6PCRhHcagxW';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');
* {box-sizing: border-box;}
html {margin: 0; padding: 0;}
body {font-size: 16px; font-weight: 500; font-family: 'Montserrat', sans-serif;}
.nav-menu:hover > .nav-submenu{display: flex;} 
.nav-submenu:hover{display: flex;}
.owl-nav{position: relative;}
.owl-prev span{font-size: 100px; position: absolute; bottom: 200px; left: 0;}
.owl-next span{font-size: 100px; position: absolute; bottom: 200px; right: 0;}
.owl-next span:hover, .owl-prev span:hover{color: black;}
</style>
<body class=\"overflow-x-hidden\">
<!-- Fixed contact logos -->
<!-- main page -->
    ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
        echo "  <!-- footer -->
    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "




<script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/index.js");
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\" integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\" crossorigin=\"anonymous\"></script>
<script>\$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})</script>
";
        // line 82
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 83
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 84
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 84,  175 => 83,  164 => 82,  138 => 59,  131 => 54,  127 => 53,  124 => 52,  122 => 51,  90 => 21,  85 => 20,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   
    <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\" integrity=\"sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>


    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap\" rel=\"stylesheet\">
<!-- Chatra {literal} -->
    {% styles %}
     {% component 'SeoCmsPage' %}
<script>
    (function(d, w, c) {
        w.ChatraID = 'Assxvo6PCRhHcagxW';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');
* {box-sizing: border-box;}
html {margin: 0; padding: 0;}
body {font-size: 16px; font-weight: 500; font-family: 'Montserrat', sans-serif;}
.nav-menu:hover > .nav-submenu{display: flex;} 
.nav-submenu:hover{display: flex;}
.owl-nav{position: relative;}
.owl-prev span{font-size: 100px; position: absolute; bottom: 200px; left: 0;}
.owl-next span{font-size: 100px; position: absolute; bottom: 200px; right: 0;}
.owl-next span:hover, .owl-prev span:hover{color: black;}
</style>
<body class=\"overflow-x-hidden\">
<!-- Fixed contact logos -->
<!-- main page -->
    {% page %}
  <!-- footer -->
    {% partial 'site/footer' %}





<script src=\"{{ 'assets/index.js'|theme }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\" integrity=\"sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\" integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\" crossorigin=\"anonymous\"></script>
<script>\$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})</script>
{% framework extras %}
{% scripts %}
</body>
</html>", "E:\\openserver\\domains\\auto/themes/auto/layouts/default.htm", "");
    }
}
