<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/movies.htm */
class __TwigTemplate_6d76a1d9159bad61767bd92a2d91837f2ab57c4a0e524f10603b0fe1a91a2194 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 13
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 14
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 15
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 16
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 17
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 18
        echo "
      <ul class=\"record-list\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 21
            echo "              <li>
                  ";
            // line 23
            echo "                  ";
            ob_start();
            // line 24
            echo "                      ";
            if (($context["detailsPage"] ?? null)) {
                // line 25
                echo "                          <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                      ";
            }
            // line 27
            echo "
                      ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "

                      ";
            // line 30
            if (($context["detailsPage"] ?? null)) {
                // line 31
                echo "                          </a>
                      ";
            }
            // line 33
            echo "                  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 34
            echo "                  
                  ";
            // line 35
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", array()), 250));
            echo "
              </li>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "              <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </ul>

  ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 43
            echo "      <ul class=\"pagination\">
          ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 45
                echo "              <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
          ";
            }
            // line 47
            echo "
          ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "              <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                  <a href=\"";
                // line 50
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
              </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
          ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 55
                echo "              <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
          ";
            }
            // line 57
            echo "      </ul>
  ";
        }
        // line 59
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  170 => 57,  164 => 55,  162 => 54,  159 => 53,  148 => 50,  143 => 49,  139 => 48,  136 => 47,  130 => 45,  128 => 44,  125 => 43,  123 => 42,  119 => 40,  110 => 38,  102 => 35,  99 => 34,  96 => 33,  92 => 31,  90 => 30,  85 => 28,  82 => 27,  76 => 25,  73 => 24,  70 => 23,  67 => 21,  62 => 20,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  46 => 14,  43 => 13,  41 => 12,  32 => 5,  28 => 4,  23 => 1,);
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
      {% set records = builderList.records %}
      {% set displayColumn = builderList.displayColumn %}
      {% set noRecordsMessage = builderList.noRecordsMessage %}
      {% set detailsPage = builderList.detailsPage %}
      {% set detailsKeyColumn = builderList.detailsKeyColumn %}
      {% set detailsUrlParameter = builderList.detailsUrlParameter %}

      <ul class=\"record-list\">
          {% for record in records %}
              <li>
                  {# Use spaceless tag to remove spaces inside the A tag. #}
                  {% spaceless %}
                      {% if detailsPage %}
                          <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                      {% endif %}

                      {{ record.name }}

                      {% if detailsPage %}
                          </a>
                      {% endif %}
                  {% endspaceless %}
                  
                  {{ html_limit(record.description, 250)|raw }}
              </li>
          {% else %}
              <li class=\"no-data\">{{ noRecordsMessage }}</li>
          {% endfor %}
      </ul>

  {% if records.lastPage > 1 %}
      <ul class=\"pagination\">
          {% if records.currentPage > 1 %}
              <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
          {% endif %}

          {% for page in 1..records.lastPage %}
              <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                  <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
              </li>
          {% endfor %}

          {% if records.lastPage > records.currentPage %}
              <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
          {% endif %}
      </ul>
  {% endif %}
    </div>
  </div>
</section>", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/movies.htm", "");
    }
}
