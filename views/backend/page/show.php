<?php

use App\Models\Post;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$page = Post::find($id);
if ($page == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=page");
}
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Chi tiết trang đơn</h1>
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
                  <a href="index.php?option=page" class="btn btn-sm btn-info">
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
                           <td><?= $page->id; ?></td>
                        </tr>
                        <tr>
                           <td>Topic_id</td>
                           <td><?= $page->topic_id; ?></td>
                        </tr>
                        <tr>
                           <td>Title</td>
                           <td><?= $page->title; ?></td>
                        </tr>
                        <tr>
                           <td>Slug</td>
                           <td><?= $page->slug; ?></td>
                        </tr>
                        <tr>
                           <td>Detail</td>
                           <td><?= $page->detail; ?></td>
                        </tr>
                        <tr>
                           <td>Image</td>
                           <td><img style="max-width: 60px" src="../public/images/post/<?= $page->image; ?>" alt="<?= $page->image; ?>"></td>
                        </tr>
                        <tr>
                           <td>Type</td>
                           <td><?= $page->type; ?></td>
                        </tr>
                        <tr>
                           <td>Description</td>
                           <td><?= $page->description; ?></td>
                        </tr>
                        <tr>
                           <td>Created_at</td>
                           <td><?= $page->created_at; ?></td>
                        </tr>
                        <tr>
                           <td>Created_by</td>
                           <td><?= $page->created_by; ?></td>
                        </tr>
                        <tr>
                           <td>Updated_at </td>
                           <td><?= $page->updated_at; ?></td>
                        </tr>
                        <tr>
                           <td>Updated_by</td>
                           <td><?= $page->updated_by; ?></td>
                        </tr>
                        <tr>
                           <td>Status</td>
                           <td><?= $page->status; ?></td>
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