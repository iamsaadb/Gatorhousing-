<?php
        include ('server.php');
        session_start();
         $sql = "NULL";
        //  $price_filter_query = "NULL";
        //  $bed_filter_query = "NULL";
        //  $bath_filter_query = "NULL";
        //  $distance_filter_query = "NULL";
        $submit_filter=$_POST['submit_filter'];
        $price_range = $_POST['price_range'];
            if (isset($submit_filter)) {
                if (isset($price_range) && !empty($price_range)){
                    if ($price_range == "Less than $1000"){
                    $sql = "SELECT * FROM property WHERE price <= 1000";
                    }
                elseif($price_range == "Between $1000 and $2000"){
                    $sql = "SELECT * FROM property WHERE price BETWEEN 1000 AND 2000";
                }
                elseif($price_range == "Between $2000 and $3000"){
                    $sql = "SELECT * FROM property WHERE price BETWEEN 2000 AND 3000";
                }
                elseif($price_range == "Between $3000 and $4000"){
                    $sql = "SELECT * FROM property WHERE price BETWEEN 3000 AND 4000";
                }
                elseif($price_range == "More than $4000"){
                    $sql = "SELECT * FROM property WHERE price >= 4000";
                }
                elseif($price_range == "Any"){
                    $sql = "SELECT * FROM property";
                }
                else { echo ' No matching results, try to change the search parameters';}
            }
                
}
                
            // if (empty($search) && $select == "All") {
 
            // } elseif ( empty($search) && $select != "All") {
                
            // } elseif (!empty($search) && $select == "All") {
            //     $sql = "SELECT * FROM property WHERE zipCode='$search'";
            // } elseif (!empty($search) && $select != "All") {
            //     $sql = "SELECT * FROM property WHERE zipCode='$search' AND type='$select'";
            // }

            try {
                $result = $conn->query($sql);
              }

              //THIS IS THE COSE TO SAVE PID IN ARRAY
              // $data = array();
              // while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC))){
              //    $data[] = $row["pid"];
              //   }
              // print_r($data);
              //catch exception
              catch(Exception $e) {
                echo 'Error Message: ' .$e->getMessage();
              }
              $counter =0;

              while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC))){
                   if ( in_array($row["pid"], $_SESSION['data'] ,false)){
                       echo 'Yes';
                       $counter++;
                       if ($counter % 4 == 1) {
                        echo '<br>
                            <center><table style="width:80%; margin-top:-2rem"><br>
                            <tr class="mix"> <td style="width:200px;"> <div class="card" style="width:260px">
                            <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
                            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
                            </div>
                             <div class="card-body" style="width:260px">
                             <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
                             <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
                             <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
                             <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
                              <br>
                              <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
                             </div><br></td> ';
                      } elseif ($counter % 4 == 2) {
                        echo '
                            <td style="width:200px;"> <div class="card" style="width:260px">
                            <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
                            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
                            </div>
                             <div class="card-body" style="width:260px">
                             <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
                             <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
                             <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
                             <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
                              <br>
                              <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
                             </div><br></td>';
                      } elseif ($counter % 4 == 3) {
                        echo '
                            <td style="width:200px;"> <div class="card" style="width:260px">
                            <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
                            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
                            </div>
                             <div class="card-body" style="width:260px">
                             <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
                             <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
                             <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
                             <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
                              <br>
                              <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
                             </div><br></td>';
                      }
                      elseif ($counter % 4 == 0) {
                        echo '
                            <td style="width:200px;"> <div class="card" style="width:260px">
                            <div class="text-center" style="color:blue";> <b>'.$counter.'-  '.$row["type"].'  </b> </div>
                            <img width="257px" height = "200px" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Card image cap">
                            </div>
                             <div class="card-body" style="width:260px">
                             <div class="list"><i class="fas fa-dollar-sign"></i> <b> Price: </b> ' . $row["price"] . ' </div>
                             <div class="list"><i class="fas fa-bed"></i> <b> Bedrooms: </b> ' . $row["nBed"] . ' </div> 
                             <div class="list"><i class="fas fa-bath"></i> <b> Bathrooms: </b> ' . $row["nBath"] . ' </div> 
                             <div class="list"> <i class = "fa fa-map-marker"></i> <b> Address : </b> ' . $row["address"] . ' </div>                            
                              <br>
                              <div class="text-center"><button type="button" class="btn btn-primary  btn-md">Contact Landlord</button></div> 
                              <br></div></td></tr>';
                      }
                     else {
                        echo '</table></center><h1>NO RESULTS TRY AGAIN</h1>';
                    }
                   }
               }
            echo '</table></center>';
            echo ' SESSION DATA VALUES <br>' ;
            print_r($_SESSION['data']);
              $conn -> close();
              ?>