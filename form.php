

<?php include "database.php";?>
<?php
// if(isset($_POST["POST"]))
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $age=$_POST['Age'];
    $add=$_POST['Address'];
}


$check="SELECT * from candidate where email='$email'";
$result=mysqli_query($conn, $check);
$count=mysqli_num_rows($result);

if($count>0){
  echo "User already exists<br>";
}

else{
  $sql = "INSERT INTO `candidate` (`name` , `email`, `age`, `address`)
  VALUES ('$name', '$email', '$age', '$add')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Registration successful<br>";
    // header('Location: winner picker\index.html');
  } else {
    echo "Registration was not successful<br>";
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}



    ?> 