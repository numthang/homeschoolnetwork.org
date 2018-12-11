<?php

/* __string_template__b32fb743a85cba0d50d21844db0e68896997c21e0969d5d8f86d3eb3d8a5443d */
class __TwigTemplate_2bdf4f999c9800758a79d9fa7a2d83f2520d70cdb8afb7f9dcdd1bed433a99e1 extends Twig_Template
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
        $context["values"] = twig_split_filter($this->env, ($context["default"] ?? null), "|");
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 7
            echo "
        <label class=\"checkbox-inline\">
            <input ";
            // line 9
            echo ((((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["values"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array())] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["option"], "o_key", array()))) ? ("checked") : (""));
            echo "
                type=\"checkbox\"
                name=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[]\"
                class=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"
                id=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_label", array()), "html", null, true);
            echo "\"
                value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_key", array()), "html", null, true);
            echo "\"
                ";
            // line 15
            echo ($context["custom_attributes"] ?? null);
            echo "
            >
            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_label", array()), "html", null, true);
            echo "
        </label>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        if (($context["comment"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 23
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b32fb743a85cba0d50d21844db0e68896997c21e0969d5d8f86d3eb3d8a5443d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 23,  107 => 22,  104 => 21,  86 => 17,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  60 => 9,  56 => 7,  38 => 6,  36 => 5,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} form-group\">

    <label class=\"btn-block\" for=\"{{ name }}\">{{ label }}</label>

    {% set values = default|split('|') %}
    {% for option in options %}

        <label class=\"checkbox-inline\">
            <input {{ values[loop.index0] == option.o_key ? 'checked' : '' }}
                type=\"checkbox\"
                name=\"{{ name }}[]\"
                class=\"{{ class }}\"
                id=\"{{ option.o_label }}\"
                value=\"{{ option.o_key }}\"
                {{ custom_attributes|raw }}
            >
            {{ option.o_label }}
        </label>

    {% endfor %}

    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

</div>", "__string_template__b32fb743a85cba0d50d21844db0e68896997c21e0969d5d8f86d3eb3d8a5443d", "");
    }
}
