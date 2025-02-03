<?php
include("config.php");

if(isset($_POST['update'])){
    $ID=$_POST['id'];
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMG=$_FILES['image'];
    $image_loction=$_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ='images/'.$image_name;
    $update="UPDATE prod SET name='$NAME' ,price='$PRICE' ,image='$image_up' WHERE id=$ID ";
    mysqli_query($con , $update);

    if(move_uploaded_file($image_loction,'images/'.$image_name)){
        echo "<script>alert ('Update Image') </script>";
    }
    else{
        echo "Mistake";
    }
    header('location: products.php');
}