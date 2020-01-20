<?php
session_start();
?>


<?php include 'config.php';?>
<?php include 'Database.php';?>
<?php include 'decorate/format.php';?>

<?php

$db = new Database();
$fm = new format();
?>

<!--

?php include 'session.php';

?>

-->






<!DOCTYPE html>
<html>
<head>
    <title>Knowledge Sharing</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="description" content="It is a website about education">
    <meta name="keywords" content="blog,cms blog">
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect:'random',
                slices:10,
                animSpeed:500,
                pauseTime:5000,
                startSlide:0, //Set starting Slide (0 index)
                directionNav:false,
                directionNavHide:false, //Only show on hover
                controlNav:false, //1,2,3...
                controlNavThumbs:false, //Use thumbnails for Control Nav
                pauseOnHover:true, //Stop animation while hovering
                manualAdvance:false, //Force manual transitions
                captionOpacity:0.8, //Universal caption opacity
                beforeChange: function(){},
                afterChange: function(){},
                slideshowEnd: function(){} //Triggers after all slides have been shown
            });
        });
    </script>
    <!--Fancy Button-->
    <script src="admin/js/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="admin/js/setup.js" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="admin/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="admin/text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <script type="admin/text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->
    <style type="admin/text/css">
        #tinymce{font-size:15px !important;}
    </style>



</head>

<body>
<div class="headersection templete clear">
    <a href="#">
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo"/>
            <h2>Knowledge Sharing</h2>
        </div>
    </a>



    <div class="social clear">
        <div class="icon clear">


            <!--
            ?php
                  $login = session::get("login");
                  if($login==false){ ?>
                      <a href="login.php"><input type="button" value="login" name="login"></a>

                   ?php   } else { ?>
                      <a href="logout.php"><input type="button" value="logout" name="logout"></a>

                ?php      }

            ?>

          -->

            <?php

            if(empty($_POST["login"])){ ?>

            <a href="login.php"><input type="button" value="login" name="login"></a>

            <?php   } else { ?>

            <a href="index.php"><input type="button" value="logout" name="logout"></a>

            <?php      }

            ?>


        </div>

      <!--   <div class="searchbtn clear">
            <form action="" method="post">
                <input type="text" name="keyword" placeholder="Search keyword..."/>
                <input type="submit" name="submit" value="Search"/>
            </form>
        </div>   -->

    </div>
</div>
<div class="navsection templete">
    <ul>
        <li><a id="active" href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>



        <?php
        if(!empty($_POST["logout"])){
            $_SESSION["email"]="";
            session_destroy();
        }
        ?>




        <li><a href="question.php">Ask a Question</a></li>
    </ul>

</div>


