<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/layouts/fallback.htm */
class __TwigTemplate_e22a73d3a58e3995f66ce3c1d33e1eade1abe8f644b4375210657e59e5ca2680 extends Twig_Template
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
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/home/vsites/homeschool.in.th/themes/responsiv-flat/layouts/fallback.htm", "");
    }
}
