<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="public/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="public/css/frontend.css">
   <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   <section class="hdl-header">
      <div class="container">
         <div class="row">
            <div class="col-6 col-sm-6 col-md-2 py-1">
               <a href="index.html">
                  <img src="public/images/logo.png" class="img-fluid" alt="Logo">
               </a>
            </div>
            <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                     aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text bg-main" id="basic-addon2">
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
               </div>
            </div>
            <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
               <div class="call-login--register border-bottom">
                  <ul class="nav nav-fills py-0 my-0">
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
                           0987654321
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">Đăng nhập</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="register.html">Đăng ký</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="profile.html">Hồ Diên Lợi</a>
                     </li>
                  </ul>
               </div>
               <div class="fs-6 py-2">
                  ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN <span class="text-main">TRONG 3 NGÀY</span>
               </div>
            </div>
            <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
               <a href="cart.html">
                  <div class="box-cart float-end">
                     <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                     <span>1</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-mainmenu bg-main">
      <div class="container">
         <div class="row">
            <div class="col-12 d-none d-md-block col-md-2 d-none d-md-block">
               <div class="dropdown list-category">
                  <strong class="dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false">
                     Danh mục sản phẩm
                  </strong>
                  <ul class="dropdown-menu w-100">
                     <li><a class="dropdown-item" href="product_category.html">Thời trang nam</a></li>
                     <li><a class="dropdown-item" href="product_category.html">Thời trang nữ</a></li>
                     <li><a class="dropdown-item" href="product_category.html">Thời trang trẻ em</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-12 col-md-9">
               <nav class="navbar navbar-expand-lg bg-main">
                  <div class="container-fluid">
                     <a class="navbar-brand d-block d-sm-none text-white" href="index.html">DIENLOISHOP</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                              <a class="nav-link text-white" aria-current="page" href="index.html">Trang chủ</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-white" href="post_page.html">Giới thiệu</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nam
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Quần jean nam</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Áo thun nam </a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nam</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nữ
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Váy</a></li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Đầm</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nữ</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="post_topic.html" class="nav-link text-white">Bài viết</a>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link text-white">Liên hệ</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-slideshow">
      <div id="carouselExample" class="carousel slide">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="public/images/banner/slider_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="public/images/banner/slider_2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="public/images/banner/slider_3.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>
   <section class="hdl-maincontent">
      <div class="container">
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h1 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG NAM</h1>
                     <img class="img-fluid d-none d-md-block" src="public/images/category/thoi-trang-nam.png"
                        alt="category.jpg">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nam-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nam-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nam 2</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h3 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG NỮ</h3>
                     <img class="img-fluid d-none d-md-block" src="public/images/category/thoi-trang-nu.png" alt="">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-nu-1.jpg" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-nu-2.jpg" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang nữ 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h3 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG TRẺ EM</h3>
                     <img class="img-fluid d-none d-md-block" src="public/images/category/thoi-trang-tre-em.png"
                        alt="">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-tre-em-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-tre-em-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">
                                 Thời trang trẻ em 1
                              </a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-category mt-3">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-title bg-main">
                     <h3 class="fs-5 py-3 text-center text-uppercase">THỜI TRANG THỂ THAO</h3>
                     <img class="img-fluid d-none d-md-block" src="public/images/category/thoi-trang-the-thao.png"
                        alt="">
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row product-list">
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                     <div class="col-6 col-md-3 mb-4">
                        <div class="product-item border">
                           <div class="product-item-image">
                              <a href="product_detail.html">
                                 <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt=""
                                    id="img1">
                                 <img class="img-fluid" src="public/images/product/thoi-trang-the-thao-2.webp" alt=""
                                    id="img2">
                              </a>
                           </div>
                           <h2 class="product-item-name text-main text-center fs-5 py-1">
                              <a href="product_detail.html">Thời trang thể thao 1</a>
                           </h2>
                           <h3 class="product-item-price fs-6 p-2 d-flex">
                              <div class="flex-fill"><del>200.000đ</del></div>
                              <div class="flex-fill text-end text-main">190.000đ</div>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="hdl-lastpost bg-main mt-3 py-4">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <h3>BÀI VIẾT MỚI</h3>
               <div class="row">
                  <div class="col-md-6">
                     <a href="post_detail.html">
                        <img class="img-fluid" src="public/images/post/post-4.webp" />
                     </a>
                     <h3 class="post-title fs-4 py-2">
                        <a href="post_detail.html">
                           Tieu đề bài viết mói nhất 1
                        </a>
                     </h3>
                     <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài
                        viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất
                        1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                  </div>
                  <div class="col-md-6">
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="public/images/post/post-1.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 2
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="public/images/post/post-2.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 3
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-md-4">
                           <a href="post_detail.html">
                              <img class="img-fluid" src="public/images/post/post-3.jpg" />
                           </a>
                        </div>
                        <div class="col-md-8">
                           <h3 class="post-title fs-5">
                              <a href="post_detail.html">
                                 Tieu đề bài viết mói nhất 4
                              </a>
                           </h3>
                           <p>Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1Tieu đề bài viết mói nhất 1</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">FACEBOOK</div>
         </div>
      </div>
   </section>
   <section class="hdl-footer pb-4">
      <div class="container">
         <div class="row">
            <div class="col-md-4 pt-4">
               <h3 class="widgettilte">CHÚNG TÔI LÀ AI ?</h3>
               <p class="pt-1">
                  Copyright@ 2024 DienloiShop là hệ thống bán sĩ và lẽ thời trang nam, nữ, trẻ em và quần áo thể thao,
                  mong muốn đem đến chất lượng tốt nhất cho khách hàng.
               </p>
               <p class="pt-1">
                  Địa chỉ: B216A, KP Bình Phước, Phường Bình Nhâm, TP. Thuận An, Bình Dương
               </p>
               <p class="pt-1">
                  Điện thoại: 0985 608 759(call, zalo) - Email: dienloisoft@gmail.com
               </p>
               <h3 class="widgettilte">MẠNG XÃ HỘI</h3>
               <div class="social my-3">
                  <div class="facebook-icon">
                     <a href="#">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                  </div>
                  <div class="instagram-icon">
                     <a href="#">
                        <i class="fab fa-instagram"></i>
                     </a>
                  </div>
                  <div class="google-icon">
                     <a href="#">
                        <i class="fab fa-google"></i>
                     </a>
                  </div>
                  <div class="youtube-icon">
                     <a href="#">
                        <i class="fab fa-youtube"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 pt-4">
               <h3 class="widgettilte">
                  <strong>Liên hệ</strong>
               </h3>
               <ul class="footer-menu">
                  <li><a href="index.html">Trang chủ</a></li>
                  <li><a href="post_page.html">Giới thiệu</a></li>
                  <li><a href="product.html">Sản phẩm</a></li>
                  <li><a href="post_topic.html">Bài viết</a></li>
                  <li><a href="contact.html">Liên hệ</a></li>
               </ul>
            </div>
            <div class="col-md-4 pt-4 text-end">
               <h3 class="fs-5 text-end">
                  <strong>Lượt truy cập</strong>
               </h3>
               <p class="my-1">9888 lượt</p>
            </div>
         </div>
      </div>
   </section>
   <section class="dhl-copyright bg-dark py-3">
      <div class="container text-center text-white">
         Thiết kế bởi: Hồ Diên Lợi - Phone: 0998765432
      </div>
   </section>
</body>

</html>