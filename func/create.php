<?php
include 'config.php';
 $sql = "SELECT * FROM `user`";
 $result = mysqli_query($db, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a class="navbar-brand" href="index.php">MTM test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        </div>
    </div>
    </nav>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
        
        <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Todo</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Todo desc</label>
                <input name="kegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <?php
        if (isset($_POST['submit'])) {
          $nama=$_POST['username'];
          $desc=$_POST['kegiatan'];
          create($nama,$desc);
            header("Location: index.php");
          }
          ?>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
      