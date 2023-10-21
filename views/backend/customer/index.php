<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Tất cả khách hàng</h1>
               <a href="customer_create.html" class="btn btn-sm btn-primary">Thêm khách hàng</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="card">
         <div class="card-header">
            Noi dung
         </div>
         <div class="card-body">
            <table class="table table-bordered" id="mytable">
               <thead>
                  <tr>
                     <th class="text-center" style="width:30px;">
                        <input type="checkbox">
                     </th>
                     <th class="text-center" style="width:130px;">Hình ảnh</th>
                     <th>Họ tên</th>
                     <th>Điện thoại</th>
                     <th>Email</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="datarow">
                     <td>
                        <input type="checkbox">
                     </td>
                     <td>
                        <img src="../public/images/user.jpg" alt="user.jpg">
                     </td>
                     <td>
                        <div class="name">
                           Hồ Diên Lợi
                        </div>
                        <div class="function_style">
                           <a href="#">Hiện</a> |
                           <a href="#">Chỉnh sửa</a> |
                           <a href="customer_show.html">Chi tiết</a> |
                           <a href="#">Xoá</a>
                        </div>
                     </td>
                     <td>0987654331</td>
                     <td>dienloisoft@gmail.com</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </section>
</div>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>