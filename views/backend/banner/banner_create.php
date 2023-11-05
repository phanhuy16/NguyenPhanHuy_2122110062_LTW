<?php

use App\Models\Banner;

$create_banner = Banner::where([
   ['status', '!=', 0],
   ['position', '=', 'slideshow']
])
   ->orderBy('created_at', 'DESC')
   ->get();
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=banner&cat=process" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Thêm mới banner</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="content">
         <div class="card">
            <div class="card-header text-right">
               <a href="index.php?option=banner" class="btn btn-sm btn-info">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Về danh sách
               </a>
               <button type="submit" class="btn btn-sm btn-success" name="CHANGEADD">
                  <i class="fa fa-save" aria-hidden="true"></i>
                  Thêm banner
               </button>
            </div>
            <div class="card-body">
               <?php require_once "../views/backend/message.php"; ?>
               <div class="row">
                  <div class="col-md-9">
                     <div class="mb-3">
                        <label>Tên banner (*)</label>
                        <input type="text" name="name" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Liên kết</label>
                        <input type="text" name="link" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Mô tả (*)</label>
                        <textarea name="detail" rows="5" class="form-control"></textarea>
                     </div>
                     <div class="mb-3">
                        <label>Số thứ tự (*)</label>
                        <input type="text" name="sort_order" class="form-control">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="mb-3">
                        <label>Vị trí (*)</label>
                        <select name="position" class="form-control">
                           <option value="">None</option>
                           <?php foreach ($create_banner as $position) : ?>
                              <option value="<?= $position->position; ?>"><?= $position->position; ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label>Hình (*)</label>
                        <input type="file" name="image" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                           <option value="1">Xuất bản</option>
                           <option value="2">Chưa xuất bản</option>
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