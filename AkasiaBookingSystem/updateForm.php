<html>
<head>
 <title>Delete Date</title>
</head>
<body>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bookingcalendar";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 //get input value
 $date=$_POST['date'];
 // sql to delete a record
 $sql = "DELETE FROM booking1 WHERE date='$date'";
 if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
 }
 else {
 echo "Error deleting record: " . $conn->error;
 }
 //close connection
 $conn->close();

 echo '<p><a href="admin_page.php">Back to Main Menu</a></p>';
?>

</body>
</html>