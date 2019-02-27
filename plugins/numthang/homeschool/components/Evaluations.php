<?php namespace Numthang\Homeschool\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Numthang\Homeschool\Models\Course;
use Numthang\Homeschool\Models\Evaluation;
use DB;

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

        'sortOrder' => [
            'title' => 'Sort Evaluations',
            'description' => 'Sort those evaluations',
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
      $this->evaluations = $this->loadEvaluations();
  }

  protected function loadEvaluations(){
      $user = Auth::getUser();

      $query = Course::all();
      $query = Course::with('evaluations')->get();

      #dump($query[1]->evaluations[0]->id);
      foreach ($query as $key => $value) {
        // code...
        foreach ($value as $key2 => $value2) {
          // code...
          dump($value2[$key2]->id);

        }
      }
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
      #dump($query);
      return $query;
  }
}
