<?php

/* W:\domains\uragent.com/themes/UragentTheme/pages/mobile-faq.htm */
class __TwigTemplate_e86aec28d2511fef0399ee6f88cbd22024646aea526bf9fe10f9fce636e72f7d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t\t ";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 5
        echo "\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 9
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 12
        echo "\t\t<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<div class=\"container-fluid nopadding\">
\t\t\t<div class=\"sidenav\" id=\"sidenavid\">
\t\t\t  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
\t\t\t  <a href=\"#\">Пункт 1</a>
\t\t\t  <a href=\"#\">Пункт 2</a>
\t\t\t  <a href=\"#\">Пункт 3</a>
\t\t\t  <a href=\"#\">Пункт 4</a>
\t\t\t</div>
\t\t\t<div class=\"row header-row\">
\t\t\t\t<div class=\"col-2 header nopadding\">
\t\t\t\t\t<img src=";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/header-logo.png");
        echo " class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 header-textblock\">
\t\t\t\t\t<h1 class=\"header-text\"><span class=\"header-text-red\">UR</span>ADRESA</h1>
\t\t\t\t\t<h5 class=\"header-subtitle\">cамая полная база <br> юр. адресов в Москве</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<img src=";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu.png");
        echo " class=\"img-fluid\" onclick=\"openNav()\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<span class=\"caption\">FAQ. Часто задаваемые вопросы</span>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<span class=\"route-text\">Главная / FAQ</span>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<input class=\"form-control col-9\" type=\"text\" placeholder=\"Быстрый поиск по вопросам\" id=\"search-text-input\" name=\"search\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary col-3 search-button\">найти</button>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-general\">Общие вопросы</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-general\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs\">Вопросы по процессу работы</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-dillerquestions\">Вопросы по диллерству и сотрудничеству</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-dillerquestions\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons2\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons2\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs2\">Вопросы по процессу работы</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs2\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"contentblock col-12\">
\t\t\t\t\t<h1 class=\"content-header\">Регистрировать предприятие на подобные адреса это законно?</h1>
\t\t\t\t\t<p class=\"content-text\">Адрес относится к ИФНС №7 и представляет собой современное офисное помещение общей площадью 21,6 кв. м, расположенное на 3-ем этаже административного здания вблизи ст. м. Менделеевская (1 мин. пешком) и Новослободская (5 мин. пешком) на территории бизнес квартала «Атмосфера».  фасадов и собственная охраняемая пешеходная улица – все это преимущества расположения данного офиса. По адресу (Св-во от 3 декабря 2012 г.) присутствует вся </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"contentblock col-12\">
\t\t\t\t\t<h1 class=\"content-header\">Регистрировать предприятие на подобные адреса это законно?</h1>
\t\t\t\t\t<p class=\"content-text\">Адрес относится к ИФНС №7 и представляет собой современное офисное помещение общей площадью 21,6 кв. м, расположенное на 3-ем этаже административного здания вблизи ст. м. Менделеевская (1 мин. пешком) и Новослободская (5 мин. пешком) на территории бизнес квартала «Атмосфера».  фасадов и собственная охраняемая пешеходная улица – все это преимущества расположения данного офиса. По адресу (Св-во от 3 декабря 2012 г.) присутствует вся </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"contentblock col-12\">
\t\t\t\t\t<h1 class=\"content-header\">Регистрировать предприятие на подобные адреса это законно?</h1>
\t\t\t\t\t<p class=\"content-text\">Адрес относится к ИФНС №7 и представляет собой современное офисное помещение общей площадью 21,6 кв. м, расположенное на 3-ем этаже административного здания вблизи ст. м. Менделеевская (1 мин. пешком) и Новослободская (5 мин. пешком) на территории бизнес квартала «Атмосфера».  фасадов и собственная охраняемая пешеходная улица – все это преимущества расположения данного офиса. По адресу (Св-во от 3 декабря 2012 г.) присутствует вся </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<span class=\"caption-phone\">Работает горячая линия</span>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"questions-phone\">
\t\t\t\t\t<img src=";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/rect-phone.png");
        echo " class=\"img-fluid rect-phone\">
