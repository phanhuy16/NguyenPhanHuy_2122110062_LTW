<?php

use App\Models\User;
use App\Libraries\MyClass;

if (isset($_POST['SAVESTORE'])) {
  $user = new User();

  //Lấy từ form
  $password = $_POST['password'];
  $password_re = $_POST['password_re'];
  $user->name = $_POST['name'];
  //$user->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $user->username = $_POST['username'];
  $user->phone = $_POST['phone'];
  $user->email = $_POST['email'];
  $user->gender = $_POST['gender'];
  $user->address = $_POST['address'];
  $user->status = $_POST['status'];
  if ($password === $password_re) {
    $user->password = sha1($_POST['password']);
    $user->password_re = sha1($_POST['password_re']);
  } else {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=user");
  }

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/user/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $user->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $user->image = $filename;
    }
  }

  //Tự sinh ra
  $user->created_at = date('Y-m-d H:i:s');
  $user->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($user);

  //Lưu vào csdl
  $user->save();

  MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);

  //Chuyển hướng về index
  header("location:index.php?option=user");
}

if (isset($_POST['CAPNHAT'])) {
  $id = $_POST['id'];
  $user = User::find($id);
  if ($user == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=user");
  }

  //Lấy từ form
  $user->name = $_POST['name'];
  //$user->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $user->phone = $_POST['phone'];
  $user->email = $_POST['email'];
  $user->status = $_POST['status'];
  $user->username = $_POST['username'];
  $user->gender = $_POST['gender'];
  $user->address = $_POST['address'];
  $password = $_POST['password'];
  $password_re = $_POST['password_re'];
  if ($password === $password_re) {
    $user->password = sha1($_POST['password']);
    $user->password_re = sha1($_POST['password_re']);
  } else {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=user");
  }

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/user/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $user->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $user->image = $filename;
    }
  }

  //Tự sinh ra
  $user->updated_at = date('Y-m-d H:i:s');
  $user->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($user);

  //Lưu vào csdl
  $user->save();

  //Chuyển hướng về index
  MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
  header("location:index.php?option=user");
}
