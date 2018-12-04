<?php

/* /home/vsites/homeschool.in.th/plugins/watchlearn/movies/components/actorform/default.htm */
class __TwigTemplate_2de2367a5d97972e9affdf4355686ac6a2b10a602c0edae2d6aa8af53bc464ee extends Twig_Template
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
        echo "<form data-request=\"onSave\">
    <label>Actor name</label>
    <input type=\"text\" name=\"name\">

    <label>Actor last name</label>
    <input type=\"text\" name=\"lastname\">

    <button type=\"submit\">Save actor</button>

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 10
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 13
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/watchlearn/movies/components/actorform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSave\">
    <label>Actor name</label>
    <input type=\"text\" name=\"name\">

    <label>Actor last name</label>
    <input type=\"text\" name=\"lastname\">

    <button type=\"submit\">Save actor</button>

    {% flash success %}
        <p>{{ message }}</p>
    {% endflash %}
</form>", "/home/vsites/homeschool.in.th/plugins/watchlearn/movies/components/actorform/default.htm", "");
    }
}
