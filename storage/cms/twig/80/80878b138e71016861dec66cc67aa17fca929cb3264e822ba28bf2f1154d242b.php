<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/tests.htm */
class __TwigTemplate_3ace8dc801d4c804ba2af3af4fb4afa41347d4da67076187c80410c8ae8ff9a0 extends Twig_Template
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
        echo "<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
<textarea name=\"content\" class=\"form-control my-editor\">{!! old('content', \$content) !!}</textarea>
<script>
  var editor_config = {
    path_absolute : \"/\",
    selector: \"textarea.my-editor\",
    plugins: [
      \"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
      \"searchreplace wordcount visualblocks visualchars code fullscreen\",
      \"insertdatetime media nonbreaking save table contextmenu directionality\",
      \"emoticons template paste textcolor colorpicker textpattern\"
    ],
    toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media\",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + \"&type=Images\";
      } else {
        cmsURL = cmsURL + \"&type=Files\";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : \"yes\",
        close_previous : \"no\"
      });
    }
  };

  tinymce.init(editor_config);
</script>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/tests.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
<textarea name=\"content\" class=\"form-control my-editor\">{!! old('content', \$content) !!}</textarea>
<script>
  var editor_config = {
    path_absolute : \"/\",
    selector: \"textarea.my-editor\",
    plugins: [
      \"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
      \"searchreplace wordcount visualblocks visualchars code fullscreen\",
      \"insertdatetime media nonbreaking save table contextmenu directionality\",
      \"emoticons template paste textcolor colorpicker textpattern\"
    ],
    toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media\",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + \"&type=Images\";
      } else {
        cmsURL = cmsURL + \"&type=Files\";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : \"yes\",
        close_previous : \"no\"
      });
    }
  };

  tinymce.init(editor_config);
</script>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/tests.htm", "");
    }
}
