<?php

/* /home/vsites/homeschool.in.th/plugins/martin/forms/components/partials/flash.htm */
class __TwigTemplate_937cf66480f44e7550ee46ab85ce70af27c913f5b5f8cd3037ff4ac8b9df1641 extends Twig_Template
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
        ob_start();
        // line 2
        echo "
    <div class=\"alert alert-";
        // line 3
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    ";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "        <h4>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h4>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if (($context["content"] ?? null)) {
            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["list"] ?? null)) {
            // line 15
            echo "        <ul>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        }
        // line 21
        echo "
    </div>

";
        // line 24
        if (($context["jscript"] ?? null)) {
            // line 25
            echo "    <script>";
            echo ($context["jscript"] ?? null);
            echo "</script>
";
        }
        // line 27
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/martin/forms/components/partials/flash.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  85 => 25,  83 => 24,  78 => 21,  74 => 19,  65 => 17,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  42 => 9,  36 => 7,  34 => 6,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}

    <div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    {% if title %}
        <h4>{{ title }}</h4>
    {% endif %}

    {% if content %}
        <p>{{ content }}</p>
    {% endif %}

    {% if list %}
        <ul>
        {% for item in list %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    {% endif %}

    </div>

{% if jscript %}
    <script>{{ jscript|raw }}</script>
{% endif %}

{% endspaceless %}", "/home/vsites/homeschool.in.th/plugins/martin/forms/components/partials/flash.htm", "");
    }
}
