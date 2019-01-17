<?php

/* /home/vsites/homeschool.in.th/plugins/rainlab/user/components/resetpassword/reset.htm */
class __TwigTemplate_4caaf1b10ee2b656fbeeed1bbf068af8f7d03514997e59fcab9e0601bfaa4a23 extends Twig_Template
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
        echo "<p class=\"lead\">
    Please check your email for the activation code.
</p>

<form
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onResetPassword\"
    data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::complete': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"resetCode\">Activation Code</label>
        <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Enter the activation code\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "code", array()), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"resetPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\" placeholder=\"Enter a new password\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Reset password</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/rainlab/user/components/resetpassword/reset.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"lead\">
    Please check your email for the activation code.
</p>

<form
    data-request=\"{{ __SELF__ }}::onResetPassword\"
    data-request-update=\"'{{ __SELF__ }}::complete': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"resetCode\">Activation Code</label>
        <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Enter the activation code\" value=\"{{ __SELF__.code }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"resetPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\" placeholder=\"Enter a new password\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Reset password</button>
</form>
", "/home/vsites/homeschool.in.th/plugins/rainlab/user/components/resetpassword/reset.htm", "");
    }
}
