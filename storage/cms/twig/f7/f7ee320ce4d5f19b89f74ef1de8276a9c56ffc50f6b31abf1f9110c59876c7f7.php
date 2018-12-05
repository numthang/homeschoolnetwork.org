<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/shop/cart.htm */
class __TwigTemplate_cd432151338ee815f02352ca94891ffd633b6a31c718d40704edb86421446e58 extends Twig_Template
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
        <h3>Checkout</h3>
    </div>
</section>

<div class=\"container shopping-cart\">

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th></th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class=\"img-responsive\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" alt=\"\">
                    <div class=\"item\">
                        Product Title #1
                        <p class=\"text-muted\">Hamburger brisket pastrami, capicola swine meatloaf kevin leberkas pork chop ground round pork.</p>
                    </div>
                </td>
                <td>\$339.00</td>
                <td><input type=\"number\" name=\"pcs\" value=\"1\" class=\"form-control\"></td>
            </tr>
            <tr>
                <td>
                    <img class=\"img-responsive\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" alt=\"\">
                    <div class=\"item\">
                        Product Title #2
                        <p class=\"text-muted\">Meatloaf tail ball tip capicola pork loin chuck brisket.</p>
                    </div>
                </td>
                <td>\$210.00</td>
                <td><input type=\"number\" name=\"pcs\" value=\"1\" class=\"form-control\"></td>
            </tr>
            <tr>
                <td>
                    <img class=\"img-responsive\" src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" alt=\"\">
                    <div class=\"item\">
                        Product Title #3
                        <p class=\"text-muted\"> Pork belly meatloaf kielbasa, shank leberkas hamburger brisket drumstick andouille pork chop biltong corned beef ribeye pig.</p>
                    </div>
                </td>
                <td>\$50.00</td>
                <td><input type=\"number\" name=\"pcs\" value=\"1\" class=\"form-control\"></td>
            </tr>
        </tbody>
    </table>
    <ul class=\"text-right checkout\">
        <li><strong>Total Price</strong> \$599</li>
        <li><strong>Shipping</strong> Free</li>
        <li><a href=\"#\" class=\"btn btn-lg btn-success\"><i class=\"fa fa-hand-o-right\"></i> Proceed to checkout</a></li>
    </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/shop/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 42,  58 => 31,  44 => 20,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Checkout</h3>
    </div>
</section>

<div class=\"container shopping-cart\">

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th></th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img class=\"img-responsive\" src=\"{{ 'assets/images/shop/imac.png'|theme }}\" alt=\"\">
                    <div class=\"item\">
                        Product Title #1
                        <p class=\"text-muted\">Hamburger brisket pastrami, capicola swine meatloaf kevin leberkas pork chop ground round pork.</p>
                    </div>
                </td>
                <td>\$339.00</td>
                <td><input type=\"number\" name=\"pcs\" value=\"1\" class=\"form-control\"></td>
            </tr>
            <tr>
                <td>
                    <img class=\"img-responsive\" src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" alt=\"\">
                    <div class=\"item\">
                        Product Title #2
                        <p class=\"text-muted\">Meatloaf tail ball tip capicola pork loin chuck brisket.</p>
                    </div>
                </td>
                <td>\$210.00</td>
                <td><input type=\"number\" name=\"pcs\" value=\"1\" class=\"form-control\"></td>
            </tr>
            <tr>
                <td>
                    <img class=\"img-responsive\" src=\"{{ 'assets/images/shop/imac.png'|theme }}\" alt=\"\">
                    <div class=\"item\">
                        Product Title #3
                        <p class=\"text-muted\"> Pork belly meatloaf kielbasa, shank leberkas hamburger brisket drumstick andouille pork chop biltong corned beef ribeye pig.</p>
                    </div>
                </td>
                <td>\$50.00</td>
                <td><input type=\"number\" name=\"pcs\" value=\"1\" class=\"form-control\"></td>
            </tr>
        </tbody>
    </table>
    <ul class=\"text-right checkout\">
        <li><strong>Total Price</strong> \$599</li>
        <li><strong>Shipping</strong> Free</li>
        <li><a href=\"#\" class=\"btn btn-lg btn-success\"><i class=\"fa fa-hand-o-right\"></i> Proceed to checkout</a></li>
    </ul>

</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/shop/cart.htm", "");
    }
}
