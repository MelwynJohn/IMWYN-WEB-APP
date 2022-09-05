<html>
    <head>
    <link rel="stylesheet" href="ocr.css">
    <link rel="stylesheet" href="ocrresp.css">
    </head>
<body>

<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
            <img src="#img" alt="Logo"></div>
            <li><a href="http://127.0.0.1:5500/index.html">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="ocr.php">SERVICES</a></li>
            <li><a href="file:///C:/xampp/htdocs/index.html#cont_act">CONTACT US</a></li>
        </ul>
        <div class="rightNav">
            <input type="text" name="Search" id="search">
            <button class="btn btn-small">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>







<video autoplay muted loop plays-inline class="myVideo">
  <source src="video.mp4" type="video/mp4">
</video>
<center>
<div class="text-center">
<div class="ocr-text">
    <h1>OCR Process</h1>
</div>
<form action="upload.php" method="POST" enctype="multipart/form-data" style="padding-top: 60px">
<input type="file" name="image" />
<input type="submit"/>
</form>
</div>
</center>
</body>
</html>