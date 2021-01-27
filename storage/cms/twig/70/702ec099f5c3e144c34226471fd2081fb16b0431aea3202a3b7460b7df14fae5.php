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

/* E:\openserver\domains\auto/themes/auto/pages/contact.htm */
class __TwigTemplate_393a6f41a69bf09c96163cd4b766eb507f75b23cb398ef0ae8c87637b65b05a1 extends \Twig\Template
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
        $tags = array("component" => 199);
        $filters = array("page" => 53);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['page'],
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
        echo "<div style=\"height: 150vh;\" class=\"navContainer md:w-1/2 w-full flex-col flex-wrap h-screen justify-center items-center bg-black text-white w-25 p-3 z-10 absolute left-0 top-0 hidden \">
    <div  class=\"text-5xl absolute top-0 right-0 mr-6 cursor-pointer\"><span onclick=\"closeNav()\"> x </span></div>
    <ul class=\"text-white mt-6 inline-block items-center cursor-pointer  text-2xl\">
      <span class=\"border-b-2  hover:border-orange-500\">  Услуги </span> <span onclick=\"openSubMenu()\" class=\"plus text-4xl ml-4 hover:text-blue-500\">+</span>
        <span onclick=\"closeSubMenu()\" class=\"minus hidden text-4xl ml-4 hover:text-blue-500\">-</span>
        <div class=\"navMenu hidden pl-8\">
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомобильная помощь</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие авто</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Прикурить аккумулятор</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Замена АКБ</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автоэлектрик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомеханик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вытащить машину</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт, замена и подкачка колёс</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Диагностика автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт и отключение сигнализации</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Подвоз топлива</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Запуск двигателя</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Буксировка автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Разблокировка АКПП</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
    </div>
    </ul>
    <a href=\"./price.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Цена</ul>
    </a>
    <a href=\"./review.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Отзывы</ul>
    </a>
    <a href=\"./contact.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Контакты</ul>
    </a>
</div>
<!-- Fixed contact logos -->
<div class=\" w-32 z-40 fixed flex justify-between bottom-0 left-0 \" style=\" margin-left: 20px; margin-bottom: 20px;\">
<div>
<a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/whatsapp.png\" alt=\"\"></a>
</div>
<div>
<a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/telegram.png\" alt=\"\"></a>
</div><div>
<a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/viber.png\" alt=\"\"></a>
</div>
</div>
<!-- Fixed contact logos -->
<!-- main page -->
<div>
    <div>
