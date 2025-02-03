
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
<link rel="stylesheet" href="prod.css">
<!-----bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h3 style="text-align: center;">All Products</h3>
    <?php  
    include("config.php");
    $res=mysqli_query($con,"SELECT * FROM prod");
    while($row=mysqli_fetch_array($res)){
        echo " 
        <center>
        <main>
    <div class='card' style='width: 15rem;' >
  <img src='$row[image]' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a>
    <a href='revise.php? id=$row[id]' class='btn btn-primary'>revise</a>
  </div>
</div>
</main>
</center>"
;
    }
    ?>
</body>
</html>