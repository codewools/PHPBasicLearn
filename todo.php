<html>
    <head>
        <title>TO Do List</title>
        <link rel="stylesheet" type="text/css" href="functions.css">
    </head>
    <body>
    <?php include("index.php"); ?>    

    <div style="width:50%; min-height:100px; max-height:250px; background:#27548A; padding:20px;">
        
        <input class="input" style="padding:15px;" type="text" required name="task" placeholder="Task1: HomeWork" />
        <input class="btn" type="button" onclick="addTask()" value="Add"/>

        <ul id="list" style="margin-top:20px; color:white;"></ul>

        <script>
             let list = document.getElementById("list");

            function addTask() {
                let doc = document.getElementsByClassName("input")[0].value;

                 const li = document.createElement("li");
                    li.textContent = doc;
                    list.appendChild(li);

                    document.getElementsByClassName("input")[0].value = "";
                 
            }
        </script>
    </div>
    </body>
</html>
