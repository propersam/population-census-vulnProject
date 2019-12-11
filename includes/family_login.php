<?php

if (isset($_POST['family_login'])) {
    
        $user_input_fid = clean($_POST['family_id']);
        $user_input_passw = clean($_POST['family_password']);
    
    
       
      
        $family = $db_handle->query("SELECT * FROM family_head WHERE family_unique_id='{$user_input_fid}' LIMIT 1");
        $db_fid = '';
        $db_fpassword = '';
    
        while ($row = $family->fetch()){
    
            // $query = "INSERT INTO family_head (family_name, family_address, ";
            // $query .= "local_govt_id, state_of_origin, pvc_num, max_family_num, ";
            // $query .= "family_unique_id) ";
            // $query .= "VALUES (?,?,?,?,?,?,?)";
            
            $db_userid = $row['id'];
            $db_fname = $row['family_name'];
            $db_faddr = $row['family_address'];
            $db_flga_id = $row['local_govt_id'];
            $db_sog = $row['state_of_origin'];
            $pvc = $row['pvc_num'];
            $max_fnum = $row['max_family_num'];
            $db_fid = $row['family_unique_id'];
            $db_fpassword = $row['password_hash'];
    
    
    
        }
    
        if ($user_input_fid == $db_fid && $user_input_passw == $db_fpassword) {
            
            $_SESSION['username'] = $db_fname;
            $_SESSION['user_role'] = 'family';
            $_SESSION['lga_id'] = $db_flga_id;
            $_SESSION['userid'] = $db_userid;
            
            $_SESSION['family_size'] = $max_fnum;
            
    
    
            header("Location: ./admin?family_id={$_SESSION['userid']}");
    
    
        }
        else {
            echo "<h6 class='text-danger text-center'>Family login username / password incorrect </h6>";
        }
    
    }

?>