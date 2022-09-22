<?php
include 'config.php';

if (isset($_GET['id'])) {
    
    $user_id = $_GET['id'];
    $result = readcondition('user',"id = '$user_id'");
    while($user_data = mysqli_fetch_array($result)) { 
        $todo = $user_data['username'];    
        $desc = $user_data['kegiatan'];
    }
}
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
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        </div>
    </div>
    </nav>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Todo</label>
                <input name="todo" value="<?php echo $todo?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Todo">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input name="desc" value="<?php echo $desc?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        
<?php
if (isset($_POST['submit'])) {
    $todo=$_POST['todo'];
    $desc=$_POST['desc'];
    update($todo,$desc,$user_id);
    header('location:index.php');
}
?>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
