<?php
include('connection.php');
$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
	<title>Posts</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: darkgoldenrod;
		}
		.container {
			width: 50%;
			margin: 40px auto;
			padding: 20px;
			background-color: darkgrey;
			border: 1px solid #ddd;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.post {
			margin-bottom: 20px;
			padding: 20px;
			border-bottom: 1px solid #ccc;
		}
		.post h1 {
			font-weight: bold;
		}
		.post p {
			margin-bottom: 20px;
		}
        .nav{
			width: 100%;
			height: 60px;
			border: 2px solid black;
			background-color:darkgray;
			text-align: center;
			padding-top: 25px;
		}
	</style>
</head>
<body>
     <nav class="nav">
				<a href="create.php"><h1 style="color: black;">Create Post</h1></a>
				
	 </nav>
<div class="container">
	<?php while ($post = mysqli_fetch_assoc($result)) { ?>
			<div class="post">
				<h1><?php echo $post['title']; ?></h1>
				<p><?php echo $post['content']; ?></p>
				<br>
				<?php 
				echo $post['date_created'];
				?><br><br>
				<a href="update.php?id=<?php echo $post['id']; ?>">Edit</a>
				<a href="delete.php?id=<?php echo $post['id']; ?>">Delete</a>
			</div>
		<?php } ?>
	</div>
	<br><br><br>
	
</body>
</html>




