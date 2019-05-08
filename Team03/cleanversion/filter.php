<!-- Database connection-->
<?php include 'server.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <link rel="stylesheet" href="css/main.css" />

  <title>GatorHousing - Home Page</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top py-2">
    <!-- <img src="./img/GatorLogo.PNG" alt="Logo"> -->
    <a class="navbar-brand" href="index.php">
      <h1>GatorHousing</h1>
    </a>
    <div class="myform" style="margin-left:30px;">
    <form class="form-inline my-2  d-flex" method="POST" action="filter.php">
        <select name="select" class="form-control" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          $search=$_POST['search'];
          $select=$_POST['select'];
          echo '<h2> SEARCH RESULTS</h2>';
          ?>
          <option class="dropdown-item" value="All">All</option>
          <option class="dropdown-item" <?php if ($select == "Apartment") echo 'Selected'; ?> value="Apartment">Apartment</option>
          <option class="dropdown-item" <?php if ($select == "Condo") echo 'Selected'; ?> value="Condo">Condo</option>
          <option class="dropdown-item" <?php if ($select == "House") echo 'Selected'; ?> value="House">House</option>
          <option class="dropdown-item" <?php if ($select == "Studio") echo 'Selected'; ?> value="Studio">Studio</option>
        </select>

        <input class="form-control" name ="search" type="search" placeholder="Search" value= "<?php echo $search; ?>" aria-label="Search" style="margin:5px; width:200px;">
        <button class="btn btn-outline-success" name= "submit" type="submit" style="color:white">Search</button>
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

  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
          </p>
          <p class="divider-text  tex-center">
            <span class="bg-light">OR</span>
          </p>
          <form class="ui form">
            <div class="field">
              <label>E-Mail Address</label>
              <input type="email" name="email" placeholder="E-Mail Address" />
            </div>
            <div class="field">
              <label>Password</label>
              <input type="password" name="password" placeholder="Enter Password" />
            </div>
            <button class="ui blue button" type="submit">Sign In</button>
          </form>
        </div>
        <div class="modal-footer">
          Don't Have an Account ?
          </button>
          <a href="#" data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal" aria-label="Close">Sign Up</a>
        </div>
      </div>
    </div>
  </div>


  <!-- sign up modal  -->

  <div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
              <h4 class="card-title mt-3 text-center">Create Account</h4>
              <p class="text-center">Get started with your free account</p>
              <p>
                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
              </p>
              <p class="divider-text  tex-center">
                <span class="bg-light">OR</span>
              </p>
              <form>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="" class="form-control" placeholder="Full name" type="text">
                </div>

                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                  </div>
                  <input name="" class="form-control" placeholder="Email address" type="email">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                  </div>
                  <select class="custom-select" style="max-width: 120px;">
                    <option selected="">+1</option>
                    <option value="1">+972</option>
                    <option value="2">+198</option>
                    <option value="3">+701</option>
                  </select>
                  <input name="" class="form-control" placeholder="Phone number" type="text">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                  </div>
                  <select class="form-control">
                    <option selected=""> Sign up as</option>
                    <option>Home owner</option>
                    <option>Manager</option>
                    <option>Renter</option>
                  </select>
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control" placeholder="Create password" type="password">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control" placeholder="Repeat password" type="password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                </div>
                <p class="text-center">Have an account? <a href="" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal" aria-label="Close">Log In</a> </p>
              </form>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h5 name="filter" style="width: fit-content; margin-top: 1%;
     margin-left: 45%;"><u>FILTERS</u></h5>

 <div name="filter" style="width: fit-content; margin-top: 1%;
     margin-left: 30%;">
       <form class="form-inline ml-3">

              <div class="d-inline">
                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Price</label>
                  <select class="custom-select my-1 mr-sm-2 text-center" id="inlineFormCustomSelectPref">
                    <option value="0">Any</option>
                    <option value="1">Less than $1000</option>
                    <option value="2">Between $1000 and $2000</option>
                    <option value="3">Between $2000 and $3000</option>
                    <option value="4">Between $3000 and $4000</option>
                    <option value="5">More than $4000</option>
                  </select>
              </div>
                        
              <div class="d-inline">
                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Bed</label>
                  <select class="custom-select my-1 mr-sm-2 text-center" id="inlineFormCustomSelectPref">
                  <option value="0">Any</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
              </div>
          
            <div class="d-inline">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Bath</label>
            <select class="custom-select my-1 mr-sm-2 text-center" id="inlineFormCustomSelectPref">
            <option value="0">Any</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            </div>
            <div class="d-inline">
                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Distance to SFSU</label>
                  <select class="custom-select my-1 mr-sm-2 text-center" id="inlineFormCustomSelectPref">
                    <option value="0">Any</option>
                    <option value="1">Less than 1 mi</option>
                    <option value="2">Between 1 mi and 3 mi</option>
                    <option value="3">Between 3 mi and 5 mi</option>
                    <option value="5">More than 5 mi</option>
                  </select>
                  <button type="submit" name ="filterSubmit" class="btn btn-primary my-1 mx-auto">Submit</button>

              </div>
          </form>
</div> 
<hr>
<div>
  <br>

<?php include 'search_results.php' ?>
</div>
</body>


<!-- end body -->
<!-- footer -->
<!-- connect -->
<!-- -->
<!-- footer-end -->


<br><br>

<footer style="font-size:70%;">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-md-4">
        <hr class="light">
        <h5>Contact Information</h5>
        <hr class="light">
        <p>support@gatorhousing.com</p>
        <p>Phone: (209)-280-9932</p>
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Our Office Hours</h5>
        <hr class="light">
        <p>Monday-Friday </p>
        <p>9am - 5pm</p>

      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Our Office Address</h5>
        <hr class="light">
        <p>GH, 1600 Holloway Ave</p>
        <p>San Francisco, CA 94117</p>
      </div>
      <div class="col-12">
        <hr class="light">
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</footer>

</html>