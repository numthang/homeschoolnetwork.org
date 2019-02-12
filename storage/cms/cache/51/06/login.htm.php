<?php 
class Cms5c619fa44d783970973094_e9e48547102fb6f34a0291aac747e175Class extends Cms\Classes\PageCode
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
