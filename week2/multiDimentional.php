<html>
    <head><title>

    </title>


</head>


<body>
    <?php

// 2d array example ;
$array = [
    [1,2,3,4,5],
    [1,2,3,14,5]

];

for ($i = 0 ; $i<count($array); $i++){
    for( $j = 0; $j<count($array[$i]);$j++)
    { ?>
        <span> <?php echo " ".$array[$i][$j]."";?></span>
        <?php 
    }
echo "<br>";

}
 


// 3d array 

$array3d = [
   23=> [
        [1,2,3],
        [1,6,3],
        [1,2,3]
    ],
  1=>  [
        [1,2,3],
        [1,8,3],
        [1,2,3]
    ]
    ];
?>

    <?php
foreach ($array3d[23] as $row) {
    echo "<h1>" . implode(', ', $row) . "</h1>";
}

print_r($array3d[23]);

?>



    
</body>
</html>