<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBIL SITE</title>
</head>
    <style> 
    .tabler{
        color: white;
        border: 3px solid;
        border-radius: 50px;
        width: 500px;
        height: 120px;
        padding-top: 50px;
        position:fixed;
        background-color: rgba(0,0,0,0.6);
    }
    .popupper{
        width:500px;
        height: 450px;
        background-color: rgba(0,0,0,0.8);
        overflow:hidden;
        position:fixed;
        top:100px;
        left:390px;    
        padding-top: 100px;
        border: 1px solid;
        border-radius: 50px;
        border-color:yellow;
    }
    input{
        margin-bottom: 40px;
        
    }
    .input2{
        margin-bottom: 0px;
        
    }
    
    </style>
    
        <body>
            <center>
            <div class="tabler">
          
            
                
                    <li onclick="showpop()" style="color:white; left:80px; font-size:50px">Создать задачу</li> 
                   
                     

                

            </div>


            





            <div class="popupper" id="popup1"> 
                
                <input type="text" name="task_name" id="task_name" style="font-size:30px; width:400px;" placeholder="Название задачи"> </input>
              
                <ul>
                    <li onclick="save_from_pop()" style="font-size:40px;left:130px;margin-top:70px">Подтвердить</li>   
                </ul>
                
                <ul>
                    <li onclick="hidepop()" style="font-size:40px;left:-75px;margin-top:200px">Отмена</li>   
                </ul>
            </div>
            </center>
        </body>

        <script src="jquery2.js"> </script>
        <script>
            document.getElementById("popup1").hidden=true;
                function showpop() {
                    document.getElementById("popup1").hidden=false; 
                    let task_name = document.getElementById("task_name").value="";
                }
                function hidepop() {
                    document.getElementById("popup1").hidden=true;
                }
                function save_from_pop() {
                    
                    let task_name = document.getElementById("task_name").value;
                   
                    $.ajax({
                        url:"second/save_task.php",
                        method:"POST",
                        data:{"task_name":task_name},
                        success:function(data){
                            document.getElementById("popup1").hidden=true;
                        }
                    });
                    
                }
           function fill(x) {
                    $.ajax({
                        url:"second/confirm_task.php",
                        method:"POST",
                        data:{"id":x},
                        success:function(data){
                            document.getElementById(x+''+x).style.backgroundColor="#ADFF2F"
                        }
                    });
           }

        </script>
        <br><br>
        <?php
            include_once "../SqlLoad.php";
            session_start();
            $id = $_SESSION["id_chel"];



            $zapros = "SELECT * FROM `user_tasks` WHERE `user_id` LIKE $id";
            $query = mysqli_query($link, $zapros);


            $count = 0;
           

            while($row = mysqli_fetch_assoc($query))
            {
                $count++;
                echo "<div></div>";
                $take_task= strval($row["task_name"]);
                $take_id_task = $row["id"];
                if($count == 1)
                { 
                    echo"<input type='text' onclick=fill($take_id_task) id='$take_id_task$take_id_task' value='$take_task' class ='input2' name='task_date' id='task_date' style='font-size:30px; width:400px;  margin-left:50px; ' readonly='readonly'> </input>";
                    echo'<input type="checkbox" onclick=fill('.$take_id_task.') id='.$take_id_task.' style="margin-left:-750px; margin-top:130px; height:20px">';
                }
                else{
                    echo"<input type='text' onclick=fill($take_id_task) id='$take_id_task$take_id_task' value='$take_task' class ='input2' name='task_date' id='task_date' style='font-size:30px; width:400px;  margin-left:50px; ' readonly='readonly'> </input>";
                    echo'<input type="checkbox"  onclick=fill('.$take_id_task.') id='.$take_id_task.' style="margin-left:-750px; margin-top:1px; height:20px">';
                }
            }
            
            //$file = fopen("test.txt","w");
            //fwrite($file, __FILE__);
        ?>


        
</html>