<?php

use App\Models\Contact;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$contact = Contact::find($id);
if ($contact == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=contact");
}
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=contact&cat=process" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Cập nhật liên hệ</h1>
               </div>
            </div>
         </div>
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="card">
            <div class="card-header text-right">
               <button class="btn btn-sm btn-success" type="submit" name="CAPNHAT">
                  <i class="fa fa-save" aria-hidden="true"></i>
                  Lưu
               </button>
               <a href="index.php?option=contact" class="btn btn-sm btn-info">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Về danh sách
               </a>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $contact->id; ?>">
                        <label>Tên liên hệ (*)</label>
                        <input type="text" value="<?= $contact->name; ?>" name="name" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Email</label>
                        <input type="email" value="<?= $contact->email; ?>" name="email" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Điện thoại</label>
                        <input type="text" value="<?= $contact->phone; ?>" name="phone" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Tiêu đề</label>
                        <input type="text" value="<?= $contact->title; ?>" name="title" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Chi tiết</label>
                        <textarea name="content" class="form-control"><?= $contact->content; ?></textarea>
                     </div>
                     <div class="mb-3">
                        <label>Hình đại diện</label>
                        <input type="file" name="image" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                           <option value="1" <?= ($contact->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                           <option value="2" <?= ($contact->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>