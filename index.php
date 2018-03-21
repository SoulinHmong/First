
<!DOCTYPE html>
<html>
<head>
    <title>Soulincase</title>
    <?php
        include("backin/connectdb.inc.php");
    // select info from database table class
    $select = "SELECT * FROM home ORDER BY postid DESC";
    // to connect db and query file from table class 
    $result = mysqli_query($con, $select);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="images/x-icon" href="images/shortcut.gif">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center-xs center-sm center-md center-lg">
                    <a href=""><h1 class="m-web-title">Soulincase</h1></a>
                    <span class="openmenu" onclick="OpenMenu()"><img src="img/emoji/menu.png" class="imgmenu"></span>
                </div>
                <div id="myNav" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 end-xs end-sm end-md end-lg m-sm-none">
                    <nav class="nav-sl-mkd-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="page/activities.php">Activities</a></li>
                            <li><a href="page/chats.php">Chat</a></li>
                            <li><a href="page/class.php">Class</a></li>
                        </ul>
                    </nav>
                    <span class="m-cancel-cross" onclick="CloseMenu()">&times;</span>
                </div>
            </div>
        </div>
    </div>
    <div id="section">
        <div class="container">
            <div class="row">
                <!-- this the the fixed section and hide when the screen is small -->
                <div  id="wrap" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center-xs center-sm center-md center-lg m-sm-none">
                    <div class="stickyfixed">
                        <div class="info">
                            <?php
                            $d = date("w");
                            switch($d) {
                                case "1":
                                echo "Hi, Today is Monday. <br><div class='heart'></div>";
                                break;
                                case "2":
                                echo "Hi, Today is Tuesday. <br><div class='heart'></div>";
                                break;
                                case "3":
                                echo "Hi, Today is Wednesday. <br><div class='heart'></div>";
                                break;
                                case "4":
                                echo "Hi, Today is Thursday. <br><div class='heart'></div>";
                                break;
                                case "5":
                                echo "Hi, Today is Friday. <br><div class='heart'></div>";
                                break;
                                case "6":
                                echo "Hi, Today is Saturday. <br><div class='heart'></div>";
                                break;
                                case "0":
                                echo "Hi, Today Sunday. <br><div class='heart'></div>";
                                break;
                                default:
                                echo "Good morning. <br><div class='heart'></div>";
                            }
                            ?>
                        </div>
                        <div class="info">
                            <p>
                                ສະບາຍດີທຸກຄົນ ດ້ວຍຄວາມຍິນດີທີ່ທຸກຄົນເຂົ້າມາຊົມເວັບໄຊຂອງຫ້ອງ<br>
                                1CW1 ຂອງຫຼຸ້ນນ້ອງ ການພັດທະນາເວັບໄຊ ຂອງຄະນະວິທະຍາສາດ<br>
                                ທຳມະຊາດ, ມາຫາວິທະຍາໄລແຫ່ງ.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a href="backin/postinsert.php">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wrf-plan-post" onclick="document.getElementById('id01').style.display = 'block'">
                                    <span>What's news...?</span>
                                </div> 
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <!-- the class use with the post on activities -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wrf-plan-post m-lg-block center-xs center-sm center-md center-lg">
                            <?php
                            $date = date("w");
                            switch ($date) {
                                case '1':
                                    echo "Hi Monday <br> Greate to see you back this time.";
                                    break;
                                case '2':
                                    echo "Hi Tuesday <br> Greate to see you back this time.";
                                    break;
                                case '3':
                                    echo "Hi Wednesday <br> Greate to see you back this time.";
                                    break;
                                case '4':
                                    echo "Hi Thursday <br> Greate to see you back this time.";
                                    break;
                                case '5':
                                    echo "Hi Friday <br> Greate to see you back this time.";
                                    break;
                                case '6':
                                    echo "Hi Saturday <br> Greate to see you back this time.";
                                    break;
                                case '0':
                                    echo "Hi Sunday <br> Greate to see you back this time.";
                                    break;
                                default:
                                    echo "Good to see you back";
                            }
                            ?>
                            <div>
                                <div class="heart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="postinfo">
                                <!-- this the post that select from database -->
                                <?php
                                while ($row = mysqli_fetch_row($result)) {
                                    ?>
                                    <p style="padding: 10px; background-color: #ffffff;">
                                        <img src="img/emoji/user.png" width="40px"><?php echo $row[1]?> <img src="img/emoji/school.png" width="38px"> <?php echo $row[2]?>.<br>
                                        <span style="font-size: 13px; color: #999; margin-top: -10px;">🕕<?php echo $row[3]?></span><br>
                                        <?php echo $row[4]?>
                                    </p>
                                    <p><?php echo "<img style='width:100%' src='img/upload/$row[5]'>"?></p>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #ffffff; margin-top: -4px">
                                        <a href="backin/update.php?postid=<?php echo $row[0] ?>"><img src="img/emoji/edit.png" width="30px"></a>
                                        <a href="backin/delete.php?postid=<?php echo $row[0] ?>"><img src="img/emoji/trash.png" width="30px"></a>
                                    </div>
                                    <br>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer center-xs center-sm center-md center-lg">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-xs center-sm center-md center-lg">
                                <div class="footer-list">
                                    <ul class="footer-menu">
                                        <li><a href="content/about.php">About</a></li>
                                        <li><a href="content/pravacy.php">Privacy</a></li>
                                        <li><a href="content/contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p>&copy; All right served | Student class 1cw1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script>
        function OpenMenu() {
            document.getElementById("myNav").style.display = "block";
        }
        function CloseMenu() {
            document.getElementById("myNav").style.display = "none";
        }
    </script>
</body>
</html>
