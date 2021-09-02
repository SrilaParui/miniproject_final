<?php
    include "connection.php";
    if(isset($_POST))
    {
        $paper_name=$_POST['paper_name'];
        $id=$_POST['id'];
        $sql="select paper from store_paper where email='$id' and paper_name='$paper_name'" ;

        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $content=$row['paper'];
        
        header('Content-type: application/pdf');
        header("Content-Disposition: inline; filename='".$content."'");
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($content);
    }
?>