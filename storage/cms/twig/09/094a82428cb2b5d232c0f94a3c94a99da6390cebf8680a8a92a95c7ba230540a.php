<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/edit-course.htm */
class __TwigTemplate_fdc65ad5be7e835cbee3c81255f35744a7f5a0757c83af4b484a7caa3295f439 extends Twig_Template
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
        echo "<section id=\"layout-title\">
\t\t<div class=\"container\">
        <h3>";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Edit course"));
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
        echo " </h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courses"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "          ";
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", array());
        // line 12
        echo "          ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 13
        echo "          ";
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 14
        echo "          ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courseform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "        </div>
    </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/edit-course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  39 => 10,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
\t\t<div class=\"container\">
        <h3>{{ 'Edit course'|_ }} - {{ record.name }} </h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          {% component 'courses' %}
          {% set record = builderDetails.record %}
          {% set displayColumn = builderDetails.displayColumn %}
          {% set notFoundMessage = builderDetails.notFoundMessage %}
          {% component 'courseform' %}
        </div>
    </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/edit-course.htm", "");
    }
}
