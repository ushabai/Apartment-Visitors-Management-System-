<?php
          
           $host="localhost";
            $user="root";
            $password="";
             $db="avms1";
            
            $data=mysqli_connect($host,$user,$password,$db);
              $id=$_GET['visitors_id'];
             $sql="SELECT * FROM   tblvisitor   WHERE id='$id' ";
             $result=mysqli_query($data,$sql);
             $info=$result->fetch_assoc();
             

           if(isset($_POST['update']))
         {
                $categoryName=$_POST['categoryName'];
                $VisitorName =$_POST['VisitorName'];
                 $MobileNumber=$_POST['MobileNumber'];
                  $Address=$_POST['Address'];
                  $Apartment=$_POST['Apartment'];
                   $Floor=$_POST['Floor'];
                   $WhomtoMeet=$_POST['WhomtoMeet'];
                   $ReasontoMeet=$_POST['ReasontoMeet'];
                   $remark=$_POST['remark'];


                 $query="UPDATE  tblvisitor SET categoryName='$categoryName',VisitorName='$VisitorName',MobileNumber='$MobileNumber',Address='$Address',Apartment='$Apartment',Floor='$Floor',
                                       WhomtoMeet='$WhomtoMeet',ReasontoMeet='$ReasontoMeet',remark='$remark'  WHERE id='$id'  ";



          $result2=mysqli_query($data,$query);

            if($result2)
                {
                       header( "location:manage-newvisitors.php");
                 }
         }

?>




<!DOCTYPE html>
<html>
<head>
          <meta charset="utf-8">

    <title>Update</title>


          <style   type="text/css">
     
            label
           {
                   display:shrink-to-fit;
                   width: 100px;
                   text-align: right;
                   padding-top: 10px;
                   padding-bottom:10px;
            }
             .div_deg
            { 
                     background-color:skyblue;
                     width:   400px;
                     padding-bottom:70px;
                     padding-left:450px;
                     padding-right:450px;
                      padding-top:70px;
            }
       </style>
</head>
<body>


        <div class="content">
                 <center>
           
          <h1> Update</h1>
      
           <div  class="div_deg">
    
                    <form   action="#" method="POST">
                              <div>
                                     <label>categoryName</label>
                                      <input type="text" name="categoryName"
                                        value="<?php echo "{$info['categoryName']}";  ?>"
                                >
                              </div>
                              <div>
                                     <label>VisitorName</label>
                                      <input type="text" name="VisitorName"   value="<?php 
                                      echo "{$info['VisitorName']}";  ?>">
                              </div>
                              <div>
                                     <label>MobileNumber</label>
                                      <input type="number" name="MobileNumber"
                                       value="<?php echo "{$info['MobileNumber']}";  ?>"
                                      >
                              </div>
                              <div>
                                     <label>Address</label>
                                      <input type="text" name="Address"
                                       value="<?php echo "{$info['Address']}";  ?>"
                                      >
                              </div>
                              <div>
                                     <label>Apartment</label>
                                      <input type="text" name="Apartment"
                                      value="<?php echo "{$info['Apartment']}";  ?>"
                               >
                              </div>
                              <div>
                                     <label>Floor</label>
                                      <input type="number" name="Floor"
                                       value="<?php echo "{$info['Floor']}";  ?>"
                                  >
                              </div>
                              <div>
                                     <label>WhomtoMeet</label>
                                      <input type="text" name="WhomtoMeet"
                                    value="<?php echo "{$info['WhomtoMeet']}";  ?>"
                              >
                              </div>
                               <div>
                                     <label>ReasontoMeet</label>
                                      <input type="text" name="ReasontoMeet"
                                   value="<?php echo "{$info['ReasontoMeet']}";  ?>"
                               >
                              </div>
                               <div>
                                     <label>remark</label>
                                      <input type="text" name="remark"
                                        value="<?php echo "{$info['remark']}";  ?>"
                                 >
                              </div>
                                 <div>
                                     
                                      <input class="btn btn-primary"type="submit" 
                                     name="update"  value="Update">
                              </div>
                    </form>
           </div>

           </center>
 
    >


 


</body>
</html>