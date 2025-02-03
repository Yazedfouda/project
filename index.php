<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online</title>
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
<div class="home">
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>Online Shop </h2>
    <img src="image.png" alt="logo" width="170px">
    <br>
   <input type="text" name="name">
   <br>
   <input type="text" name="price">
   <br>
   <input type="file" name="image" id="file" style="display: none;">
   <label for="file">Choose a Picture</label>
   <button name="uplode"> Up Product</button>
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