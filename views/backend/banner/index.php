<?php

use App\Models\Banner;

$list = Banner::where('status', '!=', 0)
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
               <div class="d-flex align-items-center">
                  <h1 class="d-inline">Tất cả banner</h1>
                  <a href="index.php?option=banner&cat=banner_create" class="mx-2 btn btn-sm btn-primary">Thêm banner</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <a href="index.php?option=banner" class="btn btn-sm btn-primary mb-2">Tất cả </a> |
      <a href="index.php?option=banner&cat=trash" class="btn btn-sm btn-warning mb-2"> Thùng rác</a>
      <div class="card">
         <div class="card-header">
            Noi dung
         </div>
         <div class="card-body">
            <?php require_once "../views/backend/message.php"; ?>
            <table class="table table-bordered" id="mytable">
               <thead>
                  <tr>
                     <th class="text-center" style="width:30px;">
                        <input type="checkbox">
                     </th>
                     <th class="text-center" style="width:130px;">Hình ảnh</th>
                     <th>Tên banner</th>
                     <th>Liên kết</th>
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
                              <img class="img-fluid" src="../public/images/banner/<?= $item->image; ?>" alt="<?= $item->image; ?>">
                           </td>
                           <td>
                              <div class="name">
                                 <?= $item->name; ?>
                              </div>
                              <div class="function_style">
                                 <?php if ($item->status == 1) : ?>
                                    <a class="btn btn-primary btn-xs" href="index.php?option=banner&cat=status&id=<?= $item->id; ?>">
                                       <i class="fas fa-toggle-on"></i> Hiện
                                    </a> |
                                 <?php else : ?>
                                    <a class="btn btn-warning btn-xs" href="index.php?option=banner&cat=status&id=<?= $item->id; ?>">
                                       <i class="fas fa-toggle-off"></i> Ẩn
                                    </a> |
                                 <?php endif; ?>
                                 <a class="btn btn-secondary btn-xs" href="index.php?option=banner&cat=edit&id=<?= $item->id; ?>">
                                    <i class="fas fa-edit"></i> Chỉnh sửa
                                 </a> |
                                 <a class="btn btn-info btn-xs" href="index.php?option=banner&cat=show&id=<?= $item->id; ?>">
                                    <i class="fas fa-eye"></i> Chi tiết
                                 </a> |
                                 <a class="btn btn-danger btn-xs" href="index.php?option=banner&cat=delete&id=<?= $item->id; ?>">
                                    <i class="fas fa-trash"></i> Xoá
                                 </a>
                              </div>
                           </td>
                           <td><?= $item->link; ?></td>
                        </tr>
                     <?php endforeach; ?>
                  <?php endif; ?>
               </tbody>
            </table>
         </div>
      </div>
   </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>