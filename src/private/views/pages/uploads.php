<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#e3e3db">
    <h1>Image Gallery</h1>
    <p>This page display the list of uploaded images.</p>
    <form method="post" action='posts' enctype="multipart/form-data" ;>
        <input type="file" name="file-upload" id="file-upload">
        <button name="submit">Upload</button>
        <hr>
        <?php
        /*  if(isset($_SESSION['images'])){
     foreach($_SESSION['images'] as &$x){
        echo " <div style='width: auto;display:inline-block;'>
        <img src='uploads/$x'
        style='border: 1px solid #ddd;border-radius:
        4px;padding: 5px;width: 250px;height:250px;'>
        <br>$x</div>";
  }} */
        ?>
    </form>
</body>

</html>