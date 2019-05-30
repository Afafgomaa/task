<?php

include 'connection.php';

if (isset($_POST['submit'])){
	$title =filter_var($_POST['title'],FILTER_SANITIZE_STRING);
	$image = 'uplodes/'.basename($_FILES['image']['name']);
    $content = $_POST['content'];
	$price = $_POST['price'];
	$sale  = $_POST['sale'];
	$kind_of_tour = $_POST['kind_of_tour'];
	$days = $_POST['days'];
	
		global $con;
		$stat= $con->prepare("INSERT INTO posts(title, image, content, price, sale, kind_of_tour, days) 
			                                  VALUES(:ztitle ,:zimage, :zcontent, :zprice ,:zsale , :zkind_of_tour , :zdays )");
        $stat->execute(array(':ztitle'   => $title,
                     ':zimage'   => $image,
                     ':zcontent' => $content,
					 ':zprice' => $price,
					 ':zsale' => $sale,
					 ':zkind_of_tour' => $kind_of_tour,
					 ':zdays' => $days));
		$count = $stat->rowCount();
		move_uploaded_file($_FILES['image']['tmp_name'], $image);


		if($count > 0){
			echo '<div class="alert alert-success" role="alert">
  Data created Successuffly success!
</div>';
		}
	
	}

?>



<!DOCTYPE html>
<html>
<leng = en>
	<head>
		
		<title>Add new Post</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	                      <label for="title">title</label>
					 		<input class="form-control" type="text" name="title" id="title" placeholder="title">
						</div>

						<div class="form-group">
	                      <label for="price">Price</label>
					 		<input class="form-control" type="number" name="price" id="price" placeholder="price">
						</div>

						<div class="form-group">
	                      <label for="sale">Sale</label>
					 		<input class="form-control" type="number" name="sale" id="sale" placeholder="sale">
						</div>


						<div class="form-group">
	                      <label for="kind_of_tour">Kind Of Tour</label>
					 		<input class="form-control" type="text" name="kind_of_tour" id="kind_of_tour" placeholder="Kind Of Tour">
						</div>

						<div class="form-group">
	                      <label for="days">days</label>
					 		<input class="form-control" type="text" name="days" id="days" placeholder="Write Days Sperated With Qoma (,) ">
						</div>

					 	<div class="form-group">
						 <label for="image">add Image</label>
					 		<input class="form-control" type="file" name="image" id="image">
					 	</div>
					 	<div class="form-group">
	                      <label for="content">Body </label>
					 		<textarea class="form-control" name="content" id="content"></textarea> 
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