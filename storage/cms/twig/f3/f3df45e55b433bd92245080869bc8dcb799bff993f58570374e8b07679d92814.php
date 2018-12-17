<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login-profile.htm */
class __TwigTemplate_0760796eb4ecbb2689f864b7dece0b65b8f57b9e87ca1c58d644c40cf2f74552 extends Twig_Template
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
        <h3>Hello, ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
    </div>
</section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
          ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("user-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
        <div class=\"col-md-8\">
          ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 12
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 13
                echo "            <p data-control=\"flash-message\" data-interval=\"5\" class=\"";
                echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
          ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 15
        echo "          ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("user-profile-form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "        </div>
    </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login-profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  56 => 15,  47 => 13,  44 => 12,  40 => 10,  36 => 9,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Hello, {{ user.name }}</h3>
    </div>
</section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
          {% partial 'user-sidebar' %}
        </div>
        <div class=\"col-md-8\">
          {% flash %}
            <p data-control=\"flash-message\" data-interval=\"5\" class=\"{{ type == 'error' ? 'danger' : type }}\">{{ message }}<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
          {% endflash %}
          {% partial 'user-profile-form' %}
        </div>
    </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/login-profile.htm", "");
    }
}
