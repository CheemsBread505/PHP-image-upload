<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <title>Cheems is based</title>
</head>
<body>

    <h2>Only upload ".png, .jpg, .gif" files</h2>
    <h3>SFW only!!!</h3>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>

    <?php

        $dirname = "uploads/";
        $images = glob($dirname."*.png");
        
        foreach($images as $image) {
            echo '<img src="'.$image.'" /><br />';
        }

        $dirname = "uploads/";
        $images = glob($dirname."*.jpg");
        
        foreach($images as $image) {
            echo '<img src="'.$image.'" /><br />';
        }

        $dirname = "uploads/";
        $images = glob($dirname."*.gif");
        
        foreach($images as $image) {
            echo '<img src="'.$image.'" /><br />';
        }
        
    ?>
</body>
</html>