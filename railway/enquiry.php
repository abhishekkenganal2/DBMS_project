<html>

<body style=" background-image: url(snow-train.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;">

    <?php

    session_start();
    $_SESSION = array();
    session_destroy();

    ?>
    <center>
        <div class="card">
            <form action="enquiry_result.php" method="post" style=" align-items: center; 
            background-image: linear-gradient(rgba(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8)); box-sizing: border-box;
            width: 300px; height: 400px; 
            box-shadow: 0 0 40px 20px rgb(0,0,0);
            perspective: 1000px; padding: 40px;">

                Starting Point: <select id="sp" name="sp" required>

                    <?php

                    require "db.php";

                    $cdquery = "SELECT sname FROM station";
                    $cdresult = mysqli_query($conn, $cdquery);


                    echo " <option value = \"\" >
                            
                        </option>";

                    while ($cdrow = mysqli_fetch_array($cdresult)) {
                        $cdTitle = $cdrow['sname'];

                        echo " <option value = \"$cdTitle\" >
                            $cdTitle
                        </option>";
                    }
                    ?>

                </select>
                <br><br>

                Destination Point: <select id="dp" name="dp" required>

                    <?php

                    require "db.php";

                    $cdquery = "SELECT sname FROM station";
                    $cdresult = mysqli_query($conn, $cdquery);

                    echo " <option value = \"\" >
                            
                        </option>";

                    while ($cdrow = mysqli_fetch_array($cdresult)) {
                        $cdTitle = $cdrow['sname'];

                        echo " <option value = \"$cdTitle\" >
                            $cdTitle
                        </option>";
                    }
                    ?>

                </select>
                <br><br>

                Date of Journey: <input type="date" name="doj" required><br>
                <input type="submit" style="width: 100%; background: transparent; border: 1px solid #fff;
                        margin: 35px 0 10px; height: 32px;  font-size: 18px;
                        border-radius: 20px; padding: 0 10px; box-sizing: border-box;
                        outline: none;  color: #fff; cursor: pointer;">
                <br><br>
                <h3 style="background-color:whitesmoke; padding:5px; border-radius: 20px;"><a href="index.html">Home Page</a></h3>
            </form>
        </div>
    </center>
</body>

</html>