<?php

use App\Models\Post;
use App\Libraries\MyClass;

if (isset($_POST['THEMTRANGDON'])) {
  $page = new Post();
  //lấy từ form
  $page->title = $_POST['title'];
  $page->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['title']);
  $page->description = $_POST['description'];
  $page->status = $_POST['status'];

  //xử lý upload file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/post/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'Webp'])) {
      $filename = $page->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $post->image = $filename;
    }
  }

  //tự sinh ra

  $page->created_at = date('Y-m-d H:i:s');
  $page->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($page);
  //lưu vào CSDL
  $page->save();
  //chuyển về hướng index
  MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);
  header("location:index.php?option=page");
}

if (isset($_POST['CAPNHAT'])) {
  $id = $_POST['id'];
  $page = Post::find($id);
  if ($page == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=page");
  }

  //Lấy từ form
  $page->title = $_POST['title'];
  $page->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $page->status = $_POST['status'];
  $page->detail = $_POST['detail'];
  $page->description = $_POST['description'];

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/page/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $page->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $page->image = $filename;
    }
  }

  //Tự sinh ra
  $page->updated_at = date('Y-m-d H:i:s');
  $page->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($page);

  //Lưu vào csdl
  $page->save();

  MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
  //Chuyển hướng về index
  header("location:index.php?option=page");
}
