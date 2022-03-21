<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
<html>
<body>
  <?php include 'nav.php'; ?>
  <div class="container ">
    <div class="row">
  <?php /* print_r($data); */
    foreach ($data as $post) {?>
    <div class="card w-25 col-md-1 mx-5">
  <img class="card-img-top" src="https://source.unsplash.com/daily" alt="Card image top">
  <div class="card-body">
    <h3 class="card-title"><?php echo $post->username;?></h3>
    <h4 class="card-subtitle"><?php echo $post->email;?></h4>
  </div>
</div>
    <?php }?>
  </div>
  </div>
</body>

</html>
</body>
</html>