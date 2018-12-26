<?php 
class Cms5c2396c63b19a618808805_7e8389b4faf9d1e1b5c5f908939db54fClass extends Cms\Classes\PageCode
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
