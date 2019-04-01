<?php

/* /home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/login/profile.htm */
class __TwigTemplate_6086de3ce5b744fc3f727b5f5bb239c05f8b5eacb59d76fe778713cb6b2e5445 extends Twig_Template
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
      <a href=\"/user/profile/";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\"><img class=\"center-block\" src=\"https://graph.facebook.com/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "/picture?type=small\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\" style=\"border-radius: 100px; height:85px; padding:10px;\"></a>
    </div>
    <div class=\"col-sm-11\">
      <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "</h3>
    </div>
  </div>
</section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 14
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 15
                echo "            <p data-control=\"flash-message\" data-interval=\"5\" class=\"";
                echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
          ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 17
        echo "          ";
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate"));
        echo "
            <div class=\"accordion\">
              <dl>
                <dt><a class=\"accordionTitle accordionTitleActive\" href=\"#\"><i class=\"fui-user\"></i> Account</a></dt>
                <dd class=\"accordionItem \">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                        <label for=\"status\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Status"));
        echo "</label>
                        <select class=\" form-control\" name=\"status\" >
                          <option value=\"1\" ";
        // line 27
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 1)) ? ("selected") : (""));
        echo ">Homeschool</option>
                          <option value=\"0\" ";
        // line 28
        echo (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "status", array()) == 0)) ? ("selected") : (""));
        echo ">Interested</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                          <label for=\"accountEmail\">Email</label>
                          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">

                        <label>First Name</label>
                        <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                        <label>Last Name</label>
                        <input name=\"surname\" type=\"text\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>

                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                          <label for=\"accountPassword\">New Password</label>

                          <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" autocomplete=\"false\">
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                          <label for=\"accountPasswordConfirm\">Confirm New Password</label>

                          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\" autocomplete=\"false\">
                      </div>
                    </div>
                  </div>
                </dd>
                <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-location\"></i> Profile</a></dt>
                <dd class=\"accordionItem accordionItemCollapsed\">
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
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-sm-12\">
                      <div class=\"form-group\">
                        <label>Street Address</label>
                        <input name=\"street_addr\" type=\"text\" class=\"form-control\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">

                        <label>City</label>
                        <input name=\"city\" type=\"text\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>

                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                        <label>Zip</label>
                        <input name=\"zip\" type=\"text\" class=\"form-control\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
                        <label>Country</label>
                        ";
        // line 113
        echo RainLab\Location\Models\Country::formSelect("country_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), array("class" => (        // line 115
($context["class"] ?? null) . " form-control"), "emptyOption" => "-- SELECT COUNTRY --", "data-request" => "onChangeCountry", "data-request-data" => array("placeholder" => "-- SELECT STATE --", "name" => "country_id")));
        // line 119
        echo "
                      </div>

                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
                        <label>State</label>
                        ";
        // line 126
        echo RainLab\Location\Models\State::formSelect("state_id", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country_id", array()), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()), array("id" => "state-select", "class" => (($context["class"] ?? null) . " form-control"), "emptyOption" => ($context["placeholder"] ?? null)));
        echo "

                      </div>
                    </div>
                    <div class=\"col-sm-12\">
                      <div class=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["wrapper_class"] ?? null), "html", null, true);
        echo " form-group\">
                        <label>";
        // line 132
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Description"));
        echo "</label>
                        <textarea name=\"note\" class=\"form-control\" rows=\"10\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "note", array()), "html", null, true);
        echo "</textarea>
                      </div>
                    </div>
                  </div>
                </dd>
                <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-chat\"></i> Contact</a></dt>
                <dd class=\"accordionItem accordionItemCollapsed\">
                  <div class=\"form-group\">
                    <label>Facebook</label>
                    <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "\">
                  </div>
                  <div class=\"form-group\">
                    <label>Line</label>
                    <input name=\"line\" type=\"text\" class=\"form-control\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "line", array()), "html", null, true);
        echo "\">

                  </div>
                  <div class=\"form-group\">
                    <label>Website</label>
                    <input name=\"website\" type=\"text\" class=\"form-control\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "website", array()), "html", null, true);
        echo "\">
                  </div>
                </dd>
              </dl>
            </div>
            <script src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/accordion.js"));
        echo "\"></script>
            <div class=\"clearfix\"></div>
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
              </div>
            </div>
            <br>

          ";
        // line 165
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
        </div>
    </div>
</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/login/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 165,  267 => 156,  259 => 151,  251 => 146,  244 => 142,  232 => 133,  228 => 132,  224 => 131,  216 => 126,  211 => 124,  204 => 119,  202 => 115,  201 => 113,  196 => 111,  189 => 107,  179 => 100,  169 => 93,  160 => 87,  150 => 80,  141 => 74,  112 => 48,  103 => 42,  93 => 35,  83 => 28,  79 => 27,  74 => 25,  62 => 17,  53 => 15,  50 => 14,  38 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
  <div class=\"container\">
    <div class=\"col-sm-1\">
      <a href=\"/user/profile/{{ user.id }}\"><img class=\"center-block\" src=\"https://graph.facebook.com/{{ user.facebook }}/picture?type=small\" title=\"{{ user.name }}\" style=\"border-radius: 100px; height:85px; padding:10px;\"></a>
    </div>
    <div class=\"col-sm-11\">
      <h3>{{ user.name }} {{ user.surname }}</h3>
    </div>
  </div>
</section>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
          {% flash %}
            <p data-control=\"flash-message\" data-interval=\"5\" class=\"{{ type == 'error' ? 'danger' : type }}\">{{ message }}<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button></p>
          {% endflash %}
          {{ form_ajax('onUpdate') }}
            <div class=\"accordion\">
              <dl>
                <dt><a class=\"accordionTitle accordionTitleActive\" href=\"#\"><i class=\"fui-user\"></i> Account</a></dt>
                <dd class=\"accordionItem \">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                        <label for=\"status\">{{ 'Status'|_ }}</label>
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

                          <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" autocomplete=\"false\">
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                          <label for=\"accountPasswordConfirm\">Confirm New Password</label>

                          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\" autocomplete=\"false\">
                      </div>
                    </div>
                  </div>
                </dd>
                <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-location\"></i> Profile</a></dt>
                <dd class=\"accordionItem accordionItemCollapsed\">
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
                    <div class=\"col-sm-12\">
                      <div class=\"{{ wrapper_class }} form-group\">
                        <label>{{ 'Description'|_ }}</label>
                        <textarea name=\"note\" class=\"form-control\" rows=\"10\">{{ user.note }}</textarea>
                      </div>
                    </div>
                  </div>
                </dd>
                <dt><a href=\"#\" class=\"accordionTitle\"><i class=\"fui-chat\"></i> Contact</a></dt>
                <dd class=\"accordionItem accordionItemCollapsed\">
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
                </dd>
              </dl>
            </div>
            <script src=\"{{ ['assets/js/accordion.js']|theme }}\"></script>
            <div class=\"clearfix\"></div>
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
              </div>
            </div>
            <br>

          {{ form_close() }}
        </div>
    </div>
</div>
<br>", "/home/vsites/homeschoolnetwork.org/themes/responsiv-flat/pages/login/profile.htm", "");
    }
}
