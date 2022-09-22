<?php
include 'config.php';

$result = read('user');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <br>
    
    <a href="create.php"><button type="button" class="btn btn-primary">create</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th width="280px" scope="col">Title</th>
                <th width="200px" scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $i=1;
                    while($user_data = mysqli_fetch_array($result)) {       
                ?>
                <tr>
                <th><?php echo $i; ?></th>
                <td><?php echo $user_data['username']; ?></td>
                <td><?php echo $user_data['kegiatan']; ?></td>
                <td><a href="delete.php?id=<?php echo $user_data['id']; ?>"><button type="button" class="btn btn-danger">delete</button></a>&nbsp;&nbsp;
                <a href="update.php?id=<?php echo $user_data['id']; ?>"><button type="button" class="btn btn-primary">update</button></a></td>
                </tr>
             <?php
             $i++;
                    }
             ?>
            </tbody>
        </table>
        </div>
        <script src="bootstrap\js\bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>