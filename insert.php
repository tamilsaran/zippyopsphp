
<?php

// php code to Insert data into mysql database from input text=
$hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "zippyops";
	 $connect = mysqli_connect($hostname, $username, $password, $databaseName);
	 
	 
    
if(isset($_POST['insert']))
{
    
    // get values form input text and number

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
   $select = $_POST['select'];
    $phone = $_POST['phone'];
	 $msg = $_POST['msg'];
 
 
    // connect to mysql database using mysqli

   
    
    // mysql query to insert data
	$query = "insert into admin (id, fname, lname, select, phone, msg) values (id, '$fname','$lname','$select','$phone','$msg')";
	    
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

?>




