<?php
include 'connection.php';
include 'nav.html';
$stat = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
$stat->execute();
$Posts = $stat->fetchAll();

?>





<!DOCTYPE html>
<html>
<leng = en>
	<head>
		
		<title>index</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/puplic.css"/>

	</head>


<div class="main-slider">
	<div class="slider" style="background-image: url('images/slider.jpg')">   </div>
</div>
	<div class='container'>
		<div class="row">
<?php foreach($Posts as $post){

?>
<div class="col-md-4 col-xs-12">
    <div class="home_special_offer" id="programs">
        <a href="images/post.jpg">
            <div class="img_container" style="background-image: url('<?php echo $post['image']; ?>')">
                <div class="short_info" id="home_short_info">
                    <span class="price">
                       <span class="from">from</span>
                         <span class="currencySign">$</span><span id="min_price1175" class="convertable" itemprop="lowPrice"><?php echo  $post['price'] ;?></span>
                           <span class="from" style="color:#FF0004">was</span>
                                        <span style="text-decoration:line-through; color:#FF0004" class="currencySign">$</span><span style="text-decoration:line-through; color:#FF0004" id="min_price1305" class="convertable" itemprop="lowPrice"><?php echo $post['sale'] ?></span>
                                        
                                                 </span>
                                        </div>
                              </div>
                            </a>
                            <div class="home_special_offer_content">
                                <div class="home_special_offer_title">
                                    <h2>
                                        <a href="/"><strong><?php echo $post['title'] ;?></strong>
                                        </a>
                                    </h2>
                                </div>
                                        <div class="home_special_offer_types">
                                        <div class="home_special_offer_types_box">
                                            <?php echo $post['kind_of_tour'] ;?> Tour      </div>
                                        <div class="home_special_offer_types_box">
                                            <?php echo  $post['days'] ;?>  </div>
                                </div>
                                 <div class="home_special_offer_description">
                                    <p><?php echo  $post['content'] ;?></p>
                                </div>
                            </div>
                        </div>
                    </div>

<?php   } ?>


                            


</div><!--row-->
</div>

<footer>
	 ©® Copyright 2019 companyName.com, All Rights Reserved.
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>
</html>
