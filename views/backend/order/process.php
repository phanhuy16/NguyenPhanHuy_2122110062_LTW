<?php

use App\Models\Order;
use App\Libraries\MyClass;

if (isset($_POST['CAPNHAT'])) {
  $id = $_POST['id'];
  $order = Order::find($id);
  if ($order == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=order");
  }

  //Lấy từ form
  $order->deliveryname = $_POST['deliveryname'];
  //$order->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $order->note = $_POST['note'];
  $order->status = $_POST['status'];
  $order->deliveryphone = $_POST['deliveryphone'];
  $order->deliveryaddress = $_POST['deliveryaddress'];
  $order->deliveryemail = $_POST['deliveryemail'];

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/order/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $order->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $order->image = $filename;
    }
  }

  //Tự sinh ra
  $order->updated_at = date('Y-m-d H:i:s');
  $order->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($order);

  //Lưu vào csdl
  $order->save();

  //Chuyển hướng về index
  MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
  header("location:index.php?option=order");
}
