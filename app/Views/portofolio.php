
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<style>
  .description-column {
    padding: 0 1px; /* Sesuaikan nilai ini sesuai dengan kebutuhan jarak kanan dan kiri */
  }
</style>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Postingan | Selected Works</title>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="cursor-outer d-none d-md-block"></div>
    <nav class="navbar navbar-light py-3 px-0 overflow-hidden">
      <div class="container px-md-5">
        <div class="row w-100 g-0 justify-content-between">
          <div class="col-8">
            <div class="d-inline-block"><a class="navbar-brand pt-0 fs-3 text-black d-flex align-items-center"
                href="index.html"><img class="img-fluid" src="/galeri/assets/img/icons/logo-icon.png" alt="" /><span
                  class="fw-bolder ms-2">Foto</span><span class="fw-thin">gency</span></a></div>
            <div class="mt-4 d-none d-lg-block">
              <h1 class="text-uppercase fs-lg-7 fs-5 fw-bolder text-300 lh-1 position-relative z-index-0"></h1>
              <h1
                class="d-none d-md-block fw-bolder text-outlined fs-7 text-white lh-1 mt-n4 position-relative z-index--1">
                Selected Works</h1>
            </div>
          </div>
          <div class="col-4 d-lg-none text-end pe-0">
            <button class="btn p-0 shadow-none text-black fs-2 d-inline-block" data-bs-toggle="offcanvas"
              data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
              aria-label="Toggle offcanvas navigation"><span class="menu-bar"></span></button>
          </div>
          <div class="offcanvas offcanvas-end px-0" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasTitle"
            aria-hidden="true">
            <div class="offcanvas-header justify-content-end">
              <h5 class="visually-hidden offcanvas-title" id="navbarOffcanvasTitle">Menu</h5>
              <button class="btn p-0 shadow-none text-black fs-2 d-inline text-end" type="button"
                data-bs-dismiss="offcanvas" aria-label="Close"><span class="menu-close-bar"></span></button>
            </div>
            <div class="offcanvas-body px-0">
              <div class="d-lg-flex flex-center-start gap-3 overflow-hidden">
                <ul class="navbar-nav ms-auto fs-4 ps-6">
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/dashboard">Home</a></li>
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 active"
                      aria-current="page" href="/home/portofolio">Postingan</a></li>
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/gallery">Gallery</a></li>
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="exhibitions.html">Exhibitions</a></li>
         
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="blog.html">Blog</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="d-none d-lg-flex justify-content-end position-relative z-index-1">
              <div class="position-absolute absolute-centered z-index--1">
                <h1 class="ms-2 fw-bolder text-outlined text-uppercase text-white pe-none display-1">Postingan</h1>
              </div>
              <div class="d-flex gap-3 align-items-start"><a
                  class="mb-0 ms-auto text-warning fs-0 fw-bold text-uppercase" href="blog.html#contact">Contact Now</a>
                <ul class="navbar-nav navbar-fotogency ms-auto text-end">
                  <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page"
                      href="/home/dashboard">Home</a></li>
                  <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 active" aria-current="page"
                      href="/home/portofolio">Postingan</a></li>
                  <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page"
                      href="/home/gallery">Gallery</a></li>
                  <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page"
                      href="/home/upload">Upload Images</a></li>
             
                  <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page"
                      href="/home/logout">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0 mt-4 d-lg-none">
          <h1 class="text-uppercase ps-0 fs-lg-7 fs-5 fw-bolder text-300 lh-1 position-relative z-index-0">Portfolio
          </h1>
          <h1
            class="fw-bolder text-outlined ps-0 fs-lg-7 fs-sm-6 fs-5 text-white lh-1 mt-sm-n4 mt-n3 position-relative z-index--1">
            Selected Works</h1>
        </div>
      </div>
    </nav>


    <section class="py-3">
    <div class="container-fluid px-0">
        <?php 
        use App\Models\M_model;
        $model = new M_model;
        ?>

        <div class="position-absolute w-100 border-dashed-bottom opacity-25 top-5 z-index-1"></div>
        <div class="container px-md-5">
            <div class="row g-0">
                <div class="col-lg-12 pb-6 px-0 mb-lg-0">
                    <div class="swiper-container swiper-theme"
                        data-swiper='{"slidesPerView":1,"breakpoints":{"576":{"slidesPerView":1.2}},"spaceBetween":30,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"loopedSlides":3,"slideToClickedSlide":true}'>
                        <div class="swiper-wrapper">
                            <?php foreach ($projects as $project): ?>
                                <div class="swiper-slide">
                                    <div class="row align-items-start">
                                        <div class="col-xl-7">
                                            <div class="position-relative">
                                                <img class="portfolio-img img-fluid"
                                                    src="<?= base_url('assets/images/' . $project->image) ?>"
                                                    alt="" />
                                            </div>
                                        </div>

                                        <div class="col-xl-4 mt-4">
                                            <p class="fs-0 description-column" style="margin-left: -15px; margin-right: -15px;">
                                                <?= $project->description ?>
                                            </p>
                                        </div>

                                        <div class="col-lg-9 col-12 mt-3">
                                        <div class="custom-block-top d-flex mb-1">
    <?php 
    $id_photos = $project->id_photos;
    $like = $model->getLike($id_photos);
    $totalLikes = $model->getTotalLikesByPost($id_photos);
    ?>
    <?php if($like != null): ?>
        <a class="badge" style="background-color: red; margin-right: 10px;" href="<?= base_url('/Home/dislike/'.$id_photos) ?>">
            <i class="bi-heart"></i>
            Dislike (<?= $totalLikes ?>)
        </a>
    <?php else: ?>
        <a class="badge" style="background-color: blue; margin-right: 10px;" href="<?= base_url('/Home/like/'.$id_photos) ?>">
            <i class="bi-heart"></i>
            Like (<?= $totalLikes ?>)
        </a>
    <?php endif; ?>
    
    <!-- Tambahkan tombol untuk komentar -->
    <a class="badge" style="background-color: green;" href="<?= base_url('/Home/comment/'.$id_photos) ?>">
        <i class="bi-chat"></i>
        Comment
    </a>
    </div>
</div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-theme swiper-pagination d-flex mt-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>

