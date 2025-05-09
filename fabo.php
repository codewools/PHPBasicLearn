<html>

<head>
    <title>Fabonanci</title>
</head>
<style>
   .btn:hover{
    background-color: #FBDB93;
    color:black;
    transition: 0.3s;
   }
</style>
<body>
    <?php include 'index.php' ;
    
    ?>

    <div style="background:#27548A;padding:10px;border-radius:20px;width:50%">
        <h1 style="color:white">
            Wellcome to Fabonanci Series
        </h1>
        <div style="margin:10px;">
            <form style="display:flex;flex-direction:row;gap:5px"action="fabo.php" method="post">
                <input style="border:none;flex:2;padding:5px;border-radius:10px;height:40px"name="target" id="faboValue"placeholder="defualt 5" type="text" style="font-size:20px;width:100%;padding:10px"
                    placeholder="Enter Single Number" />
                <input class="btn"style="flex:1;padding:5px;border:none;border-radius:10px;height:40px;cursor:pointer;"type="submit">
            </form>
            <?php
            if (isset($_POST['target'])) {
                $target = intval(   $_POST['target']);
            }

            ?>

            </form>
            <button class="btn"onclick="showDetails()" style="border:none; flex:1;padding:5px;border-radius:10px;height:40px;cursor:pointer;">
            Show Details >>
        </button>
        </div>
       
        
        <div id="show"style="display:none; flex-direction:row; padding:10px; color:white;background:#183B4E;border-radius:10px;margin:10px;flex-wrap:wrap;">
            <?php


            $pre1 = 0;
            $pre2 = 1;
            #sum 
            $sum =0;
             
            echo '<h1 style="padding:10px">' . $pre1 . " " . $pre2 . '</h1>';
            for ($i = 2; $i < ($target??5); $i++) {
                ?>
                <h1 style="padding:10px;"> <?php
                $fabo = $pre1 + $pre2;
                echo "" . $fabo . "";

                $pre1 = $pre2;
                $pre2 = $fabo;
                $sum =  $pre1 +$pre2
                ?></h1>

            <?php
            } ?>
        
        </div>
        <div style="padding:10px;margin:10px;background:#183B4E;border-radius:10px;">
        <h1 style="color:white">Fibonacci Sum is : <?php
       
        echo $sum ;
        ?></h1>
        </div>
    </div>
    
<script>
    function showDetails()
    {
        let doc = document.getElementById("show");
        if(doc.style.display==="none")
    {
        doc.style.display="flex";
        
    }
    else{
        doc.style.display="none";
         
    }
    }
</script>
</body>

</html>