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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "blog" => array("name" => "Blog", "sublinks" => array("Blog" => array(0 => "blog/blog", 1 => "Blog"), "Tags" => array(0 => "blog/tags", 1 => "Tags"))));
        // line 35
        echo "
";
        // line 36
        $context["nav"] = $this;
        // line 37
        echo "
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
        echo "\">Homeschool Network</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 50
        echo "              <!--<li class=\" \">
                <a href=\"/\" class=\"\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Home"));
        echo "</a>
              </li>-->
              <li class=\" dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                ";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Blog"));
        echo "
                <span class=\"caret\"></span></a>
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  <li class=\" \">
                    <a href=\"/blog/page/default\" class=\"\">
                      ";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Blog"));
        echo "
                    </a>
                  </li>
                  <li class=\" \">
                    <a href=\"/blog/tags\" class=\"\">
                      ";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tags"));
        echo "
                    </a>
                  </li>
                </ul>
              </li>
              <li class=\" dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        // line 72
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
        // line 83
        if ( !($context["user"] ?? null)) {
            // line 84
            echo "              <li>
                <button onclick=\"window.location='/login'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">";
            // line 85
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Log in"));
            echo "</button>
              </li>
              ";
        } else {
            // line 88
            echo "              <li class=\" dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/profile.png\" width=\"30\"> ";
            // line 92
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
            echo "</a></li>
                  <li><a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/svg/book.svg\" width=\"30\"> ";
            // line 93
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
            echo "</a></li>
                  <li><a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/svg/clipboard.svg\" width=\"30\"> ";
            // line 94
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
            echo "</a></li>
                  <li><a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/svg/pencils.svg\" width=\"30\"> ";
            // line 95
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
            echo "</a></li>
                  <li><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"";
            // line 96
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/icons/png/signout.png");
            echo "\" width=\"30\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "</a></li>
                </ul>
                    <!--<button data-request=\"onLogout\" data-request-data=\"redirect: '/'\" class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                    ";
            // line 99
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "
                  </button> -->
              </li>
              ";
        }
        // line 103
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    // line 14
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $context["subnav"] = $this;
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 18
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 20
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) : ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["link"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null))))));
                echo "\"
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 22
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\">
                ";
                // line 23
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) : (call_user_func_array($this->env->getFilter('_')->getCallable(), array((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["link"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null))))), "html", null, true);
                echo "
                ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 25
                echo "            </a>
            ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    // line 27
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 29
                    echo $context["subnav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array()));
                    echo "
                </ul>
            ";
                }
                // line 32
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
        return array (  221 => 32,  215 => 29,  211 => 27,  209 => 26,  206 => 25,  202 => 24,  198 => 23,  193 => 22,  189 => 21,  185 => 20,  177 => 18,  173 => 17,  170 => 16,  167 => 15,  155 => 14,  148 => 103,  141 => 99,  133 => 96,  129 => 95,  125 => 94,  121 => 93,  117 => 92,  111 => 89,  108 => 88,  102 => 85,  99 => 84,  97 => 83,  83 => 72,  74 => 66,  66 => 61,  57 => 55,  50 => 51,  47 => 50,  40 => 45,  30 => 37,  28 => 36,  25 => 35,  23 => 2,);
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
                'Blog': ['blog/blog', 'Blog'],
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
              {# nav.render_menu(links) #}
              <!--<li class=\" \">
                <a href=\"/\" class=\"\">{{ 'Home'|_ }}</a>
              </li>-->
              <li class=\" dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                {{ 'Blog'|_ }}
                <span class=\"caret\"></span></a>
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  <li class=\" \">
                    <a href=\"/blog/page/default\" class=\"\">
                      {{ 'Blog'|_ }}
                    </a>
                  </li>
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
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ user.name }}<span class=\"caret\"></span></a>
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/profile.png\" width=\"30\"> {{ 'My profile'|_ }}</a></li>
                  <li><a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/svg/book.svg\" width=\"30\"> {{ 'New course'|_ }}</a></li>
                  <li><a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/svg/clipboard.svg\" width=\"30\"> {{ 'New evaluation'|_ }}</a></li>
                  <li><a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/svg/pencils.svg\" width=\"30\"> {{ 'New post'|_ }}</a></li>
                  <li><a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"{{ '/assets/images/icons/png/signout.png'|theme }}\" width=\"30\"> {{ 'Sign out'|_ }}</a></li>
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
