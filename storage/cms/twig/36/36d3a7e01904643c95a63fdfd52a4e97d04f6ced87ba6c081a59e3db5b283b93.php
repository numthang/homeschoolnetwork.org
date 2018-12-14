<?php

/* /home/vsites/homeschool.in.th/plugins/watchlearn/movies/components/actors/default.htm */
class __TwigTemplate_095c3a1a34f9be4c7c12e55273ecf21191c542fcb5f8f747dc3bd415814c344d extends Twig_Template
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
        $context["actors"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "actors", array());
        // line 2
        echo "
<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "lastname", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/watchlearn/movies/components/actors/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set actors = __SELF__.actors %}

<ul>
    {% for actor in actors %}
        <li>{{ actor.name }} {{ actor.lastname }}</li>
    {% endfor %}
</ul>", "/home/vsites/homeschool.in.th/plugins/watchlearn/movies/components/actors/default.htm", "");
    }
}
