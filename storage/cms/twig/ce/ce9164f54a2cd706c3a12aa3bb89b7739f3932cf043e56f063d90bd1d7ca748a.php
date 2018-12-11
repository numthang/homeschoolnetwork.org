<?php

/* __string_template__2d96a5bec7fdf8dcc02646c3c42fea93a21a4de8b2041fc5c02d89bc217d01ba */
class __TwigTemplate_902426757fe3970c99775061b8f5537001631e38c99a6f717295e9f4aca488ca extends Twig_Template
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
        echo "<span class=\"";
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " btn btn-primary\" ";
        echo ($context["custom_attributes"] ?? null);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</button>
</span>";
    }

    public function getTemplateName()
    {
        return "__string_template__2d96a5bec7fdf8dcc02646c3c42fea93a21a4de8b2041fc5c02d89bc217d01ba";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"{{ wrapper_class }}\">
    <button type=\"submit\" class=\"{{ class }} btn btn-primary\" {{ custom_attributes|raw }}>{{ label }}</button>
</span>", "__string_template__2d96a5bec7fdf8dcc02646c3c42fea93a21a4de8b2041fc5c02d89bc217d01ba", "");
    }
}
