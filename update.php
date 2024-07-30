<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit;
}
?>

<html>
<head>
	<title>Update Post</title>
</head>
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
		.post h2 {
			font-weight: bold;
		}
		.post p {
			margin-bottom: 20px;
		}
	</style>
<body>
	<div class="container">
	<h1>Update Post</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label for="title">Title:</label>
		<input type="text" name="title" required><br><br>
		<label for="content">Content:</label>
		<textarea name="content" required></textarea><br><br>
		
		<input type="submit" value="Update Post">
	</form>
	<a href="index.php">No, go back</a>
	</div>
</body>
</html>

<?php
mysqli_close($conn);
?>

