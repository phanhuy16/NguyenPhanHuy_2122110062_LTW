<?php

use App\Models\User;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$customer = User::find($id);
if ($customer == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=customer&cat=trash");
}
$customer->delete();
MyClass::set_flash('message', ['msg' => 'Xoá vĩnh viễn thành công', 'type' => 'success']);
header("location:index.php?option=customer&cat=trash");
