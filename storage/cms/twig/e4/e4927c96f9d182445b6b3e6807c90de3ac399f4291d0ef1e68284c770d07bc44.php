<?php

/* /home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm */
class __TwigTemplate_b13f20b9ec29aa500249e8340854aeaca8862fdb7708ba63c6afb24dfabed5ad extends Twig_Template
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
        echo "<form data-request=\"onSave\">
  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#home\" data-toggle=\"tab\" title=\"welcome\">
        <span class=\"round-tabs one\">
        <i class=\"fui-info-circle\"></i>
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
        <span class=\"round-tabs two\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
      <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
        <span class=\"round-tabs three\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
        <span class=\"round-tabs four\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
      <li><a href=\"#doner\" data-toggle=\"tab\" title=\"completed\">
        <span class=\"round-tabs five\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"home\">
      <div class=\"form-group ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label for=\"name\">Homeschool Name</label>
        <input type=\"text\" class=\"form-control\" id=\"name\"  name=\"name\" placeholder=\"Enter Homeschool name : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label for=\"homeschooler_name\">Homeschooler Name</label>
        <input type=\"text\" class=\"form-control\" id=\"homeschooler_name\" name=\"homeschooler_name\" placeholder=\"Enter homeschooler name : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "homeschooler_name"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label for=\"message\">Introduction</label>
        <textarea class=\"form-control\" rows=\"10\" id=\"introduction\" name=\"introduction\" placeholder=\"Enter introduction\"></textarea>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"messages\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"doner\">
      
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 41,  66 => 37,  59 => 35,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSave\">
  <div class=\"board-inner\">
    <ul class=\"nav nav-tabs\" id=\"myTab\">
      <div class=\"liner\"></div>
      <li class=\"active\">
        <a href=\"#home\" data-toggle=\"tab\" title=\"welcome\">
        <span class=\"round-tabs one\">
        <i class=\"fui-info-circle\"></i>
        </span> </a>
      </li>
      <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
        <span class=\"round-tabs two\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
      <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
        <span class=\"round-tabs three\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
      <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
        <span class=\"round-tabs four\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
      <li><a href=\"#doner\" data-toggle=\"tab\" title=\"completed\">
        <span class=\"round-tabs five\">
        <i class=\"fui-chat\"></i>
        </span> </a>
      </li>
    </ul>
  </div>
  <div class=\"tab-content\">
    <div class=\"tab-pane fade in active\" id=\"home\">
      <div class=\"form-group {% if errors.first('name') %} has-error {% endif %}\">
        <label for=\"name\">Homeschool Name</label>
        <input type=\"text\" class=\"form-control\" id=\"name\"  name=\"name\" placeholder=\"Enter Homeschool name : {{ errors.first('name') }}\">
      </div>
      <div class=\"form-group\">
        <label for=\"homeschooler_name\">Homeschooler Name</label>
        <input type=\"text\" class=\"form-control\" id=\"homeschooler_name\" name=\"homeschooler_name\" placeholder=\"Enter homeschooler name : {{ errors.first('homeschooler_name') }}\">
      </div>
      <div class=\"form-group\">
        <label for=\"message\">Introduction</label>
        <textarea class=\"form-control\" rows=\"10\" id=\"introduction\" name=\"introduction\" placeholder=\"Enter introduction\"></textarea>
      </div>
    </div>
    <div class=\"tab-pane fade\" id=\"profile\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"messages\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
      
    </div>
    <div class=\"tab-pane fade\" id=\"doner\">
      
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <button type=\"submit\" class=\"btn btn-lg btn-info\">Save</button>
    </div>
  </div>
  <br>
</form>
", "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm", "");
    }
}
