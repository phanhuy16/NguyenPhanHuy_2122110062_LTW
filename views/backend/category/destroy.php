<?php

use App\Models\Category;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$category = Category::find($id);
if ($category == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=category&cat=trash");
}
$category->delete();
MyClass::set_flash('message', ['msg' => 'Xoá vĩnh viễn thành công', 'type' => 'success']);
header("location:index.php?option=category&cat=trash");
