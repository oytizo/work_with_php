<?php 
function showitems($con){
    $showsql="SELECT * from tbl_student";
    $row=mysqli_query($con,$showsql);
    return $row;
}

?>