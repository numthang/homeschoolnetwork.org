<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/user-sidebar.htm */
class __TwigTemplate_95a37cb067a6d18c72d396c8eae0a23f9ef53f2a597722749da92de9c2e107be extends Twig_Template
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
        echo "<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        User Menu
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"/login/profile\" style=\"font-size: 18px;\">My Profile</a></li>
        <li class=\"list-group-item\"><a href=\"/login/add/course\" style=\"font-size: 18px;\">Add Course</a></li>
        <li class=\"list-group-item\"><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"font-size: 18px;\">Sign out</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/user-sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        User Menu
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"/login/profile\" style=\"font-size: 18px;\">My Profile</a></li>
        <li class=\"list-group-item\"><a href=\"/login/add/course\" style=\"font-size: 18px;\">Add Course</a></li>
        <li class=\"list-group-item\"><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"font-size: 18px;\">Sign out</a></li>
    </ul>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/user-sidebar.htm", "");
    }
}
