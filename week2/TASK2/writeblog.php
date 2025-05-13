<?php
include "../../connect.php";

include "TASK2.php";

echo"<br><br><br>";

if(isset($_POST['submit'])){
    $title =mysqli_real_escape_string($conn,htmlspecialchars(stripslashes( $_POST['title']))) ;
    $para1 =mysqli_real_escape_string($conn,htmlspecialchars(stripslashes( $_POST['para1']))) ;
    $hero_text =mysqli_real_escape_string($conn,htmlspecialchars(stripslashes( $_POST['hero_text']))) ;
   
    echo $title;
    $tmp = $_FILES['hero_image']['tmp_name'];
    $name = $_FILES['hero_image']['name'];
    $path = 'upload/'. $name;
    
    $ext= pathinfo($path,PATHINFO_EXTENSION);
    echo $ext;
    if($ext !== 'png'&&$ext !== 'jpeg'&&$ext !== 'jpg')
    {
        echo 'Please Upload Files in png, jpeg, jpg';
    }
    else{
        move_uploaded_file($tmp,$path);
        $sql = "INSERT INTO `post` (`main_title`,`hero_img_url`,`para1`,`hero_text`) VALUES ('$title','$path','$para1','$hero_text'); ";
    if ($conn->query($sql) === TRUE) {
        // Redirect to the same page or another page
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
    
}
?>

<html>
    <head>
        <title>BLOG POSTS</title>
        <link rel="stylesheet" href="styleblog.css">
    </head>
    <body>
        <div style="display:flex;justify-content: center;">
            <form action="writeblog.php" method="post" enctype="multipart/form-data">
                <input type="text" required name="title" />
                <input type="file" required  name="hero_image"/><br>
                <label>Write a Paragraph for Blog</label><br>
                 <textarea name="para1" required  rows="10" cols="80"></textarea><br>
                <label>Write a Hero Paragraph for Blog</label><br>

                 <textarea name="hero_text" rows="10" cols="80"></textarea>
                <input type="submit" name="submit"/>   
            </form>
        </div>
        
    </body>
</html>




<?php

$std = [
    ["name"=>"Hamza"],
    ["name"=>"Usama"],
    ["name"=>"Ali"],
];
//reference
$data = &$std;
foreach( $data as $s ) 
    {
        echo $s[&$s].'<br>';
    }


?>