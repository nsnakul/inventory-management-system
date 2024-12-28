<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<!--Bootstrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" itegrity="sha384-MCw98/SFnGE8fJT3GXwEOngsv7Zt27NXFoaoApmYm81iuXopkFOJwJ8ERdknLPMO"crossorigiin="anonymous">

   <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.Fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
     <link rel="stylesheet" type="text/css" href="styles.css">

     <link rel="stylesheet" href="loginform.css">

 



 <body style=color:red;background-color:seasheel> 
<?php
 
$status="";
$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";
$conn=new mysqli($servername,$userid,$password,$dbname);

if (isset($_POST['Login']))
{
$uid=$_POST['t1'];
$pwd=$_POST['t2'];
 
$sql="SELECT * FROM reg WHERE uname='$uid' && passwd='$pwd' ";

$res=$conn->query($sql);
if($res->num_rows>0) 
{
header('location:p1.php');
$status="valid user";
}
else
{ 
$status="Invalid user"; 
}
}
echo $status;
?>

<div style=color:white;background-color:black;position:absolute;height:600;width:600;left:410;top:10>
<div style=color:white;background-color:#A5D6A7;border-style:groove;border-color:white;position:absolute;height:500;width:400;left:100;top:50;broder-radius:10%>
<div style=color:white;bacground:none;position:absolute;height:200;width:200;left:30;top:200;>
</div>


   <div class="card-header">
<h3 style=color:#003300>sign in</h3>
<div class="d-flex justify-content-end social_icon">
  <span><i class="fab fa-facebook-square"></i></span>
   <span><i class="fab fa-google-plus-square"></i></span>
   <span><i class="fab fa-twitter-square"></i></span>
  </div>
 
 <div class="card-body">
     <form method=post>
     <div class="input-group form-group">
      <div class="input-group-prepend">
     <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div> 
 <input name="t1" type="text" class="form-control" placehoder="username" style=color:black;background-color:azure>
</div>


<div class="input-group form-group">
 <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-key"></i></span> 
    </div>

    <input name="t2" type="password" class="form-control" placehoder="password" style=color:black;background-color:azure>
    </div>

    <div class="row align-items-center remember">
    <input type="checkbox">Remember Me
    </div>

     <div class="form-group">
     <input type="submit" name="Login" value="Login" class="btn float-right login_btn">
     </div>
      </form>         
  
<br/><br/><br/><br/><br/><br/><br/><br/>
   <div class="card-footer">
     <div class="d-flex justify-content-center links">
      Don't have an account?<a href="reg.php">Sign Up</a>
   </div>

    <div class="d-flex justify-content-center">
     <a href="#">forgot your password?</a>
      </div> 
      </div>
  

 

</div>
</div>
</body>
</html>