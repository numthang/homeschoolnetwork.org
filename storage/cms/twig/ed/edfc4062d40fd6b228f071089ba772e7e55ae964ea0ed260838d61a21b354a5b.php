<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/user-profile.htm */
class __TwigTemplate_c364709c4db30ecadf4a2d5824f038c723d5d33080ba205d47ab7cb7e1d1f8df extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate"));
        echo "

  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#account\" data-toggle=\"tab\" title=\"Account\">
        <span class=\"round-tabs one\">
        <i class=\"fui-user\"></i> Account
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"Profile\">
        <span class=\"round-tabs two\">
        <i class=\"fui-location\"></i> Profile
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"Contact\">
        <span class=\"round-tabs four\">
        <i class=\"fui-chat\"></i> Contact
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"account\">
      <div class=\" form-group\">
        <label for=\"status\">Status</label>
        <select class=\" form-control\" name=\"status\" >
          <option value=\"1\" ";
        // line 29
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 1)) ? ("selected") : (""));
        echo ">Homeschool</option>
          <option value=\"0\" ";
        // line 30
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 0)) ? ("selected") : (""));
        echo ">Interested</option>          
        </select>
      </div>
      <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountEmail\">Email</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountPassword\">New Password</label>
          <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountPasswordConfirm\">Confirm New Password</label>
          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Phone</label>
            <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Mobile</label>
            <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Company</label>
            <input name=\"company\" type=\"text\" class=\"form-control\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          ";
        // line 74
        if (call_user_func_array($this->env->getFunction('locationPluginEnabled')->getCallable(), array())) {
            // line 75
            echo "          <div class=\"";
            echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
            echo " form-group\">

            <label>Country</label>

              ";
            // line 79
            echo RainLab\Location\Models\Country::formSelect("country_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), array("class" => (            // line 81
($context["class"] ?? null) . " form-control"), "emptyOption" => "SELECT COUNTRY"));
            // line 83
            echo "
          </div>

        ";
        } else {
            // line 87
            echo "
            <p style=\"color: #ff0033;\">
                You must install <a target=\"_blank\" href=\"https://octobercms.com/plugin/rainlab-location\">Location Plugin</a> to use location fields!
            </p>

        ";
        }
        // line 93
        echo "        </div>
        <div class=\"col-sm-6\">
          
        </div>

      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label>Line</label>
        <input name=\"line\" type=\"text\" class=\"form-control\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "line", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label>Website</label>
        <input name=\"website\" type=\"text\" class=\"form-control\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "website", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>

";
        // line 123
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/user-profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 123,  173 => 111,  166 => 107,  159 => 103,  147 => 93,  139 => 87,  133 => 83,  131 => 81,  130 => 79,  122 => 75,  120 => 74,  113 => 70,  104 => 64,  95 => 58,  74 => 40,  66 => 35,  58 => 30,  54 => 29,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate') }}

  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#account\" data-toggle=\"tab\" title=\"Account\">
        <span class=\"round-tabs one\">
        <i class=\"fui-user\"></i> Account
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"Profile\">
        <span class=\"round-tabs two\">
        <i class=\"fui-location\"></i> Profile
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"Contact\">
        <span class=\"round-tabs four\">
        <i class=\"fui-chat\"></i> Contact
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"account\">
      <div class=\" form-group\">
        <label for=\"status\">Status</label>
        <select class=\" form-control\" name=\"status\" >
          <option value=\"1\" {{ user.status == 1 ? 'selected' : '' }}>Homeschool</option>
          <option value=\"0\" {{ user.status == 0 ? 'selected' : '' }}>Interested</option>          
        </select>
      </div>
      <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountEmail\">Email</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountPassword\">New Password</label>
          <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountPasswordConfirm\">Confirm New Password</label>
          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Phone</label>
            <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"{{ user.phone }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Mobile</label>
            <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"{{ user.mobile }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Company</label>
            <input name=\"company\" type=\"text\" class=\"form-control\" value=\"{{ user.company }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          {% if locationPluginEnabled() %}
          <div class=\"{{ wrapper_class }} form-group\">

            <label>Country</label>

              {{ form_select_country('country_id', user.country_id,
              {
                  class: class ~ ' form-control',
                  emptyOption: 'SELECT COUNTRY'
              }) }}
          </div>

        {% else %}

            <p style=\"color: #ff0033;\">
                You must install <a target=\"_blank\" href=\"https://octobercms.com/plugin/rainlab-location\">Location Plugin</a> to use location fields!
            </p>

        {% endif %}
        </div>
        <div class=\"col-sm-6\">
          
        </div>

      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"{{ user.facebook }}\">
      </div>
      <div class=\"form-group\">
        <label>Line</label>
        <input name=\"line\" type=\"text\" class=\"form-control\" value=\"{{ user.line }}\">
      </div>
      <div class=\"form-group\">
        <label>Website</label>
        <input name=\"website\" type=\"text\" class=\"form-control\" value=\"{{ user.website }}\">
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>

{{ form_close() }}", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/user-profile.htm", "");
    }
}
