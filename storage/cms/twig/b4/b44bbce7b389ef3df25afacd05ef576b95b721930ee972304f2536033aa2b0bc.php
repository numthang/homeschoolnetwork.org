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
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 3
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 5
            echo "
";
        } else {
            // line 7
            echo "
    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", array())) {
                // line 9
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", array())) {
                // line 13
                echo "        <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), array(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", array())));
                echo "</title>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", array())) {
                // line 17
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", array()), "html", null, true);
                echo "\">
    ";
            }
            // line 19
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", array())) {
                // line 20
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", array()), "html", null, true);
                echo "\">
    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", array())) {
                // line 24
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", array()), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 26
                echo "        ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), array(""));
                echo "
    ";
            }
            // line 28
            echo "
    <meta name=\"robots\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", array()), "html", null, true);
            echo "\">

    ";
            // line 31
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), array(""));
            echo "

    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", array())) {
                // line 34
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 36
            echo "
    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", array())) {
                // line 38
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 40
            echo "
    ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", array())) {
                // line 42
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", array())) {
                // line 46
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 48
            echo "
    ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", array())) {
                // line 50
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", array()), "html", null, true);
                echo "\" />
    ";
            }
            // line 52
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
        return array (  162 => 52,  156 => 50,  154 => 49,  151 => 48,  145 => 46,  143 => 45,  140 => 44,  134 => 42,  132 => 41,  129 => 40,  123 => 38,  121 => 37,  118 => 36,  112 => 34,  110 => 33,  105 => 31,  98 => 29,  95 => 28,  89 => 26,  83 => 24,  81 => 23,  78 => 22,  72 => 20,  69 => 19,  63 => 17,  61 => 16,  58 => 15,  52 => 13,  50 => 12,  47 => 11,  41 => 9,  39 => 8,  36 => 7,  32 => 5,  30 => 2,  27 => 3,  25 => 2,  23 => 1,);
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
