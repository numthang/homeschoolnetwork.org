<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;
use Numthang\Homeschool\Models\Course;

class Courses extends ComponentBase
{

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
                'default' => 'name asc'
            ]
        ];
    }

    public function getSortOrderOptions(){
        return [
            'name asc' => 'Name (ascending)',
            'name desc' => 'Name (descending)'
        ];
    }

    public function onRun(){
        $this->courses = $this->loadCourses();
    }

    protected function loadCourses(){
        $query = Course::all();

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

    public $courses;//กำหนด ส่งค่าไปแสดง ใน default.htm

}