<header class=\"pt-2 bg-black\">
    <div>
        <div class=\"flex text-white items-center justify-evenly\">
            <div class=\"cursor-pointer w-1/2 md:w-48 \"><a href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAABwCAYAAACkRk1NAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAABSqSURBVHgB7Z0JtB5FlcfvyyJbwpoIJATC5gKCMkMgbE5AGISBiMrRgwTIBIEADsLAwIQwI4qiDEZACShIAgiCrIIjm4JswpAhSmSJSDIJEGRzRhCCAZJ35/9P9Tt86ddVX6/vdX/v/s65p5NX1dVV3V9XV926da+IYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRiGYRg56JIOZ/Q03aBL5R7IMF+e7uVy2gszum4QwzBqzRDpcLrfka7BQ2UL/NPbYXUNknXFMIzaM0gMwzAagnVYhmE0BuuwDMNoDNZhGYbRGKzDMgyjMXTEKuGY03TfFStkvaS0QV0yrEvlfcECBsu4Uafom77k7qFy90vf7HpVDMPoVzrFrOHCwYNlK8kJOrSjcf7RvnRdIeNwsA7LMPoZmxIahtEYrMMyDKMxWIdlGEZjsA7LMIzGYB2WYRiNwToswzAaQ6eYNdwPedKTxk55X0jIFovnLvAldg2Vl8UwjH6n4/1hbXyyjhg8VBaF/GFptxy15NyuH4phGLXGpoSGYTQG67AMw2gM1mEZhtEYrMMyDKMxWIdlGEZjsA7LMIzG0PFRcwZ3y9JBKvsF87wrT4hhGIZhGIZhGIZhGIZhGIZhGIZhGIZhGIZhGEY+GuVeRlXXwOEDkDWl/+v+OmRRV1fXW9KB4F6fjMNwT/KNaPfjYhjGquDFGQY5CfIIZJnWC9bnDsjnIcOlQ0BbPtWm3T8SwzDeAy/FapBjIX/SZjAPcpB0AGjHnW3augKynRiGsfKFGQT5uTaPbshXIIOloaDu20HeTdHWC8QwBjp4EdaDPKzN5juQodJAUO+ZKdv4F8iaYhh9SK2U7ngBNsXhasjunixLxAWc6O+gEPRyMRayl/gV05dAMX2MNAjc/81xmA9ZLeUpJ6ON3xHD6CNq02HhZVkbh19CxiUks6M6BXI7XpC/SE1AnTfC4TDI1yU5Ks+VkKmo81+lAaA908W1JS0LIdunWSlF2bw/d0p63oX8CcLVyHsgc3AdjZX5dzicKeVxOq7xcFICrrUFDpMgH4eMgqzOP0PehLwCeQhyLc6fL0Yz4bQIMgayA2RbyDBPvo0h8z1Tj3sg60mNQf22hCz21P8ngXZzBfSjkI9BRmk/6r7ULXIsUv/0z8fnUpa/uhbjecgRkCEtZR6s5XJAQr35bO5St9CQhl9D9hCjGeBhrRn9sKg0fyP2MF+GnBDLvwXkCc/Dp8nAMGkA6jqtRZ523Kqrvmi8R+dob+X2s5CrIAdKH4NrTlU/x0Fe86TNSVl+0Q6rh/Nbyqy0w8L//0XzwcWXr0HSTq2N/gAPaDTkwRQPc68o/1aQ33vyXacNU+qivmMhj3va8wvIBlG+6dqey7WPbLtwnSHq/2iwE10Lcm2grhNSXKOsDovsE5VZSYelbpV6hhZnFssSo57g4VyW8kF+H7K1+qdRV0BWlwaCem8GecbTLnbmIyFzNR1TpA/AdfYM1OFfU+S5IcU1Qh3WbyEPtMijkL8G8l8clVlVhzVJ3Ye1DKaJUU80vTnCIsiLnrQr1SloGwvqvz7kSU/75kCWajpmSh+gbsqaBDuNLVvyPRjIt1Gba4Q6rB0T8m8OecGT/6YozwR1I9ok8XU4ywLn7KNulvCqhnkKMlvdB3p+m7xUi2wkRv3Ag7lAi/EDbdH1NBm0YxN1CtgiTJaKUbco4uO2WN4pgbwz21wnU4cVnXOLJ39bUwrkeV2TebHNeSepH35ovgxZqyV/lzr9X2jb2Pli1A91CvQ/aj6+pQ0fWcVBezbS9NO/OByhbSAVo2567mO/WN611T9VWwIZEbhO1hHWZpCFCXk5cvpbad+uvB3W/YF6XhQ479TAeZzidnzAl0aCBzNe3WpgFmgZ3ijPEWlRtyL4K80GpxmjpGJwjferf6/m40nPBH/7XqDeXwpcK9RhPRrdox55TP1TujMkBZqjw0La+9Q/DX1bnS2W79z11A9HZhuLUU/wcLZRt6qUZk/a2dLhoI3rQm5McS/4knFrzNrSB+A6pwXqQvuxCQkSmjL9QT0jCS2+Ssjf0okpm5a3w+KCyFue857TNh9V9Xd25CNi1Bs8pA9D7g48xAGzgoK2DofcFrgXF2sfjKpa6kND0ae1fPb3XK8MswYab56pKQxsNV+HtaH6F0QWaxsTBU2ewvbwUTEKU/W8egfIBE/aHZD78CB3lYHDORBa7Y9PSJsIoQeEP0rfQP3UB6R8vgq5LeM5z8X+z5EM71PcaJgdxlcgdOR4mpTPUnFbbZLs/9aHbAhJ7PDU6V/HSDLLIf8nRn3BAzxMy7NlGSjQ1GNH6QNwnd9odYxPuF5WpTtX33yW5rS6D46yNL/SfV6gnl8OnPeZwHkLtMEuh+pEJVa4eDjH4XCJNMwFcw2gvQ63NO0iFYLy6Q1jB6mO46Ug0UbnWZA3EpLXgWwj1fDTQNpZSc9GnX4qZGrxC7RnhRiFKb3DwsP7Ag60yWmkpXoNeD/kp1qtzuNkqZaJqP+HpDgflt7Twh6q2hB/GeRtTxq3St2uzriZM4hDId/F3x6BbOYvcqXXDqMESh0BcViMww1iI6syoMuSCWW7K8Ez2hqHpyRZf0k3MR+EvNS+pJXP+L8hvo71G6j7GS3X5QfM52aHo/HWqRqnT9QHfV78H74xKH+JJ23llBCHpNXWl3Be0MQA59LFznQphytwvcli1At1KywvqlEm3FdXqrcKdQa6Pq7PWNakQFk0DxjekrfMzc9tI/ZoTh1WdC43P7fbxJ8G6glr7RqpaZQ5JbxQnA7GKA/qmg6XklBnNnFUIMtsyQZXA1/1pHEl7zApH67iHScVghFRNw6fhfyn5Iejz4NQ1p/FKI1SOix1nh8PFqMKOCLaRMrh0+KW55N4BnKXZAAvI5fqbwlkKVtX9jTkQFz3AakYXINuuNlp0Vg1i6nJa5BvQnZBGc+JUS/ULT/Hw0Jxvxm32xwA2UmdgvImrV9cwf6GRornQ6ik3hlyCOQa7e3d8iwpiLrn9GygLv8kOcB5O2rYfGVilC/rlJBl0tMpt+lwO1Cm2I9aYEqYUNYIyPHqfJolGZZy286vojybiVEZhZXjeEDb4/BYS1n8Gu2Hr8vvEvJS4cv9ZlMl2Qf6QIFKba6knof7tLQ1QZ01NZXNDMbRc0/bKoqbhDqbpOBvD+1dLsWuMaSKstV5EaXLHW70pukF/c4vQJnvilF/8ADPa/nSLNfYDn/POfThPlsHHvzq0zVyW0+q6twSt/IZMQyjGLqqS+CbNYPXBeT9tGb37NBU6NwwtbEm8q6hLvBCD5eJYQxwCind1XkVaN2F/lA8FFMI5L1ZnMXyHdK58H58C7In2vvbtCdFocFaQ07tph3qgscw0lJ0lXDL2P/flIzgxfxfHOhLuxO9Mi4TF2x0GmSZZKc1BiOd+fVJUArDqCtFvTVsGvt/LsVwtM+Kfpa45B63O3o9krqzTiStnIG2nSf52ThWPke0tQkkaxiNAh3M5Jie5t4i0xZ1LnhfipVZqZFgWWjvRYRHCt6LkQn3wpbMjQFN2ZufaUD6j5KTKAz972N/rtyveUnE/Zln0ue1EnV0tL3aUAzDKIeEERZ5R3MuweO8Y7W3cWmR7RF9Auo4NLaip9H/98lYVM8+tqSo0DbCMgY8VXgcHQqh//IncbwG8jzkHQj1VN1RnkFRPm4MHQ2h8emukuwyZBeUNaSoIWHFMIpL3L0xt9Pchbpzi8e9EHpdeEGcfyfeC46+OJLivaAhJTc5bwU5SKrxBGoYAxvPCKsKPiU1Rlc1nq0SG2EZA5pKPI5WAGO+DZUaos4WbbIYhlE5TQnuyOkiN+e2jfjbD3DP37rSENTtVaSpRZmhxK7GlP2X7TKp8/W+ayS04aOpBqf6nDbTx9WdkIdR1ittymEbQpb/t6CMkKvj1rI+Lv6Fohko5wlpXwa9q+4N2Q3C/bI0z+G0n653qBrhvfkvlPVsirIYiMT3bI6MXN+05p8sbrEridOR/8VYfnrsmOjJP6vVE0ab3wpNjU7Ku7DUL2jfTQkJPRicIjVBXazB72nfUnhKiDKGaO8FgqJMbXPNvdWZvKThz+o8WGzSpg0h6JWi7eZ65BkGmRMo56A25+8OuUPTwcWoKzQQjDUqM/RshiTkvzyQ/yMJ+b8WyD9Jet9nX314j/t8htak8Nm8OefiJh2C462QJdI/sB5jIazH5mIE4UuKw6HiFhbSwNEqo9McjHOPwRf855IdGjRPgXy/TT7GHxgnOUDdZohzhph29wFVGjSK/gTOnY52XSFGZqrssDhUTBMppK2rkRh/E0nT4P3oTpGPHWLj9wyq0zmys8ls2hHB1eOfoZwv4uWeJdnhSOJKnPtWUiLSaN/3DckBRzU4HCH5YLs4KloXdbtAjExUOaQ7VpzRZzvZV3LsQWwYi8VFgBmRQn4snQGDxubtrHpgxz0DL/fHJDsjIacG0tlZjZCMoC4M5Jq3s2qF7dpfjEwUHWH5FG6LxEULSbPhl14cj8HxKunMaDt0mfv3uBfPpMmMe8EXndPN/lrBZT2TnmvPB6Yt6qJ5nxjIQmd3/yOuI6euaVtx4c2S4BSRzg53k+xMQV2ujt97/I12c0emOL8rdh6nmie1OWchZIG4mQOV8T5dHNPp/voB1O8NMVJRtMPyhW2an8U7AfL+OPoxnOWpE6dSn5P+01uF2FOcD+8k+GJ+Nm1nFbEYwsAF8c6hW9JNKYtAH+Qfiq9EESprcfg3SQcXR3wfH46m+YG6rscYGGWzs6JOaJLnnF2RZy/kv0eywVBhX5SWsPbqtj1x5SvNbz+ud6POap1A/qMhs1vaRe+kZ0P+2ZN/O3G/n1ulefA+zKL2PfZ3GonzPZ0HmYt78YKUSNEO6w+ev68v2fkPcVF3ksKB80e2Ao1/RGoGntc/BJKPyPGScUSRFNqLI7XaR2CJXtLQVGcK7skq4cRoxqBukzuf/96e8w6EZL2X5ESUfVGLSQEDS+whGYnaFYoCdCKucWnrH/B/+npn5809oYd6zqMivqkdVrupMf3fc2vdKaEYklkoOu3gsD7pqz8eFZ0gGYi+6qdDrktKhtTORbA6V8dJD41fna9CrpXs8KVYLeHvnGYslfrD7UWredLYhpuSEqJpUWhVL8+UkHDKuTKIh7ogFnlt+caKP7ozR42Jq36RndKl4mdP6VzWEhefgPE1t5ESKNRhRd4V7vUkz0Ylx0i28riiMxmS5JmTkXcOkHrB0eCmCX/ndOfMrEZ16oz6fNOH+xtipLdpIG1u5PvMx2OBtNGSjiQ1BUPK0wSFU9Gk32Sa+xqaCs5Du14LpNP41KenWl9T2Iw1nLGQS9HOtaQgZSh2L/b8fSzkSVTyLC7hSkoi18Ac/ifFgrsKZU3VQESUvkCd365vi9NPxOFSfqYAovz6qLNw5lQpSbFNfWAdrfyTCG2helvChDa4p7XjShql9VjG/3tCGq3Qn5ZiLE+RXkbb6gQHK9zlcVUkN4rb3O+DCzGFV0XLePG5BYK6hb0S0jgEPwNyFF5I/jCo8+pRxvqUsl2RPCS9g7PyK8cOkhFl5opT7qWx9SoLvoy0VOYwPslXFae1XCWa3lsXuRKV977mPUeWtaOEDRC/Hd9iUWNC22qCVt6SPPrpITSCaeVn4lbn4tGbkqZeHPVw1e96aU/I0+vWEoaeY30f7WXRR7pp8Hkc3rpAE9m2sePybRWieUqae+2lcIfFFRFUlKsjDJgw0pMtpHTMw3aR1A1+yU+QcmHI8yJulvuahYG0cfitjA6sHH0ycO48SQc/BFwV5Ad0tTZ5L+deQc/HJQ7jD/IlTep4RqGMPQIRqTlj8H2g50qHwPgMuA8/FH+HNVYKUoqtDyrKH+m5YlTBqVFI+EaAunLDr08XxQ6EvtJ66YOi1dZp4udGSV8HbqS+pE02dpqnt8kzpKVMdlj3BfLO8rTrgzhMD5z3E+ksQgFlC099y9QFvSVGFeSJttPf0KbqR560nSGPRnvx6MmAiliuANNeyjcKYWdxu2SDq7STxT/VZiSjrDssLoT4fLNxdXQh2kVdI0daXEGmzoZeRnzt4juTyqtExAkoP74qv20g/xeQPz5F3zmQfx/k77H+v0gy2v2pc7UUclCwSArSpM3PRnPgaOh4yHhPOl/uiyU952W1Bo+mJxzZfDchmXEwr5GM0IUOyrwb//yEJ0vW/YkzUebzGfLPkGxMy5j/cHkvahWndqGPZavhKDtkfnh2F2dL5+N+KUidOqzfiPvidhqc6uQxpG0sVCLjd0xPCHMkx369GNegvLMlHxzl0Tq9Vd9JBffXC7jcnizutzpSikEj6LQ7B+pIGsPRVh6UEgIm16nDou3SOdJh4MXlVyWzZXVrEdJA8CwXqQvCQSvuTPZ4EWw3R2qHS05oG4U6cJX6lpY/c+vMryUntNhGmTuJWxnP616Io7RPdtU7TkGZcFp6aBl2hGVusH1FivGydCZpl+OT4AMuel/7DfxAqXxnZ017nSw/VkYDp5HnpKIvNc5nh0mD3EMiOVMKgjIXi3NxRLc3Wdq1MmAwZOIA6qzoRXYntPc5KYEyR1j3SX748NIuWzcNKosPlHxwirxYGky0h29SZBjLKQSV1rRajyuiOVWjRThXza6MVhvLqkMWxXbaMvkhOjLyrsFRIKfAY6V3u/jb/h3kZsgPymxXDaGSnrpG2kdyBHp12ft/S3XnknFHfyv0JZ3G3UfjiNzIcqvR9pKdyVV4pgzsFFDf1pmoHb4R+Yosw/1o+Z9GpFxV4jI4jWIXZyxjSBl1icryOZHM2i6uDHJBgeHqeB85a1hQUruqgPaTMz1pw7mKmqE+3t9ObUHj1uCWFXX+19PCPUbDpINB+7aA3JfhnlBp/SUxjApRt83NRy3fyUoc5qmLIsJtNXRelvRV5tCRX9Xr0Ss/JQMAdX6YuD2Etjm0DUq69xxt8H7c1KCtOEZDURc8xGdeMjyHnVrldKKHT8MwUqBud4HP0HP/hu5xNAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAL8P7V1TjeOVAyIAAAAAElFTkSuQmCC\" alt=\"\"></div>
            </a>
                <div class='hidden lg:flex w-96'>
                <i class=\"fas fa-map-marker-alt pr-2\"></i>
                <p>Работаем по Москву</p>
            </div>
            <div class='flex hidden lg:flex w-96'>
                <i class=\"fas fa-clock pr-2\"></i>
                <p>Работаем 24 часа</p>
            </div>
            <div class='flex w-96'>
                <i class=\"fas fa-phone-alt pr-2\"></i>
                <div class=\"flex-col text-xs md:text-base\">
                <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a>
                </div>
            </div>
        </div>
        <div class=\"  text-white cursor-pointer\">
            <ul class=\"flex p-4 items-center justify-evenly\">
                <li onclick=\"navOpen()\" class=\"flex visible lg:hidden\"><i class=\"fas fa-bars text-orange-600 text-5xl\"></i></li>
                <li class=\"flex uppercase items-center\">
                    <li  class=\"relative uppercase nav-menu  flex hidden text-center justify-evenly lg:flex p-6 hover:bg-gray-600 w-1/6\">
                    Услуги
                    <img src=\"https://auto-help-spb.ru/images/menu-arrow.svg\" alt=\"\">
                    <div style=\"width: 90vw; top: 70px;\" class=\"nav-submenu z-10  p-6 bg-gray-100 hidden absolute left-0\">
                        <ul class=\" flex flex-wrap items-center justify-evenly\">
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/avtohelp.png\" alt=\"\" class=\"w-10\">
                                    </i>Автомобильная помощь</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                     <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/autopsy-car.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие авто</a>
                            </li>
                             <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-hood.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие капота</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-trunk.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие багажника</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-1.svg\" alt=\"\" class=\"w-10\">
                                    </i>Прикурить аккумулятор</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-11.svg \" alt alt=\"\" class=\"w-10\">
                                    </i>Замена АКБ</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 avto\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-4.svg \" alt=\"\" class=\"w-10\">
                                    </i>Автоэлектрик с <br> выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/car-mechanic-with-departure.png \" alt=\"\" class=\"w-10\">
                                    </i>Автомеханик с выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-5.svg\" alt=\"\" class=\"w-10\">
                                    </i>Вытащить машину</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 mr-15\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\" https://auto-help-spb.ru/images/menu-10.svg\" alt alt=\"\" class=\"w-10\">
                                    </i>Ремонт, замена и <br> подкачка колёс</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/vehicle-diagnostics.png\"  alt=\"\" class=\"w-10\">
                                     </i>Диагностика <br> автомобиля</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                        <i class=\"mr-2\">
                                            <img src=\"https://auto-help-spb.ru/images/alarm-repair-and-deactivation.png \" alt=\"\" class=\"w-10\">
                                        </i>Ремонт и отключение <br> сигнализации</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-2.svg\" alt=\"\" class=\"w-10\">
                                    </i>Подвоз топлива
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/engine-start.png\" alt=\"\" class=\"w-10\">
                                    </i>Запуск двигателя
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-7.svg \" alt=\"\" class=\"w-10\">
                                    </i>Буксировка автомобиля
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-8.svg\" alt=\"\" class=\"w-10\">
                                    </i>Разблокировка АКПП
                                </a>
                            </li>
                        </ul>
                        </div>
           
                    </li>
                            </li> 
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6 ml-10\"><a href=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"> ЦЕНЫ </a></li>
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\"> ОТЗЫВЫ </a></li>
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\"> КОНТАКТЫ </a></li>
                <li class=\"border-2 text-center border-white w-6/12 sm:w-1/3 lg:w-1/6 py-3 hover:bg-blue-700 hover:border-blue-700
                transition duration-500\">Заказать звонок</li>      
            </ul>  
        </div>
