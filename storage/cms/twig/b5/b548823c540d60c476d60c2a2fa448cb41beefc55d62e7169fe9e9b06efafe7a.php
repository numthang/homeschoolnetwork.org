<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/movie-single.htm */
class __TwigTemplate_833867edfb2a748840edba7d1c82538b93ddac191bd70e41c80be735a753893d extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", array());
        // line 13
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 14
        echo "        ";
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 15
        echo "        
        ";
        // line 16
        if (($context["record"] ?? null)) {
            // line 17
            echo "            <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "</h2>
            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", array()), "thumb", array(0 => 200, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
            echo "\">
            <ul class=\"gallery clearfix\">
              ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movie_gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "                <li>
                  <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array(0 => 80, 1 => 80, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\"></a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </ul>
            <h4>Genres</h4> <!--genres is Field Name in control-->
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 27
                echo "              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", array()), "html", null, true);
                echo "   <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", array()), "html", null, true);
            echo "</h5>

            <h4>Actors</h4> <!--actors is Field Name in control -->
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 33
                echo "              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", array()), "html", null, true);
                echo "   
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", array()), "html", null, true);
            echo "</h5>

            <h4>Description</h4>

            ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", array());
            echo "
        ";
        } else {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/movie-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  131 => 41,  126 => 39,  118 => 35,  109 => 33,  105 => 32,  98 => 29,  89 => 27,  85 => 26,  81 => 24,  71 => 22,  68 => 21,  64 => 20,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  46 => 14,  43 => 13,  41 => 12,  32 => 5,  28 => 4,  23 => 1,);
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
        {% set record = builderDetails.record %}
        {% set displayColumn = builderDetails.displayColumn %}
        {% set notFoundMessage = builderDetails.notFoundMessage %}
        
        {% if record %}
            <h2>{{ attribute(record, displayColumn) }}</h2>
            <img src=\"{{ record.poster.thumb(200, auto) }}\">
            <ul class=\"gallery clearfix\">
              {% for image in record.movie_gallery %}
                <li>
                  <a href=\"{{image.path}}\"><img src=\"{{image.thumb(80,80, {'mode':'crop'})}}\"></a></li>
              {% endfor %}
            </ul>
            <h4>Genres</h4> <!--genres is Field Name in control-->
            {% for genre in record.genres %}
              {{ genre.genre_title }}   <br>
            {% endfor %}
            <h5>{{ record.year }}</h5>

            <h4>Actors</h4> <!--actors is Field Name in control -->
            {% for genre in record.genres %}
              {{ genre.genre_title }}   
            {% endfor %}
            <h5>{{ record.year }}</h5>

            <h4>Description</h4>

            {{ record.description|raw }}
        {% else %}
            {{ notFoundMessage }}
        {% endif %}
    </div>
  </div>
</section>", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/movie-single.htm", "");
    }
}
