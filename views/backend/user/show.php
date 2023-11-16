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
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Chi tiết thương hiệu</h1>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-md-12 text-right">
                  <a href="index.php?option=user" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                  </a>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>Tên trường</th>
                           <th>Giá trị</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>ID</td>
                           <td><?= $user->id; ?></td>
                        </tr>
                        <tr>
                           <td>Name</td>
                           <td><?= $user->name; ?></td>
                        </tr>
                        <tr>
                           <td>Username</td>
                           <td><?= $user->username; ?></td>
                        </tr>
                        <tr>
                           <td>Password</td>
                           <td><?= $user->password; ?></td>
                        </tr>
                        <tr>
                           <td>Password_re</td>
                           <td><?= $user->password_re; ?></td>
                        </tr>
                        <tr>
                           <td>Email</td>
                           <td><?= $user->email; ?></td>
                        </tr>
                        <tr>
                           <td>Gender</td>
                           <td><?= $user->gender; ?></td>
                        </tr>
                        <tr>
                           <td>Phone</td>
                           <td><?= $user->phone; ?></td>
                        </tr>
                        <tr>
                           <td>Image</td>
                           <td><img style="max-width: 60px" src="../public/images/user/<?= $user->image; ?>" alt="<?= $user->image; ?>"></td>
                        </tr>
                        <tr>
                           <td>Roles</td>
                           <td><?= $user->roles; ?></td>
                        </tr>
                        <tr>
                           <td>Address</td>
                           <td><?= $user->address; ?></td>
                        </tr>
                        <tr>
                           <td>Created_at</td>
                           <td><?= $user->created_at; ?></td>
                        </tr>
                        <tr>
                           <td>Created_by</td>
                           <td><?= $user->created_by; ?></td>
                        </tr>
                        <tr>
                           <td>Updated_at </td>
                           <td><?= $user->updated_at; ?></td>
                        </tr>
                        <tr>
                           <td>Updated_by</td>
                           <td><?= $user->updated_by; ?></td>
                        </tr>
                        <tr>
                           <td>Status</td>
                           <td><?= $user->status; ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>