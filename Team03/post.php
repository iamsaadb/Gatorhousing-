<!DOCTYPE html>
<?php
session_start();
include 'connexion.php';
//include 'login.php';
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <title>Post</title>
  <style type="text/css">
    #fileHelp {
      padding-top: 7px;
    }

    #submit {
      margin-top: 7px;
      width: 15%;
      display: inline-block;
    }

    #cancel {
      margin-top: 7px;
      width: 15%;
      display: inline-block;
    }

    #submitAndCancel {
      text-align: center;
    }

    #jumbo {
      background-color: gray;
      text-align: center;
      color: white;
    }

    #note {
      font-size: 20px;
    }

    #bedroomBathroom {
      padding: 0px;
      margin-top: 0px;
      width: 10%;
    }

    #pricePerMonthDiv {
      width: 15%;
    }
  </style>
</head>

<body>
  <div class="container">
    <!--jumbotron div-->

    <!--post-->
    <form method="post" action="post_insertion.php" enctype="multipart/form-data">

      <div class="form-group col-md-12" id="type">
        <label>Type</label>
        <select class="form-control" name="type">
          <option value="Apartment">Apartment</option>
          <option value="Condo">Condo</option>
          <option value="House">House</option>
          <option value="Studio">Studio</option>
        </select>
      </div>

      <fieldset class="form-group">
        <input class="form-control" type="text" name="address" placeholder="Address" />
      </fieldset>

      <fieldset class="form-group">
        <input class="form-control" type="text" name="zipcode" placeholder="Zip code" />
      </fieldset>

      <div class="form-group col-md-12" id="bedroomBathroom">
        <label>Number of Bedrooms:</label>
        <select class="form-control" name="nbed">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="form-group col-md-12" id="bedroomBathroom">
        <label>Number of Bathrooms:</label>
        <select class="form-control" name="nbath">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="form-row" id="price">
        <label for="c2">Price per Month</label>
        <div class="input-group">
          <input type="text" name="price" placeholder="$$$" />
        </div>

        <div class="form-row" id="distance">
          <label for="c2">Distance to SFSU</label>
          <div class="input-group">
            <input type="text" name="distance" placeholder="Enter distance in Miles" />
          </div>
          <br>
          <div class="form-group col-md-6" >
            Upload image <br>
            <input type="file" name="image"/>
          </div>
          <br>
          <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Description (Optional)" rows="7"></textarea>
          </div>
          <br>
          <div class="form-group">

            <div>
              <button type="submit" name="submit">
                Submit
              </button>

            </div>


          </div>
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>