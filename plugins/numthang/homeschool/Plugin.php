<?php namespace Numthang\Homeschool;

use System\Classes\PluginBase;
use Numthang\Homeschool\Models\Course as CourseModel;
use Numthang\Homeschool\Models\Evaluation as EvaluationModel;
use RainLab\Blog\Models\Post as BlogPost;


class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
            'Numthang\Homeschool\Components\Courses' => 'courses',
            'Numthang\Homeschool\Components\CourseForm' => 'courseform',
            'Numthang\Homeschool\Components\Evaluations' => 'evaluations',
            'Numthang\Homeschool\Components\EvaluationForm' => 'evaluationform'
        ];
    }

    public function registerSettings()
    {
    }
    public function boot() {
      BlogPost::extend(function($model) {//กำหนด fillable field เพิ่ม
        $model->addFillable([
          'evaluation_id'
        ]);
      });
      /*CourseModel::extend(function($model) {//ทำให้ save ข้อมูลด้วย fill() functionเพิ่มได้
        $model->addFillable([
          'user_id',
          'hs_name',
          'name',
        ]);
      });*/ // กรณีนี้เป็น model ของเราเอง เลยเข้าไปแก้ไขใน Models/Course.php ใส่ ตัวแปร $fillable ได้โดยตรงไม่ต้อง extend
    }
}