\t\t\t\t\t<div class=\"text-phone\">
\t\t\t\t\t\t<div class=\"text-phone-big\">Остались вопросы?<br></div>
\t\t\t\t\t\t<div class=\"text-phone-small\">Звоните прямо сейчас<br></div>
\t\t\t\t\t\t<div class=\"text-phone-big\">+7 (495) 380-25-00</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<span class=\"caption-phone\">Наша компания в цифрах</span>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"col-12 nopadding\">
\t\t\t\t\t<div id=\"carouselContent\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t<div class=\"carousel-item active text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">16</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Лет роста компании</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">500</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Адресов в нашей базе</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">17</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Офисов по всей москве</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">30</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Минут и документы готовы</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselContent\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"><img src=";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vector-left.png");
        echo "></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselContent\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"><img src=";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vector-right.png");
        echo "></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"col-12 nopadding\">
\t\t\t\t\t<div class=\"collapse-spoiler-2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-uradress\">Юридические адреса</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-uradress\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-urquestinons\">Дополнительные услуги</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-urquestinons\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-company\">Компания</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-company\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-partners\">Сотрудничество</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-partners\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-info\">Информация</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-info\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row footer\">
\t\t\t\t<img src=";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer.png");
        echo " class=\"img-fluid footer-image\">
\t\t\t\t<p class=\"footer-text\">© «РаСоБи» 2006-2018. <br>Все права защищены.</p>
\t\t\t\t<p class=\"footer-text\">Использование материалов сайта - только с согласия администраци</p>
\t\t\t\t<p class=\"footer-text\">г. Москва, Большая Почтовая ул., д. 36, стр. 6-7-8</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t";
        // line 238
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 239
        echo "\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\uragent.com/themes/UragentTheme/pages/mobile-faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 239,  292 => 238,  281 => 230,  207 => 159,  200 => 155,  164 => 122,  71 => 32,  61 => 25,  44 => 12,  42 => 8,  38 => 9,  36 => 8,  31 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
