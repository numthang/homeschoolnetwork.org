<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/sidebar.htm */
class __TwigTemplate_87628b6b0c197d4755ed309631ad57ef8de009fd2636d1c5608c398a383198a1 extends Twig_Template
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
        echo "<!-- ใช้อันนี้สำหรับทำให้ tab ไม่เละเวลาดู mobile view
<style>
@media screen and (max-width: 480px) {
    .nav {
        padding-left:2px;
        padding-right:2px;
    }
    .nav li {
        display:block !important;
        width:100%;
        margin:0px;
    }
    .nav li.active {
        border-bottom:1px solid #ddd!important;
        margin: 0px;
    }
}</style>-->

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
       ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"/login/profile\" style=\"font-size: 18px;\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
        echo "</a></li>
        <li class=\"list-group-item\"><a href=\"/login/add/course\" style=\"font-size: 18px;\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
        echo "</a></li>
        <li class=\"list-group-item\"><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"font-size: 18px;\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
        echo "</a></li>
    </ul>
</div>
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    ";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Courses"));
        echo "
  </div>
  ";
        // line 34
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courses"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  75 => 34,  70 => 32,  62 => 27,  58 => 26,  54 => 25,  46 => 22,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- ใช้อันนี้สำหรับทำให้ tab ไม่เละเวลาดู mobile view
<style>
@media screen and (max-width: 480px) {
    .nav {
        padding-left:2px;
        padding-right:2px;
    }
    .nav li {
        display:block !important;
        width:100%;
        margin:0px;
    }
    .nav li.active {
        border-bottom:1px solid #ddd!important;
        margin: 0px;
    }
}</style>-->

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
       {{ user.name }} {{ user.surname }}
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"/login/profile\" style=\"font-size: 18px;\">{{ 'My profile'|_ }}</a></li>
        <li class=\"list-group-item\"><a href=\"/login/add/course\" style=\"font-size: 18px;\">{{ 'New course'|_ }}</a></li>
        <li class=\"list-group-item\"><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"font-size: 18px;\">{{ 'Sign out'|_ }}</a></li>
    </ul>
</div>
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    {{ 'Courses'|_ }}
  </div>
  {% component 'courses' %}
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/sidebar.htm", "");
    }
}
