<?php 
//include ('server.php');
?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- Header -->
<title>About Team Members</title>
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
<div class="bg-primary text-center py-5 mb-4" style ="margin-top:100px">
<div class="container">
    <h1 class="font-weight-light text-white">Meet Our Team</h1>
  </div>
</div>
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="./images/person_1.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Dhwan Shah</h5>
          <div class="card-text text-black-50">Team Lead / Full Stack Developer</div>
        </div>
      </div>
    </div>
    
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="./images/Saad2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Saad Bouayad</h5>
          <div class="card-text text-black-50" style='width:max-content'> Backend Lead / Full Stack Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="./images/person_2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Mubarak Akinbola</h5>
          <div class="card-text text-black-50"> Backend Developer </div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="./images/Rajvi.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Rajvi Shah</h5>
          <div class="card-text text-black-50">Full Stack Developer</div>
        </div>
      </div>
    </div>
  </div>
  <div class='row2' style='display : -webkit-inline-box; display:flex; justify-content:center;'><!-- Team Member 5 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="./images/download.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Dawit Ayele</h5>
            <div class="card-text text-black-50">Frontend Lead / Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 6 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="./images/Rachel_dummy.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Aye Win Sandy</h5>
            <div class="card-text text-black-50">Frontend Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 7 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="./images/person_4.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0"> Ahmad Rangeen </h5>
            <div class="card-text text-black-50">GitHub Master / Web Developer</div>
          </div>
        </div>
      </div>
  </div>
</div>
  
  <!-- /.row -->

</div>

</body>
<!-- /.container -->