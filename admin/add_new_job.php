<?php 
session_start();
include('connection/db.php');
 $login= $_SESSION['email'];

 $Job_title=$_POST['job_title'];
 $Description=$_POST['Description'];
 $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $category=$_POST['category'];
  $Keyword=$_POST['Keyword'];
  $salary=$_POST['salary'];
  $skill=$_POST['skill'];





$query= mysqli_query($conn,"insert into all_jobs(customer_email,job_title,desc,country,state,city,category,keyword,,salary,skill)values('$login','$Job_title','$Description','$country','$state','$city','$category','$Keyword','$salary','$skill')");


// var_dump($query);
if ($query){
	echo " Data has been successfully Inserted";
}else{
	echo "some error plese try  again";

 
}
?>

