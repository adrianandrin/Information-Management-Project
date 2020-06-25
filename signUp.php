<?php
    session_start();
    $con = mysqli_connect("localhost","root","","musika0.1") or die(mysqli_connect_error());
	if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
            
        $sql = "SELECT count(*) AS count FROM customer WHERE username= '$user'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
            
        if($row[0]==0){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $sql="INSERT INTO customer (customerID,username,pass,email) VALUES('','$user','$pass','$email')";
                mysqli_query($con,$sql);
                $sql="SELECT customerID FROM customer WHERE username= '$user'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result);
                $id = $row['customerID'];
                $sql="INSERT INTO info (customerID,fname,lname,address,contact) VALUES('$id','$fname','$lname','$address','$contact')";
                mysqli_query($con,$sql);
                $_SESSION['id'] = $row['customerID'];
                header("Location: Home.php");
            }
            else{
                header("Location: Login.php?link=Register&signup=incorrectemail&fname=$fname&lname=$lname&address=$address&contact=$contact&user=$user");
            }
        }
        else{
            header("Location: Login.php?link=Register&signup=exist&fname=$fname&lname=$lname&address=$address&contact=$contact");
        }

    }

?>