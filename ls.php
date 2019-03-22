

<body>

<div id="main">
<h1>Insert data into database using mysqli</h1>
<div id="login">
<h2>Student's Form</h2>
<hr/>
<form action="" method="post">
<label>Student Name :</label>
<input type="text" name="fname" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Student Email :</label>
<input type="email" name="lname" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>Student City :</label>
<input type="text" name="opt" id="city" required="required" placeholder="Please Enter Your City"/><br/><br />
<input type="text" name="phone" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<input type="text" name="msg" id="name" required="required" placeholder="Please Enter Name"/><br /><br />

<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>












<?php

if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO praveen (id, fname, lname, opt, phone, msg)
VALUES (id ,'".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["opt"]."','".$_POST["phone"]."','".$_POST["msg"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}

?>


</body>

<?php /*?>




// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";
    
    // get values form input text and number

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

		$query = "INSERT INTO `users`(id,`fname`, `lname`, `age`) VALUES (id,'$fname','$lname','$age')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}
<?php */?>
