<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Numthang\Homeschool\Models\Course;
use Numthang\Homeschool\Models\Evaluation;
use Flash;
use RainLab\User\Models\User;
use FireUnion\BlogFront\Models\Author;


class EvaluationForm extends ComponentBase
{

    public $record;
    public $course;
    public $authors;

    public function componentDetails() {
        return [
            'name'        => 'Evaluation Form',
            'description' => 'No description provided yet...'
        ];
    }
    public function defineProperties() {
        return [];
    }
    public function onRun() {
      if($this->param('id') || $this->param('slug')) {
        if($id = $this->param('slug')) {
          if($id < 100000)
            return;
          $tmp = Evaluation::where('created_at', date('Y-m-d H:i:s', $id))->get();
          $this->record = $tmp[0];
        }
        else if($id = $this->param('id'))
          $this->record = Evaluation::find($this->param('id'));
        $this->course = Course::find($this->record->attributes['course_id']);
      }

      foreach (Author::with('user')->get() as $user) {
        $authors[$user->user->id] = $user->user->name.' '.$user->user->surname;
  		}
  		$this->authors = $authors;
		}
    public function onSave() {
      $validator = Validator::make(
        [
          'evaluation_id' => Input::get('evaluation_id'),
          'name' => Input::get('name'),
          'graduated' => Input::get('graduated'),
        ],
        [
          'evaluation_id' => 'required',
          'name' => 'required|min:4',
          'graduated' => 'required',
        ]
      );

      if($validator->fails()) {
        return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => $validator->errors()->first(), 'type' => 'error'])];
        #return Redirect::back()->withErrors($validator);
      }
      
      if($this->param('id') && Input::get('save_as') == 0)//ถ้ามีการ update และไม่ได้กดปุ่ม save as จะส่ง query id ของแผนการศึกษาเข้ามา ให้ค้นหากรองด้วย id ก่อน
        $evaluation = Evaluation::find($this->param('id'));
      else
        $evaluation = new Evaluation();

      //dump(Input::get('graduated'));
      if(Input::get('graduated')) {
		    $date = explode('/', Input::get('graduated'));
		    $_POST['evaluation_date'] = $evaluation->evaluation_date = $date[2].'-'.$date[1].'-'.$date[0];
      }
      $evaluation->fill(post());//กำหนด fillable field ใน Models/Evaluation
      $evaluation->save();
      Flash::success('Evaluation '.$evaluation->name.' saved!');
      if($this->param('id') && Input::get('save_as') == 0)
     		return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => 'Evaluation '.$evaluation->name.' saved!', 'type' => 'success'])];
     	else//ถ้าเป็นการสร้างใหม่ให้ redirect ไป edit
     		return Redirect::to('/edit/evaluation/'.$evaluation->id);
    }
    public function onDelete() {
      $evaluation = new Evaluation();
      $evaluation->where('id', '=', $this->param('id'))->delete();
      return Redirect::to('/add/evaluation')->with('message', $evaluation->name.' Removed');
    }
}
