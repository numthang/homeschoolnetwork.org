<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/profile.htm */
class __TwigTemplate_cc22e03802af2c55514af0ea840e6469b3472f2be97481d6414035ba63ac6a56 extends Twig_Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Hello"));
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "</h3>
    </div>
</section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 9
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 10
                echo "            <p data-control=\"flash-message\" data-interval=\"5\" class=\"";
                echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
          ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 12
        echo "          ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("login/profile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </div>
    </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  52 => 12,  43 => 10,  40 => 9,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>{{ 'Hello'|_ }}, {{ user.name }} {{ user.surname }}</h3>
    </div>
</section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          {% flash %}
            <p data-control=\"flash-message\" data-interval=\"5\" class=\"{{ type == 'error' ? 'danger' : type }}\">{{ message }}<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
          {% endflash %}
          {% partial 'login/profile' %}
        </div>
    </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login/profile.htm", "");
    }
}
