<?php

/* /home/vsites/homeschool.in.th/plugins/martin/forms/components/partials/recaptcha.htm */
class __TwigTemplate_2c816d61c62131ba841ea88f6fb4f6871c0e121eaff98d213d81a7fa57597ddf extends Twig_Template
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
        if (($context["recaptcha_enabled"] ?? null)) {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "\" class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "recaptcha_theme"), "method"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "recaptcha_type"), "method"), "html", null, true);
            echo "\" data-size=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "recaptcha_size"), "method"), "html", null, true);
            echo "\"></div>
";
        } elseif (        // line 3
($context["recaptcha_misconfigured"] ?? null)) {
            // line 4
            echo "    <h5>";
            echo twig_escape_filter($this->env, ($context["recaptcha_warn"] ?? null), "html", null, true);
            echo "</h5>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/martin/forms/components/partials/recaptcha.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (recaptcha_enabled) %}
    <div id=\"{{ __SELF__ }}\" class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.settings.recaptcha_site_key }}\" data-theme=\"{{ __SELF__.property('recaptcha_theme') }}\" data-type=\"{{ __SELF__.property('recaptcha_type') }}\" data-size=\"{{ __SELF__.property('recaptcha_size') }}\"></div>
{% elseif (recaptcha_misconfigured) %}
    <h5>{{ recaptcha_warn }}</h5>
{% endif %}", "/home/vsites/homeschool.in.th/plugins/martin/forms/components/partials/recaptcha.htm", "");
    }
}
