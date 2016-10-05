<?php  
	include 'config.php';
	if (isset($_POST['submit'])) {
		$sekil = $_FILES['img'];
		$target_dir='images/';
		$target_file=$target_dir . rand() .$_FILES["img"]["name"];
	
		$imageFileType=pathinfo($_FILES["img"]["name"] , PATHINFO_EXTENSION);

		 
			if ($_FILES['img']['size']<500*1024) {

	 			var_dump(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file));
	 		}else{
	 			echo "Şəklin ölçüsü böyükdür";
			}
	 	
	$sql="INSERT INTO tasks(image) values('".$target_file."')";
	$query=mysqli_query($elaqe,$sql);
		if ($query) {
			header('Location:index.php');		
		}else{
			echo "Şəkil yüklənmədi";
		}
	}
	

?>