<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
  </head>
  <body>
    <section id="index">
      <div class="col-md-6">
      <form action="upload_run.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" id="imgShow" value="Select"><br>
        <input class="btn btn-success" type="submit" name="submit" value="Create">
      </form>
      </div>
      <div class="col-md-6">
        <div class="selectImg">
          <img src="#" id="show"/><br><br>
        </div>
        <div class="uploadImg">
       		 <?php 
	            include "config.php";
	            $sql2 = "SELECT    `image` FROM `tasks` order by id desc limit 1";
	            $query2 = mysqli_query($elaqe, $sql2);
	            $row = mysqli_fetch_assoc($query2);
	         ?><img src='<?= $row['image']?>'>
        </div>	
      </div>
    </section>
			     <script >
			           function readURL(input) {
			                if (true) {
			                    var reader = new FileReader();
			                    reader.onload = function (e) {
			                        $('#show').attr('src', e.target.result);
			                    }
			                    reader.readAsDataURL(input.files[0]);
			                }
			            }
			            $("#imgShow").change(function(){
			                readURL(this);
			            });
			       </script>
  </body>
</html>