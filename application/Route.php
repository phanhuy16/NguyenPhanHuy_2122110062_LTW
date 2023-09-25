<?php
namespace Src;
class Route
{
  public static function route_site() 
  {
    $pathView = "views/frontend/";
    if (isset($_REQUEST['option'])) {
      $pathView .=$_REQUEST['option'];
      if (isset($_REQUEST['slug'])) {
        $pathView .="detail.php";
      } else {
        if (isset($_REQUEST['cat'])) {
          $pathView .="-category.php";
        } else {
          $pathView .=".php";
        }
      }
    } else {
      $pathView .="home.php";
    }
    require_once $pathView;
  }
}