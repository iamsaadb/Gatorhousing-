<?php
         $sql = "NULL";
         $submit = $_POST['submit'];
         $search = $_POST['search'];
         $select = $_POST['select'];
         if (isset($submit)) {
             if ($select=="All"){
                 if (!isset($search)){
                    $sql = "SELECT * FROM property ORDER BY PRICE";
                 }
                 else {$sql = "SELECT * FROM property WHERE (`description` LIKE '%".$search."%') OR (`address` LIKE '%".$search."%') ORDER BY PRICE" ; }
             }
             else if ($select!="All"){
                if (empty($search)){
                    $sql = "SELECT * FROM property WHERE type='$select' ORDER BY PRICE";
                 }
                 else {$sql = "SELECT * FROM property WHERE (type='$select' AND (`description` LIKE '%".$search."%' OR `address` LIKE '%".$search."%')) ORDER BY PRICE" ; }            
             }  
             else if (!is_null($select) && isset($search)){
                $sql = "SELECT * FROM property WHERE (type='$select' AND `description` LIKE '%".$search."%') OR (`address` LIKE '%".$search."%')"; 
             }
            else { echo ' NOTHING';}
            // if (empty($search) && $select == "All") {
 
            // } elseif ( empty($search) && $select != "All") {
                
            // } elseif (!empty($search) && $select == "All") {
            //     $sql = "SELECT * FROM property WHERE zipCode='$search'";
            // } elseif (!empty($search) && $select != "All") {
            //     $sql = "SELECT * FROM property WHERE zipCode='$search' AND type='$select'";
            // }
            $result = $conn->query($sql);
            $counter = 0;
            //display 
            if($result->num_rows == 0) {echo'no results found';}
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $counter++;
                    if ($counter % 4 == 1) {
                      echo '<br>
                          <center><table style="width:80%">
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
                           </div></td> ';
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
                           </div></td>';
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
                           </div></td>';
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
                           </div></td> <br></tr>';
                    }
            }echo'</table></center>';
          } else {
                echo '</table></center><h1>NO RESULTS TRY AGAIN</h1>';
            }}
        echo '</table></center>';
        $conn->close();
        ?>