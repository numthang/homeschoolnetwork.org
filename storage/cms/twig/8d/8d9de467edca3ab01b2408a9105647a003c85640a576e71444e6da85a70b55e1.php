<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_fbf5f6227715fc7e003763a72c0e6fae2705fddf23087ceecb2edbf1ee0fe2a6 extends Twig_Template
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
        echo "<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h3>เครือข่ายบ้านเรียน</h3>
                Homeschool Network หรือ \"เครือข่ายบ้านเรียน\" เข้าใจการทำโฮมสคูลในประเทศไทยจบที่นี่ทีเดียว 
                <div class=\"signup-form\">
                  ";
        // line 8
        if ( !($context["user"] ?? null)) {
            // line 9
            echo "                  <form data-request=\"onSignin\">
                    <div class=\"form-group\">
                        <label for=\"userSigninLogin\">";
            // line 11
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
                        <input
                            name=\"login\"
                            type=\"text\"
                            class=\"form-control\"
                            id=\"userSigninLogin\"
                            placeholder=\"Enter your ";
            // line 17
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"userSigninPassword\">Password</label>
                        <input
                            name=\"password\"
                            type=\"password\"
                            class=\"form-control\"
                            id=\"userSigninPassword\"
                            placeholder=\"Enter your password\" />
                    </div>

                    <button type=\"submit\" class=\"btn btn-block btn-default\">Sign in</button>
                  </form>
                  ";
        } else {
            // line 33
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "                  ";
        }
        // line 37
        echo "                  ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sociallogin"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "                </div>
                <!--<div class=\"additional-links\">
                    By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
                </div>-->
            </div>
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe width=\"560\" height=\"316\" src=\"https://www.youtube.com/embed/_VluJjS3IfQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"google-ads\">
    <div class=\"container\">ADS
        <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- Homeschool Network Index Top 
<ins class=\"adsbygoogle\"
     style=\"display:block\"
     data-ad-client=\"ca-pub-9939363335105757\"
     data-ad-slot=\"3572354287\"
     data-ad-format=\"auto\"
     data-full-width-responsive=\"true\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            ";
        // line 78
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 79
        echo "        </div>
    </div>

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 79,  131 => 78,  89 => 38,  84 => 37,  81 => 36,  76 => 35,  71 => 34,  66 => 33,  47 => 17,  38 => 11,  34 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h3>เครือข่ายบ้านเรียน</h3>
                Homeschool Network หรือ \"เครือข่ายบ้านเรียน\" เข้าใจการทำโฮมสคูลในประเทศไทยจบที่นี่ทีเดียว 
                <div class=\"signup-form\">
                  {% if not user %}
                  <form data-request=\"onSignin\">
                    <div class=\"form-group\">
                        <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
                        <input
                            name=\"login\"
                            type=\"text\"
                            class=\"form-control\"
                            id=\"userSigninLogin\"
                            placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"userSigninPassword\">Password</label>
                        <input
                            name=\"password\"
                            type=\"password\"
                            class=\"form-control\"
                            id=\"userSigninPassword\"
                            placeholder=\"Enter your password\" />
                    </div>

                    <button type=\"submit\" class=\"btn btn-block btn-default\">Sign in</button>
                  </form>
                  {% else %}
                    {% partial account ~ '::activation_check' %}
                    {% partial account ~ '::update' %}
                    {% partial account ~ '::deactivate_link' %}
                  {% endif %}
                  {% component 'sociallogin' %}
                </div>
                <!--<div class=\"additional-links\">
                    By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
                </div>-->
            </div>
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe width=\"560\" height=\"316\" src=\"https://www.youtube.com/embed/_VluJjS3IfQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"google-ads\">
    <div class=\"container\">ADS
        <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- Homeschool Network Index Top 
<ins class=\"adsbygoogle\"
     style=\"display:block\"
     data-ad-client=\"ca-pub-9939363335105757\"
     data-ad-slot=\"3572354287\"
     data-ad-format=\"auto\"
     data-full-width-responsive=\"true\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            {% partial 'services' %}
        </div>
    </div>

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/home.htm", "");
    }
}
