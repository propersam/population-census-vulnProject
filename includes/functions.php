<?php
// session_start();


function clean($user_input) {
    $clean_input = htmlspecialchars( htmlentities($user_input) );
    return $clean_input;
}


function register_family($family_id){
//family registeration code
    
echo "
    <div class='form-group col-12 col-md-12'>
    <input type='text' class='form-control' 
    name='familyaddress' value='{$_POST['familyaddress']}'  disabled>
    </div>

    <div class='form-group col-12 col-md-8'>
    <input type='text' class='form-control' placeholder='ENTER FAMILY NAME' 
    name='familyname' value='{$_POST['familyname']}'>
    </div>

    <div class='form-group col-12 col-md-4'>
    <input type='number' class='form-control' placeholder='Enter Family size' 
    name='familysize' required>
    </div>

    <div class='form-group col-12 col-md-8'>
    <input type='text' class='form-control' placeholder='Enter Personal Voters Card Pin' 
    name='pvc' required>
    </div>



    <div class='form-group col-12 col-md-4 mt-2'>
    <input type='submit' name='generate' 
    value='GENERATED USER ID: " .strtoupper($family_id) ."' class='btn btn-danger' disabled>
    </div>

    <div class='form-group col-12 col-md-4'>
    <label for='localgovt'> Select Local govt</label>
    <select name='localgovt' class='form-control' value='{$_POST['localgovt']}'>---";

        $query = "SELECT * FROM local_govt WHERE id = ";
        $query .= $_SESSION['admin_state'];
        $options = $db_handle->query($query);
        while($row = $options->fetch()){
            $lga_id = $row['id'];
            $lga_name = $row['name'];
            echo"
            <option value='{$lga_id}'> {$lga_name} </option>
        ";
        }
echo "
    </select>
    </div>

    <div class='form-group col-12 col-md-8'>
    <label for='localgovt' class='form-control'> Select State of Origin</label>
    <select name='origin_state' class='form-control'>---";

        $query = "SELECT * FROM state ORDER BY 'name'";
        
        $options = $db_handle->query($query);
        while($row = $options->fetch()){
            $state_id = $row['id'];
            $state_name = $row['name'];

        echo "
            <option value='{$state_id}'> {$state_name} </option>
        ";
        }


echo "
    </select>
    </div>


    <div class='form-group col-md-12 mt-5'>
    <input type='submit' name='register_family' 
    value='Register Family' class='btn btn-primary'>
    </div>
        ";



}



// function query_localgovt(){
// //query database return result
// return 

// }

function generate_user_id($name, $lga_id, $pvc) {
    global $db_handle;

$query = "SELECT local_govt.name FROM local_govt WHERE local_govt.id = {$lga_id} LIMIT 1";
    $select_lga_query = $db_handle->query($query);

    while ($row = $select_lga_query->fetch()) {
        $lga_name = $row['name'];
    }

        $name = substr($name,0,3);
        $lga_name = substr($lga_name,0,3);
    

    $rand_digit = rand(100,999);
    $pvcnum = substr(strrev($pvc),0,3);

    $id = strtolower("{$lga_name}/{$name}/{$pvcnum}{$rand_digit}");

    return $id;

}

function getAge($date) {
    $tz = ini_get('date.timezone');
    $dtz = new DateTimeZone($tz);

    $past_date = new DateTime($date, $dtz);
    $current_date = new DateTime("now", $dtz);

    $age = $current_date->diff($past_date);


    return $age->format("%y");
}


?>

