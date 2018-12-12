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
        if (twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array())) {
            // line 2
            echo "
    <div class=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "id", array()), "html", null, true);
            echo "\"></div>

    ";
            $_type = isset($context["type"]) ? $context["type"] : null;            $_message = isset($context["message"]) ? $context["message"] : null;            // line 5
            foreach (Flash::getMessages() as $type => $messages) {
                foreach ($messages as $message) {
                    $context["type"] = $type;                    $context["message"] = $message;                    // line 6
                    echo "
        ";
                    // line 7
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "code", array()), ($context["message"] ?? null))) {
                        // line 8
                        echo "
            <div class=\"alert alert-success\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                ";
                        // line 13
                        echo twig_replace_filter(($context["message"] ?? null), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "code", array()) => ""));
                        echo "
            </div>

        ";
                    }
                    // line 17
                    echo "
    ";
                }
            }
            $context["type"] = $_type;            $context["message"] = $_message;            // line 19
            echo "
    ";
            // line 20
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["renderForm"] ?? null), "form", array()), "code", array()), "class" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["renderForm"] ?? null), "form", array()), "css_class", array()), "data-request" => (            // line 23
($context["renderForm"] ?? null) . "::onSubmit"), "data-request-data" => array("form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["renderForm"] ?? null), "form", array()), "code", array())))));
            // line 26
            echo "

        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "sections", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["section"], "fields", array()))) {
                    // line 29
                    echo "
            ";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["section"], "html", array());
                    echo "

        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["renderForm"] ?? null), "form", array()), "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ( !twig_get_attribute($this->env, $this->source, $context["field"], "section", array())) {
                    // line 35
                    echo "
            ";
                    // line 36
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "field_type", array()), "code", array()) == "file_uploader")) {
                        // line 37
                        echo "                ";
                        $context['__cms_partial_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["renderForm"] ?? null) . "::file_uploader")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 38
                        echo "            ";
                    } else {
                        // line 39
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "html", array());
                        echo "
            ";
                    }
                    // line 41
                    echo "
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
    ";
            // line 44
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "


";
        } else {
            // line 48
            echo "
    <p style=\"color: #ff0033;\">
        Form with code \"";
            // line 50
            echo twig_escape_filter($this->env, ($context["formCode"] ?? null), "html", null, true);
            echo "\" does not exist! Did you select correct form in component settings?
    </p>

";
        }
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
        return array (  140 => 50,  136 => 48,  129 => 44,  126 => 43,  118 => 41,  112 => 39,  109 => 38,  104 => 37,  102 => 36,  99 => 35,  94 => 34,  91 => 33,  81 => 30,  78 => 29,  73 => 28,  69 => 26,  67 => 24,  66 => 23,  65 => 22,  64 => 21,  63 => 20,  60 => 19,  55 => 17,  48 => 13,  41 => 8,  39 => 7,  36 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if renderForm.form %}

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

{% endif %}", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/form-builder.htm", "");
    }
}
