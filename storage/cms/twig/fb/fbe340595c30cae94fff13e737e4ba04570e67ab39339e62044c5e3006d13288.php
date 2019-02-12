<?php

/* /home/vsites/homeschool.in.th/plugins/rainlab/user/components/resetpassword/default.htm */
class __TwigTemplate_2f3b30ba70ebfbfbe4a129a125bd9cb8f0778b54426eb4846b1b42b85d13e243 extends Twig_Template
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
        echo "<div id=\"partialUserResetForm\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "code", array()) == null)) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::restore")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::reset")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/rainlab/user/components/resetpassword/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  36 => 5,  33 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"partialUserResetForm\">
    {% if __SELF__.code == null %}
        {% partial __SELF__ ~ '::restore' %}
    {% else %}
        {% partial __SELF__ ~ '::reset' %}
    {% endif %}
</div>", "/home/vsites/homeschool.in.th/plugins/rainlab/user/components/resetpassword/default.htm", "");
    }
}
