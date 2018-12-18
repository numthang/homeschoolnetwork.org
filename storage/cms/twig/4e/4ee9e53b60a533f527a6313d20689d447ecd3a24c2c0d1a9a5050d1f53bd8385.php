<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/test-update.htm */
class __TwigTemplate_70f75819fc201da0d22ac98cb34e95c513d1517d99ae35410920c2a6e5d73f87 extends Twig_Template
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
        echo "<?= Form::open(['class'=>'layout']) ?>

    <div class=\"layout-row\">
        <?= \$this->formRender() ?>
    </div>

    <div class=\"form-buttons\">
        <div class=\"loading-indicator-container\">
            <button
                type=\"button\"
                data-request=\"onSave\"
                data-request-data=\"close:true\"
                data-hotkey=\"ctrl+enter, cmd+enter\"
                data-load-indicator=\"Saving Category...\"
                class=\"btn btn-default\">
                Save and Close
            </button>
            <button
                type=\"button\"
                class=\"oc-icon-trash-o btn-icon danger pull-right\"
                data-request=\"onDelete\"
                data-load-indicator=\"Deleting Category...\"
                data-request-confirm=\"Do you really want to delete this category?\">
            </button>
            <span class=\"btn-text\">
                or <a href=\"<?= Backend::url('acme/blog/categories') ?>\">Cancel</a>
            </span>
        </div>
    </div>

<?= Form::close() ?>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/test-update.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?= Form::open(['class'=>'layout']) ?>

    <div class=\"layout-row\">
        <?= \$this->formRender() ?>
    </div>

    <div class=\"form-buttons\">
        <div class=\"loading-indicator-container\">
            <button
                type=\"button\"
                data-request=\"onSave\"
                data-request-data=\"close:true\"
                data-hotkey=\"ctrl+enter, cmd+enter\"
                data-load-indicator=\"Saving Category...\"
                class=\"btn btn-default\">
                Save and Close
            </button>
            <button
                type=\"button\"
                class=\"oc-icon-trash-o btn-icon danger pull-right\"
                data-request=\"onDelete\"
                data-load-indicator=\"Deleting Category...\"
                data-request-confirm=\"Do you really want to delete this category?\">
            </button>
            <span class=\"btn-text\">
                or <a href=\"<?= Backend::url('acme/blog/categories') ?>\">Cancel</a>
            </span>
        </div>
    </div>

<?= Form::close() ?>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/test-update.htm", "");
    }
}
