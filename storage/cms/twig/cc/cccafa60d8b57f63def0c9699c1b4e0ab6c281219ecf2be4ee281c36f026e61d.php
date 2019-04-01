<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/user/profile.htm */
class __TwigTemplate_6345854244bd1787dac91112c9d59d0317957bde78d16126c89363d30a066cde extends Twig_Template
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
      <div class=\"col-sm-1\">
        <img class=\"center-block\" src=\"https://graph.facebook.com/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "facebook", array()), "html", null, true);
        echo "/picture?type=small\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
        echo "\" style=\"border-radius: 100px; height:85px; padding:10px;\">
      </div>
      <div class=\"col-sm-11\">
        <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "surname", array()), "html", null, true);
        echo "</h3>
      </div>
    </div>
</section>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-7\">
      <b>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("About"));
        echo "</b> <p>";
        echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "note", array());
        echo "</p>
      <b>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Course"));
        echo "</b> <p>
        ";
        // line 16
        $context["courses"] = twig_get_attribute($this->env, $this->source, ($context["courses"] ?? null), "courses", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 18
            echo "          <a href=\"/user/course/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "created_at", array()), "U"), "html", null, true);
            echo "\"> <span class=\"fui-new\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", array()), "html", null, true);
            echo "</a> [ ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "modified_at", array()), "m/d/Y"), "html", null, true);
            echo " ]<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </p>
      <b>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Evaluation"));
        echo "</b>
      <p>
        ";
        // line 23
        $context["evaluations"] = twig_get_attribute($this->env, $this->source, ($context["evaluations"] ?? null), "evaluations", array());
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evaluations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 25
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "evaluations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 26
                echo "            <a href=\"/user/evaluation/";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "created_at", array()), "U"), "html", null, true);
                echo "\"> <span class=\"fui-new\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", array()), "html", null, true);
                echo "</a> [ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "modified_at", array()), "m/d/Y"), "html", null, true);
                echo " ]<br>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </p>
    </div>

    <div class=\"col-md-5\">
        <div class=\"contact-banner\">
            <h3 class=\"banner-title\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact"));
        echo "</h3>
            <ul>
                <li>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "street_addr", array()), "html", null, true);
        echo "</li>
                <li>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "city", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "zip", array()), "html", null, true);
        echo "</li>
                <li>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mobile"));
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "mobile", array()), "html", null, true);
        echo "</li>
                <li>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Phone"));
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "phone", array()), "html", null, true);
        echo "</li>
                <li>";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Email"));
        echo ": <a href=\"mail-to:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "username", array()), "html", null, true);
        echo "\">";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderDetails"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</a></li>
                <li>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Facebook"));
        echo ": <a href=\"https://www.facebook.com/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "facebook", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "facebook", array()), "html", null, true);
        echo "</a></li>
                <li>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Twitter"));
        echo ": <a href=\"https://www.twitter.com/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "twitter", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "twitter", array()), "html", null, true);
        echo "</a></li>
            </ul>
        </div>


        <div class=\"google-maps\">

          <iframe
            width=\"500\"
            height=\"450\"
            frameborder=\"0\"
            scrolling=\"no\"
            marginheight=\"0\"
            marginwidth=\"0\"
            src=\"https://maps.google.com/maps?q=";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "street_addr", array()), "html", null, true);
        echo "&t=&z=13&ie=UTF8&iwloc=&output=embed\"></iframe>
        </div>

    </div>
  </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/user/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 56,  171 => 42,  163 => 41,  153 => 40,  147 => 39,  141 => 38,  133 => 37,  129 => 36,  124 => 34,  117 => 29,  111 => 28,  98 => 26,  93 => 25,  88 => 24,  86 => 23,  81 => 21,  78 => 20,  65 => 18,  60 => 17,  58 => 16,  54 => 15,  48 => 14,  36 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
      <div class=\"col-sm-1\">
        <img class=\"center-block\" src=\"https://graph.facebook.com/{{ record.facebook }}/picture?type=small\" title=\"{{ record.name }}\" style=\"border-radius: 100px; height:85px; padding:10px;\">
      </div>
      <div class=\"col-sm-11\">
        <h3>{{ record.name }} {{ record.surname }}</h3>
      </div>
    </div>
</section>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-7\">
      <b>{{ 'About'|_ }}</b> <p>{{ record.note|raw }}</p>
      <b>{{ 'Course'|_ }}</b> <p>
        {%  set courses = courses.courses %}
        {% for c in courses %}
          <a href=\"/user/course/{{ c.created_at|date('U') }}\"> <span class=\"fui-new\"></span> {{ c.name }}</a> [ {{ c.modified_at|date(\"m/d/Y\") }} ]<br>
        {% endfor %}
      </p>
      <b>{{ 'Evaluation'|_ }}</b>
      <p>
        {%  set evaluations = evaluations.evaluations %}
        {% for c in evaluations %}
          {% for e in c.evaluations %}
            <a href=\"/user/evaluation/{{ e.created_at|date('U') }}\"> <span class=\"fui-new\"></span> {{ e.name }}</a> [ {{ e.modified_at|date(\"m/d/Y\") }} ]<br>
          {% endfor %}
        {% endfor %}
      </p>
    </div>

    <div class=\"col-md-5\">
        <div class=\"contact-banner\">
            <h3 class=\"banner-title\">{{ 'Contact'|_ }}</h3>
            <ul>
                <li>{{ record.street_addr }}</li>
                <li>{{ record.city }},{{ record.state.name }} {{ record.zip }}</li>
                <li>{{ 'Mobile'|_ }}: {{ record.mobile }}</li>
                <li>{{ 'Phone'|_ }}: {{ record.phone }}</li>
                <li>{{ 'Email'|_ }}: <a href=\"mail-to:{{ record.username }}\">{% component 'builderDetails' %}</a></li>
                <li>{{ 'Facebook'|_ }}: <a href=\"https://www.facebook.com/{{ record.facebook }}\">{{ record.facebook }}</a></li>
                <li>{{ 'Twitter'|_ }}: <a href=\"https://www.twitter.com/{{ record.twitter }}\">{{ record.twitter }}</a></li>
            </ul>
        </div>


        <div class=\"google-maps\">

          <iframe
            width=\"500\"
            height=\"450\"
            frameborder=\"0\"
            scrolling=\"no\"
            marginheight=\"0\"
            marginwidth=\"0\"
            src=\"https://maps.google.com/maps?q={{record.street_addr}}&t=&z=13&ie=UTF8&iwloc=&output=embed\"></iframe>
        </div>

    </div>
  </div>
</div>
<br>", "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/user/profile.htm", "");
    }
}
