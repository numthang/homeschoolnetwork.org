<?php

/* __string_template__a970c2268c93dc8fd937481dbb1bf361f5a85ff3e835a3a1a51bfcfb0493e99a */
class __TwigTemplate_7f7ec8984420180bfc31f107bfb59a5f544dbe856fb9a46d0359edefd453b8cf extends Twig_Template
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

    <input type=\"text\"
           name=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
           value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["default"] ?? null), "html", null, true);
        echo "\"
           class=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " form-control\"
           placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\"
           ";
        // line 10
        echo ($context["custom_attributes"] ?? null);
        echo "
    >

    ";
        // line 13
        if (($context["comment"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 14
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a970c2268c93dc8fd937481dbb1bf361f5a85ff3e835a3a1a51bfcfb0493e99a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  59 => 13,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} form-group\">

    <label for=\"{{ name }}\">{{ label }}</label>

    <input type=\"text\"
           name=\"{{ name }}\"
           value=\"{{ default }}\"
           class=\"{{ class }} form-control\"
           placeholder=\"{{ placeholder }}\"
           {{ custom_attributes|raw }}
    >

    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

</div>", "__string_template__a970c2268c93dc8fd937481dbb1bf361f5a85ff3e835a3a1a51bfcfb0493e99a", "");
    }
}
