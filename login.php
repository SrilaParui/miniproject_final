<?php
    include "connection.php";
    if(isset($_POST))
    {
        $id=$_POST['email'];
        $psw=$_POST['password']; 
        $sql="select email from teacher where email='$id' and psw='$psw'";
        $result=$conn->query($sql);
       // echo $id;
        //echo $psw;
        //echo $result->num_rows;
        if($result->num_rows==1)
        {
            echo $id;
            session_start();
            $_SESSION['id']=$id;
            header("location:homee.php");
        }

    }
    
?>