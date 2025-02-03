<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<!---normailz  ----->
<link rel="stylesheet" href="/normaliz.css">
<!---css sheet---->
<link rel="stylesheet" href="index.css">
</head>
<body>
    <?php  
    include("config.php");
    $ID=$_GET['id'];
    $up=mysqli_query($con, "SELECT * FROM prod WHERE id= $ID");
    $data=mysqli_fetch_array($up);

    ?>
<div class="home">
    <form action="up.php" method="post" enctype="multipart/form-data">
        <h2>Update </h2>
        <br>
        <input type="text" name="id" value='<?php   echo $data['id']?>'>
        <br>
   <input type="text" name="name" value='<?php echo $data['name']?>'>
   <br>
   <input type="text" name="price" value="<?php echo $data['price']?>">
   <br>
   <input type="file" name="image" id="file" style="display: none;">
   <label for="file">Update a Picture</label>
   <button name="update">Update</button>
   <br>
   <br>
   <a href="products.php">Show Products</a>
</form>
</div>
<center>
    Developer By Yazed
</center>
</body>
</html>