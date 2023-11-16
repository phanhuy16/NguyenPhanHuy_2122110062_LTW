<?php

use App\Models\User;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$customer = User::find($id);
if ($customer == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=customer");
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
                  <a href="index.php?option=customer" class="btn btn-sm btn-info">
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
                           <td><?= $customer->id; ?></td>
                        </tr>
                        <tr>
                           <td>Name</td>
                           <td><?= $customer->name; ?></td>
                        </tr>
                        <tr>
                           <td>Username</td>
                           <td><?= $customer->username; ?></td>
                        </tr>
                        <tr>
                           <td>Password</td>
                           <td><?= $customer->password; ?></td>
                        </tr>
                        <tr>
                           <td>Password_re</td>
                           <td><?= $customer->password_re; ?></td>
                        </tr>
                        <tr>
                           <td>Email</td>
                           <td><?= $customer->email; ?></td>
                        </tr>
                        <tr>
                           <td>Gender</td>
                           <td><?= $customer->gender; ?></td>
                        </tr>
                        <tr>
                           <td>Phone</td>
                           <td><?= $customer->phone; ?></td>
                        </tr>
                        <tr>
                           <td>Image</td>
                           <td><img style="max-width: 60px" src="../public/images/customer/<?= $customer->image; ?>" alt="<?= $customer->image; ?>"></td>
                        </tr>
                        <tr>
                           <td>Roles</td>
                           <td><?= $customer->roles; ?></td>
                        </tr>
                        <tr>
                           <td>Address</td>
                           <td><?= $customer->address; ?></td>
                        </tr>
                        <tr>
                           <td>Created_at</td>
                           <td><?= $customer->created_at; ?></td>
                        </tr>
                        <tr>
                           <td>Created_by</td>
                           <td><?= $customer->created_by; ?></td>
                        </tr>
                        <tr>
                           <td>Updated_at </td>
                           <td><?= $customer->updated_at; ?></td>
                        </tr>
                        <tr>
                           <td>Updated_by</td>
                           <td><?= $customer->updated_by; ?></td>
                        </tr>
                        <tr>
                           <td>Status</td>
                           <td><?= $customer->status; ?></td>
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