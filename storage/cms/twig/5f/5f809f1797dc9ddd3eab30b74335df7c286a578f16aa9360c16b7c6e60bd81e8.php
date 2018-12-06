<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/add-course.htm */
class __TwigTemplate_627e38a918ed2b5945f719d10611707af24183680d45ddbb71fd5edf0fd198aa extends Twig_Template
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
    <div class=\"container\">
        <h3>Add New Course for ... </h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courses"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "        </div>
        <div class=\"col-md-8\">
           ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courseform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/add-course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Add New Course for ... </h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            {% component 'courses' %}
        </div>
        <div class=\"col-md-8\">
           {% component 'courseform' %}
        </div>
    </div>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/add-course.htm", "");
    }
}
