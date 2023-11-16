<?php

use App\Models\Product;

$list = Product::where('product.status', '!=', 0)
   ->join('category', 'category.id', '=', 'product.category_id')
   ->join('brand', 'brand.id', '=', 'product.brand_id')
   ->select("product.*", "category.name as category_name", "brand.name as brand_name")
   ->orderBy('product.created_at', 'DESC')
   ->get();
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12 d-flex align-items-center">
                  <h1 class="d-inline">Tất cả sản phẩm</h1>
                  <a href="index.php?option=product&cat=create" class="btn btn-sm btn-primary mx-3">Thêm sản phẩm</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Main content -->
      <section class="content">
         <a href="index.php?option=product" class="btn btn-sm btn-primary mb-2">Tất cả </a> |
         <a href="index.php?option=product&cat=trash" class="mb-2 btn btn-sm btn-warning"> Thùng rác</a>
         <div class="card">
            <div class="card-header d-flex align-items-center">
               <select name="" id="" class="form-control d-inline" style="width:100px;">
                  <option value="">Xoá</option>
               </select>
               <button class="mx-3 btn btn-sm btn-success" type="submit" name="APPLY">Áp dụng</button>
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
                        <th>Tên sản phẩm</th>
                        <th>Tên danh mục</th>
                        <th>Tên thương hiệu</th>
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
                                 <img class="img-fluid" src="../public/images/product/<?= $item->image; ?>" alt="<?= $item->image; ?>">
                              </td>
                              <td>
                                 <div class="name">
                                    <?= $item->name; ?>
                                 </div>
                                 <div class="function_style">
                                    <?php if ($item->status == 1) : ?>
                                       <a class="btn btn-primary btn-xs" href="index.php?option=product&cat=status&id=<?= $item->id; ?>">
                                          <i class="fas fa-toggle-on"></i> Hiện
                                       </a> |
                                    <?php else : ?>
                                       <a class="btn btn-warning btn-xs" href="index.php?option=product&cat=status&id=<?= $item->id; ?>">
                                          <i class="fas fa-toggle-off"></i> Ẩn
                                       </a> |
                                    <?php endif; ?>
                                    <a class="btn btn-secondary btn-xs" href="index.php?option=product&cat=edit&id=<?= $item->id; ?>">
                                       <i class="fas fa-edit"></i> Chỉnh sửa
                                    </a> |
                                    <a class="btn btn-info btn-xs" href="index.php?option=product&cat=show&id=<?= $item->id; ?>">
                                       <i class="fas fa-eye"></i> Chi tiết
                                    </a> |
                                    <a class="btn btn-danger btn-xs" href="index.php?option=product&cat=delete&id=<?= $item->id; ?>">
                                       <i class="fas fa-trash"></i> Xoá
                                    </a>
                                 </div>
                              </td>
                              <td><?= $item->category_name; ?></td>
                              <td><?= $item->brand_name; ?></td>
                           </tr>
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </section>
   </div>
</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>