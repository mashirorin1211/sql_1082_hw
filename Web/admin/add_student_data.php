<?php
	require_once("conect.php");
	//echo $_POST['Student_id'] . "<br>" . $_POST['College'] . "</br>" . $_POST['Department'] . "</br>" . $_POST['Class'] . "</br>"  . $_POST['Grade'] . "</br>"  . $_POST['Name'] . "</br>" . $_POST['Email'] . "</br>". $_POST['Password']. "</br>" . $_POST['gender'] ;
	if((($_POST['Student_id']) && ($_POST['College']) && ($_POST['Department']) && ($_POST['Class']) && ($_POST['Grade']) && ($_POST['Name']) && ($_POST['Email']) && ($_POST['Password']) && ($_POST['gender'])) == '')
	{
		print<<<_END
			<script>
				alert("填寫錯誤");
			</script>
		_END;
		echo "<script>history.go(-1)</script>";
	}
	else
	{
		if(isset($_POST['Student_id']) && isset($_POST['College']) && isset($_POST['Department']) && isset($_POST['Class']) && isset($_POST['Grade']) && isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['gender']))
	{

		$Student_id = $_POST['Student_id'];
		$College = $_POST['College'];
		$Department = $_POST['Department'];
		$Class = $_POST['Class'];
		$Grade = $_POST['Grade'];
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$gender = $_POST['gender'];
		$db = new PDO('mysql:host=localhost;dbname=class_database',$connect_un,$connect_pw);
		$q= "INSERT INTO student (Student_id,College,Department,Class,Grade,Name,Email,Password,gender) VALUES ('$Student_id','$College','$Department','$Grade','$Class','$Name','$Email','$Password','$gender');";
		$result = $db->exec($q);
		print<<<_END
			<script>
				alert("插入完成");
				alert("$Student_id");
			</script>
		_END;
		echo "<script>history.go(-1)</script>";
	}
	else
	{
		print<<<_END
			<script>
				alert("填寫錯誤");
			</script>
		_END;
		echo "<script>history.go(-1)</script>";
	}
	}
?>