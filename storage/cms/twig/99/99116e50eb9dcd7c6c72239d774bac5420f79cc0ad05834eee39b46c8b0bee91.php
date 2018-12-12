<?php

/* __string_template__734d2bad60ceb2ff1f0d0bdfc73a73715837388a926c4723ae06e844e67a36c6 */
class __TwigTemplate_6a8a651434d423a9b129d80671fb3e7e65727167ef5b9fa06fd4ff48646fed11 extends Twig_Template
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
            echo RainLab\Location\Models\Country::formSelect(($context["name"] ?? null), null, array("class" => (            // line 9
($context["class"] ?? null) . " form-control"), "emptyOption" =>             // line 10
($context["placeholder"] ?? null), "data-request" => "onChangeCountry", "data-request-data" => array("placeholder" =>             // line 12
($context["placeholder"] ?? null), "name" => ($context["name"] ?? null))));
            // line 13
            echo "

        ";
            // line 15
            if (($context["comment"] ?? null)) {
                echo "<p class=\"help-block\">";
                echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                echo "</p>";
            }
            // line 16
            echo "
    </div>

";
        } else {
            // line 20
            echo "
    <p style=\"color: #ff0033;\">
        You must install <a target=\"_blank\" href=\"https://octobercms.com/plugin/rainlab-location\">Location Plugin</a> to use location fields!
    </p>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__734d2bad60ceb2ff1f0d0bdfc73a73715837388a926c4723ae06e844e67a36c6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  59 => 16,  53 => 15,  49 => 13,  47 => 12,  46 => 10,  45 => 9,  44 => 7,  41 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locationPluginEnabled() %}

    <div class=\"{{ wrapper_class }} form-group\">

        {% if label %}<label for=\"{{ name }}\">{{ label }}</label>{% endif %}

        {{ form_select_country(name, null,
        {
            class: class ~ ' form-control',
            emptyOption: placeholder,
            'data-request': 'onChangeCountry',
            'data-request-data': {placeholder: placeholder, name: name},
        }) }}

        {% if comment %}<p class=\"help-block\">{{ comment }}</p>{% endif %}

    </div>

{% else %}

    <p style=\"color: #ff0033;\">
        You must install <a target=\"_blank\" href=\"https://octobercms.com/plugin/rainlab-location\">Location Plugin</a> to use location fields!
    </p>

{% endif %}", "__string_template__734d2bad60ceb2ff1f0d0bdfc73a73715837388a926c4723ae06e844e67a36c6", "");
    }
}
