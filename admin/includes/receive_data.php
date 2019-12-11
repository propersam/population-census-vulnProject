<?php 

if (isset($_POST['proceed'])) {

    $f_addr = $_POST['familyaddress'];
    $f_name = $_POST['familyname'];
    $f_size = $_POST['familysize'];
    $f_pvc = $_POST['pvc'];
    $f_lga = $_POST['localgovt'];
    $f_s_origin = $_POST['origin_state'];
    $f_state = $_SESSION['admin_state'];
    $generated_id = generate_user_id($f_name, $f_lga, $f_pvc);

    //INSERT QUERY GOES HERE
    $query = "INSERT INTO family_head (family_name, family_address, state_id, ";
    $query .= "local_govt_id, state_of_origin, pvc_num, max_family_num, ";
    $query .= "family_unique_id) ";
    $query .= "VALUES (?,?,?,?,?,?,?,?)";
    $statement = $db_handle->prepare($query);
try {
    $statement->execute(array(
        $f_name, $f_addr, $f_state, $f_lga, 
        $f_s_origin, $f_pvc, $f_size, $generated_id
    ));
} catch (PDOException $error) {
    die('Insertion error' . $error);
}


    //SUCCESS OUTPUT
    echo "{$f_state}
    <h3 class='text-center'> FAMILY REGISTERED SUCCESSFULLY </h3>

    <h4 class='text-center'> THE GENERATED FAMILY LOGIN ID IS <b> " . strtoupper($generated_id) ."</b>
        <br> *[default login password: population@census101]*
    </h4>
    
    <a href='./register_family.php' class='btn btn-primary'> Click to Add another Family </a>
    "
    
    ;

}   

else {

?>
         
    <form class="contact row" method="POST" action="">

            <div class="form-group col-12 col-md-12">
            <input type="text" class="form-control" placeholder="ENTER FAMILY ADDRESS" 
            name="familyaddress" required="">
        </div>

        <div class="form-group col-12 col-md-8">
            <input type="text" class="form-control" placeholder="ENTER FAMILY NAME" 
            name="familyname" required="">
        </div>

        <div class="form-group col-12 col-md-4">
            <input type="number" class="form-control" placeholder="Enter Family size" 
            name="familysize" required="">
        </div>

        <div class="form-group col-12 col-md-8">
            <input type="text" class="form-control" placeholder="Enter Personal Voters Card Pin" 
            name="pvc" required="">
        </div>
        
        <div class="form-group col-12 col-md-4">
            <label for="localgovt"> Select Local govt</label>
            <select name="localgovt" class="form-control">---

                <?php
                $query = "SELECT * FROM local_govt WHERE id = ";
                $query .= $_SESSION['admin_state'];
                $options = $db_handle->query($query);
                while($row = $options->fetch()){
                    $lga_id = $row['id'];
                    $lga_name = $row['name'];

                echo "
                    <option value='{$lga_id}'> {$lga_name} </option>
                ";
                }


            ?>
            </select>
        </div>

        <div class="form-group col-12 col-md-8">
            <label for="localgovt" class="form-control"> Select State of Origin</label>
            <select name="origin_state" class="form-control">---

                <?php
                $query = "SELECT * FROM state ORDER BY 'name'";
                
                $options = $db_handle->query($query);
                while($row = $options->fetch()){
                    $state_id = $row['id'];
                    $state_name = $row['name'];

                echo "
                    <option value='{$state_id}'> {$state_name} </option>
                ";
                }


                ?>
                </select>
            </div>

            <div class='form-group col-md-12 mt-5'>
                <input type='submit' name='proceed' 
                value='PROCEED' class='btn btn-primary'>
            </div>
    
        </form>
<?php } ?>