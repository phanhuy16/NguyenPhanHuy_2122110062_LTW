<?php

use App\Models\User;

$list = User::where('status', '=', 0)
   ->orderBy('created_at', 'DESC')
   ->get();
?>
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Thùng rác</h1>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-md-6">
                  <a href="index.php?option=user" class="btn btn-sm btn-primary">Tất cả </a> |
                  <a href="index.php?option=user&cat=trash" class="btn btn-sm btn-warning"> Thùng rác</a>
               </div>
               <div class="col-md-6 text-right">
                  <a href="index.php?option=user" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                  </a>
               </div>
            </div>
         </div>
         <div class="card-body">
            <?php require_once "../views/backend/message.php"; ?>
            <div class="row">
               <div class="col-md-12">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Tên thành viên</th>
                           <th>Điện thoại</th>
                           <th>Email</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (count($list) > 0) : ?>
                           <?php foreach ($list as $item) : ?>
                              <tr class="datarow">
                                 <td>
                                    <input type="checkbox">
                                 </td>
                                 <td>
                                    <img class="img-fluid" src="../public/images/user/<?= $item->image; ?>" alt="<?= $item->image; ?>">
                                 </td>
                                 <td>
                                    <div class="name">
                                       <?= $item->name; ?>
                                    </div>
                                    <div class="function_style">
                                       <a class="btn btn-info btn-xs" href="index.php?option=user&cat=restore&id=<?= $item->id; ?>">
                                          <i class="fas fa-undo"></i> Khôi phục
                                       </a> |
                                       <a class="btn btn-danger btn-xs" href="index.php?option=user&cat=destroy&id=<?= $item->id; ?>">
                                          <i class="fas fa-trash"></i> Xoá vĩnh viễn
                                       </a>
                                    </div>
                                 </td>
                                 <td><?= $item->phone; ?></td>
                                 <td><?= $item->email; ?></td>
                              </tr>
                           <?php endforeach; ?>
                        <?php endif; ?>
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