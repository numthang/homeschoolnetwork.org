<?php 
class Cms5c4056eb7e38b805981999_41f16cd0cfe250d5547f2c72d95bee1cClass extends Cms\Classes\PageCode
{
public function onStart() {
    if(Auth::check()) {
      header('Location:/login/profile');
      exit;
    }
    #$user = Auth::getUser();
    #echo $user->name;
  }
}
