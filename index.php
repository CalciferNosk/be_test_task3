<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "be_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM news";
$result = $conn->query($sql);




?>
<!DOCTYPE html>
<html>
<head>
	<title>task3</title>
</head>
<body>
	<form method="post" action="search.php">
		<input type="text" name="id" placeholder="search id">
		<button type="submit" name="search">search</button>
	</form>
	<h2>list of the article</h2>
	<h3>click article to see the description</h3>
<?php foreach ($result as $data) { ?>
<a href="article.php?id= <?php echo $data['id']?>">article <?php echo $data['id']?> </a><br>

<?php } ?>
</body>
</html>