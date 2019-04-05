<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/plugins/suresoftware/powerseo/components/cmspage/default.htm */
class __TwigTemplate_9167bd52b9757e64cfc0bd2c9748ca1e8bc36bd477dbdb859cb6da8b4d96fb55 extends Twig_Template
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
        if (($context["hasBlog"] ?? null)) {
            // line 2
            echo "  ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 3
            echo "  ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);        } else {
            // line 5
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", array())) {
                // line 6
                echo "  <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", array()), "html", null, true);
                echo "\" />
  ";
            }
            // line 8
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", array())) {
                // line 9
                echo "  <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", array())));
                echo "</title>
  ";
            }
            // line 11
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", array())) {
                // line 12
                echo "  <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", array()), "html", null, true);
                echo "\">
  ";
            }
            // line 14
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", array())) {
                // line 15
                echo "  <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", array()), "html", null, true);
                echo "\">
  ";
            }
            // line 17
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", array())) {
                // line 18
                echo "  <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", array()), "html", null, true);
                echo "\" />
  ";
            } else {
                // line 20
                echo "  ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
                echo "
  ";
            }
            // line 22
            echo "  <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", array()), "html", null, true);
            echo "\">

  ";
            // line 24
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
            echo "

  ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", array())) {
                // line 27
                echo "  <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", array()), "html", null, true);
                echo "\" />
  ";
            }
            // line 29
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", array())) {
                // line 30
                echo "  <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", array()), "html", null, true);
                echo "\" />
  ";
            }
            // line 32
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", array())) {
                // line 33
                echo "  <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", array()), "html", null, true);
                echo "\" />
  ";
            }
            // line 35
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", array())) {
                // line 36
                echo "  <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", array()), "html", null, true);
                echo "\" />
  ";
            }
            // line 38
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", array())) {
                // line 39
                echo "  <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", array()), "html", null, true);
                echo "\" />
  ";
            }
            // line 41
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/plugins/suresoftware/powerseo/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  134 => 39,  131 => 38,  125 => 36,  122 => 35,  116 => 33,  113 => 32,  107 => 30,  104 => 29,  98 => 27,  96 => 26,  91 => 24,  83 => 22,  77 => 20,  71 => 18,  68 => 17,  62 => 15,  59 => 14,  53 => 12,  50 => 11,  44 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 2,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if hasBlog %}
  {% placeholder meta default %}
  {% endplaceholder %}
{% else %}
  {% if __SELF__.redirect_url %}
  <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
  {% endif %}
  {% if __SELF__.seo_title %}
  <title>{{__SELF__.seo_title | generateTitle}}</title>
  {% endif %}
  {% if __SELF__.seo_description %}
  <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">
  {% endif %}
  {% if __SELF__.seo_keywords %}
  <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
  {% endif %}
  {% if __SELF__.canonical_url %}
  <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
  {% else %}
  {{ '' | generateCanonicalUrl}}
  {% endif %}
  <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

  {{ ''|otherMetaTags|raw }}

  {% if __SELF__.ogTitle %}
  <meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
  {% endif %}
  {% if __SELF__.ogUrl %}
  <meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
  {% endif %}
  {% if __SELF__.ogSiteName %}
  <meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
  {% endif %}
  {% if __SELF__.ogDescription %}
  <meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
  {% endif %}
  {% if __SELF__.ogFbAppId %}
  <meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
  {% endif %}

{% endif %}
", "/home/tee/domains/homeschoolnetwork.org/public_html/plugins/suresoftware/powerseo/components/cmspage/default.htm", "");
    }
}
