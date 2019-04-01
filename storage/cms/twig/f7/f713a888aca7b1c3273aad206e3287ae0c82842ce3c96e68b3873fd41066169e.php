<?php

/* /home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/login/new-evaluation.htm */
class __TwigTemplate_9504d2a016f001fa0b957a4cf1a76a562f50c1d49c0f8c9ec079d2c2476b5789 extends Twig_Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
        echo "</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
\t    ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("evaluationform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t  </div>
\t</div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/login/new-evaluation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  37 => 10,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>{{ 'New evaluation'|_ }}</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
\t    {% component 'evaluationform' %}
\t  </div>
\t</div>
</div>
<br>", "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/login/new-evaluation.htm", "");
    }
}
