<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Phòng Ngủ</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-white">
    
    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">PHÒNG NGỦ</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-light shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add_room">
                                <i class="bi bi-plus-square"></i> Thêm
                            </button>
                        </div>    

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Guests</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="room-data">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                


            </div>
        </div>
    </div>  

    <!-- Add room modal -->

    <div class="modal fade" id="add_room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="add_room_form" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thêm Phòng Ngủ</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tên</label>
                                <input type="text" min="1" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Khu vực</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Giá</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Số lượng</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Người lớn (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Trẻ em (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>

                            <div class="col-12 mb-3">

                                <label class="form-label fw-bold">Tính năng</label>
                                <div class="row">
                                    <?php
                                        $res = selectAll('features');
                                        while($opt = mysqli_fetch_assoc($res)) {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Tiện ích</label>

                                <div class="row">
                                    <?php
                                        $res = selectAll('facilities');
                                        while($opt = mysqli_fetch_assoc($res)) {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" class="form-control shadow-none" row="4" required></textarea>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- edit room modal -->

    <div class="modal fade" id="edit_room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_room_form" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chỉnh Sửa Phòng Ngủ</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tên</label>
                                <input type="text" min="1" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Khu vực</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Giá</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Số lượng</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Người lớn (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Trẻ em (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>

                            <div class="col-12 mb-3">

                                <label class="form-label fw-bold">Tính năng</label>
                                <div class="row">
                                    <?php
                                        $res = selectAll('features');
                                        while($opt = mysqli_fetch_assoc($res)) {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Tiện ích</label>

                                <div class="row">
                                    <?php
                                        $res = selectAll('facilities');
                                        while($opt = mysqli_fetch_assoc($res)) {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" class="form-control shadow-none" row="4" required></textarea>
                            </div>
                            <input type="hidden" name="room_id">
                        </div>
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php require('inc/scripts.php'); ?>
    <script>

        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_room();
        });

        function add_room()
        {
            let data = new FormData();
            data.append('add_room','');
            data.append('name',add_room_form.elements['name'].value);  
            data.append('area',add_room_form.elements['area'].value);  
            data.append('price',add_room_form.elements['price'].value);  
            data.append('quantity',add_room_form.elements['quantity'].value);     
            data.append('adult',add_room_form.elements['adult'].value);  
            data.append('children',add_room_form.elements['children'].value);  
            data.append('desc',add_room_form.elements['desc'].value);  

            let features = [];
            add_room_form.elements['features'].forEach(el =>{
                if(el.checked){
                    features.push(el.value);
                }
            });

            let facilities = [];
            add_room_form.elements['facilities'].forEach(el =>{
                if(el.checked){
                    facilities.push(el.value);
                }
            });

            data.append('features',JSON.stringify(features));  
            data.append('facilities',JSON.stringify(facilities));  

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('add_room');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                
                if(this.responseText == 1) {
                    alert('success','New room added!');
                    add_room_form.reset();
                    get_all_rooms();
                }
                else {
                    alert('error','Sever Down!');
                }
            }; 

            xhr.send(data);
        }

        function get_all_rooms()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() {
                document.getElementById('room-data').innerHTML = this.responseText;
            }; 

            xhr.send('get_all_rooms');
        }

        let edit_room_form = document.getElementById('edit_room_form');

        function edit_details(id)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                let data = JSON.parse(this.responseText);
                edit_room_form.elements['name'].value = data.roomdata.name;
                edit_room_form.elements['area'].value = data.roomdata.area;
                edit_room_form.elements['price'].value = data.roomdata.price;
                edit_room_form.elements['quantity'].value = data.roomdata.quantity;
                edit_room_form.elements['adult'].value = data.roomdata.adult;
                edit_room_form.elements['children'].value = data.roomdata.children;
                edit_room_form.elements['desc'].value = data.roomdata.description;
                edit_room_form.elements['room_id'].value = data.roomdata.id;

                edit_room_form.elements['features'].forEach(el =>{
                    if(data.features.includes(Number(el.value)))  {
                        el.checked = true;
                    }
                });

                edit_room_form.elements['facilities'].forEach(el =>{
                    if(data.facilities.includes(Number(el.value)))  {
                        el.checked = true;
                    }
                });
            }; 

            xhr.send('get_room='+id);
        }

        edit_room_form.addEventListener('submit', function(e){
            e.preventDefault();
            submit_edit_room();
        });

        function submit_edit_room()
        {
            let data = new FormData();
            data.append('edit_room','');
            data.append('room_id',edit_room_form.elements['room_id'].value);
            data.append('name',edit_room_form.elements['name'].value);  
            data.append('area',edit_room_form.elements['area'].value);  
            data.append('price',edit_room_form.elements['price'].value);  
            data.append('quantity',edit_room_form.elements['quantity'].value);     
            data.append('adult',edit_room_form.elements['adult'].value);  
            data.append('children',edit_room_form.elements['children'].value);  
            data.append('desc',edit_room_form.elements['desc'].value);  

            let features = [];
            edit_room_form.elements['features'].forEach(el =>{
                if(el.checked){
                    features.push(el.value);
                }
            });

            let facilities = [];
            edit_room_form.elements['facilities'].forEach(el =>{
                if(el.checked){
                    facilities.push(el.value);
                }
            });

            data.append('features',JSON.stringify(features));  
            data.append('facilities',JSON.stringify(facilities));  

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('edit_room');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                
                if(this.responseText == 1) {
                    alert('success','Room data edited!');
                    edit_room_form.reset();
                    get_all_rooms();
                }
                else {
                    alert('error','Sever Down!');
                }
            }; 

            xhr.send(data);
        }

        function toggle_status(id,val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if(this.responseText==1){
                    alert('success','Status toggled!');
                    get_all_rooms();
                }
                else {
                    alert('error','Server Down!');
                }
            }; 

            xhr.send('toggle_status='+id+'&value='+val);
        }

        window.onload = function() {
            get_all_rooms();
        }

    </script>


</body>
</html>