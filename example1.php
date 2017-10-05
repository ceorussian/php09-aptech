<!DOCTYPE html>
<html>
<head>
	<title>Day 2 - Session 1</title>
</head>
<?php
	$loilop = $loiten = $loidate= $loiemail = $date1 ="";
	$ten = $lop = $date = $email =$avatar = "" ;
	$img ="img/default.png";
	if(isset($_POST['click'])){
		if(empty($_POST['user'])){
			$loiten =  " vui lòng nhập tên ! ";
		}else{
			$ten = $_POST['user'];
		}
		if(empty($_POST['lop'])){
			$loilop =  " vui lòng nhập lớp ! ";
		}else{
			$lop = $_POST['lop'];
		}
		if(empty($_POST['birth'])){
			$loidate =  " vui lòng nhập ngày sinh! ";
		}else{
			$date = $_POST['birth'];
			if($_POST['birth'] > 18){
				$date1 = "Đúng";
			}else{
				$date1 = "Sai";
			}
		}
		if(empty($_POST['email'])){
			$loiemail =  " vui lòng nhập email ! ";
		}else{
			$email = $_POST['email'];
		}
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$avatar = $_FILES['avatar'];
		$img = "img/".basename($_FILES['avatar']['name']);
		move_uploaded_file($_FILES['avatar']['tmp_name'],$img);
	}
?>
<body>
	<form method="post" enctype="multipart/form-data">
		Tên:<input type="text" name="user"><span class="abc">*<?php echo $loiten; ?></span><br>
		Lớp :<input type="text" name="lop"><span class="abc">*<?php echo $loilop; ?></span><br>
		Birth :<input type="text" name="birth"><span class="abc">*<?php echo $loidate; ?></span><br>
		Email :<input type="email" name="email"><span class="abc">*<?php echo $loiemail; ?></span><br>
		Avatar : <input type="file" name="avatar"><br>
		<input type="submit" name="click" value="Click me !">
	</form>
	<?php 
		echo $ten;
		echo "<br>";
		echo $lop;
		echo "<br>";
		echo $date."  ".$date1;
		echo "<br>";
		echo $email;
		echo "<br>";
	?>
	<img src="<?php echo $img; ?>" height="200px" width="200px">
</body>
</html>