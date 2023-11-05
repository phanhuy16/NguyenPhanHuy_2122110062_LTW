<?php

use App\Models\Post;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$page = Post::find($id);
if ($page == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=page&cat=trash");
}
$page->delete();
MyClass::set_flash('message', ['msg' => 'Xoá vĩnh viễn thành công', 'type' => 'success']);
header("location:index.php?option=page&cat=trash");
