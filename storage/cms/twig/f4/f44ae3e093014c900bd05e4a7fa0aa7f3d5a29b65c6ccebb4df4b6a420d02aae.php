<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_e23104fdd9170ef1943e27bc128de1ef891b1d8c566eefa4b7105a03c2f09331 extends Twig_Template
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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "blog" => array("name" => "Blog", "sublinks" => array("blog" => array(0 => "blog/blog", 1 => "Blog"), "post" => array(0 => "blog/post", 1 => "Blog Post"))));
        // line 14
        echo "
        <!--'pages': {
            name: 'Pages',
            sublinks: {
                'about':         ['samples/about', 'About Us'],
                'contact':       ['samples/contact', 'Contact Us'],
                'pricing-table': ['samples/pricing-table', 'Pricing Table'],
                'services':      ['samples/services', 'Services'],
                'signin':        ['samples/signin', 'Sign In'],
                'register':      ['samples/register', 'Register'],
                'error':         ['error', 'Error Page'],
                '404':           ['404', '404 Page'],
            },
        },
        'portfolio': {
            name: 'Portfolio',
            sublinks: {
                'portfolio': ['portfolio/portfolio', 'Portfolio'],
                'project': ['portfolio/project', 'Project'],
            },
        },
        'shop': {
            name: 'Shop',
            sublinks: {
                'shop': ['shop/shop', 'Shop'],
                'product': ['shop/product', 'Product'],
                'cart': ['shop/cart', 'Cart'],
            },
            'ui-elements': ['ui-elements', 'UI Elements'],
        },-->
";
        // line 65
        echo "
";
        // line 66
        $context["nav"] = $this;
        // line 67
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Homeschool Network</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 79
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
              <li class=\" dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        // line 81
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
        // line 92
        if ( !($context["user"] ?? null)) {
            // line 93
            echo "              <li>
                <button onclick=\"window.location='/login'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">";
            // line 94
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Log in"));
            echo "</button>
              </li>
              ";
        } else {
            // line 97
            echo "              <li class=\" dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"/login/profile\">";
            // line 101
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
            echo "</a></li>
                  <li><a href=\"/login/add/course\">";
            // line 102
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
            echo "</a></li>
                  <li><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">";
            // line 103
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "</a></li>
                </ul>
                    <!--<button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                    ";
            // line 106
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "
                  </button> -->
              </li>
              ";
        }
        // line 110
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    // line 44
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    ";
            $context["subnav"] = $this;
            // line 46
            echo "
    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 48
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 50
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) : ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["link"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null))))));
                echo "\"
                ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 52
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\">
                ";
                // line 53
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) : (call_user_func_array($this->env->getFilter('_')->getCallable(), array((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["link"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null))))), "html", null, true);
                echo "
                ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 55
                echo "            </a>
            ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    // line 57
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 59
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array()));
                    echo "
                </ul>
            ";
                }
                // line 62
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
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 62,  206 => 59,  202 => 57,  200 => 56,  197 => 55,  193 => 54,  189 => 53,  184 => 52,  180 => 51,  176 => 50,  168 => 48,  164 => 47,  161 => 46,  158 => 45,  146 => 44,  139 => 110,  132 => 106,  126 => 103,  122 => 102,  118 => 101,  112 => 98,  109 => 97,  103 => 94,  100 => 93,  98 => 92,  84 => 81,  79 => 79,  72 => 75,  62 => 67,  60 => 66,  57 => 65,  25 => 14,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Home'],
        'blog': {
            name: 'Blog',
            sublinks: {
                'blog': ['blog/blog', 'Blog'],
                'post': ['blog/post', 'Blog Post'],
            },
        },
    }
%}

        <!--'pages': {
            name: 'Pages',
            sublinks: {
                'about':         ['samples/about', 'About Us'],
                'contact':       ['samples/contact', 'Contact Us'],
                'pricing-table': ['samples/pricing-table', 'Pricing Table'],
                'services':      ['samples/services', 'Services'],
                'signin':        ['samples/signin', 'Sign In'],
                'register':      ['samples/register', 'Register'],
                'error':         ['error', 'Error Page'],
                '404':           ['404', '404 Page'],
            },
        },
        'portfolio': {
            name: 'Portfolio',
            sublinks: {
                'portfolio': ['portfolio/portfolio', 'Portfolio'],
                'project': ['portfolio/project', 'Project'],
            },
        },
        'shop': {
            name: 'Shop',
            sublinks: {
                'shop': ['shop/shop', 'Shop'],
                'product': ['shop/product', 'Product'],
                'cart': ['shop/cart', 'Cart'],
            },
            'ui-elements': ['ui-elements', 'UI Elements'],
        },-->
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

{% import _self as nav %}

<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Homeschool Network</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
              {{ nav.render_menu(links) }}
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
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ user.name }}<span class=\"caret\"></span></a>
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"/login/profile\">{{ 'My profile'|_ }}</a></li>
                  <li><a href=\"/login/add/course\">{{ 'New course'|_ }}</a></li>
                  <li><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">{{ 'Sign out'|_ }}</a></li>
                </ul>
                    <!--<button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                    {{ 'Sign out'|_ }}
                  </button> -->
              </li>
              {% endif %}
            </ul>
        </div>
    </div>
</nav>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/nav.htm", "");
    }
}
