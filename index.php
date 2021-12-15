<?php
ob_start();
session_start();
include_once './ketnoi.php';

if(isset($_SESSION['email'])){
	header('location: TrangChu.php');
	

	
}


if(isset($_POST["submit"]))
{
	$email=$_POST["email"];
    $mk=$_POST["mk"];

	if(isset($email) &&isset($mk))
	{
		$sql="SELECT  *FROM data_kh WHERE email ='$email' AND matkhau ='$mk'";
		$query=mysqli_query($conn,$sql);
		$rows=mysqli_num_rows($query);
		if($rows>0)
		{
			$_SESSION["email"]=$email;
			$_SESSION["mk"]=$mk;
			header('location: Trangchu.php');
		}
		else{
			echo '<center>Tài khoản bạn không tồn tại</center>';
		}
	} 
		
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<title>K&V Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>
<body>

<div class="right">

	<form method="post" >

	<div id="form-login" >
	
		<h2>Đăng nhập </h2>
	
	    <ul>
	       	
			<div class="form-login">
                <input  class="form-control" placeholder="Tài khoản email"  type="mail" name="email" >
              </div>
	      <br>
			<div class="form-login">
                <input  class="form-control" placeholder="Mật khẩu"   type="password" name="mk" >
              </div>
			  <br>
			  <div class="form-login">
				  <label>ghi nhớ</label>&nbsp;<input type="checkbox" name="check" checked="checked" />
              </div>
			  <br>
			  <div class="form-login">
				  <input type="submit" name="submit" value="Đăng nhập" /> 
				  
              </div>
			  <br>
			  <div class="form-login">
			  <a href="dangky.php"> <label>Đăng ký tài khoản?</label></a>
              </div>

	    </ul>
	<?php

	?>
	</div>
	
	</form>
	
	</div>
	
</div>							

</div>
	
</body>
</html>









