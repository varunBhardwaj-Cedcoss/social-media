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
    <?php include 'nav.php';?>
    <div class="container mt-5 text-center">
        <table>
        <th class="p-5">Friend Id</th>
        <th class="p-5">Friend Name</th>
        <th></th>
        <tbody>
            <tr>
                <?php
                foreach ($data as $users) {?>
                <form action="unfriend" method="post">
                <td class="mx-5"><?php echo $users->friends_id;?></td>
                <td><?php echo $users->friend_name;?></td>
                <td><button name="id" value="<?php echo $users->friends_id;?>" class="btn btn-danger">Un-Follow</button></td>
            </form>
            </tr>
                <?php }?>
        </tbody>
    </table>
    </div>
    
</body>
</html>