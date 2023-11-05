<?php

use App\Models\Menu;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$menu = Menu::find($id);
if ($menu == null) {
  MyClass::set_flash('message', ['msg' => 'Lỗi trang 404', 'type' => 'danger']);
  header("location:index.php?option=menu");
}

?>

<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="d-inline">Cập nhật menu</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header text-right">
          <a href="index.php?option=menu" class="btn btn-sm btn-info">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            Về danh sách
          </a>
          <button class="btn btn-sm btn-success" type="submit" name="CAPNHAT">
            <i class="fa fa-save" aria-hidden="true"></i>
            Lưu
          </button>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <input type="hidden" name="id" value="<?= $menu->id; ?>">
                <label>Tên menu (*)</label>
                <input type="text" value="<?= $menu->name; ?>" name="name" class="form-control">
              </div>
              <div class="mb-3">
                <label>Liên kết</label>
                <input type="text" value="<?= $menu->link; ?>" name="link" class="form-control">
              </div>
              <div class="mb-3">
                <label>Vị trí</label>
                <input type="text" value="<?= $menu->position; ?>" name="position" class="form-control">
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