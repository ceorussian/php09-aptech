<!DOCTYPE html>
<html>
<head>
	<title>Day 2 - Lession 1 </title>
</head>
<body>
	<?php
		$name = array(' Nguyễn Văn Phong ','Trương Thị Thảo ',' Trần Văn An ',' Nguyễn Đức Quang ',' Trần Văn Phú ',' Lê Công Hải ');
		$gender = array(' Boy ',' Girl ');
		$school = array(' Đi làm ',' Đi làm ',' Đông Á ',' Duy Tân ',' Sư Phạm ',' Duy Tân ');
		$getNguyen = $name['0']."<br>".$name['3'];
		$getNameOfA = $name['2']."<br>".$name['3']."<br>".$name['5'];
		$getLeanDuyTan = $name['3']."<br>".$name['5'];
		$getWork = $name['0']."<br>".$name['1'];
		$arrangement = $name['2']."<br>".$name['5']."<br>".$name['3']."<br>".$name['0']."<br>".$name['4']."<br>".$name['1'];

	 ?>
	 <h2> Thông tin tìm kiếm  </h2>
	 <form action="BTVN.php" method="post">
	 	Gender :<input type="text" name="getgender"><br><br>
	 	Last Name : <input type="text" name="ln"><br><br>
	 	Tìm từ trong tên : <input type="text" name="seach"><br><br>
	 	Sinh viên trường : <input type="text" name="school"><br><br>
	 	<input type="submit" name="click" value="Tìm kiếm">
	 </form>
	 <?php
	 	// cái này là nút submit tồn tại ! 
	 	if(isset($_POST['click'])){
	 		echo "<b> Danh sách sinh viên có họ Nguyễn </b><br> ";
	 		// cái này là nếu nhập Nguyễn thì in ra list 
			if($_POST['ln']=="Nguyễn"){
				echo $getNguyen;
			}else{
				echo " Vui lòng kiểm tra lại ! ";
			}
			echo "<br><b> Danh sách tên sinh viên có từ a</b><br>";
			// cái này là nếu giới tính là Nam và từ cần tìm là a 
			if($_POST['seach']=="a"&&$_POST['getgender']== "Nam"){
				echo $getNameOfA;
			}else{
				echo " Vui lòng kiểm tra lại ! ";
			}
			// cái này là nếu nhập Duy Tân 
			if($_POST['school']=="Duy Tân"){
				echo "<br><b> Danh sách sinh viên Duy Tân</b><br> ";
				echo $getLeanDuyTan;
				// cái này là nếu nhập đi làm
			}else if($_POST['school']=="Đi làm"){
				echo "<br><b> Danh sách sinh viên đã đi làm :</b><br> ";
				echo $getWork;
			}else{
				echo " Vui lòng kiểm tra lại ! ";
			}
			echo "<br><b> Danh sách tất cả sinh viên :</b><br> ";
			echo $arrangement ;
		}
	  ?>
	 
</body>
</html>