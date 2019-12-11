<?php 

if (isset($_POST['add_member'])) {

    $family_id = $_SESSION['userid'];
    $firstname = $_POST['firstname'];
    $othername = $_POST['othername'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $religion = $_POST['religion'];
    $dateOb = $_POST['date_of_birth'];
    $contact_num = $_POST['contactnumber'];
    $contact_addr = $_POST['contactaddress'];

    $relationship = $_POST['relationship'];
    
    //convert date of birth to age
   $age = getAge($dateOb);

    //INSERT QUERY GOES HERE
    $query = "INSERT INTO family_member (family_head_id, firstname, other_name, ";
    $query .= "gender, occupation, religion, relationship, ";
    $query .= "age, contact_num, contact_addr) ";
    $query .= "VALUES (?,?,?,?,?,?,?,?,?,?)";
    $statement = $db_handle->prepare($query);
try {
    $statement->execute(array(
        $family_id, $firstname, $othername, 
        $gender, $occupation, $religion, $relationship,
        $age, $contact_num, $contact_addr
    ));
} catch (PDOException $error) {
    die('Insertion error' . $error);
}


    //SUCCESS OUTPUT

    echo "
    <h5 class='text-center'> MEMBER REGISTERED SUCCESSFULLY </h5>
    ";
}   


?>
         
    <form class="contact row" method="POST" action="">

            <div class="form-group col-12 col-md-6">
            <input type="text" class="form-control" placeholder="ENTER FIRST NAME" 
            name="firstname" required>
        </div>

        <div class="form-group col-12 col-md-6">
            <input type="text" class="form-control" placeholder="ENTER OTHER NAME" 
            name="othername" required>
        </div>

        <div class="form-group col-12 col-md-3">
            <label for="localgovt"> Select Gender</label>
            <select name="gender" class="form-control">---
            
                <option value='male'> Male </option>
                <option value='female'> Female </option>
            </select>
        </div>

        <div class="form-group col-12 col-md-6">
            <input type="text" class="form-control" placeholder="ENTER OCCUPATION" 
            name="occupation" required>
        </div>

        <div class="form-group col-12 col-md-3">
            <label for="religion"> Select Religion</label>
            <select name="religion" class="form-control">---
            
                <option value='christian'> Christian </option>
                <option value='muslim'> Muslim </option>
                <option value='traditional worshiper'> Traditional Worshipper </option>

            </select>
        </div>

        <div class="form-group col-12 col-md-4">
            <label for="relationship"> Select Relationship to Family Head</label>
            <select name="relationship" class="form-control">---
            
                <option value='son'> Son </option>
                <option value='daughter'> Daughter </option>
                <option value='wife'> Wife </option>
                <option value='Mother'> Mother </option>
                <option value='Father'> Father </option>
                <option value='Brother'> Brother </option>
                <option value='Sister'> Sister </option>

            </select>
        </div>



        <div class="form-group col-12 col-md-4">
            <label for="date_of_birth"> Date Of Birth</label>
            <input type="date" class="form-control" placeholder="ENTER DATE OF BIRTH" 
            name="date_of_birth" required="">
        </div>
        
        <div class="form-group col-12 col-md-4">
            <input type="text" class="form-control" placeholder="ENTER PHONE NUMBER" 
            name="contactnumber" required>
        </div>

        <div class="form-group col-12 col-md-12">
            <input type="text" class="form-control" placeholder="ENTER HOME ADDRESS" 
            name="contactaddress" required>
        </div>
       
        

            <div class='form-group col-md-12 mt-5'>
                <input type='submit' name='add_member' 
                value='ADD MEMBER' class='btn btn-primary'>
            </div>
    
        </form>
