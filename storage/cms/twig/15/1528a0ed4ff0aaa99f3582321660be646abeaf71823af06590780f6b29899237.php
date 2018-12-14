<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/add-actors.htm */
class __TwigTemplate_9a68af136e85c1bc8ee383f97c4ab1bcbbba282d3b1d2532221275900cd3082a extends Twig_Template
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
        echo "<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-about/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actorform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actors"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "      
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/add-actors.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  41 => 12,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      {% partial \"pages-about/header\" %}
    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      {% component 'actorform' %}{% component 'actors' %}
      
    </div>
  </div>
</section>", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/add-actors.htm", "");
    }
}
