<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/new-course.htm */
class __TwigTemplate_f1f75e6dbe427a5da4f48b17996b013309db28da518eff7a637234cf400d314d extends Twig_Template
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
        <h3>";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
        echo "</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("login/course.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "          ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courseform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "        </div>
    </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/new-course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  41 => 11,  37 => 10,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>{{ 'New course'|_ }}</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          {% partial 'login/course.htm' %}
          {% component 'courseform' %}
        </div>
    </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/new-course.htm", "");
    }
}