\t<head>
\t\t {% styles %}
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t{% put scripts %}
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t{% endput %}
\t\t<title>{{ this.page.title }}</title>
\t</head>
\t<body>
\t\t<div class=\"container-fluid nopadding\">
\t\t\t<div class=\"sidenav\" id=\"sidenavid\">
\t\t\t  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
\t\t\t  <a href=\"#\">Пункт 1</a>
\t\t\t  <a href=\"#\">Пункт 2</a>
\t\t\t  <a href=\"#\">Пункт 3</a>
\t\t\t  <a href=\"#\">Пункт 4</a>
\t\t\t</div>
\t\t\t<div class=\"row header-row\">
\t\t\t\t<div class=\"col-2 header nopadding\">
\t\t\t\t\t<img src={{ 'assets/images/header-logo.png'|theme }} class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-7 header-textblock\">
\t\t\t\t\t<h1 class=\"header-text\"><span class=\"header-text-red\">UR</span>ADRESA</h1>
\t\t\t\t\t<h5 class=\"header-subtitle\">cамая полная база <br> юр. адресов в Москве</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<img src={{ 'assets/images/menu.png'|theme }} class=\"img-fluid\" onclick=\"openNav()\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<span class=\"caption\">FAQ. Часто задаваемые вопросы</span>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<span class=\"route-text\">Главная / FAQ</span>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<input class=\"form-control col-9\" type=\"text\" placeholder=\"Быстрый поиск по вопросам\" id=\"search-text-input\" name=\"search\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary col-3 search-button\">найти</button>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-general\">Общие вопросы</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-general\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs\">Вопросы по процессу работы</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-dillerquestions\">Вопросы по диллерству и сотрудничеству</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-dillerquestions\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons2\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons2\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler\">
\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs2\">Вопросы по процессу работы</button>
\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs2\">
\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"contentblock col-12\">
\t\t\t\t\t<h1 class=\"content-header\">Регистрировать предприятие на подобные адреса это законно?</h1>
\t\t\t\t\t<p class=\"content-text\">Адрес относится к ИФНС №7 и представляет собой современное офисное помещение общей площадью 21,6 кв. м, расположенное на 3-ем этаже административного здания вблизи ст. м. Менделеевская (1 мин. пешком) и Новослободская (5 мин. пешком) на территории бизнес квартала «Атмосфера».  фасадов и собственная охраняемая пешеходная улица – все это преимущества расположения данного офиса. По адресу (Св-во от 3 декабря 2012 г.) присутствует вся </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"contentblock col-12\">
\t\t\t\t\t<h1 class=\"content-header\">Регистрировать предприятие на подобные адреса это законно?</h1>
\t\t\t\t\t<p class=\"content-text\">Адрес относится к ИФНС №7 и представляет собой современное офисное помещение общей площадью 21,6 кв. м, расположенное на 3-ем этаже административного здания вблизи ст. м. Менделеевская (1 мин. пешком) и Новослободская (5 мин. пешком) на территории бизнес квартала «Атмосфера».  фасадов и собственная охраняемая пешеходная улица – все это преимущества расположения данного офиса. По адресу (Св-во от 3 декабря 2012 г.) присутствует вся </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"contentblock col-12\">
\t\t\t\t\t<h1 class=\"content-header\">Регистрировать предприятие на подобные адреса это законно?</h1>
\t\t\t\t\t<p class=\"content-text\">Адрес относится к ИФНС №7 и представляет собой современное офисное помещение общей площадью 21,6 кв. м, расположенное на 3-ем этаже административного здания вблизи ст. м. Менделеевская (1 мин. пешком) и Новослободская (5 мин. пешком) на территории бизнес квартала «Атмосфера».  фасадов и собственная охраняемая пешеходная улица – все это преимущества расположения данного офиса. По адресу (Св-во от 3 декабря 2012 г.) присутствует вся </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<span class=\"caption-phone\">Работает горячая линия</span>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"questions-phone\">
\t\t\t\t\t<img src={{ 'assets/images/rect-phone.png'|theme }} class=\"img-fluid rect-phone\">
\t\t\t\t\t<div class=\"text-phone\">
\t\t\t\t\t\t<div class=\"text-phone-big\">Остались вопросы?<br></div>
\t\t\t\t\t\t<div class=\"text-phone-small\">Звоните прямо сейчас<br></div>
\t\t\t\t\t\t<div class=\"text-phone-big\">+7 (495) 380-25-00</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<span class=\"caption-phone\">Наша компания в цифрах</span>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"col-12 nopadding\">
\t\t\t\t\t<div id=\"carouselContent\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t<div class=\"carousel-item active text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">16</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Лет роста компании</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">500</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Адресов в нашей базе</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">17</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Офисов по всей москве</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center p-4\">
\t\t\t\t\t\t\t\t<p class=\"carousel-header\">30</p>
\t\t\t\t\t\t\t\t<p class=\"carousel-content\">Минут и документы готовы</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselContent\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"><img src={{ 'assets/images/vector-left.png'|theme }}></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselContent\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"><img src={{ 'assets/images/vector-right.png'|theme }}></span>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"col-12 nopadding\">
\t\t\t\t\t<div class=\"collapse-spoiler-2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-uradress\">Юридические адреса</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-uradress\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-urquestinons\">Дополнительные услуги</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-urquestinons\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-company\">Компания</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-company\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-partners\">Сотрудничество</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-partners\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-info\">Информация</button>
\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-info\">
\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row footer\">
\t\t\t\t<img src={{ 'assets/images/footer.png'|theme }} class=\"img-fluid footer-image\">
\t\t\t\t<p class=\"footer-text\">© «РаСоБи» 2006-2018. <br>Все права защищены.</p>
\t\t\t\t<p class=\"footer-text\">Использование материалов сайта - только с согласия администраци</p>
\t\t\t\t<p class=\"footer-text\">г. Москва, Большая Почтовая ул., д. 36, стр. 6-7-8</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t{% scripts %}
\t</body>
</html>", "W:\\domains\\uragent.com/themes/UragentTheme/pages/mobile-faq.htm", "");
    }
}
