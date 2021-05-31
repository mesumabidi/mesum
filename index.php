<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
    <form method="POST" action="list.php" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="name" class="form-label">Enter your name</label>
    <input type="text" name="username" id="name" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="image" class="form-label">Upload image</label>
    <input type="file" name= "images"  class="form-control" >
    </div>

    <button class="btn btn-primary" name="submit">Submit</button>

    </form>
    
    
    </div>
 
</body>
</html>