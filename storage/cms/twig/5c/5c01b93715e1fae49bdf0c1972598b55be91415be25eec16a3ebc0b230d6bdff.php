<?php

/* __string_template__ba7bcf1e29530e7528171e4da96106991edc88fae0ca8055d615822a28b68803 */
class __TwigTemplate_1953ed2dd472f385de33c713b738064c776f73b981205c90b599562527d63cde extends Twig_Template
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

    <label for=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</label>

    <select class=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " form-control\" name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" ";
        echo ($context["custom_attributes"] ?? null);
        echo ">

        ";
        // line 7
        if (($context["placeholder"] ?? null)) {
            // line 8
            echo "
            <option value=\"\">";
            // line 9
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
            echo "</option>

        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 14
            echo "
            <option value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_key", array()), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["option"], "o_key", array()) == ($context["default"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "o_label", array()), "html", null, true);
            echo "</option>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </select>

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
        return "__string_template__ba7bcf1e29530e7528171e4da96106991edc88fae0ca8055d615822a28b68803";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  84 => 21,  79 => 18,  66 => 15,  63 => 14,  59 => 13,  56 => 12,  50 => 9,  47 => 8,  45 => 7,  36 => 5,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} form-group\">

    <label for=\"{{ name }}\">{{ label }}</label>

    <select class=\"{{ class }} form-control\" name=\"{{ name }}\" {{ custom_attributes|raw }}>

        {% if placeholder %}

            <option value=\"\">{{ placeholder }}</option>

        {% endif %}

        {% for option in options %}

            <option value=\"{{ option.o_key }}\" {{ option.o_key == default ? 'selected' : '' }}>{{ option.o_label }}</option>

        {% endfor %}

    </select>

    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

</div>", "__string_template__ba7bcf1e29530e7528171e4da96106991edc88fae0ca8055d615822a28b68803", "");
    }
}
