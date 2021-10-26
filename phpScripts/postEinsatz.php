<?php
include('../connect.php');
$servername = "localhost";
$einsatzName = $_POST['einsatzName'];
$fmzName = $_POST['fmzName'];
$sql = "INSERT INTO  `einsaetze` (einsatzName, fmzName) VALUES ('$einsatzName', '$fmzName')";
$rEinsatz= mysqli_query($conn, $sql);
if($rEinsatz)
{
	echo "<script>
             alert('Einsatz erfolgreich angelegt'); 
             window.history.go(-1);
             location.reload();
     </script>";
}
else
{
    echo "Einsatz nicht eingefügt";
}
?>