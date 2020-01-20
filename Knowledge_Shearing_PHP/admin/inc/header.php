<?php include '../config.php';?>
<?php include '../Database.php';?>
<?php include '../decorate/format.php';?>
<?php include '../session.php';
session::init();

?>


<?php

$db = new Database();
$fm = new format();
?>




<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

    <!--Fancy Button-->
    <script src="js/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->
    <style type="text/css">
        #tinymce{font-size:15px !important;}
    </style>

</head>


<body>
<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">
            <div class="floatleft logo">
                <img src="img/logo.jpg" alt="Logo" />
            </div>

         <?php
            if(isset($_GET['action']) && $_GET['action'] =="logout"){
                session::destroy();
            }
         ?>


            <div class="floatleft middle">
                <h1>Knowledge Shearing</h1>
            </div>
            <div class="floatright">
                <div class="floatleft">
                    <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">
                        <li>Hello Questioner</li>
                        <li><a href="?action=logout">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="grid_12">
        <ul class="nav main">
            <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>



        </ul>
    </div>
    <div class="clear">
    </div>

