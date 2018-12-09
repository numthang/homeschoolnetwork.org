<?php

/* /home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/login.htm */
class __TwigTemplate_ad8e8c712b8e40e105ae3218713648646004416d27aaf98908929dc3d94ee465 extends Twig_Template
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
        if ( !($context["user"] ?? null)) {
            // line 13
            echo "            <div class=\"row\">
        
                <div class=\"col-md-6\">
                    <h3>Sign in</h3>
                    ";
            // line 17
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "                    
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["link"]) {
                // line 20
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sociallogin"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 23
            echo "                    
                    ";
            // line 24
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resetPassword"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 25
            echo "                </div>
        
                <div class=\"col-md-6\">
                    ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "                </div>
        
            </div>
        ";
        } else {
            // line 33
            echo "        <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>

            ";
            // line 35
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "        
            ";
            // line 37
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 38
            echo "        
            ";
            // line 39
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 40
            echo "        
        ";
        }
        // line 42
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  119 => 40,  115 => 39,  112 => 38,  108 => 37,  105 => 36,  101 => 35,  97 => 33,  91 => 29,  87 => 28,  82 => 25,  78 => 24,  75 => 23,  71 => 22,  60 => 20,  56 => 19,  53 => 18,  49 => 17,  43 => 13,  41 => 12,  32 => 5,  28 => 4,  23 => 1,);
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
        {% if not user %}
            <div class=\"row\">
        
                <div class=\"col-md-6\">
                    <h3>Sign in</h3>
                    {% partial account ~ '::signin' %}
                    
                    {% for name, link in social_login_links %}
<a href=\"{{ link }}\">{{ name }}</a>
{% endfor %}
{% component 'sociallogin' %}
                    
                    {% component 'resetPassword' %}
                </div>
        
                <div class=\"col-md-6\">
                    {% partial account ~ '::register' %}
                </div>
        
            </div>
        {% else %}
        <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>

            {% partial account ~ '::activation_check' %}
        
            {% partial account ~ '::update' %}
        
            {% partial account ~ '::deactivate_link' %}
        
        {% endif %}
    </div>
  </div>
</section>", "/home/vsites/homeschool.in.th/themes/laratify-octobercms-octaskin/pages/login.htm", "");
    }
}
