<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/flash.htm */
class __TwigTemplate_5bbb0ace828338f8c21c57856748788f543a97c58ff0811fb4e80617b92f5ade extends Twig_Template
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
        echo "<p data-control=\"flash-message\" data-interval=\"20\" class=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/flash.htm";
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
        return new Twig_Source("<p data-control=\"flash-message\" data-interval=\"20\" class=\"{{ type }}\">{{ message }}<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/flash.htm", "");
    }
}
