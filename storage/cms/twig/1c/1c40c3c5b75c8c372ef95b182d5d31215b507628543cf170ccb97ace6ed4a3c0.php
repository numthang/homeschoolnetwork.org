<?php

/* __string_template__be34a2ca1710e87b67e134d71fa6703f9764897f827ff797d8b7d2d3e2292f3e */
class __TwigTemplate_2e9b2379bf0410b61a6d26b7a7358e9fead56b3f9e013b87c8ac57a56b741bc4 extends Twig_Template
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

    <textarea name=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
              class=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " form-control\"
              placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\"
              ";
        // line 8
        echo ($context["custom_attributes"] ?? null);
        echo "
    >";
        // line 9
        echo twig_escape_filter($this->env, ($context["default"] ?? null), "html", null, true);
        echo "</textarea>

    ";
        // line 11
        if (($context["comment"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 12
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__be34a2ca1710e87b67e134d71fa6703f9764897f827ff797d8b7d2d3e2292f3e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  57 => 11,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} form-group\">

    <label for=\"{{ name }}\">{{ label }}</label>

    <textarea name=\"{{ name }}\"
              class=\"{{ class }} form-control\"
              placeholder=\"{{ placeholder }}\"
              {{ custom_attributes|raw }}
    >{{ default }}</textarea>

    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

</div>", "__string_template__be34a2ca1710e87b67e134d71fa6703f9764897f827ff797d8b7d2d3e2292f3e", "");
    }
}
