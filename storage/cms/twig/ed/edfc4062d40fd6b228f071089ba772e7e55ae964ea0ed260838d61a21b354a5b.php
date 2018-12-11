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
        <a href=\"#account\" data-toggle=\"tab\" title=\"welcome\">
        <span class=\"round-tabs one\">
        <i class=\"fui-user\"></i>
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
        <span class=\"round-tabs two\">
        <i class=\"fui-location\"></i>
        </span> </a>
      </li>
      <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
        <span class=\"round-tabs three\">
        <i class=\"fui-home\"></i>
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
        <span class=\"round-tabs four\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"account\">
      <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
          <label for=\"accountEmail\">Email</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 38
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
      
    </div>
    <div class=\"tab-pane fade\" id=\"messages\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
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
        // line 72
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
        return array (  106 => 72,  91 => 60,  66 => 38,  58 => 33,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate') }}

  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#account\" data-toggle=\"tab\" title=\"welcome\">
        <span class=\"round-tabs one\">
        <i class=\"fui-user\"></i>
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
        <span class=\"round-tabs two\">
        <i class=\"fui-location\"></i>
        </span> </a>
      </li>
      <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
        <span class=\"round-tabs three\">
        <i class=\"fui-home\"></i>
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
        <span class=\"round-tabs four\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"account\">
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
      
    </div>
    <div class=\"tab-pane fade\" id=\"messages\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      <div class=\"form-group\">
        <label>Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"{{ user.facebook }}\">
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
