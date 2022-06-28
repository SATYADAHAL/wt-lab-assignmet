<?php 
// include_once 'connect.php';
require_once "../../utils/db.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `students` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:../');
        // echo "sucess";
    }
    else{
        // echo "hey ho";
        die(mysqli_error($conn));
    }
}
// dump($_POST);