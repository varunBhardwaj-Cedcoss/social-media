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
    <link rel="shortcut icon" href="http://sstatic.net/so/favicon.ico">

</head>

<body>
    <main>
        <?php include 'nav.php'; ?>
        <div class="container mt-2">
            <div class="row m-b-r m-t-3">
                <div class="col-md-2 offset-md-1">
                    <img src="https://mdbootstrap.com/images/avatars/img%20(1).jpg" alt="" class="img-circle img-fluid">
                </div>
                <div class="col-md-9 p-t-2">
                    <h2>@janedoe
                        <button type="button" class="btn btn-warning">Follow</button>
                    </h2>
                    <p>Jane Doe</p>
                    <ul class="row">
                        <li class="col-md-2"><strong>41</strong> posts</li>
                        <li class="col-md-2"><strong>47k</strong> followers</li>
                        <li class="col-md-2"><strong>208</strong> following</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="view overlay hm-black-light m-b-2">
                        <img src="https://mdbootstrap.com/images/regular/nature/img%20(1).jpg" 
                        class="img-fluid " alt="">
                            <ul class="row">
                                <li class="col-md-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="16" height="16" fill="currentColor" 
                                        class="bi bi-chat-left-heart-fill" viewBox="0 0 16 16">
                                        <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 
                                        1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm6 3.993c1.664-1.711
                                         5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                        </svg>
                                    <p>32</p>
                                </li>
                                <li class="col-md-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="16" height="16" fill="currentColor" 
                                        class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" 
                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 
                                        4.736 3.562-3.248 8 1.314z"/>
                                        </svg>
                                    <p>1.2K</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>