<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Hopper - TRANG CHỦ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
    .swiper-container {
        height: 450px;
    }

    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width: 575px) {
        .availability-form {
            margin-top: 25px;
            padding: 0 35px;
        }
    }
    </style>
</head>                           
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.img" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.img" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/10.img" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/11.img" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/12.img" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/13.img" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

    <!-- check availability form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Kiểm tra tình trạng phòng</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ngày nhận phòng</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ngày trả phòng</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Người lớn</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Trẻ em</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Tìm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Phòng của chúng tôi</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Mays Hotel Inn Saigon</h5>
                        <h6 class="mb-4">VND 1.624.320 2 đêm</h6>
                        
                        <div class="features mb-4">
                            <h6 class="mb-1">Tính năng</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Phòng
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 phòng tắm
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Ban công
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Ghế sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện ích</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tivi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Điều hòa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Máy sưởi ấm 
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Khách</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Người lớn
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Trẻ em
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh giá</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>    
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Chi tiết thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Mays Hotel Inn Saigon</h5>
                        <h6 class="mb-4">VND 1.624.320 2 đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Tính năng</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Phòng
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 phòng tắm
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Ban công
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Ghế sofa
                            </span>
                        </div>
                        
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện ích</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tivi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Điều hòa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Máy sưởi ấm 
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Khách</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Người lớn
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Trẻ em
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh giá</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>    
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Chi tiết thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Mays Hotel Inn Saigon</h5>
                        <h6 class="mb-4">VND 1.624.320 2 đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Tính năng</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Phòng
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 phòng tắm
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Ban công
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Ghế sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện ích</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Tivi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Điều hòa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Máy sưởi ấm 
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Khách</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Người lớn
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Trẻ em
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh giá</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>    
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Chi tiết thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Thêm Phòng >>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/features/wifi-logo.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/features/wifi-logo.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/features/wifi-logo.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/features/wifi-logo.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/features/wifi-logo.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores dignissimos quidem animi blanditiis, 
                        molestiae debitis autem, voluptatem inventore nobis aliquam,
                        voluptatum alias placeat a dolore ducimus magni optio accusamus necessitatibus!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>  
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores dignissimos quidem animi blanditiis, 
                        molestiae debitis autem, voluptatem inventore nobis aliquam,
                        voluptatum alias placeat a dolore ducimus magni optio accusamus necessitatibus!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>  
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores dignissimos quidem animi blanditiis, 
                        molestiae debitis autem, voluptatem inventore nobis aliquam,
                        voluptatum alias placeat a dolore ducimus magni optio accusamus necessitatibus!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i> 
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>  
                    </div>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!-- Reach us -->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +<?php echo $contact_r['phone1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['phone1'] ?>
                    </a>
                    <br>
                    <?php 
                        if($contact_r['phone2']!=''){
                            echo<<<data
                                <a href="tel: +$contact_r[phone2]" class="d-inline-block text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i> +$contact_r[phone2]
                                </a>
                            data;
                        }
                    ?>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <?php   
                        if($contact_r['tw']!='') {
                            echo<<<data
                                <a href="$contact_r[tw]" class="d-inline-block mb-3">
                                    <span class="badge bg-light text-dark fs-6 p-2">
                                    <i class="bi bi-twitter me-1"></i> Twitter
                                    </span>
                                </a>
                                <br>
                            data;
                        }
                    ?>
                    
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['ig'] ?>" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Design -->

    <?php require('inc/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
        });
    </script>
</body>
</html>