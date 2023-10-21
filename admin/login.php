<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập Quản Trị</title>
  <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">

  <style>
    body {
      background: rgb(238, 174, 202);
      background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 233, 223, 1) 100%);
    }

    .swapper {
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0px 1px 3px black;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <?php
  require_once '../vendor/autoload.php';

  use App\Models\User;

  $error = "";

  if (isset($_POST['DANGNHAP'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $args = [
      ['password', '=', $password],
      ['roles', '=', 1],
      ['status', '=', 1],
    ];
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $args[] = ['email', '=', $username];
    } else {
      $args[] = ['username', '=', $username];
    }
    $user = User::where($args)->first();
    if ($user !== null) {
      $_SESSION['useradmin'] = $username;
      $_SESSION['user_id'] = $user->id;
      $_SESSION['name'] = $user->name;
      $_SESSION['image'] = $user->image;
      header('location:index.php');
    } else {
      $error = "Tài khoản không hợp lệ";
    }
  }
  ?>
  <form action="login.php" method="post">
    <div class="swapper mt-5 p-4">
      <h1 class="text-danger fs-3 text-center">Đăng Nhập</h1>
      <div class="mb-3">
        <label for=""><strong>Tên tài khoản *</strong></label>
        <input class="form-control" type="text" name="username" placeholder="Tên đăng nhập hoặc email" require>
      </div>
      <div class="mb-3">
        <label for=""><strong>Mật khẩu *</strong></label>
        <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" require>
      </div>
      <div class="mb-3 text-end">
        <button class="btn btn-info text-secondary" type="submit" value="Đăng nhập" name="DANGNHAP">Đăng nhập</button>
      </div>
      <div class="mb-3 text-start">
        <p>Chú ý: (*) bắt buộc phải nhập thông tin</p>
        <?php if ($error != "") : ?>
          <p class="text-danger"><?= $error; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </form>
</body>

</html>