<?php 
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_general'])) 
    {
        $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
        $values = [1];
        $res = select($q, $values, "i");
        
       
        if($res->num_rows > 0) {
            $data = mysqli_fetch_assoc($res);
            $json_data = json_encode($data);
            echo $json_data;
        } else {
            echo json_encode(['error' => 'No data found']);
        }
    }

    if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
        $values = [$frm_data['site_title'],$frm_data['site_about'],1];
        $res = update($q,$values,'ssi');
        echo $res;
    }

    if(isset($_POST['upd_shutdown']))
    {
        $frm_data = ($_POST['upd_shutdown'] ==0) ? 1 : 0;

        $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
        $values = [$frm_data, 1];
        $res = update($q,$values, 'ii');

        echo $res;
    }

    if (isset($_POST['get_contacts'])) 
    {
        $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $datatypes = 'i';
        $res = select($q, $values, $datatypes);
        
       
        if($res && $res->num_rows > 0) {
            $data = mysqli_fetch_assoc($res);
            $json_data = json_encode($data);
            echo $json_data;
        } else {
            echo json_encode(['error' => 'No data found']);
        }
    }

    if(isset($_POST['upd_contacts']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `contact_details` SET `address`=?,`gmap`=?,`phone1`=?,`phone2`=?,`email`=?,`fb`=?,`ig`=?,`tw`=?,`iframe`=? WHERE `sr_no`=?";
        $values = [$frm_data['address'],$frm_data['gmap'],$frm_data['phone1'],$frm_data['phone2'],$frm_data['email'],$frm_data['fb'],$frm_data['ig'],$frm_data['tw'],$frm_data['iframe'],1];
        $res = update($q,$values,'sssssssssi');
        echo $res;
    }
    


?>