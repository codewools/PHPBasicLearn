<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="functions.css">

</head>

<body>
    <div class="card" style="">
        <h1 style="color: aliceblue;">isEven</h1>
        <form  class="form"method="post" action="useable.php">
            <input class="input" type="number" required name="isEven" placeholder="0" />
            <input class="btn" type="submit" />
        </form>

        <!-- isEven(number) -->
        <h2 style="color: aliceblue;">
        <?php
        require 'greet.php';
     if(isset($_POST['isEven'])){
            $number = $_POST["isEven"];
           # echo var_dump($number);
        
        function isEven($number): string
        {
            echo greet("Hamza")."<br>";

            return $number % 2 == 0 ? "$number is Even Number " : "$number is Odd Number";
        }

        if(strlen(($number??0)) >5){
            echo"number should less than 5 characters";
           
        }       
        else
        echo isEven((intval($number) ));
     }


     $a = 10;
     function sum(&$num)
     {
        echo  $num =$num +5;
     }
    //  summ$a);
    sum($a);
     
     echo $a;
        ?>
        </h2>


        <?php
        
        ?>
    </div>
</body>

</html>