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
$id = $_GET['id'];
$id = stripslashes ($id);
$id = mysqli_real_escape_string($conn, $id);
$id = (int) filter_var($id, FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM news where id = " . $id  ;
$result = $conn->query($sql);

if(!$result){
	header('location:error.php');
};

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($result as $data) { ?>
		<h3>article name:<?php echo $data['article']; ?></h3>
		<h3>Description: <?php echo $data['short_description']; ?> </h3>

<?php } ?>

</body>
</html>