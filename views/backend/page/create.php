<?php


use App\Models\Post;

$slug = $_REQUEST['cat'];
$list = Post::where([['slug', '=', $slug], ['status', '!=', 0], ['type', '=', 'page']])
  ->orderBy('created_at', 'DESC')
  ->get();
?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=page&cat=process" method="post" enctype="multipart/form-data">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="d-inline">Thêm mới trang đơn</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-header text-right">
          <a href="index.php?option=page" class="btn btn-sm btn-info">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            Về danh sách
          </a>
          <button class="btn btn-sm btn-success" name="THEMTRANGDON">
            <i class="fa fa-save" aria-hidden="true"></i>
            Thêm trang đơn
          </button>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-9">
              <div class="mb-3">
                <label>Tên trang đơn (*)</label>
                <input type="text" name="title" class="form-control">
              </div>
              <div class="mb-3">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control">
              </div>
              <div class="mb-3">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label>Hình đại diện</label>
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