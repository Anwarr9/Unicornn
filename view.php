<?php

$connection = mysqli_connect('localhost', 'root', '', 'unicorn');
//check if the database not connected
if (!$connection) {
    echo "database connection error";
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <mate charest="UTF-8">
        <title>UNICORN</title>
        <link rel="stylesheet" href="style.css">
        <script language="JavaScript">
            function showClickTime() {
                var Digital = new Date()
                var hours = Digital.getHours()
                var minutes = Digital.getMinutes()
                var seconds = Digital.getSeconds()
                var clockd = "AM"

                if (hours > 12) {
                    clockd = "PM"
                    hours = hours - 12
                }
                if (hours == 0)
                    hours = 12
                if (minutes <= 9)
                    minutes = "0" + minutes
                if (seconds <= 9)
                    seconds = "0" + seconds
                var clocktime = hours + ":" + minutes + ":" + seconds + " " + clockd
                clockSpan.innerHTML = "<b style='font-size:12;color:white;'>" + clocktime + "</b>"
                setTimeout("showClickTime()", 1000)
            }
            window.onload = showClickTime;
        </script>
</head>

<body background="https://www.ralentirtravaux.com/images/mercure-confiant-bacchus.jpg">

    <center><img Src="https://logo-maker-api.s3.us-west-2.amazonaws.com/projects/5fbc470caf08f00d75728786/thumbnail.png?AWSAccessKeyId=AKIA6LFXYJ6BXG4EKM6A&Expires=1606509888&Signature=dNUm0GqFy4Mpu8PdpzitJ7n36UQ%3D" height="150" width="150" alt="logo"></center>
    <span id=clockSpan></span>
    <div class="container">
        <nav style="margin-top:15px">
            <ul>
                <li><a href="add.php">اضافة اساطير</a></li>
                <li><a href="">حول</a></li>

                <li><a href="">الأساطير</a></li>

                <li><a href="home.php">الرئيسية</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main-text">
            <h1 class="text"><?php echo $_GET['name'] ?></h1>
        </div>
    </div>
    </div>
    <?php
    if ($_GET['name'] == 'العربية') {

        $get = mysqli_query($connection, "SELECT * FROM legends where name='العربية'");

        $legend = mysqli_fetch_array($get);
    ?>
        <div class="cards" style="text-align: center;">
            <div class="card" style="width:600px">
                <div class="photo">
                    <img Src="https://pbs.twimg.com/profile_images/2417929642/t5vjvvjrh1ahcx8douze_400x400.jpeg" height="250" width="300" alt="العنقاء" class="card-img">
                </div>
                <div class="cards-text">
                    <h3> <?php echo   $legend['title']  ?></h3>
                    <p><?php echo  $legend['description']  ?></p>
                </div>
            </div>
        </div>

    <?php

    } elseif ($_GET['name'] == 'اليابانية') {
        $get = mysqli_query($connection, "SELECT * FROM legends where name='اليابانية'");
        $legend = mysqli_fetch_array($get);
    ?>

        <div class="cards" style="text-align: center;">
            <div class="card" style="width:600px">
                <div class="photo">
                    <img Src="japan.jpg" height="250" width="300" alt="الاعمدة البشرية" class="card-img">
                </div>
                <div class="cards-text">
                    <h3> <?php echo   $legend['title']  ?></h3>
                    <p><?php echo  $legend['description']  ?></p>
                </div>
            </div>

        </div>
    <?php
    } elseif ($_GET['name'] == 'اليونانية') {
        $get = mysqli_query($connection, "SELECT * FROM legends where name='اليونانية'");
        $legend = mysqli_fetch_array($get);
    ?>

        <div class="cards" style="text-align: center;">

            <div class="card" style="width:600px">
                <div class="photo">
                    <img Src="download.jpeg" height="250" width="300" alt="unicorn  " class="card-img">
                </div>
                <div class="cards-text">
                    <h3> <?php echo   $legend['title']  ?></h3>
                    <p><?php echo  $legend['description']  ?></p>
                </div>
            </div>
        </div>



    <?php
    } elseif ($_GET['name'] == 'الصينية') {
        $get = mysqli_query($connection, "SELECT * FROM legends where name='الصينية'");
        $legend = mysqli_fetch_array($get);
    ?>
        <div class="cards" style="text-align: center;">

            <div class="card" style="width:600px">
                <div class="photo">
                    <img Src="chineese.jpeg" height="250" width="300" alt=" جيش التيراكوتا الصيني" class="card-img">
                </div>
                <div class="cards-text">
                    <h3> <?php echo   $legend['title']  ?></h3>
                    <p><?php echo  $legend['description']  ?></p>
                </div>
            </div>
        </div>




    <?php
    } elseif ($_GET['name'] == 'الايرلنديه') {
        $get = mysqli_query($connection, "SELECT * FROM legends where name='الايرلنديه'");
        $legend = mysqli_fetch_array($get);
    ?>


        <div class="cards" style="text-align: center;">

            <div class="card" style="width:600px">
                <div class="photo">
                    <img Src="https://img.soutalomma.com/ArticleImgs/2017/5/27/538278-%D8%B3%D8%AD%D8%B1-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%B9%D8%A9-%D9%81%D9%8A-%D8%A3%D9%8A%D8%B1%D9%84%D9%86%D8%AF%D9%8A%D8%A9.jpg" height="250" width="300" alt="أسطورة الخروف الأسود" class="card-img">
                </div>
                <div class="cards-text">
                    <h3> <?php echo   $legend['title']  ?></h3>
                    <p><?php echo  $legend['description']  ?></p>
                </div>
            </div>
        </div>
    <?php
    } elseif ($_GET['name'] == 'الفرعونية') {
        $get = mysqli_query($connection, "SELECT * FROM legends where name='الفرعونية'");
        $legend = mysqli_fetch_array($get);
    ?>

        <div class="cards" style="text-align: center;">

            <div class="card" style="width:600px">
                <div class="photo">
                    <img Src="pharnoic.jpeg" height="250" width="300" alt="عروس النيل" class="card-img">
                </div>
                <div class="cards-text">
                    <h3> <?php echo   $legend['title']  ?></h3>
                    <p><?php echo  $legend['description']  ?></p>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</body>

</html>