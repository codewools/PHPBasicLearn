<html>
    <head>
        <title>

        </title>
    </head>

    <body>
        <?php
        include("../../connect.php");
        include "TASK2.php";
    $id = $_GET['blogId'];
    $sql = "SELECT * FROM `post` WHERE id = $id;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();


            ?>


<div style="display:flex;padding:50px; flex-direction: column;align-items: center;">
    <h1 style="width:50%"><?php
    echo $row['main_title'];    
    ?></h1>
    <img style="width:70%;margin:20px;border-radius: 20px;" src="<?php echo $row['hero_img_url']?>" alt="">
    <div style="width:50%;line-height: 20px;">
         <h3><?php
    echo $row['main_title'];    
    ?></h3> 
    <br>
    <p><?php echo $row['para1'] ?></p>
    <br>
    <hr>
    <br>
    <p style="font-size:17px;font-style: italic;">"<?php echo $row['hero_text'] ?>"</p>
    </div>
</div>  
    </body>
</html>