<?php

/* W:\domains\uragent.com/themes/UragentTheme/layouts/fallback.htm */
class __TwigTemplate_9e657a3547e7025cf9c4af06e80a0bf458b0f3cfe34b17da8f72c78b0628717f extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "W:\\domains\\uragent.com/themes/UragentTheme/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "W:\\domains\\uragent.com/themes/UragentTheme/layouts/fallback.htm", "");
    }
}
