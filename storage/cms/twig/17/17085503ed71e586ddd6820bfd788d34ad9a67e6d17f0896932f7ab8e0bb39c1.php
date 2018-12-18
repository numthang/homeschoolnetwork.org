<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/form-builder.htm */
class __TwigTemplate_ddc66b3a0a14eb3f6f57b566cd500758887099b36133c602d9dd72beee068cab extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Magic Forms</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
     ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array())) {
            // line 11
            echo "
        <div class=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "id", array()), "html", null, true);
            echo "\"></div>
    
        ";
            $_type = isset($context["type"]) ? $context["type"] : null;            $_message = isset($context["message"]) ? $context["message"] : null;            // line 14
            foreach (Flash::getMessages() as $type => $messages) {
                foreach ($messages as $message) {
                    $context["type"] = $type;                    $context["message"] = $message;                    // line 15
                    echo "    
            ";
                    // line 16
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "code", array()), ($context["message"] ?? null))) {
                        // line 17
                        echo "    
                <div class=\"alert alert-success\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    ";
                        // line 22
                        echo twig_replace_filter(($context["message"] ?? null), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "code", array()) => ""));
                        echo "
                </div>
    
            ";
                    }
                    // line 26
                    echo "    
        ";
                }
            }
            $context["type"] = $_type;            $context["message"] = $_message;            // line 28
            echo "    
        ";
            // line 29
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
($context["renderForm"] ?? null), "form", array()), "code", array()), "class" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 31
($context["renderForm"] ?? null), "form", array()), "css_class", array()), "data-request" => (            // line 32
($context["renderForm"] ?? null) . "::onSubmit"), "data-request-data" => array("form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["renderForm"] ?? null), "form", array()), "code", array())))));
            // line 35
            echo "
    
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "sections", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["section"], "fields", array()))) {
                    // line 38
                    echo "    
                ";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "html", array());
                    echo "
    
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ( !twig_get_attribute($this->env, $this->source, $context["field"], "section", array())) {
                    // line 44
                    echo "    
                ";
                    // line 45
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "field_type", array()), "code", array()) == "file_uploader")) {
                        // line 46
                        echo "                    ";
                        $context['__cms_partial_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["renderForm"] ?? null) . "::file_uploader")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 47
                        echo "                ";
                    } else {
                        // line 48
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "html", array());
                        echo "
                ";
                    }
                    // line 50
                    echo "    
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    
        ";
            // line 53
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "
    
    
    ";
        } else {
            // line 57
            echo "    
        <p style=\"color: #ff0033;\">
            Form with code \"";
            // line 59
            echo twig_escape_filter($this->env, ($context["formCode"] ?? null), "html", null, true);
            echo "\" does not exist! Did you select correct form in component settings?
        </p>
    
    ";
        }
        // line 63
        echo "    </div>
  </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/form-builder.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  151 => 59,  147 => 57,  140 => 53,  137 => 52,  129 => 50,  123 => 48,  120 => 47,  115 => 46,  113 => 45,  110 => 44,  105 => 43,  102 => 42,  92 => 39,  89 => 38,  84 => 37,  80 => 35,  78 => 33,  77 => 32,  76 => 31,  75 => 30,  74 => 29,  71 => 28,  66 => 26,  59 => 22,  52 => 17,  50 => 16,  47 => 15,  44 => 14,  39 => 12,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Magic Forms</h3>
    </div>
</section>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
     {% if renderForm.form %}

        <div class=\"{{ renderForm.id }}\"></div>
    
        {% flash %}
    
            {% if renderForm.form.code in message %}
    
                <div class=\"alert alert-success\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    {{ message|replace({ (renderForm.form.code) : ''})|raw }}
                </div>
    
            {% endif %}
    
        {% endflash %}
    
        {{ form_open({
                'id': renderForm.form.code,
                'class': renderForm.form.css_class,
                'data-request': renderForm ~ '::onSubmit',
                'data-request-data': {form: renderForm.form.code}
            })
        }}
    
            {% for section in renderForm.form.sections if not section.fields is empty %}
    
                {{ section.html|raw }}
    
            {% endfor %}
    
            {% for field in renderForm.form.fields if not field.section %}
    
                {% if (field.field_type.code == 'file_uploader') %}
                    {% partial renderForm ~ '::file_uploader' %}
                {% else %}
                    {{ field.html|raw }}
                {% endif %}
    
            {% endfor %}
    
        {{ form_close() }}
    
    
    {% else %}
    
        <p style=\"color: #ff0033;\">
            Form with code \"{{ formCode }}\" does not exist! Did you select correct form in component settings?
        </p>
    
    {% endif %}
    </div>
  </div>
</div>
<br>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/form-builder.htm", "");
    }
}
