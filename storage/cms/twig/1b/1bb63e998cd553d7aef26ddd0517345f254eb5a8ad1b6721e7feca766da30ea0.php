<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_4ed89c2ffcfa0f312d4b7af12dda9c7f1afc2a8de1e394a967cd5b8719356bd8 extends Twig_Template
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
        echo "<!--";
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "blog" => array("name" => "Blog", "sublinks" => array("Blog" => array(0 => "blog/blog", 1 => "Blog"), "Cate" => array(0 => "/blog/category/uncategorized", 1 => "Category"), "Tags" => array(0 => "blog/tags", 1 => "Tags"))));
        // line 36
        echo "
";
        // line 37
        $context["nav"] = $this;
        echo "-->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><div class=\"brand-title\">Homeschool Network</div></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 50
        echo "            <li class=\" dropdown\">
              <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
              ";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Blog"));
        echo "
              <span class=\"caret\"></span></a>
              <span class=\"dropdown-arrow\"></span>
              <ul class=\"dropdown-menu\">
                <li class=\" \">
                  <a href=\"/blog/page/default\" class=\"\">
                    ";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("All articles"));
        echo "
                  </a>
                </li>
                ";
        // line 61
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", array())) > 0)) {
            // line 62
            echo "                  ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,             // line 63
($context["blogCategories"] ?? null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,             // line 64
($context["blogCategories"] ?? null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 62
($context["blogCategories"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 66
            echo "                ";
        }
        // line 67
        echo "                <li class=\" \">
                  <a href=\"/blog/tags\" class=\"\">
                    ";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tags"));
        echo "
                  </a>
                </li>
              </ul>
            </li>
            <li class=\" dropdown\">
              <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Languages"));
        echo "<span class=\"caret\"></span></a>
              <span class=\"dropdown-arrow\"></span>
              <ul class=\"dropdown-menu\">
                <li class=\" \">
                  <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">English</a>
                </li>
                <li class=\" \">
                  <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'th'\">Thai</a>
                </li>
              </ul>
            </li>
            ";
        // line 86
        if ( !($context["user"] ?? null)) {
            // line 87
            echo "            <li>
              <button onclick=\"window.location='/login'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">";
            // line 88
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Log in"));
            echo "</button>
            </li>
            ";
        } else {
            // line 91
            echo "            <li class=\" dropdown\">
              <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><img src=\"";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook_id", array())) {
                echo " https://graph.facebook.com/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook_id", array()), "html", null, true);
                echo "/picture?type=small ";
            } else {
                echo " ";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/anonymous.jpg");
                echo " ";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"avatar-sm\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
              <span class=\"dropdown-arrow\"></span>
              <ul class=\"dropdown-menu\">
                <li><a href=\"/login/profile\"><img src=\"";
            // line 95
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/png/fa-address-book.png");
            echo "\" width=\"30\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
            echo "</a></li>
                <li><a href=\"/login/new/course\"><img src=\"";
            // line 96
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/png/fa-file-text.png");
            echo "\" width=\"30\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
            echo "</a></li>
                <li><a href=\"/login/new/evaluation\"><img src=\"";
            // line 97
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/png/fa-file-picture.png");
            echo "\" width=\"30\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
            echo "</a></li>
                <li><a href=\"/login/new/post\"><img src=\"";
            // line 98
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/png/fa-pencil.png");
            echo "\" width=\"30\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
            echo "</a></li>
                <li><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"";
            // line 99
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/png/fa-sign-out.png");
            echo "\" width=\"30\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "</a></li>
              </ul>
                  <!--<button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                  ";
            // line 102
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "
                </button> -->
            </li>
            ";
        }
        // line 106
        echo "
          </ul>
        </div>
    </div>
