<?php

use App\Models\Product;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$product = Product::find($id);
if ($product == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=product");
}
?>


<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Chi tiết sản phẩm</h1>
            </div>
         </div>
      </div>
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="card">
         <div class="card-header text-right">
            <a href="index.php?option=product" class="btn btn-sm btn-info">
               <i class="fa fa-arrow-left" aria-hidden="true"></i>
               Về danh sách
            </a>
         </div>
         <div class="card-body p-2">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th style="width:30%">Tên trường</th>
                     <th>Giá trị</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th>ID</th>
                     <td><?= $product->id; ?></td>
                  </tr>
                  <tr>
                     <th>Category_id</th>
                     <td><?= $product->category_id; ?></td>
                  </tr>
                  <tr>
                     <th>Brand_id</th>
                     <td><?= $product->brand_id; ?></td>
                  </tr>
                  <tr>
                     <th>Name</th>
                     <td><?= $product->name; ?></td>
                  </tr>
                  <tr>
                     <th>Slug</th>
                     <td><?= $product->slug; ?></td>
                  </tr>
                  <tr>
                     <th>Image</th>
                     <td><?= $product->image; ?></td>
                  </tr>
                  <tr>
                     <th>Detail</th>
                     <td><?= $product->detail; ?></td>
                  </tr>
                  <tr>
                     <th>Qty</th>
                     <td><?= $product->qty; ?></td>
                  </tr>
                  <tr>
                     <th>Price</th>
                     <td><?= $product->price; ?></td>
                  </tr>
                  <tr>
                     <th>Pricesale</th>
                     <td><?= $product->pricesale; ?></td>
                  </tr>
                  <tr>
                     <th>Description</th>
                     <td><?= $product->description; ?></td>
                  </tr>
                  <tr>
                     <th>Created_at</th>
                     <td><?= $product->created_at; ?></td>
                  </tr>
                  <tr>
                     <th>Created_by</th>
                     <td><?= $product->created_by; ?></td>
                  </tr>
                  <tr>
                     <th>Updated_at</th>
                     <td><?= $product->updated_at; ?></td>
                  </tr>
                  <tr>
                     <th>Updated_by</th>
                     <td><?= $product->updated_by; ?></td>
                  </tr>
                  <tr>
                     <th>Status</th>
                     <td><?= $product->status; ?></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>