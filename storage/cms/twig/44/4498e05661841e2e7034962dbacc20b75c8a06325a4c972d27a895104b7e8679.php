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
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<label>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Courses"));
        echo " </label>
\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" onChange=\"if(this.value) location.href='/login/edit/course/'+this.value; else location.href='/login/add/course';\" style=\"width:100%\">
\t\t\t<option value=\"\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New Course"));
        echo "</option>
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 9
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "identifierValue", array()) == twig_get_attribute($this->env, $this->source, $context["course"], "id", array()))) ? ("selected") : (""));
            echo ">&bullet; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</select>
\t</div>
</div>
  <!--<ul class=\"list-group filter-list-group\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 16
            echo "    <li class=\"list-group-item\" ><a href=\"/login/edit/course/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", array()), "html", null, true);
            echo "\" style=\"font-size: 18px; \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>-->



                   

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
        return array (  77 => 18,  66 => 16,  62 => 15,  56 => 11,  43 => 9,  39 => 8,  35 => 7,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set courses = __SELF__.courses %}

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<label>{{ 'Courses'|_ }} </label>
\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" onChange=\"if(this.value) location.href='/login/edit/course/'+this.value; else location.href='/login/add/course';\" style=\"width:100%\">
\t\t\t<option value=\"\">{{ 'New Course'|_ }}</option>
\t\t\t{% for course in courses %}
\t\t\t<option value=\"{{ course.id }}\" {{ builderDetails.identifierValue == course.id ? 'selected' : '' }}>&bullet; {{ course.name }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>
  <!--<ul class=\"list-group filter-list-group\">
    {% for course in courses %}
    <li class=\"list-group-item\" ><a href=\"/login/edit/course/{{ course.id }}\" style=\"font-size: 18px; \">{{ course.name }}</a></li>
    {% endfor %}
  </ul>-->



                   

", "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courses/default.htm", "");
    }
}
