<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Hopper - LIÊN HỆ</title>
    <?php require('inc/links.php'); ?>
</head>                           
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">LIÊN HỆ</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Quas in nihil, <br> cumque et aspernatur rerum earum aliquid aut ducimus illo. 
            Nihil rem perspiciatis temporibus ratione est tenetur doloremque hic! Nobis!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px=4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501572.381242891!2d106.49971724596662!3d10.846912068257899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eefdb25d923%3A0x4bcf54ddca2b7214!2zSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1738695083688!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <h5>Địa chỉ</h5>
                    <a href="https://maps.app.goo.gl/JxVbzomdcoTM8yjVA" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> 189/18/2, Hoàng Hoa Thám, Phường 6, Quận Bình Thạnh TP.HCM
                    </a>

                    <h5 class="mt-4">Điện thoại</h5>
                    <a href="tel: +84 0798886942" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +84 0798886942
                    </a>
                    <br>
                    <a href="tel: +84 0798886942" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +84 0944840568
                    </a>

                    <h5 class="mt-4">Địa chỉ email</h5>
                    <a href="mailto: huythinh592@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> huythinh592@gmail.com
                    </a>

                    <h5 class="mt-4">Theo dõi chúng tôi</h5>
                    <a href="" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i> 
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px=4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Gửi đánh giá</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Họ tên</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Địa chỉ email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Mời bạn chia sẻ thêm cảm nhận...</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Phản hồi</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">GỬI</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Design -->

    <?php require('inc/footer.php'); ?>
    
</body>
</html>