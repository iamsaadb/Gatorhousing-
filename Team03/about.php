<?php
include('server.php');
?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- Header -->

<!-- Nav Bar -->
<header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top py-2">
    <a class="navbar-brand" href="index.php">
      <img src="./img/logo.png" height="100px" width="150px" alt="Logo">
    </a>
    <div class="myform" style="margin-left:200px;">
      <form id="search_form" class="form-inline my-2  d-flex" method="POST" action="filter.php">
        <select name="select" class="form-control" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          $search = $_POST['search'];
          $select = $_POST['select'];
          echo '<h2> SEARCH RESULTS</h2>';
          ?>
          <option class="dropdown-item" value="All">All</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "Apartment") echo 'Selected'; ?> value="Apartment">Apartment</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "Condo") echo 'Selected'; ?> value="Condo">Condo</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "House") echo 'Selected'; ?> value="House">House</option>
          <option class="dropdown-item" <?php if ($GLOBALS['select'] == "Studio") echo 'Selected'; ?> value="Studio">Studio</option>
        </select>

        <input class="form-control" name="search" type="search" placeholder="Search" value="<?php echo $search; ?>" aria-label="Search" style="margin:5px; width:200px;">
        <button class="ui inverted violet button d-flex" name="submit" type="submit" style="color:white">Search</button>
      </form>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="ui inverted violet button d-flex" href="about.php">
            <i class=""></i>
            About
          </a>
          </a>
        </li>
        <li class="nav-item active">
          <a class="ui inverted violet button d-flex" href="#">
            <i class="fa fa-sticky-note-o"></i>
            Post
          </a>
          </a>
        </li>


      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class=" ui inverted purple button d-flex" href="registration.html" data-toggle="modal" data-target="#exampleModal">
            <i class="add user icon"></i>
            Sign In</a>
        </li>
      </ul>
    </div>

  </nav>
</header>
<!-- Header -->

<body>

  <!-- Page Content -->
  <div class="container">
    <div class="bg-primary text-center py-5 mb-4" style="margin-top:100px">
      <div class="container">
        <h1 class="font-weight-light text-white">Meet Our Team</h1>
      </div>
    </div>
    <div class="row">
      <!-- Team Member 1 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 2 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 4 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>

</body>
<!-- /.container -->