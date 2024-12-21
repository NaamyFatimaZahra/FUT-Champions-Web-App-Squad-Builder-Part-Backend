<?php include("../../DataBase/connect.php");?>
<?php 
              if(isset($_GET['id'])){
                $id=$_GET['id'];
                  $query = "DELETE FROM players WHERE players.id='$id'";
          $result= mysqli_query($connection,$query);
      
           header("Location: ../index.php");
      
              }



              
              
            ?> 