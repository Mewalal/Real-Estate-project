<?php
include 'connection.php';
$id = $_GET['idd'];
$deletequery = "delete from propertylist where Id=$id";
$query = mysqli_query($conn,$deletequery);
if($query){
    ?>
    <script>
      alert("DELETE SUCCESSFULLY");
    </script>
    <?php

}
else{
    ?>
    <script>
      alert("NOT DELETED");
    </script>
    <?php
}
header ('location:prorptyview.php');

?>