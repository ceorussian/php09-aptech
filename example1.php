<!DOCTYPE html>
<html>
<head>
	<title>Day 2 - Session 1</title>
</head>
<?php
	$loilop = $loiten = $loidate= $loiemail = $date1 ="";
	$ten = $lop = $date = $email = "";
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
		}
		if(empty($_POST['email'])){
			$loiemail =  " vui lòng nhập email ! ";
		}else{
			$email = $_POST['email'];
		}
		if($_POST['birth']>18){
				$date1 = "Đúng";
		}else{
				$date1 = "Sai";
			}

	}
?>
<body>
	<form method="post">
		Tên:<input type="text" name="user"><span class="abc">*<?php echo $loiten; ?></span><br>
		Lớp :<input type="text" name="lop"><span class="abc">*<?php echo $loilop; ?></span><br>
		Birth :<input type="text" name="birth"><span class="abc">*<?php echo $loidate; ?></span><br>
		Email :<input type="text" name="email"><span class="abc">*<?php echo $loiemail; ?></span><br>
		<input type="submit" name="click" value="Click me !">
	</form>
	<?php 
		echo $ten;
		echo "<br>";
		echo $lop;
		echo "<br>";
		echo $date;
		echo "<br>";
		echo $date1;
		echo "<br>";
		echo $email;
		echo "<br>";

		
	?>
</body>
</html>