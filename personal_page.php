<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBIL SITE</title>
    <link rel="stylesheet" href="styles.css">
</head>

        <body>
        <style>
            .leftTo{

                padding-left: 83%;
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

            
        </style>
        <div class="leftTo">
       
        
        <br>
            <?
                session_start();

                $active = $_SESSION["active"];
                if($active == 0){
                    header("Location:index.html");
                    exit;
                }
                
                


                include_once "SqlLoad.php";
                $take_id = $_SESSION['id_chel'];
                $query = mysqli_query($link,"SELECT * FROM `user_data` WHERE id = $take_id");

                $row = mysqli_fetch_assoc($query);
                $take_log = $row["login_"];
                

               
                
                $loginer = $_SESSION["loginer"];
                $passworder = $_SESSION["passworder"];

               


            
   
            ?>
                <nav role="navigation">
                <ul>
                
                    <li><a href="#" style="font-size:30px">Аккаунт</a>
                    <ul class="dropdown">
                        <li><a href="second/settings.php" style="font-size:30px">Настройки</a></li>   
                        <li><a href="second/music.php" style="font-size:30px">Музыка</a></li>
                        <li><a href="second/tech/HTML.html" style="font-size:30px">HTML</a></li>
                        <!--<li><a href="second/tech/C++.html" style="font-size:30px">C++</a></li><!-->
                        <li><a href="second/logout.php" style="font-size:30px">Выход</a></li>
                    </ul>
                    </li>
                   
                </ul>
                </nav>
            </div>
                
                <?php
                    include_once "second/tasks.php";
                ?>
            

            <script>
                    function func()
                    {
                        alert(123);
                    }
                    
                    

                </script>

        </body>
</html>