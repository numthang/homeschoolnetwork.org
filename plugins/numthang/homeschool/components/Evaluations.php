<?php namespace Numthang\Homeschool\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Numthang\Homeschool\Models\Course;
use Numthang\Homeschool\Models\Evaluation;
use DB;
use Request;
use Session;


class Evaluations extends ComponentBase
{
  public $evaluations;
  public $student_evaluations;
  public $student_courses;
  private $user_id;

  public function componentDetails()
  {
      return [
          'name'        => 'Evaluations lists',
          'description' => 'No description provided yet...'
      ];
  }

  public function defineProperties()
  {
    return [
        'results' => [
            'title' => 'Number of Evaluations',
            'description' => 'How  many evaluations do you want to display?',
            'default' => 0,
            'validationPattern' => '^[0-9]+$',
            'validationMessage' => 'Only numbers allowed'
        ],
        'byUserID' => [
            'title' => 'Evaluations by user id',
            'default' => 0
        ],
        'sortOrder' => [
            'title' => 'Sort Evaluations',
            'description' => 'Sort those evaluations',
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
          'created_at' => 'Created'
      ];
  }

  public function onRun(){
    if(Auth::getUser()) {
      if(!$this->property('byUserID')) //if no user id specific to component
        $this->user_id = Auth::getUser()->id;
      else
        $this->user_id = $this->property('byUserID');
    }

    if($this->user_id) {
      $this->evaluations = $this->loadEvaluations();
      $this->student_evaluations = $this->loadStudentEvaluations();
      $this->student_courses = $this->loadStudentCourses();
    }
  }
  protected function loadStudentEvaluations() {//มอง portfolio เหมือน student_id
    $query = Evaluation::where('portfolio_id', '=', $this->user_id)
      ->orderByDesc('created_at');
    if($this->property('results') > 0)
      $query = $query->take($this->property('results'));
    $query = $query->get();
    return $query;
  }
  protected function loadStudentCourses() {//มอง portfolio เหมือน student_id
    $query = Evaluation::with('course')
      ->where('portfolio_id', '=', $this->user_id)
      ->groupBy('course_id')
      ->orderByDesc('created_at');
    if($this->property('results') > 0)
      $query = $query->take($this->property('results'));
    $query = $query->get();
    return $query;
  }
  protected function loadEvaluations(){
    #$query = Course::all();
    $query = Course::with('evaluations')
      ->where('user_id', '=', $this->user_id)
      ->orWhere('template', '=', 1);

    if($this->property('sortOrder') == 'name asc')
        $query = $query->orderBy('name');
    else if($this->property('sortOrder') == 'name desc')
      $query = $query->orderByDesc('name');
    else
      $query = $query->orderByDesc($this->property('sortOrder'));

    if($this->property('results') > 0)
      $query = $query->take($this->property('results'));

    $query = $query->get();

    #dump($query);
    #dump($query[0]->evaluations);
    #dump($query[0]->attributes['id']);
    #$query = Course::find(5)->evaluations;//ดึง course_id = 5 ในตาราง evaluations
    #$query = Course::with(['evaluations'])->where('user_id', '=', $user->id)->get();
    #$query = Db::table('numthang_homeschool_courses')->join('numthang_homeschool_evaluations', 'numthang_homeschool_courses.id', '=', 'numthang_homeschool_evaluations.course_id')->get();

    #$query = Course::where('user_id', '=', $user->id)->Evaluation::where('course_id', '=', '1')->get();

    /*foreach ($query as $key => $value) {
      // code...
      dump($value->attributes['name']);
      dump($value->attributes['id']);
      if(isset($value->evaluations[$key])) {
        for($i=0;$i<count($value->evaluations);$i++)
          dump($value->evaluations[$i]->attributes['course_id']);
      }

    }*/
    return $query;
  }
}
