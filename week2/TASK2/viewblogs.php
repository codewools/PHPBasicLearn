<html><head>
  <style>
    .card{
      height: 350px;
      width:20%;
      display: flex;
       flex-direction: column;
      margin:5px;
     
      border-radius: 10px;
justify-content: center;
align-items: center;
    }
  .card:hover img {
  opacity: 0.8;
  cursor: pointer;
}

.card:hover h3 {
  text-decoration: underline;
  cursor: pointer;

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
<?php 
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="card">
      <a href="blogDetails.php?blogId=<?php echo $row['id'] ?>">
          <img src="<?php echo $row['hero_img_url']?>" alt="">
          <h3><?php echo $row['main_title']?></h3>
          <p><?php echo substr($row['para1'],0,120).'...'?></p>
          </a>
    </div>
    <?php
  }
  ?>
  </div>
  <?php
} else {
  echo "0 results";
}


// class Mycar
// {
//   public $carmodel ;
//   public function __construct($model)
// {
//   $this->carmodel = $model; 
// }

// function getModel():string {
// return $this->carmodel;
// }

// }

// $car = new Mycar("CIVIX");

// echo $car->getModel();



?>  