<?php

use App\Models\User;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$user = User::find($id);
if ($user == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=user");
}
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=user&cat=process" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Cập nhật thành viên</h1>
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
               <a href="index.php?option=user" class="btn btn-sm btn-info">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Về danh sách
               </a>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $user->id; ?>">
                        <label>Họ tên (*)</label>
                        <input type="text" value="<?= $user->name; ?>" name="name" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Điện thoại (*)</label>
                        <input type="text" value="<?= $user->phone; ?>" name="phone" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Email (*)</label>
                        <input type="email" value="<?= $user->email; ?>" name="email" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Tên đăng nhập (*)</label>
                        <input type="text" value="<?= $user->username; ?>" name="username" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Mật khẩu (*)</label>
                        <input type="password" value="<?= $user->password; ?>" name="password" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Xác nhận mật khẩu (*)</label>
                        <input type="password" value="<?= $user->password_re; ?>" name="password_re" class="form-control">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label>Giới tính (*)</label>
                        <select name="gender" class="form-control">
                           <option value="1" <?= ($user->gender == 1) ? 'selected' : ''; ?>>Nam</option>
                           <option value="0" <?= ($user->gender == 0) ? 'selected' : ''; ?>>Nữ</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label>Địa chỉ (*)</label>
                        <input type="text" value="<?= $user->address; ?>" name="address" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Hình đại diện</label>
                        <input type="file" value="<?= $user->image; ?>" name="image" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                           <option value="1" <?= ($user->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                           <option value="2" <?= ($user->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
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