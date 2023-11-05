<?php

use App\Models\Menu;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$menu = Menu::find($id);
if ($menu == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=menu&cat=trash");
}
$menu->delete();
MyClass::set_flash('message', ['msg' => 'Xoá vĩnh viễn thành công', 'type' => 'success']);
header("location:index.php?option=menu&cat=trash");
