<?php 
class Cms5c3f41844cc43513043933_7005da724902755cf3969fd712055fcaClass extends Cms\Classes\PageCode
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
