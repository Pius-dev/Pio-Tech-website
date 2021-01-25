<!DOCTYPE html>
<html>
<style>
   
input[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #0ec2b3;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #e2bb0a;
}

div {
    border-radius: 5px;
    background-color: #75086c;
    padding: 20px;
}
body{

        background-color: light-blue;
    }
    h3 {
    background-color: aqua;
    color: whitesmoke;
}    
</style>

<body>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysities";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Skills Post
if(isset($_POST['addskill'])){

    $skill = $_POST['id'];
    $titler = $_POST['title'];
    $statu = $_POST['status'];
    

    $sql = "INSERT INTO skills (skillid, title, status)
    VALUES ('$skill', '$titler', '$statu')";
    
    if ($conn->query($sql) === TRUE) {
    echo "New skill added successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

  

    $conn->close();
}
// edit skills starts
if(isset($_POST['editskill'])){

    $skill = $_POST['id'];
    $titler = $_POST['title'];
    $statu = $_POST['status'];
    


$sql = "UPDATE skills SET status=' $statu'  'skillid'='$skill'";


if ($conn->query($sql) === TRUE) {
  echo "skills updated";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}
//edit skills end


//delete from skills data
if(isset($_POST['del'])){

    $skill = $_POST['id'];
   

$sql = "DELETE FROM skills WHERE 'skillid'='$skill'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}

// contact post
if(isset($_POST['addcontact'])){

    
    $firstname = $_POST['Fname'];
    $lastname = $_POST['Lname'];
    $myuserid = $_POST['userID'];
    $myaddress = $_POST['Address'];
    $myemail = $_POST['Email'];
    

    $sql = "INSERT INTO contact_data (Fname, Lname, userID,Address,Email)
    VALUES ('$firstname', '$lastname', '$myuserid','$myaddress','$myemail')";


    if ($conn->query($sql) === TRUE) {
    echo "Contact added successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>

        <h3>PIO-TECH Dashboard</h3>
  <!--Skills Form-->
        <div>
            <form action="admin.php" method="POST">
                <label for="fname">Skill ID</label>
                <input type="text" id="fname" name="id" placeholder="Enter skill id.">

                <label for="lname">Title</label>
                <input type="text" id="lname" name="title" placeholder="Enter title..">
                <label for="lname">Status</label>
                <input type="text" id="lname" name="status" placeholder="Enter status..">


                <input type="submit" name="addskill" value="Add Skill">
            </form>
            <!--delete form-->
        </div>
        <form action="admin.php" method="POST">
        <label for="lname">Delete</label>
                <input type="text" id="skillid" name="id" placeholder="Enter SkillId of the skill to delete">
            <input type="submit" name="addskill" value="Delete Skill">
        </form>

        </div>

         <!--update skills form-->
         <div>
        <form action="admin.php" method="POST">
        <label for="lname">Edit</label>
                <input type="text" id="skillid" name="id" placeholder="Enter SkillId of the skill to be updated">
                <label for="lname">Status</label>
                <input type="text" id="lname" name="status" placeholder="Enter the new status..">


            <input type="submit" name="addskill" value="Update Skill">
        </form>

        </div>

         <!--contact Form-->
         <div>
            <form action="admin.php" method="POST">
                <label for="fname">Fname</label>
                <input type="text" id="fname" name="id" placeholder="Enter Firstname.">
                <label for="lname">Lname</label>
                <input type="text" id="lname" name="id" placeholder="Enter Lastname.">


                <label for="lname">UserId</label>
                <input type="text" id="UserId" name="UserId" placeholder="Enter UserId..">
                <label for="lname">Email</label>
                <input type="text" id="email" name="Email" placeholder="Enter Email..">
                <label for="lname">Address</label>
                <input type="text" id="address" name="Address" placeholder="Enter Your Address..">


                <input type="submit" name="AddContact" value="Submit">
            </form>
        </div>

</body>

</html>