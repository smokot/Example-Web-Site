<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBIL SITE</title>
    <link rel="stylesheet" href="../styles.css">
</head>

        <body>
        <nav role="navigation">
                <ul>
                
                    <li><a href="#" style="font-size:30px">Аккаунт</a>
                    <ul class="dropdown">
                        <li><a href="../personal_page.php" style="font-size:30px">Вернуться домой</a></li>   
                        <li><a href="../second/logout.php" style="font-size:30px">Выход</a></li>
                    </ul>
                    </li>
                   
                </ul>
                </nav>
        <br><br><br><br><br><br><br><br><br><br>
        <style>
            .leftTo{

                padding-left: 90%;
            }
            .leftTo2{

            padding-left: 110px;
            }
            a {
            text-decoration: none;
            }

            nav {
            font-family: monospace;
            }

            ul {
            background: darkorange;
            list-style: none;
            margin: 0;
            padding-left: 0;
            }

            li {
            color: #fff;
            background: darkorange;
            display: block;
            float: left;
            padding: 1rem;
            position: relative;
            text-decoration: none;
            transition-duration: 0.5s;
            }
            
            li a {
            color: #fff;
            }

            li:hover {
            background: red;
            cursor: pointer;
            }

            ul li ul {
            background: orange;
            visibility: hidden;
            opacity: 0;
            min-width: 5rem;
            position: absolute;
            transition: all 0.5s ease;
            margin-top: 1rem;
            left: 0;
            display: none;
            }

            ul li:hover > ul,
            ul li ul:hover {
            visibility: visible;
            opacity: 1;
            display: block;
            }

            ul li ul li {
            clear: both;
            width: 100%;
            }

            .gradient-button {
            text-decoration: none;
            display: inline-block;
            color: white;
            padding: 0px 10px;
            margin: 10px 20px;
            border-radius: 30px;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-image: linear-gradient(to right, #9EEFE1 0%, #4830F0 51%, #9EEFE1 100%);
            background-size: 200% auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, .1);
            transition: .5s;
            }
            .gradient-button:hover {
            background-position: right center;
            }
        </style>
        <script>
            function showPass(){
                if(document.getElementById("password").type == "password"){
                    document.getElementById("password").type = "text";
                }
                else{
                    document.getElementById("password").type = "password";
                }
            }

            var c = document.getElementById("myCanvas");
                    var ctx = c.getContext("2d");
                    ctx.moveTo(0,0);
                    ctx.lineTo(200,100);
                   
           

        </script>

        
       <center>
       <form method="POST" action="updateData.php" id="updateData">     
       <input type="hidden" placeholder="id" name="ider" id="ider" style="font-size:50px" required> </input>    

            <input type="text" placeholder="name" name="name" id="name" style="font-size:50px" required> </input>

            <br><br>

            <input type="text" placeholder="login" name="login" id="login" style="font-size:50px" required> </input>
            
            <br><br>
            <div class="leftTo2">
            <input type="password" placeholder="password" name="password" id="password" style="font-size:50px; padding-left:0px" required> </input>
        </form>      
            <a class="gradient-button" onclick="showPass()">

                <img src="../photos/eye.png" width="40px" height="40px">

        </a>
            </div>
                <?
                    session_start();

                    include_once "SqlLoad.php";
  
                    $ider = $_SESSION["id_chel"];
                    $active = $_SESSION["active"];
                    if($active == 0){
                        header("Location:../index.html");
                        exit;
                    }
                    

                    $name = $_SESSION["name"];
                    $loginer = $_SESSION["loginer"];
                    $passworder = $_SESSION["passworder"];
                    
                    echo "<script>document.getElementById('ider').value = '$ider'; </script>";
                    echo "<script>document.getElementById('name').value = '$name'; </script>";
                    echo "<script>document.getElementById('login').value = '$loginer'; </script>";
                    echo "<script>document.getElementById('password').value = '$passworder'; </script>";

    
                ?>
        <button type="submit" class="gradient-button" style="font-size:50px" form="updateData">

            Обновить данные
        </button>
              
                    


        </body>
</html>