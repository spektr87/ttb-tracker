<?php
include('../connect.php');
$servername = "localhost";
$einsatzId = $_POST['einsatzId'];
$gegenstelleName = $_POST['gegenstelleName'];
$sql = "INSERT INTO  `gegenstelle` (gegenstelleName, einsatzId) VALUES ('$gegenstelleName', '$einsatzId')";
$rGegen= mysqli_query($conn, $sql);
if($rGegen)
{
	echo "<script>
             alert('Gegenstelle erfolgreich angelegt'); 
             window.history.go(-1);
             location.reload();
     </script>";
}
else
{
    echo "Gegenstelle nicht eingefügt";
}
?>