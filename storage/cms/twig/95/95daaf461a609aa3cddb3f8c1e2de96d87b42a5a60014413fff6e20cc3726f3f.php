<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/blog/sidebar.htm */
class __TwigTemplate_7792e6d85bfc384b67ddde5dc406374bd4979bc21925c39d82de47eac7b980ed extends Twig_Template
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
        echo "<!-- Search -->
<form role=\"form\">
    <div class=\"well\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search posts...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        Categories
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"#\">Databases</a> <span class=\"badge\">13</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Design</a> <span class=\"badge\">24</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Hardware</a> <span class=\"badge\">12</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Management</a> <span class=\"badge\">18</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Security</a> <span class=\"badge\">2</span></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/blog/sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Search -->
<form role=\"form\">
    <div class=\"well\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search posts...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        Categories
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"#\">Databases</a> <span class=\"badge\">13</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Design</a> <span class=\"badge\">24</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Hardware</a> <span class=\"badge\">12</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Management</a> <span class=\"badge\">18</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Security</a> <span class=\"badge\">2</span></li>
    </ul>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/blog/sidebar.htm", "");
    }
}
