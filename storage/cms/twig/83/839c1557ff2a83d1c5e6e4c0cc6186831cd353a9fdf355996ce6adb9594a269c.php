<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm */
class __TwigTemplate_48bd42e72130d2cf05ad534787882b5d3b78a9e67c9ea4f00e0b2c8de179b018 extends Twig_Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"center\">
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://laravel.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-01.png");
        echo "\" alt=\"Laravel\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://octobercms.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-02.png");
        echo "\" alt=\"OctoberCMS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"http://materializecss.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-03.png");
        echo "\" alt=\"Materialize CSS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
    <a href=\"https://github.com/\" target=\"_blank\">  <img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/utility/img-04.png");
        echo "\" alt=\"Github\"></a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 10,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"center\">
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://laravel.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-01.png'|theme }}\" alt=\"Laravel\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"https://octobercms.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-02.png'|theme }}\" alt=\"OctoberCMS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
      <a href=\"http://materializecss.com/\" target=\"_blank\"><img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-03.png'|theme }}\" alt=\"Materialize CSS\"></a>
    </div>
    <div class=\"lt-col col l3 m6 s12\">
    <a href=\"https://github.com/\" target=\"_blank\">  <img class=\"lt-grayscale-opacity-hover-filter responsive-img\" src=\"{{ 'assets/img/pages/home/utility/img-04.png'|theme }}\" alt=\"Github\"></a>
    </div>
  </div>
</div>", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/partials/pages-home/utility.htm", "");
    }
}
