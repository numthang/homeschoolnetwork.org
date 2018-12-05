<?php

/* /home/vsites/homeschool.in.th/plugins/rainlab/builder/components/recorddetails/default.htm */
class __TwigTemplate_371e31ab96171d229aed699d70225688d977f544d07a029a5e64811bb62b899f extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/rainlab/builder/components/recorddetails/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = __SELF__.record %}
{% set displayColumn = __SELF__.displayColumn %}
{% set notFoundMessage = __SELF__.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "/home/vsites/homeschool.in.th/plugins/rainlab/builder/components/recorddetails/default.htm", "");
    }
}
