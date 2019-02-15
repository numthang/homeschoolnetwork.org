<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/course.htm */
class __TwigTemplate_23b454dc10501adc08a3c57ef5f5814656b65af5cf323260e428d2219148b90c extends Twig_Template
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
        $context["courses"] = twig_get_attribute($this->env, $this->source, ($context["courses"] ?? null), "courses", array());
        // line 2
        echo "
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<label>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Courses"));
        echo " </label>
\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" onChange=\"if(this.value) location.href='/login/edit/course/'+this.value; else location.href='/login/new/course';\" style=\"width:100%\">
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
            echo ">";
            if (twig_get_attribute($this->env, $this->source, $context["course"], "template", array())) {
                echo " [";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Template"));
                echo "] ";
            } else {
                echo " [";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
                echo "] ";
            }
            echo " ";
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
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  43 => 9,  39 => 8,  35 => 7,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set courses = courses.courses %}

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<label>{{ 'Courses'|_ }} </label>
\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" onChange=\"if(this.value) location.href='/login/edit/course/'+this.value; else location.href='/login/new/course';\" style=\"width:100%\">
\t\t\t<option value=\"\">{{ 'New Course'|_ }}</option>
\t\t\t{% for course in courses %}
\t\t\t<option value=\"{{ course.id }}\" {{ builderDetails.identifierValue == course.id ? 'selected' : '' }}>{% if course.template %} [{{ 'Template'|_ }}] {% else %} [{{ user.name }}] {% endif %} {{ course.name }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/course.htm", "");
    }
}
