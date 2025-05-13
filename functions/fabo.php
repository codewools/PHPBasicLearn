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
    <html>
    <head>
        <title>Tasks</title>
</head><style>
    .nav-content{
        padding:10px ; cursor:pointer;
        font-size: 25px;
        background-color: #183B4E;
        border-radius: 20px;
        
    }
    .nav-content:hover{
        transition: 0.5s ;
        background-color:#27548A;

    }
    .nav{
        text-decoration:none; padding:20px;margin:10px;color:white;
        background-color: #FBDB93;
        border-radius: 20px;
         
       
    }
    a{
        text-decoration: none;
        color:white;
    }
</style>
<body style="background-color:#183B4E; display: flex;flex-direction:column;align-items:center; justify-content: center; padding-top: 50px;">

<div>

<nav style="" class="nav">
<a href="http://localhost/php-basic/calculator.php"><span  class="nav-content">Calculator</span></a>
<a href="http://localhost/php-basic/fabo.php"><span  class="nav-content">Fabo Task</span></a>
<a href="http://localhost/php-basic/useable.php"><span  class="nav-content">Functions</span></a>

</nav>
   <br> 
</div>

</body>
</html>    <div style="background:#27548A;padding:10px;border-radius:20px;width:50%">
        <h1 style="color:white">
            Wellcome to Fabonanci Series
        </h1>
        <div style="margin:10px;">
            <form style="display:flex;flex-direction:row;gap:5px"action="fabo.php" method="post">
                <input style="border:none;flex:2;padding:5px;border-radius:10px;height:40px"name="target" id="faboValue"placeholder="defualt 5" type="text" style="font-size:20px;width:100%;padding:10px"
                    placeholder="Enter Single Number" />
                <input class="btn"style="flex:1;padding:5px;border:none;border-radius:10px;height:40px;cursor:pointer;"type="submit">
            </form>
            
            </form>
            <button class="btn"onclick="showDetails()" style="border:none; flex:1;padding:5px;border-radius:10px;height:40px;cursor:pointer;">
            Show Details >>
        </button>
        </div>
       
        
        <div id="show"style="display:none; flex-direction:row; padding:10px; color:white;background:#183B4E;border-radius:10px;margin:10px;flex-wrap:wrap;">
            <h1 style="padding:10px">0 1</h1>                <h1 style="padding:10px;"> 1</h1>

                            <h1 style="padding:10px;"> 2</h1>

                            <h1 style="padding:10px;"> 3</h1>

                    
        </div>
        <div style="padding:10px;margin:10px;background:#183B4E;border-radius:10px;">
        <h1 style="color:white">Fibonacci Sum is : 5</h1>
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