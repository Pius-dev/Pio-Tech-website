<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Personal Site</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />


</head>

<body>
    <!--main ---->
    <section id="main">



        <header>
            <nav>
                <!--logo-->
                <a href="#" class="logo">
                    <img src="assets/pio tech normal.png" />
                </a>
                <!--menu- -->

                <ul class="menu">
                <li><a href="index.php">Home</a></li>
                   
                    
                   <li><a href="skills.php">Skills</a></li>
                   <li><a href="Publication.php">Publication and project</a></li>
                   <li><a href="about.php">About</a></li>
                   <li><a href="contact.php">Contact</a></li>
                </ul>
                <!--Greetings-->

            </nav>
        </header>
        <section id="contacts">
            <div class="MyContacts">
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


?>
                </body>

                <body>
				
                    <div>
                        <?php 
                            $sql = "SELECT * FROM contact_data";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
								echo "Skill id: " . $row["Fname"]. " - Title: " . $row["Lname"]. " -Status " ."Userid". $row["userID"]
								."My Address". $row["Address"]."my Email". $row["Email"]. "<br>";
                            }
                            } else {
                            echo "0 results";
                            }
                            $conn->close();
                ?>
                    </div>
                </body>

            </div>
        </section>
        <!--my footer-->
        <footer>
            <p>Best IT services with affordable prices and Better client handling
            </p>
            <p>Copyright 2021 PIO-TECT</p>
        </footer>

</html>