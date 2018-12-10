<?php

/* /home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courses/default.htm */
class __TwigTemplate_50d75b90b0c13bf67cbd458e6327d67afc3bf48acd4fec898625a3fe6b44e38e extends Twig_Template
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
        $context["courses"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "courses", array());
        // line 2
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
      Courses
  </div>
  <ul class=\"list-group filter-list-group\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 9
            echo "    <li class=\"list-group-item\" ><a href=\"#\" style=\"font-size: 18px; \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
</div>




                   

";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courses/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  37 => 9,  33 => 8,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set courses = __SELF__.courses %}

<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
      Courses
  </div>
  <ul class=\"list-group filter-list-group\">
    {% for course in courses %}
    <li class=\"list-group-item\" ><a href=\"#\" style=\"font-size: 18px; \">{{ course.name }}</a></li>
    {% endfor %}
  </ul>
</div>




                   

", "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courses/default.htm", "");
    }
}
