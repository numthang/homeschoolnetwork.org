<?php

/* /home/vsites/homeschool.in.th/plugins/renatio/formbuilder/components/renderform/file_uploader.htm */
class __TwigTemplate_8c31cfbc84d9f318708154afa5a09f61a21cc13680ca5ad7924178392b65841f extends Twig_Template
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
        echo "<div class=\"control-multi-file-uploader form-group\"
     data-handler=\"";
        // line 2
        echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onUpdateFile"), "html", null, true);
        echo "\"
     data-control=\"multi-file-uploader\"
     data-max-size=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fileConfig"] ?? null), "maxSize", array()), "html", null, true);
        echo "\"
     data-file-types=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["fileConfig"] ?? null), "fileTypes", array()), ", "), "html", null, true);
        echo "\">

    <div class=\"clickable\"></div>
    <div class=\"content\">
        <p class=\"placeholder\">
            ";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fileConfig"] ?? null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["fileConfig"] ?? null), "placeholder", array()), call_user_func_array($this->env->getFilter('trans')->getCallable(), array("renatio.formbuilder::lang.file.placeholder")))) : (call_user_func_array($this->env->getFilter('trans')->getCallable(), array("renatio.formbuilder::lang.file.placeholder")))), "html", null, true);
        echo "
        </p>
    </div>

    <div class=\"template\" style=\"display: none\">
        <div class=\"dz-preview dz-file-preview\">
            <img class=\"thumbnail\" src=\"";
        // line 16
        echo $this->extensions['System\Twig\Extension']->appFilter("plugins/renatio/formbuilder/assets/images/upload.png");
        echo "\"
                 data-dz-thumbnail/>

            <div class=\"dz-details\">
                <div class=\"dz-filename\"><span data-dz-name></span></div>
                <div class=\"dz-size\" data-dz-size></div>
                <div class=\"activity\">
                    <div class=\"loading\"></div>
                </div>
            </div>
            <div class=\"action-panel\">
                <a href=\"javascript:;\" class=\"delete\">&times;</a>
            </div>
            <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>

            <div class=\"dz-error-message\">
                <div class=\"dz-error-mark\">&cross;</div>
                <span data-dz-errormessage></span>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/renatio/formbuilder/components/renderform/file_uploader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  43 => 10,  35 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"control-multi-file-uploader form-group\"
     data-handler=\"{{ __SELF__ ~ '::onUpdateFile' }}\"
     data-control=\"multi-file-uploader\"
     data-max-size=\"{{ fileConfig.maxSize }}\"
     data-file-types=\"{{ fileConfig.fileTypes|join(', ') }}\">

    <div class=\"clickable\"></div>
    <div class=\"content\">
        <p class=\"placeholder\">
            {{ fileConfig.placeholder|default('renatio.formbuilder::lang.file.placeholder'|trans) }}
        </p>
    </div>

    <div class=\"template\" style=\"display: none\">
        <div class=\"dz-preview dz-file-preview\">
            <img class=\"thumbnail\" src=\"{{ 'plugins/renatio/formbuilder/assets/images/upload.png'|app }}\"
                 data-dz-thumbnail/>

            <div class=\"dz-details\">
                <div class=\"dz-filename\"><span data-dz-name></span></div>
                <div class=\"dz-size\" data-dz-size></div>
                <div class=\"activity\">
                    <div class=\"loading\"></div>
                </div>
            </div>
            <div class=\"action-panel\">
                <a href=\"javascript:;\" class=\"delete\">&times;</a>
            </div>
            <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>

            <div class=\"dz-error-message\">
                <div class=\"dz-error-mark\">&cross;</div>
                <span data-dz-errormessage></span>
            </div>
        </div>
    </div>

</div>", "/home/vsites/homeschool.in.th/plugins/renatio/formbuilder/components/renderform/file_uploader.htm", "");
    }
}
