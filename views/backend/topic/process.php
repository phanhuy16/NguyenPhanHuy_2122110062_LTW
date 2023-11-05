<?php

use App\Models\Topic;
use App\Libraries\MyClass;

if (isset($_POST['THEM'])) {
  $topic = new Topic();

  //Lấy từ form
  $topic->name = $_POST['name'];
  $topic->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $topic->metadesc = $_POST['metadesc'];
  $topic->status = $_POST['status'];
  //Tự sinh ra
  $topic->created_at = date('Y-m-d H:i:s');
  $topic->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($topic);

  //Lưu vào csdl
  $topic->save();

  MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);

  //Chuyển hướng về index
  header("location:index.php?option=topic");
}

if (isset($_POST['CAPNHAT'])) {
  $id = $_POST['id'];
  $topic = Topic::find($id);
  if ($topic == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=topic");
  }

  //Lấy từ form
  $topic->name = $_POST['name'];
  $topic->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $topic->metadesc = $_POST['metadesc'];
  $topic->status = $_POST['status'];
  //Tự sinh ra
  $topic->updated_at = date('Y-m-d H:i:s');
  $topic->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($topic);

  //Lưu vào csdl
  $topic->save();

  //Chuyển hướng về index
  MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
  header("location:index.php?option=topic");
}
