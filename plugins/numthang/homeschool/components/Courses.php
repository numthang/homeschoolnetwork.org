<?php namespace Numthang\Homeschool\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Numthang\Homeschool\Models\Course;
use DB;

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
            'template' => 'Template (descending)'
        ];
    }

    public function onRun(){
        $this->courses = $this->loadCourses();
    }

    protected function loadCourses(){
        $user = Auth::getUser();
        $query = Course::where('user_id', '=', $user->id)
          ->orWhere('template', '=', 1);

        if($this->property('sortOrder') == 'name asc')
            $query = $query->orderBy('name');
        else if($this->property('sortOrder') == 'name desc')
          $query = $query->orderByDesc('name');
        else
          $query = $query->orderByDesc($this->property('sortOrder'));

        $query = $query->get();
				#$query = DB::table('numthang_homeschool_courses')->where('user_id', '=', $user->id)->orWhere('template', '=', 1)->get();

        /*if($this->property('sortOrder') == 'name asc'){
            $query = $query->sortBy('name');
        }

        if($this->property('sortOrder') == 'name desc'){
            $query = $query->sortByDesc('name');
        }

        if($this->property('results') > 0){
            $query = $query->take($this->property('results'));
        }*/

        return $query;
    }
}
