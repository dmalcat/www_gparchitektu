<?php

include('conn.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM oa_images WHERE url LIKE 'http://%' ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);                            

if ($result->num_rows > 0) {                                     
    // output data of each row   
    while($row = $result->fetch_assoc()) {
$url = $row['url'];   
$id = $row['id']; 

    }
} else { 
echo "hotovo";
die();
}
$conn->close();

$time = time();


$content = file_get_contents("$url");
file_put_contents("uploads/images/$time.jpg", $content);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE oa_images SET url='$time.jpg' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
} else {
}

$conn->close();
?>

<script language="javascript">
setTimeout(function(){
   window.location.reload(1);
}, 1000);
</script>
