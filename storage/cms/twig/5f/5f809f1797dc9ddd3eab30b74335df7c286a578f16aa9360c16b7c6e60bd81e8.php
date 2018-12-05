<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/add-course.htm */
class __TwigTemplate_627e38a918ed2b5945f719d10611707af24183680d45ddbb71fd5edf0fd198aa extends Twig_Template
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
        <h3>Add New Course for ... </h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("courses"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "        </div>
        <div class=\"col-md-8\">
           
                <div class=\"board\">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class=\"board-inner\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\">
                    <div class=\"liner\"></div>
                     <li class=\"active\">
                     <a href=\"#home\" data-toggle=\"tab\" title=\"welcome\">
                      <span class=\"round-tabs one\">
                              <i class=\"glyphicon glyphicon-home\"></i>
                      </span> 
                  </a></li>

                  <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
                     <span class=\"round-tabs two\">
                         <i class=\"fui-chat\"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
                     <span class=\"round-tabs three\">
                          <i class=\"glyphicon glyphicon-gift\"></i>
                     </span> </a>
                     </li>

                     <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
                         <span class=\"round-tabs four\">
                              <i class=\"glyphicon glyphicon-comment\"></i>
                         </span> 
                     </a></li>

                     <li><a href=\"#doner\" data-toggle=\"tab\" title=\"completed\">
                         <span class=\"round-tabs five\">
                              <i class=\"glyphicon glyphicon-ok\"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class=\"tab-content\">
                      <div class=\"tab-pane fade in active\" id=\"home\">

                          <h3 class=\"head text-center\">Welcome to Bootsnipp<sup>™</sup> <span style=\"color:#f48260;\">♥</span></h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> start using bootsnipp <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                      </div>
                      <div class=\"tab-pane fade\" id=\"profile\">
                          <h3 class=\"head text-center\">Create a Bootsnipp<sup>™</sup> Profile</h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> create your profile <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                          
                      </div>
                      <div class=\"tab-pane fade\" id=\"messages\">
                          <h3 class=\"head text-center\">Bootsnipp goodies</h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> start using bootsnipp <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                      </div>
                      <div class=\"tab-pane fade\" id=\"settings\">
                          <h3 class=\"head text-center\">Drop comments!</h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> start using bootsnipp <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                      </div>
                      <div class=\"tab-pane fade\" id=\"doner\">
  <div class=\"text-center\">
    <i class=\"img-intro icon-checkmark-circle\"></i>
</div>
<h3 class=\"head text-center\">thanks for staying tuned! <span style=\"color:#f48260;\">♥</span> Bootstrap</h3>
<p class=\"narrow text-center\">
  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
</p>
</div>
<div class=\"clearfix\"></div>
</div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/add-course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Add New Course for ... </h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            {% component 'courses' %}
        </div>
        <div class=\"col-md-8\">
           
                <div class=\"board\">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class=\"board-inner\">
                    <ul class=\"nav nav-tabs\" id=\"myTab\">
                    <div class=\"liner\"></div>
                     <li class=\"active\">
                     <a href=\"#home\" data-toggle=\"tab\" title=\"welcome\">
                      <span class=\"round-tabs one\">
                              <i class=\"glyphicon glyphicon-home\"></i>
                      </span> 
                  </a></li>

                  <li><a href=\"#profile\" data-toggle=\"tab\" title=\"profile\">
                     <span class=\"round-tabs two\">
                         <i class=\"fui-chat\"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href=\"#messages\" data-toggle=\"tab\" title=\"bootsnipp goodies\">
                     <span class=\"round-tabs three\">
                          <i class=\"glyphicon glyphicon-gift\"></i>
                     </span> </a>
                     </li>

                     <li><a href=\"#settings\" data-toggle=\"tab\" title=\"blah blah\">
                         <span class=\"round-tabs four\">
                              <i class=\"glyphicon glyphicon-comment\"></i>
                         </span> 
                     </a></li>

                     <li><a href=\"#doner\" data-toggle=\"tab\" title=\"completed\">
                         <span class=\"round-tabs five\">
                              <i class=\"glyphicon glyphicon-ok\"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class=\"tab-content\">
                      <div class=\"tab-pane fade in active\" id=\"home\">

                          <h3 class=\"head text-center\">Welcome to Bootsnipp<sup>™</sup> <span style=\"color:#f48260;\">♥</span></h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> start using bootsnipp <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                      </div>
                      <div class=\"tab-pane fade\" id=\"profile\">
                          <h3 class=\"head text-center\">Create a Bootsnipp<sup>™</sup> Profile</h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> create your profile <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                          
                      </div>
                      <div class=\"tab-pane fade\" id=\"messages\">
                          <h3 class=\"head text-center\">Bootsnipp goodies</h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> start using bootsnipp <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                      </div>
                      <div class=\"tab-pane fade\" id=\"settings\">
                          <h3 class=\"head text-center\">Drop comments!</h3>
                          <p class=\"narrow text-center\">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class=\"text-center\">
                    <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> start using bootsnipp <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                </p>
                      </div>
                      <div class=\"tab-pane fade\" id=\"doner\">
  <div class=\"text-center\">
    <i class=\"img-intro icon-checkmark-circle\"></i>
</div>
<h3 class=\"head text-center\">thanks for staying tuned! <span style=\"color:#f48260;\">♥</span> Bootstrap</h3>
<p class=\"narrow text-center\">
  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
</p>
</div>
<div class=\"clearfix\"></div>
</div>
        </div>
    </div>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/add-course.htm", "");
    }
}
