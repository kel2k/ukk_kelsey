<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Gallery | All Works</title>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var filterLinks = document.querySelectorAll('.filter-link');

            filterLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    // Cek apakah link memiliki kelas "isotope-nav" dan "filter-link"
                    if (link.classList.contains('isotope-nav') && link.classList.contains('filter-link')) {
                        var filterValue = link.getAttribute('data-filter');
                        var galleryItems = document.querySelectorAll('.gallery-item' + filterValue);

                        // Cek apakah ada item galeri untuk kategori yang dipilih
                        var hasImages = Array.from(galleryItems).some(function (item) {
                            return !item.classList.contains('empty-gallery-item');
                        });

                        // Stop the default action and event propagation
                        event.preventDefault();
                        event.stopPropagation();

                        if (!hasImages) {
                            // Notify and redirect to "All" category if no images found
                            alert('This category is empty. Redirecting to All.');
                            window.location.href = '#!';
                        } else {
                            // Implementasikan logika filtering yang diperlukan di sini
                            console.log('Filtering by:', filterValue);
                        }
                    } else {
                        // Link tidak dapat diklik jika tidak memenuhi kriteria
                        alert('This link cannot be clicked!');
                    }
                });
            });
        });
    </script>

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
                                href="index.html"><img class="img-fluid" src="/galeri/assets/img/icons/logo-icon.png"
                                    alt="" /><span class="fw-bolder ms-2">Foto</span><span
                                    class="fw-thin">gency</span></a></div>
                        <div class="mt-4 d-none d-lg-block">
                            <h1 class="text-uppercase fs-lg-7 fs-5 fw-bolder text-300 lh-1 position-relative z-index-0">
                                Gallery</h1>
                            <h1
                                class="d-none d-md-block fw-bolder text-outlined fs-7 text-white lh-1 mt-n4 position-relative z-index--1">
                                All Works</h1>
                        </div>
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
                                <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/dashboard">Home</a></li>
                      <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5"
                      aria-current="page" href="/home/portofolio">Postingan</a></li>
                      <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 active"
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
                                    Gallery</h1>
                            </div>
                            <div class="d-flex gap-3 align-items-start"><a
                                    class="mb-0 ms-auto text-warning fs-0 fw-bold text-uppercase"
                                    href="blog.html#contact">Contact Now</a>
                                <ul class="navbar-nav navbar-fotogency ms-auto text-end">
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/dashboard">Home</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/portofolio">Postingan</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 active"
                                            aria-current="page" href="/home/gallery">Gallery</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/upload">Upload Images</a></li>
                           
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0"
                                            aria-current="page" href="/home/logout">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mt-4 d-lg-none">
                    <h1 class="text-uppercase ps-0 fs-lg-7 fs-5 fw-bolder text-300 lh-1 position-relative z-index-0">
                        Gallery</h1>
                    <h1
                        class="fw-bolder text-outlined ps-0 fs-lg-7 fs-sm-6 fs-5 text-white lh-1 mt-sm-n4 mt-n3 position-relative z-index--1">
                        All Works</h1>
                </div>
            </div>
        </nav>
        <section class="pt-3 pb-9 position-relative">
            <div class="container px-md-5">
                <div class="position-md-absolute start-0 ms-2 mt-3 mb-4">
                    <ul class="nav gallery-tab d-flex gap-3" data-filter-nav="data-filter-nav">
                        <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav active filter-link" href="#!"
                                data-filter="*">All</a></li>
                        <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav filter-link" href="#!"
                                data-filter=".shortfilms">Pemandangan</a></li>
                        <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav filter-link" href="#!"
                                data-filter=".professional">Foto Pribadi</a></li>
                        <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav filter-link" href="#!"
                                data-filter=".commercial">Commercial</a></li>



                    </ul>

                </div>
                <div class="row g-3" data-isotope='{"layoutMode":"packery"}'>
    <?php foreach ($galeri as $gallery): ?>
        <div class="col-lg-3 col-sm-6 col-12 <?= strtolower($gallery['category']) ?> gallery-item isotope-item <?php if (empty($gallery['image'])) echo 'empty-gallery-item'; ?>" data-category="<?= $gallery['category'] ?>">
            <?php if (!empty($gallery['image'])): ?>
                <div class="position-relative mb-3">
                    <img class="portfolio-img img-fluid" src="<?= base_url('assets/images/' . $gallery['image']) ?>"
                        alt=""
                        data-glightbox="title: To infinity and beyond; description: Iching biching chiching" />
                    <button class="btn btn-danger position-absolute bottom-0 start-50 translate-middle-x mb-3"
                        onclick="confirmDelete(<?= $gallery['id_photos'] ?>)"
                        data-toggle="tooltip" data-placement="bottom" title="Delete Photo">
                        <i class="bi bi-trash-fill"></i> Delete
                    </button>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this photo?")) {
            window.location.href = "<?= base_url('home/hapus/') ?>" + id;
        }
    }
</script>
