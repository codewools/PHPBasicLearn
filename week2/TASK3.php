<?php

// var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);
    $select = $_POST['intrest'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    $ar = "$select,$fullname,$email ";
    var_dump($ar);
    $file = fopen('contactData.txt', 'a');
    fwrite($file, $ar);
    header('Location: http://localhost/php-basic/week2/TASK3.php');


}

?>

<?php

$filename = 'contactData.txt';
if ($filename) {
    $contents = file_get_contents($filename); // Read content as string
    $entries = explode(" ", $contents); // Split by space

    foreach ($entries as $e) {
        echo $e . "<br>";
    }


}
?>



<html>

<head>
    <title></title>
</head>

<body>
    <?php

    ?>
    <h1>Files handling with short form </h1>
    <form action="TASK3.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" />
        <input type="file" name="upload" />
        <input type="submit" name="btn" />


        <?php

        $filename = 'contactData.txt';
        if ($filename) {
            $contents = file_get_contents($filename); 
            $entries = explode(" ", $contents); 
        
            foreach ($entries as $e) {
                echo $e . "<br>";
            }   

        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_name = $_POST['name'];

            $tmp = $_FILES['upload']['tmp_name'];
            $name = $_FILES['upload']['name'];
            $path = '../functions/' . $name;
            $imageFileType = strtolower(pathinfo($name, PATHINFO_EXTENSION));

            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                echo "Your file is " . $name;
                echo "Your name is too long";

            } else {
                if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {

                    
                    move_uploaded_file($tmp, "../functions/" . $name);
                    echo "File uploaded successfully!, ";
                    echo " <br>" . (($_FILES['upload']['size']) / 1024) . " Kb";
                    echo " <br>" . pathinfo($name, PATHINFO_BASENAME);
                    echo " <br>" . pathinfo($name, PATHINFO_EXTENSION);
                    echo " <br>" . round((filesize($path) / 1024) / 1024, 2), " Mb <br>";
                    if (strlen($user_name) <= 10)
                        echo "user Name:  " . trim(stripslashes(htmlspecialchars($user_name)));
                    echo " <br><img src='$path' width='300'";
                } else {
                    echo "File upload failed!";
                }
            }


        }
        ?>

    </form>
</body>

</html>