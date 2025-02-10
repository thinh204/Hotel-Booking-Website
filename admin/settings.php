<?php

    require('inc/essentials.php');
    adminLogin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminn Panel - Tùy chỉnh</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-white">
    
    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Thiết Lập</h3>

                <!-- General settings section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Thiết Lập Chung</h5>
                            <button type="button" class="btn btn-light shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Chỉnh Sửa
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Tiêu Đề Trang</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">Giới Thiệu</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General settings modal -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Thiết Lập Chung</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Tiêu đề trang</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Giới thiệu</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Đóng Trang Wed</h5>
                            <div class="form-check form-switch">
                                <form action="">
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            No customers will be allowed to book hotel room, when shutdown mode is turned on.
                        </p>
                    </div>
                </div>

                <!-- Contact details section -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Thiết Lập Liên Hệ</h5>
                            <button type="button" class="btn btn-light shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil-square"></i> Chỉnh Sửa
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Địa Chỉ</h6>
                                    <p class="card-text" id="address"></p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Bản Đồ</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Số Điện Thoại</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="phone1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="phone2"></span>
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Địa Chỉ E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Liên Kết Xã Hội</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1"></i> 
                                        <span id="ig"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Khung Hiển Thị</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contacts details -->

                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Thiết Lập Liên Hệ</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Địa Chỉ</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Bản Đồ</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Số Điện Thoại (with country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="phone1" id="phone1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="phone2" id="phone2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Địa Chỉ Email</label>
                                                    <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Liên Kết Mạng Xã Hội</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="ig" id="ig_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Khung Hiển Thị</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Management Team section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Đội Ngũ Quản Lý</h5>
                            <button type="button" class="btn btn-light shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                            <i class="bi bi-plus-square"></i> Thêm
                            </button>
                        </div>

                        <div class="row" id="team-data">
                           
                        </div>


                    </div>
                </div>

                <!-- Management Team modal -->

                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Thêm Thành Viên</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Tên</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Hình Ảnh</label>
                                        <input type="file" name="member_picture" id="member_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <?php require('inc/scripts.php'); ?>
    <script>
        let general_data, contacts_data;   

        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let contacts_s_form = document.getElementById('contacts_s_form');

        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById('member_name_inp');
        let member_picture_inp = document.getElementById('member_picture_inp');


        function get_general()
        {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                try {
                    general_data = JSON.parse(this.responseText);
                    
                    // Kiểm tra dữ liệu trả về có đủ các key không
                    if (general_data && "site_title" in general_data && "site_about" in general_data) {
                        site_title.innerText = general_data.site_title;
                        site_about.innerText = general_data.site_about;

                        site_title_inp.value = general_data.site_title;
                        site_about_inp.value = general_data.site_about;

                        if (general_data.shutdown == 0) {
                            shutdown_toggle.checked = false;
                            shutdown_toggle.value = 0;
                        } else {
                            shutdown_toggle.checked = true;
                            shutdown_toggle.value = 1;
                        }
                    } else {
                        console.error("Invalid data received:", general_data);
                        alert("Error: Invalid data received");
                    }
                } catch (error) {
                    console.error("Error parsing JSON:", error, this.responseText);
                    alert("Error parsing JSON response");
                }
            };


            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        });

        function upd_general(site_title_val, site_about_val) 
        {   
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                
                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                
                if(this.responseText == 1)
                {
                    alert('success','Changes saved!');
                    get_general();
                }
                else 
                {
                    alert('error','No changes made!');
                }
            }; 

            xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
        }

        function upd_shutdown(val) 
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                
                if(this.responseText == 1 && general_data.shutdown == 0)
                {
                    alert('success','Site has been shutdown!');
                }
                else 
                {
                    alert('success','Shutdown mode off!');
                }
                get_general();
            }; 

            xhr.send('upd_shutdown='+val);
        }

        function get_contacts()
        {
            let contacts_p_id = ['address','gmap','phone1','phone2','email','fb','ig','tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {   
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);
                
                for(i=0;i<contacts_p_id.length;i++){
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
                }
                iframe.src = contacts_data[9];
                contacts_inp(contacts_data);
            };


            xhr.send('get_contacts');
        }

        function contacts_inp(data) 
        {
            let contacts_inp_id = ['address_inp','gmap_inp','phone1_inp','phone2_inp','email_inp','fb_inp','ig_inp','tw_inp','iframe_inp'];

            for(i=0;i<contacts_inp_id.length;i++) {
                document.getElementById(contacts_inp_id[i]).value = data[i+1];

            }
        }

        contacts_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            upd_contacts()
        });

        function upd_contacts()
        {
            let index = ['address','gmap','phone1','phone2','email','fb','ig','tw','iframe'];
            let contacts_inp_id = ['address_inp','gmap_inp','phone1_inp','phone2_inp','email_inp','fb_inp','ig_inp','tw_inp','iframe_inp'];

            let data_str = "";

            for (i=0;i<index.length;i++) {
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                var myModal = document.getElementById('contacts-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success','Changes saved!');
                    get_contacts();
                }
                else 
                {
                    alert('error','No changes made!');
                }   
                get_general();
            }; 

            xhr.send(data_str);


        }

        team_s_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_member(); 
        });

        function add_member()
        {
            let data = new FormData();
            data.append('name',member_name_inp.value);  
            data.append('picture',member_picture_inp.files[0]);
            data.append('add_member','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);

            xhr.onload = function() {
                
                var myModal = document.getElementById('team-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                
                if(this.responseText == 'inv_img') {
                    alert('error','Only JPG and PNG images are allowed!');
                }
                else if (this.responseText == 'inv_size') {
                    alert('error','Image should be less than 2MB!');
                }
                else if (this.responseText == 'upd_failed') {
                    alert('error','Image upload failed. Sever Down!');
                }
                else {
                    alert('success','New member added!');
                    member_name_inp.value = '';
                    member_picture_inp.value = '';
                    get_members();
                }
            }; 

            xhr.send(data);
        }

        function get_members() 
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                document.getElementById('team-data').innerHTML = this.responseText;
            }

            xhr.send('get_members');
        }

        function rem_member(val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if(this.responseText==1) {
                    alert('success','Member removed!');
                    get_members();
                }
                else {
                    alert('error','Server down!');
                }
            }

            xhr.send('rem_member='+val);
        }
        
        window.onload = function() {
            get_general();
            get_contacts();
            get_members();
        }

    </script>

</body>
</html>