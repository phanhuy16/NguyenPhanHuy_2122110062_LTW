<?php

use App\Models\User;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$customer = User::find($id);
if ($customer == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=customer&cat=trash");
}
$customer->status = 2;
$customer->updated_at = date('Y-m-d H:i:s');
$customer->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$customer->save();
MyClass::set_flash('message', ['msg' => 'Khôi phục thành công', 'type' => 'success']);
header("location:index.php?option=customer&cat=trash");
