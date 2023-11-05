<?php

use App\Models\Post;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$page = Post::find($id);
if ($page == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=page&cat=trash");
}
$page->status = 2;
$page->updated_at = date('Y-m-d H:i:s');
$page->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$page->save();
MyClass::set_flash('message', ['msg' => 'Khôi phục thành công', 'type' => 'success']);
header("location:index.php?option=page&cat=trash");
