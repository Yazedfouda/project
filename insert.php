<?php
include("config.php");

if(isset($_POST['uplode'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMG=$_FILES['image'];
    $image_loction=$_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ='images/'.$image_name;
    $insert="INSERT INTO prod (name , price , image) VALUES ('$NAME' , '$PRICE' , '$image_up')";
    mysqli_query($con , $insert);

    if(move_uploaded_file($image_loction,'images/'.$image_name)){
        echo "<script>alert ('Uplode Image') </script>";
    }
    else{
        echo "Mistake";
    }
    header('location: index.php');
}