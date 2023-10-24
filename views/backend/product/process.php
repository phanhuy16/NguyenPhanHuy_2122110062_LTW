<?php

use App\Models\Product;
use App\Libraries\MyClass;

if (isset($_POST['CHANGEADD'])) {
  $brand = new Product();

  //Lấy từ form
  $brand->name = $_POST['name'];
  $brand->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $brand->status = $_POST['status'];
  $brand->detail = $_POST['detail'];
  $brand->price = $_POST['price'];

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/product/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $brand->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $brand->image = $filename;
    }
  }

  //Tự sinh ra
  $brand->created_at = date('Y-m-d H:i:s');
  $brand->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($brand);

  //Lưu vào csdl
  $brand->save();

  MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);

  //Chuyển hướng về index
  header("location:index.php?option=product");
}
