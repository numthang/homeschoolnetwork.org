<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/shop/shop.htm */
class __TwigTemplate_cac6428c84928ea325fca441d9be9bfdf8239266ef442897fd4ed167812bd9d5 extends Twig_Template
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
        <h3>Shop</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("shop/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        </div>
        <div class=\"col-sm-8\">
            <!-- Filters -->
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#popular\" data-toggle=\"tab\">Popular</a></li>
                <li><a href=\"#recommended\" data-toggle=\"tab\">Recommended</a></li>
                <li><a href=\"#recent\" data-toggle=\"tab\">New Products</a></li>
                <li class=\"hidden-sm\"><a href=\"#last\" data-toggle=\"tab\">Last Chance</a></li>
            </ul>

            <div class=\"row\">
                <div class=\"tab-content\">

                    <!-- All-->
                    <div class=\"tab-pane fade in active\" id=\"popular\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Ebooks -->
                    <div class=\"tab-pane fade\" id=\"recommended\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"recent\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"last\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pull-right\">
                <ul class=\"pagination\">
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/shop/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 183,  323 => 182,  311 => 173,  305 => 172,  293 => 163,  287 => 162,  275 => 153,  269 => 152,  253 => 139,  247 => 138,  235 => 129,  229 => 128,  217 => 119,  211 => 118,  195 => 105,  189 => 104,  176 => 94,  170 => 93,  154 => 80,  148 => 79,  136 => 70,  130 => 69,  118 => 60,  112 => 59,  100 => 50,  94 => 49,  82 => 40,  76 => 39,  63 => 29,  57 => 28,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Shop</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            {% partial 'shop/sidebar' %}
        </div>
        <div class=\"col-sm-8\">
            <!-- Filters -->
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#popular\" data-toggle=\"tab\">Popular</a></li>
                <li><a href=\"#recommended\" data-toggle=\"tab\">Recommended</a></li>
                <li><a href=\"#recent\" data-toggle=\"tab\">New Products</a></li>
                <li class=\"hidden-sm\"><a href=\"#last\" data-toggle=\"tab\">Last Chance</a></li>
            </ul>

            <div class=\"row\">
                <div class=\"tab-content\">

                    <!-- All-->
                    <div class=\"tab-pane fade in active\" id=\"popular\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Ebooks -->
                    <div class=\"tab-pane fade\" id=\"recommended\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"recent\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"last\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pull-right\">
                <ul class=\"pagination\">
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/shop/shop.htm", "");
    }
}
