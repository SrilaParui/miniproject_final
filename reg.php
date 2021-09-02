<?php
    include "connection.php";
    if(isset($_POST))
    {
        $f_name=$_POST['firstName'];
        $l_name=$_POST['lastName'];
        $phone=$_POST['phoneNumber'];
        $dob=$_POST['dob']; 
        $dept=$_POST['department']; 
        $id=$_POST['email'];
        $psw=$_POST['password'];
        if(isset($_POST['gen1']))
        {
            $r=$_POST['gen1'];

        }
        else
        {
            $r=$_POST['gen2'];
        }
        
        
        $sql="select * from teacher where email='$id'";
        $result=$conn->query($sql);
        if($result->num_rows==0)
        {
            $sql1="insert into teacher(email,f_name,l_name,dob,phone,dept,gen,psw) 
                    values('$id','$f_name','$l_name','$dob','$phone','$dept','$r','$psw')";
            $conn->query($sql1);
            session_start();
            $_SESSION['id']=$id;
            header("location:homee.php");

        }
        

    }
?>