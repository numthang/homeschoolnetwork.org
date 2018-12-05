<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/portfolio/portfolio.htm */
class __TwigTemplate_4cef93cb53fde3bde65fdc46310fde030899c19195ccc537eb84947dd6e75865 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/isotope/jquery.isotope.js", 1 => "assets/javascript/pages/portfolio.js"));
        // line 5
        echo "\"></script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 7
        echo "
<section id=\"layout-title\">
    <div class=\"container\">
        <h3 class=\"pull-left\">Portfolio</h3>

        <div class=\"btn-toolbar pull-right\">
            <div class=\"btn-group\" id=\"filters\">
                <a class=\"btn btn-primary active\" href=\"#filter\" class=\"selected\" data-filter=\"*\"><span class=\"fui-list\"></span> All</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".nature\"><span class=\"fui-eye\"></span> Nature</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".people\"><span class=\"fui-user\"></span> People</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".scenery\"><span class=\"fui-video\"></span> Scenery</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".world\"><span class=\"fui-photo\"></span> World</a>
            </div>
        </div>
    </div>
</section>

<div class=\"container\">

    <!-- start: Portfolio -->
    <div id=\"portfolioItems\" class=\"row\">

        <div class=\"col-md-3 portfolio-item nature people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project1.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-6 portfolio-item scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project4.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Money <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project2.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item nature scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project3.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Beach <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project1.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" title=\"Title\">
                    <img src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/thumbs/project2.jpg");
        echo "\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio/project");
        echo "\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/portfolio/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 90,  163 => 87,  159 => 86,  149 => 79,  143 => 76,  139 => 75,  129 => 68,  123 => 65,  119 => 64,  109 => 57,  103 => 54,  99 => 53,  89 => 46,  83 => 43,  79 => 42,  69 => 35,  63 => 32,  59 => 31,  33 => 7,  31 => 1,  28 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put scripts %}
    <script src=\"{{ [
        'assets/vendor/isotope/jquery.isotope.js',
        'assets/javascript/pages/portfolio.js',
    ]|theme }}\"></script>
{% endput %}

<section id=\"layout-title\">
    <div class=\"container\">
        <h3 class=\"pull-left\">Portfolio</h3>

        <div class=\"btn-toolbar pull-right\">
            <div class=\"btn-group\" id=\"filters\">
                <a class=\"btn btn-primary active\" href=\"#filter\" class=\"selected\" data-filter=\"*\"><span class=\"fui-list\"></span> All</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".nature\"><span class=\"fui-eye\"></span> Nature</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".people\"><span class=\"fui-user\"></span> People</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".scenery\"><span class=\"fui-video\"></span> Scenery</a>
                <a class=\"btn btn-primary\" href=\"#filter\" data-filter=\".world\"><span class=\"fui-photo\"></span> World</a>
            </div>
        </div>
    </div>
</section>

<div class=\"container\">

    <!-- start: Portfolio -->
    <div id=\"portfolioItems\" class=\"row\">

        <div class=\"col-md-3 portfolio-item nature people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project1.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-6 portfolio-item scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project4.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Money <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project2.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item nature scenery\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project3.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Beach <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project1.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Cars <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-3 portfolio-item world people\">
            <div class=\"picture\">
                <a class=\"image\" href=\"{{ 'portfolio/project'|page }}\" title=\"Title\">
                    <img src=\"{{ 'assets/images/portfolio/thumbs/project2.jpg'|theme }}\" alt=\"\" />
                </a>
                <div class=\"description\">
                    <a href=\"{{ 'portfolio/project'|page }}\" class=\"btn btn-info btn-block\">Nature <small>for Joe Bloggs</small></a>
                </div>
            </div>
        </div>

    </div>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/portfolio/portfolio.htm", "");
    }
}
