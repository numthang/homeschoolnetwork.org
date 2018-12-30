<?php namespace CheerfulLab\BlogEditable\Components;

use Cms\Classes\Page;
use BackendAuth;
use Cms\Classes\Content;
use Cms\Classes\ComponentBase;
use League\HTMLToMarkdown\HtmlConverter;
use RainLab\Blog\Components\Post;
use RainLab\Blog\Models\Post as BlogPost;

class Editable extends ComponentBase
{

    public $content;
    public $isEditor;
    public $file;
    public $fileMode;

    /**
     * @var Post
     */
    public $postComponent;

    /**
     * @var \RainLab\Blog\Models\Post
     */
    public $post;

    public function componentDetails()
    {
        return [
            'name'        => 'Editable blog content component',
            'description' => 'This component allows in-context editing material at blog plugin.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'rainlab.blog::lang.settings.post_slug',
                'description' => 'rainlab.blog::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'categoryPage' => [
                'title'       => 'rainlab.blog::lang.settings.post_category',
                'description' => 'rainlab.blog::lang.settings.post_category_description',
                'type'        => 'dropdown',
                'default'     => 'blog/category',
            ],
        ];
    }

    public function onRun()
    {
        $this->postComponent = new Post($this->page);
        $this->postComponent->setProperty('slug', $this->property('slug'));
        $this->postComponent->setProperty('categoryPage', $this->property('categoryPage'));
        $this->postComponent->onRun();
        $this->post = $this->postComponent->post;

        $this->isEditor = $this->checkEditor();

        if ($this->isEditor) {
            // Piggy back the Backend's rich editor
            $this->addCss('/modules/backend/formwidgets/richeditor/assets/vendor/redactor/redactor.css');
            $this->addJs('/modules/backend/formwidgets/richeditor/assets/vendor/redactor/redactor.js');

            $this->addCss('assets/css/editable.css');
            $this->addJs('assets/js/editable.js');
        }
    }

    public function onSave()
    {
        if (!$this->checkEditor())
            return;

        try {
            $converter = new HtmlConverter();
            /**
             * @var BlogPost $post
             */
            $post = BlogPost::findOrFail(post('postId'));
            $post->content = $converter->convert(post('content'));
            $post->save();
        } catch (\Exception $e) {
            echo 'Error' . $e->getMessage();
            return;
        }
    }

    public function checkEditor()
    {
        $backendUser = BackendAuth::getUser();
        return $backendUser && $backendUser->hasAccess('cms.manage_content');
    }


    /**
     * Renders a requested partial in context of this component,
     * see Cms\Classes\Controller@renderPartial for usage.
     */
    public function renderPartial()
    {
        $content = $this->postComponent->renderPartial();

        $this->controller->setComponentContext($this);
        $result = call_user_func_array([$this->controller, 'renderPartial'], func_get_args());
        $this->controller->setComponentContext(null);
        return $result;
    }


    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

}