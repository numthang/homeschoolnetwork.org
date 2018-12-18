<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/magic-forms.htm */
class __TwigTemplate_e5eabb24fcd256d27bd84fbc2c324dcafbb395a59fe803f44e2e6e8b0b9fe4f9 extends Twig_Template
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
        <h3>Magic Forms</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("emptyForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "     ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "    </div>
  </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/magic-forms.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Magic Forms</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      {% component 'emptyForm' %}
     {% component 'genericForm' %}
    </div>
  </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/magic-forms.htm", "");
    }
}
