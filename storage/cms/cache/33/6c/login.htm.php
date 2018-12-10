<?php 
class Cms5c0e58c2ed6c3859482368_3c241f9cee3d3b1f0731f6f6e70cfc67Class extends Cms\Classes\PageCode
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
