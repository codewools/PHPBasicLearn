<html><head>
  <style>
    .card{
      
    }
  .card:hover img {
   
}

.card:hover h3 {
   

}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:15px;
}
    p{
      font-size: 16px;
    }
    img{
      margin-bottom: 10px;
      overflow: hidden;
      object-fit: fill;
      width:100%;
      height: 200px;
      
    }
    a{
      text-decoration: none;
       color:black;
    }
  </style>
</head></html>


<?php
include "../../connect.php";
include "TASK2.php";
session_start();
$sql = 'SELECT * FROM `post`;';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
?>
<div style="display: flex;flex-direction: row;flex-wrap: wrap; margin-top:20px;justify-content: center;align-items: center;">
<table>
<tr>
    <th>#Id</th>
    <th>Title</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
<?php 
    $sql = 'DELETE FROM `post` WHERE id = 0';
  while($row = $result->fetch_assoc()) {
    ?>

    <div class="card">
        
     <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['main_title'] ?></td>
    <td style="text-align: center;"><a style="color:green;font-size:20px" href="updateblog.php?blogId=<?php echo $row['id'] ?>">&#10227</a></td>
    <td style="text-align: center;"><a style="color:red;font-size:20px" href="deletescript.php?blogId=<?php echo $row['id'] ?>">&#128465</a></td>
  </tr>
  
    </div>
    <?php
  }
  ?>
  </table>
  </div>
  <?php
} else {
  echo "0 results";
}

 


?>  