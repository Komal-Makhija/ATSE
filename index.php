
<?php
session_start();
include("conn.php");
		//include 'adminpanelheader.php' ;
	extract($_REQUEST);
unset($_SESSION['login']);
unset($_SESSION['email']);
unset($_SESSION['password']);

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query="select id,fname,password,email from user where email='".$username."' and password='".$password."'";
	 	$result=mysqli_query($con,$query);
	 	if(mysqli_num_rows($result)===1){

		 		$row=mysqli_fetch_assoc($result);
		 	
				if($username==$row['email'] && $password==$row['password'])
					{
	 					$_SESSION['user_id']=$row['id'];
						$_SESSION['username']=$row['email'];
						$_SESSION['password']=$row['password'];
						$_SESSION['login']=1;
						$_SESSION['loginmsg']==1;
						header('Location:adminpanel.php');
					}else
					{
						echo '<script>alert("Username or Password Incorrect...");</script>';
					}
			
		}
	}
		
	 ?><!DOCTYPE html>
<html>
<head>
	<title>Secondhand Shop Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	<script src="../jq.js"></script>
</head>
<body>
	<!-- <?php include 'header.php'; ?> -->

	<div class="container bg-white mt-3 p-3 shadow-lg p-3 mb-5 bg-white rounded">
			<h2 class="mb-3 p-2 p1 text-black align-items-center text-center">Secondhand Shop Admin Login</h2><hr />
		<div class=" d-flex justify-content-center">

				<img class="d-flex align-items-center img img-fluid" style="margin-right: 50px;width:35%; height:70%;" src="../img/Admin-rafiki.png">
				<div class="col-md-2.5 d-flex align-items-center  text-center">
					<form method="post" class="form  text-center" name="adminform">
						<input class="form-control mb-1 mt-3" type="text" name="username" placeholder="Enter username" required />
						<div style="display: flex; align-items: center;">
						<input class="form-control mr-top-10 mb-6" type="password" id="txtPassword" name="password" placeholder="Enter password" required />
						
						 <i style="margin-left: -30px;" id="eyeIcon" class="mr-top-1 fa fa-eye" style="cursor: pointer;" onclick="myFunction();"></i> 
						 </div>
						
						<input type="submit" class="btn btn-warning mt-3 mb-3 btn-sm col-md-12" name="login" value="Login">
						
							<p class="mt-3"><a href="../index.php" class="btn btn-light btn-sm"> <i class="fa fa-home p-1"></i>Home</a></p> 
					</form>
				</div>

		</div>
	</div>
		
<center style="color: red;">
	<?php echo @$_SESSION['msg']; ?>
</center>
	
	

	
</body>
</html>
<?php //include '..\footer.php'; ?>

<script type="text/javascript">

 function myFunction() {
  var x = document.getElementById("txtPassword");
  var icon = document.getElementById("eyeIcon");
  if (x.type === "password") {
    x.type = "text";
    icon.classList.add("fa-eye-slash");
  } else {
    x.type = "password";
     icon.classList.remove("fa-eye-slash");
  }
}
</script>