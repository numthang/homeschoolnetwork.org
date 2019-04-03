<?php namespace Numthang\Homeschool\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Numthang\Homeschool\Models\Course;
use DB;
use Session;

class Courses extends ComponentBase
{
    public $courses;//กำหนด ส่งค่าไปแสดง ใน default.htm
    public function componentDetails(){
        return [
            'name' => 'Course list',
            'description' => 'List of courses'
        ];
    }

    public function defineProperties(){
        return [
            'results' => [
                'title' => 'Number of Courses',
                'description' => 'How  many courses do you want to display?',
                'default' => 0,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers allowed'
            ],
            'byUserID' => [
                'title' => 'Courses by user id',
                'default' => 0
            ],

            'sortOrder' => [
                'title' => 'Sort Courses',
                'description' => 'Sort those courses',
                'type' => 'dropdown',
                'default' => 'template'
            ]
        ];
    }

    public function getSortOrderOptions(){
        return [
            'name asc' => 'Name (ascending)',
            'name desc' => 'Name (descending)',
            'template' => 'Template (descending)',
            'updated_at' => 'Modified'
        ];
    }

    public function onRun(){
      if(Session::get('user_auth'))
        $this->courses = $this->loadCourses();
    }

    protected function loadCourses(){;
      if(!$this->property('byUserID')) {//if no user id specific
        $user = Auth::getUser();
        $userid = $user->id;
      }
      else
        $userid = $this->property('byUserID');

      $query = Course::where('user_id', '=', $userid)
        ->orWhere('template', '=', 1);

      if($this->property('sortOrder') == 'name asc')
          $query = $query->orderBy('name');
      else if($this->property('sortOrder') == 'name desc')
        $query = $query->orderByDesc('name');
      else
        $query = $query->orderByDesc($this->property('sortOrder'));

      if($this->property('results') > 0){
          $query = $query->take($this->property('results'));
      }

      $query = $query->get();
      return $query;
    }
}
