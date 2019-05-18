<?php 
include('server.php');

$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
$type=$_POST['type'];
$nbed=$_POST['nbed'];
$nbath=$_POST['nbath'];
$price=$_POST['price'];
$desc=$_POST['description'];
$distance=$_POST['distance'];
$image = "";
if(isset($_FILES['image']) && !empty($_FILES['image'])){
    echo'isset';
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
}
//you keep your column name setting for insertion. I keep image type Blob.
$query="";



if(isset($_POST['submit'])){
    $query = "INSERT INTO property (`address`,`zipCode`,`type`,`nBed`,`nBath`,
            `price`,`description`,`distance`,`image`) VALUES ('$address','$zipcode','$type',
            '$nbed','$nbath','$price','$desc','$distance','$image')";

if ($conn->query($query)==true) {
        echo "Your post of " .$type. " has been sent to a moderator. It will take few minutes 
        before it becomes public. Thanks for your patience! = <br>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    $conn->close();

    
    
}



?>