<?php

$connection = mysqli_connect('localhost', 'root', '', 'unicorn');
//check if the database not connected
if (!$connection) {
    echo "database connection error";
}

?>

<!DOCTYPE html>

<html lang="en">
<meta charest="UTF-8">

<head>
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
    <span style="text-align:center" id=clockSpan></span>

    <div class="container">

        <form target="_blank" method='GET' action="http://www.google.com/search">
            <input TYPE=text name=q size=22 maxlength=255 value="">
            <input type=hidden name=ie value=windows-1256>
            <input type=hidden name=oe value=windows-1256>
            <input type=submit name=btnG VALUE="Google Search">
        </form>

        <nav style="margin-top:15px">
            <ul>
                <li><a href="add.php">اضافة اساطير</a></li>
                <li><a href="">حول</a></li>

                <li><a href="">الأساطير</a></li>

                <li><a href="home">الرئيسية</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main-text">
            <h2 class="text">علم الأساطير علم يبحث في مجموعة الأساطير المعروفة والشائعة لدى شَعْب من الشعوب وخاصّة الأساطير المتعلِّقة بالآلهة والأبطال الخرافيِّين عند شعب ما</h2>
        </div>
    </div>
    </div>
    <div class="card">
        <div class="photo">
            <img Src="https://www.presstetouan.com/imagesnews/14591586491.JPG" height="250" width="300" alt="الأساطير العربية" class="card-img ">
        </div>
        <?php
        //get data from legend table  where the name of the legend is arabic
        $arabic_legend = mysqli_query($connection, "SELECT * FROM legends WHERE name='العربية'");
        // retreive the data as an array to display it
        $arabic = mysqli_fetch_array($arabic_legend);

        ?>
        <div class="cards-text">
            <th width="20%">
                <font size="4"><a href="view.php?name=<?php echo $arabic['name'] ?>"><?php echo $arabic['name'] ?></a></font>
            </th>
        </div>
    </div>







    <div class="card">
        <div class="photo">
            <img Src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUjRoFKn5ZRYODHtvIL5Y97_0dPzHc34VU1A&usqp=CAU" height="250" width="333" alt="الأساطير اليابانيه" class="card-img">
        </div>
        <?php
        //get data from legend table  where the name of the legend is japaneese
        $japaneese_legend = mysqli_query($connection, "SELECT * FROM legends WHERE name='اليابانية'");
        // retreive the data as an array to display it
        $japan = mysqli_fetch_array($japaneese_legend);

        ?>
        <div class="cards-text">

            <th width="20%">
                <font size="4"><a href="view.php?name=<?php echo $japan['name'] ?>"><?php echo $japan['name'] ?></a></font>
            </th>
        </div>
    </div>
    <div class="card">
        <div class="photo">
            <img Src="https://www.egyres.com/wp-content/uploads/2019/03/-الإغريقية-e1551972795111.jpg" height="250" width="333" alt="الأساطيرلأغريقية" class="card-img">
        </div>
        <?php
        //get data from legend table  where the name of the legend is greek
        $greek_legend = mysqli_query($connection, "SELECT * FROM legends WHERE name='اليونانية'");
        // retreive the data as an array to display it
        $greek = mysqli_fetch_array($greek_legend);

        ?>

        <div class="cards-text">
            <th width="20%">
                <font size="4"><a href="view.php?name=<?php echo $greek['name'] ?>"><?php echo $greek['name'] ?></a></font>
            </th>
        </div>
    </div>
    <div class="card">
        <div class="photo">
            <img Src="https://img.youm7.com/ArticleImgs/2018/1/17/118770-سيشى-الفتاة-الحسناء.jpg" height="250" width="333" alt="الأساطير الصينية" class="card-img">
        </div>
        <?php
        //get data from legend table  where the name of the legend is chineese
        $chineese_legend = mysqli_query($connection, "SELECT * FROM legends WHERE name='الصينية'");
        // retreive the data as an array to display it
        $chineese = mysqli_fetch_array($chineese_legend);

        ?>
        <div class="cards-text">

            <th width="20%">
                <font size="4"><a href="view.php?name=<?php echo $chineese['name'] ?>"><?php echo $chineese['name'] ?></a></font>
            </th>
        </div>
    </div>
    <div class="card">
        <div class="photo">
            <img Src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Riders_of_the_Sidhe.jpg/450px-Riders_of_the_Sidhe.jpg" height="250" width="333" alt="الأساطير الايرلندية" class="card-img">
        </div>
        <?php
        //get data from legend table  where the name of the legend is irish
        $irish_legend = mysqli_query($connection, "SELECT * FROM legends WHERE name='الايرلنديه'");
        // retreive the data as an array to display it
        $irish = mysqli_fetch_array($irish_legend);

        ?>
        <div class="cards-text">
            <th width="20%">
                <font size="4"><a href="view.php?name=<?php echo $irish['name'] ?>"><?php echo $irish['name'] ?></a></font>
            </th>
        </div>
    </div>
    <div class="card">
        <div class="photo">
            <img Src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvit-wKlr22DXuxBzQZXBNkrLduhbb0G2tqw&usqp=CAU" height="250" width="333" alt="الأساطيرالفرعونية" class="card-img">
        </div>
        <?php
        //get data from legend table  where the name of the legend is Pharaonic
        $pharaonic_legend = mysqli_query($connection, "SELECT * FROM legends WHERE name='الفرعونية'");
        // retreive the data as an array to display it
        $pharaonic = mysqli_fetch_array($pharaonic_legend);

        ?>
        <div class="cards-text">
            <th width="20%">
                <font size="4"><a href="view.php?name=<?php echo $pharaonic['name'] ?>"><?php echo $pharaonic['name'] ?></a></font>
            </th>
        </div>
    </div>
</body>

</html>