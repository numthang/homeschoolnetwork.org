<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;

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
      $query = Course::where('user_id', '=', $user->id)->orWhere('template', '=', 1)->get();
			#$query = DB::table('numthang_homeschool_evaluations')->where('user_id', '=', $user->id)->orWhere('template', '=', 1)->get();

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
