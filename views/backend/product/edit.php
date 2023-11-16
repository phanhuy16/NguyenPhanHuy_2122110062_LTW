<?php

use App\Models\Product;
use App\Libraries\MyClass;
use App\Models\Category;
use App\Models\Brand;

$id = $_REQUEST['id'];
$product = Product::find($id);
if ($product == null) {
   MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
   header("location:index.php?option=product");
}
$list_category = Category::where('parent_id', '!=', '0')->orderBy('created_at', 'DESC')
   ->select('id', 'name')->get();
$category_id_html = '';
foreach ($list_category as $category) {
   $category_id_html .= "<option value='$category->id'>$category->name</option>";
}

$list_brand = Brand::where('status', '!=', 0)->orderBy('created_at', 'DESC')->get();
$brand_id_html = '';
foreach ($list_brand as $brand) {
   $brand_id_html .= "<option value='$brand->id'>$brand->name</option>";
}
?>
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Cập nhật sản phẩm</h1>
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
               <button class="btn btn-sm btn-success" type="submit" name="CAPNHAT">
                  <i class="fa fa-save" aria-hidden="true"></i>
                  Cập nhật
               </button>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-9">
                     <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $product->id; ?>">
                        <label>Tên sản phẩm (*)</label>
                        <input type="text" value="<?= $product->name; ?>" name="name" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" value="<?= $product->slug; ?>" name="slug" class="form-control">
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="mb-3">
                              <label>Danh mục (*)</label>
                              <select name="category_id" class="form-control">
                                 <option value="">Chọn danh mục</option>
                                 <?= $category_id_html; ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="mb-3">
                              <label>Thương hiệu (*)</label>
                              <select name="brand_id" class="form-control">
                                 <option value="">Chọn thương hiệu</option>
                                 <?= $brand_id_html; ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label>Chi tiết (*)</label>
                        <textarea name="detail" placeholder="Nhập chi tiết sản phẩm" rows="2" class="form-control">
                           <?= $product->detail; ?>
                        </textarea>
                     </div>
                     <div class="mb-3">
                        <label>Mô tả (*)</label>
                        <textarea name="description" placeholder="Nhập chi tiết sản phẩm" rows="2" class="form-control">
                           <?= $product->description; ?>
                        </textarea>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="mb-3">
                        <label>Giá bán (*)</label>
                        <input type="number" value="<?= $product->price; ?>" min="10000" name="price" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Giá sale (*)</label>
                        <input type="number" value="<?= $product->pricesale; ?>" min="10000" name="pricesale" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Hình đại diện</label>
                        <input type="file" name="image" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                           <option value="1" <?= ($product->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                           <option value="2" <?= ($product->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
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