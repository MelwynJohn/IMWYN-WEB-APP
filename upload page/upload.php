<html>
<head>
    <link rel="stylesheet" href="upload.css">
    </head>
<body>

<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
            <img src="#img" alt="Logo"></div>
            <li><a href="http://127.0.0.1:5500/index.html">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="ocr.php">SERVICES</a></li>
            <li><a href="http://127.0.0.1:5500/index.html#cont_act">CONTACT US</a></li>
        </ul>
        <div class="rightNav">
            <input type="text" name="Search" id="search">
            <button class="btn btn-small">Search</button>
        </div>
    </nav>



   
<?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_name);
?>



<div class="upload-text">
<h3>Image Upload Success</h3>;
</div>
<div class="text">
    <p>Uploaded Image</p>
</div>



<?php 
echo '<p style="width: 90%; border: 3px solid black; margin: 0px 65px"><img src="images/'.$file_name.'" style="width:100%"></p>';

shell_exec('"https://github.com/MelwynJohn/IMWYN-WEB-APP/blob/main/Tesseract-OCR/tesseract.exe" "C:\\xampp\\htdocs\\images\\'.$file_name.'" out');
?>
<br>
<br>
<br>
<br>

<hr width="90%" color="black" size="5px">

<br>
<br>

<div class="ext-text">
    <h2>Extracted Text</h2>
</div>

<?php
echo "<br><p style='border: 2px solid black;
text-align: center;
font-size: 25px;
width: 35%;
padding: 25px;
margin-left: 30%;'><br>";

$myfile = fopen("out.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("out.txt"));
fclose($myfile);
echo "</p>";
}
?>
</body>
</html>
