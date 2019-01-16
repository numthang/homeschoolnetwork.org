<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/login.htm */
class __TwigTemplate_28be626adc8c63b91f6cd1496e7f77a174348e72c45d0bd1fb415995a7587234 extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Log in"));
        echo "</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 12
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sociallogin"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "      ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "    </div>
    <div class=\"col-md-6\">
      ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "    </div>
  </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  71 => 18,  67 => 16,  62 => 15,  57 => 14,  46 => 12,  41 => 11,  37 => 10,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>{{ 'Log in'|_ }}</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      {% partial account ~ '::signin' %}
      {% for name, link in social_login_links %}
        <a href=\"{{ link }}\">{{ name }}</a>
      {% endfor %}
      {% component 'sociallogin' %}
      {% component 'resetPassword' %}
    </div>
    <div class=\"col-md-6\">
      {% partial account ~ '::register' %}
    </div>
  </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/login.htm", "");
    }
}
