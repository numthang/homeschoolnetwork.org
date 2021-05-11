<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Numthang\Homeschool\Models\Course;
use Flash;
use RainLab\User\Models\User;
use Auth;

require_once './vendor/autoload.php';

class CourseForm extends ComponentBase
{
    public $record;
    public $coaches;

    public function componentDetails(){
        return [
            'name' => 'Course Form',
            'description' => 'Add homeschool course form'
        ];
    }
		public function onRun() {
      if($this->param('id') || $this->param('slug')) {
        if($id = $this->param('slug')) {
          if($id < 100000)
            return;
          $tmp = Course::where('created_at', date('Y-m-d H:i:s', $id))->get();
          $this->record = $tmp[0];
        }
        else if($id = $this->param('id'))
          $this->record = Course::find($id);
      }
      $key = 1;//passge key 1 is editor
      $query = User::whereHas('groups.passage_keys', function ($q) use ($key) {
        $q->where('key_id', $key);
      });
      $this->coaches = $query->orderBy('surname')->orderBy('name')->get(['surname', 'name', 'email', 'id']);
		}
    public function onSave(){
      $user = Auth::getUser();
      $validator = Validator::make(
        [
          'course_id' => Input::get('course_id'),
          'name' => Input::get('name'),
          'hs_name' => Input::get('hs_name')
        ],
        [
          'course_id' => 'required',
          'name' => 'required|min:4',
          'hs_name' => 'required|min:4'
        ]
      );

      if($validator->fails()){
        return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => $validator->errors()->first(), 'type' => 'error'])];
        #return Redirect::back()->withErrors($validator);
      }

      if($this->param('id') && Input::get('save_as') == 0)//ถ้ามีการ update และไม่ได้กดปุ่ม save as จะส่ง query id ของแผนการศึกษาเข้ามา ให้ค้นหากรองด้วย id ก่อน
        $course = Course::find($this->param('id'));
      else {
        $course = new Course();
        $course->user_id = $user->id;
      }

      #$course->user_id = Input::get('user_id');
      $course->father_profile = json_encode(Array('father_name'=>Input::get('father_name'), 'father_degree'=>Input::get('father_degree'), 'father_exp'=>Input::get('father_exp'), 'father_age'=>Input::get('father_age'), 'father_job'=>Input::get('father_job'), 'father_addr'=>Input::get('father_addr'), 'father_contact'=>Input::get('father_contact')));

      $course->mother_profile = json_encode(Array('mother_name'=>Input::get('mother_name'), 'mother_degree'=>Input::get('mother_degree'), 'mother_exp'=>Input::get('mother_exp'), 'mother_age'=>Input::get('mother_age'), 'mother_job'=>Input::get('mother_job'), 'mother_addr'=>Input::get('mother_addr'), 'mother_contact'=>Input::get('mother_contact')));
      //dump(Input::get('birth_date'));
      if(Input::get('birth')) {
		    $date = explode('/', Input::get('birth'));
		    $_POST['birth_date'] = $course->birth_date = $date[2].'-'.$date[1].'-'.$date[0];
		  }

      //ถ้าเราเป็นโค้ชหรือเป็นเจ้าของคอร์สและไม่มีโค้ชจองอยู่ จะสามารถ save ได้
      if(($course->moderator_id == $user->id) || ($course->user_id == $user->id && $course->moderator_id == 0)) {
        $course->fill(post());//กำหนด fillable field ใน Models/Course
        $course->save();
      }
      else {
        return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => $course->name.' is belong to someone or in review by another coach.', 'type' => 'error'])];
      }
      #Flash::success('Course '.$course->name.' saved! ');
      if($this->param('id') && Input::get('save_as') == 0)//ถ้ามีการ update จะส่ง query id ให้แสดง flash message
     		return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => 'Course '.$course->name.' saved! ', 'type' => 'success'])];
     	else//ถ้าเป็นการสร้างใหม่ให้ redirect ไป edit
     		return Redirect::to('/edit/course/'.$course->id);
    }
    public function onDelete() {
      $course = new Course();
      $course->where('id', '=', $this->param('id'))->delete();
      return Redirect::to('/add/course')->with('message', $course->name.' Removed');
    }
}
