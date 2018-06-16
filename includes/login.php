

<?php

if (isset($_POST['admin_login'])){

        $user_input_name = clean($_POST['admin_username']);
        $user_input_password = clean($_POST['admin_password']);


        $user = $db_handle->query("SELECT * FROM admin WHERE username='{$user_input_name}' LIMIT 1");
        $db_username = '';
        $db_password = '';

        while ($row = $user->fetch()) {

            $db_userid = $row['id'];
            $db_fullname = $row['fullname'];
            $db_email = $row['email'];
            $db_username = $row['username'];
            $db_password = $row['password'];
            $user_role = $row['role'];

        }

        if ($user_input_name == $db_username && $user_input_password == $db_password) {
            
            $_SESSION['username'] = $db_username;
            $_SESSION['user_role'] = $user_role;
            $_SESSION['email'] = $db_email;
            //$_SESSION['userid'] = $db_userid;
            $_SESSION['user_fullname'] = $db_fullname;

            header("Location: ./admin");

        }
        else {
            echo "<h6 class='text-danger text-center'>Admin login username / password incorrect </h6>";
        }
    
}



if (isset($_POST['family_login'])) {

    $user_input_name = clean($_POST['family_id']);
    $user_input_passw = clean($_POST['family_password']);

    $family = $db_handle->query("SELECT * FROM family_head WHERE family_unique_id='{$user_input_name}'");

    while ($row = $family->fetch()){

        print_r($row);
        echo "<br>";        



    }
}



?>