<?php include '../connect.php';?>
<?php

    //$_POST['submit']

        $email= $_POST['email'];
        $password = $_POST['password'];
        $role  = $_POST['role'];
       
        
       // $query = "select max(id) from user_master";
        //$results = mysqli_query($conn,$query);
        $x = array(
            'email' => "'".$email."'",
            'password' => "'".$password."'",
            'role' => "'".$role."'",
            
        );

    
        






  

$col = implode(',',array_keys($x));
$val = implode(',',array_values($x));

$sql = "INSERT INTO `user_login` ($col) VALUES ($val)";

        if($conn->query($sql) === TRUE)
        {
            //echo "Data Inserted Succesfully!";
            
            header('location:D:\PHP\htdocs\GarageMgtSystem\module\garageMaster\add.php');
        }
        else
        {
            die(mysqli_error($conn));
        }


    
?>