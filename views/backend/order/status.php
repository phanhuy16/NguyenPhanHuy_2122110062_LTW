<?php

use App\Models\Order;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$order = Order::find($id);
if ($order == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=order");
}
$order->status = ($order->status == 1) ? 2 : 1;
$order->updated_at = date('Y-m-d H:i:s');
$order->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
$order->save();
MyClass::set_flash('message', ['msg' => 'Thay đỗi trạng thái thành công', 'type' => 'success']);
header("location:index.php?option=order");
