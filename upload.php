<?php
    include "connection.php";
    if( isset($_POST) && !empty($_FILES['paper']['name']))
    {
        $id=$_POST['id'];
        $paper_name=$_POST['paper_name'];
        $file_name = $_FILES['paper']['name'];
        $file_tmp = $_FILES['paper']['tmp_name'];
        $dir="paper\\".$id.$file_name;
        if (move_uploaded_file($file_tmp,$dir))
        {
            
            $dir=addcslashes($dir,"\\");
            
            $sql="INSERT INTO store_paper(email,paper,paper_name) VALUES ('$id','$dir','$paper_name')";
            
            if($conn->query($sql))
            {?>
                <script type="text/javascript"> 
                    alert('Artist is already exist,Please try another one!'); 
                    window.location.href = "homee.php";
                </script>
           <?php }
            else
            {
                echo "query not run!!";
            }
        }
            //print "your file ".$file_name." is uploaded <br>";
        else echo "file upload failed <br>";
    
    }
?>