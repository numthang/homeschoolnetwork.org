<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/partials/footer.htm */
class __TwigTemplate_3ca9fb375ad16ff911eebd52004e9433adcc90097027b20954885cb9bbefc722 extends Twig_Template
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
        echo "<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"/\">Home</a>
            </li>
            <li>
                <a href=\"/blog/1\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("About us"));
        echo "</a>
            </li>
            <li>
                <a href=\"/blog/page/1\">Blog</a>
            </li>
            <li>
                <a href=\"/blog/18\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"https://www.facebook.com/HomeschoolNetwork\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
      <div>Logo made with <a href=\"https://www.designevo.com/en/\" title=\"Free Online Logo Maker\">DesignEvo</a></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <nav class=\"pull-left\">
        <ul>
            <li class=\"active\">
                <a href=\"/\">Home</a>
            </li>
            <li>
                <a href=\"/blog/1\">{{ 'About us'|_ }}</a>
            </li>
            <li>
                <a href=\"/blog/page/1\">Blog</a>
            </li>
            <li>
                <a href=\"/blog/18\">Contact</a>
            </li>
        </ul>
    </nav>
    <div class=\"social-btns pull-right\">
        <a href=\"https://www.facebook.com/HomeschoolNetwork\"><div class=\"fui-facebook\"></div><div class=\"fui-facebook\"></div></a>
        <a href=\"#\"><div class=\"fui-twitter\"></div><div class=\"fui-twitter\"></div></a>
    </div>
    <div class=\"additional-links\">
      <div>Logo made with <a href=\"https://www.designevo.com/en/\" title=\"Free Online Logo Maker\">DesignEvo</a></div>
    </div>
</div>", "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/partials/footer.htm", "");
    }
}
