<?php

/* /home/vsites/homeschool.in.th/plugins/renatio/formbuilder/components/renderform/state_select_options.htm */
class __TwigTemplate_7bd27660090da53c6a17bd9d16cb934227c63a4cd0814ec0be9ea7a17c6406a4 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 2
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/renatio/formbuilder/components/renderform/state_select_options.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for id, name in options %}
    <option value=\"{{ id }}\">{{ name }}</option>
{% endfor %}", "/home/vsites/homeschool.in.th/plugins/renatio/formbuilder/components/renderform/state_select_options.htm", "");
    }
}
