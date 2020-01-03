<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formula 1 | Upload</title>
    <link rel="icon" type="image/png" href="static/racing-flag.png">
    <link rel="stylesheet" href="static/style.css">
    <script src="static/darkmode.js"></script>
</head>
<body>
    <header>
        <img src="static/f1.svg" alt="logo">
    </header>
    <nav>
        <a href="index.html">Home</a>
        <div class="dropdown active">
            <span>Drivers</span>
            <div class="dropdown-content">
            <a href="static/driverinfo.html">Driver Information</a>
            <a href="gallery_view.php">Driver Gallery</a>
            <a href="upload_form.php">Upload Your Files</a>
            </div>
        </div>
        <a href="static/teams.html">Teams</a>
        <a href="static/signup.html">Sign Up</a>
    </nav>
    <div class="content" id="content-dark">
        <div class="paragraph" id="para-dark">
        <h2 class="h2dark">Upload Your Own Image!</h2>
            <form action="/upload.php" method="POST" enctype="multipart/form-data" class="formbox">
                <div class="row">
                    <div class="fcol-25">
                      <label for="name">Watermark:</label>
                    </div>
                    <div class="fcol-75">
                        <input type="text" name="watermark" required>
                    </div>
                </div>
                <div class="row">
                    <div class="fcol-25">
                      <label for="name">File:</label>
                    </div>
                    <div class="fcol-75">
                        <input type="file" name="image" required>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Upload">
                </div>
                      
                <!-- Title: <input type="text" name="title" required><br/>
                Author: <input type="text" name="author" required><br/> 
                Water mark: <input type="text" name="watermark" required><br/>
                <input type="file" name="image" required>
                <input type="submit" name="submit" value="Upload"> -->
            </form>
        </div>
    </div>
    <footer id="footer">
        
        <p>WAI Project 2019 - made by Marcel Bieniek</p>
        <p>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik" target="_blank">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a></p>
        <p>Logo By Liberty Media - Own work, Public Domain, <a href="https://commons.wikimedia.org/w/index.php?curid=67670446" target="_blank">Link</a></p>
    </footer>
</body>
</html>