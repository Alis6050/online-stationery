<?php
$servername='localhost';
$username='root'; 
$password='';
$dbName='stationery';

$conn=new mysqli($servername,$username,$password,$dbName);
if($conn->connect_error){
    die( "Connection fail" .$conn->connect_error);
}
echo "success"
?>
<?php
include("login.dblogin.php");
if(isset($_POST['submit']))
{
  echo "<prev>";
  print_r($_POST);
  exit;
}
?>
if (isset($_POST["register"])){
    $email=$_POST["email"];
    $usernamee=$_POST["usernamee"];
    $password=$_POST["password"];
    

    $sql="INSERT INTO  registration (`email`, `usernamee`,`password`) VALUES ('$email','$usernamee','$password')";
    $query=mysqli_query($conn,$sql);



    <?php
include("login/dblogin.php");
if(isset($_POST['submit']))
{
  extract($_POST);
  $sql="INSERT INTO registration(username,password) VALUES('$username','$password')";
  
  $result=$conn->query($sql);
  if($result){
    echo "added cust";
  }
  else{
    echo " nocust";
  }
  exit;
}