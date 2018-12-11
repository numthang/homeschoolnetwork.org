<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/samples/contact.htm */
class __TwigTemplate_442cebed24ca931202e8723c66063c2dbfadbbb5fd97613081944aa7447c1707 extends Twig_Template
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
        <h3>Contact us</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-7\">
            <p>Beef ribs pig spare ribs boudin pork chop swine. Shankle pastrami ham, doner prosciutto cow t-bone kielbasa turkey pig venison tail chicken leberkas. </p>
            ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("renderForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "            <br /><br />

        </div>

        <div class=\"col-md-5\">
            <div class=\"contact-banner\">
                <h3 class=\"banner-title\">Our location</h3>
                <ul>
                    <li>100 Pitt Street</li>
                    <li>Sydney NSW, 2000</li>
                    <li>Phone: +61 0000 0000</li>
                    <li>Fax: +61 0000 0000</li>
                    <li>Email: <a href=\"#\">some@email.dev.null</a></li>
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
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52978.975064878534!2d151.21417105100554!3d-33.910613674462084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sus!4v1406012463524\"></iframe>
            </div>

        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/samples/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Contact us</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-7\">
            <p>Beef ribs pig spare ribs boudin pork chop swine. Shankle pastrami ham, doner prosciutto cow t-bone kielbasa turkey pig venison tail chicken leberkas. </p>
            {% component 'renderForm' %}
            <br /><br />

        </div>

        <div class=\"col-md-5\">
            <div class=\"contact-banner\">
                <h3 class=\"banner-title\">Our location</h3>
                <ul>
                    <li>100 Pitt Street</li>
                    <li>Sydney NSW, 2000</li>
                    <li>Phone: +61 0000 0000</li>
                    <li>Fax: +61 0000 0000</li>
                    <li>Email: <a href=\"#\">some@email.dev.null</a></li>
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
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52978.975064878534!2d151.21417105100554!3d-33.910613674462084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sus!4v1406012463524\"></iframe>
            </div>

        </div>

    </div>
</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/samples/contact.htm", "");
    }
}