</header>

<div class=\"mx-4 lg:mx-24\">
<h1 class=\"text-center text-xl md:text-2xl py-10 lg:text-4xl font-extrabold\">Контакты</h1>
<p>Звоните нам круглосуточно или оставьте заявку на сайте (скидка при заказе через сайт до 300 рублей)! Наши мастера находятся во всех районах города и во всех пригородах! Будем у вас через 15 минут!</p>
<div class=\"py-10 flex items-center justify-between flex-wrap w-10/12\">
    <div class=\"flex items-center justify-between p-2\">
        <i class=\"fas fa-phone-alt pr-2 text-blue-600\"></i>
        ";
        // line 199
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "contact/tel.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 200
        echo "    </div>
    <div class=\"flex items-center justify-between p-2\">
        <i class=\"fas fa-envelope pr-2 text-blue-600\"></i>
        ";
        // line 203
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "contact/mail.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "hover:text-blue-500"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 204
        echo "    </div>
    <div class=\"flex items-center justify-between p-2\">
        <i class=\"fas fa-clock pr-2 text-blue-600\"></i>
        <p>Работаем
            24 часа</p>
    </div>
</div>
<p class=\"pb-24\">Ознакомиться со всеми услугами и их стоимостью вы можете на странице <a class=\"text-blue-500 underline\" href=\"./price.html\"> цены. </a></p>
</div>
<div class=\"flex-col bg-gray-300\">
<h1 class=\"text-center font-extrabold text-4xl  py-12\">Связаться с нами</h1>
<div class=\"flex justify-evenly items-center flex-wrap mx-4 md:mx-12 lg:mx-24 py-12\">
    <div class=\"mapouter flex justify-center items-center\"><div style=\"width: 90vw;\" class=\"gmap_canvas\"><iframe width=\"500\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=moscow&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://putlocker-is.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href=\"https://www.embedgooglemap.net\">adding google maps to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
    <div class=\"w-96 lg:w-1/2 flex-col bg-white justify-between items-center text-center py-10 my-10\">
        <h1 class=\"font-extrabold text-2xl\">Оставьте заявку</h1>
        <p>Можем предложить специальные условия именно для вас!</p>
        ";
        // line 220
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("commentsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 221
        echo "    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 221,  313 => 220,  295 => 204,  287 => 203,  282 => 200,  274 => 199,  258 => 186,  254 => 185,  250 => 184,  116 => 53,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"height: 150vh;\" class=\"navContainer md:w-1/2 w-full flex-col flex-wrap h-screen justify-center items-center bg-black text-white w-25 p-3 z-10 absolute left-0 top-0 hidden \">
    <div  class=\"text-5xl absolute top-0 right-0 mr-6 cursor-pointer\"><span onclick=\"closeNav()\"> x </span></div>
    <ul class=\"text-white mt-6 inline-block items-center cursor-pointer  text-2xl\">
      <span class=\"border-b-2  hover:border-orange-500\">  Услуги </span> <span onclick=\"openSubMenu()\" class=\"plus text-4xl ml-4 hover:text-blue-500\">+</span>
        <span onclick=\"closeSubMenu()\" class=\"minus hidden text-4xl ml-4 hover:text-blue-500\">-</span>
        <div class=\"navMenu hidden pl-8\">
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомобильная помощь</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие авто</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Прикурить аккумулятор</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Замена АКБ</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автоэлектрик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомеханик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вытащить машину</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт, замена и подкачка колёс</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Диагностика автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт и отключение сигнализации</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Подвоз топлива</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Запуск двигателя</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Буксировка автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Разблокировка АКПП</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
    </div>
    </ul>
    <a href=\"./price.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Цена</ul>
    </a>
    <a href=\"./review.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Отзывы</ul>
    </a>
    <a href=\"./contact.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Контакты</ul>
    </a>
</div>
<!-- Fixed contact logos -->
<div class=\" w-32 z-40 fixed flex justify-between bottom-0 left-0 \" style=\" margin-left: 20px; margin-bottom: 20px;\">
<div>
<a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/whatsapp.png\" alt=\"\"></a>
</div>
<div>
<a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/telegram.png\" alt=\"\"></a>
</div><div>
<a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/viber.png\" alt=\"\"></a>
</div>
</div>
<!-- Fixed contact logos -->
<!-- main page -->
<div>
    <div>
<header class=\"pt-2 bg-black\">
    <div>
        <div class=\"flex text-white items-center justify-evenly\">
            <div class=\"cursor-pointer w-1/2 md:w-48 \"><a href=\"{{ 'home'|page }}\"><img src=\"data:image/png;base64,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\" alt=\"\"></div>
            </a>
                <div class='hidden lg:flex w-96'>
                <i class=\"fas fa-map-marker-alt pr-2\"></i>
                <p>Работаем по Москву</p>
            </div>
            <div class='flex hidden lg:flex w-96'>
                <i class=\"fas fa-clock pr-2\"></i>
                <p>Работаем 24 часа</p>
            </div>
            <div class='flex w-96'>
                <i class=\"fas fa-phone-alt pr-2\"></i>
                <div class=\"flex-col text-xs md:text-base\">
                <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a>
                </div>
            </div>
        </div>
        <div class=\"  text-white cursor-pointer\">
            <ul class=\"flex p-4 items-center justify-evenly\">
                <li onclick=\"navOpen()\" class=\"flex visible lg:hidden\"><i class=\"fas fa-bars text-orange-600 text-5xl\"></i></li>
                <li class=\"flex uppercase items-center\">
                    <li  class=\"relative uppercase nav-menu  flex hidden text-center justify-evenly lg:flex p-6 hover:bg-gray-600 w-1/6\">
                    Услуги
                    <img src=\"https://auto-help-spb.ru/images/menu-arrow.svg\" alt=\"\">
                    <div style=\"width: 90vw; top: 70px;\" class=\"nav-submenu z-10  p-6 bg-gray-100 hidden absolute left-0\">
                        <ul class=\" flex flex-wrap items-center justify-evenly\">
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/avtohelp.png\" alt=\"\" class=\"w-10\">
                                    </i>Автомобильная помощь</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                     <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/autopsy-car.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие авто</a>
                            </li>
                             <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-hood.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие капота</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-trunk.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие багажника</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-1.svg\" alt=\"\" class=\"w-10\">
                                    </i>Прикурить аккумулятор</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-11.svg \" alt alt=\"\" class=\"w-10\">
                                    </i>Замена АКБ</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 avto\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-4.svg \" alt=\"\" class=\"w-10\">
                                    </i>Автоэлектрик с <br> выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/car-mechanic-with-departure.png \" alt=\"\" class=\"w-10\">
                                    </i>Автомеханик с выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-5.svg\" alt=\"\" class=\"w-10\">
                                    </i>Вытащить машину</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 mr-15\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\" https://auto-help-spb.ru/images/menu-10.svg\" alt alt=\"\" class=\"w-10\">
                                    </i>Ремонт, замена и <br> подкачка колёс</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/vehicle-diagnostics.png\"  alt=\"\" class=\"w-10\">
                                     </i>Диагностика <br> автомобиля</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                        <i class=\"mr-2\">
                                            <img src=\"https://auto-help-spb.ru/images/alarm-repair-and-deactivation.png \" alt=\"\" class=\"w-10\">
                                        </i>Ремонт и отключение <br> сигнализации</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-2.svg\" alt=\"\" class=\"w-10\">
                                    </i>Подвоз топлива
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/engine-start.png\" alt=\"\" class=\"w-10\">
                                    </i>Запуск двигателя
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-7.svg \" alt=\"\" class=\"w-10\">
                                    </i>Буксировка автомобиля
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-8.svg\" alt=\"\" class=\"w-10\">
                                    </i>Разблокировка АКПП
                                </a>
                            </li>
                        </ul>
                        </div>
           
                    </li>
                            </li> 
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6 ml-10\"><a href=\"{{ 'home'|page }}\"> ЦЕНЫ </a></li>
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"{{ 'reviews'|page }}\"> ОТЗЫВЫ </a></li>
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"{{ 'contact'|page }}\"> КОНТАКТЫ </a></li>
                <li class=\"border-2 text-center border-white w-6/12 sm:w-1/3 lg:w-1/6 py-3 hover:bg-blue-700 hover:border-blue-700
                transition duration-500\">Заказать звонок</li>      
            </ul>  
        </div>
</header>

<div class=\"mx-4 lg:mx-24\">
<h1 class=\"text-center text-xl md:text-2xl py-10 lg:text-4xl font-extrabold\">Контакты</h1>
<p>Звоните нам круглосуточно или оставьте заявку на сайте (скидка при заказе через сайт до 300 рублей)! Наши мастера находятся во всех районах города и во всех пригородах! Будем у вас через 15 минут!</p>
<div class=\"py-10 flex items-center justify-between flex-wrap w-10/12\">
    <div class=\"flex items-center justify-between p-2\">
        <i class=\"fas fa-phone-alt pr-2 text-blue-600\"></i>
        {% component 'contenteditor' file=\"contact/tel.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
    </div>
    <div class=\"flex items-center justify-between p-2\">
        <i class=\"fas fa-envelope pr-2 text-blue-600\"></i>
        {% component 'contenteditor' file=\"contact/mail.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"hover:text-blue-500\" %}
    </div>
    <div class=\"flex items-center justify-between p-2\">
        <i class=\"fas fa-clock pr-2 text-blue-600\"></i>
        <p>Работаем
            24 часа</p>
    </div>
</div>
<p class=\"pb-24\">Ознакомиться со всеми услугами и их стоимостью вы можете на странице <a class=\"text-blue-500 underline\" href=\"./price.html\"> цены. </a></p>
</div>
<div class=\"flex-col bg-gray-300\">
<h1 class=\"text-center font-extrabold text-4xl  py-12\">Связаться с нами</h1>
<div class=\"flex justify-evenly items-center flex-wrap mx-4 md:mx-12 lg:mx-24 py-12\">
    <div class=\"mapouter flex justify-center items-center\"><div style=\"width: 90vw;\" class=\"gmap_canvas\"><iframe width=\"500\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=moscow&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://putlocker-is.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href=\"https://www.embedgooglemap.net\">adding google maps to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
    <div class=\"w-96 lg:w-1/2 flex-col bg-white justify-between items-center text-center py-10 my-10\">
        <h1 class=\"font-extrabold text-2xl\">Оставьте заявку</h1>
        <p>Можем предложить специальные условия именно для вас!</p>
        {% component 'commentsPost' %}
    </div>
</div>
</div>", "E:\\openserver\\domains\\auto/themes/auto/pages/contact.htm", "");
    }
}
