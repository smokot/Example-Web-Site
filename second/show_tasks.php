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
        height: 220px;
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
    
    </style>
    
        <body>
            <center>


            





            <div class="popupper" id="popup2"> 
                
                
                <ul>
                    <li onclick="save_from_pop()" style="font-size:40px;left:130px;margin-top:70px">Подтвердить</li>   
                </ul>
                
                <ul>
                    <li onclick="hidepop()" style="font-size:40px;left:-75px;margin-top:200px">Отмаена</li>   
                </ul>
            </div>
            </center>
        </body>

        <script src="jquery2.js"> </script>
        <script>

                function hidepop() {
                    document.getElementById("popup2").hidden=true;
                }


        </script>
        
</html>