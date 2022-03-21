<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">WebforYou</a>
    </div>
    <ul class="nav navbar-item ">
      <li class=" mx-5"><a class="text-decoration-none" href="home">Home</a></li>
      <li class=" mx-5"><a class="text-decoration-none" href="profile">profile</a></li>
      <li class=" mx-5"><a class="text-decoration-none" href="users">Add friends</a></li>
      <li class=" mx-5"><a class="text-decoration-none" href="friends">friends</a></li>
    </ul>
    <?php if (isset($_SESSION['user'])) {?>
       <a href="logout" class="">
    <button class="btn btn-danger navbar-btn">logout</button>
    </a> 
    <?php } else {?>
    <a href="signin" class="">
    <button class="btn btn-danger navbar-btn">signin</button>
    </a>
    <a href="signup" class="">
    <button class="btn btn-danger navbar-btn">signup</button>
    </a>
    <?php }?>
   
  </div>
</nav>