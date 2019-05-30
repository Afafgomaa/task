<?php

include 'connection.php';

if (isset($_POST['submit'])){
	$title =filter_var($_POST['title'],FILTER_SANITIZE_STRING);
	$image = 'uplodes/'.basename($_FILES['image']['name']);
    $content = $_POST['content'];
	
		global $con;
		$stat= $con->prepare("INSERT INTO posts(title, image, content) 
			                                  VALUES(:ztitle ,:zimage, :zcontent)");
        $stat->execute(array(':ztitle'   => $title,
                     ':zimage'   => $image,
                     ':zcontent' => $content));
		$count = $stat->rowCount();
		move_uploaded_file($_FILES['image']['tmp_name'], $image);
	
	}

?>



<!DOCTYPE html>
<html>
<leng = en>
	<head>
		
		<title>Add new Post</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/admin.css"/>
	</head>
<body>

 <div class="container-fluid">
 	<div class="row">
	 <div class="col-sm-2"></div>
 		<div class="col-sm-8">
 			<h1>Add New Post</h1>
 			
				 <form action="create_post.php" method="post" enctype="multipart/form-data">
				 	<fieldset>
				 		<div class="form-group">
	                      <label for="title">Name</label>
					 		<input class="form-control" type="text" name="title" id="title" placeholder="title">
					 	<div class="form-group">
						 <label for="image">add Image</label>
					 		<input class="form-control" type="file" name="image" id="image">
					 	</div>
					 	<div class="form-group">
	                      <label for="content">Body </label>
					 		<textarea class="form-control" name="content" id="content"></textarea> 
					 	</div>
				 	   </div>
				 	   <br>
				 	   <input class="btn btn-success btn-block" type="submit" name="submit" value="Add New Post">
				 	   <br>
				 	</fieldset>

				 </form>





 		</div><!-- End of main page -->
		 <div class="col-sm-2"></div>
 	</div><!-- End of row -->
 </div><!-- End of container -->	
</body>



</html>