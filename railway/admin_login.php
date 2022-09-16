<html>

<body style=" background-image: url(snow-train.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
    <div align="center">
        <center>
            <div style="
background-image: linear-gradient(rgba(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8));
box-sizing: border-box; width: 500px; height: 500px;
box-shadow: 0 0 40px 20px rgb(0, 0, 0);
perspective: 1000px; align-items: center;
justify-content: center; font-size:20px;">
                <?php
                session_start();
                $c=0;
                foreach($_POST as $p){
                    if($p == "admin")
                        $c++;
                }
                if($c == 2){
                
                    echo " <br><a href=\"insert_into_stations.php\" style='background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px; border: 1px solid #fff;'> Show All Stations </a><br> ";
                    echo " <br><a href=\"show_trains.php\" style='border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;'> Show All Trains </a><br>";
                    echo " <br><a href=\"show_users.php\" style= 'border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;'> Show All Users </a><br> ";
                    echo " <br><a href=\"insert_into_train_3.php\" style='border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;'> Enter New Train </a><br> ";
                    echo " <br><a href=\"insert_into_classseats_3.php\" style='border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;'> Enter Train Schedule </a><br> ";
                    echo " <br><a href=\"booked.php\" style='border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;'> View all booked tickets </a><br> ";
                    echo " <br><a href=\"cancelled.php\" style='border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;'> View all cancelled tickets </a><br> ";
                

            }
            else{
                echo "    ENTERED WRONG ADMIN......  
                <div align=\"center\"  style=\"font-family: cursive; color:rgb(255, 255, 255); padding: 20px; 
        font-size: 25px; text-shadow: 1px 3px 10px rgb(0, 0, 0);\">      
                <form action=\"admin_login.php\" method=\"post\">
                User ID: <input type=\"text\" name=\"uid\" required><br>
                Password: <input type=\"password\" name=\"password\" required><br>
                <input type=\"submit\" >
                </form>
                </div>";
                    
    
            }
                ?>
                <br><a href="index.html" style="border: 1px solid #fff;background: #fff; cursor: pointer; border-radius: 20px; padding: 0 10px;">Go to Home Page!!!</a>
            </div>
        </center>
    </div>
</body>

</html>