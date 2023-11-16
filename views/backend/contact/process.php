<?php

use App\Models\Contact;
use App\Libraries\MyClass;

// if (isset($_POST['THEM'])) {
//   $brand = new Contact();

//   //Lấy từ form
//   $brand->name = $_POST['name'];
//   $brand->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
//   $brand->description = $_POST['description'];
//   $brand->status = $_POST['status'];

//   //Xử lý uploads file
//   if (strlen($_FILES['image']['name']) > 0) {
//     $target_dir = "../public/images/brand/";
//     $target_file = $target_dir . basename($_FILES["image"]["name"]);
//     $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
//       $filename = $brand->slug . '.' . $extension;
//       move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
//       $brand->image = $filename;
//     }
//   }

//   //Tự sinh ra
//   $brand->created_at = date('Y-m-d H:i:s');
//   $brand->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
//   var_dump($brand);

//   //Lưu vào csdl
//   $brand->save();

//   MyClass::set_flash('message', ['msg' => 'Thêm thành công', 'type' => 'success']);

//   //Chuyển hướng về index
//   header("location:index.php?option=brand");
// }

if (isset($_POST['CAPNHAT'])) {
  $id = $_POST['id'];
  $contact = Contact::find($id);
  if ($contact == null) {
    MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
    header("location:index.php?option=contact");
  }

  //Lấy từ form
  $contact->name = $_POST['name'];
  //$contact->slug = (strlen($_POST['slug']) > 0) ? $_POST['slug'] : MyClass::str_slug($_POST['name']);
  $contact->email = $_POST['email'];
  $contact->status = $_POST['status'];
  $contact->phone = $_POST['phone'];
  $contact->title = $_POST['title'];
  $contact->content = $_POST['content'];

  //Xử lý uploads file
  if (strlen($_FILES['image']['name']) > 0) {
    $target_dir = "../public/images/contact/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
      $filename = $contact->slug . '.' . $extension;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $filename);
      $contact->image = $filename;
    }
  }

  //Tự sinh ra
  $contact->updated_at = date('Y-m-d H:i:s');
  $contact->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
  var_dump($contact);

  //Lưu vào csdl
  $contact->save();

  //Chuyển hướng về index
  MyClass::set_flash('message', ['msg' => 'Cập nhật thành công', 'type' => 'success']);
  header("location:index.php?option=contact");
}
