<?php
//connection
$connection = mysqli_connect('localhost', 'root', '', 'imagetaker');

if (!$connection) {
    die('Connection failed');
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['upload'])) {
            // $images = $_FILE['images'];
            // echo $images['name'];
            // Get the image and convert into string
            // Encode the image string data into base64
            $data = base64_encode($img);
            // Display the output
            echo $data;
        }
    }
}
?>

<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="images">
    <button type="submit" class="btnStyle" name="upload"> Upload</button>
</form>