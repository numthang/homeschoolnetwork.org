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
  \t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 9
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 10
                echo "      <p data-control=\"flash-message\" data-interval=\"5\" class=\"";
                echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 12
        echo "    <div class=\"col-md-6\">
      ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 15
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
        // line 17
        echo "      ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sociallogin"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "      ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "    </div>
    <div class=\"col-md-6\">
      ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
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
        return array (  89 => 22,  85 => 21,  81 => 19,  76 => 18,  71 => 17,  60 => 15,  55 => 14,  51 => 13,  48 => 12,  39 => 10,  36 => 9,  27 => 3,  23 => 1,);
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
  \t{% flash %}
      <p data-control=\"flash-message\" data-interval=\"5\" class=\"{{ type == 'error' ? 'danger' : type }}\">{{ message }}<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
    {% endflash %}
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
