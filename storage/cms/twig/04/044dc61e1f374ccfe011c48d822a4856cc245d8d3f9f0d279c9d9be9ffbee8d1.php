<?php

/* /home/vsites/homeschool.in.th/plugins/martin/forms/components/emptyform/default.htm */
class __TwigTemplate_90f0a62a0db8eff63f297e28241df43b30f7d535ddfcc3f65add1e1de034ca1e extends Twig_Template
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
        echo "<h3>Here goes your custom form</h3>
<p>Override HTML by creating a new partial called <strong>default.htm</strong> (more info <a href=\"https://octobercms.com/docs/cms/components#overriding-partials\" target=\"_blank\">here</a>)</p>
<p>You can copy/paste this basic template:</p>
<pre>
    &lt;form data-request=\"&lbrace;&lbrace; __SELF__ }}::onFormSubmit\"&gt;
        &lbrace;&lbrace; form_token() &rbrace;&rbrace;
        &lt;div id=\"&lbrace;&lbrace; __SELF__ &rbrace;&rbrace;_forms_flash\"&gt;&lt;/div&gt;
        &lt;!-- YOUR FORM FIELDS --&gt;
        &lbrace;% partial '@recaptcha' %}
        &lt;!-- SUBMIT BUTTON --&gt;
    &lt;/form&gt;
</pre>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/martin/forms/components/emptyform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Here goes your custom form</h3>
<p>Override HTML by creating a new partial called <strong>default.htm</strong> (more info <a href=\"https://octobercms.com/docs/cms/components#overriding-partials\" target=\"_blank\">here</a>)</p>
<p>You can copy/paste this basic template:</p>
<pre>
    &lt;form data-request=\"&lbrace;&lbrace; __SELF__ }}::onFormSubmit\"&gt;
        &lbrace;&lbrace; form_token() &rbrace;&rbrace;
        &lt;div id=\"&lbrace;&lbrace; __SELF__ &rbrace;&rbrace;_forms_flash\"&gt;&lt;/div&gt;
        &lt;!-- YOUR FORM FIELDS --&gt;
        &lbrace;% partial '@recaptcha' %}
        &lt;!-- SUBMIT BUTTON --&gt;
    &lt;/form&gt;
</pre>", "/home/vsites/homeschool.in.th/plugins/martin/forms/components/emptyform/default.htm", "");
    }
}
