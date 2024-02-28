<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Dashboard | All Works</title>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="cursor-outer d-none d-md-block"></div>
        <nav class="navbar navbar-light py-3 px-0 overflow-hidden">
            <div class="container px-md-5">
                <div class="row w-100 g-0 justify-content-between">
                    <div class="col-8">
                        <div class="d-inline-block"><a
                                class="navbar-brand pt-0 fs-3 text-black d-flex align-items-center"
                                href="/home/dashboard"><img class="img-fluid" src="/assets/img/icons/logo-icon.png"
                                    alt="" /><span class="fw-thin ">Welcome,</span><span class="fw-bolder ms-2">
                                    <?php echo session()->get('username') ?>
                                </span></a></div>
                    </div>
                    <div class="col-4 d-lg-none text-end pe-0">
                        <button class="btn p-0 shadow-none text-black fs-2 d-inline-block" data-bs-toggle="offcanvas"
                            data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                            aria-label="Toggle offcanvas navigation"><span class="menu-bar"></span></button>
                    </div>
                    <div class="offcanvas offcanvas-end px-0" id="navbarOffcanvas"
                        aria-labelledby="navbarOffcanvasTitle" aria-hidden="true">
                        <div class="offcanvas-header justify-content-end">
                            <h5 class="visually-hidden offcanvas-title" id="navbarOffcanvasTitle">Menu</h5>
                            <button class="btn p-0 shadow-none text-black fs-2 d-inline text-end" type="button"
                                data-bs-dismiss="offcanvas" aria-label="Close"><span
                                    class="menu-close-bar"></span></button>
                        </div>
                        <div class="offcanvas-body px-0">
                            <div class="d-lg-flex flex-center-start gap-3 overflow-hidden">
                                <ul class="navbar-nav ms-auto fs-4 ps-6">
                                <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 active"
                      aria-current="page" href="/home/dashboard">Home</a></li>
                      <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/portofolio">Postingan</a></li>
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/gallery">Gallery</a></li>
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/upload">Upload Photo</a></li>
                  <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/logout">Logout</a></li>
                </ul>
</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-none d-lg-flex justify-content-end position-relative z-index-1">
                            <div class="position-absolute absolute-centered z-index--1">
                                <h1 class="ms-2 fw-bolder text-outlined text-uppercase text-white pe-none display-1">
                                    Home</h1>
                            </div>
                            <div class="d-flex gap-3 align-items-start"><a
                                    class="mb-0 ms-auto text-warning fs-0 fw-bold text-uppercase"
                                    href="blog.html#contact">Contact Now</a>
                                <ul class="navbar-nav navbar-fotogency ms-auto text-end">
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 active"
                                            aria-current="page" href="/home/dashboard">Home</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/portofolio">Postingan</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/gallery">Gallery</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/upload">Upload Photo</a></li>
                                    <li class="nav-item px-2  position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/logout">Logout</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-4 pt-md-0 pb-8 pb-sm-11 mt-lg-n8">

            <div class="container px-md-5">
                <div class="row">
                    <div class="col-md-9 col-lg-7">
                        <h1 class="fs-4 fs-md-6 fs-xl-7 mb-5 mb-lg-0 position-relative z-index-2">Fotogency
                            <span class="fw-thin text-300">deals with first class </span><span
                                class="text-400">photography orphan
                                services.</span>
                        </h1>
                    </div>
                </div>
                <div class="row mt-md-n6">
                    <div class="col-2 d-none d-lg-block mt-auto"><img class="img-fluid"
                            src="/galeri/assets/img/home/img2.png" alt="" />
                    </div>
                    <div class="col-1 mt-auto d-none d-lg-block"><a class="scroll-indicator text-warning"
                            href="#footer">
                            <span>SCROLL </span><img src="/galeri/assets/img/icons/long-arrow.png" alt="" /></a>
                    </div>
                    <div class="col-lg-7 position-relative">
                        <div class="position-relative overflow-hidden overflow-md-visible"><img class="img-fluid"
                                src="/galeri/assets/img/home/img1.png" alt="" />
                            <div class="img-circle p-5 p-md-7 rounded-circle"></div>
                            <div class="img-circle-2 p-5 p-md-7 rounded-circle"></div>
                        </div>
                        <div class="position-absolute bottom-n100 col-11 mt-6 d-none d-md-block">
                            <p class="fs-2 lh-1 text-400">There are many variations of passages of Lorem Ipsum
                                available, but the majority </p>
                            <p class="text-300">There are many variations of passages of Lorem Ipsum available,
                                but the
                                majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                        <div class="position-absolute start-0 bottom-0 d-lg-none"><a
                                class="scroll-indicator text-warning" href="#footer"> <span>SCROLL
                                </span><img src="/galeri/assets/img/icons/long-arrow.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-2 d-none d-lg-block mb-auto"><img class="img-fluid"
                            src="/galeri/assets/img/home/img3.png" alt="" />
                    </div>
                </div>
            </div>
    </main>
    </section>