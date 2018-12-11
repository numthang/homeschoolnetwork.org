<?php

/* __string_template__8cd1666e67d7854aca5334bd13d152be63afd6e242f7d007e789d636e9634caf */
class __TwigTemplate_bfff6f1b0abcf40fa916cd43ed33154efa94da8f4d3a317c4bc689047050c710 extends Twig_Template
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
    <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "site_key", array()), "html", null, true);
        echo "\" data-theme=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", array()), "html", null, true);
        echo "\"></div>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl=";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", array()), "html", null, true);
        echo "\"></script>
    ";
        // line 4
        if (($context["comment"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__8cd1666e67d7854aca5334bd13d152be63afd6e242f7d007e789d636e9634caf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  38 => 4,  34 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ wrapper_class }} form-group\">
    <div class=\"g-recaptcha\" data-sitekey=\"{{ settings.site_key }}\" data-theme=\"{{ settings.theme }}\"></div>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl={{ settings.lang }}\"></script>
    {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}
</div>", "__string_template__8cd1666e67d7854aca5334bd13d152be63afd6e242f7d007e789d636e9634caf", "");
    }
}
