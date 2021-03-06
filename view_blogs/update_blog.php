<!DOCTYPE html>
<html lang="en">
<head>
	<title>BLOGG IT! | UPDATE BLOG</title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../style.css">

	<link rel="stylesheet" type="text/css" href="../sidebar.css">

	 <link href="../css/all.css" rel="stylesheet"> 

     <script defer src="../js/all.js"></script>



</head>
<body>


	<?php
	require '../header2.php';
	?>

	<?php
	require '../sidebar2.php';
	?>




	<section>
		<div class="container">
			<form method="post" action="" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-7 text-center">
						<h2>Update Blog</h2>


						<?php
						require '../connect.php';

						$blog_id = $_GET['id'];
						$sql= $conn->prepare("SELECT * FROM blogs where blog_id='".$blog_id."' and status='0'");
						$sql->execute();
						$sql->setFetchMode(PDO::FETCH_ASSOC);
						if($sql->rowCount()>0){
							foreach (($sql->fetchAll()) as $key => $row) {

								echo '

								<div class="item form-group">
								<input type=button id="blog_id" style="display:none;" value="'.$blog_id.'">
								<input style="margin-top:40px;" type="text"  required="required" class="form-control " id="blog_title" name="productname" value="'.$row['blog_title'].'">
								</div>
								<div class="item form-group">
								<textarea class="form-control blogTextarea" type="text" name="productnote"  id="blog_desc"> '.$row['blog_desc'].' </textarea>
								</div>';
							}
						}
						?>


					</div>


					<div class="col-md-3"></div>
				</div>

				<div class="row" style="margin-left: 90px;">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						    <div class="row">
							<div class="col-md-4 text-center">
								<div class="item form-group">
									<button class="btn btn-danger blogButtons" type="button"><a style="color:white" href="view_blogs.php">Cancel</a></button>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="item form-group">
									<button class="btn btn-primary blogButtons" type="reset">Reset</button>
								</div>
							</div>
							<div class="col-md-4 text-center" >
								<div class="item form-group">
									<button type="button" id="blogsubmit" class="btn btn-success blogButtons">Update</button>
								</div>
							</div>
					    </div>
					</div>
					<div class="col-md-3"></div>
				</div>



			</form>
		</div>
	</section>
























	<?php
	require '../footer2.php';
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="../js/bootstrap.min.js"></script>


	<script type="text/javascript">


		$("#blogsubmit").click(function(){


			var blog_id=$("#blog_id").val();
			var blog_title=$("#blog_title").val();
			var blog_desc=$("#blog_desc").val();


			var datastr='blog_id='+blog_id+'&blog_title='+blog_title+'&blog_desc='+blog_desc;


			if (blog_title=='') {
				alert("Please fill blog title")
			}
			else if (blog_desc=='') {
				alert("Please fill blog description");
			}


			else{

				$.ajax({


					type: "POST",
					url: "update_blog1.php",
					data: datastr,
					cache: false,
					success: function(res){
						if(res==1)
						{
							alert("Your blog has been updated!");
							window.location.href="view_blogs.php";

						}
						else{


							alert("Something Went Wrong!");


						}

					}
				}); 
			}






		});
	</script>


</body>
</html>