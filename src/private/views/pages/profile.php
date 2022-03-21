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
    <main>
        <?php include 'nav.php'; ?>
        <div class="container mt-2">
            <div class="row m-b-r m-t-3">
                <div class="col-md-2 offset-md-1">
                    <img src="https://d3dzadow5k0y91.cloudfront.net/images/5e5f502f-6094-46b3-bc2c-70e60af4fd84/coverImage/940x430.jpg" alt="" class="rounded-circle img-fluid">
                </div>
                <div class="col-md-9 p-t-2">
                    <h2>@<?php print_r($_SESSION['user']); ?>
                        <a href='uploads'>
                            <button type="button" class="btn btn-lg btn-warning">post</button>
                        </a>
                    </h2>
                    <p><?php print_r($_SESSION['name']); ?></p>
                    <ul class="row">
                        <li class="col-md-2"><strong>41</strong> posts</li>
                        <li class="col-md-2"><strong>47k</strong> followers</li>
                        <li class="col-md-2"><strong>208</strong> following</li>
                    </ul>
                </div>


            </div>
            <div class="container">
                <div class="row">
                    <?php /* print_r($data); */
                    foreach ($data as $post) { ?>
                        <div class="card w-25 col-md-1 mt-5 mx-5">
                            <img class="card-img-top" src="https://source.unsplash.com/daily" alt="Card image top">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="16" height="16" fill="currentColor" 
                                    class="bi bi-chat-left-heart-fill" viewBox="0 0 16 16">
                                        <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 
                                        1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm6 3.993c1.664-1.711
                                         5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                                    </svg>
                                    <p>32</p>
                                </h3>
                                <h4 class="card-subtitle">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="16" height="16" fill="currentColor" 
                                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 
                                        4.736 3.562-3.248 8 1.314z" />
                                    </svg>
                                    <p>1.2K</p>
                                </h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>