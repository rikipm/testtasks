<?php

/* W:\domains\uragent.com/themes/UragentTheme/layouts/desktop-faq.htm */
class __TwigTemplate_1d4b9e977713f07f5bf635f0fc62d5411efc3b939bfe13f247c5d56dde32cdbd extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "questionsAndAnswers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 2
            echo "
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "






<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "\t\t ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 20
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 23
        echo "\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
\t\t<title>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "title", array()), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<div class=\"container-fluid nopadding\">
\t\t\t<div class=\"desktopHeader\">
\t\t\t\t<div class=\"row nopadding\">
\t\t\t\t\t<div class=\"header-bar-1 col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"header-bar-1 col-lg-2 col-md-4 nopadding\">
\t\t\t\t\t\t<a class=\"menuButton\" href=\"#\"><img src=";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-help.png");
        echo " class=\"menuIcon\">Помощь</a>
\t\t\t\t\t\t<a class=\"menuButton\" href=\"#\"><img src=";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-cabinet.png");
        echo " class=\"menuIcon\">Кабинет</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-bar-2 col-lg-4 col-md-4 nopadding\">
\t\t\t\t\t\t<a class=\"menuButton2 d-none d-lg-inline\" href=\"#\"><img src=";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-like.png");
        echo " class=\"menuIcon\">16 лет на рынке</a>
\t\t\t\t\t\t<a class=\"menuButton2\" href=\"#\"><img src=";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-money.png");
        echo " class=\"menuIcon\">Финансовые гарантии</a>
\t\t\t\t\t\t<a class=\"menuButton2 d-none d-lg-inline\" href=\"#\"><img src=";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-doc.png");
        echo " class=\"menuIcon\">100% регистрация</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-bar-1 col-lg-4 col-md-4 nopadding\">
\t\t\t\t\t\t<a class=\"menuButton2\" href=\"#\"><img src=";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-star.png");
        echo " class=\"menuIcon\">Избранное: 0 адресов</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-bar-1 col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row desk-header\">
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-1 header\" style=\"padding: 0%; margin-left: -3%;\">
\t\t\t\t\t\t<img src=";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/header-logo.png");
        echo " class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-2 header-textblock\">
\t\t\t\t\t\t<h1 class=\"header-text\"><span class=\"header-text-red\">UR</span>ADRESA</h1>
\t\t\t\t\t\t<h5 class=\"header-subtitle\">cамая полная база <br> юр. адресов в Москве</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-5 header-search nopadding\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<img src=";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-search.png");
        echo " style=\"width: 5%;\">
\t\t\t\t\t\t\t<input class=\"form-control\" style=\"display: inline; width: 70%;\" type=\"text\" placeholder=\"Поиск по району или улице\" id=\"search-text-input\" name=\"search\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary search-button\" style=\"width: 21%;\">найти</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-2\" style=\"text-align: right;\">
\t\t\t\t\t\t<span class=\"desk-header-phone\">";
        // line 62
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</span><br>
\t\t\t\t\t\t<a class=\"desk-header-call\" href=\"#\">Подобрать юр. адрес</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row desk-header\">
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"d-none d-md-block d-lg-none nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Каталог адресов</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Услуги</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Гарантии</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Отзывы</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Оплата и доставка</a></div>
\t\t\t\t\t<div class=\"col-1 header-menu-button-div d-none d-lg-block nopadding\"><a class=\"header-menu-button\" href=\"#\">Акции</a></div>
\t\t\t\t\t<div class=\"col-1 header-menu-button-div d-none d-lg-block nopadding\"><a class=\"header-menu-button\" href=\"#\">О компании</a></div>
\t\t\t\t\t<div class=\"col-1 header-menu-button-div d-none d-lg-block nopadding\"><a class=\"header-menu-button\" href=\"#\">Контакты</a></div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"padding: 4%;\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 nopadding\">
\t\t\t\t\t\t<span class=\"caption-desktop\">FAQ. Часто задаваемые вопросы</span><br>
\t\t\t\t\t\t<span class=\"route-text-desktop\">Главная / FAQ</span>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t<div class=\"col-lg-3 col-md-4\">
\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-general\">Общие вопросы</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-general\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs\">Вопросы по процессу работы</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-dillerquestions\">Вопросы по диллерству и сотрудничеству</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-dillerquestions\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons2\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons2\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs2\">Вопросы по процессу работы</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs2\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-8\">
\t\t\t\t\t<div class=\"header-search\" style=\"padding-top: 5%;\">
\t\t\t\t\t\t<input class=\"form-control\" style=\"display: inline; width: 70%;\" type=\"text\" placeholder=\"Быстрый поиск по вопросам\" id=\"search-text-input\" name=\"search\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary search-button\" style=\"width: 25%;\">найти</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questionsAndAnswers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currentQuestion"]) {
            // line 153
            echo "    \t\t\t\t\t<div class=\"contentblock col-12\">
    \t\t\t\t\t\t<h1 class=\"content-header\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentQuestion"], "question", array()), "html", null, true);
            echo "</h1>
    \t\t\t\t\t\t<p class=\"content-text\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentQuestion"], "answer", array()), "html", null, true);
            echo "</p>
    \t\t\t\t\t</div>
    \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentQuestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 hotline-text\">Работает горячая линия</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row rect-phone\" style=\"position: relative;\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"text-phone\">
