<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login.htm */
class __TwigTemplate_cc917091b94485e165720487013fb4e3270cf655d40144f8fdffb369120a8ed2 extends Twig_Template
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
        <h3>Log in</h3>
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
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  68 => 18,  64 => 16,  59 => 15,  54 => 14,  43 => 12,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Log in</h3>
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
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login.htm", "");
    }
}