</nav>";
    }

    // line 15
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["subnav"] = $this;
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 19
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 21
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) : ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["link"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null))))));
                echo "\"
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 23
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\">
                ";
                // line 24
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) : (call_user_func_array($this->env->getFilter('_')->getCallable(), array((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["link"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null))))), "html", null, true);
                echo "
                ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 26
                echo "            </a>
            ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    // line 28
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  ";
                    // line 30
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array()));
                    echo "
                </ul>
            ";
                }
                // line 33
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 33,  248 => 30,  244 => 28,  242 => 27,  239 => 26,  235 => 25,  231 => 24,  226 => 23,  222 => 22,  218 => 21,  210 => 19,  206 => 18,  203 => 17,  200 => 16,  188 => 15,  180 => 106,  173 => 102,  165 => 99,  159 => 98,  153 => 97,  147 => 96,  141 => 95,  123 => 92,  120 => 91,  114 => 88,  111 => 87,  109 => 86,  95 => 75,  86 => 69,  82 => 67,  79 => 66,  76 => 62,  74 => 64,  72 => 63,  69 => 62,  67 => 61,  61 => 58,  52 => 52,  48 => 50,  41 => 45,  30 => 37,  27 => 36,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Home'],
        'blog': {
            name: 'Blog',
            sublinks: {
                'Blog': ['blog/blog', 'Blog'],
                'Cate' : ['/blog/category/uncategorized', 'Category'],
                'Tags': ['blog/tags', 'Tags'],
            },
        },
    }
%}
{% macro render_menu(links) %}
    {% import _self as subnav %}

    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\">
                {{ link.name ?: link[1]|_ }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  {{ subnav.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}-->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><div class=\"brand-title\">Homeschool Network</div></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            {# nav.render_menu(links) #}
            <li class=\" dropdown\">
              <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
              {{ 'Blog'|_ }}
              <span class=\"caret\"></span></a>
              <span class=\"dropdown-arrow\"></span>
              <ul class=\"dropdown-menu\">
                <li class=\" \">
                  <a href=\"/blog/page/default\" class=\"\">
                    {{ 'All articles'|_ }}
                  </a>
                </li>
                {% if blogCategories.categories|length > 0 %}
                  {% partial blogCategories ~ \"::items\"
                      categories = blogCategories.categories
                      currentCategorySlug = blogCategories.currentCategorySlug
                  %}
                {% endif %}
                <li class=\" \">
                  <a href=\"/blog/tags\" class=\"\">
                    {{ 'Tags'|_ }}
                  </a>
                </li>
              </ul>
            </li>
            <li class=\" dropdown\">
              <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ 'Languages'|_ }}<span class=\"caret\"></span></a>
              <span class=\"dropdown-arrow\"></span>
              <ul class=\"dropdown-menu\">
                <li class=\" \">
                  <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">English</a>
                </li>
                <li class=\" \">
                  <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'th'\">Thai</a>
                </li>
              </ul>
            </li>
            {% if not user %}
            <li>
              <button onclick=\"window.location='/login'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">{{ 'Log in'|_ }}</button>
            </li>
            {% else %}
            <li class=\" dropdown\">
              <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><img src=\"{% if user.facebook_id %} https://graph.facebook.com/{{ user.facebook_id }}/picture?type=small {% else %} {{ 'assets/images/team/anonymous.jpg'|theme }} {% endif %}\" title=\"{{ user.name }}\" class=\"avatar-sm\"> {{ user.name }}<span class=\"caret\"></span></a>
              <span class=\"dropdown-arrow\"></span>
              <ul class=\"dropdown-menu\">
                <li><a href=\"/login/profile\"><img src=\"{{ '/assets/images/icons/png/fa-address-book.png'|theme }}\" width=\"30\"> {{ 'My profile'|_ }}</a></li>
                <li><a href=\"/login/new/course\"><img src=\"{{ '/assets/images/icons/png/fa-file-text.png'|theme }}\" width=\"30\"> {{ 'New course'|_ }}</a></li>
                <li><a href=\"/login/new/evaluation\"><img src=\"{{ '/assets/images/icons/png/fa-file-picture.png'|theme }}\" width=\"30\"> {{ 'New evaluation'|_ }}</a></li>
                <li><a href=\"/login/new/post\"><img src=\"{{ '/assets/images/icons/png/fa-pencil.png'|theme }}\" width=\"30\"> {{ 'New post'|_ }}</a></li>
                <li><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"{{ '/assets/images/icons/png/fa-sign-out.png'|theme }}\" width=\"30\"> {{ 'Sign out'|_ }}</a></li>
              </ul>
                  <!--<button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                  {{ 'Sign out'|_ }}
                </button> -->
            </li>
            {% endif %}

          </ul>
        </div>
    </div>
</nav>", "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/partials/nav.htm", "");
    }
}
