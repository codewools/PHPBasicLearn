<!DOCTYPE html>
<html>
<head>
  <title>PHP Calculator</title>
  <style>
   
    .screen{
        color:white;
        background:rgb(61, 54, 90);
        padding:20px;
        border-radius:20px;
        font-size: 30px;
        margin:10px;
        height: 30px;

    }
    .red{
        color:red;
        background-color: #183B4E;
    }
    .btn{
        cursor:pointer;
        font-size: 20px;
        width: 80px;
        height: 80px;
        margin: 2px;
        text-decoration: bold;
        border-radius: 50px;
        border:none;
    }
    </style>
</head>
<body>
<?php include 'index.php'; 
  include 'connect.php';
  
?>
  <div style="background:#27548A;padding:20px;border-radius:20px; display:flex;flex-direction:column;min-width:300px;max-width:350px;min-height:250px">
      
    <div class="screen" id="resultDisplay">0</div>



    <!-- calculator design -->
    <div style="display: flex;">
      <div style="flex: 2;">
        <?php
        $buttons = ["AC", "%", "C", "7", "8", "9", "4", "5", "6", "1", "2", "3", ".", "0", "="];
        special( $buttons);
        


         ?>
      </div>
      <div style="display: flex;flex-direction:column;">
        <?php
        
        function special($expressions)
        {
            foreach ($expressions as $expression) { 
                $changeColorCreateClass   = ($expression ==="=") ? "red":"white";
                echo "<button class='btn exp $changeColorCreateClass' onclick='handleClick(\"$expression\")'>$expression</button>";
                }
        } 
        $expressions = ["+","-","*","/","**"];
        special($expressions);
        ?>
      </div>
    </div>














  </div>

  













<script>
    let result = "";
    let expression = "";

function getCurrentValue()
{
    
}
    function handleClick(exp) {

if(exp ==="="){
    
        result = eval(expression);
        expression='';
        
        console.log();
        document.getElementById("resultDisplay").innerHTML = expression  || result;

    }

    else if(exp ==="AC")
    {
        result = "";
        expression="";
        document.getElementById("resultDisplay").innerHTML = expression  || result;

    }
    else if(exp ==="C")
    {
         
        expression =  expression.slice(0,-1) ;
        document.getElementById("resultDisplay").innerHTML = expression  || result;

    }
       else{

        expression +=exp; 
        document.getElementById("resultDisplay").innerHTML = expression  || result;

        
       }
       

      }  
</script>
</body>
</html>
