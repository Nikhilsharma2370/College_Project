<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="sign_up.php" method="post">
      <img class="mb-4" src="admin/img/logo.png" alt="" width="72" height="72">
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>
    

         <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" id="first_name" class="form-control" name="first_name" placeholder="Enter Your First name" required autofocus>

       <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" id="last_name" class="form-control" name="last_name" placeholder="Enter Your Last name" required autofocus>

       <label for="inputEmail" class="sr-only">Mobil Number</label>
      <input type="Number" id="mobil_number" class="form-control" name="mobil_number" placeholder="Enter Your Mobile Number" required autofocus>
           

       <label for="inputEmail" class="sr-only">Date Of Birth</label>
      <input type="date" id="dob" class="form-control" name="dob" placeholder="Enter Your Date Of Birth" required autofocus>
     

      
      <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign Up" >
      <a href="job-post.php">Already Account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>
  </body>
</html>
<?php

include('connection/db.php');
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $Password=$_POST['Password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $dob=$_POST['dob'];
  $mobil_number=$_POST['mobil_number'];

 $query=mysqli_query($conn,"insert into jobseeker(email,password,first_name,last_name,dob,mobil_number)values('$email','$Password','$first_name','$last_name','$dob','$mobil_number')");
 var_dump($query);
 if ($query) {
   echo "<script>alert('Now You Can Login!')</script>";
   header('location:job-post.php');
 }else{
   echo "<script>alert('Some Error Please Try Again!')</script>";
 }


}




?>