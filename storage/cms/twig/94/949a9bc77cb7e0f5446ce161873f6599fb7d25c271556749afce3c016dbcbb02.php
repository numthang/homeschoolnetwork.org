<?php

/* __string_template__cc064c6d24871d9a2acbc5f54cfef1791e9f373791776ff47218530d175d5922 */
class __TwigTemplate_85e4af0ded0e6d6de08f035c68660479efb2d2a0311b449753352848dc3b096a extends Twig_Template
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
        if (call_user_func_array($this->env->getFunction('locationPluginEnabled')->getCallable(), array())) {
            // line 2
            echo "
    <div class=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
            echo " form-group\">

        ";
            // line 5
            if (($context["label"] ?? null)) {
                echo "<label for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>";
            }
            // line 6
            echo "
        ";
            // line 7
            echo RainLab\Location\Models\State::formSelect(($context["name"] ?? null), null, null, array("id" => "state-select", "class" => (($context["class"] ?? null) . " form-control"), "emptyOption" => ($context["placeholder"] ?? null)));
            echo "

        ";
            // line 9
            if (($context["comment"] ?? null)) {
                echo "<p class=\"help-block\">";
                echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                echo "</p>";
            }
            // line 10
            echo "
    </div>

";
        } else {
            // line 14
            echo "
    <p style=\"color: #ff0033;\">
        You must install <a target=\"_blank\" href=\"https://octobercms.com/plugin/rainlab-location\">Location Plugin </a> to use location fields!
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__cc064c6d24871d9a2acbc5f54cfef1791e9f373791776ff47218530d175d5922";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 10,  49 => 9,  44 => 7,  41 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locationPluginEnabled() %}

    <div class=\"{{ wrapper_class }} form-group\">

        {% if label %}<label for=\"{{ name }}\">{{ label }}</label>{% endif %}

        {{ form_select_state(name, null, null, { id: 'state-select', class: class ~ ' form-control', emptyOption: placeholder }) }}

        {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

    </div>

{% else %}

    <p style=\"color: #ff0033;\">
        You must install <a target=\"_blank\" href=\"https://octobercms.com/plugin/rainlab-location\">Location Plugin </a> to use location fields!
    </p>

{% endif %}", "__string_template__cc064c6d24871d9a2acbc5f54cfef1791e9f373791776ff47218530d175d5922", "");
    }
}
