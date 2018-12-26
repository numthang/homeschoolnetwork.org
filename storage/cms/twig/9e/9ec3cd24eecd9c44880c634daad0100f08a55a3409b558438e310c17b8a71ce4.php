<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/profile.htm */
class __TwigTemplate_96b65a1f8c68f7704a08d0bb06085e26ab49f3ee4a5c3d6a188bafe2010f9415 extends Twig_Template
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
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\" form-group\">
            <label for=\"status\">Status</label>
            <select class=\" form-control\" name=\"status\" >
              <option value=\"1\" ";
        // line 31
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 1)) ? ("selected") : (""));
        echo ">Homeschool</option>
              <option value=\"0\" ";
        // line 32
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 0)) ? ("selected") : (""));
        echo ">Interested</option>          
            </select>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountEmail\">Email</label>
              <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>First Name</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Last Name</label>
            <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPassword\">New Password</label>
              <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPasswordConfirm\">Confirm New Password</label>
              <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Phone</label>
            <input name=\"phone\" type=\"text\" class=\"form-control\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Mobile</label>
            <input name=\"mobile\" type=\"text\" class=\"form-control\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Company</label>
            <input name=\"company\" type=\"text\" class=\"form-control\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-12\">
          <div class=\"form-group\">
            <label>Street Address</label>
            <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>City</label>
            <input name=\"city\" type=\"text\" class=\"form-control\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Zip</label>
            <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", array()), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
            <label>Country</label>
            ";
        // line 110
        echo RainLab\Location\Models\Country::formSelect("country_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), array("class" => (        // line 112
($context["class"] ?? null) . " form-control"), "emptyOption" => "-- SELECT COUNTRY --", "data-request" => "onChangeCountry", "data-request-data" => array("placeholder" => "-- SELECT STATE --", "name" => "country_id")));
        // line 116
        echo "
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
            <label>State</label>
            ";
        // line 122
        echo RainLab\Location\Models\State::formSelect("state_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()), array("id" => "state-select", "class" => (($context["class"] ?? null) . " form-control"), "emptyOption" => ($context["placeholder"] ?? null)));
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label>Line</label>
        <input name=\"line\" type=\"text\" class=\"form-control\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "line", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label>Website</label>
        <input name=\"website\" type=\"text\" class=\"form-control\" value=\"";
        // line 138
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
        // line 150
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 150,  210 => 138,  203 => 134,  196 => 130,  185 => 122,  180 => 120,  174 => 116,  172 => 112,  171 => 110,  166 => 108,  159 => 104,  150 => 98,  141 => 92,  132 => 86,  123 => 80,  114 => 74,  88 => 51,  79 => 45,  70 => 39,  60 => 32,  56 => 31,  23 => 1,);
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
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\" form-group\">
            <label for=\"status\">Status</label>
            <select class=\" form-control\" name=\"status\" >
              <option value=\"1\" {{ user.status == 1 ? 'selected' : '' }}>Homeschool</option>
              <option value=\"0\" {{ user.status == 0 ? 'selected' : '' }}>Interested</option>          
            </select>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountEmail\">Email</label>
              <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>First Name</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" value=\"{{ user.name }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Last Name</label>
            <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"{{ user.surname }}\">
          </div>
        </div>
        
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPassword\">New Password</label>
              <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
              <label for=\"accountPasswordConfirm\">Confirm New Password</label>
              <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
          </div>
        </div>
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
        <div class=\"col-sm-12\">
          <div class=\"form-group\">
            <label>Street Address</label>
            <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"{{ user.street_addr }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>City</label>
            <input name=\"city\" type=\"text\" class=\"form-control\" value=\"{{ user.city }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <label>Zip</label>
            <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"{{ user.zip }}\">
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"{{ wrapper_class }} form-group\">
            <label>Country</label>
            {{ form_select_country('country_id', user.country_id,
            {
                class: class ~ ' form-control',
                emptyOption: '-- SELECT COUNTRY --',
                'data-request': 'onChangeCountry',
                'data-request-data': {placeholder: '-- SELECT STATE --', name: 'country_id'},
            }) }}
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"{{ wrapper_class }} form-group\">
            <label>State</label>
            {{ form_select_state('state_id', user.country_id,  user.state_id, { id: 'state-select', class: class ~ ' form-control', emptyOption: placeholder }) }}
          </div>
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

{{ form_close() }}", "/home/vsites/homeschool.in.th/themes/responsiv-flat/partials/login/profile.htm", "");
    }
}
