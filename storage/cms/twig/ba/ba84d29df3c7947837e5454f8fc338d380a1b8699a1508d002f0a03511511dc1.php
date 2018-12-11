<?php

/* __string_template__075c30434d318b277adf5a3bdcda70013e4e3998233d9af0cc206d0bd8cee0f0 */
class __TwigTemplate_5c3e7f300fc44e37f768940f0393537ba77744cd645692fae0f5b8d806c50efa extends Twig_Template
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
        echo " checkbox\">

    <label>
        <input ";
        // line 4
        echo ((($context["default"] ?? null)) ? ("checked") : (""));
        echo "
            name=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
            class=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"
            value=\"1\"
            type=\"checkbox\"
            ";
        // line 9
        echo ($context["custom_attributes"] ?? null);
        echo "
        >
        ";
        // line 11
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
    </label>

    ";
        // line 14
        if (($context["comment"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 15
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__075c30434d318b277adf5a3bdcda70013e4e3998233d9af0cc206d0bd8cee0f0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 14,  49 => 11,  44 => 9,  38 => 6,  34 => 5,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} checkbox\">

    <label>
        <input {{ default ? 'checked' : '' }}
            name=\"{{ name }}\"
            class=\"{{ class }}\"
            value=\"1\"
            type=\"checkbox\"
            {{ custom_attributes|raw }}
        >
        {{ label }}
    </label>

    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

</div>", "__string_template__075c30434d318b277adf5a3bdcda70013e4e3998233d9af0cc206d0bd8cee0f0", "");
    }
}
