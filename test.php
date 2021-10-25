<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "tbb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$sql ="SELECT einsatzName FROM einsaetze";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<body>
<datalist id="einsätze">
<?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['einsatzName']; ?>"><?php echo $row['einsatzName']; ?></option>
        <?php } ?>
</datalist>
</body>
</html>