<?php namespace Numthang\Homeschool\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Numthang\Homeschool\Models\Course;
use Numthang\Homeschool\Models\Evaluation;
use DB;
use Request;


class Evaluations extends ComponentBase
{
  public $evaluations;

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
          'template' => 'Template (descending)'
      ];
  }

  public function onRun(){
    $this->evaluations = $this->loadEvaluations();
  }

  protected function loadEvaluations(){
    if(!$this->property('byUserID')) {//if no user id specific
      $user = Auth::getUser();
      $userid = $user->id;
    }
    else
      $userid = $this->property('byUserID');

    #$query = Course::all();
    $query = Course::with('evaluations')
      ->where('user_id', '=', $userid)
      ->orWhere('template', '=', 1);
    if($this->property('sortOrder') == 'name asc')
        $query = $query->orderBy('name');
    else if($this->property('sortOrder') == 'name desc')
      $query = $query->orderByDesc('name');
    else
      $query = $query->orderByDesc($this->property('sortOrder'));

    $query = $query->get();
    #dump($query);
    #dump($query[0]->evaluations);
    #dump($query[0]->attributes['id']);
    #$query = Course::find(5)->evaluations;//ดึง course_id = 5 ในตาราง evaluations
    #$query = Course::with(['evaluations'])->where('user_id', '=', $user->id)->get();
    #$query = Db::table('numthang_homeschool_courses')->join('numthang_homeschool_evaluations', 'numthang_homeschool_courses.id', '=', 'numthang_homeschool_evaluations.course_id')->get();

    #$query = Course::where('user_id', '=', $user->id)->Evaluation::where('course_id', '=', '1')->get();

    /*if($this->property('sortOrder') == 'name asc'){
        $query = $query->sortBy('name');
    }

    if($this->property('sortOrder') == 'name desc'){
        $query = $query->sortByDesc('name');
    }

    if($this->property('results') > 0){
        $query = $query->take($this->property('results'));
    }*/
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
