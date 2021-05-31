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
    <div class="container">
    <div class="table-responsive">
    <table class="table table-dark table-bordered table-hover table-stripped">
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Image</th>
    </thead>

    <tbody>
        <?php
        require_once 'config.php';
        if(isset($_POST['submit']))
        {
        
        $name = $_POST['username'];
        //echo "<td>$name</td>";
        $image = $_FILES['images'];
        $filetmp = $image['tmp_name'];
        print_r($image);
        $filename= $image['name'];

        $fileext = explode('.', $filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array ('jpg', 'jpeg', 'png');

        if(in_array($filecheck, $fileextstored))
        {
            $destinationfile = 'Images/'.$filename;
            move_uploaded_file($filetmp, $destinationfile);
            $query = $con ->query("INSERT INTO `tblimage` ( `Name`, `Image`) VALUES ( '$name', '$destinationfile')") ;
            if($query)
            {
                echo "Upload successfuly";
            }
            else{
                echo "Error";
            }
            $selectquery = $con -> query("SELECT * FROM tblimage");
            while($data = $selectquery -> fetch_assoc())
            {
                ?>
                <tr>
                <td><?php echo $data['ID']?></td>
                <td><?php echo $data['Name']?></td>
                <td><img width ="100px" height="100px" src="<?php echo $data['Image']?>"></td>
                </tr>
                <?php
            }
        }



        }
        ?>
    </tbody>

    
    </table>
    
    </div>
    
    </div>
</body>
</html>