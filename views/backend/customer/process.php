<?php

use App\Models\User;
use App\Libraries\MyClass;

if (isset($_POST['CHANGEADD'])) {
  $customer = new User();

  //Lấy từ form
  $password = $_POST['password'];
  $password_re = $_POST['password_re'];
  $customer->name = $_POST['name'];
  //$customer->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $customer->username = $_POST['username'];
  $customer->phone = $_POST['phone'];
  $customer->email = $_POST['email'];
  $customer->gender = $_POST['gender'];
  $customer->status = $_POST['status'];
  if ($password === $password_re) {
    $customer->password = sha1($_POST['password']);
    $customer->password_re = sha1($_POST['password_re']);
  } else {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=customer");
  }

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/customer/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $customer->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $customer->image = $filename;
    }
  }

  //Tự sinh ra
  $customer->created_at = date('Y-m-d H:i:s');
  $customer->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($customer);

  //Lưu vào csdl
  $customer->save();

  MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);

  //Chuyển hướng về index
  header("location:index.php?option=customer");
}

if (isset($_POST['CAPNHAT'])) {
  $id = $_POST['id'];
  $customer = User::find($id);
  if ($customer == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=customer");
  }

  //Lấy từ form
  $customer->name = $_POST['name'];
  //$customer->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $customer->phone = $_POST['phone'];
  $customer->email = $_POST['email'];
  $customer->status = $_POST['status'];
  $customer->gender = $_POST['gender'];
  $customer->username = $_POST['username'];
  $password = $_POST['password'];
  $password_re = $_POST['password_re'];
  if ($password === $password_re) {
    $customer->password = sha1($_POST['password']);
    $customer->password_re = sha1($_POST['password_re']);
  } else {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=customer");
  }

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/customer/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $customer->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $customer->image = $filename;
    }
  }

  //Tự sinh ra
  $customer->updated_at = date('Y-m-d H:i:s');
  $customer->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($customer);

  //Lưu vào csdl
  $customer->save();

  //Chuyển hướng về index
  MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
  header("location:index.php?option=customer");
}
