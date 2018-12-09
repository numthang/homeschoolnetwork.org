<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/partials/_addons/js.htm */
class __TwigTemplate_7c1831f7737111e6900135eab1ead24a4f79596378dd442702a91ce83bed1530 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_wow_js", array())) {
            // line 2
            echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
";
        }
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_owl_carousel", array())) {
            // line 5
            echo "  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/partials/_addons/js.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.load_wow_js %}
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
{% endif %}
{% if this.theme.load_owl_carousel %}
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js\"></script>
{% endif %}", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/partials/_addons/js.htm", "");
    }
}
