<?php 
class Cms5c3f309e7b73e619057342_75225405a246a9f533fa3fc36740b2deClass extends Cms\Classes\PageCode
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
