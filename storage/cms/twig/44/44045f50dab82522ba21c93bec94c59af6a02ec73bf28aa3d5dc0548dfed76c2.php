<?php

/* /home/vsites/homeschool.in.th/plugins/martin/forms/components/genericform/default.htm */
class __TwigTemplate_ef1e6a070486b2b128eb82b265a6c433cae9111dde9d87d189a322ce129b5264 extends Twig_Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "

    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/martin/forms/components/genericform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  59 => 27,  34 => 5,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"{{ __SELF__ }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ __SELF__ }}_forms_flash\"></div>

    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
        <textarea id=\"comments\" name=\"comments\" rows=\"8\" cols=\"80\"></textarea>
    </div>

    <div class=\"form-group\">
        {% partial '@recaptcha' %}
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>", "/home/vsites/homeschool.in.th/plugins/martin/forms/components/genericform/default.htm", "");
    }
}
