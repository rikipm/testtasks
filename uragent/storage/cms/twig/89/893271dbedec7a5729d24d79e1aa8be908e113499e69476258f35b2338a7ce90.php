<?php

/* W:\domains\uragent.com/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_5933f8cf723b9f908ed9e303c7562e1bc9b709fabf6309529a03631391b142f8 extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "W:\\domains\\uragent.com/plugins/rainlab/pages/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.content|raw }}", "W:\\domains\\uragent.com/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