\t\t\t\t\t\t\t<div class=\"text-phone-big\">Остались вопросы?<br></div>
\t\t\t\t\t\t\t<div class=\"text-phone-small\">Звоните прямо сейчас<br></div>
\t\t\t\t\t\t\t<div class=\"text-phone-big\">";
        // line 172
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<img src=";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/woman.png");
        echo " class=\"woman-img\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 hotline-text\">Наша компания в цифрах</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">";
        // line 188
        echo twig_escape_filter($this->env, ($context["carousel1"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Лет роста компании</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">";
        // line 192
        echo twig_escape_filter($this->env, ($context["carousel2"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Адресов в нашей базе</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">";
        // line 196
        echo twig_escape_filter($this->env, ($context["carousel3"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Офисов по всей москве</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">";
        // line 200
        echo twig_escape_filter($this->env, ($context["carousel4"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Минут и документы готовы</p>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\" style=\"background: #1E4163;\"></div>
\t\t\t\t\t<div class=\"col-md-12 d-none d-md-block d-lg-none nopadding\">
\t\t\t\t\t\t<div class=\"collapse-spoiler-2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-uradress\">Юридические адреса</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-uradress\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-urquestinons\">Дополнительные услуги</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-urquestinons\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-company\">Компания</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-company\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-partners\">Сотрудничество</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-partners\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-info\">Информация</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-info\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\" style=\"background: #1E4163;\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"background: #336799\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-4\" style=\"margin-top: 5%\">
\t\t\t\t\t\t<div class=\"footer-text-small\">Любые виды оплаты и безналичный расчет!</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-8\">
\t\t\t\t\t\t<img src=";
        // line 327
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-master.png");
        echo " class=\"payment-type\">
\t\t\t\t\t\t<img src=";
        // line 328
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-qiwi.png");
        echo " class=\"payment-type\">
\t\t\t\t\t\t<img src=";
        // line 329
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-visa.png");
        echo " class=\"payment-type\">
\t\t\t\t\t\t<img src=";
        // line 330
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-webmoney.png");
        echo " class=\"payment-type\">
\t\t\t\t\t\t<img src=";
        // line 331
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-yandex.png");
        echo " class=\"payment-type\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 nopadding\">
\t\t\t\t\t\t\t<img src=";
        // line 336
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico-man.png");
        echo " class=\"footer-icon img-fluid\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-9 nopadding\">
\t\t\t\t\t\t\t<div class=\"footer-text-small\">Бесплатная доставка всех документов по Москве</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"background: #336799\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<div class=\"row nopadding\">
\t\t\t\t\t\t\t<div class=\"col-4 header\" style=\"padding: 0%; margin-left: -3%;\">
\t\t\t\t\t\t\t\t<img src=";
        // line 351
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/header-logo.png");
        echo " class=\"img-fluid\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 header-textblock\">
\t\t\t\t\t\t\t\t<h1 class=\"footer-text-white\"><span class=\"footer-text-white\">UR</span>ADRESA</h1>
\t\t\t\t\t\t\t\t<h5 class=\"footer-text-subtitle\">cамая полная база <br> юр. адресов в Москве</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-5 d-md-none d-lg-block\">
\t\t\t\t\t\t<div class=\"footer-bottom\" style=\"text-align: center;\">РаСоБи» 2006-2018. Все права защищены.<br> Использование материалов сайта - только с согласия администрации<br> г. Москва, Большая Почтовая ул., д. 36, стр. 6-7-8</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row d-none d-md-block d-lg-none\" style=\"background: #336799\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"footer-bottom\" style=\"text-align: center;\">РаСоБи» 2006-2018. Все права защищены.<br> Использование материалов сайта - только с согласия администрации<br> г. Москва, Большая Почтовая ул., д. 36, стр. 6-7-8</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t</div>
    \t";
        // line 371
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 372
        echo "\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\uragent.com/themes/UragentTheme/layouts/desktop-faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 372,  497 => 371,  474 => 351,  456 => 336,  448 => 331,  444 => 330,  440 => 329,  436 => 328,  432 => 327,  302 => 200,  295 => 196,  288 => 192,  281 => 188,  266 => 176,  259 => 172,  243 => 158,  234 => 155,  230 => 154,  227 => 153,  223 => 152,  130 => 62,  121 => 56,  110 => 48,  100 => 41,  94 => 38,  90 => 37,  86 => 36,  80 => 33,  76 => 32,  65 => 24,  62 => 23,  60 => 19,  56 => 20,  53 => 19,  50 => 18,  35 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for fields in extraData.questionsAndAnswers %}

    
{% endfor %}







<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t {% styles %}
\t\t {% put scripts %}
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
\t\t{% endput %}
\t\t<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
\t\t<title>{{ this.title }}</title>
\t</head>
\t<body>
\t\t<div class=\"container-fluid nopadding\">
\t\t\t<div class=\"desktopHeader\">
\t\t\t\t<div class=\"row nopadding\">
\t\t\t\t\t<div class=\"header-bar-1 col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"header-bar-1 col-lg-2 col-md-4 nopadding\">
\t\t\t\t\t\t<a class=\"menuButton\" href=\"#\"><img src={{ 'assets/images/ico-help.png'|theme }} class=\"menuIcon\">Помощь</a>
\t\t\t\t\t\t<a class=\"menuButton\" href=\"#\"><img src={{ 'assets/images/ico-cabinet.png'|theme }} class=\"menuIcon\">Кабинет</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-bar-2 col-lg-4 col-md-4 nopadding\">
\t\t\t\t\t\t<a class=\"menuButton2 d-none d-lg-inline\" href=\"#\"><img src={{ 'assets/images/ico-like.png'|theme }} class=\"menuIcon\">16 лет на рынке</a>
\t\t\t\t\t\t<a class=\"menuButton2\" href=\"#\"><img src={{ 'assets/images/ico-money.png'|theme }} class=\"menuIcon\">Финансовые гарантии</a>
\t\t\t\t\t\t<a class=\"menuButton2 d-none d-lg-inline\" href=\"#\"><img src={{ 'assets/images/ico-doc.png'|theme }} class=\"menuIcon\">100% регистрация</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-bar-1 col-lg-4 col-md-4 nopadding\">
\t\t\t\t\t\t<a class=\"menuButton2\" href=\"#\"><img src={{ 'assets/images/ico-star.png'|theme }} class=\"menuIcon\">Избранное: 0 адресов</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-bar-1 col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row desk-header\">
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-1 header\" style=\"padding: 0%; margin-left: -3%;\">
\t\t\t\t\t\t<img src={{ 'assets/images/header-logo.png'|theme }} class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-2 header-textblock\">
\t\t\t\t\t\t<h1 class=\"header-text\"><span class=\"header-text-red\">UR</span>ADRESA</h1>
\t\t\t\t\t\t<h5 class=\"header-subtitle\">cамая полная база <br> юр. адресов в Москве</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-5 header-search nopadding\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<img src={{ 'assets/images/ico-search.png'|theme }} style=\"width: 5%;\">
\t\t\t\t\t\t\t<input class=\"form-control\" style=\"display: inline; width: 70%;\" type=\"text\" placeholder=\"Поиск по району или улице\" id=\"search-text-input\" name=\"search\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary search-button\" style=\"width: 21%;\">найти</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-2\" style=\"text-align: right;\">
\t\t\t\t\t\t<span class=\"desk-header-phone\">{{ phone }}</span><br>
\t\t\t\t\t\t<a class=\"desk-header-call\" href=\"#\">Подобрать юр. адрес</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row desk-header\">
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"d-none d-md-block d-lg-none nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Каталог адресов</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Услуги</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Гарантии</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Отзывы</a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-2 header-menu-button-div\"><a class=\"header-menu-button\" href=\"#\">Оплата и доставка</a></div>
\t\t\t\t\t<div class=\"col-1 header-menu-button-div d-none d-lg-block nopadding\"><a class=\"header-menu-button\" href=\"#\">Акции</a></div>
\t\t\t\t\t<div class=\"col-1 header-menu-button-div d-none d-lg-block nopadding\"><a class=\"header-menu-button\" href=\"#\">О компании</a></div>
\t\t\t\t\t<div class=\"col-1 header-menu-button-div d-none d-lg-block nopadding\"><a class=\"header-menu-button\" href=\"#\">Контакты</a></div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"padding: 4%;\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 nopadding\">
\t\t\t\t\t\t<span class=\"caption-desktop\">FAQ. Часто задаваемые вопросы</span><br>
\t\t\t\t\t\t<span class=\"route-text-desktop\">Главная / FAQ</span>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t<div class=\"col-lg-3 col-md-4\">
\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-general\">Общие вопросы</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-general\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs\">Вопросы по процессу работы</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-dillerquestions\">Вопросы по диллерству и сотрудничеству</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-dillerquestions\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-urquestinons2\">Вопросы по юр. адресам</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-urquestinons2\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler-desktop\">
\t\t\t\t\t\t\t<button class=\"collapse-button btn-block\" data-toggle=\"collapse\" data-target=\"#collapse-processquestiongs2\">Вопросы по процессу работы</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse-content\" id=\"collapse-processquestiongs2\">
\t\t\t\t\t\t\t\t<a>Регистрировать предприятие на подобные адреса это законно?</a><br><br>
\t\t\t\t\t\t\t\t<a>Можно ли будет использовать офис для встреч?</a><br><br>
\t\t\t\t\t\t\t\t<a>В чем отличие массовых адресов от немассовых?</a><br><br>
\t\t\t\t\t\t\t\t<a>У Вас есть немассовые адреса?</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 col-md-8\">
\t\t\t\t\t<div class=\"header-search\" style=\"padding-top: 5%;\">
\t\t\t\t\t\t<input class=\"form-control\" style=\"display: inline; width: 70%;\" type=\"text\" placeholder=\"Быстрый поиск по вопросам\" id=\"search-text-input\" name=\"search\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary search-button\" style=\"width: 25%;\">найти</button>
\t\t\t\t\t</div>
\t\t\t\t\t{% for currentQuestion in questionsAndAnswers %}
    \t\t\t\t\t<div class=\"contentblock col-12\">
    \t\t\t\t\t\t<h1 class=\"content-header\">{{ currentQuestion.question }}</h1>
    \t\t\t\t\t\t<p class=\"content-text\">{{ currentQuestion.answer }}</p>
    \t\t\t\t\t</div>
    \t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 hotline-text\">Работает горячая линия</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row rect-phone\" style=\"position: relative;\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"text-phone\">
\t\t\t\t\t\t\t<div class=\"text-phone-big\">Остались вопросы?<br></div>
\t\t\t\t\t\t\t<div class=\"text-phone-small\">Звоните прямо сейчас<br></div>
\t\t\t\t\t\t\t<div class=\"text-phone-big\">{{ phone }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<img src={{ 'assets/images/woman.png'|theme }} class=\"woman-img\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 hotline-text\">Наша компания в цифрах</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">{{ carousel1 }}</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Лет роста компании</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">{{ carousel2 }}</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Адресов в нашей базе</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">{{ carousel3 }}</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Офисов по всей москве</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-3\">
\t\t\t\t\t\t<p class=\"carousel-header\">{{ carousel4 }}</p>
\t\t\t\t\t\t<p class=\"carousel-content\">Минут и документы готовы</p>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row nopadding\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\" style=\"background: #1E4163;\"></div>
\t\t\t\t\t<div class=\"col-md-12 d-none d-md-block d-lg-none nopadding\">
\t\t\t\t\t\t<div class=\"collapse-spoiler-2\">
\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-uradress\">Юридические адреса</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-uradress\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-urquestinons\">Дополнительные услуги</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-urquestinons\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-company\">Компания</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-company\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-partners\">Сотрудничество</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-partners\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse-spoiler2\">
\t\t\t\t\t\t\t<button class=\"collapse-button2 btn-block\" data-toggle=\"collapse\" data-target=\"#collapse2-info\">Информация</button>
\t\t\t\t\t\t\t<div class=\"collapse collapse2-content\" id=\"collapse2-info\">
\t\t\t\t\t\t\t\t<hr class=\"arrow-hr\">
\t\t\t\t\t\t\t\t<div class=\"arrow-up\"></div>
\t\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block info-footer-block\">
\t\t\t\t\t\t<span class=\"collapse-button2Desk nopadding\">Юридические адреса</span>
\t\t\t\t\t\t<div class=\"footer-collapse-content\">
\t\t\t\t\t\t\t<a>Каталог юрадресов</a><br><br>
\t\t\t\t\t\t\t<a>Немассовые адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса с почтовым обслуживанием</a><br><br>
\t\t\t\t\t\t\t<a>Фактические адреса</a><br><br>
\t\t\t\t\t\t\t<a>Адреса от собственников</a><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\" style=\"background: #1E4163;\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"background: #336799\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-4\" style=\"margin-top: 5%\">
\t\t\t\t\t\t<div class=\"footer-text-small\">Любые виды оплаты и безналичный расчет!</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 col-md-8\">
\t\t\t\t\t\t<img src={{ 'assets/images/ico-master.png'|theme }} class=\"payment-type\">
\t\t\t\t\t\t<img src={{ 'assets/images/ico-qiwi.png'|theme }} class=\"payment-type\">
\t\t\t\t\t\t<img src={{ 'assets/images/ico-visa.png'|theme }} class=\"payment-type\">
\t\t\t\t\t\t<img src={{ 'assets/images/ico-webmoney.png'|theme }} class=\"payment-type\">
\t\t\t\t\t\t<img src={{ 'assets/images/ico-yandex.png'|theme }} class=\"payment-type\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 d-none d-lg-block d-xl-block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 nopadding\">
\t\t\t\t\t\t\t<img src={{ 'assets/images/ico-man.png'|theme }} class=\"footer-icon img-fluid\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-9 nopadding\">
\t\t\t\t\t\t\t<div class=\"footer-text-small\">Бесплатная доставка всех документов по Москве</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"background: #336799\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<div class=\"row nopadding\">
\t\t\t\t\t\t\t<div class=\"col-4 header\" style=\"padding: 0%; margin-left: -3%;\">
\t\t\t\t\t\t\t\t<img src={{ 'assets/images/header-logo.png'|theme }} class=\"img-fluid\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 header-textblock\">
\t\t\t\t\t\t\t\t<h1 class=\"footer-text-white\"><span class=\"footer-text-white\">UR</span>ADRESA</h1>
\t\t\t\t\t\t\t\t<h5 class=\"footer-text-subtitle\">cамая полная база <br> юр. адресов в Москве</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-5 d-md-none d-lg-block\">
\t\t\t\t\t\t<div class=\"footer-bottom\" style=\"text-align: center;\">РаСоБи» 2006-2018. Все права защищены.<br> Использование материалов сайта - только с согласия администрации<br> г. Москва, Большая Почтовая ул., д. 36, стр. 6-7-8</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t\t<div class=\"row d-none d-md-block d-lg-none\" style=\"background: #336799\">
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t\t\t<div class=\"footer-bottom\" style=\"text-align: center;\">РаСоБи» 2006-2018. Все права защищены.<br> Использование материалов сайта - только с согласия администрации<br> г. Москва, Большая Почтовая ул., д. 36, стр. 6-7-8</div>
\t\t\t\t<div class=\"col-lg-1 d-none d-lg-block nopadding\"></div>
\t\t\t</div>
\t\t</div>
    \t{% scripts %}
\t</body>
</html>", "W:\\domains\\uragent.com/themes/UragentTheme/layouts/desktop-faq.htm", "");
    }
}
