<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/layouts/octaskin.htm */
class __TwigTemplate_370bab7b6f80f1aa03e3588ebd22cef628a73327b2c70b9bd6e7eb762d0bf9b0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "description", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon.png");
        echo "\" />
<link rel='stylesheet' id='bootstrap-css'  href='http://demo.lyrathemes.com/vega/wp-content/themes/vega/assets/css/bootstrap.min.css?ver=4.9.8' type='text/css' media='all' />
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_google_fonts", array())) {
            // line 15
            echo "      <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "google_font_family", array()), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_fontawesome", array())) {
            // line 19
            echo "      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_material_icons", array())) {
            // line 23
            echo "      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_stroke7_icons", array())) {
            // line 27
            echo "      <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/stroke7/stroke7-icon-font.min.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 29
        echo "
    <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/scss/style.scss"));
        echo "\" rel=\"stylesheet\">

    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("_addons/css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
    ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 35
        echo "
    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "custom_css", array())) {
            // line 37
            echo "      <style>
      ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "custom_css", array()), "html", null, true);
            echo "
      </style>
    ";
        }
        // line 41
        echo "  </head>
  <body class=\"lt-theme-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "config", array()), "code", array()), "html", null, true);
        echo " lt-layout-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " lt-page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-all/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "          </div>
        </div>
      </section>

      ";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 53
        echo "
      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-all/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-all/copyright"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "          </div>
        </div>
      </section>
    </div>

 <!-- Scripts -->
        <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
          ";
        // line 75
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 76
        echo "
        
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "jQuery_version", array()), "html", null, true);
        echo "/jquery.min.js\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/materialize.min.js", 1 => "assets/js/theme.js"));
        echo "\"></script>

    ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "load_octobercms_framework", array())) {
            // line 82
            echo "      ";
            $_minify = System\Classes\CombineAssets::instance()->useMinify;
            if ($_minify) {
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
            }
            else {
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            }
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
            unset($_minify);
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("_addons/js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 86
        echo "
    ";
        // line 87
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 88
        echo "
    ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "custom_js", array())) {
            // line 90
            echo "      <script>
      ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "custom_js", array()), "html", null, true);
            echo "
      </script>
    ";
        }
        // line 94
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/layouts/octaskin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 94,  267 => 91,  264 => 90,  262 => 89,  259 => 88,  256 => 87,  253 => 86,  249 => 85,  246 => 84,  243 => 83,  227 => 82,  225 => 81,  220 => 79,  216 => 78,  212 => 76,  197 => 75,  193 => 74,  189 => 73,  185 => 72,  177 => 66,  173 => 65,  164 => 58,  160 => 57,  154 => 53,  152 => 52,  146 => 48,  142 => 47,  130 => 42,  127 => 41,  121 => 38,  118 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  103 => 32,  98 => 30,  95 => 29,  89 => 27,  87 => 26,  84 => 25,  80 => 23,  78 => 22,  75 => 21,  71 => 19,  69 => 18,  66 => 17,  60 => 15,  58 => 14,  53 => 12,  49 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />
<link rel='stylesheet' id='bootstrap-css'  href='http://demo.lyrathemes.com/vega/wp-content/themes/vega/assets/css/bootstrap.min.css?ver=4.9.8' type='text/css' media='all' />
    {% if this.theme.load_google_fonts %}
      <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_fontawesome %}
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_material_icons %}
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_stroke7_icons %}
      <link href=\"{{ 'assets/css/stroke7/stroke7-icon-font.min.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    <link href=\"{{ ['assets/scss/style.scss']|theme }}\" rel=\"stylesheet\">

    {% partial \"_addons/css\" %}

    {% styles %}

    {% if this.theme.custom_css %}
      <style>
      {{ this.theme.custom_css }}
      </style>
    {% endif %}
  </head>
  <body class=\"lt-theme-{{ this.theme.config.code }} lt-layout-{{ this.layout.id }} lt-page-{{ this.page.id }}\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            {% partial \"pages-all/navigation\" %}
          </div>
        </div>
      </section>

      {% page %}

      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            {% partial \"pages-all/footer\" %}
          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            {% partial \"pages-all/copyright\" %}
          </div>
        </div>
      </section>
    </div>

 <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
          {% framework extras %}

        
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script>
    <script src=\"{{ ['assets/js/materialize.min.js','assets/js/theme.js']|theme }}\"></script>

    {% if this.theme.load_octobercms_framework %}
      {% framework extras %}
    {% endif %}

    {% partial \"_addons/js\" %}

    {% scripts %}

    {% if this.theme.custom_js %}
      <script>
      {{ this.theme.custom_js }}
      </script>
    {% endif %}
  </body>
</html>", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/layouts/octaskin.htm", "");
    }
}
