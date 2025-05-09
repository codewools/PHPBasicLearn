<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="functions.css">

</head>

<body>
    <div class="card" style="">
        <h1 style="color: aliceblue;">Find Min Max</h1>
        <form class="form"method="post" action="useable.php">
            <input class="input" type="number" required name="number1" placeholder="10" />
            <input class="input" type="number" required name="number2" placeholder="20" />
            <input class="btn" type="submit" />
        </for>

        <!-- minmax  -->
        <h2 style="color: aliceblue;">
        <?php
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $num1 = ($_POST["number1"] ?? 0);
    $num2 = ($_POST["number2"] ?? 0);

    if ($num1 > $num2) {
        echo $num1 . ' is the larger number';
    } else if ($num1 < $num2) {
        echo $num2 . ' is the larger number';
    } else {
        echo "Both numbers are equal";
    }
}
?>

        </h2>
    </div>
</body>

</html>