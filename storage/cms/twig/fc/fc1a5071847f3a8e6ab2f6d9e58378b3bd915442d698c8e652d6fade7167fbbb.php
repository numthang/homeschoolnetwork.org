<?php

/* __string_template__d7c483fe6ecf45d04503e59460f412292974364364b7a6a2c5076b24baa1ab8a */
class __TwigTemplate_bb4745fc691c85a5d7563ddcb16f44586e296d00a654b9982d4142c28e13eefc extends Twig_Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">

    <label class=\"btn-block\" for=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</label>

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 6
            echo "
        <label class=\"radio-inline\">
            <input ";
            // line 8
            echo (((($context["default"] ?? null) == twig_get_attribute($this->env, $this->source, $context["option"], "o_key", array()))) ? ("checked") : (""));
            echo "
                type=\"radio\"
                name=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                class=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"
                id=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_label", array()), "html", null, true);
            echo "\"
                value=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_key", array()), "html", null, true);
            echo "\"
                ";
            // line 14
            echo ($context["custom_attributes"] ?? null);
            echo "
            >
            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_label", array()), "html", null, true);
            echo "
        </label>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        if (($context["comment"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 22
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__d7c483fe6ecf45d04503e59460f412292974364364b7a6a2c5076b24baa1ab8a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  83 => 21,  80 => 20,  70 => 16,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  44 => 8,  40 => 6,  36 => 5,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} form-group\">

    <label class=\"btn-block\" for=\"{{ name }}\">{{ label }}</label>

    {% for option in options %}

        <label class=\"radio-inline\">
            <input {{ default == option.o_key ? 'checked' : '' }}
                type=\"radio\"
                name=\"{{ name }}\"
                class=\"{{ class }}\"
                id=\"{{ option.o_label }}\"
                value=\"{{ option.o_key }}\"
                {{ custom_attributes|raw }}
            >
            {{ option.o_label }}
        </label>

    {% endfor %}

    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

</div>", "__string_template__d7c483fe6ecf45d04503e59460f412292974364364b7a6a2c5076b24baa1ab8a", "");
    }
}
