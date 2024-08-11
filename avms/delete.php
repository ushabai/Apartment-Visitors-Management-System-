<?php
   session_start();
       $host="localhost";
       $user="root";
       $password="";
       $db="avms1";

        $data=mysqli_connect($host,$user,$password,$db);


       if($_GET['visitors_id'])
      {
          $user_id=$_GET['visitors_id'];
           $sql="DELETE   FROM   tblvisitor WHERE  id='$user_id'  ";
           $result=mysqli_query($data,$sql);

         if($result)
                   {
                                $_SESSION[' message']='Delete Visitor is  Successful ';
                                 header("location:manage-newvisitors.php");
                     
                   }

       }


 
?>